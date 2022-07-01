function selectGender(e,n)
{
    e.preventDefault();
    
    var cmd = n,
    dataid = cmd.attr('dataid'),
    role = cmd.attr('data-role'),
    area = cmd.parents('.area-gender'),
    form = cmd.parents('form');


    if( cmd.attr('role') === 'off')
    {
        area.find('.cmd-gender').attr('role', 'off');
        cmd.attr('role', 'on');
        area.attr('data-role', role);
    }

    form.find('input[name="gender"]').val(dataid);
}

function formatRupiah(angka, prefix)
{
    var number_string = parseFloat(angka).toString(),
    split   		= number_string.split(','),
    sisa     		= split[0].length % 3,
    rupiah     		= split[0].substr(0, sisa),
    ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp' + rupiah : '');
}

function formatNumber(angka)
{
    var number_string = angka.toString(),
    split   		= number_string.split(','),
    sisa     		= split[0].length % 3,
    rupiah     		= split[0].substr(0, sisa),
    ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;

    return rupiah;
}

function inputFalseAll()
{
    return false;
}

function formatRupiahKeyup(angka)
{
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    sisa     		= number_string.length % 3,
    rupiah     		= number_string.substr(0, sisa),
    ribuan     		= number_string.substr(sisa).match(/\d{3}/gi);

    if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    return rupiah;
}

function tnumabjs(q)
{
    var x = q.val();
    var xy = x.replace(/[^0-9a-zA-Z' ']/g,'');
    q.val( xy );

}

