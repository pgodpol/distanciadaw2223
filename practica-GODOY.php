<?php

/**
 * Función para realizar la suma de dos números dados.
 *
 * @param int $a El primer número para sumar.
 * @param int $b El segundo número para sumar.
 *
 * @return int El resultado de la suma.
 *
 * @author Pedro Godoy Polaina
 * @version 1.0
 * @since 24/05/2023
 */
function suma($a, $b)
{
    return $a + $b;
}

/**
 * Función para realizar la resta de dos números dados.
 *
 * @param int $a El número al que se le va a restar.
 * @param int $b El número que se va a restar.
 *
 * @return int El resultado de la resta.
 *
 * @author Pedro Godoy Polaina
 * @version 1.0
 * @since 24/05/2023
 */
function resta($a, $b)
{
    return $a - $b;
}



/**
 * Comprobación de envío de formulario y ejecución de la operación correspondiente.
 *
 * @return void
 *
 * @author Pedro Godoy Polaina
 * @version 1.0
 * @since 24/05/2023
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos los números y la operación seleccionada

    /**
     * El primer número introducido por el usuario.
     *
     * @var int
     */
    $a = $_POST["a"];

    /**
     * El segundo número introducido por el usuario.
     *
     * @var int
     */
    $b = $_POST["b"];

    /**
     * La operación que el usuario ha solicitado (suma o resta).
     *
     * @var string
     */
    $operacion = $_POST["operacion"];

    // Realizamos la operación correspondiente
    if ($operacion == "suma") {
        $resultado = suma($a, $b);
        echo "<p>El resultado de la suma es: $resultado</p>";
    } else if ($operacion == "resta") {
        $resultado = resta($a, $b);
        echo "<p>El resultado de la resta es: $resultado</p>";
    }
}


/**
 * La anotación que se inserta a continuación solo es visible para programadores.
 *
 * @internal Este documento se ha realizado como ejercicio de clase para DAW
 * contiene una anotación interna que no será publicada en la documentación del programa
 */

