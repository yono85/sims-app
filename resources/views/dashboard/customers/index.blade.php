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
                                <button class="no cmd-add-customer green rds4" role="off"  data-togglex="modal" data-type="add" data-open="page" data-target="#modalcustomers">
                                    <span class="ic-abs fas fa-plus"></span>
                                    <span class="sli_icon-user"></span>
                                </button>
                                
                                <button class="grey nobr cmd-export" data-action="/api/export/customers" role="off">
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
                                                            <div class="div legend">COMPANY</div>
                                                            <div class="div bdy">
                                                                <div class="div">
                                                                    <select class="selectpicker" data-live-search="true" name="cat-company">
                                                                        <option value="-1">All...</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="div field hide">
                                                            <div class="div legend">CUSTOMER SERVICE</div>
                                                            <div class="div bdy">
                                                                <div class="div">
                                                                    <select class="selectpicker" data-live-search="true" name="cat-cs">
                                                                        <option value="-1">All...</option>
                                                                    </select>
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
                                <input type="hidden" name="catcompany" value="-1" >
                                <input type="hidden" name="catcs" value="-1" >

                                <!-- form -->
                                <input type="hidden" name="taging" value="" />
                                <input type="hidden" name="progress" value="-1" />
                                <input type="hidden" name="source" value="-1"/>
                                <input type="hidden" name="register" value="">
                                <input type="hidden" name="sort" value="desc" />
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

    <div class="modal fade new-modal" id="modalprogress" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog w420" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <span class="fas fa-bookmark"></span>
                        <span>Progress</span>
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
                                <span class="sli_icon-screen-tablet"></span>
                                <span>0</span>
                            </span>
                        </div>
                    </div>
                    <div class="div">
                        <div class="row-r12">
                            <div class="role-progress clr-float area-progress">
                                <ul>
                                    <li class="cprogress">
                                        <a href="#" dataid="1" role="off" class="afalse cmd-select-progress bc-grey" data-role="baru">
                                            <div class="tbl">
                                                <div class="intbl">
                                                    <span class="fas fa-bookmark"></span>
                                                    <span>Baru</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cprogress">
                                        <a href="#" dataid="2" role="off" class="afalse cmd-select-progress bc-red" data-role="prospek">
                                            <div class="tbl">
                                                <div class="intbl">
                                                    <span class="fas fa-bookmark"></span>
                                                    <span>Prospek</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cprogress">
                                        <a href="#" dataid="3" role="off" class="afalse cmd-select-progress bc-orange" data-role="nego">
                                            <div class="tbl">
                                                <div class="intbl">
                                                    <span class="fas fa-bookmark"></span>
                                                    <span>Nego</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cprogress">
                                        <a href="#" dataid="4" role="off" class="afalse cmd-select-progress bc-green" data-role="closing">
                                            <div class="tbl">
                                                <div class="intbl">
                                                    <span class="fas fa-bookmark"></span>
                                                    <span>Closing</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="div">
                        <form class="account-form" action="/api/customers/manage/changeprogress">
                            <input type="hidden" name="customer_id" value="">
                            <input type="hidden" name="lastprogress" value="" />
                            <input type="hidden" name="progress" value="" />
                            <input type="submit" value="submit" class="hide" />
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn blue modal-submit" role="on">
                        <span class="flaticon2-check-mark"></span>
                        <span>SIMPAN</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade new-modal" id="modaltaging" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog w420" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <span class="sli_icon-tag"></span>
                        <span>Taging</span>
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
                                <span class="sli_icon-screen-tablet"></span>
                                <span>0</span>
                            </span>
                        </div>
                    </div>
                    <div class="div">
                        <div class="row-r12">
                            <div class="role-progress clr-float area-taging">
                                <ul>
                                    <li class="cprogress taging">
                                        <a href="#" dataid="1" role="off" class="afalse cmd-select-taging bc-red" data-role="baru">
                                            <div class="tbl">
                                                <div class="intbl">
                                                    <div class="div">
                                                        <div class="div">
                                                            <span class="ic-abs flaticon2-check-mark"></span>
                                                            <span><b>HP</b></span>
                                                        </div>
                                                        <div class="div">
                                                            <span class="label">Hot Prospek</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cprogress taging">
                                        <a href="#" dataid="2" role="off" class="afalse cmd-select-taging bc-orange" data-role="prospek">
                                            <div class="tbl">
                                                <div class="intbl">
                                                    <div class="div">
                                                        <div class="div">
                                                            <span class="ic-abs flaticon2-check-mark"></span>
                                                            <span><b>CBO</b></span>
                                                        </div>
                                                        <div class="div">
                                                            <span class="label">Closing Belum Order</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cprogress taging">
                                        <a href="#" dataid="3" role="off" class="afalse cmd-select-taging bc-green-w" data-role="nego">
                                            <div class="tbl">
                                                <div class="intbl">
                                                    <div class="div">
                                                        <div class="div">
                                                            <span class="ic-abs flaticon2-check-mark"></span>
                                                            <span><b>CBT</b></span>
                                                        </div>
                                                        <div class="div">
                                                            <span class="label">Closing Belum Transfer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cprogress taging">
                                        <a href="#" dataid="4" role="off" class="afalse cmd-select-taging bc-green" data-role="closing">
                                            <div class="tbl">
                                                <div class="intbl">
                                                    <div class="div">
                                                        <div class="div">
                                                            <span class="ic-abs flaticon2-check-mark"></span>
                                                            <span><b>CST</b></span>
                                                        </div>
                                                        <div class="div">
                                                            <span class="label">Closing Sudah Transfer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="div">
                        <form class="account-form" action="/api/customers/manage/changetaging">
                            <input type="hidden" name="customer_id" value="">
                            <input type="hidden" name="lasttaging" value="" />
                            <input type="hidden" name="taging" value="" />
                            <input type="submit" value="submit" class="hide" />
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn blue modal-submit" role="on">
                        <span class="flaticon2-check-mark"></span>
                        <span>SIMPAN</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade new-modal" id="modalnote" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog w420" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <span class="sli_icon-note"></span>
                        <span>Catatan</span>
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
                                <span class="sli_icon-screen-tablet"></span>
                                <span>0</span>
                            </span>
                        </div>
                    </div>
                    <div class="div">
                        <form class="account-form" action="/api/customers/manage/addnote">
                            
                            <input type="hidden" name="customer_id" value="">
                            <div class="ar-note">
                                <textarea name="note" class="form-control" maxlength="150"></textarea>
                            </div>
                            <input type="submit" value="submit" class="hide" />

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn blue modal-submit" role="off">
                        <span class="flaticon2-check-mark"></span>
                        <span>SIMPAN</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
