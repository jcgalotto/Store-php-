<?php
$usu_id = $_POST['usu_id'];
$usu_nombre = $_POST['usu_nombre'];
$usu_email = $_POST['usu_email'];
$usu_login = $_POST['usu_login'];
$usu_clave = $_POST['usu_clave'];
require "conexion.php";
$sql = "UPDATE usuarios SET usu_nombre='".$usu_nombre."',
						usu_email='".$usu_email."',
						usu_login='".$usu_login."',
						usu_clave='".$usu_clave."' WHERE usu_id='".$usu_id."'";
$resultado= mysqli_query($link,$sql) or die(mysqli_error($link));
$chequeo= mysqli_affected_rows($link);
	mysqli_close($link);


	$titulo = "Modificacion de datos";
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
	<td colspan="2">Los datos se modificaron correctamente</td>

</tr>


<tr>
			<td>Nombre</td>
			<td><?php echo $usu_nombre ?></td>

</tr>

<tr>
		<td>Email:</td>
		<td><?php echo $usu_email; ?></td>
</tr>
<tr>
		<td>login:</td>		
		<td><?php echo $usu_login; ?></td>		
	</tr>

<tr>
		<td>Clave</td>
		<td><?php echo $usu_clave; ?></td>

</tr>
<?php } ?>
<tr>
<td colspan="2"><button><a href="form-editar-usuarios.php?usu_id=<?php echo $usu_id;?>">Volver a modificar los datos del usuario</a> </button></td>
<td colspan="2"><button> <a href="index.php">Volver al inicio</a> </button></td>
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>