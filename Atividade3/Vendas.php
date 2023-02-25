<?php

class Vendas {
    public $num1;
    public $num2;
    public $result;

    function price ($num1,$num2){

        $num3;


        if ($num1 <= 5 && $num2 <= 5) {
           $num3 = ($num1*2.50) + ($num2*1.80);
            return $num3;

        }elseif ($num1 > 5 && $num2 > 5) {
            $num3 = ($num1*2.20) + ($num2*1.50);

            if ($num3 >= 25) {
               $num3 = $num3-($num3*0.1);
                return "Com Desconto de 10% é ".$num3;
            }else{
                return $num3;
            }
        }elseif ($num1 <= 5 && $num2 > 5) {
            $num3 = ($num1*2.50) + ($num2*1.50);

            if ($num3 >= 25) {
               $num3 = $num3-($num3*0.1);
                return "Com Desconto de 10% é ".$num3;
            }else{
                return $num3;
           }
        }elseif ($num1 > 5 && $num2 <= 5) {
            $num3 = ($num1*2.20) + ($num2*1.80);

            if ($num3 >= 25) {
               $num3 = $num3-($num3*0.1);
                return "Com Desconto de 10% é ".$num3;
            }else{
                return $num3;
           }
        }

        

    }
    function out($result,$num1,$num2){
        echo "Total em KG foi ".$num1+$num2."kg";
        echo "<h3>Total a pagar $result R$</h3>";
    }


}
$cliente= new Vendas;
$result= $cliente -> price( $_POST['num1'],
                             $_POST['num2']);
$cliente-> out(   $result,
                  $_POST['num1'],
                  $_POST['num2']);
?>