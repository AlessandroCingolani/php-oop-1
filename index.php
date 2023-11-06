<?php
class Movie{
  public $title;
  public $author;
  public $genre;
  public $year;
  public $duration;
  public $language;

  public function __construct(string $_title,string $_author,array $_genre,int $_year,int $_duration,string $_language){
    $this->title = $_title;
    $this->author = $_author;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->convertMinute($_duration);
    $this->language = $_language;
  }

  public function convertMinute($_duration){
    $this->duration = $_duration;
    $hours = floor($_duration / 60);
    $minutes = $_duration % 60;
    if($this->duration < 1){
      $converter = substr($this->duration, strpos($this->duration, '.') + 1);
      $this->duration = "$converter Min";
    }
    $this->duration = $hours . "hr" . $minutes . "min";

  }

}

$nuovo_olimpo = new Movie('Nuovo Olimpo','Ferzan Özpetek',['drammatico','sentimentale'],2023,120,'italiano');
var_dump($nuovo_olimpo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP-1</title>
</head>
<body>
  
</body>
</html>