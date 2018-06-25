<?php

namespace menus\menuSuperior;

if (!isset($GLOBALS ["autorizado"])) {
    include ("../index.php");
    exit();
}
include_once('dependencias.php');

if (!class_exists('\\menus\\menuSuperior\\Bloque')) {

    class Bloque extends \TBloque {

        /**
         * 
         */
        function inicializar() {
            $this->miFuncion = new Funcion ();
            $this->miSql = new Sql ();
            $this->miFrontera = new Frontera ();
            $this->miLenguaje = new Lenguaje ();
            $this->miFormulario = new \FormularioHtml ();
        }

    }

}
$esteBloque = new Bloque($unBloque);
$esteBloque->bloque();
?>