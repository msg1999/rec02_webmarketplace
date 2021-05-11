<?php
    require_once("../db/db.php");

    function ver_producto($producto,$almacen){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT * FROM almacena where id_producto='$producto' and num_almacen='$almacen'");
            $obtenerID->execute();
            if ($obtenerID->fetchAll(PDO::FETCH_ASSOC)==null)
                return 0;
            else
                return 1;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function update_aprov($almacen,$producto,$cantidad) {
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("UPDATE almacena SET cantidad=cantidad+'$cantidad' where num_almacen='$almacen' and id_producto='$producto'");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function alta_aprov($almacen,$producto,$cantidad) {
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("INSERT into almacena (num_almacen,id_producto,cantidad) values ($almacen,$producto,$cantidad)");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function almacenes(){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT * FROM almacen");
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
?>  