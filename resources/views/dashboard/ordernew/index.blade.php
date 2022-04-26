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
                                    <span>Order</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="div head-tables">
                <div class="div clr-float">

                    <form action="/api/financial/orders/table" id="form-table" aria-temp="temp-table">


                        <button class="submit hide" role="off">submit</button>
                        <div class="fl-right w100px">

                            <div class="fl-right oarea-ddwn-hd oar-ddwn">
                                <button class="btn green btn-r cmd-modal-print" role="off" data-type="">
                                    <span class="ic sli_icon-cloud-download"></span>
                                    <span>Export to Excel</span>
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
                                                                    <button role="off"  dataid="2" ><span>Success</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="1" ><span>Progress</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="0" ><span>Pending</span></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <input type="hidden" class="value-dropdown" name="selected_status" value="-1">
                                                    </div>
                                                </div>
                                            </li>

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
                                                        <span>PROJECT</span>
                                                        <span class="ic-sort">
                                                            <span class="down fas fa-sort-amount-down"></span>
                                                            <span class="up fas fa-sort-amount-up"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="td-w230">
                                                <div class="td-iner">
                                                    <span class="ic sli_icon-tag"></span>
                                                    <span>RINCIAN</span>
                                                </div>
                                            </td>
                                            <td class="td-w260">
                                                <div class="td-iner">
                                                    <span class="ic sli_icon-note"></span>
                                                    <span>PROGRESS</span>
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
                <div class="spc up-txt">
                    <span class="label">KODE:</span>
                    <span class="fsize10 label">{code}</span>
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
                                        <b>{name}</b>
                                    </div>
                                    <div class="div label fsize12">
                                        <span class="label ic far fa-address-card"></span>
                                        <span>{customer}</span>
                                    </div>
                                    <div class="div">
                                        <span class="fsize11"><span class="ic label fsize10">KODE PO: </span> {code_po}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="td-w230 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span><span class="ic label sli_icon-tag"></span> {price}</span>
                                </div>
                                <div class="div label">
                                    <span><span class="ic label sli_icon-pointer"></span>{address}</span>
                                </div>
                                <div class="div" style="padding:8px 0px">
                                    <div class="div" style="border-top:1px dashed #ccc"></div>
                                </div>
                                <div class="div">
                                    <ul>
                                        <li class="dotli">{sdm}</li>
                                        <li class="dotli">{tools}</li>
                                    </ul>
                                </div>
                                
                                <div class="div" style="padding:8px 0px">
                                    <div class="div" style="border-top:1px dashed #ccc"></div>
                                </div>

                                <div class="div label">
                                    <span class="ic sli_icon-calendar"></span>
                                    <span class="fsize12">{startdate}</span>
                                    <span>-</span>
                                    <span class="fsize12">{enddate}</span>
                                </div>

                                <div class="div" style="padding:8px 0px">
                                    <div class="div" style="border-top:1px dashed #ccc"></div>
                                </div>
                                <div class="div">
                                    {document}
                                </div>
                            </div>
                        </td>
                        <td class="td-w260 wh-m-520">
                            <div class="td-iner" style="overflow:unset">
                                <div class="div">
                                    <ul class="clr-float ar-round txt-center">
                                        <li class="li-round">
                                            <div class="inl-round">
                                                <a href="#" aria-modal="true" aria-expand="false" role="off">
                                                    <div class="in-round br-rds50p">
                                                        <div class="tbl">
                                                            <div class="intbl">
                                                                <span class="fa flaticon2-check-mark sc"></span>
                                                                <span class="sli_icon-clock wt"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="div">
                                                        <span class="lbl-round">
                                                            Document 1
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="li-round">
                                            <div class="inl-round">
                                                <a href="#" aria-modal="false" aria-expand="false" role="off">
                                                    <div class="in-round br-rds50p">
                                                    <div class="tbl">
                                                            <div class="intbl">
                                                                <span class="fa flaticon2-check-mark sc"></span>
                                                                <span class="sli_icon-clock wt"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="div">
                                                        <span class="lbl-round">
                                                            Document 2
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="li-round">
                                            <div class="inl-round">
                                                <a href="#" aria-modal="false" aria-expand="false" role="off">
                                                    <div class="in-round br-rds50p">
                                                    <div class="tbl">
                                                            <div class="intbl">
                                                                <span class="fa flaticon2-check-mark sc"></span>
                                                                <span class="sli_icon-clock wt"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="div">
                                                        <span class="lbl-round">
                                                            Document 3
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
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

                                        <a class="btn btn-primary nobr grey s11" href="#" target="_blank" style="padding:0px 8px;"><span class="fas flaticon2-printer"></span></a>

                                        <!-- <button type="button" class="btn btn-primary nobr grey s11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-v"></span></button>

                                        <div class="dropdown-menu">
                                            <a class="dropdown-item afalse color-orange cmd-sunting" href="#" data-type="edit" data-open="page" data-target="" data-token="" role="off">
                                                <span>Sunting</span><span class="ic sli_icon-pencil"></span>
                                            </a>
                                        </div> -->
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

