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
                                    <span>Lembaga</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="div head-tables">
                <div class="div clr-float">

                    <form action="/api/pelayanan/lembaga/table" id="form-table" aria-temp="temp-table">


                        <button class="submit hide" role="off">submit</button>
                        <div class="fl-right w100px">

                            <div class="fl-right oarea-ddwn-hd oar-ddwn">
                                <button class="btn green btn-r cmd-modal-create" role="off" data-type="add" data-toggle="modal" data-target="#modal-lembaga">
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
                                                    <div class="ddwn area-ddwn keep area-type">
                                                        <button class="btn br-rds8 cddwn" role="off">
                                                            <label><span class="fsize14 color-black">Semua Jenis</span></label>
                                                        </button>
                                                        <div class="ddwn-pg area-ddwn-page">
                                                            <ul>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="-1" ><span>Semua Jeni</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="2" ><span>Success</span></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <input type="hidden" class="value-dropdown" name="type" value="-1">
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
                                                                    <button role="off"  dataid="1" ><span>Terverifikasi</span></button>
                                                                </li>
                                                                <li aria-selected="false">
                                                                    <button role="off"  dataid="2" ><span>Menunggu Verifikasi</span></button>
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
                                                    <span>STRUKTURAL</span>
                                                </div>
                                            </td>
                                            <td class="td-w160">
                                                <div class="td-iner">
                                                    <span>KONTAK</span>
                                                </div>
                                            </td>
                                            <td class="td-w260">
                                                <div class="td-iner">
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
                        <td>
                            <div class="td-iner">
                                <div class="div">
                                    <div class="div">
                                        <b>{name}</b>
                                    </div>
                                    <div class="div label fsize12">
                                        <span class="label ic far fa-address-card"></span>
                                        <span class="ic">{type}</span>
                                        <span class="dot w4 bg-color-eee"></span>
                                        <span>{npwp}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        
                        <td class="td-w180 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <div class="div">
                                        <div class="div">
                                            <span>{ketua}</span>
                                        </div>
                                        <div class="span label up-txt fsize9">ketua</div>
                                    </div>
                                    <div class="div" style="padding:8px 0px">
                                        <div class="div" style="border-top:1px dashed #ccc"></div>
                                    </div>
                                    <div class="div">
                                        <div class="div">
                                            <span>{sekertaris}</span>
                                        </div>
                                        <div class="span label up-txt fsize9">sekertaris</div>
                                    </div>
                                    <div class="div" style="padding:8px 0px">
                                        <div class="div" style="border-top:1px dashed #ccc"></div>
                                    </div>
                                    <div class="div">
                                        <div class="div">
                                            <span>{bendahara}</span>
                                        </div>
                                        <div class="span label up-txt fsize9">bendahara</div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="td-w160 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span>{phone}</span>
                                    <div class="div">
                                        <span class="label up-txt fsize9">Telepon</span>
                                    </div>
                                </div>
                                <div class="div" style="padding:8px 0px">
                                    <div class="div" style="border-top:1px dashed #ccc"></div>
                                </div>
                                <div class="div">
                                    <span>{email}</span>
                                    <div class="div">
                                        <span class="label up-txt fsize9">Email</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="td-w260 wh-m-520">
                            <div class="td-iner">
                                <div class="div">
                                    <span>{address}</span>
                                </div>
                                <div class="div">
                                    <span>{line1}</span>
                                </div>
                                <div class="div">
                                    <span>{line2}</span>
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

                                            <a class="dropdown-item color-orange cmd-sunting" href="#" data-type="edit" data-target="#modal-lembaga" data-toggle="modal" role="off">
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

