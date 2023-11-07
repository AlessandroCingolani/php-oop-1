<?php
require_once __DIR__ . '/Model/Production.php';
require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/Model/TvSerie.php';
require_once __DIR__ . '/Model/Media.php';
require_once __DIR__ . '/db/db.php';

$test_movie = new Movie(new Media('', 'Copertina'),'Nuovo Olimpo','Ferzan Özpetek',['drammatico','sentimentale'],'italiano',2021,112);

$test_serie = new TvSerie(new Media('', 'Copertina'),'Pokemon','Ash',['drammatico','sentimentale'],'italiano',1990,2023,100,7);

var_dump($test_movie);
var_dump($test_serie);
die;
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
      <img src="<?php echo $movie->image?->file_name ?? 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled-1150x647.png' ?>" class="card-img-top" alt="<?php echo $movie->image?->name ?>">
      <div class="card-body">
        <h4 class="card-title">Title: <?php echo $movie->title  ?></h4>
        <h5>Author :<?php echo $movie->author  ?></h5>
        <h6 class="text-success">Genre :<?php echo implode(", " , $movie->genre)  ?></h6>
        <strong>Year: <?php echo $movie->year  ?></strong>
        <p>Duration: <?php echo $movie->duration  ?></p>
        <p>Language: <?php echo $movie->language  ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</body>
</html>