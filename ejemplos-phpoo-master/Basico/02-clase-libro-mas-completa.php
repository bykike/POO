<?php
	// Continuación del primer ejemplo
	// Creación de una clase sencilla para libros
	// La clase Libro contiene 3 propiedades y 4 métodos. 
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
		
		// Método para establecer el autor del libro
		public function establecer_autor ( $datos )
		{
			$this->autor = $datos;
		}
		
		// Método para establecer la categoría del libro.
		public function establecer_categoria( $datos )
		{
			$this->categoria = $datos;
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
		
		// Método para obtener la categoría del libro.
		public function obtener_categoria()
		{
			return $this->categoria;
		}
		
	}
	
	// Crear objeto para primer libro
	$libro_phpoo = new Libro;
	
	// Estableler los datos del primer libro
	$libro_phpoo->establecer_titulo( "Guía Práctica de PHP Orientado a Objetos." );
	$libro_phpoo->establecer_autor( "Oscar Abad Folgueira." );
	$libro_phpoo->establecer_categoria( "Programación PHP" );
	
	// Mostrar los datos del libro en el navegador.
	echo "<strong>Título: </strong>" . $libro_phpoo->obtener_titulo();
	echo "<br />";
	echo "<strong>Autor: </strong>" . $libro_phpoo->obtener_autor();
	echo "<br />";
	echo "<strong>Categoría:  </strong>" . $libro_phpoo->obtener_categoria();
	
?>