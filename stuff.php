<?php

class AlimentosPermitidos
{
	var $alimentos_title = array(
								 1 => array("Aceites","aceites","Aceites Permitidos"),
							 	 2 => array("Bebidas","bebidas","Bebidas Permitidas"),
							   3 => array("Condimentos","condimentos","Condimentos Permitidos"),
							 	 4 => array("Frutas","frutas","Frutas Permitidas"),
							 	 5 => array("Lácteos","lacteos","Lácteos Permitidos"),
							 	 6 => array("Pan/Cereales/Leguminosas","cereales","Pan / Cereal Permitidos"),
							 	 7 => array("Proteína Animal","proteina_animal","Proteína Animal Permitida"),
							 	 8 => array("Proteína Vegetal","proteina_vegetal","Proteína Vegetal Permitida"),
							 	 9 => array("Verduras Cocidas","verduras_cocidas","Verduras Cocidas Permitidas"),
							 	 10=> array("Verduras Crudas","verduras_crudas","Verduras Crudas Permitidas")
								);
							
	var $alimentos_bebidas = array("todos" => array(
													 "Agua Natural" => "1.5 a 3 litros",
													 "Agua de jamaica natural sin azúcar" => "ilimitado",
													 "Coca light (solo Coca light)" => "máx. 3 a la semana",
													 "Café sin azúcar" => "máx. 3 al dia",
													 "Té sin azúcar" => "ilimitado"
												   )
								   );
								
	var $alimentos_aceites = array("todos" => array(
													"Canola" => "1 cdita",
													"Oliva" => "1 cdita"
												   )
								  );	
								
								
								var $alimentos_verduras_crudas = array("todos" => array(
																				"Acelga" => "100 g ó 2 tazas",
																				"Apio" => "100 g o 1 taza",
																				"Brócoli" => "100 g ó 1 taza",
																				"Calabacita" => "100 g ó 1 taza",
																				"Champiñones" => "100 g ó 1 1/2 taza",
																				"Chile jalapeño fresco" => "100 g ó 6 piezas",
																				"Chile poblano" => "100 g ó 1 taza",
																				"Chile serrano" => "100 g ó 1 taza",
																				"Col" => "100 g ó 1 1/2 tazas",
																				"Coliflor" => "100 g ó 1 taza",
																				"Corazón de palmito" => "100 g ó 3 piezas",
																				"Espinaca" => "100 g ó 2 tazas",
																				"Ejotes" => "100 g ó 1 taza",
																				"Esparragos" => "100 g ó 6 piezas",
																				"Lechuga (todo tipo)" => "100 g ó 2 tazas",
																				"Jícama" => "100 g ó 1 taza",
																				"Jitomate rojo" => "100 g ó 1/2 taza",
																				"Nopal" => "100 g ó 1 taza",
																				"Pepino" => "100 g ó 1 taza",
																				"Pimiento (sólo verde)" => "100 g ó 1 1/2 taza",
																				"Rabano" => "100 g ó 1 taza",
																				"Tomate(picado)" => "100 g ó 3 piezas",
																				"Zanahoria" => "100 g ó 1 piezas"
																			));												
	
