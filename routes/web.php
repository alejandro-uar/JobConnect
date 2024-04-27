<?php

use App\Http\Controllers\Auth\Authenticate;
use App\Http\Controllers\Crud;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [Authenticate::class, 'get_form'])->name('login');
Route::post('/sing_in', [Authenticate::class, 'authenticate'])->name('sing_in');

Route::middleware('auth')->group(function(){
    Route::get('/', [Crud::class, 'index'])->name('index');
    Route::get('/logout', [Authenticate::class, 'logout'])->name('logout');
    Route::get('/red', [PostController::class, 'get_all'])->name('red');
    Route::get('/red/add_post',[PostController::class, 'get_form'])->name('post_form');
    Route::post('/post',[PostController::class, 'post'])->name('post');
    Route::get('/perfil/{id}', [Crud::class, 'actualizar_view_perfil'])->name('view_edit_p');
    Route::post('/perfil/{id}', [Crud::class, 'actu_perfil'])->name('edit_p');
});


// Route requiring both auth and admin middleware
Route::middleware(['auth','admin'])->group(function(){
    Route::get('/registrar', [Crud::class, 'view_form'])->name('view_form');
    Route::post('/registrar', [Crud::class, 'registrar'])->name('add');
    Route::post('/search', [Crud::class, 'search'])->name('search');
    Route::get('/actualizar/{id}', [Crud::class, 'actualizar_v'])->name('view_edit');
    Route::post('/actualizar/{id}', [Crud::class, 'actualizar'])->name('edit');
    Route::get('/eliminar/{id}', [Crud::class, 'eliminar'])->name('eliminar');
});


Route::get('/no-tienes-acceso', function(){
    return "No tienes acceso! regresa.";
});