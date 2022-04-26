<?php

namespace App\Http\Controllers\home\inventory\tools;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\app\config\index as Config;

class index extends Controller
{
    //
    public function main(Request $request)
    {
        $Config = new Config;

        //
        $data = [
            'URI'       =>  $Config->URI(),
            'title'     =>  'Inventory | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps(),
            'title_menu'    =>  'Inventory'
        ];
        
        dd($data);
        return view('home.inventory.tools.index')->with($data);
    }
}
