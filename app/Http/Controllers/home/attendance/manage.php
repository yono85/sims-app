<?php

namespace App\Http\Controllers\home\attendance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\app\config\index as Config;
use DNS1D;
use DNS2D;

class manage extends Controller
{
    //
    public function printLocation(Request $request)
    {
        $Config = new Config;
        $code = $request->q;

        $token = trim($request->q);

        
        if( $token == null )
        {

            $data = [
                'URI'           =>  $Config->URI(),
                'code'          =>  404,
                'title'         =>  '404 | ' . $Config->apps()['namelabel'],
                'content'       =>  'Halaman tidak ditemukan',
                'apps'          =>  $Config->apps()
            ];

            return response()->view('error.page',$data,200);

        }


        $header = [
            "Content-Type: application/json",
            "key:" . $Config->apps()['api_key']
        ];

        $dataAPI = [
            'Type'      =>  'GET',
            'URL'       =>  $Config->apps()['url_api'] . '/api/home/absen/location/print?q=' . $token,
            'Header'    =>  $header
        ];

        $getdata = new \App\Http\Controllers\api\herbindo\index;
        $getdata = $getdata->get($dataAPI);

        $rsp = $getdata['response'];

        $data = [
            'apps'          =>  $Config->apps(),
            'title'         =>  'Attendance Print Location',
            'rsp'           =>  $rsp,
            'qrcode'        =>  DNS2D::getBarcodePNG($rsp->token_static.'_2', 'QRCODE'),
        ];

        return view('home.attendance.print')->with($data);
    }


    //screen
    public function screen(Request $request)
    {
        $Config = new Config;

        $token = trim($request->q);

        //
        $data = [
            'URI'       =>  $Config->URI(),
            'title'     =>  'Attendance Screen | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps(),
            'say'       =>  $Config->sayTimeGo()
        ];
        
        // dd($data);
        return view('home.screen.index')->with($data);

    }

    //REPORT
    public function report(Request $request)
    {
        $Config = new Config;

        $thisDate = date('Y-m-d', time());

        $data = [
            'URI'       =>  $Config->URI(),
            'title'     =>  'Report Absen | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps(),
            'title_menu'    =>  'Report Absen',
            'monthDate'     =>  date('Y-m', strtotime($thisDate)),
            'monthRead'      =>  $Config->bulanFull( date('m', strtotime($thisDate) )) . '-' . date('Y', strtotime($thisDate)),
            'thisDate'      =>  strtotime($thisDate) . '000'
        ];
        
        // dd($data);

        return view('home.attendance.report')->with($data);
    }
}
