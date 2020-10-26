<?php


namespace Core\Entity;

use Core\Entity\Post;


class User
{
    public function isConnected()
    {
        return true;
    }

    public function createPost(string $title, string $content): Post
    {
        $date = new \DateTime();
        $uuid = uniqid("event", true);
        return new Post($title, $content, $date, $uuid);

    }

    public function readPost(string $content)
    {
        $date = new \DateTime('2020-10-10');
        $uuid = "azerty";
        return new Post('Mon titre', $content, $date, $uuid);
    }

}