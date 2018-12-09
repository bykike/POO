<?php
	// Tomando el ejemplo 7, en este ejemplo creamos un fichero php diferente para alojar las clases.
	// Incluimos el fichero de la clase.
	// Ejemplo creado por Óscar Abad Folgueira: http://www.dinapyme.com y http://www.oscarabadfolgueira.com
	
	// Incluir el fichero que contiene las clases: 08-2-fichero-clases.php
	include ( "08-2-fichero-clases.php" );
	
	// Crear una instancia de la clase Libro
	$librophp = new Libro();
	
	// Crear instancia de la clase Vehiculo
	$coche = new Vehiculo();	

	// Mostrar el título y el autor del libro
	echo "El autor del libro <strong>" . $librophp->titulo . "</strong> es <strong>" . $librophp->autor . "</strong>.<br />";
	
	// Mostrar el número de ruedas del coche.
	echo "El coche <strong>" . $coche->marca . "</strong> tiene <strong>" . $coche->ruedas . "</strong> ruedas.<br />";

?>