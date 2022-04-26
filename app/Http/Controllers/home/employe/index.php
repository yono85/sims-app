<?php

namespace App\Http\Controllers\home\employe;

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
            'title'     =>  'Karyawan | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps(),
            'title_menu'    =>  'Karyawan'
        ];
        
        return view('home.employe.index')->with($data);
    }
}
