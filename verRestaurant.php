<?php
$url = "http://kot.mx/nuevo/WS/kotMenuRestaurantes.php?idRestaurante=".$_GET["idRestaurante"];
$getJSON = file_get_contents($url);
	$items = json_decode($getJSON,1);
	foreach($items["menu"] as $row){
		if($row["items"] != null){ 
			$list[] = $row; 
			}
	}
?>
<!doctype html>
<html>
<head>
	<title>KOT</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="js/jquery.mobile-1.0.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" charset="utf-8" src="js/stuff.js"></script>
<style type="text/css" media="screen">
	@import url("style.css");
	@import url("jquery.mobile-1.0.css");
	.ui-body-c .ui-link:visited,.ui-body-c .ui-link{
		color:black;
		text-decoration:none;
		font-weight:normal;
	}
	.ui-listview-filter{
		width:101%;
		position:relative;
		left:11px;
		top:16px;
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
<div data-role="page" id="verrestaurant">
<div data-role="content">
	<div id="container">
		<div id="topbar">
			<div class="horizontal">
				<a href="#" style="margin-left:10px" data-rel="back"><img src="img/back_btn.png" width="50" height="50" /></a>
			</div>
			<div class="bar-title-top horizontal" style="text-align:center; margin-left:-10px;"><?php echo $_GET["nombre"]; ?></div>
		</div><br/>
		<div>
			
			<div id="image" class="restaurant-img">
				<center><img src="<?php echo $items["img"] ?>" style="width:290px;height:auto;" /></center>
			</div>
			<div id="bar-address">
				<div class="horizontal" style="width:50%; height:100%; position:relative;">
					<span style=""><?php echo $_GET["direccion"]; ?></span>
				</div>
				<div class="horizontal" style="width:40%; height:100%; position:relative;">
					<a href="tel:<?php echo $_GET["tel"]; ?>"><img src="img/telefono.png" width="55" height="55" /></a>
					<a href="vermapa.php?latitud=<?php echo $_GET["latitud"]?>&longitud=<?php echo $_GET["longitud"] ?>&nombre=<?php echo $_GET["nombre"]?>"><img src="img/localizador.png" width="55" height="55"  /></a>
				</div>
			</div>
			<table width="92%" cellpadding="0" cellspacing="0" class="table-alim" align="center">
				<tr class="platillos-header">
					<td style="padding-left:12px; border:1px solid #d1d3d4; border-radius:4px 0 0 0;">Platillos permitidos</td>
					<td style="border:1px solid #d1d3d4; border-radius: 0 4px 0 0;">Votos de los usuarios</td>
				</tr>
				<?php
				foreach($list as $item):
					foreach($item["items"] as $items): 
					?>

						<tr>
							<td width="60%"><span style="padding-left:12px; width:100%; font-size:13px;">
								<a class="platillo" href="verMenu.php?id=<?php echo $items["id"]; ?>&rest=<?php echo $_GET["nombre"] ?>"><?php if(strlen($items["nombre"]) > 26)  echo substr($items["nombre"],0,26)."..."; else echo $items["nombre"]  ?></a></span>
							</td>
							<td width="40%">
								<span style="padding-right:12px; width:100%;">
									<a href="verMenu.php?id=<?php echo $items["id"]; ?>" >

											<?php

												$stars =  $items["rating"]; 
												//1
												if($stars ==1) { echo '<img src="stars/1.png" />';}
												elseif($stars > 1 && $stars < 2){ 
													echo '<img src="stars/1.png" /><img src="stars/0.png" />'; 
												}
												// 2 
											    elseif($stars == 2){ echo '<img src="stars/1.png" /><img src="stars/1.png" />'; }
												elseif($stars > 2 && $stars < 3){
													 echo '<img src="stars/1.png" /><img src="stars/1.png" /><img src="stars/0.png" />'; 
												}
											 	elseif($stars == 3){ echo '<img src="stars/1.png" /><img src="stars/1.png" /><img src="stars/1.png" />'; }
												//3
												elseif($stars > 3 && $stars < 4){
													 echo '<img src="stars/1.png" /><img src="stars/1.png" /><img src="stars/1.png" /><img src="stars/0.png" />'; 
												}
												//4
											 	elseif($stars == 4){ echo '<img src="stars/1.png" /><img src="stars/1.png" /><img src="stars/1.png" /><img src="stars/1.png" />'; }
												elseif($stars > 4 && $stars < 5){
													echo '<img src="stars/1.png" /><img src="stars/1.png" /><img src="stars/1.png" /><img src="stars/1.png" /><img src="stars/0.png" />';
												}
											 	elseif($stars == 5){ echo '<img src="stars/1.png" /><img src="stars/1.png" /><img src="stars/1.png" /><img src="stars/1.png" /><img src="stars/1.png" />'; }

											?>

									</a>
								</span>
							</td>
						</tr>
				<?php
				endforeach;
				endforeach;			
				?>

				
				
				
			</table>
			
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