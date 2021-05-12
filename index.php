<?php


require 'functions.php';


$groceries = [
    "Brood" => ["Product" => "Brood", "Prijs" => 1.00, "Aantal" => 0],
    "Broccoli" => ["Product" => "Broccoli", "Prijs" => 0.99, "Aantal" => 0],
    "Krentenbollen" => ["Product" => "Krentenbollen", "Prijs" => 1.20, "Aantal" => 0],
    "Noten" => ["Product" => "Noten", "Prijs" => 2.99, "Aantal" => 0]
];



require 'index.view.php';

try{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=groceries', 'root', '');
} catch(PDOException $e){
    die('could not connect.');
}



