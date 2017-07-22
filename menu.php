
		<ul>
	        <li><a href="index.php">Inicio</a></li>
	        <li><a href="buscador.php">Buscar</a></li>
	        <li><a href="form-visitas.php">Libro de visitas</a></li>
	        <li><a href="panel-usuarios.php">Admin Usuarios</a></li>
	        <li><a href="panel-productos.php">Admin Productos</a></li>
	        <li><a href="panel-categorias.php">Admin Categorías</a></li>
	        <li><a href="form-contacto.php">Contacto</a></li>
	        


	        <?php 

	 			if (isset($_SESSION['login'])) {
	 				
?>


	        <li><a href="logout.php">Salir</a></li>
	        <?php 

	        		}

	        		else {


	    


	         ?>

	         <li><a href="form-login.php">ingresar</a></li>
	         <?php 
	         	}
	          ?>
    	</ul>