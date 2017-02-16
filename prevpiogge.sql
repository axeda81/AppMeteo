-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2017 at 11:39 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=471 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dettaglioprevisioni`
--

INSERT INTO `dettaglioprevisioni` (`ID`, `ID_previsione`, `zona`, `ID_fasciaoraria`, `ID_tipoprevisione`) VALUES
(1, 1, '60', 1, 0),
(2, 1, '60', 2, 0),
(3, 1, '60', 3, 0),
(4, 1, '60', 4, 0),
(5, 1, '60', 5, 0),
(6, 1, '60', 6, 0),
(7, 1, '61', 1, 0),
(8, 1, '61', 2, 0),
(9, 1, '61', 3, 2),
(10, 1, '61', 4, 2),
(11, 1, '61', 5, 2),
(12, 1, '61', 6, 2),
(13, 1, '62', 1, 0),
(14, 1, '62', 2, 0),
(15, 1, '62', 3, 0),
(16, 1, '62', 4, 0),
(17, 1, '62', 5, 0),
(18, 1, '62', 6, 0),
(19, 1, '63', 1, 0),
(20, 1, '63', 2, 0),
(21, 1, '63', 3, 0),
(22, 1, '63', 4, 0),
(23, 1, '63', 5, 0),
(24, 1, '63', 6, 0),
(25, 1, '64', 1, 0),
(26, 1, '64', 2, 0),
(27, 1, '64', 3, 1),
(28, 1, '64', 4, 1),
(29, 1, '64', 5, 1),
(30, 1, '64', 6, 0),
(31, 2, '60', 1, 0),
(32, 2, '60', 2, 0),
(33, 2, '60', 3, 0),
(34, 2, '60', 4, 1),
(35, 2, '60', 5, 1),
(36, 2, '60', 6, 2),
(37, 2, '61', 1, 0),
(38, 2, '61', 2, 0),
(39, 2, '61', 3, 0),
(40, 2, '61', 4, 0),
(41, 2, '61', 5, 0),
(42, 2, '61', 6, 0),
(43, 2, '62', 1, 0),
(44, 2, '62', 2, 2),
(45, 2, '62', 3, 2),
(46, 2, '62', 4, 0),
(47, 2, '62', 5, 1),
(48, 2, '62', 6, 0),
(49, 2, '63', 1, 0),
(50, 2, '63', 2, 0),
(51, 2, '63', 3, 0),
(52, 2, '63', 4, 0),
(53, 2, '63', 5, 0),
(54, 2, '63', 6, 0),
(55, 2, '64', 1, 0),
(56, 2, '64', 2, 0),
(57, 2, '64', 3, 0),
(58, 2, '64', 4, 0),
(59, 2, '64', 5, 0),
(60, 2, '64', 6, 0),
(61, 3, '60', 1, 0),
(62, 3, '60', 2, 0),
(63, 3, '60', 3, 0),
(64, 3, '60', 4, 0),
(65, 3, '60', 5, 0),
(66, 3, '60', 6, 0),
(67, 3, '61', 1, 0),
(68, 3, '61', 2, 0),
(69, 3, '61', 3, 0),
(70, 3, '61', 4, 0),
(71, 3, '61', 5, 0),
(72, 3, '61', 6, 0),
(73, 3, '62', 1, 0),
(74, 3, '62', 2, 0),
(75, 3, '62', 3, 0),
(76, 3, '62', 4, 0),
(77, 3, '62', 5, 0),
(78, 3, '62', 6, 0),
(79, 3, '63', 1, 2),
(80, 3, '63', 2, 2),
(81, 3, '63', 3, 2),
(82, 3, '63', 4, 0),
(83, 3, '63', 5, 0),
(84, 3, '63', 6, 0),
(85, 3, '64', 1, 0),
(86, 3, '64', 2, 0),
(87, 3, '64', 3, 0),
(88, 3, '64', 4, 0),
(89, 3, '64', 5, 0),
(90, 3, '64', 6, 0),
(201, 8, '60', 3, 0),
(202, 8, '60', 4, 0),
(203, 8, '60', 5, 0),
(204, 8, '60', 6, 0),
(205, 8, '61', 3, 0),
(206, 8, '61', 4, 0),
(207, 8, '61', 5, 0),
(208, 8, '61', 6, 0),
(209, 8, '62', 3, 0),
(210, 8, '62', 4, 0),
(211, 8, '62', 5, 0),
(212, 8, '62', 6, 0),
(213, 8, '63', 3, 0),
(214, 8, '63', 4, 0),
(215, 8, '63', 5, 0),
(216, 8, '63', 6, 0),
(217, 8, '64', 3, 0),
(218, 8, '64', 4, 0),
(219, 8, '64', 5, 0),
(220, 8, '64', 6, 0),
(221, 9, '60', 3, 2),
(222, 9, '60', 4, 2),
(223, 9, '60', 5, 2),
(224, 9, '60', 6, 2),
(225, 9, '61', 3, 0),
(226, 9, '61', 4, 0),
(227, 9, '61', 5, 0),
(228, 9, '61', 6, 0),
(229, 9, '62', 3, 1),
(230, 9, '62', 4, 1),
(231, 9, '62', 5, 1),
(232, 9, '62', 6, 1),
(233, 9, '63', 3, 1),
(234, 9, '63', 4, 1),
(235, 9, '63', 5, 1),
(236, 9, '63', 6, 1),
(237, 9, '64', 3, 0),
(238, 9, '64', 4, 0),
(239, 9, '64', 5, 0),
(240, 9, '64', 6, 0),
(241, 10, '60', 3, 2),
(242, 10, '60', 4, 0),
(243, 10, '60', 5, 0),
(244, 10, '60', 6, 0),
(245, 10, '61', 3, 0),
(246, 10, '61', 4, 1),
(247, 10, '61', 5, 0),
(248, 10, '61', 6, 0),
(249, 10, '62', 3, 0),
(250, 10, '62', 4, 0),
(251, 10, '62', 5, 1),
(252, 10, '62', 6, 0),
(253, 10, '63', 3, 0),
(254, 10, '63', 4, 0),
(255, 10, '63', 5, 0),
(256, 10, '63', 6, 1),
(257, 10, '64', 3, 0),
(258, 10, '64', 4, 0),
(259, 10, '64', 5, 0),
(260, 10, '64', 6, 0),
(261, 11, '60', 3, 0),
(262, 11, '60', 4, 2),
(263, 11, '60', 5, 0),
(264, 11, '60', 6, 0),
(265, 11, '61', 3, 0),
(266, 11, '61', 4, 0),
(267, 11, '61', 5, 0),
(268, 11, '61', 6, 0),
(269, 11, '62', 3, 0),
(270, 11, '62', 4, 0),
(271, 11, '62', 5, 0),
(272, 11, '62', 6, 0),
(273, 11, '63', 3, 0),
(274, 11, '63', 4, 0),
(275, 11, '63', 5, 0),
(276, 11, '63', 6, 0),
(277, 11, '64', 3, 0),
(278, 11, '64', 4, 0),
(279, 11, '64', 5, 0),
(280, 11, '64', 6, 0),
(281, 12, '60', 1, 2),
(282, 12, '60', 2, 2),
(283, 12, '60', 3, 0),
(284, 12, '60', 4, 0),
(285, 12, '60', 5, 0),
(286, 12, '60', 6, 0),
(287, 12, '61', 1, 0),
(288, 12, '61', 2, 1),
(289, 12, '61', 3, 1),
(290, 12, '61', 4, 0),
(291, 12, '61', 5, 1),
(292, 12, '61', 6, 1),
(293, 12, '62', 1, 0),
(294, 12, '62', 2, 0),
(295, 12, '62', 3, 0),
(296, 12, '62', 4, 0),
(297, 12, '62', 5, 0),
(298, 12, '62', 6, 0),
(299, 12, '63', 1, 0),
(300, 12, '63', 2, 0),
(301, 12, '63', 3, 1),
(302, 12, '63', 4, 2),
(303, 12, '63', 5, 2),
(304, 12, '63', 6, 0),
(305, 12, '64', 1, 0),
(306, 12, '64', 2, 0),
(307, 12, '64', 3, 0),
(308, 12, '64', 4, 0),
(309, 12, '64', 5, 0),
(310, 12, '64', 6, 0),
(311, 13, '60', 1, 0),
(312, 13, '60', 2, 0),
(313, 13, '60', 3, 1),
(314, 13, '60', 4, 0),
(315, 13, '60', 5, 0),
(316, 13, '60', 6, 0),
(317, 13, '61', 1, 0),
(318, 13, '61', 2, 0),
(319, 13, '61', 3, 2),
(320, 13, '61', 4, 0),
(321, 13, '61', 5, 2),
(322, 13, '61', 6, 1),
(323, 13, '62', 1, 0),
(324, 13, '62', 2, 0),
(325, 13, '62', 3, 1),
(326, 13, '62', 4, 0),
(327, 13, '62', 5, 0),
(328, 13, '62', 6, 0),
(329, 13, '63', 1, 1),
(330, 13, '63', 2, 2),
(331, 13, '63', 3, 0),
(332, 13, '63', 4, 0),
(333, 13, '63', 5, 1),
(334, 13, '63', 6, 0),
(335, 13, '64', 1, 0),
(336, 13, '64', 2, 0),
(337, 13, '64', 3, 1),
(338, 13, '64', 4, 0),
(339, 13, '64', 5, 0),
(340, 13, '64', 6, 0),
(341, 14, '60', 1, 2),
(342, 14, '60', 2, 2),
(343, 14, '60', 3, 1),
(344, 14, '60', 4, 1),
(345, 14, '60', 5, 1),
(346, 14, '60', 6, 1),
(347, 14, '61', 1, 0),
(348, 14, '61', 2, 0),
(349, 14, '61', 3, 0),
(350, 14, '61', 4, 0),
(351, 14, '61', 5, 0),
(352, 14, '61', 6, 0),
(353, 14, '62', 1, 0),
(354, 14, '62', 2, 2),
(355, 14, '62', 3, 1),
(356, 14, '62', 4, 2),
(357, 14, '62', 5, 0),
(358, 14, '62', 6, 0),
(359, 14, '63', 1, 0),
(360, 14, '63', 2, 0),
(361, 14, '63', 3, 0),
(362, 14, '63', 4, 0),
(363, 14, '63', 5, 0),
(364, 14, '63', 6, 0),
(365, 14, '64', 1, 0),
(366, 14, '64', 2, 0),
(367, 14, '64', 3, 0),
(368, 14, '64', 4, 0),
(369, 14, '64', 5, 1),
(370, 14, '64', 6, 1),
(371, 15, '60', 3, 0),
(372, 15, '60', 4, 0),
(373, 15, '60', 5, 0),
(374, 15, '60', 6, 0),
(375, 15, '61', 3, 0),
(376, 15, '61', 4, 0),
(377, 15, '61', 5, 0),
(378, 15, '61', 6, 0),
(379, 15, '62', 3, 2),
(380, 15, '62', 4, 0),
(381, 15, '62', 5, 1),
(382, 15, '62', 6, 0),
(383, 15, '63', 3, 0),
(384, 15, '63', 4, 0),
(385, 15, '63', 5, 0),
(386, 15, '63', 6, 1),
(387, 15, '64', 3, 0),
(388, 15, '64', 4, 1),
(389, 15, '64', 5, 1),
(390, 15, '64', 6, 0),
(431, 21, '60', 3, 0),
(432, 21, '60', 4, 0),
(433, 21, '60', 5, 0),
(434, 21, '60', 6, 0),
(435, 21, '61', 3, 0),
(436, 21, '61', 4, 0),
(437, 21, '61', 5, 0),
(438, 21, '61', 6, 0),
(439, 21, '62', 3, 0),
(440, 21, '62', 4, 0),
(441, 21, '62', 5, 0),
(442, 21, '62', 6, 0),
(443, 21, '63', 3, 0),
(444, 21, '63', 4, 0),
(445, 21, '63', 5, 0),
(446, 21, '63', 6, 2),
(447, 21, '64', 3, 0),
(448, 21, '64', 4, 0),
(449, 21, '64', 5, 0),
(450, 21, '64', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fasciaorariaprevisione`
--

