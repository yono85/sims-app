@extends('home.index')

@section('content')

<a href="#" class="cmd-convert-excel hide">Convert Excel</a>
<div class="div area-table-attendance" id="area-table-excel" style="position:fixed; z-index:-1; top:-100%; height:0px; overflow:hidden">
    <table id="simpleTable1">
    </table>
</div>

<div class="container-home w1024p">
    <div class="tables area-tables" aria-load="false">
        <div class="in-tables">

            <!-- head -->
            <div class="div head-tables">
                <div class="div clr-float">

                    <form action="/api/home/absen/report/table" id="form-table" aria-temp="temp-table-employe">


                        <button class="submit hide" role="off">submit</button>
                        <div class="fl-right w100px">

                            <div class="fl-right oarea-ddwn-hd oar-ddwn">
                                <button class="btn green btn-r cmd-download" role="off" title="Export to Excel">
                                    <span class="ic fas fa-file-excel"></span>
                                    <span>Export</span>
                                </button>
                            </div>

                            <div class="bts"></div>

                            <div class="fl-right oarea-ddwn-hd oar-ddwn  area-filter">
                                <div class="ar-dt">
                                    <input type="text" name="dateAttendance" class="inputFalseAll" id="dateAttendance" value="" placeholder="{{$monthRead}}">
                                    <input type="hidden" name="ondate" value="{{$monthDate}}">
                                    <button class="blue no-br cmd-filter is-loading" role="off" disabled="disabled">
                                        <span class="flaticon2-circular-arrow"></span>
                                    </button>
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

                        <input type="hidden" name="monthdate" value="">
                        <input type="hidden" name="position" value="">
                        <input type="hidden" name="date" value="{{$monthDate}}">
                        <input type="hidden" name="paging" value="1">
                        <input type="hidden" name="sort_name" value="asc">

                    </form>

                </div>
            </div>

            <!-- body -->
            <div class="body-tables">
                <div class="ar-body-table">

                    <div class="div wh-m-520">
                        <div class="atable table-header">
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
                                            <td class="td-w360">
                                                <div class="td-iner">
                                                    <span class="ic far fa-address-card"></span>
                                                    <span>STATUS</span>
                                                </div>
                                            </td>
                                            <td class="td-center td-w90">
                                                <div class="td-iner">
                                                    <span>TOTAL</span>
                                                </div>
                                            </td>
                                            <td class="td-center td-w60">
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

                            <!-- <div class="tr">

                                <div class="thr">
                                    <div class="div clr-float">
                                        <div class="spc">
                                            <div class="role">
                                                <ul>
                                                    <li  class="progress">
                                                        <span>PROGRESS</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="spcr wh-m-520">
                                            <span class="label fa flaticon-calendar-with-a-clock-time-tools"></span>
                                            <span class="date">26/08/2021</span>
                                        </div>
                                        <div class="spcr wh-m-520">
                                            <span class="ic label sli_icon-user-follow"></span>
                                            <b class="up-txt">Yono</b>
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
                                                                <li class=""><p class="fsize15">Membuat formula untuk produk magastrol</p></li>
                                                            </ul>
                                                        </div>
                                                        <div class="div">
                                                            <div class="div label">
                                                                <span class="bubble">
                                                                    <span class="ic fa flaticon-notes" title="Catatan"></span>
                                                                    <span class="inbubble" title="dfsdfsdf">Notes</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="td-w180 wh-m-520">
                                                    <div class="td-iner">
                                                        <div class="div">
                                                            <span>
                                                                <span class="label">Level:</span>
                                                                <b class="selection-search">Rumit</b>
                                                            </span>
                                                        </div>
                                                        <div class="div">
                                                            <span class="label">Durasi:</span>
                                                            <b class="selection-search">1 Hari</b>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="td-w180 wh-m-520">
                                                    <div class="td-iner">
                                                        <div class="div">
                                                            <span class="label">To:</span>
                                                            <span>
                                                                <b>Yono Cahyono</b>
                                                            </span>
                                                        </div>
                                                        <div class="div">
                                                            <span class="label">Tgl:</span>
                                                            <span>
                                                                <b>--</b>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="td-center td-w70">
                                                    <div class="td-iner disvis">
                                                        <div class="div">
                                                            <div class="dropdown dropleft">
                                                                <button type="button" class="btn btn-primary nobr grey s11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                    <span class="fas fa-ellipsis-v"></span>
                                                                </button>
                                                                <div class="dropdown-menu" x-placement="left-start" style="position: absolute; transform: translate3d(-150px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                    <a class="dropdown-item afalse cmd-modal" href="#" data-toggle="modal" data-target="#modalprogress">
                                                                        <span>Progress</span><span class="ic fas fa-bookmark"></span>
                                                                    </a>
                                                                    <a class="dropdown-item afalse cmd-modal" href="#" data-toggle="modal" data-target="#modaltaging">
                                                                        <span>Tag</span><span class="ic sli_icon-tag"></span>
                                                                    </a>
                                                                    <a class="dropdown-item afalse cmd-modal" href="#" data-toggle="modal" data-target="#modalnote">
                                                                        <span>Catatan</span><span class="ic sli_icon-note"></span>
                                                                    </a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item afalse cmd-modal color-orange cmd-vcustomers" href="#" data-togglex="modal" data-type="edit" data-open="page" data-target="#modalcustomers" data-token="bac5bd52333517ad35c57efd8be98625" role="off">
                                                                        <span>Sunting</span><span class="ic sli_icon-pencil"></span>
                                                                    </a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item color-green" href="http://localhost:8003/dashboard/customers/bac5bd52333517ad35c57efd8be98625">
                                                                        <span>Detail</span><span class="ic sli_icon-info"></span>
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

                            </div> -->

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

