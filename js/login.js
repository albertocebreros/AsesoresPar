function consultarUsuarios()
{

	var parametros = {
		'opc': 'login',
		'usuario': $('#usuario').val(),
		'contrasena': $('#contrasena').val()
	};
	$.ajax(
    {
        url:'php/login.php',
        type:'POST',
        dataType:'json',
        data:parametros,
        async:false,

        success:function(resultado)
        {
            console.log(resultado);
         	if(resultado.tipo == '3')
         	{
         		alert("haz ingresado administrador");
         		location.href = "administrador.php";
         	}
         	else if(resultado.tipo == '1')
         	{
         		alert("haz ingresado Asesor");
         		location.href ="asesor.php";
         	}else if(resultado.tipo == '2')
         	{
         		alert("haz ingresado Asesorado");
         		location.href ="asesorado.php";
         	}else
         	{
         		alert("El Usuario o contrasena no existe o no se encuentra activo en el catalogo de Usuarios, favor de verificar e intentar de nuevo");
         	}
        },
        error:function(xhr,status,error) 
        {
            
        }
    } );
}