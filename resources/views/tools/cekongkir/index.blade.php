<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">

        <title>{{$apps['name']}}</title>

        <!-- meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Description"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="google" content="notranslate" />

        <!-- icon -->
        <link rel="icon" href="{{$apps['favicon']}}" sizes="32x32">
        <link rel="icon" href="{{$apps['favicon']}}" sizes="192x192">
        <link rel="apple-touch-icon-precomposed" href="{{$apps['favicon']}}">
        <meta name="msapplication-TileImage" content="{{$apps['favicon']}}">


        <!-- Begin Global Structure -->
        <link href="{{$URI}}/assets/temp/css/structure.css" rel="stylesheet" />
        <link href="{{$URI}}/assets/temp/css/components.css" rel="stylesheet" />
        <!-- End Global Structure -->

        <!-- Moby Icons -->
        <!-- <link href="{{$URI}}/assets/temp/css/moby.css" rel="stylesheet" /> -->
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/simple-line-icons.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/global-plugins.bundle.css">

        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/dashboard/style.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/default.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/cekongkir.css">

        <!-- FontsOnline -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet" />

        
        <!-- JavaScripts -->
        
        <script src="{{$URI}}/assets/js/js10.js" type="text/javascript"></script>
        <script src="{{$URI}}/assets/js/global.js" type="text/javascript"></script>

    </head>

    <body>
    <div class="media">
        <div class="div ttl">
            <span class="fa flaticon-truck"></span>
            <span>CEK COST ONGKIR</span>
        </div>

        <div class="div bts">
            <div class="error">Error</div>
        </div>

        <div class="div bts"></div>
        <div class="div bts"></div>

        <div class="div">

            <form action="{{$apps['url_api']}}/api/courier/cost/single" id="form-cekingongkir">
        
                <div class="div">
                    <select name="product" class="fcs fcs1 sel-pd" tabindex="1">
                        <option value="-1">Pilih Produk</option>
                    </select>
                </div>

                <div class="div">
                    <div class="ar-ch-up area-quantity">
                        <div class="clr-float">
                            <button role="off" disabled="disabled" class="cmd-quantity" data-type="min">-</button>
                            <input type="text" value="1" name="quantity" class="disabled" data-max="100">
                            <button role="off" class="cmd-quantity" data-type="add">+</button>
                        </div>
                    </div>
                </div>

                <div class="div bts"></div>

                <div class="div">

                    <div class="div hctn ar-ddws area-ddws" area-role="false" role-pos="down">

                        <a href="#" class="afalse cmd cmd-ddws fcs fcs2" role="off" data-area="false" tabindex="2">
                            <div class="tbl">
                                <div class="intbl">
                                    <span>
                                        <span class="icon-magnifier ic"></span>
                                        <span class="value">Cari Kota atau Kecamatan...</span>
                                    </span>
                                </div>
                            </div>
                        </a>

                        <div class="ddw-sl keep-ddws">
                            <div class="inarsl">
                                <div class="boxsl">
                                    <div class="afind find-down" data-type="down" data-stat="true">

                                        <input type="text" placeholder="Ketikan minimal 3 karakter" class="Txtfind" autocomplete="off" autocorrect="off" spellcheck="false">

                                        <div class="ddnavsrc">
                                            <div class="div clr-float">
                                                
                                                <a href="#" class="afalse cls clr-find" role="off">
                                                    <div class="tbl">
                                                        <div class="intbl">
                                                            <span class="fa flaticon2-cross"></span>
                                                        </div>
                                                    </div>
                                                </a>

                                                <img src="{{$URI}}/assets/svg/loading.blue.svg" alt="loading" class="loadsrc" style="display: none;">

                                            </div>

                                        </div>

                                    </div>
                                    <div class="aul">
                                        <ul></ul>
                                    </div>
                                    <div class="afind find-up" data-type="up" data-stat="false">

                                        <input type="text" placeholder="Ketikan minimal 3 karakter" class="Txtfind" autocomplete="off" autocorrect="off" spellcheck="false">
                                        
                                        <div class="ddnavsrc">
                                            <div class="div clr-float">
                                                
                                                <a href="#" class="afalse cls clr-find" role="off">
                                                    <div class="tbl">
                                                        <div class="intbl">
                                                            <span class="la la-times"></span>
                                                        </div>
                                                    </div>
                                                </a>

                                                <img src="{{$URI}}/assets/svg/loading.blue.svg" alt="loading" class="loadsrc">

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="div bts"></div>
                
                <div class="div" style="width:50%">
                    <select name="courier" class="fcs fcs3" tabindex="3">
                        <option value="-1">Pilih Kurir</option>
                    </select>
                </div>

                <div class="div bts"></div>
                <div class="div bts"></div>

                <div class="div">
                    <a href="#" class="afalse sbmt cmd-sbmt" tabindex="4" role="off">
                        <div class="tbl">
                            <div class="intbl">
                                <span class="icon-magnifier"></span>
                                <span>CEK ONGKIR</span>
                            </div>
                        </div>
                    </a>
                </div>

                <input type="hidden" name="origin_id" value="{{$apps['shiping_origin']}}" />
                <input type="hidden" name="weight" value="0" />
                <input type="hidden" name="weight_total" value="0">
                <input type="hidden" name="price" value="0" >
                <input type="hidden" name="address_array" value="" />

            </form>
            
        </div>

        <div class="div">
            <div class="div bts"></div>
            <div class="div bts"></div>

            <div class="div detail">
                <div class="area-share" style="display:block">
                    <div class="div clr-float">


                        <a href="#" class="share" target="_blank">
                            <span class="flaticon-whatsapp"></span>
                            <span>Bagikan ke Whatsapp</span>
                        </a>

                        <a href="#" class="copy cmd-copy" role="off" target="_blank">
                            <span class="flaticon2-copy"></span>
                            <span>Copy</span>
                        </a>

                    </div>
                </div>
                <div class="div">
                    <div class="title">Rincian:</div>
                </div>

                <div class="div bts"></div>

                <div class="div vw dtl-sub">
                    <span class="label">Produk:</span>
                    <span class="val-sub product">Prodcut</span>
                </div>
                <div class="div vw dtl-sub">
                    <span class="label">Harga:</span>
                    <span class="val-sub price">Rp0</span>
                </div>
                <div class="div vw dtl-sub">
                    <span class="label">Berat:</span>
                    <span class="val-sub weight">0gram</span>
                </div>
                <div class="div vw dtl-sub">
                    <span class="label">Ongkir:</span>
                    <span class="val-sub ongkir">0 - Rp0</span>
                </div>
                <div class="div vw dtl-sub">
                    <span class="label">Total:</span>
                    <span class="val-sub total">Rp0</span>
                </div>
            </div>
        </div>


        <textarea name="textlink" class="hide">*Berikut Rincian produk:*

