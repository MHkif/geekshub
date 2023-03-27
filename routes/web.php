<?php

use App\Models\Book;
use App\Models\User;
use App\Models\Group;
use App\Models\Comment;
use App\Models\Category;
use App\Http\Controllers\Groups;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookContoller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

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

// Books
Route::get('/', [BookContoller::class, "index"])->name('home');
Route::get('/book/{book}', [BookContoller::class, 'show'])->name('book');
Route::post('/book', [BookContoller::class, 'store']);
Route::post('/book/{book}/like', [BookContoller::class, 'liked']);
Route::post('/book/{book}/favorite', [BookContoller::class, 'isFavorite']);




// Groups
Route::get('/groups/', [Groups::class, 'index'])->name('groups');
// Route::get('/groups/myGroups/' , [Groups::class, 'index'])->name('groups.myGroups');
Route::get('/groups/{group}', [Groups::class, 'show'])->name('show.group');
Route::get('/groups/create', [Groups::class, 'create'])->name('create.group');
Route::get('/groups/{group}/edit', [Groups::class, 'edit'])->name('edit.group');







// favorites
Route::get('/user/favorites/', [Groups::class, 'index'])->name('favorites');

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/favorites', [UserController::class, 'favorites'])->name('profile.favorites');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Group
    Route::get('/profile/myGroups', [Groups::class, 'myGroups'])->name('profile.myGroups');
    Route::post('/groups/myGroups/create', [Groups::class, 'store']);
    Route::delete('/group/{group}/delete', [Groups::class, 'destroy'])->name('group.destroy');
    Route::post('/group/{group}/join/{user}', [MemberController::class, 'store']);
    Route::post('/group/{group}/leave/{user}', [MemberController::class, 'destroy']);

    // Comments
    Route::post('/group/{group}/comment/create', [CommentController::class, 'store']);


    // Category
    Route::get('/category/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/category/add', [CategoryController::class, 'store']);
    Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/category/{category}/update', [CategoryController::class, 'update']);
    Route::get('/category/{category}/delete', [CategoryController::class, 'destroy']);

});

// Admin Dashboard
Route::get('/admin/books', function () {
    return view('admin/books/index', [
        'books' => Book::latest()->get(),
        'categories' => Category::all()
    ]);
})->name('adminBooks');

Route::get('/admin/books/create', function () {
    return view('admin/books/create', [
        'categories' => Category::all()
    ]);
})->name('books.create');

Route::get('/admin/books/{book}/edit', function (Book $book) {
    return view('admin/books/edit', [
        'book' => $book,
        'categories' => Category::all()
    ]);
})->name('books.edit');


Route::put('/admin/books/{book}/update', [BookContoller::class, 'update']);
Route::get('/admin/books/{book}/delete', [BookContoller::class, 'destroy']);




Route::get('/admin/categories', function () {
    return view('admin/categories/index', [
        'categories' => Category::all()
    ]);
})->name('adminCategories');

Route::get('/admin/groups', function () {
    return view('admin/groups', [
        'groups' => Group::all()
    ]);
})->name('adminGroups');

Route::get('/admin/users', function () {
    return view('admin/users', [
        'users' => User::all()
    ]);

    Route::post([BookContoller::class, 'updateLikes']);
})->name('adminUsers');


require __DIR__ . '/auth.php';
