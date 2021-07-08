<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

//ホーム画面表示
Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('home', [HomeController::class,'home'])->name('home');

Auth::routes();

// Route::get('/mypage', 'HomeController@index')->name('mypage');

//マイページ画面表示
Route::get('mypage', [HomeController::class,'mypage'])->name('mypage');

//棚作成
Route::post('/create', "HomeController@exeCreate")->name('create');

