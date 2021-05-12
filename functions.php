<?php

class Grocery {
    
}





function fetchAllGroceries($pdo){
    $statement = $pdo->prepare('select * from groceries');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_OBJ));
}