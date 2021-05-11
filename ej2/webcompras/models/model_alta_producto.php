<?php
    require_once("../db/db.php");

    function alta_producto($cod,$nombre,$precio,$id_categoria) {

        var_dump($precio);
        global $conexion;

        $id_categoria=generar_cod_prod($id_categoria)[0]['id_categoria'];
        var_dump($id_categoria);

        try {
            $obtenerID = $conexion->prepare("INSERT into producto (id_producto,nombre,precio,id_categoria) values ($cod,'$nombre','$precio','$id_categoria')");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function generar_cod(){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT max(id_producto) FROM producto");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function generar_cod_prod($nombre){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT id_categoria FROM categoria where nombre='$nombre'");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function ver_categorias(){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT nombre FROM categoria");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
?>