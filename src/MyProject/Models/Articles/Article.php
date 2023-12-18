<?php

namespace MyProject\Models\Articles;

use MyProject\Models\Users\User;

class Article
{
    private $title;
    private $text;
    private $author;
    private $id;

    public function __construct(string $title, string $text, User $author, $id)
    {
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getAuthor(): User
    {
        return $this->author;
    }

    public function getId()
    {
        return $this->id;
    }
}