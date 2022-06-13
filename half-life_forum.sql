-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pon 13. čen 2022, 20:39
-- Verze serveru: 10.4.22-MariaDB
-- Verze PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `half-life_forum`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `posts`
--

CREATE TABLE `posts` (
  `Pid` int(11) NOT NULL,
  `title` varchar(40) COLLATE utf8_czech_ci DEFAULT NULL,
  `Uid` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8_czech_ci DEFAULT NULL,
  `createdT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `posts`
--

INSERT INTO `posts` (`Pid`, `title`, `Uid`, `content`, `createdT`) VALUES
(30, 'G-Man není člověk', 32, 'Dobře, takže možná vyjdu z kolejí, ale mám teorii o nejzáhadnější postavě ve hrách. G-Man. Narazíte na něj na konci každé větší hry, jeho motivy jsou docela záhadné a zdá se, že se o vás, hráče, zajímá obzvlášť. Hrál jsem Half-Life několikrát a všiml jsem si, že jeho řečové vzorce a chování jsou trochu zvláštní a zdá se, že je v tom něco nelidského. No, mám teorii, že to vůbec není člověk, spíš něco úplně jiného, ​​co na sebe vzalo podobu člověka, aby provádělo svůj vlastní program, ať už je to cokoliv. Možná se v tom mýlím, úplně mimo mísu, ale pro mě to byla přesto zajímavá teorie.', '2022-06-13 14:55:59'),
(31, 'ja jsem další', 33, 'jooooooooooooooooooo další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další další ', '2022-06-13 15:15:19'),
(32, 'ja jsem pepa', 35, 'Gervaisa se přestěhuje se svým manželem Lantierem a syny Klaudiem a Štěpánem z venkova do Paříže, protože Lantier zdědil po své matce peníze a myslí si, že se jim ve městě povede lépe. Peníze ovšem rozhazují na všechny strany, musí se přestěhovat do horšího hotelu a Lantier nakonec utíká s jinou. Gervaisa pracuje jako pradlena u paní Fauconnierové, ale touží mít prádelnu vlastní. Seznamuje se s klempířem Coupeauem, i přes rozpory s Lorilleuxovými (příbuzní Coupeaua) je svatba a narodí se jim dcera Nana. Za společně našetřené peníze si chtějí založit vlastní prádelnu, Coupeau však padá ze střechy a úspory jdou na jeho léčení. Avšak mezitím zleniví a do práce se mu po vyléčení už nechce a nechává se živit Gervaisou. Kovář Goujet je do Gervaisy zamilovaný a na prádelnu jim půjčuje peníze. Lantier se mezitím vrací, získává si přízeň Coupeaua a nakonec se k nim i nastěhuje, svádí Gervaisu a Coupeaua učí pít. Tak nakonec projí a propijí celou živnost. Stěhují se do chudého bytu, Lantier zůstává v krámu, Nana utíká z domu, Gervaisu nechtějí nikde zaměstnat, a tak také začíná pít. Coupeau se dostává do blázince a nakonec umírá, Gervaisa je vystěhovaná z jejich chudého bytu do tmavé díry po bezdomovci Bru, kde je na konec nalezena mrtvá.\r\n\r\nKniha je rozdělena na kapitoly arabskými číslicemi I až XIII. Vyprávěna je autorem, součástí je spousta přímých řečí, doplněné řečnickými otázkami, kterými se ptají postavy románu.', '2022-06-13 15:26:06'),
(34, 'admin', 34, 'jaaaaaaaaaaa jsem admin a budete me poslouchat', '2022-06-13 17:21:55'),
(35, 'jo', 34, 'joooooooooooooooo jooooooooooo', '2022-06-13 18:16:26'),
(36, 'test', 34, ' test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test', '2022-06-13 18:17:01');

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `Uid` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_czech_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8_czech_ci DEFAULT NULL,
  `password` char(40) COLLATE utf8_czech_ci DEFAULT NULL,
  `createdT` timestamp NOT NULL DEFAULT current_timestamp(),
  `Profile_Img` varchar(255) COLLATE utf8_czech_ci NOT NULL DEFAULT 'https://cdn-icons-png.flaticon.com/512/1946/1946429.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`Uid`, `name`, `email`, `password`, `createdT`, `Profile_Img`) VALUES
(29, 'aaaaaaaaaa', 'a.kijonka.st@spseiostrava.cz', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '2022-06-10 18:58:06', 'https://cdn-icons-png.flaticon.com/512/1946/1946429.png'),
(32, 'uzivatel', 'uzivatel@jo.cz', '51e69892ab49df85c6230ccc57f8e1d1606caccc', '2022-06-11 12:30:54', 'imgs/users/32userIcon.png'),
(33, 'dalsi', 'dalsi@d.cz', '3c363836cf4e16666669a25da280a1865c2d2874', '2022-06-11 12:31:18', 'imgs/users/33userIcon.png'),
(34, 'hroch', 'hroch@admin.cz', 'b62ec17d4b801f2b67d95e8814707ccebccba591', '2022-06-12 19:12:43', 'imgs/users/34userIcon.png'),
(35, 'Pepa', 'u@u.cz', '899ed5ef71b22ad224798d2b255ea073fdf4de20', '2022-06-13 15:25:09', 'imgs/users/35userIcon.jpeg');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Pid`),
  ADD KEY `Uid` (`Uid`);

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Uid`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `posts`
--
ALTER TABLE `posts`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`Uid`) REFERENCES `users` (`Uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
