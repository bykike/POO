<?php
	// Tomando el ejemplo anteior (05), ahora incluimos un destructor para hacer limpieza.
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
		
		// Método destructor
		public function __destruct()
		{
			echo "<h1 style='color:red;'>Todo ha sido destruido</h1>";
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