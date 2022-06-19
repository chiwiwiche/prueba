<?php

$name = $_POST['fname'];
$email = $_POST['femail'];
$tel = $_POST['ftel'];
$zipcode = $_POST['fzipcode'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "aleduque.s@gmail.com";

mail($recipient, $tel, $zipcode, $mailheader) or die("Error!");

echo'
<!DOCTYPE HTML>

<html lang="en-US" itemscope="" itemtype="https://schema.org/WebPage">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rockets Interstate Transportation</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ca4c9bee06.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="styles/style.css">

</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
        
    </div>
</body>
</html>
';


?>