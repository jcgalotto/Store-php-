<?php
	$titulo = "Panel de control - Libro de visitas";
?>
<?php include "encabezado.php"; ?>
</head>
<body>
	<div id="top"><img src="imagenes/top.png" alt="encabezado" width="980" height="80"></div>
	<div id="nav">
		<?php  include "menu.php"; ?>
	</div>
	<div id="main">
		
		<h1><?php echo($titulo); ?></h1>

		<form action="visitas.php" method="post">
			<table width="500" class="paneles">
					<tr>	
						<td class="lista">Nombre:</td> 
						<td class="lista"><input type="text" id="nombre" name="nombre" class="campos" /></td>
					</tr>
					<tr>
						<td class=lista"">Comentarios:</td>
						<td class="lista"><textarea id="comentarios" name="comentarios" rows="8" class="campos"></textarea></td>
			 		</tr>
			 		<tr>
			 			<td colspan="2" align="center" class="lista"><input type="submit" value="Enviar" class="botones" /></td>
			 		</tr>
			 </table>

	</div>
	<div id="pie">
		<?php  include "pie.php"; ?>
	</div>
	
</body>
</html>