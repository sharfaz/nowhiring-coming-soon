<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nowhiring.lk - Sri Lanka's Job and Recruitment Website Coming Soon!!!</title>
<link href="tools/style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="tools/font-awesome/css/font-awesome.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="tools/jquery.min.js"></script> 
<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href="https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no"
</head>
<body>
<div class="transy"></div>
<div class="wrapper">
	<div class="centered">
		<div class="header">
			<h1 id="logo"><img src="images/nowhiring-logo-v1.png" alt=""></h1>
			<p class="line1">The Smart Way To Hire Real People</p>
		</div>
		
		<div class="content">
				<p>we are working on something very interesting to make hiring process easier!</p>
		</div>
		<div class="form">
			<p>be notified! we just need your email address.</p>
			<div class="mainform">
				<form action="handling-emails.php" method="POST">
				<div class="field">
				<?php
					if ( isset($_GET['error']) && $_GET['error'] == 'email' ) {
						echo "<p class=\"error\">You have entered wrong email address</p>";
					}  elseif ( isset($_GET['error']) && $_GET['error'] == 'email_exists' ) {
						echo "<p class=\"error\">Email address already exists</p>";
					} elseif ( isset($_GET['success']) && $_GET['success'] == 'registered' ) {
						echo "<p class=\"success\">You will be get notified when we due to lunch!!!</p>";
					}
				?>
				<input type="text" class="field" id="email" name="email" value="example@youremail.com"  /></div>
				<div class="submit"><input class="submit" type="submit" name="notify" value="notify" /></div>
				</form>			
			</div>
		</div>
		<div class="social">
		<p>
			<a href="#"><span class="socicon-pinterest"></span></a>
			<a href="#"><span class="socicon-instagram"></span></a>
			<a href="#"><span class="socicon-twitter"></span></a>
			<a href="#"><span class="socicon-facebook"></span></a>
		</p>
		</div>
	</div>
</div>

	
	
		<script type="text/javascript">
var placeholder = $("#email").val();

$("#email").keydown(function() {
    if (this.value == placeholder) {
        this.value = '';
    }
}).blur(function() {
    if (this.value == '') {
        this.value = placeholder;
    }
});
</script>

</body>
</html>