Nama Produk: {name}
Harga: {price}
Berat: {weight}
Tujuan: {address}
Ongkir: {ongkir}
Total: {total}</textarea>

    </div>


    <script>
$(document).ready(function()
{

    $('.cmd-copy').click(function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        text = $('.media textarea[name="textlink"]').val(),
        type = 'textarea',
        success = 'Info berhasil di copy';


        if( cmd.attr('role') === 'off' )
        {
            cmd.attr('role', 'on');


            copyText(text,type,success);
            cmd.attr('role', 'off');
        }
    })

    // SELECT PRODUCT
    $('body').on('change', 'select[name="product"]', function()
    {
        var select = $(this),
        form = select.parents('form'),
        aquantity = form.find('.area-quantity'),
        weight = $('select[name="product"] option:selected').attr('dataweight'),
        price = $('select[name="product"] option:selected').attr('dataprice'),
        name = $('select[name="product"] option:selected').html();


        hidedetail();
        if( $(this).val() !== '-1')
        {
            aquantity.find('input[name="quantity"]').val('1');
            aquantity.show();
            form.find('.area')
            form.find('input[name="weight"]').val(weight);
            form.find('input[name="price"]').val(price);
            updateprice(form);
            return;
        }
    
        aquantity.hide();
        aquantity.find('input[name="quantity"]').val('1');
        form.find('input[name="weight"]').val('0');
        form.find('input[name="price"]').val('0');

    });

    // SELECT COURIER
    $('body').on('change', 'select[name="courier"]', function()
    {

        var select = $(this),
        media = select.parents('.media'),
        error = media.find('.error'),
        form = select.parents('form'),
        wgup = $('option:selected',this).attr('data-wgup'),
        wgtype = $('option:selected',this).attr('data-wgtype');

        hidedetail();

        error.hide();

        if( form.find('select[name="product"]').val() === '-1')
        {
            error.html("Harap pilih Produk");
            error.show();
            form.find(".fcs1").addClass("txt-error");
            form.find(".fcs1").focus();
            select.val('-1');
            return;
        }

        if( select.val() !== '-1')
        {
            var weight = form.find('input[name="weight"]').val();
            updateprice(form);
            
        }

        

    });



    function updateprice(e)
    {
        var form = e,
        media = form.parents('.media'),
        detail = media.find('.detail');

        //
        var name = form.find('select[name="product"] option:selected').html(),
        weight = parseFloat(form.find('select[name="product"] option:selected').attr('dataweight')),
        price = parseFloat(form.find('select[name="product"] option:selected').attr('dataprice')),
        quantity = form.find('input[name="quantity"]').val();

        var total = (quantity * price),
        totalwg = (quantity * weight);

        detail.find(".product").html(name + ' (qty: ' + quantity + 'x)');
        detail.find(".price").html(formatRupiah(total, 'Rp'));
        detail.find(".weight").html( totalwg +' Gram');

        //
        if( form.find('select[name="courier"]').val() !== '-1')
        {

            var wgup = form.find('select[name="courier"]  option:selected').attr('data-wgup'),
            wgtype = form.find('select[name="courier"] option:selected').attr('data-wgtype');
    
            // calcWeightCourier(totalwg,wgup,wgtype);
            var wgtotal = calcWeightCourier(totalwg,wgup,wgtype);
            
            form.find('input[name="weight_total"]').val(wgtotal);
        }
    }

    function hidedetail()
    {
        var media = $('body').find('.media');

        media.find('.detail').hide();
    }

    //QUANTITY
    $('body').on('keydown', 'input.disabled', function()
    {
        // e.preventDefault();
        return false;
    });

    $('.cmd-quantity').click(function(e)
    {
        e.preventDefault();

        cekquantity($(this));

    });

    function cekquantity(e)
    {
        var cmd = e,
        form = e.parents('form'),
        area = cmd.parents('.area-quantity'),
        type = cmd.attr('data-type'),
        text = parseFloat(area.find('input[type="text"]').val()),
        max = parseFloat( area.find('input[type="text"]').attr('data-max') );

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');

            hidedetail();
            //add
            if( type === 'add')
            {

                if( text < max)
                {
                    text = text + 1;
                    area.find('input[type="text"]').val( text );
                }
                
                if( text === max)
                {
                    cmd.attr('disabled', 'disabled');
                }
                
                if( text > 1)
                {
                    area.find('button[data-type="min"]').removeAttr('disabled');
                }

                // send update cart 
                // cart_updateqtywg(area);
                
            }
            else
            {
                if( text > 1)
                {
                    text = text - 1;
                    area.find('input[type="text"]').val( text );
                    
                }

                if( text === 1)
                {
                    cmd.attr('disabled', 'disabled');
                }

                if( text < max)
                {
                    area.find('button[data-type="add"]').removeAttr('disabled');
                }

                // send update cart 
                // cart_updateqtywg(area);
            }

            updateprice(form);
            cmd.attr('role', 'off');
        }

    }

    var getlistproduct = function()
    {
        var area = $('body').find('select[name="product"]');

        $.ajax({
            type: 'GET',
            url: '{{$apps["url_api"]}}/api/product/list?type=1',
            headers:{
                "Content-Type": "application/json",
                "key":"{{$apps['api_key']}}"
            },
            cache: false,
            timeout: 18000,
            dataType: 'JSON',
            success: function(n)
            {
                console.log(n);
                var response = n.response;
                var li = '';
                $.each(response.list, function(i,item)
                {
                    li += '<option value="'+item.id+'" dataweight="'+item.weight+'" dataprice="'+item.price+'">'+item.name+'</option>';
                });
                area.append(li);
            },
            error: function(n)
            {
                console.log(n);
            }
        })
    }

    getlistproduct();


    var getlistcourier = function()
    {
        var area = $('body').find('select[name="courier"]');

        $.ajax({
            type: 'GET',
            url: '{{$apps["url_api"]}}/api/courier/list/widget',
            headers:{
                "Content-Type": "application/json",
                "key":"{{$apps['api_key']}}"
            },
            cache: false,
            timeout: 18000,
            dataType: 'JSON',
            success: function(n)
            {
                console.log(n);
                var response = n.response;
                var li = '';
                $.each(response, function(i,item)
                {
                    li += '<option value="'+item.id+'" data-wgup="'+item.weight_up+'" data-wgtype="'+item.weight_type+'">'+item.name+'</option>';
                });
                area.append(li);
            },
            error: function(n)
            {
                console.log(n);
            }
        })
    }

    getlistcourier();


    // END QUANTITY

    $(".afalse").click(function(e){
        e.preventDefault();
    });

    $("body").on("click", ".afalse", function(e){
        e.preventDefault();
    });


    $(".cmd-ddws").click(function(e)
    {
        var cmd = $(this),
        area = cmd.parents(".area-ddws");
        var xTop = cmd.last(), xTop = xTop.offset(), xTop = xTop.top;
        var wh = $(window).innerHeight();

        e.stopPropagation();

        if( cmd.attr("role") === "off")
        {
            
            area.find("input[type='text']").val("");
            area.attr("area-role", "true");

            if( (xTop + 278)  > wh )
            {
                area.attr("role-pos", "up");
                area.find(".afind[data-type='up'] input[type='text']").focus();
            }
            else
            {
                area.attr("role-pos", "down");
                area.find(".afind[data-type='down'] input[type='text']").focus();
            }

            cmd.attr("role", "on");
            area.find("ul").html("");
            area.find(".afind").attr("data-stat", "false");
            
            
        }
        else
        {
            cmd.attr("role", "off");
            area.attr("area-role", "false");
        }

        // console.log( xTop );
    });


        //find dropdown city kecamatan
    var chtext;
    var findddwstop = 1;
    $(".area-ddws .Txtfind").keydown(function(e)
    {
        var key = e.which || e.keyCode;
        var text = $(this),
        media = text.parents(".area-ddws"),
        area = text.parent(".afind"),
        load = area.find(".loadsrc")
        clr = area.find(".cls");

        if( $.trim(text.val() ) !== chtext )
        {


            load.removeAttr("style");
            chtext = chtext;

            if( key === 8 || key === 46 )
            {
                if( $.trim( text.val() ).length === 1 )
                {
                    clearTimeout(typingTimer);
                    area.attr("data-stat", "false");
                    media.find("ul").html("");
                    findddwstop = 1;
                }
            }
            else
            {
                if( $.trim( text.val() ).length > 1 && chtext !== null)
                {
                    
                    if( chtext !== $.trim(text.val()) && findddwstop === 1)
                    {
                        findddwstop = 0;
                        var obj = area.attr("data-type");
                        area.attr("data-stat", "load");
                        clearTimeout(typingTimer);
                        typingTimer = setTimeout(function(){ typingFind(obj) }, doneTypingInterval);
                        
                    }
                }
            }

            

        }
        

    });


    var typingTimer; 
    var doneTypingInterval = 500; 
    //detect type find
    function typingFind(obj)
    {
        findcitykec(obj);
    }

    //function find
    function findcitykec(obj)
    {

        var media = $("body").find(".area-ddws"),
        area = media.find(".afind[data-type='"+ obj +"']"),
        load = area.find(".loadsrc"),
        text = $.trim(area.find("input[type='text']").val());

        $.ajax({
            type: "GET",
            url: "{{$apps['url_api']}}/api/data/srckotakecamatan?p=1&q=" + text,
            headers: {
                'Content-Type'  : 'application/json',
                'key':'{{$apps["api_key"]}}'
            },
            cache: false,
            timeout: 18000,
            dataType: 'JSON',
            success: function(data)
            {
                console.log(data);

                load.fadeOut(900, function()
                {
                    area.attr("data-stat", "true");
                    chtext = text;

                    if( data.response === '')
                    {

                        media.find("ul").html('<li class="empty">Data tidak ditemukan!</li>');

                    }
                    else
                    {
                        var li = "";
                        $.each(data.response.list, function(i, item){

                            li += '<li class="'+ ( i % 2 === 0 ? 'sling' : '') +'"><a href="#" class="aclk afalse cmd-keep-city" role="off" dataid="'+item.id+'"><div class="div label">'+item.label+'</div></a></li>';

                        });

                        media.find("ul").html(li);

                    }
                    
                    findddwstop = 1;
                    // console.log( data );
                });
            },
            error: function()
            {
                alert('Opss.. Terjadi kesalahan tidak diketahui, refresh halaman ini.');
            }
        })
        
    }


    //select city or kecamtan
    $("body").on("click", ".area-ddws .cmd-keep-city", function(e)
    {
        var cmd = $(this),
        area = cmd.parents(".area-ddws"),
        button = area.find("a.cmd"),
        label = cmd.attr(""),
        form = cmd.parents("form"),
        val_label = cmd.find(".label").html().split(",");

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            hidedetail();

            area.attr("area-role", "false");
            button.find(".value").html( cmd.find(".label").html() );
            button.attr("data-area", "true");
            button.attr("role", "off");
            cmd.attr("role", "off");
            form.find("input[name='address_array']").val( cmd.attr("dataid") );
        }


    });



    //clear find 
    $(".area-ddws .clr-find").click(function()
    {
        var cmd = $(this),
        media = cmd.parents(".area-ddws"),
        area = cmd.parents(".afind"),
        text = area.find("input[type='text']");

        if( cmd.attr("role") === "off" )
        {
            cmd.attr("role", "on");
            text.val("");
            chtext = text.val();
            media.find("ul").html("");
            text.focus();
            area.attr("data-stat", "false");
            cmd.attr("role", "off");
            findddwstop = 1;
        }
    });


    $("body").on("click", ".keep-ddws", function(e)
    {
        e.stopPropagation();
    });



    //ceking
    $(".cmd-sbmt").click(function()
    {
        var cmd = $(this),
        form = cmd.parents("form");

        form.submit();
    });


    $("#form-cekingongkir").submit(function()
    {
        var form = $(this),
        cmd = form.find(".cmd-sbmt"),
        fcs = form.find(".fcs"),
        media = cmd.parents(".media"),
        error = media.find(".error"),
        detail = media.find(".detail"),
        textlink = media.find('textarea[name="textlink"]');
        // textarea[name="textlink"]

        var origin_id = form.find('input[name="origin_id"]').val(),
        product_id = form.find('select[name="product"]').val(),
        product_name = form.find('select[name="product"] option:selected').html(),
        weight = form.find('input[name="weight_total"]').val(),
        price = form.find('input[name="price"]').val(),
        quantity = form.find('input[name="quantity"]').val(),
        destination = form.find('input[name="address_array"]').val(),
        courier = form.find('select[name="courier"]').val();

        var URL = form.attr("action") + '?origin_id=' + origin_id + '&product_id=' + product_id + '&weight=' + weight + '&qty=' + quantity + '&destination=' + destination + '&courier=' + courier;

        if( cmd.attr("role") === "off")
        {
            cmd.attr("role", "on");
            fcs.removeClass("txt-error");
            error.hide();
            detail.hide();

            //validasi
            if( form.find(".fcs1").val() === "-1")
            {
                error.html("Harap pilih Produk");
                error.show();
                form.find(".fcs1").addClass("txt-error");
                form.find(".fcs1").focus();
                cmd.attr("role", "off");
            }
            else if( form.find("input[name='address_array']").val() === "" )
            {
                error.html("Harap pilih Kota atau Kecamatan tujuan");
                error.show();
                form.find(".fcs2").addClass("txt-error");
                form.find(".fcs2").focus();
                cmd.attr("role", "off");
            }
            else if( form.find(".fcs3").val() === "-1")
            {
                error.html("Harap pilih Kurir Pengiriman");
                error.show();
                form.find(".fcs3").addClass("txt-error");
                form.find(".fcs3").focus();
                cmd.attr("role", "off");
            }
            else
            {

                $.ajax({
                    type: 'GET',
                    url: URL,
                    headers:{
                        'Content-Type':'application/json',
                        'key':'{{$apps["api_key"]}}'
                    },
                    cache: false,
                    timeout: 18000,
                    // data: form.serialize(),
                    dataType: 'JSON',
                    success: function(data)
                    {

                        console.log(data);

                        
                        var totalview = (parseFloat( form.find('select[name="product"] option:selected').attr('dataprice') ) * parseFloat(form.find('input[name="quantity"]').val()) ) + parseFloat( data['price'] );

                        detail.find(".ongkir").html(  data['service'] + ' - ' + formatRupiah(data['price'], 'Rp') );

                        detail.find(".total").html( formatRupiah(totalview, 'Rp') );

                        var newtext = textlink.val();
                        
                        var mapObj = {
                            "{name}": detail.find('.product').html(),
                            "{price}":  detail.find('.price').html(),
                            "{weight}": detail.find('.weight').html(),
                            "{address}": form.find('.cmd-ddws .value').html(),
                            "{ongkir}": detail.find('.ongkir').html(),
                            "{total}": formatRupiah(totalview, 'Rp')
                        };
                        newtext = newtext.replace(/{name}|{price}|{weight}|{address}|{ongkir}|{total}/gi, function(matched){
                            return mapObj[matched];
                        });

                        textlink.val(newtext);

                        var linkwa = 'https://api.whatsapp.com/send?text=' + encodeURIComponent(textlink.val());
                        
                        detail.find('a.share').attr('href', linkwa);
                        detail.show();
                        cmd.attr("role", "off");
                        
                    },
                    error: function(n)
                    {

                        console.log(n);

                        var response = n.responseJSON;
                        if( n.status === 404)
                        {
                            message = response.message;
                        }
                        else
                        {
                            message = "Opsss.. Terjadi kesalahan ketika meminta proses cek ongkir";
                        }
                        error.html(message);
                        error.show();
                        cmd.attr("role", "off");
                    }
                })
                
            }
            
        }

        return false;
    });



return false;
});


$(document).click(function()
{
    $("body").find(".area-ddws").attr("area-role","false");
    $("body").find(".area-ddws .cmd-ddws[role='on']").attr("role","off");
});
</script>

    </body>
    </html>