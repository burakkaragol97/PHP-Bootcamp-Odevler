<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Kayıt</title>
</head>
<body>
    <div style="text-align:center">
        <a href="liste.php">Kayıt Listesi</a> - <a href="yeni.php">Yeni Kayıt</a>
        <br><hr><br><br>
    </div>

    <form action="ekle.php" method="post" style="text-align:center">
        <h3>Adınız Soyadınız:</h3>
        <input type="text" name="adsoyad">
        <br><br>
        <h3>Telefon Numaranız:</h3>
        <input type="text" name="telefon">
        <br><br>
        <input type="submit" value="Bilgileri Kaydet">
    </form>
</body>
</html>
