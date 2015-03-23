-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2014 at 09:01 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `regv3`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE IF NOT EXISTS `tbl_content` (
  `ContentID` int(11) NOT NULL AUTO_INCREMENT,
  `ContentName` text,
  `ContentText` text,
  `Visibility` int(11) DEFAULT NULL,
  PRIMARY KEY (`ContentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`ContentID`, `ContentName`, `ContentText`, `Visibility`) VALUES
(1, 'containerHL1', '<p>LIVE WEBINAR WITH <span>HOST NAME</span></p>', 1),
(2, 'containerHL2', '<p>“The 5 Reasons You Must Be Using Responsive Design On Your Websites in 2013 And Beyond”</p>', 1),
(3, 'containerVideo', '<img src="images/video.png">', 1),
(4, 'containerDateTime', '<p><span>Friday, June 25th,</span>11 AM Pacific Time</p>', 1),
(5, 'containerH3', '<h3>Enter your name and email now for instant access to your free report…</h3>', 1),
(6, 'containerForm', '<input name="email" class="email" type="text" placeholder="Enter your email address"> <input name="name" class="name" type="text" placeholder="Enter your first name"> <button type="submit">GET INSTANT ACCESS</button> <div class="caption2"> <img src="images/lock1.png"> <p>We value your privacy and would never spam you</p>', 1),
(7, 'containerLeftTitle', '<h3>DURING THIS FREE WEBINAR YOU WILL LEARN:</h3>', 1),
(8, 'containerLists', '<li class="one">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li> <li class="two">Ut a ligula vitae ante vulputate consectetur quis eu urna.</li', 1),
(9, 'containerAvatar', '<img src="images/avatar.png">', 1),
(10, 'containerHostName', 'Host Name', 1),
(11, 'containerShareText', 'Share this page with your friends…', 1),
(12, 'containerShareButtons', '<div class="twitter"><a href="#"><img src="images/twitter.png"></a></div> <div class="facebook"><a href="#"><img src="images/facebook.png"></a></div> <div class="google"><a href="#"><img src="images/google.png"></a></div>', 1),
(13, 'containerWarning', '<h3>WARNING: We only have 1000 spots on our webinar system available and space will fill up fast so register now to avoid missing out. This webinar is packed with high quality content and will fill up fast!</h3>', 1),
(14, 'containerClaimSpot', '<h3>This one will be no exception. So claim your spot below!</h3>', 1),
(16, 'containerClaimForms', '<input name="email" class="email2" type="text" placeholder="Enter your email address"> <input name="name" class="name2" type="text" placeholder="Enter your first name"> <button type="submit">GET INSTANT ACCESS</button> <div class="caption22"> <img src="images/lock2.png"> <p>We value your privacy and would never spam you</p>', 1),
(17, 'containerFooter', 'Copyright 2014 - Company Name - All Rights Reserved', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_list`
--

CREATE TABLE IF NOT EXISTS `tbl_list` (
  `ListID` int(11) NOT NULL AUTO_INCREMENT,
  `ListName` text,
  `ListIcon` text,
  `Visibility` int(11) DEFAULT NULL,
  PRIMARY KEY (`ListID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_list`
--

INSERT INTO `tbl_list` (`ListID`, `ListName`, `ListIcon`, `Visibility`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', NULL, 1),
(2, 'Ut a ligula vitae ante vulputate consectetur quis eu urna.', NULL, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
