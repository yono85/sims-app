@extends('home.index')

@section('content')
<div class="container-home w1024p">
    <div class="tables area-tables" aria-load="false">
        <div class="in-tables">

            <!-- head -->
        
            <div class="div head-tables">
                <div class="div clr-float">

                    <form action="/api/home/employe/table" id="form-table" aria-temp="temp-table-employe">


                        <button class="submit hide" role="off">submit</button>
                        <div class="fl-right w100px">

                            <div class="fl-right oarea-ddwn-hd oar-ddwn">
                                <button class="btn green btn-r cmdNewModal" role="off" data-type="" data-widget="modal-create-task" aria-dropdown="true">
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
                                                    <div class="ddwn area-ddwn keep area-groups">
                                                        <button class="btn br-rds8 cddwn" role="off">
                                                            <label><span class="fsize14 color-black">Semua Divisi</span></label>
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
                                                        <input type="hidden" class="value-dropdown" name="selected_group" value="-1">
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
                                                                    <button role="off"  dataid="2" ><span>Verify</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="3" ><span>No Akun</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="4" ><span>Non Aktif</span></button>
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
                                            <td class="td-w230">
                                                <div class="td-iner">
                                                    <span class="ic far fa-address-card"></span>
                                                    <span>KONTAK</span>
                                                </div>
                                            </td>
                                            <td class="td-w260">
                                                <div class="td-iner">
                                                    <span class="ic far fa-address-card"></span>
                                                    <span>ALAMAT</span>
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

<div class="div hide" id="temp-table-employe">
    <div class="tr">

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
                                    <div class="div">
                                        <span class="ic flaticon-suitcase"></span>
                                        <span class="label">{groups}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="td-w230 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span class="label sli_icon-screen-tablet"></span>
                                    <span>{phone}</span>
                                </div>
                                <div class="div">
                                    <span class="label fa flaticon2-black-back-closed-envelope-shape"></span>
                                    <span>{email}</span>
                                </div>
                            </div>
                        </td>
                        <td class="td-w260 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span class="label sli_icon-pointer"></span>
                                    <span>{address}</span>
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

                                        <button type="button" class="btn btn-primary nobr grey s11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="fas fa-ellipsis-v"></span></button>

                                        <div class="dropdown-menu open">
                                            <a class="dropdown-item afalse cmd-modal color-black cmd-vcustomers" href="#" data-togglex="modal" data-type="edit" data-open="page" data-target="#modalcustomers" data-token="bac5bd52333517ad35c57efd8be98625" role="off">
                                                <span>Sunting</span><span class="ic sli_icon-pencil"></span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item afalse cmd-modal color-red cmd-vcustomers" href="#" data-togglex="modal" data-type="edit" data-open="page" data-target="#modalcustomers" data-token="bac5bd52333517ad35c57efd8be98625" role="off">
                                                <span>Hapus</span><span class="ic sli_icon-ban"></span>
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

<!-- modal -->
@include('home.component.media')
<!-- end modal -->

<div class="prover-modal-view modal-new-view white hide">
    <div class="ar-modal-rel overflow-yA">
        <div class="modal-home">

            <div class="insed-body h-full pdtb20">

                <div class="arinsed mdl-partner pdlr40">

                    <div class="div header-box">
                        <b>Task Baru</b>
                        <a href="#" class="close afalse" role="off">
                            <span class="fa flaticon2-cross"></span>
                        </a>
                    </div>
                    <form action="/api/home/task/create-new" id="form-create-newtask" >

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
                                                
                                                <div class="div ar-content">
                                                    <input type="text" class="w100p form-control" placeholder="Label Task" name="label">
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
                                                <div class="div ar-content">
                                                    <div class="ic-r5-f">
                                                        <span class="sli_icon-calendar"></span>
                                                    </div>
                                                    <input type="text" class="w100p form-control background-trf position-rt inputFalseAll" placeholder="Tanggal mulai" name="dateStart" id="dateStart">
                                                </div>
                                                <div class="div bts-in"></div>
                                                <div class="div ar-content">
                                                    <input type="text" name="dateClose" class="w100p form-control background-trf position-rt inputFalseAll" id="dateClose" placeholder="Tanggal selesai">
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
                                                <div class="ddwn area-ddwn ar-content keep">

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
                                                        <li aria-selected="false">
                                                            <button role="off" dataid="1" data-modal="" data-modal-label="" data-get=""><span>Ben Basyar</span></button>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <input type="hidden" class="value-dropdown" name="verify_selected" value="">

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
                                                <div class="div ar-content">
                                                    <textarea name="detail" class="form-control h150" maxlength="1500" id="editor"></textarea>
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
                                                        <b>Status Task</b>
                                                    </div>
                                                    <div class="div label">Tentukan Status Task
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                                <div class="ddwn area-ddwn ar-content keep">

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

                                                <input type="hidden" class="value-dropdown" name="status_selected" value="">

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
                                    <button class="btn blue is-loading fl-right w180 br-rds18 h42 submit" role="off">Buat Task</button>
                                </div>
                            </li>

                        </ul>
                        <div class="hide" id="data-editor">
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

