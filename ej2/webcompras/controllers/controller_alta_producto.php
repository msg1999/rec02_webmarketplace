<?php
    require_once ('../models/model_alta_producto.php');

    $categorias=ver_categorias();

    if (isset($_POST['alta'])){
        $nombre=$_POST['name'];
        $precio=$_POST['precio'];
        $categoria=$_POST['categoria'];
        $cod=generar_cod()[0]['max(id_producto)']+1;
        if ($cod==null)
            $cod=0;
        alta_producto($cod,$nombre,$precio,$categoria);
    }

    include_once("../views/view_alta_producto.php");

?>