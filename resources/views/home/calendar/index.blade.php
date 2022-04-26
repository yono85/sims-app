@extends('home.index')

@section('content')
<link rel="stylesheet" href="{{$apps['URI']}}/assets/package/fullcalendar/css/fullcalendar.css" />

<div class="container-home w1024p">
    <!-- main calendar -->
    <div class="main-calendar">
        <div class="inar-calendar">
            <div id="calendar"></div>
        </div>
    </div>

    <!-- <div class="ar-calendar">
        <div class="ar-calendar-in">
            <div class="inar-calendar clr-float">
                <div id="calendar"></div>
            </div>
        </div>
    </div> -->
</div>

<link rel="stylesheet" href="{{$apps['URI']}}/assets/css/calendar.css" />

@endsection

@section('script')

<script src="{{$apps['URI']}}/assets/package/fullcalendar/js/moment.min.js"></script>
<script src="{{$apps['URI']}}/assets/package/fullcalendar/js/fullcalendar.min.js"></script>

<script>
$(document).ready(function()
{

    $('body').find('.header li.fl-left .cmd-modal-header .lbl-name').html('Kalender');

    $('body').find('.header li.fl-left .cmd-modal-header').removeClass('hide');


    function callCalendar()
    {

        $('#calendar').fullCalendar(
        {
            timeZone: 'Asia/Jakarta',
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events: config.apps.URL_API + '/api/home/absen/view?q='+getaccount().employe.id,
            dayNamesShort: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
            monthNames: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember'],
            dayClick: function(date, jsEvent, view)
            {
                openDate(date.format());
            },
            eventClick: function(event)
            {
                openDate(event.date);
            },
            eventRender: function(event, element) 
            {
                // console.log(event);
                element.css('background-color', event.type);
            }
    
        });
    }

    callCalendar();

    var confOpenDate = {
        status: false
    }
    function openDate(e)
    {
        var content = $('body').find('.comonent-modal-main .content-modal[data-modal="menuOpenDateAbsen"]');
        var date = e;
        if( confOpenDate.status === false)
        {
            confOpenDate.status = true;
            
            var td = $('body').find('td.fc-widget-content[data-date="'+e+'"]'),
            tdtop = $('body').find('td.fc-day-top[data-date="'+e+'"]'),
            tdw = td.innerWidth(),
            tdh = td.innerHeight(),
            el = '<div class="td-arload" style="height:'+tdh+'px"></div>';
            
            tdtop.append(el);


            var $URL = config.apps.URL_API + '/api/home/absen/infodate?id=' + getaccount().employe.id + '&date=' + e;

            var $t = FormSending("","GET","key","",$URL);
            $t.success(function(n)
            {
                
                var rsp = n.response;
                // console.log(rsp);
                //
                $('body').find('.modal-new-view').remove();

                content.find('input[name="user_id"]').val(getaccount().id);
                content.find('input[name="employe_id"]').val(getaccount().employe.id);
                content.find('textarea[name="detail"]').html(rsp.note);
                content.find('input[name="att_id"]').val(rsp.att_id);
                content.find('input[name="date"]').val(date);

            
                //
                var selStatus = $('body').find('.comonent-modal-main .content-modal[data-modal="menuOpenDateAbsen"] select[name="status"]');

                selectStatus(rsp.status,selStatus,rsp.selectStatus);
                
                if( rsp.disabled === 'true')
                {
                    content.find('select').attr('disabled','disabled');
                    content.find('textarea').attr('disabled','disabled');
                    content.find('button.cmd-submit').attr('disabled','disabled');
                }
                else
                {
                    content.find('select').removeAttr('disabled');
                    content.find('textarea').removeAttr('disabled');
                    content.find('button.cmd-submit').removeAttr('disabled');
                }

                //
                if( rsp.file !== '')
                {
                    content.find('a.cmd-img-upload').attr('aria-role','false');
                    content.find('.label-upload').html(rsp.file);
                    content.find('.area-file').attr('role','true');
                }
                else
                {
                    content.find('a.cmd-img-upload').attr('aria-role','true');
                    content.find('.label-upload').html('');
                    content.find('.area-file').attr('role','false');
                }

                var elmodal = $('body').find('.comonent-modal-main .content-modal[data-modal="menuOpenDateAbsen"]').html();

                var modalin = elmodal.replace('{DayName}', rsp.days);
                modalin = modalin.replace('{TimeIn}', (rsp.TimeIn === 0 ?'--' : rsp.TimeIn));
                modalin = modalin.replace('{TimeOut}', (rsp.TimeOut === 0 ?'--' : rsp.TimeOut));


                var modal = '<div class="prover-modal-view modal-new-view white">';
                modal += modalin;
                modal += '</div>';

                $('body').append(modal);
                confOpenDate.status = false;
                $('body').find('.td-arload').remove();

            });
            $t.error(function(n)
            {
                // console.log(n);
                confOpenDate.status = false;
                $('body').find('.td-arload').remove();
                flagnotif('error',n.responseJSON.message);
            });
            
        }
    }

    function selectStatus(e,a,w)
    {
        var area = a,
        value = e,
        dt = w;

        var li = '<option value="0">Pilih</option>';
        $.each(dt, function(i,item)
        {
            li += '<option value="'+item.id+'" ';
            li += value === item.id ? 'selected' : '';
            li += '>'+item.name+'</option>';
        })
        area.html(li);

    }

    //
    $('body').on('change', '.modal-new-view .area-absen-detail select[name="status"]', function(e)
    {
        var select = $(this),
        area = select.parents('.area-absen-detail');

        if( select.val() > 0)
        {
            clearErrorField($(this));
        }

        // 
        if (select.val() === '1' || select.val() === '2' || select.val() === '3')
        {
            area.find('.area-file').attr('role', 'true');
            
            return;
        }
        
        area.find('.label-upload').html('');
        area.find('input[name="file"]').val('');
        area.find('.area-file').attr('role','false');
    });

    $('body').on('keyup', '.modal-new-view .area-absen-detail textarea[name="detail"]', function(e)
    {
        var text = $(this);

        if( $.trim(text.val()) !== '' )
        {
            clearErrorField($(this));
        }
        
    });

    $('body').on('click', '.modal-new-view .area-absen-detail a.cmd-img-upload', function(e)
    {
        e.preventDefault();

        if($(this).attr('aria-role') === 'true')
        {
            beforeUploadImg($(this));
        }

    });

    //
    $('body').on('click', '.modal-new-view .area-absen-detail a.close', function(e)
    {
        e.preventDefault();
        var cmd = $(this);
        cmd.attr('role', 'on');
        cmd.parents('.modal-absen').attr('role', 'false');
        setTimeout(function()
        {
            cmd.parents('.modal-new-view').remove();
        },300);
    });

    $('body').on('change', '.modal-new-view .area-file input[name="file"]', function(e)
    {
        changeUploadImg(this,$(this));
        if( $(this)[0].files !== '')
        {
            clearErrorField($(this));
        }
    });


    //
    $('body').on('click', '.modal-new-view button.cmd-submit', function()
    {
        var cmd = $(this),
        form = cmd.parents('form');

        sendUpdateAtt(form,cmd);
    });


    function sendUpdateAtt(e,d)
    {
        var cmd = d,
        form = e,
        modal = form.parents('.modal-new-view');

        if( cmd.attr('role') === 'off' )
        {
            cmd.attr('role', 'on');

            //
            var select = form.find('select[name="status"]'),
            detail = form.find('textarea[name="detail"]'),
            file = form.find('input[type="file"]');
            //
            form.find('span.error').remove();
            form.find('.br-error').removeClass('br-error');


            if( $.trim(detail.val()) === '' || select.val() === '0' || select.val() === '1' && file.val() === '' || select.val() === '2' && file.val() === '' || select.val() === '3' && file.val() === '')
            {
                if( select.val() === '0')
                {
                    select.parent('.ar-field').append('<span class="error">Harap pilih Status</span>');
                    select.addClass('br-error');
                }

                if( select.val() === '1' && file.val() === '' || select.val() === '2' && file.val() === '' || select.val() === '3' && file.val() === '')
                {
                    file.parent('.ar-field').append('<span class="error">Harap lampirkan bukti berupa Foto/Gambar dokumen</span>');
                    file.parent('.ar-field').find('a').addClass('br-error');
                }

                if( $.trim(detail.val()) === '' )
                {
                    detail.parent('.ar-field').append('<span class="error">Harap isi keterangan</span>');
                    detail.addClass('br-error');
                }

                cmd.attr('role','off');
                return;
            }

        
            $.ajax({
                type: "POST",
                url: config.apps.URL_API + form.attr('action'),
                headers:{
                    'key':getaccount().key
                },
                cache: false,
                contentType: false,
                processData: false,
                data: FormDataSendNew(form),
                dataType:"JSON",
                success: function(n)
                {
                    // console.log(n);
                    var rsp = n;
                    modal.find('a.close').click();
                    cmd.attr('role','off');
                    $('#calendar').fullCalendar( 'refetchEvents' );
                    flagnotif('success',rsp.message);
                    
                },
                error: function(n)
                {
                    console.log(n);
                    cmd.attr('role','off');
                }
            });
            
            

        }
    }




    // HIDE SPLASH
    hideSplash();

return false;
});
</script>
@endsection