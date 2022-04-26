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
                                        <span>Partner</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>     

                    <div class="fl-left wh-m-680"></div>
                    <div class="fl-right">

                        <ul>

                            <li class="fl-right">

                                <button class="no cmd-modal-widget-new green rds4" data-widget="partner-new" data-type="3" role="off">
                                    <span class="ic-abs fas fa-plus"></span>
                                    <span class="sli_icon-users"></span>
                                </button>
                                
                            </li>
                            <li class="fl-left">

                                <form action="/api/partner/table" id="form-table" aria-categori="false" data-filter="false">
                                    <div class="ar-li">
                                    
                                        <div class="ar-src" aria-role="false">
                                            <input type="text" placeholder="Cari Partner" name="admin_name" class="search" value="">
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
                                                            <div class="div bdy">
                                                                <select class="selectpicker" data-live-search="false" name="cat-level">
                                                                    <option value="-1">All...</option>
                                                                </select>
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
                                                                        <option value="2">Menunggu Verifikasi</option>
                                                                        <option value="3">Blokir</option>
                                                                    </select>
                                                                </div>
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
                                <input type="hidden" name="register" value="">
                                <input type="hidden" name="sort_name" value="desc" />
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
                                                <a href="#" class="cmd-sort-table" role="off" aria-sort="desc" data-name="sort_name">
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
                                                OWNER
                                            </div>
                                        </td>
                                        <td class="td-w260">
                                            <div class="td-iner">
                                                <span class="ic far fa-address-card"></span>
                                                KONTAK
                                            </div>
                                        </td>
                                        <td class="td-w180">
                                            <div class="td-iner">
                                                <span class="ic far fa-address-card"></span>
                                                INFO
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
                                        <span class="fas fa-bookmark"></span>
                                        <span>PROSPEK</span>
                                    </div>
                                    <div class="spc">
                                        <div class="tag">
                                            <ul>
                                                <li class="bc-green">CST</li>
                                                <li class="bc-red">HP</li>
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
                                                    <div class="div">
                                                        <span class="sli_icon-symbol-female"></span>
                                                        <span><b>Indri</b></span>
                                                    </div>
                                                    <div class="div label">
                                                        <p><span class="sli_icon-note"></span> Cusotmer bla bla bla....</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-w260">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <span class="label sli_icon-screen-tablet"></span>
                                                        <span>0868688787</span>
                                                    </div>
                                                    <div class="div">
                                                        <span class="label sli_icon-envelope"></span>
                                                        <span>yono@gmail.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-w180">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <span class="label sli_icon-volume-2"></span>
                                                        <span>Facebook</span>
                                                    </div>
                                                    <div class="div">
                                                        <span class="sli_icon-bag label"></span>
                                                        <span>3x Closing</span>
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
                                                                    <span>Progerss</span>
                                                                    <span class="ic fas fa-bookmark"></span>
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <span>Tag</span>
                                                                    <span class="ic sli_icon-tag"></span>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">
                                                                    <span>Sunting</span>
                                                                    <span class="ic sli_icon-note"></span>
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

<script src="{{$URI}}/assets/js/dashboard/json-excel/xlsx.core.min.js"></script>
<script src="{{$URI}}/assets/js/dashboard/json-excel/FileSaver.js"></script>
<script src="{{$URI}}/assets/js/dashboard/json-excel/jhxlsx.js"></script>

<script>


// getdata sublevel

// console.log( getaccount() );

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
            // console.log(n);
        },
        error: function(n)
        {
            console.log(n);
        }
    })
}

getsublevel();

