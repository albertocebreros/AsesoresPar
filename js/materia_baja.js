$( document ).ready(function() {
    recargar();
  });
function recargar(){
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
function BajaMateria(){

    var parametros = {
        'materia':$('#selector').val()
    };
    $.ajax(
    {
        url:'php/materia_baja.php',
        type:'POST',
        dataType:'json',
        data:parametros,
        async:false,

        success:function(resultado)
        {
                
                
        },
        error:function(xhr,status,error) 
        {
            
        }
    } );
    recargar();
}