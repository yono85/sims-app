@extends('dashboard.index')

@section('content')

<main class="moby__content-body">

    <!-- Moby Sub Header -->
    <div id="moby__header2" class="moby__sub-header">
        <div class="row no-gutters">
            <!-- Moby Welcome Left Section -->
            <div class="col-lg-5 col-md-12 col-12 w-h-mobile">


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
                                                <span class="ic flaticon2-refresh-arrow"></span>
                                            </button>

                                            <div class="moby__filter-btn-holder">
                                                <span class="moby__calander"><i class="icon-calendar_today_outlined icon warning"></i></span>
                                                <input type="text" id="from" name="from" value="Start date" class="datepicker" />
                                                <span class="picker-separator">~</span>
                                                <input type="text" id="to" name="to" value="End date" class="datepicker" />
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
                        <span class="card-sub-title">5,2356</span>
                        <div class="circle-progress-bar">
                            <div class="progress" data-percentage="50">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">
                                    <i class="icon-visibility_outlined progress-bar-icon icon"></i>
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
                                    <span>523.43</span>
                                    <span class="card-footer-text">Baru</span>
                                </span>
                            </li>
                            <li>
                                <i class="card-footer-icon icon icon-exchange"><span class="path1"></span><span class="path2"></span></i>
                                <span class="card-footer-num">
                                    <span>234</span>
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
                        <span class="card-sub-title">25</span>
                        <div class="circle-progress-bar">
                            <div class="progress" data-percentage="60">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">
                                    <i class="icon-event_note_outlined progress-bar-icon icon"></i>
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
                                    <span>15</span>
                                    <span class="card-footer-text">Lead</span>
                                </span>
                            </li>
                            <li>
                                <i class="card-footer-icon icon icon-pushpin"></i>
                                <span class="card-footer-num">
                                    <span>15</span>
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
                        <span class="card-sub-title">$200,00</span>
                        <div class="circle-progress-bar">
                            <div class="progress" data-percentage="70">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">
                                    <i class="icon-account_balance_wallet_outlined progress-bar-icon icon"></i>
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
                        <h3 class="card-title">New Members</h3>
                        <span class="card-sub-title">1,000</span>
                        <div class="circle-progress-bar">
                            <div class="progress" data-percentage="80">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">
                                    <i class="icon-person_outline_outlined progress-bar-icon icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Stat Card Body Ends -->
                    <!-- Stat Card Footer -->
                    <div class="card-footer">
                        <ul class="card-footer-list">
                            <li>
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
                            </li>
                        </ul>
                    </div>
                    <!-- Stat Card Footer Ends -->
                </div>
                <!-- Stat Card Ends -->
            </div>
        </div>
    </div>
    <!-- Moby Stat Widget Card Ends -->

    <!-- #1 Moby Cards Row -->
    <div class="row">
        <!-- Static Table Graph -->
        <div class="col-lg-8 col-md-12 col-12">
            <!-- Static Table Card -->
            <div class="card body-pd-0">
                <!-- Card Header -->
                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">Static Table</h3>
                    <!-- Card Header Title Ends -->
                    <!-- Card Extra -->
                    <div class="moby__card-extra">
                        <!-- Card Extra Actions -->
                        <div class="extra-actions">
                            <button type="button" class="btn btn-outline">
                                <i class="icon icon-exchange"><span class="path1"></span><span class="path2"></span></i> Total Hits
                            </button>
                            <button type="button" class="btn btn-outline">
                                <i class="icon icon-exchange"><span class="path1"></span><span class="path2"></span></i> Unique Visits
                            </button>
                            <!-- Select Range Dropdown -->
                            <div class="dropdown dropdown-white-bg">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                                    Select Range
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                    <a class="dropdown-item" href="#">1st March - 31st March</a>
                                    <a class="dropdown-item" href="#">1st April - 30th April</a>
                                    <a class="dropdown-item" href="#">1st May - 30th May</a>
                                </div>
                            </div>
                            <!-- Select Range Dropdown -->
                        </div>
                        <!-- Card Extra Actions Ends -->
                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#">
                                    <i class="icon-refresh_outlined icon"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-delete_outlined icon"></i>
                                </a>
                            </li>
                            <li>
                                <!-- Static Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
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

        <!-- Session By Channel Graph -->
        <div class="col-lg-4 col-md-12 col-12">
            <!-- Static Table Card -->
            <div class="card body-pd-0">
                <!-- Card Header -->
                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">Sessions By Channel</h3>
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
                                <a href="#">
                                    <i class="icon-delete_outlined icon"></i>
                                </a>
                            </li>
                            <li>
                                <!-- Static Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
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
                        <div id="MobySessionByChannelChart"></div>
                    </div>
                    <div class="moby__chart-holder">
                        <ul class="chart-list">
                            <li class="chart-bg">
                                <strong>Organic Search</strong>
                                <div class="chart-rating danger">
                                    <span>1200</span>
                                    <span class="chart-percent">
                                        <i class="icon icon-exchange"><span class="path1"></span><span class="path2"></span></i>25%
                                    </span>
                                </div>
                            </li>
                            <li>
                                <strong>Email</strong>
                                <div class="chart-rating primary">
                                    <span>600</span>
                                    <span class="chart-percent">
                                        <i class="icon icon-exchange"><span class="path1"></span><span class="path2"></span></i>20%
                                    </span>
                                </div>
                            </li>
                            <li>
                                <strong>Referral</strong>
                                <div class="chart-rating success">
                                    <span>2500</span>
                                    <span class="chart-percent">
                                        <i class="icon icon-exchange"><span class="path1"></span><span class="path2"></span></i>25%
                                    </span>
                                </div>
                            </li>
                            <li class="chart-bg">
                                <strong>Social Media</strong>
                                <div class="chart-rating warning">
                                    <span>800</span>
                                    <span class="chart-percent">
                                        <i class="icon icon-exchange"><span class="path1"></span><span class="path2"></span></i>25%
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Card Body Ends -->
            </div>
            <!-- Static Table Card Ends -->
        </div>
        <!-- Session By Channel Graph -->
    </div>

    <!-- #2 Moby Cards Row -->
    <div class="row">
        <!-- #1 Recent Activites -->
        <div class="col-lg-4 col-md-12 col-12">
            <!-- Recent Activities Card -->
            <div class="card body-pd-0">
                <!-- Card Header -->
                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">Recent Activites</h3>
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
                                <a href="#">
                                    <i class="icon-delete_outlined icon"></i>
                                </a>
                            </li>
                            <li>
                                <!-- Static Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
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
                <div class="card-body scroller">
                    <ul class="moby__timeline">
                        <li class="timeline-item danger">
                            <div class="timeline-item-tail"></div>
                            <div class="timeline-item-head"></div>
                            <div class="timeline-item-content">
                                <div class="moby__timeline-content moby__timeline-content-alternative">
                                    <span class="moby__user-title">J</span>
                                    <div class="moby__user-detail">
                                        <div class="moby__user-detail-header">
                                            <h4>John Doe</h4>
                                            <ul class="moby__user-active-list">
                                                <li>
                                                    <span data-toggle="tooltip" data-placement="top" title="Likes">
                                                        <i class="icon-thumb_up_outlined icon"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span data-toggle="tooltip" data-placement="top" title="Dislikes">
                                                        <i class="icon-thumb_down_outlined icon"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Buckinghamshire Oklahoma Cambridgeshire system engine generate SDD enterprise interface</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item warning">
                            <div class="timeline-item-tail"></div>
                            <div class="timeline-item-head"></div>
                            <div class="timeline-item-content">
                                <div class="moby__timeline-content moby__timeline-content-alternative">
                                    <span class="moby__user-title">M</span>
                                    <div class="moby__user-detail">
                                        <div class="moby__user-detail-header">
                                            <h4>Mane Doe</h4>
                                            <ul class="moby__user-active-list">
                                                <li>
                                                    <span data-toggle="tooltip" data-placement="top" title="Likes">
                                                        <i class="icon-thumb_up_outlined icon"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span data-toggle="tooltip" data-placement="top" title="Dislikes">
                                                        <i class="icon-thumb_down_outlined icon"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p>cross-platform Shoes context-sensitive Zloty AGP Direct Michigan transmitting Buckinghamshire</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item success">
                            <div class="timeline-item-tail"></div>
                            <div class="timeline-item-head"></div>
                            <div class="timeline-item-content">
                                <div class="moby__timeline-content moby__timeline-content-alternative">
                                    <span class="moby__user-title">D</span>
                                    <div class="moby__user-detail">
                                        <div class="moby__user-detail-header">
                                            <h4>Davis Doe</h4>
                                            <ul class="moby__user-active-list">
                                                <li>
                                                    <span data-toggle="tooltip" data-placement="top" title="Likes">
                                                        <i class="icon-thumb_up_outlined icon"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span data-toggle="tooltip" data-placement="top" title="Dislikes">
                                                        <i class="icon-thumb_down_outlined icon"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Handmade Metal Soap array hacking indigo e-commerce Fords strategic Music innovative</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item primary">
                            <div class="timeline-item-tail"></div>
                            <div class="timeline-item-head"></div>
                            <div class="timeline-item-content">
                                <div class="moby__timeline-content moby__timeline-content-alternative">
                                    <span class="moby__user-title">M</span>
                                    <div class="moby__user-detail">
                                        <div class="moby__user-detail-header">
                                            <h4>Moon Doe</h4>
                                            <ul class="moby__user-active-list">
                                                <li>
                                                    <span data-toggle="tooltip" data-placement="top" title="Likes">
                                                        <i class="icon-thumb_up_outlined icon"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span data-toggle="tooltip" data-placement="top" title="Dislikes">
                                                        <i class="icon-thumb_down_outlined icon"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Centralized Organic synthesize RAM Health Rustic Steel Cheese Investor Awesome Avon</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item danger">
                            <div class="timeline-item-tail"></div>
                            <div class="timeline-item-head"></div>
                            <div class="timeline-item-content">
                                <div class="moby__timeline-content moby__timeline-content-alternative">
                                    <span class="moby__user-title">A</span>
                                    <div class="moby__user-detail">
                                        <div class="moby__user-detail-header">
                                            <h4>Abby Doe</h4>
                                            <ul class="moby__user-active-list">
                                                <li>
                                                    <span data-toggle="tooltip" data-placement="top" title="Likes">
                                                        <i class="icon-thumb_up_outlined icon"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span data-toggle="tooltip" data-placement="top" title="Dislikes">
                                                        <i class="icon-thumb_down_outlined icon"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Hat end-to-end modular overriding SSL Avon Auto Loan Account Gorgeous Fresh Soap driver</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item success">
                            <div class="timeline-item-tail"></div>
                            <div class="timeline-item-head"></div>
                            <div class="timeline-item-content">
                                <div class="moby__timeline-content moby__timeline-content-alternative">
                                    <span class="moby__user-title">J</span>
                                    <div class="moby__user-detail">
                                        <div class="moby__user-detail-header">
                                            <h4>John Doe</h4>
                                            <ul class="moby__user-active-list">
                                                <li>
                                                    <span data-toggle="tooltip" data-placement="top" title="Likes">
                                                        <i class="icon-thumb_up_outlined icon"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span data-toggle="tooltip" data-placement="top" title="Dislikes">
                                                        <i class="icon-thumb_down_outlined icon"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p>input danger expedite bypassing fuchsia Utah Fantastic Fresh Shirt Automotive Mexican Peso Mexican Unidad de Inversion (UDI)</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item moby__timeline-item">
                            <div class="timeline-item-tail"></div>
                            <div class="timeline-item-head"></div>
                            <div class="timeline-item-content">
                                <div class="moby__timeline-content moby__timeline-content-alternative">
                                    <span class="moby__user-title">M</span>
                                    <div class="moby__user-detail">
                                        <div class="moby__user-detail-header">
                                            <h4>Mane Doe</h4>
                                            <ul class="moby__user-active-list">
                                                <li>
                                                    <span data-toggle="tooltip" data-placement="top" title="Likes">
                                                        <i class="icon-thumb_up_outlined icon"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span data-toggle="tooltip" data-placement="top" title="Dislikes">
                                                        <i class="icon-thumb_down_outlined icon"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Investment Account Zimbabwe Dollar Singapore Dollar platforms Soft front-end virtual calculate Fully-configurable</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Card Body Ends -->
            </div>
            <!-- Static Table Card Ends -->
        </div>
        <!-- #2 Recent Timeline -->
        <div class="col-lg-4 col-md-12 col-12">
            <!-- Recent Activities Card -->
            <div class="card">
                <!-- Card Header -->
                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">Timeline</h3>
                    <!-- Card Header Title Ends -->
                    <!-- Card Extra -->
                    <div class="moby__card-extra">
                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#"> <i class="icon-refresh_outlined icon"></i> </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-delete_outlined icon"></i>
                                </a>
                            </li>
                            <li>
                                <!-- Resent Time Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Resent Time Card Setting Dropdown -->
                            </li>
                        </ul>
                        <!-- Card Icon Menu Ends -->
                    </div>
                    <!-- Card Extra Ends -->
                </div>
                <!-- Card Header Ends -->
                <!-- Card Body -->
                <div class="card-body scroller">
                    <div class="text-center mr-b-30">
                        <button type="button" class="btn btn-danger btn-boxshadow-danger">Today</button>
                    </div>
                    <div class="moby__timeline-alternative">
                        <div class="entries">
                            <div class="entry danger">
                                <div class="moby__timeline-header title">
                                    <div class="head-detail">
                                        <span class="timeline-comment-time">2.45 AM</span>
                                        <span class="moby__timeline-comment-text">New Comment</span>
                                    </div>
                                    <span class="timeline-avtar rounded-circle">M</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Awesome! Keep going guys, all the best!</p>
                                </div>
                                <div class="timeline-footer">
                                    <button type="button" class="btn btn-secondary btn-boxshadow btn-sm">Reply</button>
                                </div>
                            </div>
                            <div class="entry warning">
                                <div class="mb-0 moby__timeline-header title">
                                    <div class="head-detail">
                                        <span class="timeline-comment-time">2.45 AM</span>
                                        <span class="moby__timeline-comment-text text-warning">New Comment</span>
                                        <span class="location">International, Uk</span>
                                    </div>
                                </div>
                                <div class="timeline-footer">
                                    <ul class="moby__timeline-comment-list">
                                        <li>
                                            <div>16</div>
                                            <div>Comments</div>
                                        </li>
                                        <li>
                                            <div>16</div>
                                            <div>Comments</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="entry primary">
                                <div class="moby__timeline-header title">
                                    <div class="head-detail">
                                        <span class="timeline-comment-time">2.45 AM</span>
                                        <span class="moby__timeline-comment-text text-primary">New Comment</span>
                                    </div>
                                </div>
                            </div>
                            <div class="entry success">
                                <div class="moby__timeline-header title">
                                    <div class="head-detail">
                                        <span class="timeline-comment-time">2.45 AM</span>
                                        <span class="moby__timeline-comment-text text-success">New Task Posted</span>
                                    </div>
                                </div>
                                <div class="timeline-body">
                                    <p>Group Projrct</p>
                                </div>
                                <div class="timeline-footer">
                                    <div class="moby__timeline-header title moby__timeline-group">
                                        <span class="timeline-avtar rounded-circle bg-primary">M</span>
                                        <span class="timeline-avtar rounded-circle bg-warning">A</span>
                                        <span class="timeline-avtar rounded-circle bg-success">I</span>
                                    </div>
                                </div>
                            </div>
                            <div class="entry danger">
                                <div class="moby__timeline-header title">
                                    <div class="head-detail">
                                        <span class="timeline-comment-time">2.45 AM</span>
                                        <span class="moby__timeline-comment-text">New Comment</span>
                                    </div>
                                </div>
                                <div class="timeline-body">
                                    <p>Group Project</p>
                                </div>
                                <div class="timeline-footer"></div>
                            </div>
                            <div class="entry danger">
                                <div class="moby__timeline-header title">
                                    <div class="head-detail">
                                        <span class="timeline-comment-time">2.45 AM</span>
                                        <span class="moby__timeline-comment-text">Statistics</span>
                                    </div>
                                </div>
                                <div class="timeline-body">
                                    <div class="graph-h border-bottom-danger pd-5">
                                        <div id="MobyStatisticsChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card Body Ends -->
            </div>
        </div>
        <!-- #3 Page view by Page title -->
        <div class="col-lg-4 col-md-12 col-12">
            <!-- Page view Card -->
            <div class="card body-pd-0">
                <!-- Card Header -->
                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">Page view by Page title</h3>
                    <!-- Card Header Title Ends -->
                    <!-- Card Extra -->
                    <div class="moby__card-extra">
                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#"> <i class="icon-refresh_outlined icon"></i> </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-delete_outlined icon"></i>
                                </a>
                            </li>
                            <li>
                                <!-- Page View Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
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
                                    <div class="list-item-meta-avatar"><i class="icon-home_outlined danger icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>Admin Home</h4>
                                        <div class="list-item-meta-description">
                                            /demo/admin/index.html
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
                                    <div class="list-item-meta-avatar"><i class="icon-receipt_outlined primary icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>Form Elements</h4>
                                        <div class="list-item-meta-description">
                                            /demo/admin/index.html
                                        </div>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>5613</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>14.67%</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar"><i class="icon-assessment_outlined success icon"></i></div>
                                    <div class="list-item-meta-content">
                                        <h4>Utilities</h4>
                                        <div class="list-item-meta-description">
                                            /demo/admin/index.html
                                        </div>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>3490</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>08.67%</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar">
                                        <i class="icon-check_circle_outlined warning icon"></i>
                                    </div>
                                    <div class="list-item-meta-content">
                                        <h4>Form Validation</h4>
                                        <div class="list-item-meta-description">
                                            /demo/admin/index.html
                                        </div>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>1280</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>18.67%</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar">
                                        <i class="icon-extension_outlined danger icon"></i>
                                    </div>
                                    <div class="list-item-meta-content">
                                        <h4>Models</h4>
                                        <div class="list-item-meta-description">
                                            /demo/admin/index.html
                                        </div>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>0390</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>09.67%</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar">
                                        <i class="icon-language_outlined primary icon"></i>
                                    </div>
                                    <div class="list-item-meta-content">
                                        <h4>Blog</h4>
                                        <div class="list-item-meta-description">
                                            /demo/admin/index.html
                                        </div>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>6690</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>21.67%</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar">
                                        <i class="icon-contacts_outlined success icon"></i>
                                    </div>
                                    <div class="list-item-meta-content">
                                        <h4>Form Elements</h4>
                                        <div class="list-item-meta-description">
                                            /demo/admin/index.html
                                        </div>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>5613</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>14.67%</span></span>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="list-item-meta">
                                    <div class="list-item-meta-avatar">
                                        <i class="icon-near_me_outlined warning icon"></i>
                                    </div>
                                    <div class="list-item-meta-content">
                                        <h4>Utilities</h4>
                                        <div class="list-item-meta-description">
                                            /demo/admin/index.html
                                        </div>
                                    </div>
                                </div>
                                <div class="moby__page-view-list">
                                    <strong class="moby__page-view-num">
                                        <span>1490</span>
                                    </strong>
                                    <span class="moby__page-view-rating"><span>08.67%</span></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Card Body Ends -->
            </div>
        </div>
    </div>

    <!-- #3 Moby Card Row -->
    <div class="row">
        <!-- #1 Sales Analysis View -->
        <div class="col-lg-4 col-md-12 col-12">
            <!-- Recent Activities Card -->
            <div class="card sales-data head-bg-grey overflow-h">
                <!-- Card Header -->
                <div class="card-header border-0">
                    <!-- Card Header Title -->
                    <h3 class="head-title">Sales Analysis View</h3>
                    <!-- Card Header Title Ends -->
                    <!-- Card Extra -->
                    <div class="moby__card-extra">
                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#"> <i class="icon-refresh_outlined icon"></i> </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-delete_outlined icon"></i>
                                </a>
                            </li>
                            <li>
                                <!-- Sales Analysis Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sales Analysis Card Setting Dropdown -->
                            </li>
                        </ul>
                        <!-- Card Icon Menu Ends -->
                    </div>
                    <!-- Card Extra Ends -->
                </div>
                <!-- Card Header Ends -->


                <!-- Moby Card Body -->
                <div class="card-body">
                    <div class="row no-gutters text-center">
                        <div class="col-sm-4 col-4">
                            <div class="pd-b-20"><strong>Table</strong> <span>30,456</span></div>
                        </div>
                        <div class="col-sm-4 col-4">
                            <div class="pd-b-20"><strong>Month</strong> <span>45</span></div>
                        </div>
                        <div class="col-sm-4 col-4">
                            <div class="pd-b-20"><strong>Week</strong> <span>89</span></div>
                        </div>
                    </div>
                    <div class="sales-info">
                        <p>Universal FTP Ridge olive Director hacking transmitter Interactions Rustic Soft Fish Strategist.</p>
                    </div>
                    <div class="graph-h">
                        <div id="MobySalesAnalysisViewChart"></div>
                    </div>
                </div>
                <!-- Card Body Ends -->

            </div>
        </div>


        <!-- #2 Moby Watch List -->
        <div class="col-lg-4 col-md-12 col-12">
            <div class="card body-pd-0 watch-list head-bg-white head-border-0 body-h-100">
                <!-- Card Header -->
                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">Watch List</h3>
                    <!-- Card Header Title Ends -->
                    <!-- Card Extra -->
                    <div class="moby__card-extra">
                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li><span class="watch-num">$32456</span></li>
                        </ul>
                        <!-- Card Icon Menu Ends -->
                    </div>
                    <!-- Card Extra Ends -->
                </div>
                <!-- Card Header Ends -->
                <!-- Moby Card Body -->
                <div class="card-body">
                    <!-- Watch List Search -->
                    <div class="pd-20 pd-t-0">
                        <div class="input-group search-input border border-radius pd-l-10">
                            <i class="icon-search_outlined icon"></i>
                            <input type="text" class="form-control" placeholder="Search here..." />
                        </div>
                    </div>
                    <!-- Watch List Holder-->
                    <div class="watch-details-holder scroller">
                        <div class="row no-gutters">
                            <div class="col-sm-4 col-4 col-4">
                                <div class="moby__list-detail">
                                    <span>DSE</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-center">
                                    <span>$5,695</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-right">
                                    <span>+976</span>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters border-top">
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail">
                                    <span>DSE</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-center">
                                    <span>$5,695</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-right">
                                    <span>+976</span>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters border-top">
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail">
                                    <span>DSE</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-center">
                                    <span>$5,695</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-right">
                                    <span>+976</span>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters border-top">
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail">
                                    <span>DSE</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-center">
                                    <span>$5,695</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-right">
                                    <span>+976</span>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters border-top">
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail">
                                    <span>DSE</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-center">
                                    <span>$5,695</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-right">
                                    <span>+976</span>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters border-top">
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail">
                                    <span>DSE</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-center">
                                    <span>$5,695</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-right">
                                    <span>+976</span>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters border-top">
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail">
                                    <span>DSE</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-center">
                                    <span>$5,695</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-right">
                                    <span>+976</span>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters border-top">
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail">
                                    <span>DSE</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-center">
                                    <span>$5,695</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-right">
                                    <span>+976</span>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters border-top">
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail">
                                    <span>DSE</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-center">
                                    <span>$5,695</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-right">
                                    <span>+976</span>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters border-top">
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail">
                                    <span>DSE</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-center">
                                    <span>$5,695</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-4">
                                <div class="moby__list-detail text-right">
                                    <span>+976</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card Body Ends -->
            </div>
        </div>

        <!-- #3 Moby Data Graph -->
        <div class="col-lg-4 col-md-12 col-12">
            <div class="card body-pd-0 body-overflow-visible data-graph body-h-100">
                <!-- Card Header -->
                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">Data Graph</h3>
                    <!-- Card Header Title Ends -->
                    <!-- Card Extra -->
                    <div class="moby__card-extra">
                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#"> <i class="icon-refresh_outlined icon"></i> </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-delete_outlined icon"></i>
                                </a>
                            </li>
                            <li>
                                <!-- Sales Analysis Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sales Analysis Card Setting Dropdown -->
                            </li>
                        </ul>
                        <!-- Card Icon Menu Ends -->
                    </div>
                    <!-- Card Extra Ends -->
                </div>
                <!-- Card Header Ends -->
                <!-- Moby Card Body -->
                <div class="card-body">
                    <div class="graph-h">
                        <div id="MobyPageViewChart"></div>
                    </div>
                </div>
                <!-- Card Body Ends -->
            </div>
        </div>

    </div>

    <!-- #4 Moby Card Row -->
    <div class="row">
        <!-- #1 Social Campaigns -->
        <div class="col-lg-6 col-md-12 col-12">
            <div class="card body-pd-0 social-campaigns-card body-h-100">
                <!-- Card Header -->
                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">Social Campaigns</h3>
                    <!-- Card Header Title Ends -->
                    <!-- Card Extra -->
                    <div class="moby__card-extra">
                        <!-- Card Extra Actions -->
                        <div class="extra-actions">
                            <!-- Select Range Dropdown -->
                            <div class="dropdown dropdown-bg-t">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                                    Mar 01 - Mar 20, 2018
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                    <a class="dropdown-item" href="#">Mar 01 - Mar 20, 2018</a>
                                    <a class="dropdown-item" href="#">Mar 01 - Mar 20, 2018</a>
                                    <a class="dropdown-item" href="#">Mar 01 - Mar 20, 2018</a>
                                </div>
                            </div>
                            <!-- Select Range Dropdown -->
                        </div>
                        <!-- Card Extra Actions Ends -->
                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#"><i class="icon-refresh_outlined icon"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-delete_outlined icon"></i></a>
                            </li>
                            <li>
                                <!-- Social Campaigns Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Social Campaigns Setting Dropdown -->
                            </li>
                        </ul>
                        <!-- Card Icon Menu Ends -->
                    </div>
                    <!-- Card Extra Ends -->
                </div>
                <!-- Card Header Ends -->
                <!-- Moby Card Body -->
                <div class="card-body scroller">
                    <table class="table border-0 text-center table-responsive-sm table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Compaign</th>
                                <th scope="col">Client</th>
                                <th scope="col">Changes</th>
                                <th scope="col">Budget</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="moby__compaign-blue-color">
                                <td>
                                    <img src="assets/images/compaign-img.png" alt="compaign-img" />
                                </td>
                                <td>Beavls</td>
                                <td><i class="icon-keyboard_arrow_down icon text-primary"></i> 2.43%</td>
                                <td class="text-primary">$1478</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/compaign-img1.png" alt="compaign-img" />
                                </td>
                                <td>Beavls</td>
                                <td><i class="icon-keyboard_arrow_up icon text-danger"></i> 2.43%</td>
                                <td class="text-danger">$1478</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/compaign-img3.png" alt="compaign-img" />
                                </td>
                                <td>Beavls</td>
                                <td><i class="icon-keyboard_arrow_up icon text-warning"></i> 2.43%</td>
                                <td class="text-warning">$1478</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/compaign-img.png" alt="compaign-img" />
                                </td>
                                <td>Beavls</td>
                                <td><i class="icon-keyboard_arrow_up icon text-primary"></i> 2.43%</td>
                                <td class="text-primary">$1478</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/compaign-img.png" alt="compaign-img" />
                                </td>
                                <td>Beavls</td>
                                <td><i class="icon-keyboard_arrow_down icon text-primary"></i> 2.43%</td>
                                <td class="text-primary">$1478</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/compaign-img2.png" alt="compaign-img" />
                                </td>
                                <td>Beavls</td>
                                <td><i class="icon-keyboard_arrow_up icon text-success"></i> 2.43%</td>
                                <td class="text-success">$1478</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/compaign-img3.png" alt="compaign-img" />
                                </td>
                                <td>Beavls</td>
                                <td><i class="icon-keyboard_arrow_down icon text-warning"></i> 2.43%</td>
                                <td class="text-warning">$1478</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/compaign-img.png" alt="compaign-img" />
                                </td>
                                <td>Beavls</td>
                                <td><i class="icon-keyboard_arrow_up icon text-primary"></i> 2.43%</td>
                                <td class="text-primary">$1478</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/compaign-img.png" alt="compaign-img" />
                                </td>
                                <td>Beavls</td>
                                <td><i class="icon-keyboard_arrow_down icon text-primary"></i> 2.43%</td>
                                <td class="text-primary">$1478</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Card Body Ends -->
        </div>
        <div class="col-lg-6 col-md-12 col-12">
            <div class="card body-pd-0 body-h-100">
                <!-- Card Header -->
                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">Regional Stats</h3>
                    <!-- Card Header Title Ends -->
                    <!-- Card Extra -->
                    <div class="moby__card-extra">
                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#"><i class="icon-refresh_outlined icon"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-delete_outlined icon"></i></a>
                            </li>
                            <li>
                                <!-- Regional Stats Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left scroller">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Regional Stats Card Setting Dropdown -->
                            </li>
                        </ul>
                        <!-- Card Icon Menu Ends -->
                    </div>
                    <!-- Card Extra Ends -->
                </div>
                <!-- Card Header Ends -->
                <!-- Moby Card Body -->
                <div class="card-body">
                    <div class="graph-h">
                        <div id="MobyRegionalStatsChart"></div>
                    </div>
                </div>
            </div>
            <!-- Card Body Ends -->
        </div>
    </div>

</main>
@endsection


@section('script')



<!-- Begin Chart Scripts -->
<script src="{{$URI}}/assets/temp/scripts/apexcharts.min.js"></script>
<script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<script src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
<script src="{{$URI}}/assets/temp/pages/classic/charts.js"></script>
<!-- End Chart Scripts -->

@endsection