	var $alimentos_condimentos = array("todos" => array(
															"Ajo crudo" => "1 diente",
															"Ajo en polvo" => "1/2 cdita",
															"Albahaca fresca" => "1 1/2 cdita",
															"Azafrán" => "1 cdita",
															"Canela molida" => "1 cdita",
															"Cebolla cruda" => "1 cucharada",
															"Chile piquín" => "20 piezas",
															"Cilantro" => "1 cucharada",
															"Clavo" => "1 cdita",
															"Comino" => "1/2 cdita",
															"Curry" => "1/2 cdita",
															"Hoja de laurel" => "1 hoja",
															"Mostaza" => "1/3 cdita",
															"Mostaza Dijón" => "1 cdita",
															"Nuez moscada" => "1 cdita",
															"Orégano" => "1 cdita",
															"Perejil" => "1/2 cdita",
															"Pimienta" => "1 cdita",
															"Romero" => "1/2 cdita",
																"Sal" => "1 cdita",
															"Tomillo" => "1/2 cdita",
															"Extracto de vainilla" => "1/2 cdita",
															"Vinagre de manzana o vino" => "7 cditas"
													   )
									  );
	var $alimentos_cereales = array("todos" => array(
															"Arroz integral" => "1/3 taza",
															"Avena integral cocida" => "3/4 taza",
															"Avena integral cruda" => "1/3 taza",
															"Cereal KOT" => "1 porción",
															"Galleta Soe light" => "1 1/2 piezas",
															"Pan integral" => "1 reb",
															"Pasta integral al dente" => "1/3 taza",
															"Pasta para sopa fusilli KOT" => "1/2 sobre",
															"Tortilla de Maíz" => "1 pieza (max 3/semana)",
															"Chícharos en lata" => "1/3 taza*",
															"Lenteja cocida" => "1/3 taza",
															"Frijoles" => "1/3 taza"
									 				),
									"mujer_intensiva" => array(
																"Avena integral cocida" => "3/4 taza",
																"Avena integral cruda" => "1/3 taza",
																"Cereal KOT" => "1 porción",
																"Galleta Soe light" => "1 1/2 piezas",
																"Pan integral" => "1 reb",
																"Pasta para sopa fusilli KOT" => "1/2 sobre",
															  ),
									);								
	
	
	
	var $alimentos_verduras_cocidas = array("todos" => array(
												"Acelga" => "100 g ó 2 tazas",
												"Apio" => "100 g o 1 taza",
												"Brócoli" => "100 g ó 1 taza",
												"Calabacita" => "100 g ó 1 taza",
												"Champiñones" => "100 g ó 1 1/2 tazas",
												"Chile jalapeño fresco" => "100 g ó 6 piezas",
												"Chile poblano" => "100 g ó 1 taza",
												"Chile serrano" => "100 g ó 1 taza",
												"Col" => "150 g ó 1 taza",
												"Coliflor" => "100 g ó 1 taza",
												"Corazón de palmito" => "100 g ó 3 piezas",
												"Espinaca" => "100 g ó 2 tazas",
												"Ejotes" => "100 g ó 1 taza",
												"Esparragos" => "9 piezas",
												"Lechuga (todo tipo)" => "100 g ó 2 tazas",
												"Jícama" => "100 g ó 1 taza",
												"Jitomate rojo" => "100 g ó 1/2 taza",
												"Nopal" => "150 g ó 1 taza",
												"Pepino" => "150 g ó 1/2 taza",
												"Pimiento (sólo verde)" => "150 g ó 1 1/2 taza",
												"Tomate(picado)" => "150 g ó 3/4 taza",
												"Tomatillo" => "150 g ó 4 piezas"
											));
	
	var $alimentos_frutas = array("todos" => array(
												"Cereza" => "20 piezas",
												"Ciruela" => "2 piezas",
												"Durazno" => "2 piezas",
												"Frambuesa" => "1 taza",
												"Fresa" => "1 taza",
												"Kiwi" => "1 1/2 piezas",
												"Limón" => "3 piezas",
												"Mandarina" => "1 piezas",
												"Manzana" => "1 piezas",
												"Melón" => "1 taza",
												"Naranja" => "1 piezas",
												"Pera" => "1/2 piezas",
												"Piña" => "3/4 tazas",
												"Toronja" => "1/2 tazas",												
												"Guayaba 2 piezas" => "(max 2/sem)",
												"Higo" => "3 piezas (max 2/sem)",
												"Lichi natural" => "12 piezas (max 2/sem)",
												"Mango" => "1/2 pieza (max 2/sem)",
												"Papaya" => "2/3 taza (max 2/sem)",
												"Pasas" => "10 piezas (max 2/sem)"
											),
									"mujer_intensiva" => array (
												"Cereza" => "20 piezas",
												"Ciruela" => "2 piezas",
												"Durazno" => "2 piezas",
												"Frambuesa" => "1 taza",
												"Fresa" => "1 taza",
												"Kiwi" => "1 1/2 piezas",
												"Limón" => "3 piezas",
												"Mandarina" => "1 piezas",
												"Manzana" => "1 piezas",
												"Melón" => "1 taza",
												"Naranja" => "1 piezas",
												"Pera" => "1/2 piezas",
												"Piña" => "3/4 tazas",
												"Toronja" => "1/2 tazas",
												)
											);

