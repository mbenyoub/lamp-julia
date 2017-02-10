<?php 


	// Array
	$data = array(
	    "pixelData" 	 => 	$_POST["pixelData"],
	    "rows" 			 => 	$_POST["imagem_linhas"],
	    "columns" 		 => 	$_POST["imagem_colunas"],
	    "bitsAllocated"  => 	$_POST["imagem_bitsalocados"],
	    "bitsStored"     => 	$_POST["imagem_armazenados"],
	    "pixelSpacing"   => 	$_POST["imagem_espacamentopixel"],
	    "modality"  	 => 	$_POST["serie_modalidade"], 
	);

	// Executar Python Script e enviar dados JSON
	$result = shell_exec('julia hello-world.jl' . escapeshellarg(json_encode($data)));

	// Decodificar o Resultado 
	$resultData = json_decode($result, true);

	// Plotar na Tela o Resultado
	//print_r($resultData);
	print_r("Salvo com sucesso");

 ?>