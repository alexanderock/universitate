<?php
	$mongo = new Mongo();
	$db = $mongo->hackaton;
	$collection = $db->news;


	$news = $collection->find();
	foreach ($news as $doc) {
		$aux = $aux.";".$doc["user"].",".$doc["text"];		
	}	
	echo $aux;
?>
