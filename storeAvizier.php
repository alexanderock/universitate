<?php

	$mongo = new Mongo();
	$db = $mongo->hackaton;
	$collection = $db->avizier;

	$user = $_POST['user'];
	$text = $_POST['text'];

	$collection->insert(array('user' => $user, 'text' => $text));

?>