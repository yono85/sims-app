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
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/default.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/home.css">

        <script src="{{$URI}}/assets/js/js10.js" type="text/javascript"></script>
        <script src="{{$URI}}/assets/js/global.js" type="text/javascript"></script>

        <!-- script -->
        <script>
            var config = {
                "apps":{
                    "name"          :   "{{$apps['name']}}",
                    "URL"           :   "{{$URI}}",
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

        <script src="{{$URI}}/assets/js/conf.js" type="text/javascript"></script>
        <script>
            checkLogout();
        </script>
        

    </head>
    <body>
        <!-- <div class="overlay-screen blk"></div> -->

        <div class="splash-dis wth">
            <div class="tbl">
                <div class="intbl txt-center">
                    <div class="div">
                        <div class="logo-ctr"></div>
                        <div class="div">
                            <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header">
            @include('home.component.header')
        </div>
        <div class="in-content">
            @yield('content')
        </div>
        <div class="in-footer">
            @include('home.component.footer')
        </div>

        <!-- <div class="prover-modal-view modal-new-view white hide"> -->

            <!-- ABSEN -->
            <!-- <div class="ar-modal-rel">
                <div class="ar-modal-absen area-absen overflow-xyH" aria-role="false">

                    <div class="ar-absen-screen">
                        <div class="iner">
                            <div class="media-screen">
                                screen
                            </div>
                        </div>
                    </div>

                    <div class="modal-BotToTop modal-absen txt-center" role="true">
                        <div class="div">
                            <a href="#" class="close" role="off">
                                <span class="fa flaticon2-cross"></span>
                            </a>
                            <div class="div title">
                                <div class="div">
                                    <span class="sli_icon-calendar"></span>
                                    <span>Absen: <b>Selasa, 15:21:09</b></span>
                                </div>
                                <div class="div time hide">
                                    <span class="sli_icon-calendar"></span>
                                    <span>SELASA,</span>
                                    <span>14:20:19</span>
                                </div>
                            </div>
                            <div class="div body">
                                <div class="div">
                                    <button role="off" aria="false" class="btn in is-loading">
                                        <span class="ics fa flaticon2-check-mark"></span>
                                        <span>
                                            <span>MASUK</span><span class="label">{timein}</span>
                                        </span>
                                        <span class="ic fa flaticon-logout rotate180"></span>
                                    </button>
                                </div>
                                <div class="div">
                                    <button role="off" aria="false" class="btn out is-loading">
                                        <span class="ics fa flaticon2-check-mark"></span>
                                        <span>
                                            <span>PULANG</span><span class="label">{timeout}</span>
                                        </span>
                                        <span class="ic fa flaticon-logout"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div> -->


            <!-- <div class="prover-modal-box sld-lr leftTOright" data-modal="modal-slide" role="true">
                <div class="prover-modal-box-inar">
                    <div class="box-head">
                        <a href="#" class="close" role="off">
                            <div class="tbl">
                                <div class="intbl">
                                    <span class="fa flaticon2-left-arrow-1"></span>
                                </div>
                            </div>
                        </a>
                        <div class="tbl">
                            <div class="intbl">
                                <div class="div">
                                    <h2 class="title">Notifikasi</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="inar-x">
                            <ul>
                                <li>li</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="prover-modal-box" >
                <div class="prover-modal-box-in">
                    <div class="up-arrow r"></div>
                    <div class="ar-list">
                        <div class="list">
                            <div class="inlist">
                                <div class="l-nm">
                                    Pengaturan Akun
                                </div>
                                <div class="l-icon">
                                    <svg style="width: 100%; height: 100% ">
                                        <use xlink:href="/assets/svg/icon-config.svg#gear"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="list">
                            <div class="inlist">
                                <div class="l-nm">
                                    Bantuan
                                </div>
                                <div class="l-icon">
                                    <svg style="width: 100%; height: 100% ">
                                        <use xlink:href="/assets/svg/icon-config.svg#help"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="list">
                            <div class="inlist">
                                <div class="l-nm">
                                    Keluar
                                </div>
                                <div class="l-icon">
                                    <svg style="width: 100%; height: 100% ">
                                        <use xlink:href="/assets/svg/icon-config.svg#lock"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="prover-modal-box mn-child" style="top:38px; left:10px">
                <div class="prover-modal-box-in">
                    <div class="up-arrow" style="left:120px"></div>
                    <div class="ar-list">
                        <div class="boxid mn">
                            <div class="ar-ctn">
                                <div class="div clr-float">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="iabox">
                                                    <div class="inarbox">
                                                        <div class="upbox">
                                                            <div class="chld">
                                                                <div class="inarx txt-center">
                                                                    <div class="splt-up">Rabu</div>
                                                                    <div class="splt-btm">15</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="btmbox">
                                                            <div class="div">Kalender</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="iabox">
                                                    <div class="inarbox">
                                                        <div class="upbox">
                                                            <div class="chld">
                                                                <img src="https://www.icloud.com/system/cloudos2/2116Project44/id-id/r$__8.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="btmbox">
                                                            <div class="div">Absen</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="iabox">
                                                    <div class="inarbox">
                                                        <div class="upbox">
                                                            <div class="chld">
                                                                <img src="https://www.icloud.com/system/cloudos2/2116Project44/id-id/r$__41.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="btmbox">
                                                            <div class="div">Pegawai</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="iabox">
                                                    <div class="inarbox">
                                                        <div class="upbox">
                                                            <div class="chld">
                                                                <img src="https://www.icloud.com/system/cloudos2/2116Project44/id-id/r$__22.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="btmbox">
                                                            <div class="div">Dashboard</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="iabox">
                                                    <div class="inarbox">
                                                        <div class="upbox">
                                                            <div class="chld">
                                                                <img src="https://www.icloud.com/system/cloudos2/2116Project44/id-id/r$__19.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="btmbox">
                                                            <div class="div">Task</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <a href="#">
                                                <div class="iabox">
                                                    <div class="inarbox">
                                                        <div class="upbox">
                                                            <div class="chld">
                                                                <img src="https://www.icloud.com/system/cloudos2/2116Project44/id-id/r$__24.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="btmbox">
                                                            <div class="div">Pages</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="iabox">
                                                    <div class="inarbox">
                                                        <div class="upbox">
                                                            <div class="chld">
                                                                <img src="https://www.icloud.com/system/cloudos2/2116Project44/id-id/r$__22.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="btmbox">
                                                            <div class="div">Report Penjualan</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="iabox">
                                                    <div class="inarbox">
                                                        <div class="upbox">
                                                            <div class="chld">
                                                                <img src="https://www.icloud.com/system/cloudos2/2116Project44/id-id/r$__39.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="btmbox">
                                                            <div class="div">Partner</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        <!-- </div> -->

        

        <!-- <script src="{{$URI}}/assets/temp/scripts/bootstrap.min.js"></script> -->
        <script src="{{$URI}}/assets/temp/scripts/jquery-ui.min.js"></script>
        <!-- <script src="{{$URI}}/assets/js/dashboard/dashboard.js" type="text/javascript"></script> -->

        <script src="{{$URI}}/assets/js/tables.js" type="text/javascript"></script>
        <script src="{{$URI}}/assets/js/home.js" type="text/javascript"></script>
    </body>
    @yield('script')
</html>