-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2016 at 11:43 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coxhall_events`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_time` datetime NOT NULL,
  `event` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date_time`, `event`, `description`) VALUES
(1, '2016-07-31 04:00:00', 'Quilt Garden Unveiling/Ice Cream Social', 'Come see the new Quilt Garden! There will be guided tours and the Guild will be on hand to answer your questions or just chat. Stay with us after you''ve toured the garden and enjoy some ice cream courtesy of Bob''s Creamery!'),
(2, '2016-08-05 06:00:00', 'Friends of Hamilton County Parks Fundraiser', 'Enjoy a lovely evening of dinner and dancing at the beautiful Ritz Charles! As an added bonus, you can help preserve and improve your Hamilton County Parks! '),
(3, '2016-10-10 05:00:00', 'Etiquette Class', 'Show up with your little monster and see them leave as a well-mannered lady or gentleman! '),
(4, '2016-10-21 07:00:00', 'Sock Hop/Party Pitch-in', 'This one''s for the Guild! Bring your spouse/significant other and let''s hop! There''ll be treats and dancing ''til dawn. Well, maybe not dawn, but we''ll party for a while!'),
(5, '2016-10-29 08:30:00', 'Mystery Dinner', 'Join us for an evening of dining and intrigue! Halloween''s right around the corner, and you never know what will happen. All proceeds will benefit next year''s quilt garden.'),
(6, '2016-12-21 07:00:00', 'Madrigal Dinner', 'Come feast ye merry gentlemen (and ladies, of course)! '),
(9, '2016-07-16 06:00:00', 'Barn Door Supper', 'Please bring your favorite "state-themed" dish. We''ll literally be eating on a barn door! Spouses are welcome. Please email Audrey with info on your dish.'),
(11, '2016-10-12 12:00:00', 'Knot Garden Installation', 'We''ll meet to get things moving on the knot garden.  Assignments for equipment will go out in the coming weeks.'),
(13, '2016-07-25 07:00:00', 'Children''s Garden Meeting', 'We''ll meet to plan for next year''s Children''s Garden. Never too soon to start planning!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
