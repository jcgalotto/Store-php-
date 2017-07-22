<?php
require "conexion.php";
$sql = "SELECT cat_id, cat_nombre FROM categorias";
$resultado= mysqli_query($link,$sql) or die(mysqli_error($link));
$cantidad = mysqli_num_rows($resultado);
mysqli_close($link);

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
    <!-- inicio del desarrollo -->
    <table id="paneles">
        <tr>

            <th>Id</th>
            <th>Categoria</th>
            <th colspan="2"><a href="form-alta-categoria.php"><img src="imgs/agregar.png" alt=""></a></th>

        </tr>
   
        <?php while ($fila= mysqli_fetch_assoc($resultado)) {
            ?>
            <tr>

                <td class="lista"><?php echo $fila["cat_id"]; ?></td>
                <td class="lista"><?php echo $fila["cat_nombre"]; ?></td>
                <td class="lista"><a href="form-editar-categoria.php?cat_id=<?php echo $fila['cat_id']; ?>"><img src="imgs/editar3.png" alt=""></a></td>
                <td class="lista"><a href="form-borrar-categoria.php?cat_id=<?php echo $fila['cat_id']; ?>"><img src="imgs/borrar2.png" alt=""></a></td>
            </tr>
        <?php } ?>

        <tr>
         
        </tr>
    </table>
</div>
<div id="pie">
    <?php  include "pie.php"  ?>
</div>

</body>
</html>