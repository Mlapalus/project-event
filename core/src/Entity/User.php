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
        $post =new Post($title, $content, $date, $uuid);

        return $post;
    }

}