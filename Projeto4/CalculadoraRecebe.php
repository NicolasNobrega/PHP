<?php
class CalculadoraRecebe {
    public $num1;
    public $num2;
    public $action;
    public $result;

    function choice($num1,$num2,$action){

        switch ($action) {
            case 'somar':

                return $num1 + $num2;

                break;

            case 'subtrair':

                return $num1 - $num2;

                break;

            case 'multiplicar':

                return $num1 * $num2;

                break;

            case 'dividir':

                return $num1 / $num2;

                break;
            
        }

    }
    function out($result){
        echo "<center><h1>Resultado foi $result</h1></center>";
    }
}
$calculate=new CalculadoraRecebe;
$result=$calculate->choice($_POST['num1'],
                           $_POST['num2'],
                           $_POST['action']);
$calculate->out($result);

?>