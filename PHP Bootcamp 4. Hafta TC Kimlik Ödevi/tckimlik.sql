-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:8889
-- Üretim Zamanı: 27 Kas 2022, 00:07:28
-- Sunucu sürümü: 5.6.38
-- PHP Sürümü: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tckimlik`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tckimlik`
--

CREATE TABLE `tckimlik` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `tckimlik` varchar(11) COLLATE utf8mb4_turkish_ci NOT NULL,
  `durum` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tckimlik`
--

INSERT INTO `tckimlik` (`id`, `adsoyad`, `tckimlik`, `durum`, `mesaj`) VALUES
(1, 'Mehmet', '22222222220', 'TC Kimlik Geçersiz', 'TC Kimlik numarasının ilk 10 hanesi aynı ve son hanesi 0 ile bitiyor.'),
(2, 'Ahmet', '44444444444', 'TC Kimlik Geçersiz', '1. 2. 3. 4. 5. 6. 7. 8. 9. 10. hanelerin toplamının 10ʹa göre modu 11. haneye eşit değil.'),
(3, 'Selim', '4444444', 'TC Kimlik Geçersiz', 'TC Kimlik numarası 11 haneli değil.'),
(4, 'Ayşe', '44444a44444', 'TC Kimlik Geçersiz', 'TC Kimlik numarası rakamlardan oluşmuyor.'),
(5, 'Ayşe', '44444ç44444', 'TC Kimlik Geçersiz', 'TC Kimlik numarası 11 haneli değil.'),
(6, 'Ayşe', '44444ç44444', 'TC Kimlik Geçersiz', 'TC Kimlik numarası rakamlardan oluşmuyor.'),
(7, 'Ayşe', '44444ş44444', 'TC Kimlik Geçersiz', 'TC Kimlik numarası rakamlardan oluşmuyor.'),
(8, 'Mehmet Selçuk Batal', '15739ş54586', 'TC Kimlik Geçersiz', 'TC Kimlik numarası rakamlardan oluşmuyor.'),
(9, 'Ali Koçak', '01234567892', 'TC Kimlik Geçersiz', 'TC Kimlik numarası 0 ile başlıyor.'),
(10, 'Ali Koçak', '82655818766', 'TC Kimlik Geçerli', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tckimlik`
--
ALTER TABLE `tckimlik`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tckimlik`
--
ALTER TABLE `tckimlik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
