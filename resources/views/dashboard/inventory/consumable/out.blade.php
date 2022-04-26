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
                                    <span>Order Consumable</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="div head-tables">
                <div class="div clr-float">

                    <form action="/api/inventory/consumable/out/table" id="form-table" aria-temp="temp-table-invantory">


                        <button class="submit hide" role="off">submit</button>
                        <div class="fl-right w100px">

                            <div class="fl-right oarea-ddwn-hd oar-ddwn">
                                <button class="btn green btn-r cmd-modal-create" role="off" data-type="" data-toggle="modal" data-target="#modal-form">
                                    <span class="ic fa flaticon2-add-1"></span>
                                    <span>Tambah</span>
                                </button>
                                <!-- <div class="ar-ddw area-ddwn-hd bottom right br-rds8 ctn-menu keep">
                                    <div class="div">
                                        <ul>
                                            <li>
                                                <a href="#" role="off" class="cmdNewModal" data-widget="modal-create-task" aria-dropdown="true">
                                                    <div class="div">
                                                        <span class="fsize14">Task Baru</span>
                                                        <span class="icr sli_icon-note"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="div">
                                                        <span class="fsize14">Task Harian</span>
                                                        <span class="icr fas  flaticon-clipboard"></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
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
                                                    <div class="ddwn area-ddwn keep area-types" data-label="Semua Jenis">
                                                        <button class="btn br-rds8 cddwn" role="off">
                                                            <label><span class="fsize14 color-black">Semua Jenis</span></label>
                                                        </button>
                                                        <div class="ddwn-pg area-ddwn-page">
                                                            <ul>
                                                                <!-- <li aria-selected="false">
                                                                    <button role="off"  dataid="-1" ><span>Semua Divisi</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="1" ><span>Keuangan</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="2" ><span>Markom</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="3" ><span>Produksi</span></button>
                                                                </li> -->
                                                            </ul>
                                                        </div>
                                                        <input type="hidden" class="value-dropdown" name="selected_type" value="-1">
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

                        <input type="hidden" name="divisi" value="">
                        <input type="hidden" name="status" value="">
                        <input type="hidden" name="position" value="">
                        <input type="hidden" name="date" value="">
                        <input type="hidden" name="paging" value="1">
                        <input type="hidden" name="sort_name" value="asc">

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
                                            <td class="td-w180">
                                                <div class="td-iner">
                                                    <span class="ic sli_icon-calendar"></span>
                                                    <span>PROJECT</span>
                                                </div>
                                            </td>
                                            <td class="td-w100">
                                                <div class="td-iner">
                                                    <span class="ic sli_icon-tag"></span>
                                                    <span>JENIS</span>
                                                </div>
                                            </td>
                                            <td class="td-w100">
                                                <div class="td-iner">
                                                    <span class="ic fa flaticon-exclamation-1"></span>
                                                    <span>QTY</span>
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
                            <!-- TR list -->
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

<div class="div hide" id="temp-table-invantory">
    <div class="tr" dataid="{id}">

        <div class="thr">
            <div class="div clr-float">
                <div class="spc fsize10 up-txt">
                    <span class="label ">KODE: </span>
                    <span>{code}</span>
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
                                        <span class="ic fsize10 {gender}" title="{genderlabel}"></span>
                                        <b>{name}</b>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="td-w180 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span class="ic label sli_icon-briefcase fsize10"></span>
                                    <span>{project}</span>
                                </div>
                                <div class="div label fsize12">
                                    <span>{customer}</span>
                                </div>
                            </div>
                        </td>
                        <td class="td-w100 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span>{type}</span>
                                </div>
                            </div>
                        </td>
                        <td class="td-w100 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span>{qty}</span>
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

                                        <button type="button" class="btn btn-primary nobr grey s11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-v"></span></button>

                                        <div class="dropdown-menu">
                                            <a class="dropdown-item afalse color-orange cmd-sunting" href="#" data-type="edit" data-open="page" data-target="" data-token="" role="off">
                                                <span>Sunting</span><span class="ic sli_icon-pencil"></span>
                                            </a>

                                            <a class="dropdown-item color-red cmd-modal" href="#" data-title="Hapus" data-open="" data-token="" role="off" data-toggle="modal" data-target="#modaldelete" data-info="{label_delete}" data-url="/api/inventory/consumable/out/delete" data-action="removeTR">
                                                <span>Hapus</span><span class="ic fa flaticon-delete"></span>
                                            </a>

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


