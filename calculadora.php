<?php

function suma(float $operando1, float $operando2): float {
    return $operando1 + $operando2;
}

function resta(float $operando1, float $operando2): float {
    return $operando1 - $operando2;
}

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $operando1 = isset($_POST["number1"]) ? floatval($_POST["number1"]) : 0;
    $operando2 = isset($_POST["number2"]) ? floatval($_POST["number2"]) : 0;
    $operacion = $_POST["operacion"];

    switch ($operacion) {
        case "suma":
            $resultado = "Resultado: " . suma($operando1, $operando2);
        case "resta":
            $resultado = "Resultado: " . resta($operando1, $operando2);
    }
}


echo $resultado;
