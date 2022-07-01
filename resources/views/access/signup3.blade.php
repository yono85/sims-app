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
                <div class="body wa600">
                    <div class="div ttl">
                        <b>Daftar Lembaga</b>
                        <div class="div">
                            <span class="fsize13 label">Lengkapi informasi data lembaga Anda dibawah ini</span>
                        </div>
                    </div>
                    <div class="div">
                        <form action="/api/signup-ver2" id="form-signup">
                            <ul>

                                <li class="sgp">
                                    <div class="div">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="left">
                                                        <div class="div">
                                                            <b>Informasi Lembaga</b>
                                                            <div class="div">
                                                                <span class="label">Isikan Nama dan Jenis Lembaga</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="vtop">
                                                        <div class="div">
                                                            <div class="div ar-content">
                                                                <div class="mdtri l"></div>
                                                                <input type="text" class="form-control" name="name" placeholder="Nama Lembaga">
                                                            </div>
                                                            <div class="div bts-in"></div>
                                                            <div class="div ar-content">
                                                                <div class="mdtri l"></div>
                                                                <div class="ddwn area-ddwn ar-content keep area-list-type">
                                                                    <button class="btn br-rds4 cddwn" role="off">
                                                                        <label class="mg-b0">
                                                                            <span class="fsize14 color-black ffarial">Jenis Lembaga</span>
                                                                        </label>
                                                                    </button>
                                                                    <div class="ddwn-pg area-ddwn-page">
                                                                        <div class="ddwn-header hide">
                                                                            <div class="inhd">
                                                                                <button height="auto" type="button"></button>
                                                                                <input type="text" placeholder="Cari Lembaga" class="ddwn-tsrc" maxlength="75">
                                                                            </div>
                                                                        </div>
                                                                        <ul>
                                                                            <li aria-selected="false" class="mg-b0" dataid="1">
                                                                                <button role="off" dataid="1" class="pd-tb10">
                                                                                    <span>Lembaga/Ormas</span>
                                                                                </button>
                                                                            </li>
                                                                            <li aria-selected="false" class="mg-b0" dataid="2">
                                                                                <button role="off" dataid="2" class="pd-tb10">
                                                                                    <span>Rumah Ibadah</span>
                                                                                </button>
                                                                            </li>
                                                                            <li aria-selected="false" class="mg-b0" dataid="3">
                                                                                <button role="off" dataid="3" class="pd-tb10">
                                                                                    <span>Pondok Pesantren</span>
                                                                                </button>
                                                                            </li>
                                                                            <li aria-selected="false" class="mg-b0" dataid="4">
                                                                                <button role="off" dataid="4" class="pd-tb10">
                                                                                    <span>Majelis Taklim</span>
                                                                                </button>
                                                                            </li>
                                                                            <li aria-selected="false" class="mg-b0" dataid="5">
                                                                                <button role="off" dataid="5" class="pd-tb10">
                                                                                    <span>TPA/TPQ</span>
                                                                                </button>
                                                                            </li>
                                                                            <li aria-selected="false" class="mg-b0" dataid="6">
                                                                                <button role="off" dataid="6" class="pd-tb10">
                                                                                    <span>Diniyah</span>
                                                                                </button>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <input type="hidden" class="value-dropdown min1" name="type" value="-1">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="div bts-br mg-b30 mg-t50"></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>

                                <li class="sgp area-legalitas hide">
                                    <div class="div">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="left">
                                                        <div class="div">
                                                            <b>Legalitas</b>
                                                            <div class="div">
                                                                <span class="label">Isikan No. Akta Kumham dan NPWP Lembaga</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="vtop">
                                                        <div class="div">
                                                            <div class="div ar-content">
                                                                <div class="mdtri l"></div>
                                                                <input type="text" class="form-control empty" name="kumham_no" placeholder="No. Akta Kumham" maxlength="75">
                                                            </div>
                                                            <div class="div bts-in"></div>
                                                            <div class="div ar-content">
                                                                <div class="mdtri l"></div>
                                                                <input type="date" class="form-control w50p empty" name="kumham_tgl" placeholder="Tgl Akta Kumham">
                                                            </div>
                                                            <div class="div bts-in"></div>
                                                            <div class="div ar-content">
                                                                <div class="mdtri l"></div>
                                                                <input type="text" class="form-control empty number" name="npwp" value="" placeholder="NPWP">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="div bts-br mg-b30 mg-t50"></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>

                                <li class="sgp">
                                    <div class="div">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="left">
                                                        <div class="div">
                                                            <b>Kontak</b>
                                                            <div class="div">
                                                                <span class="label">Isikan Alamat Email dan Telepon lembaga</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="vtop">
                                                        <div class="div">
                                                            <div class="div ar-content">
                                                                <div class="mdtri l"></div>
                                                                <input type="text" class="form-control" name="email" placeholder="Alamat Email" maxlength="100">
                                                            </div>
                                                            <div class="div bts-in"></div>
                                                            <div class="div ar-content">
                                                                <div class="mdtri l"></div>
                                                                <input type="text" class="form-control w50p number" name="phone" placeholder="Telepon" maxlength="15">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="div bts-br mg-b30 mg-t50"></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>

                                <li class="sgp">
                                    <div class="div">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="left">
                                                        <div class="div">
                                                            <b>Pengurus Lembaga</b>
                                                            <div class="div">
                                                                <span class="label">Isikan Pengurus lembaga (Ketua, Bendahara dan Sekertaris)</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="vtop">
                                                        <div class="div">
                                                            <div class="div ar-content">
                                                                <div class="mdtri l"></div>
                                                                <input type="text" class="form-control" placeholder="Nama Ketua" name="ketua" maxlength="75">
                                                            </div>
                                                            <div class="div bts-in"></div>
                                                            <div class="div ar-content">
                                                                <div class="mdtri l"></div>
                                                                <input type="text" class="form-control w50p number" placeholder="Tlp/HP Ketua" name="ketua_phone" maxlength="15">
                                                            </div>
                                                            <div class="div">
                                                                <div class="div bts-br mg-t20 mg-b20"></div>
                                                            </div>
                                                            <div class="div ar-content">
                                                                <div class="mdtri l"></div>
                                                                <input type="text" class="form-control" placeholder="Nama Bendahara" name="bendahara" maxlength="75">
                                                            </div>
                                                            <div class="div">
                                                                <div class="div bts-br mg-t20 mg-b20"></div>
                                                            </div>
                                                            <div class="div ar-content">
                                                                <div class="mdtri l"></div>
                                                                <input type="text" class="form-control" placeholder="Nama Sekertaris" name="sekertaris" maxlength="75">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="div bts-br mg-b30 mg-t50"></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>

                                <li class="sgp">
                                    <div class="div">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="left">
                                                        <div class="div">
                                                            <b>Alamat</b>
                                                            <div class="div">
                                                                <span class="label">Lengkapi alamat lembaga</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="vtop">
                                                        <div class="div">
                                                            <div class="div">
                                                                <div class="div ar-content">
                                                                    <div class="mdtri l"></div>
                                                                    <div class="field-city indropdown area-tsrc-dropdown alist" role="false" datatimer="1000">
                                                                        <div class="div ar-content">
                                                                            <input class="form-control txt-def-empty tsrc-dropdown label-dropdown empty form-control" name="city" type="text" placeholder="Cari Kota atau Kecamatan" aria-href="/api/data/srckotakecamatan-provinsi?provinsi=31&p=1&q=" maxlength="75">

                                                                            <input type="hidden" name="address_array" class="value-dropdown empty">
                                                                            
                                                                            <button class="cls cmd-clear-tsrc" role="off">
                                                                                <span class="sli_icon-close"></span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="dropdown dd-tsrc-dropdown">
                                                                            <div class="div inardropdown no-rd">
                                                                                <ul></ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="div bts-in"></div>
                                                            <div class="div ar-content">
                                                                <div class="mdtri l"></div>
                                                                <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan" maxlength="75">
                                                            </div>
                                                            <div class="div bts-in"></div>
                                                            <div class="div ar-content">
                                                                <div class="mdtri l"></div>
                                                                <textarea class="form-control empty" placeholder="Alamat lengkap" name="address" maxlength="150"></textarea>
                                                            </div>
                                                            <div class="div bts-in"></div>
                                                            <div class="div">
                                                                <input type="text" class="form-control w50p" name="kodepos" placeholder="Kode Pos" maxlength="6">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="div bts-br mg-b30 mg-t50"></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>

                                <li class="sgp">
                                    <div class="div">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="left">
                                                        <div class="div">
                                                            <b>Admin Lembaga</b>
                                                            <div class="div">
                                                                <span class="label">Isikan informasi Admin lembaga</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="vtop">
                                                        <div class="div">
                                                            <div class="div ar-content">
                                                                <div class="mdtri l"></div>
                                                                <input type="text" class="form-control" placeholder="Nama Admin" name="admin_name" maxlength="75">
                                                            </div>
                                                            <div class="div bts-in"></div>
                                                            <div class="div ar-content">
                                                                <div class="mdtri l"></div>
                                                                <input type="text" class="form-control" placeholder="Alamat Email" name="admin_email" maxlength="100">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="div bts-br mg-b30 mg-t50"></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>

                                <li class="sgp">
                                    <div class="">
                                        <div class="div clr-float">
                                            <button class="btn blue is-loading fl-right cmd-navi submit" data-type="next" role="off" aria-role="false">
                                                <span>Daftar Lembaga</span>
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <input type="hidden" name="info" value="{{ $info }}">
                            <input type="hidden" name="categori" class="empty" value="">
                            <input type="hidden" name="register_type" value="1">
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

