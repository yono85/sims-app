@extends('dashboard.index')

@section('content')
<main class="moby__content-body">

    <div class="ar-table">

        <div class="in-head-table ">
                <div class="div clr-float">

                    <div class="brcumb wh-m-520">
                        <div class="tbl">
                            <div class="intbl">
                                <div class="div">
                                    <span class="sli_icon-folder"></span>
                                    <a href="/">
                                        <span>Dashboard</span>
                                    </a>
                                    <span class="bts">
                                        <span class="ic fas fa-circle"></span>
                                    </span>
                                    <span class="label">
                                        <span>Shiping</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>            
                    <div class="fl-left wh-m-680"></div>
                    <div class="fl-right">

                        <ul>

                            <li class="fl-right">

                                <div class="new-dropdown">

                                    <button class="grey nobr cmd-export" data-action="/api/export/orders" role="off">
                                        <span class="fas fa-file-download"></span>
                                    </button>

                                    <div class="boxed bottomright">
                                        <div class="inboxed">
                                            boxed
                                        </div>
                                    </div>
                                </div>


                            </li>
                            <li class="fl-left">

                                <form action="/api/shiping/table" id="form-table" aria-categori="false" data-filter="false">
                                    <div class="ar-li">
                                    
                                        <div class="ar-src" aria-role="false">
                                            <input type="text" placeholder="Cari Invoice, Customer, dll..." name="search" class="search" value="">
                                            <a href="#" class="clr-text cmd-clear-search" role="off">
                                                <div class="tbl">
                                                    <div class="intbl">
                                                        <span class="sli_icon-close"></span>
                                                    </div>
                                                </div>
                                            </a>
                                            <button class="nobr blue cmd-search" role="on">
                                                <span class="sli_icon-magnifier"></span>
                                            </button>
                                        </div>

                                        <button class="grey nobr s10 cmd-filter-table fil-table" role="off">
                                            <span class="ic-filter fas fa-filter"></span>
                                            <span class="ic-close sli_icon-close"></span>
                                            <span class="ic-notif"></span>
                                        </button>

                                    </div>

                                    <div class="box-fil-table area-categori">
                                        <div class="inar">
                                            <div class="div clr-float">
                                                <ul>
                                                    <li>
                                                        <div class="div ttl">
                                                            <span class="ic fas fa-filter hide"></span>
                                                            <span>Filter Kategori</span>
                                                            <a href="#" class="cmd-reset-cat" role="off">RESET</a>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="div field">
                                                            <div class="div legend">STATUS</div>
                                                            <div class="div bdy">
                                                                <select class="selectpicker" data-live-search="false" name="cat-status">
                                                                    <option value="-1">All...</option>
                                                                    <option value="1">Terikirim</option>
                                                                    <option value="2">Menunggu</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="div field">
                                                            <div class="div area-date" aria-role="false">

                                                                <div class="div legend" >
                                                                    <div class="div">
                                                                        <span>TANGGAL</span>
                                                                        <a href="#" class="clr clear-date" role="off">
                                                                            <span>CLEAR</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="div bdy">
                                                                    <div class="div ar-date">
                                                                
                                                                        <div class="div clr-float">
                                                                            <div class="fl-left">
                                                                                <input type="text" id="start-date" name="start-date" value="" class="datepicker splt2-3 typefalse" placeholder="Start Date"/>
                                                                                <span class="picker-separator">~</span>
                                                                                <input type="text" id="end-date" name="end-date" value="" class="datepicker splt2-3 typefalse" placeholder="End Date"/>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="div field navi">
                                                            <div class="div clr-float">
                                                                <button class="blue cmd-categori rds4" role="off">
                                                                    <span class="flaticon2-check-mark"></span>
                                                                    <span>SIMPAN</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- form -->
                                    <input type="hidden" name="table" value="2" />
                                    <input type="hidden" name="sort_date" value="desc" />
                                    <input type="hidden" name="paging" value="1" />
                                    <input type="submit" value="submit" class="hide" />

                                </form>

                            </li>
                        </ul>
                    
                        
                    </div>
                </div>

        </div>

        <div class="in-body-table area-table">
            
            <div class="ar-body-table">
                
                <div class="div wh-m-520">
                    <div class="atable table-header">
                        <div class="th">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="td-iner">
                                                <a href="#" class="cmd-sort-table" role="off" aria-sort="desc" data-name="sort_date">
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
                                                CUSTOMER
                                            </div>
                                        </td>
                                        <td class="td-w180">
                                            <div class="td-iner">
                                                <span class="ic sli_icon-credit-card"></span>
                                                PEMBAYARAN
                                            </div>
                                        </td>
                                        <td class="td-w210">
                                            <div class="td-iner">
                                                <span class="ic sli_icon-reload"></span>
                                                PENGIRIMAN
                                            </div>
                                        </td>
                                        <td class="td-center td-w70">
                                            <div class="td-iner">
                                                <span class="ic far fa-sun"></span>
                                                ACTION
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

                        <!-- empty -->
                        <!-- <div class="tr empty">
                            <div class="tbody">
                                <div class="div">
                                    <div class="div">
                                        <span class="icon flaticon2-warning"></span>
                                    </div>
                                    <div class="div">
                                        Data tidak ditemukan
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="tr">
                            <div class="thr">
                                <div class="div clr-float">
                                    
                                    <div class="spc">
                                        <div class="tag">
                                            <ul>
                                                <li class="bc-green">
                                                    <span class="fa flaticon2-check-mark"></span>
                                                    <span>SUCCESS</span>
                                                </li>
                                                <li class="bc-orange">
                                                    <span class="sli_icon-clock"></span>
                                                    <span>MV</span>
                                                </li>
                                                <li class="bc-red">
                                                    <span class="sli_icon-credit-card"></span>
                                                    <span>MP</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spc">
                                        <span class="txt11"><b>HB210305MNH9INV</b></span>
                                    </div>
                                    

                                    <div class="spcr">
                                        <span class="label sli_icon-calendar"></span>
                                        <span class="date">16.41</span>
                                    </div>
                                    <div class="spcr wh-m-520">
                                        <span class="label sli_icon-user-follow"></span>
                                        <b class="up-txt">ADMIN</b>
                                    </div>
                                </div>
                            </div>
                            <div class="tbody">
                                <table>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="td-iner">
                                                    <div class="div">

                                                        <ul class="ls">
                                                            <li class="ls">x3 Magastrol</li>
                                                            <li class="ls">x4 Stomago</li>
                                                        </ul>
                                                    </div>
                                                    <div class="div ws-m-520">
                                                        <span><b>Total</b></span>
                                                        <span><b>Rp320.000</b></span>
                                                    </div>
                                                    <div class="div">
                                                        <div class="div label">
                                                            <span class="bubble">
                                                                <span class="ic sli_icon-note"></span>
                                                                <span class="inbubble" title="note">Catatan</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-w180 wh-m-520">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <span class="sli_icon-symbol-female"></span>
                                                        <span><b>Indri</b></span>
                                                    </div>
                                                    <div class="div">
                                                        <span class="label sli_icon-screen-tablet"></span>
                                                        <span>0868688787</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-w180 wh-m-520">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <span><b>Bank Mandiri</b></span>
                                                    </div>
                                                    <div class="div">
                                                        <span>Rp320.000</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-w210 wh-m-520">
                                                <div class="td-iner">

                                                    <div class="div">

                                                        <div class="div">
                                                            <span class="label">Pengiriman ke:</span>
                                                        </div>
                                                        <div class="div">
                                                            <ul>
                                                                <li>
                                                                    <span>Jl. Cilangkap baru</span>
                                                                </li>
                                                                <li>
                                                                    <span>Kec. Cipayun - Kota Jakarta Timur</span>
                                                                </li>
                                                                <li>
                                                                    <span>DKI Jakarta - 132878</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </td>
                                            <td class="td-center td-w70">
                                                <div class="td-iner disvis">
                                                    <div class="div">

                                                        <div class="dropdown dropleft">
                                                            <button type="button" class="btn btn-primary nobr grey s11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="fas fa-ellipsis-v"></span>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item color-green" href="#">
                                                                    <span>Detail</span>
                                                                    <span class="ic sli_icon-bag"></span>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item color-red" href="#">
                                                                    <span>Batalkan</span>
                                                                    <span class="ic sli_icon-trash"></span>
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

                        <div class="tr splash">
                            <div class="thr">
                                <div class="div clr-float">
                                    <div class="spc load splash-tbl">
                                    </div>
                                    <div class="spc load splash-tbl">
                                    </div>
                                    <div class="spcr load splash-tbl">
                                    </div>
                                </div>
                            </div>
                            <div class="tbody">
                                <table>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <div class="div">
                                                            <div class="load w210 splash-tbl"></div>
                                                        </div>
                                                        <div class="div">
                                                            <div class="load splash-tbl"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-w260 wh-m-520">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <div class="load splash-tbl"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-right td-w100">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <span class="load w70 splash-tbl"></span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tr splash">
                            <div class="thr">
                                <div class="div clr-float">
                                    <div class="spc load splash-tbl">
                                    </div>
                                    <div class="spc load splash-tbl">
                                    </div>
                                    <div class="spcr load splash-tbl">
                                    </div>
                                </div>
                            </div>
                            <div class="tbody">
                                <table>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <div class="div">
                                                            <div class="load w210 splash-tbl"></div>
                                                        </div>
                                                        <div class="div">
                                                            <div class="load splash-tbl"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-w260 wh-m-520">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <div class="load splash-tbl"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-right td-w100">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <span class="load w70 splash-tbl"></span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tr splash">
                            <div class="thr">
                                <div class="div clr-float">
                                    <div class="spc load splash-tbl">
                                    </div>
                                    <div class="spc load splash-tbl">
                                    </div>
                                    <div class="spcr load splash-tbl">
                                    </div>
                                </div>
                            </div>
                            <div class="tbody">
                                <table>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <div class="div">
                                                            <div class="load w210 splash-tbl"></div>
                                                        </div>
                                                        <div class="div">
                                                            <div class="load splash-tbl"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-w260 wh-m-520">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <div class="load splash-tbl"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-right td-w100">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <span class="load w70 splash-tbl"></span>
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

            <!-- footer table -->
            <div class="fot-table table-footer">
                <div class="div clr-float">
                    <div class="fl-left title">
                        Total <span class="value val-page-total">0</span>
                        - Hal <span class="value val-paging">0</span> dari <span class="value val-count-page">0</span>
                    </div>
                    <div class="fl-right">
                        <button class="fas fa-arrow-left cmd-paging" data-area="back" role="off" disabled="disabled"></button>
                        <button class="fas fa-arrow-right cmd-paging" data-area="next" role="off" disabled="disabled"></button>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <!-- modal -->
    <div class="modal fade new-modal" id="modalnoresi" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog w420" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <span class="sli_icon-note"></span>
                        <span>Input Nomor Resi</span>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="msg-error">
                    Error
                </div>
                    <div class="div act-head">
                        <div class="div" style="line-height:100%">
                            <span class="label fsize9">NOMOR INVOICE</span>
                        </div>
                        <div class="div label-invoice">
                            <span>#<b>label</b></span>
                        </div>
                    </div>
                    <div class="div">
                        <form class="account-form" action="/api/shiping/addnoresi">
                            
                            <input type="hidden" name="shiping_id" value="">
                            <div class="ar-note">
                                <textarea name="noresi" class="form-control" maxlength="150"></textarea>
                            </div>
                            <input type="submit" value="submit" class="hide" />

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="is-loading btn green cmd-pickup" dataid="" role="off">
                        <span class="fa flaticon-truck"></span>
                        <span>PICKUP</span>
                    </button>

                    <button type="button" class="btn blue modal-submit" role="off">
                        <span class="flaticon2-check-mark"></span>
                        <span>SIMPAN</span>
                    </button>

                </div>
            </div>
        </div>
    </div>
    
