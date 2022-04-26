<?php

namespace App\Http\Controllers\dashboard\inventory\consumable;

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
            'title'     =>  'Inventory Consumable | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps()
        ];

        return view('dashboard.inventory.consumable.index')->with($data);
    }


    //
    public function out()
    {

        $Config = new Config;

        //
        $data = [
            'URI'       =>  $Config->URI(),
            'title'     =>  'Order Consumable | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps()
        ];

        return view('dashboard.inventory.consumable.out')->with($data);
    }
}