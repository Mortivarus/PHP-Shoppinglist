<?php

function connectToDb(){
    try{
        return new PDO('mysql:host=127.0.0.1;dbname=groceries', 'root', '');
    } catch(PDOException $e){
        die($e->getMessage());
    }
}

//Die and dump
function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}


function fetchAllGroceries($pdo){
    $statement = $pdo->prepare('select * from groceries');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Groceries');
}