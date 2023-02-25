<?php
class Vote {
    public $name;
    public $title;
    public $age;
    public $literate;
    public $situation;

    function canVote ($age,$literate){
        if ($age>= 16 && $age< 18 && $literate="yes" )

            return "seu voto é Opcional";

        elseif ($age>= 18 && $age < 70 && $literate="yes")

            return "seu voto é Obrigatorio";

        elseif ($age>= 70 && $literate="yes" )

            return "seu voto é Opcional";

        else

            return "não pode Votar";

        

    }
    function out($situation,$name,$title,$age){
        echo "Você tem $age anos e $situation <br>";
        echo "$name <br>";
        echo "Título:$title <br>";
    }


}
$eleitor = new Vote;
$situation=$eleitor -> canVote( $_POST['age'],
                               $_POST['literate']);
$eleitor -> out($situation,
               $_POST['name'],
               $_POST['title'],$_POST['age']);
?>