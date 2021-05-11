<html>
    <body>
        <p>
            Aprovisionar
        </p>
        <form action="controller_aprovisionamiento.php" method="POST">
            <select name="almacen">
            <?php
                for ($i=0; $i < count($almacenes); $i++) { 
                    echo("<option>".$almacenes[$i]['LOCALIDAD']."#".$almacenes[$i]['NUM_ALMACEN']."</option>");
                }
            ?>
            </select>ALMACEN<br>
            <select name="producto">
            <?php
                for ($i=0; $i < count($productos); $i++) { 
                    echo("<option>".$productos[$i]['NOMBRE']."#".$productos[$i]['ID_PRODUCTO']."</option>");
                }
            ?>
            </select>PRODUCTOS<br>
            <input type="text" name="cantidad">CANTIDAD</input><br>

            <input type="submit" name="alta" value="name">
        </form>
    </body>
</html>  