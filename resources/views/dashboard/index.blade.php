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

        <!-- StyleSheets -->
        <link href="{{$URI}}/assets/temp/css/jquery-ui.css" rel="stylesheet" />
        <link href="{{$URI}}/assets/temp/css/bootstrap.min.css" rel="stylesheet" />
        <link href="{{$URI}}/assets/temp/css/perfect-scrollbar.css" rel="stylesheet" />

        <!-- Begin Global Structure -->
        <link href="{{$URI}}/assets/temp/css/structure.css" rel="stylesheet" />
        <link href="{{$URI}}/assets/temp/css/components.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/font.css">
        <!-- End Global Structure -->

        <!-- Moby Icons -->
        <!-- <link href="{{$URI}}/assets/temp/css/moby.css" rel="stylesheet" /> -->
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/simple-line-icons.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/global-plugins.bundle.css">


        <!-- FontsOnline -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet" />

        
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/dashboard/style.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/home.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/default.css">

        
        <script src="{{$URI}}/assets/js/js10.js" type="text/javascript"></script>
        <script src="{{$URI}}/assets/js/global.js" type="text/javascript"></script>

        <!-- script -->
        <script>


            var config = {
                "apps":{
                    "name"          :   "{{$apps['name']}}",
                    "URL"           :   "{{$URI}}",
                    "URL_API"       :   "{{$apps['url_api']}}",
                    "URL_NOTIF"    :   "{{$apps['url_notif']}}",
                    "APP_LEVEL"     :   "{{$apps['app_level']}}",
                    "X_CSRF_TOKEN"  :   "{{csrf_token()}}",
                    'cookie_name'   :   "{{$apps['cookie']}}",
                    'confTimeMSCHToken': "{{$apps['TimeMSCHToken']}}",
                    "NOTIFY_STATUS" :   "{{$apps['notify']}}"
                },
                "table":{
                    "run"           :   1,
                    "splash_max"    :   4,
                    "countpage"     :   0,
                    "search_status" :   0,
                    "search_text"   :   "",
                    "sort"          :   1
                },
                "page":{
                    "title":"{{$title}}"
                },
                "error"          :   {
                    "message_refresh"       :   "Opss... Terjadi kesalahan, refresh kembali halaman ini"
                }
            }

        </script>


        <!-- JavaScripts -->
        
        
        <script src="{{$URI}}/assets/js/conf.js" type="text/javascript"></script>
        
        <script>
            checkLogout();
        </script>

        
    </head>

    <body>

        
        <div class="moby__aside-structure moby__theme_ui classic">

            <!-- Moby SideBar Menu -->
            @include('dashboard.component.aside')

            <!-- Moby Main Content Section -->
            <div class="wrapper">

                <!-- Moby Main Header -->
                @include('dashboard.component.header')
                <!-- Moby Main Header -->

                <!-- Moby Main Components Holder -->
                

                @yield('content')

                <!-- Moby Main Components Holder -->

                <!-- Moby Main Footer -->
                @include('dashboard.component.footer')
                <!-- Moby Main Footer -->


            </div>

        </div>

       
        
        @yield('script')



        @include('dashboard.component.media')

        <!-- Java Script -->
        
        
        <script src="{{$URI}}/assets/js/dashboard/dashboard.js" type="text/javascript"></script>
        <script src="{{$URI}}/assets/js/home.js" type="text/javascript"></script>
        <script src="{{$URI}}/assets/js/tables.js" type="text/javascript"></script>


        <!-- Begin Global Scripts -->
        <!-- <script src="{{$URI}}/assets/temp/scripts/modernizr.js"></script> -->
        <!-- <script src="{{$URI}}/assets/temp/scripts/jquery.min.js"></script> -->


        <script src="{{$URI}}/assets/temp/scripts/popper.min.js"></script>
        <script src="{{$URI}}/assets/temp/scripts/bootstrap.min.js"></script>
        <script src="{{$URI}}/assets/temp/scripts/jquery-ui.min.js"></script>

        <script src="{{$URI}}/assets/temp/scripts/perfect-scrollbar.min.js"></script>
        <!-- End Global Scripts -->


        <!-- selectpicker -->
        <script src="{{$URI}}/assets/js/dashboard/dropdown-search/bootstrap-select.min.js"></script>

        <!-- Begin Custom Scripts -->
        <script src="{{$URI}}/assets/temp/scripts/custom.js"></script>
        <!-- End Custom Scripts -->

        <!-- <div class="m-preview-img area-prev-image">
            <div class="preview-bck"></div>
            <div class="in-preview">
                <div class="area-preview"> -->

                    <!-- <div class="l-preview">
                        <div class="img-preview">
                            <div class="arimage-resize prev-img">
                                <img src="http://localhost:8001/images/transfer/fb9a624166d88cdd3f417c9766f1c4cd.jpg" alt="">
                            </div>
                            <a href="#" class="xclose close-previmg" role="off">
                                <div class="tbl">
                                    <div class="intbl">
                                        <div class="span flaticon2-cross"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> -->

                    <!-- <div class="r-preview">
                        <div class="div header">
                            <span><b>Bukti Bayar</b></span>
                        </div>
                        <div class="div bdy">
                            <div class="div clr-float list-xdp">
                                <div class="fl-left"><span class="label">Invoice</span></div>
                                <div class="fl-right prev-invoice">#<b>---</b></div>
                            </div>
                            <div class="div clr-float list-xdp">
                                <div class="fl-left"><span class="label">Diupload oleh</span></div>
                                <div class="fl-right prev-name">---</div>
                            </div>
                            <div class="div clr-float list-xdp">
                                <div class="fl-left"><span class="label">Tanggal</span></div>
                                <div class="fl-right prev-date"></div>
                            </div>
                        </div>
                    </div> -->

                <!-- </div>
            </div>
        </div> -->

    </body>

<script>



$(document).ready(function(){
    //
    // refresh change token
    setupTimeCHToken();
    

});
</script>

</html>
