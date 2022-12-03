-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 03 Ara 2022, 12:35:18
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ogrencisistemi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenciler`
--

DROP TABLE IF EXISTS `ogrenciler`;
CREATE TABLE IF NOT EXISTS `ogrenciler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tckimlik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sinif` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `numara` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `dogumtarihi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `vize1` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `vize2` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `final` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ogrenciler`
--

INSERT INTO `ogrenciler` (`id`, `isim`, `tckimlik`, `sinif`, `numara`, `cinsiyet`, `dogumtarihi`, `vize1`, `vize2`, `final`) VALUES
(22, 'Melra Karagöl', '22542336655', '3', '32655', 'Kadın', '24.07.1992', '55', '22', '33'),
(23, 'Burak Karagöl', '223335645', '4', '12351', 'Erkek', '18.01.1997', '88', '99', '92');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

DROP TABLE IF EXISTS `yonetici`;
CREATE TABLE IF NOT EXISTS `yonetici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullaniciadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`id`, `kullaniciadi`, `sifre`) VALUES
(1, 'burak', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