<div class="modal fade new-modal" id="modal-form" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog w460" role="document">
        <div class="modal-content br-rds12 pd-tb15 pd-lr15">
            <div class="modal-header txt-center no-br">
                <div class="div">
                    <h2 class="modal-title">
                        <span class="fsize18">Tambah Consumable</span>
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
                    <form action="/api/inventory/consumable/out/add">

                        <div class="div">

                            <div class="div">
                                <div class="div">
                                    <div class="divx">
                                        <span class="label font-wg25 up-txt fsize10">KODE PO</span>
                                        <div class="div ar-content area-find">
                                            <div class="div clr-float">
                                                <input type="text" name="code" class="form-control br-rds8 txt-def-empty empty w50p fl-left src" placeholder="" >
                                                <input type="hidden" name="poid" value="" class="empty">
                                                <button class="btn color-grey fl-left mg-l5 cmd-check-po" role="off">
                                                    <span class="sli_icon-magnifier"></span>
                                                </button>
                                                <button class="btn color-grey fl-left mg-l5 cmd-clear-po hide" role="off">
                                                    <span class="fsize14 sli_icon-close"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="div">

                                <div class="div">
                                    <div class="div h18"></div>
                                    <div class="divx">
                                        <span class="label font-wg25 up-txt fsize10">PROJECT PO</span>
                                        <div class="div ar-content">
                                            <input type="text" name="po_label" class="form-control br-rds8 txt-def-empty empty" placeholder="" disabled="disabled">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="div">

                                <div class="div h18"></div>

                                <div class="div">
                                    <div class="divx">
                                        <span class="label up-txt fsize10">Consumable</span>
                                        <div class="div">
                                            <div class="field-city indropdown area-tsrc-dropdown alist ar-content" role="false" datatimer="1000">
                                                <div class="div">

                                                    <input class="form-control br-rds8  txt-def-empty tsrc-dropdown label-dropdown for-enable clear-empty empty" name="city" type="text" placeholder="Cari Consumable..." aria-href="/api/data/consumable?p=1&q=" disabled="disabled">

                                                    <input type="hidden" name="consumable_id" class="value-dropdown txt-def-empty empty clear-empty">
                                                    
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
                                </div>

                            </div>

                            <div class="div">

                                <div class="div">
                                    <div class="divx">
                                        <span class="label font-wg25 up-txt fsize10">Jumlah</span>
                                        <div class="div ar-content">
                                            <input type="text" name="quantity" class="form-control br-rds8 txt-def-empty empty w50p for-enable clear-empty" placeholder="" disabled="disabled">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        
                        <input type="hidden" name="id" class="id" value="">
                        <input type="hidden" name="type" value="">
                        <input type="hidden" name="user_id" value="" class="">
                        <input type="submit" value="Submit" class="hide">
                    </form>

                </div>
            </div>
            <div class="modal-footer no-br br-rdsb12">
                <button type="button" class="btn green modal-submit fix w110 is-loading br-rds12 for-enable" role="off" disabled="disabled">
                    <span>TAMBAH</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL DELETE -->
<div class="modal fade new-modal" id="modaldelete" data-action="" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog w420" role="document">
        <div class="modal-content br-rds12 pd-tb15">
            <div class="modal-header txt-center no-br">
                <div class="div">
                    <h2 class="modal-title">
                        <span class="fsize18 label-title">Hapus</span>
                    </h2>
                    
                </div>
                <button type="button" class="close pd-tbnull" style="position:absolute; right:20px;" data-dismiss="modal" aria-label="Close">
                    <span class="flaticon2-cross fsize12"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="div">
                    <form action="">

                        <div class="div text-center">
                            <div class="div">
                                <span>Anda yakin akan menghapus</span>
                                <b class="label-info">Info</b>?
                            </div>
                            <div class="div">
                                <span class="label label-subtitle">Proses ini tidak bisa dibatalkan</span>
                            </div>

                        </div>
                        <input type="submit" value="Submit" class="hide">
                    
                        <div class="hide area-input">

                        </div>
                    </form>
                    
                </div>

            </div>
            <div class="modal-footer no-br br-rdsb12">
                
                <button type="button" class="btn bc-red modal-submit fix w110 is-loading br-rds12" role="off">
                    <span>Ya, Hapus</span>
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

    // console.log(rsp);
    var list = '';
    $.each(rsp.list,function(i,item)
    {
        var status = parseFloat(item.status);
        var listx = temp;

        listx = listx.replace('{id}', item.id);
        listx = listx.replace('{date}', item.date);
        listx = listx.replace('{admin}', item.admin);
        listx = listx.replace('{code}', item.po_code);
        listx = listx.replace('{expired_date}', item.expired_date);
        listx = listx.replace('{name}', item.name);
        listx = listx.replace('{project}', item.project);
        listx = listx.replace('{customer}', item.customer);
        listx = listx.replace('{label_delete}', item.name);
        listx = listx.replace('{qty}', formatRupiah( item.quantity) + ' <span class="label">(qty)</span>' );
        listx = listx.replace('{type}', item.type);

        list += listx;
    });

    return list;
}


