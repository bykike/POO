<?php

class Caja{
   	var $alto;
   	var $ancho;
   	var $largo;
   	var $contenido;
   	var $color;

function introduce($cosa){
   	$this->contenido = $cosa;
}

function muestra_contenido(){
   	echo $this->contenido;
}
}

  $micaja = new Caja;

  $micaja->introduce("un string (carácter)");
  $micaja->muestra_contenido();


?>
