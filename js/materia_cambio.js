$( document ).ready(function() {
    $( "#idmateria" ).prop( "disabled", true );
    option();
    setTimeout(function(){ConsultarMateria()},300) 
  });

function option()
{
    $("#selector").html("");
     $.ajax({
        url: 'php/materias_consultar.php',
        type: 'GET',
        dataType: 'Json',
        success: function(data){
            $(data).each(function(i,v){
                $('#selector').append('<option>'+v.nombre+'</option>');
            });
        },
        error(xhr, status, error){
            console.log(status);
            console.log(error);
        }
    });
}

function ConsultarMateria(){
    var parametros = {
        'materia':$('#selector').val()
    };
    $.ajax(
    {
        url:'php/materia_cambio_consulta.php',
        type:'POST',
        dataType:'json',
        data:parametros,
        async:false,

        success:function(response)
        {
            var idmateria = response.idmateria;
            var nombremateria = response.nombremateria;
            $("#idmateria").val(idmateria);
            $("#nombremateria").val(nombremateria);
            
        },
        error:function(xhr,status,error) 
        {
            
        }
    } );

}
function CambiarNombreMateria(){
    var parametros = {
        'opc': 'modificarmateria',
        'idmateria': $('#idmateria').val(),
        'nombremateria':$('#nombremateria').val()
    };
    $.ajax(
    {
        url:'php/materia_modificar.php',
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
    option();
}