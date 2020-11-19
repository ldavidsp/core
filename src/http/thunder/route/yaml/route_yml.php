<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2/4/17
 * Time: 5:43 PM
 */

use Davis\http\session\Session;
use \Davis\http\thunder\route\router\Routing;
Session::start();

$router = new Routing();
require 'script.php';
$router->run();