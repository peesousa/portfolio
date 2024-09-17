<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get("/download", [FileController::class, "download"]);

Route::get("/contact", [ContactController::class, "index"])
    ->name('contact.index');

Route::post("/contact", [ContactController::class, "store"])
    ->name('contact.store');

