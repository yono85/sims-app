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
                                    <span>Karyawan</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            
            <div class="div head-tables">
                <div class="div clr-float">

                    <form action="/api/employe/table" id="form-table" aria-temp="temp-table-employe">


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
                                            <td class="td-w180">
                                                <div class="td-iner">
                                                    <span class="ic far fa-address-card"></span>
                                                    <span>KONTAK</span>
                                                </div>
                                            </td>
                                            <td class="td-w180">
                                                <div class="td-iner">
                                                    <span class="ic far fa-address-card"></span>
                                                    <span>DOKUMEN</span>
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

<div class="div hide" id="temp-table-employe">
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
                                        <span class="label sli_icon-briefcase"></span>
                                        <span class="label up-txt fsize10">{groups}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="td-w180 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span>{phone}</span>
                                </div>
                                <div class="div">
                                    <span>{email}</span>
                                </div>
                            </div>
                        </td>
                        <td class="td-w180 wh-m-520">
                            <div class="td-iner">
                                <ul>
                                    {document}
                                </ul>
                            </div>
                        </td>
                        <td class="td-w260 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span class="label sli_icon-pointer"></span>
                                    <span>{address}</span>
                                </div>
                                <div class="div">
                                    <span>{address2}</span>
                                </div>
                                <div class="div">
                                    <span>{address3}</span>
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
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item afalse color-black cmd-document" href="#" data-togglex="" data-type="" data-open="" data-target="" data-token="" role="off">
                                                <span>Dokumen</span><span class="ic sli_icon-notebook"></span>
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

