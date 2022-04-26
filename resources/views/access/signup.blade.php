@extends('access.index')
@section('content')
<form action="{{$apps['url_api']}}/api/signup" id="form-signup" class="login100-form validate-form">

    <div class="div">
        <div class="ic-accss">
            <a href="{{$URI}}/">
                <img src="{{$apps['favicon']}}" alt="{{$apps['name']}}" classw="fs"/>
            </a>
        </div>
    </div>

    <div class="nm-accss">
        <div class="div">Buat Akun Baru</div>
        <div class="div lbl">Beberapa langkah untuk terhubung dengan kami</div>
    </div>


    <div class="wrap-input100 validate-input m-b-23 are-hov" data-role="off" data-validate = "Username is reauired">
        <input class="input100 fcs fcs1" tabindex="1" type="text" name="name" autocorrect="off" placeholder="">
        <span class="focus-input100" data-symbol="&#xf206;"></span>
        <span class="plc">Nama Lengkap</span>
        <a href="#" class="btn-txt-r clear" tabindex="9" role="off">
            <div class="tbl">
                <div class="intbl">
                    <span class="zmdi zmdi-close-circle-o"></span>
                </div>
            </div>
        </a>
    </div>

    <div class="wrap-input100 validate-input m-b-23 are-hov" data-role="off"  data-validate = "Username is reauired">
        <input class="input100 fcs fcs2" type="text" tabindex="2" name="email" autocorrect="off" placeholder="">
        <span class="ic-reff-access flaticon-mail-1"></span>
        <span class="plc">Email</span>
        <a href="#" class="btn-txt-r clear" tabindex="10" role="off">
            <div class="tbl">
                <div class="intbl">
                    <span class="zmdi zmdi-close-circle-o"></span>
                </div>
            </div>
        </a>
    </div>

    <div class="wrap-input100 validate-input m-b-23 are-hov" data-role="off" data-validate="Password is required">
        <input class="input100 fcs fcs3" type="password" tabindex="3" name="password" placeholder="" autocorrect="off" maxlength="16">
        <span class="focus-input100" data-symbol="&#xf190;"></span>
        <span class="plc">Password</span>
        <a href="#" class="btn-txt-r eye" tabindex="10" role="off" >
            <div class="tbl">
                <div class="intbl">
                    <span class="zmdi zmdi-eye"></span>
                </div>
            </div>
        </a>
    </div>


    <div class="f-error"></div>

    <div class="area-exe-btn">

        <div class="div area-load loading">
            <img src="{{$URI}}/assets/svg/loading.blue.svg" alt="loading"/>
        </div>

        <div class="div inner">

            <div class="div">
                <button class="nw-button green" role="off" tabindex="6" disabled="disabled">Buat Akun</button>
            </div>

            <div class="div">
                <div class="bts-pg-acc">
                    <span>Atau</span>
                </div>
            </div>

            <div class="div">
                <a href="{{$URI}}/login" tabindex="5" class="nw-button empt">Sudah punya Akun?</a>
            </div>

        </div>
    </div>



    <!-- <div class="text-center p-t-54 p-b-20" style="padding-bottom:5px; padding-top:30px;"> -->

    </div>
    
    <input type="hidden" name="info" value="{{$info}}">
    <input type="hidden" name="level" value="{{$app_level}}">
</form>
@endsection

@section('script')
<script>
$(document).ready(function()
{

    $("#form-signup").submit(function()
    {
        let form = $(this),
        button = form.find("button"),
        name = form.find('.fcs1'),
        email = form.find(".fcs2"),
        password = form.find(".fcs3"),
        error = form.find(".f-error"),
        fcs = form.find(".fcs"),
        formUrl = form.attr("action"),
        formData = form.serialize(),
        loading = form.find(".loading"),
        abutton = form.find(".area-exe-btn .inner");



        if(button.attr("role") === "off")
        {
            button.attr("role", "on");
            button.addClass("focus");
            error.html("");
            fcs.removeClass("txt-error-s");
            error.hide();


            if( $.trim( name.val() ).length < 3 )
            {
                name.addClass("error");
                name.focus();
                error.show();
                error.html("Kolom nama sekurangnya 3 karakter");

                button.attr("role", "off");
                button.removeClass("focus");
            }
            else if ( !validateEmail(email.val()) )
            {
                email.addClass("error");
                email.focus();
                error.show();
                error.html("Gunakan alamat email valid");

                button.attr("role", "off");
                button.removeClass("focus");   
            }
            else if( $.trim( password.val() ).length < 8 )
            {
                password.addClass("error");
                password.focus();
                error.show();
                error.html("Password sekurangnya 8 karakter");

                button.attr("role", "off");
                button.removeClass("focus");
            }
            else
            {

                abutton.hide();
                loading.show();
                

                // parse serialize to JSON stringify
                var unindexed_array = form.serializeArray();
                var datasend = {};

                $.map(unindexed_array, function(n, i){
                    datasend[n['name']] = n['value'];
                });


                $.ajax({
                    type: 'POST',
                    url:  form.attr("action"),
                    timeout: 18000,
                    headers: {
                        "Content-Type": "application/json"
                    },
                    data: JSON.stringify(datasend),
                    dataType: 'JSON',
                    success: function(e,n,r)
                    {
                        if( r.status === 200)
                        {
                            console.log(e.response);
                        }

                    },
                    error: function(e)
                    {
                        // console.log(e.responseJSON);
                        loading.hide();
                        error.show();
                        error.html( e.responseJSON.message );

                        //
                        button.attr("role", "off");
                        button.removeClass("focus");
                        abutton.show();
                        form.find('.fcs').addClass('txt-error-s');

                    
                    }

                });



                // button.attr("role", "off");
                // button.removeClass("focus");
            }

            
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