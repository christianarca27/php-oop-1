<?php

class Movie
{
    public $title;
    public $poster;
    public $original_language;
    public $country;
    public $release_year;
    public $genre;

    function __construct(string $title, string $poster, string $original_language, string $country, string $release_year, Genre $genre)
    {
        $this->title = $title;
        $this->poster = $poster;
        $this->original_language = $original_language;
        $this->country = $country;
        $this->release_year = $release_year;
        $this->genre = $genre;
    }

    public function getStringDetails()
    {
        return "Titolo: {$this->title}<br>
                Lingua originale: {$this->original_language}<br>
                Paese di produzione: {$this->country}<br>
                Anno di rilascio: {$this->release_year}<br>
                Genere: {$this->genre->getString()}<br>";
    }
}