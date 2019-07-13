$(document).ready(function(){
  $('#alert').hide();
 $('.eliminar').click(function(e)
	{
		e.preventDefault();
		if (!confirm("Esta seguro de eliminar.? "))
		{
			return false;
		}
		//no se ejecutara luego
		
		var row= $(this).parents('tr');
		var form= $(this).parents('form');
		var url= form.attr('action');
		
		$('#alert').show();



		

    $post(url, form.serialize(),function (result)
    {
    	row.fadeOut();
    	$('#alert').html('se elimino');
    		
    	}).fail(function(){

           	$('#alert').html('algo salio mal');
     });


	});

});

