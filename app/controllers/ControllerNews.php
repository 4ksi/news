<?php
class ControllerNews
{

    function __construct()
    {
        $this->view = new View();
    }


    function action()
    {
        $this->actionIndex();
    }

    function actionIndex()
    {
        $newsList = array();
        $newsList = News::getNewsList();

        $this->view->generate('news/index.php', 'template.php', $newsList);
    }

    function actionView($id)
    {
        $newsItem = News::getNewsItemById($id);

        $this->view->generate('news/view.php', 'template.php', $newsItem);

    }

    function actionAdd()
    {

        $this->view->generate('news/add.php', 'template.php');

        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $values['title']      = $_POST['title'];
            $values['announce']   = $_POST['announce'];
            $values['full_news']  = $_POST['full_news'];

            // Флаг ошибок в форме
            $errors = false;

            // Если не заполнена форма
            if (!isset($values['title']) & !isset($values['announce']) & !isset($values['full_news'])) {
                $errors[] = 'Заполните поля';
                echo $errors[0];
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новую новость
                $id = News::addNews($values);
            };

            header("Location: /news/");
            exit;

            }
    }

    function actionEdit($id)
    {
        $newsItem = News::getNewsItemById($id);

        $this->view->generate('news/edit.php', 'template.php', $newsItem);

        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования
            $options['title']      = $_POST['title'];
            $options['announce']   = $_POST['announce'];
            $options['full_news']  = $_POST['full_news'];

            if (News::editNewsById($id, $options)){
                header("Location: /news/view/$id");
            }
        }
    }

    function actionDelete($id)
    {
        News::deleteItem($id);
        header("Location: /news");
    }
}
?>