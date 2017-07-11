<?php
/**
 * Created by PhpStorm.
 * User: Luis Solorzano
 * Date: 08-21-16
 * Time: 05:55 PM
 */

namespace Davis\core\views;


use Davis\core\directory\Directory;
use Davis\core\security\Security;

class Views {
	private static $root = 'develop/views';
	private static $ext = '.html.twig';

	public function __construct($root, $ext) {
		self::$root = $root;
		self::$ext = $ext;
	}

	public static function go($views, $array = []) {
		require Directory::Dir().'/vendor/davidsolorzano20/core/html/HtmlResources.php';
		$twig_views = '';
		if (!empty($views)) {
			$file = str_replace('', '',$views);
			if ($views) {
				$folder_file = str_replace('.', '/', $views);
				$twig_views = $folder_file . self::$ext;
			} else {
				$twig_views = $file . self::$ext;
			}
		}
		return $twig->display($twig_views,$array);
	}

}
