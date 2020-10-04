<?php

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

Auth::routes();

Route::get('/', 'MainController@ShowAllData')->name('main');
Route::get('/admin', 'AdminController@Index');
Route::get('/admin/edit_section/{id}', 'AdminController@edit_section')->name('section');
Route::get('/admin/edit_bottom_slider/{id}', 'AdminController@edit_bottom_slider')->name('slider');
Route::get('/admin/edit_slider', 'AdminController@slidersToEdit');
Route::get('/logout','Auth\LoginController@logout');

Route::post('/admin/edit_bottom_slider/', 'BottomController@update')->name('updateBottomSlider');
Route::post('/admin/edit_section/{id}', 'AdminController@editing_section')->name('sectionPostData');
Route::post('/admin/change_image_section/{id}', 'AdminController@changeImageSection')->name('changeImageSection');