$(document).ready(function()
{

    // NEW CODE
    $(".area-ddwn-page li button").click(function()
    {
        var cmd = $(this),
        form = $("body").find("#form-signup"),
        arealegal = form.find(".area-legalitas");
        arealegal.find(".empty").val("");

        if( cmd.attr("dataid") !== '2')
        {
            arealegal.removeClass("hide");
            return
        }

        arealegal.addClass("hide");
        return
    });

    // END NEW CODE

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

            var check = checksubmit(form);

            if(check)
            {
                form.submit();
            }
        }

        return false;
    });

    function checksubmit(w)
    {
        var form = w,
        cmd = form.find("button.cmd-navi");

        //
        var name = form.find("*[name='name']"),
        type = form.find("*[name='type']"),
        email = form.find("*[name='email']"),
        phone = form.find("*[name='phone']"),
        kumhamno = form.find("*[name='kumham_no']"),
        kumhamtgl = form.find("*[name='kumham_tgl']"),
        npwp = form.find("*[name='npwp']"),
        ketua = form.find("*[name='ketua']"),
        ketuaphone = form.find("*[name='ketua_phone']"),
        bendahara = form.find("*[name='bendahara']"),
        sekertaris = form.find("*[name='sekertaris']"),
        city = form.find("*[name='address_array']"),
        address = form.find("*[name='address']"),
        kelurahan = form.find("*[name='kelurahan']"),
        admin = form.find("*[name='admin_name']"),
        adminemail = form.find("*[name='admin_email']");

        //
        form.find('.br-error').removeClass("br-error");
        form.find('label.error').remove();

        if( $.trim(name.val()).length < 3 || type.val() === '-1' || type.val() !== '2' && $.trim(kumhamno.val()) === '' || type.val() !== '2' && $.trim(kumhamtgl.val()) === '' || type.val() !== '2' && cnumber($.trim(npwp.val())).length < 15 || !validateEmail(email.val()) || $.trim(phone.val()).length < 9 || $.trim(ketua.val()) === '' || $.trim(ketuaphone.val()) === '' || $.trim(bendahara.val()) === '' || $.trim(sekertaris.val()) === '' || city.val() === '' || $.trim(address.val()).length < 10 || $.trim(kelurahan.val()) === '' || $.trim(admin.val()) === '' || !validateEmail(adminemail.val()) )
        {
            if( $.trim(name.val()).length < 3 )
            {
                name.parent(".ar-content").append("<label class='error'>Nama Lembaga sekurangnya 3 karakter</label>");
                name.addClass("br-error");
            }

            if( type.val() === '-1')
            {
                type.parent(".ar-content").append("<label class='error'>Harap pilih jenis lembaga</label>");
                type.parent(".ar-content").find("button.cddwn").addClass("br-error");
            }

            if( type.val() !== '2' && $.trim(kumhamno.val()) === '' )
            {
                kumhamno.parent(".ar-content").append("<label class='error'>Isikan kolom No. Akta Kumham</label>");
                kumhamno.addClass("br-error");
            }

            if( type.val() !== '2' && $.trim(kumhamtgl.val()) === '' )
            {
                kumhamtgl.parent(".ar-content").append("<label class='error'>Isikan tanggal Akta Kumham</label>");
                kumhamtgl.addClass("br-error");
            }

            if( type.val() !== '2' && cnumber($.trim(npwp.val())).length < 15 )
            {
                npwp.parent(".ar-content").append("<label class='error'>Isikan kolom NPWP 15 digit</label>");
                npwp.addClass("br-error");
            }

            if( !validateEmail(email.val()) )
            {
                email.parent(".ar-content").append("<label class='error'>Alamat email tidak valid</label>");
                email.addClass("br-error");
            }

            if( $.trim(phone.val()).length < 9 )
            {
                phone.parent(".ar-content").append("<label class='error'>Nomor Tlp/HP sekurangnya 9 karakter</label>");
                phone.addClass("br-error");
            }

            if( $.trim(ketua.val()) === '')
            {
                ketua.parent(".ar-content").append("<label class='error'>Isikan kolom Nama Ketua</label>");
                ketua.addClass("br-error");
            }

            if( $.trim(ketuaphone.val()) === '')
            {
                ketuaphone.parent(".ar-content").append("<label class='error'>Isikan Tlp/HP Ketua</label>");
                ketuaphone.addClass("br-error");
            }

            if( $.trim(bendahara.val()) === '')
            {
                bendahara.parent(".ar-content").append("<label class='error'>Isikan kolom Nama Bendahara</label>");
                bendahara.addClass("br-error");
            }

            if( $.trim(sekertaris.val()) === '')
            {
                sekertaris.parent(".ar-content").append("<label class='error'>Isikan kolom Nama Sekertaris</label>");
                sekertaris.addClass("br-error");
            }

            if( city.val() === '')
            {
                city.parent(".ar-content").append("<label class='error'>Harap tentukan Kota/Kecamatan</label>");
                city.parent(".ar-content").find("*[name='city']").addClass("br-error");
            }

            if( $.trim(kelurahan.val()) === '')
            {
                kelurahan.parent(".ar-content").append("<label class='error'>Isikan kolom Kelurahan</label>");
                kelurahan.addClass("br-error");
            }

            if( $.trim(address.val()).length < 10 )
            {
                address.parent(".ar-content").append("<label class='error'>Isikan alamat lengkap sekurangnya 10 karakter</label>");
                address.addClass("br-error");
            }
            
            if( $.trim(admin.val()) === '')
            {
                admin.parent(".ar-content").append("<label class='error'>Isikan kolom nama Admin</label>");
                admin.addClass("br-error");
            }

            if( !validateEmail(adminemail.val()))
            {
                adminemail.parent(".ar-content").append("<label class='error'>Alamat Email tidak valid</label>");
                adminemail.addClass("br-error");
            }

            //
            cmd.attr("role", "off");
            return false;
        }

        return true;
    }

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
            // location.href = config.apps.URL + n.response.link;
            // clearsignup(form);
            button.attr("role","off");
        });
        $t.error(function(n)
        {
            var rsp = n.responseJSON;
            console.log(rsp);

            if( n.status === 401)
            {
                // var num = parseFloat(rsp.area);
                // form.find(".area-num-nav li").removeClass("focus");
                // form.find(".area-num-nav li").eq(num).addClass("focus");

                form.find('*[name="'+rsp.focus+'"]').addClass("br-error");
                form.find('*[name="'+rsp.focus+'"]').parent(".ar-content").append("<label class='error'>"+rsp.message+"</label>");

                //
                // form.find(".carousel-item").removeClass("active");
                // form.find(".carousel-item").eq(num).addClass("active");
                // form.find(".hd-nav .ttlx").html( form.find(".carousel-item").eq(num).find(".label-title").html() );
                // button.html( (num < 4 ? "<span class='ic'>Selanjutnya</span><span class='fa flaticon2-fast-next'></span>" : "<span class='ic'>Daftar Lembaga</span><span class='fa flaticon2-check-mark'></span>"));
                // confcarousel.status = (num < 4 ? 'false' : 'true');
                // button.attr("aria-role", (num < 4 ? 'false' : 'true'));
                // confcarousel.start = num;

                button.attr("role", "off");
                return;
            }

            button.attr("role", "off");
            flagnotif('error', msgboxError());
        });

        return false;
    });


    $("#form-signup input.form-control").keyup(function()
    {
        var txt = $(this);

        if( $.trim(txt.val()).length > 0 )
        {
            txt.parent(".ar-content").find("label.error").remove();
            txt.removeClass("br-error");
        }
    });

    $("#form-signup textarea.form-control").keyup(function()
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
    return false;
});

$(document).click(function()
{
    $("button.cddwn[role='on']").click();
});
</script>
@yield('script')
</html>
