<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>.:: System On Web ::.</title>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
	<link href="css/highlight.black.css" type="text/css" media="all" rel="stylesheet" />
	<link href="css/sexy-bookmarks-style.css" type="text/css" media="all" rel="stylesheet" />
	<link href="css/index.css" type="text/css" media="all" rel="stylesheet" />
	<script src="js/modernizr-1.0.min.js"></script>
	<script src="holder.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.animate-colors-min.js"></script>
	<script src="js/jquery.skitter.min.js"></script>
	<script src="js/highlight.js"></script>
	<script src="js/sexy-bookmarks-public.js"></script>
	<script src="js/modal.js"></script>
	<script src="registro.js"></script>
	
	<script>
	$(document).ready(function() {



$('.box_skitter_large').skitter({navigation: true, animation: 'cubeRandom',interval: 5500});
	

		// Highlight
	

	});
	</script>
	<script type="text/javascript" charset="utf-8">
$(function(){
	$('#menu li a').click(function(event){
		var elem = $(this).next();
		if(elem.is('ul')){
			event.preventDefault();
			$('#menu ul:visible').not(elem).slideUp();
			elem.slideToggle();
		}
	});
});
</script>

	
<script src="js/modernizr-1.0.min.js"></script>
  <link rel="stylesheet" type="text/css"  href="negocio.css" />
  <style type="text/css">
  #bienvenida
  {
  	float:right;
  	font-weight:bold;
  }
  #test
  {
  	height:250px;
  	overflow: hidden;
  	
  }
  #contenedorc
  {
  	height:230px;
  	overflow: hidden;
  	padding:5px;
  	margin-top:-10px;


  }
  #clientes li
  {
  	height:230px;
  	margin-top:0px;
  	text-align:justify;
  }

  </style>
  <script type="text/javascript">

  		$(document).ready(function(){

	var tiempo_inicio_anim = 6000;
	var tiempo_entre_img = 9000;
	var tiempo_fade = 3000;
	
	function animacion_simple() {
		
		$("#1").fadeIn(tiempo_fade);

		setTimeout(function() {
			$("#1").fadeOut(tiempo_fade);
			$("#2").fadeIn(tiempo_fade);
		}, tiempo_entre_img);

		setTimeout(function() {
			$("#2").fadeOut(tiempo_fade);
			$("#3").fadeIn(tiempo_fade);
		}, tiempo_entre_img*2);
		
			
			setTimeout(function() {

			$("#3").fadeOut(tiempo_fade);
			animacion_simple();
		}, tiempo_entre_img*3);

		}	


		

			setTimeout(function() {
				animacion_simple();
			}, tiempo_inicio_anim);

			
		});


  </script>