<div class="prover-modal-view modal-new-view white hide" id="modal-project">
    <div class="ar-modal-rel overflow-yA">
        <div class="modal-home">

            <div class="insed-body h-full pdtb20">

                <div class="arinsed mdl-partner pd-lr-40 pos-rel m-pd-lr25">

                    <div class="load txt-center pd-t10 hide">
                        <img src="/assets/svg/loading.blue.svg" alt="">
                    </div>

                    <div class="div header-box">
                        <b class="title">Pengajuan Project</b>
                        <a href="#" class="close afalse" role="off">
                            <span class="fa flaticon2-cross"></span>
                        </a>
                    </div>

                    <form action="/api/marketing/pengajuan/create" id="form-create-project" >

                        <ul class="artable">

                            <li class="list">
                                <div class="div">
                                    <table>
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Customer</b>
                                                    </div>
                                                    <div class="div label">Pilih customer atau perusahaan pengaju project
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                                
                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">Customer</b>
                                                    </div>

                                                    <div class="div dot-mandatory">
                                                        <div class="area-ddwn-mdl ar-content">
                                                            <button class="ddwn-mdl br-rds8 cmd-ddwn-select-modal" role="off">
                                                                    <div class="divH">
                                                                        <div class="tbl">
                                                                            <div class="intbl">
                                                                                <span class="fsize14 color-black label-value empty-label"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <div class="ic-right">
                                                                    <div class="divH">
                                                                        <div class="tbl">
                                                                            <div class="intbl">
                                                                                <div class="div">
                                                                                    <span class="sli_icon-user"></span>
                                                                                    <span class="fa flaticon2-down fsize8"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </button>
                                                            <input type="hidden" class="value empty" name="customer_id" value="">
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
                                                        <b>Informasi Project</b>
                                                    </div>
                                                    <div class="div label">Tentukan Nama Project, nilai project dan alamat lokasi
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">NAMA PROJECT</b>
                                                    </div>

                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty" placeholder="Nama Project" maxlength="75" name="name">
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>
                                                
                                                <div class="div w50p">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">Nilai Project</b>
                                                    </div>
                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty rupiahkeyup" placeholder="Rp. ..." maxlength="15" name="price">
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">ALAMAT LOKASI</b>
                                                    </div>
                                                    <div class="div ar-content dot-mandatory">
                                                        <textarea name="address" class="form-control empty" maxlength="250" placeholder="Alamat lokasi project..."></textarea>
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
                                                        <b>Tanggal pelaksanaan</b>
                                                    </div>
                                                    <div class="div label">Tentukan tanggal pelaksanaan project
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">

                                                <div class="div w50p">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">TGL MULAI</b>
                                                    </div>
                                                    <div class="div ar-content dot-mandatory">
                                                        <div class="se-date no-clr" role="off">
                                                            <input type="input" name="startdate" class="w100p form-control background-trf position-rt inputFalseAll empty singleDate typefalse" placeholder="Tgl Mulai" >
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
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">TGL SELESAI</b>
                                                    </div>
                                                    <div class="div ar-content dot-mandatory">
                                                        <div class="se-date no-clr" role="off">
                                                            <input type="input" name="enddate" class="w100p form-control background-trf position-rt inputFalseAll empty singleDate typefalse" placeholder="Tgl Selesai" >
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
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Kebutuhan SDM dan Alat</b>
                                                    </div>
                                                    <div class="div label">Uraikan kebutuhan SDM dan kebutuhan Alat
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">KEBUTUHAN SDM</b>
                                                    </div>
                                                    <div class="div ar-content dot-mandatory">
                                                        <textarea name="sdm" class="form-control empty" maxlength="250" placeholder="Uraikan kebutuhan SDM..."></textarea>
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">KEBUTUHAN Alat</b>
                                                    </div>
                                                    <div class="div ar-content dot-mandatory">
                                                        <textarea name="tools" class="form-control empty" maxlength="250" placeholder="Uraikan kebutuhan Alat..."></textarea>
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
                                                        <b>Dokumen PO</b>
                                                    </div>
                                                    <div class="div label">Lampirkan dokument PO dari Customer
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">DOKUMEN PO</b>
                                                    </div>
                                                    <div class="div ar-content ar-upload area-upload dot-mandatory" role="false">
                                                        <a href="#" role="off" class="cmd-upload w32 fcs br-rds4 button-label" aria-data="false" data-max="5" data-edit="" data-label="Lampirkan berkas dalam bentuk file .pdf (ukuran maks: 5MB)">
                                                            <span class="ic fas flaticon-attachment"></span>
                                                            <span class="icr sli_icon-cloud-upload"></span>
                                                            <div class="ar-label">
                                                                <div class="div ttlx">
                                                                    <span>Dokument PO</span>
                                                                </div>
                                                                <div class="div">
                                                                    <span class="label-upload label-name">Lampirkan berkas dalam bentuk file .pdf (ukuran maks: 5MB)</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <input type="file" name="file" class="hide empty" accept="application/pdf">
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr class="wh-m-620">
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
                        <input type="hidden" name="project_id" value="">

                    </form>

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
                                                            <span>Customer</span>
                                                            <a href="" class="close-inmodal" role="off">
                                                                <span class="fa flaticon2-cross"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mn">
                                            <div class="ttl">
                                                <div class="divH">
                                                    <div class="tbl">
                                                        <div class="intbl">
                                                            <div class="ar-src">
                                                                <input type="text" class="search">
                                                                <button class="clr">
                                                                    <span class="sli_icon-close"></span>
                                                                </button>
                                                            </div>
                                                            <button class="btn blue-wth fsize10" role="off">
                                                                <span class="fa flaticon2-add-1"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ar-li">
                                                <div class="inset-area">
                                                    <ul>
                                                        <li role="off" dataid="">
                                                            <a href="#" class="li cmd-select-li" role="off">
                                                                <div class="div clr-float">
                                                                    <div class="chk"></div>
                                                                    <div class="fl-left">
                                                                        <div class="div">
                                                                            <div class="div">
                                                                                <span class="li-label">PT. Angin Ribut</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" role="off" class="stn">
                                                                <span class="sli_icon-pencil"></span>
                                                                <span>Edit</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="ar-load">
                                                    <div class="div">
                                                        <img src="/assets/svg/loading.blue.svg" alt="loading">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="paging" value="1" >
                                            </div>

                                            <div class="foot">
                                                <div class="divH">
                                                    <div class="tbl">
                                                        <div class="intbl">
                                                            <button role="off" class="btn green cmd-keep-select" disabled="disabled">
                                                                <span>Simpan</span>
                                                            </button>
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
        listx = listx.replace('{admin}', item.admin);
        listx = listx.replace('{code}', item.code);
        listx = listx.replace('{code_po}', item.po.code);
        listx = listx.replace('{name}', item.po.name);
        listx = listx.replace('{customer}', item.po.customer);
        listx = listx.replace('{price}', 'Rp.'+formatRupiah(item.po.price));
        listx = listx.replace('{startdate}', item.po.date.start);
        listx = listx.replace('{enddate}', item.po.date.end);
        listx = listx.replace('{register}', (item.progress === 0 ? '<li class="hold"><span>PENDING</span></li>' : ( item.progress === 1 ? '<li class="progress"><span>PROGRESS</span></li>' : '<li class="done"><span>DONE</span></li>' ) ) );
        listx = listx.replace('{document}', (item.document === '' ? '' : '<a href="'+(item.document)+'" target="_blank" class="color-blue fsize11"><span class="ic flaticon2-file-1"></span>Dokument PO</a>'));

        listx = listx.replace('{sdm}', item.po.sdm);
        listx = listx.replace('{tools}', item.po.tools);
        listx = listx.replace('{address}', item.po.address);

        list += listx;
    });

    return list;
}

