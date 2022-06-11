<?php

declare(strict_types=1);

namespace App;

require('./src/utils/debug.php'); //dodaje link do folderu z plikiem
require('./src/View.php');

$action = $GET['action'] ?? null;
$view = new View();
