<?php
    // Setup Library PHPMailer
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require './lib/phpmailer/src/Exception.php';
    require './lib/phpmailer/src/PHPMailer.php';
    require './lib/phpmailer/src/SMTP.php';

    // Fungsi Mengirim Email Ke Penjual
    function SellerMail($name, $email, $loc, $prod, $count, $code, $price, $tel) {
        // Use PHPMailer
        $mail = new PHPMailer(true);
    
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP(); // Setting SMTP Email
        $mail->Host       = 'smtp.gmail.com'; // Setting Email Host
        $mail->SMTPAuth   = true;
        // Setting Email Sender Account
        $mail->Username   = 'underprice2021@gmail.com';
        $mail->Password   = 'underprice.id';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Setting Enkripsi PHPMailer
        $mail->Port       = 465; // Setting Port Email
        $mail->isHTML(true);
        $mail->setFrom('underprice2021@gmail.com', 'info@underprice'); // Setting sebagai pengirim
        $mail->addAddress('dimasadisaputr0699@gmail.com'); // Setting Dikirim Ke Email Penjual
        $mail->Subject = $name . ' | ' . $prod . ' | ' . $count . ' | ' . $code; // Setting Subjek Email
        // Setting Isi Email html
        $mail->Body    = '
        <body>
            <pre>
    <b>Kode Pemesan : </b><span>' . $code . '</span>
    <b>Nama Pemesan : </b><span>' . $name . '</span>
    <b>Email Pemesan : </b><span>' . $email . '</span>
    <b>No.Telp pemesan : </b><span>' . $tel . '</span>
    <b>Alamat Pemesan : </b><span>' . $loc . '</span>
    <b>Barang Pesanan : </b><span>' . $prod . '</span>
    <b>Jumlah Pesanan : </b><span>' . $count . '</span>
    <b>Harga Pesanan : </b><span>IDR ' . number_format($count * $price,2,',','.') . '</span>
            </pre>
        </body>
        ';
         // Setting Isi Email text
        $mail->AltBody = '
        Kode Pemesan : ' . $name . 
        'Nama Pemesan : ' . $name . 
        'Email Pemesan : ' . $email .
        'No.Telp pemesan' . $tel .
        'Alamat Pemesan : ' . $loc . 
        'Barang Pesanan : ' . $prod . 
        'Jumlah Pesananan : ' . $count .
        'Harga Pesananan : IDR ' . $count * $price;

        $mail->send();
    }

    // Fungsi Mengirim Email Ke Pembeli
    function BuyerMail($name, $email, $loc, $prod, $count, $code, $price, $tel) {
        $mail = new PHPMailer(true);
    
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'underprice2021@gmail.com';
        $mail->Password   = 'underprice.id';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->isHTML(true);
        $mail->setFrom('underprice2021@gmail.com', 'noreply@underprice2021');
        $mail->addAddress($email); 	// Setting Dikirim Ke Email Pembeli
        $mail->Subject = $code . ' | ' . $email;  // Setting Subjek Email
        // Setting Isi Email html
        $mail->Body    = '
        <body>
            <pre>
    <b>Kode : </b><span>' . $code . '</span>
    <b>Nama : </b><span>' . $name . '</span>
    <b>Email : </b><span>' . $email . '</span>
    <b>No.Telp : </b><span>' . $tel . '</span>
    <b>Alamat : </b><span>' . $loc . '</span>
    <b>Barang Pesanan : </b><span>' . $prod . '</span>
    <b>Jumlah Pesanan : </b><span>' . $count . '</span>
    <b>Harga Pesanan : </b><span>IDR ' . number_format($count * $price,2,',','.') . '</span>
            </pre>
        </body>
        ';
        // Setting Isi Email text
        $mail->AltBody = '
        Kode : ' . $name . 
        'Nama : ' . $name . 
        'Email : ' . $email . 
        'No Telp : ' . $tel .
        'Alamat : ' . $loc . 
        'Barang Pesanan : ' . $prod . 
        'Jumlah Pesanan : ' . $count.
        'Harga Pesanan : IDR ' . number_format($count * $price,2,',','.');

        // kirim email
        $mail->send();
    }