<?php
require_once "config.php";

        $id=$_POST['id'];
        $username=$_POST['usuario'];
        $nombre=$_POST['nombre'];
        $paterno=$_POST['paterno'];
        $materno=$_POST['materno'];
        $edad=$_POST['edad'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $sql="update usuarios set nombre='$nombre', ap_paterno='$paterno', ap_materno='$materno', edad=$edad,telefono='$telefono', correo='$correo' WHERE idusuarios=$id;";
        if(mysqli_query($link,$sql)){
            header('location:table_user.php');
        }
        else{
            echo "Ocurrio un problema al actualizar";
        }
    mysqli_close($link);
?>