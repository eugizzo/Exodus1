
<head>

<link rel="stylesheet" href="css/signup.css">
</head>


<head>
	<title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
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
<div  style="margin-top: 105px;">
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="background-color:white; box-shadow: 2px 2px 5px rgb(160, 164, 165)">
		<div class="container">
			<a class="navbar-brand" href="index.php" style="color: black;">Exodus<span>Travel Agency</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.php" class="nav-link" style="color:black ;">Home</a></li>
					<li class="nav-item"><a href="index.php#about" class="nav-link" style="color:black ;">About</a></li>
					<li class="nav-item"><a href="index.php#destination" class="nav-link" style="color:black ;">Destination</a></li>
					<li class="nav-item"><a href="index.php#hotel" class="nav-link"style="color:black ;">Hotel</a></li>
					<li class="nav-item"><a href="index.php#blog.php" class="nav-link" style="color:black ;">Blog</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link" style="color:black ;">Contact</a></li>
					
				</ul>
				<!-- <button style="border-radius: 10px; background-color: #007bff; height: 40px; width: 100px; color:white">register</button> -->
			</div>
		</div>
	</nav>
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
					<input id="user" type="text" class="input" name="username" placeholder="enter username or Email">
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
					<a href="#forgot">Forgot Password?</a>
				</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
</div>

