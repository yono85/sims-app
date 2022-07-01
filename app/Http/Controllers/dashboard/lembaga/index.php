<?php

namespace App\Http\Controllers\dashboard\lembaga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\app\config\index as Config;


class index extends Controller
{
    //
    public function profile(Request $request)
    {

        $Config = new Config;

        //
        $data = [
            'URI'       =>  $Config->URI(),
            'title'     =>  'Lembaga | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps()
        ];


        return view('dashboard.lembaga.index')->with($data);
    }
}
