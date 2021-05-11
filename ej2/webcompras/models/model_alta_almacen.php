<?php
    require_once("../db/db.php");

    function alta_categoria($cod,$nombre) {
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("INSERT into almacen (num_almacen,localidad) values ($cod,'$nombre')");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function generar_cod(){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT max(num_almacen) FROM almacen");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
?>