
<html>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>

</head>
<body>


</body>

<?php
 $qrkey = $_POST['qr_key'];
 $associd = $_POST['qr_text'];


if ($qrkey == "5b50207e7779ec6c9e4fdd91064b350d")
{
	echo '<br><br><br><br><br><div align="center" id="dvCountDown" style = "display:none">
You will be redirected after <span id = "lblCount"></span>&nbsp;seconds.


<br>
<br>

<img src="https://www.kindpng.com/picc/m/164-1645081_computer-icons-check-mark-presentation-symbol-gif-animation.png" alt="Smiley face" height="100" width="100">

<br>

<br>
'.$associd.'
<br>
</div>
';
	
}else
echo "Invalid API Key";

?>
<script type="text/javascript">
window.onload=DelayRedirect;
function DelayRedirect() {
	// window.alert("sometext");
    var seconds = 5;
    var dvCountDown = document.getElementById("dvCountDown");
    var lblCount = document.getElementById("lblCount");
    dvCountDown.style.display = "block";
    lblCount.innerHTML = seconds;
    setInterval(function () {
		
        seconds--;
        lblCount.innerHTML = seconds;
        if (seconds == 0) {
            dvCountDown.style.display = "none";
            window.location = "./";
        }
    }, 1000);
}
</script>
</html>
