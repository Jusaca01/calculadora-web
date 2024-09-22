<style>
    body {
        background-color: rgba(36, 31, 31, 0.651);
        color: whitesmoke;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    h1 {

        flex-direction: column;

    }
</style>

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

function suma(float $operando1, float $operando2): float {
    return $operando1 + $operando2;
}

function resta(float $operando1, float $operando2): float {
    return $operando1 - $operando2;
}

$resultado = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operando1 = isset($_POST) ? floatval($_POST["number1"]) : 0;
    $operando2 = isset($_POST) ? floatval($_POST["number2"]) : 0;
    $operacion = $_POST["operacion"];

    switch ($operacion) {
        case "multi":
            $resultado = "Resultado: " . multiplicacion($operando1, $operando2);
            break;
        case "div":
            $resultado = "Resultado: " . division($operando1, $operando2);
            break;
        case "suma":
            $resultado = "Resultado: " . suma($operando1, $operando2);
            break;
        case "resta":
            $resultado = "Resultado: " . resta($operando1, $operando2);
            break;
    }
}

echo "<h1>$resultado</h1>";
