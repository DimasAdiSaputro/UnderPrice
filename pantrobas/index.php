<?php
    include('../connection.php'); #import connection.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Underprice Store | Pantrobas</title>
    <link rel="stylesheet" href="<?= public_url('assets/page.css') ?>">
    <link rel="icon" type="image/png" href="<?= public_url('assets/icon.png') ?>">
</head>

<body>
    <div class="navbar">
        <a class="logo" href="<?= public_url('') ?>">
            <i id="brand-icon">
                <img src="../underprice.png">
            </i>
        </a>
    </div>

    <div class="content-display">
        <div class="content">
            <div class="brand-logo">
                <img id="img-1" src="../underprice.png" />
            </div>
            <?php

                

                if (isset($_POST['product'])) {
                    $query = "SELECT * FROM detail_product INNER JOIN product_card ON detail_product.product_id=product_card.product_id WHERE detail_product.product_id='" . $_POST['product'] . "'";
                    $result = $conn->query($query);
                    unset($_POST['product']);
                    // <div class="image">
                    //     <img src="' . cdn_url(explode(" ", $row['image_url'])[0]) . '"/>
                    // </div>
                    while($row = $result->fetch_assoc()) {
                        $img = explode(" ", $row['image_url']);
                        $slide = '';
                        $col = '';
                        $col_size = 50/count($img);
                        foreach($img as $k){
                            $slide .= '
                            <span class="product_name">' . $row['name'] . '</span>
                            <div class="mySlides image">
                                <img src="' . cdn_url($k) . '" style="width:100%">
                                <div id="controler">
                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                </div>
                            </div>
                            ';
                        }
                        foreach($img as $j=>$k){
                            $spacer = $col_size*2 - $col_size/3;
                            $i = $j+1;
                            $col .= '
                            <div class="column image-1" style="width: ' . $col_size . '%; padding-right: ' . $col_size/10 . '%; margin-top: ' . $col_size/10 . '%;">
                                <img class="demo" src="' . cdn_url($k) . '" onclick="currentSlide('.$i.')" alt="">
                            </div>
                            ';
                        }
                        echo '
                        <div id="product_modal" class="modal">
                        
                            <!-- Modal content -->
                            <div class="modal-content">
                                <div class="modal-header">
                                <span class="close">&times;</span>
                                </div>
                                <div class="modal-body" style="padding-bottom: ' . $col_size + $col_size/4 . '%;">'.
                                    $slide
                                    .
                                    $col
                                    . '
                                    <form name="buy-'.$row['product_id'].'" action="' . public_url('order') . '" method="get">
                                    <input type="hidden" name="id" value="' . $row['product_id'] . '">
                                    <span class="btn-buy" onclick="document.forms[`buy-' . $row['product_id'] . '`].submit()" style="bottom: ' . $spacer . '%;">IDR ' . number_format($row['price'],2,',','.') . '</span>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <script>
                        
                        var modal = document.getElementById("product_modal");
                        var span = document.getElementsByClassName("close")[0];
                        modal.style.display = "block";
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                        window.onclick = function (event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                        }
                        var slideIndex = 1;
                        showSlides(slideIndex);
                        
                        // Next/previous controls
                        function plusSlides(n) {
                            showSlides(slideIndex += n);
                        }
                        
                        // Thumbnail image controls
                        function currentSlide(n) {
                            showSlides(slideIndex = n);
                        }
                        
                        function showSlides(n) {
                            var i;
                            var slides = document.getElementsByClassName("mySlides");
                            var dots = document.getElementsByClassName("demo");
                            if (n > slides.length) {slideIndex = 1}
                            if (n < 1) {slideIndex = slides.length}
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].style.opacity = 0.6
                            }
                            slides[slideIndex-1].style.display = "block";
                            dots[slideIndex-1].style.opacity = 1
                        }                        
                        </script>
                                    ';
                    }
                }


                $query = "SELECT * FROM product_card WHERE category=3";
                $result = $conn->query($query);
                // var_dump($result);
                while($row = $result->fetch_assoc()){
                    echo '
                    <form method="post" name="' . $row['product_id'] . '" onsubmit="this.preventDefault()">
                        <input type="hidden" value="' . $row['product_id'] . '" name="product" />
                        <div class="card" onclick="document.forms[`' . $row['product_id'] . '`].submit()">
                            <div class="overlay-card"></div>
                            <img src="' . cdn_url(explode(" ", $row['image_url'])[0]) . '">
                        </div>
                    </form>
                    ';
                    
                }
            ?>
        </div>
    </div>
    <div id="category-container">
        <div class="nav-category hanger">
            <i id="hanger"></i>
        </div>
        <a href="<?= public_url('') ?>">
            <div class="nav-category home hide-category">
                <i id="home"></i>
            </div>
        </a>
        <a href="<?= public_url('warrior') ?>">
            <div class="nav-category warrior hide-category">
                <i id="warrior"></i>
            </div>
        </a>
        <a href="<?= public_url('ventela') ?>">
            <div class="nav-category ventela hide-category">
                <i id="ventela"></i>
            </div>
        </a>
        <a href="<?= public_url('pantrobas') ?>">
            <div class="nav-category pantrobas hide-category">
                <i id="pantrobas"></i>
            </div>
        </a>
    </div>
    <script src="<?= public_url('assets/page.js') ?>"></script>
</body>

</html>