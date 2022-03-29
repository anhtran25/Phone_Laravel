<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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
    $users = [
        [
        'name' => 'Trong Anh',
        'height' => '165cm',
        'weight' =>'55kg',
        'gender' => 'Nam',
        'age' => '27',
        'class' => 'Web16201',
        'id' => '1',
        'avatar' => 'https://scontent.fhan14-1.fna.fbcdn.net/v/t1.18169-9/20621089_275426592861427_3539016159873848006_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=Ixto_utcgyIAX8sGHtp&tn=K6KRstWemgGUiiGB&_nc_ht=scontent.fhan14-1.fna&oh=00_AT96k225f2JHdFJS22uW3QNYnJG6Ja4DFB5levOWS0l3Lg&oe=624D7487',
        ],
        
    ];
    return view('welcome',['users' => $users]);
});
Route::get('/login', function () {
    // dd("login view");
    $email = 'anhttph13025';
    // return view('auth.login')->with('username', 'anhttph13025');
    return view('auth.login', [
        'email' => $email,
    ]);
});

Route::get('/users/{userID?}', function (
    Request $request,
    $userID
    ) {
    dd($userID, $request->all());
});
Route::get('/home', function (){
    return view('home');
});
Route::get('/product', function (){
    return view('product');
});
Route::get('/admin', function (){
    return view('admin.home');
});
Route::prefix('/admin')->group(function () {
    Route::get('/categories', [CategoryController::class, 'categoryIndex'])->name('categoryIndex');
    
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('add');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('store');

    Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/categories/update/{id}', [CategoryController::class, 'update'])->name('update');

    Route::any('/categories/{id}', [CategoryController::class, 'delete'])->name('delete');
    

    // product
    Route::get('/products', [ProductController::class, 'productIndex'])->name('productIndex');
    
    Route::get('/products/create', [ProductController::class, 'createProduct'])->name('addProduct');
    Route::post('/products/store', [ProductController::class, 'storeProduct'])->name('storeProduct');

    Route::get('/products/edit/{id}', [ProductController::class, 'editProduct'])->name('editProduct');
    Route::put('/products/update/{id}', [ProductController::class, 'updateProduct'])->name('updateProduct');

    Route::any('/products/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
});