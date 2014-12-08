<?php

	$mongo = new Mongo();
	$db = $mongo->hackaton;
	$collection = $db->users;

	$username = $_GET['username'];
	$password = $_GET['password'];
	echo $username;
	echo $password;
	$userQuery = array('user' => $username);
	$users = $collection->find($userQuery);

	$aux = "invalid";
	foreach ($users as $doc) {
		if($doc['password'] === $password) {
			$aux = "valid";
		}
	}
	
	echo $aux;
?>