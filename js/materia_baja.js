$( document ).ready(function() {
    $.ajax({
        url: 'php/consultar_materias.php',
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
  });
function BajaMateria(){

    var parametros = {
        'materia':$('#selector').val()
    };
    $.ajax(
    {
        url:'php/baja_materia.php',
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
    window.location.reload();
}