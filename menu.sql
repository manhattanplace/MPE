-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2014 at 07:38 PM
-- Server version: 5.0.91
-- PHP Version: 5.3.6-pl0-gentoo

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(5) NOT NULL auto_increment,
  `label` varchar(50) NOT NULL default '',
  `link_url` varchar(100) NOT NULL default '',
  `parent_id` int(5) NOT NULL default '0',
  `has_child` varchar(1) NOT NULL default '0',
  `order` int(5) NOT NULL,
  `order_temp` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
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
(6, 'opens', '/opens.php', 0, '0', 6, 0),
(7, 'psa''s', '/psa.php', 0, '0', 7, 0),
(8, 'features/episodic', '/episodic.php', 0, '0', 8, 0),
(9, 'directors', '/directors.php', 0, '0', 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE IF NOT EXISTS `social` (
  `id` int(5) NOT NULL auto_increment,
  `label` varchar(50) NOT NULL default '',
  `link_url` varchar(100) NOT NULL default '',
  `parent_id` int(5) NOT NULL default '0',
  `has_child` varchar(1) NOT NULL default '0',
  `order` int(5) NOT NULL,
  `order_temp` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
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

CREATE TABLE IF NOT EXISTS `super_menu` (
  `id` int(5) NOT NULL auto_increment,
  `label` varchar(50) NOT NULL default '',
  `link_url` varchar(100) NOT NULL default '',
  `parent_id` int(5) NOT NULL default '0',
  `has_child` varchar(1) NOT NULL default '0',
  `order` int(5) NOT NULL,
  `order_temp` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `super_menu`
--

INSERT INTO `super_menu` (`id`, `label`, `link_url`, `parent_id`, `has_child`, `order`, `order_temp`) VALUES
(1, 'recent work', '/behindthescenes.php', 0, '0', 1, 0),
(2, 'about', '/about.php', 0, '0', 2, 0),
(3, 'contact', '/contact.php', 0, '0', 3, 0);
