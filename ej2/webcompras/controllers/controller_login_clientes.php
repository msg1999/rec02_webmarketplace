<?php
    require_once ('../models/model_login_clientes.php');

    session_start();

    if (!isset($_SESSION['nombre'])){
        if (isset($_POST) && !empty($_POST) && !isset($_SESSION['id'])){
            $idUsuario = obtenerAcceso($_POST['usuario'],$_POST['clave']);
            var_dump($_SESSION);

            if ($idUsuario!=null) {
                $_SESSION['nombre']=$idUsuario[0]['nombre'];
                $_SESSION['apellido']=$idUsuario[0]['apellido'];
                header("location: controller_show_client.php");
            }
            else if ($idUsuario == null) {
                echo "Email o contraseña erroneos";
            }
        } 
    }

    else{
        header("location: controller_show_client.php");

    }

    include_once("../views/view_login_empleados.php");

?>