	var $alimentos_lacteos = array("todos" => array(
										"Leche de soya" => "1 tazas",
										"Leche descremada" => "1 tazas",
										"Queso cottage light" => "90g",
										"Queso panela" => "60g",
										"Yogurt vitalínea" => "2/3 tazas",
										"Yogurt sin azúcar light" => "2/3 tazas"
											));
	var $alimentos_proteina_animal = array("todos" => array(	
										"Bistec de res" => "120 g en crudo",
										"Bacalao" => "120 g en crudo",
										"Cuete de res" => "120 g en crudo",
										"Filete de res" => "120 g en crudo",
										"Milanesa de pollo" => "120 g en crudo",
										"Milanesa de res(sin empanizar)" => "120 g en crudo",
										"Pechuga de pollo sin piel" => "120 g en crudo",
										"Pechuga de pavo" => "120 g en crudo",
										"Roast beef" => "120 g en crudo",
										"T-Bone sin grasa" => "120 g en crudo",
										"Atún en agua" => "150 g en crudo",
										"Atún fresco" => "150 g en crudo",
										"Camarones" => "200 g en crudo",
										"Filete de pescado" => "200 g en crudo",
										"Pulpo" => "200 g en crudo",
										"Salmón ahumado o fresco" => "150 g en crudo",
											));

	var $alimentos_proteina_vegetal = array("todos" => array(
										"Almendras" => "10 almendras",
										"Crema de cacahuate" => "1 cucharada al ras",
										"Nueces" => "7 mitades de nuez"
											));
	
