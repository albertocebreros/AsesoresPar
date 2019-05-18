// funcion de conectar usuario para el login
function consultarUsuarios()
{

	var parametros = {
		'opc': 'login',
		'usuario': $('#usuario').val(),
		'contrasena': $('#contrasena').val()
	};
	$.ajax(
    {
        url:'php/funciones.php',
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

// funcion de dar de alta a usuario
function altausuarioasesor()
{

	var parametros = {
		'opc': 'altaasesor',
		'numerocuenta':$('#numerocuenta').val(),
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
        url:'php/funciones.php',
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

// funcion de dar de alta a asesorado
function altausuarioasesorado()
{

	var parametros = {
		'opc': 'altaasesorado',
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
        url:'php/funciones.php',
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
        url:'php/funciones.php',
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
function actualizarasesorado()
{

    var parametros = {
        'opc': 'modificarasesorado',
        'telefono':$('#telefono').val(),
        'correo':$('#correo').val()
    };
    $.ajax(
    {
        url:'php/funciones.php',
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

function AltaMaterias()
{
    
    var parametros = {
        'opc': 'AltaMateria',
        'idMateria':$('#idmateria').val(),
        'NombreMateria':$('#nmateria').val()
    };
    $.ajax(
    {
        url:'php/funciones.php',
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
function BajaMateria(){

    var parametros = {
        'opc': 'BajaMateria',
        'materia':$('#selector').val()
    };
    $.ajax(
    {
        url:'php/funciones.php',
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