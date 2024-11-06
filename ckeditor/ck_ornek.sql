-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Oca 2018, 14:54:05
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `ck_ornek`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerikler`
--

CREATE TABLE IF NOT EXISTS `icerikler` (
  `icerik_id` int(11) NOT NULL AUTO_INCREMENT,
  `icerik_baslik` varchar(50) NOT NULL,
  `icerik_detay` text NOT NULL,
  PRIMARY KEY (`icerik_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `icerikler`
--

INSERT INTO `icerikler` (`icerik_id`, `icerik_baslik`, `icerik_detay`) VALUES
(1, 'icerik1', 'icerik detay 1'),
(2, 'icerik2', 'icerik detay 2'),
(3, 'icerik3', 'icerik detay 3'),
(4, 'icerik44', '<p>ddsadsadddsd</p>\r\n'),
(7, 'dsadas', '<p>dasdsa</p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
