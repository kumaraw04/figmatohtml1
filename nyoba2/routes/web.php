<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::get('/home', [LandingController::class, 'index']); // Mengarahkan ke method index


