@extends('dashboard.index')

@section('content')
<div class="div">
    <div class="mg-center o-arprofile">
        <!-- <div class="row">
            <div class=""> -->

                <div class="ar-profile clr-float" role="off">

                    <div class="ar-profile-l">
                        <ul>
                            <li>
                                <div class="div sp-load pd-lr10">
                                    <div class="h20 splash splash-tbl"></div>
                                </div>
                                <a href="#bio" class="h-load ctab" role="on">
                                    <i class="flaticon2-notepad"></i>
                                    <span>Biodata Diri</span>
                                </a>
                            </li>
                            <li>
                                <div class="div sp-load pd-lr10">
                                    <div class="h20 splash splash-tbl"></div>
                                </div>
                                <a href="#account" class="h-load ctab" role="off">
                                    <i class="flaticon-user"></i>
                                    <span>Akun</span>
                                </a>
                            </li>
                            <li>
                            <div class="div sp-load pd-lr10">
                                    <div class="h20 splash splash-tbl"></div>
                                </div>
                                <a href="#password" class="h-load ctab" role="off">
                                    <i class="flaticon-lock"></i>
                                    <span>Password</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="ar-profile-r">

                        <div class="inarea-tab">

                            <div class="atab" data-tab="bio" role="on">

                                <form action="/api/account/exeprofile-bio" class="frm-profile-bio" id="form-bio" enctype="multipart/form-data">

                                    <ul class="clr-float">

                                        <div class="div iar-profile-ft">

                                            <div class="div">
                                                
                                                <div class="ar-profile-ft">
                                                    <div class="div splash h100p splash-tbl sp-load"></div>

                                                    <div class="div h-load h100p">
                                                        <div class="load-test"></div>
                                                        <img src="" data-src="" class="img-show" alt="">
                                                        
                                                        <div class="crop">
                                                            <div id="acrop"></div>
                                                        </div>
    
                                                        <a href="#" role="off" class="cvimg">
                                                            <div class="ic">
                                                                <div class="tbl">
                                                                    <div class="intbl">
                                                                        <img src="/assets/svg/loading.blue.svg" alt="" class="icn ic-load">
                                                                        <i class="icn ic-cam flaticon2-photo-camera"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="bck"></div>
                                                        </a>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="div">
                                                <p>
                                                    Harap gunakan format foto (.jpg, .jpeg, .png) dan maksimal ukuran 2Mb.
                                                </p>
                                            </div>
                                        </div>

                                        <li>
                                            <div class="div sp-load splash splash-tbl h20"></div>
                                            <div class="divH h-load">
                                                <div class="label">
                                                    <div class="tbl">
                                                        <div class="intbl">Nama Lengkap</div>
                                                    </div>
                                                </div>
                                                <div class="val ar-content">
                                                    <input type="text" name="name" class="fcs fcs1 text" placeholder="Nama Lengkap" value="" autocomplete="off" autocorrect="off" spellcheck="false"/>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- <li>
                                            <div class="label">
                                                <div class="tbl">
                                                    <div class="intbl">Tanggal Lahir</div>
                                                </div>
                                            </div>
                                            <div class="val">

                                                <select name="tanggal" class="fcs fcs2 selectpicker tanggal" data-live-search="true">
                                                    <option value="-1">Tgl</option>
                                                </select>

                                                <select name="bulan" class="fcs fcs3 selectpicker bulan" name="bulan" data-live-search="true">
                                                    <option value="-1">Bulan</option>
                                                </select>

                                                <select name="tahun" class="fcs fcs4 selectpicker tahun" data-live-search="true">
                                                    <option value="-1">Tahun</option>
                                                </select>
                                            </div>
                                        </li> -->

                                        <li>
                                            <div class="div splash splash-tbl h20 sp-load"></div>
                                            <div class="div h-load">
                                                <div class="label">
                                                    <div class="tbl">
                                                        <div class="intbl">Gender</div>
                                                    </div>
                                                </div>
                                                <div class="val ar-gender">
                                                    <!-- <select name="gender" class="selectpicker fcs fcs5 gender" data-live-search="false">
                                                        <option value="-1">Pilih Gender</option>
                                                    </select> -->
                                                </div>
                                            </div>
                                        </li>

                                        <div class="div clr-float">
                                            <div class="fl-right">
                                                <div class="div sp-load splash splash-tbl h20 w90"></div>
                                                <button type="submit" class="h-load button br-rds8 is-loading-custome none is-green br-green-f" role="off">
                                                    <span>Simpan</span>
                                                </button>
                                            </div>
                                        </div>
                                    </ul>

                                    
                                    <input type="file" class="hide" name="foto" accept="image/x-png,image/jpeg">
                                    <input type="hidden" name="foto_size" >
                                    <input type="hidden" name="user_id" value="">
                                    <input type="hidden" name="_token" value="">
                                </form>

                            </div>

                            <div class="atab" data-tab="account" role="off">

                                    <ul class="clr-float">
                                        <li>
                                            <div class="label">
                                                <div class="tbl">
                                                    <div class="intbl">Username</div>
                                                </div>
                                            </div>
                                            <div class="val">
                                                <input class="text" type="text" name="username" placeholder="Username" value="" disabled="disabled"/>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="label">
                                                <div class="tbl">
                                                    <div class="intbl">Email</div>
                                                </div>
                                            </div>
                                            <div class="val">
                                                <input type="text" name="email" class="txt-false text" placeholder="Email" value="" disabled="disabled"/>
                                            </div>
                                        </li>
                                        <div class="div clr-float" style="display:none !important">
                                            <button class="button" role="off">
                                                <span class="load">
                                                    <img src="{{$URI}}/svg/loading.blue.1.svg" alt="loading">
                                                </span>
                                                <span>Simpan</span>
                                            </button>
                                        </div>
                                    </ul>


                            </div>

                            <div class="atab" data-tab="password" role="off">

                                <form action="/api/account/exeprofile-password" class="frm-profile-password">

                                    <ul class="clr-float">

                                        <li style="margin-top:35px;">
                                            <div class="label">
                                                <div class="tbl">
                                                    <div class="intbl">Password Lama</div>
                                                </div>
                                            </div>
                                            <div class="val ar-content">
                                                <input class="text fcs fcs1 password" type="password" placeholder="******" name="old" maxlength="16" autocomplete="off" spellcheck="false" autocorrect="off"/>
                                                <button class="cmd-vspassword vspass br-rds4" role="off" tabindex="5">Tampilkan</button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="label">
                                                <div class="tbl">
                                                    <div class="intbl">Password Baru</div>
                                                </div>
                                            </div>
                                            <div class="val ar-content">
                                                <input class="text fcs fcs2 password" type="password" placeholder="******" name="new" maxlength="16" autocomplete="off" spellcheck="false" autocorrect="off"/>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="label">
                                                <div class="tbl">
                                                    <div class="intbl">Konfirmasi Password</div>
                                                </div>
                                            </div>
                                            <div class="val ar-content">
                                                <input class="text fcs fcs3 password" type="password" placeholder="******" name="retype" maxlength="16" autocomplete="off" spellcheck="false" autocorrect="off"/>
                                            </div>
                                        </li>

                                        <div class="div clr-float">
                                            <button type="submit" class="button br-rds8 is-loading-custome none is-green br-green-f" role="off">
                                                <span>Simpan</span>
                                            </button>
                                        </div>

                                    </ul>

                                    
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                </form>

                            </div>

                        </div>


                    </div>

                <!-- </div>

            </div> -->
        </div>
    </div>
