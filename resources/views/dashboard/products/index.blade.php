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
                                        <span>Produk</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>     

                    <div class="fl-left wh-m-680"></div>
                    <div class="fl-right">

                        <ul>

                            <li class="fl-right">

                                <button class="no cmd-modal-widget-new green rds4" data-widget="product-new" data-type="new" role="off">
                                    <span class="ic-abs fas fa-plus"></span>
                                    <span class="sli_icon-bag"></span>
                                </button>
                                
                            </li>
                            <li class="fl-left">

                                <form action="/api/partner/table" id="form-table" aria-categori="false" data-filter="false">
                                    <div class="ar-li">
                                    
                                        <div class="ar-src" aria-role="false">
                                            <input type="text" placeholder="Cari Produk" name="admin_name" class="search" value="">
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

                                        <button class="grey nobr s10 cmd-filter-table fil-table " role="off">
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
                                                            <div class="div legend">TYPE</div>
                                                            <div class="div bdy area-select-comp">
                                                                
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="select-categori-maklon" aria-type="3">
                                                        <div class="div field">
                                                            <div class="div legend">PILIH MAKLON</div>
                                                            <div class="div bdy area-select-maklon">
                                                                
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="div field">
                                                            <div class="div legend">STATUS</div>
                                                            <div class="div bdy">
                                                                <div class="div">
                                                                    <select class="selectpicker" data-live-search="false" name="cat-status">
                                                                        <option value="-1">All...</option>
                                                                        <option value="1">Aktif</option>
                                                                        <option value="2">Pending Verifikasi</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="div field navi">
                                                            <div class="div clr-float">
                                                                <button class="blue cmd-categori" role="on">
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


                                <!-- categori -->
                                <input type="hidden" name="cat-taging" value="" />

                                <!-- form -->
                                <input type="hidden" name="taging" value="" />
                                <input type="hidden" name="level" value="-1" />
                                <input type="hidden" name="status" value="-1"/>
                                <input type="hidden" name="maklonid" value="-1">
                                <input type="hidden" name="register" value="">
                                <input type="hidden" name="sort_name" value="asc" />
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
                                        <td class="td-w130">
                                            <div class="td-iner">
                                                <span class="ic slid_credit-card"></span>
                                                HARGA
                                            </div>
                                        </td>
                                        <td class="td-w130">
                                            <div class="td-iner">
                                                <span class="ic sli_credit-card"></span>
                                                HARGA DIST
                                            </div>
                                        </td>
                                        <td class="td-w130">
                                            <div class="td-iner">
                                                <span class="ic sli_icon-info"></span>
                                                STOCK
                                            </div>
                                        </td>
                                        <td class="td-center td-w100">
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
                                        <span class="color-green">
                                            <span class="fa flaticon2-check-mark"></span>
                                            <span>ACTIVE</span>
                                        </span>
                                    </div>
                                    <div class="spc">
                                        <div class="tag">
                                            <ul>
                                                <li class="bc-orange">MAKLON</li>
                                            </ul>
                                        </div>
                                    </div>
                                    

                                    <div class="spcr">
                                        <span class="label sli_icon-calendar"></span>
                                        <span>16.41</span>
                                    </div>
                                    <div class="spcr">
                                        <span class="label sli_icon-user-follow"></span>
                                        <b>ADMIN</b>
                                    </div>

                                </div>
                            </div>
                            <div class="tbody">
                                <table>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="td-iner">
                                                    <div class="div clr-float">
                                                        <div class="img-prd">
                                                            <div class="arimage-resize">
                                                                <img src="http://localhost:8001/images/none/no-product-image.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="nm-prd">
                                                            <div class="tbl">
                                                                <div class="intbl">
                                                                    <div class="div">
                                                                        <div class="div">
                                                                            <b>Product</b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-w130">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <div class="div">
                                                            <b>Rp150.000</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-w130">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <div class="div">
                                                            <b>Rp50.000</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-w130">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <div class="div">
                                                            <span>Stock 0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-center td-w100">
                                                <div class="td-iner disvis">
                                                    <div class="div">

                                                        <div class="dropdown dropleft">
                                                            <button type="button" class="btn btn-primary nobr grey s11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="fas fa-ellipsis-v"></span>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">
                                                                    <span>Sunting</span>
                                                                    <span class="ic sli_icon-note"></span>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item color-red" href="#">
                                                                    <span>Hapus</span>
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

            <!-- footer -->

            <div class="fot-table table-footer">
                <div class="div clr-float">
                    <div class="fl-left title">
                        Total <span class="value val-page-total">100</span>
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

    <div class="modal fade new-modal" id="modalresend" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog w420" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <span class="fa flaticon2-send-1"></span>
                        <span>Kirim Ulang Verifikasi</span>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="div act-head">
                        <div class="div label-name">
                            <span class="ic-smll sli_icon-symbol-male"></span>
                            <span><b>0</b></span>
                        </div>
                        <div class="div">
                            <span class="label label-contact">
                                <span>0</span>
                            </span>
                        </div>
                    </div>
                    <div class="div">
                        <form class="account-form" action="/api/admin/manage/resendverif">
                            
                            <input type="hidden" name="admin_id" value="">
                            <input type="submit" value="submit" class="hide" />

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn modal-submit green" role="off">
                        <span>KIRIM VERIFIKASI</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="area-element hide">
        <select name="level-hide">
        </select>
    </div>
