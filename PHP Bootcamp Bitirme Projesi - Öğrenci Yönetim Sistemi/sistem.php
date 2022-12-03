<?php
    session_start();
    if($_SESSION["login"]) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
    
</head>
<body style="text-align:center; padding-top:100px;">
    <div style="text-align:center">
        <a href="liste.php" >Kayıt Listesi</a> - <a href="yeni.php">Yeni Kayıt</a>
        <br><hr><br><br>
        <a href="cikis.php">Çıkış Yap</a>
    </div>
</body>
</html>

<?php
    } else {
        header("Location: login.php");
    }
?>