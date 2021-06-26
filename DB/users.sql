-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Ara 2019, 11:20:42
-- Sunucu sürümü: 10.4.8-MariaDB
-- PHP Sürümü: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `mail` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(16) COLLATE utf8mb4_bin NOT NULL,
  `checkbox1` varchar(2) COLLATE utf8mb4_bin NOT NULL,
  `checkbox2` varchar(2) COLLATE utf8mb4_bin NOT NULL,
  `checkbox3` varchar(2) COLLATE utf8mb4_bin NOT NULL,
  `adminmi` varchar(2) COLLATE utf8mb4_bin NOT NULL,
  `null` varchar(3) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `mail`, `password`, `checkbox1`, `checkbox2`, `checkbox3`, `adminmi`, `null`) VALUES
(1, 'engin', 'engin', '123', 'on', 'on', 'on', 'on', ''),
(2, 'boran_14_aekle', 'boran_1922@gmail.com', 'borandilbilir41', '', 'on', 'on', '', ''),
(3, 'abdullah', 'abdulruk@hotmail.com', '123', 'on', '', '', '', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
