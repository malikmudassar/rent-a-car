-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2015 at 04:14 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rentacar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `vendor` int(5) NOT NULL,
  `model` int(5) NOT NULL,
  `model_year` int(11) NOT NULL,
  `reg_city` int(5) NOT NULL,
  `reg_alias` varchar(3) NOT NULL,
  `reg_no` int(5) NOT NULL,
  `owner` int(5) NOT NULL,
  `pic` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `vendor`, `model`, `model_year`, `reg_city`, `reg_alias`, `reg_no`, `owner`, `pic`) VALUES
(1, 1, 4, 2005, 2, 'LWR', 9180, 2, ''),
(2, 1, 1, 2000, 7, 'IDK', 1215, 1, ''),
(3, 1, 1, 2002, 10, 'GJK', 4572, 2, ''),
(4, 1, 4, 2003, 7, 'IDL', 1600, 1, ''),
(5, 1, 4, 2003, 2, 'LXW', 818, 1, ''),
(6, 1, 4, 2007, 7, 'SA', 668, 2, ''),
(7, 1, 1, 2010, 7, 'JK', 510, 3, ''),
(8, 1, 4, 2010, 31, 'SE', 1645, 3, ''),
(9, 2, 8, 1999, 2, 'LHX', 8956, 4, ''),
(10, 2, 8, 1996, 31, 'SK', 4500, 4, ''),
(11, 2, 5, 2003, 7, 'XX', 481, 4, ''),
(12, 2, 5, 2008, 2, 'LWR', 829, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(1, 'Abbottabad'),
(11, 'Attock'),
(12, 'Bahawalnagar'),
(13, 'Bahawalpur'),
(14, 'Bhakkar'),
(15, 'Chakwal'),
(16, 'Chiniot'),
(17, 'D.G.Khan'),
(18, 'D.I.Khan'),
(9, 'Faisalabad'),
(19, 'Gujranwala'),
(10, 'Gujrat'),
(20, 'Hafizabad'),
(32, 'Hyderabad'),
(7, 'Islamabad'),
(3, 'Jehlum'),
(4, 'Jhang'),
(31, 'Karachi'),
(21, 'Kasur'),
(22, 'Khanewal'),
(23, 'Khushab'),
(2, 'Lahore'),
(24, 'Layyah'),
(25, 'Mianwali'),
(26, 'Multan'),
(27, 'Muzaffargarh'),
(28, 'Okara'),
(6, 'Peshawar'),
(33, 'Quetta'),
(29, 'Rahim Yar Khan'),
(8, 'Rawalpindi'),
(5, 'Sargodha'),
(30, 'Sialkot');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `nic` bigint(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `referrer_name` varchar(100) NOT NULL,
  `referrer_mobile` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `fname`, `nic`, `address`, `mobile`, `referrer_name`, `referrer_mobile`) VALUES
(1, 'Rana Shahid', 'Rana Ishaq', 3840366554569, '77 Shahzad Park PAF Road Sargodha', '03214565897', 'Malik Mudassar', '03215491752'),
(2, 'Ahmad Shahzad', 'Muhammad Shahzad Akram', 3821155669874, '45 Deen Colony PAF Road Sargodha', '03008545566', 'Saif Ranjha', '03004020000'),
(3, 'Ghulam Shabeer', 'Fahad Hussain', 356489654455566, 'Qencho Morr Sargodha', '03015040900', 'Murtaza Khan', '03215566448'),
(4, 'Shaukat Ali', 'Danish Ali', 3840299887546, 'Sargodha', '03005005566', 'Malik Mudassar', '03215491752'),
(5, 'Asad Niazi', 'Tika Khan', 38403555448796, '49 Tale Sargodha', '03368644566', 'Saif Ranjha', '03004020000'),
(6, 'Azhar Malik', 'Muhammad Khan', 3840322569874, 'Shahzad Park ', '03216035568', 'Malik Mudassar', '03215491752'),
(7, 'Agha Hassan Nizami', 'Farooq Nizami', 3480255669874, '37 Umer Park Sargodha', '03025010440', 'Murtaza Khan', '03215566448'),
(8, 'Ali Raza Sherazi', 'Syed Mujtaba Sherazi', 3840244556789, 'Y Block Satellite town Sargodha', '03336005510', 'Malik Mudassar', '03215491752'),
(9, 'Hassan Wajahat', 'Wajahat Hussain', 3480255669874, 'X-Block Satellite town Sargodha', '03024001212', 'Malik Mudassar', '03215491752'),
(10, 'Haroon Shakoor', 'Shakoor Achakzai', 3821155669874, 'Bangla # 9 Sargodha', '03456625456', 'Malik Mudassar', '03215491752'),
(11, 'Umar Farooq', 'Farooq Khan', 3480255669874, '237/4 PAF Residency Sargodha', '03005566448', 'Malik Mudassar', '03215491752');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE IF NOT EXISTS `model` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `vendor` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `name`, `vendor`) VALUES
(1, 'Civic EX', 1),
(2, 'Civic Prosmetic', 1),
(3, 'Civic Reborn', 1),
(4, 'City EXI', 1),
(5, 'Corolla XLI', 2),
(6, 'Corolla GLI', 2),
(7, 'Corolla ALTIS', 2),
(8, 'Corolla 2.0 D', 2),
(9, 'Corolla SE Saloon', 2),
(10, 'Corolla 2.0D Saloon', 2);

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE IF NOT EXISTS `owners` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `nic` bigint(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `name`, `fname`, `address`, `mobile`, `nic`) VALUES
(1, 'Malik Mudassar', 'Muhammad Khan', '67-A Shahzad Park PAF Road Sargodha', '03215491752', 3840322571617),
(2, 'Saif Ranjha', 'Mian Waseem', 'Bhatti Town Sargodha', '03005020000', 3840322556478),
(3, 'Ghulam Mustafa', 'Abdul Baqi', 'Shamsher Town , Qenchi Morr Sargodha', '03005566448', 3840355669987),
(4, 'Malik Ahmad Hayat Lak', 'Malik Mubariz', 'PAF Road Sargodha', '03216003500', 3840366554789);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `cust_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `amount` int(6) NOT NULL,
  `inv_id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rentcar`
--

CREATE TABLE IF NOT EXISTS `rentcar` (
  `rent_id` int(5) NOT NULL AUTO_INCREMENT,
  `car_id` int(5) NOT NULL,
  `cust_id` int(5) NOT NULL,
  `outtime` date NOT NULL,
  `returntime` date NOT NULL,
  `rent` int(6) NOT NULL,
  `payup` int(6) NOT NULL,
  `demage` varchar(100) NOT NULL,
  `damage_claim` int(6) NOT NULL,
  `status` enum('clear','not clear') NOT NULL,
  PRIMARY KEY (`rent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `rentcar`
