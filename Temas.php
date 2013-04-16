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

    #Temas .fondo
    {
			-moz-border-radius: 5px; /* Firefox*/
			-ms-border-radius: 5px; /* IE 8.*/
			-webkit-border-radius: 5px; /* Safari,Chrome.*/
			border-radius: 5px; /* El estándar.*/
		
			background-color: #ffa429;
			color:#fff;
			padding:5px;
	}
	#Contacto .fondo
	{
		background-color: #fff;
		color:#686666;

	}
	#principal1
	  {
	  	
		height:300px;
		
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
				<p class="titulo">Articulos y temas de tu inter&eacute;s </p>
				<br><br>
				<center><img src="letras.png"></center>

		

		</section>
	</section>	
 	
 	
<footer>

	<?php include('piecito.php');?>
</footer>	

</body>
</html>