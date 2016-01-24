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

}
?>