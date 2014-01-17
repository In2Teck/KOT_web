<!doctype html>
<html>
<head>
	<title>KOT</title>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<meta id="meta" name="viewport" content="width=device-width; initial-scale=1.0" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="js/jquery.mobile-1.0.min.js"></script>
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
<div data-role="page" id="contacto">
<div data-role="content">
	<div id="container" style="background:#fff;">
		<div id="topbar">
				<span class="bar-title-top" style="top:10px; text-align:center; width:100%;">Contacto</span>
				<a href="#" data-rel="back"><img style="position:absolute; left:15px; top:5px;" src="img/back-26.png" width="42" height="31" /></a>	
		</div>
		<div style="width:80px; margin:0 auto; padding-top:10px;">
			<img src="img/kot-mexico.png" />
		</div>
		<div style="padding-top:40px;">
			<ul id="alper-list" style="margin:0;">
				<a href="nutriologos.php"><li><span>Lista de especialistas KOT</span></li></a>
				<a href="http://www.kot.mx" target="__blank"><li><span>www.kot.mx</span></li></a>
				<a href="http://www.facebook.com/KOTMexico" target="__blank"><li style="position:relative;"><img style="position:absolute; left:90px; top:10px;" src="img/fb.png" width="20" height="20" /> <span>Facebook</span></li></a>
				<a href="http://twitter.com/kotmx" target="__blank"><li style="position:relative;"><img style="position:absolute; left:90px; top:10px;" src="img/tw.png" width="20" height="20" /> <span>Twitter</span></li></a>
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