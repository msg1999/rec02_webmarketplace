<html>
    <body>
        <p>
            Alta productos
        </p>
        <form action="controller_compra_productos.php" method="POST">
            <input type="text" name="cantidad">Cantidad</input><br>
            <select name="producto">
                <?php
                    for ($i=0; $i < count($productos); $i++) { 
                        echo('<option>'.$productos[$i]['nombre']."#".$productos[$i]['id_producto'].'</option>');
                    }
                ?>
            </select><!--
            Cantidad
            <select name="cantidad">
                <?php/*
                var_dump($cantidad);
                    for ($i=0; $i < count($cantidad); $i++) { 
                        echo('<option>'.$cantidad[$i].'</option>');
                    }*/
                ?>
            </select>-->
            <input type="submit" name="alta" value="Añadir">
            <input type="submit" name="comprar" value="comprar">

        </form>
    </body>
</html>