<?php
require_once __DIR__ . '/vendor/autoload.php';

// Подключаем автолоадер классов
define('ROOT', dirname(__FILE__));
require_once ROOT . '/app/components/Autoload.php';

// Вызываем роутер
$router = new Router();
$router->start();