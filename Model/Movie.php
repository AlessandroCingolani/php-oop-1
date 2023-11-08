<?php

class Movie extends Production
{
  public $published_year;
  public $running_time;

  // construct con i parametri richiesti
  public function __construct(Media $_image = null, string $_title, string $_author, array $_genre, array $_actors, string $_language, int $_year, int $_running_time)
  {
    parent::__construct($_image, $_title, $_author, $_genre, $_actors, $_language, $_year);
    $this->published_year = parent::getYear();
    $this->running_time = $_running_time;
  }
}
