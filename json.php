<?php
 header("Access-Control-Allow-Origin: *");
class WS
{
	public function get($tipo,$parametros)
	{
		$servicios = array('login' => 'http://kot.mx/nuevo/WS/kotLogin.php?'.$parametros,
						   'progreso' => 'http://desarrollo.sysop26.com/kot/nuevo/WS/kotMiProgreso.php?idUserKot='.$parametros,
						   'metodo' => 'http://kot.mx/nuevo/WS/kotMiMetodo.php?idUserKot='.$parametros,
						   'nutriologos' => 'http://kot.mx/nuevo/WS/kotNutriologos.php',
						   'restaurantes' => 'http://kot.mx/nuevo/WS/kotRestaurantes.php',
						   'preguntas' => 'http://desarrollo.sysop26.com/kot/nuevo/WS/kotPreguntas.php',
						   'registro' => 'http://kot.mx/nuevo/WS/kotRegistro.php?'.$parametros
							);
		set_time_limit(60);
		$out = file_get_contents($servicios[$tipo]);
		
		return json_decode($out,true);
		
	}
	
}

class Sesion extends WS
{

	function doLogin($data)
	{
		$array_login = $this->get('login',$data);
		$check = ($array_login["mensaje_error"]=="") ? true : false;
		$arr = array("response" => $check, "usuario" => $array_login["usuario"]);
		return json_encode($arr);
	}
	
}

include("stuff.php");

$action = $_GET["action"];
$doit = new Sesion;
$prod = new AlimentosPermitidos;
switch($action)
{
	case 'doLogin':
		$pars = "mail=".$_GET["mail"]."&code=".$_GET["password"]."&password=".$_GET["password"];
	echo $doit->doLogin($pars);
	break;
	case 'textDetailsProducts':
		$array = $prod->getProductos();
	echo ($array[$_GET["categoria"]][$_GET["item"]]);	
	break;
	case 'getProgreso':
		$idKOT = $_GET["idKOT"];
		echo json_encode($doit->get('progreso',$idKOT));
	break;
	case 'getDataChart':
		include("check.php");		
	break;
	case 'getGoals':
		$idKOT = $_GET["idKOT"];
		$array = $doit->get('progreso',$idKOT);
		$last_kilos = end($array["kilos"]);
		$last_medida = end($array["medidas"]);
		$last_grasa = end($array["grasas"]);
		
		foreach($array["kilos"] as $item):
			$data_kilos[] = array("semana" => $item["Semana"], "valor" => $item["kilos"]);
		endforeach;

		foreach($array["medidas"] as $item):
			$data_medidas[] = array("semana" => $item["Semana"], "valor" => $item["medida"]);
		endforeach;

		foreach($array["grasas"] as $item):
			$data_grasas[] = array("semana" => $item["Semana"], "valor" => $item["grasa"]);
		endforeach;

		$array_toJSON = array(
			"kilos" => array(
				"progreso" => $array["peso_inicio"] - $last_kilos["kilos"], 
				"actual" => $last_kilos["kilos"],
				"print" =>  $last_kilos["kilos"] - $array["meta_peso"],
				"datos" => $data_kilos
			),
			"medidas" => array(
				"progreso" => $array["medida_inicio"] - $last_medida["medida"], 
				"actual" => $last_medida["medida"],
				"datos" => $data_medidas
			),
			"grasa" => array(
				"progreso" => $array["grasa_inicio"] - $last_grasa["grasa"], 
				"actual" => $last_grasa["grasa"],
				"datos" => $data_grasas
			)
		);
		
		echo json_encode($array_toJSON);
		
		
	break;
	case 'getMetodo':
		$idUser = $_GET["idUser"];
		echo json_encode($doit->get('metodo',$idUser));
	break;
	case 'registrar': 
															
		echo file_get_contents("http://kot.mx/nuevo/WS/kotRegistro.php?nombre=$_GET[nombre]&fecha_nacimiento=$_GET[fecha_nacimiento]&altura=$_GET[altura]&mail=$_GET[mail]&password=$_GET[password]&sexo=$_GET[sexo]&code=&token=$_GET[token]");
	break;
	case 'getMetodoDemo':
		echo json_encode($prod->getDemo($_GET["id_demo"]));
	break;
	case 'putPeso':

		$svc = "http://kot.mx/nuevo/WS/kotRegistroMedidasPeso.php?idUserKot=".$_GET["idUserKot"]."&type=".$_GET["type"]."&data=".$_GET["data"]."&semana=";
		$out = file_get_contents($svc);
		echo $out;
	break;
	case 'getNutriologos' :
		echo json_encode($doit->get('nutriologos', ''));
	break;
	case 'getRestaurantes' :
		echo json_encode($doit->get('restaurantes', ''));
	break;
	case 'getPreguntas':
		echo json_encode($doit->get('preguntas', ''));
	break;
}


?>