<!-- CONTENT LIST TABLE -->
<div class="div hide" id="temp-table-employe">
    <div class="tr">

        <div class="thr">
            <div class="div clr-float">

                <div class="spc wh-m-520 fsize12">
                    <span class="label fa flaticon-calendar-with-a-clock-time-tools"></span>
                    <span class="date">{date}</span>
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
                                        <span class="ic fsize10 {gender}" title="{genderlabel}"></span><b class="name_label">{name}</b>
                                    </div>
                                    <div class="div group_label">
                                        <span class="ic flaticon-suitcase fsize9"></span>
                                        <span class="label up-txt fsize9">{groups}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="td-w360 wh-m-520">
                            <!-- <div class="td-iner">
                                <div class="div">
                                    <table class="text-center fsize11">
                                        <tbody> -->
                                            <!-- <tr> -->
                                                {list_status}
                                                <!-- <td class="wd-abs-sts">
                                                    <div class="div">
                                                        <div class="div label">Sakit</div>
                                                        <div class="div">
                                                            <b>0</b>
                                                        </div>
                                                    </div>
                                                </td> -->
                                                <!-- <td class="wd-abs-sts sling">
                                                    <div class="div">
                                                        <div class="div label">Ijin</div>
                                                        <div class="div">
                                                            <b>0</b>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="wd-abs-sts">
                                                    <div class="div">
                                                        <div class="div label">Cuti</div>
                                                        <div class="div">
                                                            <b>0</b>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="wd-abs-sts sling">
                                                    <div class="div">
                                                        <div class="div label">LA</div>
                                                        <div class="div">
                                                            <b>0</b>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="wd-abs-sts">
                                                    <div class="div">
                                                        <div class="div label">LAD</div>
                                                        <div class="div">
                                                            <b>0</b>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="wd-abs-sts sling">
                                                    <div class="div">
                                                        <div class="div label">Sakit</div>
                                                        <div class="div">
                                                            <b>0</b>
                                                        </div>
                                                    </div>
                                                </td> -->
                                            <!-- </tr> -->
                                        <!-- </tbody>
                                    </table>
                                </div>
                            </div> -->
                        </td>
                        <td class="td-center td-w90">
                            <div class="td-iner disvis">
                            <!-- <span><b>{total_time_h}</b></span><span class="label">h</span> -->
                                <span><b>{total_time_j}</b></span><span class="label">j</span>
                                <span><b>{total_time_m}</b></span><span class="label">m</span>
                            </div>
                        </td>

                        <td class="td-center td-w60">
                            <div class="td-iner disvis">
                                <div class="div">
                                    <button type="button" class="btn btn-primary nobr grey s11 cmd-prevAbsen blue is-loading" data-modal="viewSingleAbsen" role="off" dataid="{id}"><span class="sli_icon-eye"></span></button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

