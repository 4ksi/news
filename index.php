<?php
require_once __DIR__ . '/vendor/autoload.php';

// Подключаем компоненты
define('ROOT', dirname(__FILE__));
require_once ROOT . '/app/load.php';

// Вызываем роутер
$router = new Router();
$router->start();

?>