<div class="prover-modal-view modal-new-view white hide" id="modal-employe">
    <div class="ar-modal-rel overflow-yA">
        <div class="modal-home">

            <div class="insed-body h-full pdtb20">

                <div class="arinsed mdl-partner pd-lr-40 pos-rel m-pd-lr25">

                    <div class="load txt-center pd-t10">
                        <img src="/assets/svg/loading.blue.svg" alt="">
                    </div>

                    <div class="div header-box">
                        <b class="title">Tambah Karyawan</b>
                        <a href="#" class="close afalse" role="off">
                            <span class="fa flaticon2-cross"></span>
                        </a>
                    </div>
                    <form action="/api/hrd/employe/create" id="form-create-employe" >

                        <ul class="artable">

                            <li class="list">
                                <div class="div">
                                    <table>
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Nama Karyawan</b>
                                                    </div>
                                                    <div class="div label">Isikan name karyawan sekurangnya 3 karakter.
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                                
                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">NAMA KARYAWAN</b>
                                                    </div>

                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty" placeholder="Nama" maxlength="75" name="name">
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div w50p">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">GENDER</b>
                                                    </div>

                                                    <div class="ddwn area-ddwn ddwn-button-select ar-content keep dot-mandatory" data-label="Pilih Gender">

                                                        <button class="btn br-rds8 cddwn fcs" role="off">
                                                            <label><span class="fsize14 color-black">Pilih Gender</span></label>
                                                        </button>

                                                        <div class="ddwn-pg area-ddwn-page">
                                                            <ul>
                                                                <!-- list -->
                                                                <li aria-selected="false">
                                                                    <button role="off" dataid="1" data-modal="" data-modal-label="" data-get=""><span>Laki-Laki</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off" dataid="2" data-modal="" data-modal-label="" data-get=""><span>Perempuan</span></button>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <input type="hidden" class="value-dropdown empty" name="gender" value="">

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
                                                        <b>Tempat dan Tanggal Lahir</b>
                                                    </div>
                                                    <div class="div label">Isikan tempat dan tanggal lahir
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">TEMPAT LAHIR</b>
                                                    </div>
                                                    <div class="div ar-content">
                                                        <div class="div ar-content dot-mandatory">
                                                            <input type="text" class="w100p form-control empty" placeholder="Tempat lahir" maxlength="75" name="tempatlahir">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div w50p">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">TANGGAL LAHIR</b>
                                                    </div>
                                                    <div class="div ar-content dot-mandatory">
                                                        <div class="se-date no-clr" role="off">
                                                            <input type="input" name="tgllahir" class="w100p form-control background-trf position-rt inputFalseAll empty singleDate typefalse" placeholder="Tanggal Lahir" >
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
                                        <tr>
                                            <td colspan="2">
                                                <div class="div bts-br"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Informasi Kepegawaian</b>
                                                    </div>
                                                    <div class="div label">Isikan informasi kepegawaian
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">DIVISI</b>
                                                    </div>

                                                    <div class="ddwn area-ddwn ddwn-button-select ar-content keep area-groups dot-mandatory" data-label="Pilih Divisi">

                                                        <button class="btn br-rds8 cddwn fcs" role="off">
                                                            <label><span class="fsize14 color-black">Pilih Divisi</span></label>
                                                        </button>

                                                        <div class="ddwn-pg area-ddwn-page">
                                                            <ul></ul>
                                                        </div>

                                                        <input type="hidden" class="value-dropdown empty" name="divisi" value="">

                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div w50p">
                                                    <div class="div ws-m-disb-620">
                                                        <i class="up-txt fsize11">TANGGAL JOIN</i>
                                                    </div>
                                                    <div class="div ar-content dot-mandatory">
                                                        <div class="se-date no-clr" role="off">
                                                            <input type="input" name="tgljoin" class="w100p form-control background-trf position-rt inputFalseAll empty singleDate typefalse" placeholder="" >
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

                                                <div class="div w50p">
                                                    <div class="div ws-m-disb-620">
                                                        <i class="up-txt fsize11">TANGGAL KELUAR</i>
                                                    </div>
                                                    <div class="div ar-content">
                                                        <div class="se-date no-clr" role="off">
                                                            <input type="input" name="tglout" class="w100p form-control background-trf position-rt inputFalseAll empty singleDate typefalse" placeholder="" >
                                                            <span class="ar-ic">
                                                                <span class="sli_icon-calendar ic"></span>
                                                            </span>
                                                            <button class="btn-clear clear-date" role="off">
                                                                <i class="sli_icon-close"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <div class="div">
                                                        <i class="color-red linh50 fsize12" >
                                                            Isikan jika Karyawan telah berhenti atau keluar
                                                        </i>
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
                                                        <b>Kontak</b>
                                                    </div>
                                                    <div class="div label">Lengkapi kontak telepon/whatsapp dan alamat email
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                                <div class="div w50p">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">HP/Whatsapp</b>
                                                    </div>
                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty number" placeholder="HP/Whatsapp" maxlength="15" name="phone">
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">ALAMAT EMAIL</b>
                                                    </div>
                                                    <div class="div ar-content">
                                                        <input type="text" name="email" class="w100p form-control background-trf position-rt empty" placeholder="Email" maxlength=100>
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
                                                        <b>Alamat Lengkap</b>
                                                    </div>
                                                    <div class="div label">Tentukan alamat tempat tinggal
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">PROVINSI</b>
                                                    </div>
    
                                                    <div class="ddwn area-ddwn ar-content ddwn-button-select keep area-contact-provinsi dot-mandatory" aria-head="true" data-label="Pilih Provinsi">
    
                                                        <button class="btn br-rds8 cddwn fcs" role="off">
                                                            <label><span class="fsize14 color-black">Pilih Provinsi</span></label>
                                                        </button>
    
                                                        <div class="ddwn-pg area-ddwn-page">
                                                            <div class="ddwn-header">
                                                                <div class="inhd">
                                                                    <button height="auto" type="button"></button>
                                                                    <input type="text" placeholder="Cari Provinsi" class="ddwn-tsrc">
                                                                </div>
                                                            </div>
                                                            <ul>
                                                                <!-- list -->
                                                            </ul>
                                                        </div>
    
                                                        <input type="hidden" class="value-dropdown min1" name="provinsi_selected" value="-1">
    
                                                    </div>

                                                </div>

                                                <div class="div hide area-contact-city area-selected-div">
                                                    <div class="div bts-in"></div>
    
                                                    <div class="div">
                                                        <div class="div hide ws-m-disb-620">
                                                            <b class="up-txt fsize9">KOTA/KABUPATEN</b>
                                                        </div>
        
                                                        <div class="ddwn area-ddwn ar-content keep ddwn-button-select dot-mandatory" aria-head="true" data-label="Pilih Kota/Kabupaten" aria-select-hide="true">
        
                                                            <button class="btn br-rds8 cddwn fcs" role="off">
                                                                <label><span class="fsize14 color-black">Pilih Kota/Kabupaten</span></label>
                                                            </button>
        
                                                            <div class="ddwn-pg area-ddwn-page">
                                                                <div class="ddwn-header">
                                                                    <div class="inhd">
                                                                        <button height="auto" type="button"></button>
                                                                        <input type="text" placeholder="Cari Kota/Kabupaten..." class="ddwn-tsrc">
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <!-- list -->
                                                                </ul>
                                                            </div>
        
                                                            <input type="hidden" class="value-dropdown min1" name="city_selected" value="-1">
        
                                                        </div>
    
                                                    </div>

                                                </div>


                                                <div class="div hide area-contact-kecamatan area-selected-div">
                                                    <div class="div bts-in"></div>
                                                    
                                                    <div class="div">
                                                        <div class="div hide ws-m-disb-620">
                                                            <b class="up-txt fsize9">KECAMATAN</b>
                                                        </div>
        
                                                        <div class="ddwn area-ddwn ar-content keep ddwn-button-select dot-mandatory" aria-head="true" data-label="Pilih Kecamatan" aria-select-hide="true">
        
                                                            <button class="btn br-rds8 cddwn fcs" role="off">
                                                                <label><span class="fsize14 color-black">Pilih Kecamatan</span></label>
                                                            </button>
        
                                                            <div class="ddwn-pg area-ddwn-page">
                                                                <div class="ddwn-header">
                                                                    <div class="inhd">
                                                                        <button height="auto" type="button"></button>
                                                                        <input type="text" placeholder="Cari Kecamatan" class="ddwn-tsrc">
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <!-- list -->
                                                                    <li aria-selected="false">
                                                                        <button role="off" dataid="1" data-modal="" data-modal-label="" data-get=""><span>On Progress</span></button>
                                                                    </li>
                                                                </ul>
                                                            </div>
        
                                                            <input type="hidden" class="value-dropdown min1" name="kecamatan_selected" value="-1">
        
                                                        </div>
    
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">ALAMAT LENGKAP</b>
                                                    </div>
                                                    <div class="div ar-content dot-mandatory">
                                                        <textarea name="address" class="form-control empty" maxlength="150" placeholder="Jalan..."></textarea>
                                                    </div>
                                                </div>
                                                

                                                <div class="div bts-in"></div>

                                                <div class="div">
                                                    <div class="div w50p">
                                                        <div class="div hide ws-m-disb-620">
                                                            <b class="up-txt fsize9">KODEPOS</b>
                                                        </div>
                                                        <div class="div ar-content dot-mandatory">
                                                            <input type="text" name="kodepos" class="w100p form-control background-trf position-rt empty number" placeholder="Kode Pos" maxlength="6">
                                                        </div>
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
                        <input type="hidden" name="employe_id" value="">
                        

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="prover-modal-view modal-new-view white hide" id="modal-document">
    <div class="ar-modal-rel overflow-yA">
        <div class="modal-home">

            <div class="insed-body h-full pdtb20">

                <div class="arinsed mdl-partner pd-lr-40 pos-rel m-pd-lr25">

                    <div class="load txt-center pd-t10 hide">
                        <img src="/assets/svg/loading.blue.svg" alt="">
                    </div>

                    <div class="div header-box">
                        <b class="title">Dokumen Karyawan</b>
                        <a href="#" class="close afalse" role="off">
                            <span class="fa flaticon2-cross"></span>
                        </a>
                    </div>

                    <ul class="artable w480">

                        <li class="list">
                            <div class="div">
                                <span class="label up-txt fsize10">NAMA</span>
                            </div>
                            <div class="div">
                                <span class="value-name">-</span>
                            </div>
                        </li>

                        <li class="list">
                            <table>
                                <tr>
                                    <td style="50%">
                                        <div class="div label up-txt fsize10">
                                            <span>DIVISI:</span>
                                        </div>
                                        <div class="div">
                                            <span class="value-divisi">--</span>
                                        </div>
                                    </td>
                                    <td style="50%">
                                        <div class="div label up-txt fsize10">
                                            <span>HANDPHONE:</span>
                                        </div>
                                        <div class="div">
                                            <span class="value-phone">--</span>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            
                        </li>

                        <li class="list">
                            <div class="div">
                                <table>
                                    <tr>
                                        <td colspan="2">
                                            <div class="div bts-br mg-b0"></div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </li>

                        <li class="list">
                            <div class="div">
                                <div class="div clr-float ">
                                    <div class="fl-left label">
                                        <span class="ic fa flaticon-list-1"></span>
                                        <span><b class="">Dokumen</b></span>
                                    </div>
                                    <div class="fl-right">
                                        <button role="off" class="btn green cmd-inmodal-ddwn">
                                            <span class="fa flaticon2-add-1"></span>
                                            <span>Tambah</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="div">
                                    <table class="lst">
                                        <tr class="fsize9 color-grey">
                                            <th class="td-center td-width50 pd5">NO</th>
                                            <th class="pd5">NAMA</th>
                                            <th class="td-width140 pd5">EXPIRED</th>
                                            <th class="td-center td-width70 pd5">ACT</th>
                                        </tr>
                                    </table>
                                    <table class="fsize12 area-list-li">
                                        <!-- tr -->
                                    </table>
                                </div>
                            </div>
                        </li>

                        <li class="list">
                            <div class="div">
                                <table>
                                    <tr>
                                        <td colspan="2">
                                            <div class="div bts-br mg-b0"></div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </li>


                        <li class="list">
                            <div class="div clr-float">
                                <button class="btn blue is-loading fl-right w180 br-rds18 h42 submit" role="off">Kirim</button>
                            </div>
                        </li>

                    </ul>

                    <div class="in-modal area-modal-in hide" role="off">
                        <div class="in-area-mdl br-rds8">
                            <div class="bg"></div>
                            <div class="area-mdl">
                                <div class="divH">
                                    <div class="in-form-mdl">
                                        <div class="hd">
                                            <div class="divH">
                                                <div class="tbl">
                                                    <div class="intbl">
                                                        <div class="div">
                                                            <span>Upload Dokumen</span>
                                                            <a href="" class="close-inmodal" role="off">
                                                                <span class="fa flaticon2-cross"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="area-frm">
                                            <form action="/api/employe/document/create">

                                                <ul>
                                                    <li class="lst">
                                                        <div class="div">
                                                            <span class="label up-txt fsize10">JENIS</span>
                                                        </div>
                                                        <div class="div">
                                                            <div class="ddwn area-ddwn ddwn-button-select ar-content keep w50p area-selected-doc-type" data-label="Pilih Jenis">

                                                                <button class="btn br-rds8 cddwn fcs" role="off">
                                                                    <label><span class="fsize14 color-black">Pilih Jenis</span></label>
                                                                </button>

                                                                <div class="ddwn-pg area-ddwn-page">
                                                                    <ul>
                                                                        <!-- list -->
                                                                    </ul>
                                                                </div>

                                                                <input type="hidden" class="value-dropdown empty" name="document_type" value="">

                                                            </div>
                                                        </div>
                                                    </li>
                                                    
                                                    <li class="lst hide area-selected-skil area-hidden">
                                                        <div class="div">
                                                            <span class="label up-txt fsize10">KEAHLIAN</span>
                                                        </div>
                                                        <div class="div">
                                                            <div class="ddwn area-ddwn ddwn-button-select ar-content keep w50p" data-label="Pilih Keahlian">

                                                                <button class="btn br-rds8 cddwn fcs" role="off">
                                                                    <label><span class="fsize14 color-black">Pilih Keahlian</span></label>
                                                                </button>

                                                                <div class="ddwn-pg area-ddwn-page">
                                                                    <ul>
                                                                        <!-- list -->
                                                                    </ul>
                                                                </div>

                                                                <input type="hidden" class="value-dropdown empty" name="skil_type" value="">

                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="lst">
                                                        <div class="div">
                                                            <span class="label up-txt fsize10">EXPIRED DATE</span>
                                                        </div>
                                                        <div class="div">
                                                            <div class="div w50p">
                                                                <div class="div ar-content">
                                                                    <div class="se-date no-clr" role="off">
                                                                        <input type="input" name="expired_date" class="w100p form-control background-trf position-rt inputFalseAll empty singleDate typefalse" placeholder="dd/mm/yyyy" >
                                                                        <span class="ar-ic">
                                                                            <span class="sli_icon-calendar ic"></span>
                                                                        </span>
                                                                        <button class="btn-clear clear-date" role="off">
                                                                            <i class="sli_icon-close"></i>
                                                                        </button>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="lst">
                                                        <div class="div">
                                                            <span class="label up-txt fsize10">DURASI REMINDER</span>
                                                        </div>
                                                        <div class="div">
                                                            <div class="ddwn area-ddwn ddwn-button-select ar-content keep w50p area-select-durasi-reminder" data-label="1 hari">

                                                                <button class="btn br-rds8 cddwn fcs" role="off">
                                                                    <label><span class="fsize14 color-black">1 hari</span></label>
                                                                </button>

                                                                <div class="ddwn-pg area-ddwn-page">
                                                                    <ul>
                                                                        <!-- list -->
                                                                    </ul>
                                                                </div>

                                                                <input type="hidden" class="value-dropdown num1" name="durasi_reminder" value="1">

                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="lst">
                                                        <div class="div pd-t10">
                                                            <div class="div ar-content ar-upload area-upload" role="false">
                                                                <a href="#" role="off" class="cmd-upload w32 fcs br-rds4 button-label" aria-data="false" data-max="5" data-edit="" data-label="Lampirkan berkas dalam bentuk file .pdf (ukuran maks: 5MB)">
                                                                    <span class="ic fas flaticon-attachment"></span>
                                                                    <span class="icr sli_icon-cloud-upload"></span>
                                                                    <div class="ar-label">
                                                                        <div class="div ttlx">
                                                                            <span>Dokumen</span>
                                                                        </div>
                                                                        <div class="div">
                                                                            <span class="label-upload label-name">Lampirkan berkas dalam bentuk file .pdf (ukuran maks: 5MB)</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <input type="file" name="file" class="hide empty" accept="application/pdf">
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="lst txt-center">
                                                        <button class="btn blue is-loading submit" role="off">
                                                            <span>Upload Dokumen</span>
                                                        </button>
                                                    </li>

                                                </ul>

                                                <input type="hidden" name="type" value="">
                                                <input type="hidden" name="user_id" value="">
                                                <input type="hidden" name="employe_id" value="">
                                                <input type="hidden" name="document_id" value="">
                                                <input type="hidden" name="delete_id" value="" class="empty">

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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

