<?php
	echo "Hello World";
	echo "<hr>";
	
	function geraNumeros()
	{
		$lista = array();
		for($i=0; $i<=5; $i++)
		{
			$numero = rand(1,60);
			$lista[] = $numero;
		}
		
		sort($lista);
		return $lista;
	}
	
	$teste = geraNumeros();
	print_r($teste);
	
	
	
	$teste2 = geraNumeros();
	print_r($teste2);