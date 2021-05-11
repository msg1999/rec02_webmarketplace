<html>
    <body>
        <?php
            if (isset($compras)){
                for ($i=0; $i < count($compras); $i++) { 
                    echo ('</br>Compra del dia: '.$compras[$i]['FECHA_COMPRA'].'</br>');
                    echo ('Producto: '.$compras[$i]['ID_PRODUCTO'].'</br>');
                    echo ('Unidades: '.$compras[$i]['UNIDADES'].'</br>');                    
                }
            }
        ?>
        <p>
            Compras
        </p>
        <form action="controller_compras_cliente.php" method="POST"><!--
            nif
            <select name="nif">
                <?php/*
                    for ($i=0; $i < count($clientes); $i++) { 
                        echo('<option>'.$clientes[$i]['nif'].'</option>');
                    }
*/
                ?>
            </select>-->
            <input type="date" name="fecha_antes">
            <input type="date" name="fecha_despues">

            <input type="submit" name="alta" value="name">
        </form>
    </body>
</html> 