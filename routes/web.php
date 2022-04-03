<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamesController;


Route::get('/', [JamesController::class, 'index']);
Route::get('/chapter/{chapter_number}', [JamesController::class, "readByChapter"]);
