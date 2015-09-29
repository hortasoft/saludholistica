
$("#medModalUpdate").on('show.bs.modal', function(event) {
	var button = $(event.relatedTarget);
	var id = button.data('medId');
	var med = button.data('med');
	
	var modal = $(this);
	  modal.find('#medtxt').text(med);
	  modal.find('#medId').val(id);
})