<!-- TABLE EXPORT -->


<!-- modal -->
@include('home.component.media')
<!-- end modal -->

<!-- <div class="prover-modal-view modal-new-view white">
    <div class="ar-modal-rel overflow-yA">
        <div class="modal-home">

            <div class="insed-body h-full pdtb20">

                <div class="arinsed mdl-partner pdlr40">

                    <div class="div header-box">
                        <b>Absensi</b>
                        <a href="#" class="close afalse" role="off">
                            <span class="fa flaticon2-cross"></span>
                        </a>
                    </div>
                        <ul class="artable">

                            <li class="list pd-b0"  style="padding-bottom:0px !important">
                                <div class="div">
                                    <table class="w100p">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="div clr-float">
                                                        <div class="fl-left">
                                                            <div class="fl-left">
                                                                <div class="img-prof"></div>
                                                            </div>
                                                            <div class="fl-left">
                                                                <div class="inf-prof">
                                                                    <div class="div"><b>Name</b></div>
                                                                    <div class="div label">Divisi</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fl-right txt-right">
                                                            <div class="div">
                                                                <span>Nopember 2021</span>
                                                            </div>
                                                            <div class="div">
                                                                <span class="label">Bulan</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="div bts-br mg-b0"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>

                            <li class="list" style="padding-bottom:0px !important">
                                <div class="div">
                                    <table class="w100p">
                                        

                                        <tr>
                                            <td>
                                                <div class="div pd-t25">
                                                    <div class="div clr-float txt-center fsize12">
                                                        <div class="col-tgl dis-inl-block w-calc8">
                                                            <div class="div fsize10 label">TOTAL JAM</div>
                                                            <div class="div">0</div>
                                                        </div>
                                                        <div class="col-tgl dis-inl-block w-calc8">
                                                            <div class="div fsize10 label">SAKIT</div>
                                                            <div class="div">0</div>
                                                        </div>
                                                        <div class="col-tgl dis-inl-block w-calc8">
                                                            <div class="div fsize10 label">IJIN</div>
                                                            <div class="div">0</div>
                                                        </div>
                                                        <div class="col-tgl dis-inl-block w-calc8">
                                                            <div class="div fsize10 label">CUTI</div>
                                                            <div class="div">0</div>
                                                        </div>
                                                        <div class="col-tgl dis-inl-block w-calc8">
                                                            <div class="div fsize10 label">LUPA ABSEN</div>
                                                            <div class="div">0</div>
                                                        </div>
                                                        <div class="col-tgl dis-inl-block w-calc8">
                                                            <div class="div fsize10 label">LA DATANG</div>
                                                            <div class="div">0</div>
                                                        </div>
                                                        <div class="col-tgl dis-inl-block w-calc8">
                                                            <div class="div fsize10 label">LA PULANG</div>
                                                            <div class="div">0</div>
                                                        </div>
                                                        <div class="col-tgl dis-inl-block w-calc8">
                                                            <div class="div fsize10 label">TOTAL TELAT</div>
                                                            <div class="div">0</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td >
                                                <div class="div bts-br"></div>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </li>

                            <li class="list">
                                <table>
                                    <tbody>
                                        <tr class="fsize10 label">
                                            <th>TANGGAL</th>
                                            <th>DATANG</th>
                                            <th>PULANG</th>
                                            <th>TOTAL</th>
                                            <th>TELAT</th>
                                            <th>KET</th>
                                        </tr>
                                        <tr class="fsize12 sling blue">
                                            <td class="pd-tb5">01/11/2021</td>
                                            <td>08:30</td>
                                            <td>16:30</td>
                                            <td>8j 30m</td>
                                            <td>0</td>
                                            <td></td>
                                        </tr>
                                        <tr class="fsize12">
                                            <td class="pd-tb5">02/11/2021</td>
                                            <td>08:30</td>
                                            <td>16:30</td>
                                            <td>8j 30m</td>
                                            <td>0</td>
                                            <td></td>
                                        </tr>
                                        <tr class="fsize12 sling blue">
                                            <td class="pd-tb5">01/11/2021</td>
                                            <td>08:30</td>
                                            <td>16:30</td>
                                            <td>8j 30m</td>
                                            <td>0</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>

                        </ul>
                </div>

            </div>
        </div>
    </div>
