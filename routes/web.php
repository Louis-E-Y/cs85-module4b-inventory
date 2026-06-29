<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('HELLO WORLD HELLO PHP PROFESSOR');
});
Route::get('/module2a/price_engine_refactored', function () {
    include public_path('module2a/price_engine_refactored.php');
});