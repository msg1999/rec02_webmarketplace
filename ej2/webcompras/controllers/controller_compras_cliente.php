<?php
    session_start();


    require_once ('../models/model_compras_cliente.php');
    $_SESSION['nif']=nif($_SESSION['nombre'],$_SESSION['apellido'])['nif'];

    if (isset($_POST['alta'])){
        $antes=$_POST['fecha_antes'];
        $despues=$_POST['fecha_despues'];
        //$nif=$_POST['nif'];
        
        $compras=compras($antes,$despues);
    }

    include_once("../views/view_compras_cliente.php"); 

?>