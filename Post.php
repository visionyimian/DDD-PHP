<?php

class Post
{
    private $title;
    private $content;

    public static function writeNewForm($title, $content)
    {
        return new static($title, $content);
    }

    private function __construct()
    {
        $this->setTitle($title);
        $this->setContent($content);
    }

    private function setTitle($title)
    {
        $this->title = $title;
    }

    private function setContent($content)
    {
        $this->content = $content;
    }
}


class PostRepository
{

}