// NOTIFICATION

var countNotif = 0;
var $URL_NOTIF = "id=" + getaccount().id;
if( getaccount().employe.level.id === 10002 )
{
    $URL_NOTIF += "&gp=" + getaccount().employe.sublevel.id;
}
else
{
    $URL_NOTIF += "&gp=0";
}
async function getCountNotif()
{
    var $URL = config.apps.URL_NOTIF + '/api/home/notifications?' + $URL_NOTIF;
    var area = $("body").find(".area-hd-notif");
    //
    $t = FormSending("", "GET","key","",$URL);
    $t.success(function(n)
    {
        // console.log(n);
        var rsp = n.response,
        $count = rsp.count;

        area.find("a.cmd-vslide-notif .totalnotif").html($count);
        

        if( $count > countNotif)
        {
            area.find(".cmd-vslide-notif").attr("aria-status", "true");
        }
        else
        {
            area.find(".cmd-vslide-notif").attr("aria-status", "false");
        }
        notifTitlePage($count);
        // countNotif = $count;
        // rungetNotify();

    });
    $t.error(function(n)
    {
        // console.log(n);
        // rungetNotify();
    });
}

function notifTitlePage(e)
{
    var defaultTitle = config.page.title;

    var chTitle = parseFloat(e) > 0 ? '(' + e + ') Pemberitahuan Baru | ' + config.apps.name : defaultTitle;

    document.title = chTitle;
    
}

async function getListNotif()
{
    var area = $("body").find(".modal-new-view .prover-modal-box"),
    areabell = $("body").find(".area-hd-notif");

    area.find(".loading-incontent").attr("aria-role", "true");
    //
    var $URL = config.apps.URL_NOTIF + '/api/home/notifications/list?' + $URL_NOTIF;

    //
    $t = FormSending("", "GET","key","",$URL);
    $t.success(function(n)
    {
        // console.log(n);
        var li = tempNotif(n.list);
        
        area.find(".box-body ul").html(li);

        //
        area.find(".loading-incontent").attr("aria-role", "false");
        document.title = config.page.title;
        countNotif = 0;
        areabell.find("a.bell-animate").attr("aria-status","false");
        areabell.find(".totalnotif").html(0);

    });
    $t.error(function(n)
    {
        // console.log(n.responseJSON);
        area.find(".loading-incontent").attr("aria-role", "false");
        countNotif = 0;
        areabell.find("a.bell-animate").attr("aria-status","false");
        areabell.find(".totalnotif").html(0);
    });
}




async function getlistnotifOff()
{
    var area = $("body").find(".content-modal[data-modal='modalSlideNotif']");

    //
    var $URL = config.apps.URL_NOTIF + '/api/home/notifications/list-all?' + $URL_NOTIF;

    //
    $t = FormSending("", "GET","key","",$URL);
    $t.success(function(n)
    {
        // console.log(n);
        var li = tempNotif(n.list);

        area.find(".box-body ul").html(li);
    });
    $t.error(function(n)
    {
        // console.log(n);
    });
}

function runCountNotif()
{

}

function tempNotif(e)
{
    var list = e;
    var li = "";
    $.each(list, function(i,item)
    {
        li += '<li>';
            li += '<a href="'+(item.link === '' ? '#' : item.link)+'"  class="cmd-readNotif" role="off" aria-read="'+(item.read === 0 ? 'false' : 'true')+'" dataid="'+item.id+'">';
                li += '<div class="div clr-float"><div class="fl"><div class="arimg"><img src="/assets/images/none/user.png" alt=""></div></div>';

                li += '<div class="fr"><div class="div content">'+item.content+'</div>';
                li += '<div class="div"><span class="datetime"><span class="ic sli_icon-clock fsize9"></span><span>'+item.date+'</span></span></div></div></div>';
        li += '</a>';
    li += '</li>';
    });
    return li;
}


function readNotif(e)
{
    var cmd = e;
    if(cmd.attr("role") === "off")
    {
        cmd.attr("role", "on");
        $.ajax({
            type: "POST",
            url: config.apps.URL_API + "/api/home/notifications/read",
            headers:{
                "Content-Type":"application/json",
                "key":getaccount().key
            },
            timeout: 18000,
            cache: false,
            data: JSON.stringify({
                "id":cmd.attr("dataid")
            }),
            dataType: "JSON",
            success: function(n)
            {
                // console.log(n);
                window.location.href = cmd.attr("href");
            },
            error: function(n)
            {
                // console.log(n);
                cmd.attr("role", "off");
            }
        })

    }
}

// function rungetNotify()
// {
//     if( config.apps.NOTIFY_STATUS === "true")
//     {
//         setInterval("getCountNotif()", (60 * 1000));
//         // console.log("run");
//     }
// }

//
getCountNotif();
// getlistnotifOff();

function runGlobNotify()
{
    setTimeout(function()
    {
        if( config.apps.NOTIFY_STATUS === "true")
        {
            setInterval(function(){
                getCountNotif();
            }, (60 * 1000));
            // console.log("run");
        }
    }, 1000)
}

runGlobNotify();