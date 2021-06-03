<?php

$router->get('', 'PagesController@index');

$router->get('create', 'PagesController@create');

$router->post('groceries', 'GroceriesController@create');

