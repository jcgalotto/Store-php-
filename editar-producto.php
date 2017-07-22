<?php
//Zeitgeist
$prd_id = $_POST['prd_id'];
$prd_nombre=$_POST['prd_nombre'];
$prd_descripcion=$_POST['prd_descripcion'];
$prd_precio=$_POST['prd_precio'];
$cat_id=$_POST['cat_id'];
$ruta= "imagenes/";
require "conexion.php";

$sqlfoto1= $sqlfoto2 = "";
	if ($_FILES['prd_foto1']['error'] == 0) {

		$prd_foto1 =  $_FILES['prd_foto1']['name'];
		$prd_foto1tmp = $_FILES['prd_foto1']['tmp_name'];

		move_uploaded_file($prd_foto1tmp, $ruta.$prd_foto1);
		$sqlfoto1=", prd_foto1 ='".$prd_foto1."'";
	}

	if ($_FILES['prd_foto1']['error'] == 0) {

		$prd_foto2 =  $_FILES['prd_foto2']['name'];
		$prd_foto2tmp = $_FILES['prd_foto2']['tmp_name'];

		move_uploaded_file($prd_foto2tmp, $ruta.$prd_foto2);
		$sqlfoto2=", prd_foto2 ='".$prd_foto2."'";
	}

$sql = "UPDATE productos 
						SET 
							prd_nombre='".$prd_nombre."',
							prd_precio='".$prd_precio."',
							cat_id='".$cat_id."',
							prd_descripcion='".$prd_descripcion."'";
			$sql.=$sqlfoto1;
			$sql.=$sqlfoto2;
			$sql.=" WHERE prd_id='".$prd_id."'";

	
	$resultado = mysqli_query($link,$sql) or die(mysqli_error($link));

		
	$chequeo = mysqli_affected_rows($link);
	mysqli_close($link);

	$titulo = "Modificacion de productos";
	$prd_foto1 = $_FILES['prd_foto1'];
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
	<td colspan="2">Se ha modificado el siguiente producto</td>

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
<td colspan="2"><button><a href="form-editar-producto.php?prd_id=<?php echo $prd_id ?>">Volver a editar el producto </a> </button></td>
<td colspan="2"><button> <a href="panel-productos.php">Volver al panel de productos</a> </button></td>


</tr>
	<?php } ?>
	</table>	
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>