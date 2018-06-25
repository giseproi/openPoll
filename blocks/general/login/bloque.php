<?php
namespace general\login;

if (!isset($GLOBALS ["autorizado"])) {
    include ("../index.php");
    exit();
}
include_once('dependencias.php');

if (!class_exists('\\general\\login')) {

    class Bloque extends \TBloque {

        /**
         * 
         */
        function inicializar() {
            $this->miFuncion = new Entidad ();
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

