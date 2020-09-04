<?php

include('../templates/headfunctions.php');
include('jsonconverter.php');

public class Movie
{
    public $title = "";
    public $year = "";
    public $imdbID = "";
    public $poster = "";

    function __construct($title)
    {
        $this->title = $title;
    }

    public function Title()
    {
        return $this->title;
    }
    public function Year()
    {
        return $this->year;
    }
    public function Poster()
    {
        return $this->poster;
    }
    public function setInfo()
    {
        $jsonconvert = new JsonConverter($this->title);
        $jsonconvert->setAPIUrl("http://www.omdbapi.com/?i=tt3896198&apikey=53723f39&t=");

        $this->propertries = $jsonconvert->Convert();
        $this->year = $jsonconvert->getMovieInfo("Year");
        $this->imdbID = $jsonconvert->getMovieInfo("imdbID");
        $this->poster = $jsonconvert->getMovieInfo("Poster");
    }
}

?>