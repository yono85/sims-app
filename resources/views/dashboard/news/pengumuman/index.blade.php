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
                                    <span>Pengumuman</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="div head-tables">
                <div class="div clr-float">

                    <form action="/api/news/pengumuman/table" id="form-table" aria-temp="temp-table">


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
                                                                    <button role="off"  dataid="1" ><span>Publish</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="0" ><span>Pending</span></button>
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
                                            <td class="td-w190">
                                                <div class="td-iner">
                                                    <span class="ic far fa-file-alt"></span>
                                                    <span>LABEL</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="td-iner">
                                                    <span class="ic far fa-file-alt"></span>
                                                    <span>RINCIAN</span>
                                                </div>
                                            </td>
                                            <td class="td-w160">
                                                <div class="td-iner">
                                                    <span>TANGGAL</span>
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
                        <td class="td-w190 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span>{name}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="td-iner">
                                <div class="div">
                                    {notes}
                                </div>
                            </div>
                        </td>
                        <td class="td-w160 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span><span class="ic label sli_icon-calendar"></span>{datex}</span>
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
    <div class="modal-dialog" role="document" style="max-width:620px">
        <div class="modal-content br-rds12 pd-tb15 pd-lr15">

            <div class="load txt-center pd-t10 hide br-rds4">
                <img src="/assets/svg/loading.blue.svg" alt="">
            </div>

            <div class="modal-header txt-center no-br">
                <div class="div">
                    <h2 class="modal-title">
                        <span class="fsize18">Buat Pengumuman</span>
                    </h2>
                    <div class="div">
                        <!-- <span class="label">Daftar bank yang akan ditampilkan sebagai bank pembayaran</span> -->
                    </div>
                </div>
                <button type="button" class="close pd-tbnull" style="position:absolute; right:20px;" data-dismiss="modal" aria-label="Close">
                    <span class="flaticon2-cross fsize12"></span>
                </button>
            </div>
            <div class="modal-body pd-b0">
                <div class="arinsed mdl-partner pos-rel m-pd-lr25">

                    <form action="/api/news/pengumuman/create" id="form-create" >

                        <ul class="artable" style="padding-top:0px !important; margin:unset; width:unset !important">

                            <li class="list">
                                <div class="div">
                                    <table>
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Nama dan Tanggal</b>
                                                    </div>
                                                    <div class="div label">Isikan Nama dan Tanggal pengumuman
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">NAMA PENGUMUMAN</b>
                                                    </div>

                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty" placeholder="Nama Pengumuman" maxlength="100" name="name">
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">Tanggal</b>
                                                    </div>

                                                    <div class="div ar-content dot-mandatory">
                                                        <div class="se-date no-clr w50p" role="off">
                                                            <input type="input" name="pengumuman_date" class="w100p form-control background-trf position-rt inputFalseAll empty singleDate typefalse" placeholder="Tanggal" >
                                                            <span class="ar-ic">
                                                                <span class="sli_icon-calendar ic"></span>
                                                            </span>
                                                            <button class="btn-clear clear-date" role="off">
                                                                <i class="sli_icon-close"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </li>

                            <li class="list">
                                <div class="div">
                                    <table>
                                        <tr class="wh-m-620">
                                            <td colspan="2">
                                                <div class="div bts-br"></div>
                                            </td>
                                        </tr>
                                        <tr class="wh-m-620">
                                            <td colspan="2">
                                                <div class="div">
                                                    <b>Uraian</b>
                                                </div>
                                                <div class="div">
                                                    <span class="label">Isikan uraian pengumuman</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                            <td colspan="2" class="vtop">
                                            <div class="div hide ws-m-disb-620">
                                                    <b class="up-txt fsize9">URAIAN</b>
                                                </div>
                                                <div class="div ar-content">
                                                    <textarea name="editor" class="form-control h150 empty" maxlength="1500" id="editor" placeholder=""></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </div>
                            </li>

                            <li class="list">
                                <div class="div">
                                    <table>
                                        
                                        <tr>
                                            <td class="left" colspan="2" style="padding-top:0px;">
                                                <div class="div">
                                                    <div class="div out-area-checkbox">
                                                        <a href="#" class="area-checkbox cmd-checkbox" role="on">
                                                            <span class="icn"></span>
                                                            <span class="nm">Publish</span>
                                                        </a>
                                                        <input type="hidden" id="checkbox-value" name="publish" value="1">
                                                    </div>
                                                    <div class="div">
                                                        <span class="label">Anda bisa menentukan publish atau pendingnya pengumuman dengan ceklist publish</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="wh-m-620">
                                            <td colspan="2">
                                                <div class="div bts-br mg-b10"></div>
                                            </td>
                                        </tr>
                                        
                                    </table>

                                </div>
                            </li> 

                            <li class="list">
                                <div class="div clr-float">
                                    <button class="btn blue is-loading fl-right w180 br-rds18 h42 submit" role="off">Simpan</button>
                                </div>
                            </li>

                        </ul>
                        
                        <div class="hide" id="data-editor"></div>
                        <input type="hidden" name="type" value="">
                        <input type="hidden" name="user_id" value="">
                        <input type="hidden" name="id" value="" class="empty">
                        

                    </form>
                </div>
            </div>

            
        </div>
    </div>
