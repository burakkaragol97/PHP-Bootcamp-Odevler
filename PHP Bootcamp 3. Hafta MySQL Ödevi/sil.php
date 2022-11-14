<?php

    $baglan = new PDO("mysql:host=localhost;dbname=odev;charset=utf8", "burak", "1234");
    $kayitno = $_GET["id"];
    $sorgu = $baglan->query("delete from kisiler where id=$kayitno");

    if($sorgu) { 
        echo "<script>
        alert('Kayıt Silindi!');
        window.location.href = 'liste.php';
        </script>
        ";
    } else {
        echo "Kayıt silinemedi";
    }
?>