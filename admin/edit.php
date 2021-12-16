<?php

require 'conn.php';

error_reporting (0);

//session_start();

// if (isset($_SESSION['username'])) {
//     header("Location: signin.php");
// }

//ambil data di url
$id = $_GET["id"];

//query berdasarkan id
$mhs = query("SELECT * FROM users WHERE id = $id")[0];

// cek tombol submit sudah di tekan
if (isset($_POST["submit"])){

	// cek apakah data berhasil diedit
	if(edit($_POST) > 0 ) {
		echo "
		<script>
			alert('data berhasil diedit!');
			document.location.href = 'CRUD.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal diedit!');
			document.location.href = 'edit.php';
		</script>
		";
	}

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit data user</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			font-family:cursive;
			
		}
		.content{
			width: 100%;
			height: 100vh;
			background : url(../image/Com.png);
			background-position: center;
			background-size: cover;
			display: flex;
			box-sizing: border-box;
			justify-content: center;	 
		}
		.header{
			padding : 10%;
			color: white;
			font-weight: bold;
		}
		h1 {
			text-align: center;
			margin-bottom: 30px;
		}
		table{
			border: 1px solid white;
		}
		table tr td{
			border: 3px solid orange;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="content">
		<div class="header">
			<h1>Edit data user</h1>
			<table>
				<form action="" method="post">
				<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
				<tr>
					<td><label for="username" >Username :</label></td>
					<td><input type="text" name="username" id="username" required value="<?= $mhs["username"]; ?>"></td>
				</tr>
				<tr>
					<td><label for="email" > Email :</label></td>
					<td><input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>"></td>
				</tr>
				<tr>
					<td><label for="jk" >Jenis Kelamin :</label></td>
					<td><input type="text" name="jk" id="jk" value="<?= $mhs["jk"]; ?>"></td>
				</tr>
				<tr>
					<td><label for="domisili" >domisili :</label></td>
					<td><input type="text" name="domisili" id="domisili" value="<?= $mhs["domisili"]; ?>"></td>
				</tr>
				<tr>
					<td><label for="hobby" >hobby :</label></td>
					<td><input type="text" name="hobby" id="hobby" value="<?= $mhs["hobby"]; ?>"></td>
				</tr>

				<tr>
					<td><label for="nohp">No Handphone :</label></td>
					<td><input type="text" name="nohp" id="nohp"value="<?= $mhs['nohp']; ?>"></td>
				</tr>
				<tr>
					<td colspan="2"><button type="submit" name="submit">EDIT</button></td>
				</tr>
				</form>
			</table>
		</div>
	</div>
</body>
</html>