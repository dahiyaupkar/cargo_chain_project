<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="removals, moving services, relocation, international removal, domesitc removal, transportation" />
    <meta name="description" content="REMOVALS - Transportation, Removals and Logistics template.">
    <meta name="author" content="Ansonika">
    <title>REMOVALS - Transportation, Removals and Logistics template</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/title_img.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- Google web fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Gochi+Hand" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/elegant_font/elegant_font.css" rel="stylesheet">
    <link href="css/fontello/css/fontello.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">

    <style>
	body {
		background-color:#629976; 
		color:#fff !important;
	}
		#mask {
		position: fixed;
		top:0;
		left:0;
		right:0;
		width:100%;
		height:100%;
		bottom:0;
		background-color:#629976; 
		z-index:999999;
		color:#fff !important;
	}
	.mask_content {
	  margin:-125px 0 0 -100px; 
	  position:absolute;
	  left:50%; 
	  top:50%;
	  width: 200px;
	  height: 250px;
	  text-align: center;
	 }
	</style>

<script type="text/javascript">
function delayedRedirect(){
    window.location = "index.html"
}
</script>

</head>
<body onLoad="setTimeout('delayedRedirect()', 10000)">
<?php
						$mail = $_POST['email_quote'];

						/*$subject = "".$_POST['subject'];*/
						$to = "info@removals.com";
						$subject = "Quotation request from REMOVALS";
						$headers = "From: REMOVALS web site <noreply@yourdomain.com>";
						$message = "\nPERSONAL INFO"; 
						$message .= "\nName: " . $_POST['firstname_quote'];
						$message .= "\nLast Name: " . $_POST['lastname_quote'];
						$message .= "\nEmail: " . $_POST['email_quote'];
						$message .= "\nPhone number: " . $_POST['phone_quote'];
						$message .= "\nProperty description: " . $_POST['message_general'];
						$message .= "\n\nPICK UP ADDRESS"; 
						$message .= "\nCountry: " . $_POST['country_pickup'];
						$message .= "\nCity: " . $_POST['city_pickup'];
						$message .= "\nStreet: " . $_POST['street_pickup'];
						$message .= "\nState: " . $_POST['state_pickup'];
						$message .= "\nPostal code: " . $_POST['postal_code_pickup'];
						$message .= "\nFloor: " . $_POST['floor_pickup'];
						$message .= "\nElevator: " . $_POST['elevator_pickup'];
						$message .= "\n\nDROP OFF ADDRESS"; 
						$message .= "\nCountry: " . $_POST['country_delivery'];
						$message .= "\nCity: " . $_POST['city_delivery'];
						$message .= "\nStreet: " . $_POST['street_delivery'];
						$message .= "\nState: " . $_POST['state_delivery'];
						$message .= "\nPostal code: " . $_POST['postal_code_delivery'];
						$message .= "\nFloor: " . $_POST['floor_delivery'];
						$message .= "\nElevator: " . $_POST['elevator_delivery'];
						$message .= "\n\nOPTIONS"; 
						$message .= "\nPacking service: " . $_POST['option_1'];
						$message .= "\nReassembling: " . $_POST['option_2'];
						$message .= "\nCleaning: " . $_POST['option_3'];
						$message .= "\nShort term deposit: " . $_POST['option_4'];
						$message  .= "\n\nADDITIONAL NOTES"; 
						$message .= "\nMessage: " . $_POST['message_quote'];
						$message .= "\nTerms and conditions accepted: " . $_POST['terms'];
						
						//Receive Variable
						$sentOk = mail($to,$subject,$message,$headers);
						
						//Confirmation page
						$user = "$mail";
						$usersubject = "Thank You";
						$userheaders = "From: info@removals.com\n";
						/*$usermessage = "Thank you for your time. Your request is successfully submitted.\n"; WITH OUT SUMMARY*/
						//Confirmation page WITH  SUMMARY
						$usermessage = "Thank you for your time. Your request is successfully submitted.\n\nSUMMARY\n$message"; 
						mail($user,$usersubject,$usermessage,$userheaders);
	
?>

<!-- END SEND MAIL SCRIPT -->   
<div id="mask">
<div class="mask_content">
 <p class="text-center" style="font-size:80px;"><i class="icon_check_alt2"></i></p>
  <h4 style="color:#FFC">Thank you!<br>Quotation request sent.</h4>
 <p>You will be redirect back in 10 seconds.</p>
</div>
</div>
</body>
</html>