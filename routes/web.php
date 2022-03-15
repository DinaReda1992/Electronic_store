<?php

use Illuminate\Support\Facades\Route;
use App\Models\Company;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Models\Category;

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
    return view('welcome')->with('companies',Company::get())->with('categories',Category::get());
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard')->with('companies',Company::get())->with('categories',Category::get());;
})->name('dashboard');
Route::get('/companies',[CompanyController::class,'index'])->name('companyList');
Route::get('/companies/create',[CompanyController::class, 'create'])->name('store');
Route::post('/companies/create',[CompanyController::class, 'store'])->name('storeCompany');
Route::get('companies/{company}/edit',[CompanyController::class, 'edit'])->name('editCompany');
Route::post('companies/{company}/update',[CompanyController::class, 'update'])->name('update');
Route::get('companies/delete/{company}',[CompanyController::class, 'destroy'])->name('destroy');

Route::get('/categories',[CategoryController::class,'index'])->name('listCategories');
Route::get('/categories/{company}/listCategories', function ($company) {
    return view('allCategories')->with('categories',Category::where('company_id',$company)->get())->with('company',$company);
});
Route::get('/categories/{company}/createNew', function ($company) {
    return view('createCategory')->with('companies',Company::get())->with('company',$company);
});
Route::get('/categories/create/{company}',[CategoryController::class,'create'])->name('createCategory');
Route::post('/categories/create/{company}',[CategoryController::class, 'store'])->name('storeCategory');
Route::post('categories/update/{company}/{category}',[CategoryController::class, 'update'])->name('updateCategory');
Route::get('/subCategories/{category}/createNew', function ($category) {
    return view('createSubCategory')->with('companies',Category::get())->with('category',$category);
});
Route::post('/subCategories/create/{category}',[SubCategoryController::class, 'store'])->name('storeSubCategory');
Route::post('subCategories/update/{category}/{subCategory}',[SubCategoryController::class, 'update'])->name('updateSubCategory');
// Route::get('categories/delete/{company}/{category}',[CategoryController::class, 'destroy'])->name('destroyCategory');
