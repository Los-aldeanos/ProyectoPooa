<?php
        require_once "config.php";

        $id=0;
        $username=$_POST['usuario'];
        $sql="select * from usuarios where username='$username'";
        $result=mysqli_query($link,$sql);

        $filas=mysqli_num_rows($result);
        if ($filas==0){
        $nombre=$_POST['nombre'];

        $paterno=$_POST['ap_pat'];
        $materno=$_POST['ap_mat'];
        $edad=$_POST['edad'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['email'];
        $contraseña=$_POST['password'];
        $confirmar=$_POST['requiredconfirm_password'];
        $tipo=$_POST['tipo'];
        echo $id;
        if($contraseña ===$confirmar){
            $sql="insert into usuarios values($id,'$username','$contraseña','$nombre','$paterno','$materno',$edad,'$telefono','$correo',1,$tipo)";
            if(mysqli_query($link,$sql)){
            header('location:table_user.php');
            }
            else{
                echo "Ocurrio un problema al actualizar";
            }
        }
        else{
            header('location:usuarios.php?error=1');
        }
        }
        else{
            header('location:usuarios.php?error=2');   
        }
    mysqli_close($link);
?>