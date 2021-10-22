<?php

class Carrito
{

    private $productos  = [];

    public function meter(ienCarrito $elemento) 
    {

        $this->productos[] = $elemento;

    }

    public function mostrar()
    {

        $total = 0;
        $totalIva = 0;

        echo '<div class="carrito">';

        foreach ($this->productos as $key => $prod) {

            echo '<article class="lineacarrito">';

            echo $prod->mostrar(); //Con esto mostramos los productos en el carrito

            $enlaceMasUnidad = "?accion=masunidad&indice=$key";
            $enlaceMenosUnidad = "?accion=menosunidad&indice=$key";
            $enlaceEliminar = "?accion=eliminar&indice=$key";

            if ($prod->permiteUnidades()) {

                echo "<a href=\"$enlaceMenosUnidad\"> - </a> / <a href=\"$enlaceMasUnidad\"> + </a>";

            }

            echo "<a class=\"enlaceEliminar\" href=\"$enlaceEliminar\"> Eliminar </a>";

            echo '</article>';

            $total += $prod->precio();

            $totalIva += $prod->precioIva();
            
        }

        echo '<div class="totalcarrito">TOTAL: ' . $total . ' (' . $totalIva . ' IVA Incluido</div>';

        echo '</div>';
    }

    public function quitar($indice)
    {

        unset($this->productos[$indice]);

    }

    public function masUnidad($indice)
    {

        $this->productos[$indice]->masUnidad();

    }

    public function menosUnidad($indice)
    {

        $this->productos[$indice]->menosUnidad();

    }

}

?>