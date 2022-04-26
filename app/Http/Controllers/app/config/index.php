<?php

namespace App\Http\Controllers\app\config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use GeoIp;

class index extends Controller
{
    //
    public function URI()
    {
        if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
        {
            $URI = 'https://' . $_SERVER['HTTP_HOST'];
        }
        else
        {
            $URI = 'http://' . $_SERVER['HTTP_HOST'];
        }

        return $URI;  
    }




    public function apps()
    {

        // $aside = new \App\Http\Controllers\app\config\aside;
        // $aside = $aside->main(env('APP_LEVEL'));

        // $app_level = 2;
        // $aside = $this->aside($this->app_level());

        $data = [
            'name'              =>  env('APP_NAME'),
            'namelabel'        =>  env('APP_NAMELABEL'),
            'owner'             =>  '@ Biro Pendidikan dan Mental Spiritual',
            'type'              =>  "1",
            'created'           =>  '2022 &copy; ' . env('APP_NAMELABEL'),
            'favicon'           =>  $this->URI() . '/assets/icon/logo-dki.png',
            'logo'              =>  $this->URI() . '/assets/images/logo/logo-dki.png',
            'URI'               =>  $this->URI(),
            'url_api'           =>  env('URL_API'),
            'url_notif'        =>  env('URL_NOTIF'),
            'url_slink'         =>  '',
            'url_store'         =>  '',
            'app_level'         =>  env('APP_LEVEL'), //$app_level,
            'cookie'            =>  env('APP_COOKIE'),
            'api_key'           =>  'xxxcb8655ee82e61e37c21071e4f13d3c70',
            'aside'             =>  '',//json_encode($aside),
            'TimeMSCHToken'     =>  180000, //(3menit),
            'created_at'        =>  '2022 &copy;',
            'notify'            =>  'false'
        ];

        return $data;
    }


    // public function app_level()
    // {
    //     $host = trim($_SERVER['HTTP_HOST']);

    //     if( $host != 'localhost:8003' )
    //     {

    //         if( $host == 'crm.herbindopersada.com')
    //         {
    //             $level = 1; //crm
    //         }
    //         else if ( $host == 'distributor.herbindopersada.com' )
    //         {
    //             $level = 2; //distributor
    //         }
    //         else 
    //         {
    //             $level = 3;
    //         }

    //         return $level;
    //     }


    //     $level = 1;
    //     return $level;
    // }

    public function uagent()
    {
        $agent = new Agent();

        $data = [
            'os'                =>  $agent->device(),
            'platform'          =>  $agent->platform(),
            'platform ver'      =>  $agent->version( $agent->platform() ),
            'device'            => ($agent->isMobile() ? ($agent->isTablet() ? 'Tablet' : 'Phone') : 'Desktop'),
            'browser'           =>  $agent->browser(),
            'browser ver'       =>  $agent->version( $agent->browser() )
        ];

        return $data;
    }


    public function geoip($request)
    {
        $arrIP = geoip()->getLocation($request['ip']);
    
        $data = [
            'ip'                =>  $arrIP['ip'],
            'code'              =>  $arrIP['iso_code'],
            'country'            =>  $arrIP['country'],
            'city'              =>  $arrIP['city'],
            'state'             =>  $arrIP['state'],
            'state_name'        =>  $arrIP['state_name'],
            'kodepos'           =>  $arrIP['postal_code'],
            'latitude'          =>  $arrIP['lat'],
            'longitude'         =>  $arrIP['lon'],
            'timezone'          =>  $arrIP['timezone'],
            'currency'          =>  $arrIP['currency']
        ];

        return $data;
    }
    

