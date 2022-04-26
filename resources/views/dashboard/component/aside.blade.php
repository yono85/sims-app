<div class="moby__aside-holder">
    <!-- Vertical Aside Navigation -->
    <div class="moby__side-bar">

        <!-- Side Bar Header -->
        <div class="side-bar-header">
            <a href="#" class="logo">
                <img src="{{$apps['favicon']}}" alt="logo">
            </a>
            <i id="menu-btn" class="icon-menu icon drawer-icon"></i>
            <span id="drawer-icon" class="menu-icon"><i class="icon icon-menu"></i></span>
            <a href="#" class="test-aside hide">TEST ASIDE</a>
        </div>

        <!-- /.Side Bar Header -->
        <ul class="moby__drawer-menu scroller">

            <!-- Start of Dashboard -->
            <!-- <li>
                <a href="{{$URI}}/dashboard" class="" >
                    <i class="icon fa flaticon2-line-chart">
                        <span class="path1"></span>
                    </i>
                    <span class="menu-item-title">Dashboard</span>
                </a>
            </li> -->
            <!-- End of DashBoard -->

            <!-- <li>
                <a href="#collaps2" data-toggle="collapse" aria-expanded="false">
                    <i class="icon fa flaticon-businesswoman">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <span class="menu-item-title">Marketing</span>
                    <i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps2">
                    <ul>
                        <li>
                            <a href="{{$URI}}/dashboard/orders" data-role="collapse"><span>Orders</span></a>
                        </li>
                        <li>
                            <a href="{{$URI}}/dashboard/customers" data-role="collapse"><span>Customers</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#collaps3" data-toggle="collapse" aria-expanded="false">
                    <i class="icon fa flaticon2-open-box">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <span class="menu-item-title">Stock Barang</span>
                    <i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps3">
                    <ul>
                        <li>
                            <a href="{{$URI}}/dashboard/orderstock" data-role="collapse"><span>Order Stock</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            
            <li>
                <a href="#collaps4" data-toggle="collapse" aria-expanded="false">
                    <i class="icon sli_icon-users">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <span class="menu-item-title">Admin</span>
                    <i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps4">
                    <ul>
                        <li>
                            <a href="{{$URI}}/dashboard/veriforders" data-role="collapse"><span>Verifikasi Pembayaran</span></a>
                        </li>
                        <li>
                            <a href="{{$URI}}/dashboard/verifbulking" data-role="collapse"><span>Verifikasi Bulking</span></a>
                        </li>
                        <li>
                            <a href="{{$URI}}/dashboard/shiping" data-role="collapse"><span>Shiping</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#collaps5" data-toggle="collapse" aria-expanded="false">
                    <i class="icon flaticon-settings-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <span class="menu-item-title">Pengaturan</span>
                    <i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps5">
                    <ul>
                        <li>
                            <a href="{{$URI}}/dashboard/pengguna" data-role="collapse"><span>Pengguna</span></a>
                        </li>
                        <li>
                            <a href="{{$URI}}/dashboard/distributor" data-role="collapse"><span>Distributor</span></a>
                        </li>
                        <li>
                            <a href="{{$URI}}/dashboard/morders" data-role="collapse"><span>Manage Order</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#collaps6" data-toggle="collapse" aria-expanded="false">
                    <i class="icon flaticon-settings-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <span class="menu-item-title">Produksi</span>
                    <i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps6">
                    <ul>
                        <li>
                            <a href="{{$URI}}/dashboard/produk" data-role="collapse"><span>Produk</span></a>
                        </li>
                        <li>
                            <a href="{{$URI}}/dashboard/pabrik" data-role="collapse"><span>Pabrik</span></a>
                        </li>
                        <li>
                            <a href="{{$URI}}/dashboard/prepare" data-role="collapse"><span>Prepare</span></a>
                        </li>
                        <li>
                            <a href="{{$URI}}/dashboard/gudang" data-role="collapse"><span>Gudang</span></a>
                        </li>
                    </ul>
                </div>
            </li> -->
            
        </ul>
    </div>
    <!-- Vertical Aside Navigation -->
</div>

<script>


$('.test-aside').click(function(e)
{
    e.preventDefault();

    // var token = getToken();
    // getRefreshCookie(token);
    // console.log(token);
    
});


