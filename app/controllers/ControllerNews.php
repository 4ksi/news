<?php
class ControllerNews extends Controller
{
    function __construct()
    {
    }

    function actionIndex()
    {
        echo "FUCK U";
        $data = $this->model->get();
        $this->view->generate('news_view.php', 'template_view.php', $data);
    }

}
?>