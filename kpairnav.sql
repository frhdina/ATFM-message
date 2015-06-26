-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2015 at 04:35 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kpairnav`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE IF NOT EXISTS `disposisi` (
`id_dis` int(11) NOT NULL,
  `id_tipe` int(11) NOT NULL,
  `Id_hed` int(11) NOT NULL,
  `no_agen` varchar(90) NOT NULL,
  `tgl_agen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sifat_dis` tinyint(1) NOT NULL,
  `kla_dis` tinyint(1) NOT NULL,
  `isi_dis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
`id_hasil` int(11) NOT NULL,
  `id_dis` int(11) NOT NULL,
  `id_unit2` int(11) NOT NULL,
  `id_unit1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE IF NOT EXISTS `header` (
`id_hed` int(11) NOT NULL,
  `from_hed` varchar(200) NOT NULL,
  `no_hed` varchar(90) NOT NULL,
  `tgl_hed` date NOT NULL,
  `perihal_hed` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
`id_nota` int(11) NOT NULL,
  `nomor_nota` varchar(90) NOT NULL,
  `isi_nota` text NOT NULL,
  `nama_nota` varchar(200) NOT NULL,
  `tipe_nota` varchar(10) NOT NULL,
  `size_nota` varchar(20) NOT NULL,
  `file_nota` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelaku`
--

CREATE TABLE IF NOT EXISTS `pelaku` (
`id_pel` int(11) NOT NULL,
  `id_unit1` int(11) NOT NULL,
  `id_nota` int(11) NOT NULL,
  `person` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `previllage`
--

CREATE TABLE IF NOT EXISTS `previllage` (
`id_pre` int(11) NOT NULL,
  `id_unit2` int(11) NOT NULL,
  `id_unit1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE IF NOT EXISTS `tipe` (
`id_tipe` int(11) NOT NULL,
  `nama_tipe` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unit1`
--

CREATE TABLE IF NOT EXISTS `unit1` (
`id_unit1` int(11) NOT NULL,
  `nama_unit` varchar(200) NOT NULL,
  `user_unit` varchar(20) NOT NULL,
  `pas_unit` varchar(20) NOT NULL,
  `nama_pemegang` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unit2`
--

CREATE TABLE IF NOT EXISTS `unit2` (
`id_unit2` int(11) NOT NULL,
  `nama_unit2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
`id_up` int(11) NOT NULL,
  `id_hed` int(11) NOT NULL,
  `nama_up` varchar(200) NOT NULL,
  `tipe_up` varchar(10) NOT NULL,
  `size_up` varchar(20) NOT NULL,
  `file_up` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
 ADD PRIMARY KEY (`id_dis`), ADD KEY `id_tipe` (`id_tipe`), ADD KEY `Id_hed` (`Id_hed`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
 ADD PRIMARY KEY (`id_hasil`), ADD KEY `id_dis` (`id_dis`), ADD KEY `id_unit2` (`id_unit2`), ADD KEY `id_unit1` (`id_unit1`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
 ADD PRIMARY KEY (`id_hed`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
 ADD PRIMARY KEY (`id_nota`);

--
-- Indexes for table `pelaku`
--
ALTER TABLE `pelaku`
 ADD PRIMARY KEY (`id_pel`), ADD KEY `id_unit1` (`id_unit1`), ADD KEY `id_nota` (`id_nota`);

--
-- Indexes for table `previllage`
--
ALTER TABLE `previllage`
 ADD PRIMARY KEY (`id_pre`), ADD KEY `id_unit2` (`id_unit2`), ADD KEY `id_unit1` (`id_unit1`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
 ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `unit1`
--
ALTER TABLE `unit1`
 ADD PRIMARY KEY (`id_unit1`);

--
-- Indexes for table `unit2`
--
ALTER TABLE `unit2`
 ADD PRIMARY KEY (`id_unit2`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
 ADD PRIMARY KEY (`id_up`), ADD KEY `id_hed` (`id_hed`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
MODIFY `id_dis` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
MODIFY `id_hed` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelaku`
--
ALTER TABLE `pelaku`
MODIFY `id_pel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `previllage`
--
ALTER TABLE `previllage`
MODIFY `id_pre` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `unit1`
--
ALTER TABLE `unit1`
MODIFY `id_unit1` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `unit2`
--
ALTER TABLE `unit2`
MODIFY `id_unit2` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
MODIFY `id_up` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `disposisi`
--
ALTER TABLE `disposisi`
ADD CONSTRAINT `id_hed_dis` FOREIGN KEY (`Id_hed`) REFERENCES `header` (`id_hed`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `id_tipe_dis` FOREIGN KEY (`id_tipe`) REFERENCES `tipe` (`id_tipe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
ADD CONSTRAINT `id_dis_hasil` FOREIGN KEY (`id_dis`) REFERENCES `disposisi` (`id_dis`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `id_unit1_hasil` FOREIGN KEY (`id_unit1`) REFERENCES `unit1` (`id_unit1`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `id_unit2_hasil` FOREIGN KEY (`id_unit2`) REFERENCES `unit2` (`id_unit2`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelaku`
--
ALTER TABLE `pelaku`
ADD CONSTRAINT `id_nota_pel` FOREIGN KEY (`id_nota`) REFERENCES `nota` (`id_nota`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `id_unit1_pel` FOREIGN KEY (`id_unit1`) REFERENCES `unit1` (`id_unit1`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `previllage`
--
ALTER TABLE `previllage`
ADD CONSTRAINT `id_unit1_pre` FOREIGN KEY (`id_unit1`) REFERENCES `unit1` (`id_unit1`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `id_unit2_pre` FOREIGN KEY (`id_unit2`) REFERENCES `unit2` (`id_unit2`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `upload`
--
ALTER TABLE `upload`
ADD CONSTRAINT `id_hed_up` FOREIGN KEY (`id_hed`) REFERENCES `header` (`id_hed`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
