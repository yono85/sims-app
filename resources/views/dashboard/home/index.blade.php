@extends('dashboard.index')

@section('content')

<main class="moby__content-body">

    <div class="div msg-page hide">
        <div class="boxit">
            <div class="div fsize20">
                <span class="fa flaticon-danger"></span>
            </div>
            <span>Halaman ini sedang dalam proses <b>Update</b></span>
        </div>
    </div>

    <!-- Moby Sub Header -->
    <div id="moby__header2" class="moby__sub-header">
        <div class="row no-gutters">
            <!-- Moby Welcome Left Section -->
            <div class="col-lg-5 col-md-12 col-12 w-h-mobile">

                <div class="fl-left">
                    <div class="div">
                        <h2><span class="fa flaticon2-line-chart"></span> Dashboard</h2>
                    </div>
                    <div class="div">
                        <span class="label">Periode:</span>
                        <span class="label-this-date">Hari ini</span>
                    </div>
                </div>

            </div>

            <!-- Moby Welcome Right Section -->
            <div class="col-lg-7 col-md-12 col-12">
                <div class="moby-right_section">
                    <div class="moby__calander-holder">

                        <div class="tbl">
                            <div class="intbl">
                                <div class="div clr-float">
                                    <div class="in-right">

                                        <div class="date-section">

                                            <form action="" id="form-dashboard">

                                                <button class="btn-r is-loading blue cmd-getReload" role="off">
                                                    <span class="flaticon2-refresh-arrow"></span>
                                                </button>
    
                                                <div class="ar-dwnld hide area-btn-download hide">
                                                    <button role="off" data-url="" class="br-rds4 is-loading grey cmd-download-rp">
                                                        <span class="fas fa-file-download"></span>
                                                    </button>
                                                </div>
    
                                                <div class="moby__filter-btn-holder">
                                                    <span class="moby__calander"><i class="icon-calendar_today_outlined icon warning"></i></span>
                                                    <input type="text" id="start-date" name="start-date" value="" class="datepicker splt2-3 typefalse" placeholder="Start Date"/>
                                                    <span class="picker-separator">~</span>
                                                    <input type="text" id="end-date" name="end-date" value="" class="datepicker splt2-3 typefalse" placeholder="End Date"/>
                                                </div>
                                                

                                                <input type="hidden" name="id" value="">

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

    <!-- Moby Stat Widget Card -->

    <!-- Moby Stat Widget Card Ends -->
    <div id="moby__stat-widget" class="moby__stat-card stat-cards-shadow">
        <div class="row no-gutters">
            <!-- #1 Total Visits Card Column -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 res-box pd-lr-box" id="seling" role="off">

                <div class="card stat-card body-h-100 danger">

                    <div class="area-child-box">
                        <!-- <div class="card-header"></div> -->
                        <div class="card-body">

                            <h3 class="card-title">
                                <span class="ctr h14 br-rds4 w60p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </h3>
                            <span class="card-sub-title">
                                <span class="ctr h14 br-rds4 w33p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </span>
                            <div class="circle-progress-bar mg-b10">
                                <div class="crcl br-rds50p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <ul class="card-footer-list">
                                    <li>
                                        <span class="ctr h14 br-rds4 w60p">
                                            <div class="divH">
                                                <span class="splash-tbl"></span>
                                            </div>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="ctr h14 br-rds4 w60p">
                                            <div class="divH">
                                                <span class="splash-tbl"></span>
                                            </div>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="card-header"></div> -->

                    <div class="card-body">
                        <h3 class="card-title">Pengajuan</h3>
                        <span class="card-sub-title v-total">0</span>
                        <div class="circle-progress-bar">
                            <div class="progress" data-percentage="0" data-value="0">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">
                                    <i class="sli_icon-basket-loaded progress-bar-icon icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <ul class="card-footer-list">
                            <li>
                                <i class="card-footer-icon icon sli_icon-close"><span class="path1"></span><span class="path2"></span></i>
                                <span class="card-footer-num">
                                    <span class="v-pending">0</span>
                                    <span class="card-footer-text">Pending</span>
                                </span>
                            </li>
                            <li >
                                <i class="card-footer-icon icon sli_icon-clock"><span class="path1"></span><span class="path2"></span></i>
                                <span class="card-footer-num">
                                    <span class="v-progress">0</span>
                                    <span class="card-footer-text">Progress</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- #4 New Members Column -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 res-box pd-lr-box" id="orders" role="off">
                
                <div class="card stat-card body-h-100 warning">

                    <div class="area-child-box">
                        <!-- <div class="card-header"></div> -->
                        <div class="card-body">

                            <h3 class="card-title">
                                <span class="ctr h14 br-rds4 w60p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </h3>
                            <span class="card-sub-title">
                                <span class="ctr h14 br-rds4 w33p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </span>
                            <div class="circle-progress-bar mg-b10">
                                <div class="crcl br-rds50p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <ul class="card-footer-list">
                                    <li>
                                        <span class="ctr h14 br-rds4 w60p">
                                            <div class="divH">
                                                <span class="splash-tbl"></span>
                                            </div>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="ctr h14 br-rds4 w60p">
                                            <div class="divH">
                                                <span class="splash-tbl"></span>
                                            </div>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- Stat Card Head -->
                    <!-- <div class="card-header"></div> -->
                    
                    <div class="card-body">
                        <h3 class="card-title">Orders</h3>
                        <span class="card-sub-title v-total">0</span>
                        <div class="circle-progress-bar">
                            <div class="progress" data-percentage="0" data-value="0">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">
                                    <i class="sli_icon-action-undo progress-bar-icon icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <ul class="card-footer-list">
                            <li>
                                <i class="card-footer-icon icon sli_icon-clock"></i>
                                <span class="card-footer-num">
                                    <span class="v-progress">0</span>
                                    <span class="card-footer-text">Progress</span>
                                </span>
                            </li>
                            <li>
                                <i class="card-footer-icon icon sli_icon-check"></i>
                                <span class="card-footer-num">
                                    <span class="v-success">0</span>
                                    <span class="card-footer-text">Success</span>
                                </span>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

            <!-- #2 Total Visits Card Column -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 res-box pd-lr-box" id="customers" role="off">

                <div class="card stat-card body-h-100 primary">

                    <div class="area-child-box">
                        <!-- <div class="card-header"></div> -->
                        <div class="card-body">

                            <h3 class="card-title">
                                <span class="ctr h14 br-rds4 w60p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </h3>
                            <span class="card-sub-title">
                                <span class="ctr h14 br-rds4 w33p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </span>
                            <div class="circle-progress-bar mg-b10">
                                <div class="crcl br-rds50p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <ul class="card-footer-list">
                                    <li>
                                        <span class="ctr h14 br-rds4 w60p">
                                            <div class="divH">
                                                <span class="splash-tbl"></span>
                                            </div>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="ctr h14 br-rds4 w60p">
                                            <div class="divH">
                                                <span class="splash-tbl"></span>
                                            </div>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="card-header"></div> -->

                    <div class="card-body">
                        <h3 class="card-title">Customers</h3>
                        <span class="card-sub-title v-total">0</span>
                        <div class="circle-progress-bar">
                            <div class="progress" data-percentage="0" data-value="0">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">
                                    <i class="sli_icon-users progress-bar-icon icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <ul class="card-footer-list">
                            <li>
                                <i class="card-footer-icon icon sli_icon-user"></i>
                                <span class="card-footer-num">
                                    <span class="v-total">0</span>
                                    <span class="card-footer-text">Total</span>
                                </span>
                            </li>
                            <li>
                                <i class="card-footer-icon icon sli_icon-user"></i>
                                <span class="card-footer-num">
                                    <span class="v-new">0</span>
                                    <span class="card-footer-text">Baru</span>
                                </span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- #3 Average Sales Column -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 res-box pd-lr-box" id="users" role="off">

                <div class="card stat-card body-h-100 success">

                    <div class="area-child-box">
                        <!-- <div class="card-header"></div> -->
                        <div class="card-body">

                            <h3 class="card-title">
                                <span class="ctr h14 br-rds4 w60p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </h3>
                            <span class="card-sub-title">
                                <span class="ctr h14 br-rds4 w33p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </span>
                            <div class="circle-progress-bar mg-b10">
                                <div class="crcl br-rds50p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <ul class="card-footer-list">
                                    <li>
                                        <span class="ctr h14 br-rds4 w60p">
                                            <div class="divH">
                                                <span class="splash-tbl"></span>
                                            </div>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="ctr h14 br-rds4 w60p">
                                            <div class="divH">
                                                <span class="splash-tbl"></span>
                                            </div>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="card-header"></div> -->

                    <div class="card-body">
                        <h3 class="card-title">Pengguna</h3>
                        <span class="card-sub-title v-total">0</span>
                        <div class="circle-progress-bar">
                            <div class="progress" data-percentage="0" data-value="0">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">
                                    <i class="fa flaticon-businesswoman progress-bar-icon icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <ul class="card-footer-list">
                            <li>
                                <i class="card-footer-icon icon sli_icon-user-following"><span class="path1"></span><span class="path2"></span></i>
                                <span class="card-footer-num">
                                    <span class="v-total">0</span>
                                    <span class="card-footer-text">Total</span>
                                </span>
                            </li>
                            <li>
                                <i class="card-footer-icon icon sli_icon-clock"><span class="path1"></span><span class="path2"></span></i>
                                <span class="card-footer-num">
                                    <span class="v-verify">0</span>
                                    <span class="card-footer-text">Verify</span>
                                </span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            
        </div>
    </div>

    <!-- #1 Moby Cards Row -->
    <div class="row">
        
        <div class="col-lg-12 col-md-12 col-12 res-box" id="charts" role="off">
            <!-- Static Table Card -->
            <div class="card body-pd-0">

            <div class="area-child-box">
                <div class="ststc">
                    <img src="/assets/svg/loading.blue.svg" alt="loading">
                </div>
            </div>

                <!-- Card Header -->
                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">
                        <div class="div">Statistik Orders</div>
                        <div class="div fsize12 font-wg0">
                            <span class="label">Total </span>
                            <span class="v-total">Rp0</span>
                        </div>
                    </h3>
                    <!-- Card Header Title Ends -->
                    <!-- Card Extra -->
                    <div class="moby__card-extra">

                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#" class="cmd-reload-box" role="off">
                                    <i class="icon-refresh_outlined icon"></i>
                                </a>
                            </li>
                            <li>
                                <!-- Static Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>

                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Export Excel</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Card Setting Dropdown -->
                            </li>
                        </ul>
                        <!-- Card Icon Menu Ends -->
                    </div>
                    <!-- Card Extra Ends -->
                </div>
                <!-- Card Header Ends -->
                <!-- Card Body -->
                <div class="card-body">
                <div class="graph-h">
                        <div id="sCharts"></div>
                    </div>
                 <!-- <div class="chart" id="line-chart"></div> -->
                </div>
                <!-- Card Body Ends -->
            </div>
            <!-- Static Table Card Ends -->
        </div>
    </div>


