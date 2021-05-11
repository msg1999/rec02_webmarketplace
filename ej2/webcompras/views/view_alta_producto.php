<html>
    <body>
        <p>
            Alta productos
        </p>
        <form action="controller_alta_producto.php" method="POST">
            <input type="text" name="name">Nombre</input><br>
            <input type="text" name="precio">Precio</input><br>
            <select name="categoria">
                <?php
                    for ($i=0; $i < count($categorias); $i++) { 
                        echo('<option>'.$categorias[$i]['nombre'].'</option>');
                    }
                ?>
            </select>

            <input type="submit" name="alta" value="name">
        </form>
    </body>
</html>