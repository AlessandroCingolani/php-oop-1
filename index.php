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
    $this->duration = $_duration;
    $this->language = $_language;
  }

}

$nuovo_olimpo = new Movie('Nuovo Olimpo','Ferzan Özpetek',['drammatico','sentimentale'],2023,112,'italiano');

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