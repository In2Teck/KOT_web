<?php
	$tipo =	$_GET["tipo"];
	$list = array();
	$cat = '';
	$getJSON = file_get_contents("http://desarrollo.sysop26.com/kot/nuevo/WS/kotVideos.php");
	$array_get = json_decode($getJSON,1);
	foreach($array_get["videos"] as $row) {
		if ($tipo == 1) {
			if($row["id_categoria"] == 1 || $row["id_categoria"] == 2){ $list[] = $row; $cat = "Videos Testimoniales";}
		}
		else if ($tipo == 2) {
			if($row["id_categoria"] == 4){ $list[] = $row; $cat = "Videos de preparación";}
		}
	}
?>
<!doctype html>
<html>
<head>
	<title>KOT - Videos</title>
<meta http-equiv="content-type" content="text/html; charset=utf8" />
<meta id="meta" name="viewport" content="width=device-width initial-scale=1.0" />
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
<div data-role="page" id="videos">
<div data-role="content">
	<div id="container">
		<div id="topbar">
				<span class="bar-title-top" style="top:10px; text-align:center; width:100%;"><?php echo $cat;?></span>
				<a href="#" data-rel="back"><img style="position:absolute; left:15px; top:5px;" src="img/back-26.png" width="42" height="31" /></a>
		</div>
		<ul id="video-list" style="margin:0;">
			<?php if ($tipo == 1) { ?>
				<br/><div style="font-size:16px;text-align:center;">Testimoniales de Pacientes</div><br/>
				<?php foreach($list as $item) : if ($item["id_categoria"] == 1) {?>
					<a href="video.php?cat=<?php echo $cat;?>&video=<?php echo(substr($item["Url"], strpos($item["Url"], "v=")+2)); ?>">
						<li>
							<div style="float:left; width:50%;"><p style="font-size:13px; font-weight:normal; margin:10px;"><?php echo $item["Nombre"];?></p></div>
							<div style="float:left; width:50%;"><img src="<?php echo $item["thumbnail"];?>" width="150" height="100"/></div>
							<div style="clear:both;"></div>
						</li>
					</a>
				<?php } endforeach; ?>
				<br/><div style="font-size:16px;text-align:center;">Testimoniales de Especialistas</div><br/>
				<?php foreach($list as $item) : if ($item["id_categoria"] == 2) {?>
					<a href="video.php?cat=<?php echo $cat;?>&video=<?php echo(substr($item["Url"], strpos($item["Url"], "v=")+2)); ?>">
						<li>
							<div style="float:left; width:50%;"><p style="font-size:13px; font-weight:normal; margin:10px;"><?php echo $item["Nombre"];?></p></div>
							<div style="float:left; width:50%;"><img src="<?php echo $item["thumbnail"];?>" width="150" height="100"/></div>
							<div style="clear:both;"></div>
						</li>
					</a>
				<?php } endforeach;
				} else { 
					foreach($list as $item) : ?>
						<a href="video.php?cat=<?php echo $cat;?>&video=<?php echo(substr($item["Url"], strpos($item["Url"], "v=")+2)); ?>">
							<li>
								<div style="float:left; width:50%;"><p style="font-size:13px; font-weight:normal; margin:10px;"><?php echo $item["Nombre"];?></p></div>
								<div style="float:left; width:50%;"><img src="<?php echo $item["thumbnail"];?>" width="150" height="100"/></div>
								<div style="clear:both;"></div>
							</li>
						</a>
				<?php endforeach; }?>
		</ul>

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
</div>	
</body>
</html>