<div class="modal fade new-modal" id="modal-lembaga" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document" style="max-width:720px">
        <div class="modal-content br-rds12 pd-tb15 pd-lr15">

            <div class="load txt-center pd-t10 hide br-rds4">
                <img src="/assets/svg/loading.blue.svg" alt="">
            </div>

            <div class="modal-header txt-center no-br">
                <div class="div">
                    <h2 class="modal-title">
                        <span class="fsize18">Tambah Lembaga</span>
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
                <div class="arinsed mdl-partner pos-rel m-pd-lr25">

                    <form action="/api/pelayanan/lembaga/create" id="form-create" >

                        <ul class="artable" style="padding-top:0px !important; margin:unset;">

                            <li class="list">
                                <div class="div">
                                    <table>
                                        <tr>
                                            <td class="left">
                                                <div class="div">
                                                    <div class="div">
                                                        <b>Jenis, Nama dan NPWP Lembaga</b>
                                                    </div>
                                                    <div class="div label">Tentukan Jenis dan isikan Nama dan NPWP Lembaga
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">
                                                
                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">JENIS LEMBAGA</b>
                                                    </div>

                                                    <div class="ddwn area-ddwn ddwn-button-select ar-content keep dot-mandatory area-type w50p" data-label="Jenis Lembaga">

                                                        <button class="btn br-rds8 cddwn fcs" role="off">
                                                            <label><span class="fsize14 color-black">Jenis Lembaga</span></label>
                                                        </button>

                                                        <div class="ddwn-pg area-ddwn-page">
                                                            <ul>
                                                                <!-- list -->
                                                            </ul>
                                                        </div>

                                                        <input type="hidden" class="value-dropdown empty" name="categori" value="">

                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">NAMA LEMBAGA</b>
                                                    </div>

                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty" placeholder="Nama Lembaga" maxlength="100" name="name">
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">NPWP</b>
                                                    </div>

                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty" placeholder="NPWP" maxlength="100" name="npwp">
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
                                                        <b>Struktur kepengurusan lembaga</b>
                                                    </div>
                                                    <div class="div label">Isikan nam Ketua, Sekertaris dan Bendahara
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">NAMA KETUA</b>
                                                    </div>
                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty" placeholder="Nama Ketua" maxlength="100" name="ketua">
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">SEKERTARIS</b>
                                                    </div>
                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty" placeholder="Sekertartis" maxlength="100" name="sekertaris">
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">BENDAHARA</b>
                                                    </div>
                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty" placeholder="Bendahara" maxlength="100" name="bendahara">
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
                                                    <div class="div label">Lengkapi kontak lembaga
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">NO TLP/HANDPHONE</b>
                                                    </div>
                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w50p form-control empty number" placeholder="No Telp" maxlength="15" name="phone">
                                                    </div>
                                                </div>

                                                <div class="div bts-in"></div>

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">EMAIL</b>
                                                    </div>
                                                    <div class="div ar-content dot-mandatory">
                                                        <input type="text" class="w100p form-control empty" placeholder="Alamat Email" maxlength="100" name="email">
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
                                                    <div class="div label">Tentukan Alamat lembaga
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="vtop">

                                                <div class="div">
                                                    <div class="div hide ws-m-disb-620">
                                                        <b class="up-txt fsize9">KOTA ATAU KECAMATAN</b>
                                                    </div>

                                                    <div class="div">
                                                        <span class="label">Kota atau Kecamatan</span>
                                                        <div class="div">
                                                            <div class="field-city indropdown area-tsrc-dropdown alist" role="false" datatimer="1000">
                                                                <div class="div ar-content dot-mandatory">
                                                                    <input class="form-control br-rds4  txt-def-empty tsrc-dropdown label-dropdown txt empty" name="city" type="text" placeholder="Cari Kota atau Kecamatan" aria-href="/api/data/srckotakecamatan-provinsi?provinsi=31&p=1&q=" maxlength="75">

                                                                    <input type="hidden" name="address_array" class="value-dropdown empty">
                                                                    
                                                                    <button class="cls cmd-clear-tsrc" role="off">
                                                                        <span class="sli_icon-close"></span>
                                                                    </button>
                                                                </div>
                                                                <div class="dropdown dd-tsrc-dropdown">
                                                                    <div class="div inardropdown no-rd">
                                                                        <ul>
                                                                            
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

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
                                                    <div class="div">
                                                        <div class="div hide ws-m-disb-620">
                                                            <b class="up-txt fsize9">KODEPOS</b>
                                                        </div>
                                                        <div class="div ar-content dot-mandatory">
                                                            <input type="text" name="kodepos" class="w50p form-control background-trf position-rt empty number" placeholder="Kode Pos" maxlength="6">
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr class="wh-m-620">
                                            <td colspan="2">
                                                <div class="div bts-br mg-b0"></div>
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
                                                            <span class="nm">Verifikasi Lembaga</span>
                                                        </a>
                                                        <input type="hidden" id="checkbox-value" name="verification" value="1">
                                                    </div>
                                                    <div class="div">
                                                        <span class="label">Jika data lembaga sudah tepat dan bisa langsung di verifikasi maka ceklist kolom verifikasi lembaga</span>
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
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="page" value="1">
                        

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
<script src="{{$URI}}/assets/js/jquery.inputmask.bundle.min.js" type="text/javascript"></script>

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
        listx = listx.replace('{admin}', (item.admin === '' ? '' : item.admin));
        listx = listx.replace('{name}', item.name);
        listx = listx.replace('{type}', item.type_name);
        listx = listx.replace('{npwp}', item.npwp);
        listx = listx.replace('{phone}', item.phone);
        listx = listx.replace('{email}', item.email);
        listx = listx.replace('{ketua}', item.owner.ketua);
        listx = listx.replace('{sekertaris}', item.owner.sekertaris);
        listx = listx.replace('{bendahara}', item.owner.bendahara);

        listx = listx.replace('{register}', (item.verify.status === 0 ? '<li class="progress"><span>PENDING</span></li>' : '<li class="done"><span>VERIFY</span></li>' ) );

        listx = listx.replace('{address}', item.address.name);
        listx = listx.replace('{line1}', item.address.line1);
        listx = listx.replace('{line2}', item.address.line2);

        listx = listx.replace('{btn-register}', (item.registers === 0 ? '' : 'hide'));

        list += listx;
    });

    return list;
}

