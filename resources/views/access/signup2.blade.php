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
                    'cookie_name'    :   "{{$apps['cookie']}}",
                    "API_KEY": "{{$apps['api_key']}}"
                },
                "page":{
                    "title":"{{$title}}"
                }
            }
        </script>
        <script src="{{$URI}}/assets/js/js10.js" type="text/javascript"></script>
        <script src="{{$URI}}/assets/js/conf.js" type="text/javascript"></script>
        <script src="{{$URI}}/assets/js/global.js" type="text/javascript"></script>
        <script>checkLogin()</script>
    </head>

    <body>
        <div class="ar-signup area-signup">

            <div class="div header">
                <a class="clr-float" href="/">
                    <div>
                        <div class="header-l">
                            <div class="logo"></div>
                            <div class="nm">
                                <div class="tbl">
                                    <div class="intbl">
                                        <div class="div">
                                            <div class="div">
                                                <b class="up-txt">{{$apps['name']}}</b>
                                            </div>
                                            <div class="div">
                                                <span class="label">{{$apps['namelabel']}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{$apps['URI']}}/login" class="signin">
                    <span class="ic sli_icon-logout"></span>
                    <span>Login saja</span>
                </a>
            </div>

            <div class="div">
                <div class="body">
                    <div class="div ttl">
                        <b>Daftar Lembaga</b>
                        <div class="div">
                            <span class="fsize13 label">Lengkapi informasi data lembaga Anda dibawah ini</span>
                        </div>
                    </div>
                    <div class="div">
                        <form action="/api/signup-ver2" id="form-signup">
                            <ul>

                                <li class="mg-b0 sgp">
                                    <div class="div clr-float ar-boxed">
                                        <div class="row-5">
                                            <div class="boxi">
                                                <a href="#" class="text-hov-no-u cmd-selected-head" role="off" dataid="1">
                                                    <div class="div">
                                                        <b>Admin LMS</b>
                                                        <div class="div">
                                                            <span class="label">Lembaga Mental Spiritual</span>
                                                        </div>
                                                    </div>
                                                    <span class="check fa flaticon2-check-mark"></span>
                                                </a>
                                            </div>
                                            <div class="boxi">
                                                <a href="#" class="text-hov-no-u cmd-selected-head" role="off" dataid="2">
                                                    <div class="div">
                                                        <b>Admin PSMS</b>
                                                        <div class="div">
                                                            <span class="label">Prasarana dan Sarana Mental Spiritual</span>
                                                        </div>
                                                    </div>
                                                    <span class="check fa flaticon2-check-mark"></span>
                                                </a>
                                            </div>
                                            <div class="boxi">
                                                <a href="#" class="text-hov-no-u cmd-selected-head" role="off" dataid="3">
                                                    <div class="div">
                                                        <b>Admin KMS</b>
                                                        <div class="div">
                                                            <span class="label">Kegiatan Mental Spiritual</span>
                                                        </div>
                                                    </div>
                                                    <span class="check fa flaticon2-check-mark"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="sgp">
                                    <div class="div clr-float">
                                        <div class="hd-nav">
                                            <div class="div">
                                                <ul class="clr-float area-num-nav">

                                                    <!-- <li class="ic-nav" role="on">
                                                        <a href="#" role="on">
                                                            <div class="tbl">
                                                                <div class="intbl">
                                                                    1
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    -->

                                                </ul>
                                            </div>
                                            <div class="div">
                                                <div class="ttlx">
                                                    Informasi Umum
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="sgp">
                                    <div class="area-slider">
                                        <div class="ar-carousel">
                                            <div class="inar-carousel">
                                                <div id="carouselExampleCaptions" class="carousel slide h100p" data-ride="carousel">

                                                    <div class="carousel-inner br-rds8 h100p">

                                                        <div class="carousel-item active br-rds8 h100p" aria-role="umum">
                                                            <div class="ar-li">
                                                                <div class="div label-title hide">Informasi Umum</div>
                                                                <div class="box-li">
                                                                    <div class="div in-boxli">
                                                                        <div class="div">
                                                                            <b class="up-txt fsize11 label">Nama Lembaga</b>
                                                                        </div>
                                                                        <div class="div ar-content">
                                                                            <input type="text" class="txt empty" name="name" value="" disabled="disabled">
                                                                        </div>
                                                                    </div>
                                                                    <div class="div in-boxli">
                                                                        <div class="div">
                                                                            <b class="up-txt fsize11 label">NPWP</b>
                                                                        </div>
                                                                        <div class="div ar-content">
                                                                            <input type="text" class="txt empty number" name="npwp" value="" disabled="disabled">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="carousel-item br-rds8 h100p" aria-role="structure">
                                                            <div class="ar-li">
                                                                <div class="div label-title hide">Struktur</div>
                                                                <div class="box-li">
                                                                    <div class="div in-boxli">
                                                                        <div class="div">
                                                                            <b class="up-txt fsize11 label">Nama Ketua</b>
                                                                        </div>
                                                                        <div class="div ar-content">
                                                                            <input type="text" class="txt empty" name="ketua" maxlength="75">
                                                                        </div>
                                                                    </div>
                                                                    <div class="div in-boxli">
                                                                        <div class="div">
                                                                            <b class="up-txt fsize11 label">Nama Sekertaris</b>
                                                                        </div>
                                                                        <div class="div ar-content">
                                                                            <input type="text" class="txt empty" name="sekertaris" maxlength="75">
                                                                        </div>
                                                                    </div>
                                                                    <div class="div in-boxli">
                                                                        <div class="div">
                                                                            <b class="up-txt fsize11 label">Nama Bendahara</b>
                                                                        </div>
                                                                        <div class="div ar-content">
                                                                            <input type="text" class="txt empty" name="bendahara" maxlength="75">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="carousel-item br-rds8 h100p" aria-role="contact">
                                                            <div class="ar-li">
                                                                <div class="div label-title hide">Kontak</div>
                                                                <div class="box-li">
                                                                    <div class="div in-boxli">
                                                                        <div class="div">
                                                                            <b class="up-txt fsize11 label">Telp atau Handphone</b>
                                                                        </div>
                                                                        <div class="div ar-content">
                                                                            <input type="text" class="txt w50p number empty" name="phone" maxlength="15">
                                                                        </div>
                                                                    </div>
                                                                    <div class="div in-boxli">
                                                                        <div class="div">
                                                                            <b class="up-txt fsize11 label">Email</b>
                                                                        </div>
                                                                        <div class="div ar-content">
                                                                            <input type="text" class="txt empty" name="email" maxlength="100">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="carousel-item br-rds8 h100p" aria-role="address">
                                                            <div class="div label-title hide">Alamat Lembaga</div>
                                                            <div class="ar-li">
                                                                <div class="box-li">
                                                                    <div class="div in-boxli">
                                                                        
                                                                    <div class="div">
                                                                        <span class="label">Kota atau Kecamatan</span>
                                                                        <div class="div">
                                                                            <div class="field-city indropdown area-tsrc-dropdown alist" role="false" datatimer="1000">
                                                                                <div class="div ar-content">
                                                                                    <input class="form-control br-rds8  txt-def-empty tsrc-dropdown label-dropdown txt empty" name="city" type="text" placeholder="Cari Kota atau Kecamatan" aria-href="/api/data/srckotakecamatan-provinsi?provinsi=31&p=1&q=" maxlength="75">

                                                                                    <input type="hidden" name="address_array" class="value-dropdown empty">
                                                                                    
                                                                                    <button class="cls cmd-clear-tsrc" role="off">
                                                                                        <span class="sli_icon-close"></span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="dropdown dd-tsrc-dropdown">
                                                                                    <div class="div inardropdown no-rd">
                                                                                        <ul>
                                                                                           
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                    </div>
                                                                    <div class="div in-boxli">
                                                                        <div class="div">
                                                                            <b class="up-txt fsize11 label">Alamat</b>
                                                                        </div>
                                                                        <div class="div ar-content">
                                                                            <textarea class="form-control empty" name="address" maxlength="100"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div in-boxli">
                                                                        <div class="div">
                                                                            <b class="up-txt fsize11 label">Kode Pos</b>
                                                                        </div>
                                                                        <div class="div ar-content">
                                                                            <input type="text" class="txt w50p empty number" maxlength="6" name="kodepos">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="carousel-item br-rds8 h100p" aria-role="account">
                                                            <div class="ar-li">
                                                                <div class="div label-title hide">Akun Admin</div>
                                                                <div class="box-li">
                                                                    <div class="div in-boxli">
                                                                        <div class="div">
                                                                            <b class="up-txt fsize11 label">Nama Admin</b>
                                                                        </div>
                                                                        <div class="div ar-content">
                                                                            <input type="text" class="txt empty" name="username" maxlength="75">
                                                                        </div>
                                                                    </div>
                                                                    <div class="div in-boxli">
                                                                        <div class="div">
                                                                            <b class="up-txt fsize11 label">Gender</b>
                                                                        </div>
                                                                        <div class="div ar-content">
                                                                            <div class="ddwn area-ddwn ar-content keep w50p ddwn-button-select area-select-gender" data-label="Pilih Gender">
                                                                                <button class="btn br-rds8 cddwn txt" role="off">
                                                                                    <label><span class="fsize14 color-black">Pilih Gender</span></label>
                                                                                </button>
                                                                                <div class="ddwn-pg area-ddwn-page">
                                                                                    <div class="ddwn-header hide">
                                                                                        <div class="inhd">
                                                                                            <button height="auto" type="button"></button>
                                                                                            <input type="text" placeholder="Cari Bank" class="ddwn-tsrc">
                                                                                        </div>
                                                                                    </div>
                                                                                    <ul>
                                                                                        <!-- list -->
                                                                                        <li aria-selected="false">
                                                                                            <button role="off"  dataid="1" ><span>Laki-Laki</span></button>
                                                                                        </li>
                                                                                        <li aria-selected="false">
                                                                                            <button role="off"  dataid="2" ><span>Perempuan</span></button>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <input type="hidden" class="value-dropdown txt-def-empty empty" name="gender" value="">
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="div in-boxli">
                                                                        <div class="div">
                                                                            <b class="up-txt fsize11 label">Whatsapp</b>
                                                                        </div>
                                                                        <div class="div ar-content">
                                                                            <input type="text" class="txt empty number w50p" name="userphone" maxlength="15">
                                                                        </div>
                                                                    </div>

                                                                    <div class="div in-boxli">
                                                                        <div class="div">
                                                                            <b class="up-txt fsize11 label">Email Admin</b>
                                                                        </div>
                                                                        <div class="div ar-content">
                                                                            <input type="text" class="txt empty" name="useremail" maxlength="100">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="sgp">
                                    <div class="">
                                        <div class="div clr-float">
                                            <button class="btn grey is-loading fl-left hide cmd-navi" data-type="back" role="off">
                                                <span class="fsize10 fa flaticon2-fast-back"></span>
                                                <span>Kembali</span>
                                            </button>
                                            <button class="btn blue is-loading fl-right cmd-navi submit" data-type="next" disabled="disabled" role="off" aria-role="false">
                                                <span>Selanjutnya</span>
                                                <span class="fsize10 fa flaticon2-fast-next"></span>
                                            </button>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                            <input type="hidden" name="info" value="{{ $info }}">
                            <input type="hidden" name="categori" class="empty" value="">
                            <input type="hidden" name="type" value="2">
                            <input type="hidden" name="page" value="0">

                        </form>
                    </div>
                </div>
            </div>

            <div class="div">
                <div class="foot">
                    <div class="div">{!! $apps['created'] !!}</div>
                </div>
            </div>

        </div>
    </body>

