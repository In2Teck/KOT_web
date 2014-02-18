<?php
$getJSON = file_get_contents("http://kot.mx/nuevo/WS/kotNutriologos.php");
	$array_get = json_decode($getJSON,1);
	foreach($array_get["nutriologos"] as $row){
		if($row["items"] != null){ $list[] = $row; }
	}

?>
<!doctype html>
<html>
<head>
<title>KOT</title>
<meta http-equiv="content-type" content="text/html; charset=utf8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="js/jquery.mobile-1.0.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" charset="utf-8" src="js/stuff.js"></script>
<style type="text/css" media="screen">
	@import url("style.css");
	@import url("jquery.mobile-1.0.css");
	#container{ background:#fff; }
</style>
<!--Google Analytics-->
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-33116762-1']);
  
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	
	$(document).delegate('[data-role=page]', 'pageshow', function (event, ui) {			   
		try  {
			//custom variable  	
			var session = localStorage.getItem('sesionIniciada');
			if("true" == session){ 		
				
				_gaq.push(['_setCustomVar', 1,'Tipo de usuario','Registrado',2]);  		
			}
			else{
				_gaq.push(['_setCustomVar', 1,'Tipo de usuario','Visitante',2]);
			}
			
			var url = location.hash ? location.hash : location.href;
			_gaq.push(['_trackPageview', url]);
		} 
		catch(error) {
			console.log(error);
		}
	});	
</script>
</head>
<body>
<div data-role="page" id="nutriologos">
<div data-role="content">
	<div id="container" style="background:#e2e5ea; overflow:scroll;">
		<div id="topbar">
				<span class="bar-title-top" style="top:10px; text-align:center; width:100%;">Especialistas KOT</span>
				<a href="#" data-rel="back"><img style="position:absolute; left:15px; top:5px;" src="img/back-26.png" width="42" height="31" /></a>
		</div>
	<div style="width:95%; margin:0 auto; font-size:12px;">Comienza tu método KOT con el especialista de tu preferencia.</div>
	
	<div style="width:100%; height:100%; position:relative; left:15px; top:10px;">
		<center>
			<div style="width:230px">
				<select id="ciudad"><option value="" disabled="disabled">Selecciona tu ciudad</option></select>
			</div>
		</center><br >
			<ul id="listado" data-role="listview">
				<?php
				

				
					foreach($list as $item){
						echo '<li data-role="list-divider" class="letra">'.$item["letra"].'</li>';
						foreach($item["items"] as $items){

							echo '<li class="'.$items["id_municipio"].'">'.$items["nombre"].'</li>
								 <li class="'.$items["id_municipio"].'" style="background:#fff;">
									<div style="float:left;width:70%;"><span style="font-size:10px; font-weight:normal;">'.$items["direccion"].'<br/>Tel: '.$items["telefono"].'</span></div>
									<div style="float:left; width:30%;"><a href="tel:'.$items["telefono"].'"><img src="img/tel.png" width="28" height="28" /></a> <a href="vermapa.php?latitud='.$items["latitud"].'&longitud='.$items["longitud"].'&nombre='.$items["nombre"].'&telefono='.$items["telefono"].'&direccion='.$items["direccion"].'"><img src="img/map.png" width="28" height="28" /></a> <!-- <img src="img/add.png" width="20" height="20" />--></div>
									<div style="clear:both;"></div>
								</li>
								';
						}
					}
				?>
			</ul>
		</div>
	</div>
	
	<div style="background:url(img/Element-03.png); background-size:140%; border-top:solid 1px #d5d5d5; position:relative; width:320px; margin:0 auto; bottom:0; height:50px;">
		<div id="nav">
			<ul class="bot-menu">
				<a href="index.php"><li><img src="img/Element-08.png" width="35" height="35" /></li></a>
				<a href="index2.php"><li><img src="img/Element-09.png" width="35" height="35" /><li></a>
				<a href="index3.php"><li><img src="img/Element-11.png" width="35" height="35" /><li></a>
			</ul>
		</div>		
	</div>
	
</div>
</div>	
</body>
</html>