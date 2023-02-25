<?php
	$nome=$_GET["nome"];
	$senha= $_GET["senha"];
	$sexo=$_GET["sexo"];
	$leng=$_GET["leng"];
	$arq=$_GET["arq"];

		echo "Bem vindos <br>".$nome." sua senha é ".$senha;
		echo "<br> Seu sexo é ".$sexo;
		echo "<br> Linguagem favorita: ".$leng;
		echo "<br>".$arq;


?>