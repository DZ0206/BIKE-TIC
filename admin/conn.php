<?php
	//koneksi databases 
	$conn = mysqli_connect("localhost", "root", "", "uts");

	function query ($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ( $row = mysqli_fetch_assoc($result)){
			$rows[] = $row; };
		return $rows;
	}

	function tambah ($tambah){
		global $conn;
		
		//ambil data
		$username = htmlspecialchars($tambah ["username"]);
		$password = htmlspecialchars($tambah ["password"]);
		$email = htmlspecialchars($tambah ["email"]);
		$jk = htmlspecialchars($tambah ["jk"]);
		$domisili = htmlspecialchars($tambah ["domisili"]);
		$hobby = htmlspecialchars($tambah ["hobby"]);
		$nohp = htmlspecialchars($tambah ["nohp"]);


		//lalu di query
		$query = "INSERT INTO users VALUES ('','$username', '$password' ,'$email', '$jk', '$domisili', '$hobby','$nohp')";
		
		mysqli_query($conn,$query);
		return mysqli_affected_rows($conn);
	}

	function hapus ($id) {
		global $conn;
		mysqli_query($conn, "DELETE FROM users WHERE id = $id");

		return mysqli_affected_rows($conn);
	}

	function edit ($edit) {
		global $conn;

		//ambil data
		$id = $edit["id"];
		$username = htmlspecialchars($edit ["username"]);
		$password = htmlspecialchars($edit ["password"]);
		$email = htmlspecialchars($edit ["email"]);
		$jk = htmlspecialchars($edit ["jk"]);
		$domisili = htmlspecialchars($edit ["domisili"]);
		$hobby = htmlspecialchars($edit ["hobby"]);
		$nohp = htmlspecialchars($edit ["nohp"]);
		
		$query = "UPDATE users SET
			username = '$username',
			password = '$password',
			email = '$email',
			jk = '$jk',
			domisili = '$domisili',
			hobby = '$hobby',
			nohp = '$nohp'
		
		WHERE id = $id;
		";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn); 
	}

	function cari($keyword){
		$query = "SELECT * FROM users
			WHERE
			username LIKE '%$keyword%' OR
			email LIKE '%$keyword%' OR
			jk LIKE '%$keyword%' OR
			domisili LIKE '%$keyword%' OR 
			hobby LIKE '%$keyword%'  OR
			nohp LIKE '%$keyword%' ";
		return query($query);
	}

 ?>