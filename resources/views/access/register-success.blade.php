<!doctype html>
<html lang="id">
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

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{$URI}}/assets/css/access/plugins.bundle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/simple-line-icons.css">

        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/access/main.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/access/style.css">
        
        <script>
            var config = {
                apps : {
                    'URL_API':'{{$apps["url_api"]}}',
                    'API_KEY':'{{$apps["api_key"]}}'
                }
            }
        </script>
        <script src="{{$URI}}/assets/js/js10.js" type="text/javascript"></script>
        <script src="{{$URI}}/assets/js/conf.js" type="text/javascript"></script>
        <script src="{{$URI}}/assets/js/global.js" type="text/javascript"></script>
    </head>
    <body>

        	
        <div class="limiter full">
            <div class="container-login100 registers" >
                <div class="wrap-login100 p-l-55 p-r-55 p-t-65">

                    <div class="login100-form validate-form" style="padding-top: 20px;">

                        <div class="div">
                            <div class="ic-accss">
                                <a href="{{$URI}}">
                                    <img src="{{$apps['favicon']}}" alt="logo"/>
                                </a>
                            </div>
                        </div>

                        <div class="div">
                            <div class="div ttl">Terimakasih, {{$user['name']}}</div>
                            <div class="div lbl" style="font-size:12px;">
                                <div class="div">
                                    <span style="color:#333 !important;">Link verifikasi akun berhasil dikirimkan ke alamat email</span>
                                </div>
                                <span class="clr" style="width:100%; text-decoration:underline">{{$user['email']}}</span>
                            </div>
                            <br>
                            <div class="div" style="padding:0px 25px; box-sizing:border-box">

                                <div class="div area-btn-resend" data-role="off" data-error="{{$count}}">
                                    <span class="info-true" style="font-size:12px;">
                                        <span>Belum menerima email verifikasi?</span>
                                        <a href="{{$URI}}" class="link" id="cmd-resend" role="off" style="font-size:12px">Kirim ulang</a>
                                        <span class="timer">Harap tunggu... <span class="limit">30</span></span>
                                    </span>
                                    <span class="info-error">
                                        <div class="di">
                                            <div class="div">
                                                <span class="info">{{ $message }}</span>
                                            </div>
                                        </div>
                                    </span>
                                </div>

                            </div>
                            <br>
                            <div class="div">
                                <a href="{{$URI}}/login" style="text-decoration:none">
                                    <span class="sli_icon-arrow-left"></span>
                                    <span>LOGIN</span>
                                </a>
                            </div>


                        </div>

                    </div>

                    <br><br>

                    
                    
                </div>

                <div class="acs-footer">
                        <div class="tbl">
                            <div class="intbl">
                                <div class="div">
                                    <span>{!! $apps['created'] !!}</span>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <form action="{{$apps['url_api']}}/api/reverifaccount" id="form-resend" class="hide">
                <input type="hidden" value="{{$token}}" name="token">
                <input type="hidden" value="{{$apps['app_level']}}" name="level" >
                <input type="hidden" value="{{$info}}" name="info" >
                <input type="submit" class="hide" value="submit">
            </form>
        </div>

        <script>
            var configregister = {
                'first'     :   {
                    'status'    :   '{{$firstsender["status"]}}',
                    'token'     :   '{{$firstsender["token"]}}'
                }
            }

            $(document).ready(function()
            {

                var time = 30;
                var vstatus = 'off';
                var msg = '';
                var counter;

                function timer()
                {
                    time = time - 1;
                    if (time == 0) 
                    {
                        clearInterval(counter);
                        $('.info-error .info').html(msg);

                        if( vstatus === 'on')
                        {       
                            $('.area-btn-resend').attr('data-error', 'on');
                        }
                            $('.area-btn-resend').attr('data-role', 'off');
                    

                        $('.area-btn-resend #cmd-resend').attr('role', 'off');

                        return;
                    }

                    $('.area-btn-resend .limit').html(time);

                }

                function runtimer()
                {
                    counter = setInterval(timer, 1000);
                }


                $('#cmd-resend').click(function(e)
                {
                    e.preventDefault();

                    var cmd = $(this),
                    area = cmd.parents('.area-btn-resend');

                    if( cmd.attr('role') === 'off')
                    {
                        cmd.attr('role', 'on');

                        time = 30;
                        // area.find('.limit').html('60');
                        // area.attr('data-role', 'on');
                        // runtimer();
                        $('#form-resend').submit();
                    }

                });

                function stoprun()
                {
                    clearInterval(counter);
                    $('.area-btn-resend').attr('data-role', 'off');
                    time = 60;
                    $('.area-btn-resend').find('.limit').html('60');
                }

                // function sending()
                // {

                    
                    $('#form-resend').submit(function()
                    {

                        var form = $(this),
                        area = $('body').find('.area-btn-resend');


                        //buat array untuk field dalam form
                        var unindexed_array = form.serializeArray();
                        var datasend = {};

                        $.map(unindexed_array, function(n, i){
                            datasend[n['name']] = n['value'];
                        });

                        $.ajax({
                            type: 'POST',
                            url:  form.attr("action"),
                            timeout: 18000,
                            headers: {
                                "Content-Type": "application/json"
                            },
                            data: JSON.stringify(datasend),
                            dataType: 'JSON',
                            success: function(e,n,r)
                            {
                                // $('.area-btn-resend').attr('data-error', e.response.count);

                                // console.log(e);

                                if( r.status === 200)
                                {
                                
                                    // if( e.message !== '')
                                    // {

                                    //     $('.info-error .info').html(e.message);
                                    //     $('.area-btn-resend').attr('data-error', 'on');
                                    //     stoprun();
                                    // }
                                    // else
                                    // {
                                        var $datasend = {"token":e.token}
                                        sendingemail($datasend);

                                        area.find('.limit').html('30');
                                        // area.find('.limit').html('60');
                                        area.attr('data-role', 'on');
                                        runtimer();
                                    // }
                                    msg = e.message;
                                    vstatus = e.count;
                                }


                            },
                            error: function(e)
                            {
                                // console.log(e);
                                // alert(e.responseJSON.message);
                                stoprun();
                                $('.info-error .info').html(e.responseJSON.message);
                                $('.area-btn-resend').attr('data-error', 'on');
                                // console.log(e.responseJSON.message);

                            }

                        });



                        return false;
                    });

                    
                // }


                //sender mail first
                if( configregister.first.status === 'true')
                {
                    var $data = {
                        "token":configregister.first.token
                    }

                    $.ajax({
                        type: "POST",
                        url: '{{$URL_API}}/api/send/mail',
                        headers:{
                            "Content-Type":"application/json",
                            "key":'{{$apps["api_key"]}}'
                        },
                        cache: false,
                        timeout: 18000,
                        data: JSON.stringify($data),
                        dataType:"JSON",
                        success: function(n)
                        {
                            console.log(n);
                            configregister.first.status = 'false';
                        },
                        error: function(n)
                        {
                            console.log(n.responseJSON.message);
                        }
                    });
                }



                return false;
            });
        </script>
    </body>


</html>
