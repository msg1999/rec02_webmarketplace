<html>
    <body>
        <?php
            if (isset($producto)){
                echo('Almacen: '.$producto[0]['NUM_ALMACEN'].'</br></br>');
                for ($i=0; $i < count($producto); $i++) { 
                    echo ('Producto: '.$producto[$i]['ID_PRODUCTO'].'</br>');
                    echo ('Cantidad: '.$producto[$i]['CANTIDAD'].'</br></br>');
                }
            }
        ?>
        <p>
            Stock
        </p>
        <form action="controller_almacenes.php" method="POST">
            <select name="producto">
            <?php
                for ($i=0; $i < count($productos); $i++) { 
                    echo("<option>".$productos[$i]['NUM_ALMACEN']."</option>");
                }
            ?>
            </select>Producto<br>

            <input type="submit" name="alta" value="name">
        </form>
    </body>
</html> 