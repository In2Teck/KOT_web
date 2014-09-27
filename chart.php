<?php
header('Content-Type: image/png');
include "libchart/classes/libchart.php";
$type = $_GET["type"];
$tag = ($type=="kilos") ? "kilos" : "medida";
$url = "http://kot.mx/movil/json.php?action=getDataChart&idKOT=".$_GET["idKOT"]."&type=".$type;
$url2 =  "http://kot.mx/nuevo/WS/kotMiProgreso.php?idUserKot=".$_GET["idKOT"];
$start = file_get_contents($url2);
$json = file_get_contents($url);

$array = json_decode(substr(utf8_decode($json),1),true);
$array_medidas = json_decode($start,1);

if($type=="kilos"){ $title = "Kilos"; $st = $array_medidas["peso_inicio"]; }
elseif($type=="medidas"){ $title = "Medidas"; $st = $array_medidas["medida_inicio"]; }
elseif($type=="empty"){ $title = ""; }

	$array2 = $array;
	$array_less = array_shift($array2);


	$chart = new LineChart();
	$chart->setUpper(70);
	$chart->setLower(45);
	$dataSet = new XYDataSet();	
	//$dataSet->addPoint(new Point("0", $array[0][$tag]));
	if($type != "empty") : 
		
		foreach($array as $set):
			$week = $set["semana"];
			$dataSet->addPoint(new Point("Sem ". $week , $set[$tag]));
		endforeach;
	endif;
	
	$chart->setDataSet($dataSet);

	$chart->setTitle($title);
	$chart->render();
?>

