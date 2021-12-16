<?php 	
	require'admin/conn.php';

    error_reporting(0);

    session_start();
    
    if (isset($_SESSION['username'])) {
    header("Location: hala1.php");
    }

	if(isset($_POST['signin'])){

	$username = $_POST["username"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'" );

    //cek username
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: hala1.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BIKE TIC</title>
	<style>
		*{
            margin: 0;
            padding: 0;
            text-decoration: none;
        }
        .container {
            height: 100%;
            width: 100%;
            background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url(image/fixie.jfif);
            background-position: center;
            background-size: cover;
            position: absolute;
        }
        .signin {
            width: 350px;
            height: 430px;
            position: relative;
            margin: 6% auto;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6));
            padding: 5px;
        }
        h1{
            justify-content: center;
            text-align: center;
            font-size: 30px;
            padding-top: 20%;
            color: white;
        }
        h2 {
            color: white;
            text-align: center;
            font-size: 10px;
        }
        .identity {
            top: 150px;
            position: absolute;
            width: 280px;
            transition: .5s;
            left: 50px;
        }
        .input-field {
            width: 100%;
            padding: 10px 0;
            margin: 5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            border-bottom: 1px solid #999;
            outline: none;
            background: transparent;
            text-align: center;
        }
        .input-field:hover{
            background: white;
        }
        .subbtn {
            width: 85%;
            padding: 10px 30px;
            cursor: pointer;
            display: block;
            margin: 10%;
            background: linear-gradient(to right, #fff, #fff);
            outline: none;
            border-radius: 30px;
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
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
    <div class="container">
        <div class="signin">
            <h1>SIGN IN</h1>
            <form action="" method="post" class="identity">
               <input type="text" name="username" class="input-field" placeholder="USERNAME" value="<?php echo $username ?>" required>
               <input type="email" name="email" class="input-field" placeholder="EMAIL" value="<?php echo $email; ?>" required>
               <input type="password" name="password" class="input-field" placeholder="PASSWORD" value="<?php echo $_POST['password']; ?>" required>
                <button type="submit" name="signin" class="subbtn">SIGN IN</button>
                <h2>Belum punya akun ? <a href="signup.php">klik disini</a></h2>
            </form>
        </div>
    <div class="footer"><p class="copy">Copyright 2021. BIKE TIC</p></div>
</body>
</html>