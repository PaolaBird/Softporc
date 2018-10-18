<?php 

require_once('./Controllers/Autoload.php');
$autoload = new Autoload();

$route = isset($_GET['ruta']) ? $_GET['ruta'] :'home';
$softporc = new Router($route);