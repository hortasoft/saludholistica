 function init() {
 scheduler.config.fix_tab_position = false;
      scheduler.config.xml_date="%Y-%m-%d %H:%i";
      
      
      scheduler.load("data/sched_odonto_con.php");
      scheduler.config.first_hour = 8;
      scheduler.config.last_hour = 20;
      scheduler.config.start_on_monday = true;
      var dp = new dataProcessor("data/sched_odonto_con.php");
      dp.init(scheduler);

      function show_minical(){
          if (scheduler.isCalendarVisible()){
              scheduler.destroyCalendar();
          } else {
              scheduler.renderCalendar({
                  position:"dhx_minical_icon",
                  date:scheduler._date,
                  navigation:true,
                  handler:function(date,calendar){
                      scheduler.setCurrentView(date);
                      scheduler.destroyCalendar()
                  }
              });
          }
      }

      //scheduler.locale.labels.section_text = 'Text';
       
      scheduler.config.lightbox.sections = [
          { name:"Nombre", height:30, map_to:"name", type:"textarea", focus:true },
          { name:"Telefono", height:30, map_to:"phone", type:"textarea"},
          { name:"Descripcion", height:50, map_to:"text", type:"textarea"},
          { name:"time", height:72, type:"time", map_to:"auto"}
      ];

      scheduler.config.event_duration = 20; 
      scheduler.config.auto_end_date = true;

       scheduler.attachEvent("onTemplatesReady", function(){
        scheduler.templates.event_text=function(start,end,event){
          return event.name;
        }
        scheduler.templates.event_bar_text = function(start,end,event){
              return event.name;
        };
        scheduler.templates.agenda_text = function(start,end,ev){
             return ev.name;
        };
      }); 
     scheduler.init('scheduler_here', new Date(),"month");
   }