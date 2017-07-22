<?php
$usu_id = $_POST['usu_id'];
header('refresh 5; url=panel-usuarios.php');
require "conexion.php";
$sql = "DELETE  FROM usuarios WHERE usu_id =".$usu_id;
mysqli_query($link,$sql) or die(mysqli_error($link));
$chequeo = mysqli_affected_rows($link);
mysqli_close($link);

	$titulo = "Operacion realizada";
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

		<?php if ($chequeo = 1) {
			
		?>
		<table border="5px" cellpadding="2px" cellspacing="2px">
			<tr>
				<td>El Usuario fue eliminado </td>
				

			</tr>

			<tr>
				<td><button ><a href="panel-usuarios.php">Volver al panel de usuarios</a></button>
				<button ><a href="index.php">Volver al inicio</a></button>

				</td>

			</tr>


		</table>
	
	<?php } ?>	

		</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>