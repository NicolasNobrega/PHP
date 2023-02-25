<?php
class Velocidade {
    public $nome;
    public $num1;
    public $num2;
    public $result;

    function calcularMulta($num1,$num2){

        $ultrapassado = $num2 - $num1;

        if ($ultrapassado <= 0) {
            return "1";
        }
        elseif($ultrapassado <= 10){
            return "R$50,00";
        }elseif ($ultrapassado >= 11 && $ultrapassado <=30){
            return "R$100,00";
        }elseif($ultrapassado >= 31){
            return "R$200,00";
        }






    }
    function imprimir($result,$num1,$num2,$nome){
        if ($result == 1){
            echo "<center><h1>O $nome estava a $num2 km em uma Via de $num1</h1></center><br/>
                <center><h1>Portanto não recebeu multa</h1></center>";
        }else{
        echo "<center><h1>O $nome estava a $num2 km em uma Via de $num1</h1></center><br/>
                <center><h1>Multa foi de $result</h1></center>";
        }
    }
}
$motorista=new Velocidade;
$result=$motorista->calcularMulta(  $_POST['num1'],
                                    $_POST['num2']);
$motorista->imprimir(  $result,
                       $_POST['num1'],
                       $_POST['num2'],
                       $_POST['nome']);

?>