// function getaside()
// {
//     $.ajax({
//         type: "GET",
//         url: config.apps.URL_API + '/api/config/aside/view?id='+getaccount().id,
//         headers:{
//             "Content-Type":"application/json",
//             "key":getaccount().key
//         },
//         cache: false,
//         timeout: 18000,
//         dataType: 'JSON',
//         success: function(n)
//         {

//             var li = '';
//             $.each(n.response.menu, function(i, item)
//             {
//                 // li += '<li>'+item.name+'</li>';
//                 if( item.child === '')
//                 {
//                     li += '<li><a href="{{$URI}}'+item.url+'" class="" ><i class="'+item.icon+'"><span class="path1"></span></i><span class="menu-item-title">'+item.title+'</span></a></li>';
//                 }
//                 else
//                 {
//                     li += '<li>';
//                         li += '<a href="#'+item.type+i+'" data-toggle="collapse" aria-expanded="false"><i class="'+item.icon+'"><span class="path1"></span><span class="path2"></span></i><span class="menu-item-title">'+item.title+'</span><i class="'+item.arrow+'"></i></a>';

//                     li += '<div class="collapse show" id="'+item.type+i+'"><ul>';
//                         $.each(item.child, function(y, x)
//                         {
//                             li += '<li><a href="{{$URI}}'+x.url+'" data-role="collapse"><span>'+x.title+'</span></a></li>';
//                         })
                        
//                     li += '</ul></div>';

//                 li +='</li>';
//                 }
//             });

//             $('body').find('ul.moby__drawer-menu').html(li);

//             var loc = location.href;
//             var area = $('.moby__side-bar ul').find('a[href="'+loc+'"]');
        
//             area.addClass('active');
        
//             if( $('.moby__side-bar ul').find('a[href="'+loc+'"]').attr('data-role') === 'collapse' )
//             {

//                 area_ext = area.parents('.collapse');
        
//                 area_ext.addClass('show');
//                 $('.moby__side-bar ul').find('a[href="#'+area_ext.attr('id')+'"]').addClass('active');
//                 $('.moby__side-bar ul').find('a[href="#'+area_ext.attr('id')+'"]').attr('aria-expanded', 'true');
//                 area.addClass('active');
//             }

//         },
//         error: function(n)
//         {
//             console.log(n);
//         }
//     });
// }

function getaside()
{
    $.ajax({
        type: "GET",
        url: config.apps.URL_API + '/api/getaside?level='+getaccount().level+'&sublevel='+getaccount().sublevel,
        headers:{
            "Content-Type":"application/json",
            "key":getaccount().key
        },
        cache: false,
        timeout: 18000,
        dataType: 'JSON',
        success: function(n)
        {
            var li = '';
            $.each(n, function(i, item)
            {
                // li += '<li>'+item.name+'</li>';
                if( item.child === '')
                {
                    li += '<li><a href="{{$URI}}'+item.url+'" class="" ><i class="'+item.icon+'"><span class="path1"></span></i><span class="menu-item-title">'+item.title+'</span></a></li>';
                }
                else
                {
                    li += '<li>';
                        li += '<a href="#'+item.type+i+'" data-toggle="collapse" aria-expanded="false"><i class="'+item.icon+'"><span class="path1"></span><span class="path2"></span></i><span class="menu-item-title">'+item.title+'</span><i class="'+item.arrow+'"></i></a>';

                    li += '<div class="collapse show" id="'+item.type+i+'"><ul>';
                        $.each(item.child, function(y, x)
                        {
                            li += '<li><a href="{{$URI}}'+x.url+'" data-role="collapse"><span>'+x.title+'</span></a></li>';
                        })
                        
                    li += '</ul></div>';

                li +='</li>';
                }
            });


            //
            $('body').find('ul.moby__drawer-menu').html(li);

            var loc = location.href;
            var area = $('.moby__side-bar ul').find('a[href="'+loc+'"]');
        
            area.addClass('active');
        
            if( $('.moby__side-bar ul').find('a[href="'+loc+'"]').attr('data-role') === 'collapse' )
            {

                area_ext = area.parents('.collapse');
        
                area_ext.addClass('show');
                $('.moby__side-bar ul').find('a[href="#'+area_ext.attr('id')+'"]').addClass('active');
                $('.moby__side-bar ul').find('a[href="#'+area_ext.attr('id')+'"]').attr('aria-expanded', 'true');
                area.addClass('active');
            }

        },
        error: function(n)
        {
            console.log(n);
            alert("Opss.. Terjadi kesalahan tidak diketahui, refresh kembali halaman ini");
        }
    });
}

