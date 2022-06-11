<?php

namespace App\Http\Controllers\access;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\app\config\index as Config;

class register extends Controller
{
    //
    public function success(Request $request)
    {

        if( trim($request->token) == null)
        {
            return redirect('/404');
        }


        $Config = new Config;

        //
        $header = [
            "Content-Type: application/json",
            "key:" . trim($request->token)
        ];

        $dataAPI = [
            'Type'      =>  'GET',
            'URL'       =>  $Config->apps()['url_api'] . '/api/registers/success',
            'Header'    =>  $header
        ];

        $getdata = new \App\Http\Controllers\api\herbindo\index;
        $getdata = $getdata->get($dataAPI);


        if( $getdata['message'] != '')
        {
            return redirect('/404');
        }


        $data = json_encode($getdata['response']);
        $data = json_decode($data, true);

        $info = [
            'geoip'         =>  $Config->getgeoip($request->ip()),
            'uagent'        =>  $Config->uagent()
        ];

        $data = [
            'URI'       =>  $Config->URI(),
            'URL_API'   =>  $Config->apps()['url_api'],
            'title'     =>  'Success Registers | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps(),
            'firstsender'   =>  $data['firstsender'],
            'count'     =>  $data['count'],
            'message'   =>  $data['message'],
            'user'      =>  [
                'id'        =>  $data['id'],
                'name'      =>  $data['name'],
                'email'     =>  $data['email']
            ],
            'info'          =>  json_encode($info),
            'token'         =>  trim($request->token)
        ];


        // dd($data);
        return view('access.register-success')->with($data);




    }
}
