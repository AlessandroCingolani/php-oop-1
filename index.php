<?php
require_once __DIR__ . '/Model/Production.php';
require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/Model/TvSerie.php';
require_once __DIR__ . '/Model/Media.php';
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
    foreach($media_list as $media):
    ?>

    <div class="card m-5" style="width: 18rem;">
      <img src="<?php echo $media ->image->file_name ?? 'img/img-not-found.png' ?>" class="card-img-top" alt="<?php echo $media->image->name ?>">
      <div class="card-body">
        <h4 class="card-title">Title: <?php echo $media->title  ?></h4>
        <h5>Author :<?php echo $media->author  ?></h5>
        <h6 class="text-success">Genre :<?php echo implode(", " , $media->genre)  ?></h6>
        <h6 class="text-success">Actors :<?php echo implode(", " , $media->actors)  ?></h6>
        <p>Language: <?php echo $media->language  ?></p>
        <p>Type:<?php echo get_class($media)  ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</body>
</html>