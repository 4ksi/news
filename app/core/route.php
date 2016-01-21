<?php
class Route
{
    static function start()
    {
        // Контроллер и действие по умолчанию
        $controller_name    = 'news';
        $action_name        = 'index';


        // Разбиваем url
        $routes = explode('?', $_SERVER['REQUEST_URI']);

        // Получаем имя контроллера
        if (!empty($routes[1])) {
            $controller_name = $routes[1];
        }
        
        // Получаем имя экшена
        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }


        // Добавляем префиксы
        $model_name         = 'model_'.$controller_name;
        $controller_name    = 'controller_'.$controller_name;
        $action_name        = 'action_'.$action_name;


        // Подцепляем файл с классом модели (файла модели может и не быть)
        $model_file = strtolower($model_name).'.php';
        $model_path = "app/models/".$model_file;
        // Если файл существует - подключаем
        if (file_exists($model_path)) {
            include "app/models/".$model_file;
        }


        // Подцепляем файл с классом контроллера
        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "app/controllers/".$controller_file;

        // Если файл существует - подключаем
        if (file_exists($controller_path)) {
            include "app/controllers/".$controller_file;
        } else {
            // TODO: THROW EXCEPTION
        }


        // Создаем контроллер
        $controller = new $controller_name;
        $action = $action_name;

        // Если метод существует - вызываем
        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            // TODO: THROW EXCEPTION
        }
    }
}
?>
