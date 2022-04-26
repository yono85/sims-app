<?php

namespace App\Http\Controllers\app\config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\app\config\index as Config;

class aside extends Controller
{
    public function main($request)
    {

        $arraside = [
            '1'         =>  'produsen',
            '2'         =>  'distributor'
        ];
        $arraside = $arraside[$request];

        $arraside = $this->$arraside();
        // return 'main';
        // $dataaside = new \App\Http\Controllers\app\config\aside;
        // $dataaside = $dataaside->$arraside();

        return $arraside;


    }


    //
    public function produsen()
    {
        $Config = new Config;

        $URL = $Config->URI();


        //
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
                // 'stock'         =>  [
                //     'title'         =>  'Stock Barang',
                //     'icon'          =>  'icon fa flaticon2-open-box',
                //     'type'          =>  'collaps3',
                //     'arrow'         =>  'icon icon-keyboard_arrow_down arrow-icon',
                //     'child'         =>  [
                //         'orderstock'        =>  [
                //             'title'             =>  'Order Stock',
                //             'url'               =>  $URL . '/dashboard/orderstock'
                //         ]
                //     ]
                // ], //end stock
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
                        // 'bulkingpayment'        =>  [
                        //     'title'             =>  'Pembayaran Bulking',
                        //     'url'               =>  $URL . '/dashboard/bulkingpayment'
                        // ],
                        'verifbulking'        =>  [
                            'title'             =>  'Verifikasi Bulking',
                            'url'               =>  $URL . '/dashboard/verifbulking'
                        ],
                        'ordershiping'        =>  [
                            'title'             =>  'Shping',
                            'url'               =>  $URL . '/dashboard/shiping'
                        ]
                    ]
                ], //end admin
                'pengaturan'             =>  [
                    'title'         =>  'Pengaturan',
                    'icon'          =>  'icon fa flaticon-cogwheel-1',
                    'type'          =>  'collaps5',
                    'arrow'         =>  'icon icon-keyboard_arrow_down arrow-icon',
                    'child'         =>  [
                        'pengguna'        =>  [
                            'title'             =>  'Pengguna',
                            'url'               =>  $URL . '/dashboard/pengguna'
                        ],
                        'distributor'        =>  [
                            'title'             =>  'Distributor',
                            'url'               =>  $URL . '/dashboard/distributor'
                        ],
                        'mgglobal'          =>  [
                            'title'             =>  'Pengaturan Umum',
                            'url'               =>  $URL . '/dashboard/mgglobal'
                        ],
                    ]
                ], //end pengaturan
            ],

            // admin
            '2'         =>  [
                'dashboard'     =>  [
                    'title'         =>  'Dashboard',
                    'icon'          =>  'icon fa flaticon2-line-chart',
                    'type'          =>  '',
                    'url'           =>  $URL . '/dashboard'
                ],//end dashboard
            ]
                        
        ];

        return $data;
    }


    public function distributor()
    {
        $Config = new Config;

        $URL = $Config->URI();

        //
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
                        'bulkingpayment'        =>  [
                            'title'             =>  'Pembayaran Bulking',
                            'url'               =>  $URL . '/dashboard/bulkingpayment'
                        ],
                        'ordershiping'        =>  [
                            'title'             =>  'Shping',
                            'url'               =>  $URL . '/dashboard/shiping'
                        ]
                    ]
                ], //end admin
                'pengaturan'             =>  [
                    'title'         =>  'Pengaturan',
                    'icon'          =>  'icon fa flaticon-cogwheel-1',
                    'type'          =>  'collaps5',
                    'arrow'         =>  'icon icon-keyboard_arrow_down arrow-icon',
                    'child'         =>  [
                        'veriforder'        =>  [
                            'title'             =>  'Pengguna',
                            'url'               =>  $URL . '/dashboard/pengguna'
                        ],
                    ]
                ], //end pengaturan
                
            ],

            // admin
            '2'         =>  [
                'dashboard'     =>  [
                    'title'         =>  'Dashboard',
                    'icon'          =>  'icon fa flaticon2-line-chart',
                    'type'          =>  '',
                    'url'           =>  $URL . '/dashboard'
                ],//end dashboard
            ]
        ];


        return $data;
    }



    public function menuaside()
    {
        $data = [
            'dashboard'     =>  [
                'title'         =>  'Dashboard',
                'icon'          =>  'icon fa flaticon2-line-chart',
                'type'          =>  '',
                'url'           =>  $URL . '/dashboard'
            ],//end dashboard
            'marketing'     =>  [
                'title'         =>  'Marketing',
                'icon'          =>  'icon fa flaticon-businesswoman',
                'type'          =>  'child',
                'arrow'         =>  'icon icon-keyboard_arrow_down arrow-icon'
            ], //end marketing
            'admin'             =>  [
                'title'         =>  'Admin',
                'icon'          =>  'icon sli_icon-users',
                'type'          =>  'child',
                'arrow'         =>  'icon icon-keyboard_arrow_down arrow-icon'
            ], //end admin
            'pengaturan'             =>  [
                'title'         =>  'Pengaturan',
                'icon'          =>  'icon fa flaticon-cogwheel-1',
                'type'          =>  'collaps5',
                'arrow'         =>  'icon icon-keyboard_arrow_down arrow-icon'
            ],
        ];

        return $data;
    }


    public function asidechild()
    {
        $data = [
            'marketing'     =>  [
                ''
            ]
        ];

        return $data;
    }


    public function ss()
    {
        // {
        //     "customers":{"id":1},
        //     "customers2":{"id":2}
        // }

        // {
        //     "dashboard":{
        //         "title"         :  "Dashboard",
        //         "icon"          :  "icon fa flaticon2-line-chart",
        //         "type"          :  "",
        //         "url"           :  "/dashboard",
        //         "arrow"         : "",
        //         "child"         : ""
        //     },
        //     "marketing"     :  {
        //                 "title"         :  "Marketing",
        //                 "icon"          :  "icon fa flaticon-businesswoman",
        //                 "type"          :  "child",
        //                 "url"           :  "",
        //                 "arrow"         :  "icon icon-keyboard_arrow_down arrow-icon",
        //                 "child"         : {
        //                     "orders"        :  {
        //                         "title"             :  "Orders",
        //                         "url"               :  "/dashboard/orders"
        //                     },
        //                     "customers"        :  {
        //                         "title"             :  "Customers",
        //                         "url"               :  "/dashboard/customers"
        //                     }
        //                 }
        //     }
        // }

        // {"dashboard":{
        //         "title"         :  "Dashboard",
        //         "icon"          :  "icon fa flaticon2-line-chart",
        //         "type"          :  "",
        //         "url"           :  "/dashboard",
        //         "arrow"         : "",
        //         "child"         : ""
        //     },
        //     "marketing"     :  {
        //         "title"         :  "Marketing",
        //         "icon"          :  "icon fa flaticon-businesswoman",
        //         "type"          :  "collaps",
        //         "url"           :  "",
        //         "arrow"         :  "icon icon-keyboard_arrow_down arrow-icon",
        //         "child"         :  {
        //             "orders"        :  {
        //                 "title"             :  "Orders",
        //                 "url"               :  "/dashboard/orders"
        //             },
        //             "customers"        :  {
        //                 "title"             :  "Customers",
        //                 "url"               :  "/dashboard/customers"
        //              },
        //             }
        //     }
        // }



        


    }

}
