<?php
Class ControllerAbout extends Controller
{
    function actionIndex()
    {
        $this->view->generate('about_view.php', 'template_view.php');
    }
}

?>