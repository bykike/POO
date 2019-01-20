<?php
	// Ejemplo de herencia de clases en PHP OO
	// Creación de la clase 'vehículo' y posteriormente las clases 'coche' y 'camión' con algunas diferencias.
	// Ejemplo creado por Óscar Abad Folgueira: http://www.dinapyme.com y http://www.oscarabadfolgueira.com

	// Creación de la clase vehículo
	class Vehiculo {
		var $marca;  // Marca del vehículo
		var $ruedas; // Número de ruedas del vehículo
		
		// Método constructor para definir los método y parámetros básicos de los vehículos.
		function __construct(){
			
			$this->marca = "Audi";  // Marca por defecto 
			$this->ruedas = 4;   // Número de ruedas por defecto para la clase vehículos
			
		}
		
		// Método para mostrar el número de ruedas del vehículo
		function obtener_numero_ruedas(){
			
			return $this->ruedas;
			
		}
		
		// Método para mostra la marca del vehículo
		function obtener_marca() {
			
			return $this->marca;
		}

	}
	
	// Creación de la clase Coche. Hereda de la clas Vehiculo
	class Coche extends Vehiculo {
		
		// No cambiamos nada en esta clase
	}
	
	class Camion extends Vehiculo {
		
		function __construct() {
			
			// modificaros la marca por defecto y el número de ruedas por defecto
			$this->marca = "Mack";
			$this->ruedas = 8;
			
		}
		
	}
	
	/* Fin de clases */
	
	// Creamos una instancia de las clases Coche y Camion
	$camion1 = new Camion();
	$coche1 = new Coche();
	
	
	// Mostrar la marca y el número de ruedas del objeto camion1
	echo "El camión " . $camion1->obtener_marca() . " tiene " . $camion1->obtener_numero_ruedas() . " ruedas.<br />";
	
	// Mostrar la marca y número de ruedas del objeto coche1
	echo "El coche " . $coche1->obtener_marca() . " tiene " . $coche1->obtener_numero_ruedas() . " ruedas.<br />";
		
?>