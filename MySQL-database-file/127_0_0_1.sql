-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Ağu 2022, 12:03:22
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(200) NOT NULL,
  `article` text NOT NULL,
  `article_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article`, `article_link`) VALUES
(8, 'Deneme', 'Deneme', ''),
(9, 'Deneme', 'Deneme', ''),
(10, 'Deneme', 'Deneme', ''),
(11, 'Deneme 3', 'Deneme 4 asd as', ''),
(12, 'ööççşiçü', 'asdasdasd', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Veritabanı: `blog2`
--
CREATE DATABASE IF NOT EXISTS `blog2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `blog2`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `article_image` varchar(200) NOT NULL,
  `article_editor` varchar(200) NOT NULL,
  `article_title` varchar(200) NOT NULL,
  `article` text NOT NULL,
  `article_tags` text NOT NULL,
  `article_coverletter` text NOT NULL,
  `article_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `article_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `articles`
--

INSERT INTO `articles` (`article_id`, `article_image`, `article_editor`, `article_title`, `article`, `article_tags`, `article_coverletter`, `article_date`, `article_link`) VALUES
(46, 'adasd', 'ozcelikcode', 'ııııııııııııııııçöçöçöçöüğü', '<p>asdasdas</p>', 'asdasasd', 'asdasd', '2022-08-01 12:53:21', 'iiiiiiiiiiiiiiiicocococougu'),
(47, '123', 'ozcelikcode', 'öçşİğüçş', '<p>123</p>', '123', '123', '2022-08-01 12:54:16', 'ocsigucs'),
(48, 'macos-big-sur-5120x2880-night-apple-october-2020-event-5k-23099.jpg', 'ozcelikcode', 'MacOs', '<p>asdasdasd</p>', 'bigsur', 'bigsur', '2022-08-01 13:00:22', 'macos'),
(49, ' https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png', 'ozcelikcode', 'Deneme', '<p>etiket</p>', 'etiket', 'deneme açıklama', '2022-08-01 14:54:24', 'deneme'),
(50, 'Düzenlenmiş URL', 'ozcelikcode', 'Düzenlenmiş Başlık', 'Düzenlenmiş Metin', 'duzenlenmis-etiket', 'Düzenlenmiş Açıklama', '2022-08-02 09:01:05', 'duzenlenmis-baslik'),
(65, 'asdas dsd sffs d', 'ozcelikcode', 'ÇOOOOOOOOOOOK UZUN BAŞLIKs dddff', 'asd  fsd f', 'dasd-sd-f-df', 'asdsdsf sd ', '2022-08-02 14:52:50', 'coooooooooook-uzun-basliks-dddff'),
(68, 'Deneme', 'Osman Talayhan', 'Deneme 12312', '<p>Deneme&nbsp;<font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">Deneme&nbsp;</font><font color=\"#000000\"><b><u>Deneme&nbsp; <span style=\"font-family: &quot;Arial Black&quot;;\">asdasdsad</span></u></b></font><br></p>', 'deneme', 'Deneme', '2022-08-11 09:32:13', 'deneme-12312'),
(69, 'Deneme', 'Osman Talayhan', 'Deneme 12312', '<p>Deneme&nbsp;<font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">Deneme&nbsp;</font><font color=\"#000000\"><b><u>Deneme&nbsp; <span style=\"font-family: &quot;Arial Black&quot;;\">asdasdsad</span></u></b></font><br></p>', 'deneme', 'Deneme', '2022-08-11 09:33:46', 'deneme-12312'),
(70, 'dasdas', 'ozcelikcode', 'asdasdsa', '<p>dasdsad</p>', 'dasdas', 'dasdas', '2022-08-11 09:33:55', 'asdasdsa'),
(71, 'dasdas', 'ozcelikcode', 'asdasdsa', '<p>dasdsad</p>', 'dasdas', 'dasdas', '2022-08-11 09:34:31', 'asdasdsa');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- Veritabanı: `bootstrap-blog`
--
CREATE DATABASE IF NOT EXISTS `bootstrap-blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bootstrap-blog`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(1, 'admin', '$2y$10$3Q6vLRJ/BNHc467pIX98E.wj7c6lCcd5wq8g/lmKN3y5I2ZHgyaES');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `id` int(11) UNSIGNED NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `gorsel` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` varchar(128) COLLATE utf8_turkish_ci NOT NULL,
  `ozet` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `anahtar_kelimeler` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aktiflik` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`id`, `adi`, `link`, `gorsel`, `kategori`, `ozet`, `icerik`, `tarih`, `aciklama`, `anahtar_kelimeler`, `aktiflik`) VALUES
(29, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum', 'lorem-ipsum.webp', '6', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<h2><strong>What is Lorem Ipsum?</strong></h2>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2><strong>Why do we use it?</strong></h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '29-02-2020 18:16', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum, Lipsum, Lorem, Ipsum, Text, Generate, Generator, Facts, Information, What, Why, Where, Dummy Text, Typesetting, Printing, de Finibus, Bonorum et Malorum, de Finibus Bonorum et Malorum, Extremes of Good and Evil, Cicero, Latin, Garbled, Scramb', 1),
(30, 'Bootstrap Nedir?', 'bootstrap-nedir', 'bootstrap.jpg', '6', 'Ücretsiz bir CSS framework’u olan Bootstrap, açık kaynak kodlu bir tasarım aracıdır.', '<h1><strong>bootstrap nedir?</strong></h1>\r\n\r\n<p>Ücretsiz bir CSS framework’u olan Bootstrap, açık kaynak kodlu bir tasarım aracıdır. Telefon, tablet ve masaüstü bilgisayarlar için farklı ve cihazınızın büyüklüğüyle orantılı şekilde sitenizin görünmesini sağlayan tema ve tasarımları kolaylıkla yapabilirsiniz. Bir site için gerekli olan bütün unsurları içerisinde barındıran Bootstrap ile tasarım yaparken bu hazır unsurları kullanarak tüm cihazlara uygun tasarımlar yapmanızı sağlar. Bu da demek oluyor ki, her şeyi hazır olan kodlarla yeni bir tasarım yaratmak oldukça kolay ve pratiktir. Stiller, imajlar ve JavaScript&#39;ler daha öncesinden Bootstrap&#39;in içine monte edilmiştir. Yapmanız gereken tek şey bunları çağırmanızdır.</p>\r\n', '29-02-2020 18:51', 'Ücretsiz bir CSS framework’u olan Bootstrap, açık kaynak kodlu bir tasarım aracıdır.', 'bootstrap, bootstrap nedir', 1),
(31, 'REST API Nedir?', 'rest-api-nedir', 'rest-api.png', '1', 'REST API Nedir?', '<h1><strong>REST API Nedir?</strong></h1>\r\n\r\n<p><strong>REST API</strong>, geliştiricilerin HTTP protokolünü kullanarak GET ve POST gibi isteklerde bulunup, bu isteklere çeşitli formatlarda yanıt aldığı bir dağıtık sistemdir. REST (REpresentational State Transfer), Temsili Durum Aktarımı olarak Türkçede de kullanılır. REST’in tüm prensiplerini yerine getiren API’ler ise RESTful olarak nitelendirilir. REST API ilk defa 2000 yılında Roy Fielding tarafından doktora tezinin bir bölümü olarak geliştirilmiş ve ardından geliştiricilerce kabul görmüştür. REST API, web mimarisi kısmında çalışsın veya çalışmasın her geliştiricinin birgün ihtiyaç duyabileceği popüler bir API’dir.</p>\r\n\r\n<p>REST API, gelişticilerin hakim olduğu SOAP ve WSDL tabanlı web servislerine benzer ancak daha basite indirgenerek geliştirilmiştir. REST API kullanılırken web tarayıcılarının sayfa transfer sürecini bir parçası olan HTTP fiilleri kullanılarak haberleşilir. Dolayısıyla geliştirici olarak size tanıdık gelen GET, POST, PUT DELETE vb. filler REST API ile haberleşmede oldukça yaygın kullanılır. HTTP protokolünü kullanıyor olması nedeniyle REST API’i pratik olarak herhangi bir programlama dilinde kullanabilir. REST API’yi yazılımlarınızda kullanarak yazılımınızın uzun ömürlü olmasını sağlayabilir ve gelişimini pozitif yönde destekleyebilirsiniz.</p>\r\n', '29-02-2020 18:56', 'REST API Nedir?', 'rest api, rest api nedir?', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `isim_soyisim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `isim_soyisim`, `mail`, `mesaj`, `tarih`, `ip`) VALUES
(9, 'Alişahan yalçın', 'alisahanyalcin4@gmail.com', 'advaddv', '29.02.2020 17:50', '::1'),
(10, 'alisahanyalcin', 'alisahanyalcin4@gmail.com', 'deneme iletişim mesajı', '29.02.2020 20:30', 'yok');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `id` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `anahtar_kelimeler` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `aktiflik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `adi`, `link`, `aciklama`, `anahtar_kelimeler`, `aktiflik`) VALUES
(1, 'PHP', 'php', 'php kategorisi', 'php, php kategorisi', 1),
(6, 'HTML', 'html', 'Html', 'ozet, ozet', 1),
(7, 'Deneme', '#', 'aasdasd', 'deneme', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `sira` int(11) NOT NULL,
  `yazi` varchar(128) COLLATE utf8_turkish_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `aktiflik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`id`, `sira`, `yazi`, `link`, `aktiflik`) VALUES
