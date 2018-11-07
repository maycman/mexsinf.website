	<?php
		$userC = $_POST['inputUser']; 
		$passC = $_POST['inputPassword'];
		$band = false;
		//Pedaso de codigo que me dice si tengo las librerias de mysqli
		/*if (!function_exists('mysqli_init') && !extension_loaded('mysqli'))
		{
    		echo ':((  No tenemos mysqli!!!';
		} else
		{
    		echo 'ufff si hay!';
		}*/
		//Atrapamos excepciones para la conexion y uso con mysql a travez de la clase PDO(PHP Data Object)
		try
		{
			$conexion = new PDO('mysql:host=mysql.hostinger.mx;dbname=u492945132_b1','u492945132_user','123456');
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			#echo "vivo conectado <br/>";
			$sql = $conexion->prepare("SELECT user,pass FROM usuario");
			$sql->execute();
			while( $datos = $sql->fetch())
			{
				#echo $datos[0] .'<br />';
				#echo $datos[1] .'<br />';
				if ($datos[0]==$userC && $datos[1]==$passC)
				{
					header('location: https://cpanel.hostinger.mx');
				}
				else
				{
					$band=true;
				}
			}
			if ($band=true)
			{
				echo'<script type="text/javascript"> alert("Contraseña o Usuario Incorrectos, Intente Nuevamente"); window.location="http://mexsinf.cf/index.php?page=signPanel";</script>';
			}
			else
			{
				echo'este punto nunca deberia aparecer';
			}
		}
		catch(PDOException $e)
		{
			echo "algo salio mal ";
		}
	?>