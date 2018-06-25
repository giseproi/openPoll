<?php

namespace menus\menuSuperior;

if (! isset ( $GLOBALS ["autorizado"] )) {
    include ("../index.php");
    exit ();
}


class Frontera extends \TFrontera {
    
    function html() {        
        $this->ruta=$this->miConfigurador->getVariableConfiguracion("rutaBloque");
        include_once ($this->ruta . "Frontera/formularios/barraNavegacion.php");        
    }
}
?>