<script src="{{$URI}}/assets/js/access/jscript.js" type="text/javascript"></script>
<script src="{{$URI}}/assets/js/jquery-1.12.4.min.js"></script>
<script src="{{$URI}}/assets/js/access/animate.js" type="text/javascript"></script>
<script src="{{$URI}}/assets/js/jquery.inputmask.bundle.min.js" type="text/javascript"></script>

<script>

    var confcarousel = {
        'count': 0,
        'num':0,
        'start': 0,
        'status':'false'
    }

    //
    function mainsignup()
    {
        var area = $(".area-signup"),
        carousel = area.find(".area-slider"),
        item = carousel.find(".carousel-item");

        valueitem = item.length;
        var xy = '';
        for(i=1;i<(valueitem + 1 );i++)
        {
            xy += '<li class="ic-nav" role="off"><a href="#" class="afalse"><div class="tbl"><div class="intbl">'+i+'</div></div></a></li>';
        }

        area.find(".area-num-nav").html(xy);
        confcarousel.count = valueitem;
        confcarousel.num = (valueitem - 1);
    }

    //
    mainsignup();

    //
    $(".cmd-selected-head").click(function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        dataid = cmd.attr("dataid"),
        form = cmd.parents("form");

        if( cmd.attr("role") ==="off")
        {
            form.find(".cmd-selected-head").attr("role","off");
            cmd.attr("role", "on");
            form.find(".area-num-nav").find("li").eq(0).addClass("focus");
            form.find(".area-num-nav").find("li").eq(0).attr("role", "on");
            form.find("input.empty[disabled='disabled']").removeAttr("disabled");
            form.find("button[data-type='next']").removeAttr("disabled");
            form.find("*[name='categori']").val(dataid);
        }
        
    });

    //
    $("#form-signup").on("click", ".cmd-navi", function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        type = cmd.attr("data-type"),
        form = cmd.parents("form"),
        areanod = form.find(".area-num-nav"),
        item = form.find(".carousel-item");

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            var start = confcarousel.start;

            if( type === "next")
            {

                // if( start < (confcarousel.count -1) )
                // {

                    checknext(start,form);
                    
                // }

                // console.log('start:' + start);
            }
            else
            {
                if( start > 0)
                {
                    start = start - 1;

                    //
                    areanod.find("li").removeClass('focus');
                    areanod.find("li").eq(start).addClass('focus');
                    item.removeClass("active");
                    form.find(".carousel-item").eq(start).addClass("active");
                    form.find(".hd-nav .ttlx").html( form.find(".carousel-item").eq(start).find(".label-title").html() );
                    confcarousel.start = start;
                    cmd.attr("role", "off");
                }

                if( start === 0)
                {
                    cmd.addClass("hide");
                    confcarousel.start = 0;
                }

                if( start < (confcarousel.count - 1) )
                {
                    // form.find(".cmd-navi[data-type='next']").removeClass("submit");
                    form.find(".cmd-navi[data-type='next']").attr("aria-role","false");
                    form.find(".cmd-navi[data-type='next']").html("<span class='ic'>Selanjutnya</span><span class='fa flaticon2-fast-next'></span>");   
                }

                // console.log('start:' + start);
            }

        }

        return false;
    });


    function checknext(e,w)
    {
        var start = e,
        status = confcarousel.status,
        form = w,
        cmd = form.find("button[data-type='next']"),
        areanod = form.find(".area-num-nav"),
        item = form.find(".carousel-item"),
        type = cmd.attr("data-type");

        var name = form.find("*[name='name']"),
        npwp = form.find("*[name='npwp']"),
        ketua = form.find("*[name='ketua']"),
        sekretaris = form.find("*[name='sekertaris']"),
        bendahara = form.find("*[name='bendahara']"),
        phone = form.find("*[name='phone']"),
        email = form.find("*[name='email']"),
        city = form.find("*[name='address_array']"),
        address = form.find("*[name='address']"),
        kodepos = form.find("*[name='kodepos']"),
        username = form.find("*[name='username']"),
        useremail = form.find("*[name='useremail']"),
        gender = form.find("*[name='gender']"),
        userphone = form.find("*[name='userphone']");

        form.find("label.error").remove();
        form.find(".br-error").removeClass("br-error");

        // if( type === 'next')
        // {

            if( start === 0)
            {
    
                if( $.trim(name.val()).length < 3 || cnumber($.trim(npwp.val())).length < 15 )
                {
                    if( $.trim(name.val()).length < 3)
                    {
                        name.parent(".ar-content").append("<label class='error'>Nama Lembaga sekurangnya 3 karakter</label>");
                        name.addClass("br-error");
                    }
    
                    if( cnumber($.trim(npwp.val())).length < 15 )
                    {
                        npwp.parent(".ar-content").append("<label class='error'>NPWP valid sekurangnya 15 angka</label>");
                        npwp.addClass("br-error");
                    }
    
                    cmd.attr("role", "off");
                    return;
                    
                }
            }

            if( start === 1)
            {
                if( $.trim(ketua.val()).length < 3 || $.trim(sekretaris.val()).length < 3  || $.trim(bendahara.val()).length < 3  )
                {
    
                    if( $.trim(ketua.val()).length < 3  )
                    {
                        ketua.parent(".ar-content").append("<label class='error'>Isi nama sekurangnya 3 karakter</label>");
                        ketua.addClass("br-error");
                    }
    
                    if( $.trim(sekretaris.val()).length < 3  )
                    {
                        sekretaris.parent(".ar-content").append("<label class='error'>Isi nama sekurangnya 3 karakter</label>");
                        sekretaris.addClass("br-error");
                    }
    
                    if( $.trim(bendahara.val()).length < 3  )
                    {
                        bendahara.parent(".ar-content").append("<label class='error'>Isi nama sekurangnya 3 karakter</label>");
                        bendahara.addClass("br-error");
                    }
    
                    cmd.attr("role", "off");
                    return
                }
            }

            if( start === 2)
            {
                if( $.trim(phone.val()).length < 9 || !validateEmail(email.val()))
                {
                    if( $.trim(phone.val()).length < 9 )
                    {
                        phone.parent(".ar-content").append("<label class='error'>Nomor Telp sekurangnya 9 angka</label>");
                        phone.addClass("br-error");
                    }

                    if( !validateEmail(email.val()) )
                    {
                        email.parent(".ar-content").append("<label class='error'>Format Email Lembaga tidak benar</label>");
                        email.addClass("br-error");
                    }

                    cmd.attr("role", "off");
                    return;
                }
            }

            if(start === 3)
            {
                if( $.trim(city.val()) === '' || $.trim(address.val()) === '' || $.trim(kodepos.val()).length < 6  )
                {
                    if( $.trim(city.val()) === '' )
                    {
                        city.parent(".ar-content").append("<label class='error'>Harap tentukan Kota atau Kecamatan</label>");
                        city.parent(".ar-content").find("*[name='city']").addClass("br-error");
                    }


                    if( $.trim(address.val()) === '' )
                    {
                        address.parent(".ar-content").append("<label class='error'>Harap isikan alamat lengkap lembaga</label>");
                        address.addClass("br-error");
                    }

                    if( $.trim(kodepos.val()).length < 6 )
                    {
                        kodepos.parent(".ar-content").append("<label class='error'>Kode Pos sekurangnya 6 angka</label>");
                        kodepos.addClass("br-error");
                    }



                    cmd.attr("role", "off");
                    return;
                }


            }

            if( start === 4)
            {
                

                if( $.trim(username.val()).length < 3 || $.trim(gender.val()) === '' || $.trim(userphone.val()).length < 9 || !validateEmail(useremail.val()) )
                {
                    if( $.trim(username.val()).length < 3 )
                    {
                        username.parent(".ar-content").append("<label class='error'>Nama Admin sekurangnya 3 karakter</label>");
                        username.addClass("br-error");
                    }

                    if( $.trim(gender.val()) === '' )
                    {
                        gender.parent(".ar-content").append("<label class='error'>Harap pilih Gender</label>");
                        gender.parent(".ar-content").find("button.btn").addClass("br-error");
                    }

                    if( $.trim(userphone.val()).length < 9 )
                    {
                        userphone.parent(".ar-content").append("<label class='error'>Nomor Whatsapp sekurangnya 9 karakter</label>");
                        userphone.addClass("br-error");
                    }

                    if( !validateEmail(useremail.val()) )
                    {
                        useremail.parent(".ar-content").append("<label class='error'>Format Email Admin tidak benar</label>");
                        useremail.addClass("br-error");
                    }

                    cmd.attr("role", "off");
                    status = 'false';
                    return;
                }

                status = 'true';
            }
    
            if( start < confcarousel.num )
            {
                start = start + 1;
        
            
                //
                cmd.removeClass("submit")
                cmd.attr("aria-role","false");
                cmd.html("<span class='ic'>Selanjutnya</span><span class='fa flaticon2-fast-next'></span>");
                areanod.find("li").removeClass('focus');
                areanod.find("li").eq(start).addClass('focus');
                areanod.find("li").eq(start).attr("role","on");
                item.removeClass("active");
                form.find(".carousel-item").eq(start).addClass("active");
                form.find(".hd-nav .ttlx").html( form.find(".carousel-item").eq(start).find(".label-title").html() );
                confcarousel.start = start;
                cmd.attr("role", "off");
                form.find(".cmd-navi[data-type='back']").removeClass("hide");

            }


            if( start === confcarousel.num )
            {

                if( status === 'true')
                {
                     form.submit();
                     return;
                }
                
                if( status === 'false')
                {
                    // cmd.addClass("submit");
                    cmd.attr("aria-role","true");
                    cmd.html("<span class='ic'>Daftar Lembaga</span><span class='fa flaticon2-check-mark'></span>");
                    // form.submit();
                    cmd.attr("role", "off");
                }
            }

            // confcarousel.start = start;
            

    }


    $("#form-signup input.txt").keyup(function()
    {
        var txt = $(this);

        if( $.trim(txt.val()).length > 0 )
        {
            txt.parent(".ar-content").find("label.error").remove();
            txt.removeClass("br-error");
        }
    });

    $("#form-signup textarea.empty").keyup(function()
    {
        var txt = $(this);

        if( $.trim(txt.val()).length > 0 )
        {
            txt.parent(".ar-content").find("label.error").remove();
            txt.removeClass("br-error");
        }
    });


    //
    $("#form-signup *[name='npwp']").inputmask({
        "mask": "99.999.999.9-999.999"
    });


    //
    $("#form-signup").submit(function()
    {
        var form = $(this),
        button = form.find("button[data-type='next']");

        
        var $URL = config.apps.URL_API + '/api/signup-new';
        var $t = FormSending(form,"POST","key","form",$URL);
        $t.success(function(n)
        {
            console.log(n);
            location.href = config.apps.URL + n.response.link;
            clearsignup(form);
        });
        $t.error(function(n)
        {
            var rsp = n.responseJSON;
            console.log(rsp);

            if( n.status === 401)
            {
                var num = parseFloat(rsp.area);
                form.find(".area-num-nav li").removeClass("focus");
                form.find(".area-num-nav li").eq(num).addClass("focus");
                form.find('*[name="'+rsp.focus+'"]').addClass("br-error");
                form.find(".carousel-item").removeClass("active");
                form.find(".carousel-item").eq(num).addClass("active");
                form.find(".hd-nav .ttlx").html( form.find(".carousel-item").eq(num).find(".label-title").html() );
                form.find('*[name="'+rsp.focus+'"]').parent(".ar-content").append("<label class='error'>"+rsp.message+"</label>");
                button.html( (num < 4 ? "<span class='ic'>Selanjutnya</span><span class='fa flaticon2-fast-next'></span>" : "<span class='ic'>Daftar Lembaga</span><span class='fa flaticon2-check-mark'></span>"));
                button.attr("role", "off");
                confcarousel.status = (num < 4 ? 'false' : 'true');
                button.attr("aria-role", (num < 4 ? 'false' : 'true'));
                confcarousel.start = num;
                return;
            }

            button.attr("role", "off");
            flagnotif('error', msgboxError());
        });

        return false;
    });


    //clear form
    function clearsignup(w)
    {
        var form = w,
        carousel = form.find(".carousel-item"),
        next = form.find("button[data-type='next']"),
        back = form.find("button[data-type='back']");
     
        carousel.removeClass("active");
        carousel.eq(0).addClass("active");
        form.find(".ttlx").html(carousel.eq(0).find(".label-title").html());
        form.find("input.empty").val("");
        form.find("textarea.empty").val("");

        form.find("input.empty").attr("disabled","disabled");
        next.attr("aria-role","false");
        next.attr("disabled","disabled");
        next.html("<span class='ic'>Selanjutnya</span><span class='fa flaticon2-fast-next'></span>");
        back.addClass("hide");
        form.find(".cmd-selected-head").attr("role","off");
        form.find("li.ic-nav").attr("role","off");
        form.find("li.ic-nav").removeClass("focus");
        form.find(".area-ddwn li").attr("aria-selected", "false");
        form.find(".area-ddwn button.btn label span").html(form.find(".area-ddwn").attr("data-label"));
        form.find(".cmd-clear-tsrc").hide();
        next.attr("role","off");
        confcarousel.start = 0;
        confcarousel.status = "false";
    }

    //
    $('button.cddwn').click(function(e)
    {
        e.stopPropagation();
        e.preventDefault();

        dropdownNew($(this));
    });

    //
    $('body').on('click', '.area-ddwn ul li button', function(e)
    {
        e.stopPropagation();
        e.preventDefault();

        var cmd = $(this),
        form = cmd.parents('form');

        selectedDDWN(cmd);

    });
    
    //
    // $('.slide').hiSlide();

</script>
@yield('script')
</html>
