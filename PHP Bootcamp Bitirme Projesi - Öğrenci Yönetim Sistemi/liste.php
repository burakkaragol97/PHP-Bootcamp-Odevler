<?php
    session_start();

    if($_SESSION["login"]) {

    

    error_reporting(0);
    require("baglan.php");
    $sorgu = $baglan->query("select * from ogrenciler");
    $toplam = $sorgu->rowCount();


    echo "<h1 style='text-align:center; padding-top: 100px;'>Kayıtlı Öğrenciler</h1><br><br>";
    echo
    "<table border='1' width='100%'  class='table table-striped'  class='table table-striped'>
        <tr align='center'>
            <th>Öğrencinin Adı Soyadı</th>
            <th>Öğrencinin TC Kimlik Numarası</th>
            <th>Öğrencinin Sınıfı</th>
            <th>Öğrencinin Öğrencinin Numarası</th>
            <th>Öğrencinin 1. Vize Notu</th>
            <th>Öğrencinin 2. Vize Notu</th>
            <th>Öğrencinin Final Notu</th>
            <th>Öğrencinin Ortalama Notu</th>
            <th>Öğrencinin Devam Durumu</th>
        </tr>
    ";

    while($satir = $sorgu->fetch(PDO::FETCH_OBJ)) {
        $ortalama = floor(($satir->vize1 + $satir->vize2 + $satir->final) / 3);
        echo
        "
        <tr align='center'>
            <td>$satir->isim</td>
            <td>$satir->tckimlik</td>
            <td>$satir->sinif</td>
            <td>$satir->numara</td>
            <td>$satir->vize1</td>
            <td>$satir->vize2</td>
            <td>$satir->final</td>
            <td>$ortalama</td>
            
        ";
            if($ortalama > 60) {
                echo "<td>Geçti</td>";
            } else {
                echo "<td>Kaldı</td>";
            }
    }
    echo "</tr></table><br><br>";
    $toplam = $sorgu->rowCount();
    echo "<h2 style='text-align:center;'>Toplam $toplam Öğrenci Kaydı Var</h2>";
    echo 
        "<div style='text-align:center; display:flex; flex-direction:column; justfiy-content:center; gap: 50px '>
            <a href='mysqltocsv.php'>Öğrenci Kayıtlarını CSV Dosyası Olarak Kaydetmek İçin Tıklayın</a>
            <a href='yeni.php' style='display: inline-block;'>Yeni Öğrenci Kaydı Yapmak İçin Tıklayınız</a>  
            <a href='sistem.php' style='display: inline-block;'>Anasayfaya Dönmek İçin Tıklayınız</a>      
        </div>";
    }  else {
        header("Location: login.php");
    }
?>