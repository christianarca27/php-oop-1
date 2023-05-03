<?php

require_once './Models/Movie.php';
require_once './Models/Genre.php';

$movies = [
    new Movie("Avatar", "https://ae01.alicdn.com/kf/H74038a405a104a7fb4e35512d6e3f311A/AVATAR-MOVIE-SILK-POSTER-Wall-painting-24x36-pollici.jpg", "eng", "USA", "2009", new Genre(array("Azione", "Fantascienza", "Avventura"))),
    new Movie("Il ciclone", "https://pad.mymovies.it/filmclub/2002/08/330/locandina.jpg", "ita", "Italia", "1996", new Genre(array("Commedia", "Sentimentale"))),
    new Movie("John Wick", "https://pad.mymovies.it/filmclub/2014/08/105/locandina.jpg", "eng", "USA", "2014", new Genre(array("Azione", "Thriller"))),
    new Movie("Harry Potterand the Philosopher's Stone", "https://m.media-amazon.com/images/I/5199++-QxmL.jpg", "eng", "Gran Bretagna", "1997", new Genre(array("Fantasy")))
];