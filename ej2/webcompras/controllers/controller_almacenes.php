<?php
    require_once ('../models/model_almacenes.php');

    $productos=productos();


    if (isset($_POST['alta'])){
        $nombre=$_POST['producto'];

        $producto=ver_prod($nombre);
    }

    include_once("../views/view_almacenes.php");

?>