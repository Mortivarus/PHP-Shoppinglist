<?php

$query = require 'bootstrap.php';


require 'functions.php';

$groceries = $query->selectAll('groceries');

require 'views/index.view.php';

require 'views/create.view.php';