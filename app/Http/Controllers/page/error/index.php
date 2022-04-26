<?php

namespace App\Http\Controllers\page\error;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    //
    public function page404($request)
    {
        return '404 | Page not Found';
    }
}
