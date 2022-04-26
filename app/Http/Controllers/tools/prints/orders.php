<?php

namespace App\Http\Controllers\tools\prints;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\app\config\index as Config;
use DNS1D;
use DNS2D;

class orders extends Controller
{
    //
    public function invoice(Request $request)
    {
        $Config = new Config;


        $token = trim($request->token);


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



        //
        $header = [
            "Content-Type: application/json",
            "key:" . $Config->apps()['api_key']
        ];

        $dataAPI = [
            'Type'      =>  'GET',
            'URL'       =>  $Config->apps()['url_api'] . '/api/invoice/print/token?id=' . $token,
            'Header'    =>  $header
        ];


        $getdata = new \App\Http\Controllers\api\herbindo\index;
        $getdata = $getdata->get($dataAPI);


        if ($getdata['status'] != 200)
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

       
        $data = $getdata['response'];

        $order = $data->order;
        $shiping = $data->shiping;
        $payment = $data->payment;
        $promo = $data->promo;

        // $order = json_decode($data['order']);
        // dd($data);

        // $total = (( ($order->type === 3 ? $order->total_reseller : $order->total) + $shiping->courier_price +$shiping->cod_cost) - $order->uniq);

        $total = 0;
        if( $payment->type == '1')
        {
            $total = (( ($order->type === 3 ? $order->total_reseller : $order->total) + $shiping->courier_price +$shiping->cod_cost) - $order->uniq) - $promo->total;
        }
        else
        {
            $total = ( ($order->type === 3 ? $order->total_reseller : $order->total) + $shiping->courier_price +$shiping->cod_cost) - $promo->total;
        }

        $datax = [
            'apps'              =>  $Config->apps(),
            'URI'               =>  $Config->URI(),
            'id'                =>  $order->id,
            'type'              =>  $order->type,
            'kode'              =>  $order->invoice,
            'status'            =>  $order->paid === '1' ? 'Lunas' : 'Belum Lunas',
            'stamp'             =>  $order->paid === '1' ? $Config->URI()['url_storage'] . '/images/background/paid-stamp.png' : '',
            'subtotal'          =>  $order->type === 3 ? number_format($order->total_reseller, 0,',','.') : number_format($order->total, 0,',','.'),
            'total'             =>  number_format($total, 0, ',', '.'),
            'date'              =>  date('d', time()) .' '. $Config->bulanname( (int)date('m', time()) ) .' '. date('Y', time()),
            'uniq'              =>  '-Rp'. number_format($order->uniq, 0, ',', '.'),
            'company'           =>  'company',
            'payment'           =>  $payment->name,
            'payment_type'      =>  $payment->type === 1 ? '' : 'COD',
            'discount'          =>  'Rp0',
            'list'              =>  $data->item,
            'shiping'           =>  $data->shiping,
            'exp'               =>  date('d/m/Y', strtotime($order->exp)),
            'destination'       =>  $data->destination,
            'origin'            =>  $data->origin,
            'barcode'           =>  DNS1D::getBarcodePNG($order->invoice, 'C39E'),
            'sales'             =>  $data->sales,
            'totalcod'          =>  number_format($shiping->cod_cost, 0, ',', '.'),
            'promo'             =>  $promo
        ];

        // dd($datax);
        return view('dashboard.print.invoice')->with($datax);


    }


    //
    public function shiping(Request $request)
    {
        $Config = new Config;


        $token = trim($request->token);

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



        //
        $header = [
            "Content-Type: application/json",
            "key:" . $Config->apps()['api_key']
        ];

        $dataAPI = [
            'Type'      =>  'GET',
            'URL'       =>  $Config->apps()['url_api'] . '/api/shiping/print/token?id=' . $token,
            'Header'    =>  $header
        ];


        $getdata = new \App\Http\Controllers\api\herbindo\index;
        $getdata = $getdata->get($dataAPI);

        if ($getdata['status'] != 200)
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


       
        //
        $data = $getdata['response'];

        $order = $data->order;
        $shiping = $data->shiping;
        $payment = $data->payment;
        $total = (($order->total + $shiping->courier_price ) - $order->uniq);
        $totalcod = ($order->total + $shiping->courier_price + $shiping->cod_cost);


        //


        $datax = [
            'apps'              =>  $Config->apps(),
            'URI'               =>  $Config->URI(),
            'type'              =>  $order->type,
            'id'                =>  $order->id,
            'kode'              =>  $order->invoice,
            'status'            =>  $order->paid === '1' ? 'Lunas' : 'Belum Lunas',
            'stamp'             =>  $order->paid === '1' ? $Config->URI()['url_storage'] . '/images/background/paid-stamp.png' : '',
            'subtotal'          =>  number_format($order->total, 0,',','.'),
            'total'             =>  number_format($total, 0, ',', '.'),
            'totalcod'          =>  number_format($totalcod, 0, ',', '.'),
            'date'              =>  date('d', time()) .' '. $Config->bulanname( (int)date('m', time()) ) .' '. date('Y', time()),
            'uniq'              =>  '-Rp'. number_format($order->uniq, 0, ',', '.'),
            'company'           =>  'company',
            'payment_type'      =>  $payment->type === 1 ? '' : 'COD',
            'payment'           =>  $payment->name,
            'discount'          =>  'Rp0',
            'weight'            =>  $Config->weightUp($order->weight, $shiping->weight_up),
            'list'              =>  $data->item,
            'shiping'           =>  $data->shiping,
            'destination'       =>  $data->destination,
            'origin'            =>  $data->origin,
            'sales'             =>  $data->sales,
            'barcode'           =>  DNS1D::getBarcodePNG($order->invoice, 'C39E'),
            'update'            =>  $data->update
        ];

        // dd($datax);
        return view('dashboard.print.shiping')->with($datax);

    }
}
