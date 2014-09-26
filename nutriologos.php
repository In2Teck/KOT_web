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
	<div id="container" style="background:#5CC1A6; ">
		<div id="topbar" style="background:#5CC1A6; height:52px;">
			<div class="horizontal">
				<a href="#" style="margin-left:10px" data-rel="back"><img src="img/back_btn.png" width="50" height="50" /></a>
			</div>
			<div class="bar-title-top horizontal" style="text-align:center;">Especialistas KOT</div>
		</div><br/>
	<div style="width:100%;text-shadow:none !important;margin:0 auto;color:white;font-size:12px; text-align:center;">Comienza tu método KOT con el especialista de tu preferencia.</div>
	
	<div style="width:100%; height:100%; position:relative; left:15px; top:10px;">
		<center>
			<div style="width:295px; margin-left: -31px;">
				<select id="ciudad" disabled="disabled"><option value="" disabled="disabled">Selecciona tu ciudad</option></select>
				<div id="sort-btns" data-role="controlgroup" data-type="horizontal">
					<input type="radio" name="sortbtn" id="btn-az" checked="checked" value="az"  />
	        <label for="btn-az">A-Z</label>
	        <input type="radio" name="sortbtn" id="btn-distancia" value="distancia"  />
	        <label for="btn-distancia">Distancia</label>
				</div>
			</div>
		</center>
		<div style="height:60px; width:300px;"></div>

			<ul id="listado" data-role="listview" class="lista-nutri">
				<?php
				
					foreach($list as $item){
						echo '<li data-role="list-divider" class="letra">'.$item["letra"].'</li>';
						foreach($item["items"] as $items){

							echo '<li class="'.$items["id_municipio"].'" style="background:#fff; border:0 !important;">
									<div class="nombre-nutri">'.$items["nombre"].'</div>
									<div style="display: inline-block;width:70%;"><span class="datos-nutri">'.$items["direccion"].'<br/>Tel: '.$items["telefono"].'</span></div><div style="display: inline-block; width:30%; vertical-align:bottom;"><a href="tel:'.$items["telefono"].'"><img src="img/telefono_verde.png" width="35" height="35" /></a> <a href="vermapa.php?latitud='.$items["latitud"].'&longitud='.$items["longitud"].'&nombre='.$items["nombre"].'&telefono='.$items["telefono"].'&direccion='.$items["direccion"].'"><img src="img/localizador_verde.png" width="35" height="35" /></a></div>
									<div style="clear:both;"></div>
									<hr class="separador"/>
								</li>
								';
						}
					}
				?>
			</ul>
			<br/>
		</div>
	</div>
	
	<div style="background: white; border-top:solid 1px #d5d5d5; position:relative; width:320px; margin:0 auto; bottom:0; height:70px;">
		<div id="nav">
			<ul class="bot-menu">
				<a href="index.php"><li class="bottom-menu-item" style="text-align:center"><div style="margin:auto; width:50%"><img src="img/nuevo/icono_conoce.png" width="40" height="40" /></div>CONOCE KOT</li></a>
				<a href="index2.php"><li class="bottom-menu-item" style="margin-left:15px;"><div style="margin:auto; width:50%"><img src="img/nuevo/icono_mi_metodo.png" width="40" height="40" /></div>MI MÉTODO</li></a>
				<a href="index3.php"><li class="bottom-menu-item" style="text-align:center"><div style="margin:auto; width:50%"><img src="img/nuevo/icono_ayuda.png" width="40" height="40" /></div>AYUDA</li></a>
			</ul>
		</div>
	</div>
	
</div>
</div>	
</body>
</html>