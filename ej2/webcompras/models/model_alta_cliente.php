<?php
    require_once("../db/db.php");

    function alta_cliente($nif,$nombre,$apellido,$cp,$direccion,$ciudad) {
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("INSERT into cliente (nif,nombre,apellido,cp,direccion,ciudad) values ('$nif','$nombre','$apellido','$cp','$direccion','$ciudad')");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function generar_cod(){ 
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT count(nif) FROM cliente");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

?>