<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ot Uygulaması</title>
</head>
<body>
    <form action="" method="post">
        <h2>Kg Başı Ot Fiyatlarını Giriniz</h2><br>
        <label for="kekik">Kekik:</label><br>
        <input type="text" name="kekik"><br>
        <label for="nane">Nane:</label><br>
        <input type="text" name="nane"><br>
        <label for="fesleğen">Fesleğen:</label><br>
        <input type="text" name="fesleğen"><br>
        <label for="reyhan">Reyhan:</label><br>
        <input type="text" name="reyhan"><br>
        
    <hr><br>

    <select name="tur" id="tur">
            <option value="Kekik">Kekik</option>
            <option value="Nane">Nane</option>
            <option value="Fesleğen">Fesleğen</option>
            <option value="Reyhan">Reyhan</option>
        </select><br><br>
        <label for="miktar">Miktar Giriniz (kg)</label>
        <input type="text" name="miktar"><br>
        <label for="taze">Taze mi?</label>
        <input type="checkbox" name="taze">
        <input type="submit" value="Hesapla">
    </form>
</body>
</html>

<?php
    
    error_reporting(0);

     $kekikFiyat = $_POST["kekik"];
     $naneFiyat = $_POST["nane"];
     $feslegenFiyat = $_POST["fesleğen"];
     $reyhanFiyat = $_POST["reyhan"];
     $tur = $_POST["tur"];
     $tazelik = $_POST["taze"];
     $miktarKg = $_POST["miktar"];
    
    function yazdir() {
        global $kekikFiyat;
        global $naneFiyat;
        global $feslegenFiyat;
        global $reyhanFiyat;
        global $tazelik;
        global $miktarKg;
        global $tur;
        global $miktarKg;
        switch($tur) {
            case "Kekik":
                echo "Tür : $tur <br>";
                echo "-$tur- miktar (kg): $miktarKg <br>";
                if($tazelik == true) {
                    echo "Taze mi?: Taze<br>";
                    $tutar = $kekikFiyat * $miktarKg;
                    echo "İşlem Tutarı: $tutar TL<br>";
                    $kdv = $tutar * (18 / 100);
                    echo "KDV(%18): $kdv <br>";
                    echo "<br>";
                    echo "**********************************";
                    echo "<br>";
                    echo "Fatura: <br>";
                    echo "$tur: $miktarKg KG x $kekikFiyat TL = $tutar <br>";
                    echo "Taze <br>";
                    echo "KDV (%18): $kdv TL <br>";
                    $genelToplam = $kdv + $tutar;
                    echo "Genel Toplam: $genelToplam TL" ;
                } else {
                    echo "Taze mi?: Taze Değil<br>";
                    $indirim = ($kekikFiyat * $miktarKg) * (10 / 100);
                    $tutar = ($kekikFiyat * $miktarKg) - $indirim;
                    echo "İşlem Tutarı: $tutar TL <br>";
                    echo "Tazelik Etkisi: -$indirim <br>";
                    $toplamTutar = $kekikFiyat * $miktarKg;
                    echo "Tutar: $toplamTutar <br>";
                    $kdv = $tutar * (18 / 100);
                    echo "KDV(%18): $kdv TL <br>";
                    echo "<br>";
                    echo "**********************************";
                    echo "<br>";
                    echo "Fatura: <br>";
                    echo "$tur: $miktarKg KG x $kekikFiyat TL = $tutar <br>";
                    echo "Taze Değil <br>";
                    echo "KDV (%18): $kdv TL <br>";
                    $genelToplam = $kdv + $tutar;
                    echo "Genel Toplam: $genelToplam TL" ;
                }
            break;
            case "Nane":
                echo "Tür : $tur <br>";
                echo "-$tur- miktar (kg): $miktarKg <br>";
                if($tazelik == true) {
                    echo "Taze mi?: Taze<br>";
                    $tutar = $naneFiyat * $miktarKg;
                    echo "İşlem Tutarı: $tutar TL<br>";
                    $kdv = $tutar * (18 / 100);
                    echo "KDV(%18): $kdv <br>";
                    echo "<br>";
                    echo "**********************************";
                    echo "<br>";
                    echo "Fatura: <br>";
                    echo "$tur: $miktarKg KG x $naneFiyat TL = $tutar <br>";
                    echo "Taze <br>";
                    echo "KDV (%18): $kdv TL <br>";
                    $genelToplam = $kdv + $tutar;
                    echo "Genel Toplam: $genelToplam TL" ;
                } else {
                    echo "Taze mi?: Taze Değil<br>";
                    $indirim = ($naneFiyat * $miktarKg) * (20 / 100);
                    $tutar = ($naneFiyat * $miktarKg) - $indirim;
                    echo "İşlem Tutarı: $tutar TL <br>";
                    echo "Tazelik Etkisi: -$indirim <br>";
                    $toplamTutar = $naneFiyat * $miktarKg;
                    echo "Tutar: $toplamTutar <br>";
                    $kdv = $tutar * (18 / 100);
                    echo "KDV(%18): $kdv TL <br>";
                    echo "<br>";
                    echo "**********************************";
                    echo "<br>";
                    echo "Fatura: <br>";
                    echo "$tur: $miktarKg KG x $naneFiyat TL = $tutar <br>";
                    echo "Taze Değil <br>";
                    echo "KDV (%18): $kdv TL <br>";
                    $genelToplam = $kdv + $tutar;
                    echo "Genel Toplam: $genelToplam TL" ;
                }
            break;
            case "Fesleğen":
                echo "Tür : $tur <br>";
                echo "-$tur- miktar (kg): $miktarKg <br>";
                if($tazelik == true) {
                    echo "Taze mi?: Taze<br>";
                    $tutar = $feslegenFiyat * $miktarKg;
                    echo "İşlem Tutarı: $tutar TL<br>";
                    $kdv = $tutar * (18 / 100);
                    echo "KDV(%18): $kdv <br>";
                    echo "<br>";
                    echo "**********************************";
                    echo "<br>";
                    echo "Fatura: <br>";
                    echo "$tur: $miktarKg KG x $feslegenFiyat TL = $tutar <br>";
                    echo "Taze <br>";
                    echo "KDV (%18): $kdv TL <br>";
                    $genelToplam = $kdv + $tutar;
                    echo "Genel Toplam: $genelToplam TL" ;
                } else {
                    echo "Taze mi?: Taze Değil<br>";
                    $indirim = ($feslegenFiyat * $miktarKg) * (10 / 100);
                    $tutar = ($feslegenFiyat * $miktarKg) - $indirim;
                    echo "İşlem Tutarı: $tutar TL <br>";
                    echo "Tazelik Etkisi: -$indirim <br>";
                    $toplamTutar = $feslegenFiyat * $miktarKg;
                    echo "Tutar: $toplamTutar <br>";
                    $kdv = $tutar * (18 / 100);
                    echo "KDV(%18): $kdv TL <br>";
                    echo "<br>";
                    echo "**********************************";
                    echo "<br>";
                    echo "Fatura: <br>";
                    echo "$tur: $miktarKg KG x $feslegenFiyat TL = $tutar <br>";
                    echo "Taze Değil <br>";
                    echo "KDV (%18): $kdv TL <br>";
                    $genelToplam = $kdv + $tutar;
                    echo "Genel Toplam: $genelToplam TL" ;
                }
            break;
            case "Reyhan":
                echo "Tür : $tur <br>";
                echo "-$tur- miktar (kg): $miktarKg <br>";
                if($tazelik == true) {
                    echo "Taze mi?: Taze<br>";
                    $tutar = $reyhanFiyat * $miktarKg;
                    echo "İşlem Tutarı: $tutar TL<br>";
                    $kdv = $tutar * (18 / 100);
                    echo "KDV(%18): $kdv <br>";
                    echo "<br>";
                    echo "**********************************";
                    echo "<br>";
                    echo "Fatura: <br>";
                    echo "$tur: $miktarKg KG x $reyhanFiyat TL = $tutar <br>";
                    echo "Taze <br>";
                    echo "KDV (%18): $kdv TL <br>";
                    $genelToplam = $kdv + $tutar;
                    echo "Genel Toplam: $genelToplam TL" ;
                } else {
                    echo "Taze mi?: Taze Değil<br>";
                    $indirim = ($reyhanFiyat * $miktarKg) * (25 / 100);
                    $tutar = ($reyhanFiyat * $miktarKg) - $indirim;
                    echo "İşlem Tutarı: $tutar TL <br>";
                    echo "Tazelik Etkisi: -$indirim <br>";
                    $toplamTutar = $reyhanFiyat * $miktarKg;
                    echo "Tutar: $toplamTutar <br>";
                    $kdv = $tutar * (18 / 100);
                    echo "KDV(%18): $kdv TL <br>";
                    echo "<br>";
                    echo "**********************************";
                    echo "<br>";
                    echo "Fatura: <br>";
                    echo "$tur: $miktarKg KG x $reyhanFiyat TL = $tutar <br>";
                    echo "Taze Değil <br>";
                    echo "KDV (%18): $kdv TL <br>";
                    $genelToplam = $kdv + $tutar;
                    echo "Genel Toplam: $genelToplam TL" ;
                }
            break;
        }
    }

    yazdir();
