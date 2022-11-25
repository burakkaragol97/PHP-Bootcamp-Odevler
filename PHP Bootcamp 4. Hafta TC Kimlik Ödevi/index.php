<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TC Kimlik NO Doğrulama</title>
</head>
<body>
    <h1>TC Kimlik Numaranızı Giriniz</h1>
    <form action="" method="post">
        <input type="text" name="tckimlik">
        <input type="submit" name="submit" value="Doğrula">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])) {
       $tc = $_POST["tckimlik"];
       if (strlen($tc) == 11) {
		if (is_numeric($tc)) {
			$tc10 = ((($tc[0] + $tc[2] + $tc[4] + $tc[6] + $tc[8])*7) - ($tc[1] + $tc[3] + $tc[5] + $tc[7])) % 10;
			if ($tc10 == $tc[9]) {
				$tc11 = ($tc[0] + $tc[1] + $tc[2] + $tc[3] + $tc[4] + $tc[5] + $tc[6] + $tc[7] + $tc[8] + $tc[9]) % 10;
				if ($tc11 == $tc[10]) {
					echo "TC Kimlik Numarası GEÇERLİ!";
				} else {
					echo "Geçersiz TC Kimlik Numarası!";
				}
			} else {
				echo "Geçersiz TC Kimlik Numarası!";
			}
		} else {
			echo "TC Kimlik Numarası yalnızca rakamlardan oluşmaktadır.";
		}
	} else {
		echo "TC Kimlik Numarası 11 hane olmak zorundadır.";
	}
    }
?>