getaside();

function splashaside()
{
    var aside = $('body').find('ul.moby__drawer-menu');

    aside.html('');
    var li = '';
    for(i=1;i<4;i++)
    {
        li += '<li class="spl"><div class="inspl splash-tbl"></div></li><li class="spl"><div class="inspl splash-tbl w75"></div></li><li class="spl"><div class="inspl splash-tbl w50"></div></li><li class="spl ';
        li += i % 2 === 0 ? 'hide' : '';
        li +='"><div class="inspl splash-tbl"></div></li><li class="spl bts ';
        li += i === 3 ? 'hide' : '';
        li +='"></li>';
    }
    li += '<li class="spl bts"></li>';
    li += '<li class="spl"><div class="inspl splash-tbl w75"></div></li><li class="spl"><div class="inspl splash-tbl w50"></div></li>';
    aside.html(li);

}

// splash aside
splashaside();

function createaside()
{

    var el = $('body').find('ul.moby__drawer-menu');
    var aside = replacequot(config.apps.aside);
    var sublevel = getaccount().sublevel;

    // console.log(sublevel);
    //
    var li = '';
    $.each(aside[sublevel], function(i, item)
    {
        if( item.type === '' )
        {
            li += '<li><a href="'+item.url+'" class="" ><i class="'+item.icon+'"><span class="path1"></span></i><span class="menu-item-title">'+item.title+'</span></a></li>';
        }
        else
        {
            li += '<li>';
                li += '<a href="#'+item.type+'" data-toggle="collapse" aria-expanded="false"><i class="'+item.icon+'"><span class="path1"></span><span class="path2"></span></i><span class="menu-item-title">'+item.title+'</span><i class="icon icon-keyboard_arrow_down arrow-icon"></i></a>';

            li += '<div class="collapse" id="'+item.type+'"><ul>';
                $.each(item.child, function(y, x)
                {
                    li += '<li><a href="'+x.url+'" data-role="collapse"><span>'+x.title+'</span></a></li>';
                })
                
            li += '</ul></div>';

        li +='</li>';
        }
    
    });


    el.html(li);
    

    return;
}

function aside()
{
    // createaside();
    getaside();
    //
    var loc = location.href;
    // $('.moby__side-bar ul').find('a').removeClass('active');
    // $('.moby__side-bar ul').find('a').attr('aria-expanded','false');
    // $('.moby__side-bar ul').find('a.collapse').removeClass('show');


    var area = $('.moby__side-bar ul').find('a[href="'+loc+'"]');

    area.addClass('active');

    if( $('.moby__side-bar ul').find('a[href="'+loc+'"]').attr('data-role') === 'collapse' )
    {

        area_ext = area.parents('.collapse');

        area_ext.addClass('show');
        $('.moby__side-bar ul').find('a[href="#'+area_ext.attr('id')+'"]').addClass('active');
        $('.moby__side-bar ul').find('a[href="#'+area_ext.attr('id')+'"]').attr('aria-expanded', 'true');
        area.addClass('active');
    }

}

    // aside();
    
    // setTimeout(aside, 1000);


    // $('a[data-toggle="collapse"]').click(function(e)
    // {
    //     var cmd = $(this),
    //     li = cmd.parent('li');

    //     // // $('.moby__side-bar ul').find('div.collapse').removeClass('show');

    //     if( cmd.attr('aria-expanded') === 'false')
    //     {

    //         cmd.attr('aria-expanded', 'true');
    //     //     // cmd.addClass('active');
    //         li.find('div.collapse').addClass('show');

            
    //     }
    //     else
    //     {
    //         cmd.attr('aria-expanded', 'false');
    //         // cmd.removeClass('active');
    //         li.find('div.collapse').removeClass('show');
    //     }

    //     // console.log('ok');
    //     e.preventDefault();
    // });
    
</script>
