@extends('dashboard.index')

@section('content')
<div class="div">
    <div class="mg-center o-arprofile w720">
        <!-- <div class="row">
            <div class=""> -->

                <div class="ar-profile clr-float" role="off">

                    <div class="ar-profile-l hide">
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

                                        <li class="br" aria-role="true">
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
    
                                                <div class="div hide">
                                                    <p>
                                                        Harap gunakan format foto (.jpg, .jpeg, .png) dan maksimal ukuran 2Mb.
                                                    </p>
                                                </div>
    
                                                <div class="div ttl">
                                                    <div class="div">
                                                        <span>Lembaga</span>
                                                    </div>
                                                    <div class="div">
                                                        <span class="label">Lembaga/Ormas</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="br" aria-role="true" aria-edit="false">
                                            <div class="div">
                                                <div class="ttlx">
                                                    <span class="dot w6 brc"></span>
                                                    <b>Pengurus</b>
                                                    <a href="#" class="sunting cmd-sunting-box" role="off" data-modal="">
                                                        <span class="sli_icon-pencil"></span>
                                                        <span class="lbl">SUNTING</span>
                                                    </a>
                                                </div>
                                                <div class="div">
                                                    <table>
                                                        <tbody>

                                                            <tr>
                                                                <td class="left">Ketua</td>
                                                                <td class="right">
                                                                    <div class="div">
                                                                        <div class="h14 w110 dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div">
                                                                        <div class="h14 w50p dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div">
                                                                        <div class="h14 w75p dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="2">
                                                                    <div class="div">
                                                                        <div class="div bts-br mg-t5 mg-b10"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="left">Sekretaris</td>
                                                                <td class="right">
                                                                    <div class="div">
                                                                        <div class="h14 w110 dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div">
                                                                        <div class="h14 w50p dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2">
                                                                    <div class="div">
                                                                        <div class="div bts-br mg-t5 mg-b10"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="left">Bendahara</td>
                                                                <td class="right">
                                                                    <div class="div">
                                                                        <div class="h14 w110 dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div">
                                                                        <div class="h14 w50p dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="br" aria-role="true" aria-edit="false">
                                            <div class="div">
                                                <div class="ttlx">
                                                    <span class="dot w6 brc"></span>
                                                    <b>Data Umum</b>
                                                    <a href="#" class="sunting cmd-sunting-box" role="off" data-modal="">
                                                        <span class="sli_icon-pencil"></span>
                                                        <span class="lbl">SUNTING</span>
                                                    </a>
                                                </div>
                                                <div class="div">
                                                    <table>
                                                        <tbody>

                                                            <tr>
                                                                <td class="left">Akta Kumham</td>
                                                                <td class="right">
                                                                    <div class="div">
                                                                        <div class="h14 w50p dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td class="left">NPWP</td>
                                                                <td class="right">
                                                                    <div class="div">
                                                                        <div class="h14 w50p dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="br" aria-role="true" aria-edit="false">
                                            <div class="div">
                                                <div class="ttlx">
                                                    <span class="dot w6 brc"></span>
                                                    <b>Data Khusus</b>
                                                    <a href="#" class="sunting cmd-sunting-box" role="off" data-modal="">
                                                        <span class="sli_icon-pencil"></span>
                                                        <span class="lbl">SUNTING</span>
                                                    </a>
                                                </div>
                                                <div class="div">
                                                    <table>
                                                        <tbody>

                                                            <tr>
                                                                <td class="left">Ijin Operasional</td>
                                                                <td class="right">
                                                                    <div class="div">
                                                                        <div class="h14 w50p dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="left">Surat Domisili</td>
                                                                <td class="right">
                                                                    <div class="div">
                                                                        <div class="h14 w50p dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="left">Sertifikat Tanah</td>
                                                                <td class="right">
                                                                    <!-- <span>123123</span>
                                                                    <span class="dot w4 brc"></span>
                                                                    <span>11/11/1111</span> -->
                                                                    <div class="div">
                                                                        <div class="h14 w50p dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="br" aria-role="true" aria-edit="false">
                                            <div class="div">
                                                <div class="ttlx">
                                                    <span class="dot w6 brc"></span>
                                                    <b>Kontak</b>
                                                    <a href="#" class="sunting" role="off">
                                                        <span class="sli_icon-pencil"></span>
                                                        <span class="lbl">SUNTING</span>
                                                    </a>
                                                </div>
                                                <div class="div">
                                                    <table>
                                                        <tbody>

                                                            <tr>
                                                                <td class="left">Alamat Email</td>
                                                                <td class="right">
                                                                    <div class="div">
                                                                        <div class="h14 w50p dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="left">Telepon/HP</td>
                                                                <td class="right">
                                                                    <div class="div">
                                                                        <div class="h14 w110 dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="br" aria-role="true" aria-edit="false">
                                            <div class="div">
                                                <div class="ttlx">
                                                    <span class="dot w6 brc"></span>
                                                    <b>Akun Bank</b>
                                                    <a href="#" class="sunting" role="off">
                                                        <span class="sli_icon-pencil"></span>
                                                        <span class="lbl">SUNTING</span>
                                                    </a>
                                                </div>
                                                <div class="div">
                                                    <table>
                                                        <tbody>

                                                            <tr>
                                                                <td class="left">Bank</td>
                                                                <td class="right">
                                                                    <div class="div">
                                                                        <div class="h14 w50p dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="left">No. Rekening</td>
                                                                <td class="right">
                                                                    <div class="div">
                                                                        <div class="h14 w110 dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="left">Nama Pemilik</td>
                                                                <td class="right">
                                                                    <div class="div">
                                                                        <div class="h14 w50p dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="br" aria-role="true" aria-edit="false">
                                            <div class="div">
                                                <div class="ttlx">
                                                    <span class="dot w6 brc"></span>
                                                    <b>Alamat Lembaga</b>
                                                    <a href="#" class="sunting" role="off">
                                                        <span class="sli_icon-pencil"></span>
                                                        <span class="lbl">SUNTING</span>
                                                    </a>
                                                </div>
                                                <div class="div">
                                                    <table>
                                                        <tbody>

                                                            <tr>
                                                                <td class="left">Alamat Lengkap</td>
                                                                <td class="right">
                                                                    <div class="div">
                                                                        <div class="h14 w75p dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div">
                                                                        <div class="h14 w50p dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div">
                                                                        <div class="h14 w110 dis-in-b">
                                                                            <div class="divH">
                                                                                <div class="splash-tbl br-rds4"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>



                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>

                                    
                                    <input type="file" class="hide" name="foto" accept="image/x-png,image/jpeg">
                                    <input type="hidden" name="foto_size" >
                                    <input type="hidden" name="user_id" value="">
                                    <input type="hidden" name="_token" value="">
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


    console.log(getaccount());

    //NEW FUNCTION
    $(".cmd-sunting-box").click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        li = cmd.parents("li.br");
        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            // li.attr("aria-edit", "true");
            // li.find(".form-control").removeAttr("disabled");
            // cmd.attr("role", "off");
            return
        }
    });

    $(".cmd-cancel-sunting").click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        li = cmd.parents("li.br");
        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            li.attr("aria-edit", "false");
            li.find(".form-control").attr("disabled","disabled");
            // li.find(".form-control").addClass("hide");
            cmd.attr("role","off");
            return
        }
    });

    // END NEW FUNCTION


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