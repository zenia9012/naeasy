<?php


Route::get( '/','DefaultController@index' )->name('main');



Route::group( [ 'prefix'     => config( 'backpack.base.route_prefix' ),
                'middleware' => [ 'admin' ],
                'namespace'  => 'Admin'
], function () {

} );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