async function gettypes(w,e)
{

    var $URL = config.apps.URL_API + '/api/inventory/consumable/data/types';
    var $t = FormSending("","GET","key","",$URL);
    var area = $("#"+ w).find(".area-types"),
    label = area.attr("data-label");

    area.find("button.btn spane").html(label);
    $t.success(function(n)
    {
        // console.log(n);
        var rsp = n;
        var list = e === 'false' ? '' : '<li aria-selected="false"><button role="off" dataid="-1" data-modal="" data-modal-label="" data-get="" class=""><span>'+label+'</span></button></li>';
        $.each(rsp.response, function(i,item)
        {
            list += ' <li aria-selected="false"><button role="off" class="" dataid="'+item.id+'" data-modal="" data-modal-label="" data-get=""><span>'+item.name+'</span></button></li>';
        });
        area.find("ul").html(list);
    });
    $t.error(function(n)
    {
        console.log(n);
    })
}

gettypes("form-table","true");

$(document).ready(function()
{
    //MODAL CREATE
    $(".cmd-modal-create").click(function(e)
    {
        var cmd = $(this),
        modal = $("body").find("#modal-form"),
        form = modal.find("form");

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            modal.find("input[name='type']").val("new");
            modal.find(".title").html("Tambah Consumable");

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
        modal = $("body").find("#modal-inventory"),
        form = modal.find("form");
        

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            form.find("span.error").remove();
            form.find(".br-error").removeClass("br-error");

        //
            modal.find("input[name='type']").val("edit");
            modal.find(".title").html("Sunting Consumable");

            modal.find("input[name='user_id']").val(getaccount().id);

            //
            clearEmptyForm(modal);


            // var $URL = config.apps.URL_API + '/api/inventory/consumable/show?id='+id;
            // $t = FormSending("","GET","key","",$URL);
            // $t.success(function(n)
            // {
            //     console.log(n);
            //     templateSunting(modal,n.response);
            //     modal.find(".load").addClass("hide");
            // });
            // $t.error(function(n)
            // {
            //     console.log(n);
            // })

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

        // console.log(rsp);

        form.find("*[name='name']").val(rsp.name);
        form.find("*[name='code']").val(rsp.code);
        form.find("*[name='quantity']").val(formatRupiah(rsp.quantity.value));
        form.find("*[name='expired_date']").val(rsp.expired.date);
        form.find("*[name='id']").val(rsp.id);
        form.find("*[name='description']").val(rsp.description);
        form.find("*[name='expired_status']").val(rsp.expired.status);
        form.find("*[name='reminder_duration']").val(rsp.reminder);
        form.find("*[name='quantity_limit']").val(formatRupiah(rsp.quantity.limit))

        //jenis or type
        form.find("*[name='type_tools']").val(rsp.type);
        var litype = '';
        $.each(rsp.type_list, function(i,x)
        {
            litype += '<li aria-selected="'+(x.id === rsp.type ? 'true' :'false' )+'"><button role="off" dataid="'+x.id+'" data-modal="" data-modal-label="" data-get=""><span>'+x.name+'</span></button></li>';
        });

        form.find("*[name='type_tools']").parent(".area-ddwn").find("ul").html(litype);
        var selectType = form.find("*[name='type_tools']").parent(".area-ddwn"),
        labelType = selectType.find("ul li button[dataid='"+rsp.type+"'] span").html();

        selectType.find("label span").html(labelType);

        var area_expired = form.find("*[name='expired_status']").parent(".ar-content"),
        expired_label = area_expired.find("ul li button[dataid='"+rsp.expired.status+"'] span").html();


        area_expired.find("ul li button[dataid='"+rsp.expired.status+"']").parent("li").attr("aria-selected","true");
        area_expired.find("button label span").html(expired_label);


        //
        if(rsp.expired.status === 1)
        {
            form.find("*[name='expired_date']").parents(".area-hidden").removeClass("hide");
        }
        else
        {
            form.find("*[name='expired_date']").parents(".area-hidden").addClass("hide");
        }

        //reminder
        var reminder = form.find("*[name='reminder_duration']").parent(".area-ddwn"),
        labelReminder = reminder.find("ul li button[dataid='"+rsp.reminder+"'] span").html();
        reminder.find("label span").html(labelReminder);
        reminder.find("ul li button[dataid='"+rsp.reminder+"']").parent("li").attr("aria-selected","true");

    }


    //CHECK CODE PO
    $(".cmd-check-po").click(function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        area = cmd.parents(".area-find"),
        form = cmd.parents("form"),
        modal = cmd.parents(".new-modal"),
        text = area.find("input.src"),
        value = area.find("*[name='poid']");

        if( cmd.attr("role") === "off" && $.trim(text.val()) !== "" )
        {
            cmd.attr("role", "on");
            modal.find("span.error").remove();
            modal.find(".br-error").removeClass("br-error");


            var $URL = config.apps.URL_API + '/api/inventory/consumable/out/checkpo?q=' + text.val();
            var $t = FormSending("","GET","key","",$URL);
            $t.success(function(n)
            {
                // console.log(n);
                text.attr("disabled", "disabled");
                value.val(n.response.id);
                form.find("*[name='po_label']").val(n.response.name);
                modal.find(".for-enable").removeAttr("disabled");
                area.find(".cmd-check-po").addClass("hide");
                area.find(".cmd-clear-po").removeClass("hide");
                cmd.attr("role", "off");
            });
            $t.error(function(n)
            {
                console.log(n);
                cmd.attr("role", "off");
            });
        }
    });

    $(".cmd-clear-po").click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents(".area-find"),
        modal = cmd.parents(".new-modal");

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role","on");
            clearfindpo(modal);
            cmd.attr("role","off");
        }
    });

    function clearfindpo(w)
    {
        var modal = w,
        area = modal.find(".area-find");

        area.find("input.src").val("");
        area.find("input.src").removeAttr("disabled");
        modal.find(".empty").val("");
        modal.find(".for-enable").attr("disabled","disabled");
        area.find("button.cmd-clear-po").addClass("hide");
        area.find("button.cmd-check-po").removeClass("hide");
        modal.find(".cmd-clear-tsrc").hide();
    }


    $("#modal-form button.close").click(function(e)
    {
        e.preventDefault();
        var modal = $(this).parents(".new-modal");
        clearfindpo(modal);
    })

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
        //
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
        checkForm(form);
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

    //
    $('#modal-form *[name="quantity"]').keyup(function(e)
    {   
        numbFNoZeroWO($(this));
    });

    //submit
    $('body').on('click', '.modal-submit', function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        modal = cmd.parents('.new-modal.show'),
        form = modal.find('form');

        form.submit();
    });


    $('#modal-form form').submit(function()
    {

        var form = $(this),
        modal = form.parents(".new-modal"),
        button = modal.find('button.modal-submit');

        
        if( button.attr('role') === 'off' )
        {
            button.attr('role', 'on');
            var $check = checkForm(form);

            if( $check )
            {
                //submit
                var $URL = config.apps.URL_API + form.attr("action");
                var $t = FormSending(form,"POST","key","form",$URL);
                $t.success(function(n)
                {
                    console.log(n);
                    if( form.find('*[name="type"]').val() === 'new')
                    {
                        // clearEmptyForm(form);
                        form.find("*[name='quantity']").val('');
                        form.find(".area-tsrc-dropdown .empty").val('');
                        form.find(".area-tsrc-dropdown button.cls").hide();
                    }
                    button.attr('role','off');
                    loadTable();
                    flagnotif("success", n.message);
                });
                $t.error(function(n)
                {
                    console.log(n.responseJSON);
                    var rsp = n.responseJSON;
                    if( n.status === 403)
                    {
                        form.find('*[name="'+rsp.focus+'"]').parent('.ar-content').append('<span class="error">'+rsp.message+'</span>');
                        form.find('*[name="'+rsp.focus+'"]').addClass('br-error');
                        button.attr('role','off');
                        form.find('*[name="'+rsp.focus+'"]').focus();
                        return;
                    }
                    button.attr('role','off');
                    
                })
            }
        }

        return false;
    });



    function checkForm(el)
    {
        var form = el,
        modal = form.parents(".new-modal");

        var poid = form.find('*[name="poid"]'),
        consumable = form.find('*[name="consumable_id"]'),
        qty = form.find('*[name="quantity"]'),
        button = modal.find('button.modal-submit');

        //check
        form.find('span.error').remove();
        form.find('.br-error').removeClass('br-error');

        //
        if( $.trim(poid.val()) === '' || $.trim(poid.val()) !== '' && $.trim(consumable.val()) === '' || $.trim(poid.val()) !== '' && $.trim(qty.val()) === '' || $.trim(poid.val()) !== '' && $.trim(qty.val()) === 0 )
        {

            //name
            if( $.trim(poid.val()) === '' )
            {
                poid.parents('.ar-content').append('<span class="error">Isikan kode po valid</span>');
                poid.addClass('br-error');
            }

            //consumable
            if( $.trim(poid.val()) !== '' && $.trim(consumable.val()) === '' )
            {
                consumable.parents('.ar-content').append('<span class="error">Pilih Consumable terlebih dulu</span>');
                consumable.addClass('br-error');
            }

            // quantity
            if( $.trim(poid.val()) !== '' &&  $.trim(qty.val()) === '' || $.trim(poid.val()) !== '' &&  $.trim(qty.val()) === 0)
            {
                qty.parent('.ar-content').append('<span class="error">Isi quantity dengan benar</span>');
                qty.parent('.ar-content').find("button.btn").addClass('br-error');
            }



            button.attr('role','off');
            return false;
        }

        return true;

        
    }

    $("#modal-inventory .area-expired-status li button").click(function()
    {
        var cmd = $(this),
        form = cmd.parents("form");

        if( cmd.attr("dataid") === '1')
        {
            form.find("*[name='expired_date']").val('');
            durationreminderday(form);
            form.find("*[name='expired_date']").parents(".area-hidden").removeClass("hide");
            return;
        }

        durationreminderday(form);
        form.find("*[name='expired_date']").val('');
        form.find("*[name='expired_date']").parent(".se-date").attr('role', 'off');
        form.find("*[name='expired_date']").parents(".area-hidden").addClass("hide");
    });

    $("#modal-form input.empty").keyup(function(n)
    {
        // $(this).parents("form").submit();
        var form = $(this).parents("form");
        checkForm(form);
    })

    $("#modal-form textarea.empty").keyup(function(n)
    {
        // $(this).parents("form").submit();
        var form = $(this).parents("form");
        checkForm(form);
    })

    //DELETE
    $('body').on('click', '.cmd-modal[data-target="#modaldelete"]', function()
    {
        var cmd = $(this),
        tr = cmd.parents('.tr'),
        modal = $(cmd.attr('data-target')),
        card = cmd.parents('.card-body'),
        action = cmd.attr('data-action');

        //
        $(modal).find('form').attr('action', cmd.attr('data-url'));
        $(modal).find('form .area-input').html('');
        $(modal).find('form .area-input').html('<input type="hidden" name="id" value="'+tr.attr('dataid')+'" />');

        $(modal).find('.label-info').html(cmd.attr('data-info'));
        $(modal).attr('data-action', action);
        
    });

    //delete form
    $('#modaldelete form').submit( function()
    {
        var form = $(this),
        modal = form.parents('.new-modal.show'),
        button = modal.find('button.modal-submit'),
        r = modal.attr('data-action');

        if( button.attr('role') === 'off')
        {
            button.attr('role', 'on');

            var $URL = config.apps.URL_API + form.attr("action");
            var $t = FormSending(form,"POST","key","form",$URL);

            $t.success(function(n)
            {
                console.log(n);
                modal.find('button.close').click();
                var data = n;
                eval(r + "(data)");


                if( n.message !== '')
                {
                    flagnotif('success', n.message);
                }
            });
            $t.error(function(n)
            {
                console.log(n);
                if( n.status === 404)
                {
                    modal.find('button.close').click();
                    flagnotif('error', n.responseJSON.message);

                    return;
                }
                
                // var list = n.responseJSON.list;
                // eval(r + "(list)");

                flagnotif('error', msgboxError());
                button.attr('role', 'off'); 

            });

        }

    });

    function removeTR(e)
    {
        var data = e;
        $("body").find(".tr[dataid='"+e.response.id+"']").remove();

        if( $("body").find(".table-body .tr").length === 0)
        {
            loadTable();
        }
    }


    //PAGING BUTTON
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