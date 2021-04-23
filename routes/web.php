<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PosController;
 

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

//Home Controller

Route::get('dashboard', [HomeController::class, 'dashboard']);


//Auth Controller
Route::get('/', [AuthController::class, 'login']);
Route::post('userLogin', [AuthController::class, 'userLogin']);
Route::get('logout', [AuthController::class, 'logout']);


//User Controller

Route::get('create-user', [UserController::class, 'index']);
Route::post('storeUser', [UserController::class, 'storeUser']);
Route::get('user-list', [UserController::class, 'userList']);
Route::post('updateUser/{id}', [UserController::class, 'updateUser']);
Route::get('editUser/{id}', [UserController::class, 'editUser']);
Route::get('deleteUser/{id}', [UserController::class, 'deleteUser']);



//Catagory Controller

Route::get('category', [CategoryController::class, 'category']);
Route::post('storeCategory', [CategoryController::class, 'storeCategory']);
Route::get('editCategory/{id}', [CategoryController::class, 'editCategory']);
Route::post('updateCategory/{id}', [CategoryController::class, 'updateCategory']);
Route::get('deleteCategory/{id}', [CategoryController::class, 'deleteCategory']);



//Product Controller

Route::get('products', [ProductController::class, 'products']);
Route::get('addproduct', [ProductController::class, 'addProduct']);
Route::post('storeproduct', [ProductController::class, 'storeProduct']);
Route::get('editproduct/{id}', [ProductController::class, 'editProduct']);
Route::post('updateproduct/{id}', [ProductController::class, 'updateProduct']);
Route::get('deleteproduct/{id}', [ProductController::class, 'deleteProduct']);



//POS Controller
//Route::get('pos','PosController@index')->name('pos');
Route::get('pos', [PosController::class, 'index']);
Route::get('cart', [PosController::class, 'cart']);
