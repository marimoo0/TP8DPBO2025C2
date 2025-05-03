<?php
class BaseController
{

    protected function render($view, $data = [])
    {
        extract($data);

        include_once 'views/templates/header.php';

        include_once 'views/' . $view . '.php';

        include_once 'views/templates/footer.php';
    }

    protected function redirect($url)
    {
        header("Location: $url");
        exit;
    }
}