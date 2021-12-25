<?php

use App\Http\Controllers\BaocaoController;
use App\Http\Controllers\DangkyDetaiController;
use App\Http\Controllers\DetaimanageControll;
use App\Http\Controllers\DuyetController;
use App\Http\Controllers\DuyetDetaiController;
use App\Http\Controllers\Duyetxingiahan;
use App\Http\Controllers\GiangvienController;
use App\Http\Controllers\HomeArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MydetaiController;
use App\Http\Controllers\NghiemthudanhgiaController;
use App\Http\Controllers\Phancong;
use App\Http\Controllers\SinhvienmanageController;
use App\Http\Controllers\Uploadfile;
use App\Http\Controllers\UserArticlesController;
use App\Http\Controllers\UsermanagerController;
use App\Http\Controllers\XingiahanController;
use App\Models\Giangvien;
use App\Models\Nghiemthudanhgia;
use App\Models\Role;
use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});
Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function(){
    Route::get('/dashboard',[App\Http\Controllers\HomeController::class, 'index'])->name('adminhome');
    Route::get('/detai',[DetaimanageControll::class, 'index'])->name('admin.manageDetai');
    Route::get('/user',[UsermanagerController::class, 'index'])->name('admin.manageDetai');
    
    
   
    
});
 Route::get('admin/Detai/Them',function(){
        return view('admin/detai/editing');
 });
 
 Route::get('/Sinhvien/themdktai',function(){
    return view('admin/Detai/themdkdetai');
});
 
Route::group(['prefix'=>'admin',  'middleware'=>['auth','role:admin']],function(){
        Route::resource('Detai', DetaimanageControll::class)->names('admindetai');
        
        Route::resource('duyet', DuyetController::class)->names('adminduyet');
        Route::resource('user', UsermanagerController::class)->names('adminuser');
      Route::resource('mydetai', MydetaiController::class)->names('adminmydetai');
      Route::resource('xingiahan', XingiahanController::class)->names('adminxingiahan');
        Route::resource('Nopsp', Uploadfile::class)->names('adminNopsp');
        Route::resource('giangvien', GiangvienController::class)->names('admingiangvien');
        Route::resource('nghiemthu', NghiemthudanhgiaController::class)->names('adminnghiemthu');
       
            
});

Route::get('nghiemthu/{nghiemthu}/edit', [MydetaiController::class,'editnghiemthu'])->name('admin.nghiemthu.edit');

Route::group(['prefix'=>'Sinhvien','middleware'=>['auth','role:Sinhvien']],function(){
    Route::get('trangchu',[App\Http\Controllers\HomeController::class, 'index'])->name('sinhvienhome');
    Route::resource('mydetai', MydetaiController::class)->names('adminmydetaisinvien');
    Route::resource('dangky', DangkyDetaiController::class)->names('admindangky');
    Route::resource('duyet', DuyetController::class)->names('adminduyetsinhvien');
    Route::resource('xingiahan', XingiahanController::class)->names('sinhvienxingiahan');
    
});
Route::group(['prefix'=>'giangvien','middleware'=>['auth','role:giangvien']],function(){
    Route::get('trangchu',[App\Http\Controllers\HomeController::class, 'index'])->name('sinhvienhome');
    Route::resource('phancong', Phancong::class)->names('adminphancong');
    Route::resource('nghiemthu', NghiemthudanhgiaController::class)->names('giangviennghiemthu');
});
Route::group(['prefix'=>'thuky','middleware'=>['auth','role:thuky']],function(){
    Route::get('trangchu',[App\Http\Controllers\HomeController::class, 'index'])->name('sinhvienhome');
    Route::resource('baocao', BaocaoController::class)->names('adminbaocao'); 
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
