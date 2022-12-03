<?php
    include_once("dosya-class.php");
    error_reporting(0);

    $dosya = new dosyaYukleme();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV Dosyası</title>
</head>
<body>
    <a href="liste.php" style="text-align:center; padding-top:100px">CSV Dosyası İşlemi Tamamlandı. Liste Sayfasına Dönmek İçin Tıklayınız</a>
</body>
</html>