@extends('dashboard.index')

@section('content')
<div class="container-home w1024p">
    <div class="tables area-tables" aria-load="false">
        <div class="in-tables">

            <!-- head -->
            <div class="div clr-float">
                <div class="brcumb wh-m-520">
                    <div class="tbl">
                        <div class="intbl">
                            <div class="div">
                                <span class="ic fa flaticon2-line-chart"></span>
                                <a href="/dashboard">
                                    <span>Dashboard</span>
                                </a>
                                <span class="bts">
                                    <span class="ic fas fa-circle"></span>
                                </span>
                                <span class="label">
                                    <span>Pengguna</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="div head-tables">
                <div class="div clr-float">

                    <form action="/api/manage/pengguna/table" id="form-table" aria-temp="temp-table">


                        <button class="submit hide" role="off">submit</button>
                        <div class="fl-right w100px">

                            <div class="fl-right oarea-ddwn-hd oar-ddwn">
                                <button class="btn green btn-r cmd-modal-create" role="off" data-type="add" data-toggle="modal" data-target="#modal-document">
                                    <span class="ic fa flaticon2-add-1"></span>
                                    <span>Baru</span>
                                </button>
                            </div>

                            <div class="bts"></div>

                            <div class="fl-right oarea-ddwn-hd oar-ddwn ar-fil ar-ddwn-fix dot-notif l red  area-filter" aria-role="false">

                                <button class="btn blue btn-r btn-filter cmd-ddwn-hd keep-ddwn-hd" role="off" data-type="fix">
                                    <span class="ic fa flaticon2-down"></span>
                                    <span>Filter</span>
                                </button>

                                <div class="ar-ddw area-ddwn-hd bottom right br-rds8 ctn-filter keep">
                                    <div class="div">
                                        <ul>
                                            <li>
                                                <b>
                                                    <span class="fa flaticon-interface-6"></span>
                                                    <span>OPTION FILTER</span>
                                                </b>
                                            </li>
                                            <li>
                                                <div class="div">
                                                    <div class="ddwn area-ddwn keep area-level">
                                                        <button class="btn br-rds8 cddwn" role="off">
                                                            <label><span class="fsize14 color-black">Semua Level</span></label>
                                                        </button>
                                                        <div class="ddwn-pg area-ddwn-page">
                                                            <ul>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="-1" ><span>Semua Level</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="2" ><span>Success</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="1" ><span>Pending</span></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <input type="hidden" class="value-dropdown" name="sublevel" value="-1">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="div">
                                                    <div class="ddwn area-ddwn keep area-status">
                                                        <button class="btn br-rds8 cddwn" role="off">
                                                            <label><span class="fsize14 color-black">Semua Status</span></label>
                                                        </button>
                                                        <div class="ddwn-pg area-ddwn-page">
                                                            <ul>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="-1" ><span>Semua Status</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="1" ><span>Aktif</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="2" ><span>Pending</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="3" ><span>Blokir</span></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <input type="hidden" class="value-dropdown" name="status" value="-1">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="div clr-float">
                                                    <button class="btn blue btn-r sbmt cmd-sv-filter">SIMPAN</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="fl-left w100px">
                            <div class="ar-src area-src-head" aria-load="false">
                                <span class="ic sli_icon-magnifier"></span>
                                <input type="text" name="search">
                                <span class="load"></span>
                                <a href="#" class="cls hide cmd-cls-src" role="off">
                                    <span class="sli_icon-close"></span>
                                </a>
                            </div>
                        </div>
                        <input type="hidden" name="paging" value="1">
                        <input type="hidden" name="sort" value="asc">

                    </form>

                </div>
            </div>

            <!-- body -->
            <div class="body-tables">
                <div class="ar-body-table">

                    <div class="div wh-m-520">
                        <div class="atable table-header hide">
                            <div class="th">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="td-iner">
                                                    <a href="#" class="cmd-sort-table" role="off" aria-sort="asc" data-name="sort_name">
                                                        <span class="ic far fa-file-alt"></span>
                                                        <span>RINCIAN</span>
                                                        <span class="ic-sort">
                                                            <span class="down fas fa-sort-amount-down"></span>
                                                            <span class="up fas fa-sort-amount-up"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="td-w230">
                                                <div class="td-iner">
                                                    <span>WHATSAPP</span>
                                                </div>
                                            </td>
                                            <td class="td-w260">
                                                <div class="td-iner">
                                                    <span>EMAIL</span>
                                                </div>
                                            </td>
                                            <td class="td-center td-w70">
                                                <div class="td-iner">
                                                    <span class="ic far fa-sun"></span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="div">
                        <div class="atable table-body">

                        </div>
                    </div>

                </div>
            </div>
    
            <!-- footer -->
            <div class="div foot-tables hide">
                <div class="div clr-float">
                    <div class="fl-left">
                        <span class="bts-dot">Total <b class="cpagetotal">0</b></span>
                        <span>Hal <b class="cpage">0</b> dari <b class="cpageoff">0</b></span>
                    </div>
                    <div class="fl-right">
                        <button class="br-rds4 cmd-paging" data-area="back" disabled="disabled" role="off">
                            <span class="fa flaticon2-back-1"></span>
                        </button>
                        <button class="br-rds4 cmd-paging" data-area="next" role="off" disabled="disabled">
                            <span class="fa flaticon2-arrow"></span>
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="div hide" id="temp-table">
    <div class="tr" dataid="{id}">

        <div class="thr">
            <div class="div clr-float">
                <div class="spc">
                    <div class="role">
                        <ul class="">
                            {register}
                        </ul>
                    </div>
                </div>

                <div class="spcr wh-m-520">
                    <span class="label fa flaticon-calendar-with-a-clock-time-tools"></span>
                    <span class="date">{date}</span>
                </div>

                <div class="spcr wh-m-520">
                    <span class="label sli_icon-user"></span>
                    <span class="date">{admin}</span>
                </div>

            </div>
        </div>

        <div class="tbody fsize13">
            <table>
                <tbody>
                    <tr>
                        <td>
                            <div class="td-iner">
                                <div class="div">
                                    <div class="div">
                                        <b>{name}</b>
                                    </div>
                                    <div class="div label fsize12">
                                        <span class="label ic far fa-address-card"></span>
                                        <span>{sublevel}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        
                        <td class="td-w230 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span><span class="ic label sli_icon-screen-tablet"></span>{phone}</span>
                                </div>
                            </div>
                        </td>
                        <td class="td-w260 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span class="label ic sli_icon-envelope"></span>
                                    <span>{email}</span>
                                </div>
                            </div>
                        </td>
                        <td class="td-center td-w70">
                            <div class="td-iner disvis">
                                <div class="div">
                                    <div class="dropdown dropleft">
                                        <!-- <button type="button" class="btn btn-primary nobr grey s11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <span class="fas fa-ellipsis-v"></span>
                                        </button> -->

                                        {btn-dropdown}

                                        <div class="dropdown-menu">

                                            <a class="dropdown-item color-orange cmd-sunting" href="#" data-type="edit" data-target="#modal-document" data-toggle="modal" role="off">
                                                <span>Sunting</span><span class="ic sli_icon-pencil"></span>
                                            </a>

                                            <div class="div {btn-register}">

                                                <a class="dropdown-item afalse cmd-resendverif color-green" href="#" role="off" dataid="">
                                                    <span>Resend Verifikasi</span>
                                                    <span class="ic fa flaticon2-send-1"></span>
                                                    <div class="arload">
                                                        <span class="dfx">
                                                            <div class="single-loading orange"></div>
                                                        </span>
                                                    </div>
                                                </a>

                                                
    
                                                <a class="dropdown-item afalse color-green" href="#" role="off" target="_blank">
                                                    <span>Resend Verifikasi WA</span>
                                                    <span class="ic fa flaticon-whatsapp"></span>
                                                    <div class="arload">
                                                        <span class="dfx">
                                                            <div class="single-loading orange"></div>
                                                        </span>
                                                    </div>
                                                </a>

                                            </div>

                                            {btn-block}
                                            
                                                


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

