<?php

namespace App\Http\Controllers\access;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\app\config\index as Config;
use Session;

class index extends Controller
{
    //
    public function login(Request $request)
    {

        $Config = new Config;
        //test
        dd($Config->apps());

        $info = [
            'geoip'         =>  $Config->geoip($request->ip),
            'uagent'        =>  $Config->uagent()
        ];

        //
        $data = [
            'URI'       =>  $Config->URI(),
            'title'     =>  'Masuk Akun | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps(),
            'info'      =>  json_encode($info),
            'app_level'     =>  $Config->apps()['app_level']
        ];


        dd($data);
        return view('access.login')->with($data);
    }


    //sign up
    public function signup(Request $request)
    {

        $Config = new Config;

        $info = [
            'geoip'         =>  $Config->geoip($request->ip),
            'uagent'        =>  $Config->uagent()
        ];

        //
        $data = [
            'URI'       =>  $Config->URI(),
            'title'     =>  'Daftar | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps(),
            'info'      =>  json_encode($info),
            'app_level'     =>  $Config->apps()['app_level']
        ];


        return view('access.signup2')->with($data);
    }


    //forget
    public function forget(Request $request)
    {

        $Config = new Config;

        $info = [
            'geoip'         =>  $Config->geoip($request->ip),
            'uagent'        =>  $Config->uagent()
        ];

        //
        $data = [
            'URI'       =>  $Config->URI(),
            'title'     =>  'Lupa Password | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps(),
            'info'      =>  json_encode($info),
            'app_level'     =>  $Config->apps()['app_level']
        ];


        return view('access.forget')->with($data);
    }


    public function pageForget(Request $request)
    {
        $Config = new Config;

        $token = $request->token;

       
        if( $token <> null)
        {

            //
            $header = [
                "Content-Type: application/json",
                "key:" . $token
            ];
    
            $dataAPI = [
                'Type'      =>  'GET',
                'URL'       =>  $Config->apps()['url_api'] . '/api/account/changepassword',
                'Header'    =>  $header
            ];
    
            $getdata = new \App\Http\Controllers\api\herbindo\index;
            $getdata = $getdata->get($dataAPI);
    
            if( $getdata['message'] == '')
            {
    
                $info = [
                    'geoip'         =>  $Config->geoip($request->ip),
                    'uagent'        =>  $Config->uagent()
                ];
    
                $data = [
                    'URI'       =>  $Config->URI(),
                    'title'     =>  'Ubah Kata Sandi | ' . $Config->apps()['namelabel'],
                    'apps'      =>  $Config->apps(),
                    'info'      =>  json_encode($info),
                    'app_level'     =>  $Config->apps()['app_level'],
                    'token'     =>  $token
                ];
        
        
                return view('access.changepassword')->with($data);
            }
            // 404
            $data = [
                'URI'           =>  $Config->URI(),
                'code'          =>  '404',
                'title'         =>  '404 | ' . $Config->apps()['namelabel'],
                'content'       =>  'Halaman tidak ditemukan',
                'apps'          =>  $Config->apps()
            ];
    
    
            return view('error.page')->with($data);
        }

        // 404
        $data = [
            'URI'           =>  $Config->URI(),
            'code'          =>  '404',
            'title'         =>  '404 | ' . $Config->apps()['namelabel'],
            'content'       =>  'Halaman tidak ditemukan',
            'apps'          =>  $Config->apps()
        ];


        return view('error.page')->with($data);

    }


    // create session
    public function createsession(Request $request)
    {
        $token = $request->token;

        //create session sessionlogin
        Session::put('sessionlogin', $token);


        $data = [
            'response'     =>  '/sessionlogin'
        ];

        return json_encode($data);

    }

    //session page
    public function session()
    {

        // Session::put('sessionlogin', $tokenlogins);
        // Session::get('sessionlogin') 
        // Session::forget('sessionlogin');

        //cek session login
        if( Session::get('sessionlogin') === null )
        {
            //
            return redirect('/');
        }
        

        $Config = new Config;


        $data = [
            'URI'           =>  $Config->URI(),
            'title'         =>  'Session Login | ' . $Config->apps()['namelabel'],
            'apps'          =>  $Config->apps()
        ];


        //delete session login
        if( Session::get('sessionlogin') !== null )
        {

            Session::forget('sessionlogin');

        }
        return view('error.session')->with($data);

    }


}