--

INSERT INTO `rentcar` (`rent_id`, `car_id`, `cust_id`, `outtime`, `returntime`, `rent`, `payup`, `demage`, `damage_claim`, `status`) VALUES
(1, 1, 1, '2015-02-26', '2015-02-26', 3000, 2500, 'Bumper Bruised', 2000, 'clear'),
(2, 2, 2, '2015-02-26', '0000-00-00', 2500, 2000, '', 0, 'not clear'),
(3, 4, 3, '2015-02-24', '2015-02-25', 2500, 2000, 'None', 0, 'clear'),
(4, 9, 1, '2015-02-19', '2015-02-20', 3000, 3000, 'None', 0, 'clear'),
(5, 3, 7, '2015-02-26', '0000-00-00', 3000, 1500, '', 0, 'not clear'),
(6, 5, 6, '2015-02-26', '0000-00-00', 3000, 2000, '', 0, 'not clear'),
(7, 6, 5, '2015-02-26', '0000-00-00', 3500, 3000, '', 0, 'not clear'),
(8, 7, 4, '2015-02-26', '0000-00-00', 3000, 2500, '', 0, 'not clear'),
(9, 12, 3, '2015-02-26', '0000-00-00', 3000, 2500, '', 0, 'not clear'),
(10, 11, 11, '2015-02-26', '0000-00-00', 3000, 3000, '', 0, 'not clear'),
(11, 10, 10, '2015-02-26', '0000-00-00', 3000, 2500, '', 0, 'not clear'),
(12, 9, 9, '2015-02-26', '0000-00-00', 3000, 3000, '', 0, 'not clear'),
(13, 4, 8, '2015-02-26', '0000-00-00', 3000, 2500, '', 0, 'not clear'),
(14, 1, 1, '2015-02-26', '0000-00-00', 3000, 3000, '', 0, 'not clear'),
(15, 8, 1, '2015-02-26', '0000-00-00', 3000, 3000, '', 0, 'not clear');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `name`) VALUES
(1, 'Honda'),
(2, 'Toyota'),
(3, 'Suzuki'),
(4, 'Mitsubishi'),
(5, 'Nissan'),
(6, 'Volvo'),
(7, 'Renault'),
(8, 'Ford'),
(9, 'Jaguar'),
(10, 'Mercedez'),
(11, 'Infiniti');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