// selectedEmployeList();

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
        listx = listx.replace('{date}', item.join);
        listx = listx.replace('{name}', item.name);
        listx = listx.replace('{gender}', (item.gender === 1 ? 'sli_icon-symbol-male' : 'sli_icon-symbol-female'));
        listx = listx.replace('{genderlabel}', (item.gender === 1 ? 'Laki-Laki' : 'Perempuan'));
        listx = listx.replace('{groups}', item.group);
        listx = listx.replace('{register}', (status === 1 ? '<li class="done"><span>AKTIF</span></li>' : ( status === 2 ? '<li class="progress"><span>VERIFY</span></li>' : ( status === 3 ? '<li class="hold"><span>No AKUN</span></li>' : '<li class="hold"><span>Non AKTIF</span></li>') ) ) );
        listx = listx.replace('{phone}', (item.phone === '' ? '' : ('<span class="label sli_icon-screen-tablet"></span> ' + item.phone) ) );
        listx = listx.replace('{email}', (item.email === '' ? '' : ('<span class="label fa flaticon2-black-back-closed-envelope-shape"></span> ' + item.email) ) );

        var doc = '';
        if( item.document !== '')
        {
            $.each(item.document, function(i,item)
            {
                doc += '<li class="dotli"><a href="'+item.url+'" class="color-blue text-hov-u" target="_blank">'+item.type_name+'<span> '+(item.subtype_name === '' ? '' : '('+item.subtype_name+')')+'</span></a></li>';
            });
        }
        listx = listx.replace('{document}', (item.document === '' ? '' : doc) );
    

        listx = listx.replace('{address}', item.address);
        listx = listx.replace('{address2}', item.address2);
        listx = listx.replace('{address3}', item.address3);

        list += listx;
    });

    return list;
}

