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

Route::get('/', function () {
    return view('welcome');
});



////Beginninig of admin panel
$router->group(['middleware' => 'auth'], function($router){

Route::get('admin-panel','admin\AdminSiteController@index'); ///calling main page of admin panel


Route::get('menu-show','admin\AdminMenuController@index');

Route::get('menu_list','admin\AdminMenuController@menu_list');

Route::get('delete/{id}','admin\AdminMenuController@destroy');

Route::post('menu_store','admin\AdminMenuController@menu_store');

Route::get('edit_menu_view/{id}','admin\AdminMenuController@show');

Route::post('edit_menu/{id}','admin\AdminMenuController@edit');

Route::get('about-admin','admin\AdminAboutController@index');

Route::post('about_store','admin\AdminAboutController@store');

Route::get('delete_about/{id}','admin\AdminAboutController@destroy');

Route::get('edit_about_view/{id}','admin\AdminAboutController@show');

Route::post('edit_about/{id}','admin\AdminAboutController@edit');

Route::get('notice-admin','admin\AdminNoticeController@index');

Route::post('notice_store','admin\AdminNoticeController@store');

Route::get('delete_notice/{id}','admin\AdminNoticeController@destroy');

Route::get('edit_notice_view/{id}','admin\AdminNoticeController@show');

Route::post('edit_notice/{id}','admin\AdminNoticeController@edit');

Route::get('event-admin','admin\AdminEventController@index');

Route::post('event_store','admin\AdminEventController@store');


Route::get('delete_event/{id}','admin\AdminEventController@destroy');

Route::get('edit_event_view/{id}','admin\AdminEventController@show');

Route::post('edit_event/{id}','admin\AdminEventController@edit');





Route::get('contact-admin','admin\AdminContactController@index');


Route::post('contact_store','admin\AdminContactController@store');


Route::get('edit_contact_view/{id}','admin\AdminContactController@show');


Route::post('edit_contact/{id}','admin\AdminContactController@edit');




Route::get('photo-admin','admin\AdminPhotoController@index');

Route::post('photo_store','admin\AdminPhotoController@store');

Route::get('delete_photo/{id}','admin\AdminPhotoController@destroy');

Route::get('document-admin','admin\AdminDocumentController@index');

Route::get('delete_document/{id}','admin\AdminDocumentController@destroy');


Route::post('document_store','admin\AdminDocumentController@store');

Route::get('user_list','admin\AdminUserController@index');

Route::get('delete_user/{id}','admin\AdminUserController@destroy');

Route::get('title-admin','admin\AdminTitleController@index');

Route::get('edit_title_view/{id}','admin\AdminTitleController@show');

Route::post('edit_title/{id}','admin\AdminTitleController@edit');


Route::resource('member-admin','admin\MonitorMemberController');


Route::resource('comitee-admin','admin\AdminComiteeController');

Route::resource('banner-admin','admin\MonitorBannerController'); 

});




/////Route::resource('notice-admin','admin\MonitorNoticeController');






/*Route::get('site','admin\AdminIndexController@index');

Route::post('banner_store','admin\AdminIndexController@store');

Route::get('banner_list','admin\AdminIndexController@banner_list');

Route::get('delete/{id}','admin\AdminIndexController@destroy');


Route::get('edit_banner/{id}','admin\AdminIndexController@show');

Route::post('edit/{id}','admin\AdminIndexController@edit');*/

//Route::get('about-show','admin\AdminIndexController@about_show');

//Route::post('about_store','admin\AdminIndexController@about_store');

///Route::get('notice-admin','admin\AdminIndexController@notice_show');

///Route::post('notice_store','admin\AdminIndexController@notice_store');

//////Route::get('event-admin','admin\AdminIndexController@event_show');

////Route::post('event_store','admin\AdminIndexController@event_store');


//Route::get('member-show','admin\AdminIndexController@member_show');


//Route::get('menu-show','admin\AdminIndexController@menu_show');

//Route::post('menu_store','admin\AdminIndexController@menu_store');



///Route::post('contact_store','admin\AdminIndexController@contact_store');

///Route::get('photo-show','admin\AdminIndexController@photo_show');

///Route::post('photo_store','admin\AdminIndexController@photo_store');


//Route::get('video-show','admin\AdminIndexController@video_show');

///Route::post('video_store','admin\AdminIndexController@video_store');





///Route::get('document-show','admin\AdminIndexController@document_show');

///Route::post('document_store','admin\AdminIndexController@document_store');



//Route::get('test','MenuController@index');


















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