</div> -->


<link rel="stylesheet" href="{{$URI}}/assets/css/acs/datetimepicker/bootstrap-datetimepicker.css">

<!-- CKEDITOR -->
<script src="{{$URI}}/assets/js/home/widget.js"></script>
<!-- <script type="text/javascript" src="{{$URI}}/assets/js/acs/ckeditor/ckeditor.js"></script> -->

<!-- DATETIMEPICKER -->
<script src="{{$URI}}/assets/js/acs/datetimepicker/moment.js"></script>
<script src="{{$URI}}/assets/js/acs/datetimepicker/bootstrap.min.js"></script>
<script src="{{$URI}}/assets/js/acs/datetimepicker/bootstrap-datetimepicker.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script> -->
<script src="{{$URI}}/assets/js/cdn/tableToExcel.js"></script>

@endsection

@section('script')
<script>

$('#form-table').find('input[name="divisi"]').val(getaccount().employe.divisi.id);
$('#form-table').find('input[name="position"]').val(getaccount().employe.level.position);



function createTempTable(e,w)
{
    var rsp= e,
    temp = w,
    date = $("#form-table").find('input[name="dateAttendance"]').val();

    
    var list = '';
    $.each(rsp.list,function(i,item)
    {

        
        var listx = temp;
        listx = listx.replace('{date}', date);
        listx = listx.replace('{name}', item.name);
        listx = listx.replace('{gender}', (item.gender === 1 ? 'sli_icon-symbol-male' : 'sli_icon-symbol-female'));
        listx = listx.replace('{genderlabel}', (item.gender === 1 ? 'Laki-Laki' : 'Perempuan'));
        listx = listx.replace('{groups}', item.group);
        // listx = listx.replace('{total_time_h}', item.total_timeH);
        listx = listx.replace('{total_time_j}', item.total_timeJ);
        listx = listx.replace('{total_time_m}', item.total_timeM);
        listx = listx.replace('{id}', item.id);

        // var status = item.status_list;
        var status = '<div class="td-iner"><div class="div"><table class="text-center fsize11"><tbody><tr>';
        $.each(item.status_list, function(x,y)
        {
            status += '<td class="wd-abs-sts"><div class="div"><div class="div label up-txt">'+x+'</div><div class="div"><b>'+y+'</b></div></div></td>';
        });
        status += '</tr></tbody></table></div></div>';

        listx = listx.replace('{list_status}', status);

        list += listx;
    });

    return list;
}

