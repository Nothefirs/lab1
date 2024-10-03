<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\LabController; 
use App\Http\Middleware\CheckAge; 
use App\Http\Middleware\CheckName; 

// Визначаємо маршрути (роути)
Route::get('/', [LabController::class, 'index']); // Коли запит на кореневу URL, викликається метод index контролера LabController
Route::get('/about', [LabController::class, 'about'])->middleware(CheckAge::class);
Route::get('/contact', [LabController::class, 'contact']); 
Route::get('/hobbies', [LabController::class, 'hobbies'])->middleware(CheckName::class);


//  http://localhost/
//  http://localhost/about?age=20
//  http://localhost/contact
//  http://localhost/hobbies?name=Даня