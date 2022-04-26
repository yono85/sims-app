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
                                        <span>Customers</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>            
                    <div class="fl-left wh-m-680"></div>
                    <div class="fl-right">

                        <ul>

                            <li class="fl-right">
                                <button class="no dshd cmd-add-customer" role="off"  data-toggle="modal" data-target="#modalnewcustomers">
                                    <span class="fas fa-plus"></span>
                                </button>
                                
                                <button class="grey nobr">
                                    <span class="fas fa-file-download"></span>
                                </button>
                                
                            </li>
                            <li class="fl-left">

                                <form action="/api/customers/table" id="form-table" aria-categori="false" data-filter="false">
                                    <div class="ar-li">
                                    
                                        <div class="ar-src" aria-role="false">
                                            <input type="text" placeholder="Cari Customer..." name="customer_name" class="search" value="">
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
                                                            <div class="div legend">PROGRESS</div>
                                                            <div class="div bdy">
                                                                <select class="selectpicker" data-live-search="false" name="cat-progress">
                                                                    <option value="-1">All...</option>
                                                                    <option value="1">Baru</option>
                                                                    <option value="2">Prospek</option>
                                                                    <option value="3">Nego</option>
                                                                    <option value="4">Closing</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="div field">
                                                            <div class="div legend">TAGING</div>
                                                            <div class="div bdy">
                                                                <div class="div ar-tag area-taging">
                                                                    <div class="row">
                                                                        <div class="div clr-float">
                                                                            <ul>
                                                                                <li dataid="1">
                                                                                    <a href="#" class="bc-red cmd-tag" role="off" dataid="1">
                                                                                        <span>HP</span>
                                                                                        <span class="ic flaticon2-check-mark"></span>
                                                                                    </a>
                                                                                </li>
                                                                                <li dataid="2">
                                                                                    <a href="#" class="bc-orange cmd-tag" role="off" dataid="2">
                                                                                        <span>CBO</span>
                                                                                        <span class="ic flaticon2-check-mark"></span>
                                                                                    </a>
                                                                                </li>
                                                                                <li dataid="3">
                                                                                    <a href="#" class="bc-green-w cmd-tag" role="off" dataid="3">
                                                                                        <span>CBT</span>
                                                                                        <span class="ic flaticon2-check-mark"></span>
                                                                                    </a>
                                                                                </li>
                                                                                <li dataid="4">
                                                                                    <a href="#" class="bc-green cmd-tag" role="off" dataid="4">
                                                                                        <span>CST</span>
                                                                                        <span class="ic flaticon2-check-mark"></span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="div field">
                                                            <div class="div legend">SOURCE</div>
                                                            <div class="div bdy">
                                                                <div class="div">
                                                                    <select class="selectpicker" data-live-search="false" name="cat-source">
                                                                        <option value="-1">All...</option>
                                                                        <option value="1">Facebook</option>
                                                                        <option value="2">Google</option>
                                                                        <option value="3">Tik-Tok</option>
                                                                        <option value="4">Instagram</option>
                                                                        <option value="5">Teman</option>
                                                                        <option value="6">Lainnya</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="div field">
                                                            <div class="div legend">REGISTER</div>
                                                            
                                                            <div class="div bdy">
                                                                <div class="div ar-date area-date" aria-role="false">
                                                            
                                                                    <div class="div ttl-date">
                                                                        <a href="#" class="clr clear-date" role="off">
                                                                            <span>CLEAR</span>
                                                                        </a>
                                                                    </div>
        
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
                                <input type="hidden" name="progress" value="-1" />
                                <input type="hidden" name="source" value="-1"/>
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
                                                KONTAK
                                            </div>
                                        </td>
                                        <td class="td-w180">
                                            <div class="td-iner">
                                                <span class="ic sli_icon-reload"></span>
                                                HISTORY
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
    <div class="modal fade new-modal show" id="modalnewcustomers" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog w420" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <span class="sli_icon-user-follow"></span>
                        <span>Customers</span>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="div">
                        <form class="account-form" id="form-add-customers" novalidate="novalidate">

                            <div class="form-group form-group-lg">
                                <label>NAMA</label>
                                <input type="text" class="form-control" placeholder="" name="name" maxlength="100">
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <div class="form-group">
                                        <label>GENDER</label>
                                        <!-- Select Range Dropdown -->
                                        <div class="ar-gender area-gender" data-role="male">
                                            <div class="row">
                                                <div class="splt">
                                                    <a href="#" class="cmd-gender" role="on" dataid="1" data-role="male">
                                                        <div class="tbl">
                                                            <div class="intbl">
                                                                <div class="div">
                                                                    <span class="ic sli_icon-symbol-male"></span>
                                                                    <span>Laki-Laki</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="splt">
                                                    <a href="#" class="cmd-gender" role="off" dataid="2" data-role="female">
                                                        <div class="tbl">
                                                            <div class="intbl">
                                                                <div class="div">
                                                                    <span class="ic sli_icon-symbol-female"></span>
                                                                    <span>Perempuan</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="form-group form-group-lg">
                                        <label>WHATSAPP</label>
                                        <input type="text" class="form-control" placeholder="08xx xxxx xxxx" maxlength="13">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label>EMAIL</label>
                                <input type="text" class="form-control" placeholder="" name="email" maxlength="100">
                            </div>


                            <input type="hidden" name="gender" value="1" />
                            <input type="submit" value="submit" class="" />
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
                    <button type="button" class="btn blue is-loading modal-submit" role="off">
                        <span class="flaticon2-check-mark"></span>
                        <span>SIMPAN</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

