<?php

namespace App\Http\Controllers\dashboard\hrd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\app\config\index as Config;

class index extends Controller
{
    //
    public function main()
    {

        $Config = new Config;

        $configpage = [
            'dateYear'      =>  date('Y', time()) . '-12-31'
        ];
        //

        $data = [
            'URI'       =>  $Config->URI(),
            'title'     =>  'Karyawan | ' . $Config->apps()['namelabel'],
            'page'      =>  $configpage,
            'apps'      =>  $Config->apps()
        ];

        return view('dashboard.hrd.index')->with($data);
    }
}