	var $productos_title = array(1 => "Productos Dulces",
							 2 => "Productos Salados",
							 3 => "Snacks");
							 
							
	var $informacion_productos = array ( "Dulces"=> array ( 
												1 => "Bebida enlatada sabor chocolate. Agitar antes de abrir. Se recomienda tomarse fría. No tomar la bebida despúes de 24 horas de estar abierta.",												
												4 => "Bebida sabor café capuchino Agrega 170 ml de agua fresca y calienta en el microondas en potencia alta durante 45 segundos. Añade el polvo y revuelve hasta obtener una mezcla homogénea. Sirve y estará listo.",
												6 => "Cereal integral con trozos de chocolate con leche. Fase intensiva:  Mide 5 cucharadas soperas, 40  g. o  el equivalente a 170 ml del envase mezclador de cereal KOT. Para acompañar agrega cualquier producto lácteo permitido en el método KOT. Fase progresiva:  Mide 7 cucharadas soperas, 55  g. o  el equivalente a 250 ml del envase mezclador de cereal KOT. * La ración sustituye al pan de la mañana. Este producto puede consumirse a diario.",
												7 => "Crema estilo arroz con leche. Agrega 60 ml de agua fresca. Añade el polvo y revuelve hasta obtener una mezcla homogénea. Sirve y enfría durante 5 minutos y estará listo.",
													8 => "Hot cakes. Agrega 75 ml de agua fresca y vacía el sobre. Bate con un tenedor hasta crear una mezcla homogénea. Aplica unas gotas de aceite en un sartén a fuego medio y agrega la mezcla. Cuando haya agujeritos en la masa (aprox. 2-3 min),  voltea el hot cake. Espera (aprox. 1-2 min) y estará listo.",
												9 => "Hot cakes con chispas de chocolate. Agrega 60 ml de agua fresca y vacía el sobre. Bate con un tenedor hasta crear una mezcla homogénea. Aplica unas gotas de aceite en un sartén a fuego medio y agrega la mezcla. Cuando haya agujeritos en la masa (aprox. 2-3 min), voltea  el hot cake. Espera (aprox. 1-2 min) y estará listo.",
													10 => "Kotquick – Bebida sabor chocolate. Agrega 170 ml de agua fresca. Añade el polvo y revuelve hasta obtener una mezcla homogénea. Sirve y enfría durante 5 minutos y estará listo. Para tomar caliente, calentar en el microondas durante 45 segundos en potencia alta. Para un mejor sabor se puede mezclar 85 ml de agua con 85 ml de leche descremada.",	
												
												13 => "Postre cremoso sabor caramelo. Agrega 120 ml de agua fresca. Añade el polvo y revuelve hasta obtener una mezcla homogénea. Sirve y enfría durante 5 minutos y estará listo.",
												14 => "Postre cremoso sabor chocolate. Agrega 120 ml de agua fresca. Añade el polvo y revuelve hasta obtener una mezcla homogénea. Sirve y enfría durante 5 minutos y estará listo.",
												16 => "Postre cremoso sabor chocolate con cereales crujientes. Agrega 120 ml de agua fresca. Añade el polvo y revuelve hasta obtener una mezcla homogénea. Sirve y enfría durante 5 minutos y estará listo.",
												15 => "Postre cremoso sabor vainilla. Agrega 120 ml de agua fresca. Añade el polvo y revuelve hasta obtener una mezcla homogénea. Sirve y enfría durante 5 minutos y estará listo.",												
												5 => "Bebida sabor naranja. Agrega 180 ml de agua fresca. Añade el polvo y revuelve hasta obtener una mezcla homogénea. Sirve y enfría durante 5 minutos y estará listo.",
												3 => "Bebida tipo smoothie sabor mango-maracuyá. Agrega 150 ml de agua fresca. Añade el polvo y revuelve hasta obtener una mezcla homogénea. Sirve y enfría durante 5 minutos y estara listo."
										),
										"Salados" => array(										     	
												11 => "Omelette sabor queso. Agrega 70 ml de agua fresca y vacía el sobre. Bate con un tenedor hasta crear una mezcla homogénea. Aplica unas gotas de aceite en un sartén a fuego medio y agrega la mezcla. Cuando haya agujeritos en la masa (aprox. 2-3 min), voltear  el omelette. Espera (aprox. 1-2 min) y estará listo. * Agrega  a la masa homogénea 2 claras de huevo o verduras permitidas para obtener un omelette más grande.",
												12 => "Omelette sabor tocino. Agrega 70 ml de agua fresca y vacía el sobre. Bate con un tenedor hasta crear una mezcla homogénea. Aplica unas gotas de aceite en un sartén a fuego medio y agrega la mezcla. Cuando haya agujeritos en la masa (aprox. 2-3 min), voltea  el omelette. Espera (aprox. 1-2 min) y estará listo. * Agrega  a la masa homogénea 2 claras de huevo o verduras permitidas para obtener un omelette más grande.",
												31 => "Pasta para sopa fusilli. Vacía 1 sobre en una olla con agua hirviendo. Sin tapar la olla, mantén el hervor dejando de 13 a 18 minutos, revolviendo de vez en cuando o hasta que esté al dente. Retira, escurre y sirve. Preparación en microondas: vacía a que quede sumergida la pasta en un recipiente con agua fresca y dejar de 9 a 10 minutos en potencia alta.  Retira, escurre y sirve. *1 sobre de pasta = 2 porciones KOT. **Fase Intensiva: 1 a 2 bolsas de Pasta´K por semana. **Fase Progresiva: 3 a 4 bolsas de Pasta´K por semana.",
												18 => "Puré de papa sabor tocino. Agrega 70 ml de agua fresca. Añade el polvo y revuelve hasta obtener una mezcla homogénea. Calienta en el microondas durante 20 segundos en potencia alta. Revuelve y sirve.  * El envase mezclador está hecho para uso en el microondas.",
												21 => "Sopa con champiñones. Agrega 150 ml de agua fresca y calienta en el microondas en potencia alta durante 1 minuto. Añade el polvo y revuelve hasta obtener una mezcla homogénea. Sirve y estará listo. * El envase mezclador está hecho para uso en el microondas.",
												19 => "Sopa cremosa sabor a pollo. Agrega 150 ml de agua fresca y calienta en el microondas en potencia alta durante 1 minuto. Añade el polvo y revuelve hasta obtener una mezcla homogénea. Sirve y estará listo.  * El envase mezclador está hecho para uso en el microondas.",
												20 => "Sopa cremosa sabor a verduras. Agrega 175 ml de agua fresca. Añade el polvo y revuelve hasta obtener una mezcla homogénea. Calienta en el microondas durante 20 segundos en potencia alta. Sirve y estará listo. * El envase mezclador está hecho para uso en el microondas."
										  ),
										"Snacks" => array (
												22 => "Barra crujiente de caramelo",												
												24 => "Barra de caramelo y chocolate",
												25 => "Barra de cereal sabor frutas rojas",												
												33 => "Cacahuates de soya",
												34 => "Galleta con chocolate con leche",												
												30 => "Galletas con turrón y trozos de chocolate"
												
										 ));
	
	
var 	$videos_data = array(
								"Hot Cake" => array(
														
														"link" => "yzxT-IQOsFY",
														"detail" => "Hot Cakes KOT",
														"image" => "img/videos_productos/hotcake.jpg",
														"pasos" => "Mismos pasos de preparación (solo revisar cantidad de agua) para :<br /><br />
																	Hot Cakes <br />
																	Hot Cakes con chispas de chocolate <br />
																	Omelet sabor tocino <br />
																	Omelet sabor queso
																	"
												
													),
								"Puré de papa sabor tocino" => array(
										
																		"link" => "StLRy0aGOes",
																		"detail" => "Puré de papa sabor tocino KOT",
																		"image" => "img/videos_productos/purepapa.jpg",
																		"pasos" => "Mismos pasos de pareparación (solo revisar cantidad de agua) para: <br /> <br />
																					Puré de papa sabor tocino<br />
																					Sopa de verduras"
																										
																	),
								"Smoothie Mango Maracuyá" => array(
																	"link" => "CKdgN16BDxo",
																	"detail" => "Smoothie sabor mango maracuyá KOT",
																	"image" => "img/videos_productos/smoothie.jpg",
																	"pasos" => "Mismos pasos de pareparación (solo revisar cantidad de agua) para:<br /><br />
																				<b>Bebidas:</b><br /><br />
																				Smoothie sabor mango maracuyá<br />
																				Bebida sabor naranja<br />
																				KOT Quick<br /><br />

																				<b>Postres:</b><br /><br />
																			    Sabor a chocolate con hojuelas de cereal<br />
																				Estilo arroz con leche<br />
																				Sabor chocolate<br />
																				Sabor vainilla<br />
																				Sabor caramel"
									
												
																	),
																	
								"Crema de Champiñones" => array(
																	"link" => "tDHMPntGhWY",
																	"detail" => "Crema de Champiñones KOT",
																	"image" => "img/videos_productos/cremachampi.jpg",
																	"pasos" => "Mismos pasos de pareparación (solo revisar cantidad de agua) para: <br /><br />
																				<b>Bebidas:</b><br /><br />
																				Sabor café capuchino<br /><br />

																				<b>Sopas:</b><br /><br />
																				Sabor a pollo<br />
																				De champiñones"
																
																),
								"Pasta en sartén" => array(
															"link" => "0C8IheVCRTM",
															"detail" => "Pasta en estufa KOT",
															"image" => "img/videos_productos/pasta.jpg",
															"pasos" => "
																Mismos pasos de pareparación (solo revisar cantidad de agua) para: <br /><br />
																Pasta KOT
															"
														  )
		
		
						);
						
