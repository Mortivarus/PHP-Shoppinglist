<?php

class PagesController{
    public function create(){
        return view('create');
    }

    public function index(){
        $groceries = App::get('database')->selectAll('groceries');

        return view('index', compact('groceries'));
    }

}