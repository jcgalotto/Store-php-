<?php
	$titulo = "Panel de control - Libro de visitas";
?>
<?php include "encabezado.php" ?>
</head>
<body>
	<div id="top"><img src="imagenes/top.png" alt="encabezado" width="980" height="80"></div>
	<div id="nav">
		<?php  include "menu.php"  ?>
	</div>
	<div id="main">
		
		<h1><?php echo $titulo ; ?></h1>

		<table class="paneles">
			<tr>
				<td class="lista">
		<?php
			$nombre = $_POST["nombre"];
			$comentarios = $_POST["comentarios"];

			$archivo = "libro-visitas.txt";
			$modo = "r";

			$fp = fopen($archivo, $modo);

			$contenido = fread($fp, filesize($archivo));

			fclose($fp);


			$modo = "w";
			$fp = fopen($archivo, $modo);

			$nuevo = $nombre . " " . date("d/m/Y h:i:s") . "<br />\n";
			$nuevo .= $comentarios . "<hr /> \n";

			fwrite($fp, $nuevo . "\n" . $contenido);

			fclose($fp);


			echo ($nuevo . "\n" . $contenido);

		?>
				</td>
			</tr>
		</table>
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>