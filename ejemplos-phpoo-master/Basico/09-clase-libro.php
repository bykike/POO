<?
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
?>