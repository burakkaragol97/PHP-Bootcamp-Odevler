<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Girişi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div style="text-align: center; padding-top: 100px">
        <h1>Admin Girişi</h1>
        <form action="" method="post">
            <label for="kullaniciadi" ><strong>Kullanıı Adınızı Giriniz</strong></label><br>
            <input type="text" name="kullaniciadi" id="kullaniciadi"><br><br>
            <label for="sifre" class="form-label"><strong>Şifrenizi Giriniz</strong></label><br>
            <input type="password" name="sifre" id="sifre" ><br><br>
            <button type="submit" name="submit">Giriş Yap</button>
            <button type="submit" name="sifremiunuttum">Şifremi Unuttum</button>
        </form>
    </div>
</body>
</html>

<?php
    session_start();
    require("baglan.php");

    if(isset($_POST["sifremiunuttum"])) {
        header("Location: yenisifre.php");
    }

    
   if($_POST) {
    $kullaniciAdi = $_POST["kullaniciadi"];
    $sifre = $_POST["sifre"];

    if($kullaniciAdi != "" && $sifre != "") {
        $sorgu = $baglan->prepare("SELECT * FROM yonetici WHERE kullaniciadi = ? AND sifre = ?");
        $sorgu->execute([$kullaniciAdi, $sifre]);
        
        $toplam = $sorgu->rowCount();
        // $satir = $sorgu->fetch(PDO::FETCH_ASSOC);

        if($toplam > 0) {
            $_SESSION["login"] = true;
            echo
            "<script> alert('Yönetici Girişi Başarılı!') </script>";

            header("Location:sistem.php");

        } else {
            echo
            "<script> alert('Bu Bilgilere Ait Bir Yönetici Bulunamadı') </script>";
        }
        
    } else {
        echo
        "<script> alert('Lütfen Kullanıcı Adınızı ve Şifrenizi Giriniz') </script>";
    }
    
   }
?>