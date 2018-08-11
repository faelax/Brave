<?php
	 
echo "O Planeta Selecionado Foi:". $_POST["planeta"];
	
	switch ($_POST["planeta"]) {
		case 'terra':
			echo "<br>A polulação da terra e de 7,442Bilhões de Seres Humanos.<br> De acordo com a Pesquisa do Banco Mundial Feita
				 em 2016";
		break;
		
		case 'Terra':
			echo "<br>A polulação da terra e de 7,442Bilhões de Seres Humanos.<br> De acordo com a Pesquisa do Banco Mundial Feita
				 em 2016";
		break;

		default:
			echo"<br> O Planeta Não é habitado.";
		break;
	}
?>