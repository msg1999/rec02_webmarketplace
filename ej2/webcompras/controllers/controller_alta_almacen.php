<?php
    require_once ('../models/model_alta_almacen.php');

    if (isset($_POST['alta'])){
        $nombre=$_POST['name'];
        $cod=generar_cod()[0]['max(num_almacen)']+10;
        if ($cod==null)
            $cod=10;
        alta_categoria($cod,$nombre);
    }

    include_once("../views/view_alta_almacen.php");

?>