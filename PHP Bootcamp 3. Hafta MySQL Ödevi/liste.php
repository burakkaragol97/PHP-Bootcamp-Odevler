<?php

    $baglan = new PDO("mysql:host=localhost;dbname=odev;charset=utf8", "burak", "1234");
    $sorgu = $baglan->query("select * from kisiler");

        
    echo "<a href='liste.php'>Kayıt Listesi</a> - <a href='yeni.php'>Yeni Kayıt</a>";

    echo "<br><hr><br>";

    echo "<h3 style='text-align:center'>Liste Sayfası</h3>";
    echo "<br>";
    echo "<table border='1' width='100%'>
        <tr align='center'>
        <th>Adı Soyadı</th>
        <th>Telefon Numarası</th>
        <th>İşlem</th>
        </tr>
    ";

    while($satir = $sorgu->fetch(PDO::FETCH_OBJ)) {
        echo "<tr align='center'>
            <td>$satir->adsoyad</td>
            <td>$satir->telefon</td>
            <td> <a href='sil.php?id=$satir->id'>Sil</a></td>
            </tr>
        ";
    }

    echo "</table>";
    echo "<br><br>";
    $toplam = $sorgu->rowCount();
    
    echo "Toplam -$toplam- kayıt var";
?>