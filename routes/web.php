<?php

use Illuminate\Support\Facades\Route;
// Import natin ang controller na ginawa mo para mabasa ng Route
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Dito natin sinasabi na kapag binuksan ang "/" (home), 
// pupunta ito sa PortfolioController at hahanapin ang "index" function.
Route::get('/', [PortfolioController::class, 'index'])->middleware('portfolio.logs');