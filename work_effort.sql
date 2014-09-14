-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2014 at 10:21 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `work_effort`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activity`
--

CREATE TABLE IF NOT EXISTS `tbl_activity` (
  `ID` int(11) NOT NULL,
  `NAMA_ACTIVITY` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maintenance`
--

CREATE TABLE IF NOT EXISTS `tbl_maintenance` (
  `ID` int(11) NOT NULL,
  `NAMA_MAINTENANCE` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_phase`
--

CREATE TABLE IF NOT EXISTS `tbl_phase` (
  `ID` int(11) NOT NULL,
  `NAMA_PHASE` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_production_run`
--

CREATE TABLE IF NOT EXISTS `tbl_production_run` (
  `ID` int(11) NOT NULL,
  `NAMA_PRODUCTION_RUN` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_program`
--

CREATE TABLE IF NOT EXISTS `tbl_program` (
  `ID_PROGRAM` int(11) NOT NULL,
  `NAMA_PROGRAM` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_PROGRAM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_research`
--

CREATE TABLE IF NOT EXISTS `tbl_research` (
  `ID` int(11) NOT NULL,
  `NAMA_RESEARCH` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE IF NOT EXISTS `tbl_task` (
  `ID` int(11) NOT NULL,
  `NAMA_TASK` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work_effort`
--

CREATE TABLE IF NOT EXISTS `tbl_work_effort` (
  `ID` int(11) NOT NULL,
  `ID_PRGRAM` varchar(45) DEFAULT NULL,
  `ID_PHASE` varchar(45) DEFAULT NULL,
  `ID_PROJECT` varchar(45) DEFAULT NULL,
  `ID_TASK` varchar(45) DEFAULT NULL,
  `ID_ACTIVITY` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work_flow`
--

CREATE TABLE IF NOT EXISTS `tbl_work_flow` (
  `ID` int(11) NOT NULL,
  `DESKRIPSI` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
