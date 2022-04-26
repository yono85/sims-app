<?php

namespace App\Http\Controllers\dashboard\customers;

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
            'title'     =>  'Customers | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps()
        ];


        return view('dashboard.customers.index')->with($data);
    }


    public function detail()
    {
        $Config = new Config;

        //
        $data = [
            'URI'       =>  $Config->URI(),
            'title'     =>  'Detail Customers | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps()
        ];

        return view('dashboard.customers.detail')->with($data);
    }
}
