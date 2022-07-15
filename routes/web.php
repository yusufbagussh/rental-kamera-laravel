<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashboardUsersController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardCategoryController;

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

// Route::get('/', function () {
//     return view('index');
// });
// Auth::routes(['verify' => true]);
//Halaman Login
Route::get('/login', [LoginController::class, 'index']);
//Autentikasi Login
Route::post('/login', [LoginController::class, 'auth']);
//Untuk Logout
Route::post('/logout', [LoginController::class, 'logout']);



//Halaman Register
Route::get('/register', [RegisterController::class, 'index']);
//Simpan data registrasi member
Route::post('/register', [RegisterController::class, 'store']);

//Bagian Member
//Halaman Landing Page
Route::get('/', [LandingPageController::class, 'index']);
//Halaman daftar kategori
Route::get('/category', [CategoryController::class, 'index']);

//Method bisa untuk tidak digunakan
//Halaman daftar produk berdasarkan kategori
Route::get('/category/{category:kategori_id}', [CategoryController::class, 'products']);

//Halaman detail produk berdasarkan kategori
Route::get('/category/product/{product:produk_id}', [ProductController::class, 'show']);
//Halaman daftar produk
Route::get('/product', [ProductController::class, 'index']);
//Halaman detail produk berdasarkan id produk
Route::get('/product/{product:produk_id}', [ProductController::class, 'show']);

//Bagian Admin
//Manajemen produk
Route::resource('/dashboard/products', DashboardProductController::class);
//Manajemen kategori produk
Route::resource('/dashboard/categories', DashboardCategoryController::class);

//Bagian Super Admin
Route::resource('/dashboard/users', DashboardUsersController::class)->middleware('superadmin');

// Route::get('/listproducts', function () {
//     return view('dashboard.products.index');
// });