</div>


<link rel="stylesheet" href="{{$URI}}/assets/css/acs/datetimepicker/bootstrap-datetimepicker.css">

<!-- CKEDITOR -->
<script src="{{$URI}}/assets/js/home/widget.js"></script>
<script type="text/javascript" src="{{$URI}}/assets/js/acs/ckeditor/ckeditor.js"></script>

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

    // console.log(rsp);
    var list = '';
    $.each(rsp.list,function(i,item)
    {
        
        var status = parseFloat(item.status);
        var listx = temp;

        listx = listx.replace('{id}', item.id);
        listx = listx.replace('{date}', item.date);
        listx = listx.replace('{admin}', (item.admin === '' ? '' : item.admin));
        listx = listx.replace('{name}', item.name);
        listx = listx.replace('{notes}', item.text);
        listx = listx.replace('{datex}', item.datex);
        listx = listx.replace('{register}', (item.publish === 0 ? '<li class="progress"><span>PENDING</span></li>' : '<li class="done"><span>PUBLISH</span></li>' ) );

        listx = listx.replace('{btn-register}', (item.registers === 0 ? '' : 'hide'));

        listx = listx.replace('{btn-dropdown}', ( getaccount().sublevel === item.sub_level ? '<button type="button" class="btn btn-primary nobr grey s11"><span class="sli_icon-ban"></span></button>' : '<button type="button" class="btn btn-primary nobr grey s11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-v"></span></button>'));

        listx = listx.replace('{btn-block}', (item.registers === 0 ? '' : '<div class="dropdown-divider"></div><a class="dropdown-item cmd-blocked afalse slide color-red " href="#" role="off" slide="'+(item.status === 0 ? 'on' : 'off')+'" dataid=""><div class="div clr-float"><div class="fl-left fl"><div class="tbl"><div class="intbl"><span class="text-label">'+(item.status === 0 ? 'Buka Blokir' : 'Blokir')+'</span></div></div></div><div class="fl-right fr"><div class="arslide"><div class="bord"></div></div></div></div></a>') )

        list += listx;
    });

    return list;
}

async function getsublevel(w,e)
{

    var area = $("body").find(w);
    var $URL = config.apps.URL_API + '/api/data/lembaga/type';
    var $t = FormSending("","GET","key","",$URL);
    $t.success(function(n)
    {
        console.log(n);
        var rsp = n.response;
        var list = '<li aria-selected="false"><button role="off" dataid="-1"><span>'+e+'</span></button></li>';
        $.each(rsp.list, function(i,item)
        {
            list += '<li aria-selected="false"><button role="off" dataid="'+item.id+'"><span>'+item.name+'</span></button></li>';
        });
        area.find("ul").html(list);
    });
    $t.error(function(n)
    {
        console.log(n);
    })
}


getsublevel('.area-level','Semua Level');


