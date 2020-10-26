<?php

namespace Core\Usecase;

use Core\Entity\Post;

// Create a Post with a data array
class CreatePost {
    public function execute(array $postData): ?Post {

      $post = new Post(
                        $postData['title'], 
                        $postData['content'],
                        $postData['publishedAt']
      );
      return $post;
    }
}