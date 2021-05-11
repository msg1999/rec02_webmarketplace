<?php
    require_once("../db/db.php");

    function clientes(){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT nif FROM cliente");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function compras($antes,$despues,$nif){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT * FROM compra where nif='$nif' and FECHA_COMPRA >='$antes' and FECHA_COMPRA<='$despues'");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function productos(){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT * FROM producto");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function ver_prod($producto){
        global $conexion;

        $producto=explode('#',$producto)[1];

        try {
            $obtenerID = $conexion->prepare("SELECT * FROM almacena where id_producto='$producto'");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

?>