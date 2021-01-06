<?php
require_once "config.php";
		$option=$_POST['option'];
		if ($option ==1){
        	$id=$_POST['id'];
        	$sql="delete from usuarios WHERE idusuarios=$id;";
    	    if(mysqli_query($link,$sql)){
	            header('location:table_user.php');
        	}
        	else{
            	echo "No se puede eliminar este usuario ya que contiene citas o registros";
        	}
    	}
    	elseif($option==2){
    	$id=$_POST['idreg'];
        $sql="delete from registros WHERE idRegistros=$id;";
        if(mysqli_query($link,$sql)){
            header('location:table_registros.php');
        }
        else{
            echo "Ocurrio un problema al eliminar registro";
        }
    	}
    mysqli_close($link);
?>