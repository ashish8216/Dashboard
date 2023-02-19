<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\ContactUsFormController;

Route::get('/link',function(){
   $targetFolder = $_SERVER['DOCUMENT_ROOT'].'/storage/app/public';
   $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/public/storage';
symlink($targetFolder,$linkFolder);
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function (){
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/', [FrontendController::class, 'welcome'])->name('welcome');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/post/{id}', [FrontendController::class, 'post'])->name('post');
Route::get('/teachers', [FrontendController::class, 'teachers'])->name('teachers');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/blog_details/{id}', [FrontendController::class, 'blog_details'])->name('blog_details');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/services_details/{id}', [FrontendController::class, 'services_details'])->name('services_details');
Route::get('/video', [FrontendController::class, 'video'])->name('video');
Route::get('/study/{id}', [FrontendController::class, 'study'])->name('study');
Route::get('/about/{id}', [FrontendController::class, 'about'])->name('about');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('/apply', [ApplyController::class, 'create'])->name('apply');
Route::get('/teacher', [FrontendController::class, 'teacher'])->name('teacher');
Route::get('/suggested_contact', [ContactUsFormController::class, 'createForm']);
Route::post('/suggested_contact', [ContactUsFormController::class, 'ContactUsForm'])->name('suggested_contact.store');
Route::get('/download', [FrontendController::class, 'download'])->name('download');
Route::post('/search/blog',[FrontendController::cLass, 'search'])->name('blogsearch');
Route::get('/blogbycategory/{id}',[FrontendController::cLass, 'blogbycategory'])->name('blog');
