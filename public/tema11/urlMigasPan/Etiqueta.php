<?php

class Etiqueta
{

    private $tag;
    private $contenido;
    private $atributos;


    public function __construct($tag, $contenido = '', $atributos = '')
    {

        $this->tag = $tag;
        $this->contenido = $contenido;
        $this->atributos = $atributos;

    }

    public function mostrar($contenido=null)
    {

        $salida = "<{$this->tag} {$this->atributos}>";

        if (is_null($contenido)) {

            $salida .= $this->contenido;

        } else {

            $salida .= $contenido;

        }

        $salida .= "</{$this->tag}>";

        return $salida;

    }

    


}



?>