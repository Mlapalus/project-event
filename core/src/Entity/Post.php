<?php

namespace Core\Entity;

use DateTime;
use DateTimeInterface;

class Post 
{
  public string $title;
  public string $content;
  public ?DateTimeInterface $publishedAt;
  public string $uuid;

  public function __construct(
                              string $title ='', 
                              string $content ='', 
                              ?DateTimeInterface $publishedAt = null, 
                              ?string $uuid = null) 
  {
    $this->title = $title;
    $this->content = $content;
    $this->publishedAt = $publishedAt;
    $this->uuid = $uuid ?? uniqid();
    
  }
}