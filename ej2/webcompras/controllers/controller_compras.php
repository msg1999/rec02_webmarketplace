<?php
    require_once ('../models/model_compras.php');

    $clientes=clientes();

    if (isset($_POST['alta'])){
        $antes=$_POST['fecha_antes'];
        $despues=$_POST['fecha_despues'];
        $nif=$_POST['nif'];
        
        $compras=compras($antes,$despues,$nif);
    }

    include_once("../views/view_compras.php");

?>