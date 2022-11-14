<?php
    $baglan = new PDO("mysql:host=localhost;dbname=odev;charset=utf8", "burak", "1234");
    $sorgu = $baglan->prepare("insert into kisiler values (?,?,?)");
    $adsoyad = $_POST["adsoyad"];
    $telefon = $_POST["telefon"];
    $ekle = $sorgu->execute(array(NULL, $adsoyad, $telefon));

    $toplam = $sorgu->rowCount();

    if($toplam > 0) { 
        header("Location:yeni.php"); 
    } else {
        echo "Kayıt Eklenemedi";
    } 
?>