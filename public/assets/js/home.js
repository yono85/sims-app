infologin( getCookie(config.apps.cookie_name) );

// console.log(getaccount());

function logoutNew(e)
{
    var cmd = e;
    
    if( cmd.attr('role') === 'off')
    {
        cmd.attr('role', 'on');

        var token = cmd.attr('href').split("token=");

        // console.log(token[1]);
        $.ajax({
            type: 'POST',
            url:  config.apps.URL_API + '/api/logout',
            timeout: 18000,
            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + token[1]
            },
            data: JSON.stringify({"token":token[1]}),
            dataType: 'JSON',
            success: function(e,n,r)
            {

                if( r.status === 200)
                {
                    deleteCookies();
                    location.href = config.apps.URL + e.response.redirect;
                }

                // console.log(e);
            },
            error: function(e)
            {
                // console.log(e.responseJSON.response.redirect + ' in error');
                deleteCookies();
                location.href = config.apps.URL + e.responseJSON.response.redirect;
            }
        });

    }
}

var lockmenu = false;
$('body').on('click', '.cmd-getmenu', function(e)
{
    e.preventDefault();
    e.stopPropagation();
    var cmd = $(this);
    if( cmd.attr('aria-disabled') === 'false' && cmd.attr('role') === 'off' && lockmenu === false)
    {
        lockmenu = true;
        $('body').find('.cmd-getmenu').attr('role', 'off');
        cmd.attr('role','on');
        
            setTimeout(function()
            {

                if( cmd.attr('href') !== '#')
                {

                    lockmenu = false;
                    cmd.attr('role','off');
                    location.href = cmd.attr('href');
                    return;
                }

                //call function
                eval(cmd.attr('modal') + "(cmd)");

            },500);
    } 
});


// ABSENSI

//show absen
var timerAbsen = 0,
timeLegal = 0;
function callAbsen(e)
{
    $('body').find('.modal-new-view').remove();

    var elmodal = $('body').find('.comonent-modal-main .content-modal[data-modal="menuAbsensi"]').html();
    

    var $URL = config.apps.URL_API + '/api/home/absen/getabsen';
    var $t = FormSending("","GET","key","",$URL);
    $t.success(function(n)
    {
        // console.log(n);

        var rsp = n.response;

        var modalin = elmodal.replace('{DayName}', rsp.DayName);
        modalin = modalin.replace('{time}', rsp.Date);
        modalin = modalin.replace('{timeIn}', (rsp.timeIn === '' ? '' : rsp.timeIn));
        modalin = modalin.replace('{timeOut}', (rsp.timeOut === '' ? '' : rsp.timeOut));

        modalin = modalin.replace('disabledin', (rsp.cekin === 'on' ? '' : 'disabled="disabled"'));
        modalin = modalin.replace('disabledout', (rsp.cekout === 'on' ? '' : 'disabled="disabled"'));

        
        timerAbsen = parseFloat(rsp.Date + '000');
        timeLegal = parseFloat(rsp.Date);


        var modal = '<div class="prover-modal-view modal-new-view white">';
        modal += modalin;
        modal += '</div>';

        $('body').append(modal);

        exeRunTimer();
        //config default
        lockmenu = false;
        e.attr('role','off');
    });
    $t.error(function(n)
    {
        console.log(n.responseJSON);
        //config default
        lockmenu = false;
        e.attr('role','off');
    });
    
}

// close absen
$('body').on('click', '.modal-new-view .area-absen a.close', function(e)
{
    closeAbsen($(this),e);
});

function closeAbsen(w,e)
{
    e.preventDefault();
    if(w.attr('role') === 'off' && w.attr('role') === 'modal')
    {

        w.parents('.modal-new-view').remove();
        stopTimerAbsen();
        return;
    }

    w.attr('role', 'on');
    w.parents('.modal-absen').attr('role', 'false');
    setTimeout(function()
    {
        w.parents('.modal-new-view').remove();
    },300);
    
    stopTimerAbsen();

}


$('body').on('click', '.area-absen button.btn', function(e)
{
    e.preventDefault();
    checkingAbsen($(this));
});

function checkingAbsen(e)
{
    var button = e,
    area = button.parents('.area-absen');

    // console.log('oke');
    if( button.attr('role') === 'off')
    {
        button.attr('role', 'on');

        // button.parents('.area-absen').attr('aria-role', 'true');
        
        // console.log(getaccount());

        $.ajax({
            type: "GET",
            url: '/home/scaner/wiget?type='+button.attr('dataid'),
            cache:false,
            timeout:18000,
            // dataType:"JSON",
            success: function(n)
            {
                button.parents('.area-absen').find('.media-screen').html(n);
                area.find('input[name="type"]').val(button.attr('dataid'));
                area.find('input[name="employe_id"]').val(getaccount().employe.id);
                button.parents('.area-absen').attr('aria-role', 'true');
                area.find('.area-screen').attr('aria-role', 'false');
                // console.log(n);
            },
            error: function(n)
            {
                console.log(n);
            }
        });
        
        
    }

}


function sendAbsensi()
{
    var area = $('body').find('.area-absen');
    area.find('.area-screen').attr('aria-role', 'true');
}

