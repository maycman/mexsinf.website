<?php
#echo count($_POST);
$numero = count($_POST);
$tags = array_keys($_POST); // obtiene los nombres de las varibles
$valores = array_values($_POST);// obtiene los valores de las varibles

// crea las variables y les asigna el valor
for($i=0;$i<$numero;$i++)
{ 
	$$tags[$i]=$valores[$i]; 
}

$userC = $valores[0];
$passC = $valores[1];
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
			header('location: http://mexsinf.cf/listadoequipos/index.php?page=carga');
		}
		else
		{
			$band=true;
		}
	}
	if ($band=true)
	{
?>
		<script type="text/javascript">
			$("#passwd").css("display","block");
    		$(window).load(function()
    		{
        		$('#login').modal('show');
    		});
			</script>
<?php
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