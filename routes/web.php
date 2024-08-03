<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//route :: get('/', function () {
//    return ('welcome');
//});

//route :: get('/say/{id}/{date}', function ($id, $date) {
//    return "hallo " .$id. " umur saya " .$date;
//});

//route :: get('/login', function () {
//    return ('login');
//});

//route :: get('/contact/{id}', function ($id) {
//    return "contact" .$id;
//});
route :: get('/apa/{id}', function ($id) {
    return view('user', ['id' => $id]);
});
