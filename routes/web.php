<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\detailcontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/feedback', function () {
    return view('feedback');
})->middleware(['auth', 'verified'])->name('feedback');

Route::get('/kuesioner', function () {
    return view('kuesioner');
})->middleware(['auth', 'verified'])->name('kuesioner');

Route::get('/list',[usercontroller::class,'index'], function () {
    return view('list');
})->middleware(['auth', 'verified'])->name('list');

Route::get('/dashboard2', function () {
    return view('dashboard2');
})->middleware(['auth', 'verified'])->name('dashboard2');

Route::get('/detail',[detailcontroller::class,'index'], function () {
    return view('detail');
})->middleware(['auth', 'verified'])->name('detail');



Route::get('/add',[usercontroller::class,'create']);
Route::post('/add',[usercontroller::class,'store']);
Route::get('edit/{id}',[usercontroller::class,'edit']);
Route::get('/delete/{id}',[usercontroller::class,'delete']);
Route::put('update-data/{id}',[usercontroller::class,'update']);











Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('form/new',[App\Http\Controllers\kuesioner::class, 'index'])->name('form/new');
Route::post('form/save',[App\Http\Controllers\kuesioner::class, 'saveRecord'])->name('form/save');


require __DIR__.'/auth.php';
