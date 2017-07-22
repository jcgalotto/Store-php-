<?php
require "autenticar.php";
require "conexion.php";
$sql = "SELECT prd_nombre,prd_descripcion,prd_precio,prd_foto1, prd_id FROM productos";
$resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
$cantidad = mysqli_num_rows($resultado);
mysqli_close($link);

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
    <table id="paneles">
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th colspan="2"><a href="form-alta-productos.php"><img src="imgs/agregar.png" alt=""></a></th>

        </tr>
        <?php while ($fila= mysqli_fetch_assoc($resultado)) {
            ?>
            <tr>

                <td class="lista"><?php echo $fila["prd_nombre"]; ?></td>
                <td class="lista"><?php echo $fila["prd_descripcion"]; ?></td>
                <td class="lista"><?php echo $fila["prd_precio"]; ?></td>
                <td class="lista"><img src='imagenes/<?php echo $fila["prd_foto1"]; ?>'></td>
                <td class="lista"><a href="form-editar-producto.php?prd_id=<?php echo $fila['prd_id']; ?>"><img src="imgs/add.png" alt=""></a></td>
                <td class="lista"><a href="form-borrar-producto.php?prd_id=<?php echo $fila['prd_id']; ?>"><img src="imgs/borrar2.png" alt=""></a></td>
            </tr>
        <?php } ?>


    e    <tr>
            
        </tr>
    </table>
</div>
<div id="pie">
    <?php  include "pie.php"  ?>
</div>

</body>
</html>