</main>

@include('dashboard.component.widget')
@endsection


@section('script')
<script src="{{$URI}}/assets/js/dashboard/jquery.validate.js"></script>
<script src="{{$URI}}/assets/js/dashboard/json-excel/xlsx.core.min.js"></script>
<script src="{{$URI}}/assets/js/dashboard/json-excel/FileSaver.js"></script>
<script src="{{$URI}}/assets/js/dashboard/json-excel/jhxlsx.js"></script>

<script>

$(document).ready(function()
{

    // =========> EXE TABLE

    $('.cmd-sort-table').click(function(e)
    {

        sorttable(e,$(this));

    });


    // form table
    $('#form-table').submit(function()
    {

        var form = $(this),
        paging = parseFloat(form.find('input[name="paging"]').val()),
        $URL = config.apps.URL_API + form.attr('action'),
        area = $('.area-table'),
        body = area.find('.table-body'),
        footer = area.find('.table-footer'),
        date = '';

        if( form.find('input[name="start-date"]').val() === '' || form.find('input[name="end-date"]').val() === '')
        {
            date = '';   
        }
        else
        {
            date = form.find('input[name="start-date"]').val() + '-' + form.find('input[name="end-date"]').val();
        }

        //field
        field = $URL;
        field += '?v=' + form.find('input[name="table"]').val();
        field += '&src=' + form.find('input[name="search"]').val();
        field += '&pg=' + form.find('input[name="paging"]').val();
        field += '&status=' + form.find('select[name="cat-status"]').val();
        // field += '&companyid=' + form.find('select[name="cat-company"]').val(),
        // field += '&csid=' + form.find('select[name="cat-cs"]').val(),
        // field += '&status=' + form.find('select[name="cat-status"]').val(),
        field += '&date=' + date ;
        field += '&sortdate=' + form.find('input[name="sort_date"]').val(),

        //splash tabel
        splashtable();

        //
        var token = getToken();

        //
        $.ajax({
            type: 'GET',
            url:  field,
            timeout: 18000,
            headers: {
                "Content-Type": "application/json",
                "key":getaccount().key
            },
            // data: formdatasend(form), //JSON.stringify(datasend),
            dataType: 'JSON',
            success: function(e,n,r)
            {
                //
                // console.log(e);

                //
                body.html('');

                // fuction gettable
                var li = gettable(e.response);

                //body table
                body.html(li);

                
                
                // //footer
                footer.find('.val-page-total').html(e.response.total);
                footer.find('.val-paging').html(e.response.paging);
                footer.find('.val-count-page').html(e.response.countpage);
                footer.removeClass('hide');

                //count page
                config.table.countpage = parseFloat(e.response.countpage);

                //
                if( parseFloat(e.response.countpage) > 1)
                {

                    if( paging === config.table.countpage)
                    {
                        footer.find('.cmd-paging[data-area="next"]').attr('disabled','disabled');
                    }
                    else
                    {
                        footer.find('.cmd-paging[data-area="next"]').removeAttr('disabled');
                    }
                    
                }
                else
                {
                    footer.find('.cmd-paging[data-area="next"]').attr('disabled','disabled');
                }

                if( e.response.paging < 2)
                {
                    footer.find('.cmd-paging[data-area="back"]').attr('disabled','disabled');
                }

                // // enabled sort table
                config.table.sort = 1;

                if( $.trim(form.find('input[name="search"]').val()) !== '' )
                {

                    findtextHighlight(form.find('input[name="search"]').val());
                }
            },
            error: function(e)
            {
                // console.log(e.responseJSON);

                //clear body
                body.html('');

                // function get empty
                var li = tableempty(e.responseJSON.message);
                body.html(li);
                footer.addClass('hide');

                //disabled sort
                config.table.sort = 0;

                
            }

        });


        return false;
    });


    // function table 
    function gettable(e)
    {

        console.log(e);

        var li = '';
        var tagihan = 0,
        courier_price = 0;

        $.each(e.list, function(i, item)
        {
            var courier_price = item.shiping.courier_price === '' ? 0 : parseFloat(item.shiping.courier_price);
            var cod_cost = typeof item.payment.biaya_cod === 'undefined' ? 0 : item.payment.biaya_cod;
            var tagihan = (parseFloat(item.payment.total) + courier_price) - parseFloat(item.uniq);
            var newTagihan = ViewTagihanAll(item.payment.total,courier_price,item.uniq,item.promo.total,item.payment.type,cod_cost);

            li += '<div class="tr">';

                li += '<div class="thr"><div class="div clr-float">';
                
                li += '<div class="spc '+ (item.noresi === '' ? 'hide' : '') +'"><div class="tag sts-o" role="sc"><ul>';

                        li += '<li class="sc bc-green"><span class="fa flaticon2-check-mark"></span></li>';
                    
                    li += '</ul></div></div>';

                    li += '<div class="spc ttl-icon">';
                        li += item.type === 1 || item.type === 2 ? '<span class="ic sli_icon-user" title="Personal"></span>' : ( item.type === 3 ? '<span class="ic flaticon-home-2" title="Stock Gudang"></span>' : '<span class="ic flaticon2-group" title="Dropship"></span>' );
                    li += '</div>';

                    

                    li += '<div class="spc"><span class="txt11"><b class="selection-search">#'+item.invoice+'</b></span></div>';
                                

                    li += '<div class="spcr ws-m-520"><span class="date color-orangered">'+( item.noresi === '' ? '--' : item.noresi )+'</span></div>';

                    li += '<div class="spcr wh-m-520"><span class="label fa flaticon-calendar-with-a-clock-time-tools"></span> <span class="date">'+item.date+'</span></div>';

                    li += item.admin_name === '' ? '' : '<div class="spcr wh-m-520"><span class="ic label sli_icon-user-follow"></span><b class="up-txt">'+item.admin_name+'</b></div>';
                                
                li += '</div></div>';

                li += '<div class="tbody"><table><tbody><tr>';

                    li += '<td><div class="td-iner">';

                        li += '<div class="div ws-m-520"><span class="name-hide"><span class="ic ic-gender sli_icon-symbol-'+item.customers.gender+'"></span><span><b>'+item.customers.name+'</b></span><span> - </span><b>'+item.customers.phone+'</b></span></span></div>';
                        li += '<div class="div"><ul class="ls">';
                            $.each(item.item, function(x, y)
                            {
                                li += '<li class="ls">x'+y.quantity+' '+y.product_name+'</li>';

                            });
                        li += '</ul></div>';

                        li += item.notes === '' ? '' : '<div class="div"><div class="div label"><span class="bubble"><span class="ic fa flaticon-notes" title="Catatan"></span><span class="inbubble" title="'+item.notes+'">'+notetable(item.notes)+'</span></span></div></div>';

                    li += '</div></td>';

                    li += '<td class="td-w180 wh-m-520"><div class="td-iner">';
                        li += '<div class="div"><span class="ic ic-gender sli_icon-symbol-'+item.customers.gender+'"></span><span><b class="selection-search">'+item.customers.name+'</b></span></div>';

                        li += '<div class="div"><span class="ic label sli_icon-screen-tablet"></span><span class="selection-search">'+item.customers.phone+'</span></div>';

                    li += '</div></td>';

                    li += '<td class="td-w180 wh-m-520"><div class="td-iner">';

                        li += '<div class="div"><span><b>'+formatRupiah(newTagihan, 'Rp')+'</b></span></div><div class="div"></div><span class="label">Pembayaran: </span><span>'+item.payment.bank+'</span></div>';

                    li +='</div></td>';

                    li += '<td class="td-w210 wh-m-520"><div class="td-iner">';
                        
                        li += '<div class="div">No Resi: '+ ( item.noresi === '' ? '---' : '<span style="text-decoration:underline;">'+item.noresi +'</span>')+'</div>';

                        li += '<div class="div"><b>Pengiriman ke:</b></div>';

                        li += '<div class="div"><ul>';

                            li += item.destination.address === '' ? '<i>---</i>' : '<li><span class="selection-search">'+item.destination.address+'</span></li><li><span>'+item.destination.city+' - '+item.destination.provinsi+'</span></li>';

                        li += '</ul></div>';

                        li += '<div class="div"><b>Kurir:</b></div>';
                        li += item.shiping.courier_name === '' ? '--' : ('<div class="div">'+item.shiping.courier_name+' - ' +item.shiping.courier_service+' ('+formatRupiah( parseFloat(item.shiping.courier_price), 'Rp')+')</div>');

                        
                            
                    li += '</div></td>';

                    li += '<td class="td-center td-w70"><div class="td-iner disvis"><div class="div">';

                        // li += '<div class="dropdown">';


                           li += '<a class="btn btn-primary nobr grey s11" href="'+item.shiping_url+'" target="_blank"><span class="fas flaticon2-printer"></span>';
                           li += item.print === 1 ? '<span class="ic-absx fa flaticon2-check-mark"></span>' : '';
                           li +='</a>';

                           li += '<div class="div" style="height:2px"></div>';

                           li += '<button type="button" class="btn btn-primary nobr grey s11 cmd-add-noresi is-loading" data-status="'+ ( item.noresi === '' ? '-1' : item.noresi ) +'" role="off" data-target="#modalnoresi" dataid="'+item.shiping.id+'" data-invoice="'+item.invoice+'" data-noresi="'+item.shiping.noresi+'"><span class="sli_icon-pencil"></span></button>';

                    //    li += '</div>';

                    li += '</div></div></td>';

                li += '</tr></tbody></table></div>';

            li += '</div>';
        });

        return li;
        
    }

    // button pagging
    $('.cmd-paging').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        area = cmd.attr('data-area');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');

            //call function pagging
            callpaging(area);

            cmd.attr('role', 'off');
        }
    });

    
    function loadtable()
    {
        $('#form-table').submit();
    }

    loadtable();



    // VIEW DETAIL ORDERS
    // $('body').on('click', '.cmd-vw-orders', function(e)
    // {
    //     e.stopPropagation();
    //     e.preventDefault();

    //     var cmd = $(this),
    //     area = cmd.parents('.dropdown'),
    //     widget = $('body').find('.area-widget');
        

    //     if( cmd.attr('role') === 'off')
    //     {
    //         cmd.attr('role', 'on');

    //         widget.attr('aria-load', 'true');
    //         widget.find('ul.ul-slide').html('');
    //         widget.find('.area-form').html('');

    //         //form 
    //         fromInWidget(widget,'orders');
            
    //         widget.addClass('show');
            

    //         $.ajax({
    //             type: 'GET',
    //             url: config.apps.URL_API + '/api/orders/vcheck?id=' + cmd.attr('dataid'),
    //             headers: {
    //                 'Content-Type':'application/json',
    //                 'key':getaccount().key
    //             },
    //             // data: JSON.stringify({'order_id':'123'}),
    //             dataType: 'JSON',
    //             success: function(n)
    //             {

    //                 console.log(n);

    //                 var response = n;
             
    //                 if( response.status === 1 ) //cart
    //                 {
    //                     var li = boxslideli('cart',widget);
    //                     widget.find('ul.ul-slide').html(li);
    //                     widget.find('li.slide').attr('role', 'off');


    //                     elcartwidget(widget,'get',n.response);
    //                 }

    //                 if( response.status === 2)
    //                 {
    //                     var li = boxslideli('preview',widget);
    //                     widget.find('ul.ul-slide').html(li);
    //                     widget.find('li.slide').attr('role', 'off');

    //                     elcartwidget(widget,'preview',n.response);
    //                 }

                    
    //                 // widget.attr('aria-load', 'false');

    //             },
    //             error: function(n)
    //             {
    //                 var response = n.responseJSON;
    //                 flagnotif('error','Opss.. Terjadi kesalahan tidak diketahui, refresh kembali halaman ini.');
    //                 // console.log(response);
                    
    //             }
    //         });

    //         // var li = boxslideli('checkorders',widget);
    //         // widget.find('ul.ul-slide').html(li);
    //         // widget.attr('aria-load', 'false');

    //         //
    //         area.find('button').click();
    //         cmd.attr('role', 'off');
    //     }

    // });


    // VIEW VERIFIKASI ORDERS
    $('body').on('click', '.cmd-veriforders', function(e)
    {
        e.stopPropagation();
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents('.dropdown');
        

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');

            //removewidget
            $('body').find('.area-widget').remove();
            

            //create modal widget
            widgetEl('vcheckverif');

            var widget = $('body').find('.area-widget'),
            ulslide = widget.find('ul.ul-slide');
            var slide = boxslideli('notfound',widget);

            // create slide
            ulslide.html(slide);
            
            //send
            $.ajax({
                type: 'GET',
                url: config.apps.URL_API + '/api/orders/checkveriforders?id=' + cmd.attr('dataid'),
                headers: {
                    'Content-Type': 'application/json',
                    'key': getaccount().key
                },
                timeout: 18000,
                cache: false,
                data: 'JSON',
                success: function(n)
                {
                    console.log(n);

                    var response = n.response;

                    //
                    widget.find('li.slide .head b').html( response.orders.order.paid === 1 ? 'Detail Order' : 'Verifikasi' );
                    var bodyslide = veriforder_slide(response);
                    ulslide.find('.ar-body').html(bodyslide);
                    // // create inslide
                    widget.attr('aria-load', 'false');

                    

                },
                error: function(n)
                {

                    console.log(n);

                    var empty = '';
                    empty += '<div class="cart-empty  color-red">';
                    empty += '<div class="div">';
                    empty += '<div class="div ic"><span class="flaticon-danger"></span></div>';
                    empty += '<div class="div"><span>';
                        empty += n.status === 404 ? 'Opss... Data tidak ditemukan' : 'Opss... Terjadi kesalahan, harap refresh halaman ini';
                    empty += '</span></div>';
                    empty += '</div>';
                    empty += '</div>';

                    widget.find('.ar-body').html(empty);

                    widget.attr('aria-load', 'false');

                
                }
            });

            cmd.attr('role', 'off');

        }

    });

    // =========> END EXE TABLE



    // EXPORT DATA
    $('.cmd-export').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this);

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            getexport($(this));
        }
    });


    //getfunction excel
    function getexport(e)
    {
        var button = e,
        url = button.attr('data-action');

        loadprocess('Harap tunggu, sedang process export data....');

        $.ajax({
            type: 'GET',
            url: config.apps.URL_API + url,
            cache: false,
            timeout: 18000,
            headers: {
                "Content-Type": "application/json",
                "key": getaccount().key
            },
            dataType: 'JSON',
            success: function(e)
            {
                // console.log(e);

                exporttoexcel(e.response);


                hideloadprocess();
                button.attr('role', 'off');
            },
            error: function(e)
            {

                // console.log(e.responseJSON);

                flagnotif('error', e.responseJSON.message);
                hideloadprocess();
                button.attr('role', 'off');
            }
        })

    }



    //
    // button filter
    $('#form-table .cmd-filter-table').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        form = cmd.parents('form');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            $('body').append('<div class="layer-black"></div>');
            form.attr('aria-categori', 'true');

        }
        else
        {
            cmd.attr('role', 'off');
            form.attr('aria-categori', 'false');
            $('body').find('.layer-black').remove();
        }

    });



    // ===
    // DATE ==>
    var from = $("#start-date")
    .datepicker({
        // defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 2,
        dateFormat:"dd/mm/yy"
    })
    .on("change", function () {
        to.datepicker("option", "minDate", chkDate(this));
        cekrangedate(from.val(),to.val());
    }),
    to = $("#end-date")
    .datepicker({
        // defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 2,
        dateFormat: "dd/mm/yy"
    })
    .on("change", function () {
        from.datepicker("option", "maxDate", chkDate(this));
        cekrangedate(from.val(),to.val());
    });

    function chkDate(element)
    {
        var date;

        try {
            date = $.datepicker.parseDate("dd/mm/yy", element.value);
        }
        catch (error)
        {
            date = null;
        }

        return date;
    }


    // Range Picker
    function cekrangedate(e,r)
    {
        var area = $('body').find('.area-date');

        if(e !== '' && r !== '')
        {
            area.attr('aria-role','true');
            // changecategori();
        }
    }

    //
    $('body').on('click', '.clear-date', function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents('.area-date'),
        areacategori = cmd.parents('.area-categori');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            area.find('input[type="text"]').val('');
            // changecategori();
            area.attr('aria-role', 'false');
            cmd.attr('role', 'off');
        }
    });


    $('#form-table button.cmd-categori').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        form = cmd.parents('form');

        var sd = form.find('input[name="start-date"]').val(),
        ed = form.find('input[name="end-date"]').val(),
        st = form.find('select[name="cat-status"]').val(),
        cm = form.find('select[name="cat-company"]').val(),
        cs = form.find('select[name="cat-cs"]').val();

        
        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');

            if( sd === '' || ed === '')
            {
                form.find('input.datepicker').val('');
            }

            if( sd !== '' && ed !== '' || st !== '-1' || cm !== '-1' || cs !== '-1')
            {
                form.attr('data-filter', 'true');
            }
            else
            {
                form.attr('data-filter', 'false');
            }


            //
            form.submit();
            form.find('.cmd-filter-table').click();
            cmd.attr('role', 'off');
        }

    });





    $('.cmd-reset-cat').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this);
        
        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            resetcategori();
            cmd.attr('role', 'off');
        }

    });




    // reset
    function resetcategori()
    {
        var area = $('body').find('.area-categori'),
        form = area.parents('form');

        form.find('input[name="start-date"]').val('');
        form.find('input[name="end-date"]').val('');
        form.find('select[name="cat-status"]').val('-1'),
        form.find('select[name="cat-company"]').val('-1'),
        form.find('select[name="cat-cs"]').val('-1');

        area.find('.area-date').attr('aria-role', 'false');
        area.find('.selectpicker').selectpicker('refresh');
        form.attr('data-filter', 'false');
        form.find('.cmd-filter-table').click();
        loadtable();

    }
    



    //
    $('body').on('click', '.cmd-add-noresi', function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        modal = $(cmd.attr('data-target'));

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');

            modal.find('.label-invoice b').html(cmd.attr('data-invoice'));
            modal.find('input[name="shiping_id"]').val(cmd.attr('dataid'));
            modal.find('textarea[name="noresi"]').val(cmd.attr('data-noresi'));
            modal.find('button.cmd-pickup').attr('dataid', cmd.attr('dataid'));
            $(cmd.attr('data-target')).modal();
            cmd.attr('role', 'off');

        }
    });


    $('body').on('click', '.cmd-pickup', function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        modal = cmd.parents('.new-modal.show');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');

            $.ajax({
                type:"POST",
                url: config.apps.URL_API + '/api/shiping/pickup',
                headers: {
                    'Content-Type':'application/json',
                    'key':getaccount().key
                },
                cache: false,
                timeout: 18000,
                data: JSON.stringify({
                    'id': cmd.attr('dataid')
                }),
                dataType: 'JSON',
                success: function(n)
                {
                    console.log(n);
                    modal.find('textarea[name="noresi"]').val(n.response);
                    modal.find('button.close').click();
                    loadtable();
                    cmd.attr('role','off');
                    flagnotif('success',n.message)
                },
                error: function(n)
                {
                    console.log(n);
                    cmd.attr('role','off');
                    flagnotif('error', n.responseJSON.message);
                }
            });

        }
    });



    //insert noresi
    $('body').on('click', '#modalnoresi button.modal-submit', function(e)
    {
        e.preventDefault();
        // console.log('ok');
        $('#modalnoresi').find('form').submit();
    });


    
    // $('body').on('submit', '#modalnoresi form', function(e)
    // {
    
    //     console.log('submit');

    // });

    $('#modalnoresi form').submit(function()
    {
        var form = $(this),
        modal = form.parents('#modalnoresi'),
        error = modal.find('.msg-error'),
        button = modal.find('button.modal-submit'),
        noresi = form.find('textarea[name="noresi"]');

        error.hide();
        form.find('.br-error').removeClass('br-error');
        if( $.trim( noresi.val() ) === '')
        {
            noresi.addClass('br-error');
            error.html('Harap masukan Nomor Resi Pengiriman');
            error.show();
            noresi.focus();
            return;
        }
        $.ajax({
            type: 'POST',
            url: config.apps.URL_API + form.attr('action'),
            headers: {
                'Content-Type':'application/json',
                'key':  getaccount().key
            },
            cache: false,
            timeout: 18000,
            data: JSON.stringify({
                'noresi':form.find('textarea[name="noresi"]').val(),
                'id': form.find('input[name="shiping_id"]').val()
            }),
            dataType: 'JSON',
            success: function(n)
            {
                // console.log(n);
                modal.find('button.close').click();
                button.attr('role', 'off');
                loadtable();

                if( n.message !== '')
                {
                    flagnotif('success', n.message);
                }
            },
            error: function(n)
            {
                
                var response = n.responseJSON;
                console.log(response.message);
                var message = '';
                if( n.status === 401 )
                {
                    message = response.message;
                    form.find('textarea[name="noresi"]').addClass('br-error');
                    form.find('textarea[name="noresi"]').focus();
                }
                else
                {
                    message = 'Opss.. Terjadi kesalahan, harap refresh kembali halaman ini';
                }
                error.html(message);
                error.show();
                button.attr('role', 'off');
            }
        });
        
    });





     //dectect doinactive
    //  setupTimers ();
    
    return false;
});
</script>



@endsection