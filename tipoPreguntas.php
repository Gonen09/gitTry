<?php   
    
	include_once 'clase_pregunta.php';
	include_once 'clase_multiple.php';	
	
	function dibujo($id_pregunta){
		
		print "<div class=\"dibujo\" id=\"".$id_pregunta."\">";
		print		"<table id =\"orden\">";
		print			"<tr>";
		print				"<td>";
		print					"<label class=\"control-label\">Subir dibujo</label>";
		print					"<input id=\"dibujo\" name=\"dibujo\" type=\"file\" class=\"file\">";
		print				"</td>";
		print				"<td>";
		print					"<br><input type=\"checkbox\" id=\"activar\"> activar<br>";
		print				"</td>";
		print			"</tr>";
		print		"</table>";
        print "</div>";
	}

	function foto($id_pregunta){
		
		print "<div class=\"foto\" id=\"".$id_pregunta."\">";
		print		"<table id =\"orden\">";
		print			"<tr>";
		print				"<td>";
		print					 "<div class=\"form-group\">";
		print						"<label class=\"contol-label\">Subir foto</label>";
		print						"<input class=\"file\" id=\"foto\" type=\"file\" name=\"foto\">";
		print					"</div>";
		print				"</td>";
		print				"<td>";
		print					"<h4>Descripción de la fotografía</h4>";
		print						"<table id=\"campos-foto\">";
		print							"<tr>";
		print								"<td>";
		print									"<p>Preparación de:		</p>";				
		print								"</td>";
		print								"<td>";
		print									"<input type=\"text\" id=\"material\">";
		print								"</td>";
		print							"</tr>";
		print							"<tr>";
		print								"<td>";
		print									"<p>Tinción usada:       </p>";							
		print								"</td>";
		print								"<td>";
		print									"<input type=\"text\" id=\"tinte\"></input>";
		print								"</td>";
		print							"</tr>";
		print							"<tr>";
		print								"<td>";
		print									"<p>Diámetro del campo:   µ</p>";
		print								"</td>";
		print								"<td>";
		print									"<input type=\"text\" id=\"diametro\">";
		print								"</td>";
		print							"</tr>";
		print							"<tr>";
		print								"<td>";	
		print									"<p>Aumento total:        x</p>";
		print								"</td>";										
		print								"<td>";
		print									"<input type=\"text\"  id=\"aumento\">";
		print								"</td>";
		print							"</tr>";
		print							"<tr>";
		print								"<td>";
		print									"<p>Autor:               </p>";
		print								"</td>";
		print								"<td>";
		print									"<input type=\"text\" id=\"autor\">";
		print								"</td>";
		print							"</tr>";
		print							"<tr>";
		print								"<td>";
		print									"<p>Fecha:                </p>";
		print								"</td>";
		print								"<td>";
		print									"<input type=\"text\" id=\"fecha\">";
		print								"</td>";
		print							"</tr>";
		print						"</table>";
		print				"</td>";
		print				"<td>";
		print					"<br><input type=\"checkbox\" id=\"activar\"> activar<br>";
		print				"</td>";
		print			"</tr>";
		print		"</table>";              
        print    "</div>";
	}	   
	
	function titulo($id_pregunta,$texto_titulo){
		
		print	"<div class=\"titulo\" id=\"".$id_pregunta."\">";
		print		"<table id =\"orden\">";
		print			"<tr>";
		print				"<td>";
		print					"<h4 id =\"texto-pregunta\"><strong>".$texto_titulo."</strong></h4><br>";
		print				"</td>";
		print				"<td>";
		print					"<br><input type=\"checkbox\" id=\"activar\"> activar<br>";
		print				"</td>";
		print			"</tr>";
		print		"</table>";
		print   "</div>";
	}
	
	function texto($id_pregunta,$texto_pregunta){
		
		print	"<div class=\"texto\" id=\"".$id_pregunta."\">";
		print		"<table id =\"orden\">";
		print			"<tr>";
		print				"<td>";	
		print					"<h5 id =\"texto-pregunta\"><strong>".$texto_pregunta."</strong></h5><br>";
		print					"<input type=\"text\" name=\"respuesta-pregunta\"><br>";
		print				"</td>";
		print				"<td>";
		print					"<br><input type=\"checkbox\" id=\"activar\"> activar<br>";
		print				"</td>";
		print			"</tr>";
		print		"</table>";
		print	"</div>";
	}		

	function area($id_pregunta,$texto_pregunta){
		
		print	"<div class=\"area\"id=\"".$id_pregunta."\">";
		print		"<table id =\"orden\">";
		print			"<tr>";
		print				"<td>";
		print					"<h5 id =\"texto-pregunta\"><strong>".$texto_pregunta."</strong></h5><br>";
		print					"<textarea id=\"area-texto\" rows=\"4\" cols=\"50\">Ingrese sus observaciones aqui</textarea><br>";
		print				"</td>";
		print				"<td>";
		print					"<br><input type=\"checkbox\" id=\"activar\"> activar<br>";
		print				"</td>";
		print			"</tr>";
		print		"</table>";
		print	"</div>";
	}		

	/*Tipo : MULTIPLE*/
	
    function lista($id_pregunta,$texto_pregunta,$opciones){
		
		print	"<div class=\"lista\"id=\"".$id_pregunta."\">";
		print		"<table id =\"orden\">";
		print			"<tr>";
		print				"<td>";
		print					"<h5 id =\"texto-pregunta\"><strong>".$texto_pregunta."</strong></h5><br>";
		print					"<select>";
		
									 for($i = 0; $i<count($opciones);$i++){
										print "<option value=\"op".$i."\"> ".$opciones[$i]->valor."</option>";
									 }
									 
		print					"</select><br>";
		print				"</td>";
		print				"<td>";
		print					"<br><input type=\"checkbox\" id=\"activar\"> activar<br>";
		print				"</td>";
		print			"</tr>";
		print		"</table>";
		print	"</div>";
	}       
			
	function checkbox($id_pregunta,$texto_pregunta,$opciones){
		
		print	"<div class=\"checkbox\" id=\"".$id_pregunta."\">";
		print		"<table id =\"orden\">";
		print			"<tr>";
		print				"<td>";
		print					"<h5 id =\"texto-pregunta\"><strong>".$texto_pregunta."</strong></h5><br>";
		
								for($i = 0; $i<count($opciones);$i++){
									print "<input type=\"checkbox\" name=\"sel".$i."\"> ".$opciones[$i]->valor."<br>";
								}
								
		print				"</td>";
		print				"<td>";
		print					"<br><input type=\"checkbox\" id=\"activar\"> activar<br>";
		print				"</td>";
		print			"</tr>";
		print		"</table>";
		print	"</div>";
	}

	function radio($id_pregunta,$texto_pregunta,$opciones){
		
		print	"<div class=\"radio\" id=\"".$id_pregunta."\">";
		print		"<table id =\"orden\">";
		print			"<tr>";
		print				"<td>";
		print					"<h5 id =\"texto-pregunta\"><strong>".$texto_pregunta."</strong></h5><br>";
		
								for($i = 0; $i<count($opciones);$i++){
											print "<input type=\"radio\" name=\"sel".$i."\"> ".$opciones[$i]->valor."<br>";
								}
								
		print				"</td>";
		print				"<td>";
		print					"<br><input type=\"checkbox\" id=\"activar\"> activar<br>";
		print				"</td>";
		print			"</tr>";
		print		"</table>";
		print	"</div>";
	}		
?>