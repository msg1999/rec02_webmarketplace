<?php
    require_once("../db/db.php");

    function comprar($nif,$producto,$fecha,$cantidad) {

        $nif=$nif['nif'];

        
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("INSERT into compra values ('$nif','$producto','$fecha','$cantidad')");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function nif($nombre,$apellido){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT nif FROM cliente where nombre='$nombre' and apellido='$apellido'");
            $obtenerID->execute();
            return $obtenerID->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function cantidad($producto){
        global $conexion;

        $producto=$producto["id_producto"];

        try {
            $obtenerID = $conexion->prepare("SELECT sum(cantidad) FROM almacena where id_producto='$producto'");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function productos(){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT nombre,id_producto FROM producto");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
?>