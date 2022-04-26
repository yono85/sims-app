<header id="moby__header" class="moby__main-header">
    <div class="p-relative">

        <!-- Drawer icon  -->
        <i id="menu-btn-sec" class="icon-menu icon header-drawer-icon"></i>
        <i id="header-menu-btn" class="icon icon-menu drawer-btn"></i>

        <!-- Start of Search Bar  -->
        <div class="header-search-bar">
            <div class="input-group search-input area-header-src">
                <i class="icon-search_outlined icon"></i>
                <input type="text" class="form-control" placeholder="Cari Customer disini..." />
            </div>
            <i id="search-close-btn" class="icon close-icon icon-highlight_off_outlined mr-l-20 d-inline-block"></i>
        </div>

        <!-- End of Search Bar  -->
        <div class="moby__main-nav">
            <nav class="navbar navbar-expand-lg">
                <div class="navbar-collapse" id="navbarNav">
                    <ul class="moby__nav-list">
                        
                        <li class="nav-list hide">
                            <a id="search-btn" class="btn"><i class="icon icon-search_outlined"></i></a>
                        </li>

                        <li class="nav-list">


                            <!-- Moby Notification Dropdown -->
                            <div class="dropdown notification-holder notification-popover bell-animate area-notifications-dd" aria-status="false" aria-togle="false">

                                <a href="#" class="btn cmd-open-notif" role="off">
                                    <i class="bell-animate-icon icon icon-notifications_outlined_outlined"></i>

                                    <div class="val-notif-label area-count-notif">
                                        <div class="in-val">
                                            <div class="tbl">
                                                <div class="intbl">
                                                    <span>0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right">

                                    <!-- Moby Connections -->
                                    <div class="moby__connection-holder">

                                        <!-- Notification Head -->
                                        <div class="cover-image" >
                                            <div class="tbl">
                                                <div class="intbl">
                                                    <div class="div">
                                                        <div class="div">
                                                            <span class="sli_icon-bell"></span>
                                                            <span>
                                                                <a href="{{$URI}}/dashboard/notifications">Pemberitahuan</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Notification Head -->

                                        <div class="tab-content pd-0">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <ul class="notfication-list scroller">

                                                    <!-- <li role="true" class="">
                                                        <a href="#" class="ca-notify">
                                                            <span class="user-avatar avatar avatar-img">
                                                                <span class="sli_icon-user"></span>
                                                            </span>
                                                            <div class="notification-list-content">
                                                                <h3 class="title fsize12">(SDM)</h3>
                                                                <span class="label fsize14">Membutuhkan 5 teknisi kontruksi bangunan</span>
                                                                <span class="dt fsize11">1jam lalu</span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li role="true" class="">
                                                        <a href="#" class="ca-notify">
                                                            <span class="user-avatar avatar avatar-img">
                                                                <span class="sli_icon-bag"></span>
                                                            </span>
                                                            <div class="notification-list-content">
                                                                <h3 class="title fsize12">(Alat)</h3>
                                                                <span class="label fsize14">membutuhkan alat-alat kontruksi bangunan</span>
                                                                <span class="dt fsize11">1jam lalu</span>
                                                            </div>
                                                        </a>
                                                    </li> -->
                                                    
                                                    <!-- <li class="empty">
                                                        <div class="notification-list-content">
                                                            <div class="div">
                                                                <span>Tidak ada notifikasi</span>
                                                            </div>
                                                        </div>
                                                    </li> -->

                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Moby Connections -->
                                </div>
                                
                            </div>

                        </li>

                        <li class="nav-list">
                            <!-- Moby User Dropdown -->
                            <div class="moby__user">

                                <!-- Moby Setting Dropdown -->
                                <div class="dropdown notification-holder setting-popover-h">
                                    <a class="btn dropdown-toggle rounded-circle" data-toggle="dropdown">
                                        <div class="a-ft">
                                            <img src="/assets/images/none/user.png" id="account-image" alt="image">
                                        </div>
                                        <span class="icx" id="account-icon-level" role="">
                                            <div class="tbl">
                                                <div class="intbl">
                                                    <span class="flaticon2-shield"></span>
                                                </div>
                                            </div>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right">
                                        <!-- Moby Connections -->
                                        <div class="moby__connection-holder">

                                            <!-- Notification Head -->
                                            <div class="cover-image" >
                                                <div class="tbl">
                                                    <div class="intbl">
                                                        <div class="div">
                                                            <div class="div" id="account-name">
                                                                <span >Account Name</span>
                                                            </div>
                                                            <div class="div label uname" id="account-username">
                                                                <span>username</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-content pd-0">
                                                <div class="tab-pane fade show active" id="pills-home1" role="tabpanel" aria-labelledby="pills-home1-tab">
                                                    <ul class="notfication-list">
                                                        <li>
                                                            <a href="{{$URI}}/dashboard/account">
                                                                <div class="div">
                                                                    <span>Sunting Akun</span>
                                                                    <span class="ic sli_icon-user-following"></span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" id="account-logout" class="color-red">
                                                                <div class="div">
                                                                    <span>Keluar</span>
                                                                    <span class="ic sli_icon-logout"></span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <!-- <li>
                                                            <h3 class="title mr-b-0">
                                                                <i class="icon-person_outline_outlined icon danger mr-r-10"></i>Account</h3>
                                                            <i class="icon icon-keyboard_arrow_right_outlined mr-t-5 arrow"></i>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <h3 class="title mr-b-0">Sign-out</h3>
                                                                <i class="icon icon-keyboard_arrow_right_outlined mr-t-5 arrow"></i>
                                                            </a>
                                                        </li> -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Moby Connections -->
                                    </div>
                                </div>
                            </div>
                            <!-- Moby User Dropdown -->
                        </li>

                    </ul>
                </div>
            </nav>
        </div>

        <form id="form-open-notif" action="/api/notification/open" class="hide">
            <input type="hidden" name="level" value="">
            <input type="hidden" name="slevel" value="">
            <input type="hidden" name="id" value="">
            <input type="hidden" name="compid" value="">
        </form>

        <form id="form-read-notif" action="/api/notification/read" class="hide">
            <input type="hidden" name="id" value="">
            <input type="hidden" name="href" value="">
        </form>


    </div>

