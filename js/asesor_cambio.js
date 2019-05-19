$( document ).ready(function() {
    $( "#numerocuenta" ).prop( "disabled", true );
    $( "#nombre" ).prop( "disabled", true );
    var parametros = {
        'opc': 'checarasesor'
    };
    $.ajax(
    {
        url:'php/asesor_checar.php',
        type:'POST',
        dataType:'json',
        data:parametros,
        async:false,

        success:function(response)
        {
            var numerocuenta = response.numerocuenta;
            var nombre = response.nombre;
            var correo = response.correo;
            var telefono = response.telefono;
            $("#numerocuenta").val(numerocuenta);
            $("#nombre").val(nombre);
            $("#correo").val(correo);
            $("#telefono").val(telefono);
        },
        error:function(xhr,status,error) 
        {
            
        }
    } );
  });

function actualizarasesor()
{

    var parametros = {
        'opc': 'modificarasesor',
        'numerocuenta': $('#numerocuenta').val(),
        'telefono':$('#telefono').val(),
        'correo':$('#correo').val()

    };
    $.ajax(
    {
        url:'php/asesor_modificar.php',
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