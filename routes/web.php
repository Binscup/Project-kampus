<?php

use App\Http\Livewire\Pages\CategoriesComponent;
use App\Http\Livewire\Pages\HomeComponent;
use App\Http\Livewire\Pages\BooksComponent;
use App\Http\Livewire\Pages\Categories\CreateComponent;
use App\Http\Livewire\Pages\Categories\UpdateComponent;
use App\Http\Livewire\Pages\Login;
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

Route::middleware(['guest'])->group(function () {
    Route::get("/", login::class);
});

Route::middleware(['auth'])->group(function () {

    Route::get("/home", HomeComponent::class)->name("dashboard")->middleware('auth');
    Route::get("/categories", CategoriesComponent::class)->name("categories");
    Route::get("/books", BooksComponent::class)->name("books");
    Route::get("/categories/create", CreateComponent::class)->name("categories.create");
    Route::get("/categories/{categoriesId}/update", UpdateComponent::class)->name("categories.update");
});

