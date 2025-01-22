<?php
session_start();
include("baglanti.php");

if(isset($_POST['giris'])) {
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];
    
    $sorgu = "SELECT * FROM adminler WHERE kullanici_adi = '$kullanici_adi' AND sifre = '$sifre'";
    $sonuc = $baglan->query($sorgu);
    
    if($sonuc->num_rows > 0) {
        $_SESSION['admin'] = true;
        header("Location: admin_panel.php");
    } else {
        echo "<script>alert('Kullanıcı adı veya şifre hatalı!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Girişi</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h2 class="text-center mb-4">Admin Girişi</h2>
            <form method="POST" action="">
                <div class="form-group">
                    <label>Kullanıcı Adı:</label>
                    <input type="text" name="kullanici_adi" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Şifre:</label>
                    <input type="password" name="sifre" class="form-control" required>
                </div>
                <button type="submit" name="giris" class="btn btn-primary btn-block">Giriş Yap</button>
            </form>
        </div>
    </div>
</body>
</html> 