function tnumabj(q)
{
    var x = q.val();
    var xy = x.replace(/[^0-9a-zA-Z']/g,'');
    q.val( xy );

}

function tnumber(q)
{
    var x = q.val();
    var xy = x.replace(/[^0-9]/g,'');
    q.val( xy );

}

function cnumber(q)
{
    var y = q.replace(/[^0-9]/g,'');
    return y;
}

// 
function formdatasend(e)
{
    var unindexed_array = e.serializeArray();
    var datasend = {};

    $.map(unindexed_array, function(n, i){
        datasend[n['name']] = n['value'];
    });

    return JSON.stringify(datasend);
}

// FORMDATASENDNEW
function FormDataSendNew(e)
{
    var form = e;
    var fd = new FormData();

    // var file_data = form.find('input[type="file"]'); // for multiple files
    // for(var i = 0; i < file_data.length; i++){
    //     fd.append(file_data.attr('name'), file_data[0].files[i]);
    // }

    fd.append(form.find('input[name="file"]').attr('name'), form.find('input[name="file"]')[0].files[0]);

    var other_data = form.serializeArray();
    $.each(other_data,function(key,input){
        fd.append(input.name,input.value);
    });

    return fd;
}


// e = data,
// t = metode (GET/POST),
// k = type header (key/auth),
// w = type bundle (form),
// u = URL

function FormSending(e,t,k,w,u)
{
    // var $url = config.apps.URL_API +  (w === "form" ? e.attr('action') : e);
    var $url = u;
    var $key = typeof getaccount() === 'undefined' ? config.apps.API_KEY : getaccount().key;
    var $token = typeof getaccount() === 'undefined' ? '' : getToken();

    var $h = {
        "Content-Type": "application/json",
        "key": $key
    },
    $hx = {
        "Content-Type":"application/json",
        "Authorization": "Bearer " + $token
    };
    var $g = {
        type: 'GET',
        url: $url,
        headers: k === "key" ? $h : $hx,
        timeout: 18000,
        cache: false,
        dataType: 'JSON'
    },
    $p = {
        type: 'POST',
        url: $url,
        headers: k === "key" ? $h : $hx,
        timeout: 18000,
        cache: false,
        data: t === "GET" ? "" : (w === 'form' ? formdatasend(e) : JSON.stringify(e)),
        dataType: 'JSON'
    };

    var $x = t === 'GET' ? $g : $p;
    var $te = $.ajax($x);

    return $te;
}


// e = data (form or array)
// m = metode (GET/POST)
// a = authentication (key,auth,token)
// x = "file" or ""

function FormSendingNew(e,m,a,x,u)
{
    var $url = u;
    var $key = typeof getaccount() === 'undefined' ? '' : getaccount().key;
    var $token = typeof getaccount() === 'undefined' ? '' : getToken();

    // header
    var $h = {
        "Content-Type": "application/json",
        "key": $key
    },
    $hx = {
        "Content-Type":"application/json",
        "Authorization": "Bearer " + $token
    },
    $hs = {
        "Content-Type":"application/json",
    };

    //header for file post
    var $hfk = {
        "key": $key
    },
    $hfa = {
        "Authorization": "Bearer " + getToken()
    }

    // body
    var $g = {
        type: 'GET',
        url: $url,
        headers: a === "key" ? $h : ( a === 'token' ? $hx : $hs),
        timeout: 18000,
        cache: false,
        dataType: 'JSON'
    },
    $p = {
        type: 'POST',
        url: $url,
        headers: a === "key" ? $h : ( a === 'token' ? $hx : $hs),
        timeout: 18000,
        cache: false,
        data: m === "GET" ? "" : formdatasend(e),
        dataType: 'JSON'
    },
    $f = {
        type: 'POST',
        url: $url,
        headers: a === 'auth' ? $hfa : $hfk,
        cache: false,
        contentType: false,
        processData: false,
        data: m === "GET" ? "" : ( x === '' ? formdatasend(e) : FormDataSendNew(e) ),
        dataType:"JSON"
    };

    var $x = m === 'GET' ? $g : ( x === 'file' ? $f : $p);
    var $te = $.ajax($x);

    return $te;

}

//sending mail
async function sendingemail(a)
{
    var $URL = config.apps.URL_API + '/api/send/mail';
    var $t = FormSending(a,"POS","key","",$URL);

    $t.success(function(n)
    {
        console.log(n);
    });
    $t.error(function(n)
    {
        console.log(n.responseJSON);
    });
}


//UPLOAD FILE

function previewUpload(e)
{
    var cmd = e;
    if(cmd.attr('role') === 'off')
    {
        cmd.attr('role', 'on');
        cmd.parent('.area-upload').find('input[name="file"]').click();

        setTimeout(function(){
            cmd.attr('role', 'off');
            cmd.parent('.area-upload').attr('role','false');
        }, 2000);
    }
}

// deleteUploadImg
function changePreviewUpload(e,el)
{

    var file = el,
    area = file.parent('.area-upload'),
    button = area.find('.cmd-upload');

    if( file.val() === '')
    {
        // console.log('null');
        button.attr('role', 'off');
        
        area.attr('aria-upload', 'false');

        if( button.attr("data-edit") === '')
        {
            area.find('.label-upload').html(button.attr("data-label"));
            button.attr('aria-data','false');
        }
        else
        {
            area.find('.label-upload').html(button.attr("data-edit"));
            button.attr('aria-data','true');
        }

        area.find('span.error').remove();
        area.find('.br-error').removeClass('br-error');
        area.find('input[name="file"]').val('');
        area.find('span.error').remove();
        area.append('<span class="error">Harap sertakan file dengan format .pdf</span>');
        button.addClass('br-error');
        return;
    }

    // console.log('ada');
    button.attr('role', 'off');
    area.attr('aria-upload', 'false');
    checkPreviewUpload(e.files[0],area);
    return;

}

var _URLt = window.URL || window.webkitURL;
function checkPreviewUpload(files,el)
{
    // var img = new Image();
    var cmd = el,
    max = parseFloat(cmd.attr("data-max")),
    area = cmd.parent('.area-upload');
    fileSize = Math.round(files.size / 1024);
    
    if( fileSize > (max * 1000) )
    {
        // console.log('Error');
        
        cmd.attr('role','false');
        cmd.find('.cmd-upload').attr('role', 'off');

        if( cmd.attr("data-edit") === '')
        {
            cmd.find('.label-upload').html(cmd.attr("data-label"));
            cmd.find('.cmd-upload').attr('aria-data', 'false');
        }
        else
        {
            cmd.find('.label-upload').html(cmd.attr("data-edit"));
            cmd.find('.cmd-upload').attr('aria-data', 'true');
        }
        area.find('input[name="file"]').val('');
        area.find('span.error').remove();
        area.append('<span class="error">Maksimal file lampiran '+max+'Mb</span>');
        cmd.addClass('br-error');
        return;
    }

    // console.log(fileSize);
    cmd.attr('role','false');
    cmd.find('.cmd-upload').attr('aria-data', 'true');
    cmd.find('.cmd-upload').attr('role', 'off');
    cmd.find('.label-upload').html(files.name);
    cmd.find('span.error').remove();
    cmd.find('.br-error').removeClass('br-error');
    // console.log(files.name);
}


// FUNCTION PREVIEW IMG BEFORE UPLOAD  ==>

// BEFORE CHECK
function beforeUploadImg(e)
{

    if( e.attr('role') === 'off')
    {
        e.attr('role', 'on');
        checkUploadImg(e);
    }
}

// CHECK PREV IMG
function checkUploadImg(e)
{
    var cmd = e,
    area = cmd.parents('.area-img-upload'),
    file = area.find('input[name="file"]');

    file.click();

    setTimeout(function(){
        area.attr('role', 'false');
        area.find('.cmd-img-upload').attr('role', 'off');
    }, 1500);
}


function changeUploadImg(e,el)
{

    var file = el,
    area = file.parents('.area-img-upload'),
    button = area.find('.cmd-img-upload');


    if( file.val() === '')
    {
        console.log('null');
        button.attr('role', 'off');
        area.attr('aria-upload', 'false');
        area.find('.label-upload').html('');
        return;
    }

    // console.log(el);
    button.attr('role', 'off');
    area.attr('aria-upload', 'false');
    displayPreview(e.files[0],area);
    return;

}

var _URLt = window.URL || window.webkitURL;
function displayPreview(files,el)
{
    var img = new Image();
    fileSize = Math.round(files.size / 1024);
    
    img.onload = function ()
    {
        var width=this.width,
            height=this.height,
            imgsrc=this.src,
            imgX = this.offsetX;

        //cekimage
        cekimage(fileSize,width,height,imgsrc,imgX,el,files)
        // console.log(imgsrc);

    };

    img.src = _URLt.createObjectURL(files);

}

//ceking preview image
function cekimage(size,width,height,imgsrc,imgX,el,files)
{
    var area = el,
    file = area.find('input[name="file"]'),
    button = area.find('.cmd-img-upload');

    if( size > 1999 )
    {
        area.attr('aria-upload', 'false');
        button.attr('role', 'off');
        area.find('.label-upload').html('');
        // alert('Ukuran file maksimal 2 Mb');
        area.find('input[name="file"]').val('');
        flagnotif('error', 'Size foto melebihi 2Mb');
        return;
    }
    else if( width < 220 && height < 220 )
    {
        area.attr('aria-upload', 'false');
        button.attr('role', 'off');
        area.find('.label-upload').html('');
        // console.log('Lebar dan tinggi sekurangnya 200 pixel');
        area.find('input[name="file"]').val('');
        flagnotif('error', 'Lebar dan tinggi foto terlalu kecil');
        return;
    }
    else if( width > 3048 && height > 3048 )
    {
        area.attr('aria-upload', 'false');
        button.attr('role', 'off');
        area.find('.label-upload').html('');
        // console.log('Ukuran pixel gambar terlalu besar, maksimal 2048 pixel');
        area.find('input[name="file"]').val('');
        flagnotif('error', 'Lebar dan tinggi foto terlalu kecil');
        return;
    }
    else
    {

        area.find('.img-upload').attr('src', imgsrc);
        area.find('.label-upload').html(files.name);
        
        area.attr('aria-upload', 'true');
        button.attr('role', 'off');

    }

}


// DELETE PREV IMG
function deleteUploadImg(e)
{
    var cmd = e,
    area = cmd.parents('.area-img-upload');

    if( cmd.attr('role') === 'off')
    {
        cmd.attr('role', 'on');
        area.find('input[name="file"]').val('');
        area.find('img.img-upload').attr('src', '');
        area.attr('aria-upload', 'false');
        cmd.attr('role', 'off');
    }

}


// COURIER
function calcWeightCourier(e,n,m)
{
    var weight = parseFloat(e),
    wgup = parseFloat(n),
    wgtype = m, wgt = 0,
    wg = 0, num = 0, dec = 0,
    wgbagi = wgtype === 'kg' ? 1000 : 1;

    if( wgtype === 'kg')
    {
        wg = ( weight / wgbagi );
        
        //set default 1 kg
        if( weight < wgbagi )
        {
            wg = 1;
        }
        else
        {
            //hitung
            wg = wg;
        
        }

        num = wg % 1 != 0 ? 1 : 0;
    }
    else
    {
       if( weight < 1000)
       {
           wg = 1;
       }
       else
       {
           wg = ( weight / 1000);
           
       }

       num = ( wg / 1000 ) % 1 != 0 ? 1 : 0;
    }


    if( num === 1)
    {
        dec = wg % 1;
        dec = dec;

        if( dec >= wgup )
        {
            dec = 1;

            wgt = Math.floor(wg) + 1;

        }
        else
        {
            dec = dec;
            wgt = Math.floor(wg);
        }

    }
    else
    {

        
        dec = 'x';
        wgt = wg;
    }


 
    var wgv = wgtype === 'kg' ? wgt : (wgt * 1000);

    return wgv;

    // //
    // console.log('(' + wgt + '-'+ wgup + '), ' + weight + ', ' + wg + ' ,' + num + ', ' + dec);
    // console.log(wgt + ' - ' + weight + ' : ' + wgv);


    

}



// COPY

function copyText(e,n,r)
{
    var text = e,
    type = n,
    success = r;

    var area = '<textarea id="textcopy"></textarea>';

    $('body').find('textarea#textcopy').remove();

    $('body').append(area);
    $('body').find('textarea#textcopy').val(text);

    var copyText = document.getElementById('textcopy');
    copyText.focus();

    copyText.select();
    copyText.setSelectionRange(0,999999);

    document.execCommand("copy");
    $('body').find('textarea#textcopy').remove();
    
    alert(success);

}


function pageNotFound(el)
{

    var content = '<div class="notfound"><div class="div"><div class="div"><img src="'+config.apps.URL+'/assets/svg/empty.svg" alt=""></div><div class="div"><h2>Waduh, Halaman yang kamu tuju tidak ditemukan!</h2></div><div class="div"><span class="label">Mungkin kamu salah alamat tujuan. Ayok kembali ke tujuan yang benar.</span></div><div class="div"><a href="'+el+'" class="btnb bc-green w210"><span>Kembali</span></a></div></div></div>';

    return content;
}

function replacequot(e)
{
    return JSON.parse( e.replace(/&quot;/g,'"') );

}

// last segment
function lastSegmen()
{
    var url = window.location.href.replace(/\/$/, '');  /* remove optional end / */ 
    var lastSeg = url.substr(url.lastIndexOf('/') + 1);
    
    console.log(lastSeg);
}



function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}



// dropdwon src new
function dropdownNew(n)
{

    var button = n,
    area = button.parent('.area-ddwn');

    if( button.attr('role') === 'off')
    {
        $('body').find('.area-ddwn').removeClass('open');
        $('body').find('.area-ddwn .cddwn').attr('role','off');
        button.attr('role', 'on');
        area.addClass('open');
        area.find('.ddwn-tsrc').val('');
        
        // area.find('.ddwn-tsrc').val('xxx');
        area.find('ul li').removeClass('hide');
        setTimeout(function(){
            area.find('.inhd').addClass('br-green-f');
            // area.find('.ddwn-tsrc').val('');
            area.find('.ddwn-tsrc').focus();
        }, 200);
        
    }
    else
    {
        button.attr('role', 'off');
        area.removeClass('open');
        area.find('.inhd').removeClass('br-green-f');
    }

}

function selectedDDWN(n)
{
    var button = n,
    li = button.parent('li'),
    area = button.parents('.area-ddwn'),
    cmd = area.find('button.cddwn');

    if( button.attr('role') === 'off')
    {
        button.attr('role', 'on');
        
        area.find('ul li').attr('aria-selected','false');
        li.attr('aria-selected','true');
        area.find('input.value-dropdown').val(button.attr('dataid'));
        cmd.find('span').html(button.find('span').html());
        area.find('label.error').remove();
        area.find('span.error').remove();
        area.find('.br-error').removeClass('br-error');
        cmd.click();
        button.attr('role', 'off');
    }
}



function srcDDWN(n)
{
    var txt = n,
    area = n.parents('.area-ddwn'),
    text = txt.val().toLowerCase();

    area.find('ul li').attr('aria-selected','false');

    
    if( $.trim(txt.val()) < 1 )
    {
        area.find('ul li').removeClass('hide');
    }

    if( $.trim( txt.val() ) !== "" )
    {

        area.find('ul li').addClass('hide');
        area.find('ul li').filter(function()
        {
            return $(this).find('button span').text().toLowerCase().indexOf(text) !== -1;

        }).removeClass('hide');
    }
}


function splashDisplayIcon()
{
    var content = '<div class="splash-dis wth"><div class="tbl"><div class="intbl txt-center"><div class="div"><div class="logo-ctr"></div><div class="div"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div></div></div></div></div>';
    
    $('body').find('.splash-dis').remove();
    $('body').append(content);
}

function hideSplash()
{
    $('body').find('.splash-dis').remove();
}

function vspassword(e)
{
    var cmd = e,
    form = cmd.parents('form');

    if( cmd.attr('role') === 'off')
    {
        cmd.attr('role', 'on');
        cmd.html('Sembunyikan');
        form.find('input.password').attr('type', 'text');
        form.find('input.password').eq(0).focus();
    }
    else
    {
        cmd.attr('role', 'off');
        cmd.html('Tampilkan');
        form.find('input.password').attr('type', 'password');
    }
    // form.find('input.password')
    return false;
}

// change Date
function changeDate(start,end)
{

    if( start !== '')
    {
        var xstart = start.split('/'),
        startDate = xstart[2] + '-' + xstart[1] + '-' + xstart[0];
    }
    else
    {
        startDate = '';
    }

    if( end !== '')
    {
        var xend = end.split('/');
        endDate = xend[2] + '-' + xend[1] + '-' + xend[0];
    }
    else
    {
        endDate = '';
    }

    if( start !== '' & end !== '')
    {
        $('body').find('.label-this-date').html( '<span class="fsize12">'+start + '-' +end + '</span>');
        return startDate + '_' + endDate;
    }
    else
    {
        $('body').find('.label-this-date').html('Hari ini');
        return '';
    }
}


function CloseModalSlide(w,e)
{

    // console.log('ok');
    e.preventDefault();
    if(w.attr('role') === 'off')
    {
        w.attr('role', 'on');
        w.parents('.prover-modal-box').attr('role','false');
    
        setTimeout(function(){
            w.attr('role','off');
            w.parents('.modal-new-view').remove();
        }, 300);

    }
    
}

function getXYright(e)
{
    var xy = e;

    var top = xy.position().top,
    left = xy.position().left,
    width = xy.innerWidth(),
    modal = $('body').find('.prover-modal-view'),
    box = $('body').find('.prover-modal-box[data-modal="modalDdwAccount"]');

    var calc = e.index() === 1 ? -10 : +10;
    var leftPst = xy.position().left - 240 + ( xy.innerWidth() * 3) + calc;
    var topPst = xy.innerHeight();

    var data = {'left':leftPst,'top':topPst};
    return data;
    // console.log( $(document).innerWidth() );
    // modal.removeClass('hide');
    // modal.find('.prover-modal-box').css({top:topPst+'px',left: leftPst +'px'});
}


function changeSparatorDate(e)
{
    var date    = e.split('/'),
    yr      = date[2],
    month   = date[1],
    day     = date[0],
    newDate = yr + '-' + month + '-' + day;

    return newDate;
}

//CLEAR ERROR LABEL IN FORM
function clearErrorField(e)
{
    e.parent('div').find('span.error').remove();
    e.parent('div').find('.br-error').removeClass('br-error');
}


function flagnotif(e,m)
{
    $('body').find('.alert').remove();
    var type = {
        'success' : '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-success animated fadeInDown" role="alert" data-notify-position="top-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; top: 20px; right: 20px; animation-iteration-count: 1;"><button type="button" role="off" class="close" >×</button> <span class="msg" data-notify="message">'+m+'</span><a href="#" target="_blank" data-notify="url"></a></div>',
        //
        'error' : '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown alert-error" role="alert" data-notify-position="top-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; top: 20px; right: 20px; animation-iteration-count: 1;"><button type="button" role="off" class="close" >×</button> <span class="msg" data-notify="message">'+m+'</span><a href="#" target="_blank" data-notify="url"></a></div>'
    }


    $('body').append(type[e]);
    fadeoutflag();
}

// OUT MESSAGE NOTIF
function fadeoutflag()
{
    $('body').find('div.alert').fadeOut(5000, function()
    {
        $('body').find('div.alert').remove();
    })
}

// AUTO RELOAD IF NOT ACTIVE PAGE AFTER DURATION TIME
var durationReloadPage = 0;
var timeReloadPage; 
var timeStatusPage = 'true';

// active page
function startReloadPage()
{ 
    
   if( timeStatusPage === 'false')
   {
        // console.log(timeStatusPage);

        window.location.href = window.location.href;
   }

   
    timeStatusPage = 'true';
    timeReloadPage = window.setTimeout(inActiveReloadPage, parseFloat(durationReloadPage));   
}

// noactive page
function inActiveReloadPage()
{
    timeStatusPage = 'false';
}

function resetReloadPage() { 
    window.clearTimeout(timeReloadPage)
    startReloadPage();
}

 
function setupTimeReload (e) 
{

    durationReloadPage = ( parseFloat(e) * 60000 );
    document.addEventListener("mousemove", resetReloadPage, false);
    document.addEventListener("mousedown", resetReloadPage, false);
    document.addEventListener("keypress", resetReloadPage, false);
    document.addEventListener("touchmove", resetReloadPage, false);

    startReloadPage();
}

function msgboxError()
{
    return "Opss... Terjadi kesalahan pada halaman ini, harap refresh ulang";
}


//CHECKBOX
function checkbox(e){
    var cmd = e,
    area = cmd.parent(".out-area-checkbox");

    if( cmd.attr("role") === "off")
    {
        cmd.attr("role", "on");
        area.find("#checkbox-value").val(1);
        return
    }

    cmd.attr("role", "off");
    area.find("#checkbox-value").val(0);
}


// this for lazy load image with remove class hide
function lazyloadimage()
{
    $.each(document.images, function(){
        var this_image = this;
        var src = $(this_image).attr('src') || '' ;
        if(!src.length > 0){
            
         //this_image.src = options.loading; // show loading

            var lsrc = $(this_image).data('src') || '' ;
            if(lsrc.length > 0){
                var img = new Image();
                img.src = lsrc;
                 
                img.onload = function ()
                 {
                     $(this_image).removeClass("hide");
                     this_image.src = this.src;

                 };
            }
        }
    });
}


//DOCUMENT CLICK
$(document).click(function()
{

    // $('body').on('click', '.keep', function(e)
    // {
    //     e.stopPropagation();
    // });
    
    // $('button.cddwn[role="on"]').click();

    // $('body').find('.prover-modal-view[data-modal="close"]').remove();
    // $('body').on('click', '.keep-modal-view', function(e)
    // {
    //     e.stopPropagation();
    // });
});