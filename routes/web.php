 <?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UserController;


use Illuminate\Support\Facades\Route;
use App\Services\Settings;




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

Route::get('/us-clear', function() {

    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    return "Cleared!";
});
 
Route::get('setTheme', [Settings::class, 'setTheme']);
Route::get('logout', [AuthController::class, 'logout']);

 


Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('/job', [FrontendController::class, 'job'])->name('job');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about-us');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/projects', [FrontendController::class, 'projects'])->name('projects');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact-us');
Route::get('/ajex_date', [FrontendController::class, 'ajex_date'])->name('ajex_date');

Route::post('insert-contact',[FrontendController::class,'insertcontact'])->name('insert-contact');
Route::get('/Job-Detail', [FrontendController::class, 'JobDetail'])->name('job_detail');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/image-Detail', [FrontendController::class, 'imageDetail'])->name('image_detail');


Route::middleware([AlreadyLoggedIn::class])->group(function () {
    // Route::get('admin', function () {
    //     return view('authentication.authentication-signin');
    // });

    Route::get('/authentication-signup', function () {
        return view('authentication.authentication-signup');
    });
 
    
    Route::post('register', [AuthController::class, 'store']);
    
    Route::get('login', [AuthController::class, 'loginForm'])->name('login');
    Route::get('authentication-forgot-password', [AuthController::class, 'passwordForgotForm'])->name('authentication-forgot-password');
    Route::post('/password/forgot', [AuthController::class, 'sendResetLink'])->name('forgot.password.link');
    Route::get('/password-reset-{token}', [AuthController::class, 'showResetForm'])->name('reset.password.form');
    Route::post('password-reset', [AuthController::class, 'passwordRest'])->name('passowrd.rest');
    Route::get('/signup', [AuthController::class, 'register']);
    Route::post('/authentication-signup', [AuthController::class, 'login']);
    Route::post('adminlogin', [AuthController::class, 'adminlogin']);
    Route::post('register', [AuthController::class, 'store']);
});

    
   


//------------------------------------Common routes-----------------------------------
Route::middleware([NotLoggedIn::class])->group(function () {

  

    // Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin-dashboard');

 


    Route::get('/user-profile', [UserController::class, 'edit']);

    Route::post('/updateUser', [UserController::class, 'update']);
     Route::get('/deleteUser', [UserController::class, 'destroy']);
 
});

//------------------------------------Common routes-----------------------------------
Route::middleware([CommonRoutes::class])->group(function () {

    // Route::get('dashboard', function () {
    //     return view('index');
    // });

    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');


    

  
 

    
});


//---------------------------------------------Admin Routes -------------------------------------
Route::middleware([Admin::class])->group(function () {

    Route::post('userRegister', [UserController::class, 'store']);

    Route::get('getUsers', [UserController::class, 'index']);

    Route::get('create-project-form', [DashboardController::class, 'create'])->name('create-project-form');

    Route::post('insert-project',[DashboardController::class,'insertproject'])->name('insert-project');

    Route::get('list-project', [DashboardController::class, 'projectList'])->name('list-project');
    Route::get('search-project_by_name', [DashboardController::class, 'searchproject'])->name('search-project_by_name');
    Route::get('project-edit', [DashboardController::class, 'projectEdit'])->name('project-edit');

    Route::post('/update-project/{id}',[DashboardController::class,'projectupdate'])->name('update-project');

     Route::get('/project-delete/{id}',[DashboardController::class,'projectdelete'])->name('project-delete');

     


     Route::get('create-employee-form', [DashboardController::class, 'add'])->name('create-employee-form');

     Route::post('insert-employee',[DashboardController::class,'insertemployee'])->name('insert-employee');
     


     Route::get('list-employee', [DashboardController::class, 'employeeList'])->name('list-employee');
    Route::get('employee-edit', [DashboardController::class, 'employeeEdit'])->name('employee-edit');
    
    Route::post('/update-employee/{id}',[DashboardController::class,'employeeupdate'])->name('update-employee');

    Route::get('/employee-delete/{id}',[DashboardController::class,'employeedelete'])->name('employee-delete');
    Route::get('list-contact', [DashboardController::class, 'contactList'])->name('list-contact');


    Route::get('create-faq-form', [DashboardController::class, 'createfaq'])->name('create-faq-form');

     Route::post('insert-faq',[DashboardController::class,'insertfaq'])->name('insert-faq');


     Route::get('list-faq', [DashboardController::class, 'faqList'])->name('list-faq');
    Route::get('faq-edit', [DashboardController::class, 'faqEdit'])->name('faq-edit');
    
    Route::post('/update-faq/{id}',[DashboardController::class,'faqupdate'])->name('update-faq');

    Route::get('/faq-delete/{id}',[DashboardController::class,'faqdelete'])->name('faq-delete');
    Route::get('create-history-form',[DashboardController::class, 'createhistory'])->name('create-history-form');

    Route::post('insert-history',[DashboardController::class,'inserthistory'])->name('insert-history');


    Route::get('create-job-form', [JobController::class, 'createjob'])->name('create-job-form');

    Route::post('insert-job',[JobController::class,'insertjob'])->name('insert-job');

    Route::get('list-job', [JobController::class, 'jobList'])->name('list-job');
   
    
    Route::post('/update-job/{id}',[JobController::class,'jobupdate'])->name('update-job');
    Route::get('job-edit', [JobController::class, 'jobEdit'])->name('job-edit');
    Route::get('/job-delete/{id}',[JobController::class,'jobdelete'])->name('job-delete');
});

Route::get('add_folder', [GalleryController::class, 'add_folder'])->name('add_folder');

Route::post('insert_folder',[GalleryController::class,'insertfolder'])->name('insertfolder');
Route::get('list_folder', [GalleryController::class, 'list_folder'])->name('list_folder');
Route::get('/folder_delete/{id}',[GalleryController::class,'folder_delete'])->name('folder_delete');
Route::get('create-gallery', [GalleryController::class, 'creategallery'])->name('create-gallery');

     Route::post('insert-gallery',[GalleryController::class,'insertgallery'])->name('insert-gallery');


     Route::get('list-gallery', [GalleryController::class, 'galleryList'])->name('list-gallery');
    Route::get('gallery-edit', [GalleryController::class, 'galleryEdit'])->name('gallery-edit');
    
    Route::post('/update-gallery/{id}',[GalleryController::class,'galleryupdate'])->name('update-gallery');

    Route::get('/gallery-delete/{id}',[GalleryController::class,'gallerydelete'])->name('gallery-delete');



