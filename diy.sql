-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Jun 2024 um 21:57
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `db_shop`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `diy`
--

CREATE TABLE `diy` (
  `user_id` int(11) NOT NULL,
  `titel` varchar(30) NOT NULL,
  `beschreibung` tinytext NOT NULL,
  `produkte` text NOT NULL,
  `img_pfad` varchar(30) NOT NULL,
  `datum_mod` timestamp NOT NULL DEFAULT current_timestamp(),
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `diy`
--

INSERT INTO `diy` (`user_id`, `titel`, `beschreibung`, `produkte`, `img_pfad`, `datum_mod`, `post_id`) VALUES
(1, 'Taschentuchbox', 'Zum selber Basteln', 'Schablone - Taschentuchbox', 'Schablone-Taschentuchbox.jpg', '2024-06-08 20:30:51', 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `diy`
--
ALTER TABLE `diy`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `diy`
--
ALTER TABLE `diy`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `diy`
--
ALTER TABLE `diy`
  ADD CONSTRAINT `diy_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
