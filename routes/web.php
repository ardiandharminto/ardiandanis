<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\FooterController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\MyContactController;
use App\Http\Controllers\Home\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/dashboard', function () {
//     return view('admin.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

// Backend Route
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');

    // Admin
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
        Route::get('/admin/profile', 'profile')->name('admin.profile');
        Route::get('/admin/profile/edit', 'editProfile')->name('edit.profile');
        Route::post('/admin/profile/store', 'storeProfile')->name('store.profile');
        Route::get('/admin/password/edit', 'changePassword')->name('change.password');
        Route::post('/admin/password/update', 'updatePassword')->name('update.password');
    });

    // About
    Route::controller(AboutController::class)->group(function () {
        Route::get('/about/page', 'aboutPage')->name('about.page');
        Route::post('/about/update', 'updateAbout')->name('update.about');
        Route::get('/about/multi/image', 'aboutMultiImage')->name('about.multi.image');
        Route::post('/store/multi/image', 'storeMultiImage')->name('store.multi.image');
        Route::get('/multi-image/all', 'allMultiImage')->name('all.multi.image');
        Route::get('/edit/multi/image/{id}', 'editMultiImage')->name('edit.multi.image');
        Route::post('/update/multi/image', 'updateMultiImage')->name('update.multi.image');
        Route::get('/delete/multi/image/{id}', 'deleteMultiImage')->name('delete.multi.image');

        Route::get('/about/resume', 'showResume')->name('resume');
        Route::post('/about/resume/update', 'updateResume')->name('resume.update');

        Route::get('/about/education', 'indexEducation')->name('education.index');
    });

    // Blog Category
    Route::controller(BlogCategoryController::class)->group(function () {
        Route::get('/blog/category/all', 'allBlogCategory')->name('all.blog.category');
        Route::get('/blog/category/add', 'addBlogCategory')->name('add.blog.category');
        Route::post('/blog/category/store', 'storeBlogCategory')->name('store.blog.category');
        Route::get('/blog/category/edit/{id}', 'editBlogCategory')->name('edit.blog.category');
        Route::post('/blog/category/update/{id}', 'updateBlogCategory')->name('update.blog.category');
        Route::get('/blog/category/delete/{id}', 'deleteBlogCategory')->name('delete.blog.category');
    });

    // Blog
    Route::controller(BlogController::class)->group(function () {
        Route::get('/blog/all', 'allBlog')->name('all.blog');
        Route::get('/blog/add', 'addBlog')->name('add.blog');
        Route::post('/blog/store', 'storeBlog')->name('store.blog');
        Route::get('/blog/edit/{id}', 'editBlog')->name('edit.blog');
        Route::post('/blog/update', 'updateBlog')->name('update.blog');
        Route::get('/blog/delete/{id}', 'deleteBlog')->name('delete.blog');
    });

    // Home Slide
    Route::controller(HomeSliderController::class)->group(function () {
        Route::get('/home/slide', 'homeSlider')->name('home.slide');
        Route::post('/update/slider', 'updateSlider')->name('update.slider');
    });

    // Portfolio
    Route::controller(PortfolioController::class)->group(function () {
        Route::get('/portfolio/all', 'allPortfolio')->name('all.portfolio');
        Route::get('/portfolio/add', 'addPortfolio')->name('add.portfolio');
        Route::post('/portfolio/store', 'storePortfolio')->name('store.portfolio');
        Route::get('/portfolio/edit/{id}', 'editPortfolio')->name('edit.portfolio');
        Route::post('/portfolio/update', 'updatePortfolio')->name('update.portfolio');
        Route::get('/portfolio/delete/{id}', 'deletePortfolio')->name('delete.portfolio');
    });

    // Contact
    Route::controller(ContactController::class)->group(function () {
        Route::post('/contact/message/store', 'storeMessage')->name('store.message');
        Route::get('/contact/message', 'contactMessage')->name('contact.message');
        Route::get('/contact/message/delete/{id}', 'deleteMessage')->name('delete.message');
    });

    // My Contact
    Route::controller(MyContactController::class)->group(function () {
        Route::get('/my-contact', 'index')->name('index.mycontact');
        Route::post('/my-contact/update', 'updateMyContact')->name('update.mycontact');
    });

    // Footer
    Route::controller(FooterController::class)->group(function () {
        Route::get('/footer/setup', 'footerSetup')->name('footer.setup');
        Route::post('/footer/update', 'updateFooter')->name('update.footer');
    });
});


// Home Frontend Route
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
});

// About Page Frontend Route
Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'homeAbout')->name('home.about');
});

// Blog Frontend Route
Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'homeBlog')->name('home.blog');
    Route::get('/blog/details/{id}', 'blogDetails')->name('blog.details');
    Route::get('/blog/category/{id}', 'blogCategory')->name('category.blog'); 
});

// Portfolio Frontend Route
Route::controller(PortfolioController::class)->group(function () {
    Route::get('/portfolio', 'homePortfolio')->name('home.portfolio');
    Route::get('/portfolio/details/{id}', 'portfolioDetails')->name('portfolio.details');
});

// Contact Frontend Route
Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'contact')->name('contact');
});