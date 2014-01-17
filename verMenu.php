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
	<div id="container">
		<div id="topbar">
				<span class="bar-title-top" style="top:10px; width:100%; text-align:center;"><?php if(strlen($item["nombre"]) > 23) echo substr($item["nombre"],0,23) . "..."; else echo $item["nombre"]?></span>
				<a href="#" data-rel="back"><img style="position:absolute; left:15px; top:5px;" src="img/back-26.png" width="42" height="31" /></a> 
		</div>
		<div id="stars-menu" style="position:relative;">
			<span style="position:absolute; top:9px; left:17px; text-shadow: 0.1em 0.1em #333; color:#fff; font-size:17px;">Calificación</span>
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
		</div>
		<div>
			<div id="image" style="background:black;">
				<img src="<?php echo $item["img_url"]; ?>" height="180" width="340" />
			</div>
		<div style="background:#fff; hegiht:100%;">
			<br />
		&nbsp;&nbsp;Equivale a:
		<br /><br />
			<table width="100%" cellpadding="0" cellspacing="0" class="table-menu-detail" align="center">
				<?php
				   unset($duplicate["nombre"],$duplicate["id_menu"],$duplicate["rating"],$duplicate["img_url"],$duplicate["recomendacion"]);
				   foreach($duplicate as $key => $value):
					$key = str_replace('proteina','proteína',$key);
					$key = str_replace('lacteos','lácteos',$key);
				?>
				<tr>
					<td width="70%"><span style="padding-left:12px; width:100%;"><span style="text-transform:capitalize;"><?php echo str_replace('_',' ',$key); ?></span></td>
					<td width="30%"><span style="padding-right:12px; width:100%;"><span>
						<?php echo $value; ?>
					</span></td>
				</tr>
				<?php
				  endforeach;
				?>	
			</table>


				

				<div style="width:100%;">
					<div style="width:96%; margin: 0 auto;">
					<div style="width:70%; float:left;">
						<?php
						   if($item["recomendacion"] != null){			
						?>
						<span style="font-size:12px; top:5px;">Recomendaciones : </span><br />
						<span style=" font-size:10px;"><?php echo $item["recomendacion"]; ?></span><br />
						<?php
					  		}
					else{
						echo '&nbsp;';
					}
						?>
					</div>
					<div style=" width:30%; float:left;">
						<a href="http://twitter.com/home/?status=Siguiendo el Método KOT comiendo <?php echo $item["nombre"]; ?> en <?php echo $_GET["rest"]; ?>"  target="__blank"><img src="img/tw.png" width="24" height="24" /></a> 
					
						<a onclick="publish_restaurant('<?php echo $item["nombre"]; ?>','<?php echo $_GET["rest"]; ?>');"><img src="img/fb.png" width="24" height="24" /></a>
					</div>
					<div style="clear:both;"></div>
					</div>
					<br />
				</div>

		</div>	
		</div>
	
	</div>
	
	
	
	<div style="background:url(img/Element-03.png); background-size:140%; border-top:solid 1px #d5d5d5; position:relative; width:320px; margin:0 auto; bottom:0; height:50px;">
		<div id="nav">
			<ul class="bot-menu">
				<a href="index.php"><li><img src="img/Element-08.png" width="35" height="35" /></li></a>
				<a href="restaurantes.php"><li><img src="img/active4.png" width="35" height="35" /></li></a>
				<a href="contacto.php"><li><img src="img/Element-10.png" width="35" height="35" /></li></a>
				<a href="perfil.php"><li><img src="img/Element-11.png" width="35" height="35" /></li></a>
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