async function getdataprvinsi()
{
    var $URL = config.apps.URL_API + '/api/data/bps/provinsi';
    var $t = FormSending("","GET","key","",$URL);
    var area = $("body").find("#modal-employe .area-contact-provinsi");
    
    area.find("button.btn label span").html("Pilih Provinsi");
    $("body").find("#modal-employe .area-contact-city").addClass("hide");
    $("body").find("#modal-employe .area-contact-kecamatan").addClass("hide");

    $t.success(function(n)
    {
        var rsp = n;
        var list = ' <li aria-selected="false"><button role="off" dataid="" data-modal="" data-modal-label="" data-get="" class="cmd-set-provinsi"><span>Pilih Provinsi</span></button></li>';
        $.each(rsp.list, function(i,item)
        {
            list += ' <li aria-selected="false"><button role="off" class="cmd-set-provinsi" dataid="'+item.id+'" data-modal="" data-modal-label="" data-get=""><span>'+item.name+'</span></button></li>';
        });
        area.find("ul").html(list);
        // console.log(n);
    });
    $t.error(function(n)
    {
        console.log(n);
    })
}

async function getdatacity(w)
{
    var $URL = config.apps.URL_API + '/api/data/bps/city?pid='+w;
    var $t = FormSending("","GET","key","",$URL);
    var area = $("body").find("#modal-employe .area-contact-city");

    area.find("button.btn label span").html("Pilih Kota/Kabupaten");
    area.find(".value-dropdown").val("-1");
    area.removeClass("hide");
    $("body").find("#modal-employe .area-contact-kecamatan").addClass("hide");

    $t.success(function(n)
    {
        var rsp = n;
        var list = ' <li aria-selected="false"><button role="off" dataid="" data-modal="" data-modal-label="" data-get="" class="cmd-set-city"><span>Pilih Kota/Kabupaten</span></button></li>';
        $.each(rsp.list, function(i,item)
        {
            list += ' <li aria-selected="false"><button role="off" class="cmd-set-city" dataid="'+item.id+'" data-modal="" data-modal-label="" data-get=""><span>'+item.name+'</span></button></li>';
        });
        area.find("ul").html(list);
        
        // console.log(n);
    });
    $t.error(function(n)
    {
        console.log(n);
    })
}