</main>

<style>
    #ui-datepicker-div{
        z-index: 4 !important;
    }
</style>
@endsection


@section('script')


<!-- Begin Chart Scripts -->
<script src="{{$URI}}/assets/temp/scripts/apexcharts.min.js"></script>
<!-- <script src="{{$URI}}/assets/js/cdn/fusioncharts/fusioncharts.js"></script> -->
<!-- <script src="{{$URI}}/assets/js/cdn/fusioncharts/theme.js"></script> -->
<script src="{{$URI}}/assets/temp/pages/classic/charts.js"></script>
<!-- End Chart Scripts -->

<script src="{{$URI}}/assets/js/dashboard/json-excel/xlsx.core.min.js"></script>
<script src="{{$URI}}/assets/js/dashboard/json-excel/FileSaver.js"></script>
<script src="{{$URI}}/assets/js/dashboard/json-excel/jhxlsx.js"></script>

<script>

var confHome = {
    'URL' : '',
    'rankSeling' : {
        'page'  :   1
    },
    'rankCustomers':{
        'page'  :   1
    },
    'rankEkspedisi':{
        'page'  :   1
    },
    'rankDestination':{
        'page'  :   1
    }
}

// get list Companies
function getCompList()
{
    //
    var $URL = config.apps.URL_API + '/api/companies/list?compid=' + getaccount().config.company_id;
    var $t = FormSending('','GET','key','',$URL);
    $t.success(function(n)
    {
        // console.log(n);
        var li = '<li aria-selected="false" class="mg-b0" dataid="'+(getaccount().config.company_id)+'"><button role="off" dataid="'+(getaccount().config.company_id)+'" class="pd-tb10"><span>'+(getaccount().config.company_name)+'</span></button></li>';
        $.each(n.list, function(i, item)
        {
            li += '<li aria-selected="false" class="mg-b0" dataid="'+(item.id)+'"><button role="off" dataid="'+(item.id)+'" class="pd-tb10"><span>'+(item.name)+'</span></button></li>';
        })
        $('body').find('.area-list-company ul').html(li);
        
    });
    $t.error(function(n)
    {
        console.log(n);
        var li = '<li aria-selected="false" class="mg-b0" dataid="'+(getaccount().config.company_id)+'"><button role="off" dataid="'+(getaccount().config.company_id)+'" class="pd-tb10"><span>'+(getaccount().config.company_name)+'</span></button></li>';
        $('body').find('.area-list-company ul').html(li);
    });

}

