@extends('home.index')

@section('content')
<div class="container-home w1024p">
    <div class="ar-att-screen area-screenAtt">

        <div class="div clr-float">
            <div class="fl-right r clr-float">
                <div class="div clr-float">
                    <div class="box" role="true">
                        <div class="inbox">
                            <canvas id="qrcode-2" class="qrcode"></canvas>
                        </div>
                        <div class="logo">
                                <img src="/assets/icon/herbindo-favicon.png" alt="">
                            </div>
                        <div class="load">
                            <img src="/assets/svg/loading.blue.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="div txt-countdown">
                    <span></span>
                </div>
            </div>
            <div class="fl-left l">
                <div class="divH">
                    <div class="div">
                        <div class="div">
                            <span class="time">
                                --:--:--
                            </span>
                        </div>
                        <div class="div fsize12">
                            <span class="label">Tanggal:</span>
                            <b class="date">{Day, hh:ii:ss}</b>
                        </div>
                    </div>
                    
                    <div class="div ar-value">
                        <div class="div">
                            <span class="fa flaticon-home"></span>
                            <b class="title-name">{Name}</b>
                        </div>
                        <div class="div label fsize12 area-address">
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- carousel -->
        <div class="div">
            <div class="ar-carousel">
                <div class="inar-carousel">
                    <div id="carouselExampleCaptions" class="carousel slide h100p" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner br-rds8 h100p">
                            <div class="carousel-item active br-rds8 h100p">
                                <img src="/assets/images/banner/3.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-white">All Herbindo</h5>
                                    <p>Dokumentasi Owner, Direksi dan seluruh jajaran karyawan</p>
                                </div>
                            </div>
                            <div class="carousel-item br-rds8 h100p">
                                <img src="/assets/images/banner/2.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-white">Owner dan Direksi</h5>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item br-rds8 h100p">
                                <img src="/assets/images/banner/1.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-white">Formulator</h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="{{$URI}}/assets/temp/scripts/bootstrap.min.js"></script>
<script src="{{$URI}}/assets/temp/scripts/custom.js"></script>
<script src="{{$URI}}/assets/js/qrcode.js"></script>
<script type="text/javascript">


</script>
@endsection

@section('script')
<script>
    
 var tokenu = window.location.href,
tokenu = tokenu.split("q=")

$(document).ready(function()
{


    function getLocations()
    {
        var area = $('body').find('.area-screenAtt');

        var $URL = config.apps.URL_API + '/api/home/absen/screen?token=' + tokenu[1];
        var $t = FormSending("","GET","key","",$URL);
        $t.success(function(n)
        {
            var rsp = n.response;
            // console.log(rsp);
            area.find('.date').html(rsp.day);
            // area.find('.time').html(rsp.time);
            viewCanvasQRCode(rsp.qrcode);
            timeAtt = parseFloat(rsp.timev);
            timeAttLegal = parseFloat(rsp.time);
            area.find('.title-name').html(rsp.name);
            var address = '<div class="div">'+rsp.address+'</div>';
            address += '<div class="div">'+rsp.address2+'</div>';
            address += '<div class="div">'+rsp.address3+'</div>';
            area.find('.area-address').html(address);

            changeTime(timeAtt,area);

            countDownTimer.token = rsp.token;
            countDownTimer.limit = parseFloat(rsp.limit);
            countDownTimer.value = parseFloat(rsp.count);
            countDownTimer.countValue = parseFloat(rsp.count);

            //
            exeRunTimerAtt();
            exeRunCountDownTimer();

            //AUTO RELOAD PAGE IF AFTER IN ACTIVE WITH DURATION
            if( parseFloat(rsp.realoadpage) !== 0)
            {
                setupTimeReload(parseFloat(rsp.reloadpage)); //minute
            }
    
            // HIDE SPLASH
            hideSplash();
        });
        $t.error(function(n)
        {
            console.log(n);
            // HIDE SPLASH
            hideSplash();
        });
    }



    function viewCanvasQRCode(n)
    {
        var qrcode = new QRious({
            element: document.getElementById("qrcode-2"),
            background: '#ffffff',
            backgroundAlpha: 1,
            foreground: '#000000',
            foregroundAlpha: 1,
            level: 'H',
            padding: 0,
            value: n,
            size:$('body').find('.area-screenAtt .box').innerWidth()
        });

    }

    //RUN TIMER ATT
    var timeAtt=0;
    var timeAttLegal=0;
    var setRunTimerAtt;
    function runTimerAtt()
    {

        var area = $('body').find('.area-screenAtt');
        var time = timeAtt + 1000;

        //
        timeAtt = time;
        timeAttLegal = timeAttLegal + 1;
           
        var toDay = new Date(timeAtt);
         
        changeTime(toDay,area);
        // var h = toDay.getHours(),
        // m = toDay.getMinutes(),
        // s = toDay.getSeconds();


        // h = h < 10 ? ('0'+ h) : h;
        // m = m < 10 ? ('0' + m) : m;
        // s = s < 10 ? ('0' + s) : s;

        // area.find('.time').html(h +':' + m +':' + s);
    }

    function changeTime(e,w)
    {
        var toDay = new Date(e),
        area = w;

        var h = toDay.getHours(),
        m = toDay.getMinutes(),
        s = toDay.getSeconds();


        h = h < 10 ? ('0'+ h) : h;
        m = m < 10 ? ('0' + m) : m;
        s = s < 10 ? ('0' + s) : s;

        area.find('.time').html(h +':' + m +':' + s);
    }

    function exeRunTimerAtt()
    {
        setRunTimerAtt = setInterval(runTimerAtt, 1000);
    }

    //
    getLocations()


    var countDownTimer = {
        limit:0,
        value:0,
        countValue:0,
        token:''
    }
    var setRunCountDownTimer;

    function runCountDownTimer()
    {
        var value = countDownTimer.countValue;
        var limit = countDownTimer.limit;

        var ctvalue = value - 1;
        countDownTimer.countValue = ctvalue;

        if( ctvalue <= limit)
        {
            $('body').find('.txt-countdown').css({'color':'red'});
            $('body').find('.txt-countdown span').html('Memulai ulang QRCode dalam '+ctvalue);
        }
        else
        {
            $('body').find('.txt-countdown').css({'color':''});
        }

        if( ctvalue === 0)
        {
            $('body').find('.txt-countdown span').html('');
            stopCountDownTimer();
            countDownTimer.countValue = countDownTimer.value;
            reloadQRCode();
        }
    }

    function exeRunCountDownTimer()
    {
        setRunCountDownTimer = setInterval(runCountDownTimer, 1000);
    }

    function stopCountDownTimer()
    {
        clearTimeout(setRunCountDownTimer);
    }

    function reloadQRCode()
    {
        $('body').find('.area-screenAtt .box').attr('role','false');
        //
        $.ajax({
            type: "POST",
            url: config.apps.URL_API + '/api/home/absen/getQRdinamic',
            headers:{
                'Content-Type':'application/json',
                'key':getaccount().key
            },
            data: JSON.stringify({
                'token':countDownTimer.token
            }),
            dataType:'JSON',
            success: function(n)
            {
                // console.log(n);
                var rsp = n;
                viewCanvasQRCode(rsp.qrcode);
                $('body').find('.area-screenAtt .box').attr('role','true');
                exeRunCountDownTimer();
            },
            error: function(n)
            {
                // console.log(n);
                var rsp = n.responseJSON;

                setTimeout(function()
                {
                    window.location.href = window.location.href
                },1500);
                flagnotif('error', rsp.message);

            }

        });
    }



return false;
});
</script>
@endsection