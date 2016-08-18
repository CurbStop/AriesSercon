<?php 

	
	$name = $_POST['visitorname'];
	$email = $_POST['emailaddress'];
	$country = $_POST['country'];
	$number = $_POST['visitorphone'];
	$message = $_POST['message'];

	if (isset($_POST['submit'])
		&& $_POST[visitorname] !=""
		&& $_POST[emailaddress] !=""
		&& $_POST[country] !=""
		&& $_POST[message]	!=""

		{

			$to = 'adarshprabhu@gmail.com';
			$subject = 'Message from Aries Sercon Website';
			$message .= 'Sender Name: ' . $_POST['visitorname'] . "\r\n\r\n";
			$message .= 'Country:' . $_POST['country'] . "\r\n\r\n";
			$message .= 'Number: ' . $_POST['visitorphone'] . "\r\n\r\n";
			$message .= 'Email: ' . $_POST['emailaddress'] . "\r\n\r\n";
			$message .= 'Comments: ' . $_POST['message'];
			
			$success = mail($to, $subject, $message);	
	
		}

?>

<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/main.css">
		<title>Message Received</title>
		<meta name="description" content="Aries Sercon is an established firm providing accounting, tax and human resource services in Mozambique">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
			<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
			<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
			<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
			<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
			<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
			<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
			<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
			<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
			<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
			<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
			<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
			<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
			<link rel="manifest" href="/manifest.json">
			<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
			<meta name="msapplication-TileColor" content="#da532c">
			<meta name="msapplication-TileImage" content="/mstile-144x144.png">
			<meta name="theme-color" content="#ffffff">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	</head>

	<body>

		<div class="wrapper">

			<div class="humanr" id="humanr" data-sr='over 1.3s'>
			<?php 

				if (isset($success) && $success) {?>
				
					<h2>Your message</h2>

					<div class="leftCol">

					<p>Thank you for sending us your message. We will contact you as soon as possible.</p>


				</div>

			<?php } 

				else { ?>
					<p>There was a problem in sending your message.</p>
					<p>Please ensure you fill in all the fields</p> 
			<?php } ?>

	</body>
</html>