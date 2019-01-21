<?php
	// Cololamos las clases en otro fichero pero en este caso, cada clase en un fichero externo diferente.
	// Incluimos los ficheros de las clases.
	// Ejemplo creado por Óscar Abad Folgueira: http://www.dinapyme.com y http://www.oscarabadfolgueira.com
	
	// Incluir el fichero que contiene la clase Vehiculo: 09-clase-vehiculo.php
	include ( "09-clase-vehiculo.php" );
	
	// Incluir el fichero que contiene la clase Libro: 09-clase-libro.php
	include ( "09-clase-libro.php" );
	
	// Crear una instancia de la clase Libro
	$librophp = new Libro();
	
	// Crear instancia de la clase Vehiculo
	$coche = new Vehiculo();	

	// Mostrar el título y el autor del libro
	echo "El autor del libro <strong>" . $librophp->titulo . "</strong> es <strong>" . $librophp->autor . "</strong>.<br />";
	
	// Mostrar el número de ruedas del coche.
	echo "El coche <strong>" . $coche->marca . "</strong> tiene <strong>" . $coche->ruedas . "</strong> ruedas.<br />";

?>