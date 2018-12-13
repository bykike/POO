<?
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
?>