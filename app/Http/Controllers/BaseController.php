<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController1;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class BaseController extends BaseController1
{
    use DispatchesJobs, ValidatesRequests;
}
