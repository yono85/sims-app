<html lang="id" >
    <head>
    <link rel="icon" href="{{$apps['favicon']}}" sizes="32x32">
    <link rel="icon" href="{{$apps['favicon']}}" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="{{$apps['favicon']}}">
    <meta name="msapplication-TileImage" content="{{$apps['favicon']}}">
    <title>Invoice</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        @media print {
            body {
                padding-top: 0 !important;
            }

            #action-area {
                display: none;
            }
        }

        @media screen and (min-width: 1025px) {
            .btn-download {
                display: none !important;
            }

            .btn-back {
                display: none !important;
            }
        }

        @media screen and (max-width: 1024px) {
            .content-area>div {
                width: auto !important;
            }

            .btn-print {
                display: none !important;
            }

            .header-btn{
                width: 100% !important;
            }
        }



        @media screen and (max-width: 720px) {
            .content-area>div {
                width: auto !important;
            }
        }

        @media screen and (max-width: 420px) {
            .content-area>div {
                width: 790px !important;
            }
        }

        @media screen and (max-width: 430px) {
            .content-area {
                transform: scale(0.59) translate(-35%, -35%)
            }

            .content-area>div {
                width: 720px !important;
            }

            .btn-print {
                display: none !important;
            }
        }

        @media screen and (max-width: 380px) {
            .content-area {
                transform: scale(0.45) translate(-58%, -62%);
            }

            .content-area>div {
                width: 790px !important;
            }

            .btn-print {
                display: none !important;
            }
        }

        @media screen and (max-width: 320px) {
            .content-area>div {
                width: 700px !important;
            }
        }
    </style>

</head>

