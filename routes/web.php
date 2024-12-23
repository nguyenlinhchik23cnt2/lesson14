<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nlc_loaisanphamController;
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
Route::get('/nlc-admins/nlc-loaisanpham/nlc-create',[nlc_loaisanphamController::class,'nlccreate'])->name('nlcadmins.nlc-loaisanpham.nlccreate');
Route::post('/nlc-admins/nlc-loaisanpham/nlc-create', [nlc_loaisanphamController::class, 'nlccreatesubmit'])->name('nlcadmins.nlc-loaisanpham.nlccreatesubmit');
Route::get('/nlc-admins/nlc-loaisanpham/nlc-edit/{id}',[nlc_loaisanphamController::class,' nlcedit'])->name('nlcadmins.nlc-loaisanpham.nlcedit');
Route::post('/nlc-admins/nlc-loaisanpham/nlc-edisubmit', [nlc_loaisanphamController::class, 'nlccreatesubmit'])->name('nlcadmins.nlc-loaisanpham.nlceditsubmit');
Route::get('/nlc-admins/nlc-loaisanpham/nlcdelete/{id}',[nlc_loaisanphamController::class,'nlcdelete'])->name('nlcadmins.nlcloiasanpham.nlcdelete');