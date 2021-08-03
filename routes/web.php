<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Models\Category;
use App\Models\Course;

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

Route::get('/', function () {
    $categories = Category::where('active', 'show')->with('courses')->orderBy('id', 'desc')->paginate(8);
    $courses = Course::where('active', 'show')->with('category')->orderBy('id', 'desc')->paginate(6);
    return view('welcome', compact('categories', 'courses'));
});

Route::get('/search/courses', [SearchController::class, 'courses'])->name('search.courses');
Route::get('/search/categories', [SearchController::class, 'categories'])->name('search.categories');


Route::prefix('admin')->middleware('is_admin')->group(function () {
    Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::get('/trashed/courses', [CourseController::class, 'trashed'])->name('courses.trashed');
    Route::get('/restore/courses/{id}', [CourseController::class, 'restore'])->name('courses.restore');
    Route::delete('/kill/courses/{id}', [CourseController::class, 'kill'])->name('courses.kill');
    Route::resource('courses', 'CourseController');

    Route::get('/trashed/categories', [CategoryController::class, 'trashed'])->name('categories.trashed');
    Route::get('/restore/categories/{id}', [CategoryController::class, 'restore'])->name('categories.restore');
    Route::delete('/kill/categories/{id}', [CategoryController::class, 'kill'])->name('categories.kill');
    Route::resource('categories', 'CategoryController');
});


Auth::routes(['register' => false]);
