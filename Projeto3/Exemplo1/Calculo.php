<?php
class Calculo {
    public $n1;
    public $n2;
    public $resultado;

    function comparar($n1,$n2){

            if($n1>$n2){
                return "$n1 é maior";
            }else{
                return "$n2 é maior";
            }
            if($n1 == $n2){
                return "$n1 é igual a $n2";

        }
    }
    function imprimir($resultado){
        echo $resultado;
    }
}
$objeto=new Calculo;
$resultado=$objeto->comparar($_POST['n1'],
                  $_POST['n2']);
$objeto->imprimir($resultado);
?>