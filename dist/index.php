	<?php
    session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // The request is using the POST method

 $password = $_POST['password'];
 
 
 if ($password == "iamadmin"){
 $_SESSION["goodiekiosk"] = True;
 }else{
 echo "Invalid password. ";
}}
    if (!isset($_SESSION['goodiekiosk'])) {
       echo "You are not authrosied, Please login. ";
	   echo '
	   <html>
   
   <head>
      <title>Login Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                 
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>
';

exit;
	   
	   
	   
	   
	   
    }
	
	
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Bare QR reader demo</title>
  <link rel="stylesheet" href="./style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
body {
    text-align: center;
}
form {
    display: inline-block;
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<form method="POST" action="validate_qr.php">
<h2>SSE Expo 2020 </h2>

<h3>Claim Goodie Tool </h3>
<br><br><br>
<input name ="qr_text" type=text size=16 placeholder="Tracking Code" class=qrcode-text><label class=qrcode-text-btn><input type=file accept="image/*" capture=environment onchange="openQRCamera(this);" tabindex=-1></label> 
<input type="hidden" name="qr_key" value="5b50207e7779ec6c9e4fdd91064b350d">
<br><br><br>
<input type="submit" value="Go" >
</form>
<!-- partial -->
  <script src='https://dmla.github.io/jsqrcode/src/qr_packed.js'></script><script  src="./script.js"></script>

</body>
</html>
