	<?php
		$user = $_POST['inputUser']; 
		$pass = $_POST['inputPassword']; 
		$chec = $_POST['hoyo'];  

		//codigo basura posible a reimplementar
		/*if($user=="sistemas" and $pass=="pruebas")
		{
			header('location: https://cpanel.hostinger.mx');
		}*/


		//Pedaso de codigo que me dice si tengo las librerias de mysqli
		/*if (!function_exists('mysqli_init') && !extension_loaded('mysqli'))
		{
    		echo ':((  No tenemos mysqli!!!';
		} else
		{
    		echo 'ufff si hay!';
		}*/
		try
		{
			$conexion = new PDO('mysql:host=mysql.hostinger.mx;dbname=u492945132_b1','u492945132_user','123456');
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "conexion sucess a huevo";
			$sql = $conexion->prepare("INSERT INTO usuario (user, pass) VALUES (:user,:pass)");
			$rows = $sql->execute( array( ':user'   => $user,':pass' => $pass));
			if( $rows == 1 )
			{
				echo 'Inserción correcta';
			}
			else
			{
				echo 'Algo salio mal';
			}
		}
		catch(PDOException $e)
		{
			echo "El error es: ".$e->getMessage();

		}
		header('Location: http://mexsinf.cf');
	?>