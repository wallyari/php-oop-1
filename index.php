<?php 
    require_once __DIR__ . '/classes/movie.php';
   
    $movies[ ] = new Movie("Taxi Driver ", "Drammatico", 1976);

    // var_dump($movies);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    
    <h1>Movies</h1>
    <ol>
        <?php foreach ($movies as $movie) { ?>
            <li>
                <?php echo $movie->getTitle() . ' - ' . $movie->getGenre() . ' - ' . $movie->getYear(); ?>
            </li>
        <?php } ?>
    </ol>
</body>
</html>