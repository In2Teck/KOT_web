<?php
	
	$getJSON = file_get_contents("http://kot.mx/nuevo/WS/kotVideos.php");
	$array_get = json_decode($getJSON,1);
	foreach($array_get["videos"] as $row) {
		if($row["id_categoria"] == 3){ $list[] = $row; $cat = $row["categoria"];}
	}
?>
<!doctype html>
<html>
<head>
	<title>KOT - Productos KOT</title>
<meta http-equiv="content-type" content="text/html; charset=utf8" />
<meta id="meta" name="viewport" content="width=device-width; initial-scale=1.0" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/facebook.js"></script>
<script type="text/javascript" charset="utf-8" src="js/stuff.js"></script>


<style type="text/css" media="screen">
	@import url("style.css");
	@import url("jquery.mobile-1.0.css");
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
<div data-role="page" id="productosr">
<div data-role="content">
	<div id="container">
		<div id="topbar">
			<div class="horizontal">
				<a href="#" style="margin-left:10px" data-rel="back"><img src="img/back_btn.png" width="50" height="50" /></a>
			</div>
			<div class="bar-title-top horizontal" style="text-align:center; margin-left:-5px; width:80% !important;">Productos y Método KOT</div>
		</div><br/>
		<ul id="prod-cat" style="margin:0;">
			<br/>
			<?php foreach($list as $item) : ?>
				<a style="font-size:22px;text-shadow:none;" href="video.php?cat=<?php echo $cat;?>&video=<?php echo(substr($item["Url"], strpos($item["Url"], "v=")+2)); ?>"><li><span>El Método KOT</span></li></a>
			<?php endforeach; ?>
			<br/>
			
			<a style="font-size:22px;text-shadow:none;" href="verproducto.php?id=1">
				<li><span><div style="margin:auto; background:#ab218e; width:190px;">Productos Dulces</div></span></li>
			</a>
			<a style="font-size:22px;text-shadow:none;" href="verproducto.php?id=2">
				<li><span><div style="margin:auto; background:#5c2d91; width:190px;">Productos Salados</div></span></li>
			</a>
			<a style="font-size:22px;text-shadow:none;" href="verproducto.php?id=3">
				<li><span><div style="margin:auto; background:#005da3; width:190px;">Snacks</div></span></li>
			</a>
			<br/><br/>
			<a style="font-size:22px;text-shadow:none;" href="videos.php?tipo=2"><div style="padding-left:20px;">Videos de preparación</div></a>
			<a style="font-size:22px;text-shadow:none;" href="nutriologos.php"><div style="padding-left:20px; padding-top:10px;">¿Cómo empiezo el método?</div></a>
		</ul>

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