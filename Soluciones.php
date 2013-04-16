<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>.:: System On Web ::.</title>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
    </script>
 
    
    
	

<script src="js/modernizr-1.0.min.js"></script>
	    <script src="holder.js"></script>
  <link rel="stylesheet" type="text/css"  href="negocio.css" />
 

  <style>

 

  #principal1{
  	
  	background: transparent url(arribag.png) bottom no-repeat;
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader (src='abajog.png',sizingMethod='crop'); /* IE6-8 */
	overflow: hidden;

	width:875px;
	

	-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='abajog.png',sizingMethod='crop')"; /* solo IE8 */
	margin-bottom:20px;
  }

  	 .multiplebgs #principal1 {
			background: url("arribag.png") bottom  no-repeat,
			url("abajog.png") top no-repeat; 
		}


  			#Soluciones .fondo{
			-moz-border-radius: 5px; /* Firefox*/
			-ms-border-radius: 5px; /* IE 8.*/
			-webkit-border-radius: 5px; /* Safari,Chrome.*/
			border-radius: 5px; /* El estándar.*/
		
			background-color: #ffa429;
			color:#fff;
			padding:5px;
}
	.titulo
	{
		border-bottom:none;
		color:#636363;
		text-align:left;
		margin-top:10px;
	}
	#texto
	{
		
		border-radius: 10px;
		behavior: url(PIE.htc);
		border:solid 1px;
		border-color: #b7b7b7;
		color:#636363;
		text-align:justify;
		margin: auto;
		margin-top:30px;
		margin-bottom: 30px;
		padding: 15px;
		overflow: hidden;
		width:780px;


	}
	.lado
	{

		float: right;
		margin-top:-5px;
		width:345px;
		border:solid 2px;
		
	}
	
	.titpe
	{
		color:#636363;

		font-size:16px;
		font-weight:bold;

		text-align:center;

		
	}
	.linea
	{
		width:32.74%;
		display:inline-block;
		color:#636363;
		
	}
	.solo
	{
		width:100%;
		text-align:justify;
		color:#636363;

	}
	ul
	{
		list-style-type: circle;
	}
	.descarga
	{
		text-align:center;
		font-size:18px;
		font-weight:bold;
		padding:10px;
		color:#fff;
		width:500px;
		background-image: url(boton.png);

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

			<section id="texto">
				<p class="titulo">Desarrollo Web</p>
				<article>
				<img src="imagenes/desarrollo.jpg" width="400" height="210">
				
					<p class="lado">En System On Web desarrollamos aplicaciones web a la medida de las necesidades o proyectos de nuestros clientes, procu rando siempre cubrir todas sus necesidades.<br><br>La infinita Gama de posibilidades en Internet, permiten que el mercado para este tipo de aplicaciones web novedosas pueda ser un éxito total. En México se están desarrollando ideas nuevas que en otros países ya son exitosas, incluso la idea o proyecto mas simple con un buen plan de negocios tiene el potencial de convertir en el siguiente boom de internet. </p>
					<p>Haciendo uso de las m&aacute;s nuevas herramientas, desarrollamos y nos adaptamos de acuerdo a tus necesidades y posibilidades, sitios web din&aacute;micos y est&aacute;ticos con potencial para adaptarse a los nuevos dispositivos en uso (tabletas electroicas, smartphones, etc.), asegurando que cada proyecto tenga el impacto deseado.</p>
					

				</article>

		
				<article class="linea">
					<p class="titpe">Diseño y Desarrollo Web</p>
					<ul>
				   <li>Diseños Profesionales</li>
				   <li>Contenidos para tu P&aacute;gina Web</li>
				   <li>Formularios</li>
				   <li>Cat&aacute;logos</li>
				   <li>Imagenes</li>
					</ul>

				</article>

				<article class="linea">
					<p class="titpe">Rediseño de P&aacute;ginas Web.</p>
					<ul>
					   <li>Renovacion de P&aacute;ginas Web</li>
					  <li> Rediseño completo del Sitio</li>
					   <li>Integraci&oacute;n de aplicaciones</li>
					   <li>Estructuracion</li>
					   <li>Ampliaci&oacute;n de sistema</li>
					</ul>

				</article>

				<article class="linea">
					<p class="titpe">Publicidad y Marketing en l&iacute;nea</p>
					<ul>
				   <li>Diseños Profesionales</li>
				   <li>Contenidos para tu P&aacute;gina Web</li>
				   <li>Formularios</li>
				   <li>Cat&aacute;logos</li>
				   <li>Imagenes</li>
					</ul>

				</article>


				<article class="solo">
					<p class="titpe">Desarrollo de Sistemas Web a la Medida</p>
					Desarrollamos e implementamos Comercio Electr&oacute;nico,
				   pedidos en l&iacute;nea,
				   gestiones de usuarios,
				   boletines electr&oacute;nicos,
				   formularios din&aacute;micos,
				   encuestas en l&iacute;nea
				 entre muchos otros.

				</article>

				<article><center><p class="descarga">Registrate y prueba nuestra aplicaci&oacute;n de extravios </p><img src="aplicacion.png" width="200" height="300"></center></article>
			</section>
			
				
				

			

		</section>
	</section>	
 	
 	
<footer>

		<?php include('piecito.php');?>
</footer>	

</body>
</html>