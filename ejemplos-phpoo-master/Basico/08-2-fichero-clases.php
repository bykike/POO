<?php
	
	// Creación de la clase Libro
	class Libro
	{
		// Definición de las propiedades
		var $titulo;
		var $autor;
		var $categoria;
		
		// Método Constructor que establece el título y autor por defecto
		function __construct()
		{
			$this->titulo = "Curso de PHP";
			$this->autor = "Oscar Abad Folgueira";
		}
		
		// Método para obtener el título del libro.
		public function obtener_titulo()
		{
			return $this->titulo;
		}

		// Método para obtener el autor del libro.
		public function obtener_autor()
		{
			return $this->autor;
		}
		
	}
	/*  Fin de la clase Libro  */
	
	//Creación de la clase Vehiculo
	class Vehiculo {
		
		// Propiedades de la clase Vehiculo
		var $marca;
		var $ruedas;
		
		// Constructor de la clase Vehiculo. Establecemos 2 propiedades.
		function __construct(){
			
			$this->marca = "Renault";
			$this->ruedas = 4;
			
		}
		
		// Métodos de las clase Vehiculo 
		
		// Método para obtener la marca del vehiculo.
		function obtener_marca() {
			
			return $this->marca;
			
		}
		
		// Método que obtiene el número de ruedas
		function obtener_numero_ruedas() {
			
			return $this->ruedas;
			
		}

	}
	/*  Fin de la clase Vehiculo  */
	
	/* FIN DE LAS CLASES */
?>