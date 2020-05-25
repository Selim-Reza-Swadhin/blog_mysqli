-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 11:47 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(2, 'Programming'),
(3, 'Music'),
(4, 'Dance'),
(6, 'Painting'),
(7, 'People'),
(8, 'Social Media'),
(10, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(6) NOT NULL,
  `cat_id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `contents` text NOT NULL,
  `date_posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `cat_id`, `title`, `contents`, `date_posted`) VALUES
(6, 2, 'What is programming today?', 'â€œProgramming today is a race between software engineers striving to build bigger and better idiot-proof programs, and the Universe trying to produce bigger and better idiots. So far, the Universe is winning.â€ \r\nâ€• Rick Cook, The Wizardry Compiled', '2017-10-06 15:50:31'),
(8, 3, 'Music <3', 'â€œMusic has always been a matter of Energy to me, a question of Fuel. Sentimental people call it Inspiration, but what they really mean is Fuel. I have always needed Fuel. I am a serious consumer. On some nights I still believe that a car with the gas needle on empty can run about fifty more miles if you have the right music very loud on the radio.â€ \r\nâ€• Hunter S. Thompson', '2017-10-06 15:53:36'),
(9, 4, 'Just Dance!', 'Work like you don\'t need the money. Love like you\'ve never been hurt. Dance like nobody\'s watching. Satchel Paige', '2017-10-06 15:55:17'),
(10, 6, 'Art of Patience', 'I have seen many storms in my life. Most storms have caught me by surprise, so I had to learn very quickly to look further and understand that I am not capable of controlling the weather, to exercise the art of patience and to respect the fury of nature. -Paulo Coelho', '2017-10-06 15:56:16'),
(11, 7, 'Yeah! People!', 'People don`t change, but they can learn to behave differently.     \r\n\r\nCharlaine Harris', '2017-10-06 15:57:18'),
(12, 8, 'Social Media vs. Technology', 'â€œSocial media is about sociology and psychology more than technology.â€ â€“ Brian Solis', '2017-10-06 15:58:33'),
(13, 9, 'Technology!', 'All of the biggest technological inventions created by man - the airplane, the automobile, the computer - says little about his intelligence, but speaks volumes about his laziness. - Mark Kennedy', '2017-10-06 15:59:26'),
(14, 6, 'à¦¸à§‡à¦²à¦¿à¦® à¦°à§‡à¦œà¦¾ à¦¸à§à¦¬à¦¾à¦§à§€à¦¨', 'à¦¸à§‡à¦²à¦¿à¦® à¦°à§‡à¦œà¦¾ à¦¸à§à¦¬à¦¾à¦§à¦¿à¦¨ à¦¸à§‡à¦²à¦¿à¦® à¦°à§‡à¦œà¦¾ à¦¸à§à¦¬à¦¾à¦§à¦¿à¦¨à¦¸à§‡à¦²à¦¿à¦® à¦°à§‡à¦œà¦¾ à¦¸à§à¦¬à¦¾à¦§à¦¿à¦¨à¦¸à§‡à¦²à¦¿à¦® à¦°à§‡à¦œà¦¾ à¦¸à§à¦¬à¦¾à¦§à¦¿à¦¨ à¦¸à§‡à¦²à¦¿à¦® à¦°à§‡à¦œà¦¾ à¦¸à§à¦¬à¦¾à¦§à¦¿à¦¨ à¦¸à§‡à¦²à¦¿à¦® à¦°à§‡à¦œà¦¾ à¦¸à§à¦¬à¦¾à¦§à¦¿à¦¨à¦¸à§‡à¦²à¦¿à¦® à¦°à§‡à¦œà¦¾ à¦¸à§à¦¬à¦¾à¦§à§€à¦¨à¦¸à§‡à¦²à¦¿à¦® à¦°à§‡à¦œà¦¾ à¦¸à§à¦¬à¦¾à¦§à§€à¦¨', '2020-05-08 13:50:18'),
(15, 7, 'à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦¹à¦² à¦­à¦¾à¦²à§‹  à¦¦à§‡à¦¶', '<h1>Tooltip <small>Bootstrap Visual Test à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦à¦•à¦Ÿà¦¿ à¦­à¦¾à¦²à§‹ à¦¦à§‡à¦¶ à¥¤ à¦†à¦®à¦¿ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à¦•à§‡ à¦­à¦¾à¦²à§‹à¦¬à¦¾à¦¸à¦¿ à¥¤ </small></h1>\r\n	  <p> à¦†à¦®à¦¾à¦¦à§‡à¦° à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦° à¦—à§à¦²à§‹ à¦¬à¦¿à¦¬à¦°à¦£ à¦¥à§‡à¦•à§‡ à¦…à¦ªà¦¾à¦°à§‡à¦Ÿà¦¿à¦‚ à¦¸à¦¿à¦¸à§à¦Ÿà§‡à¦® à¦…à¦¨à§à¦¸à¦¾à¦°à§‡ à¦†à¦ªà¦¨à¦¾à¦° à¦œà¦¨à§à¦¯ à¦ªà§à¦°à¦¯à§‹à¦œà§à¦¯ à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦°à¦Ÿà¦¿ à¦¬à¦¾à¦›à¦¾à¦‡ à¦•à¦°à§à¦¨ à¥¤ à¦†à¦ªà¦¨à¦¿ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦“à§Ÿà§‡à¦¬à¦¸à¦¾à¦‡à¦Ÿ à¦¥à§‡à¦•à§‡ à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦°à¦Ÿà¦¿ Download à¦•à¦°à¦¾à¦° à¦†à¦—à§‡ Online-à¦ à¦®à§‚à¦²à§à¦¯ à¦ªà¦°à¦¿à¦¶à§‹à¦§ à¦•à¦°à¦¬à§‡à¦¨à¥¤ à¦®à§‚à¦²à§à¦¯ à¦ªà¦°à¦¿à¦¶à§‹à¦§à§‡à¦° à¦ªà¦° à¦†à¦ªà¦¨à¦¿ à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦°à¦Ÿà¦¿ Download à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨à¥¤ à¦†à¦ªà¦¨à¦¾à¦° à¦¸à¦¾à¦®à¦¨à§‡ à¦¤à¦–à¦¨ à¦à¦•à¦Ÿà¦¿ à¦•à§‹à¦¡ à¦¨à¦¾à¦®à§à¦¬à¦¾à¦° à¦†à¦¸à¦¬à§‡à¥¤ à¦¸à§‡à¦Ÿà¦¿ à¦†à¦ªà¦¨à¦¾à¦° à¦²à¦¾à¦‡à¦¸à§‡à¦¨à§à¦¸ à¦¨à¦¾à¦®à§à¦¬à¦¾à¦°à¥¤ à¦à¦Ÿà¦¿ à¦¸à¦‚à¦°à¦•à§à¦·à¦£ à¦•à¦°à§à¦¨à¥¤ à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦°à¦Ÿà¦¿ à¦¡à¦¾à¦‰à¦¨à¦²à§‹à¦¡ à¦•à¦°à¦¾à¦° à¦ªà¦° à¦à¦Ÿà¦¿à¦•à§‡ Unzip à¦•à¦°à¦¬à§‡à¦¨à¥¤ à¦¬à¦¿à¦œà§Ÿ à¦¬à¦¾à¦‚à¦²à¦¾ à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦° à¦‡à¦¨à§à¦¸à¦Ÿà¦² à¦•à¦°à¦¾à¦° à¦†à¦—à§‡ à¦†à¦ªà¦¨à¦¾à¦° à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦°à§‡ à¦‰à¦‡à¦¨à§à¦¡à§‡à¦¾à¦œ à¦à¦¬à¦‚ à¦à¦® à¦à¦¸ à¦“à§Ÿà¦¾à¦°à§à¦¡ (Microsoft Word) à¦‡à¦¨à§à¦¸à¦Ÿà¦² à¦•à¦°à¦¬à§‡à¦¨à¥¤à¦¯à¦¦à¦¿ à¦ªà§à¦°à¦¾à¦¨à§‡à¦¾ à¦¬à¦¾à¦‚à¦²à¦¾ à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦° à¦¥à¦¾à¦•à§‡ à¦¤à¦¬à§‡ à¦«à¦¨à§à¦Ÿà¦¸à¦¹ à¦¸à§‡à¦—à§à¦²à§‡à¦¾ Delete à¦•à¦°à§‡ à¦¨à§‡à¦¬à§‡à¦¨à¥¤à¦‡à¦¨à§à¦¸à¦Ÿà¦² à¦¬à§‹à¦¤à¦¾à¦®à§‡ à¦¡à¦¾à¦¬à¦² à¦•à§à¦²à¦¿à¦• à¦•à¦°à§‡ à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦°à¦Ÿà¦¿ à¦‡à¦¨à§à¦¸à¦Ÿà¦² à¦•à¦°à§à¦¨à¥¤à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦°à¦Ÿà¦¿ à¦¸à¦•à§à¦°à¦¿à§Ÿ à¦•à¦°à¦¤à§‡ à¦†à¦ªà¦¨à¦¾à¦° à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦°à§‡ à¦‡à¦¨à§à¦Ÿà¦¾à¦°à¦¨à§‡à¦Ÿ à¦¸à¦‚à¦¯à§‡à¦¾à¦— à¦ªà§à¦°à§Ÿà§‡à¦¾à¦œà¦¨ à¦¹à¦¬à§‡à¥¤à¦†à¦ªà¦¨à¦¾à¦° à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦°à§‡ Pen drive à¦…à¦¥à¦¬à¦¾ External Hard Disk à¦¸à¦‚à¦¯à§à¦•à§à¦¤ à¦¥à¦¾à¦•à¦²à§‡ à¦¸à§‡à¦Ÿà¦¿ à¦–à§à¦²à§‡ à¦«à§‡à¦²à§à¦¨à¥¤à¦à¦¬à¦¾à¦° à¦¸à§à¦Ÿà¦¾à¦°à§à¦Ÿ à¦®à§‡à¦¨à§à¦¯à§ à¦¥à§‡à¦•à§‡ à¦¬à¦¿à¦œà§Ÿ à¦¬à¦¾à¦‚à¦²à¦¾ à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦°à¦Ÿà¦¿ à¦šà¦¾à¦²à§ à¦•à¦°à§à¦¨ à¦…à¦¥à¦¬à¦¾ à¦†à¦ªà¦¨à¦¾à¦° à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦° Restart à¦•à¦°à§à¦¨à¥¤ à¦à¦–à¦¨ à¦†à¦ªà¦¨à¦¾à¦° à¦¸à¦¾à¦®à¦¨à§‡ à§§à§¨ à¦¸à¦‚à¦–à§à¦¯à¦¾à¦° à¦à¦•à¦Ÿà¦¿ ID à¦†à¦¸à¦¬à§‡à¥¤ à¦¨à¦¿à¦šà§‡à¦° Get Activation Key From Online à¦²à¦¿à¦™à§à¦•à¦Ÿà¦¿à¦¤à§‡ à¦•à§à¦²à¦¿à¦• à¦•à¦°à§à¦¨à¥¤ Code à¦à¦¬à¦‚ à§§à§¨ à¦¸à¦‚à¦–à§à¦¯à¦¾à¦° ID à¦¨à¦¾à¦®à§à¦¬à¦¾à¦° à¦¦à¦¿à§Ÿà§‡ Submit à¦•à¦°à§à¦¨à¥¤ Code à¦à¦¬à¦‚ ID à¦¨à¦¾à¦®à§à¦¬à¦¾à¦° à¦¦à§‡à§Ÿà¦¾à¦° à¦ªà¦° à¦à¦•à¦Ÿà¦¿ Activation Key à¦ªà¦¾à¦¬à§‡à¦¨à¥¤à¦à¦–à¦¨ Activation Key-à¦à¦° à¦˜à¦°à§‡ Activation Key à¦¦à¦¿à§Ÿà§‡ Activate à¦¬à§‹à¦¤à¦¾à¦®à§‡ à¦•à§à¦²à¦¿à¦• à¦•à¦°à§à¦¨à¥¤ à¦†à¦ªà¦¨à¦¾à¦° à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦°à§‡ à¦‡à¦¨à§à¦Ÿà¦¾à¦°à¦¨à§‡à¦Ÿ à¦¸à¦‚à¦¯à§‡à¦¾à¦— à¦¨à¦¾ à¦¥à¦¾à¦•à¦²à§‡ Code à¦à¦¬à¦‚ ID à¦¨à¦¾à¦®à§à¦¬à¦¾à¦° à¦¦à¦¿à§Ÿà§‡ à¦•à¦¾à¦°à§à¦¯à¦¦à¦¿à¦¬à¦¸à§‡ à¦‡-à¦®à§‡à¦‡à¦² à¦•à¦°à§‡ info.bijoyekushe.net.bd@gmail.com, info@bijoyekushe.net.bd à¦…à¦¥à¦¬à¦¾ +à§®à§® à§¦à§¨-à§­à§§à§¯à§ªà§¦à§¦à§¨, +à§®à§® à§¦à§¨-à§­à§§à§¯à§ªà§«à§¨à§­, +à§®à§® à§¦à§§à§­à§§à§©-à§­à§«à§©à§¯à§­à§¦, +à§®à§® à§¦à§§à§­à§§à§©-à§§à§ªà§§à§©à§§à§¨ à¦¨à¦¾à¦®à§à¦¬à¦¾à¦°à§‡ à¦«à§‡à¦¾à¦¨ à¦•à¦°à§‡ Activation Key à¦¸à¦‚à¦—à§à¦°à¦¹ à¦•à¦°à§à¦¨à¥¤ à¦à¦°à¦ªà¦° Activation Key -à¦à¦° à¦˜à¦°à§‡ Activation Key à¦¦à¦¿à§Ÿà§‡ Activate à¦¬à§‡à¦¾à¦¤à¦¾à¦®à§‡ à¦•à§à¦²à¦¿à¦• à¦•à¦°à§à¦¨à¥¤à¥¤\r\n\r\nà¦†à¦ªà¦¨à¦¾à¦° à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦°à§‡ à¦‡à¦¨à§à¦Ÿà¦¾à¦°à¦¨à§‡à¦Ÿ à¦¸à¦‚à¦¯à§‡à¦¾à¦— à¦¨à¦¾ à¦¥à¦¾à¦•à¦²à§‡ Code à¦à¦¬à¦‚ ID à¦¨à¦¾à¦®à§à¦¬à¦¾à¦° à¦¦à¦¿à§Ÿà§‡ à¦•à¦¾à¦°à§à¦¯à¦¦à¦¿à¦¬à¦¸à§‡ à¦‡-à¦®à§‡à¦‡à¦² à¦•à¦°à§‡ info.bijoyekushe.net.bd@gmail.com, info@bijoyekushe.net.bd à¦…à¦¥à¦¬à¦¾ +à§®à§® à§¦à§¨-à§­à§§à§¯à§ªà§¦à§¦à§¨, +à§®à§® à§¦à§¨-à§­à§§à§¯à§ªà§«à§¨à§­, +à§®à§® à§¦à§§à§­à§§à§©-à§­à§«à§©à§¯à§­à§¦ +à§®à§® à§¦à§§à§­à§§à§©-à§§à§ªà§§à§©à§§à§¨ à¦¨à¦¾à¦®à§à¦¬à¦¾à¦°à§‡ à¦«à§‡à¦¾à¦¨ à¦•à¦°à§‡ Activation Key à¦¸à¦‚à¦—à§à¦°à¦¹ à¦•à¦°à§à¦¨à¥¤ à¦à¦°à¦ªà¦° Activation Key -à¦à¦° à¦˜à¦°à§‡ Activation Key à¦¦à¦¿à§Ÿà§‡ Activate à¦¬à§‡à¦¾à¦¤à¦¾à¦®à§‡ à¦•à§à¦²à¦¿à¦• à¦•à¦°à§à¦¨à¥¤</p>', '2020-05-08 15:00:09'),
(16, 6, 'à¦†à¦®à¦¾à¦° à¦¸à§‹à¦¨à¦¾à¦° à¦¬à¦¾à¦‚à¦²à¦¾ à¥¤ à¦†à¦®à¦¿ à¦¤à§‹à¦®à¦¾à§Ÿ à¦­à¦¾à¦²à§‹à¦¬à¦¾à¦¸à¦¿ à¥¤', 'à¦†à¦®à¦¾à¦¦à§‡à¦° à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦° à¦—à§à¦²à§‹ à¦¬à¦¿à¦¬à¦°à¦£ à¦¥à§‡à¦•à§‡ à¦…à¦ªà¦¾à¦°à§‡à¦Ÿà¦¿à¦‚ à¦¸à¦¿à¦¸à§à¦Ÿà§‡à¦® à¦…à¦¨à§à¦¸à¦¾à¦°à§‡ à¦†à¦ªà¦¨à¦¾à¦° à¦œà¦¨à§à¦¯ à¦ªà§à¦°à¦¯à§‹à¦œà§à¦¯ à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦°à¦Ÿà¦¿ à¦¬à¦¾à¦›à¦¾à¦‡ à¦•à¦°à§à¦¨ à¥¤ à¦†à¦ªà¦¨à¦¿ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦“à§Ÿà§‡à¦¬à¦¸à¦¾à¦‡à¦Ÿ à¦¥à§‡à¦•à§‡ à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦°à¦Ÿà¦¿ Download à¦•à¦°à¦¾à¦° à¦†à¦—à§‡ Online-à¦ à¦®à§‚à¦²à§à¦¯ à¦ªà¦°à¦¿à¦¶à§‹à¦§ à¦•à¦°à¦¬à§‡à¦¨à¥¤ à¦®à§‚à¦²à§à¦¯ à¦ªà¦°à¦¿à¦¶à§‹à¦§à§‡à¦° à¦ªà¦° à¦†à¦ªà¦¨à¦¿ à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦°à¦Ÿà¦¿ Download à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨à¥¤ à¦†à¦ªà¦¨à¦¾à¦° à¦¸à¦¾à¦®à¦¨à§‡ à¦¤à¦–à¦¨ à¦à¦•à¦Ÿà¦¿ à¦•à§‹à¦¡ à¦¨à¦¾à¦®à§à¦¬à¦¾à¦° à¦†à¦¸à¦¬à§‡à¥¤ à¦¸à§‡à¦Ÿà¦¿ à¦†à¦ªà¦¨à¦¾à¦° à¦²à¦¾à¦‡à¦¸à§‡à¦¨à§à¦¸ à¦¨à¦¾à¦®à§à¦¬à¦¾à¦°à¥¤ à¦à¦Ÿà¦¿ à¦¸à¦‚à¦°à¦•à§à¦·à¦£ à¦•à¦°à§à¦¨à¥¤ à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦°à¦Ÿà¦¿ à¦¡à¦¾à¦‰à¦¨à¦²à§‹à¦¡ à¦•à¦°à¦¾à¦° à¦ªà¦° à¦à¦Ÿà¦¿à¦•à§‡ Unzip à¦•à¦°à¦¬à§‡à¦¨à¥¤ à¦¬à¦¿à¦œà§Ÿ à¦¬à¦¾à¦‚à¦²à¦¾ à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦° à¦‡à¦¨à§à¦¸à¦Ÿà¦² à¦•à¦°à¦¾à¦° à¦†à¦—à§‡ à¦†à¦ªà¦¨à¦¾à¦° à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦°à§‡ à¦‰à¦‡à¦¨à§à¦¡à§‡à¦¾à¦œ à¦à¦¬à¦‚ à¦à¦® à¦à¦¸ à¦“à§Ÿà¦¾à¦°à§à¦¡ (Microsoft Word) à¦‡à¦¨à§à¦¸à¦Ÿà¦² à¦•à¦°à¦¬à§‡à¦¨à¥¤à¦¯à¦¦à¦¿ à¦ªà§à¦°à¦¾à¦¨à§‡à¦¾ à¦¬à¦¾à¦‚à¦²à¦¾ à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦° à¦¥à¦¾à¦•à§‡ à¦¤à¦¬à§‡ à¦«à¦¨à§à¦Ÿà¦¸à¦¹ à¦¸à§‡à¦—à§à¦²à§‡à¦¾ Delete à¦•à¦°à§‡ à¦¨à§‡à¦¬à§‡à¦¨à¥¤à¦‡à¦¨à§à¦¸à¦Ÿà¦² à¦¬à§‹à¦¤à¦¾à¦®à§‡ à¦¡à¦¾à¦¬à¦² à¦•à§à¦²à¦¿à¦• à¦•à¦°à§‡ à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦°à¦Ÿà¦¿ à¦‡à¦¨à§à¦¸à¦Ÿà¦² à¦•à¦°à§à¦¨à¥¤à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦°à¦Ÿà¦¿ à¦¸à¦•à§à¦°à¦¿à§Ÿ à¦•à¦°à¦¤à§‡ à¦†à¦ªà¦¨à¦¾à¦° à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦°à§‡ à¦‡à¦¨à§à¦Ÿà¦¾à¦°à¦¨à§‡à¦Ÿ à¦¸à¦‚à¦¯à§‡à¦¾à¦— à¦ªà§à¦°à§Ÿà§‡à¦¾à¦œà¦¨ à¦¹à¦¬à§‡à¥¤à¦†à¦ªà¦¨à¦¾à¦° à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦°à§‡ Pen drive à¦…à¦¥à¦¬à¦¾ External Hard Disk à¦¸à¦‚à¦¯à§à¦•à§à¦¤ à¦¥à¦¾à¦•à¦²à§‡ à¦¸à§‡à¦Ÿà¦¿ à¦–à§à¦²à§‡ à¦«à§‡à¦²à§à¦¨à¥¤à¦à¦¬à¦¾à¦° à¦¸à§à¦Ÿà¦¾à¦°à§à¦Ÿ à¦®à§‡à¦¨à§à¦¯à§ à¦¥à§‡à¦•à§‡ à¦¬à¦¿à¦œà§Ÿ à¦¬à¦¾à¦‚à¦²à¦¾ à¦¸à¦«à¦Ÿà¦“à§Ÿà§à¦¯à¦¾à¦°à¦Ÿà¦¿ à¦šà¦¾à¦²à§ à¦•à¦°à§à¦¨ à¦…à¦¥à¦¬à¦¾ à¦†à¦ªà¦¨à¦¾à¦° à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦° Restart à¦•à¦°à§à¦¨à¥¤ à¦à¦–à¦¨ à¦†à¦ªà¦¨à¦¾à¦° à¦¸à¦¾à¦®à¦¨à§‡ à§§à§¨ à¦¸à¦‚à¦–à§à¦¯à¦¾à¦° à¦à¦•à¦Ÿà¦¿ ID à¦†à¦¸à¦¬à§‡à¥¤ à¦¨à¦¿à¦šà§‡à¦° Get Activation Key From Online à¦²à¦¿à¦™à§à¦•à¦Ÿà¦¿à¦¤à§‡ à¦•à§à¦²à¦¿à¦• à¦•à¦°à§à¦¨à¥¤ Code à¦à¦¬à¦‚ à§§à§¨ à¦¸à¦‚à¦–à§à¦¯à¦¾à¦° ID à¦¨à¦¾à¦®à§à¦¬à¦¾à¦° à¦¦à¦¿à§Ÿà§‡ Submit à¦•à¦°à§à¦¨à¥¤ Code à¦à¦¬à¦‚ ID à¦¨à¦¾à¦®à§à¦¬à¦¾à¦° à¦¦à§‡à§Ÿà¦¾à¦° à¦ªà¦° à¦à¦•à¦Ÿà¦¿ Activation Key à¦ªà¦¾à¦¬à§‡à¦¨à¥¤à¦à¦–à¦¨ Activation Key-à¦à¦° à¦˜à¦°à§‡ Activation Key à¦¦à¦¿à§Ÿà§‡ Activate à¦¬à§‹à¦¤à¦¾à¦®à§‡ à¦•à§à¦²à¦¿à¦• à¦•à¦°à§à¦¨à¥¤ à¦†à¦ªà¦¨à¦¾à¦° à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦°à§‡ à¦‡à¦¨à§à¦Ÿà¦¾à¦°à¦¨à§‡à¦Ÿ à¦¸à¦‚à¦¯à§‡à¦¾à¦— à¦¨à¦¾ à¦¥à¦¾à¦•à¦²à§‡ Code à¦à¦¬à¦‚ ID à¦¨à¦¾à¦®à§à¦¬à¦¾à¦° à¦¦à¦¿à§Ÿà§‡ à¦•à¦¾à¦°à§à¦¯à¦¦à¦¿à¦¬à¦¸à§‡ à¦‡-à¦®à§‡à¦‡à¦² à¦•à¦°à§‡ info.bijoyekushe.net.bd@gmail.com,', '2020-05-08 15:18:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;