</main>
<script src="{{$URI}}/assets/js/dashboard/jquery.validate.js"></script>
@endsection


@section('script')
<script>

$('form').submit(function()
{
    return false;
});

var r=function(t)
{
    return t.trim()
}


var customervalidate = 
{
    rules:{
        name:{
            required:!0,
            minlength:3,
            normalizer:r,
        }
    },
    messages:{
        name:'Harus diisi sekurangnya 3 karakter'
    }
}


$('button.modal-submit').click( function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        modal = cmd.parents('.modal.show'),
        form = modal.find('form');

        form.validate(customervalidate);
        
    });

$(document).ready(function()
{



    
    function gettable(e)
    {
        
        var li = '';

        $.each(e.list, function(i, item)
        {

            li += '<div class="tr"><div class="thr"><div class="div clr-float">';
    
                li += '<div class="spc"><span class="ic fas fa-bookmark '+item.progress_color+'"></span><b class="up-txt '+item.progress_color+'">'+ item.progress_name +'</b></div>';
    
                li += '<div class="spc">';
                    li += '<div class="tag"><ul>';
                    $.each(item.taging, function(y, x)
                    {
                        
                        li += '<li class="'+x.background+'">'+x.name+'</li>';
                        
                    });
                    li += '</ul></div>';
                li += '</div>';
                                        
    
                li += '<div class="spcr"><span class="label ic sli_icon-calendar"></span><span class="date">'+item.date+'</span></div>';
    
                li += '<div class="spcr"><span class="label ic sli_icon-user-follow"></span><b class="up-txt">'+item.admin_name+'</b></div>';
    
            li += '</div></div>';
    
            li += '<div class="tbody"><table><tbody><tr>';
    
                li += '<td><div class="td-iner"><div class="div"><span class="ic sli_icon-symbol-male"></span><span><b>'+item.customer_name+'</b></span></div>';
                
                li += item.note === '' ? '' : '<div class="div label"><p><span class="bubble"><span class="ic sli_icon-note"></span>'+item.note+'</span></p></div>';
                li += '</div></td>';
    
    
                li += '<td class="td-w260 wh-m-520"><div class="td-iner"><div class="div"><span class="label ic sli_icon-screen-tablet"></span><span>'+item.customer_phone+'</span></div>';
                li += item.customer_email === '' ? '' : '<div class="div"><span class="ic label sli_icon-envelope"></span><span>'+item.customer_email+'</span></div>';
                li += '</div></td>';
                
                li += '<td class="td-w180 wh-m-520"><div class="td-iner"><div class="div"><span class="ic label sli_icon-volume-2"></span><span>'+item.source+'</span></div><div class="div"><span class="ic sli_icon-bag label"></span><span>3x Closing</span></div></div></td>';
    
                li += '<td class="td-center td-w100"><div class="td-iner disvis"><div class="div">';
                    li += '<div class="dropdown dropleft">';
                    li += '<button type="button" class="btn btn-primary nobr grey s11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-v"></span></button><div class="dropdown-menu">';
                    
                    li += '<a class="dropdown-item afalse" href="#"><span>Progerss</span><span class="ic fas fa-bookmark"></span></a>';
                    li += '<a class="dropdown-item afalse" href="#"><span>Tag</span><span class="ic sli_icon-tag"></span></a>';

                    li += '<div class="dropdown-divider"></div>';
                    li += '<a class="dropdown-item" href="'+config.apps.URL+'/dashboard/customers/'+item.url+'"><span>Sunting</span><span class="ic sli_icon-note"></span></a>';
                                                            
                    li += '</div>';
                li += '</div></div></td>';
    
            li += '</tr></tbody></table></div></div>';
        });



        return li;
        
    }


    // form
    $('#form-table').submit(function()
    {

        var form = $(this),
        paging = parseFloat(form.find('input[name="paging"]').val()),
        url = config.apps.URL_API + form.attr('action'),
        area = $('.area-table'),
        body = area.find('.table-body'),
        footer = area.find('.table-footer');

        // parse serialize to JSON stringify
        var unindexed_array = form.serializeArray();
        var datasend = {};

        $.map(unindexed_array, function(n, i){
            datasend[n['name']] = n['value'];
        });

        //splash tabel
        splashtable();

        //
        var token = getToken();

        //
        $.ajax({
            type: 'POST',
            url:  config.apps.URL_API + form.attr("action"),
            timeout: 18000,
            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + token,
                // "data"  :   JSON.stringify(datasend)
            },
            data: JSON.stringify(datasend),
            dataType: 'JSON',
            success: function(e,n,r)
            {
                //refresh Cookie
                refreshCookie(e.refresh);

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

                // enabled sort table
                config.table.sort = 1;

                //
                console.log(e);
            },
            error: function(e)
            {
                refreshCookie(e.responseJSON.refresh);
                body.html('');

                // function get empty
                var li = tableempty(e.responseJSON.message);
                body.html(li);
                footer.addClass('hide');


                //disabled sort
                config.table.sort = 0;

                console.log(e.responseJSON);
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

    

    function sorttable(e,n)
    {
        e.preventDefault();

        var cmd = n,
        name = cmd.attr('data-name'),
        artable = cmd.parents('.ar-table'),
        form = artable.find('form'),
        sort = cmd.attr('aria-sort');

        if( cmd.attr('role') === 'off' && config.table.sort === 1)
        {
            cmd.attr('role', 'on');

            if( sort === 'desc')
            {
                cmd.attr('aria-sort', 'asc');
            }
            else
            {
                cmd.attr('aria-sort', 'desc');
            }

            //
            form.find('input[name="'+name+'"]').val(cmd.attr('aria-sort'));

            loadtable();
            cmd.attr('role', 'off');
        }
    
    }

    $('#form-table input.search').keyup(function(e)
    {
        var input = $(this),
        form = input.parents('form'),
        button = form.find('button.cmd-search'),
        area = button.parents('.ar-src');

        var code = e.which || e.keyCode;

        if( input.val().length < 1 && config.table.search_status === 1)
        {
            loadtable();
            config.table.search_text = input.val();
            config.table.search_status = 0;
        }

        if( input.val().length >= 3)
        {
            button.attr('role', 'off');
        }
        else
        {
            button.attr('role', 'on');
            area.attr('aria-role', 'false');
        }
        
        // console.log( input.val().length );

    });


    $('#form-table input.search').keydown(function(e)
    {
        var input = $(this),
        form = input.parents('form'),
        button = form.find('button.cmd-search');

        var code = e.which || e.keyCode;

        if( code === 13)
        {

            if( input.val().length >= 3 && input.val() !== config.table.search_text )
            {
                button.click();
                config.table.search_text = input.val();
            }
            
            return false;
            
        }
        
        
    });


    $('#form-table button.cmd-search').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents('.ar-src');

        if( cmd.attr('role') === 'off')
        {
            config.table.search_status = 1;
            area.attr('aria-role', 'true');
            loadtable();
        }
    });

    $('#form-table a.cmd-clear-search').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents('.ar-src');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            area.attr('aria-role', 'false');
            area.find('input[type="text"]').val('');
            cmd.attr('role', 'off');
            loadtable();
            config.table.search_text = area.find('input[type="text"]').val();
            config.table.search_status = 0;
            
        }
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
        progress = form.find('input[name="progress"]').val(),
        taging = form.find('input[name="taging"]').val(),
        source = form.find('input[name="source"]').val(),
        register = form.find('input[name="register"]').val();

        var area = form.find('.area-categori'),
        cmd = area.find('button.cmd-categori'),
        catprogress = area.find('select[name="cat-progress"]').val(),
        cattaging = form.find('input[name="cat-taging"]').val(),
        catsource = area.find('select[name="cat-source"]').val(),
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
        if( catprogress !== progress || cattaging !== taging || catsource !== source || catregister !== register )
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
        progress = form.find('input[name="progress"]'),
        taging = form.find('input[name="taging"]'),
        source = form.find('input[name="source"]'),
        register = form.find('input[name="register"]');

        var catprogress = area.find('select[name="cat-progress"]').val(),
        cattaging = form.find('input[name="cat-taging"]').val(),
        catsource = area.find('select[name="cat-source"]').val(),
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
                progress.val( catprogress); taging.val(cattaging); source.val(catsource); register.val(catregister);
    
                if(progress.val() !== '-1' || taging.val() !== '' || source.val() !== '-1' || register.val() !== '')
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

        form.find('input[name="progress"]').val('-1');
        form.find('input[name="taging"]').val('');
        form.find('input[name="source"]').val('-1');
        form.find('input[name="register"]').val('');

        area.find('select[name="cat-progress"]').val('-1');
        form.find('input[name="cat-taging"]').val('');
        catsource = area.find('select[name="cat-source"]').val('-1');
        catstartdate = area.find('input[name="start-date"]').val('');
        catenddate = area.find('input[name="end-date"]').val('');

        area.find('.ar-date[aria-role="false"]');
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


    $('.cmd-gender').click(function(e)
    {
        selectGender(e,$(this));
    });






    return false;
});
</script>



@endsection