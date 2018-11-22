<?php

	// Incluimos el archivo con la definición de la Clase de la que heredamos
	require_once("Persona.php");

	class Usuario extends Persona
	{

		// Propiedades
        private $nombreUsuario = null;
        private $password = null;

		// Constructor:
        function Usuario() {
        }

		// Métodos:

        public function getNombreUsuario() {
            return $this->nombreUsuario;
        }

        public function setNombreUsuario( $nombreUsuario ) {
            return $this->nombreUsuario = $nombreUsuario;
        }

        public function getPassword() {
            return $this->password;
        }

        public function setPassword( $password ) {
            return $this->password = $password;
        }

		// Redefinimos este método que existe también en la Clase padre:
        public function detenerse()
		{
			if( $this->caminando == true ) 
			{
				$this->caminando = false;
				echo "El usuario se detiene...<br />";
			}
			else
			{
				echo "El usuario no está caminando...<br />";
			}
        }

	}

?>
