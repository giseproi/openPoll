<?php

namespace development\constructor\formulario;

/**
 * IMPORTANTE: Este formulario está utilizando jquery.
 * Por tanto en el archivo ready.php se declaran algunas funciones js
 * que lo complementan.
 */

class BuscadorPagina {
    
    var $miConfigurador;
    var $lenguaje;
    var $miFormulario;
    
    function __construct($lenguaje, $formulario) {
        
        $this->miConfigurador = \Configurador::singleton ();
        
        $this->miConfigurador->fabricaConexiones->setRecursoDB ( 'principal' );
        
        $this->lenguaje = $lenguaje;
        
        $this->miFormulario = $formulario;
    
    }
    
    function paginaForm() {
        include_once('includes/SelectorPagina.php');
        include_once('includes/divEstructura.php');
    }
    
    function mensaje() {
        
    // Si existe algun tipo de error en el login aparece el siguiente mensaje
        $mensaje = $this->miConfigurador->getVariableConfiguracion ( 'mostrarMensaje' );
        $this->miConfigurador->setVariableConfiguracion ( 'mostrarMensaje', null );
        
        if ($mensaje) {
            $tipoMensaje = $this->miConfigurador->getVariableConfiguracion ( 'tipoMensaje' );
            if ($tipoMensaje == 'json') {
                
                $atributos ['mensaje'] = $mensaje;
                $atributos ['json'] = true;
            } else {
                $atributos ['mensaje'] = $this->lenguaje->getCadena ( $mensaje );
            }
            // ------------------Division para los botones-------------------------
            $atributos ['id'] = 'divMensaje';
            $atributos ['estilo'] = 'marcoBotones';
            echo $this->miFormulario->division ( "inicio", $atributos );
            
            // -------------Control texto-----------------------
            $esteCampo = 'mostrarMensaje';
            $atributos ["tamanno"] = '';
            $atributos ["estilo"] = 'information';
            $atributos ["etiqueta"] = '';
            $atributos ["columnas"] = ''; // El control ocupa 47% del tamaño del formulario
            echo $this->miFormulario->campoMensaje ( $atributos );
            unset ( $atributos );
            
            // ------------------Fin Division para los botones-------------------------
            echo $this->miFormulario->division ( "fin" );
        }
    
    }

}

$miSeleccionador = new BuscadorPagina ( $this->lenguaje, $this->miFormulario );
$miSeleccionador->mensaje();
$miSeleccionador->paginaForm ();


?>