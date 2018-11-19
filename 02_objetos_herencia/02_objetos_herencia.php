<?php

	// Incluimos el archivo con la definición de la Clase usada
	require_once("Usuario.php");

	// Crear un Objeto (una instancia de la Clase):
	$objUsuario = new Usuario();

	$objUsuario->setNombre("MARTINA");
	$objUsuario->setApellidos("MARRERO MEDINA");
	$objUsuario->setNombreUsuario("MMMedina");
	$objUsuario->setPassword("1234");

	echo "Nombre: [".$objUsuario->getNombre()."]<br/>";         // Devuelve: "Nombre: [MARTINA]"
	echo "Apellidos: [".$objUsuario->getApellidos()."]<br/>";   // Devuelve: "Apellidos: [MARRERO MEDINA]"

	echo "Usuario: [".$objUsuario->getNombreUsuario()."]<br/>";	// Devuelve: "Usuario: [MMMedina]"
	echo "Contraseña: [".$objUsuario->getPassword()."]<p/>";   // Devuelve: "Contraseña: [1234]"

	$objUsuario->caminar();
	$objUsuario->detenerse();
	$objUsuario->detenerse();

?>