$(document).ready(function()
{

    //SHOW ABSEN SINGLE
    $("body").on("click", ".cmd-prevAbsen", function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        modal = cmd.attr("data-modal"),
        date = $("body").find("#form-table input[name='date']").val();

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            $('body').find('.modal-new-view').remove();

            var elmodal = $('body').find('.comonent-modal-main .content-modal[data-modal="'+modal+'"]').html();

            var $URL = config.apps.URL_API + '/api/home/absen/viewsingle?id='+cmd.attr("dataid") + '&date=' + date;

            var $t = FormSending("","GET","key","",$URL);
            $t.success(function(n)
            {
                var rsp = n.response,
                employe = rsp.employe,
                res = rsp.attendance.result,
                list = rsp.attendance.list;
                // console.log(n);

                var modalin = elmodal.replace('{name}', employe.name);
                modalin = modalin.replace('{group}', employe.group);
                modalin = modalin.replace('{month}', rsp.month);
                modalin = modalin.replace('{total_time}', res.total_time);
                modalin = modalin.replace('{sakit}', res.sakit);
                modalin = modalin.replace('{ijin}', res.ijin);
                modalin = modalin.replace('{cuti}', res.cuti);
                modalin = modalin.replace('{la}', res.la);
                modalin = modalin.replace('{lad}', res.lad);
                modalin = modalin.replace('{lap}', res.lap);
                // modalin = modalin.replace('{total_late}', res.total_time);

                var li = '<table><tbody><tr class="fsize10 label"><th class="br-r-sld br-c-d pd-lr5 ">TANGGAL</th><th class="txt-center br-r-sld br-c-d">DATANG</th><th class="txt-center br-r-sld br-c-d">PULANG</th><th class="txt-center br-r-sld br-c-d">TOTAL</th><th class="txt-center br-r-sld br-c-d">TELAT</th><th class="txt-center br-c-d">KET</th></tr>';
                $.each(list, function(i,item)
                {
                    li += '<tr class="fsize12 ';
                    li += i % 2 === 0 ? 'sling blue ' : '';
                    li += item.day === 'Minggu' ? 'bc-pink' : '';
                    li += '"><td class="pd-tb5 br-r-sld br-c-d pd-lr5">'+item.day + ', ' +item.date+'</td><td class="txt-center br-r-sld br-c-d">'+item.in+'</td><td class="txt-center br-r-sld br-c-d">'+item.out+'</td><td class="txt-center br-r-sld br-c-d">'+item.total+'</td><td class="txt-center br-r-sld br-c-d">'+item.late+'</td><td class="txt-center br-c-d">'+item.status+'</td></tr>';
                });
                li += '</tbody></table>';

                modalin = modalin.replace('{listcalendar}', li);
                //
                var modal = '<div class="prover-modal-view modal-new-view white">';
                modal += modalin;
                modal += '</div>';

                $("body").append(modal);
                cmd.attr("role", "off");

            });
            $t.error(function(n)
            {
                console.log(n);
                cmd.attr("role", "off");
            })
   
        }
    });

    //ABSEN CLOSE
    $("body").on("click", ".prover-modal-view a.close", function(e)
    {
        e.preventDefault();
        var cmd = $(this);

        if($(this).attr("role") === "off")
        {
            $(this).attr("role", "on");
            $(this).parents(".modal-new-view").remove();
            $(this).attr("role", "off");
        }
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

        if( thisDate !== form.find('input[name="ondate"]').val() )
        {
            form.find('.ar-dt button').removeAttr('disabled');
        }
        else
        {
            form.find('.ar-dt button').attr('disabled', 'disabled');
        }
    });

    //
    $('body').find('.header li.fl-left .cmd-modal-header .lbl-name').html('{{$title_menu}}');
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


    $(".cmd-filter").click(function(e)
    {
        e.preventDefault();

        var form = $(this).parents("form"),
        ondate = form.find("input[name='ondate']"),
        date = form.find("input[name='date']").val();

        if($(this).attr('role') === 'off')
        {
            $(this).attr('role', 'on');
            ondate.val(date);
            exeTable(form);
            $(this).attr('disabled', 'disabled');
            $(this).attr('role','off');
        }
    })
    // FUNCTION CREATE NEW TASK

    $('body').on('click', '#form-create-newtask button.submit', function(e)
    {
        e.preventDefault();
        $(this).parents('form').submit();
    });


    $('body').on('submit', '#form-create-newtask', function(e)
    {
        e.preventDefault();
        var form = $(this),
        button = form.find('button.submit');
        
        if( button.attr('role') === 'off' )
        {
            button.attr('role', 'on');
            checkFormCreate(form);
            

        }

        return false;
    });


    $('.cmd-paging').click(function(e)
    {
        exePaging(e,$(this));
    });


    //EXPORT
    $('.cmd-download').click(function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        form = cmd.parents('form');

        if(cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            loadprocess('Harap tunggu, sedang process export data....');

            $URL = config.apps.URL_API + '/api/home/export/attendance?date=' + form.find('input[name="date"]').val();

            //
            var $t = FormSending('','GET','key','',$URL);
            $t.success(function(n)
            {
                console.log(n.response);
                var rsp = n.response;

                var list = '<table><tbody';
                $.each(rsp.list, function(i,item)
                {

                    list += '<tr class="">';
                        list += '<td data-f-bold="true"><b>'+ (i+1) +'.</b></td>';
                        list += '<td data-f-bold="true" colspan="8"><b>'+item.name+'</b></td>';
                    list += '</tr>';

                    list += '<tr>';
                        list += '<td></td>';
                        list += '<td colspan="8">Divisi: '+item.groups+'</td>';
                    list += '</tr>';

                    list += '<tr>';
                        list += '<td></td>';
                        list += '<td colspan="8">Bulan: '+item.month+'</td>';
                    list += '</tr>';

                    list += '<tr>';
                        list += '<td></td>';
                        list += '<td data-b-a-s="solid" rowspan="2" data-a-v="middle" class="br">Result</td>';
                        list += '<td data-b-a-s="solid" class="br">Total Jam</td>';
                        list += '<td data-b-a-s="solid" class="br">Sakit</td>';
                        list += '<td data-b-a-s="solid" class="br">Ijin</td>';
                        list += '<td data-b-a-s="solid" class="br">Cuti</td>';
                        list += '<td data-b-a-s="solid" class="br">Lupa Absen</td>';
                        list += '<td data-b-a-s="solid" class="br">LA Datang</td>';
                        list += '<td data-b-a-s="solid" class="br">LA Pulang</td>';
                    list += '</tr>';

                    list += '<tr>';
                            list += '<td></td>';
                            list += '<td data-b-a-s="solid"  class="br">'+item.total_hour+'j '+item.total_minute+'m</td>';
                            list += '<td data-b-a-s="solid" class="br">'+item.status.sakit+'</td>';
                            list += '<td data-b-a-s="solid" class="br">'+item.status.ijin+'</td>';
                            list += '<td data-b-a-s="solid" class="br">'+item.status.cuti+'</td>';
                            list += '<td data-b-a-s="solid" class="br">'+item.status.la+'</td>';
                            list += '<td data-b-a-s="solid" class="br">'+item.status.lad+'</td>';
                            list += '<td data-b-a-s="solid" class="br">'+item.status.lap+'</td>';
                    list += '</tr>';

                    if( item.list !== "")
                    {
                        list += '<tr>';
                            list += '<td colspan="9"></td>';
                        list += '</tr>';

                        list += '<tr>';
                            list += '<td></td>';
                            list += '<td data-b-a-s="solid" class="br">Tanggal</td>';
                            list += '<td data-b-a-s="solid" class="br">Datang</td>';
                            list += '<td data-b-a-s="solid" class="br">Pulang</td>';
                            list += '<td data-b-a-s="solid" class="br">Total</td>';
                            list += '<td data-b-a-s="solid" class="br">Telat</td>';
                            list += '<td data-b-a-s="solid" class="br">Keterangan</td>';
                        list += '</tr>';

                        $.each(item.list, function(x,y)
                        {
                            list += '<tr>';
                                list += '<td></td>';
                                list += '<td data-b-a-s="solid" class="br">'+y.date+'</td>';
                                list += '<td data-b-a-s="solid" class="br">'+y.in+'</td>';
                                list += '<td data-b-a-s="solid" class="br">'+y.out+'</td>';
                                list += '<td data-b-a-s="solid" class="br">'+y.total+'</td>';
                                list += '<td data-b-a-s="solid" class="br">'+y.late+'</td>';
                                list += '<td data-b-a-s="solid" class="br">'+y.label+'</td>';
                            list += '</tr>';
                        });
                    }

                    list += '<tr>';
                        list += '<td colspan="9" data-fill-color="C0C0C0"></td>';
                    list += '</tr>';

                });

                list += '</tbody></table>';

                $("body").find(".area-table-attendance").html(list);


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

    $(".cmd-convert-excel").click(function(e)
    {
        e.preventDefault();
        convertExcel("title.xlsx");
    });

    function convertExcel(w)
    {
        // let table = document.getElementsByTagName("table")[2];
        var table = $("body").find("#area-table-excel table")[0];
        TableToExcel.convert(table, { // html code may contain multiple tables so here we are refering to 1st table tag
           name: w, // fileName you could use any name
           sheet: {
              name: 'Sheet 1' // sheetName
           }
        });
    }


    // CLOSE MODAL
    $('body').on('click', '.prover-modal-box[data-modal="modal-slide"] a.close', function(e)
    {
        CloseModalSlide($(this),e);

    });

    // HIDE SPLASH
    hideSplash();


return false;
});
</script>
@endsection