</div>
<script>
$(document).ready(function()
{


    //
    function getload()
    {
        var area = $('body').find('.ar-profile');

        area.find('img.img-show').attr('src', getaccount().image);
        area.find('input[name="name"]').val(getaccount().name);
        area.find('input[name="username"]').val(getaccount().username);
        area.find('input[name="email"]').val(getaccount().email);

        var gender = '<select name="gender" class="selectpicker fcs fcs5 gender" data-live-search="false">'+(  getaccount().gender === 1 ? '<option value="1" selected>Laki-Laki</option><option value="2">Perempuan</option>' : '<option value="1">Laki-Laki</option><option value="2" selected>Perempuan</option>' )+'</select>';

        area.find('.ar-gender').html(gender);
        
        area.attr('role','on');
        // console.log(getaccount());
    }


    getload();

    console.log(getaccount());

    $('.cmd-vspassword').click(function()
    {
        vspassword($(this));
    });

    // tab
    var configtab = {
        "status":1
    }

    $('a.ctab').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents('.ar-profile'),
        tab = area.find('.atab'),
        vtab = cmd.attr('href').replace('#', '');

        if( cmd.attr('role') === 'off' && configtab.status === 1)
        {
            
            $('a.ctab').attr('role', 'off');
            cmd.attr('role', 'on');
            tab.attr('role', 'off');
            area.find('.atab[data-tab='+vtab+']').attr('role', 'on');
            DefaultTab(area);
            
        }
    })


    function DefaultTab(e)
    {
        e.find('input.password').val('');
        // e.find('input.password').attr('type','password');
        e.find('button.cmd-vspassword[role="on"]').click();
    }
    //
    $('body').find('form').submit(function()
    {
        return false;
    });


    //
    $('.atab[data-tab="bio"] form').submit(function()
    {
        var form = $(this);

        form.validate(validatebio);
        form.valid();

        cekingsubmit = form.valid();

        if( cekingsubmit )
        {

            ceksubmitbio(form);
        }

    });

    var validatebio = {
        rules:{
            name:{
                required:!0,
                normalizer:r,
                minlength:3
            }
        },
        messages:{
            name:'Harap isi terlebih dulu min 3 karakter'
        },
        errorPlacement:function(t,n)
        {
            $(n).parents('.ar-content').find('label.error').remove();
            $(n).parents('.ar-content').append(t);
        }
    }

    function ceksubmitbio(e)
    {
        var form = e,
        area = form.parents('.atab'),
        button = area.find('button[type="submit"]');

        if( button.attr('role') === 'off')
        {
            button.attr('role', 'on');
            configtab.status = 0;

            //sending form
            var $URL = config.apps.URL_API + form.attr("action");
            var $te = FormSending(form,"POST","key","form",$URL);
            $te.success(function(n)
            {
                // console.log(n);
                button.attr('role', 'off');
                configtab.status = 1;
                UpdateCookie(n);
                flagnotif('success', n.message);
            }),
            $te.error(function(n)
            {
                console.log(n);
                var rsp = n.rspponseJSON;
                button.attr('role', 'off');
                configtab.status = 1;

                if( n.status !== 404)
                {
                    flagnotif('error', msgboxError());
                }
            });

        }
    }


    $('.atab[data-tab="password"] form button[type="submit"]').click(function()
    {
        var form = $(this).parents('form');

        form.validate(validatepassword);
        form.valid();

        cekingsubmit = form.valid();

        if( cekingsubmit )
        {

            ceksubmitpassword(form);
        }

    });

    $.validator.addMethod("notEqual", function(value, element, param) {
        return value === param;
    }, "Kolom harus sama dengan kolom password");

    var validatepassword = {
        rules:{
            old:{
                required:!0,
                normalizer:r,
                // minlength:6
            },
            new:{
                required:!0,
                normalizer:r,
                minlength:6
            },
            retype:{
                required:!0,
                normalizer:r,
                minlength:6,
                notEqual: function(){return $('.atab[data-tab="password"] input[name="new"]').val()}
            },
        },
        messages:{
            old:'Masukan password saat ini.',
            new:'Harap isi kolom password 6 - 16 karakter',
            retype: 'Harap di isi dan harus sama dengan Password Baru'
        },
        errorPlacement:function(t,n)
        {
            $(n).parents('.ar-content').find('label.error').remove();
            $(n).parents('.ar-content').append(t);
        }
    }

    function ceksubmitpassword(e)
    {
        var form = e,
        area = form.parents('.atab'),
        button = area.find('button[type="submit"]');

        if( button.attr('role') === 'off')
        {
            button.attr('role', 'on');
            configtab.status = 0;

            area.find('label.error').remove();
            area.find('.error').removeClass('error');

            //sending form
            var $URL = config.apps.URL_API + form.attr("action");
            var $te = FormSending(form,"POST","key","form",$URL);
            $te.success(function(n)
            {
                console.log(n);
                area.find('button.cmd-vspassword[role="on"]').click();
                area.find('input.password').val('');
                button.attr('role', 'off');
                configtab.status = 1;
                flagnotif('success', n.message);
            }),
            $te.error(function(n)
            {
                console.log(n);
                var res = n.responseJSON;
                
                button.attr('role', 'off');
                configtab.status = 1;

                if( n.status === 401)
                {
                    area.find('input[name="'+res.focus+'"]').parents('.ar-content').append('<label class="error">'+res.message+'</label>');
                    area.find('input[name="'+res.focus+'"]').addClass('error');
                    area.find('input[name="'+res.focus+'"]').focus();
                    return;
                }

                if( n.status !== 404)
                {
                    flagnotif('error', msgboxError());
                }
            });

        }
    }
    return false;
});
</script>
@endsection