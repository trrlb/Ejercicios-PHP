<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de la compra</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <?php

        include "Producto.php";

        include "Carrito.php";

        $p1 = new Producto("Espuma de afeitar", 3.5);

        $p2 = new Producto('Cereales de bolitas de chocolate', 5.99);

        $p3 = new Producto('Servilletas 20x20', 1.2);


        $carrito = new Carrito();
        $carrito->meter($p1);
        $carrito->meter($p2);
        $carrito->meter($p3);

        $carrito->mostrar();

    ?>

</body>
</html>


