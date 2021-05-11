<?php
    require_once ('../models/model_aprovisionamiento.php');

    $almacenes=almacenes();
    $productos=productos();

    if (isset($_POST['alta'])){

        $almacen=$_POST['almacen'];
        $producto=$_POST['producto'];
        $cantidad=$_POST['cantidad'];

        $almacen=explode('#',$almacen)[1];
        $producto=explode('#',$producto)[1];

        if (ver_producto($producto,$almacen)==0){
            alta_aprov($almacen,$producto,$cantidad);
        }
        else
            update_aprov($almacen,$producto,$cantidad);

        var_dump($almacen);
        var_dump($producto);
        var_dump($cantidad);

        //array_search
    }

    include_once("../views/view_aprovisionamiento.php");

?>