<?php
use Core\Entity\Post;
use Core\Usecase\CreatePost;
use PHPUnit\Framework\TestCase;

// Verify the use of PHPUnit
class CreatePostTest extends TestCase
{
  public function testCreate_A_New_Post() 
  {
    // Create a new Post
    $useCase = new CreatePost;

    // Initialisation of the new Post
    $post = $useCase->execute(
            [
              'title'   => 'Mon titre',
              'content' => 'Mon contenu',
              'publishedAt' => new DateTime()
            ]
    );

    //Test if $post if a instance of POST
    $this->assertInstanceOf(Post::class, $post);
  }
} 
