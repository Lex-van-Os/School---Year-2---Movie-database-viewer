<?php
//include('../config/DatabaseConfig.php');
include 'databaseclass.php';

$imdbID = $_GET['imdbID'];

$dbObj = new Database();
$dbObj->SQLBewerking('INSERT INTO film(ImdbID) VALUES(:imdbID)');
$dbObj->GeefWaardeMee(':imdbID', $imdbID, null);

$Qres = $dbjObj->Uitvoeren();

if($Qres)
    echo 'Film is succesvol toegevoegd';
else
    echo 'Er is iets mis gegaan';

?>