<?php
	include ("./Calculadora.html");

		function validar($campo1,$campo2){
			return is_numeric($campo1) && is_numeric($campo2);
		}

		function somar($campo1,$campo2){
			return $campo1 + $campo2;
		}

		function subtrair($campo1,$campo2){
			return $campo1 - $campo2;
		}

		function multiplicar($campo1,$campo2){
			return $campo1 * $campo2;
		}

		function dividir($campo1,$campo2){
			return $campo1 / $campo2;
		}

		$valor1 = $_POST['campo1'];
		$valor2 = $_POST['campo2'];
		$op = $_POST['operacao'];

		switch ($op){

			case 'somar':
				if(validar($valor1,$valor2)){
					echo (somar($valor1,$valor2));
				}else{
					echo 'Invalido';
				}
			break;

			case 'subtrair':
				if(validar($valor1,$valor2)){
					echo (subtrair($valor1,$valor2));
				}else{
					echo "Invalido";
				}
			break;

			case 'multiplicar':
				if(validar($valor1,$valor2)){
					echo (multiplicar($valor1,$valor2));
				}else{
					echo 'Invalido';
				}
			break;

			case 'dividir':
				if(validar($valor1,$valor2)){
					echo (dividir($valor1,$valor2));
				}else{
					echo "Invalido";
				}			
			break;
		}
?>
