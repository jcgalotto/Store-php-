<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$login = $_POST['login'];
$clave = $_POST['clave'];

require "conexion.php";
$sql = "INSERT INTO usuarios
								(usu_login,
								usu_clave,
								usu_nombre,
								usu_email)
								VALUES
										('".$login."',
										'".$clave."',
										'".$nombre."',
										'".$email."')";
$resultado= mysqli_query($link,$sql) or die(mysqli_error($link));
$chequeo= mysqli_affected_rows($link);
	mysqli_close($link);


	$titulo = "Panel de control - Proyecto integrador";
?>
<?php include "encabezado.php"; ?>
</head>
<body>
	<div id="top"><img src="imagenes/top.png" alt="encabezado" width="980" height="80"></div>
	<div id="nav">
		<?php  include "menu.php"; ?>
	</div>
	<div id="main">
		<h1><?php echo $titulo ; ?></h1>
		<table border="14px" cellspadding="14px"  id="paneles"  >
		<?php  if ($chequeo = 1 ) { ?>
<tr>
	<td colspan="2">El usuario ingreso correctamente</td>

</tr>


<tr>
			<td>Nombre</td>
			<td><?php echo $nombre ?></td>

</tr>

<tr>
		<td>Email:</td>
		<td><?php echo $email; ?></td>
</tr>
<tr>
		<td>login:</td>		
		<td><?php echo $login; ?></td>		
	</tr>

<tr>
		<td>Clave</td>
		<td><?php echo $clave; ?></td>

</tr>
<?php } ?>
<tr>
<td colspan="2"><button> <a href="form-alta-productos.php">Agregar otro usuario</a> </button></td>
<td colspan="2"><button> <a href="index.php">Volver al inicio</a> </button></td>
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>