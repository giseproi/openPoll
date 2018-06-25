<?php

namespace constructor;

use development\constructor\Lenguaje;

class procesarAjax {

    var $miConfigurador;
    var $lenguaje;
    var $miFormulario;
    var $sql;

    function __construct($lenguaje, $sql) {
        $this->miConfigurador = \Configurador::singleton();

        $this->sql = $sql;

        $opcion = $_REQUEST ['funcion'];
        include ('serviciosMundial.php');
    }

}

$miProcesarAjax = new procesarAjax($this->lenguaje, $this->sql);
?>