<div class="modal fade new-modal" id="modal-document" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog w460" role="document">
        <div class="modal-content br-rds12 pd-tb15 pd-lr15">

            <div class="load txt-center pd-t10 hide br-rds4">
                <img src="/assets/svg/loading.blue.svg" alt="">
            </div>

            <div class="modal-header txt-center no-br">
                <div class="div">
                    <h2 class="modal-title">
                        <span class="fsize18">Tambah Pengguna</span>
                    </h2>
                    <div class="div">
                        <!-- <span class="label">Daftar bank yang akan ditampilkan sebagai bank pembayaran</span> -->
                    </div>
                </div>
                <button type="button" class="close pd-tbnull" style="position:absolute; right:20px;" data-dismiss="modal" aria-label="Close">
                    <span class="flaticon2-cross fsize12"></span>
                </button>
            </div>

            <div class="modal-body">
                <div class="div">
                    <form action="/api/manage/pengguna/create" id="form-create">

                        <div class="div">

                            <div class="div">

                                <div class="div">
                                    <div class="divx">
                                        <span class="label font-wg25 up-txt fsize9">Nama</span>
                                        <div class="div ar-content">
                                            <input type="text" name="name" class="form-control br-rds8 txt-def-empty empty" placeholder="" >
                                        </div>
                                    </div>
                                </div>
                                <div class="div h18"></div>
                            </div>
                            
                            <div class="div">
                                <div class="div">
                                    <span class="label font-wg25 up-txt fsize9">Gender</span>
                                    <div class="ddwn area-ddwn ar-content keep w50p ddwn-button-select area-select-gender" data-label="Pilih Gender">
                                        <button class="btn br-rds8 cddwn" role="off">
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
                                <div class="div h18"></div>
                            </div>

                            <div class="div">

                                <div class="div">
                                    <div class="divx">
                                        <span class="label font-wg25 up-txt fsize9">Email</span>
                                        <div class="div ar-content">
                                            <input type="text" name="email" class="form-control br-rds8 txt-def-empty empty" placeholder="" >
                                        </div>
                                    </div>
                                </div>
                                <div class="div h18"></div>
                                
                            </div>

                            <div class="div">

                                <div class="div">
                                    <div class="divx">
                                        <span class="label font-wg25 up-txt fsize9">Whatsapp</span>
                                        <div class="div ar-content">
                                            <input type="text" name="phone" class="form-control br-rds8 txt-def-empty empty number w50p" placeholder="" >
                                        </div>
                                    </div>
                                </div>
                                <div class="div h18"></div>
                            </div>

                            <div class="div">
                                <div class="div">
                                    <span class="label font-wg25 up-txt fsize9">Level</span>
                                    <div class="ddwn area-ddwn ar-content keep w50p ddwn-button-select area-select-level" data-label="Pilih Level">
                                        <button class="btn br-rds8 cddwn" role="off">
                                            <label><span class="fsize14 color-black">Pilih Level</span></label>
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
                                            </ul>
                                        </div>
                                        <input type="hidden" class="value-dropdown txt-def-empty min1" name="sublevel" value="-1">
                                    </div>
                                </div>
                                <div class="div h18"></div>
                            </div>
                        </div>
                        <input type="hidden" name="id" class="empty" value="">
                        <input type="hidden" name="type" value="">
                        <input type="hidden" name="user_id" value="" class="">
                        <input type="submit" value="Submit" class="hide">
                        <input type="hidden" value="" class="" name="company_id">
                    </form>

                </div>
            </div>
            <div class="modal-footer no-br br-rdsb12">
                
                <button type="button" class="btn green modal-submit fix w110 is-loading br-rds12" role="off">
                    <span>SIMPAN</span>
                </button>
            </div>
        </div>
    </div>
