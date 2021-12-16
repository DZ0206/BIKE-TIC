<?php
	//session_start();
	 
	require 'admin/conn.php';

	if (isset($_POST["submit"])) {
		if (tambah($_POST)>0) {
			echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href='index.php';
			</script>
			";
		}else {
			echo "
			<script>
				alert('data gagal ditambahkan');
				document.location.href='index.php';
			</script>
			";
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Daftar</title>
	<!--Css Embed-->
	<style>
		body{
			background: url(image/bg2.jfif);
			background-position: 0px -3px;
			background-size: cover;
			height: 100px;
		}
		.login{
			font-family: arial;
			font-weight: bold;
			color: white;
			margin-top: 13%;
		}
		.login h1{
			text-align: center ;
		}
		.login table{
			vertical-align: middle;
			margin-left: auto;
			margin-right: auto;
			font-weight: lighter;
			border: 3px solid white;
		}
		.login th, td{
			border: 3px solid gray;
		}
		.login h2{
			font-family: cursive;
			text-align: center;
			font-size: small;
			color: white;
		}
		.login a{
			text-decoration: none;
			color: white;
		}
		/*Pseudo Class*/
		.login a:hover{
			background-color: cyan;
			width: 50px;
			height: 50px;
			border-radius: 25px;
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
		<div class="login">
			<h1>Daftar Dulu, Baru Beli!!!</h1>
			<!--CSS inline-->
			<form action="" method="post">
				<table>
					<tr>
						<td><label for="username">USERNAME</label></td>
						<td><input type="text" id="username"></td>
					</tr>
					<tr>
						<td><label for="password">PASSWORD</label></td>
						<td><input type="password" id="password"></td>
					</tr>
					<tr>
						<td><label for="jeniskelamin">JENIS KELAMIN</label></td>
						<td>
							<input type="radio" id="pria" name="jeniskelamin"><label for="pria">Pria</label>
							<input type="radio" id="wanita" name="jeniskelamin"><label for="wanita">Wanita</label>
						</td>
					</tr>
					<tr>
						<td><label for="Domisili"></label>DOMISILI</td>
						<td>
							<textarea style="font-family: sans-serif; font-size: 10px; color: limegreen;"></textarea>
						</td>
					</tr>
					<tr>
						<td><label for="Hobby">HOBBY</label></td>
						<td>
							<input type="checkbox" id="sepak bola"><label for="sepak bola">sepak bola</label>
							<input type="checkbox" id="ballet"><label for="ballet">Ballet</label>
						</td>
					</tr>
					<tr>
						<td><label for="genrefilm">GENRE FILM</label></td>
						<td>
							<select>
								<option>Action</option>
								<option>Adventure</option>
								<option>Animation</option>
								<option>Comedy</option>
								<option>Drama</option>
								<option>Dokumenter</option>
								<option>Horror</option>
								<option>Misteri</option>
								<option>Musical</option>
								<option>Romance</option>
								<option>Sci-Fi</option>
								<option>Thriler</option>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;"><button type="submit" name="submit">Kirim</button></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<div class="footer"><p class="copy">Copyright 2021. TOKO SEPEDA PANCAL</p></div>
</body>
</html>