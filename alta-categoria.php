<?php
$cat_nombre= $_POST['cat_nombre'];

require "conexion.php";
$sql = "INSERT INTO categorias (cat_nombre) VALUE ('".$cat_nombre."')";
mysqli_query($link,$sql) or die(mysqli_error($link));
$chequeo= mysqli_affected_rows($link);

$titulo = "Panel de categorias";
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

		<?php if ($chequeo = 1 ) {	?>
			<table border="1px" cellspacing="1px">
				
				<tr>
					<td colspan="2">La siguiente categoria se ingreso correctamente</td>

				</tr>
				<tr>
					<td>Categoria:</td>
					<td><?php echo $cat_id; ?></td>

				</tr>
			<?php	} ?>
		
		<tr>
		<td><a href="panel-categorias.php"><button>Cargar más categorías</button></a></td>
		<td><a href="index.php"><button>Volver al inicio</button></a></td>
		</tr>

		</table>
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>