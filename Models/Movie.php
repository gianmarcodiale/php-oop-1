<?php

class Movie
{
    public $poster;
    public $title;
    public $year;
    public $genre;
    public $duration;

    function __construct($poster, $title, $year, $genre, $duration)
    {
        $this->poster = $poster;
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->duration = $duration;
    }

    public function getMovie()
    {
        return $this->poster . ' ' . $this->title . ' ' . $this->year . ' ' . $this->genre . ' ' . $this->duration;
    }
}
