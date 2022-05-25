<?php

class Movie
{
    public $title;
    public $year;
    public $genre;
    public $duration;

    function __construct($title, $year, $genre, $duration)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->duration = $duration;
    }

    public function getMovie()
    {
        return $this->title . ' ' . $this->year . ' ' . $this->genre . ' ' . $this->duration;
    }
}
