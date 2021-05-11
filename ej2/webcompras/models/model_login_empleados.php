<?php
    require_once("../db/db.php");

    function obtenerAcceso($usuario,$contrasena)  {
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT nombre,apellido from empleado where nif='$usuario' and password='$contrasena'");
            $obtenerID->bindParam(":usuario", $usuario);
            $obtenerID->bindParam(":contrasena", $contrasena);
            $obtenerID->execute();

            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }

    }
?>