		var $metodo_demo = array(


				'mujer'  => array(
					'intensivo' => array(
							'info' => 'Se muestra un ejemplo de un dia en el metodo KOT para una mujer con un requerimiento calorico de 1,150 kcal/dia<br /><br />No todas las personas tienen el mismo requerimiento calorico.',
							'desayuno' => '			
								<ul class="tablas-metodo" style="width:100%;">
									<li><span>1 <a href="productos.php">producto KOT</a></span></li>
									<li><span>1 <a href="verpermitido.php?id=6">cereal</a></span></li>
									<li><span>1 <a href="verpermitido.php?id=4">fruta</a></span></li>
									<li><span>1 <a href="verpermitido.php?id=5">l&aacute;cteo</a></span></li>
								</ul>',
								
							'comida' => '
								<ul class="tablas-metodo" style="width:100%;">
									<li><span>1 <a href="verpermitido.php?id=7">prote&iacute;na animal</a></span></li>
									<li><span>1 <a href="verpermitido.php?id=6">cereal</a></span></li>
									<li><span>1 <a href="verpermitido.php?id=10">verdura cruda</a></span></li>
									<li><span>1 <a href="verpermitido.php?id=9">verdura cocida</a></span></li>
									<li><span>2 <a href="verpermitido.php?id=1">2 cucharadas de aceite</a></span></li>
								</ul>',
									
							'colacion' => '
								<ul class="tablas-metodo" style="width:100%;">
									<li><span>1 <a href="productos.php">producto KOT</a></span></li>
									<li><span>1 <a href="verpermitido.php?id=4">fruta</a></span></li>
								</ul>',
									
							'cena' => '
							<ul class="tablas-metodo" style="width:100%;">
								<li><span>2 <a href="productos.php">producto KOT</a></span></li>
								<li><span>1 <a href="verpermitido.php?id=9">verdura cocida</a></span></li>
								<li><span>1 <a href="verpermitido.php?id=10">verdura cruda</a></span></li>
								<li><span>2 <a href="verpermitido.php?id=1">2 cucharadas de aceite</a></span></li>
							</ul>'
										),
																				
				'progresivo' => array(
					'info' => 'Se muestra un ejemplo de un dia en el metodo KOT para una mujer con un requerimiento calorico de 1,400 kcal/dia<br /><br />No todas las personas tienen el mismo requerimiento calorico',								
								'desayuno' => '			
												<ul class="tablas-metodo" style="width:100%;">
													<li><span>1 <a href="productos.php">producto KOT</a></span></li>
													<li><span>1 <a href="verpermitido.php?id=6">cereal</a></span></li>
													<li><span>1 <a href="verpermitido.php?id=4">fruta</a></span></li>
													<li><span>1 <a href="verpermitido.php?id=5">l&aacute;cteo</a></span></li>
												</ul>',

								'comida' => '
												<ul class="tablas-metodo" style="width:100%;">
													<li><span>1 <a href="verpermitido.php?id=7">prote&iacute;na animal</a></span></li>
													<li><span>2 <a href="verpermitido.php?id=6">cereal</a></span></li>
													<li><span>1 <a href=3"verpermitido.php?id=10">verdura cruda</a></span></li>
													<li><span>1 <a href=4"verpermitido.php?id=9">verdura cocida</a></span></li>
													<li><span>2 <a href="verpermitido.php?id=1">2 cucharadas de aceite</a></span></li>
												</ul>',

								'colacion' => '
												<ul class="tablas-metodo" style="width:100%;">
													<li><span>1 <a href="productos.php">producto KOT</a></span></li>
													<li><span>1 <a href="verpermitido.php?id=4">fruta</a></span></li>
													<li><span>1 <a href="verpermitido.php?id=6">cereal</a></span></li>
												</ul>',

								'cena' => '
												<ul class="tablas-metodo" style="width:100%;">
													<li><span>1 <a href="productos.php">producto KOT</a></span></li>
													<li><span>1/2 <a href="verpermitido.php?id=7">prote&iacute;na animal</a></span></li>
													<li><span>1 <a href="verpermitido.php?id=6">cereal</a></span></li>
													<li><span>1 <a href=4"verpermitido.php?id=9">verdura cocida</a></span></li>
													<li><span>1 <a href=3"verpermitido.php?id=10">verdura cruda</a></span></li>
													<li><span>2 <a href="verpermitido.php?id=1">2 cucharadas de aceite</a></span></li>
												</ul>'															
																				
				    					)

															 ),


					'hombre' => array(	
								'intensivo' => array(
						'info' => 'Se muestra un ejemplo de un dia en el metodo KOT para un hombre con un requerimiento calorico de 1,400 kcal/dia<br /><br />No todas las personas tienen el mismo requerimiento calorico',
														
									'desayuno' => '			
													<ul class="tablas-metodo" style="width:100%;">
														<li><span>1 <a href="productos.php">producto KOT</a></span></li>
														<li><span>1 <a href="verpermitido.php?id=6">cereal</a></span></li>
														<li><span>1 <a href="verpermitido.php?id=4">fruta</a></span></li>
														<li><span>1 <a href="verpermitido.php?id=5">l&aacute;cteo</a></span></li>
														<li><span>1 <a href="verpermitido.php?id=8">prote&iacute;na vegetal</a></span></li>
													</ul>',

									'comida' => '
													<ul class="tablas-metodo" style="width:100%;">
														<li><span>1 <a href="productos.php">producto KOT</a></span></li>
														<li><span>1 <a href="verpermitido.php?id=7">prote&iacute;na animal</a></span></li>
														<li><span>2 <a href="verpermitido.php?id=6">cereales</a></span></li>
														<li><span>1 <a href="verpermitido.php?id=9">verdura cocida</a></span></li>
														<li><span>1 <a href="verpermitido.php?id=10">verdura cruda</a></span></li>
														<li><span>2 <a href="verpermitido.php?id=1">2 cucharadas de aceite</a></span></li>
													</ul>',

									'colacion' => '
													<ul class="tablas-metodo" style="width:100%;">
														<li><span>1 <a href="productos.php">producto KOT</a></span></li>
														<li><span>1 <a href="verpermitido.php?id=4">fruta</a></span></li>
													</ul>',

									'cena' => '
													<ul class="tablas-metodo" style="width:100%;">
														<li><span>2 <a href="productos.php">producto KOT</a></span></li>
														<li><span>1 <a href="verpermitido.php?id=9">verdura cocida</a></span></li>
														<li><span>1 <a href="verpermitido.php?id=10">verdura cruda</a></span></li>
													</ul>'
													),
													
													
								'progresivo' => array(
						'info' => '	Se muestra un ejemplo de un dia en el metodo KOT para un hombre con un requerimiento calorico de 1,700 kcal/dia<br /><br />No todas las personas tienen el mismo requerimiento calorico',
						
						
						'desayuno' => '			
										<ul class="tablas-metodo" style="width:100%;">
											<li><span>1 <a href="productos.php">producto KOT</a></span></li>
											<li><span>2 <a href="verpermitido.php?id=6">cereales</a></span></li>
											<li><span>1 <a href="verpermitido.php?id=4">fruta</a></span></li>
											<li><span>1 <a href="verpermitido.php?id=5">l&aacute;cteo</a></span></li>
											<li><span>2 <a href="verpermitido.php?id=8">prote&iacute;nas vegetales</a></span></li>
										</ul>',

						'comida' => '
										<ul class="tablas-metodo" style="width:100%;">
											<li><span>1 <a href="verpermitido.php?id=7">prote&iacute;na animal</a></span></li>
											<li><span>3 <a href="verpermitido.php?id=6">cereales</a></span></li>
											<li><span>1 <a href="verpermitido.php?id=5">l&aacute;cteo</a></span></li>
											<li><span>1 <a href="verpermitido.php?id=10">verdura cruda</a></span></li>
											<li><span>1 <a href="verpermitido.php?id=9">verdura cocida</a></span></li>
											<li><span>2 <a href="verpermitido.php?id=1">2 cucharadas de aceite</a></span></li>
										</ul>',

						'colacion' => '
										<ul class="tablas-metodo" style="width:100%;">
											<li><span>1 <a href="productos.php">producto KOT</a></span></li>
											<li><span>1 <a href="verpermitido.php?id=4">fruta</a></span></li>
										</ul>',

						'cena' => '
										<ul class="tablas-metodo" style="width:100%;">
											<li><span>1 <a href="productos.php">producto KOT</a></span></li>
											<li><span>1 <a href="verpermitido.php?id=7">prote&iacute;na animal</a></span></li>
											<li><span>1 <a href="verpermitido.php?id=9">verdura cocida</a></span></li>
											<li><span>1 <a href="verpermitido.php?id=10">verdura cruda</a></span></li>
											<li><span>2 <a href="verpermitido.php?id=1">2 cucharadas de aceite</a></span></li>
										</ul>
								  '	)
)
							);
						
	
	
	
  function getTitulos($type) {
  	$titulos = $this->alimentos_title;
  	switch($type) {
  		case 1:
  			$titulos["6"][0] = "Pan/Cereales";
  			break;
  	}
  	return $titulos;
	}
	
	  function getTitulosProductos()
	{
		return $this->productos_title;
	}
	
	function getAlimentos($type)
	{
		$return_var = "alimentos_{$type}";
		return $this->$return_var;
	}
	
	function getProductos(){
		return $this->informacion_productos;
	}
	function getVideos(){
		return $this->videos_data;
	}
	function getDemo($id){
		$array_data = $this->metodo_demo;
		switch($id){
			case 1:
				return $array_data["hombre"]["intensivo"];
			break;	
			case 2:
				return $array_data["mujer"]["intensivo"];
			break;
			case 3:
				return $array_data["hombre"]["progresivo"];
			break;
			case 4:
				return $array_data["mujer"]["progresivo"];
			break;
		}
	}
		
	
}

?>