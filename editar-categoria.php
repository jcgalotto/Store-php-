<?php
$cat_id = $_POST['cat_id'];
$cat_nombre = $_POST['cat_nombre'];

require "conexion.php";
$sql = "UPDATE categorias SET cat_nombre='".$cat_nombre."' WHERE cat_id='".$cat_id."'";
						
mysqli_query($link,$sql) or die(mysqli_error($link));
$chequeo= mysqli_affected_rows($link);
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
				<td>Los datos se modificaron correctamente </td>
				

			</tr>

			<tr>
				<td><button ><<a href="form-editar-categoria.php?cat_id=<?php echo $cat_id; ?>">Volver a editar la categoria</a></button>
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