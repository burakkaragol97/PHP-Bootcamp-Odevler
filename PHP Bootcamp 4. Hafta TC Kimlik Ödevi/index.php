<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="text-align:center; padding-top:100px;">
  <form action="kontrol.php" method="post">
    Adı Soyadı:<br>
    <input type="text" name="adsoyad"><br><br>
    TC Kimlik:<br>
    <input type="text" name="tckimlik"><br><br>
    <input type="hidden" name="kontrol" value="1">
    <button type="submit">Doğrula ve Kaydet</button>
  </form>
</body>
</html>