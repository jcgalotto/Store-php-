<?php
$termino = $_POST["termino"];
$cat_id = $_POST["cat_id"];
require "conexion.php";
if($cat_id == 'todas'){
	$sql = "SELECT prd_nombre, prd_descripcion, prd_precio, prd_foto1 FROM productos";
}
else{
	$sql = "SELECT productos.prd_nombre, productos.prd_descripcion, 
	productos.prd_precio, productos.prd_foto1, productos.cat_id, categorias.cat_id, categorias.cat_nombre FROM productos, categorias 
	WHERE productos.prd_nombre LIKE '%".$termino."%' 
	AND categorias.cat_id = productos.cat_id
	AND productos.cat_id = ".$cat_id;
}

$resultado= mysqli_query($link,$sql) or die(mysqli_error($link));

$cantidad = mysqli_num_rows($resultado);

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

		<table id="paneles">
			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Precio</th>
				<th>Imagen</th>

			</tr>

			<?php while ($fila = mysqli_fetch_assoc($resultado)){ ?>
				<tr>

					<td class="lista"><?php echo $fila["prd_nombre"]; ?></td>
					<td class="lista"><?php echo $fila["prd_descripcion"]; ?></td>
					<td class="lista"><?php echo $fila["prd_precio"]; ?></td>
					<td class="lista"><?php echo "<img src='imagenes/",$fila['prd_foto1'],"'>"; ?></td>

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
	
</body>
</html>