<?php


Route::get( '/','DefaultController@index' )->name('main');
Route::get( '/about','DefaultController@about' )->name('about');
Route::get( '/contact','DefaultController@contact' )->name('contact');
Route::get( '/commercial','DefaultController@commercial' )->name('commercial');

// form

Route::post('/feedback' , 'FormController@feedback')->name('feedback');



Route::group( [ 'prefix'     => config( 'backpack.base.route_prefix' ),
                'middleware' => [ 'admin' ],
                'namespace'  => 'Admin'
], function () {

} );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
