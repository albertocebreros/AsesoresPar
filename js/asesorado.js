$( document ).ready(function() {
    $( "#nombre" ).prop( "disabled", true );
    var parametros = {
        'opc': 'checarasesorado'
    };
    $.ajax(
    {
        url:'php/funciones.php',
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