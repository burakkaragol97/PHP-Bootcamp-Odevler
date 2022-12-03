<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Sifre</title>
</head>
<body>
    <h1 style="text-align:center; padding-top: 100px;">Yeni Şifrenizi Giriniz</h1><br>
    <form action="" method="post">
        <div style="text-align:center;">
            <label for="isim" ><strong>Kullanıcı Adınızı Giriniz</strong></label><br>
            <input type="text" name="isim" id="isim"><br><br>
            <label for="eskisifre" ><strong>Eski Şifrenizi Giriniz</strong></label><br>
            <input type="password" name="eskisifre" id="eskisifre" ><br><br>
            <label for="yenisifre" ><strong>Yeni Şifrenizi Giriniz</strong></label><br>
            <input type="password" name="yenisifre" id="yenisifre" ><br><br>
            <label for="sifrekontrol" ><strong>Yeni Şifrenizi Kontrol Edin</strong></label><br>
            <input type="password" name="sifrekontrol" id="sifrekontrol"><br><br>
            <button type="submit" name="submit">Kaydet</button>
            <br><br>
            <a href="login.php">Giriş Yapmak İçin Tıklayınız</a>
        </div>
    </form>
</body>
</html>

<?php
    require("baglan.php");
    error_reporting(0);

    $kullaniciAdi = $_POST["isim"];
    $eskiSifre = $_POST["eskisifre"];
    $yeniSifre = $_POST["yenisifre"];
    $sifreKontrol = $_POST["sifrekontrol"];

    if(isset($_POST["submit"])) {
        $sorgu = $baglan->query("SELECT * FROM yonetici WHERE id = 1");
        $satir = $sorgu->fetch(PDO::FETCH_ASSOC);
        
        if($kullaniciAdi == $satir["kullaniciadi"] && $eskiSifre == $satir["sifre"]) {
            if($yeniSifre == $sifreKontrol) {
                $degistir = $baglan->prepare("UPDATE yonetici SET sifre = ? WHERE sifre = ?");        
                $degistir->execute(array($yeniSifre, $eskiSifre));
                echo
                "<script> alert('Şifre Başarıyla Değiştirildi')</script>;";
            } else {
                echo
                "<script> alert('Parolalar Aynı Değil'); </script>";
            }
        } else {
            echo
            "<script> alert('Kullanıcı Bulunamadı') </script>";
        }
    }
?>