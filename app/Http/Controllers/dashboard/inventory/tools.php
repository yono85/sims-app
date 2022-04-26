<?php

namespace App\Http\Controllers\dashboard\inventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\app\config\index as Config;

class tools extends Controller
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
            'title'     =>  'Pengajuan Alat | ' . $Config->apps()['namelabel'],
            'page'      =>  $configpage,
            'apps'      =>  $Config->apps()
        ];

        return view('dashboard.inventory.tools')->with($data);
    }
}
