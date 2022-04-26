<?php

namespace App\Http\Controllers\dashboard\account;

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
            'title'     =>  'Account | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps()
        ];


        return view('dashboard.account.index')->with($data);
    }

}
