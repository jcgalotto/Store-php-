<?php

$cat_id = $_GET['cat_id'];
require "conexion.php";
$sql = "SELECT cat_id, cat_nombre FROM categorias WHERE cat_id =".$cat_id;
$sql2= 'SELECT cat_id from  productos WHERE cat_id='.$cat_id;
$resultado= mysqli_query($link,$sql) or die(mysqli_error($link));
$resultado2= mysqli_query($link,$sql2) or die(mysqli_error($link));
$cantidad = mysqli_num_rows($resultado2);
$fila = mysqli_fetch_assoc($resultado);
$fila2 = mysqli_fetch_assoc($resultado2);

if ($cantidad >= 1) {
echo "<script>alert('no puede eliminar una categoria mientras queden productos en ella.')</script>",$redireccionCat = header("refresh:0; url=panel-categorias.php");
}


mysqli_close($link);


?>
<?php 

	$titulo = "Categoria a eliminar";


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

<form  action="borrar-categoria.php" method="post" onsubmit="return confirmarBajaCat()">

<table>
<tr>
	<th>Id</th>
    <th>Categoria</th>

</tr>		
<tr>

		<td class="lista"><?php echo $fila["cat_id"]; ?></td>
         <td class="lista"><?php echo $fila["cat_nombre"]; ?></td>

           </tr>

         <tr>
         	
         	<td colspan="2" class="centrar">
         	<input type="hidden" name="cat_id" value="<?php echo $cat_id; ?>"></input>
         	<input type="submit" value="Eliminar Categoria"></td>

         </tr>


</table>





</form>
		
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
<script src="funciones.js"></script>	
</body>
</html>