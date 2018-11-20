<?php

	class Persona
	{

		// Propiedades
        private $nombre	   = null;
        private $apellidos = null;
        private $sexo	   = null;
		protected $caminando = false;

		// Constructor:
        function Persona() {
        }

		// Métodos:

        function getNombre() {
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

        public function getSexo() {
            return $this->sexo;
        }

        public function setSexo( $sexo ) {
            $this->sexo = $sexo;
        }

        public function caminar() 
		{
			if( $this->caminando == true ) 
			{
				echo "Ya está caminando...<br />";
			}
			else
			{
				$this->caminando = true;
				echo "Comienza a caminar...<br />";
			}
        }

        public function detenerse() 
		{
			if( $this->caminando == true ) 
			{
				$this->caminando = false;
				echo "Se detiene...<br />";
			}
			else
			{
				echo "No está caminando...<br />";
			}

        }

	}

?>

