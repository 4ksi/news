<?php
class Router
{

    private $routes;

    public function __construct()
    {
        $routesPath = (ROOT.'/app/config/routes.php');
        $this->routes = include($routesPath);
    }


    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI']))  {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function start()
    {
        // Получаем строку запроса
        $uri = $this->getURI();

        // Проверяем config/routes на наличие такого запроса
        foreach ($this->routes as $uriPattern => $path) {

            // Сравниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {
                $segments = explode('/', $path);
                $controllerName = 'Controller'.ucfirst(array_shift($segments));

                $actionName = 'action'.ucfirst(array_shift($segments));

                //Подключаем файл контроллера
                $controllerFile = ROOT . '/app/controllers/' . $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                //Создаем объект контроллера
                $controllerObject = new $controllerName;
                $result = $controllerObject->$actionName();
                if ($result != null) {
                    break;
                }
            }
        }
    }
}
?>