    public function bulanname($d)
    {
        $bulanarr = array("", "Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
        
        return $bulanarr[$d];

    }


    public function weightUp($w,$u)
    {
        $weight = $w;
        $up = $u;
        $bagi = 1000;
        $wg = ($weight / $bagi);

        // jika berat di bawah bgi maka masukan nilai 1 utuk 1 kilo
        $wg =  $weight < $bagi ? 1 : ($weight / $bagi);

        // cek jika wg mengandung desimal
        $num = is_float($wg) ? 1 : 0;

        if( $num == 1)
        {
            $dec = 0 . '.' . substr($wg, 2);

            if( $dec >= $up )
            {
                $wgt = floor($wg) + 1;
            }
            else
            {
                $wgt = floor($wg);
            }

        }
        else
        {
            $wgt = $wg;
        }

        return $wgt;
    }
    

    public function aside($q)
    {
        $URL = $this->URI();

        //
        $data = [
            //produssen
            '1'     =>  [
                '1'         =>  [
                    'dashboard'     =>  [
                        'title'         =>  'Dashboard',
                        'icon'          =>  'icon fa flaticon2-line-chart',
                        'type'          =>  '',
                        'url'           =>  $URL . '/dashboard'
                    ],//end dashboard
                    'marketing'     =>  [
                        'title'         =>  'Marketing',
                        'icon'          =>  'icon fa flaticon-businesswoman',
                        'type'          =>  'collaps2',
                        'arrow'         =>  'icon icon-keyboard_arrow_down arrow-icon',
                        'child'         =>  [
                            'orders'        =>  [
                                'title'             =>  'Orders',
                                'url'               =>  $URL . '/dashboard/orders'
                            ],
                            'customers'        =>  [
                                'title'             =>  'Customers',
                                'url'               =>  $URL . '/dashboard/customers'
                            ],
                        ]
                    ], //end marketing
                    'stock'         =>  [
                        'title'         =>  'Stock Barang',
                        'icon'          =>  'icon fa flaticon2-open-box',
                        'type'          =>  'collaps3',
                        'arrow'         =>  'icon icon-keyboard_arrow_down arrow-icon',
                        'child'         =>  [
                            'orderstock'        =>  [
                                'title'             =>  'Order Stock',
                                'url'               =>  $URL . '/dashboard/orderstock'
                            ]
                        ]
                    ], //end stock
                    'admin'             =>  [
                        'title'         =>  'Admin',
                        'icon'          =>  'icon sli_icon-users',
                        'type'          =>  'collaps4',
                        'arrow'         =>  'icon icon-keyboard_arrow_down arrow-icon',
                        'child'         =>  [
                            'veriforder'        =>  [
                                'title'             =>  'Verifikasi Pembayaran',
                                'url'               =>  $URL . '/dashboard/veriforders'
                            ],
                            'verifbulking'        =>  [
                                'title'             =>  'Verifikasi Bulking',
                                'url'               =>  $URL . '/dashboard/verifbulking'
                            ],
                            'ordershiping'        =>  [
                                'title'             =>  'Shping',
                                'url'               =>  $URL . '/dashboard/shiping'
                            ]
                        ]
                    ] //end admin
                ]
            ],

            // end 1

            // Distributor
            '2'     =>  [
                '1'         =>  [
                    'dashboard'     =>  [
                        'title'         =>  'Dashboard',
                        'icon'          =>  'icon fa flaticon2-line-chart',
                        'type'          =>  '',
                        'url'           =>  $URL . '/dashboard'
                    ],//end dashboard
                    'marketing'     =>  [
                        'title'         =>  'Marketing',
                        'icon'          =>  'icon fa flaticon-businesswoman',
                        'type'          =>  'collaps2',
                        'arrow'         =>  'icon icon-keyboard_arrow_down arrow-icon',
                        'child'         =>  [
                            'orders'        =>  [
                                'title'             =>  'Orders',
                                'url'               =>  $URL . '/dashboard/orders'
                            ],
                            'customers'        =>  [
                                'title'             =>  'Customers',
                                'url'               =>  $URL . '/dashboard/customers'
                            ],
                        ]
                    ], //end marketing
                    'stock'         =>  [
                        'title'         =>  'Stock Barang',
                        'icon'          =>  'icon fa flaticon2-open-box',
                        'type'          =>  'collaps3',
                        'arrow'         =>  'icon icon-keyboard_arrow_down arrow-icon',
                        'child'         =>  [
                            'orderstock'        =>  [
                                'title'             =>  'Order Stock',
                                'url'               =>  $URL . '/dashboard/orderstock'
                            ]
                        ]
                    ], //end stock
                    'admin'             =>  [
                        'title'         =>  'Admin',
                        'icon'          =>  'icon sli_icon-users',
                        'type'          =>  'collaps4',
                        'arrow'         =>  'icon icon-keyboard_arrow_down arrow-icon',
                        'child'         =>  [
                            'veriforder'        =>  [
                                'title'             =>  'Verifikasi Pembayaran',
                                'url'               =>  $URL . '/dashboard/veriforders'
                            ],
                            'ordershiping'        =>  [
                                'title'             =>  'Shping',
                                'url'               =>  $URL . '/dashboard/shiping'
                            ]
                        ]
                    ] //end admin
                ]
            ],
        ];

        return $data[$q];
    }
    //aside



    public function sayTimeGo()
    {
        $now = date('H:i', time());

        if($now > '03:00' && $now < '10:59')
        {
            $say = 'Pagi';
        }
        else if( $now > '10:59' && $now < '14:30' )
        {
            $say = 'Siang';
        }
        else if( $now > '14:31' && $now < '17:59')
        {
            $say = 'Sore';
        }
        else
        {
            $say = 'Malam';
        }

        return $say;
    }


    // BULAN ARRAY full
    function bulanFull($request)
    {
        $q = (int)$request;
        $q = ($q - 1);
        $bln = ['Janari','Febuari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember'];

        return $bln[$q];
    }

}


