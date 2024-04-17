<?php

use App\Http\Controllers\WidgetController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\LoginController;


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
Route::group(['middleware' => 'auth.check'], function(){
    Route::get('/admin.html', [AdminController::class, 'admin']);
    Route::get('/admin2.html', [AdminController::class, 'admin2']);
    Route::get('/admin3.html', [AdminController::class, 'admin3']);
});
// Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');


// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard

// Widgets
Route::get('/pages/widgets.html', [WidgetController::class, 'widget']);
Route::get('/pages/calendar.html', [WidgetController::class, 'calendar']);
Route::get('/pages/gallery.html', [WidgetController::class, 'gallery']);
Route::get('/pages/kanban.html', [WidgetController::class, 'kanban']);
// Layout
Route::get('/pages/layout/top-nav.html', [LayoutController::class, 'topNav']);
Route::get('/pages/layout/top-nav-sidebar.html', [LayoutController::class, 'topNavSidebar']);
Route::get('/pages/layout/boxed.html', [LayoutController::class, 'boxed']);
Route::get('/pages/layout/fixed-sidebar.html', [LayoutController::class, 'fixedSidebar']);
Route::get('/pages/layout/fixed-sidebar-custom.html', [LayoutController::class, 'fixedSidebarCustom']);
Route::get('/pages/layout/fixed-topnav.html', [LayoutController::class, 'fixedNav']);
Route::get('/pages/layout/fixed-footer.html', [LayoutController::class, 'fixedFooter']);
Route::get('/pages/layout/collapsed-sidebar.html', [LayoutController::class, 'collapsedSidebar']);
// Pages
Route::get('/pages/examples/invoice.html', [PagesController::class, 'invoice']);
Route::get('/pages/examples/contact-us.html', [PagesController::class, 'contactUs']);
Route::get('/pages/examples/contacts.html', [PagesController::class, 'contacts']);
Route::get('/pages/examples/e-commerce.html', [PagesController::class, 'Ecommerce']);
Route::get('/pages/examples/faq.html', [PagesController::class, 'faq']);
Route::get('/pages/examples/profile.html', [PagesController::class, 'profile']);
Route::get('/pages/examples/projects.html', [PagesController::class, 'projects']);
Route::get('/pages/examples/project-add.html', [PagesController::class, 'projectAdd']);
Route::get('/pages/examples/project-detail.html', [PagesController::class, 'projectDetail']);
Route::get('/pages/examples/project-edit.html', [PagesController::class, 'projectEdit']);
// 