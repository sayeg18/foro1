<?php
include 'cone.php';
$usuarios="SELECT * from usuarios";
?>
<!<!doctype html>
<html lang="es">
    <head>
        <meta charset="UFT-8">
        <title></title>
        <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0,
              maximum-scale=1.0,minimum-scale=1.0">
        <link rel="stylesheet" href="estilo_tabla.css">
    </head>
    <body>
        <div class="container-table">
            <div class="Table__title">lista de usuarios </div>
            <div class="Table__header">usuario</div>
            <div class="Table__header">Nombre</div>
            <div class="Table__header">apellido</div>
            <div class="Table__header">Telefono</div>
            <div class="Table__header">Correo</div>
     <?php  $resultado = mysqli_query($conexion, $usuarios);
     while($row= mysqli_fetch_assoc($resultado)){
     ?>
            <div class="Table__item"><?php echo $row["usuario"]; ?></div>
            <div class="Table__item"><?php echo $row["nombre"]; ?></div>
            <div class="Table__item"><?php echo $row["apellido"]; ?></div>
            <div class="Table__item"><?php echo $row["telefono"]; ?></div>
            <div class="Table__item"><?php echo $row["correo"]; ?></div>
     <?php } mysqli_free_result($resultado)?>
        </div>
    </body>
</html>