-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 18 sep 2017 kl 10:47
-- Serverversion: 10.1.19-MariaDB
-- PHP-version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `tidskollen`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `loginkontroll`
--

CREATE TABLE `loginkontroll` (
  `IDperson` int(11) NOT NULL,
  `tidstempel` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `loginkontroll`
--

INSERT INTO `loginkontroll` (`IDperson`, `tidstempel`) VALUES
(59, '2017-09-07 12:44:59');

-- --------------------------------------------------------

--
-- Tabellstruktur `person`
--

CREATE TABLE `person` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(20) DEFAULT NULL,
  `user_pwd` varchar(15) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `person`
--

INSERT INTO `person` (`user_id`, `user_firstname`, `user_pwd`, `user_email`) VALUES
(50, 'Martin', 'martin123', 'martin@live.se'),
(51, 'William', 'william123', 'william@live.se'),
(52, 'Tobias', 'tobias123', 'tobias@live.se'),
(53, 'Morgan', 'morgan123', 'morgan@live.se'),
(54, 'Andreas', 'andreas123', 'andreas@live.se'),
(55, 'Kristoffer', 'kristoffer123', 'kristoffer@live.se'),
(56, 'Markus', 'markus123', 'markus@live.se'),
(57, 'Mikael', 'mikael123', 'mikael@live.se'),
(58, 'Robin', 'robin123', 'robin@live.se'),
(59, 'Stefan', 'stefan123', 'stefan@live.se'),
(60, 'Robin', 'robin123', 'robin@live.se'),
(61, 'Lukas', 'lukas123', 'lukas@live.se');

-- --------------------------------------------------------

--
-- Tabellstruktur `tidslogg`
--

CREATE TABLE `tidslogg` (
  `IDT` int(11) NOT NULL,
  `IDperson` int(11) NOT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `tidslogg`
--

INSERT INTO `tidslogg` (`IDT`, `IDperson`, `tid`) VALUES
(112, 50, 15),
(114, 50, 4),
(115, 59, 1),
(121, 50, 1),
(123, 50, 16),
(124, 50, 17),
(130, 50, 4),
(132, 50, 58),
(140, 50, 17),
(141, 50, 15),
(145, 50, 1),
(146, 50, 1),
(147, 50, 118),
(148, 50, 0),
(149, 59, 1),
(150, 59, 2),
(151, 59, 1),
(152, 59, 0),
(153, 50, 1),
(154, 50, 0),
(155, 50, 6),
(156, 50, 1),
(157, 50, 1),
(158, 50, 0),
(159, 50, 2),
(160, 50, 0),
(161, 50, 0),
(162, 50, 0),
(163, 50, 0),
(164, 50, 2);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `loginkontroll`
--
ALTER TABLE `loginkontroll`
  ADD PRIMARY KEY (`IDperson`);

--
-- Index för tabell `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`user_id`);

--
-- Index för tabell `tidslogg`
--
ALTER TABLE `tidslogg`
  ADD PRIMARY KEY (`IDT`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `person`
--
ALTER TABLE `person`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT för tabell `tidslogg`
--
ALTER TABLE `tidslogg`
  MODIFY `IDT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
