<?php

use App\Http\Controllers\Admin\AlldonerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MypageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UsermessegeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Models\Bloodgroup;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', [HomeController::class, 'index'])->name('website.home');
Route::post('/contact', [HomeController::class, 'contact'])->name('contact.store');
Route::get('/blood-registration', [HomeController::class, 'registration'])->name('website.registration');
Route::post('/blood-registration', [HomeController::class, 'store'])->name('website.registration.store');
Route::get('/all-blood-doner', [HomeController::class, 'alldoner'])->name('website.alldoner');
Route::get('/all-blood-doner/divition/{id}', [HomeController::class, 'get_doner_by_divition_id'])->name('website.get_doner_by_divition_id');
Route::get('/all-blood-doner/district/{id}', [HomeController::class, 'get_doner_by_district_id']);
Route::get('/all-blood-doner/search', [HomeController::class, 'searchDoner']);
Route::get('/blood-doner-detailse/{id}', [HomeController::class, 'donerdetailse']);
Route::get('/all-blogs', [HomeController::class, 'blog'])->name('website.blog');
Route::get('/single-blog/{id}', [HomeController::class, 'singleblog'])->name('website.singleblog');
Route::post('/comments', [HomeController::class, 'comment'])->name('website.comment.store');

//Admin/dashborad
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'createlogin'])->name('login.create');
});

Route::middleware('auth')->prefix('backend')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.home');
    Route::resource('user-messeges', UsermessegeController::class);
    Route::resource('all-doners', AlldonerController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('comments', CommentController::class);
    Route::resource('mypages', MypageController::class);
    Route::resource('settings', SettingController::class);
    Route::post('changepass', [AuthController::class, 'changepass']);
});


// Route::get('/test_data',function(Request $request){   
//     return Bloodgroup::latest()->get();
//     // Storage::put('test',$request->file('file'));
// });
// Route::post('/test_post',function(Request $request){   
//     Bloodgroup::create($request->all());
//     // Storage::put('test',$request->file('file'));
// });
// Route::get('/test_delete/{id}',function($id){   
//     Bloodgroup::where('id',$id)->delete();
//     // Storage::put('test',$request->file('file'));
// });
// Route::post('/test_update',function(Request $request){   
//     Bloodgroup::where('id',$request->id)->update([
//         'name' => $request->name,
//     ]);
//     // Storage::put('test',$request->file('file'));
// });






