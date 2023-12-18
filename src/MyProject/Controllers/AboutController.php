<?php


namespace MyProject\Controllers;


use MyProject\Services\Db;
use MyProject\View\View;

class AboutController
{

    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function view()
    {

        $this->view->renderHtml('about/view.php', []);
    }
}