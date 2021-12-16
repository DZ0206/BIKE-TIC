<?php 

require 'admin/conn.php';

error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: signin.php");
}


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $password2 = md5($_POST['password2']);
 
    if ($password == $password2) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['password2'] = "";
                header("Location: signin.php");
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BIKE TIC</title>
	<!--Css Embed-->
	<style>
		body{
			background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0, 0, 0, 0.3)), url(image/fixie2.jfif);
			background-position: -10px -1080px;
			background-size: cover;
		}
		.signup{
			background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.6));
			font-family: arial;
			font-weight: bold;
			color: white;
			margin: 13% 20%;
			padding: 4%;
			text-align: center;
		}
		h1{
			text-align: center ;
		}
		table{
			margin-left: auto;
			margin-right: auto;
			border: 3px solid orange;
			color: white;
		}
		th, td{
			border: 3px solid orange;
		}
		.footer {
			margin-top: 10px;
			padding: 5px;
			color: white;
			text-align: center;
			font-size: 12px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="signup">
			<h1>SIGN UP</h1>
			<form action="" method="post">
				<table>
					<tr>
						<td><label for="username" >Username :</label></td>
						<td><input type="text" name="username" id="username" value="<?php echo $username ?>" required></td>
					</tr>
					<tr>
						<td><label for="email">Email :</label></td>
						<td><input type="email" name="email" id="email" value="<?php echo $email ?>" required></td>
					</tr>
					<tr>
						<td><label for="password">Password :</label></td>
						<td><input type="password" name="password" id="password"value="<?php echo $_POST['$password']?>" required></td>
					</tr>
					<tr>
						<td><label for="password2">konfirmasi Password :</label></td>
						<td><input type="password" name="password2" id="password2" value="<?php echo $_POST['$password2'] ?>" required></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;"><button type="submit" name="submit">SIGN UP</button></td>
					</tr>
				</table>
			</form>
	<div class="footer"><p class="copy">Copyright 2021. BIKE TIC</p></div>
</body>
</html>