<?php
$cat_id = $_POST['cat_id'];
require "conexion.php";
$sql = "DELETE FROM categorias WHERE cat_id =".$cat_id;
mysqli_query($link,$sql) or die(mysqli_error($link));
$chequeo = mysqli_affected_rows($link);
mysqli_close($link);

	$titulo = "Operacion Exitosa";
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
				<td>La categoria fue eliminada </td>
				

			</tr>

			<tr>
				<td><button ><a href="panel-categorias.php">Volver al panel de categorias</a></button>
				<button ><a href="index.php">Volver al inicio</a></button>

				</td>

			</tr>


		</table>
		
		<?php } ?>
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
<script src="funciones.js"></script>	
</body>
</html>