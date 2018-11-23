<?php
	// Primer ejemplo de creación de clases en PHP OO
	// Creación de una clase sencilla para libros
	// La clase Libro contiene 3 propiedades y 2 métodos. En este ejemplo añadimos un libro y mostramos su título en el navegador.
	// Ejemplo creado por Óscar Abad Folgueira: http://www.dinapyme.com y http://www.oscarabadfolgueira.com

	// Creación de la clase Libro
	class Libro
	{
		// Definición de las propiedades
		var $titulo;
		var $autor;
		var $categoria;
		
		// Método para establecer el título del libro
		
		public function establecer_titulo( $datos)
		{
			$this->titulo = $datos;
		}
		
		// Método para mostrar el título del libro.
		public function obtener_titulo()
		{
			return $this->titulo;
		}
	}
	
	// Crear objeto para primer libro
	$libro_phpoo = new Libro;
	
	// Estableler el título del primer libro
	$libro_phpoo->establecer_titulo( "Curso de PHP Orientado a Objetos" );
	
	// Mostrar el título del libro en el navegador
	echo $libro_phpoo->obtener_titulo();
	
?>