</head>
<body>


	<header id="cabecera" style="height:110px;"> 
		
		<?php include('cabecera.php');?>
	</header>

	<section id="separador">
			<?php include('separador.php');?>
	</section>
	

	
		
			<section class="box_skitter box_skitter_large">


					<ul>
						<li><a href="#cube"><img src="001.jpg" class="cube" /></a></li>
						<li><a href="#cubeRandom"><img src="003.jpg" class="cubeRandom" /></a></li>
						<li><a href="#cubeRandom"><img src="002.jpg" class="cubeRandom" /></a></li>
			
					</ul>
			</section>

			<section id="contenedor">

				<section id="principal">
					

						<article class="art">
						<p class="titulo">Desarrollo y dise&ntilde;o de sistemas web</p>
						
						<center><img src="imagenes/paginas.png" width="400" height="220"></center>
						<p>En System On Web nos especializamos en la creación de sitios web de alta calidad, con un diseño original y bien estructurado desde sus cimientos, haciendo uso de las tecnolog&iacute;as m&aacute;s recientes.</p>
						<p>Ademas de tambien desarrollar aplicaciones que automaticen los procesos y que facilite tu trabajo, tu aplicaci&oacute;n a la medida.</p>

						

						</article>

					<ul id="menu">
							<li><a href="#"><article class="art">
							<p class="subtitulo">Desarrollo Integral</p></a>
						<ul>
							<li><a href="#">
							<p>Nuestros servicios est&aacute;n orientados a satisfacer las amplias necesidades tecnol&oacute;gicas de las PyMES y Micro-Empresarios que est&aacute;n comenzando y necesitan ser orientados en como implementar la mejor tecnolog&iacute;a combinada con un costo bajo de esta sin perder o dejar en segundo plano la calidad de estos.
							</p>
							<p>Brindamos a usted y su empresa lo mejor en Asesorias, Soporte y servicio t&eacute;cnico computacional, mantenciones de equipos computacionales y Diseño Computacional.</p></a></li>
					
						</ul>
						</article>
					</li>



					<li><a href="#"><article class="art">
							<p class="subtitulo">Asesoria profesional</p></a>
						<ul>
							<li><a href="#"><p>En System On Web te atendemos a cualquier duda que tengas y te asesoramos antes y despues de adquirir alguno de nuestros servicios.</p>
							<p> Nuestro personal experimentado te dara siempre la mejor solucion cual sea tu caso.
							Contactanos ahora mismo!. </p>
							</a></li>
					
						</ul>
					</article>
					</li>
					<li><a href="#"><article class="art">
							<p class="subtitulo">Soporte t&eacute;cnico especializado</p></a>
						<ul>
							<li><a href="#">
							<p>Nuestros servicios est&aacute;n orientados a satisfacer las amplias necesidades tecnol&oacute;gicas de las PyMES y Micro-Empresarios que est&aacute;n comenzando y necesitan ser orientados en como implementar la mejor tecnolog&iacute;a combinada con un costo bajo de esta sin perder o dejar en segundo plano la calidad de estos.
							</p>
							<p>Brindamos a usted y su empresa lo mejor en Asesorias, Soporte y servicio t&eacute;cnico computacional, mantenciones de equipos computacionales y Diseño Computacional.</p></a></li>
					
						</ul>
						</article>
					</li>

					</ul>

				</section>	
		


		<aside id="izquierda">
			<div class="cinta">
			<p class="sub">
			Contacto R&aacute;pido
			</p>

			</div>

			<section  class="izquierda" id="form">
			<form action="correo.php" id="formu">
			
			Nombre(s):
			
			<input type="text" name="nombre" placeholder="Tu nombre completo"required>
			Telefono:
			<input type="tel" placeholder="Ej. (392)-xx xxxx (opcional)" required>
			E-mail:
			<input type="email" name="mail" placeholder="Tu e-mail completo" required>
			Mensaje:
			<textarea name="mensaje" rows="5" id="area" class="area" placeholder="Escribe tu mensaje"required ></textarea>
			<input type="submit" value="Enviar mensaje" />


			</form>

				

			</section>
			<br>
			<div class="cinta" >
				<p class="sub">
				Nuestros Clientes
				</p>

			</div>

			<section  class="izquierda" id="test">
				<section id="contenedorc">

					<ul id="clientes">

						<li id="1"><center><img src="clientes/logo.png" width="65" height="65"><br>Restaurant Luminarias</center>
							<p>Somos el Restaurant más emblemático de La Ribera de Chapala,ofrecemos una increible vista y asientos en primera fila para disfrutar de un magnífico atardecer. </p>
						</li>

						<li id="2"><center><img src="clientes/xamay.png" width="130" height="70"><br>Xamay Xtremo</center>
							<p>Ecoparque de deportes extremos, una de las tirolesas mas altas de M&eacute;xico, rapel, senderismo, tiro con arco entre otros.</p>

						</li>
						<li  id="3"><center><img src="clientes/turismo.png" width="100" height="70"><br>Turismo Jamay</center><p>Visita Jamay Jalisco, el municipio m&aacute;s emblem&aacute;tico de la ribera de Chapala, lleno de cultura e historia.</p></li>
					</ul>
				</section>

				</ul>
			</section>
		</aside>

	</section>
 	
 	
<footer>

	<?php include('piecito.php');?>
</footer>	

</body>
</html>