<?php
include '../phpqrcode/qrlib.php'; 
  
// $text variable has data for QR  
$text = "NP068165"; 
$ecc = 'L'; 
$pixel_Size = 10; 
$frame_Size = 10;
$outfile="./";
// QR Code generation using png() 
// When this function has only the 
// text parameter it directly 
// outputs QR in the browser 
// QRcode::png($text,$outfile, $ecc, $pixel_Size, $frame_size); 
QRcode::png($text,
 	$outfile = false,
 	$level = QR_ECLEVEL_L,
 	$size = 9,
 	$margin = 4,
 	$saveandprint = false 
);		
?> 