<?php 
	// session_start();

	//cek seesions
	// if (!isset($_SESSION['username'])) {
	// 	header("Location : signin.php");
	// }

	//koneksi databases
	require 'conn.php';
	$mahasiswa = query("SELECT * FROM users ORDER BY id DESC");

	//jika tombol cari di tekan
	if (isset($_POST["cari"])){
		$mahasiswa = cari($_POST["keyword"]);
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="sa1.css">
	<title>BIKE TIC</title>
</head>
<body>
	<div class="container">
		<div class="header">
			<a href="../hala1.php"><img style="width:20px;padding-top: 20px;" src="../image/logo.png" class="logo"></a>
			<h1>Daftar User BIKE TIC</h1>
			<form action="" method="post">
				<input type="text" name="keyword" size="90" autofocus placeholder="Search" autocomplete="off">
				<button type="submit" name="cari">SEARCH</button>	
				<table border="1" cellpadding="10" cellspacing="0" class="content">
					<tr>
						<th>No.</th>
						<th>Username</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Domisili</th>
						<th>Hobby</th>
						<th>No Handphone</th>
						<th>Ket</th>
					</tr>
					<?php $i = 1;?>
					<?php foreach ($mahasiswa as $row) : ?>
					<tr>
						<td><?= $i  ?></td>
						<td><?= $row["username"]?></td>
						<td><?= $row["email"];  ?></td>
						<td><?= $row["jk"];  ?></td>
						<td><?= $row["domisili"];  ?></td>
						<td><?= $row["hobby"];  ?></td>
						<td><?= $row["nohp"];  ?></td>
						<td class="ket">
							<!-- <a href="tambah.php?id=<?= $row["id"]; ?>">TAMBAH</a> | -->
							<a href="edit.php?id=<?= $row["id"];  ?>">EDIT</a> | 
							<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('hapus data!');">DELETE</a>
						</td>
					</tr>
					<?php $i++; ?>
					<?php endforeach; ?>
				</table>
			</form>
		</div>
	</div>	
</body>
</html>