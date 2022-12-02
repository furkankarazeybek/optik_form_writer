-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 22 Kas 2022, 16:40:48
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
-- Veritabanı: `optik_1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `optik_bilgileri`
--

DROP TABLE IF EXISTS `optik_bilgileri`;
CREATE TABLE IF NOT EXISTS `optik_bilgileri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tc` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sertifika` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_salon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
