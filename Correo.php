	
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>.:: System On Web ::.</title>

	<!--[if lt IE 10]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	
	<![endif]-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/modernizr-1.0.min.js"></script>
    <script src="holder.js"></script>
    <script src="js/modal.js"></script>
	<script src="registro.js"></script>
    
  	<link rel="stylesheet" type="text/css"  href="negocio.css" />
    <link rel="stylesheet" type="text/css"  href="Contacto.css" />
    <style type="text/css">

    #Contacto .fondo
    {
			-moz-border-radius: 5px; /* Firefox*/
			-ms-border-radius: 5px; /* IE 8.*/
			-webkit-border-radius: 5px; /* Safari,Chrome.*/
			border-radius: 5px; /* El estándar.*/
		
			background-color: #ffa429;
			color:#fff;
			padding:5px;
	}

	#principal1
	  {
	  	
		height:300px;
		text-align:center;
		
	  }
	  #principal1 aside
	  {
	  	margin-top:90px;
	  	font-size:50px;
	  	font-weight:bold;
	  }

	

	  .titulo
	{
		border-bottom:none;
		color:#636363;
		text-align:left;
		margin-top:25px;
		margin-left:15px;
		text-align:center;
	}

    </style>

</head>

<body>


	<header id="cabecera"> 
		
		<?php include('cabecera.php');?>
	</header>

	<section id="separador">
			<?php include('separador.php');?>
	</section>
	

	
	<section id="contenedor">
		<section id="principal1">
				
			<?

					$destinatario = "jesuscervantes82@hotmail.com";
					$asunto = "Comentario SOW";
					$tel=$_POST['tel'];

					if(isset($_POST['empresa']))
						$mensaje="nombre:".$_POST['nombre']."<br>Tel&oacute;fono: $tel<br>e-mail: ".$_POST['mail']."<br>empresa: $_POST['empresa']<br>Tel&eacute;fono: ".$_POST['telefono']."<br>mensaje:".$_POST['mensaje'];
					
					else
						$mensaje="nombre:".$_POST['nombre']."<br>Tel&oacute;fono: $tel<br>e-mail: ".$_POST['mail']."<br>Tel&eacute;fono: ".$_POST['telefono']."<br>mensaje:".$_POST['mensaje'];
					
					$headers = "MIME-Version: 1.0\r\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
					$headers .= "From:".$_POST['nombre']."<".$_POST['mail'].">\r\n";
					$headers .= "Reply-To: ".$_POST['mail']."\r\n";
					$headers .= "Return-path: ".$_POST['mail']."\r\n";

					if(mail($destinatario, $asunto, $mensaje, $headers))
						echo'<aside class="titulo">Gracias por contactarnos!!</aside><p style="font-size:22px;color:#636363;">Uno de nuestros asesores se comunicara contigo a la brevedad</p>';
					else
						echo'<center><p style="color:#fff;font-size:25px">Hubo un error intentalo mas tarde.</p></center>';
		
				?>
						
	

		</section>
	</section>	
 	
 	
<footer>

	<?php include('piecito.php');?>
</footer>	

</body>
</html>



		