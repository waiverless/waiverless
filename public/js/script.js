  $( document ).ready(function() 
  {
	/* ----------------------------------------------- token pour formulaire ------------------------------------------------- */
	$("#myModal").modal({backdrop: false});
	$.ajaxSetup({
        headers: {'X-CSRF-Token': $('meta[name="_csrf"]').attr('content')}
    });
	
	/* -------------------------------------------------Data table customization ----------------------------------------------- */
	$('.table_filter').DataTable({
		"language": {
				"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
				}
	});
	
  });
  
  
  
  
  