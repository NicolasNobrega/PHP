<?php
	$nome=$_GET["nome"];
	$email= $_GET["email"];
	$idade=$_GET["idade"];
	$sexo=$_GET["sexo"];
	$pais=$_GET["pais"];
	//$linguagem=$_GET["linguagem"];

		echo "Bem vindo <br>";
		echo "Nome: $nome <br>";
		echo "Idade: $idade <br>";
		echo "Email: $email <br>";
		echo "Sexo: $sexo <br>";
		echo "Pais: $pais <br>";

		if(isset($_GET["linguagem"])){
			echo "Linguagem <br>";
			foreach ($_GET["linguagem"] as $item) {
				echo "Linguagem: $item <br>"; 
			}
		}	
		if($idade >= 18){
			echo "Você é maior de idade";
		}else{
			echo "Você é de Menor";
		}
?>