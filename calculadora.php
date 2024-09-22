<?php

function multiplicacion(float $operando1, float $operando2): float {
    return $operando1 * $operando2;
}

function division(float $operando1, float $operando2): float {
    if ($operando2 == 0) {
        return 0; //División por cero
    }
    return $operando1 / $operando2;
}

$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operando1 = isset($_POST) ? floatval($_POST["operando1"]) : 0;
    $operando2 = isset($_POST) ? floatval($_POST["operando2"]) : 0;
    $operacion = $_POST["operacion"];

    switch ($operacion) {
        case "multi":
            $result = "Resultado: " . multiplicacion($operando1, $operando2);
            break;
        case "div":
            $result = "Resultado: " . division($operando1, $operando2);
            break;
    }
}

echo $result;
