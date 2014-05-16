<?php
$url = "http://kot.mx/nuevo/WS/kotDetalleMenuRestaurantes.php?idMenu=".$_GET["id"];
$getJSON = file_get_contents($url);
	$menu = json_decode($getJSON,1);

	$item = $menu["menu"];
	$duplicate = $item;
//	print_r($getJSON);
	
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
	#container{ background:#fff; }
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
<div data-role="page" id="vermenu">
<div data-role="content">
	<div id="container" style="background:#5CC1A6">
		<div id="topbar">
			<div class="horizontal">
				<a href="#" style="margin-left:10px" data-rel="back"><img src="img/back_btn.png" width="50" height="50" /></a>
			</div>
			<div class="bar-title-top horizontal" style="text-align:center;"><?php if(strlen($item["nombre"]) > 23) echo substr($item["nombre"],0,23) . "..."; else echo $item["nombre"]?></div>
		</div><br/>
		<div id="stars-menu" style="position:relative;">
			<span style="position:absolute; top:9px; left:17px;">Calificación</span>
			<div style="position:absolute; right:30px; top:10px;">
			<?php
			 	
				$stars =  $item["rating"]; 
				//1
				if($stars ==1) { echo '<img src="stars/1.png" />';}
				elseif($stars > 1 && $stars < 2){ 
					echo '<img src="stars/1.png" /> <img src="stars/0.png" />'; 
				}
				// 2 
			    elseif($stars == 2){ echo '<img src="stars/1.png" /> <img src="stars/1.png" />'; }
				elseif($stars > 2 && $stars < 3){
					 echo '<img src="stars/1.png" /> <img src="stars/1.png" /> <img src="stars/0.png" />'; 
				}
			 	elseif($stars == 3){ echo '<img src="stars/1.png" /> <img src="stars/1.png" /> <img src="stars/1.png" />'; }
				//3
				elseif($stars > 3 && $stars < 4){
					 echo '<img src="stars/1.png" /> <img src="stars/1.png" /> <img src="stars/1.png" /> <img src="stars/0.png" />'; 
				}
				//4
			 	elseif($stars == 4){ echo '<img src="stars/1.png" /> <img src="stars/1.png" /> <img src="stars/1.png" /> <img src="stars/1.png" />'; }
				elseif($stars > 4 && $stars < 5){
					echo '<img src="stars/1.png" /> <img src="stars/1.png" /> <img src="stars/1.png" /> <img src="stars/1.png" /> <img src="stars/0.png" />';
				}
			 	elseif($stars == 5){ echo '<img src="stars/1.png" /> <img src="stars/1.png" /> <img src="stars/1.png" /> <img src="stars/1.png" /> <img src="stars/1.png" />'; }
				
			?>
			</div>
		</div><br/>
			<div id="image" class="platillo-img">
				<img src="<?php echo $item["img_url"]; ?>" style="width:290px; height:100%; border-radius:4px;"/>
			</div>
		<div style="background:#5CC1A6; height:100%; font-size:14px; text-shadow:none; font-family:kot; padding:15px;">
			<br />
				<div style="width:100%;">
					<div style="width:98%; margin: 0 auto;">
						<div style="width:98%; float:left;">
							<?php
							   if($item["recomendacion"] != null){			
							?>
									<span style="font-size:14px; font-weight:bold; top:5px;">Recomendaciones: </span><br />
									<span style=" font-size:14px;"><?php echo $item["recomendacion"]; ?></span><br />
							<?php
						  		}
								else{
									echo '&nbsp;';
								}
							?>
						</div>
						<div style="clear:both;"></div>
					</div>
				</div>
			<br/>	
			<span style="font-size:14px; font-weight:bold; top:5px;">Equivale a: </span>
		<br /><br />
			<table width="100%" cellpadding="0" cellspacing="0" class="table-menu-detail" align="center">
				<?php
				   unset($duplicate["nombre"],$duplicate["id_menu"],$duplicate["rating"],$duplicate["img_url"],$duplicate["recomendacion"]);
				   foreach($duplicate as $key => $value):
					$key = str_replace('proteina','proteína',$key);
					$key = str_replace('lacteos','lácteos',$key);
				?>
				<tr>
					<td width="70%"><span style="padding-left:12px; width:100%; font-size:12px;"><span style="text-transform:capitalize;"><?php echo str_replace('_',' ',$key); ?></span></td>
					<td width="30%"><span style="padding-right:12px; width:100%; font-size:12px;"><span>
						<?php echo $value; ?>
					</span></td>
				</tr>
				<?php
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

---------
<?php
	
	print_r($list);

?>