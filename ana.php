<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap - Web Projesi</title>
    <style>
        body { background-color: #2c3e50; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; font-family: Arial; }
        .login-box { background: #474545; padding: 30px; border-radius: 15px; border: 5px double #373636; color: white; width: 300px; text-align: center; }
        input { width: 90%; padding: 10px; margin: 10px 0; border-radius: 5px; border: none; }
        button { width: 100%; padding: 10px; background: #1a2c4f; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; }
        button:hover { background: #2980b9; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>SİTEYE GİRİŞ</h2>
        <form action="kontrol.php" method="POST">
            <input type="email" name="email" placeholder="Öğrenci Maili (b24...)" required>
            <input type="password" name="password" placeholder="Şifre (Öğrenci No)" required>
            <button type="submit">GİRİŞ YAP</button>
        </form>
    </div>
</body>
</html>