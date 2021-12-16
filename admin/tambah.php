<?php

require 'conn.php';

// cek tombol submit sudah di tekan
if (isset($_POST["submit"])){

	// cek apakah data berhasil di tambahkan atau tidak
	if(tambah($_POST) > 0 ) {
		echo "
		<script>
			alert('data berhasil ditambahkan!');
			document.location.href = 'crud.php';

		</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal ditambahkan!');
			document.location.href = 'tambah.php';

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
	<title>Tambah data User</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			font-family:cursive;
			
		}
		.content{
			width: 100%;
			height: 100vh;
			background : url(../image/bg3.jfif);
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
			border: 3px solid white;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="content">
		<div class="header">
			<h1>Tambah data User</h1>
			<form action="" method="post">
			<table>
				<tr>
					<td><label for="username" >username :</label></td>
					<td>
					<input type="text" name="username" id="username" required></td>
				</tr>
				<tr>
					<td><label for="password" >password :</label></td>
					<td><input type="password" name="password" id="password" required></td>	
				</tr>
				<tr>
					<td><label for="email" >email :</label></td>
					<td><input type="text" name="email" id="email" required></td>
				</tr>
				<tr>
					<td><label for="jk" >jenis kelamin :</label></td>
					<td><input type="text" name="jk" id="jk" required></td>
				</tr>
				<tr>
					<td><label for="domisili" >Domisili :</label></td>
					<td><input type="text" name="domisili" id="domisili" required ></td>
				</tr>
				<tr>
					<td><label for="hobby" >Hobby:</label></td>
					<td><input type="text" name="hobby" id="hobby" required></td>
				</tr>
				<tr>
					<td><label for="nohp" >No HandPhone :</label></td>
					<td><input type="text" name="nohp" id="nohp" required></td>
				</tr>
				<tr>
					<td colspan="2"><button type="submit" name="submit">ADD</button></td>
				</tr>
			</table>
			</form>
		</div>
	</div>
</body>
</html>