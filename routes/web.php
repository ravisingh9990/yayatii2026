<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\PublicationController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\TeamController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/project', [ProjectController::class, 'index']);
Route::get('/portfolio', [PortfolioController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']);
Route::get('/publication', [PublicationController::class, 'index']);
Route::get('/team', [TeamController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/404', [NotFoundController::class, 'index']);
