<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

// Chiamata di una rotta usando i controller:
Route::get('/', [PageController::class, "index"]);