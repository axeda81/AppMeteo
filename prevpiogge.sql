-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 22, 2017 at 04:15 PM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prevpiogge`
--

-- --------------------------------------------------------

--
-- Table structure for table `dettaglioprevisioni`
--

CREATE TABLE IF NOT EXISTS `dettaglioprevisioni` (
  `ID` int(11) NOT NULL,
  `ID_previsione` int(11) NOT NULL,
  `zona` set('60','61','62','63','64') NOT NULL,
  `ID_fasciaoraria` int(11) NOT NULL,
  `ID_tipoprevisione` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fasciaorariaprevisione`
--

CREATE TABLE IF NOT EXISTS `fasciaorariaprevisione` (
  `ID` int(11) NOT NULL,
  `codice` char(1) NOT NULL,
  `fasciaoraria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `previsionieffettuate`
--

CREATE TABLE IF NOT EXISTS `previsionieffettuate` (
  `ID` int(11) NOT NULL,
  `ID_utente` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Ora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipoprevisione`
--

CREATE TABLE IF NOT EXISTS `tipoprevisione` (
  `id` int(11) NOT NULL,
  `previsione` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `utenti`
--

CREATE TABLE IF NOT EXISTS `utenti` (
  `ID` int(11) NOT NULL,
  `tipo` set('0','1','2') NOT NULL DEFAULT '0' COMMENT '0 = Meteo, 1 = Dirigente, 2 = Admin',
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE IF NOT EXISTS `zone` (
  `ID` int(11) NOT NULL,
  `numZona` int(11) NOT NULL,
  `nomeZona` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabella con nomi e numeri identificativi delle 5 zone di allerta ';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dettaglioprevisioni`
--
ALTER TABLE `dettaglioprevisioni`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `dettaglioprevisioni_ibfk_1` (`ID_previsione`),
  ADD KEY `dettaglioprevisioni_ibfk_2` (`ID_tipoprevisione`),
  ADD KEY `dettaglioprevisioni_ibfk_3` (`ID_fasciaoraria`);

--
-- Indexes for table `fasciaorariaprevisione`
--
ALTER TABLE `fasciaorariaprevisione`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `previsionieffettuate`
--
ALTER TABLE `previsionieffettuate`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `previsionieffettuate_ibfk_1` (`ID_utente`);

--
-- Indexes for table `tipoprevisione`
--
ALTER TABLE `tipoprevisione`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD UNIQUE KEY `username_3` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dettaglioprevisioni`
--
ALTER TABLE `dettaglioprevisioni`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fasciaorariaprevisione`
--
ALTER TABLE `fasciaorariaprevisione`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `previsionieffettuate`
--
ALTER TABLE `previsionieffettuate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `utenti`
--
ALTER TABLE `utenti`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dettaglioprevisioni`
--
ALTER TABLE `dettaglioprevisioni`
  ADD CONSTRAINT `dettaglioprevisioni_ibfk_1` FOREIGN KEY (`ID_previsione`) REFERENCES `previsionieffettuate` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dettaglioprevisioni_ibfk_2` FOREIGN KEY (`ID_tipoprevisione`) REFERENCES `tipoprevisione` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dettaglioprevisioni_ibfk_3` FOREIGN KEY (`ID_fasciaoraria`) REFERENCES `fasciaorariaprevisione` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `previsionieffettuate`
--
ALTER TABLE `previsionieffettuate`
  ADD CONSTRAINT `previsionieffettuate_ibfk_1` FOREIGN KEY (`ID_utente`) REFERENCES `utenti` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
