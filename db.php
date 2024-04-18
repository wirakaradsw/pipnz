<?php

	// connect to database local dev
	$db = new PDO('mysql:host=localhost;dbname=pipnz;charset=utf8', 'root', '');
	
	// connect to database hosting
	//$db = new PDO('mysql:host=localhost;dbname=wirakara_pipnz;charset=utf8', 'wirakara_devpipnz', 'D3vpipNZ');

 	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>