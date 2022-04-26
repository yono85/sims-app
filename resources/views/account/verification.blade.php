<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">

        <title>{{$title}}</title>

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


        <link href="{{$URI}}/assets/css/default.css" rel="stylesheet" type="text/css">
        <link href="{{$URI}}/assets/css/access/verification-regist.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/font.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/simple-line-icons.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/access/plugins.bundle.css">
        <!-- Styles -->


        
        <script>

            var config = {
                    "apps" : {
                        "URL":"{{$URI}}",
                        "URL_API":"{{$apps['url_api']}}",
                        "API_KEY":"{{$apps['api_key']}}",
                        "LEVEL":"{{$apps['app_level']}}",
                        "X_CSRF_TOKEN"  :   "{{csrf_token()}}",
                        'cookie_name'   :   "{{$apps['cookie']}}",
                    },
                    "page":{
                        "title":"{{$title}}"
                    },
                }

            var tokenu = window.location.href,
            tokenu = tokenu.split("token=");
        </script>

        <script src="{{$URI}}/assets/js/js10.js" type="text/javascript"></script>
        <script src="{{$URI}}/assets/js/conf.js" type="text/javascript"></script>
        <script src="{{$URI}}/assets/js/global.js" type="text/javascript"></script>
        <script>
            function cekCookie()
            {

                var cookie = getCookie(config.apps.cookie_name);
                if( cookie !== '')
                {
                    window.location.href = '/home';
                    return;
                }
            }

            //redirect if cookie active
            cekCookie();
        
        </script>

    </head>
    <body >

        <div class="splash-dis wth hide">
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

        <div class="inner-bdyverif">
            <div class="content-verif">
                <div class="in-content-verif">
                <form action="/api/account/sendverification" id="frm-verifReg">

                    <div class="obody-verif">
                        <div class="tbl">
                            <div class="intbl">

                                <div class="div ttl-say-verif">
                                    <div class="div">
                                        <img src="{{$apps['logo']}}" alt="" class="logo-ctr">
                                    </div>
                                    <div class="say-verif">Verifikasi Akun</div>
                                    <div class="div label">
                                        <span>Selangkah lagi untuk bisa mengakses Akun Anda</span>
                                    </div>
                                </div>

                                <div class="bdy-inp">
                                    
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="err-area">Error</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="lbltbl">Username</td>
                                                <td>
                                                    <div class="div label-shw72">
                                                        <span class="">Username</span>
                                                    </div>
                                                    <div class="div alist">
                                                        <input type="text" class="fcs fcs1 username tnumabj" placeholder="" name="username" autocomplete="off" spellcheck="false" autocorrect="off" maxlength="12" tabindex="1"/>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="lbltbl">
                                                </td>
                                                <td class="lbl-info">
                                                    <span>Gunakan kata uniq dan mudah diingat (maks:12) <br><span class="fa flaticon2-information"></span> <i>hanya huruf dan angka yang dibolehkan</i></span>
                                                </td>
                                            </tr>

                                            <tr ><td colspan="2">
                                                <div class="td-inp"></div>
                                            </td></tr>
                                            <tr >
                                                <td class="lbltbl">Password</td>
                                                <td style="position:relative">
                                                    <div class="div label-shw72">
                                                        <span class="">Password</span>
                                                    </div>
                                                    <div class="div alist">
                                                        <input type="password" class="fcs fcs2 pass" placeholder="" name="password" autocomplete="off" spellcheck="false" autocorrect="off" maxlength="16" tabindex="2"/>
                                                        <a href="#" class="afalse btn-vpass showhide" role="off" tabindex="11">Tampilkan</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="lbltbl">
                                                </td>
                                                <td class="lbl-info">
                                                    <span>Panjang karakter password 6 - 16 karakter</span>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td colspan="2" class="td-inr">
                                                </td>
                                            </tr>
                                            <tr >
                                                <td class="lbltbl">Re-Password</td>
                                                <td style="position:relative">
                                                    <div class="div label-shw72">
                                                        <span class="">Re-Password</span>
                                                    </div>
                                                    <div class="div alist">
                                                        <input type="password" class="fcs fcs3 pass" placeholder="" name="repassword" autocomplete="off" spellcheck="false" autocorrect="off" maxlength="16" tabindex="3"/>
                                                    </div>
                                                    <div class="div h18"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="lbltbl"></td>
                                                <td>
                                                    <div class="div area-checkbox txt-left" role="off">
                                                        <a href="#" class="afalse btn cmd-chechkbox" role="off" tabindex="4"></a>
                                                        <span>Saya setuju dengan <a href="#" class="afalse color-blue" tabindex="12">Syarat dan Ketentuan</a> yang berlaku sebagai pengguna aplikasi.</span>
                                                        <input type="hidden" name="term" value="0" class="value-checkbox" />
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                
                                
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="obody-verif obody-verif-o" style="background-color: transparent;">
                        <div class="area-btnverif">
                            <button class="btn-sendverif submit green is-loading" role="off" tabindex="5">
                                <span class="fa flaticon2-shield"></span>
                                <span>VERIFIKASI</span>
                            </button>
                        </div>

                        <div class="footer-say-verif" style="color: #333;"><span>{!! $apps['created'] !!}</span></div>

                    </div>
                    <input type="hidden" name="token" value="" />
                    <input type="hidden" name="page" value="{{$apps['app_level']}}" />
                    <input type="hidden" name="info" value="{{ $info }}" />
                    

                </form>
                </div>
            </div>
        </div>
        

        <script src="{{$URI}}/assets/js/access/registers.js" type="text/javascript"></script> 
        <script src="{{$URI}}/assets/js/dashboard/jquery.validate.js"></script>

    </body>
</html>