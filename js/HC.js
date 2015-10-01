
$("#medModalUpdate").on('show.bs.modal', function(event) {
	var button = $(event.relatedTarget);
	var id = button.data('id');
	var med = button.data('med');
	
	var modal = $(this);
	  modal.find('#medtxtupt').val(med);recModalUpdate
	  modal.find('#medIdupt').val(id);
})


$("#recModalUpdate").on('show.bs.modal', function(event) {
	var button = $(event.relatedTarget);
	var id = button.data('id');
	var red = button.data('rec');
	
	var modal = $(this);
	  modal.find('#rectxtupt').val(red);
	  modal.find('#recIdupt').val(id);
})