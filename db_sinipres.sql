-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2015 at 06:28 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sinipres`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_m_kelas`
--

CREATE TABLE IF NOT EXISTS `tbl_m_kelas` (
`id_kelas` int(11) NOT NULL,
  `nm_kelas` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_m_kelas`
--

INSERT INTO `tbl_m_kelas` (`id_kelas`, `nm_kelas`) VALUES
(1, 'XIII TKJ'),
(2, 'XIII TEI'),
(3, 'XIII TGB'),
(4, 'XIII TMP'),
(5, 'XIII TMO'),
(6, 'XIII TITL');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_m_user`
--

CREATE TABLE IF NOT EXISTS `tbl_m_user` (
`user_id` int(11) NOT NULL,
  `user_role` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_password` text NOT NULL,
  `user_nama` text NOT NULL,
  `id_kelas` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_m_user`
--

INSERT INTO `tbl_m_user` (`user_id`, `user_role`, `user_name`, `user_password`, `user_nama`, `id_kelas`) VALUES
(1, 1, 'admin', 'admin20', 'Administrator', 0),
(2, 2, 'user_tkj', 'user_tkj', 'Audien TKJ', 1),
(3, 3, 'iqbal', 'iqbal20', 'Iqbal Wahyudi', 1),
(4, 2, 'user_tei', 'user_tei', 'Audien TEI', 2),
(5, 2, 'user_tgb', 'user_tgb', 'Audien TGB', 3),
(6, 2, 'user_tmp', 'user_tmp', 'Audien TMP', 4),
(7, 2, 'user_tmo', 'user_tmo', 'Audien TMO', 5),
(8, 2, 'user_titl', 'user_titl', 'Audien TITL', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_t_nilai`
--

CREATE TABLE IF NOT EXISTS `tbl_t_nilai` (
`id_nilai` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nilai1` int(255) NOT NULL,
  `nilai2` int(255) NOT NULL,
  `nilai3` int(255) NOT NULL,
  `nilai4` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `avg` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_t_nilai`
--

INSERT INTO `tbl_t_nilai` (`id_nilai`, `user_id`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `total`, `avg`) VALUES
(1, 9, 90, 0, 0, 0, 90, 23),
(2, 3, 100, 95, 90, 95, 380, 95),
(3, 3, 90, 95, 95, 100, 380, 95);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_m_kelas`
--
ALTER TABLE `tbl_m_kelas`
 ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_m_user`
--
ALTER TABLE `tbl_m_user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_t_nilai`
--
ALTER TABLE `tbl_t_nilai`
 ADD PRIMARY KEY (`id_nilai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_m_kelas`
--
ALTER TABLE `tbl_m_kelas`
MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_m_user`
--
ALTER TABLE `tbl_m_user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_t_nilai`
--
ALTER TABLE `tbl_t_nilai`
MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
