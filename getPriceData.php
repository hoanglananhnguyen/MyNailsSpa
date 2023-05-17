<?php
	//getImageData.php

	//get data from the database 
	$dsn = "mysql:host=localhost;dbname=nails_project;charset=utf8mb4";
	$dbusername = "root";
	$dbpassword = "root";

	$pdo = new PDO($dsn, $dbusername, $dbpassword);

	$stmt = $pdo->prepare("SELECT * FROM `prices`");
	
	$stmt->execute();

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$json = json_encode($results);
	echo($json);
?>