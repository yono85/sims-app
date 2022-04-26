

$(document).ready(function()
{

    

    //
    $('.fcs').focus(function(e){
        var text = $(this),
        area = text.parents('.are-hov');


        area.attr('data-role', 'on');
        
    });


    $('.fcs').blur(function(e){
        var text = $(this),
        area = text.parents('.are-hov');

        if( $.trim( text.val() ).length === 0 )
        {
            area.attr('data-role', 'off');
        }
        else
        {
            area.attr('data-role', 'on');
        }
    
    });

        //validate
        // $("body").on("keyup", ".fcs", function()
        // {
        //     var text = $(this),
        //     area = text.parent("div"),
        //     form = text.parents("form"),
        //     type = form.find('input[name="type"]').val(),
        //     email = form.find("input[name='email']");
            
        //     area.find(".btn-txt-r").hide();
            
        //     form.find('.fcs').removeClass('txt-error-s');
        //     text.parents('.error').removeClass('error');
        //     // form.find('.f-error').css({'display':'none'});

        //     //
        //     if( type === 'changepassword')
        //     {  
        //         var password = form.find('input[name="password"]'),
        //         repassword = form.find('input[name="repassword"]');

        //         if( $.trim(password.val()).length < 6 )
        //         {
        //             password.parent('.are-hov').addClass('error');
        //             password.parent('.are-hov').find('.label-error').html('Password sekurangnya 6 karakter');
        //             return;
        //         }
        //         else if( $.trim(repassword.val() ) !== $.trim(password.val()) )
        //         {
        //             repassword.parent('.are-hov').addClass('error');
        //             repassword.parent('.are-hov').find('.label-error').html('Re-Password harus sama dangan Password');
        //             return;
        //         }
        //         else
        //         {
        //             validateForm();
        //             return;
        //         }
        //         // console.log('change');
        //         // return;
        //     }

        //     if( $.trim( text.val() ) !== '' && validateEmail(email.val()) )
        //     {
        //         validateForm();
        //         area.find(".btn-txt-r").show();
        //     }
        //     else
        //     {
        //         form.find("button").attr("disabled", "disabled");
        //     }
    
        // });
    
        function validateForm()
        {
            var isValid = true;
            
            $('.fcs').each(function()
            {
                if ( $.trim($(this).val()) === '' )
                    isValid = false;
            });
    
            // if( isValid == true)
            // {
            //     $("form").find("button").removeAttr("disabled");
            // }
            // else
            // {
            //     $("form").find("button").attr("disabled", "disabled");
            // }
            
        }
    
        //clear
        $("body").on("click", "a[class*='clear']", function(e)
        {
            e.preventDefault();
            var cmd = $(this),
            area = cmd.parent("div"),
            form = cmd.parents("form"),
            text = area.find("input[class*='fcs']");
    
            if( cmd.attr("role") === "off" )
            {
                cmd.attr("role", "on");
                form.find('.fcs').removeClass('txt-error');
                form.find('.f-error').css({'display':'none'});
                form.find('.fcs').val("");
                form.find('.are-hov').attr('data-role', 'off');
                // text.focus();
                cmd.hide();
                form.find('.btn-txt-r').hide();
                // form.find("button").attr("disabled", "disabled");
                form.find("button").attr("role", "off");
                cmd.attr("role", "off");
                form.find('.fcs1').focus();
                form.find('input[name="password"]').attr('type','password');
                
            }
    
        });

        $("body").on("click", ".afalse", function(e)
        {
            e.preventDefault();
        });
    
        //keyup password
        $("body").on("keyup", "input[name='password']", function()
        {
            var text = $(this),
            area = text.parent("div"),
            a = area.find("a[class*='eye']");
    
            if( $.trim(text.val() ) === '' )
            {
                a.attr("role", "off");
                a.removeClass("focus");
                text.attr("type", "password");
                
            }
        });


    
        $("body").on("keyup", "input[name='repassword']", function()
        {
            var text = $(this),
            area = text.parent("div"),
            form = text.parents('form'),
            a = area.find("a[class*='eye']");
    
            // if( $.trim( form.find('input[name="password"]').val() ) !== '' && $.trim( form.find('input[name="repassword"]').val() ) !== '')
            // {
            //     a.show();
            // }
            // else
            // {
            //     form.find('input[name="password"]').attr('type', 'password');
            //     form.find('input[name="repassword"]').attr('type', 'password');
            //     a.hide();
            //     a.attr('role', 'off');
            // }
    
        });
    
        //eye
        $("body").on("click", "a[class*='eye']", function(e)
        {
            e.preventDefault();
            var cmd = $(this),
            form = cmd.parents("form"),
            area = cmd.parent("div"),
            text = form.find("input[name='password']"),
            text2 = form.find("input[name='repassword']");
    
            if( cmd.attr("role") === "off" )
            {
                cmd.attr("role", "on");
                cmd.addClass("focus");
                text.attr('type', 'text');
                text2.attr('type', 'text');
                area.find("input").focus();
                
            }
            else
            {
                cmd.attr("role", "off");
                cmd.removeClass("focus");
                text.attr('type', 'password');
                text2.attr('type', 'password');
                area.find("input").focus();
            }
        });
    
        function validateEmail(email) {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

    $('body').find('.fcs1').focus();


    $('body').on('keyup', '.number', function(e)
{
    tnumber($(this));
})

    // DROPDOWN SEARCH
$('body').on('keyup', '.tsrc-dropdown', function(e)
{
    var text = $(this),
    area = text.parents('.area-tsrc-dropdown'),
    form = text.parents('form'),
    doneTypingInterval = parseFloat(area.attr('datatimer'));

    //

    confTextSrc.status = 'false';
    if( $.trim( text.val() ).length >= 3 && confTextSrc.label !== text.val())
    {
        area.find('ul').html('<li class="empty">Memuat...</li>');
        area.attr('role', 'true');
        area.find('.label.error').remove();
        area.find('span.error').remove();
        text.removeClass("error");
        area.find('input.value-dropdown').val('');
        confTextSrc.text = text.val();
        confTextSrc.area = area;

        clearTimeout(typingTimer);
        typingTimer = setTimeout( function(){
            getSearchType(text)
        }, doneTypingInterval);
    }
    else
    {
        
        confTextSrc.text = text.val();
        confTextSrc.area = '';
        area.find('input.value-dropdown').val('');
        area.attr('role', 'false');
        area.find('ul').html('');
    }

    // console.log(confTextSrc.label);

});


$('body').on('keydown', '.tsrc-dropdown', function(e)
{

    clearTimeout(typingTimer);

});

//setup before functions
var typingTimer;
var confTextSrc = 
{
    'form' :   '',
    'area' :   '',
    'text' :   '',
    'label':   '',
    'status':   'false'
}

function getSearchType(q)
{
    var form = confTextSrc.form,
    area = confTextSrc.area,
    text = confTextSrc.text;

    var $URL = config.apps.URL_API + q.attr("aria-href") + text;
    var $t = FormSending("","GET","key","",$URL);
        $t.success( function(n)
        {
            var response = n.response;

            console.log(response);

            var li = '';
            $.each(response.list, function(i, item)
            {
                li += '<li class="selected cmd-selected-dropdown" dataid="'+item.id+'" role="off">'+item.label+'</li>';
            });

            area.find('ul').html(li);

            confTextSrc.status = 'true';
        });
        $t.error( function(n)
        {
            console.log(n);
            area.find('ul').html('<li class="notfound">Data tidak ditemukan</li>');
            area.find('input.label-dropdown').addClass('error');
            confTextSrc.label = area.find('input.label-dropdown').html();
            confTextSrc.status = 'false';
        });

}

$('body').on('click','.cmd-selected-dropdown', function(e)
{
    e.stopPropagation();
    e.preventDefault();
    var cmd = $(this),
    area = cmd.parents('.area-tsrc-dropdown');

    if( cmd.attr('role') === 'off')
    {
        cmd.attr('role', 'on');
        area.attr('role', 'false');

        confTextSrc.label = cmd.html();
        area.find('input.label-dropdown').val(cmd.html());
        area.find('input.value-dropdown').val(cmd.attr('dataid'));
        area.find('button.cls').show();
        area.find("input.error").removeClass("error");
        area.find('label.error').remove();
        area.find('ul').html('');
        cmd.attr('role', 'off');
        confTextSrc.status = 'false';
    }
});


$('body').on('click','.cmd-clear-tsrc', function(e)
{
    e.stopPropagation();
    e.preventDefault();
    var cmd = $(this),
    area = cmd.parents('.area-tsrc-dropdown');

    if( cmd.attr('role') === 'off')
    {
        cmd.attr('role', 'on');
        area.attr('role', 'false');

        confTextSrc.label = '';
        area.find('input.label-dropdown').val('');
        area.find('input.value-dropdown').val('');
        

        area.find('button.cls').hide();
        area.find('label.error').remove();
        area.find('ul').html('');
        cmd.attr('role', 'off');
        confTextSrc.status = 'false';
        area.find('input.label-dropdown').focus();
    }
});


$('body').on('blur', '.tsrc-dropdown', function(e)
{
    var text = $(this),
    area = text.parents('.area-tsrc-dropdown'),
    form = text.parents('form');

    if( confTextSrc.status === 'false' && area.find('input.value-dropdown').val() === '')
    {

        
        area.attr('role', 'false');
        area.find('ul').html('');
        if( $.trim( text.val() ).length > 0 && area.find('input.value-dropdown').val() === '')
        {
            area.find('label.error').remove();
            area.find('input.label-dropdown').addClass('error');
            area.append('<label class="error">Pilih Kota atau Kecamatan yang telah ditentukan</label>');
            area.find('input.label-dropdown').focus();
        }
    }

});

// END DROPDOWN SEARCH


    return false;
});
