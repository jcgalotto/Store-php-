<?php
require "autenticar.php";
	$titulo = "Panel del usuario";
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
	<a href="panel-productos.php"><img src="imgs/product.pn"></a>
	<a href="panel-categorias.php"><img src="imgs/product.pn"></a>
	<a href="panel-usuarios.php"><img src="imgs/user.pn"></a>
		
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>