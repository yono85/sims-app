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
                                    <span>Consumable</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="div head-tables">
                <div class="div clr-float">

                    <form action="/api/inventory/consumable/table" id="form-table" aria-temp="temp-table-invantory">


                        <button class="submit hide" role="off">submit</button>
                        <div class="fl-right w100px">

                            <div class="fl-right oarea-ddwn-hd oar-ddwn">
                                <button class="btn green btn-r cmd-modal-create" role="off" data-type="">
                                    <span class="ic fa flaticon2-add-1"></span>
                                    <span>Baru</span>
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
                                                                    <button role="off"  dataid="0" ><span>Non Aktif</span></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <input type="hidden" class="value-dropdown" name="selected_status" value="-1">
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
                                            <td class="td-w100">
                                                <div class="td-iner">
                                                    <span class="ic sli_icon-tag"></span>
                                                    <span>JENIS</span>
                                                </div>
                                            </td>
                                            <td class="td-w100">
                                                <div class="td-iner">
                                                    <span class="ic fa flaticon-exclamation-1"></span>
                                                    <span>STOCK</span>
                                                </div>
                                            </td>
                                            <td class="td-w160">
                                                <div class="td-iner">
                                                    <span class="ic sli_icon-calendar"></span>
                                                    <span>EXPIRED DATE</span>
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
                                    <span>{stock}</span>
                                </div>
                                <div class="div">
                                    <span>{stock_limit}</span>
                                </div>
                            </div>
                        </td>
                        <td class="td-w160 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span>{expired_date}</span>
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

