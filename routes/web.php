<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nlc_loaisanphamController;
use App\Http\Controllers\nlc_sanphamController;

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

Route::get('/', function () {
    return view('welcome');
});
#admins
Route::get('/nlc-admins',function (){
    return view('nlcadmins.index');
});
 
Route::get('/nlc-admins/nlc-loaisanpham',[nlc_loaisanphamController::class,'nlclist'])->name('nlcadmin.nlcloaisanpham');
//them loai san pham
Route::get('/nlc-admins/nlc-loaisanpham/nlc-create',[nlc_loaisanphamController::class,'nlccreate'])->name('nlcadmins.nlc-loaisanpham.nlccreate');
Route::post('/nlc-admins/nlc-loaisanpham/nlc-create', [nlc_loaisanphamController::class, 'nlccreatesubmit'])->name('nlcadmins.nlc-loaisanpham.nlccreatesubmit');
//edit loai san pham
Route::get('/nlc-admins/nlc-loaisanpham/nlc-edit/{id}', [nlc_loaisanphamController::class, 'nlcedit'])->name('nlcadmins.nlc-loaisanpham.ncledit');
Route::post('/nlc-admins/nlc-loaisanpham/nlc-edit/{id}',[nlc_loaisanphamController::class, 'nlceditsubmit']);
//xoa loai san pham
Route::get('/nlc-admins/nlc-loaisanpham/nlcdelete/{id}',[nlc_loaisanphamController::class,'nlcdelete'])->name('nlcadmins.nlc-loaisanpham.nlcdelete');



/////san pham
Route::get('/nlc-admins/nlc-sanpham',[nlc_sanphamController::class,'nlcSPhamlist'])->name('nlcadmins.nlc-sanpham');
//them san pham
Route::get('/nlc-admins/nlc-sanpham/nlc-SPcreate',[nlc_sanphamController::class,'nlcSPcreate'])->name('nlcadmins.nlc-sanpham.nlcSPcreate');
Route::post('/nlc-admins/nlc-sanpham/nlc-SPcreatesubmit',[nlc_sanphamController::class,'nlcSPcreatesubmit'])->name('nlcadmins.nlc-sanpham.nlcSPcreatesubmit');