CREATE TABLE IF NOT EXISTS `fasciaorariaprevisione` (
  `ID` int(11) NOT NULL,
  `codice` char(1) NOT NULL,
  `fasciaoraria` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasciaorariaprevisione`
--

INSERT INTO `fasciaorariaprevisione` (`ID`, `codice`, `fasciaoraria`) VALUES
(1, 'a', 'Oggi 12-18'),
(2, 'b', 'Oggi 18-24'),
(3, 'c', 'Domani 0-6'),
(4, 'd', 'Domani 6-12'),
(5, 'e', 'Domani 12-18'),
(6, 'f', 'Domani 18-24');

-- --------------------------------------------------------

--
-- Table structure for table `previsionieffettuate`
--

CREATE TABLE IF NOT EXISTS `previsionieffettuate` (
  `ID` int(11) NOT NULL,
  `ID_utente` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Ora` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `previsionieffettuate`
--

INSERT INTO `previsionieffettuate` (`ID`, `ID_utente`, `Data`, `Ora`) VALUES
(1, 7, '2017-01-25', '09:26:00'),
(2, 7, '2017-01-24', '09:30:00'),
(3, 7, '2017-01-21', '09:31:00'),
(8, 13, '2017-01-26', '12:33:00'),
(9, 7, '2017-01-27', '12:51:00'),
(10, 7, '2017-01-31', '15:54:00'),
(11, 13, '2017-01-31', '16:29:00'),
(12, 7, '2017-02-03', '09:00:00'),
(13, 7, '2017-02-07', '10:39:00'),
(14, 13, '2017-02-10', '11:49:00'),
(15, 7, '2017-02-14', '13:08:00'),
(21, 13, '2017-02-14', '18:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `tipoprevisione`
--

CREATE TABLE IF NOT EXISTS `tipoprevisione` (
  `id` int(11) NOT NULL,
  `previsione` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipoprevisione`
--

INSERT INTO `tipoprevisione` (`id`, `previsione`) VALUES
(0, 'Nessuna precipitazione'),
(1, 'FS'),
(2, 'FD');

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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utenti`
--

INSERT INTO `utenti` (`ID`, `tipo`, `nome`, `cognome`, `username`, `password`, `email`) VALUES
(7, '0', 'Paolino', 'Paperino', 'paperino', 'b54b45b19ca1f1ddc424e6b878a53f2d', 'paperino@gmail.com'),
(12, '1', 'Maria Grazia', 'Pintus', 'dirigente', '3734fa4dbcff0a162f1737413ac7135c', 'mgpintus@arpa.sardegna.it'),
(13, '0', 'nome', 'cognome', 'paperoga', 'aa99a5e842c64b8cf7c0d099f824af8c', 'boh@gmail.com'),
(21, '2', 'Chiara', 'Orru', 'chorru', '243a3b6f7ddfea2599743ce3370d5229', 'chorru@arpa.sardegna.it'),
(22, '0', 'Giacomo', 'Agrillo', 'gagrillo', '7905dc9b28a99ececfd6c31c0e9a6ccc', 'gagrillo@arpa.sardegna.it'),
(23, '0', 'Paolo', 'Boi', 'pboi', '976f0c87f1c58cd5238e76afb34caaab', 'pboi@arpa.sardegna.it'),
(24, '0', 'Carluccio', 'Castiglia', 'ccastiglia', '458fe03c78c4e6421b390094778086e2', 'ccastiglia@arpa.sardegna.it'),
(25, '0', 'Piero', 'Cau', 'pcau', '35abdf4355dd1af90beb1e027e0a2e1b', 'pcau@arpa.sardegna.it'),
(26, '0', 'Alessandro', 'Delitala', 'adelitala', 'aaf99b11826a10e452b601d17506c899', 'adelitala@arpa.sardegna.it'),
(27, '0', 'Carlo', 'Dessy', 'cdessy', '3d8e89acf5025e4a83ba1bc7f3159818', 'cdessy@arpa.sardegna.it'),
(28, '0', 'Gianni', 'Ficca', 'gficca', 'a6529e427d2df6ce21f5d00f02c9a06a', 'gficca@arpa.sardegna.it'),
(29, '0', 'Francesco', 'Nasir', 'fnasir', 'e3f461998f53cfbfde91733155047dc8', 'fnasir@arpa.sardegna.it'),
(30, '0', 'Salvatore', 'Natale', 'snatale', 'd6ae589bc0f3c336b2bb6301e7ba3d9b', 'snatale@arpa.sardegna.it'),
(31, '0', 'Paolo', 'Nicolosi', 'pnicolosi', '90366a3115239a4375d283d20e55142c', 'pnicolosi@arpa.sardegna.it'),
(32, '0', 'Samuele', 'Salis', 'ssalis', 'fd2c8796e92618edada2948e36efa5a9', 'ssalis@arpa.sardegna.it'),
(33, '0', 'Manuela', 'Idini', 'midini', '14eabc4f73631d2ad74fc377e347786b', 'midini@arpa.sardegna.it'),
(34, '0', 'Fabio', 'Petretto', 'fpetretto', '828285d3c7a63c1260ff09f5fedad0ee', 'fpetretto@arpa.sardegna.it'),
(35, '0', 'Alessandro', 'Serra', 'aserra', 'f9af799df6e090e5f6bc0975f5ae229e', 'aserra@arpa.sardegna.it');

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE IF NOT EXISTS `zone` (
  `ID` int(11) NOT NULL,
  `numZona` int(11) NOT NULL,
  `nomeZona` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Tabella con nomi e numeri identificativi delle 5 zone di allerta ';

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`ID`, `numZona`, `nomeZona`) VALUES
(1, 60, '60'),
(2, 61, '61'),
(3, 62, '62'),
(4, 63, '63'),
(5, 64, '64');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=471;
--
-- AUTO_INCREMENT for table `fasciaorariaprevisione`
--
ALTER TABLE `fasciaorariaprevisione`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `previsionieffettuate`
--
ALTER TABLE `previsionieffettuate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `utenti`
--
ALTER TABLE `utenti`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dettaglioprevisioni`
--
ALTER TABLE `dettaglioprevisioni`
  ADD CONSTRAINT `dettaglioprevisioni_ibfk_3` FOREIGN KEY (`ID_fasciaoraria`) REFERENCES `fasciaorariaprevisione` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dettaglioprevisioni_ibfk_1` FOREIGN KEY (`ID_previsione`) REFERENCES `previsionieffettuate` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dettaglioprevisioni_ibfk_2` FOREIGN KEY (`ID_tipoprevisione`) REFERENCES `tipoprevisione` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `previsionieffettuate`
--
ALTER TABLE `previsionieffettuate`
  ADD CONSTRAINT `previsionieffettuate_ibfk_1` FOREIGN KEY (`ID_utente`) REFERENCES `utenti` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
