<?php
    include('../connection.php'); #import connection.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Pelayanan</title>
    <link href="<?=public_url('style.css')?>" rel="stylesheet">
</head>
<body style="overflow: hidden;">
    <?php
		// Eksekusi Jika Ada Data Di Method POS
        if(isset($_POST['email'])){
            $query = "INSERT INTO kontak (name, email, message) VALUES ('" . $_POST['fullname'] . "', '" . $_POST['email'] . "', '" . $_POST['message'] . "')";
            $conn->query($query);  // Insert Data Komentar Ke Database
	    echo '<script>
        	      window.location.replace("' . public_url('kontak?done_send=true') . '")
    		  </script>'; // Mengalihkan Ke Halaman Kontak Dengan Parameter done_send Untuk Menampilkan Alert

        }
    ?>
	
    <nav class="contact-menu">     <!-- bagian menu		 -->
		<ul>
			<li>
				<a href="<?= public_url('#') ?>">Home</a>
			</li>
			<li class ="dropdown-button"><button href="#">Kategori Pilihan Produk</button>
				<ul class="dropdown-list"> <!-- Navbar Dropdown -->
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
				</ul> <!-- Akhir Navbar Dropdown -->
			</li>
			<li class="nav-active">
				<a href=" <?= public_url('kontak') ?> ">Kontak Pelayanan</a>
			</li>
		</ul>
	</nav>     <!-- akhir bagian menu		 -->

    <div class="contact-text">
        <h2>Komentar dan Saran Anda Sangat Kami Butuhkan Untuk Meningkatkan Kualitas Situs Kami</h2>
    </div>
	<div class="contact-container">
	    <div class="form-container">
			<div class="alert" style="display: none;"> <!-- Alert Ketika Komentar Berhasil Dikirim -->
				<span class="closebtn">&times;</span>
				Pesan Kamu Sudah Dikirim, <b>Terima Kasih!</b>
			</div>
            <div>
				<form action="<?= public_url('kontak/index.php') ?>" method="post">
                Nama     : <input type="text" name="fullname" size='25' placeholder='Masukkan Nama Anda' required/>
                <br />
                Email    : <input type="email" name="email" size="25" placeholder='Masukkan Alamat Email' required/>
                <br />
                Komentar : <textarea name="message" rows='5' cols='40' placeholder="Masukkan Komentar atau Saran Kamu"></textarea>
                <br/>
                <input type="submit" value="Kirim" /><input type="reset" value="Batal" />

				</form>
			</div> 
		</div>
	</div>
	<script src="<?=public_url('assets/contact.js')?>"></script>
</body>
</html>