		<article id="mensaje">Desarrollo y diseño de sistemas web</article>
		

		<div id="iconos"> 
			<? include('Conexion.php');


				if(isset($_POST['usuario']))
				{
					$usuario=$_POST['usuario'];
				}

				if(isset($_POST['pass']))
				{
					$pass=$_POST['pass'];
					$conectar=new Conexion("System","localhost","root","6374");
					$conectar->Query("call Ingreso('$usuario','$pass',@resultado)");
					$mat=$conectar->Nombre("select @resultado as resultado");
					if($mat['resultado']==1)
					{
						$nombre=$conectar->Nombre("Select Nombre from Propietario where Mail='$usuario'");
						$yo=utf8_decode($nombre['Nombre']);
						echo "<label id='bienvenida'>Bienvenido: $yo</label>";

					}
					else
					{
					echo '<script>alert("Usuario o contraseña incorrectos");</script>';
					echo '<form action="index.php" method="POST">
					<input type="text" name="usuario" placeholder="Usuario" required>
					<input type="password" name="pass" placeholder="Contraseña" required>
					<input type="submit" value="Entrar"><label style="text-decoration:underline;font-size:15px" id="registro">Crear cuenta</label>

					</form>';

					}
				}
				else
				{
					echo '<form action="index.php" method="POST">
					<input type="text" name="usuario" placeholder="Usuario" required>
					<input type="password" name="pass" placeholder="Contraseña" required>
					<input type="submit" value="Entrar"><label style="text-decoration:underline;font-size:15px" id="registro">Crear cuenta</label>

					</form>';


				}

			 ?>
			
			
		</div>
