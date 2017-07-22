<?php
$prd_id = $_GET['prd_id'];
require "conexion.php";

$sql = "SELECT cat_nombre, cat_id FROM categorias"; 
$sqlProductos =	"SELECT prd_nombre, prd_descripcion, prd_precio, cat_id, prd_foto1, prd_id 
																					FROM productos
																					WHERE prd_id=".$prd_id;
	
	$resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
	$resultadoProductos = mysqli_query($link,$sqlProductos) or die(mysqli_error($link));
	// $fila = mysqli_fetch_assoc($resultado);
	$filaProductos = mysqli_fetch_assoc($resultadoProductos);

	mysqli_close($link);
	$titulo = "Formulario de modificiacion de producto";
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
	
		<form action="editar-producto.php" method="post" enctype="multipart/form-data">
			<table id="paneles">
				
      <tr>
            <th>Nombre</th>
             <td class="lista"><textarea name="prd_nombre"><?php echo $filaProductos["prd_nombre"]; ?></textarea></td>
            
             </tr>
      <tr>
            <th>Descripción</th>
            <td class="lista" ><textarea name="prd_descripcion"><?php echo $filaProductos["prd_descripcion"]; ?></textarea></td>
            
            </tr>
      <tr>
            <th>Precio</th>
            <td class="lista"><textarea name="prd_precio"><?php echo $filaProductos["prd_precio"]; ?></textarea></td>
            
            </tr>
       <tr>
			<td>Categoria</td>

					
					<td><select id="cat_id" name="cat_id">
							<?php while($fila = mysqli_fetch_assoc($resultado)){ 

								?>
							<option <?php if ($fila['cat_id'] == $filaProductos['cat_id']) {
								echo "selected";
							
							} ?> value="<?php echo $fila['cat_id'] ?>"><?php echo $fila['cat_nombre']; ?></option>
							<?php }  ?>
							

						</select></td>
					</td>						
				</tr>

       <tr>
            <th>Imagen</th>
            <td class="lista"><img src='imagenes/<?php echo $filaProductos["prd_foto1"]; ?>'></td>
            
            </tr>
            <tr>

					<td>Imagen miniatura</td>
					<td><input type="file" name="prd_foto1"></td>
				</tr>	
				<tr>
					<td>Imagen ampliada</td>
					<td ><input type="file" name="prd_foto2"></td>
				</tr>	
       <tr>
  			<td colspan="2" class="centrar"><input type="hidden" name="prd_id" value="<?php echo $prd_id; ?>"></input>
  			<input type="submit" value="Modificar"></input> </td>
  			</tr>
  					
				
            							
			</table>
		</form>
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>