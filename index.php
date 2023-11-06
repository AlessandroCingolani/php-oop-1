<?php
class Movie{
  public $title;
  public $genre;
  public $year;
  public $duration;
  public $language;

  public function __construct(string $_title,array $_genre,int $_year,float $_duration,array $_language){
    $this->title = $_title;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->duration = $_duration;
    $this->language = $language;
  }

}


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