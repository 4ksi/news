<?php
require_once __DIR__ . '/vendor/autoload.php';

// Подключаем компоненты
define('ROOT', dirname(__FILE__));
require_once ROOT . '/app/components/Router.php';
require_once ROOT.  '/app/components/Db.php';
require_once ROOT.  '/app/views/View.php';

// Вызываем роутер
$router = new Router();
$router->start();