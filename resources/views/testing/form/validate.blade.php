<script src="/assets/js/js10.js"></script>
<!-- <script src="/assets/js/dashboard/validate/jquery-ui.min.js"></script> -->
<form action="" id="test">
    <input type="text" name="name">
    <input type="submit" value="submit">
</form>
<button class="button" role="off">Submit 2</button>
<script>
// $(document).ready(function()
// {


    $('button').click(function(e)
    {
        e.preventDefault();

        var cmd = $(this),
        form = $('body').find('form');

        if( cmd.attr('role') === 'off')
        {
            cmd.attr('role', 'on');
            form.validate(customervalidate);
        }

    });
    

    var r=function(t)
    {
        return t.trim()
    }

    var customervalidate = 
    {
        rules:{
            name:{
                required:!0,
                minlength:3,
                normalizer:r,
            }
        },
        messages:{
            name:'Harus diisi sekurangnya 3 karakter',
        }
    }

//     return false;
// });
</script>


<script src="{{$URI}}/assets/js/dashboard/jquery.validate.js"></script>