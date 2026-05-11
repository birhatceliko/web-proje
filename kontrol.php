<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $dogru_email = "g221210030@sakarya.edu.tr";
    $dogru_sifre = "g221210030";

    if ($email == $dogru_email && $password == $dogru_sifre) {
        // BAŞARILI: Kullanıcıyı senin asıl sitene gönderiyoruz
        // Ödevde "Hoşgeldiniz" mesajı istendiği için önce mesajı verip sonra yönlendirebiliriz
        echo "<script>
                alert('Hoşgeldiniz g221210030');
                window.location.href = 'sehrim.html';
              </script>";
    } else {
        // HATALI: Hata mesajı ver ve giriş sayfasına geri gönder
        echo "<script>
                alert('Hatalı kullanıcı adı veya şifre!');
                window.location.href = 'ana.php';
              </script>";
    }
}
?>