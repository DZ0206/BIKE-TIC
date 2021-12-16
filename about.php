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
	<link rel="stylesheet" type="text/css" href="style4.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<title>ABOUT ME</title>
</head>
<body>
	<div class="card middle">
      <div class="front">
        <img src="image/36.jpg" alt="DIMAS ZUBALETA">
      </div>
      <div class="back">
        <div class="back-content middle">
          <h2><a href="hala1.php">DIMAS ZUBALETA GUARDIOLA HERIYANTO</a></h2>
          <p>Seorang manusia yang hidup dibumi pertiwi hanya mengingikan lulus dan mendapatkan gelar sarjana sains terapan serta kayaaa dunia dan akhirat. Aaamiiin!!!</p>
          <div class="sm">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
</body>
</html>