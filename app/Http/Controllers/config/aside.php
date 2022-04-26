<?php

namespace App\Http\Controllers\config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Controllers\config\index as Config;

class aside extends Controller
{

    public function main()
    {

        // $arraside = [
        //     '1'         =>  'produsen',
        //     '2'         =>  'distributor'
        // ];
        // $arraside = $arraside[$request];

        // $arraside = $this->$arraside();
        // return 'main';
        // $dataaside = new \App\Http\Controllers\app\config\aside;
        // $dataaside = $dataaside->$arraside();



    }


    //
    public function produsen()
    {
        $Config = new Config;

        $URL = $Config->URI();

        $data = [
            //administrator
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
        ];
    }


    public function distributor()
    {
        $Config = new Config;

        $URL = $Config->URI();

        $data = [
            // administrator
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
        ];
    }
}
