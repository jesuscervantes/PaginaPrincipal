$(document).ready(iniciar);

	function iniciar()
	{

		
		  $(document).on('submit','#regis',enviarformulario);

	}

	function enviarformulario(e)
	{
		if(window.event)
			window.event.returnValue=false;
		else
			if(e)
				e.preventDefault();
		cargaRegistro();
	}


	function cargaFormulario()
	{
		

		var json=
		{
			Nombre: $("#nombre").val(),
			mail: $("#mail").val(),
			empresa:$("#empresa").val(),
			pass: $("#password").val()



		};

		var send;
		
			send='Nombre='+json.Nombre+'&mail='+json.mail+'&empresa='+json.empresa+'&pass='+json.pass;
		
			return send;

	}


	var conexion;
	function cargaRegistro()
	{

		if (!Modernizr.inputtypes.tel) 
		{
				if($("#nombre").val()=="")
				{

					alert('Escribe un Nombre válido');

				}

				else
				{
					var exr=new RegExp("[_a-z0-9-]+(.[_a-z0-9-]+)*@([0-9a-z](-?[0-9a-z])*.)+[a-z]{2}([zmuvtg]|fo|me)?");

					if(!exr.test($("#mail").val()))
					{

						alert('Escribe un e-mail válido');
						return false;
					}

					else
						if($("#pass").val()=="")
						{
							alert('No dejes el campo "Contraseña" vacio');
							return false;
						}

						else
						{
							var datos=cargaFormulario();
							conexion=crearAjax();
							conexion.onreadystatechange =procesar;
							conexion.open('POST','registro.php', true);
							conexion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
							conexion.send(cargaFormulario); 
						}

				
				}
			
		}

		else
		{
			
			var datos=cargaFormulario();

			conexion=crearAjax();
			conexion.onreadystatechange =procesar;
			conexion.open('POST','registro.php', true);
			conexion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			conexion.send(datos); 
		} 

	}

	
	

	function procesar()
	{
		var resultado=document.getElementById('regis');;
		if(conexion.readyState==4)
		{
			resultado.innerHTML=conexion.responseText;
		}
		else
		{
			resultado.innerHTML="<center>cargando...</center>";
		}

	}

/* añadir eventos sin jquery
	function addEvento(elemento,nombreE,funcion,captura)
	{
		if (elemento.attachEvent)
	  	{
		    elemento.attachEvent('on'+nombreE,funcion);
		    return true;
	  	}
	  	
	  	else  
	    if (elemento.addEventListener)
	    {
	      elemento.addEventListener(nombreE,funcion,captura);
	      return true;
	    }
	    else
	      return false;
	}
	*/



	function crearAjax()
	{
		var xmlHttp=null;
		  if (window.ActiveXObject) 
		    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		  else 
		    if (window.XMLHttpRequest) 
		      xmlHttp = new XMLHttpRequest();
		  return xmlHttp;
	}