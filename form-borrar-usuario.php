<?php
$usu_id = $_GET['usu_id'];
require "conexion.php";
$sql = "SELECT usu_clave, usu_email, usu_id, usu_login, usu_nombre  FROM usuarios WHERE usu_id =".$usu_id;
$resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
$fila = mysqli_fetch_assoc($resultado);
mysqli_close($link);

	$titulo = "Eliminar este usuario";
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
	<form action="borrar-usuario.php" method="post" onsubmit="return confirmarBajaU()">
			
			<table>
				<tr>

            <th>Nombre</th>
            <th>ID</th>
            <th>Email</th>
            <th>Login</th>
            <th>Clave</th>
     

       </tr>
   
       
<tr>
 		 <td class="lista"><?php echo $fila["usu_nombre"]; ?></td>
    	 <td class="lista"><?php echo $fila["usu_id"]; ?></td>
  		 <td class="lista"><?php echo $fila["usu_email"]; ?></td>
 		 <td class="lista"><?php echo $fila["usu_login"]; ?></td>
         <td class="lista"><?php echo $fila["usu_clave"]; ?></td>


         </tr>

         <tr>
         	
         	<td colspan="5" class="centrar">
         	<input type="hidden" name="usu_id" value="<?php echo $usu_id; ?>"></input>
         	<input type="submit" value="Eliminar Usuario"></td>

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