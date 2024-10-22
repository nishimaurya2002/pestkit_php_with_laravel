<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RoleAuth;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/about', function () {
    return view('about');
});
// Route::get('/service', function () {
//     return view('service');
// });
// Route::get('/project', function () {
//     return view('project');
// });
// Route::get('/blog', function () {
//     return view('blog');
// });
// Route::get('/team', function () {
//     return view('team');
// });
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/signup', function () {
//     return view('signup');
// });
// Route::get('/profile', function () {
//     return view('profile');
// });

// admin Route
// Route::get('/dashboard-admin', function () {
//     return view('admin.dashboard');
// });
// Route::get('/admin/add-users', function () {
//     return view('admin.add-users');
// });
// Route::get('/admin/users', function () {
//     return view('admin.users');
// });
// Route::get('/admin/slider', function () {
//     return view('admin.slider');
// });
// Route::get('/admin/add-slider', function () {
//     return view('admin.add-slider');
// });


Route::match(['GET','POST'],'/signup',[UserController::class,'signUp'])->name('sign-up');
Route::match(['GET','POST'],'/login',[UserController::class,'login'])->name('login');
Route::get('/',[UserController::class,'index'])->name('index');
Route::get('/index',[UserController::class,'index'])->name('index');
Route::get('/service',[UserController::class,'service'])->name('service');
Route::get('/project',[UserController::class,'Project'])->name('project');
Route::get('/blog',[UserController::class,'Blog'])->name('blog');
Route::get('/team',[UserController::class,'Team'])->name('team');
Route::get('/testimonial',[UserController::class,'Testimonial'])->name('testimonial');

Route::middleware([RoleAuth::class])->group(function(){
    Route::prefix('admin')->group(function(){
       Route::controller(Admincontroller::class)->group(function(){
        Route::get('/admin', 'dashboard')->name('admin');
        
        Route::get('/add-users','usersForm')->name('add-users');
        Route::post('/post-users','postUsers')->name('post-users');
        Route::get('/users','getUsers')->name('get-users');
        Route::match(['GET','POST'],'/update-users','updateUsers')->name('update-users');
        Route::get('/delete-users','deleteUsers')->name('delete-users');

        //slider routeing
        Route::get('/add-slider','sliderForm')->name('add-slider');
        Route::post('/post-slider','postSlider')->name('post-slider');
        Route::get('/get-slider','getSlider')->name('get-slider');
        Route::get('/delete-slider','deleteSlider')->name('delete-slider');
        
       // service Routeing
        Route::get('/add-service','serviceForm')->name('add-service');
        Route::get('/service','getService')->name('get-service');
        // Route::match(['GET','POST'],'/add-service','addService')->name('add-service');
        Route::post('/post-service','postService')->name('post-service');
        Route::match(['GET','POST'],'/update-service','updateService')->name('update-service');
        Route::get('/delete-service','deleteService')->name('delete-service');

        //project routeing
        Route::get('/project','getProject')->name('get-project');
        Route::get('/add-project','projectForm')->name('add-project');
        Route::post('/post-project','postProject')->name('post-project');
        Route::match(['GET','POST'],'/update-project','updateProject')->name('update-project');
        Route::get('/delete-project','deleteProject')->name('delete-project');
        
        //Blog routeing
        Route::get('/add-blog','blogForm')->name('add-blog');
        Route::get('/blog','getBlog')->name('get-blog');
        Route::post('/post-blog','postBlog')->name('post-blog');
        Route::match(['GET','POST'],'/update-blog','updateblog')->name('update-blog');
        Route::get('/delete-blog','deleteBlog')->name('delete-blog');

        //team routeing
        Route::get('/add-team','teamForm')->name('add-team');
        Route::get('/team','getTeam')->name('get-team');
        Route::post('/post-team','postTeam')->name('post-team');
        Route::match(['GET','POST'],'/update-team','updateTeam')->name('update-team');
        Route::get('/delete-team','deleteTeam')->name('delete-team');
         
        
        //testimonial routeing
        Route::get('/add-testimonial','testimonialForm')->name('add-testimonial');
        Route::get('/testimonial','getTestimonial')->name('get-testimonial');
        Route::post('/post-testimonial','postTestimonial')->name('post-testimonial');
        Route::match(['GET','POST'],'/update-Testimonial','updateTestimonial')->name('update-testimonial');
        Route::get('/delete-testimonial','deleteTestimonial')->name('delete-testimonial');

        //logout routeing
        Route::get('/logout',[UserController::class,'logout'])->name('logout');

        //contact-----
        Route::get('/contact','getContact')->name('get-contact');
        Route::post('/post-contact','postContact')->name('post-contact');
        Route::match(['GET','POST'],'/update-contact','updateContact')->name('update-contact');
        Route::get('/delete-contact','deleteContact')->name('delete-contact');
     });
 });
});






