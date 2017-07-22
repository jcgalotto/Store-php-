<?php
	$titulo = "Producto agregado exitosamente";
$ruta= "imagenes/";
$prd_foto1= "noDisponible1.png";
	if ($_FILES['prd_foto1']['error'] == 0) {

		$prd_foto1 =  $_FILES['prd_foto1']['name'];
		$prd_foto1tmp = $_FILES['prd_foto1']['tmp_name'];

		move_uploaded_file($prd_foto1tmp, $ruta.$prd_foto1);
	}
$prd_foto2= "noDisponible2.png";
	if ($_FILES['prd_foto1']['error'] == 0) {

		$prd_foto2 =  $_FILES['prd_foto2']['name'];
		$prd_foto2tmp = $_FILES['prd_foto2']['tmp_name'];

		move_uploaded_file($prd_foto2tmp, $ruta.$prd_foto2);
	}
$prd_nombre=$_POST['prd_nombre'];
$prd_descripcion=$_POST['prd_descripcion'];
$prd_precio=$_POST['prd_precio'];
$cat_id=$_POST['cat_id'];
$prd_alta= date("Y-m-d");

require "conexion.php";

$sql="INSERT INTO productos
								(prd_nombre, prd_descripcion, prd_precio, cat_id, prd_alta, prd_foto1, prd_foto2)
								VALUES
										('".$prd_nombre."','".$prd_descripcion."',".$prd_precio.",".$cat_id.",'".$prd_alta."','".$prd_foto1."', '".$prd_foto2."')";

$resultado= mysqli_query($link,$sql) or die(mysqli_error($link));
$chequeo= mysqli_affected_rows($link);
	mysqli_close($link);
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

		<?php  if ($chequeo = 1 ) {
			 ?>

	<table border="14px" cellspadding="14px"  id="paneles"  >
<tr>
	<td colspan="2">Se ha agregado el siguiente producto</td>

</tr>

<tr>
			<td>Nombre</td>
			<td><?php echo $prd_nombre ?></td>

</tr>

<tr>
		<td>Descripcion</td>
		<td><?php echo $prd_descripcion; ?></td>
</tr>
<tr>
		<td>Precio</td>		
		<td><?php echo $prd_precio; ?></td>		
	</tr>

<tr>
		<td>Miniatura</td>
		<td><img src="<?php echo $ruta.$prd_foto1; ?>"</td>

</tr>

<tr>
<td colspan="2"><button> <a href="form-alta-productos.php">Agregar más productos</a> </button></td>
<td colspan="2"><button> <a href="index.php">Volver al inicio</a> </button></td>

</tr>





	</table>
		
		<?php } ?>
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>