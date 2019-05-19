function AltaMaterias()
{
    
    var parametros = {
        'idMateria':$('#idmateria').val(),
        'NombreMateria':$('#nmateria').val()
    };
    $.ajax(
    {
        url:'php/materia_alta.php',
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
    $("#idmateria").val("");
    $("#nmateria").val("");
}
function Validacion(){
        var codigo = $('#idmateria').val();
        
        $('#idmateria').val(codigo.slice(0, 6));
}