<?php

require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/db/db.php';



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
  <div class="container d-flex flex-wrap mt-5">
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