<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
	header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: index.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
	<!-- custom css file link  -->
	<link rel="stylesheet" href="css/sty.css" />
	<link rel="stylesheet" href="css/style1.css" />
	</head>

	<body>
		<!-- header section starts  -->
		<section class="home">
			<div class="swiper home-slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide slide" style="background: url(img/about-img.jpg)">
						<div class="container">
							<form action="" method="POST" class="login-email">
								<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
								<div class="input-group">
									<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
								</div>
								<div class="input-group">
									<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
								</div>
								<div class="input-group">
									<button name="submit" class="btn">Login</button>
								</div>
								<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
							</form>
						</div>
					</div>
		</section>
		</div>
		</div>
	</body>

</html>