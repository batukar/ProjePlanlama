-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 18 Nis 2021, 21:49:19
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
-- Veritabanı: `pp`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abuot_me`
--

CREATE TABLE `abuot_me` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `github` varchar(50) NOT NULL,
  `telegram` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `discord` varchar(50) NOT NULL,
  `content` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `address_info`
--

CREATE TABLE `address_info` (
  `address_id` int(11) NOT NULL,
  `location` varchar(250) NOT NULL,
  `province` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact_info`
--

CREATE TABLE `contact_info` (
  `contact_id` int(11) NOT NULL,
  `content` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gsm` int(11) NOT NULL,
  `copyright` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `education_info`
--

CREATE TABLE `education_info` (
  `edu_id` int(11) NOT NULL,
  `degree` varchar(150) NOT NULL,
  `skill` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `exp_info`
--

CREATE TABLE `exp_info` (
  `exp_id` int(11) NOT NULL,
  `first_exp` varchar(250) NOT NULL,
  `second_exp` varchar(250) NOT NULL,
  `third_exp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_info`
--

CREATE TABLE `personal_info` (
  `personal_id` int(1) NOT NULL,
  `personal_name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `exp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_settings`
--

CREATE TABLE `site_settings` (
  `settings_id` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `sub_title` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(250) NOT NULL,
  `first_skill` varchar(50) NOT NULL,
  `second_skill` varchar(50) NOT NULL,
  `third_skill` varchar(50) NOT NULL,
  `forth_skill` varchar(50) NOT NULL,
  `first_counter` varchar(10) NOT NULL,
  `second_counter` varchar(10) NOT NULL,
  `third_counter` varchar(10) NOT NULL,
  `forth_counter` varchar(10) NOT NULL,
  `cv` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `skills`
--

INSERT INTO `skills` (`skill_id`, `title`, `content`, `first_skill`, `second_skill`, `third_skill`, `forth_skill`, `first_counter`, `second_counter`, `third_counter`, `forth_counter`, `cv`) VALUES
(1, 'Yeteneklerim', 'açıklama içeriği', 'HTML', 'CSS', 'JAVA', 'PYTHON', '80', '70', '90', '60', 'pp.sql');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
(12, 'batu', 'a@a.com', '93279e3308bdbbeed946fc965017f67a');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abuot_me`
--
ALTER TABLE `abuot_me`
  ADD PRIMARY KEY (`about_id`);

--
-- Tablo için indeksler `address_info`
--
ALTER TABLE `address_info`
  ADD PRIMARY KEY (`address_id`);

--
-- Tablo için indeksler `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`contact_id`);

--
-- Tablo için indeksler `education_info`
--
ALTER TABLE `education_info`
  ADD PRIMARY KEY (`edu_id`);

--
-- Tablo için indeksler `exp_info`
--
ALTER TABLE `exp_info`
  ADD PRIMARY KEY (`exp_id`);

--
-- Tablo için indeksler `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`personal_id`);

--
-- Tablo için indeksler `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Tablo için indeksler `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abuot_me`
--
ALTER TABLE `abuot_me`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `address_info`
--
ALTER TABLE `address_info`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `education_info`
--
ALTER TABLE `education_info`
  MODIFY `edu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `exp_info`
--
ALTER TABLE `exp_info`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `personal_id` int(1) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
