<?php

class Genre
{
    public $genreList = [];

    function __construct(array $genreList)
    {
        foreach ($genreList as $genre) {
            $this->genreList[] = $genre;
        }
    }

    public function getString()
    {
        $res = "";

        foreach ($this->genreList as $key => $genre) {
            if ($key != count($this->genreList) - 1) {
                $res .= "{$genre} - ";
            } else {
                $res .= "{$genre}";
            }
        }

        return $res;
    }
}