<?php
require_once "config.php";

        $id=$_POST['id'];
        $sql="delete from usuarios WHERE idusuarios=$id;";
        if(mysqli_query($link,$sql)){
            header('location:table_user.php');
        }
        else{
            echo "Ocurrio un problema al actualizar";
        }
    mysqli_close($link);
?>