<div id="qr-reader"></div>
<div id="qr-reader-results"></div>

<script src="/assets/scaner/html5-qrcode.min.js"></script>
<style>
    body{
        padding:0px;
        margin:0px;
    }
</style>

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

        docReady(function (){

            var resultContainer = document.getElementById('qr-reader-results');
            var lastResult, countResults = 0;
            
            function onScanSuccess(decodedText, decodedResult) {
                if (decodedText !== lastResult) {
                    ++countResults;
                    lastResult = decodedText;

                    // Handle on success condition with the decoded message.
                    // console.log(`Scan result ${decodedText}`, decodedResult);
                    sendAttendance(`${decodedText}`,html5QrcodeScanner);
                    
                }
            }



            var html5QrcodeScanner = new Html5QrcodeScanner(
                "qr-reader", { fps: 10, qrbox: 250 });
            html5QrcodeScanner.render(onScanSuccess);
        });


        $('body').find('#qr-reader').css({'width':'100%'});

        return false;
    })
</script>