</div>


<link rel="stylesheet" href="{{$URI}}/assets/css/acs/datetimepicker/bootstrap-datetimepicker.css">

<!-- CKEDITOR -->
<script src="{{$URI}}/assets/js/home/widget.js"></script>

<!-- DATETIMEPICKER -->
<script src="{{$URI}}/assets/js/acs/datetimepicker/moment.js"></script>
<script src="{{$URI}}/assets/js/acs/datetimepicker/bootstrap.min.js"></script>
<script src="{{$URI}}/assets/js/acs/datetimepicker/bootstrap-datetimepicker.js"></script>

@endsection

@section('script')
<script>


function createTempTable(e,w)
{
    var rsp= e,
    temp = w;

    var list = '';
    $.each(rsp.list,function(i,item)
    {
        var status = parseFloat(item.status);
        var listx = temp;

        listx = listx.replace('{id}', item.id);
        listx = listx.replace('{date}', item.date);
        listx = listx.replace('{admin}', (item.admin === '' ? '' : item.admin));
        listx = listx.replace('{name}', item.name);
        listx = listx.replace('{sublevel}', item.sublevel);
        listx = listx.replace('{phone}', item.phone);
        listx = listx.replace('{email}', item.email);
        listx = listx.replace('{register}', (item.status === 0 ? '<li class="hold"><span>BLOKIR</span></li>' : ( item.registers === 0 ? '<li class="progress"><span>PENDING</span></li>' : '<li class="done"><span>AKTIF</span></li>' ) ) );
        listx = listx.replace('{btn-register}', (item.registers === 0 ? '' : 'hide'));

        listx = listx.replace('{btn-dropdown}', ( getaccount().sublevel === item.sub_level ? '<button type="button" class="btn btn-primary nobr grey s11"><span class="sli_icon-ban"></span></button>' : '<button type="button" class="btn btn-primary nobr grey s11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-v"></span></button>'));

        listx = listx.replace('{btn-block}', (item.registers === 0 ? '' : '<div class="dropdown-divider"></div><a class="dropdown-item cmd-blocked afalse slide color-red " href="#" role="off" slide="'+(item.status === 0 ? 'on' : 'off')+'" dataid=""><div class="div clr-float"><div class="fl-left fl"><div class="tbl"><div class="intbl"><span class="text-label">'+(item.status === 0 ? 'Buka Blokir' : 'Blokir')+'</span></div></div></div><div class="fl-right fr"><div class="arslide"><div class="bord"></div></div></div></div></a>') )

        list += listx;
    });

    return list;
}

