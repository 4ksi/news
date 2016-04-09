<?php
class Router
{

    private $routes;

    public function __construct()
    {
        // Указываем путь к файлу с маршрутами
        $routesPath = (ROOT . '/app/config/routes.php');
        $this->routes = include($routesPath);
    }

    // Получаем строку запроса
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
                // Меняем uri на path
                $internalRoute = preg_replace("~uriPattern~", $path, $uri);
                // Разбиваем
                $segments = explode('/', $internalRoute);

                // Задаем имя контроллера
                $controllerName = 'Controller'.ucfirst(array_shift($segments));
                // Задаем имя экшена
                $actionName = 'action'.ucfirst(array_shift($segments));
                // Оставшиеся параметры присваем переменной $parameters
                $parameters = $segments;


                //Подключаем файл контроллера
                $controllerFile = ROOT . '/app/controllers/' . $controllerName . '.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                //Создаем объект контроллера
                $controllerObject = new $controllerName;

                // Вызываем controllerObject->actionName с $parameters
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                if ($result != null) {
                    break;
                }
            }
        }
    }
}
