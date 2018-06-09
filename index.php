<!doctype html>
<html>
<head>
    <title>QRCode Generator</title>
    <meta charset='utf-8' />
    <meta http-equiv='Content-type' content='text/html; charset=utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <style type='text/css'>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }
        a:link, a:visited {
            color: #38488f;
            text-decoration: none;
        }
    </style>
    <script type='text/javascript' src='qrcode.min.js'></script>
</head>

<body>
<div id='qrcode' align='center' style="margin-top:2em;"></div>
<?php
echo "<script type='text/javascript'>
    var qrcode = new QRCode(document.getElementById('qrcode'), {
        width: 128,
        height: 128,
        colorDark : '#000000',
        colorLight : '#ffffff',
        correctLevel : QRCode.CorrectLevel.H
    });";
$text = $_GET['text'];
$tag = $_GET['tag'];
if ($text != "") {
    echo "qrcode.makeCode('{$text}')</script>";
    if ($tag != "") {
        echo "<p align='center' style='font-size: 1em'>{$tag}</p>";
    }
} else {
    echo "qrcode.makeCode('http://www.lucien.ink')</script>";
    echo "<p align='center' style='font-size: 1em'>使用及部署: <a href='http://github.com/LucienShui/QRCodeOnline' target='_blank'><b>GitHub</b></a></p>";
    echo "<p align='center' style='font-size: 1em'>&copy; 2018 版权所有 <a href='http://www.lucien.ink' target='_blank'>Lucien Shui</a></p>";
}
?>
</body>
</html>
