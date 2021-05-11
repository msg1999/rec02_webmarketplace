<?php
    session_start();
    if (!isset($_SESSION['SHOPPING_CART']))
        $_SESSION['SHOPPING_CART'] = array();

    var_dump($_SESSION);
    require_once ('../models/model_compra_productos.php');

    $productos=productos();
    $product=[];
/*
    for ($i=0; $i < count($productos); $i++) { 
        $numero=(cantidad($productos[$i])[0]['sum(cantidad)']);
        array_push($cantidad,$numero);
    }*/

    if (isset($_POST['alta'])){
        $producto=$_POST['producto'];
        $cantidad=$_POST['cantidad'];

        array_push($product,$producto);
        array_push($product,$cantidad);
        array_push($_SESSION['SHOPPING_CART'],$product);

        var_dump($_SESSION['SHOPPING_CART']);
    }
    if (isset($_POST['comprar'])){
        $_SESSION['nif']=nif($_SESSION['nombre'],$_SESSION['apellido']);

        for ($i=0; $i < count($_SESSION['SHOPPING_CART']); $i++) { 
            $compra=[];
            for ($a=0; $a < count($_SESSION['SHOPPING_CART'][$i]); $a++) { 
                echo($_SESSION['SHOPPING_CART'][$i][$a]);
                array_push($compra,$_SESSION['SHOPPING_CART'][$i][$a]);
            }
            var_dump($compra);
            $compra[0]=explode('#',$compra[0])[1];
            comprar($_SESSION['nif'],$compra[0],date("Y-m-d H:i:s"),$compra[1]);
            
        }

        $_SESSION['SHOPPING_CART']=[];
    }


    include_once("../views/view_compra_productos.php");

?>