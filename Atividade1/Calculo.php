<?php
class Calculo {
    public $n1;
    public $n2;
    public $n3;
    public $resultado;

    function media($n1,$n2,$n3,$resultado){

           $resultado=($n1 + $n2 + $n2)/3;
           if ($resultado > 6){
            return "a Media foi $resultado <br> Situação Aprovado!";
           }else{
            return "a Media foi $resultado <br> Situação Reprovado!";
           }
    }
    function imprimir($resultado){
        echo $resultado;
    }
}
$objeto=new Calculo;
$resultado=$objeto->media($_POST['n1'],$_POST['n2'],$_POST['n3'],$resultado);
$objeto->imprimir($resultado);
?>