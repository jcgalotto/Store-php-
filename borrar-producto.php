<?php
header('refresh 5; url=panel-productos.php');
$prd_id = $_POST['prd_id'];
require "conexion.php";
$sql = "DELETE  FROM productos WHERE prd_id =".$prd_id;
mysqli_query($link,$sql) or die(mysqli_error($link));
$chequeo = mysqli_affected_rows($link);
mysqli_close($link);


	$titulo = "Su producto fue eliminado";
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
			# code...
	 ?>
		<table border="5px" cellpadding="2px" cellspacing="2px">
			<tr>
				<td>El producto fue eliminado </td>
				

			</tr>

			<tr>
				<td><button ><a href="panel-productos.php">Volver al panel de productos</a></button>
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