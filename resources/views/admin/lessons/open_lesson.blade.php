<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Open les</title>

    <link rel="stylesheet" href="/css/back-end/qrcode-reader.min.css">

</head>
<body>

<input type="button" id="openreader-btn" value="Scan QRCode" style="display: none"/>
<input type="hidden" name="lesson" value="{{ $lesson->id }}">
<input type="hidden" name="return_url" value="{{ route('admin.lessons.index') }}">

<script src="/js/back-end/jquery-3.1.1.min.js"></script>
<script src="/js/back-end/qrcode-reader.js"></script>
<script>
    $(document).ready(function() {

        $("#openreader-btn").qrCodeReader({
            audioFeedback: true,
            multiple: false,
            skipDuplicates: false,
            callback: function(code) {
                window.location.href = code + '/' + $("input[name='lesson']").val();
            }
        });

        setTimeout(
            function()
            {
                $("#openreader-btn").click();
            }, 1000);

        $('#qrr-close').click(function () {
            window.location.href = $("input[name='return_url']").val();
        });
    });
</script>
</body>
</html>
