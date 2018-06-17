<?php

  class Commentary extends Post{
    private $id;
    private $postId;
    private $memberId;
    private $text;
    private $date;

    public function __construct($id, $postId, $memberId, $text, $date) {
      $this->id = $id;
      $this->postId = $postId;
      $this->memberId = $memberId;
      $this->text = $text;
      $this->date = $date;
    }

  }
?>
