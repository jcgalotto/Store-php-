<?php


require "conexion.php";

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

		<form action="alta-categoria.php" method="post">
		<table id="paneles">
			
		<tr>	
		<td class="centrar">Ingrese Categoria</td>
		<td class="centrar"><input type="text" name="cat_nombre"></td>

		</tr>
		<tr>
			<td colspan="2" class="centrar"><input type="submit" name=""></td>

		</tr>

		</table>
			


		</form>
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>