</main>

@endsection


@section('script')

<script src="{{$URI}}/assets/js/dashboard/json-excel/xlsx.core.min.js"></script>
<script src="{{$URI}}/assets/js/dashboard/json-excel/FileSaver.js"></script>
<script src="{{$URI}}/assets/js/dashboard/json-excel/jhxlsx.js"></script>

<script>

(function( $ )
{
	  $.fn.getListCompany = function()
      {
        var area = $('body').find('.area-categori'),
        select = area.find('select[name="cat-company"]');
        var account = getaccount();

        // console.log(account);

        var list = '';

        
        if( account.level === 1)
        {
            if( account.sublevel === 1)
            {

                $.ajax({
                    type: 'GET',
                    url: config.apps.URL_API + '/api/data/company/list',
                    headers: {
                        "Content-Type":"application/json",
                        "Key":account.key
                    },
                    cache: false,
                    dataType: 'JSON',
                    success: function(n)
                    {
                        console.log(n)
                        list += '<option value="-1">All...</option>';
                        $.each(n.list, function(i, item){
                            list += '<option value="'+item.id+'">'+item.name+'</option>';
                        });

                        select.html(list);
                        $('body').find('select[name="cat-company"]').selectpicker('refresh');
                    },
                    error: function(n)
                    {
                        // console.log(n)
                        list = '<option value="'+account.config.company_id+'">'+account.config.company_name+'</option>';

                        select.html(list);
                        $('body').find('select[name="cat-company"]').selectpicker('refresh');
                    }
                });

                
            }
            else
            {
                list = '<option value="'+account.config.company_id+'">'+account.config.company_name+'</option>';

                select.html(list);
                select.parents('.field').addClass('hide');
            }

            
        }
        else
        {
            list = '<option value="'+account.config.company_id+'">'+account.config.company_name+'</option>';

            select.html(list);
            select.parents('.field').addClass('hide');
        }
	  };

      //
      $.fn.getListCS = function()
      {
        var area = $('body').find('.area-categori'),
        select = area.find('select[name="cat-cs"]');
        var account = getaccount();

        // console.log(account);
        var list = '';

        // if( account.level === 1)
        // {
            if( account.sublevel === 3 )
            {
                list = '<option value="'+account.id+'">'+account.name+'</option>';

                select.html(list);
            }

        // }

      }

})( jQuery );
$.fn.getListCompany();
$.fn.getListCS();




