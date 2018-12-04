<?php
	// Ejemplo de creación y uso del constructor con el paso de varios parámetros a la vez.
	// Ejemplo creado por Óscar Abad Folgueira: http://www.dinapyme.com y http://www.oscarabadfolgueira.com

	// Creación de la clase Libro
	class Libro
	{
		// Definición de las propiedades
		var $titulo;
		var $autor;
		var $categoria;
		
		// Método para establecer el título del libro
		function __construct ( $titulo_libro, $autor_libro, $categoria_libro )
		{
			$this->titulo = $titulo_libro;
			$this->autor = $autor_libro;
			$this->categoria = $categoria_libro;
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

		// Método para obtener el título del libro.
		public function obtener_categoria()
		{
			return $this->categoria;
		}
		
	
		
	}
	/*  FUERA DE LA CLASE  */
	
	// Crear objeto para primer libro con paso de los datos del libro como parámetros.
	$libro_phpoo = new Libro( "Guía Práctica de PHP Orientado a Objetos.", "Oscar Abad Folgueira", "Programación PHP" );
	
	// Mostrar los datos del libro en el navegador.
	echo "<strong>Título: </strong>" . $libro_phpoo->obtener_titulo();
	echo "<br />";
	echo "<strong>Autor: </strong>" . $libro_phpoo->obtener_autor();
	echo "<br />";
	echo "<strong>Categoría:  </strong>" . $libro_phpoo->obtener_categoria();

?>