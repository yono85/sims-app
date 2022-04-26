@extends('dashboard.index')

@section('content')

<main class="moby__content-body">

    <!-- Moby Sub Header -->
    <div id="moby__header2" class="moby__sub-header">
        <div class="row no-gutters">
            <!-- Moby Welcome Left Section -->
            <div class="col-lg-5 col-md-12 col-12 w-h-mobile">

                <div class="fl-left">
                    <div class="div">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="div">
                        <span class="label">Periode:</span>
                        <span>Hari ini</span>
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

                                            <button class="btn-r blue" role="off">
                                                <span class="flaticon2-refresh-arrow"></span>
                                            </button>

                                            <div class="ar-dwnld">
                                                <button role="off" data-url="" class="br-rds4 grey">
                                                    <span class="fas fa-file-download"></span>
                                                </button>
                                            </div>
                                            <div class="moby__filter-btn-holder">
                                                <span class="moby__calander"><i class="icon-calendar_today_outlined icon warning"></i></span>
                                                <input type="text" id="start-date" name="start-date" value="" class="datepicker splt2-3 typefalse" placeholder="Start Date"/>
                                                                                <span class="picker-separator">~</span>
                                                                                <input type="text" id="end-date" name="end-date" value="" class="datepicker splt2-3 typefalse" placeholder="End Date"/>
                                            </div>
                                            
                                            <div class="ar-selected">
                                                <div class="ddwn area-ddwn ar-content keep area-list-maklon">
                                                        <button class="btn br-rds8 cddwn" role="off">
                                                            <label class="mg-b0"><span class="fsize14 color-black">Company ID</span></label>
                                                        </button>
                                                        <div class="ddwn-pg area-ddwn-page">
                                                            <div class="ddwn-header">
                                                                <div class="inhd br-green-f">
                                                                    <button height="auto" type="button"></button>
                                                                    <input type="text" placeholder="Cari Maklon" class="ddwn-tsrc">
                                                                </div>
                                                            </div>
                                                            <ul><li aria-selected="false" class="mg-b0" dataid="-1"><button role="off" dataid="-1" class="pd-tb10"><span>Pilih jika produk Maklon</span></button></li><li aria-selected="false" class="mg-b0" dataid="100000003"><button role="off" dataid="100000003" class="pd-tb10"><span>Maklon</span></button></li></ul>
                                                        </div>
                                                        <input type="hidden" class="value-dropdown min1" name="maklon_id" value="-1">
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

    <!-- Moby Stat Widget Card -->

    <!-- Moby Stat Widget Card Ends -->
    <div id="moby__stat-widget" class="moby__stat-card stat-cards-shadow">
        <div class="row no-gutters">
            <!-- #1 Total Visits Card Column -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <!-- Stat Card -->
                <div class="card stat-card body-h-100 danger">
                    <!-- Stat Card Head -->
                    <div class="card-header">
                        
                    </div>
                    <!-- Stat Card Head Ends -->
                    <!-- Stat Card Body -->
                    <div class="card-body">
                        <h3 class="card-title">Penjualan</h3>
                        <span class="card-sub-title">120</span>
                        <div class="circle-progress-bar">
                            <div class="progress" data-percentage="50">
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
                    <!-- Stat Card Body Ends -->
                    <!-- Stat Card Footer -->
                    <div class="card-footer">
                        <ul class="card-footer-list">
                            <li>
                                <i class="card-footer-icon icon icon-exchange"><span class="path1"></span><span class="path2"></span></i>
                                <span class="card-footer-num">
                                    <span>110</span>
                                    <span class="card-footer-text">Baru</span>
                                </span>
                            </li>
                            <li>
                                <i class="card-footer-icon icon icon-exchange"><span class="path1"></span><span class="path2"></span></i>
                                <span class="card-footer-num">
                                    <span>10</span>
                                    <span class="card-footer-text">Repeat</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <!-- Stat Card Footer Ends -->
                </div>
                <!-- Stat Card Ends -->
            </div>
            <!-- #2 Total Visits Card Column -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <!-- Stat Card -->
                <div class="card stat-card body-h-100 primary">
                    <!-- Stat Card Head -->
                    <div class="card-header">
                    </div>
                    <!-- Stat Card Head Ends -->
                    <!-- Stat Card Body -->
                    <div class="card-body">
                        <h3 class="card-title">Customers</h3>
                        <span class="card-sub-title">220</span>
                        <div class="circle-progress-bar">
                            <div class="progress" data-percentage="60">
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
                    <!-- Stat Card Body Ends -->
                    <!-- Stat Card Footer -->
                    <div class="card-footer">
                        <ul class="card-footer-list">
                            <li>
                                <i class="card-footer-icon icon icon-pushpin"></i>
                                <span class="card-footer-num">
                                    <span>120</span>
                                    <span class="card-footer-text">Lead</span>
                                </span>
                            </li>
                            <li>
                                <i class="card-footer-icon icon icon-pushpin"></i>
                                <span class="card-footer-num">
                                    <span>210</span>
                                    <span class="card-footer-text">Baru</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <!-- Stat Card Footer Ends -->
                </div>
                <!-- Stat Card Ends -->
            </div>
            <!-- #3 Average Sales Column -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <!-- Stat Card -->
                <div class="card stat-card body-h-100 success">
                    <!-- Stat Card Head -->
                    <div class="card-header">
                    </div>
                    <!-- Stat Card Head Ends -->
                    <!-- Stat Card Body -->
                    <div class="card-body">
                        <h3 class="card-title">Pengguna</h3>
                        <span class="card-sub-title">15</span>
                        <div class="circle-progress-bar">
                            <div class="progress" data-percentage="70">
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
                    <!-- Stat Card Body Ends -->
                    <!-- Stat Card Footer -->
                    <div class="card-footer">
                        <ul class="card-footer-list">
                        </ul>
                    </div>
                    <!-- Stat Card Footer Ends -->
                </div>
                <!-- Stat Card Ends -->
            </div>
            <!-- #4 New Members Column -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <!-- Stat Card -->
                <div class="card stat-card body-h-100 warning">
                    <!-- Stat Card Head -->
                    <div class="card-header">
                    </div>
                    <!-- Stat Card Head Ends -->
                    <!-- Stat Card Body -->
                    <div class="card-body">
                        <h3 class="card-title">Return</h3>
                        <span class="card-sub-title">50</span>
                        <div class="circle-progress-bar">
                            <div class="progress" data-percentage="80">
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
                    <!-- Stat Card Body Ends -->
                    <!-- Stat Card Footer -->
                    <div class="card-footer">
                        <ul class="card-footer-list">
                            <!-- <li>
                                <i class="card-footer-icon icon icon-calendar_today_outlined"></i>
                                <span class="card-footer-num">
                                    <span>3 Years</span>
                                    <span class="card-footer-text">Register Since</span>
                                </span>
                            </li>
                            <li>
                                <span class="card-footer-num">
                                    <span>10</span>
                                    <span class="card-footer-text">Months</span>
                                </span>
                            </li> -->
                        </ul>
                    </div>
                    <!-- Stat Card Footer Ends -->
                </div>
                <!-- Stat Card Ends -->
            </div>
        </div>
    </div>
    <!-- #1 Moby Cards Row -->
    <div class="row">
        <!-- Static Table Graph -->
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Static Table Card -->
            <div class="card body-pd-0">
                <!-- Card Header -->
                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">Statistik Penjualan</h3>
                    <!-- Card Header Title Ends -->
                    <!-- Card Extra -->
                    <div class="moby__card-extra">

                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#">
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
                        <div id="MobyStaticTableChart"></div>
                    </div>
                </div>
                <!-- Card Body Ends -->
            </div>
            <!-- Static Table Card Ends -->
        </div>
        <!-- Static Table Graph -->
    </div>

    <!-- #2 Moby Cards Row -->
    <div class="row">


        <!-- #3 Page view by Page title -->
        <div class="col-lg-6 col-md-12 col-12">
            <!-- Page view Card -->
            <div class="card body-pd-0">
                <!-- Card Header -->
                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">
                        <div class="div">
                            <div class="div">Penjualan CS</div>
                            <div class="div">
                                <span class="label">0</span>
                            </div>
                        </div>
                    </h3>
                    <!-- Card Header Title Ends -->
                    <!-- Card Extra -->
                    <div class="moby__card-extra">
                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#"> <i class="icon-refresh_outlined icon"></i> </a>
                            </li>
                            <li>
                                <!-- Page View Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Export Excel</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page View Card Setting Dropdown -->
                            </li>
                        </ul>
                        <!-- Card Icon Menu Ends -->
                    </div>
                    <!-- Card Extra Ends -->
                </div>
                <!-- Card Header Ends -->
                <!-- Card Body -->
                <div class="card-body scroller">
                    <div class="moby__page-view spin-nested-loading">
                        <ul class="spin-container">
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="fa flaticon-businesswoman icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>CS 1</h4>
                                        <div class="list-item-meta-description">
                                            cs1@herbindopersada.com
                                        </div>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>3490</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>15.67%</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="fa flaticon-businesswoman icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>CS 2</h4>
                                        <div class="list-item-meta-description">
                                            cs1@herbindopersada.com
                                        </div>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>3490</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>15.67%</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="fa flaticon-businesswoman icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>CS 3</h4>
                                        <div class="list-item-meta-description">
                                            cs1@herbindopersada.com
                                        </div>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>3490</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>15.67%</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="fa flaticon-businesswoman icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>CS 4</h4>
                                        <div class="list-item-meta-description">
                                            cs1@herbindopersada.com
                                        </div>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>3490</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>15.67%</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="fa flaticon-businesswoman icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>CS 5</h4>
                                        <div class="list-item-meta-description">
                                            cs1@herbindopersada.com
                                        </div>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>3490</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>15.67%</span></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Card Body Ends -->
            </div>
        </div>

        <!-- #3 Page view by Page title -->
        <div class="col-lg-6 col-md-12 col-12">
            <!-- Page view Card -->
            <div class="card body-pd-0">
                <!-- Card Header -->
                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">
                        <div class="div">
                            <div class="div">Customer</div>
                            <div class="div">
                                <span class="label">0</span>
                            </div>
                        </div>
                    </h3>
                    <!-- Card Header Title Ends -->
                    <!-- Card Extra -->
                    <div class="moby__card-extra">
                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#"> <i class="icon-refresh_outlined icon"></i> </a>
                            </li>
                            <li>
                                <!-- Page View Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Export Excel</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page View Card Setting Dropdown -->
                            </li>
                        </ul>
                        <!-- Card Icon Menu Ends -->
                    </div>
                    <!-- Card Extra Ends -->
                </div>
                <!-- Card Header Ends -->
                <!-- Card Body -->
                <div class="card-body scroller">
                    <div class="moby__page-view spin-nested-loading">
                        <ul class="spin-container">
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="sli_icon-users icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>Customer 1</h4>
                                        <div class="list-item-meta-description">
                                            08878767676
                                        </div>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>1x</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>Rp160.000</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="sli_icon-users icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>Customer 2</h4>
                                        <div class="list-item-meta-description">
                                            08878767676
                                        </div>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>1x</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>Rp160.000</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="sli_icon-users icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>Customer 3</h4>
                                        <div class="list-item-meta-description">
                                            08878767676
                                        </div>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>1x</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>Rp160.000</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="sli_icon-users icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>Customer 4</h4>
                                        <div class="list-item-meta-description">
                                            08878767676
                                        </div>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>1x</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>Rp160.000</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="sli_icon-users icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>Customer 5</h4>
                                        <div class="list-item-meta-description">
                                            08878767676
                                        </div>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>1x</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>Rp160.000</span></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Card Body Ends -->
            </div>
        </div>



    </div>

    <div class="row">


        <!-- #3 Page view by Page title -->
        <div class="col-lg-6 col-md-12 col-12">
            <!-- Page view Card -->
            <div class="card body-pd-0">
                <!-- Card Header -->
                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">
                        <div class="div">
                            <div class="div">Ekspedisi</div>
                            <div class="div">
                                <span class="label">0</span>
                            </div>
                        </div>
                    </h3>
                    <!-- Card Header Title Ends -->
                    <!-- Card Extra -->
                    <div class="moby__card-extra">
                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#"> <i class="icon-refresh_outlined icon"></i> </a>
                            </li>
                            <li>
                                <!-- Page View Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Export Excel</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page View Card Setting Dropdown -->
                            </li>
                        </ul>
                        <!-- Card Icon Menu Ends -->
                    </div>
                    <!-- Card Extra Ends -->
                </div>
                <!-- Card Header Ends -->
                <!-- Card Body -->
                <div class="card-body scroller">
                    <div class="moby__page-view spin-nested-loading">
                        <ul class="spin-container">
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="fa flaticon-truck icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>JNE</h4>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>120</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>Rp32.000.000</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="fa flaticon-truck icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>Sicepat</h4>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>120</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>Rp32.000.000</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="fa flaticon-truck icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>JNT</h4>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>120</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>Rp32.000.000</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="fa flaticon-truck icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>SAP</h4>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>120</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>Rp32.000.000</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="fa flaticon-truck icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>POS</h4>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>120</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>Rp32.000.000</span></span>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- Card Body Ends -->
            </div>
        </div>

        <!-- #3 Page view by Page title -->
        <div class="col-lg-6 col-md-12 col-12">
            <!-- Page view Card -->
            <div class="card body-pd-0">
                <!-- Card Header -->
                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">
                        <div class="div">
                            <div class="div">Tujuan Pengiriman</div>
                            <div class="div">
                                <span class="label">0</span>
                            </div>
                        </div>
                    </h3>
                    <!-- Card Header Title Ends -->
                    <!-- Card Extra -->
                    <div class="moby__card-extra">
                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#"> <i class="icon-refresh_outlined icon"></i> </a>
                            </li>
                            <li>
                                <!-- Page View Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Export Excel</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page View Card Setting Dropdown -->
                            </li>
                        </ul>
                        <!-- Card Icon Menu Ends -->
                    </div>
                    <!-- Card Extra Ends -->
                </div>
                <!-- Card Header Ends -->
                <!-- Card Body -->
                <div class="card-body scroller">
                    <div class="moby__page-view spin-nested-loading">
                        <ul class="spin-container">
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="sli_icon-pointer icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>Jakarta Pusat</h4>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>12x</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>Rp5.000.000</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="sli_icon-pointer icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>Jakarta Pusat</h4>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>12x</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>Rp5.000.000</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="sli_icon-pointer icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>Surabaya</h4>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>12x</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>Rp5.000.000</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="sli_icon-pointer icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>Bekasi</h4>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>12x</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>Rp5.000.000</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="sli_icon-pointer icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>Bandung</h4>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>12x</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>Rp5.000.000</span></span>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- Card Body Ends -->
            </div>
        </div>



    </div>


</main>
@endsection


@section('script')


<!-- Begin Chart Scripts -->
<!-- <script src="{{$URI}}/assets/temp/scripts/apexcharts.min.js"></script>
<script src="{{$URI}}/assets/js/cdn/fusioncharts/fusioncharts.js"></script>
<script src="{{$URI}}/assets/js/cdn/fusioncharts/theme.js"></script>
<script src="{{$URI}}/assets/temp/pages/classic/charts.js"></script> -->
<!-- End Chart Scripts -->

<script>
var ConfHome = {
    'dashboard' : {
        'URL' : '/api/dashboard?uid=' + getaccount().id + '&level=' + getaccount().level + '&sublevel=' + getaccount().sublevel + '&compid=' + getaccount().config.company_id
    }
}

function configHome()
{
    console.log(ConfHome.dashboard.URL);    
}

// config
configHome();


$(document).ready(function(e)
{
    $('button.cddwn').click(function(e)
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