<ul>
    <li class="fl-left">
        <a href="/home" class="logo"><img src="{{$apps['favicon']}}" alt="" class="img-ico"></a>
        <a href="#" class="ddw cmd-modal-header hide" data-modal="modalDdwChildMenu">
            <div class="divH">
                <div class="tbl">
                    <div class="intbl">
                        <div class="div">
                            <span class="ic fa flaticon2-right-arrow rotate90"></span>
                            <span class="lbl-name">Label Name</span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </li>
    <li class="fl-right area-hd-notif">
        <a href="" class="mn bell-animate cmd-vslide-notif" role="off" aria-status="false" data-modal="modalSlideNotif">
            <div class="tbl">
                <div class="intbl">
                    <div class="div">
                        <span class="sli_icon-bell bell-animate-icon icon"></span>
                    </div>
                </div>
            </div>
            <div class="val-notif-label area-count-notif">
                <div class="in-val">
                    <div class="tbl">
                        <div class="intbl">
                            <span class="totalnotif">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="" class="mn acnt cmd-modal-header" data-modal="modalDdwAccount">
            <img src="/assets/images/anonim.jPG" alt="" class="" id="account-image">
        </a>
    </li>
</ul>


<!-- COMPONENT MODAL -->
<div class="div component-modal-header comonent-modal-main hide" >

    <!-- modal DDw Account -->
    <div class="div content-modal" data-modal="modalDdwAccount">
        <div class="prover-modal-box" >
            <div class="prover-modal-box-in">
                <div class="up-arrow r"></div>
                <div class="ar-list">
                    <a href="#" class="list">
                        <div class="inlist">
                            <div class="l-nm">
                                Pengaturan Akun
                            </div>
                            <div class="l-icon">
                                <svg style="width: 100%; height: 100% ">
                                    <use xlink:href="/assets/svg/icon-config.svg#gear"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list">
                        <div class="inlist">
                            <div class="l-nm">
                                Bantuan
                            </div>
                            <div class="l-icon">
                                <svg style="width: 100%; height: 100% ">
                                    <use xlink:href="/assets/svg/icon-config.svg#help"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list" id="account-logout" role="off">
                        <div class="inlist">
                            <div class="l-nm">
                                Keluar
                            </div>
                            <div class="l-icon">
                                <svg style="width: 100%; height: 100% ">
                                    <use xlink:href="/assets/svg/icon-config.svg#lock"></use>
                                </svg>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class="div content-modal" data-modal="modalSlideNotif">
        <div class="prover-modal-box sld-lr leftTOright w330" data-modal="modal-slide" role="true">
                <div class="prover-modal-box-inar">
                    <div class="box-head">
                        <a href="#" class="close" role="off">
                            <div class="tbl">
                                <div class="intbl">
                                    <span class="fa flaticon2-left-arrow-1"></span>
                                </div>
                            </div>
                        </a>
                        <div class="tbl">
                            <div class="intbl">
                                <div class="div">
                                    <h2 class="title">
                                        <span class="sli_icon-bell"></span>
                                        <span>Pemberitahuan</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="loading-incontent w38 txt-center white" aria-role="false"></div>
                        <div class="inar-x notif-slide">
                            <ul>

                                <!-- <li>
                                    <a href="/home/notification?q=token" role="off">
                                        <div class="div clr-float">
                                            <div class="fl">
                                                <div class="arimg">
                                                    <img src="/assets/images/anonim.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="fr">
                                                <div class="div content">
                                                    <b>Yono</b> mengajukan verifikasi Task: Mengerjakan formula untuk magastrol...
                                                </div>
                                                <div class="div">
                                                    <span class="datetime">
                                                        <span class="sli_icon-clock"></span>
                                                        <span>12j lalu</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li> -->
                                
                                <!-- <li>
                                    <a href="/home/notification?q=token" role="off">
                                        <div class="div clr-float">
                                            <div class="fl">
                                                <div class="arimg">
                                                <img src="/assets/images/anonim.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="fr">
                                                <div class="div content">
                                                    <b>Yono</b> memverifikasi task Anda: Membuat formula untuk...
                                                </div>
                                                <div class="div">
                                                    <span class="datetime">
                                                        <span class="sli_icon-clock"></span>
                                                        <span>12j lalu</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li> -->

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="div content-modal" data-modal="menuChild">
        <ul></ul>
    </div>

    <!-- EL ABSENSI -->
    <div class="div content-modal" data-modal="menuAbsensi">
        <div class="ar-modal-rel">
            <div class="ar-modal-absen area-absen overflow-xyH" aria-role="false">

                <div class="ar-absen-screen area-screen" aria-role="true">
                    <div class="iner">

                        <div class="media-screen">
                            <!-- media screen -->
                        </div>

                        <div class="media-alert">
                            <div class="arin">
                                <div class="media-screen-loading">
                                    <div class="divH">

                                        <div class="div msg hide">
                                            <a href="#" class="close" role="off" aria-role="modal">
                                                <span class="fa flaticon2-cross"></span>
                                            </a>
                                            <div class="div">
                                                <span class="ic sli_icon-check"></span>
                                            </div>
                                            <div class="div ttl"><b>Absen Masuk Berhasil</b></div>
                                            <div class="div"><span class="label"><span class="sli_icon-clock"></span> Waktu:</span> <b>12:00:01</b></div>
                                            <div class="div"><span class="label"><span class="sli_icon-pointer"></span> Lokasi:</span> <b>Kantor Markom</b></div>
                                        </div>

                                        <img src="/assets/svg/icon-leaf-green.svg" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-BotToTop modal-absen txt-center" role="true">
                    <div class="div">
                        <a href="#" class="close" role="off" aria-role="child">
                            <span class="fa flaticon2-cross"></span>
                        </a>
                        <div class="div title">
                            <div class="div">
                                <span class="sli_icon-calendar"></span>
                                <span>Absen</span>
                            </div>
                            <div class="div lbl-second">
                                <b>{DayName}</b>
                            </div>
                            <div class="div time hide">
                                <span class="sli_icon-calendar"></span>
                                <span>DAY,</span>
                                <span class="labelTimer">00:00:00</span>
                            </div>
                        </div>
                        <div class="div body">
                            <form id="form-absensi" action="/api/home/absen/setabsen">
                                <div class="div">
                                    <button role="off" aria="false" class="cmd-checkin btn in is-loading" dataid="1" disabledin>
                                        <span class="ics fa flaticon2-check-mark"></span>
                                        <span>
                                            <span>DATANG</span><span class="label">{timeIn}</span>
                                        </span>
                                        <span class="ic fa flaticon-logout rotate180"></span>
                                    </button>
                                </div>
                                <div class="div">
                                    <button role="off" aria="false" class="cmd-checkout btn out is-loading" dataid="2"  disabledout>
                                        <span class="ics fa flaticon2-check-mark"></span>
                                        <span>
                                            <span>PULANG</span><span class="label">{timeOut}</span>
                                        </span>
                                        <span class="ic fa flaticon-logout"></span>
                                    </button>
                                </div>

                                <input type="hidden" name="employe_id" value="">
                                <input type="hidden" name="time" value="{time}">
                                <input type="hidden" name="type" value="">
                                <input type="hidden" name="location" value="" />
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="div content-modal" data-modal="menuOpenDateAbsen">
        <div class="ar-modal-rel">
            <div class="ar-modal-absen area-absen-detail overflow-xyH" aria-role="false">

                <div class="modal-BotToTop modal-absen txt-center" role="true">
                    <div class="div">
                        <a href="#" class="close" role="off" aria-role="child">
                            <span class="fa flaticon2-cross"></span>
                        </a>
                        <div class="div title">
                            <div class="div">
                            <span class="sli_icon-calendar"></span>
                                <span>Update Absen</span>
                            </div>
                        </div>
                        <div class="div body">
                            <form id="form-update-absensi" enctype="multipart/form-data"  action="/api/home/absen/setinfo" >

                                <div class="div ar-field tx-l">
                                    <div class="div clr-float">
                                        <div class="fl-left">
                                            <span class="label">Tanggal:</span>
                                        </div>
                                        <div class="fl-right txt-right">
                                            <span>{DayName}</span>
                                        </div>
                                    </div>
                                    <div class="div btsfld br"></div>
                                    <div class="div in">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <span class="label">Datang:</span>
                                            </div>
                                            <div class="fl-right txt-right">
                                                <span class="tx">{TimeIn}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div out">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <span class="label">Pulang:</span>
                                            </div>
                                            <div class="fl-right txt-right">
                                                <span class="tx">{TimeOut}</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="div btsfld br"></div>

                                    <div class="div">
                                        <div class="div">
                                            <span class="label">Status:</span>
                                        </div>
                                        <div class="div ar-field">
                                            <select name="status" class="br-rds8">
                                                <option value="1">Ijin</option>
                                                <option value="2">Sakit</option>
                                                <option value="3">Cuti</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="div">
        
                                        <div class="ar-file area-file" role="false" aria-upload="false">

                                            <div class="div btsfld"></div>
                                            <div class="div area-img-upload box-img-upload ar-field" role="true" >

                                                <a href="#" role="off" class="btn-selected cmd-img-upload" aria-role="true" >
                                                    <div class="div">
                                                        <div class="div">
                                                            <span class="ic fa flaticon-attachment"></span>
                                                            <span>Lampirkan bukti</span>
                                                        </div>
                                                        <div class="div label lbl-name">
                                                            <span class="label-upload"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <input type="file" name="file" value="" accept="image/*" class="hide">
                                            </div>

                                        </div>

                                    </div>

                                    <div class="div btsfld"></div>

                                    <div class="div">
                                        <div class="div">
                                            <div class="label">Keterangan:</div>
                                        </div>
                                        <div class="div ar-field">
                                            <textarea class="br-rds8" name="detail"></textarea>
                                        </div>
                                    </div>

                                    <div class="div btsfld br"></div>

                                </div>

                                

                                <div class="div">
                                    <button role="off" aria="false" class="cmd-submit btn in is-loading" dataid="1" >
                                        <span class="ics fa flaticon2-check-mark"></span>
                                        <span>
                                            <span>SIMPAN</span>
                                        </span>
                                        <span class="ic sli_icon-check"></span>
                                    </button>
                                </div>

                                <input type="hidden" name="user_id" value="">
                                <input type="hidden" name="employe_id" value="">
                                <input type="hidden" name="cekfile" value="">
                                <input type="hidden" name="att_id" value="">
                                <input type="hidden" name="date" value="">
                                
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="div content-modal" data-modal="viewSingleAbsen">
        <div class="ar-modal-rel overflow-yA">
            <div class="modal-home modal-view-absen">

                <div class="insed-body h-full pdtb20">

                    <div class="arinsed mdl-partner pd-lr-40">

                        <div class="div header-box">
                            <b>Absensi</b>
                            <a href="#" class="close afalse" role="off">
                                <span class="fa flaticon2-cross"></span>
                            </a>
                        </div>
                            <ul class="artable">

                                <li class="list pd-b0"  style="padding-bottom:0px !important">
                                    <div class="div">
                                        <table class="w100p">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="div clr-float">
                                                            <div class="fl-left">
                                                                <div class="fl-left">
                                                                    <div class="img-prof"></div>
                                                                </div>
                                                                <div class="fl-left">
                                                                    <div class="inf-prof">
                                                                        <div class="div"><b>{name}</b></div>
                                                                        <div class="div label">{group}</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="fl-right txt-right">
                                                                <div class="div">
                                                                    <span>{month}</span>
                                                                </div>
                                                                <div class="div">
                                                                    <span class="label">Bulan</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="div bts-br mg-b0"></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>

                                <li class="list" style="padding-bottom:0px !important">
                                    <div class="div">
                                        <table class="w100p">
                                            

                                            <tr>
                                                <td>
                                                    <div class="div pd-t25">
                                                        <div class="div clr-float txt-center fsize12">
                                                            <div class="col-tgl dis-inl-block w-calc7">
                                                                <div class="div fsize10 label">TOTAL JAM</div>
                                                                <div class="div">{total_time}</div>
                                                            </div>
                                                            <div class="col-tgl dis-inl-block w-calc7">
                                                                <div class="div fsize10 label">SAKIT</div>
                                                                <div class="div">{sakit}</div>
                                                            </div>
                                                            <div class="col-tgl dis-inl-block w-calc7">
                                                                <div class="div fsize10 label">IJIN</div>
                                                                <div class="div">{ijin}</div>
                                                            </div>
                                                            <div class="col-tgl dis-inl-block w-calc7">
                                                                <div class="div fsize10 label">CUTI</div>
                                                                <div class="div">{cuti}</div>
                                                            </div>
                                                            <div class="col-tgl dis-inl-block w-calc7">
                                                                <div class="div fsize10 label">LUPA ABSEN</div>
                                                                <div class="div">{la}</div>
                                                            </div>
                                                            <div class="col-tgl dis-inl-block w-calc7">
                                                                <div class="div fsize10 label">LA DATANG</div>
                                                                <div class="div">{lad}</div>
                                                            </div>
                                                            <div class="col-tgl dis-inl-block w-calc7">
                                                                <div class="div fsize10 label">LA PULANG</div>
                                                                <div class="div">{lap}</div>
                                                            </div>
                                                            <div class="col-tgl dis-inl-block w-calc7 hide">
                                                                <div class="div fsize10 label">TOTAL TELAT</div>
                                                                <div class="div">{total_late}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td >
                                                    <div class="div bts-br"></div>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                </li>

                                <li class="list">
                                    {listcalendar}
                                </li>

                            </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<style>
    body{
        padding:0px;
        margin:0px;
    }
    #qr-reader{
        width:100% !important;
    }
    #qr-reader__scan_region{
        width:100%;
        height:100%;
    }
    a#qr-reader__dashboard_section_swaplink{
        display:none;
    }
