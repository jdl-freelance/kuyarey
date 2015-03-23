-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2014 at 07:35 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbwebcontent`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE IF NOT EXISTS `tbl_content` (
  `ContentID` int(11) NOT NULL AUTO_INCREMENT,
  `ContentName` varchar(200) DEFAULT NULL,
  `ContentText` text,
  PRIMARY KEY (`ContentID`),
  UNIQUE KEY `ContentID_UNIQUE` (`ContentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`ContentID`, `ContentName`, `ContentText`) VALUES
(1, 'Header', '<h1>If You Have Ever Wanted to Generate More Traffic, Leads, and Salesa</h1>'),
(2, 'ArticleLeft', '<p><img src="img/essa.jpg" alt="" /></p>\n<p>But the opportunity won&rsquo;t be this good forever. In this webinar, I&rsquo;ll explain <strong>exactly </strong>how the opportunity works, and I&rsquo;ll show you exactly what to do to <strong>get started</strong>.</p>\n<p><strong>This one system has allowed me to <em>sack my boss for good, set up my new business from home, and travel the world at my leisure</em>.</strong></p>\n<p>I promise you that this <strong>free training</strong> will be more valuable than any &ldquo;webinar&rdquo; presentation you&rsquo;ve purchased this year... bold claim, I know.</p>\n<p>And I will back it up on this Webinar. <strong>The training will be held at 8pm and you can register over on the right</strong>.</p>\n<div id="optionContainer">&nbsp;</div>'),
(3, 'ArticleRight', '<img src="img/opt-head.png"><form name="form1" method="post" action="https://www.mcssl.com/app/contactsave.asp"><input name="merchantid" type="hidden" id="merchantid" value="141392"><input name="ARThankyouURL" type="hidden" id="ARThankyouURL" value="http://steveessa.com/free-webinar/index.html"><input name="copyarresponse" type="hidden" id="copyarresponse" value="1"><input name="defaultar" type="hidden" id="defaultar" value="645980"><input name="allowmulti" type="hidden" id="allowmulti" value="0"><input name="visiblefields" type="hidden" id="visiblefields" value="Name,Email1"><input name="requiredfields" type="hidden" id="requiredfields" value="Email1"><input name="Name" type="text" class="in-box"value="Enter Your Name" onFocus="javascript:if(this.value==''Enter Your Name''){this.value='''';}" onBlur="javascript:if(this.value==''''){this.value=''Enter Your Name''}"><br><input name="Email1" type="text" class="in-box" value="Enter Your Email" onFocus="javascript:if(this.value==''Enter Your Email''){this.value='''';}" onBlur="javascript:if(this.value==''''){this.value=''Enter Your Email''}"><input type="image" src="img/button.png" name="cmdSubmit" class="in-button"><input type="image" src="img/button2.png" name="cmdSubmit" class="in-button2"></form>'),
(4, 'Footer', '<a href="/">Home</a> | <a href="contact">Contact</a> | <a href="earnings-disclaimer">Earnings Disclaimer</a> | <a href="privacy-policy">Privacy Policy</a> | <a href="purchase-agreement">Purchase Agreement</a> | <a href="terms-conditions">Terms & Conditions</a>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
