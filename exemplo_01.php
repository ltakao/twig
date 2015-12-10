<?php 

require_once 'lib/Twig/Autoloader.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('template');


/* Configuração com uso para cache
$twig = new Twig_Environment(
			$loader,
			array('cache' => 'template/cache')
		);
*/

$twig = new Twig_Environment(
			$loader,
			array('cache' => false)
		);

echo $twig->render('base.tpl.php', array('nome' => 'Zé Ninguém'));