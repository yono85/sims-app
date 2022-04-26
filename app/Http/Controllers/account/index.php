<?php

namespace App\Http\Controllers\account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\app\config\index as Config;

class index extends Controller
{
    //
    public function verification(Request $request)
    {

        $Config = new Config;

        $info = [
            'geoip'         =>  $Config->geoip($request->ip),
            'uagent'        =>  $Config->uagent()
        ];

        //
        $data = [
            'URI'       =>  $Config->URI(),
            'title'     =>  'Verifikasi Akun | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps(),
            'info'      =>  json_encode($info)
        ];

        // dd($data);
        return view('account.verification')->with($data);

    }
}
