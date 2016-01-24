<?php
Class ControllerAbout
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
        $this->view->generate('about/index.php', 'template.php');
    }
}

?>