$('#form-table').find('input[name="divisi"]').val(getaccount().employe.divisi.id);
$('#form-table').find('input[name="position"]').val(getaccount().employe.level.position);

// GET EMPLOYE
function selectedEmployeList()
{
    
    // if( getaccount().employe.level.position === 'false' )
    // {
    //     $('body').find('.area-ddwn.area-employe button.cddwn label span').html(getaccount().employe.name);
    //     $('body').find('.area-ddwn.area-employe button.cddwn').attr('disabled','disabled');
    //     $('body').find('.area-ddwn.area-employe .value-dropdown').val(getaccount().employe.level.id);
        
    //     return;
    // }

    //
    var $URL = config.apps.URL_API + '/api/home/data/employe/groups/lists';

    var $t = FormSending("","GET","key","",$URL);
    $t.success(function(n)
    {
        var li = '<li aria-selected="false"><button role="off"  dataid="-1"><span>Semua Divisi</span></button></li>';
        $.each(n.response, function(i, item)
        {
            li += '<li aria-selected="false">';
                li += '<button role="off"  dataid="'+item.id+'">';
                    li += '<span>'+item.name+'</span>';
                li += '</button>';
            li += '</li>';
        });
        $('body').find('.area-ddwn.area-groups ul').html(li);

    });
    $t.error(function(n)
    {
        console.log(n);
    });
}

selectedEmployeList();

function createTempTable(e,w)
{
    var rsp= e,
    temp = w;

    var list = '';
    $.each(rsp.list,function(i,item)
    {
        var status = parseFloat(item.status);
        var listx = temp;
        listx = listx.replace('{date}', item.join);
        listx = listx.replace('{name}', item.name);
        listx = listx.replace('{gender}', (item.gender === 1 ? 'sli_icon-symbol-male' : 'sli_icon-symbol-female'));
        listx = listx.replace('{genderlabel}', (item.gender === 1 ? 'Laki-Laki' : 'Perempuan'));
        listx = listx.replace('{groups}', item.group);
        listx = listx.replace('{register}', (status === 1 ? '<li class="done chk"><span>AKTIF</span></li>' : ( status === 2 ? '<li class="progress"><span>VERIFY</span></li>' : ( status === 3 ? '<li class="hold"><span>No AKUN</span></li>' : '<li class="hold"><span>Non AKTIF</span></li>') ) ) );
        listx = listx.replace('{phone}', item.phone);
        listx = listx.replace('{email}', item.email);
        listx = listx.replace('{address}', item.address);

        list += listx;
    });

    return list;
}

