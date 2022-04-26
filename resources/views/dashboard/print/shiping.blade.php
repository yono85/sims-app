<html lang="id" >
    <head>
    <link rel="icon" href="{{$apps['favicon']}}" sizes="32x32">
    <link rel="icon" href="{{$apps['favicon']}}" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="{{$apps['favicon']}}">
    <meta name="msapplication-TileImage" content="{{$apps['favicon']}}">
    <title>Shiping</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        body{
            padding-top: 90px;
        }

        .boxed{
            margin: auto;
        }

        @media print {
            body {
                padding-top: 0;
            }

            #action-area {
                display: none;
            }

            .boxed{
                margin: unset;
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
                /* width: auto !important; */
            }

            .btn-print {
                display: none !important;
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

<body style="font-family: open sans, tahoma, sans-serif; margin: 0; -webkit-print-color-adjust: exact;">
    
        <!-- head -->
        <div id="action-area">
        <div id="navbar-wrapper" style="padding: 12px 16px;font-size: 0;line-height: 1.4; box-shadow: 0 -1px 7px 0 rgba(0, 0, 0, 0.15); position: fixed; top: 0; left: 0; width: 100%; background-color: #FFF; z-index: 100;">
            <div class="header-btn" style="margin:auto; width:440px">

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
        <div class="boxed" style="width: 440px;">
            <table width="100%" cellspacing="0" cellpadding="0" style="width: 100%; padding: 10px 15px; color: #343030; border:2px solid #666;">
                <tbody>
                    <tr>
                        <td>
                            <table style="width:100%; font-size:12px; border-bottom:1px solid #aaa">
                                <tbody>
                                    <tr>
                                        <td style="width:50%">
                                            <img src="{{$URI}}/assets/icon/herbindo-favicon.png" alt="Formasi" style="margin-bottom: 0px; width: 32px;"></td>
                                        <td style="width:50%; text-align:right; font-size:13px;">Non Tunai <b>{{$payment_type}}</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 15px">
                            <table width="100%" cellspacing="0" cellpadding="0" style="padding-bottom: 20px; border-bottom: thin dashed #cccccc;">
                                <tbody>
                                    <tr>
                                        <td style="width: 45%; vertical-align: top;">
                                            <table style=" font-size:10px; width:100%;">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2">
                                                            <span>INVOICE #{{$kode}}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:34%">
                                                            <table style=" font-size:10px; width:100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="width:60px">
                                                                            <img src="{{$shiping->courier_image}}" alt="kurir" style="width:100%;object-fit: contain; height: 30px">
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                        <td style="width:66%">
                                                            <table style=" font-size:13px;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="color:#777; font-size:10px">
                                                                            <span>Kurir</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><b>{{$shiping->courier_name}}</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>{{$shiping->courier_service}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><b>{{$update->courier->branch_code}}</b></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table style=" font-size:10px;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="color:#777">Berat:</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>{{$weight}} Kg</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                        <td>
                                                            <table style=" font-size:10px;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="color:#777">Ongkir:</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Rp{{ number_format($shiping->courier_price, 0, ",", ".")}}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>

                                        <td style="width: 55%; vertical-align: top; ">
                                            <table style="text-align:center">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                        <img src="data:image/png;base64,  {{$barcode}}" alt="Barcode Image" style="width:100%; height: 52px;"/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 13px; padding-top:15px">
                                                            <span>{{$shiping->code}}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 10px; color:#777">
                                                            <span>Kode Booking ini bukan No Resi pengiriman</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding-top:10px; padding-bottom:10px;">
                            <table style="width:100%">
                                <tbody>
                                    <tr>
                                        <td style="width:50%">
                                            <table style="font-size:10px; width:100%;">
                                                <tbody>
                                                    <tr>
                                                        <td style="color: #666">Penerima:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>{{$destination->name}}</b>
                                                            <span>({{$destination->phone}})</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>{{$destination->address}}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{$destination->kecamatan. ', '. $destination->city}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{$destination->provinsi . ' ' . $destination->kodepos}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td style="width:50%">
                                            <table style="font-size:10px; text-align:right; width:100%;">
                                                <tbody>
                                                    <tr>
                                                        <td style="color: #666">Pengirim:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>{{$sales->company}}</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    @if( $type == '3' )
                                                        <td>{{$sales->name}}</td>
                                                    @else
                                                        <td>{{$sales->name . ' (' . $sales->phone . ')'}}</td>
                                                    @endif
                                                    </tr>
                                                    <tr>
                                                        <td>{{$sales->company_city . '-' . $sales->company_provinsi}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="border-top: thin dashed #cccccc; padding-top:10px;">
                            <table style="font-size: 10px; width:100%">
                                <tbody>
                                    <tr>
                                        <td style="padding-bottom:6px">Produk</td>
                                        <td style="width:15%; text-align:right">Jumlah</td>
                                    </tr>

                                    @foreach($list as $row => $value)
                                    <tr>
                                        <td style="padding-bottom:6px">{{ $row + 1 . ' ' . $value->name}}</td>
                                        <td style="width:15%; text-align:right"><b>{{$value->qty}}</b> pcs</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding-top:10px;"></td>
                    </tr>
                    <tr style="{{$payment_type === '' ? 'display:none' : ''}}">
                        <td style="border: 1px solid #888; padding:4px 8px; border-radius:12px">
                            <table style="font-size: 12px; width:100%">
                                <tbody>
                                    <tr>
                                        <td style="font-size:11px">Total yang harus dibayarkan secara tunai oleh pembeli ke kurir:</td>
                                        <td style="width:15%; text-align:right"><b>Rp{{$totalcod}}</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;"></td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

    
    <!-- end -->



</body>

</html>