async function getdataprvinsi()
{
    var $URL = config.apps.URL_API + '/api/data/bps/provinsi';
    var $t = FormSending("","GET","key","",$URL);
    var area = $("body").find("#modal-project .area-contact-provinsi");
    
    area.find("button.btn label span").html("Pilih Provinsi");
    $("body").find("#modal-project .area-contact-city").addClass("hide");
    $("body").find("#modal-project .area-contact-kecamatan").addClass("hide");

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
    var area = $("body").find("#modal-project .area-contact-city");

    area.find("button.btn label span").html("Pilih Kota/Kabupaten");
    area.find(".value-dropdown").val("-1");
    area.removeClass("hide");
    $("body").find("#modal-project .area-contact-kecamatan").addClass("hide");

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
    var area = $("body").find("#modal-project .area-contact-kecamatan");
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

$(document).ready(function()
{
    //MODAL CREATE
    $(".cmd-modal-create").click(function(e)
    {
        var cmd = $(this),
        modal = $("body").find("#modal-project"),
        form = modal.find("form");

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            form.find("span.error").remove();
            form.find(".br-error").removeClass("br-error");
            modal.find("input[name='type']").val("new");
            modal.find(".title").html("Pengajuan Project");

            //
            clearEmptyForm(modal);

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
        modal = $("body").find("#modal-project"),
        form = modal.find("form");
        

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            form.find("span.error").remove();
            form.find(".br-error").removeClass("br-error");

        //
            modal.find("input[name='type']").val("edit");
            modal.find(".title").html("Sunting Project");
            modal.find("button.submit").html("Simpan");
            modal.find("input[type='text']").removeAttr("disabled");
            modal.find("button.cddwn").removeAttr("disabled");
            modal.find("button.submit").removeAttr("disabled");
            modal.find(".load").removeClass("hide");

            modal.find("input[name='user_id']").val(getaccount().id);

            //
            getdataprvinsi();

            var $URL = config.apps.URL_API + '/api/marketing/pengajuan/show?id='+id;
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
        form.find("*[name='price']").val(formatRupiah(rsp.price));
        form.find("*[name='customer_id']").val(rsp.customer.id);
        form.find(".cmd-ddwn-select-modal .label-value").html(rsp.customer.name);
        form.find("*[name='address']").val(rsp.address);
        form.find("*[name='project_id']").val(rsp.id);
        form.find("*[name='startdate']").val(rsp.startdate);
        form.find("*[name='enddate']").val(rsp.enddate);
        form.find("*[name='sdm']").val(rsp.sdm);
        form.find("*[name='tools']").val(rsp.tools);
        var file = form.find("*[name='file']"),
        area_file = file.parent(".ar-content"),
        file_label = area_file.find("a").attr("data-label");
        area_file.find(".label-upload").html(rsp.file === '' ? file_label : rsp.file);
        area_file.find("a").attr("data-edit", rsp.file === '' ? '' : rsp.file);
        area_file.find("a").attr("aria-data", (rsp.file === '' ? 'false' : 'true') );
    }

    //
    $("body").on("click", "#modal-project .cmd-set-provinsi", function(e)
    {
        var cmd = $(this);
        if( cmd.attr("dataid") !== '')
        {
            //
            getdatacity(cmd.attr("dataid"));
            return;
        }

        $("#modal-project .area-contact-city").addClass("hide");
        $("#modal-project .area-contact-kecamatan").addClass("hide");
        
    });

    //
    $("body").on("click", "#modal-project .cmd-set-city", function(e)
    {
        var cmd = $(this);
        if( cmd.attr("dataid") !== '')
        {
            //
            getdatakecamatan(cmd.attr("dataid"));
            return;
        }

        $("#modal-project .area-contact-kecamatan").addClass("hide");
        
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
    $('body').on('click', '#form-create-project button.submit', function(e)
    {
        e.preventDefault();
        $(this).parents('form').submit();
    
    });


    $('#form-create-project').submit(function(e)
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
                var $URL = config.apps.URL_API + form.attr("action");
                var $t = FormSendingNew(form,"POST","key","file",$URL);
                $t.success(function(n)
                {
                    // console.log(n);
                    if( form.find('*[name="type"]').val() === 'new')
                    {
                        clearEmptyForm(form);
                        getNotification();
                    }
                    button.attr('role','off');
                    loadTable();
                    flagnotif("success", n.message);
                });
                $t.error(function(n)
                {
                    console.log(n);
                    var rsp = n.responseJSON;
                    // if( n.status === 403)
                    // {
                    //     form.find('*[name="'+rsp.focus+'"]').parent('.ar-content').append('<span class="error">'+rsp.message+'</span>');
                    //     form.find('*[name="'+rsp.focus+'"]').addClass('br-error');
                    //     button.attr('role','off');
                    //     form.find('*[name="'+rsp.focus+'"]').focus();
                    //     return;
                    // }
                    button.attr('role','off');
                    
                })
            }
        }

        return false;
    });



    function checkFormEmploye(el)
    {
        var form = el,
        modal = form.parents("#modal-project"),
        name = form.find('*[name="name"]'),
        customer = form.find('*[name="customer_id"]'),
        startdate = form.find('*[name="startdate"]'),
        enddate = form.find('*[name="enddate"]'),
        price = form.find('*[name="price"]'),
        address = form.find('*[name="address"]'),
        sdm = form.find('*[name="sdm"]'),
        file = form.find('*[name="file"]'),
        tools = form.find('*[name="tools"]'),
        button = form.find('button.submit');

        //check
        form.find('span.error').remove();
        form.find('.br-error').removeClass('br-error');

        //
        if( $.trim(name.val()) === ''  || $.trim(customer.val()) === '' || $.trim(startdate.val()) === '' || $.trim(enddate.val()) === '' || $.trim(price.val()) === '' || $.trim(sdm.val()) === '' || $.trim(tools.val()) === '' || $.trim(address.val()).length < 10 || $.trim(file.val()) === '' && form.find('*[name="type"]').val() === 'new' )
        {

            //name
            if( $.trim(name.val()) === '' )
            {
                name.parent('.ar-content').append('<span class="error">Harap isikan nama project</span>');
                name.addClass('br-error');
            }

            //customer
            if( $.trim(customer.val()) === '' )
            {
                customer.parent('.ar-content').append('<span class="error">Harap pilih Customer</span>');
                customer.parent('.ar-content').find("button").addClass('br-error');
            }

            // start date
            if( $.trim(startdate.val()) === '')
            {
                startdate.parents('.ar-content').append('<span class="error">Harap isi tanggal mulai</span>');
                startdate.addClass('br-error');
            }

            // end date
            if( $.trim(enddate.val()) === '')
            {
                enddate.parents('.ar-content').append('<span class="error">Harap isi tanggal selesai</span>');
                enddate.addClass('br-error');
            }

            // sdm
            if( $.trim(sdm.val()) === '')
            {
                sdm.parents('.ar-content').append('<span class="error">Harap isi kebutuhan SDM</span>');
                sdm.addClass('br-error');
            }

            if( $.trim(tools.val()) === '')
            {
                tools.parents('.ar-content').append('<span class="error">Harap isi kebutuhan Alat</span>');
                tools.addClass('br-error');
            }



            //price
            if( $.trim(price.val()) === '')
            {
                price.parents('.ar-content').append('<span class="error">Isi kolom nilai project</span>');
                price.addClass('br-error');
            }

            if( $.trim(address.val()).length < 10)
            {
                address.parents('.ar-content').append('<span class="error">Isikan alamat sekurangnya 10 karakter</span>');
                address.addClass('br-error');
            }

            if( $.trim(file.val()) === '' && form.find('*[name="type"]').val() === 'new' )
            {
                file.parents('.ar-content').append('<span class="error">Lampirkan dokumen PO</span>');
                file.parent('.ar-content').find(".cmd-upload").addClass('br-error');
            }

            button.attr('role','off');
            return false;
        }

        return true;

        
    }

    $("#form-create-project .empty").keyup(function(n)
    {
        // $(this).parents("form").submit();
        var form = $(this).parents("form");
        checkFormEmploye(form);
    })


    $('.cmd-paging').click(function(e)
    {
        exePaging(e,$(this));
    });


    //MODAL IN MODAL
    $(".cmd-ddwn-select-modal").click(function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        modal = cmd.parents(".modal-new-view"),
        inmodal = modal.find(".area-modal-in");

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            inmodalarea(inmodal);
            cmd.attr("role", "off");
        }
    });

    function inmodalarea(w)
    {
        var modal = w,
        load = modal.find(".ar-load"),
        ul = modal.find("ul"),
        search = modal.find(".search").val(),
        paging = modal.find("*[name='paging']").val(),
        button = modal.find("button.cmd-keep-select");

        modal.removeClass("hide");
        modal.attr("role", "on");

        button.attr("disabled", "disabled");
        load.show();
        ul.html("");
        var $URL = config.apps.URL_API + '/api/customers/inmodal?search='+search+'&pg='+paging;
        var $t = FormSending("","GET","key","",$URL);
        $t.success(function(n)
        {
            console.log(n);

            var rsp = n.response,
            li = '';
            $.each(rsp, function(i,item)
            {
                li += '<li role="off" dataid="'+item.id+'">';
                    li  +=  '<a href="#" class="li cmd-select-li" role="off"><div class="div clr-float">';
                        li += '<div class="chk"></div>';
                        li += '<div class="fl-left"><div class="div"><div class="div"><span class="li-label">'+item.name+'</span></div></div></div>';
                    li += '</div></a>';
                    li += '<a href="#" role="off" class="stn"><span class="sli_icon-pencil fsize8"></span><span> Edit</span></a>';
                li += '</li>';
            });

            ul.html(li);
            load.hide();
        });
        $t.error(function(n)
        {
            console.log(n);
        });
    }

    $("body").on("click", "#modal-project .cmd-select-li", function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        modal = cmd.parents(".area-modal-in"),
        button = modal.find("button.cmd-keep-select");

        if( cmd.attr('role') === 'off')
        {
            modal.find("ul li").attr("role", "off");
            cmd.attr('role', 'on');
            cmd.parent("li").attr("role", "on");
            button.removeAttr("disabled");
            cmd.attr("role","off");
        }

    });


    $(".area-modal-in button.cmd-keep-select").click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        modal = cmd.parents(".area-modal-in"),
        area = cmd.parents(".modal-new-view");

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            
            area.find("*[name='customer_id']").val( modal.find("ul li[role='on']").attr("dataid") );
            area.find(".cmd-ddwn-select-modal span.label-value").html(modal.find("ul li[role='on'] span.li-label").html());
            
            area.find(".area-ddwn-mdl").find("span.error").remove();
            area.find(".area-ddwn-mdl .br-error").removeClass("br-error");
            modal.find("a.close-inmodal").click();
            cmd.attr("role","off");
        }
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