$(document).ready(function()
{

    // CKEDITOR
    var editorElement = CKEDITOR.document.getById( 'editor' );
	var dataEditor = $("body").find("#data-editor").html();
	editorElement.setHtml(dataEditor);
    CKEDITOR.replace( 'editor', {
        removeButtons: 'Save,Templates,Source,NewPage,ExportPdf,Preview,Print,Copy,Paste,PasteText,PasteFromWord,Cut,Undo,Redo,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,CopyFormatting,RemoveFormat,JustifyLeft,JustifyCenter,JustifyRight,JustifyBlock,BidiLtr,BidiRtl,Language,Anchor,Image,Flash,SpecialChar,PageBreak,Iframe,About,Maximize,ShowBlocks,TextColor,BGColor,Styles,Format,Font,FontSize',
        removePlugins: 'elementspath'
    });

    //CHECKBOX
    $("#form-create .cmd-checkbox").click(function(e)
    {
        e.preventDefault();
        checkbox($(this));
    });


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
            modal.find(".modal-title span").html("Pengumuman");

            //
            clearEmptyForm(modal);


            //
            modal.find("button.submit").html("Simpan");
            modal.find("input[type='text']").removeAttr("disabled");
            modal.find("button.cddwn").removeAttr("disabled");
            modal.find("button.submit").removeAttr("disabled");

            modal.find("input[name='user_id']").val(getaccount().id);
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
            modal.find(".load").removeClass("hide");
            clearEmptyForm(modal);
            form.find("span.error").remove();
            form.find(".br-error").removeClass("br-error");
            modal.find("input[name='type']").val("edit");
            modal.find(".modal-title span").html("Sunting Pengumuman");

            modal.find("input[name='user_id']").val(getaccount().id);

            var $URL = config.apps.URL_API + '/api/news/pengumuman/view?id='+id;
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
        form.find("*[name='pengumuman_date']").val(rsp.date);
        CKEDITOR.instances.editor.setData(rsp.uraian);
        form.find(".cmd-checkbox").attr("role", (rsp.publish === 1 ? 'on' : 'off') );
        form.find("*[name='publish']").val(rsp.publish);
        
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
    $('body').on('click', 'button.submit', function(e)
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
        button = modal.find('button.submit');


        if( button.attr('role') === 'off' )
        {
            button.attr('role', 'on');
            var $check = checkFormCreate(form);

            if( $check )
            {
                //CKEDIOR
                for (instance in CKEDITOR.instances) 
                {
                    CKEDITOR.instances[instance].updateElement();
                }

                //submit
                var $URL = config.apps.URL_API + form.attr("action");
                var $t = FormSending(form,"POST","key","form",$URL);
                $t.success(function(n)
                {
                    // console.log(n);
                    if( form.find('*[name="type"]').val() === 'add')
                    {
                        clearEmptyForm(form);
                        button.attr('role','off');
                        loadTable();
                        CKEDITOR.instances.editor.setData('');
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

    function checkFormCreate(w)
    {
        var form =w,
        modal = form.parents('.new-modal.show'),
        name = form.find('*[name="name"]'),
        date = form.find('*[name="pengumuman_date"]'),
        detail = CKEDITOR.instances.editor.getData(),
        vdetail = form.find('textarea[name="editor"]'),
        button = modal.find('button.submit');

        //check
        form.find('span.error').remove();
        form.find('.br-error').removeClass('br-error');

        //CKEDITOR
        var detail1 = CKEDITOR.instances.editor.document.getBody().getChild(0).getText() ;
        var detail1 = detail1.replace(/ +(?= )/g,'');
        
        //
        if( $.trim(name.val()).length < 3  || $.trim(date.val()) === '' || $.trim(detail1).length === 0 )
        {

            //name
            if( $.trim(name.val()).length < 3 )
            {
                name.parent('.ar-content').append('<span class="error">Kolom nama sekurangnya 3 karakter</span>');
                name.addClass('br-error');
            }

            //gender
            if( $.trim(date.val()) === '' )
            {
                date.parent('.ar-content').append('<span class="error">Isikan tanggal</span>');
                date.addClass('br-error');
            }

            if( $.trim(detail1).length === 0 )
            {
                vdetail.parent('.ar-content').append('<span class="error">Isikan uraian pengumuman</span>');
                vdetail.parent('.ar-content').find('#cke_editor').addClass('br-error');
            }


            button.attr('role','off');
            return false;
        }

        return true;

        
    }


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

    $("#form-create .empty").keyup(function(n)
    {
        // $(this).parents("form").submit();
        var form = $(this).parents("form");
        checkFormCreate(form);
    })

    // DETECT KEYUP CKEDITOR
    CKEDITOR.instances.editor.on('key', function(e) {
        var el = $('body').find('#form-create textarea[name="editor"]');
        el.parent('.ar-content').find('span.error').remove();
        el.parent('.ar-content').find('.br-error').removeClass('br-error');

    });

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