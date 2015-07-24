<?php

/*
 * Describe your menu here.
 *
 * There is some simple examples what you can use:
 *
 * 		Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard')->uses('\AdminController@getIndex');
 * 		Admin::menu(User::class)->icon('fa-user');
 * 		Admin::menu()->label('Menu with subitems')->icon('fa-book')->items(function ()
 * 		{
 * 			Admin::menu(\Foo\Bar::class)->icon('fa-sitemap');
 * 			Admin::menu('\Foo\Baz')->label('Overwrite model title');
 * 			Admin::menu()->url('my-page')->label('My custom page')->uses('\MyController@getMyPage');
 * 		});
 */

Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard')->uses('\App\Http\Controllers\AdminController@indexView');

Admin::menu()->url('/test')->label('Start page')->icon('fa-dashboard')->uses('\App\Http\Controllers\AdminController@getIndex');

Admin::menu()->label('Menu with subitems')->icon('fa-book')->items(function ()
{


    Admin::menu()->url('/test')->label('Start page')->icon('fa-dashboard')->uses('\App\Http\Controllers\AdminController@getIndex');

    Admin::menu()->url('test1')->label('Overwrite model title')->icon('fa-sitemap')->uses('\App\Http\Controllers\AdminController@getMyPage');
    Admin::menu()->url('test2')->label('Overwrite model title')->uses('\App\Http\Controllers\AdminController@getMyPagetest');
    Admin::menu()->url('test3')->label('My custom page')->uses('\App\Http\Controllers\AdminController@getMyPage_');


});