@extends('access.index')

@section('content')
<form action="{{$apps['url_api']}}/api/resetpassword" id="form-repass" class="login100-form validate-form">

    <div class="div">
        <div class="ic-accss">
            <a href="{{$URI}}/">
                <img src="{{$apps['favicon']}}" alt="{{$apps['name']}}" class="fs"/>
            </a>
        </div>
    </div>

    <div class="nm-accss">
        <div class="div">Lupa Password?</div>
        <div class="div lbl hide">Masukan alamat email yang terpaut dengan {{$apps['name']}}</div>
    </div>

    <div class="div ar-content m-b-23">
        <div class="wrap-input100 validate-input are-hov" data-role="off" autocorrect="off" data-validate = "Username is reauired">
            <input class="input100 fcs fcs1" tabindex="1" type="text" name="email" placeholder="">
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

    <div class="f-error" style="padding-top:5px;"></div>

        <div class="area-exe-btn">

            <div class="div inner">

                <div class="div">
                    <button class="btn nw-button green is-loading" role="off" tabindex="2" >Kirim</button>
                </div>

                <div class="div">
                    <div class="bts-pg-acc">
                        <span>Atau</span>
                    </div>
                </div>

                <div class="div">

                    <a href="{{$URI}}/login" tabindex="3" class="nw-button empt" >Masuk akun Anda</a>

                </div>

            </div>
        </div>

    <input type="hidden" name="level" value="1">
    <input type="hidden" name="info" value="{{ $info }}" >
</form>

<div class="area-pwd msgbox-success">
    <div class="inner">
        <div class="tbl">
            <div class="intbl">
                <span>
                    <div class="ab">
                        <div class="div">
                            <div class="ach-pwd animate-zoom">
                                <a href="#" class="close"role="off">
                                    <i class="zmdi zmdi-close"></i>
                                </a>
                                <div class="div">
                                    <div class="div logo">
                                        <i class="zmdi zmdi-check-circle"></i>
                                    </div>
                                    <div class="div ttl">Periksa kotak masuk email Anda</div>
                                    <p>Informasi perubahan Password berhasil kami kirimkan ke alamat email <b class="lbl hide-email">email@gmail.com</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </span>
            </div>
        </div>
    </div>
    <div class="bck"></div>
</div>
@endsection

@section('script')
<script>
$(document).ready(function()
{

    $("#form-repass").submit(function()
    {
        var form = $(this),
        button = form.find("button"),
        email = form.find(".fcs1"),
        error = form.find(".f-error"),
        fcs = form.find(".fcs"),
        formUrl = form.attr("action"),
        formData = form.serialize(),
        loading = form.find(".loading"),
        abutton = form.find(".area-exe-btn .inner");
        
        if(button.attr("role") === "off")
        {
            
            form.find("span.error").remove();
            form.find(".error").removeClass("error");

            // validasi email

            if ( !validateEmail(email.val()) )
            {
                email.parents(".ar-content").append("<span class='error'>Harap periksa email Anda</span>");
                email.parent(".are-hov").addClass("error");
            }

            if( !validateEmail(email.val()) )
            {
                button.attr("role","off");
                return false;
            }

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
                        $('.msgbox-success p b').html(form.find('input[name="email"]').val());
                        $('.msgbox-success').addClass('show');

                        button.attr("role", "off");
                        form.find('a[class*="clear"]').click();

                    },
                    error: function(e)
                    {
                        console.log(e.responseJSON);
                        var rsp = e.responseJSON;
                        $(rsp.focus).parents(".ar-content").append("<span class='error'>"+rsp.message+"</span>");
                        $(rsp.focus).parent(".are-hov").addClass("error");
                        button.attr("role", "off");
                        $(rsp.focus).focus();
                    }

                });
            
        }

        return false;
    });
    


    //
    $('.msgbox-success .close').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        msgbox = cmd.parents('.msgbox-success');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            msgbox.removeClass('show');
            cmd.attr('role','off');
        }


    });


    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }


    return false;
});
</script>
@endsection