async function gettype(w,e)
{

    var area = $("body").find(w);
    var $URL = config.apps.URL_API + '/api/data/lembaga/type';
    var $t = FormSending("","GET","key","",$URL);
    $t.success(function(n)
    {
        console.log(n);
        var rsp = n.response;
        
        var list = (e === '' ? '' : '<li aria-selected="false"><button role="off" dataid="-1"><span>'+e+'</span></button></li>');
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


gettype('#form-table .area-type','Semua Jenis');


$(document).ready(function()
{
    //MODAL CREATE
    $(".cmd-modal-create").click(function(e)
    {
        var cmd = $(this),
        modal = $("body").find("#modal-lembaga"),
        form = modal.find("form");

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            form.find("span.error").remove();
            form.find(".br-error").removeClass("br-error");
            modal.find("input[name='type']").val("add");
            modal.find(".modal-title span").html("Tambah Lembaga");

            //
            clearEmptyForm(modal);
            gettype("#modal-lembaga .area-type", "");

            //
            modal.find("button.submit").html("Simpan");
            modal.find("input[type='text']").removeAttr("disabled");
            modal.find("button.cddwn").removeAttr("disabled");
            modal.find("button.submit").removeAttr("disabled");

            modal.find("*[name='user_id']").val(getaccount().id);
            modal.find(".out-area-checkbox a").attr("role", "on");
            modal.find(".out-area-checkbox #checkbox-value").val("1");
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
        modal = $("body").find("#modal-lembaga"),
        form = modal.find("form");
        

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            clearEmptyForm(modal);
            form.find("span.error").remove();
            form.find(".br-error").removeClass("br-error");
            modal.find("input[name='type']").val("edit");
            modal.find(".modal-title span").html("Sunting Lembaga");
            gettype('#modal-lembaga .area-type','');
            modal.find(".load").removeClass("hide");

            modal.find("input[name='user_id']").val(getaccount().id);

            var $URL = config.apps.URL_API + '/api/pelayanan/lembaga/view?id='+id;
            $t = FormSending("","GET","key","",$URL);
            $t.success(function(n)
            {
                // console.log(n);
                templateSunting(modal,n.response);
                modal.find(".load").addClass("hide");
            });
            $t.error(function(n)
            {
                console.log(n);
                if( n.status === 404)
                {
                    cmd.attr("role", "off");
                    flagnotif('error', n.responseJSON.message);
                    return
                }

                flagnotif('error', msgboxError());
                cmd.attr("role", "on");
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
        form.find("*[name='categori']").val(rsp.type);
        form.find("*[name='name']").val(rsp.name);
        form.find("*[name='email']").val(rsp.email);
        form.find("*[name='phone']").val(rsp.phone);
        form.find("*[name='npwp']").val(rsp.npwp);
        form.find("*[name='ketua']").val(rsp.owner.ketua);
        form.find("*[name='sekertaris']").val(rsp.owner.sekertaris);
        form.find("*[name='bendahara']").val(rsp.owner.bendahara);
        form.find("*[name='address']").val(rsp.address.name);
        form.find("*[name='kodepos']").val(rsp.address.kodepos);
        form.find("*[name='address_array']").val(rsp.address_array);
        form.find("*[name='city']").val( (rsp.address.kecamatan + ', ' + rsp.address.city + ', ' + rsp.address.provinsi ) );
        form.find(".area-tsrc-dropdown .cmd-clear-tsrc").show();


        var selecttype = form.find(".area-type"),
        labeltype = selecttype.find("li button[dataid='"+rsp.type+"'] span").html();

        selecttype.find("button.btn label span").html(labeltype);
        selecttype.find("li button[dataid='"+rsp.type+"']").parent("li").attr("aria-selected","true");

        form.find(".out-area-checkbox a").attr("role", (rsp.verify === 0 ? 'off' : 'on') );
        form.find(".out-area-checkbox #checkbox-value").val(rsp.verify);
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
    $('#form-create button.submit').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this);

        cmd.parents("form").submit();
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
                //submit
                var $URL = config.apps.URL_API + form.attr("action");
                var $t = FormSending(form,"POST","key","form",$URL);
                $t.success(function(n)
                {
                    // console.log(n);
                    if( form.find('*[name="type"]').val() === 'add')
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
        type = form.find("*[name='categori']"),
        name = form.find('*[name="name"]'),
        npwp = form.find('*[name="npwp"]'),
        ketua = form.find('*[name="ketua"]'),
        sekertaris = form.find('*[name="sekertaris"]'),
        bendahara = form.find('*[name="bendahara"]'),
        email = form.find('*[name="email"]'),
        phone = form.find('*[name="phone"]'),
        address_array = form.find('*[name="address_array"]'),
        address = form.find('*[name="address"]'),
        kodepos = form.find('*[name="kodepos"]'),
        button = modal.find('button.submit');

        //check
        form.find('span.error').remove();
        form.find('.br-error').removeClass('br-error');

        //
        if( $.trim(type.val()) === '' || $.trim(name.val()).length < 3  || $.trim(npwp.val()).length < 15 || $.trim(phone.val()).length < 9 || $.trim(ketua.val()).length < 3 || $.trim(sekertaris.val()).length < 3 || $.trim(bendahara.val()).length < 3 || !validateEmail(email.val()) || $.trim(address_array.val()) === '' || $.trim(address.val()) === '' || $.trim(kodepos.val()).length < 6 )
        {

            // type
            if( $.trim(type.val()) === '' )
            {
                type.parent('.ar-content').append('<span class="error">Pilih jenis lembaga</span>');
                type.parent('.ar-content').find("button.btn").addClass('br-error');
            }

            //name
            if( $.trim(name.val()).length < 3 )
            {
                name.parent('.ar-content').append('<span class="error">Nama Lembaga sekurangnya 3 karakter</span>');
                name.addClass('br-error');
            }

            //gender
            if( $.trim(npwp.val()).length < 15 )
            {
                npwp.parent('.ar-content').append('<span class="error">NPWP Sekurangnya 15 angka</span>');
                npwp.addClass('br-error');
            }

            if( $.trim(ketua.val()).length < 3 )
            {
                ketua.parent('.ar-content').append('<span class="error">Nama Ketua sekurangnya 3 karakter</span>');
                ketua.addClass('br-error');
            }

            if( $.trim(sekertaris.val()).length < 3 )
            {
                sekertaris.parent('.ar-content').append('<span class="error">Nama Sekertaris sekurangnya 3 karakter</span>');
                sekertaris.addClass('br-error');
            }

            if( $.trim(bendahara.val()).length < 3 )
            {
                bendahara.parent('.ar-content').append('<span class="error">Nama Bendahara Sekurangnya 3 karakter</span>');
                bendahara.addClass('br-error');
            }


            if( $.trim(phone.val()).length < 9 )
            {
                phone.parent('.ar-content').append('<span class="error">No Telp sekurangnya 9 karakter</span>');
                phone.addClass('br-error');
            }

            //email
            if( !validateEmail(email.val()) )
            {
                email.parents('.ar-content').append('<span class="error">Harap isi email valid</span>');
                email.addClass('br-error');
            }

            //kota kecamatan
            if( $.trim(address_array.val()) === '' )
            {
                address_array.parent('.ar-content').append('<span class="error">Pilih Kota atau Kecamatan</span>');
                address_array.parent('.ar-content').find('*[name="city"]').addClass('br-error');
            }

            if($.trim(address.val()) === '')
            {
                address.parents('.ar-content').append('<span class="error">Isikan alamat lengkap Lembaga</span>');
                address.addClass('br-error');
            }

            
            if($.trim(kodepos.val()).length < 6)
            {
                kodepos.parents('.ar-content').append('<span class="error">Kodepos sekurangnya 6 angka</span>');
                kodepos.addClass('br-error');
            }


            button.attr('role','off');
            return false;
        }

        return true;

        
    }

    //CHECKBOX
    $("#form-create .cmd-checkbox").click(function(e)
    {
        e.preventDefault();
        checkbox($(this));
    });

    //NPWP MASKING
    $("#form-create *[name='npwp']").inputmask({
        "mask": "99.999.999.9-999.999"
    });

    $("#form-create .empty").keyup(function(n)
    {
        // $(this).parents("form").submit();
        var form = $(this).parents("form");
        checkFormCreate(form);
    })


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