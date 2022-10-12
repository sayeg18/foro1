<?php
include "cone.php";
$nombre=$_POST['usuario'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$insert= "INSERT INTO usuarios(usuario, password,cpassword) VALUES ('$nombre','$password','$cpassword')";
$resultado= mysqli_query($conexion,$insert);
if($resultado){
    echo " <script>alert('Se ha registrado el usuario con exito');
    window.location='/foro1'</script>";
}