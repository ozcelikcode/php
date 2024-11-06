-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Oca 2020, 02:55:51
-- Sunucu sürümü: 10.1.38-MariaDB
-- PHP Sürümü: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blogdersi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aboneler`
--

CREATE TABLE `aboneler` (
  `id` int(11) NOT NULL,
  `abone_mail` varchar(200) NOT NULL,
  `abone_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `abone_ip` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `aboneler`
--

INSERT INTO `aboneler` (`id`, `abone_mail`, `abone_tarih`, `abone_ip`) VALUES
(2, 'yavuzselim5757@yandex.com', '2019-12-29 03:09:58', '::1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `site_url` varchar(200) NOT NULL,
  `site_baslik` varchar(200) NOT NULL,
  `site_keyw` varchar(260) NOT NULL,
  `site_desc` varchar(260) NOT NULL,
  `site_harita` varchar(300) NOT NULL,
  `site_mail` varchar(250) NOT NULL,
  `site_logo` varchar(200) NOT NULL,
  `site_favicon` varchar(200) NOT NULL,
  `google_dogrulama_kodu` varchar(200) NOT NULL,
  `yandex_dogrulama_kodu` varchar(200) NOT NULL,
  `bing_dogrulama_kodu` varchar(200) NOT NULL,
  `analiytcs_kodu` mediumtext NOT NULL,
  `site_durum` tinyint(1) NOT NULL,
  `harita_durum` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `site_url`, `site_baslik`, `site_keyw`, `site_desc`, `site_harita`, `site_mail`, `site_logo`, `site_favicon`, `google_dogrulama_kodu`, `yandex_dogrulama_kodu`, `bing_dogrulama_kodu`, `analiytcs_kodu`, `site_durum`, `harita_durum`) VALUES
(1, 'http://localhost/blogdersi', 'YavuzSelim | Kişisel Blog', 'YavuzSelim | Kişisel Blog', 'YavuzSelim | Kişisel Blog', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194971.1886454207!2d28.892202838058694!3d40.22185572584703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca1582d8d45695%3A0x61a00555fc973392!2sBursa!5e0!3m2!1str!2str!4v1577152788730!5m2!1str!2str', 'bilgi@yavuz-selim.com', '72970994d0080dbc80245171e5870646.webp', 'e5f27ec8272d581558392727f395a323.webp', '12', '22', '32', '', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `id` int(11) NOT NULL,
  `kat_adi` varchar(200) NOT NULL,
  `kat_sef` varchar(200) NOT NULL,
  `kat_keyw` varchar(260) NOT NULL,
  `kat_desc` varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `kat_adi`, `kat_sef`, `kat_keyw`, `kat_desc`) VALUES
(1, 'PHP', 'php', 'php dersleri,pdo dersleri', 'php dersleri,pdo dersleri'),
(2, 'HTML', 'html', 'html dersleri,html eğitimleri', 'html dersleri,html eğitimleri'),
(5, 'Plesk Panel', 'plesk-panel', 'Plesk Panel hakkında herşey', 'Plesk Panel hakkında herşey'),
(6, 'Genel', 'genel', 'genel', 'genel');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `id` int(11) NOT NULL,
  `isim` varchar(200) NOT NULL,
  `konu` varchar(200) NOT NULL,
  `eposta` varchar(200) NOT NULL,
  `mesaj` text NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `durum` tinyint(1) NOT NULL DEFAULT '2',
  `ip` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `isim`, `konu`, `eposta`, `mesaj`, `tarih`, `durum`, `ip`) VALUES
(1, 'yavuz selim şahin', 'test', 'yavuzselimblog@hotmail.com', 'test', '2019-12-24 03:00:10', 1, '::1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyalmedya`
--

CREATE TABLE `sosyalmedya` (
  `id` int(11) NOT NULL,
  `ikon` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `durum` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sosyalmedya`
--

INSERT INTO `sosyalmedya` (`id`, `ikon`, `link`, `durum`) VALUES
(1, 'linkedin', 'https://linkedin.com', 1),
(2, 'facebook', 'https://facebok.com/yavuzselimblog', 1),
(3, 'twitter', 'https://twitter.com/yavuzselimblog', 1),
(4, 'instagram', 'https://instagram.com/yavuzselimblog', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

CREATE TABLE `yazilar` (
  `yazi_id` int(11) NOT NULL,
  `yazi_kat_id` int(11) NOT NULL,
  `yazi_baslik` varchar(250) NOT NULL,
  `yazi_sef` varchar(250) NOT NULL,
  `yazi_resim` varchar(200) NOT NULL,
  `yazi_icerik` text NOT NULL,
  `yazi_etiketler` varchar(250) NOT NULL,
  `yazi_sef_etiketler` varchar(250) NOT NULL,
  `yazi_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `yazi_durum` tinyint(1) NOT NULL DEFAULT '1',
  `yazi_goruntulenme` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`yazi_id`, `yazi_kat_id`, `yazi_baslik`, `yazi_sef`, `yazi_resim`, `yazi_icerik`, `yazi_etiketler`, `yazi_sef_etiketler`, `yazi_tarih`, `yazi_durum`, `yazi_goruntulenme`) VALUES
(4, 2, 'PHP DERSLERİ2', 'php-dersleri', 'blog.jpg', 'PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ ', 'PHP DERSLERİ,PHP DERSLERİ,kupa bardak', 'php-dersleri,php-dersleri,kupa-bardak', '2019-12-24 04:15:02', 1, 15);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yoneticiler`
--

CREATE TABLE `yoneticiler` (
  `id` int(11) NOT NULL,
  `kadi` varchar(200) NOT NULL,
  `eposta` varchar(200) NOT NULL,
  `sifre` varchar(200) NOT NULL,
  `sonip` varchar(200) NOT NULL,
  `sontarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yoneticiler`
--

INSERT INTO `yoneticiler` (`id`, `kadi`, `eposta`, `sifre`, `sonip`, `sontarih`) VALUES
(1, 'Yavuz Selim ŞAHİN', 'info@yavuz-selim.com', 'adcd7048512e64b48da55b027577886ee5a36350', '::1', '2020-01-04 18:44:19');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `yorum_yazi_id` int(11) NOT NULL,
  `yorum_isim` varchar(200) NOT NULL,
  `yorum_eposta` varchar(200) NOT NULL,
  `yorum_icerik` text NOT NULL,
  `yorum_website` varchar(250) DEFAULT NULL,
  `yorum_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `yorum_durum` tinyint(1) NOT NULL DEFAULT '2',
  `yorum_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `aboneler`
--
ALTER TABLE `aboneler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sosyalmedya`
--
ALTER TABLE `sosyalmedya`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yazilar`
--
ALTER TABLE `yazilar`
  ADD PRIMARY KEY (`yazi_id`);

--
-- Tablo için indeksler `yoneticiler`
--
ALTER TABLE `yoneticiler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `aboneler`
--
ALTER TABLE `aboneler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `sosyalmedya`
--
ALTER TABLE `sosyalmedya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `yazilar`
--
ALTER TABLE `yazilar`
  MODIFY `yazi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `yoneticiler`
--
ALTER TABLE `yoneticiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
