<?php


require 'functions.php';
require 'Groceries.php';


$pdo = connectToDb();

$groceries = fetchAllGroceries($pdo);

require 'index.view.php';