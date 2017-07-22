<?php
require "conexion.php";
$sql = "SELECT usu_clave, usu_email, usu_id, usu_login, usu_nombre  FROM usuarios";
$resultado= mysqli_query($link,$sql) or die(mysqli_error($link));
$cantidad = mysqli_num_rows($resultado);
mysqli_close($link);

	$titulo = "Panel de Usuarios";
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
		<table id="paneles">
        <tr>

            <th>Nombre</th>
            <th>ID</th>
            <th>Email</th>
            <th>Login</th>
            <th>Clave</th>
            <th colspan="2"><a href="form-alta-usuarios.php"><img src="imgs/agregar.png" alt=""></a></th>

        </tr>
   
        <?php while ($fila= mysqli_fetch_assoc($resultado)) {
            ?>
            <tr>

                <td class="lista"><?php echo $fila["usu_nombre"]; ?></td>
                <td class="lista"><?php echo $fila["usu_id"]; ?></td>
                <td class="lista"><?php echo $fila["usu_email"]; ?></td>
                <td class="lista"><?php echo $fila["usu_login"]; ?></td>
                <td class="lista"><?php echo $fila["usu_clave"]; ?></td>
                <td class="lista"><a href="form-editar-usuarios.php?usu_id=<?php echo $fila['usu_id'];?>"><img src="imgs/add.png" alt=""></a></td>
                <td class="lista"><a href="form-borrar-usuario.php?usu_id=<?php echo $fila['usu_id'];?>"><img src="imgs/borrar2.png" alt=""></a></td>
               
            </tr>
        <?php } ?>

        <tr>
            <td class="pie" colspan="7">se han encontrado <?php echo $cantidad; ?> registros</td>
        </tr>
    </table>
		
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>