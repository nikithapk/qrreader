<?php
 $qrkey = $_POST['qr_key'];
 $associd = $_POST['qr_text'];


if ($qr_key == "5b50207e7779ec6c9e4fdd91064b350d")
{
	echo $associd;
	sleep(5);
	header('Location: http://cyberboy.in/Space/qrreader/dist/');
}else
echo "Invalid API Key");
?>