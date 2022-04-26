<html lang="id" >
    <head>

    <title>Invoice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        @media print {
            body {
                padding-top: 0;
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
            <div style="width: 50%; display: inline-block; vertical-align: middle; font-size: 12px;">
                <div class="btn-back" >
                    
                </div>
            </div>
            <div style="width: 50%; display: inline-block; vertical-align: middle; font-size: 12px; text-align: right;">
                <a class="btn-download" href="javascript:window.print()" style="display: inline-block; vertical-align: middle;">
                    <img src="https://ecs7.tokopedia.net/img/download-invoice.png" alt="Download" width="20px" ;="">
                </a>
                <a class="btn-print" href="javascript:window.print()" style="height: 100%; display: inline-block; vertical-align: middle;">
                    <button id="print-button" style="border: none; height: 100%; cursor: pointer;padding: 8px 40px;border-color: #03AC0E;border-radius: 8px;background-color: #03AC0E;margin-left: 16px;color: #fff;font-size: 12px;line-height: 1.333;font-weight: 700;">Cetak</button>
                </a>
            </div>
        </div>
    </div>
    

    <div class="content-area">

        <!-- top -->
        <div style="margin: auto; width: 790px;">
            <table width="100%" cellspacing="0" cellpadding="0" style="width: 100%; padding: 25px 32px;">
                <tbody>
                    <tr>
                        <td>
                            <!-- header -->
                            <table width="100%">
                                <tbody><tr>
                                    <td style="text-align: center;">
                                        <img src="https://ecs7.tokopedia.net/img/tokopedia-logo-large.png" width="246" alt="Tokopedia" style="margin-top: -23px;">
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>

                    <!-- payment info -->
                    <tr>
                        <td>
                            <table width="100%" style="color: #343030; font-size: 12px; margin-top: 25px;">
                                <tbody>
                                    <tr>
                                        <td width="100" style="font-weight: bold;">Tanggal</td>
                                        <td>09 September 2020</td>
                                    </tr>
                                
                                    <tr>
                                        <td width="100" style="font-weight: bold;">Pembayaran</td>
                                        <td>
                                            <table width="100%" style="font-size: 12px; border-collapse: collapse;">
                                                <tbody>
                                                    <tr>
                                                        <td>OVO <img src="https://ecs7.tokopedia.net/img/toppay/payment-logo/ovo.png" height="25" alt="OVO" style="vertical-align: middle; margin-left: 5px;"></td>
                                                    </tr>
                                                
                                                
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                
                                
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <!-- ringkasan belanja -->
                    <tr>
                        <td>
                            <table width="100%" cellspacing="0" cellpadding="0" style="border: thin solid #979797; border-bottom: none; border-radius: 4px; color: #343030; margin-top: 20px;">
                                <tbody>
                                    <tr style="background-color: rgba(242, 242, 242, 0.74)">
                                        <td style="font-weight: 600; font-size: 16px; padding: 10px;">Ringkasan Pembayaran (1 Invoice)</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <table width="100%" style="font-size: 12px; padding: 10px 10px 0;">
                                                <tbody>
                                                    <tr>
                                                        <td style="font-weight: 600;">Total Belanja</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table width="100%" style="font-size: 12px; padding: 0 10px 10px 10px;">
                                                <tbody>
                                                    <tr>
                                                        <td style="vertical-align: top">
                                                            <table width="100%" style="font-size: 12px;">
                                                            
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="padding: 0 10px 3px 0; width: 1%; white-space: nowrap;"> - <b>SUNREST OUTDOOR</b></td>
                                                                        <td style="padding: 0 10px 3px 0;">
                                                                            <b>(INV/20200909/XX/IX/624716522)</b>
                                                                        </td>
                                                                    
                                                                        <td style="text-align: right; white-space: nowrap; vertical-align: middle;">Rp 362.500</td>
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
                                        <td>
                                            <table width="100%" style="border: thin solid #979797; border-left: none; border-right: none; border-radius: 4px; font-size: 14px;">
                                                <tbody>
                                                    <tr style="font-weight: 600">
                                                        <td style="padding: 10px;">
                                                            Subtotal Belanja
                                                        </td>
                                                        <td style="padding: 10px; text-align: right;">
                                                            Rp 362.500
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

                    <!-- total pembayaran -->
                    <tr>
                        <td>
                            <table width="100%" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;"></td>
                                        <td style="width: 50%;">
                                            <table width="100%" style="width: 430px; margin-top: 15px; padding: 15px; border-radius: 4px; background-color: rgba(242, 242, 242, 0.74); border: thin solid rgba(0, 0, 0, 0.54); font-size: 16px; font-weight: bold; color: #42b549">
                                                <tbody>
                                                    <tr>
                                                        <td>Total Bayar</td>
                                                        <td style="text-align: right;"> Rp 362.500
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

                </tbody>
            </table>

            <!-- separator -->
            <div style="margin: 30px 0;">
                <div style="border-bottom: thin dashed #474747; margin-bottom: 10px;"></div>
                <div style="border-bottom: thin dashed #474747"></div>
            </div>
        </div>

        <!-- bottom -->
        <div style="background: url(https://ecs7.tokopedia.net/img/invoice/paid-stamp.png) center no-repeat; background-size: contain; margin: auto; width: 790px;">
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
                                                            <img src="https://ecs7.tokopedia.net/img/tokopedia-logo-large.png" alt="Tokopedia" style="margin-bottom: 15px; width: 147px;">
                                                        </td>
                                                    </tr>
                                                
                                                    <tr>
                                                        <td colspan="2" style="font-size: 14px;">
                                                            <span style="font-weight: 600">Nomor Invoice</span> : <span style="color: #42b549; font-weight: 600;">INV/20200909/XX/IX/624716522</span>
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
                                                            <a href="https://www.tokopedia.com/sunrest">
                                                                SUNREST OUTDOOR
                                                                
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; font-weight: 600; padding-bottom: 6px; width: 80px;">
                                                            Tanggal</td>
                                                        <td style="font-size: 12px; padding-bottom: 6px;">
                                                            09 September 2020</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td style="width: 43%; vertical-align: top; padding-left: 30px;">
                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                    <tr>
                                                        <td style="font-weight: 600; font-size: 14px;padding-bottom: 8px;">
                                                            Tujuan Pengiriman:</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; padding-bottom: 20px;">
                                                            <span style="margin-bottom: 3px; font-weight: 600; display: block;">Yono Cahyono</span>
                                                            <div>
                                                                Kantor Pustaka Lebah Jl. Teluk Mandar No. 99, Komplek AL Pasar Minggu
                                                                Pasar Minggu
                                                                Kota Administrasi Jakarta Selatan
                                                                12520 <br>
                                                                DKI Jakarta <br>
                                                                6287829505055
                                                            </div>
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
                        <td>
                            <table width="100%" cellspacing="0" cellpadding="0" style="border: thin dashed rgba(0, 0, 0, 0.34); border-radius: 4px; color: #343030; margin-top: 20px;">
                                <tbody>
                                    <tr style="background-color: rgba(242, 242, 242, 0.74); font-size: 14px; font-weight: 600;">
                                        <td style="padding: 10px 15px;">Nama Produk</td>
                                        <td style="padding: 10px 15px; text-align: center;">Jumlah</td>
                                        <td style="padding: 10px 15px; text-align: center;">Berat</td>
                                        <td style="padding: 10px 15px; text-align: center; white-space: nowrap;">Harga
                                            Barang</td>
                                        <td style="padding: 10px 15px; text-align: right;">Subtotal</td>
                                    </tr>
                                    
                                    <tr style="font-size: 14px;">
                                        <td width="330" style="padding: 15px; font-weight: 600; word-break: break-word;">
                                            <a href="https://www.tokopedia.com/snapshot_product?order_id=583156631&amp;dtl_id=873149765">Celana Panjang Hitam Pinnacle Eutla celana outdoor Quickdry stretch</a>
                                            <div style="margin: 10px 0 0;"></div>
                                            <div style="margin: 10px 0 0;"></div>
                                            <div style="
                                            padding: 15px;
                                            border: thin solid rgba(204, 204, 204, 0.54);
                                            border-radius: 5px;
                                            font-size: 12px;
                                            font-weight: normal;
                                            margin-top: 10px;">
                                                <b>Catatan:</b> Size S
                                            </div>
                                        </td>
                                        <td valign="top" style="padding: 15px; text-align: center;">
                                            1
                                        </td>
                                        <td valign="top" style="padding: 15px; text-align: center; white-space: nowrap;">
                                            350 gr
                                        </td>
                                        <td valign="top" style="padding: 15px; white-space: nowrap; text-align: center;">
                                            Rp 299.000
                                        </td>
                                        <td valign="top" style="padding: 15px; white-space: nowrap;">
                                            Rp 299.000
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="5" style="padding: 0 15px;">
                                            <div style="border-bottom: thin solid #e0e0e0"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="4">
                                            <table width="100%" cellspacing="0" cellpadding="0" style="padding-right: 15px; font-size: 14px; font-weight: 600;">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2">
                                                            <div style="border-bottom: thin solid #e0e0e0"></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 15px;">Subtotal Harga Barang</td>
                                                        <td style="padding: 15px 0 15px 15px; text-align: right;">
                                                            Rp 299.000 </td>
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
                                                                            <td style="padding-bottom: 10px;">
                                                                                GrabExpress -
                                                                                Instant
                                                                                (Berat:
                                                                                350 gr)</td>
                                                                            <td style="padding-bottom: 10px;text-align: right; white-space: nowrap; vertical-align: top;">
                                                                                Rp 62.000</td>
                                                                        </tr>
                                                                        <!-- show this in invoice section subtotal ongkos kirim -->
                                                                        
                                                                        <tr style="font-weight: normal; font-size: 12px;">
                                                                            <td style="padding-bottom: 10px;"> Jaminan Pengiriman
                                                                                Tepat Waktu</td>
                                                                        </tr>
                                                        
                                                                        <tr>
                                                                            <td style="border-top: thin solid #e0e0e0; padding-top: 10px;">
                                                                                Subtotal Ongkos Kirim</td>
                                                                            <td style="border-top: thin solid #e0e0e0; padding-top: 10px; text-align: right; white-space: nowrap;">
                                                                                Rp 62.000
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
                                        <!-- subtotal biaya lain -->
                                    
                                        <tr>
                                            <td>
                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 50%;"></td>
                                                            <td style="width: 50%;">
                                                                <table width="100%" style="width: 430px; margin-top: 15px; padding: 15px; border-radius: 4px; border: thin dashed #cccccc; font-size: 12px; font-weight: 600;">
                                                                    <tbody>
                                                                        <tr style="font-weight: normal;">
                                                                            <td style="padding-bottom: 10px;">
                                                                                Asuransi
                                                                                <div style="font-size: 11px; color: rgba(0, 0, 0, 0.54); margin-top: 8px;">
                                                                                Paket ini tidak menggunakan asuransi pihak logistik, penjual <strong>tidak perlu bayar asuransi</strong> ke kurir.
                                                                                </div>
                                                                            </td>
                                                                            <td style="padding-bottom: 10px;text-align: right; white-space: nowrap; vertical-align: top;">
                                                                                Rp 1.500</td>
                                                                        </tr>
                                                                        <tr style="font-size: 14px;">
                                                                            <td style="border-top: thin solid #e0e0e0; padding-top: 10px;">Subtotal Biaya Lainnya</td>
                                                                            <td style="border-top: thin solid #e0e0e0; padding-top: 10px; text-align: right; white-space: nowrap;">Rp 1.500</td>
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
                                                                            <td style="text-align: right;">Rp 362.500</td>
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


<!-- <script type="text/javascript">var _cf = _cf || []; _cf.push(['_setFsp', true]);  _cf.push(['_setBm', true]);  _cf.push(['_setAu', '/assets/2a8e2b60ui18179965a5d909d58009']); </script> -->

<!-- <script type="text/javascript" src="/assets/2a8e2b60ui18179965a5d909d58009"></script> -->

<!-- <script src="https://cdn.tokopedia.net/built/d1dd3126ee9ae2b8381ed123ca34b2a2.js" type="text/javascript"></script> -->

<!-- <script src="https://cdn.tokopedia.net/built/6b42e5043225d4bd57fb1d885f07b835.js" type="text/javascript"></script> -->



</body>

</html>