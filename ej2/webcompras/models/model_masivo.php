<?php
    require_once("../db/db.php");

    function alta_producto($cod,$nombre,$precio,$id_categoria) {

        global $conexion;

        $cod=$cod[0]['max(id_producto)']+1;

        $id_categoria=$id_categoria+1;

/*

        if($id_categoria==null){
            alta_categoria(generar_cod_cat(),$id_categoria);
        }
*/
        var_dump($cod);
        var_dump($nombre);
        var_dump($precio);
        var_dump($id_categoria);

        //var_dump(generar_cod_cat());

        alta_categoria(generar_cod_cat()[0]['max(id_categoria)'],$id_categoria);


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

    function generar_cod_cat(){
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