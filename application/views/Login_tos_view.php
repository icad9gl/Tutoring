<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tutoring Online System</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">
	
	<link rel="stylesheet" href="../assets/libs/bower/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="../assets/libs/bower/animate.css/animate.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/core.css">
	<link rel="stylesheet" href="../assets/css/misc-pages.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>
<body class="simple-page">
	
	<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			<a href="index.html">
				<span><i class="fa fa-gg"></i></span>
				<span>Tutoring Online System</span>
			</a>
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
	<h4 class="form-title m-b-xl text-center">Login</h4>
	<form method="POST" action="<?= base_url('index.php/Login_tos/proses_login');?>">


		<div class="form-group">
			<input id="sign-in-email" type="email" class="form-control" placeholder="Email" name="email" id="email" >
		</div>

		<div class="form-group">
			<input id="sign-in-password" type="password" class="form-control" placeholder="Password" name="password"
			 id="password">
		</div>

		
		<input type="submit" class="btn btn-primary" value="SING IN">
	</form>
</div><!-- #login-form -->



	</div><!-- .simple-page-wrap -->
</body>
</html>