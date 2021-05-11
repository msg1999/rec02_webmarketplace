<html>
    <body>
        <?php
            if (isset($producto)){
                echo('Producto: '.$producto[0]['ID_PRODUCTO'].'</br></br>');
                for ($i=0; $i < count($producto); $i++) { 
                    echo ('Almacen: '.$producto[$i]['NUM_ALMACEN'].'</br>');
                    echo ('Cantidad: '.$producto[$i]['CANTIDAD'].'</br></br>');
                }
            }
        ?>
        <p>
            Stock
        </p>
        <form action="controller_stock.php" method="POST">
            <select name="producto">
            <?php
                for ($i=0; $i < count($productos); $i++) { 
                    echo("<option>".$productos[$i]['NOMBRE']."#".$productos[$i]['ID_PRODUCTO']."</option>");
                }
                
            ?>
            </select>Producto<br>


            <input type="submit" name="alta" value="name">
        </form>
    </body>
</html> 