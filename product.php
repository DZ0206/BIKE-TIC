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
	<link rel="stylesheet" type="text/css" href="product.css">
	<title>BIKE TIC</title>
</head>
<body>
	<div class="container">
		<div class="inti">
			<h1><a href="hala1.php">BIKE TIC</a></h1>
		</div>
		<div class="main">
			<div class="main-bike">
				<h2 style="text-align: center; font-size: 30px;">Jenis Sepeda dan Spesifikasi</h2>
				<h2>1. Sepeda Balap</h2>
				<img src="image/roadbike.jfif" width="200px" title="Sepeda Balap">
				<p>Sepeda balap dirancang lebih ringan dan sporty, sehingga anda dapat menghasilkan kecepatan tinggi meski mengayuh dengan ringan. Walaupun disebut sepeda balap, sepeda ini tidak tertutup hanya untuk kompetisi. Karena dirancang untuk berbagai medan. Anda dapat menggunakannya untuk berbagai kebutuhan misal bersepeda santai di taman, berangkat ke kantor di jalan raya, berolahraga di pegunungan dan lain-lain.<a href="https://www.tokopedia.com/dinarstoreid-1/sepeda-balap-roadbike-giant-liv-lagma-adv-2-d-m-khusus-cewek-woman">Info Spesifikasi</a></p>
			</div>
			<div class="main-bike">
				<h2>2. Sepeda MTB</h2>
				<img src="image/MTB.jfif" width="215px" title="Sepeda MTB">
				<p>Sepeda balap dirancang lebih ringan dan sporty, sehingga anda dapat menghasilkan kecepatan tinggi meski mengayuh dengan ringan. Walaupun disebut sepeda balap, sepeda ini tidak tertutup hanya untuk kompetisi. Karena dirancang untuk berbagai medan. Anda dapat menggunakannya untuk berbagai kebutuhan misal bersepeda santai di taman, berangkat ke kantor di jalan raya, berolahraga di pegunungan dan lain-lain.<a href="https:https://www.tokopedia.com/archive-tinatina/sepeda-gunung-thrill-mtb-27-5-oust-3-0-ai?whid=0">Info Spesifikasi</a></p>
			</div>
			<div class="main-bike">
				<h2>3. Sepeda Fixie</h2>
				<img src="image/fixie.jfif" width="200px" title="Sepeda Fixie">
				<p>Sepeda Fixie adalah sepeda dulu pernah populer, sepeda ini masih tidak jarang di jumpai. Meskipun, sepeda ini kalah popularitasnya dibanding tipe sepeda lain. Salah satu faktornya adalah karena sepeda Fixie tidak dibekali rem, sehingga pengguna dituntut keahlian khusus agar dapat menungganginya. Namun bagi beberapa pengguna yang suka dengan desainnya yang klasik, ada yang memodifikasi sendiri agar mempunyai rem.<a href="https://www.bukalapak.com/p/sepeda/fullbike/fixie/4g90lma-jual-fullbike-liberty-nemesis-grey">Info Spesifikasi</a></p>
			</div>
			<div class="main-bike">
				<h2>4. Sepeda Lipat</h2>
				<img src="image/lipat.jfif" width="200px" title="Sepeda Lipat">
				<p>	Folding bike juga sepeda yang cocok digunakan untuk jalan-jalan atau berbagai kegiatan santai yang bisa anda nikmati di waktu luang. Sepeda lipat didesain secara simpel dan kelebihannya yang bisa dilipat sehingga mudah dibawa ke manapun membuatnya menjadi salah satu pilihan populer terutama di area yang padat penduduk. Tak cuma minim tempat di luar, saat di simpan di rumah pun, anda bisa menghemat ruang dengan melipatnya.<a href="https://www.tokopedia.com/yugowes/sepeda-lipat-alloy-senator-folding-bike-silver?src=topads">Info Spesifikasi</a></p>
			</div>
		</div>
		<div class="sidebar">
			<h3>Komponen Utama Sepeda</h3>
			<img src="image/part.png" width="200px">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris ni</p>
		</div>
		<div class="footer"><p>Copyright 2021. BIKE TIC</p></div>
	</div>
</body>
</html>