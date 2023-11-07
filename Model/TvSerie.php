<?php

class TvSerie extends Production {
  public $aired_from_year;
  public $aired_to_year;
  public $number_of_episodes;
  public $number_of_seasons;

  // construct con i parametri richiesti
  public function __construct(Media $_image = null,string $_title,string $_author,array $_genre,array $_actors,string $_language, int $_aired_from_year, $_aired_to_year,int $_number_of_episodes,int $_number_of_seasons){
    parent::__construct($_image,$_title,$_author,$_genre,$_actors,$_language);
    $this->aired_from_year = $_aired_from_year;
    $this->aired_to_year = $_aired_to_year;
    $this->number_of_episodes = $_number_of_episodes;
    $this->number_of_seasons = $_number_of_seasons;
  }

 

}