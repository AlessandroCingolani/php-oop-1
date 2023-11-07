<?php

class Movie extends Production {
  public $published_year;
  public $running_time;

  // construct con i parametri richiesti
  public function __construct(Media $_image = null,string $_title,string $_author,array $_genre,string $_language, int $_published_year,int $_running_time){
    parent::__construct($_image,$_title,$_author,$_genre,$_language);
    $this->published_year = $_published_year;
    $this->running_time = $_running_time;
  }

 

}