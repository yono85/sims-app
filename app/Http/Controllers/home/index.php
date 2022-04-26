<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\app\config\index as Config;

class index extends Controller
{
    //
    public function main(Request $request)
    {
        
        //
        $Config = new Config;

        //
        $data = [
            'URI'       =>  $Config->URI(),
            'title'     =>  'Selamat Datang | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps(),
            'say'       =>  $Config->sayTimeGo()
        ];
        
        return view('home.home')->with($data);
    }
}
