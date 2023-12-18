<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
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
// khoi route cua test
Route::get('/', function () {
    return view('test.index');
});

Route::get('/product', function () {
    return view('test.product');
});

Route::get('/gallery', function () {
    return view('test.galllery');
});

Route::get('/about', function () {
    return view('test.about');
});


//dùng các link để gắn vào đường href cần dùng của các chức năng


Route::get('/login', [UserController::class, 'login']);
Route::post('/checkUser', [UserController::class, 'checkUser']);
Route::prefix('admin')->name('admin')->middleware('checkLogin')->group(function () {
    Route::get('users', [UserController::class, 'users'])->name("userlist");
    Route::get('displayAddUser', [UserController::class, 'displayAddUser']);
    Route::post('addUser', [UserController::class, 'addUser']);
    Route::get('resetPassword/{id}', [UserController::class, 'resetPassword']);
});
Route::prefix('user')->name('user')->middleware('checkLogin')->group(function () {
    Route::get('delete/{id}', [UserController::class, 'details'])->name("profile");
});


// khoi route cua book controller
Route::get('/book/index', [BookController::class, "index"]);

//getByPrice ben book controller
Route::get('/book/getPrice', [BookController::class, "getByPrice"]);

Route::get('/book/create', [BookController::class, "create"]);
//phuong thuc post cua form create
Route::post('/book/createSave', [BookController::class, "createPost"]);

Route::get('/book/update/{code}', [BookController::class, "update"]);

//luu lai POST, doc ra:GET
Route::post('/book/updateSave', [BookController::class, "updateSave"]);
// co doi so ($code) o bookcontroller ham delete// dùng /book/delete/{code}
Route::get('/book/delete/{code}', [BookController::class, "delete"]);
