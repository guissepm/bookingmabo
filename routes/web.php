<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/',[App\Http\Controllers\FrontendController::class, 'index'])->name('home'); /* Lecture 6 */
Route::get(trans('routes.object'),[FrontendController::class, 'object'])->name('object'); /* Lecture 5 */
Route::get(trans('routes.roomsearch'),[FrontendController::class, 'roomsearch'])->name('roomSearch'); /* Lecture 5 */
Route::get(trans('routes.room'),[FrontendController::class, 'room'])->name('room'); /* Lecture 6 */
Route::get(trans('routes.article'),[FrontendController::class, 'article'])->name('article'); /* Lecture 6 */
Route::get(trans('routes.person'),[FrontendController::class, 'person'])->name('person'); /* Lecture 6 */



Route::group(['prefix'=>'admin'],function(){  /* Lecture 6 */  
    
  Route::get('/',[BackendController::class, 'index'])->name('adminHome'); /* Lecture 6 */  
  Route::get(trans('routes.myobjects'),[BackendController::class, 'myobjects'])->name('myObjects'); /* Lecture 6 */  
  Route::get(trans('routes.saveobject'),[BackendController::class, 'saveObject'])->name('saveObject'); /* Lecture 6 */  
  Route::get(trans('routes.profile'),[BackendController::class, 'profile'])->name('profile'); /* Lecture 6 */  
  Route::get(trans('routes.saveroom'),[BackendController::class, 'saveRoom'])->name('saveRoom'); /* Lecture 6 */  
  Route::get('/cities',[BackendController::class, 'cities'])->name('cities.index'); /* Lecture 6 */  
    
    
});
