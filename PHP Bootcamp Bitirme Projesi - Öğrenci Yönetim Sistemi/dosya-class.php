<?php
    class dosyaYukleme {
        
        private $dosya;
        private $veriler;
        
        public function __construct() {
            
            $this->dosya = $dosya;
            $this->veriler = $veriler;

            require("baglan.php");
            $veriler = $baglan->query("SELECT * FROM ogrenciler");
            $satir = $veriler->fetch(PDO::FETCH_ASSOC);
            touch($dosya);
            $dosya = fopen("ogrenciler.csv", "wbt");
            while($satir = $veriler->fetch(PDO::FETCH_ASSOC)) {
                foreach($satir as $anahtar => $deger) {
                    fwrite($dosya, " $anahtar: $deger");
            }
    }
        }
    }
?>