async function getsublevel(w,e)
{

    var area = $("body").find('.'+w);
    var $URL = config.apps.URL_API + '/api/data/sublevel/list?level=' + getaccount().level+'&sublevel='+getaccount().sublevel;
    var $t = FormSending("","GET","key","",$URL);
    $t.success(function(n)
    {
        console.log(n);
        var rsp = n.response;
        var list = '<li aria-selected="false"><button role="off" dataid="-1"><span>'+e+'</span></button></li>';
        $.each(rsp.list, function(i,item)
        {
            list += '<li aria-selected="false"><button role="off" dataid="'+item.sublevel+'"><span>'+item.name+'</span></button></li>';
        });
        area.find("ul").html(list);
    });
    $t.error(function(n)
    {
        console.log(n);
    })
}


getsublevel('area-level','Semua Level');


$(document).ready(function()
{

    //MODAL CREATE
    $(".cmd-modal-create").click(function(e)
    {
        var cmd = $(this),
        modal = $("body").find("#modal-document"),
        form = modal.find("form");

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            form.find("span.error").remove();
            form.find(".br-error").removeClass("br-error");
            modal.find("input[name='type']").val("add");
            modal.find(".modal-title span").html("Tambah Pengguna");
           
            //
            clearEmptyForm(modal);

            getsublevel('area-select-level','Pilih Level')


            //
            modal.find("button.submit").html("Simpan");
            modal.find("input[type='text']").removeAttr("disabled");
            modal.find("button.cddwn").removeAttr("disabled");
            modal.find("button.submit").removeAttr("disabled");

            modal.find("input[name='user_id']").val(getaccount().id);
            modal.find("input[name='company_id']").val(getaccount().company.id);
            //
            modal.removeClass("hide");
            modal.find(".load").addClass("hide");
            cmd.attr("role", "off");
        }
    });

    $("body").on("click", ".cmd-sunting", function(e)
    {

        e.preventDefault();
        var cmd = $(this),
        id = cmd.parents(".tr").attr("dataid"),
        modal = $("body").find("#modal-document"),
        form = modal.find("form");
        

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            clearEmptyForm(modal);
            form.find("span.error").remove();
            form.find(".br-error").removeClass("br-error");
            modal.find("input[name='type']").val("edit");
            modal.find(".modal-title span").html("Sunting Pengguna");
            getsublevel('area-select-level','Pilih Level');
            modal.find(".load").removeClass("hide");

            modal.find("input[name='user_id']").val(getaccount().id);
            modal.find("input[name='company_id']").val(getaccount().company.id);

            var $URL = config.apps.URL_API + '/api/manage/pengguna/view?id='+id;
            $t = FormSending("","GET","key","",$URL);
            $t.success(function(n)
            {
                console.log(n);
                templateSunting(modal,n.response);
                modal.find(".load").addClass("hide");
            });
            $t.error(function(n)
            {
                console.log(n);
            })
            //
            modal.removeClass("hide");
            cmd.attr("role", "off");
        }

    });


    function templateSunting(m,w)
    {
        var modal = m,
        form = modal.find("form"),
        rsp = w;

        form.find("*[name='id']").val(rsp.id);
        form.find("*[name='name']").val(rsp.name);
        form.find("*[name='email']").val(rsp.email);
        form.find("*[name='phone']").val(rsp.phone);
        form.find("*[name='sublevel']").val(rsp.sublevel);
        form.find("*[name='gender']").val(rsp.gender);

        var genderselect = modal.find(".area-select-gender"),
        labelgender = genderselect.find("li button[dataid='"+rsp.gender+"'] span").html();

        genderselect.find("button.btn label span").html(labelgender);
        genderselect.find("li button[dataid='"+rsp.gender+"']").parent("li").attr("aria-selected","true");

        var levelselect = modal.find(".area-select-level"),
        labellevel = levelselect.find("ul li button[dataid='"+rsp.sublevel+"'] span").html();

        levelselect.find("button.btn label span").html(labellevel);
        levelselect.find("li button[dataid='"+rsp.sublevel+"']").parent("li").attr("aria-selected","true");

    }


    //SEARCH IN FORM HEADER
    $('body').on('keypress', '#form-table input[name="search"]', function(e)
    {
        var code = e.which || e.keyCode;

        if( code === 13)
        {
            srcHdForm($(this));
            return false;
        }
    });

    //
    $('body').on('click', '.cmd-cls-src', function(e)
    {
        clsHdForm(e,$(this));
    }); 


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

        //
        form.find('.area-h-price span.label b span').html(cmd.attr('dataprice'));
        form.find('.area-h-price span.label').removeClass('hide');
        form.find('.area-h-price input').removeAttr('disabled');
        form.find('.area-h-price input').focus();

    });

    //
    $('.area-ddwn .ddwn-tsrc').keyup(function(e)
    {
        e.stopPropagation();

        srcDDWN($(this));
    });

    //
    $('body').on('click', '.cmd-ddwn-hd', function(e)
    {
        // e.preventDefault();
        showDdwnHd(e,$(this));

        return false;
    })

    //
    $('body').on('click', '#form-table button.submit', function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        form = cmd.parents('form');

        if(cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            exeTable(form);
            cmd.attr('role', 'off');
        }
    });

    $('body').on('click', '.area-ddwn-hd button.cmd-sv-filter', function(e)
    {
        e.preventDefault();
        createFilter($(this));
    });


    function createFilter(e)
    {
        var cmd = e,
        area = cmd.parents('.area-filter'),
        form = cmd.parents('form');

        // filter
        var filKaryawan = area.find('input[name="selected_group"]').val(),
        filStatus = area.find('input[name="selected_status"]').val();

        exeTable(form);
        area.find('button.cmd-ddwn-hd').click();
    }

    
    function loadTable()
    {
        var form = $('body').find('#form-table');
        exeTable(form);
    }
    
    $('.cmd-sort-table').click(function(e)
    {
        sorttable(e,$(this));
    });

    //
    // loadTable();
    exeTable($('#form-table'));


    // FUNCTION CREATE NEW
    $('.singleDate').datetimepicker({
        useCurrent: false,
        format: 'DD/MM/YYYY'
    }).on("dp.change", function (e){
        // console.log("ok");
        $(this).parent(".se-date").attr("role", "on");
        // $(this).parents("form").submit();
        var form = $(this).parents("form");
        checkFormCreate(form);
    });

    $(".se-date button.clear-date").click(function(e)
    {
        e.preventDefault();
        var cmd = $(this);

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            cmd.parent(".se-date").attr("role", "off");
            cmd.parent(".se-date").find("input.singleDate").val("");
            cmd.attr("role", "off");
        }
    })


    //submit
    $('body').on('click', 'button.modal-submit', function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        modal = cmd.parents('.new-modal.show'),
        form = modal.find('form');

        form.submit();
    });


    $('#form-create').submit(function(e)
    {
        e.preventDefault();
        var form = $(this),
        modal = form.parents(".new-modal.show"),
        button = modal.find('button.modal-submit');


        if( button.attr('role') === 'off' )
        {
            button.attr('role', 'on');
            var $check = checkFormCreate(form);

            if( $check )
            {
                //submit
                var $URL = config.apps.URL_API + form.attr("action");
                var $t = FormSending(form,"POST","key","form",$URL);
                $t.success(function(n)
                {
                    // console.log(n);
                    if( form.find('*[name="type"]').val() === 'add')
                    {
                        clearEmptyForm(form);
                        autosendemail(n.response.token);
                        button.attr('role','off');
                        loadTable();
                        flagnotif("success", n.message);
                        return
                    }
                    button.attr('role','off');
                    loadTable();
                    flagnotif("success", n.message);
                });
                $t.error(function(n)
                {
                    console.log(n);
                    var rsp = n.responseJSON.response;
                    if( n.status === 401)
                    {
                        form.find('*[name="'+rsp.error.focus+'"]').parent('.ar-content').append('<span class="error">'+rsp.error.message+'</span>');
                        form.find('*[name="'+rsp.error.focus+'"]').addClass('br-error');
                        button.attr('role','off');
                        form.find('*[name="'+rsp.error.focus+'"]').focus();
                        return;
                    }
                    flagnotif('error', msgboxError());
                    button.attr('role','off');
                    
                })
            }
        }

        return false;
    });

    $('body').on('click', '.cmd-resendverif', function(e)
    {
        e.preventDefault();

        var cmd = $(this);

        if( cmd.attr('role') === 'off' )
        {
            cmd.attr('role', 'on');
            

            $.ajax({
                type: 'POST',
                url: config.apps.URL_API + '/api/admin/manage/resendverification',
                headers: {
                    "Content-Type":"application/json",
                    "key":getaccount().key
                },
                cache: false,
                timeout: 18000,
                data: JSON.stringify({
                    "id":cmd.parents(".tr").attr("dataid")
                }),
                dataType:"JSON",
                success: function(n)
                {
                    flagnotif('success', n.message);
                    // console.log(n);
                    cmd.attr('role', 'off');
                },
                error: function(n)
                {
                    // console.log(n);
                    var response = n.responseJSON;

                    flagnotif('error', response.message);
                    cmd.attr('role', 'off');
                }

            });


            

        }

    });


    $('body').on('click', '.cmd-blocked', function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents(".tr");

        if( cmd.attr('role') === 'off' )
        {
            cmd.attr('role', 'on');
        
            //
            $.ajax({
                type: "POST",
                url: config.apps.URL_API + '/api/admin/manage/changestatus',
                headers: {
                    "Content-Type":"application/json",
                    "key":getaccount().key
                },
                cache: false,
                timeout: 18000,
                data: JSON.stringify({
                    'admin_id': cmd.parents(".tr").attr('dataid'),
                    'status': cmd.attr('slide')
                }),
                dataType: "JSON",
                success: function(n)
                {
                    // console.log(n);

                    if( cmd.attr('slide') === 'on')
                    {
                        cmd.attr('slide', 'off');
                        cmd.find('.text-label').html('Blokir');
                        area.find(".spc .role ul").html('<li class="done"><span">AKTIF</span></li>');
                    }
                    else
                    {
                        cmd.attr('slide', 'on');
                        cmd.find('.text-label').html('Buka Blokir');
                        area.find(".spc .role ul").html('<li class="hold"><span>BLOKIR</span></li>');
                    }

                    cmd.parents('.tr').find('.spc .tag').attr('role', n.status);
                    //
                    // cmd.parents('.dropdown.show').find('button[data-toggle="dropdown"]').click();

                    cmd.attr('role', 'off');

                },
                error: function(n)
                {
                    console.log(n);
                    flagnotif('error',msgboxError());
                    cmd.attr('role', 'off');
                }


            });

            

            

        }

    });

    function checkFormCreate(w)
    {
        var form =w,
        modal = form.parents('.new-modal.show'),
        name = form.find('*[name="name"]'),
        gender = form.find('*[name="gender"]'),
        email = form.find('*[name="email"]'),
        phone = form.find('*[name="phone"]'),
        sublevel = form.find('*[name="sublevel"]'),
        button = modal.find('button.modal-submit');

        //check
        form.find('span.error').remove();
        form.find('.br-error').removeClass('br-error');

        //
        if( $.trim(name.val()) === ''  || $.trim(gender.val()) === '' || $.trim(phone.val()).length < 9 || $.trim(sublevel.val()) === '-1' || !validateEmail(email.val()) )
        {

            //name
            if( $.trim(name.val()) === '' )
            {
                name.parent('.ar-content').append('<span class="error">Harap isi kolom nama</span>');
                name.addClass('br-error');
            }

            //gender
            if( $.trim(gender.val()) === '' )
            {
                gender.parent('.ar-content').append('<span class="error">Harap pilih gender</span>');
                gender.parent('.ar-content').find("button").addClass('br-error');
            }

            if( $.trim(phone.val()).length < 9 )
            {
                phone.parent('.ar-content').append('<span class="error">Harap isikan whatsapp sekurangnya 9 karakter</span>');
                phone.addClass('br-error');
            }

            //email
            if( !validateEmail(email.val()) )
            {
                email.parents('.ar-content').append('<span class="error">Harap isi email valid</span>');
                email.addClass('br-error');
            }

            if( $.trim(sublevel.val()) === '-1' )
            {
                sublevel.parent('.ar-content').append('<span class="error">Harap pilih level</span>');
                sublevel.parent('.ar-content').find("button").addClass('br-error');
            }


            button.attr('role','off');
            return false;
        }

        return true;

        
    }

    $("#form-create .empty").keyup(function(n)
    {
        // $(this).parents("form").submit();
        var form = $(this).parents("form");
        checkFormCreate(form);
    })


    $('.cmd-paging').click(function(e)
    {
        exePaging(e,$(this));
    });



    // HIDE SPLASH
    hideSplash();


return false;
});
</script>
@endsection