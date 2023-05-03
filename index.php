<?php

class Movie
{
    public $title;
    public $poster;
    public $original_language;
    public $country;
    public $release_year;

    function __construct(string $title, string $poster, string $original_language, string $country, string $release_year)
    {
        $this->title = $title;
        $this->poster = $poster;
        $this->original_language = $original_language;
        $this->country = $country;
        $this->release_year = $release_year;
    }

    public function getStringDetails()
    {
        return "Titolo: {$this->title}<br>
                Lingua originale: {$this->original_language}<br>
                Paese di produzione: {$this->country}<br>
                Anno di rilascio: {$this->release_year}<br>";
    }
}

$movies = [
    new Movie("Avatar", "https://ae01.alicdn.com/kf/H74038a405a104a7fb4e35512d6e3f311A/AVATAR-MOVIE-SILK-POSTER-Wall-painting-24x36-pollici.jpg", "eng", "USA", "2009"),
    new Movie("Il ciclone", "https://pad.mymovies.it/filmclub/2002/08/330/locandina.jpg", "ita", "Italia", "1996")
];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    <h1>Movies</h1>

    <ul>
        <?php
        foreach($movies as $movie) {
            ?>
        <li><?= $movie->getStringDetails() ?></li>
            <?php
        }
        ?>
    </ul>
</body>
</html>