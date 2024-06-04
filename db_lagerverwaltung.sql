-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Jun 2024 um 11:08
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
-- Datenbank: `db_lagerverwaltung`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `produkt`
--

CREATE TABLE `produkt` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `preis` double NOT NULL,
  `img_pfad` varchar(50) DEFAULT NULL,
  `kategorie` varchar(50) DEFAULT NULL,
  `bestand` int(11) NOT NULL DEFAULT 0,
  `datum_mod` timestamp NOT NULL DEFAULT current_timestamp(),
  `groesse` varchar(30) DEFAULT NULL,
  `gewicht` smallint(4) DEFAULT NULL,
  `gewicht_einheit` enum('g','kg','mg','l','ml','st') NOT NULL,
  `beschreibung` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `produkt`
--

INSERT INTO `produkt` (`id`, `name`, `preis`, `img_pfad`, `kategorie`, `bestand`, `datum_mod`, `groesse`, `gewicht`, `gewicht_einheit`, `beschreibung`) VALUES
(1, 'Bastelkleber', 1, 'pferdetracker.png', '', 10, '2024-05-30 16:57:23', '', 100, 'g', ''),
(3, 'test', 1.1, 'chromedinosaur.jpg', 'test', 3, '2024-05-30 16:57:17', NULL, 3, 'kg', 'blabla');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `produkt`
--
ALTER TABLE `produkt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
