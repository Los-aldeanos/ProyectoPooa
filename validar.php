<?php
require_once "config.php";
    
        $option=$_POST['option'];
        if($option ==1){
        $id=$_POST['id'];
        $username=$_POST['usuario'];
        $nombre=$_POST['nombre'];
        $paterno=$_POST['paterno'];
        $materno=$_POST['materno'];
        $edad=$_POST['edad'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $membresia=$_POST['mem'];
        $sql="update usuarios set nombre='$nombre', ap_paterno='$paterno', ap_materno='$materno', edad=$edad,telefono='$telefono', correo='$correo', id_membresias=$membresia  WHERE idusuarios=$id;";
        if(mysqli_query($link,$sql)){
            header('location:table_user.php');
        }
        else{
            echo "Ocurrio un problema al actualizar";
        }}

        elseif($option==2){
            $idreg=0;
            $id=$_POST['iduser'];
            $sql="select *from usuarios where idusuarios=$id";
            $result=mysqli_query($link,$sql);
            $filas=mysqli_num_rows($result);
            if ($filas >0){
                $entrada=$_POST['f_entrada'];
                $salida=$_POST['f_salida'];
                $cita=$_POST['numcita'];
                
                $sql="insert into registros values($idreg,'$entrada','$salida',$cita,$id)";
                echo $sql;
                if(mysqli_query($link,$sql)){
                    header("location:table_registros.php");
                }
                else{
                 echo "Ocurrio un problema al ingresar el registro de entrada";
                }
            }
            else{
                header("location:regent.php");
            }
        }

        elseif($option==3){
        $idreg=0;
        $id=$_POST['iduser'];
        $cita=$_POST['f_cita'];
        
        $sql="insert into citas values($idreg,'$cita',$id)";
        if(mysqli_query($link,$sql)){
            header("location:table_citas.php");
        }
        else{
            echo "Ocurrio un problema al ingresar el registro de citas";
        }
        }
        elseif($option==4){
            $idreg=$_POST['idreg'];
            $id=$_POST['id'];
            $entrada=$_POST['f_entrada'];
            $salida=$_POST['f_salida'];
            $cita=$_POST['cita'];
        $sql="update registros set salida='$salida' where idRegistros=$idreg";
        if(mysqli_query($link,$sql)){
            header("location:table_registros.php");
        }
        else{
            echo "Ocurrio un problema al modificar el registro";
        }
        }
        elseif($option==5){
            $idmem=$_POST['idmem'];
            $nombre=$_POST['nombre'];
            $precio=$_POST['precio'];
            $mes=$_POST['meses'];

        $sql="insert into membresia values($idmem,'$nombre',$precio,$mes)";
        if(mysqli_query($link,$sql)){
            header("location:table_registros.php");
        }
        else{
            echo "Ocurrio un problema al modificar el registro";
        }
        }
    mysqli_close($link);
?>