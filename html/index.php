<?php

use app\router\Route;

#Adicionado o aulto load de classe do PHP ou PSR-4
require  __DIR__ . '/../vendor/autoload.php';
#Com o metodos static
Route::router();