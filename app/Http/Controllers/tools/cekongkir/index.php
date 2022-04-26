<?php

namespace App\Http\Controllers\tools\cekongkir;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\app\config\index as Config;
use DB;

class index extends Controller
{
    //
    public function main()
    {
        $Config = new Config;

        //
        $data = [
            'URI'       =>  $Config->URI(),
            'title'     =>  'Cek Ongkir | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps()
        ];



        return view('tools.cekongkir.index')->with($data);
    }
}
