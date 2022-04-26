<html>
<head>
    <title>Html-Qrcode Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="/assets/js/js10.js"></script>
<body>
    <div id="qr-reader"></div>
    <div id="qr-reader-results"></div>

    <style>
        body{
            padding:0px;
            margin:0px;
        }
        #qr-reader{
            width:100% !important;
        }
        #qr-reader__scan_region{
            width:100%;
            /* height:90%; */
        }
        a#qr-reader__dashboard_section_swaplink{
            display:none;
        }
        /* #qr-reader__scan_region{ */
            /* height: 281px !important; */
        /* } */

        #qr-reader__dashboard_section_csr span button{
            padding: 8px 25px;
            border-radius: 8px;
            margin-left: 10px;
        }
    </style>
</body>
<script src="/assets/scaner/html5-qrcode.min.js"></script>
<script>



    $(document).ready(function()
    {  

        function docReady(fn) {
            // see if DOM is already available
            if (document.readyState === "complete"
                || document.readyState === "interactive") {
                // call on next available tick
                setTimeout(fn, 1);
            } else {
                document.addEventListener("DOMContentLoaded", fn);
            }
        }

        docReady(function () {
            var resultContainer = document.getElementById('qr-reader-results');
            var lastResult, countResults = 0;
            function onScanSuccess(decodedText, decodedResult) {
                if (decodedText !== lastResult) {
                    ++countResults;
                    lastResult = decodedText;

                    // Handle on success condition with the decoded message.
                    // console.log(`Scan result ${decodedText}`, decodedResult);
                    // console.log(`${decodedText}`);
                    // alert( (`Scan result ${decodedText}`, decodedResult));
                    // var data = ${decodeText};
                    sending(`${decodedText}`,html5QrcodeScanner);
                    
                }
            }

            var html5QrcodeScanner = new Html5QrcodeScanner(
                "qr-reader", { fps: 10, qrbox: 250 });
            html5QrcodeScanner.render(onScanSuccess);
        });

        var configScan = {
            STATUS: false
        }

        function sending(n,r)
        {

            var data = n;
            $('body').find('#qr-reader-results').html(data);
            $('body').find('#qr-reader__dashboard_section_csr span button').click();
            // r.clear();
        }

        $('body').find('#qr-reader').css({'width':'100%'});

        return false;
    })
</script>

</head>
</html>