$(document).ready(function()
{



    $('body').on('click', '.cmd-modal-widget-new[data-widget="partner-new"]', function()
    {
        // var slide 
        var widget = $('body').find('.new-media.show');

        var selectpartner = widget.find('.area-partner_type');
        selectpartner.html('<select name="partner_type" class="selectpicker form-control h36"><option value="-1">Pilih Jenis Partner</option><option value="2">Distributor</option><option value="3">Maklon</option></select>');

        widget.find('.selectpicker').selectpicker('refresh');

        widget.find('input[name="create_admin_id"]').val(getaccount().id);
        widget.find('input[name="create_company_id"]').val(getaccount().config.company_id);

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




    // close note
    $('#modalresend button.close').click(function()
    {
        var cmd = $(this),
        modal = cmd.parents('.modal.show');

    });

    $('#modalresend form').submit(function()
    {
        var form = $(this),
        modal = form.parents('.modal.show'),
        button = modal.find('button.modal-submit');

        //

        //
        var unindexed_array = form.serializeArray();
        var datasend = {};
        $.map(unindexed_array, function(n, i){
            datasend[n['name']] = n['value'];
        });


        $.ajax({
            type: 'POST',
            url: config.apps.URL_API + form.attr('action'),
            cache: false,
            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + getToken()
            },
            timeout: 18000,
            data: JSON.stringify(datasend),
            dataType: 'JSON',
            success: function(e)
            {
                // console.log(e);

                // refresh token
                refreshCookie(e.refresh);

                loadtable();
                modal.find('button.close').click();
                // var response = e.response;
                
            },
            error: function(e)
            {
                // console.log(e);

                // refresh token
                refreshCookie(e.responseJSON.refresh);


                flagnotif('error',e.responseJSON.message);
            }
        })


        button.attr('role', 'off');
        

        return false;
    })
    // end modal note




    function gettable(e)
    {
        
        console.log(e);

        var li = '';

        $.each(e.list, function(i, item)
        {

            li += '<div class="tr" dataid="'+item.id+'">';

            li += '<div class="thr"><div class="div clr-float">';
    
            li += '<div class="spc"><div class="tag sts-o" role="'+(item.verify === 0 ? 'mv' :'sc'  )+'"><ul>';

            li += '<li class="sc bc-green"><span class="ic fa flaticon2-check-mark"></span> <span class="wh-m-520">AKTIF</span></li><li class="mv bc-orange"><span class="ic sli_icon-clock"></span> <span class="wh-m-520">VERIFIKASI</span></li><li class="mp bc-red"><span class="ic sli_icon-ban"></span> <span class="wh-m-520">BLOKIR</span></li>';

            li += '</ul></div></div>';              
    
                li += '<div class="spcr"><span class="label ic sli_icon-calendar"></span><span class="date">'+item.date+'</span></div>';
    
                li += '<div class="spcr wh-m-520"><span class="label ic sli_icon-user-follow"></span><b class="up-txt">'+item.admin_name+'</b></div>';
    
            li += '</div></div>';
    
            li += '<div class="tbody"><table><tbody><tr>';
    
                li += '<td><div class="td-iner">';
                    li += '<div class="div area-name"><span><b class="label-name selection-search">'+item.name+'</b></span></div>';
                    li += '<div class="div"><span class="ic sli_icon-home"></span><span class="label">'+item.type_name+'</span></div>';

                li += '</div></td>';
    
    
                li += '<td class="td-w260 wh-m-520"><div class="td-iner">';
                li += '<div class="div">';
                    li += '<div class="div"><b>'+item.owner+'</b></div>';
                    li += '<div class="div"><span class="ic sli_icon-screen-tablet"></span><span>'+item.owner_contact.phone+'</span></div>';
                    li += '<div class="div">'+( item.owner_contact.email === '' ? '' : '<span class="ic sli_icon-envelope"></span><span>' + item.owner_contact.email + '</spam>')+'</span></div>';
                li += '</div>';
                li += '</div></td>';

                
                li += '<td class="td-w260 wh-m-520"><div class="td-iner">';
                li += '<div class="div">';
                    li += '<div class="div"><span class="ic sli_icon-screen-tablet"></span><span>'+item.contact.phone+'</span></div>';
                    li += '<div class="div">'+( item.contact.email === '' ? '' : '<span class="ic sli_icon-envelope"></span><span>' + item.contact.email + '</spam>')+'</span></div>';
                    li += '<div class="div label">Alamat:</div>';
                    li += '<div class="div"><span>'+item.address+'</span></div>';
                    li += '<div class="div"><span>'+item.address2+'</span></div>';
                    li += '<div class="div"><span>'+item.address3+'</span></div>';
                li += '</div>';
                li += '</div></td>';

                li += '<td class="td-w180 wh-m-520"><div class="td-iner">';
                li += '<div class="div label"><span class="ic sli_icon-info"></span><span>Batas waktu akhir Pembayaran </span><b style="color:#333">'+item.expire_payment+'</b> <span style="color:#333">Hari</span> setelah order berhasil</div>';
                li += '</div></td>';
    
                li += '<td class="td-center td-w70"><div class="td-iner disvis"><div class="div">';

                li += '<a class="btn nobr grey s11" href="{{$URI}}'+item.url+'" style="padding:0px 8px;"><span class="ic flaticon2-edit"></span></a>';

                    // li += '<div class="dropdown dropleft">';

                    // li += getaccount().id === item.id ? '<button type="button" class="btn btn-primary nobr grey s11"><span class="sli_icon-ban"></span></button><div class="dropdown-menu">' : '<button type="button" class="btn btn-primary nobr grey s11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-v"></span></button><div class="dropdown-menu">';
            
                    // li += '<a class="dropdown-item afalse" href="#" role="off"  data-togglex="modal" data-type="edit" data-open="page" data-target="#modalpengguna" dataid="'+item.id+'"><span>Sunting</span><span class="ic sli_icon-pencil"></span></a>';

                    // li += '<a class="dropdown-item afalse cmd-resendverif color-orange '+( item.status === 0 ? 'hide' : '')+'" href="#" role="off" dataid="'+item.id+'"><span>Resend Verifikasi</span><span class="ic fa flaticon2-send-1"></span>';
                    // li += '<div class="arload"><span class="dfx"><div class="single-loading orange"></div></span></div>';
                    // li += '</a>';

                    // li += item.registers === 1 ? '<div class="dropdown-divider"></div>' : '';

                    // li += '<a class="dropdown-item cmd-blocked afalse slide color-red ';
                    // li += item.registers === 1 ? '' : 'hide';
                    // li += '" href="#" role="off" slide="'+( item.status === 0 ?"on" : "off") +'" dataid="'+item.id+'"><div class="div clr-float"><div class="fl-left fl"><div class="tbl"><div class="intbl"><span class="text-label">'+ (item.status === 1 ? 'Blokir' : 'Buka Blokir') +'</span></div></div></div>';
                    //     li += '<div class="fl-right fr"><div class="arslide"><div class="bord"></div></div></div>';
                    // li += '</div>';

                    // li += '</a>';
                                                            
                    // li += '</div>';

                li += '</div></div></td>';
    
            li += '</tr></tbody></table></div></div>';
        });



        return li;

        
    }




    $('body').on('click', '.cmd-blocked', function(e)
    {
        e.preventDefault();

        var cmd = $(this);

        if( cmd.attr('role') === 'off' )
        {
            cmd.attr('role', 'on');
        
            //
            $.ajax({
                type: "POST",
                url: config.apps.URL_API + '/api/admin/manage/changestatus',
                headers: {
                    "Content-Type":"application/json",
                    "key":getaccount().key
                },
                cache: false,
                timeout: 18000,
                data: JSON.stringify({
                    'admin_id': cmd.attr('dataid'),
                    'status': cmd.attr('slide')
                }),
                dataType: "JSON",
                success: function(n)
                {
                    // console.log(n);

                    if( cmd.attr('slide') === 'on')
                    {
                        cmd.attr('slide', 'off');
                        cmd.find('.text-label').html('Blokir');
                        cmd.parents('.dropdown.show').find('.cmd-resendverif').removeClass('hide');
                    }
                    else
                    {
                        cmd.attr('slide', 'on');
                        cmd.find('.text-label').html('Buka Blokir');
                        cmd.parents('.dropdown.show').find('.cmd-resendverif').addClass('hide');
                    }

                    cmd.parents('.tr').find('.spc .tag').attr('role', n.status);
                    //
                    // cmd.parents('.dropdown.show').find('button[data-toggle="dropdown"]').click();

                    cmd.attr('role', 'off');

                },
                error: function(n)
                {
                    console.log(n);
                    flagnotif('error','Opss... Terjadi kesalahan, refresh halaman ini');
                    cmd.attr('role', 'off');
                }


            });

            

            

        }

    });


    $('body').on('click', '.cmd-resendverif', function(e)
    {
        e.preventDefault();

        var cmd = $(this);

        if( cmd.attr('role') === 'off' )
        {
            cmd.attr('role', 'on');
            

            $.ajax({
                type: 'POST',
                url: config.apps.URL_API + '/api/admin/manage/resendverification',
                headers: {
                    "Content-Type":"application/json",
                    "key":getaccount().key
                },
                cache: false,
                timeout: 18000,
                data: JSON.stringify({
                    "id":cmd.attr("dataid")
                }),
                dataType:"JSON",
                success: function(n)
                {
                    flagnotif('success', n.message);
                    // console.log(n);
                    cmd.attr('role', 'off');
                },
                error: function(n)
                {
                    // console.log(n);
                    var response = n.responseJSON;

                    flagnotif('error', response.message);
                    cmd.attr('role', 'off');
                }

            });


            

        }

    });


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


        var field = '?src=' + form.find('input[name="admin_name"]').val();
        field += '&pg=' + paging;
        field += '&sort=' + form.find('input[name="sort_name"]').val();
        field += '&type=' + form.find('select[name="cat-level"]').val();
        field += '&status=' + form.find('select[name="cat-status"]').val();
        field += '&registers=' + form.find('input[name="register"]').val();

        // ?src=&pg=1&sublevel=-1&sort=asc

        //splash tabel
        splashtable();

        //
        var token = getToken();

        //
        $.ajax({
            type: 'GET',
            url:  config.apps.URL_API + form.attr("action") + field,
            timeout: 18000,
            headers: {
                "Content-Type": "application/json",
                "key": getaccount().key
            },
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

                // enabled sort table
                config.table.sort = 1;

                if( $.trim(form.find('input[name="admin_name"]').val()) !== '' )
                {

                    findtextHighlight(form.find('input[name="admin_name"]').val());
                }
            },
            error: function(e)
            {
                console.log(e.responseJSON);

                //refresh cookie
                // refreshCookie(e.responseJSON.refresh);

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
        register = form.find('input[name="register"]').val();

        var area = form.find('.area-categori'),
        cmd = area.find('button.cmd-categori'),
        catprogress = area.find('select[name="cat-level"]').val(),
        catsource = area.find('select[name="cat-status"]').val(),
        catstartdate = area.find('input[name="start-date"]').val(),
        catenddate = area.find('input[name="end-date"]').val();


        if( catstartdate !== '' && catenddate !== '' )
        {
            catregister = changedate(catstartdate) + ';' + changedate(catenddate);
        }
        else
        {
            catregister = '';
        }
        
        if( catprogress !== progress || catregister !== register || catsource !== source )
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
        source = form.find('input[name="status"]');

        var catprogress = area.find('select[name="cat-level"]').val(),
        catstartdate = area.find('input[name="start-date"]').val(),
        catenddate = area.find('input[name="end-date"]').val(),
        catsource = area.find('select[name="cat-status"]').val();

        if( catstartdate !== '' && catenddate !== '' )
        {
            catregister = changedate(catstartdate) + ';' + changedate(catenddate);
        }
        else
        {
            catregister = '';
        }

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            area.find('.br-error').removeClass('br-error');

           
            if( catstartdate !== '' &&  catenddate === '' )
            {
                cmd.attr('role', 'off');
                area.find('input[name="end-date"]').addClass('br-error');
                area.find('input[name="end-date"]').focus()

            }
            else if( catstartdate === '' &&  catenddate !== '' )
            {
                cmd.attr('role', 'off');
                area.find('input[name="start-date"]').addClass('br-error');
                area.find('input[name="start-date"]').focus();
            }
            else
            {

                // changecategori();
                progress.val( catprogress); source.val(catsource); register.val(catregister); 
    
                if(progress.val() !== '-1' || source.val() !== '-1' || register.val() !== '')
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
            



        }
    });



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
            changecategori();
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
            changecategori();
            area.attr('aria-role', 'false');
            cmd.attr('role', 'off');
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

        area.find('select[name="cat-level"]').val('-1');
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


    function changedate(e)
    {
        var date    = e.split('/'),

        yr      = date[2],
        month   = date[1],
        day     = date[0],
        newDate = yr + '-' + month + '-' + day;

        return newDate;
    }


    


 

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

    $('body').on('click', '[data-target="#modalpengguna"]', function(e)
    {

        var cmd = $(this),
        target = cmd.attr('data-target'),
        el = target.replace('#', ''),
        type = cmd.attr('data-type'),
        title = '';

        var configModal = confModal[el];
        var content = contentModal(target);

        $(target).find('.modal-body').html( content );

        //get sublevel
        $(target).attr('aria-load', 'true');

        // $(target).find('select')
        // getsublevel($(target));
        var selectx = $('body').find('.area-element select').html();
        var select = '<select name="sublevel" class="selectpicker form-control selectmin1"><option value="-1">Pilih level</option></select>';

        $(target).find('.area-select-sublevel').html(select);
        $(target).find('.area-select-sublevel select').append(selectx);
        // console.log(selectx);

        if( type === 'add')
        {
            title = 'Tambah ' + configModal.title;
            $(target).find('.selectmin1').val('-1');
            $(target).find('.selectpicker').selectpicker('refresh');
            //
            $(target).attr('aria-load', 'false');
        }
        else
        {
            
            $(target).find('a.cmd-gender').attr('role','off');
            title = 'Ubah ' + configModal.title;
            getdataadmin(cmd.attr('dataid'),$(target));
        }



        $(target).find('.title-label').html(title);
        $(target).find('input[name="type"]').val(type);
       
        
    

    });

    function getdataadmin(e,el)
    {
        $.ajax({
            type: 'GET',
            url: config.apps.URL_API + '/api/admin/manage/view?id=' + e,
            headers:{
                "Content-Type":"application/json",
                "key": getaccount().key
            },
            cache: false,
            timeout: 18000,
            dataType: 'JSON',
            success: function(n)
            {
                // console.log(n);
                n.response.gender_label === 'male' ? el.find('a.cmd-gender[data-role="male"]').attr('role','on') : el.find('a.cmd-gender[data-role="male"]').attr('role','off');
                el.find('.area-gender').attr('data-role', n.response.gender_label);
                
                el.find('input[name="user_id"]').val(n.response.id);
                el.find('input[name="name"]').val(n.response.name);
                el.find('input[name="email"]').val(n.response.email);
                el.find('input[name="phone"]').val(n.response.phone);
                el.find('input[name="gender"]').val(n.response.gender);
                el.find('select[name="sublevel"]').val(n.response.sublevel);
                el.find('.selectpicker').selectpicker('refresh');
                el.attr('aria-load', 'false');
            },
            error: function(n)
            {
                console.log(n);
            }
        })
    }


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

    $.validator.addMethod("notnullhidden", function(value, element, arg)
    {
    return arg !== value;

    }, "Value must not equal arg.");


    $('body').on('keyup', '#form-create-partner input[name="expire_days"]', function()
    {
        var text = $(this);
        numbFNoZeroWO(text);

    });

    $('body').on('change', '#form-create-partner select', function()
    {
        var select = $(this);
        if( select !== '-1')
        {
            select.parents('.ar-content').find('label.error').remove();
        }
        // $('#form-create-partner').submit();
    });


    $('body').on('submit', 'form#form-create-partner', function(e)
    {

        e.preventDefault();

        var form = $(this),
        widget = $('body').find('.area-widget.show');

        form.validate(validateform);
        form.valid();

        cekingsubmit = form.valid();

        if( cekingsubmit )
        {

            ceksubmitmodal(form);
        }
       
    });



    var validateform = 
    {
        
        rules:{
            name:{
                required:!0,
                minlength:5,
                normalizer:r,
            },
            nosurat:{
                required:!0,
                minlength:3,
                normalizer:r,
            },
            admin_name:{
                required:!0,
                minlength:3,
                normalizer:r
            },
            admin_phone:{
                required:!0,
                normalizer:r,
                number: true,
                minlength:9
            },
            admin_email:{
                required:!0,
                customemail:!0
            },
            owner_name:{
                required:!0,
                minlength:3,
                normalizer:r
            },
            owner_phone:{
                required:!0,
                normalizer:r,
                number: true,
                minlength:9
            },
            contact_phone:{
                required:!0,
                normalizer:r,
                number: true,
                minlength:9
            },
            contact_kodepos:{
                required:!0,
                normalizer:r,
                number: true,
                minlength:5
            },
            contact_address:{
                required:!0,
                minlength:10,
                normalizer:r
            },
            address_array:{
                notnullhidden : '',
            },
            city:{
                required:!0,
                normalizer:r
            },
            partner_type:{
                selectoptmin: "-1"
            }
            
        },
        messages:{
            name:'Harus diisi sekurangnya 5 karakter',
            nosurat:'Harus diisi sekurangnya 3 karakter',
            admin_name:'Harus diisi sekurangnya 3 karakter',
            admin_phone: 'Whatsapp isi dengan benar',
            admin_email:"Harus diisi dengan format email yang benar",
            owner_name:'Harus diisi sekurangnya 3 karakter',
            owner_phone: 'Whatsapp isi dengan benar',
            contact_phone: 'Harap Telepon isi dengan benar',
            contact_kodepos: 'Harap kolom Kodepos',
            contact_address: 'Isi alamat lengkap sekurangnya 10 karakter',
            address_array: "Pilih Kota atau Kecamatan",
            city: "Pilih Kota atau Kecamatan",
            partner_type: "Harap pilih jenis partner"
        },
        errorPlacement:function(t,n)
        {
            $(n).parents('.ar-content').find('label.error').remove();
            $(n).parents('.ar-content').append(t);
            // console.log(n);
        }
        
    }


    function ceksubmitmodal(t)
    {
        var form = t,
        modal = form.parents('.area-widget.show'),
        cmd = modal.find('button.cmd-next-slide');

        // form.find('input[name="create_admin_id"]').val(getaccount().id);
        // form.find('input[name="create_company_id"]').val(getaccount().config.company_id);

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            form.find('label.error').remove();
            form.find('.error').removeClass('error');

            //
            $.ajax({
                type: "POST",
                url: config.apps.URL_API + form.attr('action'),
                headers:{
                    'Content-type':'application/json',
                    'key': getaccount().key
                },
                cache: false,
                timeout: 18000,
                data: formdatasend(form),
                dataType: 'JSON',
                success: function(n)
                {
                    console.log(n);
                    cmd.attr('role', 'off');
                    modal.find('button.cmd-close-boxslide').click();

                    flagnotif('success', n.message);
                },
                error: function(n)
                {
                    console.log(n.responseJSON);

                    var response = n.responseJSON.response;

                    cmd.attr('role', 'off');
                    form.find('*[name="'+response.error.focus+'"]').removeClass('valid');
                    form.find('*[name="'+response.error.focus+'"]').attr('aria-invalid','true');
                    form.find('*[name="'+response.error.focus+'"]').addClass('error');
                    form.find('*[name="'+response.error.focus+'"]').parents('.ar-content').append('<label class="error">'+response.error.message+'</label>');
                    form.find('*[name="'+response.error.focus+'"]').focus();
                    
                }
            })
            return;
        }

        
    }




    return false;
});
</script>



@endsection