async function getdatakecamatan(w)
{
    var $URL = config.apps.URL_API + '/api/data/bps/kecamatan?cid='+w;
    var $t = FormSending("","GET","key","",$URL);
    var area = $("body").find("#modal-employe .area-contact-kecamatan");
    area.find("button.btn label span").html("Pilih Kecamatan");
    area.removeClass("hide");
    area.find(".value-dropdown").val("-1");

    $t.success(function(n)
    {
        var rsp = n;
        var list = ' <li aria-selected="false"><button role="off" dataid="" data-modal="" data-modal-label="" data-get=""><span>Pilih Kecamatan</span></button></li>';
        $.each(rsp.list, function(i,item)
        {
            list += ' <li aria-selected="false"><button role="off" dataid="'+item.id+'" data-modal="" data-modal-label="" data-get=""><span>'+item.name+'</span></button></li>';
        });
        area.find("ul").html(list);
        
    });
    $t.error(function(n)
    {
        console.log(n);
    })
}

async function getdatadivisi(w)
{

    var $URL = config.apps.URL_API + '/api/employe/data/groups';
    var $t = FormSending("","GET","key","",$URL);
    var area = $("#"+ w).find(".area-groups");

    $t.success(function(n)
    {
        // console.log(n);
        var rsp = n;
        var list = ' <li aria-selected="false"><button role="off" dataid="-1" data-modal="" data-modal-label="" data-get="" class=""><span>Semua Divisi</span></button></li>';
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

getdatadivisi("form-table");

$(document).ready(function()
{
    //MODAL CREATE
    $(".cmd-modal-create").click(function(e)
    {
        var cmd = $(this),
        modal = $("body").find("#modal-employe"),
        form = modal.find("form");

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            form.find("span.error").remove();
        form.find(".br-error").removeClass("br-error");
            modal.find("input[name='type']").val("new");
            modal.find(".title").html("Tambah Karyawan");

            //
            clearEmptyForm(modal);

            getdatadivisi("modal-employe");

            //
            getdataprvinsi();


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
        modal = $("body").find("#modal-employe"),
        form = modal.find("form");
        

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            form.find("span.error").remove();
            form.find(".br-error").removeClass("br-error");

        //
            modal.find("input[name='type']").val("edit");
            modal.find(".title").html("Sunting Karyawan");
            modal.find("button.submit").html("Simpan");
            modal.find("button.submit-delete").removeClass("hide");
            modal.find("input[type='text']").removeAttr("disabled");
            modal.find("button.cddwn").removeAttr("disabled");
            modal.find("button.submit").removeAttr("disabled");
            modal.find(".load").removeClass("hide");

            modal.find("input[name='user_id']").val(getaccount().id);
            getdatadivisi("modal-employe");

            //
            getdataprvinsi();

            var $URL = config.apps.URL_API + '/api/employe/show?id='+id;
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

        form.find("*[name='name']").val(rsp.name);
        form.find("*[name='gender']").val(rsp.gender);
        form.find("*[name='divisi']").val(rsp.divisi);
        form.find("*[name='tempatlahir']").val(rsp.place_birth);
        form.find("*[name='tgllahir']").val(rsp.birth);
        form.find("*[name='tgljoin']").val(rsp.joins);
        form.find("*[name='tglout']").val(rsp.leaves);
        form.find("*[name='phone']").val(rsp.phone);
        form.find("*[name='email']").val(rsp.email);
        form.find("*[name='address']").val(rsp.address);
        form.find("*[name='kodepos']").val(rsp.kodepos);
        form.find("*[name='employe_id']").val(rsp.id);
        form.find("*[name='provinsi_selected']").val(rsp.provinsi);
        form.find("*[name='city_selected']").val(rsp.city);
        form.find("*[name='kecamatan_selected']").val(rsp.kecamatan);

        var listcity = ' <li aria-selected="false"><button role="off" dataid="" data-modal="" data-modal-label="" data-get="" class="cmd-set-city"><span>Pilih Kota/Kabupaten</span></button></li>';
        $.each(rsp.listcity, function(i,item)
        {
            listcity += ' <li aria-selected="false"><button role="off" class="cmd-set-city" dataid="'+item.id+'" data-modal="" data-modal-label="" data-get=""><span>'+item.name+'</span></button></li>';
        });

        var listkec = ' <li aria-selected="false"><button role="off" dataid="" data-modal="" data-modal-label="" data-get=""><span>Pilih Kecamatan</span></button></li>';
        $.each(rsp.listkecamatan, function(i,item)
        {
            listkec += ' <li aria-selected="false"><button role="off" dataid="'+item.id+'" data-modal="" data-modal-label="" data-get=""><span>'+item.name+'</span></button></li>';
        });
        

        //
        var selectGender = form.find("*[name='gender']").parent(".area-ddwn");
        var labelGender = selectGender.find("li button[dataid='"+rsp.gender+"'] span").html();

        var selectDivisi = form.find("*[name='divisi']").parent(".area-ddwn");
        var labelDivisi = selectDivisi.find("li button[dataid='"+rsp.divisi+"'] span").html();

        var selectProvinsi = form.find("*[name='provinsi_selected']").parent(".area-ddwn");
        var labelProvinsi = selectProvinsi.find("li button[dataid='"+rsp.provinsi+"'] span").html();

        var selectCity = form.find("*[name='city_selected']").parents(".area-selected-div");
        selectCity.find("ul").html(listcity);
        selectCity.removeClass("hide");
        var labelCity = selectCity.find("ul li button[dataid='"+rsp.city+"'] span").html();

        var selectKecamatan = form.find("*[name='kecamatan_selected']").parents(".area-selected-div");
        selectKecamatan.find("ul").html(listkec);
        selectKecamatan.removeClass("hide");
        var labelKecamatan = selectKecamatan.find("ul li button[dataid='"+rsp.kecamatan+"'] span").html();
        
        

        selectGender.find('label span').html(labelGender);
        selectGender.find("li button[dataid='"+rsp.gender+"']").parent("li").attr("aria-selected","true");
        selectDivisi.find('label span').html(labelDivisi);
        selectDivisi.find("li button[dataid='"+rsp.divisi+"']").parent("li").attr("aria-selected","true");
        selectProvinsi.find('label span').html(labelProvinsi);
        selectProvinsi.find("li button[dataid='"+rsp.provinsi+"']").parent("li").attr("aria-selected","true");
        selectCity.find('label span').html(labelCity);
        selectCity.find("ul li button[dataid='"+rsp.city+"']").parent("li").attr("aria-selected","true");
        selectKecamatan.find('label span').html(labelKecamatan);
        selectKecamatan.find("ul li button[dataid='"+rsp.kecamatan+"']").parent("li").attr("aria-selected","true");

        
    }

    //
    $("body").on("click", "#modal-employe .cmd-set-provinsi", function(e)
    {
        var cmd = $(this);
        if( cmd.attr("dataid") !== '')
        {
            //
            getdatacity(cmd.attr("dataid"));
            return;
        }

        $("#modal-employe .area-contact-city").addClass("hide");
        $("#modal-employe .area-contact-kecamatan").addClass("hide");
        
    });

    //
    $("body").on("click", "#modal-employe .cmd-set-city", function(e)
    {
        var cmd = $(this);
        if( cmd.attr("dataid") !== '')
        {
            //
            getdatakecamatan(cmd.attr("dataid"));
            return;
        }

        $("#modal-employe .area-contact-kecamatan").addClass("hide");
        
    });



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
        checkFormEmploye(form);
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
    $('body').on('click', '#form-create-employe button.submit', function(e)
    {
        e.preventDefault();
        $(this).parents('form').submit();
    
    });


    $('#form-create-employe').submit(function(e)
    {
        e.preventDefault();
        var form = $(this),
        button = form.find('button.submit');
        
        if( button.attr('role') === 'off' )
        {
            button.attr('role', 'on');
            var $check = checkFormEmploye(form);

            if( $check )
            {
                //submit
                var $URL = config.apps.URL_API + '/api/employe/create';
                var $t = FormSending(form,"POST","key","form",$URL);
                $t.success(function(n)
                {
                    // console.log(n);
                    if( form.find('*[name="type"]').val() === 'new')
                    {
                        clearEmptyForm(modal);
                    }
                    button.attr('role','off');
                    loadTable();
                    flagnotif("success", n.message);
                });
                $t.error(function(n)
                {
                    var rsp = n.responseJSON;
                    // console.log(n);
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



    function checkFormEmploye(el)
    {
        var form = el,
        modal = form.parents("#modal-employe"),
        name = form.find('input[name="name"]'),
        gender = form.find('input[name="gender"]'),
        tempatlahir = form.find('input[name="tempatlahir"]'),
        tgllahir = form.find('input[name="tgllahir"]'),
        groups = form.find('input[name="divisi"]'),
        tgljoin = form.find('input[name="tgljoin"]'),
        phone = form.find('input[name="phone"]'),
        provinsi = form.find('input[name="provinsi_selected"]'),
        city = form.find('input[name="city_selected"]'),
        kecamatan = form.find('input[name="kecamatan_selected"]'),
        address = form.find('textarea[name="address"]'),
        kodepos = form.find('input[name="kodepos"]'),
        button = form.find('button.submit');

        //check
        form.find('span.error').remove();
        form.find('.br-error').removeClass('br-error');

        //
        if( $.trim(name.val()).length < 3  || $.trim(gender.val()) === '' || $.trim(tempatlahir.val()) === '' || $.trim(tgllahir.val()) === '' || $.trim(groups.val()) === '' || $.trim(tgljoin.val()) === '' || $.trim(phone.val()).length < 9 || $.trim(provinsi.val()) === '-1' || $.trim(address.val()).length < 10 || $.trim(kodepos.val()).length < 5 || $.trim(provinsi.val()) !== '-1' && $.trim(city.val()) === '-1' || $.trim(city.val()) !== '-1' && $.trim(kecamatan.val()) === '-1')
        {

            //name
            if( $.trim(name.val()).length < 3 )
            {
                name.parent('.ar-content').append('<span class="error">Harap isi sekurangnya 3 karakter</span>');
                name.addClass('br-error');
            }

            //gender
            if( $.trim(gender.val()) === '' )
            {
                gender.parent('.ar-content').append('<span class="error">Harap pilih gender</span>');
                gender.parent('.ar-content').find("button.btn").addClass('br-error');
            }

            // tempat lahir
            if( $.trim(tempatlahir.val()) === '')
            {
                tempatlahir.parent('.ar-content').append('<span class="error">Harap isi tempat lahir</span>');
                tempatlahir.addClass('br-error');
            }

            // tgl lahir
            if( $.trim(tgllahir.val()) === '')
            {
                tgllahir.parents('.ar-content').append('<span class="error">Harap isi tanggal lahir</span>');
                tgllahir.addClass('br-error');
            }

            //divisi
            if( $.trim(groups.val()) === '' )
            {
                groups.parent('.ar-content').append('<span class="error">Harap pilih divisi</span>');
                groups.parent('.ar-content').find("button.btn").addClass('br-error');
            }

            // tgl join
            if( $.trim(tgljoin.val()) === '')
            {
                tgljoin.parents('.ar-content').append('<span class="error">Harap isi tanggal join karyawan</span>');
                tgljoin.addClass('br-error');
            }

            //phone
            if( $.trim(phone.val()).length < 9)
            {
                phone.parents('.ar-content').append('<span class="error">No HP sekurangnya 9 karakter</span>');
                phone.addClass('br-error');
            }

            //provinsi
            if( $.trim(provinsi.val()) === '-1' )
            {
                provinsi.parent('.ar-content').append('<span class="error">Harap pilih provinsi</span>');
                provinsi.parent('.ar-content').find("button.btn").addClass('br-error');
            }

            if( $.trim(address.val()).length < 10)
            {
                address.parents('.ar-content').append('<span class="error">Isikan alamat sekurangnya 10 karakter</span>');
                address.addClass('br-error');
            }

            if( $.trim(kodepos.val()).length < 5)
            {
                kodepos.parents('.ar-content').append('<span class="error">Kodepos sekurangnya 5 karakter</span>');
                kodepos.addClass('br-error');
            }

            if( $.trim(provinsi.val()) !== '-1' && $.trim(city.val()) === '-1')
            {
                city.parent('.ar-content').append('<span class="error">Harap pilih Kota/Kabupaten</span>');
                city.parent('.ar-content').find("button.btn").addClass('br-error');
            }

            if( $.trim(city.val()) !== '-1' && $.trim(kecamatan.val()) === '-1' )
            {
                kecamatan.parent('.ar-content').append('<span class="error">Harap pilih Kecamatan</span>');
                kecamatan.parent('.ar-content').find("button.btn").addClass('br-error');
            }

            button.attr('role','off');
            return false;
        }

        return true;

        
    }

    $("#form-create-employe input.empty").keyup(function(n)
    {
        // $(this).parents("form").submit();
        var form = $(this).parents("form");
        checkFormEmploye(form);
    })


    //MODAL DOCUMENT
    $("body").on("click", ".cmd-document", function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        id = cmd.parents(".tr").attr("dataid"),
        modal = $("body").find("#modal-document");

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            modal.removeClass("hide");
            modal.find(".load").removeClass("hide");
            modal.find("*[name='user_id']").val(getaccount().id);

            var $URL = config.apps.URL_API + "/api/employe/document/show?id=" + id;
            var $t = FormSending("","GET","key","",$URL);
            $t.success(function(n)
            {
                console.log(n);
                var rsp = n.response;
                modal.find(".value-name").html(rsp.name);
                modal.find(".value-divisi").html(rsp.divisi);
                modal.find(".value-phone").html(rsp.phone);
                modal.find(".load").addClass("hide");
                modal.find("*[name='employe_id']").val(rsp.id);
                

                listinmodal(modal,rsp.list);
                cmd.attr("role", "off");
            });
            $t.error(function(n)
            {
                console.log(n);
                cmd.attr("role", "off");
            });
            

        }
    });

    //list in modal
    async function getlistinmodaldocument(w)
    {
        var modal = w,
        id = modal.find("*[name='employe_id']").val();

        var $URL = config.apps.URL_API + '/api/employe/document/listmodal?id='+id;
        var $t = FormSending("","GET","key","",$URL);
        var list = '';
        $t.success(function(n)
        {
            console.log(n);
            listinmodal(modal,n.response);
        });
        $t.error(function(n)
        {
            console.log(n);
        })
    }


    function listinmodal(w,e)
    {
        var modal = w,
        data = e;
        var list = '';
        if(data !== '')
        {
            $.each(data, function(i,item)
            {
                list += '<tr class="lst ">';
                    list += '<td class="td-center td-width50 pd5">'+ ( i+1) +'</td>';
                    list += '<td class="pd5 up-txt"><span>'+(item.type.name)+'</span>'+( item.subtype.id === 0 ? '' : '<span class="label"> ('+item.subtype.name+')</span>')+'</td>';
                    list += '<td class="td-width140 pd5">'+(item.expired)+'</td>';
                    list += '<td class="td-center td-width70 pd5">';
                        list += '<div class="div">';
                            list += '<button role="off" class="fsize10 no-br br-rds4 del cmd-delete" dataid="'+item.id+'"><span class="fa flaticon2-cross"></span></button>';
                        list += '</div>';
                    list += '</td>';
                list += '</tr>';
            });
            modal.find(".area-list-li").html(list);
            return;
        }

        list += '<tr><td colspan="4" class="pd15 td-center empty"><div class="div">Tidak ada dokumen di upload</div></td></tr>';
        modal.find(".area-list-li").html(list);

    }


    $("body").on("click", "#modal-document button.cmd-delete", function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        modal = cmd.parents("#modal-document"),
        form = modal.find("form");

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            form.find("*[name='delete_id']").val(cmd.attr("dataid"));

            cmd.parents("tr.lst").remove();
            var $URL = config.apps.URL_API + '/api/employe/document/delete';
            var $t = FormSending(form,"POST","key","form",$URL);
            $t.success(function(n)
            {
                // console.log(n);
                var rsp = n;
                
                form.find("*[name='delete_id']").val('');
                loadTable();
                cmd.attr("role", "off");
                checklistdocumen(modal)
                flagnotif("success", rsp.message);
            });
            $t.error(function(n)
            {
                console.log(n);
                cmd.attr("role", "off");
                flagnotif("error", msgboxError());
            });
        }
    });


    function checklistdocumen(w)
    {
        var modal = w,
        table = modal.find("table.area-list-li");

        var count = table.find("tr").length;
        if( count === 0 )
        {
            table.html('<tr><td colspan="4" class="pd15 td-center empty"><div class="div">Tidak ada dokumen di upload</div></td></tr>');
        }

    }

    //
    $("body").on("click", ".area-selected-doc-type li button", function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        modal = cmd.parents(".area-modal-in"),
        area = modal.find(".area-selected-skil");

        if( cmd.attr("dataid") === "3")
        {
            getlistdocsubtype(modal);
            area.removeClass("hide");
            return;
        }

        area.find("input").val("");
        area.find("button.btn span").html(area.find(".area-ddwn").attr("data-label"));
        area.find("li").attr("aria-selected", "false");
        area.addClass("hide");
    });

    $("#modal-document button.submit").click(function(e)
    {
        e.preventDefault();
        $(this).parents("form").submit();
    });

    //INMODAL SHOW
    $("#modal-document .cmd-inmodal-ddwn").click(function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        modal = cmd.parents(".modal-new-view"),
        inmodal = modal.find(".area-modal-in"),
        form = inmodal.find("form");

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            durationreminderday(form);
            clearEmptyForm(inmodal);
            getlistdoctype(inmodal);
            form.find("*[name='type']").val("new");
            inmodal.removeClass("hide");
            inmodal.attr("role","on");
            cmd.attr("role", "off");
        }
    });


    async function getlistdoctype(w)
    {
        var modal = w;
        var $URL = config.apps.URL_API + '/api/employe/document/type/list';
        var $t = FormSending("","GET","key","",$URL);
        $t.success(function(n)
        {
            var rsp = n.response;
            var list = '';
            $.each(rsp, function(i,item)
            {
                list += '<li aria-selected="false">';
                    list += '<button role="off" dataid="'+item.id+'" data-modal="" data-modal-label="" data-get=""><span>'+item.name+'</span></button>';
                list += '</li>';
            });

            modal.find(".area-selected-doc-type ul").html(list);
            console.log(n);
        });
        $t.error(function(n)
        {
            console.log(n);
        });
    }

    async function getlistdocsubtype(w)
    {
        var modal = w;
        var $URL = config.apps.URL_API + '/api/employe/document/subtype/list';
        var $t = FormSending("","GET","key","",$URL);

        modal.find(".area-selected-skil ul").html('');
        $t.success(function(n)
        {
            var rsp = n.response;
            var list = '';
            $.each(rsp, function(i,item)
            {
                list += '<li aria-selected="false">';
                    list += '<button role="off" dataid="'+item.id+'" data-modal="" data-modal-label="" data-get=""><span>'+item.name+'</span></button>';
                list += '</li>';
            });

            modal.find(".area-selected-skil ul").html(list);
            console.log(n);
        });
        $t.error(function(n)
        {
            console.log(n);
        });
    }


    //SUBMIT UPLOAD
    $("#modal-document form").submit(function()
    {
        var form = $(this),
        modal = form.parents("#modal-document"),
        cmd = form.find("button.submit");

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            var check = checkFormUpload(form);

            if( check)
            {
                var $URL = config.apps.URL_API + form.attr("action"),
                $t = FormSendingNew(form,"POST","key","file",$URL);
                $t.success(function(n)
                {
                    var rsp = n;
                    console.log(n);

                    if(form.find("*[name='type']").val() === "new" )
                    {
                        clearEmptyForm(form);
                        cmd.attr("role", "off");
                        getlistinmodaldocument(modal);
                        flagnotif("success", rsp.message );
                        return;
                    }

                    
                    flagnotif("success", rsp.message );
                    cmd.attr("role", "off");
                });
                $t.error(function(n)
                {
                    var rsp = n.responseJSON;
                    console.log(rsp);

                    if( n.status === 403)
                    {
                        cmd.attr("role", "off");
                        flagnotif("error", rsp.message);
                        return;
                    }

                    flagnotif("error", msgboxError());
                    cmd.attr("role", "off");
                });
            }
        }
    });

    //
    function checkFormUpload(w)
    {
        var form = w,
        cmd = form.find("button.submit"),
        document_type = form.find("*[name='document_type']"),
        expired = form.find("*[name='expired_date']"),
        skil = form.find("*[name='skil_type']"),
        file = form.find("*[name='file']");

        //remove error
        form.find("span.error").remove();
        form.find(".br-error").removeClass("br-error");

        //
        if( $.trim(document_type.val()) === '' ||  $.trim(document_type.val()) === '3' && $.trim(skil.val()) === '' || $.trim(expired.val()) === '' || $.trim(file.val()) === '' )
        {
            if( $.trim(document_type.val()) === '')
            {
                document_type.parent('.ar-content').append('<span class="error">Harap pilih Jenis</span>');
                document_type.parent('.ar-content').find("button.btn").addClass('br-error');
            }

            if( $.trim(document_type.val()) === '3' && $.trim(skil.val()) === '')
            {
                skil.parent('.ar-content').append('<span class="error">Harap pilih Keahlian</span>');
                skil.parent('.ar-content').find("button.btn").addClass('br-error');
            }

            if( $.trim(expired.val()) === '')
            {
                expired.parents('.ar-content').append('<span class="error">Tentukan Epired date</span>');
                expired.addClass('br-error');
            }

            if( $.trim(file.val()) === '')
            {
                file.parents('.ar-content').append('<span class="error">Lampirkan dokumen</span>');
                file.parent('.ar-content').find('a').addClass('br-error');
            }
            cmd.attr("role", "off");
            return false;
        }

        return true;
    }


    //PAGING   
    $('.cmd-paging').click(function(e)
    {
        exePaging(e,$(this));
    });


    //FUNCTION CALL UPLOAD
    $(".cmd-upload").click(function(e)
    {
        e.preventDefault();
        previewUpload($(this));
    })

    $('body').on('change', 'input[name="file"]', function(e)
    {
        var form = $(this).parents("form");
        changePreviewUpload(this,$(this));
        checkFormEmploye(form);

    });

    // HIDE SPLASH
    hideSplash();


return false;
});
</script>
@endsection