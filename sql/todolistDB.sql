-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Aug 12. 18:32
-- Kiszolgáló verziója: 10.4.24-MariaDB
-- PHP verzió: 7.4.29

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: todolist
--
CREATE DATABASE IF NOT EXISTS todolist DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE todolist;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához felhasznalo
--

CREATE TABLE felhasznalo (
  id int(11) NOT NULL,
  felhNev varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  jel varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  email varchar(50) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához teendok
--

CREATE TABLE teendok (
  felhID int(11) NOT NULL,
  tID int(11) NOT NULL,
  szoveg text COLLATE utf8_hungarian_ci DEFAULT NULL,
  idopont datetime NOT NULL,
  kesz tinyint(1) NOT NULL DEFAULT 0,
  surgos tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei felhasznalo
--
ALTER TABLE felhasznalo
  ADD PRIMARY KEY (id);

--
-- A tábla indexei teendok
--
ALTER TABLE teendok
  ADD PRIMARY KEY (felhID,tID);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához felhasznalo
--
ALTER TABLE felhasznalo
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához teendok
--
ALTER TABLE teendok
  ADD CONSTRAINT teendok_ibfk_1 FOREIGN KEY (felhID) REFERENCES felhasznalo (id);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
