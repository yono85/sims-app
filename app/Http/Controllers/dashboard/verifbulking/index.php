<?php

namespace App\Http\Controllers\dashboard\verifbulking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\app\config\index as Config;

class index extends Controller
{
    //
    public function main()
    {

        $Config = new Config;

        //
        $data = [
            'URI'       =>  $Config->URI(),
            'title'     =>  'Verifikasi Pembayaran Bulking | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps()
        ];


        return view('dashboard.verifbulking.index')->with($data);
    }
}
