
<head>
<?php
// include '../header.php';
?>
<link rel="stylesheet" href="css/signup.css">
</head>


<head>
	<title>Exodus Tour and Travel Agency</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<div class="shadow">
<?php
include './header.php';
?></div>
<div class="login-wrap">
    
	<div class="login-html">

		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
            <div class="sign-up-htm">

				<form method="POST" action="signup.php">

	
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" name="username">
				</div>
                <div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input" name="email">
				</div>
                <div class="group">
					<label for="user" class="label">Phone Number</label>
					<input id="user" type="number" class="input" name="phone">
				</div>
				<div class="group">
					<label for="user" class="label">Location</label>
					<input id="user" type="text" class="input" name="Location">
				</div>
				<div class="group">
					<label for="user" class="label">Password</label>
					<input id="pass" type="password" class="input" name="password" data-type="password">
				</div>
				<!-- <div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div> -->
				
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
				</form>
			</div>
			
			
			<div class="sign-in-htm">
			  <form method="POST" action="login.php">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="email" class="input" name="email" placeholder="enter username or Email">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password" data-type="password" placeholder="enter password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="../index.php">Back Home</a>
				</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
</div>

