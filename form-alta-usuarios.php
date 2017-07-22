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
		<!-- inicio del desarrollo -->
		<form action="alta-usuario.php" method="post">
				<table>
						<tr>
							<td>Nombre:</td>
							<td><input type="text" name="nombre"></td>
						</tr>
						
						<tr>
							<td>Email:</td>
							<td><input type="email" name="email"></td>
						</tr>
						<tr>
							<td>login:</td>
							<td><input type="text" name="login"></td>
						</tr>
						<tr>
							<td>Clave:</td>
							<td><input type="password" name="clave"></td>
						</tr>
						<tr>
							<td colspan="2" class="centrar"><input type="submit" value="Enviar"></td>
						</tr>






				</table>





		</form>
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>