// config Home
function configHome()
{

    var $id = getaccount().sublevel === 1 || getaccount().sublevel === 2 ? '-1' : getaccount().id;

    var $URL = config.apps.URL_API + '/api/dashboard/report';
    $URL += '?id=' + $id;
    $URL += '&compid=' + getaccount().config.company_id;
    $URL += '&date=';
    confHome.URL = $URL;


    var form = $('body').find('#form-dashboard');
    form.find('input[name="companyid"]').val( getaccount().config.company_id );
    form.find('input[name="id"]').val( $id );
    form.find('.area-list-company button label span').html(getaccount().config.company_name);

    if( getaccount().level === 1 || getaccount().level === 3)
    {
        if( getaccount().sublevel === 1 || getaccount().sublevel === 2)
        {
            $('body').find('.area-list-company').removeClass('hide');
            // $('body').find('.area-btn-download').removeClass('hide');
        }
    }
    else
    {
        if( getaccount().sublevel === 1 || getaccount().sublevel === 2)
        {
            // $('body').find('.area-btn-download').removeClass('hide');
        }
    }
    

}

// config
configHome();
// getCompList();


$(document).ready(function(e)
{

    async function getSeling()
    {
        var $URL = confHome.URL;
        $URL += '&type=seling';

        var $f = $('body').find('#seling'),
        progress = $f.find('.progress');
        // $f.attr('role','on');

        var $t = FormSending('','GET','key','',$URL);
        $t.success(function(n)
        {
            // console.log(n);
            $f.find('.v-total').html(formatNumber(n.total));
            $f.find('.v-pending').html(formatNumber(n.pending));
            $f.find('.v-progress').html(formatNumber( n.progress ));
            $f.find('.v-success').html(formatNumber( n.success ));
            
            var $vs = calcPercent(n.total,n.pending);
            $f.find('.progress').attr('data-value', $vs);
            $f.attr('role','on');
            runprogressbar(progress);

        });
        $t.error(function(n)
        {
            $f.find('.progress').attr('data-value', 0);
            runprogressbar(progress);
            // console.log(n.responseJSON);
        })
    }

    async function getCustomers()
    {
        var $URL = confHome.URL;
        $URL += '&type=customers';

        var $f = $('body').find('#customers'),
        progress = $f.find('.progress');
        // $f.attr('role','on');
        
        var $t = FormSending('','GET','key','',$URL);
        $t.success(function(n)
        {
            console.log(n);
            $f.find('.v-total').html(formatNumber(n.total));
            $f.find('.v-new').html(formatNumber( n.new ));
            
            // var $vs = calcPercent(n.total,n.total);
            // $f.find('.progress').attr('data-value', $vs);
            $f.attr('role','on');
            // runprogressbar(progress);

        });
        $t.error(function(n)
        {
            console.log('eror');
            $f.find('.progress').attr('data-value', 0);
            runprogressbar(progress);
            // console.log(n.responseJSON);
        })
    }

    async function getUsers()
    {
        var $URL = confHome.URL;
        $URL += '&type=users';

        var $f = $('body').find('#users'),
        progress = $f.find('.progress');

        var $t = FormSending('','GET','key','',$URL);
        $t.success(function(n)
        {
            // console.log(n);
            $f.find('.v-total').html(formatNumber(n.total));
            $f.find('.v-verify').html(formatNumber( n.verify ));
            
            // var $vs = calcPercent(n.total, (n.total - n.verify) );
            // $f.find('.progress').attr('data-value', $vs);
            $f.attr('role','on');
            // runprogressbar(progress);

        });
        $t.error(function(n)
        {
            $f.find('.progress').attr('data-value', 0);
            runprogressbar(progress);
            // console.log(n.responseJSON);
        })
    }

    async function getOrders()
    {
        var $URL = confHome.URL;
        $URL += '&type=orders';

        var $f = $('body').find('#orders'),
        progress = $f.find('.progress');

        var $t = FormSending('','GET','key','',$URL);
        $t.success(function(n)
        {
            // console.log(n);
            $f.find('.v-total').html(formatNumber(n.total));
            $f.find('.v-progress').html(formatNumber(n.progress));
            $f.find('.v-success').html(formatNumber( n.success ));
            
            // var $vs = calcPercent(n.total,n.send);
            // $f.find('.progress').attr('data-value', $vs);
            $f.attr('role','on');
            // runprogressbar(progress);

        });
        $t.error(function(n)
        {
            $f.find('.progress').attr('data-value', 0);
            runprogressbar(progress);
            // console.log(n.responseJSON);
        })
    }

    function newCharts(n)
    {
        (new ApexCharts(document.querySelector("#sCharts"), {
            chart: {
                height: 420,
                type: 'area',
                fontFamily: 'Nunito Sans, sans-serif',
                toolbar: {
                    show: false
                },
                dropShadow: {
                    enabled: true,
                    enabledOnSeries: undefined,
                    top: 250,
                    left: 0,
                    blur: 10,
                    color: '#fff',
                    opacity: 0.7
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
            width: 3
            },
            xaxis: {
            //   categories: ["Jan","Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
                categories:n.Date
            },
            legend: {
            show: false
            },
            grid: {
            show: true,
            position: 'back',
            xaxis: {
                lines: {
                    show: true
                }
            },
            padding: {
                top: 0,
                right: 10,
                bottom: 0,
                left: 10
            }, 
            yaxis: {
                lines: {
                    show: false
                }
            },            
            },
            markers: {
            size: 4,
            discrete: [{
                seriesIndex: 0,
                dataPointIndex: 5,
                fillColor: "#FFF",
                strokeColor: "#fbbc05",
                size: 6
            }]
            },
            yaxis: {
                show: false,
                min: 0
            },
            colors: ['#FBBC05'],
            fill: {
                colors: ['#FBBC05']
            },
            tooltip: {
                enabled: true,
                shared: true,
                followCursor: true,
            },
            series: [
                {
                    name: 'Total',
                    // data: [900,1100,1000,1300,1500,1800,1600,1900,2000,1800,2000,2300]
                    data:n.Total
                }
            ],
        })).render();
    }

    async function getCharts()
    {
        //
        var $URL = confHome.URL;
        $URL += '&type=charts';

        var $f = $('body').find('#charts');
        $f.attr('role','on');
        var $t = FormSending('','GET','key','',$URL);
        $t.success(function(n)
        {
            // console.log(n);
            var tArr = 0;
            $.each(n.Total, function(i,item)
            {
                tArr += parseFloat(item)
            });
            $f.find('.v-total').html(formatRupiah(tArr, ""));
            $("#sCharts").empty();
            newCharts(n);
            
            $f.attr('role','on');

        });
        $t.error(function(n)
        {
            console.log(n.responseJSON);
        })
    }

    $('#charts a.cmd-reload-box').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents('.res-box');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            area.attr('role', 'off');
            getCharts();
            cmd.attr('role', 'off');

        }
    });
    
    function getRankSeling()
    {
        //
        var $URL = confHome.URL;
        $URL += '&type=rankseling';
        $URL += '&pg=' + confHome.rankSeling.page;

        var $f = $('body').find('#rankseling');

        var $t = FormSending('','GET','key','',$URL);
        $t.success(function(n)
        {
            var li = '';
            $.each(n.list, function(i, item)
            {
                
                li += '<li class="list-item moby__page-view-list-red-color"><div class="div in-list">';
                    li += '<div class="ar-ic"><div class="tbl"><div class="intbl"><span class="fa flaticon-businesswoman"></span></div></div></div>';
                    li += '<div class="div">';
                        li += '<div class="div clr-float"><div class="fl-left"><h4>'+(item.name)+'</h4></div><div class="fl-right fsize12 label"><span>'+ ( formatRupiah( parseFloat(item.total), "Rp" ) ) +'</span></div></div>';
                        li += '<div class="div"><div class="ar-bar" role="'+( calcPercent(n.total,item.total) < 10 ? 'off' : 'on')+'"><div class="bared bg-color-purple" style="width:'+( calcPercent(n.total,item.total) )+'%"><div class="in-bared"><span>'+( calcPercent(n.total,item.total) === 0 ? '' : calcPercent(n.total,item.total) + '%' )+'</span></div></div></div></div>';
                    li += '</div>';
                li += '</div></li>';
            });
            $f.find('.card-body.value ul').html(li);
            $f.find('.v-total').html(formatRupiah( parseFloat(n.total) , "Rp"));
            $f.attr('role', 'on');
        });
        $t.error(function(n)
        {
            // console.log(n.responseJSON.message);
            confHome.rankSeling.page = 1;
            $f.find('.card-body.value ul').html('<li class="list-item moby__page-view-list-red-color"><div class="in-list empty">'+(n.responseJSON.message)+'</div></li>');
            $f.find('.v-total').html('Rp0');
            $f.attr('role', 'on');
        })
    }

    $('#rankseling a.cmd-reload-box').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents('.res-box');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            confHome.rankSeling.page = 1;
            area.attr('role', 'off');
            getRankSeling();
            cmd.attr('role', 'off');

        }
    });
    

    // $(".progress").each(function() {

        function runprogressbar(e)
        {
            var value = e.attr('data-value');
            var left = e.find('.progress-left .progress-bar');
            var right = e.find('.progress-right .progress-bar');
    
            if (value > 0) {
                if (value <= 50) {
                    right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
                } else {
                    right.css('transform', 'rotate(180deg)')
                    left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
                }
            }
            else
            {
                right.css('transform', 'rotate(0deg)');
                left.css('transform', 'rotate(0deg)');
            }
        }
    // })

    function percentageToDegrees(percentage) {

        return percentage / 100 * 360

    }

    function getRankCustomers()
    {
        //
        var $URL = confHome.URL;
        $URL += '&type=rankcustomers';
        $URL += '&pg=' + confHome.rankCustomers.page;

        var $f = $('body').find('#rankcustomers');

        var $t = FormSending('','GET','key','',$URL);
        $t.success(function(n)
        {

            var li = '';
            $.each(n.list, function(i, item)
            {
                
                li += '<li class="list-item moby__page-view-list-red-color"><div class="div in-list">';
                    li += '<div class="ar-ic"><div class="tbl"><div class="intbl fsize18"><span class="sli_icon-users"></span></div></div></div>';
                    li += '<div class="div">';
                        li += '<div class="div clr-float"><div class="fl-left"><h4>'+(item.name)+'</h4></div><div class="fl-right fsize12 label"><span>'+ ( formatRupiah( parseFloat(item.total), "Rp" ) ) +'</span></div></div>';
                        li += '<div class="div"><div class="ar-bar" role="'+( calcPercent(n.total,item.total) < 10 ? 'off' : 'on')+'"><div class="bared bg-color-blue" style="width:'+( calcPercent(n.total,item.total) )+'%"><div class="in-bared"><span>'+( calcPercent(n.total,item.total) === 0 ? '' : calcPercent(n.total,item.total) + '%' )+'</span></div></div></div></div>';
                    li += '</div>';
                li += '</div></li>';
            });
            $f.find('.card-body.value ul').html(li);
            $f.find('.v-total').html(formatNumber( parseFloat(n.total) , "Rp"));
            $f.attr('role', 'on');
        });
        $t.error(function(n)
        {
            // console.log(n.responseJSON.message);
            confHome.rankCustomers.page = 1;
            $f.find('.card-body.value ul').html('<li class="list-item moby__page-view-list-red-color"><div class="in-list empty">'+(n.responseJSON.message)+'</div></li>');
            $f.find('.v-total').html('Rp0');
            $f.attr('role', 'on');
        })
    }

    $('#rankcustomers a.cmd-reload-box').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents('.res-box');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            confHome.rankCustomers.page = 1;
            area.attr('role', 'off');
            getRankCustomers();
            cmd.attr('role', 'off');

        }
    });

    function getRankEkspedisi()
    {
        //
        var $URL = confHome.URL;
        $URL += '&type=rankekspedisi';
        $URL += '&pg=' + confHome.rankEkspedisi.page;

        var $f = $('body').find('#rankekspedisi');

        var $t = FormSending('','GET','key','',$URL);
        $t.success(function(n)
        {

            var li = '';
            $.each(n.list, function(i, item)
            {
                
                li += '<li class="list-item moby__page-view-list-red-color"><div class="div in-list">';
                    li += '<div class="ar-ic"><div class="tbl"><div class="intbl"><span class="fa flaticon-truck icon"></span></div></div></div>';
                    li += '<div class="div">';
                        li += '<div class="div clr-float"><div class="fl-left"><h4>'+(item.name)+'</h4></div><div class="fl-right fsize12 label"><span>'+ ( parseFloat(item.total) === 0 ? '' : formatNumber( parseFloat(item.total) ) + 'x' ) +'</span></div></div>';
                        li += '<div class="div"><div class="ar-bar" role="'+( calcPercent(n.total,item.total) < 10 ? 'off' : 'on')+'"><div class="bared bg-color-orange" style="width:'+( calcPercent(n.total,item.total) )+'%"><div class="in-bared"><span>'+( calcPercent(n.total,item.total) === 0 ? '' : calcPercent(n.total,item.total) + '%' )+'</span></div></div></div></div>';
                    li += '</div>';
                li += '</div></li>';
            });
            $f.find('.card-body.value ul').html(li);
            $f.find('.v-total').html(formatNumber( parseFloat(n.total)));
            $f.attr('role', 'on');
        });
        $t.error(function(n)
        {
            // console.log(n.responseJSON.message);
            confHome.rankEkspedisi.page = 1;
            $f.find('.card-body.value ul').html('<li class="list-item moby__page-view-list-red-color"><div class="in-list empty">'+(n.responseJSON.message)+'</div></li>');
            $f.find('.v-total').html('Rp0');
            $f.attr('role', 'on');
        })
    }

    $('#rankekspedisi a.cmd-reload-box').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents('.res-box');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            confHome.rankEkspedisi.page = 1;
            area.attr('role', 'off');
            getRankEkspedisi();
            cmd.attr('role', 'off');

        }
    });


    function getRankDestination()
    {
        //
        var $URL = confHome.URL;
        $URL += '&type=rankdestination';
        $URL += '&pg=' + confHome.rankDestination.page;

        var $f = $('body').find('#rankdestination');

        var $t = FormSending('','GET','key','',$URL);
        $t.success(function(n)
        {
            var li = '';
            $.each(n.list, function(i, item)
            {
                li += '<li class="list-item moby__page-view-list-red-color"><div class="div in-list">';
                    li += '<div class="ar-ic"><div class="tbl"><div class="intbl"><span class="sli_icon-pointer icon"></span></div></div></div>';
                    li += '<div class="div">';
                        li += '<div class="div clr-float"><div class="fl-left"><h4>'+(item.name)+'</h4></div><div class="fl-right fsize12 label"><span>'+ ( parseFloat(item.total) === 0 ? '' : formatNumber( parseFloat(item.total) ) + 'x' ) +'</span></div></div>';
                        li += '<div class="div"><div class="ar-bar" role="'+( calcPercent(n.total,item.total) < 10 ? 'off' : 'on')+'"><div class="bared bg-color-green" style="width:'+( calcPercent(n.total,item.total) )+'%"><div class="in-bared"><span>'+( calcPercent(n.total,item.total) === 0 ? '' : calcPercent(n.total,item.total) + '%' )+'</span></div></div></div></div>';
                    li += '</div>';
                li += '</div></li>';
            });
            $f.find('.card-body.value ul').html(li);
            $f.find('.v-total').html(formatNumber( parseFloat(n.total)));
            $f.attr('role', 'on');
        });
        $t.error(function(n)
        {
            // console.log(n.responseJSON.message);
            confHome.rankDestination.page = 1;
            $f.find('.card-body.value ul').html('<li class="list-item moby__page-view-list-red-color"><div class="in-list empty">'+(n.responseJSON.message)+'</div></li>');
            $f.find('.v-total').html('0');
            $f.attr('role', 'on');
        })
    }

    $('#rankdestination a.cmd-reload-box').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents('.res-box');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            confHome.rankDestination.page = 1;
            area.attr('role', 'off');
            getRankDestination();
            cmd.attr('role', 'off');

        }
    });

    // return this
    getSeling();
    getOrders();
    getCustomers();
    getUsers();
    // getReturns();
    getCharts();
    // getRankSeling();
    // getRankCustomers();
    // getRankEkspedisi();
    // getRankDestination();

    $('body').find('#form-dashboard .cmd-getReload').click(function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        form = cmd.parent('form'),
        startDate = form.find('#start-date').val(),
        endDate = form.find('#end-date').val();

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            $('body').find('.res-box').attr('role', 'off');
            var date = changeDate(startDate,endDate);
    
            var $URL = config.apps.URL_API + '/api/dashboard/report';
            $URL += '?id=' + form.find('input[name="id"]').val();
            $URL += '&compid=' + form.find('input[name="companyid"]').val();
            $URL += '&date=' + date;
    
            confHome.URL = $URL;
            
            //get
            getSeling();
            getCustomers();
            getUsers();
            getOrders();
            getCharts();
            // getRankSeling(); getRankCustomers(); getRankEkspedisi(); getRankDestination();

            setTimeout(function(){cmd.attr('role', 'off')}, 1500);
        }
        
    });


    $('.cmd-download-rp').click(function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        form = cmd.parents('form'),
        startDate = form.find('#start-date').val(),
        endDate = form.find('#end-date').val();

        if(cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            loadprocess('Harap tunggu, sedang process export data....');

            var date = changeDate(startDate,endDate);
    
            var $URL = config.apps.URL_API + '/api/dashboard/report/export';
            $URL += '?id=' + form.find('input[name="id"]').val();
            $URL += '&compid=' + form.find('input[name="companyid"]').val();
            $URL += '&date=' + date;

            //
            var $t = FormSending('','GET','key','',$URL);
            $t.success(function(n)
            {
                // console.log(n);
                // hideloadprocess();
                exporttoexcel(n);
                cmd.attr('role', 'off');
            });
            $t.error(function(n)
            {
                
                // console.log(n.responseJSON);
                hideloadprocess();
                cmd.attr('role', 'off');
                flagnotif('error',n.responseJSON.message);
            })

        }
    });

    function calcPercent(e,d)
    {

        var total = parseFloat(e),
        value = parseFloat(d);

        var num = ((value / total) * 100),
        num = num.toFixed(1),
        num = parseFloat(num);

        numx = isNaN(num) ? 0 : num;

        return numx;
        // return num;
    }

    $('button.cddwn').click(function(e)
    {
        e.stopPropagation();
        e.preventDefault();

        dropdownNew($(this));
    });

    $('.area-ddwn .ddwn-tsrc').keyup(function(e)
    {
        e.stopPropagation();

        srcDDWN($(this));
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

    var from = $("#start-date")
    .datepicker({
        // defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 2,
        dateFormat:"dd/mm/yy"
    })
    .on("change", function () {
        to.datepicker("option", "minDate", chkDate(this));
        // cekrangedate(from.val(),to.val());
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
        // cekrangedate(from.val(),to.val());
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


    return false;
});
</script>
@endsection