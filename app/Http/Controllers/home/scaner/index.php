<?php

namespace App\Http\Controllers\home\scaner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    //
    public function page(Request $requset)
    {
        // $type = trim($requset->type);

        $page = view('home.scaner.index');

        return $page;

    }
}
