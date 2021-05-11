<?php
    require_once ('../models/model_alta_cliente.php');

    if (isset($_POST['alta'])){
        if(!isset($_POST['nif']))
            echo("Error: Poner NIF");
        else{
            $valor=true;
            $nums=['1','2','3','4','5','6','7','8','9','0'];

            $numeros=substr($_POST['nif'],0,8);
            $letra=substr($_POST['nif'],8,1);

            for ($i=0; $i < strlen($numeros); $i++) {
                if(array_search($numeros[$i],$nums)===false){
                    var_dump($numeros[$i]);
                    $valor=false;
                    var_dump(array_search($numeros[$i],$nums));
                    
                }
                if (strlen($numeros)!=8||strlen($letra)!=1)
                    $valor=false;
            }

            if($valor==false)
                echo("error");
            else {
                $nif=$_POST['nif'];
                $nombre=$_POST['name'];
                $apellido=$_POST['apellido'];
                $cp=$_POST['cp'];
                $direccion=$_POST['direccion'];
                $ciudad=$_POST['ciudad'];

                alta_cliente($nif,$nombre,$apellido,$cp,$direccion,$ciudad);
                echo("Alta OK");
            }
        }
    }

    include_once("../views/view_alta_cliente.php");
?>