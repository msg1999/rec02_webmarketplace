<?php
    require_once ('../models/model_alta_categoria.php');

    if (isset($_POST['alta'])){
        $nombre=$_POST['name'];

        $cod=generar_cod()[0]['max(id_categoria)']+1;
        if ($cod==null)
            $cod=0;
        alta_categoria($cod,$nombre);
    }

    include_once("../views/view_alta_categoria.php");

?>