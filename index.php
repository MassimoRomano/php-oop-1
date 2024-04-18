<?php 
require_once __DIR__."/models/production.php";

$film1= new Production('The Shawshank Redemption','English', 9.3);
$film2 = new Production('The Godfather', 'English', 9.2);
$film3 = new Production('Pulp Fiction', 'English', 8.9,);
$film4 = new Production('The Dark Knight', 'English', 9.0);
$film5 = new Production('Schindler\'s List', 'English', 8.9,);
$film6 = new Production('Inception', 'English', 8.8, );

$films=[$film1,$film2,$film3,$film4,$film5,$film6];

var_dump($films);