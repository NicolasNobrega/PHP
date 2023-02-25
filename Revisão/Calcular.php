<?php

class circulo
{
    public $raio;
    public $result1;
    public $result2;

    function calcularPerimetro($raio)
    {
        return 2 * M_PI * $raio;
    }
    function calcularArea($raio)
    {
        return 2 * M_PI * $raio;
    }
    function out($result1, $result2, $raio)
    {
        echo "Raio é $raio <br>";
        echo "Perimetro do Circulo é $result1 <br>";
        echo "Area do Circulo é $result2 <br>";
    }
}
$objeto = new circulo;
$result1 = $objeto->calcularPerimetro($_POST['raio']);
$result2 = $objeto->calcularArea($_POST['raio']);
$objeto->out($result1, $result2, $_POST['raio']);
