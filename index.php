<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Trabalho de PLP sobre PHP</title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" href="style.css">
	</head>
	<body>

		<nav><div class="centralize">Trabalho de PLP sobre PHP</div></nav>

		<div id="content">

<?php

	function fluffyPalindrome($string){ return ($string == strrev($string)) ? true : false; }

	function notSoFluffyPalindrome($string){

		for($i = 0; $i < (int) strlen($string) / 2; $i++){
			if( $string[$i] != $string[ strlen($string) - $i - 1 ] ) {
				return false;
			}
		}
		
		return true;
	}

	if(isset($_POST['string'])){

		$string = $_POST['string'];

		if($_POST['name'] === 'fluffyPalindrome'){

			print (fluffyPalindrome($string)) ? '<span class="result result-yes">"' . $string . '" é palíndromo.</span>' : '<span class="result result-no">"' . $string . '" não é palíndromo.</span>';

		} else if ($_POST['name'] === 'notSoFluffyPalindrome'){

			print (notSoFluffyPalindrome($string)) ? '<span class="result result-yes">"' . $string . '" é palíndromo.</span>' : '<span class="result result-no">"' . $string . '" não é palíndromo.</span>';

		}
	}

?>

		<div id="wrap">

		<h1>Checar se string é um palíndromo em PHP</h1>

		<p>Implementações para o trabalho da disciplina Paradigmas de Linguagens de Programação do curso de Bacharelado em Ciência da Computação da Universidade Federal de São Carlos, ministrada pelo Prof. Dr. Sérgio D. Zorzo no primeiro semestre letivo de 2017.</p>

		<p>Por Lucas D. Q. Amati <span class="tag">RA: 587087</span> e Wellyson de Freitas Santos <span class="tag">RA: 587125</span>.</p>

		<h2>Função mais fofinha</h2>

		<p>Se um palíndromo é a string que se pode ler, indiferentemente, da esquerda para a direita ou vice-versa, então, uma string qualquer será um palíndromo se e somente se for idêntica a sua reversa, que pode ser obtida pela função <a href="https://secure.php.net/manual/pt_BR/function.strrev.php" target="_blank" title="Ver documentação">strrev()</a> do PHP, que reverte a string de parâmetro.</p>

<pre>function fluffyPalindrome($string){
  return ($string == strrev($string)) ? true : false;
}</pre>

		<p>Forneça uma string para checar se é um palíndromo com esta função:</p>

		<form method="post" id="fluffyPalindrome">
			<input type="text" placeholder="String" name="string" />
			<input name="name" type="hidden" value="fluffyPalindrome" />
			<button type="submit">Testar</button>
		</form>

		<h2>Função nem tão fofinha</h2>

		<p>Também é possível implementar a mesma desta forma: checar se o primeiro caractere da string é igual ao último, o segundo ao penúltimo e assim por diante.</p>

<pre>function notSoFluffyPalindrome($string){
  for($i = 0; $i < (int) strlen($string) / 2; $i++){
    if( $string[$i] != $string[ strlen($string) - $i - 1 ] ) {
	  return false;
    }
  }

  return true;
}</pre>

		<p>Forneça uma string para checar se é um palíndromo com esta função:</p>

		<form method="post" id="notSoFluffyPalindrome">
			<input type="text" placeholder="String" name="string" />
			<input name="name" type="hidden" value="notSoFluffyPalindrome" />
			<button type="submit">Testar</button>
		</form>

		</div><!-- #wrap -->
		</div><!-- #container -->
	</body>
</html>