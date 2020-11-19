<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 7/9/17
 * Time: 9:02 AM
 */
use \Davis\baseurl\BaseUrl;
use \Davis\directory\Directory;

/**
 * Twig Configurations
 */

$loader = new \Twig\Loader\FilesystemLoader(Directory::Dir() . '/develop/views/');
$twig = new \Twig\Environment($loader);

/**
 * Twig Functions
 */

$assets = new \Twig\TwigFunction('asset_davis', function ($text) {
	if (strpos($text, '.css')) {
		return BaseUrl::url() . 'theme/' . $text;
	}
	else {
		if (strpos($text, '.js')) {
			return BaseUrl::url() . 'theme/' . $text;
		}
		else {
			return BaseUrl::url() . 'theme/' . $text;
		}
	}
});

$route = new \Twig\TwigFunction('route', function ($route) {
	if (strlen($route) > 1) {
		return BaseUrl::url() . trim($route, '/');
	}
	else {
		return substr(BaseUrl::url(), 0, -1);
	}
});


/**
 * Twig Add Functions
 */

$twig->addFunction($assets);
$twig->addFunction($route);