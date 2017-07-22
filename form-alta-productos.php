<?php
require "conexion.php";
$sql = "SELECT cat_nombre, cat_id FROM categorias";
	$resultado= mysqli_query($link,$sql) or die(mysqli_error($link));
	$cantidad = mysqli_num_rows($resultado);
	mysqli_close($link);
	$titulo = "Formulario de alta de nuevo producto";
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
		<!-- inicio del desarrollo -->
		<form action="altaproducto.php" method="post" enctype="multipart/form-data">
			<table id="paneles">
				<tr>
					<td>Nombre</td>
					<td><input type="text" name="prd_nombre"></td>
				</tr>
				<tr>
					<td>Descripcion</td>
					<td><textarea name="prd_descripcion" rows="6"></textarea></td>
				</tr>				
				<tr>
					<td>Precio</td>
					<td><input type="float" name="prd_precio"></td>
				</tr>			
				<tr>

					<td>Categoria</td>

					
					<td><select id="cat_id" name="cat_id">
							<?php while($fila = mysqli_fetch_assoc($resultado)){ ?>
							<option value="<?php echo $fila['cat_id'] ?>"><?php echo $fila['cat_nombre']; ?></option>
							<?php }  ?>
						</select></td>
					</td>						
				</tr>
				<tr>

					<td>Imagen miniatura</td>
					<td><input type="file" name="prd_foto1"></td>
				</tr>	
				<tr>
					<td>Imagen ampliada</td>
					<td><input type="file" name="prd_foto2"></td>
				</tr>
				<tr>
					<td colspan="2" class="centrar">
						<input type="submit" value="Agregar producto">
					</td>
				</tr> 									
			</table>
		</form>
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>