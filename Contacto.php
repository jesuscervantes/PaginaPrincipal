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
				
			<section id="contacto">
					<form action="correo.php" id="formu">
				
				Nombre(s):
				
				<input type="text" name="nombre" placeholder="Tu nombre completo"required>
				Telefono:
				<input type="tel" placeholder="Ej. (392)-xx xxxx" required>
				E-mail:
				<input type="email" name="mail" placeholder="Tu e-mail completo" required>
				Empresa:
				<input type="text" name="empresa" placeholder="El nombre de tu empresa (opcional)" >
				Mensaje:
				<textarea name="mensaje" rows="8" id="area" class="area" placeholder="Escribe tu mensaje"required ></textarea>
				<input type="submit" value="Enviar mensaje" />


				</form>
			</section>

			<div id="images">
			<img src="contacto.png" height="260">
			<p>Nuestros clientes son para nosotros lo m&aacute;s importante!</p><p>Regalanos tus comnetarios  o danos a conocer cualquier duda.</p>
			<p>Tus datos ser&aacute; tratados con la mayor confidencialidad y no ser&aacute;n proporcionados a terceros.</p>
			
			<p class="ingreso" id="registro">Registrarse</p>
			</div>

		</section>
	</section>	
 	
 	
<footer>

	<?php include('piecito.php');?>
</footer>	

</body>
</html>