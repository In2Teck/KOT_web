<!doctype html>
<html>
<head>
<title>KOT</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="apple-touch-startup-image" href="img/splash.png" />
<link rel="apple-touch-icon" href="img/icon.png" />
<link rel="apple-touch-icon" sizes="114x114" href="img/icon-ret.png" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script> 
<script src="js/Chart.js"></script>
<script type="text/javascript" charset="utf-8" src="js/stuff.js?<?php echo rand(19999,1929381) ?>"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
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
<div id="fb-root"></div>
<div data-role="page" id="home">
	<div data-role="content">
	<div id="container">
		<div id="topbar">
				<span class="bar-title-top" style="top:10px; width:100%; text-align:center;">Menú</span>
		</div>
		<div id="panel">
			<!-- PT1 -->
			<div style="float:left; width:50%; position:relative;">
				<a href="">
				<div style="margin:0 auto; width:100%; position:absolute; left:20px; top:30px;">
				<img src="img/KOT-25.png" width="90" height="90" />
				<br />
				<span style="position:relative; left:25px;">FAQ</span>
				</div>
				</a>
			</div>
			<div style="float:left; width:50%;  position:relative;">
				<a href="contacto.php">
				<div style="margin:0 auto; width:100%; position:absolute; left:180px; top:30px;">
				<img src="img/KOT-22.png" width="90" height="90" />
				<br />
				<span style="position:relative; left:12px;">Contacto </span>
				</div>
				</a>
			</div>
			
			<div style="clear:both;"></div>
			
			<!-- PT2 -->
			<div style="float:left; width:50%; position:relative;">
				<a href="perfil.php">
				<div style="margin:0 auto; width:100%; position:absolute; top:180px; left:20px;">
				<img src="img/active2.png" width="90" heigth="90" />
				<br />
				<span style="position:relative; left:25px;"> Perfil </span>
				</div>
				</a>
			</div>
			<div style="float:left; width:50%; position:relative;">
				<a href="">
				<div style="margin:0 auto; width:100%; position:absolute; top:180px; left:180px;">
				<img src="img/KOT-24.png" width="90" heigth="90" />
				<br />
				<span style="position:relative; left:15px;"> Tutorial </span>
				</div>
				</a>
			</div>
			
			<div style="clear:both;"></div>
			
		</div>
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