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
                                    <span>Customer</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="div head-tables">
                <div class="div clr-float">

                    <form action="/api/customers/table" id="form-table" aria-temp="temp-table-customer">


                        <button class="submit hide" role="off">submit</button>
                        <div class="fl-right w100px">

                            <div class="fl-right oarea-ddwn-hd oar-ddwn">
                                <button class="btn green btn-r cmd-modal-create" role="off" data-type="">
                                    <span class="ic fa flaticon2-add-1"></span>
                                    <span>Baru</span>
                                </button>
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
                                            <td class="td-w260">
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

<div class="div hide" id="temp-table-customer">
    <div class="tr" dataid="{id}">

        <div class="thr">
            <div class="div clr-float">
                <div class="spc">
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
                                    <div class="div">
                                    {npwp}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="td-w260 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span>{owner}</span>
                                </div>
                                <div class="div">
                                    <span>{phone}</span>
                                </div>
                                <div class="div">
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

<div class="prover-modal-view modal-new-view white hide" id="modal-customer">
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
                    <form action="/api/customers/create" id="form-create" >

                        <ul class="artable">

                            <li class="list">
                                <div class="div">
                                    <table>
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Nama Perusahaan</b>
                                                    </div>
                                                    <div class="div label">Isikan name perusahaan sekurangnya 3 karakter.
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                                
                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">NAMA PERUSAHAAN</b>
                                                    </div>

                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty" placeholder="Nama Perusahaan" maxlength="100" name="name">
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div w50p">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">JENIS</b>
                                                    </div>

                                                    <div class="ddwn area-ddwn ddwn-button-select ar-content keep dot-mandatory area-customer-type" data-label="Pilih Jenis">

                                                        <button class="btn br-rds8 cddwn fcs" role="off">
                                                            <label><span class="fsize14 color-black">Pilih Jenis</span></label>
                                                        </button>

                                                        <div class="ddwn-pg area-ddwn-page">
                                                            <ul>
                                                                <!-- list -->
                                                            </ul>
                                                        </div>

                                                        <input type="hidden" class="value-dropdown empty" name="customer_type" value="">

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
                                                        <b>Kontak Person</b>
                                                    </div>
                                                    <div class="div label">Isikan Kontak Person
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">NAMA</b>
                                                    </div>
                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty" placeholder="Nama" maxlength="100" name="owner">
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div w50p">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">WHATSAPP</b>
                                                    </div>
                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty" placeholder="Whatsapp" maxlength="15" name="phone">
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">EMAIL</b>
                                                    </div>
                                                    <div class="div ar-content">
                                                        <input type="text" class="w100p form-control empty" placeholder="Email" maxlength="100" name="email">
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
                                                        <b>NPWP</b>
                                                    </div>
                                                    <div class="div label">Lampirkan NPWP Customer
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">NPWP</b>
                                                    </div>

                                                    <div class="div ar-content ar-upload area-upload dot-mandatory" role="false">
                                                        <a href="#" role="off" class="cmd-upload w32 fcs br-rds4 button-label" aria-data="false" data-max="2" data-edit="" data-label="Lampirkan berkas dalam bentuk file .pdf (ukuran maks: 2MB)">
                                                            <span class="ic fas flaticon-attachment"></span>
                                                            <span class="icr sli_icon-cloud-upload"></span>
                                                            <div class="ar-label">
                                                                <div class="div ttlx">
                                                                    <span>NPWP</span>
                                                                </div>
                                                                <div class="div">
                                                                    <span class="label-upload label-name">Lampirkan berkas dalam bentuk file .pdf (ukuran maks: 2MB)</span>
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
                                </div>
                            </li>

                        </ul>
                        
                        <input type="hidden" name="type" value="">
                        <input type="hidden" name="user_id" value="">
                        <input type="hidden" name="customer_id" value="">

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

    var list = '';
    $.each(rsp.list,function(i,item)
    {
        var status = parseFloat(item.status);
        var listx = temp;

        listx = listx.replace('{id}', item.id);
        listx = listx.replace('{date}', item.date);
        listx = listx.replace('{name}', item.name);
        listx = listx.replace('{npwp}', (item.npwp === '' ? '' : '<a href="'+item.npwp+'" target="_blank" class="color-blue fsize11"><span class="ic far fa-address-card"></span> NPWP</a>'));
        listx = listx.replace('{admin}', item.admin);
        listx = listx.replace('{owner}', (item.owner === '' ? '' : ('<span class="label sli_icon-user"></span> ' + item.owner) ) );
        listx = listx.replace('{phone}', (item.phone === '' ? '' : ('<span class="label sli_icon-screen-tablet"></span> ' + item.phone) ) );
        listx = listx.replace('{email}', (item.email === '' ? '' : ('<span class="label fa flaticon2-black-back-closed-envelope-shape"></span> ' + item.email) ) );

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
    var area = $("body").find("#modal-customer .area-contact-provinsi");
    
    area.find("button.btn label span").html("Pilih Provinsi");
    $("body").find("#modal-customer .area-contact-city").addClass("hide");
    $("body").find("#modal-customer .area-contact-kecamatan").addClass("hide");

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
    var area = $("body").find("#modal-customer .area-contact-city");

    area.find("button.btn label span").html("Pilih Kota/Kabupaten");
    area.find(".value-dropdown").val("-1");
    area.removeClass("hide");
    $("body").find("#modal-customer .area-contact-kecamatan").addClass("hide");

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
    var area = $("body").find("#modal-customer .area-contact-kecamatan");
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

async function getcustomertype()
{

    var $URL = config.apps.URL_API + '/api/customers/data/type';
    var $t = FormSending("","GET","key","",$URL);
    var area = $("#modal-customer").find(".area-customer-type");

    $t.success(function(n)
    {
        // console.log(n);
        var rsp = n;
        var list = ' <li aria-selected="false"><button role="off" dataid="" data-modal="" data-modal-label="" data-get="" class=""><span>Pilih Jenis</span></button></li>';
        $.each(rsp.response, function(i,item)
        {
            list += ' <li aria-selected="false"><button role="off" class="" dataid="'+item.id+'" data-modal="" data-modal-label="" data-get=""><span>'+item.alias+'</span></button></li>';
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
        modal = $("body").find("#modal-customer"),
        form = modal.find("form");

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            form.find("span.error").remove();
            form.find(".br-error").removeClass("br-error");
            modal.find("input[name='type']").val("new");
            modal.find(".title").html("Tambah Customer");

            //
            clearEmptyForm(modal);

            getcustomertype();

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
        modal = $("body").find("#modal-customer"),
        form = modal.find("form");
        

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            form.find("span.error").remove();
            form.find(".br-error").removeClass("br-error");

        //
            modal.find("input[name='type']").val("edit");
            modal.find(".title").html("Sunting Customer");
            modal.find("button.submit").html("Simpan");
            modal.find("input[type='text']").removeAttr("disabled");
            modal.find("button.cddwn").removeAttr("disabled");
            modal.find("button.submit").removeAttr("disabled");
            modal.find(".load").removeClass("hide");

            modal.find("input[name='user_id']").val(getaccount().id);
            getcustomertype();

            //
            getdataprvinsi();

            var $URL = config.apps.URL_API + '/api/customers/show?id='+id;
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
        form.find("*[name='customer_type']").val(rsp.type);
        form.find("*[name='owner']").val(rsp.owner);
        form.find("*[name='phone']").val(rsp.phone);
        form.find("*[name='email']").val(rsp.email);
        form.find("*[name='address']").val(rsp.address);
        form.find("*[name='kodepos']").val(rsp.kodepos);
        form.find("*[name='customer_id']").val(rsp.id);
        form.find("*[name='provinsi_selected']").val(rsp.provinsi);
        form.find("*[name='city_selected']").val(rsp.city);
        form.find("*[name='kecamatan_selected']").val(rsp.kecamatan);
        var file = form.find("*[name='file']"),
        area_file = file.parent(".ar-content"),
        file_label = area_file.find("a").attr("data-label");
        area_file.find(".label-upload").html(rsp.file === '' ? file_label : rsp.file);
        area_file.find("a").attr("data-edit", rsp.file === '' ? '' : rsp.file);
        area_file.find("a").attr("aria-data", (rsp.file === '' ? 'false' : 'true') );

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
        var selectType = form.find("*[name='customer_type']").parent(".area-ddwn");
        var labelType = selectType.find("li button[dataid='"+rsp.type+"'] span").html();

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
        

        selectType.find('label span').html(labelType);
        selectType.find("li button[dataid='"+rsp.type+"']").parent("li").attr("aria-selected","true");
        selectProvinsi.find('label span').html(labelProvinsi);
        selectProvinsi.find("li button[dataid='"+rsp.provinsi+"']").parent("li").attr("aria-selected","true");
        selectCity.find('label span').html(labelCity);
        selectCity.find("ul li button[dataid='"+rsp.city+"']").parent("li").attr("aria-selected","true");
        selectKecamatan.find('label span').html(labelKecamatan);
        selectKecamatan.find("ul li button[dataid='"+rsp.kecamatan+"']").parent("li").attr("aria-selected","true");

        
    }

    //
    $("body").on("click", "#modal-customer .cmd-set-provinsi", function(e)
    {
        var cmd = $(this);
        if( cmd.attr("dataid") !== '')
        {
            //
            getdatacity(cmd.attr("dataid"));
            return;
        }

        $("#modal-customer .area-contact-city").addClass("hide");
        $("#modal-customer .area-contact-kecamatan").addClass("hide");
        
    });

    //
    $("body").on("click", "#modal-customer .cmd-set-city", function(e)
    {
        var cmd = $(this);
        if( cmd.attr("dataid") !== '')
        {
            //
            getdatakecamatan(cmd.attr("dataid"));
            return;
        }

        $("#modal-customer .area-contact-kecamatan").addClass("hide");
        
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
                var $t = FormSendingNew(form,"POST","key","file",$URL);
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
        modal = form.parents("#modal-customer"),
        name = form.find('input[name="name"]'),
        customer_type = form.find('input[name="customer_type"]'),
        owner = form.find('input[name="owner"]'),
        phone = form.find('input[name="phone"]'),
        provinsi = form.find('input[name="provinsi_selected"]'),
        city = form.find('input[name="city_selected"]'),
        kecamatan = form.find('input[name="kecamatan_selected"]'),
        address = form.find('textarea[name="address"]'),
        kodepos = form.find('input[name="kodepos"]'),
        file = form.find("*[name='file']"),
        button = form.find('button.submit');

        //check
        form.find('span.error').remove();
        form.find('.br-error').removeClass('br-error');

        //
        if( $.trim(name.val()).length < 3  || $.trim(customer_type.val()) === '' || $.trim(phone.val()).length < 9 || $.trim(owner.val()) === '' || $.trim(provinsi.val()) === '-1' || $.trim(address.val()).length < 10 || $.trim(kodepos.val()).length < 5 || $.trim(provinsi.val()) !== '-1' && $.trim(city.val()) === '-1' || $.trim(city.val()) !== '-1' && $.trim(kecamatan.val()) === '-1' || $.trim(file.val()) === '' && form.find('*[name="type"]').val() === 'new')
        {

            //name
            if( $.trim(name.val()).length < 3 )
            {
                name.parent('.ar-content').append('<span class="error">Harap isi sekurangnya 3 karakter</span>');
                name.addClass('br-error');
            }

            //gender
            if( $.trim(customer_type.val()) === '' )
            {
                customer_type.parent('.ar-content').append('<span class="error">Harap pilih jenis</span>');
                customer_type.parent('.ar-content').find("button.btn").addClass('br-error');
            }

            //owner
            if( $.trim(owner.val()) === '')
            {
                owner.parents('.ar-content').append('<span class="error">Isikan nama kontak person</span>');
                owner.addClass('br-error');
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

            if( $.trim(file.val()) === '' && form.find('*[name="type"]').val() === 'new' )
            {
                file.parents('.ar-content').append('<span class="error">Lampirkan dokumen NPWP</span>');
                file.parent('.ar-content').find(".cmd-upload").addClass('br-error');
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
        checkForm(form);
    })


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