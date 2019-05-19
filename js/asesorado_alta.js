function altausuarioasesorado()
{

	var parametros = {
		'apellidop':$('#apellidop').val(),
		'apellidom':$('#apellidom').val(),
		'nombre':$('#nombre').val(),
		'usuario': $('#usuario').val(),
		'contrasena': $('#contrasena').val(),
		'telefono':$('#telefono').val(),
		'correo':$('#correo').val()

	};
	$.ajax(
    {
        url:'php/asesorado_alta.php',
        type:'POST',
        dataType:'json',
        data:parametros,
        async:false,

        success:function(resultado)
        {
         		alert(resultado.mensaje);
         		
        },
        error:function(xhr,status,error) 
        {
            
        }
    } );
}