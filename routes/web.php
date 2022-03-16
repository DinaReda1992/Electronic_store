<?php

use App\Models\Company;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;

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
Route::get('/',function(){
    return view('auth.login');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard')->with('companies',Company::get())->with('categories',Category::get());
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
Route::get('/allCategories',function(){
    return view('categories')->with('categories', Category::get());
});
Route::get('/searchCategory',[CategoryController::class, 'search'])->name('searchCategory');

Route::get('/subCategories',[SubCategoryController::class,'index'])->name('listSubCategories');
Route::get('/subCategories/{category}/listSubCategories', function ($category) {
    return view('allSubCategories')->with('subCategories',SubCategory::where('category_id', $category)->get())->with('category',$category);
});
Route::get('/subCategories/{category}/createNew', function ($category) {
    return view('createSubCategory')->with('categories',Category::get())->with('category',$category);
});
Route::get('/subCategories/create/{category}',[SubCategoryController::class,'create'])->name('createSubCategory');
Route::post('/subCategories/create/{category}',[SubCategoryController::class, 'store'])->name('storeSubCategory');
Route::post('subCategories/update/{category}/{subCategory}',[SubCategoryController::class, 'update'])->name('updateSubCategory');

//Products For Categories
Route::get('/categoryProducts',[ProductController::class,'index'])->name('listCategoryProducts');
Route::get('/categoryProducts/{category}/listCategoryProducts', function ($category) {
    return view('allCategoryProducts')->with('products',Product::where('category_id', $category)->get())->with('category',$category);
});
Route::get('/categoryProducts/{category}/createNew', function ($category) {
    return view('createCategoryProduct')->with('categories',Category::get())->with('category',$category);
});
Route::get('/categoryProducts/create/{category}',[ProductController::class,'createCategoryProduct'])->name('createCategoryProduct');
Route::post('/categoryProducts/create/{category}',[ProductController::class, 'storeCategoryProduct'])->name('storeCategoryProduct');
//Products
Route::get('/products',function(){
    return view('all-products')->with('products', Product::get());
});
Route::get('/search',[ProductController::class, 'search'])->name('search');
//Products For Categories
Route::get('/subCategoryProducts/{category}/{subCategory}/listSubCategoryProducts', function ($category, $subCategory) {
    return view('allSubCategoryProducts')->with('products',Product::where('sub_category_id', $subCategory)->where('category_id', $category)->get())->with('category',$category)->with('subCategory',$subCategory);
});
Route::get('/subCategoryProducts/{category}/{subCategory}/createNew', function ($category,$subCategory) {
    return view('createSubCategoryProduct')->with('categories',Category::get())->with('category',$category)->with('subCategories',SubCategory::get())->with('subCategory',$subCategory);
});
Route::get('/subCategoryProducts/create/{category}/{subCategory}',[ProductController::class,'createSubCategoryProduct'])->name('createSubCategoryProduct');
Route::post('/subCategoryProducts/{category}/{subCategory}',[ProductController::class, 'storeSubCategoryProduct'])->name('storeSubCategoryProduct');
