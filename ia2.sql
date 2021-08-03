-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 May 2021, 14:52:44
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ia2`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(10) UNSIGNED NOT NULL,
  `href` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  `svg` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  `title` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  `title_sr` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`contact_id`, `href`, `svg`, `title`, `title_sr`) VALUES
(1, 'https://www.facebook.com/public/Ivana-Arandjelovic', 'require_php/facebook.php', 'Ivana Arandjelovic ART', 'Ivana Arandjelovic ART'),
(2, 'https://www.instagram.com/petite_bird_ivana/?hl=en', 'require_php/instagram.php', '@petite_bird_ivana', '@petite_bird_ivana'),
(3, 'https://www.behance.net/Ivan-A2', 'require_php/behance.php', 'Behance account', 'Behance nalog'),
(4, 'mailto: mala.ivana@ymail.com', 'require_php/email.php', 'E-mail address', 'E-mail adresa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `project`
--

CREATE TABLE `project` (
  `project_id` int(10) UNSIGNED NOT NULL,
  `cover` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `title_sr` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `css_id` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `project`
--

INSERT INTO `project` (`project_id`, `cover`, `title`, `title_sr`, `css_id`) VALUES
(1, 'colorfulBook/cover.jpg', 'Colorful Book', 'Knjiga u boji', 'colorful-book'),
(2, 'bolPluca/cover.JPG', 'Lung Pain', 'Bol pluća', 'bol-pluca'),
(3, 'knjigaPas/cover.jpg', 'Book \"The Dog\"', 'Knjiga Pas', 'knjiga-pas'),
(4, 'tarot/cover.jpg', 'Tarot', 'Tarot', 'tarot'),
(5, 'mantre/cover.jpg', 'Mantras', 'Mantre', 'mantre'),
(6, 'ivanushka/cover.jpg', 'Ivanushka', 'Ivanuška', 'ivanuska'),
(7, 'cetiriElementa/cover.png', 'Four Elements', 'Četiri elementa', 'cetiriElementa'),
(8, 'crniVuk/cover.JPG', 'Black Wolf Eats White Wolf', 'Crni vuk jede belog vuka', 'crniVuk');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Tablo için indeksler `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
