@extends('home.index')

@section('content')
<div class="container-home splt mg-t10" aria-role="">
    <div class="div clr-float">

        <div class="home-nav-l">
            <ul>
                <li class="cmd-navig-splt" role="on" aria-id="tables-stock_bb">
                    <a href="#">
                        <div class="div clr-float">
                            <div class="icon">
                                <div class="tbl">
                                    <div class="intbl">
                                        <div class="fas fa-clipboard-list"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="inf">
                                <div class="tbl">
                                    <div class="intbl">
                                        Stok Bahan Baku
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </a>
                </li>
                <li class="cmd-navig-splt" role="off" aria-id="tables-stock_pd">
                    <a href="#">
                        <div class="div clr-float">
                            <div class="icon">
                                <div class="tbl">
                                    <div class="intbl">
                                        <div class="fas fa-clipboard-list"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="inf">
                                <div class="tbl">
                                    <div class="intbl">
                                        Stock Produk
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </a>
                </li>
                <li class="cmd-navig-splt" role="off" aria-id="tables-stock_ap">
                    <a href="#">
                        <div class="div clr-float">
                            <div class="icon">
                                <div class="tbl">
                                    <div class="intbl">
                                        <div class="fas fa-clipboard-list"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="inf">
                                <div class="tbl">
                                    <div class="intbl">
                                        Aset Prusahaan
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </a>
                </li>
            </ul>
        </div>

        <div class="home-content-r">
            <div class="inarx">
                <div class="div">
                    <!-- TABLES -->
                    <div class="tables ch-hd" aria-role="true" id="tables-stock_bb" aria-load="false">
                        <div class="in-tables">

                            <!-- head -->
                            <div class="div head-tables mg-t0">
                                <div class="div clr-float">

                                    <form action="/api/home/task/table" id="form-table" aria-temp="temp-table-sbb">


                                        <button class="submit hide" role="off">submit</button>
                                        <div class="fl-right w100px">

                                            <div class="fl-right oarea-ddwn-hd oar-ddwn">
                                                <button class="btn green btn-r cmd-modal-sbb" role="off" data-type="">
                                                    <!-- <span class="ic fa flaticon2-plus"></span> -->
                                                    <span>Tambah</span>
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
                                                                            <input type="text" name="dateAttendance" class="h100p w100p br-rds8 bg-color-none br-ou-none" id="dateAttendance" value="$monthRead" placeholder="">
                                                                            <input type="hidden" name="ondate" value="$monthDate">
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
                                        <input type="hidden" name="date" value="$monthDate">
                                        <input type="hidden" name="sort_name" value="desc">

                                    </form>

                                </div>
                            </div>

                            <!-- body -->
                            <div class="body-tables">
                                <div class="ar-body-table">

                                    <div class="div">

                                        <div class="atable table-body">
                                            <div class="tr" dataid="{id}">

                                                <div class="thr">
                                                    <div class="div clr-float">
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
                                                                                <li class=""><p class="fsize15">Madu Hitam</p></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="td-w180 wh-m-520">
                                                                    <div class="td-iner">
                                                                        <div class="div">
                                                                            <span class="label fsize9 up-txt">Kategori</span>
                                                                        </div>
                                                                        <div class="div">
                                                                            <span>Bahan Cair</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="td-w130 wh-m-520">
                                                                    <div class="td-iner">
                                                                        <div class="div">
                                                                            <span class="label fsize9 up-txt">Stock</span>
                                                                            <div class="div">
                                                                                <span>50Kg</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="td-w130 wh-m-520">
                                                                    <div class="td-iner">
                                                                        <div class="div">
                                                                            <span class="label fsize9 up-txt">Baper Stock</span>
                                                                            <div class="div">
                                                                                <span>20Kg</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="td-w130 wh-m-520">
                                                                    <div class="td-iner">
                                                                        <div class="div">
                                                                            <span class="label fsize9 up-txt">Kode Rak</span>
                                                                            <div class="div">
                                                                                <span>13B</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="td-center td-w70">
                                                                    <div class="td-iner disvis">
                                                                        <div class="div">
                                                                            <div class="dropdown dropleft">

                                                                                <button type="button" class="btn btn-primary nobr grey s11 main" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                                    <span class="fas fa-ellipsis-v"></span>
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

                    <div class="tables ch-hd" aria-role="false" id="tables-stock_pd" aria-load="false">
                        <div class="in-tables">

                            <!-- head -->
                            <div class="div head-tables mg-t0">
                                <div class="div clr-float">

                                    <form action="/api/home/task/table" id="form-table" aria-temp="temp-table-spd">


                                        <button class="submit hide" role="off">submit</button>
                                        <div class="fl-right w100px">

                                            <div class="fl-right oarea-ddwn-hd oar-ddwn">
                                                <button class="btn green btn-r cmd-modal-task" role="off" data-type="">
                                                    <!-- <span class="ic fa flaticon2-plus"></span> -->
                                                    <span>Tambah</span>
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
                                                                            <input type="text" name="dateAttendance" class="h100p w100p br-rds8 bg-color-none br-ou-none" id="dateAttendance" value="$monthRead" placeholder="">
                                                                            <input type="hidden" name="ondate" value="$monthDate">
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
                                        <input type="hidden" name="date" value="$monthDate">
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

                    <div class="tables ch-hd" aria-role="false" id="tables-stock_ap" aria-load="false">
                        <div class="in-tables">

                            <!-- head -->
                            <div class="div head-tables mg-t0">
                                <div class="div clr-float">

                                    <form action="/api/home/task/table" id="form-table" aria-temp="temp-table-sap">


                                        <button class="submit hide" role="off">submit</button>
                                        <div class="fl-right w100px">

                                            <div class="fl-right oarea-ddwn-hd oar-ddwn">
                                                <button class="btn green btn-r cmd-modal-task" role="off" data-type="">
                                                    <!-- <span class="ic fa flaticon2-plus"></span> -->
                                                    <span>Tambah</span>
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
                                                                            <input type="text" name="dateAttendance" class="h100p w100p br-rds8 bg-color-none br-ou-none" id="dateAttendance" value="$monthRead" placeholder="">
                                                                            <input type="hidden" name="ondate" value="$monthDate">
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
                                        <input type="hidden" name="date" value="$monthDate">
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
                    <!-- END TABLES -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="div hide">
    <!-- temp stock bahan baku -->
    <div class="div" id="temp-table-sbb">
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

    <div class="div" id="temp-table-spd">
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

    <div class="div" id="temp-table-sap">
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

