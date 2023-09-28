<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

Route::get('/clear', function () {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    return "Successfully Cleared";
  });
  

Route::get('/', function () {
    return view('index');
});


Route::get('andorid', function () {
  return view('AndroidDev');
});



Route::get('about', function () {
  return view('about');
});

Route::get('contact', function () {
  return view('contact');
});

Route::get('faq', function () {
  return view('faq');
});


Route::get('terms-of-use', function () {
  return view('terms-of-use');
});

Route::get('services', function () {
  return view('service');
});




Route::get('privacy-policy', function () {
  return view('privacy-policy');
});

Route::get('service/{slug}', [HomeController::class, 'serviceDeatils']);
Route::get('blog-detail/{slug}', [HomeController::class, 'blogDeatiss']);
Route::get('blogs/', [HomeController::class, 'blogDeatils']);
Route::fallback(function () { return view('error.404');});




// admin route
Route::group(['middleware'=>['IsLogin']],function () {


  Route::get('panel/admin/login', function () {return view('admin.login');})->name('panel.admin.login');
  Route::get('panel/admin/home', function () {return view('admin.index');})->name('panel.admin.home');
  
  
  // category 
  Route::get('panel/admin/add-category', function () {return view('admin.add-category');})->name('panel.admin.add-category');
  Route::post('panel/admin/add-category', [AdminController::class, 'AddCategory']);
  Route::get('panel/admin/show-category', [AdminController::class, 'showCategory'])->name('panel.admin.show-category');
  Route::get('panel/admin/del-degree', [AdminController::class, 'delDegree'])->name('del-degree');
  
  // subcategory 
  Route::get('panel/admin/add-sub-category', [AdminController::class, 'AddSubCategory'])->name('panel.admin.add-sub-category');
  Route::post('panel/admin/add-sub-category', [AdminController::class, 'AddSubCategorys']);
  Route::get('panel/admin/show-sub-category', [AdminController::class, 'showSubCategory'])->name('panel.admin.show-sub-category');
  Route::get('panel/admin/del-sub-cate', [AdminController::class, 'delSubCate'])->name('del-sub-cate');
  


  //Extra  subcategory 
  Route::get('panel/admin/add-extra-sub-category', [AdminController::class, 'AddSubCategorye'])->name('panel.admin.add-sub-category');
  Route::post('panel/admin/add-extra-sub-categorye', [AdminController::class, 'AddSubCategoryse']);
  Route::get('panel/admin/show-extra-sub-category', [AdminController::class, 'showSubCategorye'])->name('panel.admin.show-sub-categorye');
  Route::get('panel/admin/del-extra-sub-catess', [AdminController::class, 'delSubCates'])->name('del-sub-catess');
  


  // add news
  Route::get('panel/admin/add-news', [AdminController::class, 'AddNews'])->name('panel.admin.add-news');
  Route::get('/get-subcategories', [AdminController::class, 'fetchSubcate']);
  Route::post('panel/admin/add-news', [AdminController::class, 'AddNewsDb']);
  Route::get('panel/admin/show-news', [AdminController::class, 'showNews'])->name('show-news');
  Route::get('panel/admin/del-news', [AdminController::class, 'delNews'])->name('del-news');
  Route::get('panel/admin/edit-news/{id}', [AdminController::class, 'NewsEdit']);
  Route::post('panel/admin/new-update', [AdminController::class, 'showNewsEdit']);

  // add blogs
  Route::get('panel/admin/add-blog', [AdminController::class, 'AddBlogs'])->name('panel.admin.add-blog');
  Route::post('panel/admin/add-blogs', [AdminController::class, 'AddBlogsDb']);
  Route::get('panel/admin/show-blog', [AdminController::class, 'showBlogs'])->name('show-blogs');
  Route::get('panel/admin/del-blogs', [AdminController::class, 'delBlogs'])->name('del-blogs');


  


  Route::get('/get-subcategories-extra', [AdminController::class, 'fetchSubcateExtra']); 
  Route::post('upload', [AdminController::class, 'upload'])->name('upload');
  Route::get('panel/admin/show-subcribled', [AdminController::class, 'showSubcribled'])->name('show-subcribled');
  Route::get('panel/admin/indexing-api-google', [AdminController::class, 'IndexingApi']);
  Route::post('panel-admin-submit-api-indexing-google', [AdminController::class, 'SubmitURL']);
  
  });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
