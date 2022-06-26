<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/team', [SiteController::class, 'team'])->name('team');

// Quiz routes for admin and guests
Route::get('/quiz', [SiteController::class, 'quiz'])->name('quiz');
Route::get('/quizplay/{id}', [SiteController::class, 'quizplay']);
Route::get('/quizend/{perc}', [SiteController::class, 'quizend']);


Route::get('/admin', [AdminController::class, 'index']);
Route::post('/edit-content/{id}', [AdminController::class, 'editContent']);
Route::get('/admin-quizz', [AdminController::class, 'adminquizz']);

Route::get('admin-quizz/category/{id}', [AdminController::class, 'Category']);

Route::get('admin-quizz/edit-category/{id}',[AdminController::class, 'editCategory']);
Route::post('/edit-category-action/{id}', [AdminController::class, 'editCategoryAction']);

Route::get('admin-quizz/delete-category/{id}',[AdminController::class, 'deleteCategory']);

Route::get('admin-quizz/create-category', [AdminController::class, 'createCategory']);
Route::post('/create-category-action', [AdminController::class, 'storeCategory']);

Route::get('question/{id}', [AdminController::class, 'Question']);

Route::get('/admin-quizz/create-question/{id}', [AdminController::class, 'createQuestion']);
Route::post('/create-question-action/{id}', [AdminController::class, 'storeQuestion']);

Route::get('/admin-quizz/edit-question/{id}',[AdminController::class, 'editQuestion']);
Route::post('/edit-question-action/{cid}/{qid}', [AdminController::class, 'editQuestionAction']);

Route::get('/admin-quizz/delete-question/{cid}/{qid}',[AdminController::class, 'deleteQuestion']);

Auth::routes(['confirm' => false, 'reset' => false, 'verify' => false]);

Route::get('logout', [AdminController::class, 'logout']);