<div class="prover-modal-view modal-new-view white hide" id="modal-inventory">
    <div class="ar-modal-rel overflow-yA">
        <div class="modal-home">

            <div class="insed-body h-full pdtb20">

                <div class="arinsed mdl-partner pd-lr-40 pos-rel m-pd-lr25">

                    <div class="load txt-center pd-t10 hide">
                        <img src="/assets/svg/loading.blue.svg" alt="">
                    </div>

                    <div class="div header-box">
                        <b class="title">Title</b>
                        <a href="#" class="close afalse" role="off">
                            <span class="fa flaticon2-cross"></span>
                        </a>
                    </div>
                    <form action="/api/inventory/consumable/create" id="form-create" >

                        <ul class="artable">

                            <li class="list">
                                <div class="div">
                                    <table>
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Nama, Kode dan Jenis</b>
                                                    </div>
                                                    <div class="div label">Isikan nama, kode dan jenis consumable
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                                
                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">NAMA CONSUMABLE</b>
                                                    </div>

                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty" placeholder="Nama Consumable" maxlength="75" name="name">
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div w50p">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">Kode</b>
                                                    </div>

                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty" placeholder="Kode" maxlength="50" name="code">
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div w50p">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">JENIS</b>
                                                    </div>

                                                    <div class="ddwn area-ddwn ddwn-button-select ar-content keep dot-mandatory area-types" data-label="Pilih Jenis">

                                                        <button class="btn br-rds8 cddwn fcs" role="off">
                                                            <label><span class="fsize14 color-black">Pilih Jenis</span></label>
                                                        </button>

                                                        <div class="ddwn-pg area-ddwn-page">
                                                            <ul>
                                                                <!-- list -->
                                                            </ul>
                                                        </div>

                                                        <input type="hidden" class="value-dropdown empty" name="type_tools" value="">

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
                                        <tr>
                                            <td colspan="2">
                                                <div class="div bts-br"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Stock dan Stock limit</b>
                                                    </div>
                                                    <div class="div label">Isikan Stock dan Stock limit consumable
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">

                                                <div class="div w50p">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">STOCK</b>
                                                    </div>

                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty rupiahkeyup" placeholder="Stock" maxlength="9" name="quantity">
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div w50p">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">STOCK LIMIT</b>
                                                    </div>

                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty rupiahkeyup" placeholder="Stock limit" maxlength="9" name="quantity_limit">
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
                                        <tr>
                                            <td colspan="2">
                                                <div class="div bts-br"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Status Expired</b>
                                                    </div>
                                                    <div class="div label">Tentukan Status Expired.
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">

                                                <div class="ddwn area-ddwn ddwn-button-select ar-content keep dot-mandatory w50p area-expired-status" data-label="Status Expired">

                                                    <button class="btn br-rds8 cddwn fcs" role="off">
                                                        <label><span class="fsize14 color-black">Status Expried</span></label>
                                                    </button>

                                                    <div class="ddwn-pg area-ddwn-page">
                                                        <ul>
                                                            <!-- list -->
                                                            <li aria-selected="false">
                                                                <button role="off" dataid="1" data-modal="" data-modal-label="" data-get="" ><span>Expire</span></button>
                                                            </li>
                                                            <li aria-selected="false">
                                                                <button role="off" dataid="0" data-modal="" data-modal-label="" data-get="" ><span>Tidak Ada</span></button>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <input type="hidden" class="value-dropdown empty" name="expired_status" value="">

                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div hide area-hidden">

                                                    

                                                    <div class="div w50p">
                                                        <div class="div hide ws-m-disb-620">
                                                            <b class="up-txt fsize9">EXPIRED DATE</b>
                                                        </div>
                                                        <div class="div ar-content">
                                                            <div class="se-date no-clr" role="off">
                                                                <input type="input" name="expired_date" class="w100p form-control background-trf position-rt inputFalseAll empty singleDate typefalse" placeholder="Expired Date" >
                                                                <span class="ar-ic">
                                                                    <span class="sli_icon-calendar ic"></span>
                                                                </span>
                                                                <button class="btn-clear clear-date" role="off">
                                                                    <i class="sli_icon-close"></i>
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="div bts-in"></div>

                                                    <div class="ddwn area-ddwn ddwn-button-select ar-content keep w50p area-select-durasi-reminder" data-label="1 hari">

                                                        <button class="btn br-rds8 cddwn fcs" role="off">
                                                            <label><span class="fsize14 color-black">1 hari</span></label>
                                                        </button>

                                                        <div class="ddwn-pg area-ddwn-page">
                                                            <ul>
                                                            <!-- list -->
                                                            </ul>
                                                        </div>
                                                        <div class="div">
                                                            <span class="label txt-italic">Durasi reminder (hari)</span>
                                                        </div>
                                                        <input type="hidden" class="value-dropdown num1" name="reminder_duration" value="1">

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
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Deskripsi</b>
                                                    </div>
                                                    <div class="div label">Isikan deskripsi atau detail perihal alat
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">DESKRIPSI</b>
                                                    </div>
                                                    <div class="div ar-content">
                                                        <textarea name="description" class="form-control empty" maxlength="250" placeholder="Deskripsi..."></textarea>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="div bts-br"></div>
                                            </td>
                                        </tr>
                                    </table>

                                </div>
                            </li>


                            <li class="list">
                                <div class="div clr-float">
                                    <button class="btn blue is-loading fl-right w180 br-rds18 h42 submit" role="off">Simpan</button>
                                    <button class="btn red is-loading fl-right w140 br-rds18 h42 mg-r10 color-red br-red submit-delete hide" role="off">Hapus</button>
                                </div>
                            </li>

                        </ul>
                        
                        <input type="hidden" name="type" value="">
                        <input type="hidden" name="user_id" value="">
                        <input type="hidden" name="id" value="">

                    </form>
                </div>

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

    console.log(rsp);
    var list = '';
    $.each(rsp.list,function(i,item)
    {
        var status = parseFloat(item.status);
        var listx = temp;

        listx = listx.replace('{id}', item.id);
        listx = listx.replace('{date}', item.date);
        listx = listx.replace('{admin}', item.admin);
        listx = listx.replace('{code}', item.code);
        listx = listx.replace('{expired_date}', item.expired_date);
        listx = listx.replace('{name}', item.name);
        listx = listx.replace('{stock}', formatRupiah( item.quantity) + ' <span class="label">(stock)</span>' );
        listx = listx.replace('{stock_limit}', formatRupiah( item.quantity_limit) + ' <span class="label">(limit)</span>' );
        listx = listx.replace('{type}', item.type_name);
        listx = listx.replace('{stock}', item.stock);
    

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
        modal = $("body").find("#modal-inventory"),
        form = modal.find("form");

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            modal.find("input[name='type']").val("new");
            modal.find(".title").html("Tambah Consumable");

            gettypes("modal-inventory","false");

            //
            clearEmptyForm(modal);

            durationreminderday(form);

            //
            modal.find("button.submit").html("Simpan");
            modal.find("button.submit-delete").addClass("hide");
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
            modal.find("button.submit").html("Simpan");
            modal.find("input[type='text']").removeAttr("disabled");
            modal.find("button.cddwn").removeAttr("disabled");
            modal.find("button.submit").removeAttr("disabled");
            modal.find(".load").removeClass("hide");

            modal.find("input[name='user_id']").val(getaccount().id);

            //
            clearEmptyForm(modal);

            durationreminderday(form);

            var $URL = config.apps.URL_API + '/api/inventory/consumable/show?id='+id;
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


    //submit
    $('body').on('click', '#form-create button.submit', function(e)
    {
        e.preventDefault();
        $(this).parents('form').submit();
    
    });


    $('#form-create').submit(function(e)
    {
        e.preventDefault();
        var form = $(this),
        button = form.find('button.submit');
        
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
                    // console.log(n);
                    if( form.find('*[name="type"]').val() === 'new')
                    {
                        clearEmptyForm(form);
                    }
                    button.attr('role','off');
                    loadTable();
                    flagnotif("success", n.message);
                });
                $t.error(function(n)
                {
                    console.log(n);
                    var rsp = n.responseJSON;
                    if( n.status === 401)
                    {
                        form.find('*[name="'+rsp.focus+'"]').parent('.ar-content').append('<span class="error">'+rsp.message+'</span>');
                        form.find('*[name="'+rsp.focus+'"]').addClass('br-error');
                        button.attr('role','off');
                        form.find('*[name="'+rsp.focus+'"]').focus();
                        return;
                    }

                    if( n.status === 403)
                    {
                        button.attr('role','off');
                        flagnotif('error', rsp.message);
                        return
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
        modal = form.parents("#modal-inventory");

        var name = form.find('input[name="name"]'),
        code = form.find('input[name="code"]'),
        type = form.find('input[name="type_tools"]'),
        quantity = form.find('input[name="quantity"]'),
        expireddate = form.find('input[name="expired_date"]'),
        description = form.find('textarea[name="description"]'),
        expiredstatus = form.find('input[name="expired_status"]'),
        quantity_limit = form.find('*[name="quantity_limit"]'),
        button = form.find('button.submit');

        //check
        form.find('span.error').remove();
        form.find('.br-error').removeClass('br-error');

        //
        if( $.trim(name.val()).length < 3  || $.trim(code.val()) === '' || $.trim(type.val()) === '' || $.trim(quantity.val()) === '' || $.trim(expiredstatus.val()) === '' || $.trim(description.val()).length > 0 && $.trim(description.val()).length < 10 || $.trim(quantity_limit.val()) === '' || $.trim(expiredstatus.val()) === '1' && $.trim(expireddate.val()) === '' )
        {

            //name
            if( $.trim(name.val()).length < 3 )
            {
                name.parent('.ar-content').append('<span class="error">Isikan nama consumable sekurangnya 3 karakter</span>');
                name.addClass('br-error');
            }

            //code
            if( $.trim(code.val()) === '' )
            {
                code.parent('.ar-content').append('<span class="error">Isikan serial number</span>');
                code.addClass('br-error');
            }

            // type consumable
            if( $.trim(type.val()) === '')
            {
                type.parent('.ar-content').append('<span class="error">Harap pilih jenis consumable</span>');
                type.parent('.ar-content').find("button.btn").addClass('br-error');
            }

            // quantity
            if( $.trim(quantity.val()) === '')
            {
                quantity.parents('.ar-content').append('<span class="error">Harap isi stock</span>');
                quantity.addClass('br-error');
            }

            if( $.trim(quantity_limit.val()) === '')
            {
                quantity_limit.parents('.ar-content').append('<span class="error">Harap isi stock limit</span>');
                quantity_limit.addClass('br-error');
            }

            //tanggal perbaikan
            if( $.trim(expiredstatus.val()) === '' )
            {
                expiredstatus.parent('.ar-content').append('<span class="error">Pilih status expired</span>');
                expiredstatus.parent('.ar-content').find("button.btn").addClass('br-error');
            }

            if( $.trim(expiredstatus.val()) === '1' && $.trim(expireddate.val()) === '')
            {
                expireddate.parents('.ar-content').append('<span class="error">Isi expired date</span>');
                expireddate.addClass('br-error');
            }

            if( $.trim(description.val()).length > 0 && $.trim(description.val()).length < 10)
            {
                description.parents('.ar-content').append('<span class="error">Isikan deskripsi consumable sekurangnya 10 karakter</span>');
                description.addClass('br-error');
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
    $("#form-create input.empty").keyup(function(n)
    {
        // $(this).parents("form").submit();
        var form = $(this).parents("form");
        checkForm(form);
    })

    $("#form-create textarea.empty").keyup(function(n)
    {
        // $(this).parents("form").submit();
        var form = $(this).parents("form");
        checkForm(form);
    })


    //ASSESORIS
    $("#modal-inventory .area-list-label button").click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents(".area-list-label"),
        text_label = area.find('*[name="assesoris_label"]'),
        ul = area.find("ul");

        if( cmd.attr("role") === "off" && $.trim(text_label.val()) !== '' )
        {
            cmd.attr("role", "on");
            var li = '<li ><span>'+text_label.val()+'</span><a href="#" class="afalse" role="off"><i class="sli_icon-trash"></i></a></li>';
            ul.append(li);
            valuelistlabel(area)
            text_label.val('');
            cmd.attr("role", "off");
        }
    });


    $("body").on("click", "#modal-inventory .area-list-label li a", function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        area = cmd.parents(".area-list-label");

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            cmd.parent("li").remove();
            valuelistlabel(area)
            cmd.attr("role", "off");
        }
    });

    function valuelistlabel(w)
    {
        var area = w,
        text = area.find("*[name='assesoris']");

        var list = [];
        area.find("ul li").each(function()
        {
            list.push($(this).find("span").html());
        });

        var value = list.length === 0 ? '' : JSON.stringify(list);
        
        text.val(value);

    }

    // END ASSESORIS

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