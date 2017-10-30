<?php

class Persona
{
   // Propiedades
    private $nombre    = null;
    private $apellidos = null;
   // Constantes:
    const PERSONA_HOMBRE = "HOMBRE";
    const PERSONA_MUJER  = "MUJER";
   // Constructor:
    function __construct() {
       echo "<p>En el Constructor de la Clase</p>";
   }
   /*
   // El constructor también puede hacerse así (con el mismo nombre del Clase):
    function Persona() {
       echo "<p>En el Constructor de la Clase</p>";
   }
   */
   // Destructor:
    function __destruct() {
       echo "<p>En el Destructor de la Clase</p>";
   }
   // Métodos:
   public function getNombre() {
       return $this->nombre;
   }
   public function setNombre( $nombre ) {
       $this->nombre = $nombre;
   }
   public function getApellidos() {
       return $this->apellidos;
   }
   public function setApellidos( $apellidos ) {
       $this->apellidos = $apellidos;
   }
}


    // Crear un Objeto (una instancia de la Clase):
    $objPersona = new Persona();
    $objPersona->setNombre("MARTINA");
    $objPersona->setApellidos("MARRERO MEDINA");
    echo "Nombre: [".$objPersona->getNombre()."]<br/>";        // Devuelve: "Nombre: [MARTINA]"
    echo "Apellidos: [".$objPersona->getApellidos()."]<br/>";  // Devuelve: "Apellidos: [MARRERO MEDINA]"
    echo "Sexo: [".Persona::PERSONA_MUJER."]<br/>";            // Devuelve: 2

?>
