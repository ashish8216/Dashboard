<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Blog_categorieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Post_categorieController;
use App\Http\Controllers\Page_imageController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AbroadController;
use App\Http\Controllers\Abroad_logoController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Company_logoController;
use App\Http\Controllers\Partner_logoController;
use App\Http\Controllers\Student_sayController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PopupController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Popular_serviceController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\ContactUsFormController;
use App\Models\Setting;
use App\Models\Contact;

Route::get('/dashboard', function () {
    $settings = Setting::all();
    $blogs = Contact::orderBy('id', 'desc')->get();
    return view('dashboard',compact('settings','blogs'));
})->middleware(['auth'])->name('dashboard');

Route::get('/admin/Manger', function () {
    return view('admin/Manger');
});

Route::get('admin/menus',[MenuController::class, 'index']);
Route::get('admin/menus-show',[MenuController::class, 'show']);
Route::post('admin/menus', [MenuController::class, 'store'])->name('admin.menus.store');

Route::resources([
    'admin/settings' => SettingController::class,
    'admin/newsletters' => NewsletterController::class,
    'admin/blogs' => BlogController::class,
    'admin/blog_categories' => blog_categorieController::class,
    'admin/comments' => CommentController::class,
    'admin/post_categories' => Post_categorieController::class,
    'admin/page_images' => Page_imageController::class,
    'admin/gallerys' => GalleryController::class,
    'admin/downloads' => DownloadController::class,
    'admin/faqs' => FaqController::class,
    'admin/teachers' => TeacherController::class,
    'admin/student_says' => Student_sayController::class,
    'admin/profiles' => UserController::class,
    'admin/videos' => VideoController::class,
    'admin/applys' => ApplyController::class,
    'admin/abroads' => AbroadController::class,
    'admin/servicess' => ServicesController::class,
    'admin/company_logos' => Company_logoController::class,
    'admin/partner_logos' => Partner_logoController::class,
    'admin/abroad_logos' => abroad_logoController::class,
    'admin/applys' => ApplyController::class,
    'admin/banners' => BannerController::class,
    'admin/abouts' => AboutController::class,
    'admin/popular_services' => Popular_serviceController::class,
    'admin/counters' => CounterController::class,
    'admin/featuress' => FeaturesController::class,
    'admin/seos' => SeoController::class,
    'admin/links' => LinkController::class,
    'admin/popups' => PopupController::class,
    'admin/men' => MenController::class,
    'admin/contacts' => ContactUsFormController::class,
]);

