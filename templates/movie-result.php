<?php
include('../php/movieclass.php');

// Bekend als searchmovie

$postTitle = $_POST['title'];

$newTitle = MovieHelper::ReplaceTitle($postTitle);

$movieObj = new Movie($newTitle);
//echo '<pre>Object werkt: ' . $movie->Title() . '</pre>'; //testen van het object
echo '<fieldset>';
echo '	<h1>	'	.$movieObj->Title()	.	'</h1>';
echo '	<pre>	' 	.$movieObj->Year()		.'</pre>';
echo '<img src=" ' .$movieObj->Poster() . '" /> <br />';
echo '</fieldset>';

echo '<a href="index.php?page=addmoviedb&imdbID='.$movieObj->ImdbID().'"><button>Toevoegen aan mijn watchlist: </button></a>';
?>