</main>

@include('dashboard.component.widget')

@endsection


@section('script')

<!-- <script src="{{$URI}}/assets/js/dashboard/json-excel/xlsx.core.min.js"></script>
<script src="{{$URI}}/assets/js/dashboard/json-excel/FileSaver.js"></script>
<script src="{{$URI}}/assets/js/dashboard/json-excel/jhxlsx.js"></script> -->

<script>


function getmaklon()
{
    var $URL = config.apps.URL_API + '/api/maklon/list?produsenid=' + getaccount().config.company_id;
    var $t = FormSending('','GET','key','',$URL);
    $t.success(function(n)
    {
        // console.log(n);
        var li = '<select class="selectpicker" data-live-search="true" name="cat-maklonid"><option value="-1">Pilih Maklon</option>';
        $.each(n.list, function(i,item)
        {
            li += '<option value="'+(item.id)+'">'+( item.name )+'</option>';
        });
        li += '</select>';

        $('body').find('.area-select-maklon').html(li);
        $('body').find('.area-select-maklon .selectpicker').selectpicker('refresh');
    });
    $t.error(function(n)
    {
        console.log(n);
        $('body').find('.area-select-maklon').html('<select class="selectpicker" data-live-search="true" name="cat-maklonid"><option value="-1">Pilih Maklon</option></select>');
    });
}


function configPage()
{

    if( getaccount().level === 1)
    {
        $('body').find('.area-select-comp').html('<select class="selectpicker" data-live-search="false" name="cat-level"><option value="-1">All...</option><option value="1">Produsen</option><option value="2">Maklon</option></select>');

        getmaklon();
    }
    else
    {
        $('body').find('.area-select-comp').html('<select class="selectpicker" data-live-search="false" name="cat-level"><option value="2">Maklon</option></select>');
        $('body').find('.area-select-maklon').html('<select class="selectpicker" data-live-search="false" name="cat-maklonid"><option value="'+(getaccount().config.company_id)+'">'+( getaccount().config.company_name )+'</option></select>');
        // $('body').find('.cmd-filter-table').addClass('hide');
        $('body').find('.cmd-modal-widget-new').parent('li').addClass('hide');
        $('body').find('.ar-src').css({'margin-right':'0px','padding':'0px'});
    }

    
    
}

configPage();



