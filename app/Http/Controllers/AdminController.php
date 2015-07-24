<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class AdminController extends BaseController
{
    function indexView()
    {
        return "hello";
    }

    function getIndex()
    {
        return View::make("welcome");
    }

    function getMyPage()
    {
        return View::make("welcome");
    }

    function getMyPagetest()
    {
        return "getMyPagetest";
    }


    function getMyPage_()
    {
        return "getMyPagetest";
    }

}
