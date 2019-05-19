$( document ).ready(function() {
    $( "#nombre" ).prop( "disabled", true );
    var parametros = {
        'opc': 'checarasesorado'
    };
    $.ajax(
    {
        url:'php/asesorado_checar.php',
        type:'POST',
        dataType:'json',
        data:parametros,
        async:false,

        success:function(response)
        {
            var nombre = response.nombre;
            var correo = response.correo;
            var telefono = response.telefono;
            $("#nombre").val(nombre);
            $("#correo").val(correo);
            $("#telefono").val(telefono);
        },
        error:function(xhr,status,error) 
        {
            
        }
    } );
    
    
  });

function actualizarasesorado()
{

    var parametros = {
        'opc': 'modificarasesorado',
        'telefono':$('#telefono').val(),
        'correo':$('#correo').val()
    };
    $.ajax(
    {
        url:'php/asesorado_modificar.php',
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