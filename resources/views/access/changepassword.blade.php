@extends('access.index')

@section('content')
<form action="{{$apps['url_api']}}/api/account/changepassword-out" id="form-changepassword" class="login100-form validate-form">

    <div class="div">
        <div class="ic-accss">
            <a href="{{$URI}}">
                <img src="{{$apps['favicon']}}" class="fs" alt="{{$apps['name']}}"/>
            </a>
        </div>
    </div>

    <div class="nm-accss">
        <div class="div">Ubah Password Anda</div>
    </div>

    <div class="div ar-content m-b-23">
        <div class="wrap-input100 validate-input are-hov" data-role="off" data-validate="Password is required">
            <input class="input100 fcs fcs1" tabindex="1" type="password" name="password" autocorrect="off" autocomplete="password" placeholder="">
            <span class="focus-input100 ic" data-symbol="&#xf190;"></span>
            <span class="plc">Password</span>
            <a href="#" class="btn-txt-r eye" tabindex="10" role="off" >
                <div class="tbl">
                    <div class="intbl">
                        <span class="zmdi zmdi-eye"></span>
                    </div>
                </div>
            </a>
        </div>
    </div>
    
    <div class="div ar-content m-b-23">

        <div class="wrap-input100 validate-input are-hov" data-role="off" data-validate="Password is required">
            <input class="input100 fcs fcs2" tabindex="2" type="password" name="repassword" autocorrect="off" autocomplete="password" placeholder="">
            <span class="focus-input100 ic" data-symbol="&#xf190;"></span>
            <span class="plc">Re-Password</span>
            <a href="#" class="btn-txt-r eye show" tabindex="10" role="off" >
                <div class="tbl">
                    <div class="intbl">
                        <span class="zmdi zmdi-eye"></span>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="f-error" style="padding-top:0px;"></div>

    <div class="area-exe-btn">

        <div class="div inner">

            <div class="div">
                <button class="btn nw-button green is-loading" tabindex="3" role="off" >Ubah Password</button>
            </div>

            <div class="div">
                <div class="bts-pg-acc">
                    <span>Atau</span>
                </div>
            </div>

            <div class="div">
                <a href="{{$URI}}/login" tabindex="5" class="nw-button empt">Masuk Akun Anda</a>
            </div>

        </div>
    </div>

    <input type="hidden" value="changepassword" name="type" >
    <input type="hidden" value="1" name="level" />
    <input type="hidden" name="info" value="{{ $info }}" />
    
</form>
@endsection

@section('script')
<script>


$(document).ready(function()
{
    $("#form-changepassword").submit(function()
    {
        var form = $(this),
        button = form.find("button"),
        password = form.find(".fcs1"),
        repassword = form.find(".fcs2"),
        error = form.find(".f-error"),
        // fcs = form.find(".fcs"),
        formUrl = form.attr("action"),
        formData = form.serialize(),
        loading = form.find(".loading"),
        abutton = form.find(".area-exe-btn .inner");
        // keeplogin = parseFloat(form.find('input[name="keeplogin"]').val());


        // var exp = keeplogin === 1 ? 365 : 1 ;
        // // if keeplogin 1 or true then 1 year else 1 day

        
        if(button.attr("role") === "off")
        {
            button.attr("role", "on");

            form.find("span.error").remove();
            form.find(".error").removeClass("error");

            if ( $.trim(password.val()).length < 6 )
            {
                password.parents(".ar-content").append("<span class='error'>Password sekurangnya 6 karakter</span>");
                password.parent(".are-hov").addClass("error");
            }

            if ( $.trim(repassword.val()).length < 6 )
            {
                repassword.parents(".ar-content").append("<span class='error'>Re-Password sekurangnya 6 karakter</span>");
                repassword.parent(".are-hov").addClass("error");
            }

            if ( $.trim(repassword.val()).length > 0 && $.trim(repassword.val()) !== $.trim(password.val()) )
            {
                repassword.parents(".ar-content").append("<span class='error'>Harus sama dengan kolom password</span>");
                repassword.parent(".are-hov").addClass("error");
            }

            if( $.trim(password.val()).length < 6 || $.trim(repassword.val()) !== $.trim(password.val()))
            {
                button.attr("role","off");
                return false;
            }


            $.ajax({
                type: 'POST',
                url:  form.attr("action"),
                timeout: 18000,
                headers: {
                    "Content-Type": "application/json",
                    "key":"{{$token}}"
                },
                data: formdatasend(form),
                dataType: 'JSON',
                success: function(e,n,r)
                {

                    // console.log(e);
                    // if( r.status === 200)
                    // {
                        
                        //create cookie in serve
                        setCookie(config.apps.cookie_name,JSON.stringify(e.response.cookie),365);
                        location.href = config.apps.URL + e.response.homepage;
                    // }

                },
                error: function(e)
                {
                    console.log(e.responseJSON);
                    $(rsp.focus).parents(".ar-content").append("<span class='error'>"+rsp.message+"</span>");
                    $(rsp.focus).parent(".are-hov").addClass("error");
                    button.attr("role", "off");
                    $(rsp.focus).focus();
                }

            });



            
        }

        return false;
    });
    


    return false;
});



</script>
@endsection