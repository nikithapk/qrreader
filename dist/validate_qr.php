<?php
$qrkey = $_POST['qr_key'];
$associd = $_POST['qr_text'];

if ($qr_key == "5b50207e7779ec6c9e4fdd91064b350d")
{
	echo $associd;
	
}else
echo "Invalid API Key");
?>