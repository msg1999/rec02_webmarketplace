<?php
    require_once("../db/db.php");

    function productos(){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT * FROM almacena");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function ver_prod($producto){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT * FROM almacena where num_almacen='$producto'");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
?>