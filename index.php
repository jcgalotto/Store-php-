<?php
	require "conexion.php";
	$sql = "SELECT prd_nombre,prd_descripcion,prd_precio,prd_foto1, prd_foto2, prd_id FROM productos";
	$resultado= mysqli_query($link,$sql) or die(mysqli_error($link));
	$cantidad = mysqli_num_rows($resultado);
	mysqli_close($link);

	$titulo = "Inicio";
?>
<?php include "encabezado.php"; ?>
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="css/lightbox.css">
</head>
<body>
	<div id="top"><img src="imagenes/top.png" alt="encabezado" width="980" height="80"></div>
	<div id="nav">
		<?php  include "menu.php"; ?>
	</div>
	<div id="main">
		<h1><?php echo $titulo ; ?></h1>
		<!-- inicio del desarrollo -->
		<table id="panel">
		<tr>
			<th>Nombre</th>	
			<th>Descripción</th>	
			<th>Precio</th>	
			<th>Imagen</th>	

					</tr>
					<?php while ($fila= mysqli_fetch_assoc($resultado)) {
					?>
			<tr>

				<td class="lista"><?php echo $fila["prd_nombre"]; ?></td>
				<td class="lista"><?php echo $fila["prd_descripcion"]; ?></td>
				<td class="lista"><?php echo $fila["prd_precio"]; ?></td>
				<td class="lista"><a href="imagenes/<?php echo $fila['prd_foto2']; ?>" data-lightbox="t<?php echo $fila['prd_id']; ?>" data-title="<?php $prd_nombre; ?>"><img src='imagenes/<?php echo $fila["prd_foto1"]; ?>'></a></td>
				
			</tr>
			<?php } ?>
			<tr>
				<td class="pie" colspan="4">se han encontrado <?php echo $cantidad; ?> registros</td>
			</tr>	
	</table>
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/lightbox.js"></script>

</body>
</html>