<?php
class Controller
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

}
?>