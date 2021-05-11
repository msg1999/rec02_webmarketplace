<?php
    require_once("../db/db.php");

    function alta_categoria($cod,$nombre) {
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("INSERT into categoria (id_categoria,nombre) values ($cod,'$nombre')");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function generar_cod(){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT max(id_categoria) FROM categoria");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
?>