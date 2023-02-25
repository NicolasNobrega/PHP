CalculadoraRecebe.php

<?php

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$acao = $_POST["acao"];


if($acao == "somar"){
    $resultado = $numero1 + $numero2;
    echo "A soma é: ", $resultado;
}
if($acao == "subtrair"){
    $resultado = $numero1 - $numero2;
    echo "A subtração é: ", $resultado;   
}
if($acao == "multiplicar"){
    $resultado = $numero1 * $numero2;
    echo "A Multiplicação é: ", $resultado;
}
if($acao == "dividir"){
    $resultado = $numero1 / $numero2;
    echo "A divisão é: ", $resultado;
}
?>