</header>

<div class="prover-modal-view modal-new-view white hide" id="modal-verif-sdm">
    <div class="ar-modal-rel overflow-yA">
        <div class="modal-home">

            <div class="insed-body h-full pdtb20">

                <div class="arinsed mdl-partner pd-lr-40 pos-rel m-pd-lr25">

                    <div class="load txt-center pd-t10">
                        <img src="/assets/svg/loading.blue.svg" alt="">
                    </div>

                    <div class="div header-box">
                        <b class="title">Pengajuan Tenaga Operasional</b>
                        <a href="#" class="close afalse" role="off">
                            <span class="fa flaticon2-cross"></span>
                        </a>
                    </div>

                    <form action="/api/marketing/pengajuan/sdm/verification" id="form-modal">

                        <ul class="artable w480">

                            <li class="list">
                                <div class="div">
                                    <span class="value-name">-</span>
                                </div>
                                <div class="div fsize10 label">
                                    <span class="label up-txt">KODE:</span>
                                    <span class="value-code">-</span>
                                </div>
                            </li>

                            <li class="list">
                                <table>
                                    <tr>
                                        <td style="50%">
                                            <div class="div label up-txt fsize10">
                                                <span>TANGGAL:</span>
                                            </div>
                                            <div class="div">
                                                <span class="value-startdate fsize12">-</span>
                                                <span class="label">s.d.</span>
                                                <span class="value-enddate fsize12">-</span>
                                            </div>
                                        </td>
                                        <td style="50%">
                                            <div class="div label up-txt fsize10">
                                                <span>MARKETING:</span>
                                            </div>
                                            <div class="div">
                                                <span class="value-marketing">-</span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                
                            </li>

                            <li class="list" style="padding-bottom:0px !important">
                                <div class="div label up-txt fsize10">
                                    <span>Kebutuhan SDM:</span>
                                </div>
                                <div class="div">
                                    <span class="value-sdm">-</span>
                                </div>
                            </li>

                            <li class="list">
                                <div class="div">
                                    <table>
                                        <tr>
                                            <td colspan="2">
                                                <div class="div bts-br mg-b0"></div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </li>

                            <li class="list">
                                <div class="div">
                                    <div class="div clr-float ">
                                        <div class="fl-left label">
                                            <span class="ic sli_icon-users fsize12"></span>
                                            <span><b class="">Tenaga Operasional</b></span>
                                        </div>
                                        <div class="fl-right">
                                            <button role="off" class="btn green cmd-inmodal-ddwn" data-modal="getsdm">
                                                <span class="fa flaticon2-add-1"></span>
                                                <span>Tambah</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <table class="lst">
                                            <tr class="fsize9 color-grey">
                                                <th class="td-center td-width50 pd5">NO</th>
                                                <th class="pd5">NAMA</th>
                                                <th class="td-width140 pd5">KONTAK</th>
                                                <th class="td-center td-width60 pd5">ACT</th>
                                            </tr>
                                        </table>
                                        <table class="fsize12 area-list-li">
                                            <!-- <tr>
                                                <td colspan="4" class="pd15 td-center empty">
                                                    <div class="div">Tenaga SDM belum dipilih</div>
                                                </td>
                                            </tr> -->

                                            <!-- <tr class="lst sling">
                                                <td class="td-center td-width50 pd5">1</td>
                                                <td class="pd5 up-txt">Yono Cahyono</td>
                                                <td class="td-width140 pd5">088787988</td>
                                                <td class="td-center td-width60 pd5">
                                                    <div class="div">
                                                        <button role="off" class="fsize10 no-br br-rds4 del">
                                                            <span class="fa flaticon2-cross"></span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="lst ">
                                                <td class="td-center td-width50 pd5">1</td>
                                                <td class="pd5 up-txt">Yono Cahyono</td>
                                                <td class="td-width140 pd5">088787988</td>
                                                <td class="td-center td-width60 pd5">
                                                    <div class="div">
                                                        <button role="off" class="fsize10 no-br br-rds4 del">
                                                            <span class="fa flaticon2-cross"></span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr> -->

                                        </table>
                                    </div>
                                </div>
                            </li>

                            <li class="list">
                                <div class="div">
                                    <table>
                                        <tr>
                                            <td colspan="2">
                                                <div class="div bts-br mg-b0"></div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </li>


                            <li class="list">
                                <div class="div clr-float">
                                    <button class="btn blue is-loading fl-right w180 br-rds18 h42 submit" role="off">Kirim</button>
                                </div>
                            </li>

                        </ul>
                        
                        <input type="hidden" name="type" value="">
                        <input type="hidden" name="user_id" value="">
                        <input type="hidden" name="notif_token" value="">
                        <input type="hidden" name="project_id" value="">
                        <input type="hidden" name="listitem" value="">
                        <input type="hidden" name="listitemarr" value="">
                        <input type="hidden" name="listitemstatus" value="false">
                        <input type="hidden" name="status" value="">

                    </form>

                    <div class="in-modal area-modal-in hide" role="off">
                        <div class="in-area-mdl br-rds8">
                            <div class="bg"></div>
                            <div class="area-mdl">
                                <div class="divH">
                                    <div class="in-form-mdl">
                                        <div class="hd">
                                            <div class="divH">
                                                <div class="tbl">
                                                    <div class="intbl">
                                                        <div class="div">
                                                            <span>Tenaga Operasional</span>
                                                            <a href="" class="close-inmodal" role="off">
                                                                <span class="fa flaticon2-cross"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mn">
                                            <div class="ttl">
                                                <div class="divH">
                                                    <div class="tbl">
                                                        <div class="intbl">
                                                            <div class="ar-src">
                                                                <input type="text" class="search">
                                                                <button class="clr">
                                                                    <span class="sli_icon-close"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ar-li">
                                                <div class="inset-area">
                                                    <ul>
                                                        <li role="off" dataid="">
                                                            <a href="#" class="li cmd-select-li" role="off">
                                                                <div class="div clr-float">
                                                                    <div class="chk"></div>
                                                                    <div class="fl-left">
                                                                        <div class="div">
                                                                            <div class="div">
                                                                                <span class="li-label">PT. Angin Ribut</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" role="off" class="stn">
                                                                <span class="sli_icon-pencil"></span>
                                                                <span>Edit</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="ar-load">
                                                    <div class="div">
                                                        <img src="/assets/svg/loading.blue.svg" alt="loading">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="paging" value="1" >
                                            </div>

                                            <div class="foot">
                                                <div class="divH">
                                                    <div class="tbl">
                                                        <div class="intbl">
                                                            <button role="off" class="btn green cmd-keep-selected-list is-loading" disabled="disabled">
                                                                <span>Simpan</span>
                                                            </button>
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

        </div>
    </div>
