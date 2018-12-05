<?php
	// Ejemplo en el que creamos 2 clases. Una clase Libro y otra clase Vehiculo
	// Las dos clases estarán en el mismo fichero. Todo en un fichero php
	// Ejemplo creado por Óscar Abad Folgueira: http://www.dinapyme.com y http://www.oscarabadfolgueira.com

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
	
	//Creación de la clas Vehiculo
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
	
	// Crear una instancia de la clase Libro
	$librophp = new Libro();
	
	// Crear instancia de la clase Vehiculo
	$coche = new Vehiculo();	

	// Mostrar el título y el autor del libro
	echo "El autor del libro <strong>" . $librophp->titulo . "</strong> es <strong>" . $librophp->autor . "</strong>.<br />";
	
	// Mostrar el número de ruedas del coche.
	echo "El coche <strong>" . $coche->marca . "</strong> tiene <strong>" . $coche->ruedas . "</strong> ruedas.<br />";

?>