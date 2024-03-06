<?php

namespace MyProject\Controllers;

use MyProject\Models\Articles\Article;
use MyProject\Services\Db;
use MyProject\View\View;

class ArticlesController
{
    /** @var View */
    private $view;

    /** @var Db */
    private $db;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
        $this->db = new Db();
    }

    public function add(): void
    {

//        $article = new Article();
//        $article->setName($_POST['name']);
//        $article->setText($_POST['text']);
//        $article->setAuthor($_POST[$authorId]);

//        echo 1;

        $this->view->renderHtml('articles/add.php');
    }
    public function addd(): void
    {



echo 1;
echo $_POST['name'];
$this->db->add($_POST['name'], $_POST['text']);
//        $this->view->renderHtml('articles/add.php');
    }

    public function view(int $articleId): void
    {
        $article = Article::getById($articleId);

        if ($article === null) {
            throw new NotFoundException();
        }

        $this->view->renderHtml('articles/view.php', [
            'article' => $article
        ]);
    }

    public function one(){

    }
}