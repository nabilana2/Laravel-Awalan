<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('About',[
        "title" => "About",
        "nama" => "Nabila Nur Apriliyanti",
        "email" => "Nabilaapriliyanti@gmail.com",
        "gambar" => "Foto Almet.jpg"
    ]);
});
Route::get('/gallery', function () {
        return view('gallery', [
            "title" => "Gallery",
        ]);
});
Route::resource('/contacts',ContactController::class);

