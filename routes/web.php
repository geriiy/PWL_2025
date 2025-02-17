<?php

use App\Http\Controllers\WelcomeController;
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

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', function () {
    return 'World';
   });
   
Route::get('/', function () {
    return 'Selamat Datang';
   });

Route::get('/about', function () {
    $nama = 'Gheriya';
    $nim = '2341720109';
    return "<p>Nama: $nama</p><p>NIM: $nim</p>";
});

// Route::get('/user/{name}', function ($name) {
    
//     return 'Gheriya '.$name;
//     });

Route::get('/posts/{post}/comments/{comment}', function
    ($postId, $commentId) {
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });

Route::get('/articles/{id}', function
    ($articleId) {
     return 'Halaman Artikel dengan ID '.$articleId;
    });

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });

