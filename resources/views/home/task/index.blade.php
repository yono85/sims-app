@extends('home.index')

@section('content')
<div class="container-home w1024p">
    <div class="tables" aria-load="false">
        <div class="in-tables">

            <!-- head -->
            <div class="div head-tables">
                <div class="div clr-float">

                    <form action="/api/home/task/table" id="form-table" aria-temp="temp-table-task">


                        <button class="submit hide" role="off">submit</button>
                        <div class="fl-right w100px">

                            <div class="fl-right oarea-ddwn-hd oar-ddwn">
                                <button class="btn green btn-r cmd-modal-task" role="off" data-type="">
                                    <span class="ic fa flaticon2-plus"></span>
                                    <span>Create</span>
                                </button>
                            </div>

                            <div class="fl-right oarea-ddwn-hd oar-ddwn pd-r10 position-rt">
                                <button class="btn green btn-r cmd-ddwn-hd keep-ddwn-hd" role="off" data-type="">
                                    <span class="sli_icon-printer"></span>
                                </button>

                                <div class="ar-ddw oarea-ddwn-hd bottom right br-rds8 ctn-menu keep w-m-210">
                                    <div class="div">
                                        <ul>
                                            <li>
                                            <a href="#" class="cmd-download-pdf" role="off" title="Export to PDF">
                                                    <div class="div">
                                                        <span class="fsize14">Export PDF</span>
                                                        <span class="icr far fa-file-pdf"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="cmd-download-excel" role="off" title="Export to MS Excel">
                                                    <div class="div">
                                                        <span class="fsize14">Export Excel</span>
                                                        <span class="icr fas fa-file-excel"></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bts"></div>

                            <div class="fl-right oarea-ddwn-hd oar-ddwn ar-fil ar-ddwn-fix dot-notif l red  area-filter" aria-role="false">

                                <button class="btn blue btn-r btn-filter cmd-ddwn-hd keep-ddwn-hd" role="off" data-type="fix">
                                    <span class="ic fa flaticon2-down"></span>
                                    <span>Filter</span>
                                </button>

                                <div class="ar-ddw area-ddwn-hd bottom right br-rds8 ctn-filter keep w-m-270-r190">
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
                                                    <div class="ddwn area-ddwn keep area-employe" aria-head="false">
                                                        <button class="btn br-rds8 cddwn" role="off">
                                                            <label><span class="fsize14 color-black">Filter Karyawan</span></label>
                                                        </button>
                                                        <div class="ddwn-pg area-ddwn-page">
                                                            <div class="ddwn-header">
                                                                <div class="inhd">
                                                                    <button height="auto" type="button"></button>
                                                                    <input type="text" placeholder="Cari Karyawan" class="ddwn-tsrc">
                                                                </div>
                                                            </div>
                                                            <ul>
                                                                <!-- list -->
                                                            </ul>
                                                        </div>
                                                        <input type="hidden" class="value-dropdown" name="employe_selected" value="-1">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="div">
                                                    <div class="ddwn area-ddwn keep area-status" aria-head="false">
                                                        <button class="btn br-rds8 cddwn" role="off">
                                                            <label><span class="fsize14 color-black">Semua Status</span></label>
                                                        </button>
                                                        <div class="ddwn-pg area-ddwn-page">
                                                            <ul>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="-1" ><span>Semua Status</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="1" ><span>Progress</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="2" ><span>Hold</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="3" ><span>Done</span></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <input type="hidden" class="value-dropdown" name="status_selected" value="-1">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="div">
                                                    <div class="date-section w100p">
                                                        <div class="ar-dt w100p ">
                                                            <input type="text" name="dateAttendance" class="h100p w100p br-rds8 bg-color-none br-ou-none" id="dateAttendance" value="{{$monthRead}}" placeholder="">
                                                            <input type="hidden" name="ondate" value="{{$monthDate}}">
                                                            <span class="ic-abs-r sli_icon-calendar"></span>
                                                        </div>
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
                        <input type="hidden" name="position" value="">
                        <input type="hidden" name="date" value="{{$monthDate}}">
                        <input type="hidden" name="sort_name" value="desc">

                    </form>

                </div>
            </div>

            <!-- body -->
            <div class="body-tables">
                <div class="ar-body-table">

                    <div class="div">
                        <div class="div">
                            <div class="table-legend">
                                <div class="div clr-float">
                                    <div class="fl-right area-result">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="atable table-body">

                        </div>
                    </div>

                </div>
            </div>
    

            <!-- footer -->
            <div class="div foot-tables">
                <div class="div clr-float">
                    <div class="fl-left">
                        <span class="bts-dot">Total <b class="cpagetotal">0</b></span>
                        <span>Hal <b class="cpage">0</b> dari <b class="cpageoff">0</b></span>
                    </div>
                    <div class="fl-right">
                        <button class="br-rds4" disabled="disabled" role="off">
                            <span class="fa flaticon2-back-1"></span>
                        </button>
                        <button class="br-rds4" role="off" disabled="disabled">
                            <span class="fa flaticon2-arrow"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- CONTENT LIST TABLE -->
<div class="div hide" id="temp-table-task">
    <div class="tr" dataid="{id}">

        <div class="thr">
            <div class="div clr-float">
                <div class="spc fsize15">
                    {verify_status}
                    <!-- <span class="fa flaticon2-correct verify" title="Terverifikasi"></span> -->
                </div>
                <div class="spc">
                    <div class="role">
                        <ul>
                        {status}
                        </ul>
                    </div>
                </div>

                <div class="spcr wh-m-520">
                    <span class="label fa flaticon-calendar-with-a-clock-time-tools"></span>
                    <span class="date">{date}</span>
                </div>
                <div class="spcr wh-m-520">
                    <span class="ic label sli_icon-user-follow"></span>
                    <b class="up-txt">{user_name}</b>
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
                                    <ul class="">
                                        <li class=""><p class="fsize15">{label}</p></li>
                                    </ul>
                                </div>
                                <div class="div">
                                    <div class="div label">
                                        <span class="bubble">
                                            <span class="ic fa flaticon-notes" title="Catatan"></span>
                                            <span class="inbubble" title="{notes_title}">{notes}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="td-w180 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span class="label fsize9 up-txt">START</span>
                                    <div class="div">
                                        <span>{start_date}</span>
                                    </div>
                                </div>
                                <div class="div">
                                    <span class="label fsize9 up-txt">End</span>
                                    <div class="div">
                                        <span>{end_date}</span>
                                    </div>
                                </div>
                                <div class="div">
                                    <span class="label fsize9 up-txt">Done</span>
                                    <div class="div">
                                        <span>{done_date}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="td-w180 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span class="label fsize9 up-txt">Verifikator</span>
                                    <div class="div">
                                        <span>{verify_name}</span>
                                    </div>
                                </div>
                                <div class="div {verify_type_date}">
                                    <span class="label fsize9 up-txt">Date</span>
                                    <div class="div">
                                        <span>{verify_date}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="td-w130 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span class="label fsize9 up-txt">Divisi</span>
                                </div>
                                <div class="div">
                                    <span>{groups}</span>
                                </div>
                            </div>
                        </td>
                        <td class="td-center td-w70">
                            <div class="td-iner disvis">
                                <div class="div">
                                    <div class="dropdown dropleft" aria-role="{buttonddwnsts}">

                                        <button type="button" class="btn btn-primary nobr grey s11 main" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <span class="fas fa-ellipsis-v"></span>
                                        </button>

                                        <button type="button" class="btn btn-primary nobr grey s11 sec cmd-preview" data-toggle="" aria-haspopup="" aria-expanded="" role="off" data-widget="modal-create-task">
                                            <span class="sli_icon-eye"></span>
                                        </button>

                                        <div class="dropdown-menu" x-placement="left-start" style="position: absolute; transform: translate3d(-150px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">

                                            <a class="dropdown-item afalse cmd-modal color-orange cmd-sunting" href="#" role="off" data-widget="modal-create-task">
                                                <span>Sunting</span><span class="ic sli_icon-pencil"></span>
                                            </a>
                                            <div class="dropdown-divider"></div>

                                            <a class="dropdown-item color-red cmd-delete" href="#" role="off">
                                                <span>Hapus</span><span class="ic sli_icon-trash"></span>
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

<a href="#" class="cmd-convert-excel hide">
    Convert Excel
</a>
<div class="div" id="area-table-excel" style="position:fixed; z-index:-1; top:-100%; height:0px; overflow:hidden;"></div>

<!-- END CONTENT LIST TABLE -->
<!-- modal -->
@include('home.component.media')
<!-- end modal -->

<div class="prover-modal-view modal-new-view white hide" id="modal-task">
    <div class="ar-modal-rel overflow-yA">
        <div class="modal-home">

            <div class="insed-body h-full pdtb20">

                <div class="arinsed mdl-partner pd-lr-40 pos-rel m-pd-lr25">

                    <div class="load txt-center pd-t10">
                        <img src="/assets/svg/loading.blue.svg" alt="">
                    </div>

                    <div class="div header-box">
                        <b class="title">Buat Task</b>
                        <a href="#" class="close afalse" role="off">
                            <span class="fa flaticon2-cross"></span>
                        </a>
                    </div>
                    <form action="/api/home/task/create" id="form-create-newtask" >

                        <ul class="artable">

                            <li class="list">
                                <div class="div">
                                    <table>
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Label Task</b>
                                                    </div>
                                                    <div class="div label">Isikan Label Task sekurangnya 5 karakter.
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                                
                                                <div class="div hide ws-m-disb-620">
                                                    <b class="up-txt fsize9">LABEL TASK</b>
                                                </div>

                                                <div class="div ar-content">
                                                    <input type="text" class="w100p form-control empty" placeholder="Label Task" name="label">
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
                                                        <b>Tanggal</b>
                                                    </div>
                                                    <div class="div label">Tentukan tanggal dimulai dan perkiraan tanggal selesai.
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                                <div class="div hide ws-m-disb-620">
                                                    <b class="up-txt fsize9">TANGGAL TASK</b>
                                                </div>
                                                <div class="div ar-content">
                                                    <div class="ic-r5-f">
                                                        <span class="sli_icon-calendar"></span>
                                                    </div>
                                                    <input type="text" class="w100p form-control background-trf position-rt inputFalseAll empty" placeholder="Tanggal mulai" name="dateStart" id="dateStart">
                                                </div>
                                                <div class="div bts-in"></div>
                                                <div class="div ar-content">
                                                    <input type="text" name="dateClose" class="w100p form-control background-trf position-rt inputFalseAll empty" id="dateClose" placeholder="Tanggal selesai">
                                                    <div class="ic-r5-f">
                                                        <span class="sli_icon-calendar"></span>
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
                                                        <b>Verifikator</b>
                                                    </div>
                                                    <div class="div label">Tentukan Verifikator Task Anda.
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                            <div class="div hide ws-m-disb-620">
                                                    <b class="up-txt fsize9">VERIFIKATOR</b>
                                                </div>
                                                <div class="ddwn area-ddwn ar-content keep area-verify" aria-head="false">

                                                <button class="btn br-rds8 cddwn fcs" role="off">
                                                    <label><span class="fsize14 color-black">Pilih Verifikator</span></label>
                                                </button>

                                                <div class="ddwn-pg area-ddwn-page">
                                                    <div class="ddwn-header">
                                                            <div class="inhd">
                                                                <button height="auto" type="button"></button>
                                                                <input type="text" placeholder="Cari Verifikator" class="ddwn-tsrc">
                                                            </div>
                                                        </div>
                                                    <ul>
                                                        <!-- list -->
                                                        <!-- <li aria-selected="false">
                                                            <button role="off" dataid="1" data-modal="" data-modal-label="" data-get=""><span>Ben Basyar</span></button>
                                                        </li> -->

                                                    </ul>
                                                </div>

                                                <input type="hidden" class="value-dropdown zero" name="verify_selected" value="0">

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
                                                        <b>Status Task</b>
                                                    </div>
                                                    <div class="div label">Tentukan Status Task
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                                <div class="div hide ws-m-disb-620">
                                                    <b class="up-txt fsize9">STATUS TASK</b>
                                                </div>
                                                <div class="ddwn area-ddwn ar-content keep area-progress">

                                                    <button class="btn br-rds8 cddwn fcs" role="off">
                                                        <label><span class="fsize14 color-black">Pilih Status</span></label>
                                                    </button>

                                                    <div class="ddwn-pg area-ddwn-page">
                                                        <ul>
                                                            <!-- list -->
                                                            <li aria-selected="false">
                                                                <button role="off" dataid="1" data-modal="" data-modal-label="" data-get=""><span>On Progress</span></button>
                                                            </li>
                                                            <li aria-selected="false">
                                                                <button role="off" dataid="2" data-modal="" data-modal-label="" data-get=""><span>Hold</span></button>
                                                            </li>
                                                            <li aria-selected="false">
                                                                <button role="off" dataid="3" data-modal="" data-modal-label="" data-get=""><span>Done</span></button>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <input type="hidden" class="value-dropdown min1" name="status_selected" value="-1">

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
                                                    <b>Detail</b>
                                                </div>
                                                <div class="div">
                                                    <span class="label">Isikan informasi detail Task dengan rinci.</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                            <td colspan="2" class="vtop">
                                            <div class="div hide ws-m-disb-620">
                                                    <b class="up-txt fsize9">URAIAN TASK</b>
                                                </div>
                                                <div class="div ar-content">
                                                    <textarea name="editor" class="form-control h150 empty" maxlength="1500" id="editor" ></textarea>
                                                </div>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </li>


                            <li class="list">
                                <div class="div clr-float">
                                    <button class="btn blue is-loading fl-right w180 br-rds18 h42 submit" role="off">Buat Task</button>
                                </div>
                            </li>

                        </ul>
                        <div class="hide" id="data-editor"></div>
                        <input type="hidden" name="type" value="">
                        <input type="hidden" name="user_id" value="">
                        <input type="hidden" name="task_id" value="">
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

<script src="{{$URI}}/assets/js/cdn/tableToExcel.js"></script>
@endsection

@section('script')
<script>


$('#form-table').find('input[name="divisi"]').val(getaccount().employe.divisi.id);
$('#form-table').find('input[name="position"]').val(getaccount().employe.level.position);

// GET EMPLOYE
function selectedEmployeList()
{
    if( getaccount().employe.level.position === 'false' )
    {
        $('body').find('.area-ddwn.area-employe button.cddwn label span').html(getaccount().employe.name);
        $('body').find('.area-ddwn.area-employe button.cddwn').attr('disabled','disabled');
        $('body').find('.area-ddwn.area-employe .value-dropdown').val(getaccount().id);
        
        return;
    }

    //
    var $field = "compid=" + getaccount().config.company_id;
    var $URL = config.apps.URL_API + '/api/home/data/employe/list?uid=true&' + $field;

    var $t = FormSending("","GET","key","",$URL);
    $t.success(function(n)
    {
        var li = '<li aria-selected="false"><button role="off"  dataid="-1"><span>Semua Karyawan</span></button></li>';
        $.each(n.response, function(i, item)
        {
            li += '<li aria-selected="false">';
                li += '<button role="off"  dataid="'+item.user_id+'">';
                    li += '<i class="ic sli_icon-user fsize10"></i><span> '+item.name+'</span>';
                li += '</button>';
            li += '</li>';
        });
        $('body').find('.area-ddwn.area-employe ul').html(li);

    });
    $t.error(function(n)
    {
        console.log(n);
    });
}

selectedEmployeList();


//TEMP TABLE 
function createTempTable(e,w)
{
    var rsp= e,
    temp = w;

    // console.log(e);
    var res = rsp.result;
    var li_res = "";
    $.each(res, function(i,item)
    {
        li_res += '<span class="up-txt">'+i+': <b>'+item+'</b></span>';
    });
    $(".table-legend .area-result").html(li_res);

    var list = '';
    $.each(rsp.list,function(i,item)
    {

        var listx = temp;
        listx = listx.replace('{date}', item.date);
        listx = listx.replace('{user_name}', item.name);
        listx = listx.replace('{label}', item.label);
        listx = listx.replace('{notes}', item.detail);
        listx = listx.replace('{start_date}', item.start_date);
        listx = listx.replace('{end_date}', item.end_date);
        listx = listx.replace('{done_date}', item.done_date);
        listx = listx.replace('{groups}', item.group);
        listx = listx.replace('{verify_type_date}', (item.verif_type === "false" ? "hide" : ""));
        listx = listx.replace('{buttonddwnsts}', (item.status === 3 ? 'sec' : ( getaccount().id !== item.user_id ? 'sec' : 'main' ) ) );
        listx = listx.replace('{verify_status}', (item.verif_status === 0 ? '' : '<span class="fa flaticon2-correct verify" title="Terverifikasi"></span>'));
        listx = listx.replace('{status}', (item.status === 1 ? '<li class="progress fsize9"><span>PROGRESS</span></li>' : ( item.status === 2 ? '<li class="hold fsize9"><span>HOLD</span></li>' : '<li class="done fsize9"><span>DONE</span></li>') ) );
        listx = listx.replace('{verify_date}', item.verif_date);
        listx = listx.replace('{verify_name}', item.verif_name);
        listx = listx.replace('{id}', item.id);

        list += listx;
    });

    return list;
}

//SELECTED 
function getVerifyUser()
{
    var modal = $("body").find("#modal-task");

    var $URL = config.apps.URL_API + '/api/home/data/employe/list?type=select&field=level&id=[10001,10002]&uid=true';
    var $t = FormSending("","GET","key","",$URL);
    $t.success(function(n)
    {
        // console.log(n);
        var li = "";
        $.each(n.response, function(i,item)
        {
            li += '<li aria-selected="false"><button role="off" dataid="'+item.user_id+'" data-modal="" data-modal-label="" data-get=""><span>'+item.name+'</span></button></li>';
        });

        if( getaccount().employe.level.position === "false")
        {
            li += '<li aria-selected="false"><button role="off" dataid="'+getaccount().id+'" data-modal="" data-modal-label="" data-get=""><span>'+getaccount().employe.name+'</span></button></li>'
        }

        modal.find(".area-verify ul").html(li);
    });
    $t.error(function(n)
    {
        console.log(n);
    });
}



$(document).ready(function()
{
    // console.log(getaccount());
    //
    $('body').find('.header li.fl-left .cmd-modal-header .lbl-name').html('Task');
    $('body').find('.header li.fl-left .cmd-modal-header').removeClass('hide');

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


    $('body').on('click', '.cmd-cls-src', function(e)
    {
        clsHdForm(e,$(this));
    }); 


    $('#dateAttendance').datetimepicker({
        useCurrent: false,
        format: 'MMMM YYYY',
        date: new Date( parseFloat( '{{$thisDate}}') )
    });

    $("#dateAttendance").on("dp.change", function (e)
    {
        var d = new Date(e.date);
        var month = d.getMonth() + 1;
        var year = d.getFullYear();

        month = month < 10 ? '0' + month : month;
        var thisDate = year + '-' + month;

        var form = $('#dateAttendance').parents('form');
        form.find('input[name="date"]').val( thisDate );

        console.log(thisDate);
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

    $('body').on('click', '.cmd-ddwn-hd', function(e)
    {
        // e.preventDefault();
        showDdwnHd(e,$(this));
        return false;
    })


    $('body').on('click', '#form-table button.submit', function(e)
    {
        e.preventDefault();
        var cmd = $(this);
        if(cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            loadTable();
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

        form.find('input[name="ondate"]').val(form.find("input[name='date']").val());
        
        loadTable();
        area.find('button.cmd-ddwn-hd').click();
    }

    
    function loadTable()
    {
        var form = $('body').find('#form-table');
        exeTable(form);
    }
    
    //
    loadTable();


    // FUNCTION CREATE NEW TASK

    // CKEDITOR
    var editorElement = CKEDITOR.document.getById( 'editor' );
	var dataEditor = $("body").find("#data-editor").html();
	editorElement.setHtml(dataEditor);
    CKEDITOR.replace( 'editor', {
        removeButtons: 'Save,Templates,Source,NewPage,ExportPdf,Preview,Print,Copy,Paste,PasteText,PasteFromWord,Cut,Undo,Redo,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,CopyFormatting,RemoveFormat,JustifyLeft,JustifyCenter,JustifyRight,JustifyBlock,BidiLtr,BidiRtl,Language,Anchor,Image,Flash,SpecialChar,PageBreak,Iframe,About,Maximize,ShowBlocks,TextColor,BGColor,Styles,Format,Font,FontSize',
        removePlugins: 'elementspath'
    });

    // CONFIG DATETIMEPICKER
    $('#dateStart').datetimepicker({
        useCurrent: false,
        format: 'DD/MM/YYYY'
    });
    
    $('#dateClose').datetimepicker({
        useCurrent: false, //Important! See issue #1075
        format: 'DD/MM/YYYY'
    });

    $("#dateStart").on("dp.change", function (e) {
        $('#dateClose').data("DateTimePicker").minDate(e.date);
        var form = $('#dateStart').parents('form');
        if( $('#dateStart').val() !== '' )
        {
            checkFormCreate(form);
        }
    });

    $("#dateClose").on("dp.change", function (e) {
        $('#dateStart').data("DateTimePicker").maxDate(e.date);
        var form = $('#dateClose').parents('form');
        if( $('#dateClose').val() !== '' )
        {
            checkFormCreate(form);
        }
    });


    $('body').on('click', '#form-create-newtask button.submit', function(e)
    {
        e.preventDefault();
        $(this).parents('form').submit();
    });


    $('body').on('submit', '#form-create-newtask', function(e)
    {
        e.preventDefault();
        var form = $(this),
        modal = form.parents("#modal-task"),
        button = form.find('button.submit');
        
        if( button.attr('role') === 'off' )
        {
            button.attr('role', 'on');
            
            checkFormCreate(form);
            
            if( statusSend === true)
            {
                for (instance in CKEDITOR.instances) 
                {
                    CKEDITOR.instances[instance].updateElement();
                }

        
                var $URL = config.apps.URL_API + form.attr("action");
                var $t = FormSending(form,"POST","key","form",$URL);
                $t.success(function(n)
                {

                    // console.log(n);
                    if( form.find("input[name='type']").val() === "new" )
                    {
                        button.attr('role','off');
                        clearFormTask(form);
                        loadTable();
                        flagnotif("success",n.message);
                        return;
                    }

                    //sunting;
                    modal.find("a.close").click();
                    button.attr('role','off');
                    loadTable();
                    flagnotif("success",n.message);

                });
                $t.error(function(n)
                {
                    console.log(n);
                    button.attr('role','off');
                });
            }
        }

        return false;
    });

    var statusSend = false;

    function checkFormCreate(el)
    {
        var form = el,
        label = form.find('input[name="label"]'),
        dateClose = form.find('input[name="dateClose"]'),
        dateStart = form.find('input[name="dateStart"]'),
        verify = form.find('input[name="verify_selected"]'),
        detail = CKEDITOR.instances.editor.getData(),
        vdetail = form.find('textarea[name="editor"]'),
        status = form.find('input[name="status_selected"]'),
        button = form.find('button.submit');


        //ckeditor
        var detail1 = CKEDITOR.instances.editor.document.getBody().getChild(0).getText() ;
        var detail1 = detail1.replace(/ +(?= )/g,'');


        // console.log(form);
        //check
        form.find('span.error').remove();
        form.find('.br-error').removeClass('br-error');

        //
        if( $.trim(label.val()).length < 5 || dateStart.val() === '' || dateClose.val() === '' || verify.val() === '0' || $.trim(detail1).length === 0 || status.val() === '-1')
        {
            if( $.trim(label.val()).length < 5 )
            {
                label.parent('.ar-content').append('<span class="error">Harap isi sekurangnya 5 karakter</span>');
                label.addClass('br-error');
            }

            if( dateStart.val() === '' )
            {
                dateStart.parent('.ar-content').append('<span class="error">Tentukan tanggal mulai</span>');
                dateStart.addClass('br-error');
            }

            if( dateClose.val() === '' )
            {
                dateClose.parent('.ar-content').append('<span class="error">Tentukan tanggal selesai</span>');
                dateClose.addClass('br-error');
            }

            if( verify.val() === '0' )
            {
                verify.parent('.ar-content').append('<span class="error">Pilih verifikator</span>');
                verify.parent('.ar-content').find('button.cddwn').addClass('br-error');
            }


            if( $.trim(detail1).length === 0 )
            {
                vdetail.parent('.ar-content').append('<span class="error">Harap isikan detail task</span>');
                vdetail.parent('.ar-content').find('#cke_editor').addClass('br-error');
            }

            if( status.val() === '-1')
            {
                status.parent('.ar-content').append('<span class="error">Tentukan status Task</span>');
                status.parent('.ar-content').find('button.cddwn').addClass('br-error');
            }

            button.attr('role','off');
            statusSend = false;
            return false;
        }
        else
        {
            statusSend = true;
        }  
    }

    function clearFormTask(e)
    {
        var form = e;

        form.find(".empty").val("");
        form.find(".zero").val("0");
        form.find(".min1").val("-1");
        form.find(".area-verify").find("button.cddwn label span").html("Pilih Verifikator");
        form.find(".area-progress").find("button.cddwn label span").html("Pilih Status");
        form.find(".ddwn-pg li").attr("aria-selected", "false");
        CKEDITOR.instances.editor.setData('');
        form.find("span.error").remove();
        form.find('.br-error').removeClass('br-error');
    }

    //CHECK FROM IN SINGLE ELEMENT
    $('body').on('keyup', '#form-create-newtask input[name="label"]', function()
    {
        var form = $(this).parents('form');

        checkFormCreate(form);
    });


    // DETECT KEYUP CKEDITOR
    CKEDITOR.instances.editor.on('key', function(e) {
        // var self = this;
        var el = $('body').find('#form-create-newtask textarea[name="editor"]');
        el.parent('.ar-content').find('span.error').remove();
        el.parent('.ar-content').find('.br-error').removeClass('br-error');
        
        // setTimeout(function()
        // {
            
            // checkFormCreate(form);
            // console.log(el.val());

        // }, 10);
    });


    //comp modal task
    $("body").find("#modal-task input[name='user_id']").val(getaccount().id);
    
    // SHOW MODAL TASK
    //show modal task
    $(".cmd-modal-task").click(function(e)
    {
        var cmd = $(this),
        modal = $("body").find("#modal-task"),
        form = modal.find("form");
        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            modal.find("input[name='type']").val("new");
            modal.find(".title").html("Buat Task");
            //
            getVerifyUser();
            //
            modal.find("button.submit").html("Buat Task");
            modal.find("input[type='text']").removeAttr("disabled");
            modal.find("button.cddwn").removeAttr("disabled");
            modal.find("button.submit").removeAttr("disabled");
            CKEDITOR.instances.editor.setReadOnly(false);

            //
            modal.removeClass("hide");
            modal.find(".load").addClass("hide");
            cmd.attr("role", "off");
        }
    });

    //
    $("body").on("click", ".cmd-sunting", function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        id = cmd.parents(".tr").attr("dataid"),
        modal = $("body").find("#modal-task"),
        form = modal.find("form");
        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            modal.find("input[name='type']").val("edit");
            modal.find(".title").html("Sunting Task");
            modal.find(".load").removeClass("hide");

            //
            getVerifyUser();

            //
            modal.removeClass("hide");

            //
            var $URL = config.apps.URL_API + "/api/home/task/view?id="+id;
            var $t = FormSending("","GET","key","",$URL);
            $t.success(function(n)
            {
                // console.log(n);
                var rsp = n.response;
                modal.find("input[name='task_id']").val(rsp.id);
                modal.find("input[name='label']").val(rsp.label);
                modal.find("input[name='dateStart']").val(rsp.start_date);
                modal.find("input[name='dateClose']").val(rsp.end_date);

                var labelverify = modal.find(".area-verify li button[dataid='"+rsp.verify_id+"']");
                labelverify.parent("li").attr("aria-selected", "true");
                modal.find(".area-verify button label span").html(labelverify.find("span").html());
                modal.find(".area-verify input.value-dropdown").val(rsp.verify_id);

                var labelprogress = modal.find(".area-progress li button[dataid='"+rsp.progress+"']");
                labelprogress.parent("li").attr("aria-selected", "true");
                modal.find(".area-progress button label span").html(labelprogress.find("span").html());
                modal.find(".area-progress input.value-dropdown").val(rsp.progress);

                CKEDITOR.instances.editor.setData(rsp.detail);

                //
                modal.find("button.submit").html("Update Task");

                //
                if( rsp.progress === 3 )
                {
                    modal.find("input[type='text']").attr("disabled", "disabled");
                    modal.find("button.cddwn").attr("disabled", "disabled");
                    modal.find("button.submit").attr("disabled", "disabled");
                    CKEDITOR.instances.editor.setReadOnly(true);
                }
                else
                {
                    modal.find("input[type='text']").removeAttr("disabled");
                    modal.find("button.cddwn").removeAttr("disabled");
                    modal.find("button.submit").removeAttr("disabled");
                    CKEDITOR.instances.editor.setReadOnly(false);
                }
                modal.find(".load").addClass("hide");
                cmd.attr("role", "off");
            });
            $t.error(function(n)
            {
                console.log(n);
                cmd.attr("role", "off");
            });
            
            
            
        }
    });

    $("body").on("click", ".cmd-preview", function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        id = cmd.parents(".tr").attr("dataid"),
        modal = $("body").find("#modal-task"),
        form = modal.find("form");
        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            modal.find("input[name='type']").val("edit");
            modal.find(".title").html("Task");
            modal.find(".load").removeClass("hide");

            //
            getVerifyUser();

            //
            modal.removeClass("hide");

            //
            var $URL = config.apps.URL_API + "/api/home/task/view?id="+id;
            var $t = FormSending("","GET","key","",$URL);
            $t.success(function(n)
            {
                // console.log(n);
                var rsp = n.response;
                modal.find("input[name='task_id']").val(rsp.id);
                modal.find("input[name='label']").val(rsp.label);
                modal.find("input[name='dateStart']").val(rsp.start_date);
                modal.find("input[name='dateClose']").val(rsp.end_date);

                var labelverify = modal.find(".area-verify li button[dataid='"+rsp.verify_id+"']");
                labelverify.parent("li").attr("aria-selected", "true");
                modal.find(".area-verify button label span").html(labelverify.find("span").html());
                modal.find(".area-verify input.value-dropdown").val(rsp.verify_id);

                var labelprogress = modal.find(".area-progress li button[dataid='"+rsp.progress+"']");
                labelprogress.parent("li").attr("aria-selected", "true");
                modal.find(".area-progress button label span").html(labelprogress.find("span").html());
                modal.find(".area-progress input.value-dropdown").val(rsp.progress);

                CKEDITOR.instances.editor.setData(rsp.detail);

                //
                modal.find("button.submit").html("Update Task");

                //

                modal.find("input[type='text']").attr("disabled", "disabled");
                modal.find("button.cddwn").attr("disabled", "disabled");
                modal.find("button.submit").attr("disabled", "disabled");
                CKEDITOR.instances.editor.setReadOnly(true);

                modal.find(".load").addClass("hide");
                cmd.attr("role", "off");
            });
            $t.error(function(n)
            {
                console.log(n);
                cmd.attr("role", "off");
            });
            
            
            
        }
    });

    //CLOSE MODAL TASK
    $("#modal-task a.close").click(function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        modal = cmd.parents("#modal-task"),
        form = modal.find("form");

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            cmd.parents("#modal-task").addClass("hide");
            clearFormTask(form);
            cmd.attr("role", "off");
        }
    })



    //EXPORT

    //EXCEL
    $('.cmd-download-excel').click(function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        form = cmd.parents('form');

        if(cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            loadprocess('Harap tunggu, sedang process export data....');

            $URL = config.apps.URL_API + '/api/home/export/task/excel?date=' + form.find('input[name="date"]').val() + '&status=' + form.find("input[name='status_selected']").val() + '&employe=' + form.find("input[name='employe_selected']").val();

            //
            var $t = FormSending('','GET','key','',$URL);
            $t.success(function(n)
            {
                console.log(n.response);
                var rsp = n.response;

                var list = '<table class="table-export"><tbody>';
                list += '<tr><td colspan="11" data-f-bold="true"><b>Report Task Desember 2021</b></td></tr>';
                list += '<tr><td>No</td><td>Nama</td><td>Level</td><td>Label Task</td><td>Rincian</td><td>Tgl Mulai</td><td>Tgl Selesai</td><td>Verifikator</td><td>Tgl Verifikasi</td><td>Status</td><td>Tgl Selesai</td></tr>';

                $.each(rsp.list, function(i,item)
                {
                    list += '<tr>';
                        list += '<td data-b-a-s="solid" class="br">'+(i+1)+'</td>';
                        list += '<td data-b-a-s="solid" class="br">'+item.name+'</td>';
                        list += '<td data-b-a-s="solid" class="br">'+item.level+'</td>';
                        list += '<td data-b-a-s="solid" class="br">'+item.label+'</td>';
                        list += '<td data-b-a-s="solid" class="br">'+item.text+'</td>';
                        list += '<td data-b-a-s="solid" class="br">'+item.start+'</td>';
                        list += '<td data-b-a-s="solid" class="br">'+item.end+'</td>';
                        list += '<td data-b-a-s="solid" class="br">'+item.verif_name+'</td>';
                        list += '<td data-b-a-s="solid" class="br">'+item.verif_date+'</td>';
                        list += '<td data-b-a-s="solid" class="br">'+(item.progress === 1 ? "Progress" : ( item.progress === 2 ? "Hold" : "Done") )+'</td>';
                        list += '<td data-b-a-s="solid" class="br">'+item.done_date+'</td>';
                    list += '</tr>';


                });

                list += '</tbody></table>';

                $("body").find("#area-table-excel").html(list);


                hideloadprocess();
                convertExcel(rsp.title);

                // exporttoexcel(n);
                cmd.attr('role', 'off');
            });
            $t.error(function(n)
            {
                
                // console.log(n.responseJSON);
                hideloadprocess();
                cmd.attr('role', 'off');
                flagnotif('error',n.responseJSON.message);
            })

        }
    });

    // 
    $(".cmd-convert-excel").click(function(e)
    {
        e.preventDefault();
        convertExcel("title.xlsx");
        var area = $("body").find("#area-table-excel"),
        table = $("body").find("#area-table-excel table")[0];

        // var count = document.querySelectorAll("table").length;
        console.log(table);
    });
    
    function convertExcel(w)
    {
        var table = $("body").find("#area-table-excel table")[0];

        // let table = document.getElementsByTagName("table");
        TableToExcel.convert(table, { // html code may contain multiple tables so here we are refering to 1st table tag
           name: w, // fileName you could use any name
           sheet: {
              name: 'Sheet 1' // sheetName
           }
        });
    }

    // HIDE SPLASH
    hideSplash();


return false;
});

</script>
@endsection