</style>

<script src="{{$URI}}/assets/js/dashboard/notifications.js" type="text/javascript"></script>

<script>

function callGETmenu()
{

    var $URL = config.apps.URL_API + '/api/home/menu?id=' + getaccount().employe.id;
    var $t = FormSending("","GET","key","",$URL);
    $t.success(function(data)
    {
        var li = '';
        $.each(data.response, function(i, item)
        {
            li += '<li>';
            $.each(item.menu, function(x,y)
            {
                li += '<a href="'+(y.disabled !== 'true' ? y.url : '#')+'" class="cmd-getmenu" modal="'+y.modal+'" role="off" aria-disabled="'+(y.disabled)+'"><div class="iabox"><div class="inarbox">';
                    li += '<div class="upbox"><div class="chld"><div class="inarx txt-center">';
                    li += y.image === '' ? '<div class="splt-up">'+y.incontent.top+'</div><div class="splt-btm">'+y.incontent.bottom+'</div>' : '<img src="'+y.image+'" alt="'+y.title+'">';
                    li += '</div></div></div>';
                    li += '<div class="btmbox"><div class="div">'+y.title+'</div></div>';
                li += '</div></div></a>';
            });
            li += '</li>';
        });
        
        $('body').find('.ar-content .boxid ul').html(li);
        $('body').find('.content-modal[data-modal="menuChild"] ul').html(li);
        
        
    });
    $t.error(function(data)
    {
        console.log(data);
    });
}

