-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Wrz 2018, 12:01
-- Wersja serwera: 10.1.34-MariaDB
-- Wersja PHP: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `zsti`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `counter`
--

CREATE TABLE `counter` (
  `DateView` date NOT NULL,
  `ViewCount` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sklep`
--

CREATE TABLE `sklep` (
  `ID` int(11) NOT NULL,
  `Wojewodztwo` varchar(100) COLLATE utf8_bin NOT NULL,
  `Miasto` varchar(100) COLLATE utf8_bin NOT NULL,
  `Ulica` varchar(100) COLLATE utf8_bin NOT NULL,
  `Nazwa sklepu` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'noname',
  `Kontakt` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `sklep`
--

INSERT INTO `sklep` (`ID`, `Wojewodztwo`, `Miasto`, `Ulica`, `Nazwa sklepu`, `Kontakt`) VALUES
(1, 'Mazowieckie', 'Warszawa', 'Wiejska 12', 'noname', '123456780'),
(2, 'Mazowieckie', 'Radom,', 'Parkowa 8', 'noname', '487878657'),
(3, 'Małopolskie', 'kraków', 'Bolesława krzywoustego 36 ', 'noname', '578438912'),
(4, 'Małopolskie', 'Gorlice', 'Rzeźnicza', 'noname', '578434864'),
(5, 'Warmińsko-Mazurskie', 'Elbląg', 'Rycerska 18', 'noname', '678091345'),
(6, 'Warmińsko-Mazurskie', 'Dobre Miasto', 'Ogrodowa 86', 'noname', '341091345'),
(7, 'Pomorskie ', 'Gdynia', 'Świńska 12', 'noname', '128091345'),
(8, 'Pomorskie', 'Gdańsk', 'Sosnowa 8', 'noname', '548143083'),
(9, 'Śląskie', 'Częstochowa', 'Pielgrzymkowa 24', 'noname', ' 631341893'),
(10, 'Śląskie', 'Katowice', 'Kotwicza 2/4', 'noname', ' 631341453'),
(11, 'lubuskie', 'Świebodzin', 'Świętobliwa 37', 'noname', '231421543'),
(12, 'lubuskie', 'Żagań', 'Żarska 17', 'noname', '231424323'),
(13, 'lubelskie ', 'Lublin', 'Mąkowa 1', 'noname', '241424323'),
(14, 'lubelskie ', 'Zwierzyniec', 'Końska 8 ', 'noname', '241114323'),
(15, 'Wielkopolskie', 'Poznan', 'Wiejska 22', 'noname', '123456789'),
(16, 'Wielkopolskie', 'Gniezno', 'Cicha 12', 'noname', '987654321'),
(17, 'Zachodniopomorskie', 'Szczecin', 'Głośna 42', 'noname', '987654451'),
(18, 'Zachodniopomorskie', 'Barlinek', 'Stara 12', 'noname', '9876544564'),
(19, 'Kujawsko-pomorskie', 'Bydgoszcz', 'Nowa 15', 'noname', '1276544564'),
(20, 'Kujawsko-pomorskie', 'Koronowo', 'Grunwaldzka 15', 'noname', '1271544564'),
(22, 'Łódzkie', 'Łódź', 'Grunwaldzka 21', 'noname', '1271544554'),
(23, 'Świętokrzyskie', 'Kielce', 'Kielecka 11', 'Noname', '321431431'),
(24, 'Świętokrzyskie', 'Opatów', 'Wiejska 11', 'Noname', '321431444'),
(25, 'Podlaskie ', 'Suwałki', 'Grunwaldzka 98', 'Noname', '321432194'),
(26, 'Podlaskie ', 'Białystok', 'Wolności 1', 'Noname', '221432194'),
(27, 'Opolskie ', 'Opole', 'Starości 11', 'Noname', '222132194'),
(28, 'Opolskie ', 'Pokój', 'Królewieckie  127', 'Noname', '222132184'),
(29, 'podkarpackie ', 'Rzeszów', 'Wiejska 61', 'Noname', '888132184'),
(30, 'podkarpackie ', 'Jarosław', 'Brzozowa 21 ', 'Noname', '888192184'),
(31, 'dolnośląskie ', 'Wrocław', 'Cicha 22 ', 'Noname', '888192987'),
(32, 'dolnośląskie', 'lubin', 'Starości', 'noname', '654976213'),
(33, 'Pomorskie', 'Sopot', 'Leska', 'noname', '504567093'),
(35, 'Pomorskie', 'Tczew', 'Zamkowa 12c', 'noname', '244434535'),
(37, 'Pomorskie', 'Malbork', 'Zamkowa 23', 'noname', '2424324');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`DateView`);

--
-- Indeksy dla tabeli `sklep`
--
ALTER TABLE `sklep`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `sklep`
--
ALTER TABLE `sklep`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
