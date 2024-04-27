<?php
/**
 * Ejemplo de Script para documentación con phpDocumentor.
 * 
 * Este script contiene funciones para demostrar cómo documentar código PHP 
 * que será luego procesado por phpDocumentor para generar documentación automática.
 *
 * @filesource practica-Sanabria.php
 * @author Katherin
 * @version 1.0
 */

/**
 * Calcula la suma de dos números.
 *
 * Esta función toma dos parámetros numéricos y devuelve su suma.
 * Es una demostración de cómo documentar una función que realiza una operación simple.
 *
 * @param float $num1 Primer número a sumar.
 * @param float $num2 Segundo número a sumar.
 * @return float Retorna la suma de los dos números.
 * @author Tu Nombre
 * @version 1.0
 * @internal Esta función es un ejemplo básico y puede ser mejorada con validaciones adicionales.
 */
function sumar($num1, $num2) {
    return $num1 + $num2;
}

/**
 * Multiplica dos números y retorna el resultado.
 *
 * Esta función toma dos parámetros numéricos y devuelve su producto.
 * Aprovecha este bloque para entender cómo se puede expandir la documentación de cada función.
 *
 * @param float $num1 Primer número a multiplicar.
 * @param float $num2 Segundo número a multiplicar.
 * @return float Retorna el producto de los dos números.
 * @author Tu Nombre
 * @version 1.0
 * @internal Usado en cálculos internos y ejemplos.
 */
function multiplicar($num1, $num2) {
    return $num1 * $num2;
}

?>
