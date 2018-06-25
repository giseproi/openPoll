<?php

namespace general\encabezado\formulario;

if (! isset ( $GLOBALS ["autorizado"] )) {
    include ("../index.php");
    exit ();
}

class BarraNavegacion {
    
    var $miConfigurador;
    var $lenguaje;
    var $miFormulario;
    
    function __construct($lenguaje, $formulario) {
        
        $this->miConfigurador = \Configurador::singleton ();
        
        $this->miConfigurador->fabricaConexiones->setRecursoDB ( 'principal' );
        
        $this->lenguaje = $lenguaje;
        
        $this->miFormulario = $formulario;
    
    }
    
    function html() {
        
        $tab=0;
        
        // ---------------- INICIO CONTROL: NAV --------------------------------------------------------
        unset ( $atributos );
        $esteCampo = 'menuSuperior';
        $atributos ['id'] = $esteCampo;
        $atributos ['nombre'] = $esteCampo;        
        $atributos ['tipo'] = 'nav';
        $atributos ['estilo'] = 'navbar navbar-expand-lg navbar-light bg-light';
        $atributos ['ubicacion'] = 'inicio';
        $tab ++;
        echo $this->miFormulario->tag( $atributos );
        
        //-----------------IMAGEN ------------------------------------------------------
        unset ( $atributos );
        $atributos['imagen']='theme/images/sig3d.png';
        $atributos['estilo']='imagenMenuSuperior navbar-brand';
        $atributos['etiqueta']='';
        $atributos['ancho']='30px';
        echo $this->miFormulario->campoImagen( $atributos );
        
        //-----------------  CONTROL: BOTON -----------------------------------------------------
        $atributos ["id"] = 'colapsador';
        $atributos ["tipo"] = 'boton';
        $atributos ["sinDivision"] = '  ';
        $atributos ["estiloBoton"] = 'navbar-toggler';
        $atributos ["valor"] = '<span class="navbar-toggler-icon"></span>';
        $atributos ["atributos"]=array('data-toggle'=>"collapse", 'data-target'=>"#mini",'aria-controls'=>"navbarSupportedContent",'aria-expanded'=>"false", 'aria-label'=>"Toggle navigation");
        echo $this->miFormulario->campoBoton ( $atributos );
        // ----------------INICIO CONTROL DIV ---------------------------------------------------------
        unset ( $atributos );
        $atributos ["id"] = "mini";
        $atributos ["estilo"] = "collapse navbar-collapse";
        echo $this->miFormulario->division ( "inicio", $atributos );
        
        //Lista no ordenada genérica pues actualmente OpenSARA no soporta listas con contenido diferente a texto
        // ---------------- INICIO CONTROL: UL --------------------------------------------------------
        unset ( $atributos );
        $esteCampo = 'listaItems';
        $atributos ['id'] = $esteCampo;
        $atributos ['nombre'] = $esteCampo;        
        $atributos ['tipo'] = 'ul';
        $atributos ['estilo'] = 'navbar-nav mr-auto';
        $atributos ['ubicacion'] = 'inicio';
        $tab ++;
        echo $this->miFormulario->tag( $atributos );
        
        
        // ---------------- INICIO CONTROL: LI --------------------------------------------------------
        unset ( $atributos );
        $esteCampo = 'item1';
        $atributos ['id'] = $esteCampo;
        $atributos ['nombre'] = $esteCampo;        
        $atributos ['tipo'] = 'li';
        $atributos ['estilo'] = 'nav-item active';
        $atributos ['ubicacion'] = 'inicio';
        $tab ++;
        echo $this->miFormulario->tag( $atributos );
        
        // ---------------- INICIO CONTROL: ENLACE --------------------------------------------------------
        unset ( $atributos );
        $esteCampo = 'itemImportar';
        $atributos ['id'] = $esteCampo;
        $atributos ['nombre'] = $esteCampo;        
        $atributos['enlace']='pagina=perfil';
        $atributos['enlaceCodificar']=true;
        $atributos['tabIndex']=$tab++;;
        $atributos['estilo']='nav-link';
        $atributos['enlaceTexto']='Mi Perfil';
        echo $this->miFormulario->enlace( $atributos );
        // ---------------- FIN CONTROL: ENLACE --------------------------------------------------------
        
        // ---------------- FIN CONTROL: LI --------------------------------------------------------
        unset ( $atributos );
        $atributos ['tipo'] = 'li';
        $atributos ['ubicacion'] = 'final';
        echo $this->miFormulario->tag( $atributos );
        
        // ---------------- INICIO CONTROL: LI --------------------------------------------------------
        unset ( $atributos );
        $esteCampo = 'item1';
        $atributos ['id'] = $esteCampo;
        $atributos ['nombre'] = $esteCampo;        
        $atributos ['tipo'] = 'li';
        $atributos ['estilo'] = 'nav-item';
        $atributos ['ubicacion'] = 'inicio';
        $tab ++;
        echo $this->miFormulario->tag( $atributos );
        
        // ---------------- INICIO CONTROL: ENLACE --------------------------------------------------------
        unset ( $atributos );
        $esteCampo = 'itemImportar';
        $atributos ['id'] = $esteCampo;
        $atributos ['nombre'] = $esteCampo;        
        $atributos['enlace']='pagina=estadisticas';
        $atributos['enlaceCodificar']=true;
        $atributos['tabIndex']=$tab++;;
        $atributos['estilo']='nav-link';
        $atributos['enlaceTexto']='Mis Estadísticas';
        echo $this->miFormulario->enlace( $atributos );
        // ---------------- FIN CONTROL: ENLACE --------------------------------------------------------
        
        // ---------------- FIN CONTROL: LI --------------------------------------------------------
        unset ( $atributos );
        $atributos ['tipo'] = 'li';
        $atributos ['ubicacion'] = 'final';
        echo $this->miFormulario->tag( $atributos );
        
        // ---------------- INICIO CONTROL: LI --------------------------------------------------------
        unset ( $atributos );
        $esteCampo = 'item1';
        $atributos ['id'] = $esteCampo;
        $atributos ['nombre'] = $esteCampo;        
        $atributos ['tipo'] = 'li';
        $atributos ['estilo'] = 'nav-item';
        $atributos ['ubicacion'] = 'inicio';
        $tab ++;
        echo $this->miFormulario->tag( $atributos );
        
        // ---------------- INICIO CONTROL: ENLACE --------------------------------------------------------
        unset ( $atributos );
        $esteCampo = 'itemImportar';
        $atributos ['id'] = $esteCampo;
        $atributos ['nombre'] = $esteCampo;        
        $atributos['enlace']='pagina=pronosticos';
        $atributos['enlaceCodificar']=true;
        $atributos['tabIndex']=$tab++;;
        $atributos['estilo']='nav-link';
        $atributos['enlaceTexto']='Mis Pronósticos';
        echo $this->miFormulario->enlace( $atributos );
        // ---------------- FIN CONTROL: ENLACE --------------------------------------------------------
        
        // ---------------- FIN CONTROL: LI --------------------------------------------------------
        unset ( $atributos );
        $atributos ['tipo'] = 'li';
        $atributos ['ubicacion'] = 'final';
        echo $this->miFormulario->tag( $atributos );
        
        
        // ---------------- FIN CONTROL: UL --------------------------------------------------------
        unset ( $atributos );
        $atributos ['tipo'] = 'ul';
        $atributos ['ubicacion'] = 'final';
        echo $this->miFormulario->tag( $atributos );
        
        // ----------------FIN CONTROL DIV ---------------------------------------------------------
        unset ( $atributos );
        echo $this->miFormulario->division ( "fin");
        
        
        
        
        // ---------------- FIN CONTROL: NAV --------------------------------------------------------
        unset ( $atributos );
        $atributos ['tipo'] = 'nav';
        $atributos ['ubicacion'] = 'final';
        echo $this->miFormulario->tag( $atributos );
    }

}

$miFormulario = new BarraNavegacion ( $this->lenguaje, $this->miFormulario );

$miFormulario->html ();

?>