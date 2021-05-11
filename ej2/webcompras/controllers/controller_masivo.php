<?php
    require_once ('../models/model_masivo.php');

    //$categorias=ver_categorias();

    if (isset($_POST['file'])){
        $file=explode('#',file_get_contents("../sql/1.txt"));
        var_dump($file);

        $a=0;
        $b=0;
        for ($i=0; $i < count($file); $i++) {
            if ($b>2){
                $moderno[$a]=$new;
                $a++;
                $b=0;
                $new=[];
            }
            $new[$b]=$file[$i];
            $b++;
        }

        for ($i=0; $i < count($moderno); $i++) { 
            $moderno[$i][0];
            alta_producto(generar_cod(),$moderno[$i][1],$moderno[$i][2],$moderno[$i][0]);
        }

        var_dump($moderno);

    }

    include_once("../views/view_masivo.php");

?>