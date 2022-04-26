<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">

        <title>{{$apps['name']}}</title>

        <!-- meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Description"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="google" content="notranslate" />

        <!-- icon -->
        <link rel="icon" href="{{$apps['favicon']}}" sizes="32x32">
        <link rel="icon" href="{{$apps['favicon']}}" sizes="192x192">
        <link rel="apple-touch-icon-precomposed" href="{{$apps['favicon']}}">
        <meta name="msapplication-TileImage" content="{{$apps['favicon']}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- style -->
        <link href="{{$URI}}/assets/css/access/plugins.bundle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/bootstrap/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/global-plugins.bundle.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/simple-line-icons.css">
        
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/access/util.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/access/main.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/access/style.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/default.css">

        <!-- script -->
        <script>
        var config = {
            "apps":{
                "name":"{{$apps['name']}}",
                "URL"       :   "{{$URI}}",
                "URL_API"   :   "{{$apps['url_api']}}",
                "X_CSRF_TOKEN": "{{csrf_token()}}",
                'cookie_name'    :   "{{$apps['cookie']}}"
            },
            "page":{
                "title":"{{$title}}"
            }
        }

        </script>
        <script src="{{$URI}}/assets/js/js10.js" type="text/javascript"></script>
        <script src="{{$URI}}/assets/js/conf.js" type="text/javascript"></script>
        <script src="{{$URI}}/assets/js/global.js" type="text/javascript"></script>
        <script>checkLogin();</script>
    </head>

    <body>
        <div class="ar-access">
            
            <div class="inr-acs">
            
                <div class="in-box-acs clr-float">
                    
                    <!-- login  signup repassword area -->
                    <div class="limiter">
                        <div class="container-login100" >
                            <div class="wrap-login100 pd-t25 p-b-54 pd-lr30">
    
                                @yield('content')
    
                            </div>

                        </div>
                    </div>

                    <!-- sampul -->
                    <div class="ar-sampul">
                        <div class="div">
                            <div class="div sampul-header">
                                <div class="div clr-float">
                                    <div class="fl-left">
                                        <span class="fa flaticon2-speaker"></span>
                                        <b>Pengumuman</b>
                                    </div>
                                    <div class="fl-right">
                                        <a href="#" class="color-blue">
                                            <span class="fa flaticon2-refresh fsize12"></span>
                                            <span>Refresh</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="div">
                                <ul class="area-boxed">
                                    <li>
                                        <div class="div">
                                            <div class="ttl">
                                                <span class="icon sli_icon-paper-clip"></span>
                                                <b class="hide">Pengumuman Terbaru</b>
                                            </div>
                                            <p>box 1</p>
                                            <div class="div clr-float">
                                                <div class="fl-left">
                                                    <div class="div">
                                                        <span class="label">
                                                            <span class="sli_icon-user ic fsize10"></span>
                                                            <span>Admin</span>
                                                            <span class="ic"></span>
                                                            <span class="ic sli_icon-clock fsize10"></span>
                                                            <span>1jam lalu</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="fl-right">
                                                    <a href="#">
                                                        Baca Selengkapnya >>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="div">
                                            <p>box 1</p>
                                            <div class="div clr-float">
                                                <div class="fl-left">
                                                    <div class="div">
                                                        <span class="label">
                                                            <span class="sli_icon-user ic fsize10"></span>
                                                            <span>Admin</span>
                                                            <span class="ic"></span>
                                                            <span class="ic sli_icon-clock fsize10"></span>
                                                            <span>1jam lalu</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="fl-right">
                                                    <a href="#">
                                                        Baca Selengkapnya >>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="div">
                                            <p>box 1</p>
                                            <div class="div clr-float">
                                                <div class="fl-left">
                                                    <div class="div">
                                                        <span class="label">
                                                            <span class="sli_icon-user ic fsize10"></span>
                                                            <span>Admin</span>
                                                            <span class="ic"></span>
                                                            <span class="ic sli_icon-clock fsize10"></span>
                                                            <span>1jam lalu</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="fl-right">
                                                    <a href="#">
                                                        Baca Selengkapnya >>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
    

                </div>
                

            </div>

            <div class="ar-footer">
                <div class="div">
                    <span>{!! $apps['created']!!}</span>
                </div>
                <div class="div">
                    <span class="label">{{$apps['owner']}}</span>
                </div>
            </div>
        </div>
        

    </body>

<script src="{{$URI}}/assets/js/access/jscript.js" type="text/javascript"></script>

<script src="{{$URI}}/assets/js/jquery-1.12.4.min.js"></script>
<script src="{{$URI}}/assets/js/access/animate.js" type="text/javascript"></script>

<script>
    $('.slide').hiSlide();
</script>
@yield('script')
</html>
