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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Twitter Task
Route::get('/twitter', [App\Http\Controllers\TwitterController::class, 'index'])->name('twitter.index');
Route::get('/twitter/search', [App\Http\Controllers\TwitterController::class, 'search'])->name('twitter.search');

Route::get('/twitter/toptweet', [App\Http\Controllers\TwitterController::class, 'toptweet'])->name('twitter.toptweet');

//FrontEnd Task
Route::get('/front-end/fileupload', [App\Http\Controllers\FileUploadsController::class, 'index'])->name('frontend.fileupload');
Route::get('/front-end/firebaseAuth', [App\Http\Controllers\FirebaseMobileAuthController::class, 'index'])->name('frontend.firebaseAuth');
//Hierarchical Task
Route::get('/hierarchical', [App\Http\Controllers\CategoriesController::class, 'index'])->name('hierarchical.index');

//Queries Task

Route::get('/queries', [App\Http\Controllers\QueriesTaskController::class, 'index'])->name('queries.index');
Route::get('/queries/search', [App\Http\Controllers\QueriesTaskController::class, 'search'])->name('queries.search');


Route::get('/accounts/add', [App\Http\Controllers\AccountsController::class, 'add'])->name('accounts.add');
Route::post('/accounts/store', [App\Http\Controllers\AccountsController::class, 'store'])->name('accounts.store');



Route::get('/projects/add', [App\Http\Controllers\ProjectsController::class, 'add'])->name('projects.add');
Route::post('/projects/store', [App\Http\Controllers\ProjectsController::class, 'store'])->name('projects.store');


Route::get('/queries/jobs/add', [App\Http\Controllers\JobsController::class, 'add'])->name('jobs.add');
Route::post('/queries/jobs/store', [App\Http\Controllers\JobsController::class, 'store'])->name('jobs.store');


Route::get('/queries/tasks/add', [App\Http\Controllers\TasksController::class, 'index'])->name('tasks.add');
Route::post('/queries/tasks/store', [App\Http\Controllers\TasksController::class, 'index'])->name('tasks.store');

