<?php

namespace MyProject\Models\Articles;

use MyProject\Services\Db;
use function Sodium\add;

class Article
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $text;

    /** @var string */
    private $authorId;

    /** @var string */
    private $createdAt;


    public function __set($name, $value)
    {
        $camelCaseName = $this->underscoreToCamelCase($name);
        $this->$camelCaseName = $value;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return Article[]
     */
    public static function findAll(): array
    {
        $db = new Db();
        return $db->query('SELECT * FROM `' . static::getTableName() . '`;', [], static::class);
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @param User $user
     */
    public function setAuthor(User $user): void
    {
        $this->authorId = $user->getId();
    }

    private static function getTableName(): string
    {
        return 'articles';
    }
    public static function createFromArray(array $fields, User $author): Article
    {
//        if (empty($fields['name'])) {
//            throw new InvalidArgumentException('Не передано название статьи');
//        }
//
//        if (empty($fields['text'])) {
//            throw new InvalidArgumentException('Не передан текст статьи');
//        }

        $article = new Article();

        $article->setAuthor($author);
        $article->setName($fields['name']);
        $article->setText($fields['text']);

        $db = new Db();
        $db->add('f', 'f');

        return $article;
    }
    private function underscoreToCamelCase(string $source): string
    {
        return lcfirst(str_replace('_', '', ucwords($source, '_')));
    }
}