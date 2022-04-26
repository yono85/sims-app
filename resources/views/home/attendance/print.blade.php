<html lang="id" >
    <head>
        <link rel="icon" href="{{$apps['favicon']}}" sizes="32x32">
        <link rel="icon" href="{{$apps['favicon']}}" sizes="192x192">
        <link rel="apple-touch-icon-precomposed" href="{{$apps['favicon']}}">
        <meta name="msapplication-TileImage" content="{{$apps['favicon']}}">
        <title>{{$title}}</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/assets/css/simple-line-icons.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/default.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/home.css">
        <script src="{{$apps['URI']}}/assets/js/js10.js" type="text/javascript"></script>
        <script src="{{$apps['URI']}}/assets/js/global.js" type="text/javascript"></script>

        <script>
            var config = {
                "apps":{
                    "name"          :   "{{$apps['name']}}",
                    "URL"           :   "{{$apps['URI']}}",
                    "URL_API"       :   "{{$apps['url_api']}}",
                    "URL_STORE"     :   "{{$apps['url_store']}}",
                    "URL_SLINK"     :   "{{$apps['url_slink']}}",
                    "URL_NOTIF"    :   "{{$apps['url_notif']}}",
                    "APP_LEVEL"     :   "{{$apps['app_level']}}",
                    "X_CSRF_TOKEN"  :   "{{csrf_token()}}",
                    'cookie_name'   :   "{{$apps['cookie']}}",
                    'confTimeMSCHToken': "{{$apps['TimeMSCHToken']}}",
                    "NOTIFY_STATUS" :   "{{$apps['notify']}}"
                },
                "page":{
                    "title":"{{$title}}"
                },
            }

        </script>

        <script src="{{$apps['URI']}}/assets/js/conf.js" type="text/javascript"></script>
        <script>
            checkLogout();
        </script>
    </head>
    <body>
        <div class="oar-pt-qr">
            <div class="ar-wall">
                <div class="inar-wall">
                    <div class="wall tl"><img src="{{$apps['favicon']}}" alt="" class="logo"></div>
                    <div class="wall br"><img src="{{$apps['favicon']}}" alt="" class="logo"></div>
                </div>
            </div>
            <table style="text-align:center; width:100%;" class="ar-pt-qr">
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="div">
                            <div class="area-qr">
                                <div class="box">
                                    <!-- <img src="data:image/png;base64, $urlqrcode}}" alt="Barcode Image"/> -->
                                    <img src="data:image/png;base64,  {{$qrcode}}" alt="Barcode Image"/>
                                    <div class="overlay">
                                        <span>
                                        <img src="{{$apps['favicon']}}" alt="" class="logo">
                                        </span>
                                    </div>
                                </div>
                                <div class="foot">
                                    <span class="sli_icon-pointer"></span>
                                    <span>{{strtoupper($rsp->name)}}</span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="bts"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="div">
                            <b class="ttl">{{$rsp->company_name}}</b>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="div">
                            <div class="div tr-foot">
                                <div class="div">
                                    {{$rsp->address}}
                                </div>
                                <div class="div">
                                    Kec.{{ucwords($rsp->kecamatan_name)}} - {{$rsp->city_type . '.' . $rsp->city_name}}
                                </div>
                                <div class="div">
                                    {{$rsp->provinsi_name .' - '. $rsp->kodepos}}
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