</div>

<div class="prover-modal-view modal-new-view white hide" id="modal-verif-tools">
    <div class="ar-modal-rel overflow-yA">
        <div class="modal-home">

            <div class="insed-body h-full pdtb20">

                <div class="arinsed mdl-partner pd-lr-40 pos-rel m-pd-lr25">

                    <div class="load txt-center pd-t10">
                        <img src="/assets/svg/loading.blue.svg" alt="">
                    </div>

                    <div class="div header-box">
                        <b class="title">Pengajuan Alat</b>
                        <a href="#" class="close afalse" role="off">
                            <span class="fa flaticon2-cross"></span>
                        </a>
                    </div>

                    <form action="/api/marketing/pengajuan/tools/verification" id="form-modal">

                        <ul class="artable w480">

                            <li class="list">
                                <div class="div">
                                    <span class="value-name">-</span>
                                </div>
                                <div class="div fsize10 label">
                                    <span class="label up-txt">KODE:</span>
                                    <span class="value-code">-</span>
                                </div>
                            </li>

                            <li class="list">
                                <table>
                                    <tr>
                                        <td style="50%">
                                            <div class="div label up-txt fsize10">
                                                <span>TANGGAL:</span>
                                            </div>
                                            <div class="div">
                                                <span class="value-startdate fsize12">-</span>
                                                <span class="label">s.d.</span>
                                                <span class="value-enddate fsize12">-</span>
                                            </div>
                                        </td>
                                        <td style="50%">
                                            <div class="div label up-txt fsize10">
                                                <span>MARKETING:</span>
                                            </div>
                                            <div class="div">
                                                <span class="value-marketing">-</span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                
                            </li>

                            <li class="list" style="padding-bottom:0px !important">
                                <div class="div label up-txt fsize10">
                                    <span>Kebutuhan Alat:</span>
                                </div>
                                <div class="div">
                                    <span class="value-tools">-</span>
                                </div>
                            </li>

                            <li class="list">
                                <div class="div">
                                    <table>
                                        <tr>
                                            <td colspan="2">
                                                <div class="div bts-br mg-b0"></div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </li>

                            <li class="list">
                                <div class="div">
                                    <div class="div clr-float ">
                                        <div class="fl-left label">
                                            <span class="ic fa flaticon-cogwheel-2 fsize12"></span>
                                            <span><b class="">Pilih Alat</b></span>
                                        </div>
                                        <div class="fl-right">
                                            <button role="off" class="btn green cmd-inmodal-ddwn" data-modal="gettools">
                                                <span class="fa flaticon2-add-1"></span>
                                                <span>Tambah</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <table class="lst">
                                            <tr class="fsize9 color-grey">
                                                <th class="td-center td-width50 pd5">NO</th>
                                                <th class="pd5">NAMA</th>
                                                <th class="td-width140 pd5">SERIAL NUMBER</th>
                                                <th class="td-center td-width60 pd5">ACT</th>
                                            </tr>
                                        </table>
                                        <table class="fsize12 area-list-li">
                                            <!-- <tr>
                                                <td colspan="4" class="pd15 td-center empty">
                                                    <div class="div">Tenaga SDM belum dipilih</div>
                                                </td>
                                            </tr> -->

                                            <!-- <tr class="lst sling">
                                                <td class="td-center td-width50 pd5">1</td>
                                                <td class="pd5 up-txt">Yono Cahyono</td>
                                                <td class="td-width140 pd5">088787988</td>
                                                <td class="td-center td-width60 pd5">
                                                    <div class="div">
                                                        <button role="off" class="fsize10 no-br br-rds4 del">
                                                            <span class="fa flaticon2-cross"></span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="lst ">
                                                <td class="td-center td-width50 pd5">1</td>
                                                <td class="pd5 up-txt">Yono Cahyono</td>
                                                <td class="td-width140 pd5">088787988</td>
                                                <td class="td-center td-width60 pd5">
                                                    <div class="div">
                                                        <button role="off" class="fsize10 no-br br-rds4 del">
                                                            <span class="fa flaticon2-cross"></span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr> -->

                                        </table>
                                    </div>
                                </div>
                            </li>

                            <li class="list">
                                <div class="div">
                                    <table>
                                        <tr>
                                            <td colspan="2">
                                                <div class="div bts-br mg-b0"></div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </li>


                            <li class="list">
                                <div class="div clr-float">
                                    <button class="btn blue is-loading fl-right w180 br-rds18 h42 submit" role="off">Kirim</button>
                                </div>
                            </li>

                        </ul>
                        
                        <input type="hidden" name="type" value="">
                        <input type="hidden" name="user_id" value="">
                        <input type="hidden" name="notif_token" value="">
                        <input type="hidden" name="project_id" value="">
                        <input type="hidden" name="listitem" value="">
                        <input type="hidden" name="listitemarr" value="">
                        <input type="hidden" name="listitemstatus" value="false">
                        <input type="hidden" name="status" value="">

                    </form>

                    <div class="in-modal area-modal-in hide" role="off">
                        <div class="in-area-mdl br-rds8">
                            <div class="bg"></div>
                            <div class="area-mdl">
                                <div class="divH">
                                    <div class="in-form-mdl">
                                        <div class="hd">
                                            <div class="divH">
                                                <div class="tbl">
                                                    <div class="intbl">
                                                        <div class="div">
                                                            <span>Alat Operasional</span>
                                                            <a href="" class="close-inmodal" role="off">
                                                                <span class="fa flaticon2-cross"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mn">
                                            <div class="ttl">
                                                <div class="divH">
                                                    <div class="tbl">
                                                        <div class="intbl">
                                                            <div class="ar-src">
                                                                <input type="text" class="search">
                                                                <button class="clr">
                                                                    <span class="sli_icon-close"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ar-li">
                                                <div class="inset-area">
                                                    <ul>
                                                        <li role="off" dataid="">
                                                            <a href="#" class="li cmd-select-li" role="off">
                                                                <div class="div clr-float">
                                                                    <div class="chk"></div>
                                                                    <div class="fl-left">
                                                                        <div class="div">
                                                                            <div class="div">
                                                                                <span class="li-label">PT. Angin Ribut</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" role="off" class="stn">
                                                                <span class="sli_icon-pencil"></span>
                                                                <span>Edit</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="ar-load">
                                                    <div class="div">
                                                        <img src="/assets/svg/loading.blue.svg" alt="loading">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="paging" value="1" >
                                            </div>

                                            <div class="foot">
                                                <div class="divH">
                                                    <div class="tbl">
                                                        <div class="intbl">
                                                            <button role="off" class="btn green cmd-keep-selected-list is-loading" disabled="disabled">
                                                                <span>Simpan</span>
                                                            </button>
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

        </div>
    </div>
