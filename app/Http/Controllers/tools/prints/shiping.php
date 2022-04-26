<?php

namespace App\Http\Controllers\tools\prints;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\app\config\index as Config;

class shiping extends Controller
{
    //
    public function main(Request $request)
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


            

            // $status = $exception->getStatusCode();


            // $data = [
            //     'URI'           =>  $Config->URI(),
            //     'code'          =>  $status,
            //     'title'         =>  $status . ' | ' . $Config->apps()['namelabel'],
            //     'content'       =>  $status === 404 ? 'Halaman tidak ditemukan' : 'Opsss... Halaman bermasalah',
            //     'apps'          =>  $Config->apps()
            // ];


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

       
        $data = $getdata['response'];

        $order = $data->order;
        $shiping = $data->shiping;
        $payment = $data->payment;

        // $order = json_decode($data['order']);
        // dd($data);

        $total = (($order->total + $shiping->courier_price ) - $order->uniq);


        $datax = [
            'URI'               =>  $Config->URI(),
            'id'                =>  $order->id,
            'kode'              =>  $order->invoice,
            'status'            =>  $order->paid === '1' ? 'Lunas' : 'Belum Lunas',
            'stamp'             =>  $order->paid === '1' ? $Config->URI()['url_storage'] . '/images/background/paid-stamp.png' : '',
            'subtotal'          =>  number_format($order->total, 0,',','.'),
            'total'             =>  number_format($total, 0, ',', '.'),
            'date'              =>  date('d', time()) .' '. $Config->bulanname( (int)date('m', time()) ) .' '. date('Y', time()),
            'uniq'              =>  '-Rp'. number_format($order->uniq, 0, ',', '.'),
            'company'           =>  'company',
            'payment_type'      =>  $payment->name,
            'payment'           =>  $payment->name,
            'discount'          =>  'Rp0',
            'list'              =>  $data->item,
            'shiping'           =>  $data->shiping,
            'destination'       =>  $data->destination,
            'origin'            =>  $data->origin
        ];


        return view('dashboard.print.shiping')->with($datax);

    }
}
