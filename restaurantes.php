<?php
$getJSON = file_get_contents("http://kot.mx/nuevo/WS/kotRestaurantes.php");
	$array_get = json_decode($getJSON,1);
	foreach($array_get["restaurante"] as $row){
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
<script type="text/javascript" charset="utf-8" src="js/stuff.js"></script>
<style type="text/css" media="screen">
	@import url("style.css");
	@import url("jquery.mobile-1.0.css");
	.ui-listview-filter{
		width:101%;
		position:relative;
		left:12px;
	}

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
<div data-role="page" id="restaurantes">
<div data-role="content">
	<div id="container">
		<div id="topbar" style="height:52px">
				<span class="bar-title-top" style="top:10px; width:100%; text-align:center;">Guía de Restaurantes</span>
				<a href="#" data-rel="back"><img style="position:absolute; left:15px; top:5px;" src="img/back-26.png" width="42" height="31" /></a> 
		</div>
		<div id="lista-restaurantes">
			<ul data-role="listview" data-filter="true" data-filter-placeholder="Busca tu restaurante">
				<?php
					foreach($list as $item){
						echo '<li data-role="list-divider">'.$item["letra"].'</li>';
						foreach($item["items"] as $items){
							echo '<li><a href="verRestaurant.php?nombre='.$items["nombre"].'&idRestaurante='.$items["id"].'&direccion='.urlencode($items["direccion"]).'&tel='.$items["telefono"].'&latitud='.$items["latitud"].'&longitud='.$items["longitud"].'">'.$items["nombre"].'</a></li>';
						}
					}
				?>
			</ul>
			<br />
			<br />
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