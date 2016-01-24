<?php

include_once ROOT. '/app/models/News.php';

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

    function actionDelete($id)
    {
        header("Location: /news");
    }

    function actionEdit($id)
    {
        $newsItem = News::getNewsItemById($id);

        $this->view->generate('news/edit.php', 'template.php', $newsItem);

        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования
            $options['title'] = $_POST['title'];
            $options['announce'] = $_POST['announce'];
            $options['full_news'] = $_POST['full_news'];

            News::editNewsById($id, $options);

            header("Location: /news");
        }
    }
}
?>