@extends('access.index')

@section('content')
<form action="{{$apps['url_api']}}/api/login" id="form-login" class="login100-form validate-form">

    <div class="div">
        <div class="ic-accss">
            <a href="{{$URI}}">
                <img src="{{$apps['favicon']}}" class="fs" alt="{{$apps['name']}}"/>
            </a>
        </div>
    </div>

    <div class="nm-accss">
        <div class="div">Masuk</div>
    </div>

    
    <div class="div ar-content  m-b-23">
        <div class="wrap-input100 validate-input are-hov" data-role="off" data-validate = "Email is reauired">
        
            <input class="input100 fcs fcs1" tabindex="1" type="text" name="email" autocorrect="off" autocomplete="email" placeholder="">
            <span class="ic-reff-access flaticon-mail-1"></span>
            <span class="plc">Email</span>
            <a href="#" class="btn-txt-r clear" tabindex="9" role="off">
                <div class="tbl">
                    <div class="intbl">
                        <span class="zmdi zmdi-close-circle-o"></span>
                    </div>
                </div>
            </a>
            
        </div>
    </div>

    <div class="div ar-content">
        <div class="wrap-input100 validate-input are-hov" data-role="off" data-validate="Password is required">
            <input class="input100 fcs fcs2" tabindex="2" type="password" name="password" autocorrect="off" autocomplete="password" placeholder="">
            <span class="focus-input100" data-symbol="&#xf190;"></span>
            <span class="plc">Password</span>
            <a href="#" class="btn-txt-r eye show" tabindex="10" role="off" >
                <div class="tbl">
                    <div class="intbl">
                        <span class="zmdi zmdi-eye"></span>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="div area-chk">
        <a href="#" role="on" class="cmd-keeplogin">
            <div class="span a-ic">
                <span class="in"></span>
                <span class="ic fas fa-check"></span>
            </div>
            <span>Tetap masuk</span>
        </a>
    </div>
    
    <div class="f-error"></div>

    <div class="area-exe-btn">

        <div class="div inner">

            <div class="div">
                <button class="btn nw-button green is-loading" tabindex="3" role="off">Login</button>
            </div>

            <div class="div">
                <a href="{{$URI}}/signup" tabindex="4" class="nw-button mg-b0">Daftar Lembaga</a>
            </div>

            <div class="div">
                <div class="bts-pg-acc">
                    <span class="">Atau</span>
                </div>
            </div>

            <div class="div">
                <a href="{{$URI}}/forgetpassword" tabindex="5" class="nw-button empt">Lupa Kata Sandi?</a>
            </div>

        </div>
    </div>

    <input type="hidden" value="1" name="keeplogin" >
    <input type="hidden" name="info" value="{{ $info }}" />
    
</form>
@endsection

@section('script')
<script>


$(document).ready(function()
{
    $("#form-login").submit(function()
    {
        let form = $(this),
        button = form.find("button"),
        email = form.find(".fcs1"),
        password = form.find(".fcs2"),
        error = form.find(".f-error"),
        fcs = form.find(".fcs"),
        formUrl = form.attr("action"),
        formData = form.serialize(),
        loading = form.find(".loading"),
        abutton = form.find(".area-exe-btn .inner"),
        keeplogin = parseFloat(form.find('input[name="keeplogin"]').val());


        var exp = keeplogin === 1 ? 365 : 1 ;
        // if keeplogin 1 or true then 1 year else 1 day

        
        if(button.attr("role") === "off")
        {
            button.attr("role", "on");

            form.find("span.error").remove();
            form.find(".error").removeClass("error");

            // validasi email

            if ( !validateEmail(email.val()) )
            {
                email.parents(".ar-content").append("<span class='error'>Harap periksa email Anda</span>");
                email.parent(".are-hov").addClass("error");
            }

            if( $.trim( password.val() ) === "" )
            {
                password.parents(".ar-content").append("<span class='error'>Harap periksa password Anda</span>");
                password.parent(".are-hov").addClass("error");
            }

            if( !validateEmail(email.val()) || $.trim( password.val() ) === "" )
            {
                button.attr("role","off");
                return false;
            }

            //
                $.ajax({
                    type: 'POST',
                    url:  form.attr("action"),
                    timeout: 18000,
                    headers: {
                        "Content-Type": "application/json"
                    },
                    data: formdatasend(form),
                    dataType: 'JSON',
                    success: function(e,n,r)
                    {
                        // console.log(e);
                        //create cookie in serve
                        setCookie(config.apps.cookie_name,JSON.stringify(e.response.cookie),exp);
                        location.href = config.apps.URL + e.response.homepage;

                    },
                    error: function(e)
                    {
                        // console.log(e.responseJSON);
                        var rsp = e.responseJSON;
                        $(rsp.focus).parents(".ar-content").append("<span class='error'>"+rsp.message+"</span>");
                        $(rsp.focus).parent(".are-hov").addClass("error");
                        button.attr("role", "off");
                        $(rsp.focus).focus();

                        // console.log(e.responseJSON.message);
                    }

                });

            
        }

        return false;
    });
    

    ///
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    

    

    return false;
});



</script>
@endsection