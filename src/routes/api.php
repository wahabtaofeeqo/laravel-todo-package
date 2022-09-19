<?php

use Illuminate\Support\Facades\Route;
use WahabTaofeeqo\TodoApi\Controllers\TodoController;

Route::resource('todos', TodoController::class);