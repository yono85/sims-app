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
                                        <span>Pembayaran Bulking</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>            
                    <div class="fl-left wh-m-680"></div>
                    <div class="fl-right">

                        <ul>

                            <li class="fl-right">

                                <button class="no cmd-modal-widget green rds4" data-widget="bulking-new" data-type="3" role="off" >
                                    <span class="ic-abs fas fa-plus"></span>
                                    <span class="sli_icon-bag"></span>
                                </button>

                                <button class="grey nobr cmd-export" data-action="/api/export/orders" role="off">
                                    <span class="fas fa-file-download"></span>
                                </button>

                                
                                
                            </li>
                            <li class="fl-left">

                                <form action="/api/bulkingpayment/table" id="form-table" aria-categori="false" data-filter="false">
                                    <div class="ar-li">
                                    
                                        <div class="ar-src" aria-role="false">
                                            <input type="text" placeholder="Cari Inv Bulking atau Invoice Order..." name="search" class="search" value="">
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
                                                        <div class="div field">
                                                            <div class="div legend">STATUS</div>
                                                            <div class="div bdy">
                                                                <select class="selectpicker" data-live-search="false" name="cat-status">
                                                                    <option value="-1">All...</option>
                                                                    <option value="0">Menunggu Pembayaran</option>
                                                                    <option value="1">Menunggu Verifikasi</option>
                                                                    <option value="2">Berhasil</option>
                                                                </select>
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
                                                <span class="ic sli_icon-credit-card"></span>
                                                TOTAL BAYAR
                                            </div>
                                        </td>
                                        <td class="td-w210">
                                            <div class="td-iner">
                                                <span class="ic sli_icon-credit-card"></span>
                                                PEMBAYARAN
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
        VURL = config.apps.URL_API + form.attr('action'),
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
        field = '';
        field += '?v=' + form.find('input[name="table"]').val();
        field += '&src=' + form.find('input[name="search"]').val();
        field += '&pg=' + form.find('input[name="paging"]').val();
        field += '&status=' + form.find('select[name="cat-status"]').val(),
        field += '&date=' + date ;
        field += '&sortdate=' + form.find('input[name="sort_date"]').val(),

        //splash tabel
        splashtable();

        //
        var token = getToken();

        //
        $.ajax({
            type: 'GET',
            url:  VURL + field,
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

                //footer
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

                // enabled sort table
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
        var li = '';
        var tagihan = 0,
        courier_price = 0;

        // console.log(e);
        $.each(e.list, function(i, item)
        {
            // courier_price = item.shiping.courier_price === '' ? 0 : parseFloat(item.shiping.courier_price);
            // // var total = item.price_show === 'p' ? item.payment.total : item.payment.total_reseller;
            // var total = item.price_show === 'p' ? item.payment.total : item.payment.total_reseller;
            // tagihan = (parseFloat(total) + courier_price) - parseFloat(item.uniq);

            li += '<div class="tr">';

                li += '<div class="thr"><div class="div clr-float">';
    
                    li += '<div class="spc"><div class="tag sts-o" role="'+item.status+'"><ul>';

                        li += '<li class="sc bc-green"><span class="ic fa flaticon2-check-mark"></span><span class="wh-m-520">PAID</span></li><li class="mv bc-orange"><span class="ic sli_icon-clock"></span><span class="wh-m-520">VERIFY</span></li><li class="mp bc-red"><span class="ic sli_icon-credit-card"></span><span class="wh-m-520">PAYMENT</span></li>';
                    
                    li += '</ul></div></div>';

                    li += '<div class="spc"><span class="txt11"><b class="selection-search">#'+item.invoice+'</b></span></div>';
                                

                    li += '<div class="spcr ws-m-520"><span class="date color-orangered"><b>'+formatRupiah(parseFloat(item.total), 'Rp')+'</b></span></div>';

                    li += '<div class="spcr"><span class="label fa flaticon-calendar-with-a-clock-time-tools"></span> <span class="date">'+item.date+'</span></div>';

                    li += item.admin_name === '' ? '' : '<div class="spcr wh-m-520"><span class="ic label sli_icon-user-follow"></span><b class="up-txt">'+item.admin_name+'</b></div>';
                                
                    li += '</div>';

                    li += item.paid === 2 ? '' : '<div class="div expdate">JATUH TEMPO PEMBAYARAN: <span class="color-red">'+item.exp+'</span></div>';

                li += '</div>';

                li += '<div class="tbody"><table><tbody><tr>';

                    li += '<td><div class="td-iner">';

                        $.each(item.item, function(x,y)
                        {

                            
                            li += '<div class="div lst '+ ( (x + 1) > 3 ? 'hide' : '' ) +'">';

                            li += '<div class="div">#<a href="'+y.url+'" target="_blank" class="color-blue"><b>'+y.invoice+'</b></a> <span class="label">'+formatRupiah(y.total, 'Rp')+'</span></div>';
                            li += '<div class="div">'+y.customer_name+' - '+y.customer_phone+'</div>';

                            li += '</div>';


                            
                        });

                    li += item.item.length < 4 ? '' : '<div class="div" style="text-align:right"><a href="#" class="color-blue cmd-vw-orders" role="off" dataid="'+item.id+'">Lihat ('+ (item.item.length - 3) +') Order lainnya</a></div>';

                    li += '<td class="td-w180 wh-m-520"><div class="td-iner">';

                        li += '<div class="div"><span class="label">Total Bayar: </span></div>';

                        li += '<div class="div"><b>'+formatRupiah(item.total, 'Rp')+'</b></div>';

                    li +='</div></td>';

                    li += '<td class="td-w210 wh-m-520"><div class="td-iner">';
                        
                        li += '<div class="div"><span class="label">Ke Bank: </span></div>';

                        li += item.bank.name === '' || item.bank.name === null ? '<div class="div"><span>--</span></div>': '<div class="div"><b>'+item.bank.type+' '+item.bank.name+'</b></div> <div class="div"><span>'+item.bank.account+' - '+item.bank.norek+'</span></div>';

                    li += '</div></td>';



                    li += '<td class="td-center td-w70"><div class="td-iner disvis"><div class="div">';


                        li += '<div class="dropdown">';

                           li += '<button type="button" class="btn btn-primary nobr grey s11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-v"></span></button>';

                            li += '<div class="dropdown-menu">';
                                
                                li += '<a class="dropdown-item color-green cmd-vw-orders" href="#" role="off" dataid="'+item.id+'"><span>Detail</span><span class="ic sli_icon-info"></span></a>';

                                li += item.status === "mp" ? '<div class="dropdown-divider"></div> <a class="dropdown-item color-red" data-togglex="modal" msg-type="delete-order" data-target="#msgboxDelOrder" data-invoice="#'+item.invoice+'" href="#" dataid="'+item.id+'" role="off"><span>Batalkan</span><span class="ic sli_icon-trash"></span></a>' : "";

                            li += '</div>';
                       li += '</div>';

                    li += '</div></div></td>';

                li += '</tr></tbody></table></div>';

            li += '</div>';
        });

        return li;
        
    }
  
    function loadtable()
    {
        $('#form-table').submit();
    }

    loadtable();

    // VIEW DETAIL ORDERS
    $('body').on('click', '.cmd-vw-orders', function(e)
    {
        e.stopPropagation();
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents('.dropdown');
        // widget = $('body').find('.area-widget');
        
        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');

            //remove widget
            $('body').find('.area-widget').remove();

            $.ajax({
                type: 'GET',
                url: config.apps.URL_API + '/api/orders/bulking/vcheck?id=' + cmd.attr('dataid'),
                headers: {
                    'Content-Type':'application/json',
                    'key':getaccount().key
                },
                dataType: 'JSON',
                success: function(n)
                {

                    var response = n.response;

             
                    // console.log(response);
                    
                    // $('body').find('.area-widget').remove();
                    widgetEl('vcheckbulking');
                    var widget = $('body').find('.area-widget');
                    

                    if( n.status === 0 ) //cart
                    {

                        // boxslideli('bulking-new',widget);

                        var li = boxslideli('bulking-new',widget);
                        widget.find('ul.ul-slide').html(li);
                        bulking_slide();

                        widget.find('#form-orderbulking input[name="bulking_id"]').val(response.id);
                        widget.find('#form-orderbulking input[name="bulking_total"]').val(response.total);
                        widget.find('#form-orderbulking input[name="bulking_qty"]').val(response.qty);
                        widget.find('#form-orderbulking input[name="list_order_id"]').val(response.item);

                        var slide = widget.find('li.slide');
                        listcartbulking(response,slide);
                        calclistbulking();
                        bulking_srclistwg();
                        widget.attr('aria-load', 'false');
                    //     //
                    //     widgetEl('cart');

                    //     widget = $('body').find('.area-widget');

                    //     widget.attr('aria-load', 'true');
                    //     widget.find('ul.ul-slide').html('');

                    //     //form 
                    //     fromInWidget(widget,'orders');

                    //     var li = boxslideli('cart',widget);
                    //     widget.find('ul.ul-slide').html(li);
                    //     widget.find('li.slide').attr('role', 'off');

                    //     widget.find('input[name="order_type"]').val(n.response.cart.type);
                    //     elcartwidget(widget,'get',n.response);
                        
                    }
                    else

                    // if( response.status === 2)
                    {

                        // var li = boxslideli('bulking-new',widget);
                        // widget.find('ul.ul-slide').html(li);
                        // bulking_slide();


                        // var slide = widget.find('li.slide');
                        // var preview = preview_slide_bulking(response);
                        // widget.find('ul.ul-slide').html(preview);
                        // calclistbulking();
                        // bulking_srclistwg();
                        
                        
                    //     //
                    //     widgetEl('preview');

                    //     widget = $('body').find('.area-widget');

                    //     widget.attr('aria-load', 'true');
                    //     widget.find('ul.ul-slide').html('');

                    //     //form 
                    //     fromInWidget(widget,'orders');

                        var li = boxslideli('preview',widget);
                        widget.find('ul.ul-slide').html(li);
                        var preview = preview_slide_bulking(response.response);
                        widget.find('.box').addClass('w480');
                        widget.find('li.slide .inar-body').html(preview);
                        widget.find('li.slide').attr('role', 'off');
                        widget.find('.head .intbl b').html('Status Order');
                        widget.find('li.slide .in-body').addClass('h-full');
                        widget.find('li.slide .inar-body').addClass('h-full');
                        widget.find('li.slide').find('.area-navi').remove();
                    //     widget.find('li.slide').attr('role', 'off');
                    //     elcartwidget(widget,'preview',response.response);
                        widget.attr('aria-load', 'false');
                    }

                    


                    var slideBulking = $('body').find('#slide-bulking');
                    var bulkHeight = slideBulking.innerHeight() - 50;

                    slideBulking.find('.box-blkg-l').css({'height':bulkHeight +'px'});
                    slideBulking.find('.box-blkg-r').css({'height':bulkHeight +'px'});

                },
                error: function(n)
                {
                    var response = n.responseJSON;
                    flagnotif('error','Opss.. Terjadi kesalahan tidak diketahui, refresh kembali halaman ini.');
                    // console.log(response);
                    
                }
            });



            //
            area.find('button').click();
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


                // hideloadprocess();
                button.attr('role', 'off');
            },
            error: function(e)
            {

                console.log(e.responseJSON);

                alert(responseJSON.message);
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


    $('body').on('change', 'select[name="confirmation-bank"]', function()
    {
        if( $(this).val() !== '-1')
        {
            clearslideerror();
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

        //
        loadtable();

    }
    


    //cancel order
    $('body').on('click', '#msgboxDelOrder .modal-submit', function(e)
    {
        e.stopPropagation();
        e.preventDefault();

        //
        var cmd = $(this);
        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            deleteOrder(cmd);
            // loadtable();
        }
    })

    function deleteOrder(e)
    {
        var cmd = e,
        msgbox = cmd.parents('.new-modal.show');

        $.ajax({
            type: 'POST',
            url: config.apps.URL_API + '/api/orders/bulking/delete',
            headers:{
                "Content-Type":"application/json",
                // "Authorization": "Bearer " + getToken()
                "key":getaccount().key
            },
            data: JSON.stringify({
                'id':e.attr('dataid')
            }),
            cache: false,
            timeout: 18000,
            dataType: 'JSON',
            success: function(n)
            {
                // console.log(n);
                var response = n;
                // // refreshCookie(n.refresh);

                // msgbox.attr('aria-alert', 'true');
                // msgbox.find('.alert').attr('data-role', 'success');
                // msgbox.find('.alert .msg').html(response.message);

                
                loadtable();
                
                msgbox.find('button[data-dismiss="modal"]').click();
                // cmd.attr('role', 'off');
                flagnotif('success',response.message);
            },
            error: function(n)
            {
                // console.log(n);
                
                var response = n.responseJSON;
                loadtable();
                // //
                // msgbox.attr('aria-alert', 'true');
                // msgbox.find('.alert').attr('data-role', 'error');
                // msgbox.find('.alert .msg').html(n.responseJSON.message);
                // cmd.attr('role', 'off');
                //
                msgbox.find('.button.msgbox-close').click();
                // refreshCookie(response.refresh);
                flagnotif('error',response.message);
            }
        });

    }

    // SLIDE BULKING
    var txtsrc = '';
    $('body').on('keydown', '.area-src-list input[type="text"]', function(e)
    {
        var text = $(this),
        area = text.parents('.area-src-list');
        var key = e.which || e.keyCode;

        if( $.trim( text.val() ).length > 0 )
        {
            // area.attr('role', 'true');
            if( $.trim(text.val()).length > 2 && key === 13 && txtsrc !== text.val())
            {
                txtsrc = text.val();
                area.attr('role', 'true');
                bulking_srclistwg();
                // console.log('ok');
            }

        }
    });


    //
    $('body').on('keyup', '.area-src-list input[type="text"]', function(e)
    {
        var text = $(this),
        area = text.parents('.area-src-list');
        
        if( $.trim( text.val() ).length < 1 )
        {
            txtsrc = text.val();
            area.attr('role', 'false');
            // console.log('clear');
        }

    });


    //clear
    $('body').on('click', '.cmd-clear-src', function(e)
    {
        var cmd = $(this),
        area = cmd.parents('.area-src-list');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            area.attr('role', 'false');
            area.find('input[type="text"]').val('');
            txtsrc = '';
            bulking_srclistwg();
            cmd.attr('role', 'off');
        }
    });


    //reload
    $('body').on('click', '.cmd-reload-list', function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents('.area-src-list'),
        outer = cmd.parents('.area-outer-list'),
        arealist = outer.find('.area-list');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');

            area.find('input[type="text"]').val('');
            area.attr('role','false');

            //
            // arealist.attr('role-load', 'true');
            bulking_srclistwg();
            // arealist.attr('role-load', 'false');

            cmd.attr('role', 'off');
        }

    });


    $('body').on('click', '.cmd-keep-list', function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        li = cmd.parent('li'),
        dataid = cmd.parent('li').attr('dataid'),
        slide = cmd.parents('li.slide');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            var list = '';

            list += '<li dataid="'+dataid+'"  class="alistbulking" dataprice="'+li.attr('dataprice')+'"><div class="div clr-float">';
                list += '<div class="lst"><div class="tbl"><div class="intbl"><div class="div">';

                    list += '<div class="div up"><span><a href="'+config.apps.URL + li.attr('dataurl')+'" target="_blank" class="color-blue">'+cmd.find('.lbl-invoice').html()+'</a><span class="lbl-price">'+cmd.find('.lbl-price').html()+'</span></span></div><div class="div">'+cmd.find('.lbl-customers').html()+'</div>';

                list += '</div></div></div></div>';
                list += '<button class="no-br cmd-del-keep" role="off"><span class="sli_icon-close"></span></button>';
            list += '</div></li>';

            slide.find('.area-list-keep ul').prepend(list);

            calclistbulking();
            li.remove();
        }
    
    });


    function listcartbulking(n,el)
    {

        var list = '';
        $.each(n.list, function(i, item) {

            list += '<li dataid="'+item.id+'"  class="alistbulking" dataprice="'+item.total+'"><div class="div clr-float">';
                list += '<div class="lst"><div class="tbl"><div class="intbl"><div class="div">';
    
                    list += '<div class="div up"><span><a href="'+config.apps.URL+item.url+'" target="_blank" class="color-blue">#'+item.invoice+'</a> <span class="lbl-price">('+formatRupiah(item.total, 'Rp')+')</span></span></div><div class="div"><span class="sli_icon-user"></span> <span>'+item.customer_name+'</span><span> - '+item.customer_phone+'</span></div>';
    
                list += '</div></div></div></div>';
                list += '<button class="no-br cmd-del-keep" role="off"><span class="sli_icon-close"></span></button>';
            list += '</div></li>';
        });

        el.find('.area-list-keep ul').html(list);
    }


    //remove list
    $('body').on('click', '.cmd-del-keep', function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        li = cmd.parents('li.alistbulking'),
        slide = cmd.parents('li.slide'),
        form = slide.find('form#form-orderbulking');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            li.remove();
            calclistbulking();

            $.ajax({
                type: 'POST',
                url: config.apps.URL_API + '/api/orders/bulking/deletelist',
                headers: {
                    'Content-Type':'application/json',
                    'key': getaccount().key
                },
                cache: false,
                timeout: 18000,
                data: JSON.stringify({
                    'order_id': li.attr('dataid'),
                    'bulking_id': form.find('input[name="bulking_id"]').val(),
                    'item': form.find('input[name="list_order_id"]').val(),
                    'total': form.find('input[name="bulkig_total"]').val(),
                    'qty': form.find('input[name="bulking_qty"]').val()
                }),
                dataType: 'JSON',
                success: function(n)
                {
                    console.log(n);
                    //
                    bulking_srclistwg();
                    loadtable();
                },
                error: function(n)
                {
                    console.log(n.responseJSON);
                    // if( n.status === 404)
                    // {
                    //     li.remove();
                    //     calclistbulking();
                        bulking_srclistwg();
                        slide.find('form input[name="bulking_id"]').val('');
                        loadtable();
                    // }
                    
                }
            });
        }
    });

    //
    function calclistbulking()
    {
        var slide = $('body').find('li#slide-bulking'),
        area = slide.find('.area-list-keep');

        var list = [];
        var total = 0;
        area.find("ul li").each(function(){
            list.push($(this).attr("dataid"));
            total += parseFloat($(this).attr("dataprice"));
        });

        slide.find('.lbl-item').html(list.length + 'x');
        slide.find('.lbl-total').html(formatRupiah(total, 'Rp'));

        var val = list.length;
        var value = val === 0 ? '' : JSON.stringify(list);
        
        if( val === 0 )
        {
            slide.find('button.cmd-next-list').attr('disabled','disabled');
            slide.find('button.cmd-next-slide').attr('disabled', 'disabled');
        }
        else
        {
            slide.find('button.cmd-next-slide').removeAttr('disabled');
            slide.find('button.cmd-next-list').removeAttr('disabled');
        }
        // slide.find('button.cmd-next-slide').attr('disabled', 'disabled');

        slide.find('form#form-orderbulking input[name="list_order_id"]').val(value);
        slide.find('form#form-orderbulking input[name="bulking_total"]').val(total);
        slide.find('form#form-orderbulking input[name="bulking_qty"]').val(val);
    }

    //
    $('body').on('click', '.cmd-next-list', function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        slide = cmd.parents('li.slide');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');

            slide.find('.box-blkg-r').stop().animate({left:'0%'}, '100', 'swing', function(){
                cmd.attr('role', 'off');
            });
        }
    });

    //
    $('body').on('click', '.cmd-back-list', function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        slide = cmd.parents('li.slide');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');

            slide.find('.box-blkg-r').stop().animate({left:'100%'}, '100', 'swing', function(){
                cmd.attr('role', 'off');
            });
        }
    });

    //
    $('body').on('click', '.cmd-modal-widget[data-widget="bulking-new"]', function(e)
    {
        bulking_slide();
        bulking_srclistwg();

        var slideBulking = $('body').find('#slide-bulking');
        var bulkHeight = slideBulking.innerHeight() - 50;

        slideBulking.find('.box-blkg-l').css({'height':bulkHeight +'px'});
        slideBulking.find('.box-blkg-r').css({'height':bulkHeight +'px'});
    });

    //
    $('body').on('click', '.cmd-modal-inwidget[data-modal="method-payment-bulking"]', function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        widget = cmd.parents('.area-widget.show'),
        slide = cmd.parents('li.slide'),
        box = widget.find('.box'),
        n = cmd.attr('data-modal');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');

            //clear error
            clearslideerror();

            //
            box.find('.inmodal').remove();
            var inmodal = inmodalwidget(n);
            box.append(inmodal);
            box.find('.inmodal-widget').stop().animate({bottom:'0px'}, '100', 'swing', function(){
                //
        
            });

            viewMethodePaymentBulking(widget,slide);
            cmd.attr('role', 'off');
        }

    });

    // keep select bank
    $('body').on('click', '.cmd-keep-bank-bulking', function(e)
    {
        e.preventDefault();

        //
        var cmd = $(this);
        modal = cmd.parents('.modal-widget'),
        widget = cmd.parents('.area-widget.show'),
        slide = cmd.attr('data-open');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');


            var bulking_id = widget.find('form#formorder-bulking-confirmation input[name="bulking_id"]').val();


            
            widget.find('.area-bank').attr('role', 'true');
            
            //
            // $.ajax({
            //     type: 'POST',
            //     url: config.apps.URL_API + '/api/orders/bulking/setmetodepayment',
            //     headers: {
            //         'Content-Type' : 'application/json',
            //         'key': getaccount().key
            //     },
            //     data: JSON.stringify({
            //         'bulking_id'      :   widget.find('form#formorder-bulking-confirmation input[name="bulking_id"]').val(),
            //         'payment_id'    :   cmd.attr('dataid')
            //     }),
            //     dataType: 'JSON',
            //     success: function(n)
            //     {

                
                    // console.log(n);

                    //default
                    widget.find('.area-bank .metode-img').attr('src', cmd.find('img').attr('src') );
                    widget.find('.area-bank .metode-name').html(cmd.find('.albl b').html() );
                    var label = cmd.attr('data-name') === '' ? '' : cmd.find('.albl .label').html() ;
                    widget.find('.area-bank .metode-label').html(label);



                    //
                    widget.find('input[name="payment_id"]').val(cmd.attr('dataid'));
                    modal.find('.cmd-close-mw').click();
                    cmd.attr('role', 'off');
                    
            //     },
            //     error: function(n)
            //     {
            //         console.log(n);
            //     }

            // });
            

            
        }

    });
    // END SLIDE BULKING


    return false;
});
</script>



@endsection