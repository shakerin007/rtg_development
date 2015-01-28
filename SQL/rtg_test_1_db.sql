-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2015 at 11:23 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rtg_test_1_db`
--
CREATE DATABASE IF NOT EXISTS `rtg_test_1_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rtg_test_1_db`;

-- --------------------------------------------------------

--
-- Table structure for table `cmd_list`
--

CREATE TABLE IF NOT EXISTS `cmd_list` (
  `cmd` int(11) unsigned NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`cmd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmd_list`
--

INSERT INTO `cmd_list` (`cmd`, `type`) VALUES
(1, 'create whole testbench'),
(2, 'create new environment class'),
(3, 'add new environment instance'),
(4, 'create new scoreboard class'),
(5, 'add new scoreboard instance'),
(6, 'create new subscriber class'),
(7, 'add new subscriber instance'),
(8, 'create new agent class'),
(9, 'add new agent instance'),
(10, 'create new driver class'),
(11, 'add new driver instance'),
(12, 'create new monitor class'),
(13, 'add new monitor instance'),
(14, 'create new sequencer class'),
(15, 'add new sequencer instance'),
(16, 'create new sequence class'),
(17, 'create new base sequence'),
(18, 'create new test');

-- --------------------------------------------------------

--
-- Table structure for table `tb_info`
--

CREATE TABLE IF NOT EXISTS `tb_info` (
  `cmd_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cmd` int(11) unsigned NOT NULL,
  `tb_id` int(11) unsigned NOT NULL,
  `argument1` varchar(255) NOT NULL,
  `argument2` varchar(255) NOT NULL,
  `argument3` varchar(255) NOT NULL,
  `argument4` varchar(255) NOT NULL,
  PRIMARY KEY (`cmd_id`),
  KEY `tb_id` (`tb_id`),
  KEY `cmd` (`cmd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tb_info`
--

INSERT INTO `tb_info` (`cmd_id`, `cmd`, `tb_id`, `argument1`, `argument2`, `argument3`, `argument4`) VALUES
(1, 1, 1, 'apb', 'apb_top.sv', 'apb_base_test.sv', 'apb_base_test'),
(2, 2, 1, 'apb2', 'apb_base_test.sv', '', ''),
(3, 1, 5, 'uart', 'uart_top.sv', 'uart_base_test.sv', 'uart_base_test'),
(4, 1, 2, 'uart2', 'uart2_top.sv', 'uart2_base_test.sv', 'uart2_base_test'),
(5, 1, 5, 'ahb', 'ahb_top.sv', 'ahb_base_test.sv', 'ahb_base_test'),
(6, 1, 8, 'apb', 'apb_top.sv', 'apb_base_test.sv', 'apb_base_test'),
(10, 9, 2, 'argument1', 'argument2', 'argument3', 'argument4'),
(11, 2, 2, 'argument1', 'argument1', 'argument1', 'argument1'),
(12, 2, 2, 'uart3', 'uart2_base_test.sv', '', ''),
(13, 2, 2, 'uart3', 'uart3_env.sv', '', ''),
(14, 2, 2, 'uart4', 'uart2_base_test.sv', '', ''),
(15, 3, 2, 'uart2_env', 'shakerin_env', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_list`
--

CREATE TABLE IF NOT EXISTS `tb_list` (
  `tb_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `tb_name` varchar(255) NOT NULL,
  `tb_description` varchar(255) NOT NULL,
  PRIMARY KEY (`tb_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tb_list`
--

INSERT INTO `tb_list` (`tb_id`, `user_id`, `tb_name`, `tb_description`) VALUES
(1, 1, 'apb', 'This is apb Testbench with Id=1'),
(2, 1, 'apb', 'This is apb Testbench with Id=2'),
(3, 4, 'uart', 'This is uart Testbench with Id=3'),
(4, 2, 'alu', 'This is alu Testbench with Id=4'),
(5, 2, 'processor', 'This is processor Testbench with Id=5'),
(6, 1, 'ahb', 'This is ahb Testbench with Id=6'),
(7, 4, 'pcie\r\n', 'This is pcie Testbench with Id=7'),
(8, 5, 'tb_name', 'This is tb_name Testbench with Id=8'),
(14, 8, 'test4', 'brief description of test4');

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE IF NOT EXISTS `user_list` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'shakerin', 'shakerin@gmail.com', '01772370030'),
(2, 'anon', 'anon@gmail.com', 'anon'),
(4, 'rih', 'rih', 'asdasda'),
(5, 'angryAnon', 'angry@anon.com', 'anon'),
(7, 'anon2', 'anon2', 'anon2'),
(8, 'shake001', 'shakerin007@hotmail.com', 'abcd1234');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_info`
--
ALTER TABLE `tb_info`
  ADD CONSTRAINT `tb_info_ibfk_2` FOREIGN KEY (`tb_id`) REFERENCES `tb_list` (`tb_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_info_ibfk_1` FOREIGN KEY (`cmd`) REFERENCES `cmd_list` (`cmd`) ON DELETE CASCADE;

--
-- Constraints for table `tb_list`
--
ALTER TABLE `tb_list`
  ADD CONSTRAINT `tb_list_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_list` (`user_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