callGETmenu();

$(document).ready(function()
{
    $('body').on('click', '.cmd-modal-header[data-modal="modalDdwAccount"]', function(e)
    {
        e.preventDefault();
        e.stopPropagation();

        $('body').find('.prover-modal-view').remove();
        var modal = modalAccount($(this));
        $('body').append(modal);
    });

    $('body').on('click', '.cmd-modal-header[data-modal="modalDdwChildMenu"]', function(e)
    {
        e.preventDefault();
        e.stopPropagation();

        $('body').find('.prover-modal-view').remove();
        var modal = modalMenuChild($(this));
        $('body').append(modal);
    });


    function modalMenuChild(e)
    {

        var leftPst = e.position().left + 15;
        var topPst = e.parents('.header').innerHeight();

        var modal = '<div class="prover-modal-view" data-modal="close"><div class="prover-modal-box mn-child keep-modal-view" style="top:'+topPst+'px; left:10px"><div class="prover-modal-box-in">';

            modal += '<div class="up-arrow" style="left:'+leftPst+'px"></div>';

            modal += '<div class="ar-list"><div class="boxid mn"><div class="ar-ctn"><div class="div clr-float">';

                modal += '<ul>';
                modal += $('body').find('.content-modal[data-modal="menuChild"] ul').html();
                modal += '</ul>';

            modal += '</div></div></div></div>';

            modal += '</div></div></div>';

        return modal;
    }

    function modalAccount(e)
    {

        var leftPst = $(document).innerWidth() - (240 + 10);//e.position().left - 240 + ( e.innerWidth() * 3) - 10;
        var topPst = e.parents('.header').innerHeight();

        var modal = '<div class="prover-modal-view" data-modal="close"><div class="prover-modal-box w240" style="top:'+topPst+'px;left:'+leftPst+'px"><div class="prover-modal-box-in"><div class="up-arrow r"></div><div class="ar-list">';
        
            modal += $('body').find('.content-modal[data-modal="modalDdwAccount"] .ar-list').html();

            // modal += '<a href="#" class="list"><div class="inlist"><div class="l-nm">Pengaturan Akun</div><div class="l-icon"><svg style="width: 100%; height: 100% "><use xlink:href="/assets/svg/icon-config.svg#gear"></use></svg></div></div></a>';

            // modal += '<a href="#" class="list"><div class="inlist"><div class="l-nm">Bantuan</div><div class="l-icon"><svg style="width: 100%; height: 100% "><use xlink:href="/assets/svg/icon-config.svg#help"></use></svg></div></div></a>';

            // modal += '<a href="#" class="list"><div class="inlist"><div class="l-nm">Keluar</div><div class="l-icon"><svg style="width: 100%; height: 100% "><use xlink:href="/assets/svg/icon-config.svg#lock"></use></svg></div></div></a>';

        modal += '</div></div></div></div>';

        return modal;

    }


    //cmd slide
    $('.cmd-vslide-notif').click(function(e)
    {
        e.preventDefault();
        if($(this).attr('role') === 'off')
        {
            $(this).attr('role', 'on');
            $('body').find('#preview-notification').remove();

            var modal = '<div class="prover-modal-view modal-new-view white" id="preview-notification">';
            modal += $('body').find('.content-modal[data-modal="'+$(this).attr('data-modal')+'"]').html();
            modal += '</div>';
            $('body').append(modal);

            //
            // if( countNotif > 0)
            // {
                getListNotif();
            // }
            //
            $(this).attr('role','off');
        }
    });

    //CMD READ NOTIF
    $("body").on("click", ".cmd-readNotif", function(e)
    {
        e.preventDefault();
        readNotif($(this));
    });


    // CLOSE MODAL
    $('body').on('click', '.prover-modal-box[data-modal="modal-slide"] a.close', function(e)
    {
        CloseModalSlide($(this),e);

    });



    $('body').on('click', '#account-logout', function(e)
    {
        e.preventDefault();
        e.stopPropagation();
        
        logoutNew($(this));
    })

    return false;
});
</script>