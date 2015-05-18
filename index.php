<?php

require 'autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl']:'News';
$act = isset($_GET['act']) ? $_GET['act']:'All';

$controllerName = $ctrl."Controller";

//require_once __DIR__."/controllers/".$controllerName.".php";

$controller = new $controllerName();

$action = "action".$act;

$controller->$action();


?>