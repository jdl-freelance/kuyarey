-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2014 at 09:17 AM
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
  `Visibility` int(11) DEFAULT NULL,
  PRIMARY KEY (`ContentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`ContentID`, `ContentName`, `ContentText`, `Visibility`) VALUES
(1, 'header-innercontainer', '<div class="heading">LIVE WEBINAR with Jayden Smith &amp; Will Smith</div>\n<div class="subheading">"How to Generate Massive Traffic with Youtube"</div>', 1),
(2, 'top-meta-innercontainer', '<div class="meta-date">Saturday, August 18th</div><div class="meta-time">10 AM, Pacific Time10</div><div class="meta-button" id="metabutton"><a href="#popup" class="btn-claim btn-popup">Click Here To Claim Your Spot <span></span></a></div>', 1),
(3, 'profiles', '<div id="img1" class="profile"><img src="images/profile_img.png" alt="" />\n<div class="profile-name">Jayden Smiths</div>\n</div>\n<div id="img2" class="profile"><img src="images/profile_img.png" alt="" />\n<div class="profile-name">Will Smith</div>\n</div>\n<div id="optionContainer">&nbsp;</div>', 1),
(4, 'title', '<div>DURING THIS FREE WEBINAR YOU WILL LEARN:</div>\n<div id="optionContainer">&nbsp;</div>', 1),
(5, 'lists', '<li> <div class="list clearfix"> <figure><img src="images/img_bullet1.png" alt="" /></figure> <div class="list-content"> <p>You''ll discover a totally unique way to get incredible results for your clients... even though you''ll probably be working less than ever on that part of your business.</p> </div> </div> </li> <li> <div class="list clearfix"> <figure><img src="images/img_bullet2.png" alt="" /></figure> <div class="list-content"> <p>You''ll discover how to finally get paid what you''re worth... without having to worry about price being an issue.</p> </div> </div> </li> <li> <div class="list clearfix"> <figure><img src="images/img_bullet3.png" alt="" /></figure> <div class="list-content"> <p>You''ll discover a unique four-step formula for attracting customers that allows you to only attract motivated prospects who know the value of what you''re offering, and are predisposed to trust you.</p> </div> </div> </li> <li> <div class="list clearfix"> <figure><img src="images/img_bullet4.png" alt="" /></figure> <div class="list-content"> <p>You''ll discover why it''s often more profitable to do the exact polar opposite of what everyone else is doing, especially in Internet Marketing.</p></div> </div></li><li><div class="list clearfix"><figure><img src="images/img_bullet5.png" alt="" /></figure><div class="list-content"><p>You''ll discover an easy and effective way to make sales... without having to act "salesy" and without having to resort to making any hypey claims (like everyone else does).</p></div></div></li>', 1),
(6, 'containerWarning', '<div class="box2-inner container-inner"><figure><img src="images/img_warning.png" alt="" /></figure><div class="box2-content"><p>WARNING: Space is limited and these LIVE trainings always fill up because they are significantly better that the information others charge you thousands for... even though they are free.</p></div><div class="clear"></div></div><div class="box2-footer container-inner">This one will be no exception. <strong>So claim your spot below!</strong><span></span></div>', 1),
(7, 'footerButton', '<div class="container-inner"><a href="#popup" class="btn-full btn-popup">Click Here To Claim Your Spot <span></span></a></div>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_list`
--

CREATE TABLE IF NOT EXISTS `tbl_list` (
  `ListID` int(11) NOT NULL AUTO_INCREMENT,
  `ListText` text,
  `ListIcon` text,
  `Visibility` int(11) DEFAULT NULL,
  PRIMARY KEY (`ListID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_list`
--

INSERT INTO `tbl_list` (`ListID`, `ListText`, `ListIcon`, `Visibility`) VALUES
(1, 'You''ll discover a totally unique way to get incredible results for your clients... even though you''ll probably be working less than ever on that part of your business.', 'thumbnails/temporary/20140703062257img_bullet4.png', 1),
(2, 'You''ll discover how to finally get paid what you''re worth... without having to worry about price being an issue.', 'thumbnails/temporary/20140703062305img_bullet4.png', 1),
(3, 'You''ll discover a unique four-step formula for attracting customers that allows you to only attract motivated prospects who know the value of what you''re offering, and are predisposed to trust you.', 'images/img_bullet3.png', 1),
(4, 'You''ll discover why it''s often more profitable to do the exact polar opposite of what everyone else is doing, especially in Internet Marketing.', 'images/img_bullet4.png', 1),
(5, 'Test1', 'images/img_bullet5.png', 1),
(6, 'Test2', 'thumbnails/temporary/20140703060509download.jpg', 1),
(7, 'Test3', 'thumbnails/temporary/20140703060514download.jpg', 1),
(8, 'Test4', 'thumbnails/temporary/20140703060524img_bullet4.png', 1),
(9, 'Test5', 'thumbnails/temporary/20140703062756img_bullet4.png', 1),
(10, 'Test6', 'thumbnails/temporary/20140703062804download (1).jpg', 1),
(11, 'Test7', 'thumbnails/temporary/20140703062914download.jpg', 1),
(12, 'Test8', 'thumbnails/temporary/20140703071801download.jpg', 1),
(13, 'Test9', 'thumbnails/temporary/20140703071806img_bullet5.png', 0),
(14, 'Test10', 'thumbnails/temporary/20140703071814download.jpg', 0),
(15, 'Test11', '', 0),
(16, 'Test12', '', 0),
(17, 'Test 12', 'thumbnails/temporary/20140703091023download (1).jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