// timer
function runTimer()
{

    var time = timerAbsen + 1000;
    timerAbsen = time;
    timeLegal = timeLegal + 1;
    
    
    var toDay = new Date(timerAbsen);
    
    var h = toDay.getHours(),
    m = toDay.getMinutes(),
    s = toDay.getSeconds();


    h = h < 10 ? ('0'+ h) : h;
    m = m < 10 ? ('0' + m) : m;
    s = s < 10 ? ('0' + s) : s;

    $('body').find('.labelTimer').html(h +':' + m +':' + s);
    $('body').find('.modal-new-view #form-absensi input[name="time"]').val(timeLegal);

    // console.log(timeLegal);
}

function exeRunTimer()
{
    setcountDown = setInterval(runTimer, 1000);
}

function stopTimerAbsen()
{
    clearTimeout(setcountDown);
}

function sendAttendance(n,r)
{
    var dt = n,
    scaner = r;

    area = $('body').find('.prover-modal-view .area-absen'),
    form = area.find('form');

    area.find('input[name="location"]').val(dt);
    stopTimerAbsen();
    area.find('.area-screen').attr('aria-role','true');

    //
    var $URL = config.apps.URL_API + '/api/home/absen/sendAttendance';
    var $t = FormSending(form,"POST","key","form",$URL);
    $t.success(function(n)
    {
        // console.log(n);
        var rsp = n.response;
        var msg = '<div class="div msg">';
            msg += '<a href="#" class="close" role="off" aria-role="modal"><span class="fa flaticon2-cross"></span></a>';
            
            msg += '<div class="div"><span class="ic sli_icon-check"></span></div>';
            
            msg += '<div class="div ttl"><b>'+n.message+'</b></div>';
            
            msg += '<div class="div" style="margin-top:40px"></div>';
            msg += '<div class="div"><span class="label"><span class="sli_icon-clock"></span> </span> '+rsp.time+'</div>';
            
            msg += '<div class="div"><span class="label"><span class="sli_icon-pointer"></span> </span> '+rsp.name+'</div>';
            msg += '</div>';
            area.find('.media-screen-loading .divH').html(msg);
        //
        $('#calendar').fullCalendar( 'refetchEvents' );
        scaner.clear();
    });
    $t.error(function(n)
    {
        
        var rsp = n.responseJSON;
        console.log(rsp.message);
        scaner.clear();
        stopTimerAbsen();
        $('body').find('.modal-new-view').remove();
        flagnotif('error',rsp.message);
        // alert('Error');
    });
}

// END ATTENDANCE


function showDdwnHd(e,w)
{
    // e.preventDefault();
    e.stopPropagation();
    var cmd = w;

    if(cmd.attr('role') === 'off')
    {
        $('body').find('.cmd-ddwn-hd[role="on"]').click();
        cmd.attr('role','on');
        cmd.parent('div').addClass('open');
        if( cmd.attr('data-type') !== '')
        {
            $('body').find('.overlay-screen').remove();
            $('body').append('<div class="overlay-screen blk keep"></div>');
            cmd.parent('div').removeClass('overlay-fix');
            cmd.parent('div').addClass('overlay-fix');
        }
    }
    else
    {
        cmd.attr('role','off');
        cmd.parent('div').removeClass('open');
        if( cmd.attr('data-type') !== '')
        {
            $('body').find('.overlay-screen').remove();
            cmd.parent('div').removeClass('overlay-fix');
        }
    }

    return false;
}


var confSrcHdForm = {
    'text'      :   '',
    'status'    :   'false',
    'timer'     :   1000
}

function srcHdForm(w)
{

    var text = w,
    area = text.parent('div'),
    form = text.parents('form'),
    txt = text.val();

    if( $.trim(txt).length >= 3 && confSrcHdForm.text !== txt )
    {
        confSrcHdForm.text = txt;
        form.find('input[name="paging"]').val('1');
        form.find('button.submit').click();
        area.find('a.cls').removeClass('hide');
    }

    return false;
}

function clsHdForm(e,w)
{
    e.preventDefault();
    var cmd = w,
    area = cmd.parent('div'),
    form = cmd.parents('form');

    if( cmd.attr('role') === 'off')
    {
        cmd.attr('role', 'on');
        cmd.addClass('hide');
        confSrcHdForm.text = '';
        area.find('input').val('');
        form.find('button.submit').click();
        cmd.attr('role', 'off');
        area.find('input').focus();
    }
}

// format rupiah keyup
$('body').on('keyup', '.rupiahkeyup', function(e)
{

    var num = $.trim($(this).val());
    var sb = num.slice(0,1);
    
    if( sb === '0')
    {
       var x = num.substring(1);
       this.value = x;
    }

    // this.value = num;
    this.value = formatRupiahKeyup(this.value);
});

$(document).ready(function()
{

    $('body').on('keydown', '.keyDownFalse', function(e)
    {
        return false;
    });


    //close alert
    $('body').on('click', '.alert button.close', function(e)
    {
        $(this).parents('.alert').remove();
    });

    //
    $('body').on('keydown', '.inputFalseAll', function(e)
    {
        return false;
    });

    $('body').submit('form', function(e)
    {
        return false;
    });
    
    return false;
});




// DOCUMENT CLICK
$(document).click(function()
{

    // $('body').on('click', '.keep', function(e)
    // {
    //     e.stopPropagation();
    // });

    // $('body').find('.cmd-ddwn-hd[role="on"]').attr('role','off');
    // $('body').find('.oarea-ddwn-hd.open').removeClass('open');
    // $('.body').on('click', '.keep', function(e)
    // {
    //     e.stopPropagation();
    // });

    // $('body').find('.cmd-ddwn-hd[role="on"]').click();

    $('body').find('.prover-modal-view[data-modal="close"]').remove();

    

});
