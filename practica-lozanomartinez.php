<?php
	/**
     	  * Función que realiza suma, resta o multiplicación, según indiquemos por parámetro, dos números introducidos por parámetro y devuelve su resultado
	  * @param double $num1 primer número
	  * @param double $num2 segundo número
	  * @param string $operacion operación a realizar
	  * @return double $resultado devuelve el resultado de las operaciones
	  * @internal
	  * @author Adrián Lozano Martínez
	  * @version abril 2022
          * Modificación del fichero
	*/
function operaciones($num1, $num2, $operacion) {
  $resultado = 0;
  if ($operacion == "Suma") {
    $resultado = $num1 + $num2;
  } else if ($operacion == "Resta") {
       $resultado = $num1 - $num2;
  } else if ($operacion == "Multiplicacion") {
    $resultado = $num1 * $num2;
  }
  return $resultado;
}

	/**
     	  * Función que devuelve el cuadrado de un numero introducido como parámetro.
     	  * @param int $numero parámetro introducido
     	  * @return double cuadrado del número
     	  * @author Adrián Lozano Martínez
     	  * @version abril 2022
   	*/
function cuadrado($num) {
  return $num * $num;
}

?>
