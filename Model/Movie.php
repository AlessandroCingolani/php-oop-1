<?php

class Movie{
  public $image;
  public $title;
  public $author;
  public $genre;
  public $year;
  public $duration;
  public $language;

  // construct con i parametri richiesti
  public function __construct(Media $_image = null,string $_title,string $_author,array $_genre,int $_year,int $_duration,string $_language){
    $this->title = $_title;
    $this->author = $_author;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->convertMinute($_duration);
    $this->language = $_language;
  }

  // funzione per ottere ore minuti dai minuti totali forniti
  public function convertMinute($_duration){
    $this->duration = $_duration;
    $hours = floor($_duration / 60);
    $minutes = $_duration % 60;
    if($this->duration < 1){
      $converter = substr($this->duration, strpos($this->duration, '.') + 1);
      $this->duration = "$converter Min";
    }
    $this->duration = $hours . "h " . $minutes . "m";
  }

  //  setto immagine
  public function setImage(Media $_image){
    $this->image = $_image;
  }

}