(1, 1, 'Anasayfa', ' ', 1),
(2, 2, 'Hakkımızda', 'sayfa/hakkimizda', 1),
(4, 4, 'İletişim', 'sayfa/iletisim', 1),
(9, 3, 'Deneme', '#', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `id` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `anahtar_kelimeler` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`id`, `adi`, `link`, `anahtar_kelimeler`, `aciklama`, `icerik`) VALUES
(6, 'İletişim', 'iletisim', 'iletisim', 'iletisim sayfası', ''),
(7, 'Hakkımızda', 'hakkimizda', 'Hakkımızda, Hakkımızda sayfası', 'Hakkımızda sayfası', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>\r\n'),
(9, 'Deneme', 'deneme', 'sayfa, busayfa', 'ÇOKMU KOMİK AMK', 'KAKSAKDKASDKASDK komikti&lt;img alt=&quot;smiley&quot; height=&quot;23&quot; src=&quot;http://localhost/bootstrap-blog/assets/ckeditor/plugins/smiley/images/regular_smile.png&quot; title=&quot;smiley&quot; width=&quot;23&quot;&gt;&lt;img alt=&quot;yes&quot; height=&quot;23&quot; src=&quot;http://localhost/bootstrap-blog/assets/ckeditor/plugins/smiley/images/thumbs_up.png&quot; title=&quot;yes&quot; width=&quot;23&quot;&gt;');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sistem_ayarlari`
--

CREATE TABLE `sistem_ayarlari` (
  `id` int(11) NOT NULL,
  `site_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `site_baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `site_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `site_anahtar_kelimeler` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_oto_onay` int(11) NOT NULL,
  `sayfa_basi_blog` int(11) NOT NULL,
  `random_sayfa_basi_blog` int(11) NOT NULL,
  `site_name_mobil` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `logomu_site_adimi` int(11) NOT NULL,
  `site_fav` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `site_logo` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sistem_ayarlari`
--

INSERT INTO `sistem_ayarlari` (`id`, `site_adi`, `site_baslik`, `site_aciklama`, `site_anahtar_kelimeler`, `yorum_oto_onay`, `sayfa_basi_blog`, `random_sayfa_basi_blog`, `site_name_mobil`, `logomu_site_adimi`, `site_fav`, `site_logo`) VALUES
(1, 'Code', 'Code', 'Sanane Blog', 'site anahtar kelimeler, kelime1, kelime2', 1, 2, 15, 'Code', 0, 'logo.png', 'logo1.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `profil` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ad` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `yorum` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL,
  `tarih` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `blog_id`, `profil`, `ad`, `mail`, `yorum`, `durum`, `tarih`, `ip`) VALUES
(3, 31, '1.png', 'Ali Şahan Yalçın', 'alisahanyalcin4@gmail.com', 'deneme yorum', 1, '29.02.2020 20:24', 'yok');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kullanici_adi` (`user_name`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sistem_ayarlari`
--
ALTER TABLE `sistem_ayarlari`
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
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `sistem_ayarlari`
--
ALTER TABLE `sistem_ayarlari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Veritabanı: `ck_ornek`
--
CREATE DATABASE IF NOT EXISTS `ck_ornek` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ck_ornek`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerikler`
--

CREATE TABLE `icerikler` (
  `icerik_id` int(11) NOT NULL,
  `icerik_baslik` varchar(50) NOT NULL,
  `icerik_detay` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `icerikler`
--

INSERT INTO `icerikler` (`icerik_id`, `icerik_baslik`, `icerik_detay`) VALUES
(1, 'icerik1', 'icerik detay 1'),
(2, 'icerik2', 'icerik detay 2'),
(3, 'icerik3', 'icerik detay 3'),
(4, 'icerik44', '<p>ddsadsadddsd</p>\r\n'),
(7, 'dsadas', '<p>dasdsa</p>\r\n'),
(9, 'adasdasdad', '<b>adad adas a </b><s><em>das njnok</em></s>');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `icerikler`
--
ALTER TABLE `icerikler`
  ADD PRIMARY KEY (`icerik_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `icerikler`
--
ALTER TABLE `icerikler`
  MODIFY `icerik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Veritabanı: `gelismisblog`
--
CREATE DATABASE IF NOT EXISTS `gelismisblog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gelismisblog`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aboneler`
--

CREATE TABLE `aboneler` (
  `id` int(11) NOT NULL,
  `abone_mail` varchar(200) NOT NULL,
  `abone_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
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
  `harita_durum` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `site_url`, `site_baslik`, `site_keyw`, `site_desc`, `site_harita`, `site_mail`, `site_logo`, `site_favicon`, `google_dogrulama_kodu`, `yandex_dogrulama_kodu`, `bing_dogrulama_kodu`, `analiytcs_kodu`, `site_durum`, `harita_durum`) VALUES
(1, 'http://localhost/blog0', 'YavuzSelim | Kişisel Blog', 'YavuzSelim | Kişisel Blog', 'YavuzSelim | Kişisel Blog', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194971.1886454207!2d28.892202838058694!3d40.22185572584703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca1582d8d45695%3A0x61a00555fc973392!2sBursa!5e0!3m2!1str!2str!4v1577152788730!5m2!1str!2str', 'bilgi@yavuz-selim.com', '72970994d0080dbc80245171e5870646.webp', 'e5f27ec8272d581558392727f395a323.webp', '12', '22', '32', '', 1, 1);

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
(1, 'HTML', 'html', 'html, html dersleri', 'html, html dersleri'),
(2, 'CSS', 'css', 'css, css dersleri', 'css, css dersleri'),
(3, 'JavaScript', 'javascript', 'javascript, javascript dersleri', 'javascript, javascript dersleri');

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
  `tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `durum` tinyint(1) NOT NULL DEFAULT 2,
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
  `durum` tinyint(1) NOT NULL DEFAULT 1
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
  `yazi_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `yazi_durum` tinyint(1) NOT NULL DEFAULT 1,
  `yazi_goruntulenme` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`yazi_id`, `yazi_kat_id`, `yazi_baslik`, `yazi_sef`, `yazi_resim`, `yazi_icerik`, `yazi_etiketler`, `yazi_sef_etiketler`, `yazi_tarih`, `yazi_durum`, `yazi_goruntulenme`) VALUES
(4, 2, 'PHP DERSLERİ2', 'php-dersleri', 'blog.jpg', 'PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ PHP DERSLERİ ', 'PHP DERSLERİ,PHP DERSLERİ,kupa bardak', 'php-dersleri,php-dersleri,kupa-bardak', '2019-12-24 04:15:02', 1, 19);

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
(1, 'ozcelik', 'admin@ozcelikcode.com', 'adcd7048512e64b48da55b027577886ee5a36350', '::1', '2022-08-02 12:41:03');

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
  `yorum_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `yorum_durum` tinyint(1) NOT NULL DEFAULT 2,
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
--
-- Veritabanı: `kategoriler`
--
CREATE DATABASE IF NOT EXISTS `kategoriler` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kategoriler`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_link`, `parent_id`, `sort_order`) VALUES
(1, 'Ana Sayfa', '', 0, 0),
(2, 'Web Tasarımı', 'web-tasarimi', 0, 1),
(3, 'Java', 'java', 0, 2),
(4, 'CSS', 'css', 2, 0),
(5, 'PHP', 'php', 2, 1),
(6, 'ASP', '#', 2, 2);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `unique` (`category_name`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Veritabanı: `mesutdblog`
--
CREATE DATABASE IF NOT EXISTS `mesutdblog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mesutdblog`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makale`
--

CREATE TABLE `makale` (
  `id` int(11) NOT NULL,
  `baslik` varchar(100) NOT NULL,
  `icerik` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `makale`
--

INSERT INTO `makale` (`id`, `baslik`, `icerik`) VALUES
(5, 'Başlık5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eget facilisis purus.'),
(39, 'asdas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eget facilisis purus.');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `makale`
--
ALTER TABLE `makale`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `makale`
--
ALTER TABLE `makale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- Veritabanı: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Tablo döküm verisi `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-08-21 10:03:20', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"tr\"}');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Tablo için indeksler `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Tablo için indeksler `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Tablo için indeksler `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Tablo için indeksler `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Tablo için indeksler `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Tablo için indeksler `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Tablo için indeksler `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Tablo için indeksler `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Tablo için indeksler `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Tablo için indeksler `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Tablo için indeksler `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Tablo için indeksler `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Tablo için indeksler `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Tablo için indeksler `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Tablo için indeksler `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Tablo için indeksler `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Tablo için indeksler `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Veritabanı: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
