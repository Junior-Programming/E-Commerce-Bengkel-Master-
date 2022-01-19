<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="style3.css">

	<title>Service | AVS PERKASA</title>
</head>
<body>

	<div class="container">
		<div class="header">
			<h1 class="judul">AVS_PERKASA</h1>
		</div>

		<div class="hero"></div>

		<div class="conten">
			<h2>Pelayanan dan Pengelolaan Data Bengkel berbasis Web</h2>

			<p class="penulis">Dibuat oleh <a href="#">Kelompok 2</a>. pada 5 Maret 2021</p>

			<br>

	<div id="container">
		<h1>Selamat Datang, <?= $_POST["Username"];  ?>!</h1>
		
		<h2 class="terima">Accepted</h2>

		<p style="text-align: center;">Terima Kasih karena telah menggunakan Jasa Service Bengkel <strong>AVS PERKASA</strong>.Permintaan Anda sudah kami <strong>TERIMA</strong> silahkan datang ke Bengkel kami dengan memperlihatkan pesan ini!</p>

		<h4 style="text-align: center;">Your ID : <?= time(); ?></h4>	

		<button type="button" style="position: relative; left: 310px;"><a href="https://goo.gl/maps/uSiBAX8GhTc8RDrcA" style="color: black;" target="_blank">Buka Map</a></button>

		<br>

		<button type="button" name="button"><a href="index.php" class="link">Logout</a></button>
	</div>
			<div class="footer">
				<p class="copy">&copy; Copyright 2021. Kelompok 2</p>
			</div>
	</div>
</body>
</html>