</div>

<div class="prover-modal-view modal-new-view white hide" id="modal-sbb">
        <div class="ar-modal-rel overflow-yA">
            <div class="modal-home">

                <div class="insed-body h-full pdtb20">

                    <div class="arinsed mdl-partner pd-lr-40 pos-rel m-pd-lr25">

                        <div class="load txt-center pd-t10">
                            <img src="/assets/svg/loading.blue.svg" alt="">
                        </div>

                        <div class="div header-box">
                            <b class="title">Tambah Bahan Baku</b>
                            <a href="#" class="close afalse" role="off">
                                <span class="fa flaticon2-cross"></span>
                            </a>
                        </div>
                        <form action="/api/home/inventory/material/create" id="form-create-sbb" >

                            <ul class="artable">

                                <li class="list">
                                    <div class="div">
                                        <table>
                                            <tr>
                                                <td class="left">
                                                    <div class="div">
                                                        <div class="div">
                                                            <b>Nama Bahan Baku</b>
                                                        </div>
                                                        <div class="div label">Isikan nama bahan baku sekurangnya 5 karakter.
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="vtop">
                                                    
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">NAMA BAHAN BAKU</b>
                                                    </div>

                                                    <div class="div ar-content">
                                                        <input type="text" class="w100p form-control empty" placeholder="Nama Bahan Baku" name="name">
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
                                                            <b>Kelengkapan</b>
                                                        </div>
                                                        <div class="div label">Tentukan kelengkapan Kategori, Satuan bahan baku
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="vtop">
                                                    <div class="div">
                                                        <div class="div hide ws-m-disb-620">
                                                            <b class="up-txt fsize9">KATEGORI</b>
                                                        </div>
                                                        <div class="ddwn area-ddwn ar-content keep area-selected-categori" aria-head="false">
    
                                                        <button class="btn br-rds8 cddwn fcs" role="off">
                                                            <label><span class="fsize14 color-black">Pilih Kategori</span></label>
                                                        </button>
    
                                                        <div class="ddwn-pg area-ddwn-page">
                                                            <ul>
                                                                <!-- list -->
                                                                <!-- <li aria-selected="false">
                                                                    <button role="off" dataid="1" data-modal="" data-modal-label="" data-get=""><span>Bahan Cair</span></button>
                                                                </li> -->
    
                                                            </ul>
                                                        </div>
    
                                                        <input type="hidden" class="value-dropdown zero" name="categori_selected" value="">
    
                                                        </div>
                                                    </div>
                                                    <div class="div bts-in"></div>
                                                    <div class="div">
                                                        <div class="div w50p">

                                                            <div class="div hide ws-m-disb-620">
                                                                <b class="up-txt fsize9">SATUAN</b>
                                                            </div>
                                                            <div class="ddwn area-ddwn ar-content keep area-selected-satuan" aria-head="false">
    
                                                                <button class="btn br-rds8 cddwn fcs" role="off">
                                                                    <label><span class="fsize14 color-black">Pilih Satuan</span></label>
                                                                </button>
    
                                                                <div class="ddwn-pg area-ddwn-page">
                                                                    <ul>
                                                                        <!-- list -->
                                                                        <!-- <li aria-selected="false">
                                                                            <button role="off" dataid="1" data-modal="" data-modal-label="" data-get=""><span>Kg</span></button>
                                                                        </li> -->
    
                                                                    </ul>
                                                                </div>
    
                                                                <input type="hidden" class="value-dropdown zero" name="satuan_selected" value="">
    
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
                                            <tr>
                                                <td class="left">
                                                    <div class="div">
                                                        <div class="div">
                                                            <b>Stock dan Stock Baper</b>
                                                        </div>
                                                        <div class="div label">Isikan stock dan stock baper bahan baku
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="vtop">
                                                    
                                                    <div class="div">
                                                        <div class="div hide ws-m-disb-620">
                                                            <b class="up-txt fsize9">STOCK</b>
                                                        </div>

                                                        <div class="div w50p">

                                                            <div class="div ar-content">
                                                                <input type="text" class="w100p form-control empty rupiahkeyup" placeholder="Stock bahan baku" name="stock">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="div bts-in"></div>

                                                    <div class="div">
                                                        <div class="div hide ws-m-disb-620">
                                                            <b class="up-txt fsize9">STOCK BAPER</b>
                                                        </div>

                                                        <div class="div w50p">

                                                            <div class="div ar-content">
                                                                <input type="text" class="w100p form-control empty rupiahkeyup" placeholder="Stock baper" name="baper">
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
                                                        <b>Deskripsi</b>
                                                    </div>
                                                    <div class="div">
                                                        <span class="label">Jelaskan informasi bahan baku</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                
                                                <td colspan="2" class="vtop">
                                                <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">DESKRIPSI</b>
                                                    </div>
                                                    <div class="div ar-content">
                                                        <textarea name="description" class="form-control h110 empty" maxlength="250"></textarea>
                                                    </div>
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
                            
                            <input type="hidden" name="type" value="">
                            <input type="hidden" name="user_id" value="">
                            <input type="hidden" name="sbb_id" value="">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>

