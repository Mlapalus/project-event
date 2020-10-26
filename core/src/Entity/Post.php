<?php

namespace Core\Entity;

use DateTimeInterface;

class Post 
{
  public string $title;
  public string $content;
  public ?DateTimeInterface $createdAt;
  public string $uuid;

  public function __construct(
                              string $title ='', 
                              string $content ='', 
                              ?DateTimeInterface $createdAt = null,
                              ?string $uuid = null) 
  {
    $this->title = $title;
    $this->content = $content;
    $this->createdAt = $createdAt;
    $this->uuid = $uuid ?? uniqid();
  }
}