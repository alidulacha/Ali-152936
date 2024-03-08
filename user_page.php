<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" a href="user.css">

</head>
<body>
<div class="banner">
		<div class="navbar">
			<img src="573-5737498_travel-continuously-png-logo-black-silhouette-transparent-png-removebg-preview.png" class="logo">
			<ul>
				<li><a href="vacation.html">Home</a></li>
				<li><a href="scuba.html">Scuba Diving</a></li>
				<li><a href="surfing.html">Kite surfing</a></li>
				<li><a href="cycling.html">Cycling</a></li>
				<li><a href="register_form.php">Register</a></li>
			</ul>
	</div>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="vacation.html" class="btn">Home</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>