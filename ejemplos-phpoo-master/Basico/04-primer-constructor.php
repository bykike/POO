<?php
	// Ejemplo de creación y uso del constructor
	// En este caso creamos solo implementamo sun parámetro en la función constructura.
	// Ejemplo creado por Óscar Abad Folgueira: http://www.dinapyme.com y http://www.oscarabadfolgueira.com

	// Creación de la clase Libro
	class Libro
	{
		// Definición de las propiedades
		var $titulo;
		var $autor;
		var $categoria;
		
		// Método para establecer el título del libro
		function __construct ( $titulo_libro )
		{
			$this->titulo = $titulo_libro;
		}
		
		// Método para obtener el título del libro.
		public function obtener_titulo()
		{
			return $this->titulo;
		}

		
	}
	/*  FUERA DE LA CLASE  */
	
	// Crear objeto para primer libro con paso del título del libro como parámetro.
	$libro_phpoo = new Libro( "Guía Práctica de PHP Orientado a Objetos." );
	
	// Mostrar los datos del libro en el navegador.
	echo "<strong>Título: </strong>" . $libro_phpoo->obtener_titulo();

?>