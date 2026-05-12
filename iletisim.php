<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adsoyad = htmlspecialchars($_POST['adsoyad']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['telefon']);
    $konu = htmlspecialchars($_POST['konu']);
    $mesaj = htmlspecialchars($_POST['mesaj']);

    echo "<h1>Gönderilen Bilgiler</h1>";
    echo "<p><b>Ad Soyad:</b> $adsoyad</p>";
    echo "<p><b>E-mail:</b> $email</p>";
    echo "<p><b>Telefon:</b> $tel</p>";
    echo "<p><b>Konu:</b> $konu</p>";
    echo "<p><b>Mesaj:</b> $mesaj</p>";
    echo "<hr><a href='sehrim.html'>Geri Dön</a>";
}
?>