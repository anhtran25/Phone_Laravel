<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [HomeController::class, 'homeIndex'])->name('homeIndex');
    



Route::get('/users/{userID?}', function (
    Request $request,
    $userID
    ) {
    dd($userID, $request->all());
});
// Route::get('/home', function (){
//     return view('home');
// });
Route::get('/product', function (){
    return view('product');
});

    Route::middleware(['auth'])->prefix('/admin')->group(function () {
        Route::get('/', function (){
            return view('admin.home');
        });
    Route::get('/categories', [CategoryController::class, 'categoryIndex'])->name('categoryIndex');
    
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('add');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('store');

    Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/categories/update/{id}', [CategoryController::class, 'update'])->name('update');

    Route::any('/categories/{id}', [CategoryController::class, 'delete'])->name('delete');
    

    // product
    Route::middleware(['auth'])->get('/products', [ProductController::class, 'productIndex'])->name('productIndex');
    
    Route::get('/products/create', [ProductController::class, 'createProduct'])->name('addProduct');
    Route::post('/products/store', [ProductController::class, 'storeProduct'])->name('storeProduct');

    Route::get('/products/edit/{id}', [ProductController::class, 'editProduct'])->name('editProduct');
    Route::put('/products/update/{id}', [ProductController::class, 'updateProduct'])->name('updateProduct');

    Route::any('/products/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');

    // user
    Route::get('/users', [UserController::class, 'userIndex'])->name('userIndex');
    
    Route::get('/users/create', [UserController::class, 'createUser'])->name('addUser');
    Route::post('/users/store', [UserController::class, 'storeUser'])->name('storeUser');

    Route::get('/users/edit/{id}', [UserController::class, 'editUser'])->name('editUser');
    Route::put('/users/update/{id}', [UserController::class, 'updateUser'])->name('updateUser');

    Route::any('/users/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');

    // post
    Route::get('/post', [CategoryProductController::class, 'postIndex'])->name('postIndex');

    Route::get('/post/create', [CategoryProductController::class, 'createPost'])->name('addPost');
    Route::post('/post/store', [CategoryProductController::class, 'storePost'])->name('storePost');

    Route::get('/post/edit/{id}', [CategoryProductController::class, 'editPost'])->name('editPost');
    Route::put('/post/update/{id}', [CategoryProductController::class, 'updatePost'])->name('updatePost');

    Route::any('/post/{id}', [CategoryProductController::class, 'deletePost'])->name('deletePost');
});

Route::get('/auth/logout', [LoginController::class, 'logout'])
    ->middleware('auth')->name('auth.logout');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'Loginindex'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('post-login');
});
Route::get('/signup', [LoginController::class, 'sigup'])->name('sigup');
Route::post('/sigup', [LoginController::class, 'storeUp'])->name('storeUp');