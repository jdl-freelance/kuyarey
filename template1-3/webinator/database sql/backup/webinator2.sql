-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2014 at 06:20 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webinator`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE IF NOT EXISTS `tbl_content` (
  `ContentID` int(11) NOT NULL AUTO_INCREMENT,
  `ContentName` varchar(200) DEFAULT NULL,
  `ContentText` text,
  PRIMARY KEY (`ContentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`ContentID`, `ContentName`, `ContentText`) VALUES
(1, 'header-innercontainer', '<div class="heading">LIVE WEBINAR with Jayden Smith &amp; Will Smith</div>\n<div class="subheading">"How to Generate Massive Traffic with Youtube"</div>'),
(2, 'top-meta-innercontainer', '<div class="meta-date">Saturday, August 18th</div><div class="meta-time">10 AM, Pacific Time10</div><div class="meta-button" id="metabutton"><a href="#popup" class="btn-claim btn-popup">Click Here To Claim Your Spot <span></span></a></div>'),
(3, 'profiles', '<div class="profile" id="img1"><img src="images/profile_img.png" alt="" /><div class="profile-name">Jayden Smith</div></div><div class="profile" id="img2"><img src="images/profile_img.png" alt="" /><div class="profile-name">Will Smith</div></div>'),
(4, 'title', '<div>DURING THIS FREE WEBINAR YOU WILL LEARN:</div>\n<div id="optionContainer">&nbsp;</div>'),
(5, 'lists', '<li> <div class="list clearfix"> <figure><img src="images/img_bullet1.png" alt="" /></figure> <div class="list-content"> <p>You''ll discover a totally unique way to get incredible results for your clients... even though you''ll probably be working less than ever on that part of your business.</p> </div> </div> </li> <li> <div class="list clearfix"> <figure><img src="images/img_bullet2.png" alt="" /></figure> <div class="list-content"> <p>You''ll discover how to finally get paid what you''re worth... without having to worry about price being an issue.</p> </div> </div> </li> <li> <div class="list clearfix"> <figure><img src="images/img_bullet3.png" alt="" /></figure> <div class="list-content"> <p>You''ll discover a unique four-step formula for attracting customers that allows you to only attract motivated prospects who know the value of what you''re offering, and are predisposed to trust you.</p> </div> </div> </li> <li> <div class="list clearfix"> <figure><img src="images/img_bullet4.png" alt="" /></figure> <div class="list-content"> <p>You''ll discover why it''s often more profitable to do the exact polar opposite of what everyone else is doing, especially in Internet Marketing.</p></div> </div></li><li><div class="list clearfix"><figure><img src="images/img_bullet5.png" alt="" /></figure><div class="list-content"><p>You''ll discover an easy and effective way to make sales... without having to act "salesy" and without having to resort to making any hypey claims (like everyone else does).</p></div></div></li>'),
(6, 'containerWarning', '<div class="box2-inner container-inner">\n<figure><img src="images/img_warning.png" alt="" /></figure>\n<div class="box2-content">\n<p>WARNING: Space is limited and these LIVE trainings always fill up because they are significantly better that the information others charge you thousands for... even though they are free.</p>\n</div>\n<div class="clear">&nbsp;</div>\n</div>\n<div class="box2-footer container-inner">This one will be no exception. <strong>So claim your spot below!</strong></div>\n<div id="optionContainer">&nbsp;</div>'),
(7, 'footerButton', '<p><a class="btn-full btn-popup" href="#popup">Click Here To Claim Your Spot </a></p>\n<div id="optionContainer">&nbsp;</div>\n<div id="optionContainer">&nbsp;</div>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_list`
--

CREATE TABLE IF NOT EXISTS `tbl_list` (
  `ListID` int(11) NOT NULL AUTO_INCREMENT,
  `ListText` text,
  `ListIcon` text,
  PRIMARY KEY (`ListID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_list`
--

INSERT INTO `tbl_list` (`ListID`, `ListText`, `ListIcon`) VALUES
(1, 'You''ll discover a totally unique way to get incredible results for your clients... even though you''ll probably be working less than ever on that part of your business.', 'images/img_bullet1.png'),
(2, 'You''ll discover how to finally get paid what you''re worth... without having to worry about price being an issue.', 'images/img_bullet2.png'),
(3, 'You''ll discover a unique four-step formula for attracting customers that allows you to only attract motivated prospects who know the value of what you''re offering, and are predisposed to trust you.', 'images/img_bullet3.png'),
(4, 'You''ll discover why it''s often more profitable to do the exact polar opposite of what everyone else is doing, especially in Internet Marketing.', 'images/img_bullet4.png'),
(5, 'You''ll discover an easy and effective way to make sales... without having to act "salesy" and without having to resort to making any hypey claims (like everyone else does).', 'images/img_bullet5.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
