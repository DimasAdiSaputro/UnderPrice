<?php
    include('../connection.php'); #import connection.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $res = array(); // Eksekusi Jika Ada Parameter ID
        if (isset($_GET['id'])) { 
            // Query Database untuk Mencari Detail Produk dengan ID dari Parameter id dalam Post Method
            $sql = "SELECT * FROM detail_product INNER JOIN product_card ON detail_product.product_id=product_card.product_id WHERE detail_product.product_id='" . $_GET['id'] . "'";
            $res = $conn->query($sql)->fetch_assoc(); // Eksekusi Jika Ada Respon Dari Database
            if ($res) {
                echo '<title>Order | ' . $res['name'] . '</title>'; // Mengubah Title Dengan Nama Produk
            }
        }
        ?>
    <link rel="stylesheet" href="<?= public_url('assets/order.css') ?>">
</head>
<body>
    <div class="img-container">
        <?php
            if ($res) { // Eksekusi Jika Ada Respon Dari Database
                echo count($res);
                $img = explode(' ',$res['image_url']);
                $slide = '';
                $col = '';
                foreach($img as $j=>$k){
                    $slide .= '
                    <div class="mySlides image">
                        <img src="' . cdn_url($k) . '" style="width:100%">
                        <div id="controler">
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                    </div>
                    ';
                } 
                foreach($img as $j=>$k){ // Gambar Thumbnail
                    $col_size = 50/count($img);
                    $i = $j+1;
                    $col .= '
                    <div class="column image-1" style="width: ' . $col_size . '%; padding-right: ' . $col_size/10 . '%; margin-top: ' . $col_size/10 . 'vh;">
                        <img class="demo" src="' . cdn_url($k) . '" onclick="currentSlide('.$i.')" alt="">
                    </div>
                    ';
                } 
                echo $slide . '<div id="col-view">' . $col . '</div>';
            } else {
                echo '
                <script>
                    window.open("' . public_url('') . '", "_self")
                </script>
                ';
            }
        ?>
    </div>
    <div class="container">
        <form action="<?= public_url('pesan.php') ?>" method="post">

            <input type="hidden" name="prod" value="<?= $res['name'] ?>"> <!-- Berisi Nama Produk -->
            <input type="hidden" name="price" value="<?= $res['price'] ?>"> <!-- Berisi harga Produk -->

            <label for="fname">Name</label>
            <input type="text" id="fname" name="name" placeholder="Nama Lengkap.."  required>

            <label for="email">No.Telp</label>
            <input type="number" id="tel" name="no_telp" placeholder="No tlp aktif.."  required>

            <label for="email">Email</label>
            <input type="text" id="email" name="mail" placeholder="Email Valid.."  required>

            <label for="jumlah">Jumlah Pembelian</label>
            <input type="number" id="jumlah" name="count" placeholder="Jumlah Pembelian.."  required>

            <label for="alamat">Alamat Lengkap</label>
            <textarea id="alamat" name="alamat" placeholder="Alamat Lengkap.." minlength='10' style="height:200px" required></textarea>

            <input type="submit" value="Pesan">

        </form>
    </div>
    <script>
        // Cek Apakah ada Parameter ID
        var url_string = window.location.href
        var url = new URL(url_string);
        var id = url.searchParams.get("id");
        if (!id) { // Mengalihkan Ke Halaman Utama Jika Tidak Ada Parameter ID
            window.open('<?=public_url('')?>', '_self')
        }
        // Menampilkan Slider
        var slideIndex = 1;
        showSlides(slideIndex);
        
        // kontrol slider
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        
        // Kontrol Gambar Thumbnail
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        //Fungsi Untuk Menampilkan Slider
        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                // Sembunyikan Gambar Slider
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) { // Menipiskan Gambar Thumbnail
                dots[i].style.opacity = 0.6
            }
            // Menampilkna Gambar Slider (saat ini) dan Menebalkan Gambar Thumbnail (saat ini)
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].style.opacity = 1
        }                      
    </script>
</body>
</html>