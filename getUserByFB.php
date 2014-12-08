<?php

	$mongo = new Mongo();
	$db = $mongo->hackaton;
	$collection = $db->users;

	$uid = $_POST['uid'];
	$userQuery = array('id_fb' => $uid);
	$users = $collection->find($userQuery);

	$aux = "";
	foreach ($users as $doc) {
		$aux = $doc['user'];
	}
	
	echo $aux;
?>