<body style="font-family: open sans, tahoma, sans-serif; margin: 0; -webkit-print-color-adjust: exact; padding-top: 60px;">
    
    <!-- head -->
    <div id="action-area">
        <div id="navbar-wrapper" style="padding: 12px 16px;font-size: 0;line-height: 1.4; box-shadow: 0 -1px 7px 0 rgba(0, 0, 0, 0.15); position: fixed; top: 0; left: 0; width: 100%; background-color: #FFF; z-index: 100;">
            <div class="header-btn" style="margin:auto; width:790px">

                <div style="width: 50%; display: inline-block; vertical-align: middle; font-size: 12px;">
                    <div class="btn-back" >
                        
                    </div>
                </div>
                <div style="width: 50%; display: inline-block; vertical-align: middle; font-size: 12px; text-align: right;">
                    <a class="btn-download" href="javascript:window.print()" style="display: inline-block; vertical-align: middle;">
                        <img src="{{$URI}}/assets/icon/download-invoice.png" alt="Download" width="20px" ;="">
                    </a>
                    <a class="btn-print" href="javascript:window.print()" style="height: 100%; display: inline-block; vertical-align: middle;">
                        <button id="print-button" style="border: none; height: 100%; cursor: pointer;padding: 8px 40px;border-color: #03AC0E;border-radius: 8px;background-color: #03AC0E;margin-left: 16px;color: #fff;font-size: 12px;line-height: 1.333;font-weight: 700;">Cetak</button>
                    </a>
                </div>

            </div>
            

        </div>
    </div>
    

    <div class="content-area">

        <!-- top -->

        <!-- bottom -->
        <div style="background: url('{{$stamp}}') center no-repeat; background-size: contain; margin: auto; width: 790px;">
            <table width="100%" cellspacing="0" cellpadding="0" style="width: 100%; padding: 25px 32px; color: #343030;">
                <tbody>
                    <tr>
                        <td>
                            <table width="100%" cellspacing="0" cellpadding="0" style="padding-bottom: 20px; border-bottom: thin dashed #cccccc;">
                                <tbody>
                                    <tr>
                                        <td style="width: 57%; vertical-align: top;">
                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2">
                                                            <img src="{{$URI}}/assets/icon/herbindo-favicon.png" alt="Formasi" style="margin-bottom: 15px; width: 55px;">
                                                        </td>
                                                    </tr>
                                                
                                                    <tr>
                                                        <td colspan="2" style="font-size: 14px;">
                                                            <span style="font-weight: 600">Nomor Invoice</span> : <span style="color: #42b549; font-weight: 600;">{{$kode}}</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2" style="font-size: 14px; padding:10px 0px 5px; ">
                                                            <img src="data:image/png;base64,  {{$barcode}}" alt="Barcode Image" style="width:68%; height: 42px;"/>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2" style="font-size: 12px; padding: 8px 0;">
                                                            Diterbitkan atas nama:
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; font-weight: 600; padding-bottom: 6px; width: 80px;">
                                                            
                                                            Penjual
                                                            
                                                        </td>
                                                        <td style="font-size: 12px; padding-bottom: 6px;">
                                                            <b>
                                                                {{$sales->company}}
                                                            </b>
                                                            @if( $type != '3')
                                                            ({{$sales->name}})
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; font-weight: 600; padding-bottom: 6px; width: 80px;">
                                                            Tanggal</td>
                                                        <td style="font-size: 12px; padding-bottom: 6px;">{{$date}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td style="width: 43%; vertical-align: top; padding-left: 30px;">
                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                    <tr>
                                                        <td style="font-weight: 600; font-size: 14px; padding: 22px 0px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px;padding-bottom: 8px;">
                                                            <span style="font-weight: 600; ">Pembayaran:</span>
                                                            <span>{{$payment}}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-weight: 600; font-size: 14px;padding-bottom: 8px;">
                                                            Tujuan Pengiriman:</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; padding-bottom: 20px;">
                                                            <span style="margin-bottom: 3px; font-weight: 600; display: block;">{{$destination->name}} <span style="font-weight:400">({{$destination->phone}})</span></span>
                                                            
                                                            <div>
                                                                {{$destination->address . ', ' . $destination->kecamatan}} <br>
                                                                {{$destination->city}} <br>
                                                                {{$destination->provinsi . ' ' . $destination->kodepos}}
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @if($type == '3')
                                                    <tr>
                                                        <td style="font-size:12px; color:#555;">
                                                            <span>Jatuh Tempo Pembayaran Pada: </span><b style="color:#333">{{$exp}}</b>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <table width="100%" cellspacing="0" cellpadding="0" style="border: thin dashed rgba(0, 0, 0, 0.34); border-radius: 4px; color: #343030; margin-top: 20px;">
                                <tbody>
                                    <tr style="background-color: rgba(242, 242, 242, 0.74); font-size: 13px; font-weight: 600;">
                                        <td style="padding: 10px 15px;">Nama Produk</td>
                                        <td style="padding: 10px 15px; text-align: center;">Jumlah</td>
                                        <td style="padding: 10px 15px; text-align: center;">Berat</td>
                                        <td style="padding: 10px 15px; text-align: center; white-space: nowrap;">Harga</td>
                                        <td style="padding: 10px 15px; text-align: right;">Subtotal</td>
                                    </tr>
                                    
                                    @foreach($list as $row)
                                    <tr style="font-size: 13px;">
                                        <td width="330" style="padding: 15px; font-weight: 400; word-break: break-word;">
                                            {{$row->name}}
                                        </td>
                                        <td valign="top" style="padding: 15px; text-align: center;">
                                            x{{$row->qty}}
                                        </td>
                                        <td valign="top" style="padding: 15px; text-align: center; white-space: nowrap;">
                                            {{$row->weight}} gr
                                        </td>
                                        <td valign="top" style="padding: 15px; white-space: nowrap; text-align: center;">
                                        @if($type == '3')
                                            Rp{{number_format($row->price_reseller, 0, ",", ".")}}
                                        @else
                                            Rp{{number_format($row->price, 0, ",", ".")}}
                                        @endif
                                        </td>
                                        <td valign="top" style="padding: 15px; white-space: nowrap; text-align:right">
                                        @if($type == '3')
                                            Rp{{number_format($row->total_reseller, 0, ",", ".")}}
                                        @else
                                            Rp{{number_format($row->total, 0, ",", ".")}}
                                        @endif
                                        </td>
                                    </tr>
                                    @endforeach

                                    <tr>
                                        <td colspan="5" style="padding: 0 15px;">
                                            <div style="border-bottom: thin solid #e0e0e0"></div>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td></td>
                                        <td colspan="4">
                                            <table width="100%" cellspacing="0" cellpadding="0" style="padding-right: 15px; font-size: 13px; font-weight: 600;">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2">
                                                            <div style="border-bottom: thin solid #e0e0e0"></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 15px;">Subtotal Harga</td>
                                                        <td style="padding: 15px 0 15px 15px; text-align: right;">Rp{{$subtotal}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <!-- refactor div float left and right in case order is kelontong -->
                    <tr>
                        <td>
                            <div id="container_invoice_qr" style="float:left; font-weight: bold; margin-top:20px;"></div>
                            <div style="float:right;">
                                <table>
                                    <!-- subtotal ongkir -->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 50%;"></td>
                                                            <td style="width: 50%;">
                                                                <table width="100%" style="width: 430px; margin-top: 15px; padding: 15px; border-radius: 4px; border: thin dashed #cccccc; font-size: 14px; font-weight: 600;">
                                                                    <tbody>
                                                                        <tr style="font-weight: normal; font-size: 12px;">
                                                                            <td style="padding-bottom: 10px;">Ongkos Kirim (<b>{{$shiping->courier_name . '-' . $shiping->courier_service}}</b>)</td>
                                                                            <td style="padding-bottom: 10px;text-align: right; white-space: nowrap; vertical-align: top;">Rp{{number_format($shiping->courier_price, 0, ',', '.')}}</td>
                                                                        </tr>
                                                                        <tr style="font-weight: normal; font-size: 12px; {{$payment_type === '' ? 'display:none' : ''}}">
                                                                            <td style="padding-bottom: 10px;">Biaya COD</td>
                                                                            <td style="padding-bottom: 10px;text-align: right; white-space: nowrap; vertical-align: top;">Rp{{$totalcod}}</td>
                                                                        </tr>
                                                                        <tr style="font-weight: normal; font-size: 12px; {{ $payment_type == 'COD' ? 'display:none' : ''}}">
                                                                            <td style="padding-bottom: 10px;">Angka Unik</td>
                                                                            <td style="padding-bottom: 10px;text-align: right; white-space: nowrap; vertical-align: top;">{{$uniq}}</td>
                                                                        </tr>
                                                                        <tr style="font-weight: normal; font-size: 12px;">
                                                                            <td style="padding-bottom: 10px;">Potongan</td>
                                                                            <td style="padding-bottom: 10px;text-align: right; white-space: nowrap; vertical-align: top;">-Rp{{number_format($promo->total, 0, ',','.')}}</td>
                                                                        </tr>
                                                                        <tr style="{{$promo->total == '0' ? 'display:none' : ''}}">
                                                                            <td colspan="2" style="background-color:#f9f9d2; color:#444; padding:4px 10px; border-radius:4px; font-size:12px; font-weight:normal"><b>Promo: </b>{{$promo->detail}}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <!-- subtotal biaya lain -->
                                        
                                        <tr>
                                            <td>
                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 50%;"></td>
                                                            <td style="width: 50%;">
                                                                <table width="100%" style="width: 430px; margin-top: 15px; padding: 15px; border-radius: 4px; border: thin solid rgba(0, 0, 0, 0.54); font-size: 14px; font-weight: 600;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Total Bayar</td>
                                                                            <td style="text-align: right;">Rp{{$total}}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>

                                        <!-- Keterangan -->
                        
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    
    <!-- end -->



</body>

</html>