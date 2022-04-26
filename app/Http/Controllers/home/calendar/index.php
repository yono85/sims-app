<?php

namespace App\Http\Controllers\home\calendar;

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
            'title'     =>  'Kalender | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps()
        ];
        
        return view('home.calendar.index')->with($data);
    }
}
