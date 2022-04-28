<?php
    include('connection.php'); #import connection.php
?>

<!DOCTYPE html>
<html>
<head>
	<title>Under Price</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="<?= public_url('assets/icon.png') ?>">
</head>
<body>
	
	<!-- bagian header template -->
	<header>
		<h1 class="judul">Selamat Datang Di Toko UNDER PRICE</h1>
		<p class="deskripsi">Silahkan Pilih Dengan Kriteria Anda</p>
	</header>
	<!-- akhir bagian header template -->
	
	<div class="wrap">
		<!-- bagian menu		 -->
		<nav class="menu">
				<ul>
					<li class="nav-active">
						<a href="#">Home</a>
					</li>
					<li class ="dropdown-button"><button href="#">Kategori Pilihan Produk</button>
						<ul class="dropdown-list">
							<a href="<?= public_url('warrior') ?>">
								<div class="nav-category warrior hide-category">
									<i id="warrior"></i>
								</div>Warior</a>
							<a href="<?= public_url('ventela') ?>">
								<div class="nav-category ventela hide-category">
									<i id="ventela"></i>
								</div>Ventela
							</a>
							<a href="<?= public_url('pantrobas') ?>">
								<div class="nav-category pantrobas hide-category">
									<i id="pantrobas"></i>
								</div>Pantrobas
							</a>
						</ul>
					</li>
					<li>
						<a href=" <?= public_url('kontak') ?> ">Kontak Pelayanan</a>
					</li>
				</ul>
		</nav>
		<!-- akhir bagian menu -->
 
		<!-- bagian sidebar website -->
		<aside class="sidebar">
			<div class="widget">
				<h2>Description</h2>
				<p> Under Price bekerja sama dengan perusahaan pembuat sepatu lokal </p>
			</div>
			<div class="widget">
				<h2>Buy 1 get 1</h2>
				<p>Teman-teman bisa mendapatkan gratis 1 sebuah produk yang kami jual, dan hadiah diskon 50%</a>.</p>
			</div>
		</aside>
		<!-- akhir bagian sidebar website -->
 
		<!-- bagian konten Blog -->
		<div class="blog">
			<div class="conteudo">
				<div class="post-info">
					Di Posting Oleh <b>under_price.id</b>
				</div>
				<img src="Image/slider_3.png">
				<h1>Siapa kami</h1>
				<hr>
				<p>
					kami menjual produk sepatu lokal dari tahun 2021, dan kita telah mengirimkan produk kita keseluruh indonesia.
				</p>				
				<a href="#" class="continue-lendo"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3z" fill="currentColor"></path></svg> → @under_price.id </a>
			</div>

			<div class="conteudo">
				<div class="post-info">
					Di Posting Oleh <b>under_price.id</b>
				</div>
				<img src="Image/slider_4.jpeg">
				<h1> Produk Kami</h1>
				<hr>
				<p>
					-Produk yang kami jual telah mendapatkan kepercayaan masyarakat yang sangat luas, dan ini telah terbukti banyak masyarakat menggunakan septu lokal.
				</p>
			</div>
		</div>
		<!-- akhir bagian konten Blog -->
	</div>
</body>
</html>
