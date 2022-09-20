<?php

use Illuminate\Support\Facades\Route;
use Wahabtaofeeqo\TodoApi\Controllers\TodoController;

Route::resource('todos', TodoController::class);