<?php
    if($_SESSION["login"] == true) {

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğrenci Kayıt</title>
</head>
<body style="text-align:center; padding-top:50px;">
    <h1>Öğrenci Bilgilerini Giriniz</h1><br>
    <form action="yeni.php" method="post">
        <label for="isim">Öğrenci Adı ve Soyadını Giriniz</label><br>
        <input type="text" name="isim" id="isim" required><br><br>
        <label for="tckimlik">Öğrenci TC Kimlik Numarasını Giriniz</label><br>
        <input type="text" name="tckimlik" id="tckimlik" required><br><br>
        <label for="sinif">Öğrenci Sınıfını Giriniz</label><br>
        <input type="text" name="sinif" id="sinif" required><br><br>
        <label for="numara">Öğrenci Okul Numarasını Giriniz</label><br>
        <input type="text" name="numara" id="numara" required><br><br>
        <label for="cinsiyet">Öğrenci Cinsiyetini Giriniz</label><br>
        <input type="text" name="cinsiyet" id="cinsiyet" required><br><br>
        <label for="dogumtarih">Öğrencinin Doğum Tarihini Giriniz</label><br>
        <input type="text" name="dogumtarih" id="dogumtarih" required><br><br>
        <label for="vize1">Öğrencinin 1. Vize Notunu Giriniz</label><br>
        <input type="text" name="vize1" id="vize1" required><br><br>
        <label for="vize2">Öğrencinin 2. Vize Notunu Girinz</label><br>
        <input type="text" name="vize2" id="vize2" required><br><br>
        <label for="final">Öğrencinin Final Notunu Girniz</label><br>
        <input type="text" name="final" id="final" required><br><br>
        <button type="submit" name="submit">Kaydet</button>
    </form>
    <br>
    <a href="liste.php">Liste Sayfası İçin Tıklayınız</a>
</body>
</html>

<?php
    require("baglan.php");

    if(isset($_POST["submit"])) {
        $isim = $_POST["isim"];
        $tckimlik = $_POST["tckimlik"];
        $sinif = $_POST["sinif"];
        $numara = $_POST["numara"];
        $cinsiyet = $_POST["cinsiyet"];
        $dogum = $_POST["dogumtarih"];
        $vize1 = $_POST["vize1"];
        $vize2 = $_POST["vize2"];
        $final = $_POST["final"];
        $ortalama = ($vize1 + $vize2 + $final) / 3;

        $sorgu = $baglan->prepare("insert into ogrenciler values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $ekle = $sorgu->execute(array(NULL, $isim, $tckimlik, $sinif, $numara, $cinsiyet, $dogum, $vize1, $vize2, $final));
        
        $toplam = $sorgu->rowCount();
        if($toplam > 0) {
            header("Refresh:3; url=liste.php");
            echo
            "<script> alert('Kayıt Eklendi: Öğrenciler Sayfasına Yönlendiriliyorsunuz (3 Saniye)'); </script>";
        } else {
            echo "Kayıt eklenemedi";
        }
    }
} else {
    header("Location: login.php");
}
?>