$(document).ready(function()
{
    // console.log(getaccount());

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
        // table = form.parents('.tables'),
        // body = table.find('.atable.table-body'),
        // head = table.find('.table-header'),
        // footer = table.find('.foot-tables'),
        // temp = $('#'+form.attr('aria-temp')).html();

        exeTable(form);

        // //pre
        // table.attr('aria-load','true');


        // //URL
        // var $URL = config.apps.URL_API + form.attr('action') + '?' + form.serialize();
        // var $t = FormSending("","GET","key","",$URL);
        // $t.success(function(n)
        // {
        //     var rsp = n.response;
        //     var list = createTempTable(rsp,temp);
        //     // $.each(rsp.list,function(i,item)
        //     // {
        //     //     var listx = tr;
        //     //     listx = listx.replace('{date}', item.join);
        //     //     listx = listx.replace('{name}', item.name);
        //     //     listx = listx.replace('{gender}', (item.gender === 1 ? 'sli_icon-symbol-male' : 'sli_icon-symbol-female'));
        //     //     listx = listx.replace('{genderlabel}', (item.gender === 1 ? 'Laki-Laki' : 'Perempuan'));
        //     //     listx = listx.replace('{groups}', item.group);
        //     //     listx = listx.replace('{register}', (item.register === 0 ? '<li class="progress"><span>VERIFY</span></li>' : '<li class="done chk"><span>AKTIF</span></li>') );
        //     //     listx = listx.replace('{phone}', item.phone);
        //     //     listx = listx.replace('{email}', item.email);
        //     //     listx = listx.replace('{address}', item.address);

        //     //     list += listx;
        //     // });

        //     //
        //     var countpage = parseFloat(rsp.countpage),
        //     paging = parseFloat(rsp.paging);

        //     //
        //     if( countpage > 1)
        //     {
        //         if( paging === countpage)
        //         {
        //             footer.find('button[data-area="next"]').attr('disabled','disabled');
        //         }
        //         else
        //         {
        //             footer.find('button[data-area="next"]').removeAttr('disabled');
        //         }
        //     }
        //     else
        //     {
        //         footer.find('button[data-area="next"]').attr('disabled','disabled');
        //     }

        //     if( paging < 2 )
        //     {
        //         footer.find('button[data-area="back"]').attr('disabled','disabled');
        //     }

        //     //
        //     footer.removeClass('hide');
        //     head.removeClass('hide');
        //     body.html(list);
        //     table.attr('aria-load','false');

        //     console.log(rsp);
            
        // });
        // $t.error(function(n)
        // {
        //     console.log(n);
        //     var rsp = n.responseJSON;

        //     table.attr('aria-load','false');
        //     var list = tableempty(rsp.message);
        //     body.html(list);
        //     head.addClass('hide');
        //     body.addClass('hide');
        // });

    }
    
    $('.cmd-sort-table').click(function(e)
    {
        sorttable(e,$(this));
    });

    //
    // loadTable();
    exeTable($('#form-table'));


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


    function checkFormCreate(el)
    {
        var form = el,
        label = form.find('input[name="label"]'),
        dateClose = form.find('input[name="dateClose"]'),
        dateStart = form.find('input[name="dateStart"]'),
        verify = form.find('input[name="verify_selected"]'),
        detail = CKEDITOR.instances.editor.getData(),
        vdetail = form.find('textarea[name="detail"]'),
        status = form.find('input[name="status_selected"]'),
        button = form.find('button.submit');


        var detail1 = CKEDITOR.instances.editor.document.getBody().getChild(0).getText() ;
        var detail1 = detail1.replace(/ +(?= )/g,'');


        console.log(form);
        //check
        form.find('span.error').remove();
        form.find('.br-error').removeClass('br-error');

        //
        if( $.trim(label.val()).length < 5 || dateStart.val() === '' || dateClose.val() === '' || verify.val() === '' || $.trim(detail1).length === 0 || status.val() === '')
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

            if( verify.val() === '' )
            {
                verify.parent('.ar-content').append('<span class="error">Pilih verifikator</span>');
                verify.parent('.ar-content').find('button.cddwn').addClass('br-error');
            }


            if( $.trim(detail1).length === 0 )
            {
                vdetail.parent('.ar-content').append('<span class="error">Harap isikan detail task</span>');
                vdetail.parent('.ar-content').find('#cke_editor').addClass('br-error');
            }

            if( status.val() === '')
            {
                status.parent('.ar-content').append('<span class="error">Tentukan status Task</span>');
                status.parent('.ar-content').find('button.cddwn').addClass('br-error');
            }

            button.attr('role','off');
            return;
        }
    }


    //CHECK FROM IN SINGLE ELEMENT
    $('body').on('keyup', '#form-create-newtask input[name="label"]', function()
    {
        var form = $(this).parents('form');

        checkFormCreate(form);
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