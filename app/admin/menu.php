<?php


if(AdminAuth::User() and AdminAuth::User()->p1 & 63)
{
    Admin::menu()->label('运营')->icon('fa-book')->items(function ()
    {
        Admin::menu()->url('/test')->label('Start page')->icon('fa-dashboard')->uses('\App\Http\Controllers\AdminController@getIndex');
        Admin::menu()->url('test1')->label('Overwrite model title')->icon('fa-sitemap')->uses('\App\Http\Controllers\AdminController@getMyPage');

    });

}

if(AdminAuth::User() and AdminAuth::User()->p2 & 63)
{
    Admin::menu()->label('用户')->icon('fa-book')->items(function ()
    {
        Admin::menu()->url('/test')->label('Start page')->icon('fa-dashboard')->uses('\App\Http\Controllers\AdminController@getIndex');
        Admin::menu()->url('test1')->label('Overwrite model title')->icon('fa-sitemap')->uses('\App\Http\Controllers\AdminController@getMyPage');
    });
}


if(AdminAuth::User() and AdminAuth::User()->p3 & 63)
{
    Admin::menu()->label('统计')->icon('fa-book')->items(function ()
    {
        Admin::menu()->url('/test')->label('Start page')->icon('fa-dashboard')->uses('\App\Http\Controllers\AdminController@getIndex');
        Admin::menu()->url('test1')->label('Overwrite model title')->icon('fa-sitemap')->uses('\App\Http\Controllers\AdminController@getMyPage');


    });
}


if(AdminAuth::User() and AdminAuth::User()->p4 & 63)
{
    Admin::menu()->label('设置')->icon('fa-book')->items(function ()
    {
        Admin::menu()->url('/test')->label('Start page')->icon('fa-dashboard')->uses('\App\Http\Controllers\AdminController@getIndex');
        Admin::menu()->url('test1')->label('Overwrite model title')->icon('fa-sitemap')->uses('\App\Http\Controllers\AdminController@getMyPage');
    });
}