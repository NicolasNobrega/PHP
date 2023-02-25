<?php
class Filme
{
    public $nome;
    public $idade;
    public $sexo;
    public $tfilme;
    public $result;

    function processarFilme($nome, $sexo, $idade, $tfilme)
    {
        if ($idade <= 15) {
            return "$nome (sexo $sexo) sua escolha foi $tfilme e recomendamos Cómedia e Romance";
        } elseif ($idade > 16 && $idade <= 20) {
            return "$nome (sexo $sexo) sua escolha foi $tfilme e recomendamos Ficção e Ação";
        } elseif ($idade >= 21) {
            return "$nome (sexo $sexo) sua escolha foi $tfilme e recomendamos Terror e Aventura";
        }
    }
    function imprima($result)
    {
        echo "<center><h1>$result</h1></center>";
    }
}
$cliente = new Filme;
$result = $cliente->processarFilme(
    $_GET['nome'],
    $_GET['sexo'],
    $_GET['idade'],
    $_GET['tfilme']
);
$cliente->imprima($result);
