<?php

class QueryBuilder{
    
    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table){
        
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function addToTable($table, $var1, $var2, $var3){
        $statement = $this->pdo->prepare(
            "insert into {$table} ({$var1}, {$var2}, {$var3})
            values ({$_POST[$var1]}, {$_POST[$var2]}, {$_POST[$var3]})"
        );

        $statement->execute();
    }
}