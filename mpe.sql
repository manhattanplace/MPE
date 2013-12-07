-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2013 at 12:13 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mpe`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL DEFAULT '',
  `link_url` varchar(100) NOT NULL DEFAULT '',
  `parent_id` int(5) NOT NULL DEFAULT '0',
  `has_child` varchar(1) NOT NULL DEFAULT '0',
  `order` int(5) NOT NULL,
  `order_temp` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `label`, `link_url`, `parent_id`, `has_child`, `order`, `order_temp`) VALUES
(1, 'commercial', '/commercial.php', 0, '0', 2, 10000),
(2, 'home', '/index.php', 0, '0', 1, 5000),
(3, 'promos', '/promos.php', 0, '0', 3, 0),
(4, 'digital/web', '/digital.php', 0, '0', 4, 0),
(5, 'teases', '/teases.php', 0, '0', 5, 0),
(6, 'opens', '/opens.directors', 0, '0', 6, 0),
(7, 'psa''s', '/psa.php', 0, '0', 7, 0),
(8, 'episodic', '/episodic.php', 0, '0', 8, 0),
(9, 'directors', '/directors.php', 0, '0', 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL DEFAULT '',
  `link_url` varchar(100) NOT NULL DEFAULT '',
  `parent_id` int(5) NOT NULL DEFAULT '0',
  `has_child` varchar(1) NOT NULL DEFAULT '0',
  `order` int(5) NOT NULL,
  `order_temp` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `label`, `link_url`, `parent_id`, `has_child`, `order`, `order_temp`) VALUES
(1, 'facebook', 'http://www.facebook.com/pages/New-York-NY/Manhattan-Place-Entertainment-Inc/122695861097251?ref=ts', 0, '0', 1, 0),
(2, 'twitter', 'https://twitter.com/manhattanplace', 0, '0', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `super_menu`
--

CREATE TABLE `super_menu` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL DEFAULT '',
  `link_url` varchar(100) NOT NULL DEFAULT '',
  `parent_id` int(5) NOT NULL DEFAULT '0',
  `has_child` varchar(1) NOT NULL DEFAULT '0',
  `order` int(5) NOT NULL,
  `order_temp` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `super_menu`
--

INSERT INTO `super_menu` (`id`, `label`, `link_url`, `parent_id`, `has_child`, `order`, `order_temp`) VALUES
(1, 'recent work', '/behindthescenes.php', 0, '0', 1, 0),
(2, 'about', '/about.php', 0, '0', 2, 0),
(3, 'contact', '/contact.php', 0, '0', 3, 0);