function getsublevel()
{
    // var modal = el,
    // form = modal.find('form');
    // var form = $('body').find('#form-add-pengguna');
    $.ajax({
        type: 'GET',
        url: config.apps.URL_API + '/api/data/sublevel/list?level=' + getaccount().level,
        headers:{
            'Content-Type': 'application/json',
            'key': getaccount().key
        },
        cache:false,
        timeout: 18000,
        dataType: 'JSON',
        success: function(n)
        {
            console.log(n);
            var select = '';
            // select += '<select name="sublevel" class="selectpicker form-control selectmin1">';
            // select += '<option value="-1">Pilih Level</option>';
            $.each(n.response.list, function(i, item)
            {
                select += '<option value="'+item.sublevel+'">'+item.name+'</option>';
            })
            // select += '</select>';


            $('body').find('.area-element select[name="level-hide"]').append(select);
            $('body').find('select[name="cat-level"]').append(select);

            // form.find('.area-select-sublevel').html(select);
            $('select[name="cat-level').selectpicker('refresh');
        },
        error: function(n)
        {
            console.log(n);
        }
    })
}

// getsublevel();

$(document).ready(function()
{

    function getMaklon(w)
    {
        var widget = w,
        area = widget.find('.area-list-maklon');
        var $URL = config.apps.URL_API + '/api/maklon/list?produsenid=' + getaccount().config.company_id;

        var $t = FormSending("","GET","key","",$URL);
        $t.success(function(n)
        {
            // console.log(n);
            var li = '<li aria-selected="false" class="mg-b0" dataid="-1"><button role="off"  dataid="-1" class="pd-tb10"><span>Pilih jika produk Maklon</span></button></li>';
            $.each(n.list, function(i, item)
            {
                li += '<li aria-selected="false" class="mg-b0" dataid="'+item.id+'"><button role="off"  dataid="'+item.id+'" class="pd-tb10"><span>'+item.name+'</span></button></li>';
            });

            area.find('ul').html(li);
        });
        $t.error(function(n)
        {
            console.log(n.responseJSON.message);
        });
    }

    $('body').on('click', '.cmd-modal-widget-new[data-widget="product-new"]', function()
    {
        // var slide 
        var cmd = $(this);
        var widget = $('body').find('.new-media.show');

        var selectpartner = widget.find('.area-partner_type'),
        selecWeightType = widget.find('.area-weight_type');

        selectpartner.html('<select name="partner_type" class="selectpicker form-control h36"><option value="-1">Pilih Jika Produk Maklon</option></select>');
        //
        selecWeightType.html('<select name="weight_type" class="selectpicker form-control h36"><option value="-1">Ukuran Berat</option><option value="gram">Gram</option><option value="kg">Kg</option></select>');

        widget.find('.selectpicker').selectpicker('refresh');
        widget.find('input[name="maklon_id"]').val('-1');
        widget.find('input[name="type"]').val(cmd.attr('data-type'));
        widget.find('input[name="admin_id"]').val(getaccount().id);
        widget.find('input[name="company_id"]').val(getaccount().config.company_id);

        getMaklon(widget);
        
    });


    //modal
    $('body').on('click', '.cmd-modal', function()
    {
        var cmd = $(this),
        tr = cmd.parents('.tr'),
        modal = $(cmd.attr('data-target'));

        modal.find('button.modal-submit').removeClass('is-loading');
        modal.find('button.modal-submit').attr('role','on');
        modal.find('.label-name').html( tr.find('.td-iner .area-name').html() );
        modal.find('.label-contact').html( tr.find('.td-iner .area-email').html() );
        //
    })

    $('button.modal-submit').click(function()
    {
        var cmd = $(this),
        modal = cmd.parents('.modal.show');

        if( cmd.attr('role') === 'off')
        {
            cmd.addClass('is-loading');
            cmd.attr('role', 'on');
            
            modal.find('form').submit();

        }
    });
    // end modal


    function gettable(e)
    {
        
        // console.log(e.list);

        var li = '';

        $.each(e.list, function(i, item)
        {
            li += '<div class="tr">';

                // head in table
            li += '<div class="thr"><div class="div clr-float">';

                li += '<div class="spc">'+( item.status === 1 ? '<span class="color-green"><span class="ic fa flaticon2-check-mark"></span><span>ACTIVE</span></span>' : '<span class="color-orange"><span class="ic sli_icon-clock"></span><span>PENDING</span></span>')+'</div>';

                li += '<div class="spc '+ (item.type === 1 ? 'hide' : '') +'"><div class="tag"><ul><li class="bc-orange">MAKLON</li></ul></div></div>';
                
                li += '<div class="spcr"><span class="ic label sli_icon-calendar"></span><span>'+(item.date)+'</span></div>';

                li += '<div class="spcr"><span class="ic label sli_icon-user-follow"></span><b>'+(item.admin)+'</b></div>';

            li += '</div></div>';

            li += '<div class="tbody"><table><tbody><tr>';

                // td 1
                li += '<td><div class="td-iner"><div class="div clr-float">';

                    li += '<div class="img-prd"><div class="arimage-resize"><img src="'+(item.images)+'" alt=""></div></div>';
                    
                    li += '<div class="nm-prd"><div class="tbl"><div class="intbl"><div class="div"><div class="div"><b>'+(item.name)+'</b></div></div></div></div></div>';

                li += '</div></div></td>';

                // td 2
                li += '<td class="td-w130"><div class="td-iner">';
                    li += '<div class="div"><b>'+( formatRupiah(item.price, '') )+'</b></div>';
                li += '</div></td>';

                // td 3
                li += '<td class="td-w130"><div class="td-iner">';
                    li += '<div class="div"><b>'+(formatRupiah(item.price_reseller, ''))+'</b></div>';
                li += '</div></td>';

                // td 4
                li += '<td class="td-w130"><div class="td-iner">';
                    li += '<div class="div"><span>Stock '+ ( formatNumber(item.stock) ) +'</span></div>';
                li += '</div></td>';

                // td 5
                li += '<td class="td-center td-w100"><div class="td-iner disvis"><div class="div"><div class="dropdown dropleft">';

                    li += '<button type="button" class="btn btn-primary nobr grey s11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-v"></span></button>';
                    
                    li += '<div class="dropdown-menu">';
                        li += '<a class="dropdown-item color-green cmd-sunting-product" data-type="edit" data-widget="product-new" data-id="'+item.id+'" href="#" role="off"><span>Sunting</span><span class="ic sli_icon-note"></span></a>';
                                
                        li += '<div class="dropdown-divider"></div>';
                        li += '<a class="dropdown-item color-red" href="#"><span>Hapus</span><span class="ic sli_icon-trash"></span></a>';

                    li += '</div>';

                li += '</div></div></div></td>';

            li += '</tr></tbody></table></div>';

            li += '</div>';
        });



        return li;
    }


    $('body').on('click', '.cmd-sunting-product', function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        el = cmd.attr('data-widget'),
        type = cmd.attr('data-type');

        var content = $('body').find('.incontent-modal .content-'+el).html();

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');

            $('body').find('.area-widget').remove();
            widgetEl(el);

            widget = $('body').find('.area-widget');
            
            var li = boxSlideLiNew(cmd.attr('data-widget'),widget);
            widget.find('ul.ul-slide').html(li);
            widget.find('.inar-body').html(content);
            
            cmd.attr('role', 'off');
            widget.attr('aria-load', 'true');
            //
            var selectpartner = widget.find('.area-partner_type'),
            selecWeightType = widget.find('.area-weight_type');

            //
            selecWeightType.html('<select name="weight_type" class="selectpicker form-control h36"><option value="-1">Ukuran Berat</option><option value="gram">Gram</option><option value="kg">Kg</option></select>');

            widget.find('li.slide .head b').html('Sunting Produk');
            widget.find('input[name="product_id"]').val(cmd.attr('data-id'));
            widget.find('input[name="type"]').val(type);
            widget.find('input[name="admin_id"]').val(getaccount().id);
            widget.find('input[name="company_id"]').val(getaccount().config.company_id);

            getMaklon(widget);
            getDataProduct(widget);
        }
    });


    function getDataProduct(e)
    {
        var widget = e;
        // var form = e,
        // slide = form.find('li.slide');

        var $URL = config.apps.URL_API + '/api/product/detail?id=' + widget.find('input[name="product_id"]').val();

        var $t = FormSending('','GET','key','',$URL);
        $t.success(function(n)
        {
            console.log(n);
            var response = n.response;
            var typeComp = response.type === 1 ? '-1' : response.companyID;
            var nameComp = response.type === 1 ? 'Pilih jika produk Maklon' : response.companyName;
            //
            widget.find('input[name="name"]').val(response.name);
            widget.find('input[name="weight"]').val(response.weight);
            widget.find('input[name="price"]').val(formatRupiahKeyup(response.price));
            widget.find('input[name="price_distributor"]').val(formatRupiahKeyup(response.priceDistributor));
            widget.find('input[name="price_maklon"]').val(formatRupiahKeyup(response.priceMaklon));
            widget.find('textarea[name="description"]').val(response.description);
            widget.find('select[name="weight_type"]').val(response.weightType);
            widget.find('input[name="maklon_id"]').val(typeComp);
            widget.find('.area-list-maklon label span').html(nameComp);
            response.imageStatus === 'false' ? widget.find('.ar-img-child').attr('role', 'off') : widget.find('.ar-img-child').attr('role', 'on');
            widget.find('.img-preview').attr('src', response.images);

            ///
            widget.find('.selectpicker').selectpicker('refresh');
            widget.attr('aria-load', 'false');

        });
        $t.error(function(n)
        {
            
            console.log(n);
            flagnotif('error', 'Opss... Terjadi kesalahan tidak diketahui, refresh kembali halaman ini');
        });

        
    }

    // modal cmd

    $('body').on('click', '.cmd-modal', function()
    {
        var cmd = $(this);

        // $('body').addClass('modal-open');
        cmd.parents('.dropdown').find('button[data-togle="dropdown"]').attr('aria-expanded', 'false');
        cmd.parents('.dropdown').removeClass('show');
        cmd.parents('.dropdown-menu').removeClass('show');
        cmd.parents('.dropdown-menu').attr('style', '');
        $(cmd.attr('data-target')).modal("show");
    })
    // end modal cmd


    // form
    $('#form-table').submit(function()
    {
        var form = $(this),
        paging = parseFloat(form.find('input[name="paging"]').val()),
        url = config.apps.URL_API + form.attr('action'),
        area = $('.area-table'),
        body = area.find('.table-body'),
        footer = area.find('.table-footer');

        var field = config.apps.URL_API + '/api/product/table?';
        field += 'src=' + form.find('input[name="admin_name"]').val();
        field += '&type=' + form.find('select[name="cat-level"]').val();
        field += '&compid=' + form.find('select[name="cat-maklonid"]').val();
        field += '&sort=' + form.find('input[name="sort_name"]').val();
        field += '&status=' + + form.find('select[name="cat-status"]').val();
        field += '&pg=' + paging;
        //splash tabel
        splashtable();

        //
        // var token = getToken();
        var $te = FormSending("","GET","key","notform",field);
        $te.success(function(e)
        {
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

            // enabled sort table
            config.table.sort = 1;

            if( $.trim(form.find('input[name="admin_name"]').val()) !== '' )
            {

                findtextHighlight(form.find('input[name="admin_name"]').val());
            }

        }),
        $te.error(function(e)
        {
            // console.log(n);
            console.log(e.responseJSON);


                //clear body
            body.html('');

            // function get empty
            var li = tableempty(e.responseJSON.message);
            body.html(li);
            footer.addClass('hide');


            //disabled sort
            config.table.sort = 0;
        });

        //
        // $.ajax({
        //     type: 'GET',
        //     url:  config.apps.URL_API + form.attr("action") + field,
        //     timeout: 18000,
        //     headers: {
        //         "Content-Type": "application/json",
        //         "key": getaccount().key
        //     },
        //     dataType: 'JSON',
        //     success: function(e,n,r)
        //     {
        //         //
        //         // console.log(e);

        //         //
        //         body.html('');

        //         // fuction gettable
        //         var li = gettable(e.response);

        //         //body table
        //         body.html(li);

                
                
        //         // //footer
        //         footer.find('.val-page-total').html(e.response.total);
        //         footer.find('.val-paging').html(e.response.paging);
        //         footer.find('.val-count-page').html(e.response.countpage);
        //         footer.removeClass('hide');

        //         //count page
        //         config.table.countpage = parseFloat(e.response.countpage);

        //         //
        //         if( parseFloat(e.response.countpage) > 1)
        //         {

        //             if( paging === config.table.countpage)
        //             {
        //                 footer.find('.cmd-paging[data-area="next"]').attr('disabled','disabled');
        //             }
        //             else
        //             {
        //                 footer.find('.cmd-paging[data-area="next"]').removeAttr('disabled');
        //             }
                    
        //         }
        //         else
        //         {
        //             footer.find('.cmd-paging[data-area="next"]').attr('disabled','disabled');
        //         }

        //         if( e.response.paging < 2)
        //         {
        //             footer.find('.cmd-paging[data-area="back"]').attr('disabled','disabled');
        //         }

        //         // enabled sort table
        //         config.table.sort = 1;

        //         if( $.trim(form.find('input[name="admin_name"]').val()) !== '' )
        //         {

        //             findtextHighlight(form.find('input[name="admin_name"]').val());
        //         }
        //     },
        //     error: function(e)
        //     {
        //         console.log(e.responseJSON);

        //         //refresh cookie
        //         // refreshCookie(e.responseJSON.refresh);

        //         //clear body
        //         body.html('');

        //         // function get empty
        //         var li = tableempty(e.responseJSON.message);
        //         body.html(li);
        //         footer.addClass('hide');


        //         //disabled sort
        //         config.table.sort = 0;

                
        //     }

        // });


        return false;
    });


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


    

    //
    // get table submit form
    function loadtable()
    {

        $('#form-table').submit();
    }

    // show table with porcess splash table
    loadtable();



    $('.cmd-sort-table').click(function(e)
    {
        sorttable(e,$(this));

    });



    // categori

    $('body').on('click', '.cmd-tag', function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        dataid = cmd.attr('dataid'),
        form = cmd.parents('form'),
        area = cmd.parents('.area-taging'),
        li = area.find('li');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
        }
        else
        {
            cmd.attr('role', 'off');
        }


        var list = [];
        area.find("li a[role='on']").each(function(){
            list.push($(this).attr("dataid"));
        });

        // var taging = JSON.stringify(list)

        var val = list.length === 0 ? '' : list;
        form.find('input[name="cat-taging"]').val(val);

        changecategori();

    });


    $('body').on('change', 'select', function(e)
    {
        changecategori();
    });


    function changecategori()
    {

        var form = $('body').find('#form-table'),
        progress = form.find('input[name="level"]').val(),
        source = form.find('input[name="status"]').val(),
        register = form.find('input[name="register"]').val(),
        maklon = form.find('input[name="maklonid"]').val();

        var area = form.find('.area-categori'),
        cmd = area.find('button.cmd-categori'),
        catprogress = area.find('select[name="cat-level"]').val(),
        catsource = area.find('select[name="cat-status"]').val(),
        catstartdate = area.find('input[name="start-date"]').val(),
        catenddate = area.find('input[name="end-date"]').val(),
        catmaklon = area.find('select[name="cat-makloid"]').val();

        if( catprogress !== progress || catsource !== source || catmaklon !== maklon )
        {
            // console.log( 'cahnge' );
        
            cmd.attr('role', 'off');
        }
        else
        {
            cmd.attr('role', 'on');
        }

    }

    $('#form-table button.cmd-categori').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents('.area-categori'),
        form = cmd.parents('form'),
        progress = form.find('input[name="level"]'),
        register = form.find('input[name="register"]'),
        source = form.find('input[name="status"]'),
        maklon = form.find('input[name="maklonid"]');

        var catprogress = area.find('select[name="cat-level"]').val(),
        catstartdate = area.find('input[name="start-date"]').val(),
        catenddate = area.find('input[name="end-date"]').val(),
        catsource = area.find('select[name="cat-status"]').val(),
        catmaklon = area.find('select[name="cat-makloid"]').val();


        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            area.find('.br-error').removeClass('br-error');

            progress.val( catprogress); source.val(catsource);

            // if(progress.val() !== '-1' || source.val() !== '-1' || register.val() !== '')
            if(progress.val() !== '-1' || source.val() !== '-1' || maklon.val() !== '-1')
            {
                form.attr('data-filter', 'true');
            }
            else
            {
                form.attr('data-filter', 'false');

            }

            loadtable();
            form.find('.cmd-filter-table').click();
        }
    });
    

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


    function resetcategori()
    {
        var area = $('body').find('.area-categori'),
        form = area.parents('form');

        form.find('input[name="level"]').val('-1');
        form.find('input[name="status"]').val('-1');
        form.find('input[name="register"]').val('');
        form.find('input[name="maklon"]').val('-1');

        area.find('select[name="cat-level"]').val('-1');
        area.find('select[name="cat-maklonid"]').val('-1');
        catsource = area.find('select[name="cat-status"]').val('-1');
        catstartdate = area.find('input[name="start-date"]').val('');
        catenddate = area.find('input[name="end-date"]').val('');

        area.find('.ar-date').attr('aria-role', 'false');
        area.find('ul li a').attr('role','off');
        area.find('.selectpicker').selectpicker('refresh');
        form.attr('data-filter', 'false');
        form.find('.cmd-filter-table').click();
        loadtable();
    }

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

    })
    
    // export data 
    $('.cmd-export').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this);

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            getexporttoexcel($(this));
        }
    });


    //getfunction excel
    function getexporttoexcel(e)
    {
        var button = e,
        url = button.attr('data-action');

        var token = getToken();

        loadprocess('Harap tunggu, sedang process export data....');

        $.ajax({
            type: 'POST',
            url: config.apps.URL_API + url,
            cache: false,
            timeout: 18000,
            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + token
            },
            data: JSON.stringify({"token":token}),
            dataType: 'JSON',
            success: function(e)
            {
                // console.log(e.response.data);
                refreshCookie(e.refresh);
                if( e.response !== '')
                {
                    exporttoexcel(e.response);
                }
                else
                {
                    alert(e.message);
                    hideloadprocess();
                }
                button.attr('role', 'off');
            },
            error: function(e)
            {

                // console.log(e.responseJSON);
                refreshCookie(e.responseJSON.refresh);
                hideloadprocess();
                button.attr('role', 'off');
            }
        })

    }



    //add data sublevel

    // end export data

    //
    // function add new  customer and validate
    $.validator.addMethod("customemail", function(t, n)
    {
            t=t.trim();
            var r= $(n).prop("required"),
            i=/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(t);
            return r?""!==t&&i:""===t||i
    }, "Sorry, I've enabled very strict email validation");

    $.validator.addMethod("selectoptmin", function(value, element, arg)
    {
        return arg !== value;
    }, "Value must not equal arg.");

    // CREATE OR UPDATE PRODUCT

    $('body').on('click', '#slide-product button.cddwn', function(e)
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

    $('body').on('click', '#slide-product button.cmd-next-slide', function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        slide = cmd.parents('li.slide'),
        form = slide.find('form');

        form.submit();
    });

    $('body').on('submit', '#form-create-product', function(e)
    {
        var form = $(this);

        form.validate(validateProduct);
        form.valid();

        cekingsubmit = form.valid();

        if( cekingsubmit )
        {

            submitProduct(form);
        }
        return false;
    });



    var validateProduct = 
    {
        rules:{
            name:{
                required:!0,
                minlength:5,
                normalizer:r,
            },
            weight:{
                required:!0,
                normalizer:r,
                number: true,
                minlength:2
            },
            price:{
                required:!0,
                normalizer:r,
                number: true,
                minlength:5
            },
            price_distributor:{
                required:!0,
                normalizer:r,
                number: true,
                minlength:5
            },
            // price_maklon:{
            //     required:!0,
            //     normalizer:r,
            //     number: true,
            //     minlength:5
            // },
            weight_type:{
                selectoptmin: "-1"
            }
        },
        messages:{
            name:'Harus diisi sekurangnya 3 karakter',
            weight: "Harap di tentukan berat produk",
            weight_type: "Pilih ukuran berat produk",
            price: "Tentukan harga produk",
            price_distributor: "Tentukan harga Distributor",
            // price_maklon: "Tentukan harga Maklon"
        },
        errorPlacement:function(t,n)
        {
            $(n).parents('.ar-content').find('label.error').remove();
            $(n).parents('.ar-content').append(t);
        }
    }

    var valPriceMaklon = 
    {
        rules:{
            price_maklon:{
                required:!0,
                normalizer:r,
                number: true,
                minlength:5
            }
        },
        messages:{
            price_maklon: "Tentukan harga Maklon"
        },
        errorPlacement:function(t,n)
        {
            $(n).parents('.ar-content').find('label.error').remove();
            $(n).parents('.ar-content').append(t);
        }
    }

    function submitProduct(e)
    {

        var form = e,
        slide = form.parents('li.slide'),
        modal = form.parents('.area-widget.show'),
        cmd = slide.find('button.cmd-next-slide');

        modal.find('label.error').remove();
        modal.find('.error').removeClass('error');

        //if price malkon null
        if( modal.find('input[name="maklon_id"]').val() !== "-1" )
        {
            if( $.trim(modal.find('input[name="price_maklon"]').val()).length < 4 )
            {
                modal.find('input[name="price_maklon"]').parents('.ar-content').append('<label class="error">Harap isi harga maklon</label>');
                modal.find('input[name="price_maklon"]').addClass('error');
                modal.find('input[name="price_maklon"]').focus();
                return;
            }
        }

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');

            //
            formData = new FormData();
            formData.append('name', form.find('input[name="name"]').val());
            formData.append('maklonID', form.find('input[name="maklon_id"]').val());
            formData.append('image', form.find('input[name="file"]')[0].files[0] );
            formData.append('weight', form.find('input[name="weight"]').val());
            formData.append('weightType', form.find('select[name="weight_type"]').val());
            formData.append('price', cnumber(form.find('input[name="price"]').val()));
            formData.append('priceDistributor', cnumber(form.find('input[name="price_distributor"]').val()));
            formData.append('priceMaklon', cnumber(form.find('input[name="price_maklon"]').val()));
            formData.append('description', form.find('textarea[name="description"]').val());
            formData.append('type', form.find('input[name="type"]').val());
            formData.append('productID', form.find('input[name="product_id"]').val());
            formData.append('companyID', form.find('input[name="company_id"]').val());
            formData.append('adminID', form.find('input[name="admin_id"]').val());

            //
            $.ajax({
                type: 'POST', 
                url: config.apps.URL_API + form.attr('action'),
                headers:{
                    "key":getaccount().key,
                },
                contentType: false,
                processData: false,
                data: formData,
                dataType:"JSON",
                success: function(n)
                {
                    // console.log(n);
                    
                    if( modal.find('input[name="type"]').val() === 'new')
                    {

                        defaultFormProduct(form);
                        cmd.attr('role', 'off');
                        loadtable();
                        flagnotif('success', n.message);
                        return;
                    }

                    loadtable();
                    modal.find('button.cmd-close-boxslide').click();
                    
                },
                error: function(n)
                {
                    console.log(n.responseJSON);
                    cmd.attr('role', 'off');
                    if( n.status === 401)
                    {
                        form.find('*[name="'+n.responseJSON.focus+'"]').focus();
                        form.find('*[name="'+n.responseJSON.focus+'"]').addClass('error');
                        flagnotif('error', n.responseJSON.message);
                        return;
                    }

                    flagnotif('error', 'Terjadi kesalahan tidak diketahui, refresh kembali halaman ini');
                }
            });


        }

        
    }

    function defaultFormProduct(e)
    {
        var form = e,
        slide = form.parents('li.slide');

        form.find('input.empty').val('');
        form.find('textarea.empty').val('');
        form.find('select.selectpicker').val('-1');
        form.find('input.min1').val('-1');
        form.find('.area-ddwn label span').html('Pilih jika produk Maklon');
        form.find('input[name="product_id"]').val('');
        form.find('.area-img-upload').attr('aria-upload', 'false');
        form.find('.area-img-upload img').attr('src', '');
        form.find('.selectpicker').selectpicker('refresh');
        form.find('input[name="name"]').focus();
    }

    return false;
});
</script>



@endsection