</div>

<script>

//
$(document).ready(function()
{
    //OPEN MODAL SDM
    $("body").on("click", ".cmd-verif-modal-sdm", function()
    {
        var cmd = $(this),
        modal = $("body").find("#modal-verif-sdm"),
        form = modal.find("#form-modal"),
        token_notif = cmd.attr("token-id"),
        token_project = cmd.attr("modal-token");

        if( cmd.attr("role") ==="off")
        {
            cmd.attr("role", "on");
            modal.find("*[name='notif_token']").val(token_notif);
            modal.find("*[name='user_id']").val(getaccount().id);
            modal.find(".load").removeClass("hide");
            modal.removeClass("hide");
            modal.find("button.submit").attr("role", "off");

            modal.find("button.cmd-inmodal-ddwn").attr("disabled","disabled");
            modal.find("button.submit").attr("disabled","disabled");
            modal.find("*[name='status']").val('0');

            //
            var $URL = config.apps.URL_API + '/api/marketing/pengajuan/sdm?token=' + token_project;
            var $t = FormSending("","GET","key","",$URL);
            $t.success(function(n)
            {
                console.log(n);
                var rsp = n.response;
                
                //
                modal.find(".value-name").html(rsp.name);
                modal.find(".value-code").html(rsp.code);
                modal.find(".value-startdate").html(rsp.startdate);
                modal.find(".value-enddate").html(rsp.enddate);
                modal.find(".value-sdm").html(rsp.sdm.text);
                modal.find(".value-marketing").html(rsp.marketing);

                modal.find("*[name='project_id']").val(rsp.id);
                modal.find("*[name='modal_project_id']").val(rsp.id);

                if( rsp.sdm.status === 0)
                {
                    modal.find("button.cmd-inmodal-ddwn").removeAttr("disabled");
                    modal.find("button.submit").removeAttr("disabled");
                    modal.find("*[name='status']").val('0');
                }
                else
                {
                    modal.find("button.cmd-inmodal-ddwn").attr("disabled","disabled");
                    modal.find("button.submit").attr("disabled","disabled");
                    modal.find("*[name='status']").val('1');
                }

                //
                tablelistitemsdm(modal,rsp.listitem);

                //
                modal.find(".load").addClass("hide");
                cmd.attr("role", "off");

            });
            $t.error(function(n)
            {
                console.log(n);
            });
        }
    });


    //LIST SDM
    function tablelistitemsdm(w,e)
    {
        var modal = w,
        status = modal.find("*[name='status']").val(),
        data = e;

        var list = '';
        if( data === '')
        {
            list += '<tr><td colspan="4" class="pd15 td-center empty"><div class="div fsize14">Tenaga Operasional belum dipilih</div></td></tr>';
            modal.find("table.area-list-li").html(list);
            modal.find("*[name='listitemstatus']").val('false');
            return;
        }
        
        $.each(data, function(i,item)
        {
            list += '<tr class="lst sling">';
                list += '<td class="td-center td-width50 pd5">1</td>';
                list += '<td class="pd5">'+item.name+'</td>';
                list += '<td class="td-width140 pd5">'+item.phone+'</td>';
                list += '<td class="td-center td-width60 pd5">';
                    list += '<div class="div">';
                        list += '<button role="off" class="fsize10 no-br br-rds4 del cmd-del-list-inmodal '+(status === '0' ? '' : 'hide')+'" dataid="'+item.id+'" ><span class="fa flaticon2-cross"></span></button>';
                    list += '</div>';
                list += '</td>';
            list += '</tr>';
        })
        modal.find("table.area-list-li").html(list);
        modal.find("*[name='listitemstatus']").val('true');
        
    }


    // GET LIST ITEM SDM
    function getlistitemsdm(w)
    {
        var modal = w;
        var $URL = config.apps.URL_API + '/api/marketing/pengajuan/sdm/list?poid=' + modal.find('*[name="project_id"]').val();
        var $t = FormSending("","GET","key","",$URL);
        $t.success(function(n)
        {
            var rsp = n.response;
            tablelistitemsdm(modal,rsp);
            console.log(n);
        });
        $t.error(function(n)
        {
            console.log(n);
        });
    }


    // KEEP LI SELECT SDM
    $("body").on("click", "#modal-verif-sdm .cmd-select-keep-li", function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        area = cmd.parents(".area-modal-in");

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            cmd.parent("li").attr("role", "on");
            listitemsdm(area);
            return;
        }
        
        cmd.attr("role", "off");
        cmd.parent("li").attr("role", "off");
        listitemsdm(area);

    });

    // SELECTED SDM
    function listitemsdm(w)
    {
        var area = w,
        modal = area.parents("#modal-verif-sdm");

        var list = [];
        area.find("ul li[role='on']").each(function(){
            list.push($(this).attr('dataid'));
        });

        var val = list.length;
        // var listx = val === 0 ? '' : list;
        // area.find("*[name='listitem']").val(listx);

        if( val > 0 )
        {
            area.find("button.btn").removeAttr("disabled");
            modal.find("*[name='listitem']").val(list);
            modal.find("*[name='listitemarr']").val(JSON.stringify(list));
            return;
        }

        modal.find("*[name='listitem']").val('');
        modal.find("*[name='listitemarr']").val('');
        area.find("button.btn").attr("disabled","disabled");
    }

    // CMD KEEP SELECTED LIST IN MODAL 
    $("#modal-verif-sdm").on("click", "button.cmd-keep-selected-list", function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents(".area-modal-in"),
        modal = cmd.parents("#modal-verif-sdm"),
        form = modal.find("form");

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            area.find("a.close-inmodal").click();

            var $URL = config.apps.URL_API + '/api/marketing/pengajuan/sdm/add';
            var $t = FormSending(form,"POST","key","form",$URL);
            // FormSending(form,"POST","key","form",$URL);

            $t.success(function(n)
            {
                console.log(n);
                getlistitemsdm(modal);
            });
            $t.error(function(n)
            {
                console.log(n);
            });
        }
    });


    // DELETE LIST ITEM SDM
    $("body").on("click", "#modal-verif-sdm button.cmd-del-list-inmodal", function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        modal = cmd.parents("#modal-verif-sdm");

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            $.ajax({
                type: "POST",
                url: config.apps.URL_API + '/api/marketing/pengajuan/sdm/delete',
                headers: {
                    "Content-Type": "application/json",
                    "key": getaccount().key
                },
                cache: false,
                timeout: 18000,
                data: JSON.stringify({
                    'id': cmd.attr("dataid") 
                }),
                dataType: 'JSON',
                success:function(n)
                {
                    console.log(n);
                    tablelistitemsdm(modal,n.response);
                },
                error:function(n)
                {
                    console.log(n);
                }
            })
            cmd.attr("role", "off");
        }
    });

    
    $("body").on("click", ".cmd-read-notify", function(e)
    {
        e.preventDefault();
        e.stopPropagation();
        var cmd = $(this),
        dataid = cmd.attr("dataid");

        if( cmd.attr("role") === "off" && cmd.attr("area-read") === "false" )
        {
            cmd.attr("role", "on");
            $("form#form-read-notif").find("input[name='id']").val(dataid);
            $("form#form-read-notif").find("input[name='href']").val(cmd.attr("href"));
            cmd.parent("li").attr("role", "true");
            cmd.attr("role", "off");
            //
            readNotif();
            return;
        }

        if( window.location.href !== cmd.attr("href") )
        {
            window.location.href = cmd.attr("href");
            return;
        }
        
    });

    $(".cmd-inmodal-ddwn[data-modal='getsdm']").click(function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        modal = cmd.parents(".modal-new-view"),
        inmodal = modal.find(".area-modal-in");

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            inmodalareasdm(inmodal);
            cmd.attr("role", "off");
        }
    });


    function inmodalareasdm(w)
    {
        var modal = w,
        area = modal.parents(".modal-new-view"),
        load = modal.find(".ar-load"),
        ul = modal.find("ul"),
        search = modal.find(".search").val(),
        paging = modal.find("*[name='paging']").val(),
        button = modal.find("button.cmd-keep-selected-list");

        modal.removeClass("hide");
        modal.attr("role", "on");

        modal.find("*[name='list_item_sdm']").val('');
        button.attr("disabled", "disabled");
        button.attr("role", "off");
        load.show();
        ul.html("");
        var $URL = config.apps.URL_API + '/api/employe/listmodal?search='+search+'&pg='+paging;
        var $t = FormSending("","GET","key","",$URL);
        $t.success(function(n)
        {
            console.log(n);

            var rsp = n.response,
            li = '';
            $.each(rsp, function(i,item)
            {
                li += '<li role="off" dataid="'+item.id+'" aria-role="'+(item.status === 'true' ? '' : 'disabled')+'">';
                    li  +=  '<a href="#" class="afalse li cmd-select-keep-li" role="off">';
                        li += '<div class="div clr-float">';
                        li += '<div class="chk"></div>';
                        li += '<div class="fl-left">';
                            li += '<div class="div">';
                                li += '<div class="div"><span class="li-label">'+item.name+'</span></div>';
                                li += '<div class="up-txt color-red">';
                                if( item.doc !== '')
                                {
                                    li += '<span class="error" style="display:inline-block">';
                                    $.each(item.doc, function(x, y)
                                    {
                                    
                                        li += y.status === 'expired' ? '<span class="fsize9">'+y.name+'</span>, ' : '';
                                    });
                                    li += '</span>';
                                }
                                li += '</div>';
                            li += '</div>';
                        li += '</div>';
                        li += '<div class="fl-right label">'+item.group+'</div>';
                        li += '</div>';
                    li += '</a>';
                li += '</li>';
            });

            ul.html(li);
            load.hide();
        });
        $t.error(function(n)
        {
            console.log(n);
        });
    }

    //VERIFICATION SDM
    $("#modal-verif-sdm button.submit").click(function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        modal = cmd.parents("#modal-verif-sdm"),
        form = cmd.parents("form");

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            
            if( form.find('*[name="listitemstatus"]').val() === 'false')
            {
                cmd.attr("role", "off");
                flagnotif("error", "Error! Harap pilih Tenaga Opersional terlebih dulu");
                return;
            }

            var $URL = config.apps.URL_API + form.attr("action");
            var $t = FormSending(form,"POST","key","form",$URL);
            $t.success(function(n)
            {
                console.log(n);
                modal.find("a.close").click();
                getNotification()
                loadtablepo();
                flagnotif("success", n.message);
            });
            $t.error(function(n)
            {
                console.log(n);
                var rsp = n.responseJSON;
                // modal.find("a.close").click();
                flagnotif("error", rsp.message);
            })
            
        }
    });

    $(".area-modal-in a.close-inmodal").click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        modal = cmd.parents(".area-modal-in");

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            modal.attr("role", "off");
            setTimeout(function(){ modal.addClass("hide") }, 300);
            cmd.attr("role","off");
        }
    });
    

    //TOOLS =======================>

    // MODAL TOOLS
    $("body").on("click", ".cmd-verif-modal-tools", function()
    {
        var cmd = $(this),
        modal = $("body").find("#modal-verif-tools"),
        form = modal.find("#form-modal"),
        token_notif = cmd.attr("token-id"),
        token_project = cmd.attr("modal-token");

        if( cmd.attr("role") ==="off")
        {
            cmd.attr("role", "on");
            modal.find("*[name='notif_token']").val(token_notif);
            modal.find("*[name='user_id']").val(getaccount().id);
            modal.find(".load").removeClass("hide");
            modal.removeClass("hide");
            modal.find("button.submit").attr("role", "off");

            modal.find("button.cmd-inmodal-ddwn").attr("disabled","disabled");
            modal.find("button.submit").attr("disabled","disabled");
            modal.find("*[name='status']").val('0');

            //
            var $URL = config.apps.URL_API + '/api/marketing/pengajuan/tools?token=' + token_project;
            var $t = FormSending("","GET","key","",$URL);
            $t.success(function(n)
            {
                console.log(n);
                var rsp = n.response;
                
                //
                modal.find(".value-name").html(rsp.name);
                modal.find(".value-code").html(rsp.code);
                modal.find(".value-startdate").html(rsp.startdate);
                modal.find(".value-enddate").html(rsp.enddate);
                modal.find(".value-tools").html(rsp.tools.text);
                modal.find(".value-marketing").html(rsp.marketing);

                modal.find("*[name='project_id']").val(rsp.id);
                modal.find("*[name='modal_project_id']").val(rsp.id);

                if( rsp.tools.status === 0)
                {
                    modal.find("button.cmd-inmodal-ddwn").removeAttr("disabled");
                    modal.find("button.submit").removeAttr("disabled");
                    modal.find("*[name='status']").val('0');
                }
                else
                {
                    modal.find("button.cmd-inmodal-ddwn").attr("disabled","disabled");
                    modal.find("button.submit").attr("disabled","disabled");
                    modal.find("*[name='status']").val('1');
                }

                //
                tablelistitemtools(modal,rsp.listitem);

                //
                modal.find(".load").addClass("hide");
                cmd.attr("role", "off");

            });
            $t.error(function(n)
            {
                console.log(n);
            });
        }
    });

    function tablelistitemtools(w,e)
    {
        var modal = w,
        status = modal.find("*[name='status']").val(),
        data = e;

        var list = '';
        if( data === '')
        {
            list += '<tr><td colspan="4" class="pd15 td-center empty"><div class="div fsize14">Alat belum dipilih</div></td></tr>';
            modal.find("table.area-list-li").html(list);
            modal.find("*[name='listitemstatus']").val('false');
            return;
        }
        
        $.each(data, function(i,item)
        {
            list += '<tr class="lst sling">';
                list += '<td class="td-center td-width50 pd5">1</td>';
                list += '<td class="pd5">'+item.name+'</td>';
                list += '<td class="td-width140 pd5">'+item.code+'</td>';
                list += '<td class="td-center td-width60 pd5">';
                    list += '<div class="div">';
                        list += '<button role="off" class="fsize10 no-br br-rds4 del cmd-del-list-inmodal '+(status === '0' ? '' : 'hide')+'" dataid="'+item.id+'" ><span class="fa flaticon2-cross"></span></button>';
                    list += '</div>';
                list += '</td>';
            list += '</tr>';
        })
        modal.find("table.area-list-li").html(list);
        modal.find("*[name='listitemstatus']").val('true');
        
    }


    $(".cmd-inmodal-ddwn[data-modal='gettools']").click(function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        modal = cmd.parents(".modal-new-view"),
        inmodal = modal.find(".area-modal-in");

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            inmodalareatools(inmodal);
            cmd.attr("role", "off");
        }
    });


    function inmodalareatools(w)
    {
        var modal = w,
        area = modal.parents(".modal-new-view"),
        load = modal.find(".ar-load"),
        ul = modal.find("ul"),
        search = modal.find(".search").val(),
        paging = modal.find("*[name='paging']").val(),
        button = modal.find("button.cmd-keep-selected-list");

        modal.removeClass("hide");
        modal.attr("role", "on");

        modal.find("*[name='list_item_sdm']").val('');
        button.attr("disabled", "disabled");
        button.attr("role", "off");
        load.show();
        ul.html("");
        var $URL = config.apps.URL_API + '/api/inventory/tools/listmodal?search='+search+'&pg='+paging;
        var $t = FormSending("","GET","key","",$URL);
        $t.success(function(n)
        {
            // console.log(n);

            var rsp = n.response,
            li = '';
            $.each(rsp, function(i,item)
            {
                li += '<li role="off" dataid="'+item.id+'" aria-role="'+(item.status === 'true' ? '' : 'disabled')+'">';
                    li  +=  '<a href="#" class="afalse li cmd-select-keep-li" role="off">';
                        li += '<div class="div clr-float">';
                        li += '<div class="chk"></div>';
                        li += '<div class="fl-left">';
                            li += '<div class="div">';
                                li += '<div class="div"><span class="li-label">'+item.name+'</span></div>';
                                li += '<div class="up-txt color-red">'+( item.status === 'true' ? '' : '<span class="error"><span class="fsize9">'+item.error+'</span></span>')+'</div>';
                            li += '</div>';
                        li += '</div>';
                        li += '<div class="fl-right label fsize12">SN:'+item.code+'</div>';
                        li += '</div>';
                    li += '</a>';
                li += '</li>';
            });

            ul.html(li);
            load.hide();
        });
        $t.error(function(n)
        {
            console.log(n);
        });
    }


    // KEEP LI SELECT TOOLS
    $("body").on("click", "#modal-verif-tools .cmd-select-keep-li", function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        area = cmd.parents(".area-modal-in");

        if(cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            cmd.parent("li").attr("role", "on");
            listitemtools(area);
            return;
        }
        
        cmd.attr("role", "off");
        cmd.parent("li").attr("role", "off");
        listitemtools(area);

    });

    // SELECTED TOOLs
    function listitemtools(w)
    {
        var area = w,
        modal = area.parents("#modal-verif-tools");

        var list = [];
        area.find("ul li[role='on'][aria-role='']").each(function(){
            list.push($(this).attr('dataid'));
        });

        var val = list.length;

        if( val > 0 )
        {
            area.find("button.btn").removeAttr("disabled");
            modal.find("*[name='listitem']").val(list);
            modal.find("*[name='listitemarr']").val(JSON.stringify(list));
            return;
        }

        modal.find("*[name='listitem']").val('');
        modal.find("*[name='listitemarr']").val('');
        area.find("button.btn").attr("disabled","disabled");
    }

    // CMD KEEP SELECTED LIST IN MODAL TOOLS
    $("#modal-verif-tools").on("click", "button.cmd-keep-selected-list", function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        area = cmd.parents(".area-modal-in"),
        modal = cmd.parents("#modal-verif-tools"),
        form = modal.find("form");

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            area.find("a.close-inmodal").click();

            var $URL = config.apps.URL_API + '/api/marketing/pengajuan/tools/add';
            var $t = FormSending(form,"POST","key","form",$URL);
            // FormSending(form,"POST","key","form",$URL);

            $t.success(function(n)
            {
                console.log(n);
                getlistitemtools(modal);
            });
            $t.error(function(n)
            {
                console.log(n);
            });
        }
    });

    function getlistitemtools(w)
    {
        var modal = w;
        var $URL = config.apps.URL_API + '/api/marketing/pengajuan/tools/list?poid=' + modal.find('*[name="project_id"]').val();
        var $t = FormSending("","GET","key","",$URL);
        $t.success(function(n)
        {
            var rsp = n.response;
            tablelistitemtools(modal,rsp);
            console.log(n);
        });
        $t.error(function(n)
        {
            console.log(n);
        });
    }

    //DELETE LIST TOOLS IN MODAL
    $("body").on("click", "#modal-verif-tools button.cmd-del-list-inmodal", function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        modal = cmd.parents("#modal-verif-tools");

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            $.ajax({
                type: "POST",
                url: config.apps.URL_API + '/api/marketing/pengajuan/tools/delete',
                headers: {
                    "Content-Type": "application/json",
                    "key": getaccount().key
                },
                cache: false,
                timeout: 18000,
                data: JSON.stringify({
                    'id': cmd.attr("dataid") 
                }),
                dataType: 'JSON',
                success:function(n)
                {
                    console.log(n);
                    tablelistitemtools(modal,n.response);
                },
                error:function(n)
                {
                    console.log(n);
                }
            })
            cmd.attr("role", "off");
        }
    });


    //VERIFICATION TOOLS
    $("#modal-verif-tools button.submit").click(function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        modal = cmd.parents("#modal-verif-tools"),
        form = cmd.parents("form");

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");

            //
            if( form.find('*[name="listitemstatus"]').val() === 'false')
            {
                cmd.attr("role", "off");
                flagnotif("error", "Error! Harap pilih Alat Opersional terlebih dulu");
                return;
            }

            var $URL = config.apps.URL_API + form.attr("action");
            var $t = FormSending(form,"POST","key","form",$URL);
            $t.success(function(n)
            {
                console.log(n);
                modal.find("a.close").click();
                loadtablepo();
                getNotification()
                flagnotif("success", n.message);
            });
            $t.error(function(n)
            {
                console.log(n);
                var rsp = n.responseJSON;
                // modal.find("a.close").click();
                flagnotif("error", rsp.message);
            })
            
        }
    });


    async function loadtablepo()
    {
        var url = document.URL,
        url = url.replace("#", ""),
        xurl = config.apps.URL + '/dashboard/marketing/pengajuan' ;
        if( url === xurl)
        {
            var form = $("body").find("#form-table");
            exeTable(form);
        }

    }

    

    // function confFOpenNotif()
    // {
    //     $("body").find("form#form-open-notif input[name='id']").val(getaccount().id);
    //     $("body").find("form#form-open-notif input[name='level']").val(getaccount().level);
    //     $("body").find("form#form-open-notif input[name='slevel']").val(getaccount().sublevel);
    //     $("body").find("form#form-open-notif input[name='compid']").val(getaccount().config.company_id);
    // }

    // // confFOpenNotif();

    $("a.cmd-open-notif").click(function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        area = cmd.parent(".dropdown");

        if( cmd.attr("role") === "off" )
        {
            cmd.attr("role", "on");
            area.attr("aria-togle", "true");
            return;
            // openNotif();
        }
        
        cmd.attr("role", "off");
        area.attr("aria-togle", "false");

    });
    return false;
})
</script>