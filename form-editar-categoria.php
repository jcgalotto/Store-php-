<?php
$cat_id = $_GET['cat_id'];
require "conexion.php";
$sql =	"SELECT cat_id, cat_nombre 
									FROM categorias 
									WHERE cat_id=".$cat_id;
$resultado= mysqli_query($link,$sql) or die(mysqli_error($link));
$fila = mysqli_fetch_assoc($resultado);
mysqli_close($link);


$titulo = "Modificar categoria";
?>
<?php include "encabezado.php"; ?>
</head>
<body>
	<div id="top"><img src="imagenes/top.png" alt="encabepzado" width="980" height="80"></div>
	<div id="nav">
		<?php  include "menu.php"; ?>
	</div>
	<div id="main">
		<h1><?php echo $titulo ; ?></h1>

		<form action="editar-categoria.php" method="post">
		<table>
<tr>
	<th>Id</th>
    <th>Categoria</th>

</tr>		
<tr>

		<td class="lista"><?php echo $fila["cat_id"]; ?></td>
         <td class="lista"><textarea name="cat_nombre"><?php echo $fila["cat_nombre"]; ?></textarea></td>

           </tr>

         <tr>
         	
         	<td colspan="2" class="centrar">
         	<input type="hidden" name="cat_id" value="<?php echo $cat_id; ?>"></input>
         	<input type="submit" value="Modificar Categoria"></td>

         </tr>


</table>




		</form>
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>