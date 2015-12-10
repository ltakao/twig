<?php 

	require 'app.php';

	if(!isset($_GET['page'])) {
		$site = 'home';
	} else {
		$site = $_GET['page'];
	}

	// Nome do controller será: page.controller.php
	$controller = $site . '.controller.php';

	if(!file_exists('controller/' .$controller)) {
		$controller = '404.controller.php';
	}

	require 'controller/' . $controller;