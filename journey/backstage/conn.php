<?php
	require("utilityClass/conn.class.php");

	$mongo = new connMongodb("127.0.0.1:27017");

	$mongo->selectDb("journey");
	// echo "<pre>";

	// print_r($mongo->find("users"));
