<?php

class Production{
  public $image;
  public $title;
  public $author;
  public $genre;
  public $actors;
  public $language;

  // construct con i parametri richiesti
  public function __construct(Media $_image = null,string $_title,string $_author,array $_genre,array $_actors,string $_language){
    $this->image = $_image;
    $this->title = $_title;
    $this->author = $_author;
    $this->genre = $_genre;
    $this->actors = $_actors;
    $this->language = $_language;
  }



  //  setto immagine
  public function setImage(Media $_image){
    $this->image = $_image;
  }

}