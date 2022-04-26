<?php

namespace App\Http\Controllers\dashboard\bulkingpayment;

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
            'title'     =>  'Pembayaran Bulking | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps()
        ];


        return view('dashboard.bulkingpayment.index')->with($data);
    }


    public function detail()
    {
        return 'detail';
    }
}