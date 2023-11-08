<?php

class Production
{
  use AiredYear;

  public $image;
  public $title;
  public $author;
  public $genre;
  public $actors;
  public $language;

  // construct con i parametri richiesti
  public function __construct(Media $_image = null, string $_title, string $_author, array $_genre, array $_actors, string $_language, int $_year)
  {
    $this->image = $_image;
    if (empty($_title) || empty($_author)) {
      throw new Exception('Non lasciare uno dei seguenti campi vuoti : Title-Author');
    } else {
      $this->title = $_title;
      $this->author = $_author;
    }
    $this->genre = $_genre;
    $this->year = $_year;


    // error per array attori vuoto
    if (empty($_actors)) {
      throw new Exception('Ci deve essere almeno un attore');
    } else {
      $this->actors = $_actors;
    }

    $this->language = $_language;
  }



  //  setto immagine
  public function setImage(Media $_image)
  {
    $this->image = $_image;
  }
}