$(document).ready(function()
{


    

    //modal
    $('body').on('click', '.cmd-modal', function()
    {
        var cmd = $(this),
        tr = cmd.parents('.tr'),
        modal = $(cmd.attr('data-target'));

        modal.find('button.modal-submit').removeClass('is-loading');
        modal.find('button.modal-submit').attr('role','on');
        modal.find('.label-name').html( tr.find('.td-iner .area-name').html() );
        modal.find('.label-contact').html( tr.find('.td-iner .area-contact').html() );
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


    // modal progress
    var changeprogress = {
        'statussend'    :   0
    }

    $('body').on('click', '.cmd-modal[data-target="#modalprogress"]', function()
    {
        var cmd = $(this),
        tr = cmd.parents('.tr'),
        tr_progress = tr.attr('data-progress'),
        modal = $(cmd.attr('data-target'));

        modal.find('form').find('input[name="customer_id"]').val(tr.attr('dataid'));
        modal.find('form').find('input[name="lastprogress"]').val(tr_progress);
        modal.find('.cmd-select-progress').attr('role', 'off');
        modal.find('.cmd-select-progress[dataid="'+tr_progress+'"]').attr('role', 'on');

        removetextHighlight(modal);

        // allow click selected
        changeprogress.statussend = 1;

        //
    })

    $('.cmd-select-progress').click(function(e)
    {
        var cmd = $(this),
        dataid = cmd.attr('dataid'),
        modal = cmd.parents('.modal.show'),
        form = modal.find('form'),
        button = modal.find('button.modal-submit');

        if( cmd.attr('role') === "off" && changeprogress.statussend === 1)
        {
            $('.cmd-select-progress').attr('role', 'off');
            cmd.attr('role', 'on');
            
            form.find('input[name="progress"]').val(dataid);

            if( dataid === form.find('input[name="lastprogress"]').val() )
            {
                button.attr('role', 'on');
            }
            else
            {
                button.attr('role', 'off');
            }
            
        }
    });


    $('#modalprogress form').submit(function()
    {
        var form = $(this),
        modal = form.parents('.modal.show'),
        button = modal.find('button.modal-submit');

        //
        changeprogress.statussend = 0;

        //
        var unindexed_array = form.serializeArray();
        var datasend = {};
        $.map(unindexed_array, function(n, i){
            datasend[n['name']] = n['value'];
        });
        // datasend = JSON.stringify(datasend);

        $.ajax({
            type: 'POST',
            url: config.apps.URL_API + form.attr('action'),
            cache: false,
            headers: {
                "Content-Type": "application/json",
                "key": getaccount().key
            },
            timeout: 18000,
            data: JSON.stringify(datasend),
            dataType: 'JSON',
            success: function(e)
            {
                // console.log(e);

                loadtable();
                modal.find('button.close').click();
                // var response = e.response;
                
            },
            error: function(e)
            {
                // console.log(e);
                flagnotif('error',e.responseJSON.message);
            }
        })

        changeprogress.statussend = 1;
        button.attr('role', 'off');
        

        return false;
    })
    // end modal progress


    // modal taging
    $('body').on('click', '.cmd-modal[data-target="#modaltaging"]', function()
    {
        var cmd = $(this),
        tr = cmd.parents('.tr'),
        tr_taging = tr.attr('data-taging'),
        modal = $(cmd.attr('data-target')),
        area = modal.find('.area-taging');

        modal.find('form').find('input[name="customer_id"]').val(tr.attr('dataid'));
        modal.find('form').find('input[name="lasttaging"]').val(tr_taging);
        modal.find('form').find('input[name="taging"]').val('');
        area.find('ul li a').attr('role','off');

        //
        changetaging.status = 1;
        //
        if( tr_taging !== '')
        {
            var list = tr_taging.split(',');
            $.each(list, function(x,y){
                area.find('ul li a[dataid="'+y+'"]').attr('role','on');
            });

            console.log(tr_taging);
        }

    });


    var changetaging = {
        'status'     :   0
    }

    //change company selected
    $('body').on('change', 'select[name="cat-company"]', function()
    {
        var select = $(this),
        form = select.parents('form'),
        selectCS = $('body').find('select[name="cat-cs"]');

        if( select.val() === '-1')
        {
            
            selectCS.parents('.field').addClass('hide');
            selectCS.html('<option value="-1">All...</option>');
            // console.log('hide');
        }
        else
        {
            getlistCS(select.val());
        }

        
    });

    function getlistCS(el)
    {
        var companyid = el;
        var selectCS = $('body').find('select[name="cat-cs"]');

        // console.log(companyid);
        
        
        var list = '';

        //
        $.ajax({
            type: "GET",
            url: config.apps.URL_API + '/api/data/cs/list?companyid=' + companyid,
            headers:{
                "Content-Type":"application/json",
                "key":getaccount().key
            },
            cache: false,
            dataType: 'JSON',
            success: function(n)
            {
                console.log(n.list);

                list += '<option value="-1">All...</option>';
                $.each(n.list, function(i, item)
                {
                    list += '<option value="'+item.id+'">'+item.name+'</option>';
                });
                selectCS.html(list);
                selectCS.selectpicker('refresh');
                selectCS.parents('.field').removeClass('hide');
            },
            error: function(n)
            {
                // console.log(n);
                list = '<option value="-1">All...</option>';
                selectCS.html(list);
                selectCS.selectpicker('refresh');
                flagnotif('error',n.responseJSON.message);
            }
        });
    }


    $('body').on('click', '.cmd-select-taging', function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        modal = cmd.parents('.modal.show'),
        form = modal.find('form'),
        area = modal.find('.area-taging ul');

        if( changetaging.status === 1)
        {

            if( cmd.attr('role') === 'off' )
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
    
            var val = list.length === 0 ? '' : list;
            form.find('input[name="taging"]').val(val);
    
            if( form.find('input[name="taging"]').val() !== form.find('input[name="lasttaging"]').val() )
            {
                modal.find('button.modal-submit').attr('role', 'off');
            }
            else
            {
                modal.find('button.modal-submit').attr('role', 'on');
            }
        }

    });

    $('#modaltaging form').submit(function()
    {
        var form = $(this),
        modal = form.parents('.modal.show'),
        button = modal.find('button.modal-submit');

        //
        changetaging.status = 0;

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
                "key":getaccount().key
            },
            timeout: 18000,
            data: JSON.stringify(datasend),
            dataType: 'JSON',
            success: function(e)
            {
                // console.log(e);

                loadtable();
                modal.find('button.close').click();
                // var response = e.response;
                
            },
            error: function(e)
            {
                // console.log(e);
                flagnotif('error',e.responseJSON.message);
            }
        })

        // console.log('submit form taging');

        changetaging.status = 1;
        button.attr('role', 'off');
        

        return false;
    })
    // end modal taging


    // modal note
    $('body').on('click', '.cmd-modal[data-target="#modalnote"]', function()
    {
        var cmd = $(this),
        tr = cmd.parents('.tr'),
        modal = $(cmd.attr('data-target'));

        modal.find('form').find('input[name="customer_id"]').val(tr.attr('dataid'));
        //
    })

    $('#modalnote textarea[name="note"]').keyup(function()
    {
        var text = $(this),
        modal = text.parents('.modal.show');

        if( $.trim( text.val() ).length >= 15 )
        {
            modal.find('button.modal-submit').attr('role', 'off');
            modal.find('button.modal-submit').addClass('is-loading');
        }
        else
        {
            modal.find('button.modal-submit').removeClass('is-loading');
            modal.find('button.modal-submit').attr('role', 'on');
        }

    });


    // close note
    $('#modalnote button.close').click(function()
    {
        var cmd = $(this),
        modal = cmd.parents('.modal.show');

        modal.find('textarea[name="note"]').val('');

    });

    $('#modalnote form').submit(function()
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
                "key":getaccount().key
            },
            timeout: 18000,
            data: JSON.stringify(datasend),
            dataType: 'JSON',
            success: function(e)
            {
                console.log(e);


                loadtable();
                modal.find('button.close').click();
                // var response = e.response;
                
            },
            error: function(e)
            {
                console.log(e);

                flagnotif('error',e.responseJSON.message);
            }
        })


        button.attr('role', 'off');
        

        return false;
    })
    // end modal note




    function gettable(e)
    {
        
        var li = '';

        $.each(e.list, function(i, item)
        {

            li += '<div class="tr" dataid="'+item.id+'" data-progress="'+item.progress_id+'"';
            li += 'data-taging="';
            if( item.taging !== '' )
            {
                var listtag = [];
                $.each(item.taging, function(y, x)
                {
                    listtag.push(x.id);
                });

                li += listtag;
            }
            li += '">';

            li += '<div class="thr"><div class="div clr-float">';
    
                li += '<div class="spc"><span class="ic fas fa-bookmark '+item.progress_color+'"></span><b class="up-txt '+item.progress_color+'">'+ item.progress_name +'</b></div>';
    
                if( item.taging !== '')
                {
                    li += '<div class="spc">';
                        li += '<div class="tag"><ul>';
                        $.each(item.taging, function(y, x)
                        {
                            
                            li += '<li class="'+x.background+'">'+x.name+'</li>';
                            
                        });
                        li += '</ul></div>';
                    li += '</div>';
                }
                                        
    
                li += '<div class="spcr"><span class="label ic sli_icon-calendar"></span><span class="date">'+item.date+'</span></div>';
    
                li += '<div class="spcr wh-m-520"><span class="label ic sli_icon-user-follow"></span><b class="up-txt">'+item.admin_name+'</b></div>';
    
            li += '</div></div>';
    
            li += '<div class="tbody"><table><tbody><tr>';
    
                li += '<td><div class="td-iner">';
                    li += '<div class="div area-name"><span class="ic ic-gender sli_icon-symbol-'+item.customer_gender+' gender"></span><span><b class="label-name selection-search">'+item.customer_name+'</b></span></div>';

                    li += '<div class="div label ws-m-520">'+item.company_name+'</div>';

                    li += item.note === '' ? '' : '<div class="div label"><span class="bubble"><span class="ic fa flaticon-notes" title="Catatan"></span><span class="inbubble" title="'+item.note+'">'+notetable(item.note)+'</span></span></div>';

                li += '</div></td>';
    
    
                li += '<td class="td-w260 wh-m-520"><div class="td-iner"><div class="div area-contact"><span class="label ic sli_icon-screen-tablet"></span><span class="selection-search">'+item.customer_phone+'</span></div>';
                li += item.customer_email === '' ? '' : '<div class="div"><span class="ic label sli_icon-envelope"></span><span>'+item.customer_email+'</span></div>';
                li += '</div></td>';
                
                li += '<td class="td-w180 wh-m-520"><div class="td-iner">';
                
                    li += '<div class="div"><span class="ic label sli_icon-volume-2"></span><span>'+item.source+'</span></div>';
                    
                    li += item.orders === 0 ? '' : '<div class="div"><span class="ic sli_icon-bag label"></span><span>'+item.orders+'x Closing</span></div>';
                    li += '<div class="div">From: <b>'+item.company_name+'</b></div>';
                
                li += '</div></td>';
    
                li += '<td class="td-center td-w70"><div class="td-iner disvis"><div class="div">';
                    li += '<div class="dropdown dropleft">';

                    // <button class="no cmd-add-customer green rds4" role="off"  data-togglex="modal" data-type="add" data-open="page" data-target="#modalcustomers">

                    li += '<button type="button" class="btn btn-primary nobr grey s11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-v"></span></button><div class="dropdown-menu">';
                    

                    li += '<a class="dropdown-item afalse cmd-modal" href="#" data-toggle="modal" data-target="#modalprogress"><span>Progress</span><span class="ic fas fa-bookmark"></span></a>';

                    li += '<a class="dropdown-item afalse cmd-modal" href="#" data-toggle="modal" data-target="#modaltaging"><span>Tag</span><span class="ic sli_icon-tag"></span></a>';

                    li += '<a class="dropdown-item afalse cmd-modal" href="#" data-toggle="modal" data-target="#modalnote"><span>Catatan</span><span class="ic sli_icon-note"></span></a>';

                    li += '<div class="dropdown-divider"></div>';
                    
                    li += '<a class="dropdown-item afalse cmd-modal color-orange cmd-vcustomers" href="#" data-togglex="modal" data-type="edit" data-open="page"  data-target="#modalcustomers" data-token="'+item.url+'" role="off"><span>Sunting</span><span class="ic sli_icon-pencil"></span></a>';

                    

                    li += '<div class="dropdown-divider"></div>';

                    li += '<a class="dropdown-item color-green" href="'+config.apps.URL+'/dashboard/customers/'+item.url+'"><span>Detail</span><span class="ic sli_icon-info"></span></a>';
                                                            
                    li += '</div>';
                li += '</div></div></td>';
    
            li += '</tr></tbody></table></div></div>';
        });



        return li;

        
    }




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


        var field = form.attr("action") + '?src=' + form.find('input[name="customer_name"]').val();
        field += '&pg=' + form.find('input[name="paging"]').val();
        field += '&sort=' + form.find('input[name="sort"]').val();
        field += '&taging=' + form.find('input[name="taging"]').val();
        field += '&reg=' + form.find('input[name="register"]').val();
        field += '&progress=' + form.find('input[name="progress"]').val();
        field += '&source=' + form.find('input[name="source"]').val();
        field += '&companyid=' + form.find('select[name="cat-company"]').val();
        field += '&csid=' + form.find('select[name="cat-cs"]').val();

        // table?src=&pg=1&sort=desc&taging=&reg=&progress=-1&source=-1&companyid=100000001&csid=-1

        // parse serialize to JSON stringify
        // var unindexed_array = form.serializeArray();
        // var datasend = {};

        // $.map(unindexed_array, function(n, i){
        //     datasend[n['name']] = n['value'];
        // });

        //splash tabel
        splashtable();

        //
        // var token = getToken();

        
        $.ajax({
            type: 'GET',
            url:  config.apps.URL_API + field,
            timeout: 18000,
            headers: {
                "Content-Type": "application/json",
                "key":getaccount().key
            },
            // data: JSON.stringify(datasend),
            dataType: 'JSON',
            success: function(e,n,r)
            {
                //
                // console.log(e.response);

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

                if( $.trim(form.find('input[name="customer_name"]').val()) !== '' )
                {

                    findtextHighlight(form.find('input[name="customer_name"]').val());
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
        progress = form.find('input[name="progress"]').val(),
        taging = form.find('input[name="taging"]').val(),
        source = form.find('input[name="source"]').val(),
        register = form.find('input[name="register"]').val(),
        companyid = form.find('input[name="catcompany"]').val(),
        csid = form.find('input[name="catcs"]').val();

        var area = form.find('.area-categori'),
        cmd = area.find('button.cmd-categori'),
        catprogress = area.find('select[name="cat-progress"]').val(),
        cattaging = form.find('input[name="cat-taging"]').val(),
        catsource = area.find('select[name="cat-source"]').val(),
        catstartdate = area.find('input[name="start-date"]').val(),
        catenddate = area.find('input[name="end-date"]').val(),
        catcompanyid = area.find('select[name="cat-company"]').val(),
        catcs = area.find('select[name="cat-cs"]').val();

        if( catstartdate !== '' && catenddate !== '' )
        {
            catregister = changedate(catstartdate) + ';' + changedate(catenddate);
        }
        else
        {
            catregister = '';
        }

        if( catprogress !== progress || cattaging !== taging || catsource !== source || catregister !== register || catcompanyid !== companyid || catcs !== csid)
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
        register = form.find('input[name="register"]'),
        companyid = form.find('input[name="catcompany"]'),
        csid = form.find('input[name="catcs"]');

        var catprogress = area.find('select[name="cat-progress"]').val(),
        cattaging = form.find('input[name="cat-taging"]').val(),
        catsource = area.find('select[name="cat-source"]').val(),
        catstartdate = area.find('input[name="start-date"]').val(),
        catenddate = area.find('input[name="end-date"]').val(),
        catcompanyid = area.find('select[name="cat-company"]').val(),
        catcs = area.find('select[name="cat-cs"]').val();

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
                progress.val( catprogress); taging.val(cattaging); source.val(catsource); register.val(catregister); companyid.val(catcompanyid); csid.val(catcs);
    
                if(progress.val() !== '-1' || taging.val() !== '' || source.val() !== '-1' || register.val() !== '' || companyid.val() != '-1')
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

        form.find('input[name="progress"]').val('-1');
        form.find('input[name="taging"]').val('');
        form.find('input[name="source"]').val('-1');
        form.find('input[name="register"]').val('');

        area.find('select[name="cat-progress"]').val('-1');
        form.find('input[name="cat-taging"]').val('');
        catsource = area.find('select[name="cat-source"]').val('-1');
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
                "key":getaccount().key
            },
            data: JSON.stringify({"token":token}),
            dataType: 'JSON',
            success: function(e)
            {
                // console.log(e.response);
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
                hideloadprocess();
                button.attr('role', 'off');
            }
        })

    }





    
    // end export data


    return false;
});
</script>



@endsection