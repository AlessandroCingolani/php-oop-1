<?php

require_once __DIR__ . '/db/db.php';

class Movie{
  public $title;
  public $author;
  public $genre;
  public $year;
  public $duration;
  public $language;

  // construct con i parametri richiesti
  public function __construct(string $_title,string $_author,array $_genre,int $_year,int $_duration,string $_language){
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

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>OOP-1</title>
</head>
<body>
  <div class="container d-flex mt-5">
    <?php
    foreach($movies as $movie):
    ?>

    <div class="card m-5" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
      <h4 class="card-title"><?php echo $movie->title  ?></h4>
      <h5><?php echo $movie->author  ?></h5>
      <h6 class="text-success"><?php echo implode(", " , $movie->genre)  ?></h6>
      <strong>Year: <?php echo $movie->year  ?></strong>
      <p>Duration: <?php echo $movie->duration  ?></p>
      <p>Language: <?php echo $movie->language  ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</body>
</html>