<?php

class GroceriesController{
    public function create(){
        App::get('database')->insert('groceries', [
            'name' => $_POST['name'],
            'number'=> $_POST['number'],
            'price' => $_POST['price']
        ]);

        header('Location: /');
    }
}