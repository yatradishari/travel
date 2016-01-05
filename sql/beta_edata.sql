-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2016 at 02:42 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `beta_edata`
--

-- --------------------------------------------------------

--
-- Table structure for table `beta_tours`
--

CREATE TABLE IF NOT EXISTS `beta_tours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tour_title` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text NOT NULL,
  `package` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `tour_public_url` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `isblocked` enum('0','1') NOT NULL DEFAULT '0',
  `isdeleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `beta_tours`
--

INSERT INTO `beta_tours` (`id`, `tour_title`, `start_date`, `end_date`, `description`, `package`, `user_id`, `tour_public_url`, `created_at`, `updated_at`, `isblocked`, `isdeleted`) VALUES
(1, '4 days ans 3 nights south india tour', '2016-01-02', '2016-01-29', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 0, 2, 'http://agent.localhost.com/4-days-ans-3-nights-south-india-tour', '2016-01-02 16:22:02', '2016-01-02 16:22:02', '0', '0'),
(2, '4 days ans 3 nights south india tour', '2016-01-09', '2016-01-21', '<p>hhghg</p>\r\n', 70000, 2, 'http://agent.localhost.com/4-days-ans-3-nights-south-india-tour234', '2016-01-03 03:53:04', '2016-01-03 03:53:04', '0', '0'),
(3, '4 days ans 3 nights south india tour hhjuy', '2016-01-09', '2016-01-22', '<p>bhhghg</p>\r\n', 70000, 2, 'http://agent.localhost.com/4-days-ans-3-nights-south-india-tour234', '2016-01-03 03:59:19', '2016-01-03 03:59:19', '0', '0'),
(4, '4 days ans 3 nights south india tour', '2016-01-14', '2016-01-29', '<p>jhhjh</p>\r\n', 70000, 2, 'http://agent.localhost.com/4-days-ans-3-nights-south-india-tour234', '2016-01-03 04:04:00', '2016-01-03 04:04:00', '0', '0'),
(5, '4 days ans 3 nights south india tour hhjuy', '2016-01-19', '2016-01-29', '<p>jhjh</p>\r\n', 70000, 2, 'http://agent.localhost.com/4-days-ans-3-nights-south-india-tour234', '2016-01-03 04:06:03', '2016-01-03 04:06:03', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `beta_users`
--

CREATE TABLE IF NOT EXISTS `beta_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` enum('0','1') NOT NULL DEFAULT '0',
  `company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `isblocked` enum('0','1') NOT NULL DEFAULT '0',
  `isdeleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `beta_users`
--

INSERT INTO `beta_users` (`id`, `user_type`, `company_name`, `email`, `phone_no`, `password`, `created_at`, `updated_at`, `remember_token`, `isblocked`, `isdeleted`) VALUES
(1, '1', '1', 'info@admin.com', '7602622058', '$2y$10$ue88DkW7/nyRIJvtogs3Vu/mT5trU0l0y9esXd6tijreDbWRrYAo.', '2016-01-01 00:00:00', '2016-01-01 00:00:00', '', '0', '0'),
(2, '0', 'Gita Travels', 'gita.travels@gmail.com', '9748306979', '$2y$10$WfRsfvJl/eGf/5r2J3sDcuY5JQuVDqOhb8jlrX3KxQCnFEY0CVtG.', '2016-01-01 16:01:40', '2016-01-01 16:01:40', '', '0', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
