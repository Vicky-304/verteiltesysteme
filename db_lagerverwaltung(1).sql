-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 08. Jun 2024 um 11:43
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
(1, 'Ausstecher', 4.99, 'Ausstecher.jpg', 'Wiederverwendbares', 0, '2024-06-08 08:49:21', NULL, 200, 'g', 'Hase, Schmetterling, Osterei, Küken'),
(2, 'Bastelbox', 8.99, 'Bastelbox.jpg', 'Kit', 0, '2024-06-08 08:51:05', NULL, 1, 'kg', 'verschiedene Perlen und Bastelutensilien'),
(3, 'Basteldraht', 2.99, 'Basteldraht-gold.jpg', 'Drähte und Schnüre', 3, '2024-06-08 08:52:46', NULL, 100, 'g', 'Basteldraht in der Farbe Gold'),
(4, 'Baumwollkordel', 4.99, 'Baumwollkordel.jpg', 'Drähte und Schnüre', 10, '2024-06-08 08:54:11', NULL, 50, 'g', 'Baumwollkordel in Gold und Grau'),
(5, 'Buchringe', 10.99, 'Buchringe.jpg', 'Metall', 50, '2024-06-08 08:55:52', NULL, 50, 'g', 'Zum binden eigener Bücher'),
(6, 'Buchstabenperlen - Bunt', 5.99, 'Buchstabenperlen-bunt.jpg', 'Perlen', 100, '2024-06-08 08:57:31', NULL, 300, 'st', 'Bunte Buchstabenperlen'),
(7, 'Buchstabenperlen - Schwarz', 5.99, 'Buchstabenperlen-schwarz.jpg', 'Perlen', 50, '2024-06-08 08:58:15', NULL, 300, 'st', 'Buchstabenperlen in Schwarz'),
(8, 'Buchstabenperlen - Weiß', 5.99, 'Buchstabenperlen-weiss.jpg', 'Perlen', 75, '2024-06-08 08:59:08', NULL, 300, 'st', 'Buchstabenperlen in Weiß'),
(9, 'Klebeband Doppelseitig', 3.99, 'DoppelseitigesKlebeband.jpg', 'Zubehör', 64, '2024-06-08 09:01:05', '7mm x 5m', 100, 'g', 'Doppelseitiges Klebeband, 7mm breit'),
(10, 'Federn', 0.99, 'Federn.jpg', NULL, 34, '2024-06-08 09:01:58', NULL, 10, 'g', 'Braune Federn'),
(11, 'Geschenkbox', 0.99, 'Geschenkbox.jpg', 'Kit', 10, '2024-06-08 09:03:31', '10cm x 5cm', 10, 'st', '10 weiße Geschenkboxen zum selbst bemalen'),
(12, 'Holzperlenset', 10.99, 'Holzperlenset.jpg', 'Perlen', 37, '2024-06-08 09:04:37', NULL, 200, 'st', '200 Holzperlen in verschiedenen Größen'),
(13, 'Holzstempel Geburtstagsgruß', 5.99, 'Holzstempel-Geburtstag.jpg', 'Stempel', 21, '2024-06-08 09:10:28', '5cm x 4xm', 1, 'st', 'Holzstempel mit Geburtstagsgruß'),
(14, 'Holzstempel Luftballon', 5.99, 'Holzstempel-Luftballon.jpg', 'Stempel', 12, '2024-06-08 09:10:28', '5cm x 3cm', 1, 'st', 'Holzstempel mit Luftballon'),
(15, 'Karten', 6.99, 'Karten.jpg', 'Papier', 100, '2024-06-08 09:11:39', NULL, 12, 'st', '12 Karten zum selbst gestalten'),
(16, 'Klebepunkte', 1.99, 'Klebepunkte.jpg', 'Zubehör', 600, '2024-06-08 09:12:38', NULL, 500, 'st', '500 Klebepunkte'),
(17, 'Kordel Beige', 2.99, 'Kordel-beige.jpg', 'Drähte und Schnüre', 24, '2024-06-08 09:14:36', '10m', 1, 'st', 'Kordel in der Farbe beige'),
(18, 'Kordel Schwarz-Weiß', 2.99, 'Kordel-schwarz_weiss.jpg', 'Drähte und Schnüre', 31, '2024-06-08 09:14:36', '10m', 1, 'st', 'Kordel in den Farben Schwarz und Weiß'),
(19, 'Lederband', 8.99, 'Lederband.jpg', 'Drähte und Schnüre', 14, '2024-06-08 09:15:40', '5mm x 5m', 300, 'g', 'Braunes Lederband, 5 Meter mit 5mm Breite'),
(20, 'Locher', 9.99, 'Locher-Konfetti.jpg', 'Zubehör', 3, '2024-06-08 09:16:36', NULL, 175, 'g', 'Locher für rundes Konfetti'),
(21, 'Locher', 9.99, 'Locher-Konfetti2.jpg', 'Zubehör', 5, '2024-06-08 09:17:15', NULL, 225, 'g', 'Locher für ovales Konfetti'),
(22, 'Ministempel', 1.99, 'Ministempel-Haus.jpg', 'Stempel', 21, '2024-06-08 09:18:22', '1cm x 1cm', 1, 'st', 'Ministempel mit Haus Symbol'),
(23, 'Modelliermasse', 7.99, 'Modelliermasse.jpg', 'Pasten und Massen', 30, '2024-06-08 09:19:33', NULL, 500, 'g', 'In den Farben weiß oder Natur'),
(24, 'Papiertüten', 3.99, 'Papiertueten.jpg', 'Papier', 63, '2024-06-08 09:20:40', '11cm x 6cm', 25, 'st', '25 braune Papiertüten'),
(25, 'Pappbuchstaben', 1.99, 'Pappbuchstaben.jpg', 'Papier', 68, '2024-06-08 09:22:03', '4cm x 4cm', 500, 'st', '52 Pappbuchstaben (2x Alphabet)'),
(26, 'Bastelpaste Beige', 5.99, 'Paste-beige.jpg', 'Pasten und Massen', 84, '2024-06-08 09:22:47', NULL, 200, 'g', 'Beige Bastelpaste'),
(27, 'Bastelpaste Grün', 5.99, 'Paste-gruen.jpg', 'Pasten und Massen', 54, '2024-06-08 09:23:27', NULL, 200, 'g', 'Grüne Bastelpaste'),
(28, 'Schablone Blätter', 3.99, 'Schablone-Blaetter.jpg', 'Zubehör', 32, '2024-06-08 09:24:51', '5cm x 3cm', 1, 'st', 'Schablone mit Blättermotiv'),
(29, 'Schablone Blumen', 3.99, 'Schablone-blume.jpg', 'Zubehör', 34, '2024-06-08 09:26:44', NULL, 1, 'st', 'Schablone mit Blumenmotiv'),
(30, 'Taschentuchbox', 3.99, 'Schablone-Taschentuchbox.jpg', 'Kit', 17, '2024-06-08 09:26:44', NULL, 1, 'st', 'Taschentuchbox zum selber machen'),
(31, 'Seifenfarbe', 2.99, 'Seifenfarbe.jpg', 'Farben', 35, '2024-06-08 09:28:07', NULL, 20, 'ml', '9x 20ml Seifenfarbe in Gelb, Aprikose, Rosa, Rot, Aubergine, Olivgrün, Mint, Royalblau und Schwarz'),
(32, 'Seifensilikonform', 9.99, 'Seifensilikonform.jpg', 'Zubehör', 40, '2024-06-08 09:30:51', '10cm x 5cm', 1, 'st', 'Seifensilikonform um Seife selbst zu machen'),
(33, 'Silikonform Dose', 7.99, 'Silikonform.jpg', 'Zubehör', 15, '2024-06-08 09:30:51', '3cm x 3cm', 1, 'st', 'Silikonform für runde Dosen'),
(34, 'Stempelfarbe Gelb', 3.99, 'Stempel-gelb.jpg', 'Farben', 45, '2024-06-08 09:33:15', NULL, 30, 'ml', 'Stempelfarbe in Gelb'),
(35, 'Stempelfarbe Beige', 3.99, 'Stempel-beige.jpg', 'Farben', 19, '2024-06-08 09:33:15', NULL, 30, 'ml', 'Stempelfarbe in Beige'),
(36, 'Stempelfarbe', 3.99, 'Stempel-blau.jpg', 'Farben', 11, '2024-06-08 09:33:15', NULL, 30, 'ml', 'Stempelfarbe in Blau'),
(37, 'Stempelfarbe Orange', 3.99, 'Stempel-orange.jpg', 'Farben', 16, '2024-06-08 09:35:31', NULL, 30, 'ml', 'Stempelfarbe in Orange'),
(38, 'Stempelfarbe Hellrosa', 3.99, 'Stempel-hellrosa.jpg', 'Farben', 13, '2024-06-08 09:35:31', NULL, 30, 'ml', 'Stempelfarbe in Hellrosa'),
(39, 'Stempelfarbe Rosa', 3.99, 'Stempel-rosa.jpg', 'Farben', 17, '2024-06-08 09:35:31', NULL, 30, 'ml', 'Stempelfarbe in Rosa'),
(40, 'Stempel Gräser', 5.99, 'Stempel-Graeser.jpg', 'Stempel', 48, '2024-06-08 09:37:34', '5cm x 3cm', 1, 'st', 'Stempel mit Gräsermotiv'),
(41, 'Ministempel Luftballon', 2.99, 'Stempel-Luftballon.jpg', 'Stempel', 62, '2024-06-08 09:37:34', '1cm x 1cm', 1, 'st', 'Ministempel mit Luftballonmotiv'),
(42, 'Stempel Tasse', 7.99, 'Stempel-Tasse.jpg', 'Stempel', 26, '2024-06-08 09:40:54', '3cm x 3cm', 1, 'st', 'Stempel mit Tassenmotiv'),
(43, 'Stempel Frühlingsgruß', 6.99, 'Textstempel.jpg', 'Stempel', 20, '2024-06-08 09:40:54', '5cm x 1cm', 1, 'st', 'Stempel mit Frühlingsgruß'),
(44, 'Silikonform Kerzenständer', 8.99, 'Silikonform-Kerzenstaender.jpg', 'Zubehör', 123, '2024-06-08 09:40:54', NULL, 3, 'st', '3 Kerzenständer-Formen in verschiedenen Größen');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
