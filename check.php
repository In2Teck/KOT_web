<?php

	$idKOT = $_GET["idKOT"];
	$type = $_GET["type"];
	$plain_json = file_get_contents("http://kot.mx/nuevo/WS/kotMiProgreso.php?idUserKot=".$idKOT);
	
	$array = json_decode($plain_json,true);
	
	
	$array = $array[$type];

	
	$tag = ($type=="kilos") ? "kilos" : "medida";
	
	foreach($array as $item):

		$data[] = array("semana" => $item["Semana"], "$tag" => $item[$tag]);
		
	endforeach;
	if($_GET["idKOT"] == ""){
		die();
	}

	echo json_encode($data);

?>  