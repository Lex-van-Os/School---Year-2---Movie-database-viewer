<?php
include('jsonconverter.php');

$title = $_POST['title'];

$jsonConvert = new JsonConverter($title);

$jsonConvert->setAPIUrl("http://www.omdbapi.com/?i=tt3896198&apikey=53723f39&t=");

$jsonConvert->Convert($jsonConvert->url, $jsonConvert->input);

$movieInfoImage = $jsonConvert->getMovieInfo("Poster");
$movieInfoTitle = $jsonConvert->getMovieInfo("Title");

echo '<h1>' .$movieInfoTitle. '</h1>';
echo '<img src="'.$movieInfoImage.'" /><br />';
echo "<button>toevoegen</button>";

?>