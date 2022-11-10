<?php
     session_start();

    $urunler = array(
        array("urun" => "Ülker Çikolatalı Gofret 40gr.", "urunFiyatı" => "10"),
        array("urun" => "Eti Damak Kare Çikolata 60gr.", "urunFiyatı" => "20"),
        array("urun" => "Nestle Bitter Çikolata", "urunFiyatı" => "20"),
    );

    error_reporting(0);

    echo "
    <form action='sepet-odev.php' method='post'>
        <table border='1'> 
            <tr>
                <th>Ürün Adı</th>
                <th>Ürün Fiyatı</th>
                <th>Adet</th>
            </tr>";
        
    foreach($urunler as $anahtar => $urun) {
        $urunAd = $urun["urun"];
        $urunFiyat = $urun["urunFiyatı"];
        echo "
            <tr>
                <td>$urunAd</td>
                <td>$urunFiyat</td>
                <td><input type='text' name='urun$anahtar'></td>
        ";
    }   

        echo "</tr>";
        echo "</table>";
        echo "<br><br>";
        echo "<input type = 'submit' name = 'dugme' value = 'Ürünü Sepete Ekle'>";
        echo "</form>";
        echo "<br><br>";

        echo "
        <table border='1'> 
            <tr>
                <th>Ürün Adı</th>
                <th>Adet</th>
                <th>Toplam</th>
            </tr>";
        
        foreach($urunler as $anahtar => $urun) {
           $_SESSION["input"] = $_POST["urun$anahtar"];
           $degisken = $_SESSION["input"];
           $urunAd = $urun["urun"];
           $urunFiyat = $urun["urunFiyatı"];
           $fiyat = $degisken * $urunFiyat;
           echo "
               <tr>
                   <td>$urunAd</td>
                   <td>$degisken</td>
                   <td>$fiyat</td>
                </tr>
                
           ";
           $toplamFiyat += $fiyat;
        }
        echo "
        <tr>
        <td>Genel Toplam</td>
        <td>$toplamFiyat</td>
        </tr></table>";
?>
