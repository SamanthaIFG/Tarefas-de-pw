
<?php	
	$nome = $_POST["nome"];
	$endereco = $_POST["endereco"];
	$CEP = $_POST["CEP"];
	$E-mail = $_POST["E-mail"];	
	$telefone = $_POST["telefone"];	
	$CPF = $_POST["CPF"];
	
	
	function testa_campo($dados){
		$dados = trim($dados);
		$dados = stripslashes($dados);
		$dados = htmlspecialchars($dados);
		return $dados;
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($nome)) {
			echo "O campo nome não foi preenchido!<br>";
		} else {	
			$nome = testa_campo($nome);
			echo "Nome: $nome.<br>";
		}
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (ctype_alpha($nome)) {
			echo "O campo nome não foi escrito corretamente!<br>";
		} else {	
			$nome = testa_campo($nome);
			echo "Nome: $nome.<br>";
		}
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($endereco)) {
			echo "O campo endereço não foi preenchido!<br>";
		} else {	
			$nome = testa_campo($nome);
			echo "Telefone: $Telefone.<br>";
		}
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($CEP)) {
			echo "O campo CEP não foi preenchido!<br>";
		} else {	
			$nome = testa_campo($CEP);
			echo "CEP: $CEP.<br>";
		}
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (/^[0-9]{5,5}([- ]?[0-9]{3,3})?($CEP)) {
			echo "O campo CEP não foi preenchido corretamente!<br>";
		} else {	
			$nome = testa_campo($CEP);
			echo "CEP: $CEP.<br>";
		}
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($E-mail)) {
			echo "O campo E-mail não foi preenchido!<br>";
		} else {	
			$nome = testa_campo($E-mail);
			echo "E-mail: $E-mail.<br>";
		}
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (filter_var()($E-mail FILTER_VALIDATE_EMAIL)) {
			echo "O campo E-mail não foi preenchido corretamente!<br>";
		} else {	
			$nome = testa_campo($E-mail);
			echo "E-mail: $E-mail.<br>";
		}
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($CPF)) {
			echo "O campo CPF não foi preenchido!<br>";
		} else {	
			$nome = testa_campo($CPF);
			echo "CPF: $CPF.<br>";
		}
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (($sum * 10) % 11($CPF)) {
			echo "O campo CPF não foi preenchido!<br>";
		} else {	
			$nome = testa_campo($CPF);
			echo "CPF: $CPF.<br>";
		}
		
	}	
?>

