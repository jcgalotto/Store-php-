<?php
require "conexion.php";
$sql = "SELECT cat_nombre, cat_id FROM categorias";
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
		<!-- inicio del desarrollo -->
		<form action="resultado.php" method="post">
		<table id="paneles">
			<tr>
				<th colspan="2">
						Ingrese término de búsqueda 
				</th>
			</tr>
			<tr>
				<th>Término</th>
				<td><input type="text" name="termino"></td>
			</tr>
					<th>Categorias</th>
			<td><select id="cat_id" name="cat_id">
					<?php while($fila = mysqli_fetch_assoc($resultado)){ ?>
						<option value="<?php echo $fila['cat_id'] ?>"><?php echo $fila['cat_nombre']; ?></option>
					<?php }  ?>
				</select></td>
			</td>
			</tr>

			<tr>
				<td colspan="2" class="centrar">
					<input type="submit" value="buscar">
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