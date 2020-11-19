<?php
/**
 * Created by PhpStorm.
 * User: el_patron
 * Date: 12-12-16
 * Time: 03:13 PM
 */

namespace DavisPostInstall;
/**
 * Class Installer
 * @package DavisPostInstall
 */

class Installer {

	public static function CreateProject() {
		@exec('cd web/theme && npm install && npm run production');
	}

	public static function PostInstall() {
		@exec('cd web/theme && npm install && npm run production');
	}

}