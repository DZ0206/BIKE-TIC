<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
}
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style0.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<title>BIKE TIC</title>
</head>
<body>
	<div class="container">
		<div class="navbar">
			<a href="signout.php"><img src="image/logo.png" class="logo"></a>
			<nav>
				<ul>
					<li><a href="admin/CRUD.php">ADMIN</a></li>
					<li><a href="product.php">PRODUCT</a></li>
					<li><a href="about.php">ABOUT</a></li>
				</ul>
			</nav>
			<a href="signout.php"><img src="image/menu.png" class="menu-icon" ></a>
		</div>
		<div class="row">
			<div class="col">
				<h1>BIKE TIC </h1>
				<p>Jual sepeda pancal balap, lipat, MTB, BMX, Hybrid, Fixie di TOKO SEPEDA PANCAL. Terjamin murah dan original daripada toko lainnya. Tidak hanya unit sepeda, perlengkapan sepeda pun ada tetapi ditoko sebelah. Toko kami telah banyak disponsori oleh merk-merk terkenal mulai dari wimcycle, united, police, dominate, polygon dan lain sebagainnya. Pengiriman terpecaya dan aman menggunakan pihak ketiga yang terjamin kualitasnya.</p>
				<!-- <button type="button"><a href="index.php">SIGN IN</a></button>
				<button type="button"><a href="signup.php">SIGN UP</a></button>
				<button type="button"><a href="signout.php">SIGN OUT</a></button> -->
				<h4>Copyright 2021. TOKO SEPEDA PANCAL</h4>
			</div>
			<div class="col">
				<div class="card card1">
					<h3>ROAD</h3>
				</div>
				<div class="card card2">
					<h3>BMX</h3>
				</div>
				<div class="card card3">
					<h3>FOLDING</h3>
				</div>
				<div class="card card4">
					<h3>MTB</h3>
				</div>
			</div>
		</div>
	</div>
</body>
</html>