<?php
	$mongo = new Mongo();
	$db = $mongo->hackaton;
	$collection = $db->avizier;


	$courses = $collection->find();
	foreach ($courses as $doc) {
		$aux = $aux.$doc["user"].",".$doc["text"].";";
	}
	echo $aux;
?>
