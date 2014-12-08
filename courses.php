<?php
	$mongo = new Mongo();
	$db = $mongo->hackaton;
	$collection = $db->courses;


	$courses = $collection->find();
	foreach ($courses as $doc) {
		$aux = $aux.";".$doc["name"].",".$doc["exams"].",".$doc["examDate"].",".$doc["nota1"].",".$doc["nota2"];
	foreach($doc["laboratoare"] as $key=>$value){
		$aux = $aux.",".$key.",".$value;	
	}
	foreach($doc["cursuri"] as $key =>$value){
		$aux = $aux.",".$key.",".$value;
	}
	foreach($doc["homework"] as $key =>$value){
		$aux = $aux.",".$key.",".$value;
	}		
	}	
	echo $aux;
?>