async function materialCategories(w)
{
    var $URL = config.apps.URL_API + "/api/home/data/material/categories";
    var $t = FormSending("","GET","key","",$URL);
    $t.success(function(n)
    {
        var li = "";
        $.each(n.list, function(i,item)
        {
            li += '<li aria-selected="false"><button role="off" dataid="'+item.id+'" data-modal="" data-modal-label="" data-get=""><span>'+item.name+'</span></button></li>';
        });

        w.find(".area-selected-categori ul").html(li);
        console.log(n);
    });
    $t.error(function(n)
    {
        console.log(n);
    });
}

async function materialUnits(w)
{
    var $URL = config.apps.URL_API + "/api/home/data/material/units";
    var $t = FormSending("","GET","key","",$URL);
    $t.success(function(n)
    {
        var li = "";
        $.each(n.list, function(i,item)
        {
            li += '<li aria-selected="false"><button role="off" dataid="'+item.id+'" data-modal="" data-modal-label="" data-get=""><span>'+item.name+'</span></button></li>';
        });

        w.find(".area-selected-satuan ul").html(li);
        console.log(n);
    });
    $t.error(function(n)
    {
        console.log(n);
    });
}

$(document).ready(function()
{

    //cmd nav
    $(".cmd-navig-splt").click(function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        container = cmd.parents(".container-home");

        if( cmd.attr("role") === "off")
        {
            $(".cmd-navig-splt").attr("role","off");
            cmd.attr("role", "on");
            container.find(".tables").attr("aria-role","false");
            container.find(".tables#"+cmd.attr('aria-id')).attr("aria-role","true");
        }
    });

    
    //modal
    $(".cmd-modal-sbb").click(function(e)
    {
        var cmd = $(this),
        modal = $("body").find("#modal-sbb"),
        form = modal.find("form");
        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            modal.find("input[name='type']").val("new");
            modal.find(".title").html("Tambah Bahan Baku");

            materialCategories(form);
            materialUnits(form);
            //
            modal.find("button.submit").html("Simpan");
            modal.find("input[type='text']").removeAttr("disabled");
            modal.find("button.cddwn").removeAttr("disabled");
            modal.find("button.submit").removeAttr("disabled");

            //
            modal.find("input[name='user_id']").val(getaccount().id);

            //
            modal.removeClass("hide");
            modal.find(".load").addClass("hide");
            cmd.attr("role", "off");
        }
    });

    $('button.cddwn').click(function(e)
    {
        e.stopPropagation();
        e.preventDefault();

        dropdownNew($(this));
    });

    $('body').on('click', '.area-ddwn ul li button', function(e)
    {
        e.stopPropagation();
        e.preventDefault();

        var cmd = $(this),
        form = cmd.parents('form');

        selectedDDWN(cmd);

    });


    //FORM ============

    // FORM BAHAN BAKU
    $("body").on("submit", "#form-create-sbb", function(e)
    {
        var form = $(this),
        cmd = form.find("button.submit");

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");

            var check = checkFormSBB(form);

            if( check )
            {
                console.log("submit");
            }
        }

        return false;
    });

    $("body").on("keyup", "#form-create-sbb input[type='text']", function(e)
    {
        if( $.trim( $(this).val() ) !== "" )
        {
            checkFormSBB( $(this).parents("form") );
        }
    });

    $("body").on("click", "#form-create-sbb .area-ddwn-page button", function(e)
    {

        checkFormSBB( $(this).parents("form") );

    });


    // check form sbb
    function checkFormSBB(w)
    {
        var form = w;

        //
        var name = form.find("input[name='name']"),
        categori = form.find("input[name='categori_selected']"),
        satuan = form.find("input[name='satuan_selected']"),
        stock = form.find("input[name='stock']"),
        baper = form.find("input[name='baper']");

        //
        form.find("span.error").remove();
        form.find(".br-error").removeClass("br-error");

        //
        if( $.trim(name.val()).length < 3 )
        {
            name.parent(".ar-content").append("<span class='error'>Isikan sekurang nya 3 karakter</span>");
            name.addClass("br-error");
        }

        if( categori.val() === "" )
        {
            categori.parent(".ar-content").append("<span class='error'>Harap pilih kategori</span>");
            categori.parent(".ar-content").find("button.cddwn").addClass("br-error");
        }

        if( satuan.val() === "" )
        {
            satuan.parent(".ar-content").append("<span class='error'>Harap pilih satuan</span>");
            satuan.parent(".ar-content").find("button.cddwn").addClass("br-error");
        }

        if( $.trim(stock.val()) === "" )
        {
            stock.parent(".ar-content").append("<span class='error'>Isikan stock bahan baku</span>");
            stock.addClass("br-error");
        }

        if( $.trim(baper.val()) === "")
        {
            baper.parent(".ar-content").append("<span class='error'>Isikan stock baper</span>");
            baper.addClass("br-error");
        }

        //
        if( $.trim(name.val()).length < 3 || categori.val() === "" || satuan.val() === "" || $.trim(stock.val()) === "" || $.trim(baper.val()) === "" )
        {
            return false;
        }

        return true;

    }

    $(".modal-new-view button.submit").click(function(e)
    {
        e.preventDefault();
        $(this).parents("form").submit();
    });



    //
    //CLOSE MODAL TASK
    $("#modal-sbb a.close").click(function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        modal = cmd.parents("#modal-sbb"),
        form = modal.find("form");

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            cmd.parents("#modal-sbb").addClass("hide");
            // clearFormTask(form);
            cmd.attr("role", "off");
        }
    });

    //title
    $('body').find('.header li.fl-left .cmd-modal-header .lbl-name').html('{{$title_menu}}');
    $('body').find('.header li.fl-left .cmd-modal-header').removeClass('hide');

    // HIDE SPLASH
    hideSplash();
    return false;
});
</script>
@endsection