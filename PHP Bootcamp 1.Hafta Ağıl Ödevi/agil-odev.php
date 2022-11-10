<?php
    function hesapla($agilSayisi = 0, $agilKapasitesi = 0, $koyunSayisi = 0) {
        $ciftlik = array(
            "agilSayisi" => $agilSayisi,
            "agilKapasitesi" => $agilKapasitesi * $agilSayisi,
            "koyunSayisi" => $koyunSayisi
        );

        $toplamKapasite = $agilSayisi * $agilKapasitesi;
        $artan = $koyunSayisi - $toplamKapasite;
        $kalanKoyun = $koyunSayisi;

        echo "Ağıl Sayısı: $agilSayisi <br>";
        echo "Ağıl Kapasitesi: $toplamKapasite <br>";
        echo "Koyun Sayısı: $koyunSayisi <br>";
        echo "<br>";

        for($i = $agilSayisi; $i >= 1; $i--) {
            if($kalanKoyun >= $agilKapasitesi) {
                echo "$i. Ağıl: $agilKapasitesi <br>";
            } else {
                if($kalanKoyun >= 0) {
                    echo "$i. Ağıl: $kalanKoyun <br>";
                } else {
                    echo "$i. Ağıl: 0 <br>";
                }
            }
            $kalanKoyun -= $agilKapasitesi;
        }

        echo "<br>";

        if($artan > 0) {
            echo "Dışarıda Kalan Koyun: $artan <br>";
        }
    } 

    
    hesapla(3, 45, 147);

?>