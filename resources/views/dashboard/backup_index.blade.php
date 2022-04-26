<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">

        <title>{{$title}}</title>

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

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- style -->
        <link href="{{$URI}}/assets/css/access/plugins.bundle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/bootstrap/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/fonts/iconic/css/material-design-iconic-font.min.css">
        
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/access/util.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/access/main.css">
        <link rel="stylesheet" type="text/css" href="{{$URI}}/assets/css/access/style.css">

        <!-- script -->
        <script>
        var config = {
            "apps":{
                "name"      :   "{{$apps['name']}}",
                "URL"       :   "{{$URI}}",
                "URL_API"   :   "{{$apps['url_api']}}",
                "X_CSRF_TOKEN": "{{csrf_token()}}",
                'cookie_name'    :   "{{$apps['cookie']}}"
            },
            "page":{
                "title":"{{$title}}"
            }
        }

        </script>
        <script src="{{$URI}}/assets/js/js10.js" type="text/javascript"></script>
        <script src="{{$URI}}/assets/js/access/conf.js" type="text/javascript"></script>
        <script>
            checkLogout();
            
        </script>
    </head>

    <body>
        <a href="#" id="account-logout" role="off">
            Logout
        </a>

        <a href="" id="account-name">account-name</a>

        <script>
            infologin();

            $(document).ready(function()
            {

                $('#account-logout').click(function(e)
                {
                    e.preventDefault();
                    var token = $(this).attr('href').split("token=");


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
                                console.log(e.response.redirect);
                                deleteCookies();
                                location.href = config.apps.URL + e.response.redirect ;
                            }

                        },
                        error: function(e)
                        {
                            console.log(e.responseJSON.response.redirect + ' in error');
                            deleteCookies();
                            location.href = config.apps.URL + e.responseJSON.response.redirect;

                        }

                    });


                });


                
                function cekProfile()
                {
                    var token = getToken();

                    $.ajax({
                        type: 'GET',
                        url:  config.apps.URL_API + '/api/profile',
                        timeout: 18000,
                        headers: {
                            "Content-Type": "application/json",
                            "Authorization": "Bearer " + token
                        },
                        // data: JSON.stringify({"token":token}),
                        dataType: 'JSON',
                        success: function(e,n,r)
                        {

                            refreshCookie(e.refresh)
                            
                            // console.log(e);


                        },
                        error: function(e)
                        {
                            setsessionlogin();
                        }

                    });
                }


                
                cekProfile();

                

            
                return false;
            });
        </script>
    </body>

@yield('script')
</html>
