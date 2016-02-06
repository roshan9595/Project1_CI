-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2016 at 05:27 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Category_Id` int(10) NOT NULL,
  `Category_Name` varchar(255) NOT NULL,
  `Category_Description` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_Id`, `Category_Name`, `Category_Description`) VALUES
(0, 'daasda', 'asdssa'),
(1, 'bla bla bla bla', 'bLA ASN ASS NUCKK AIJS JIAIJ JNINNNASCPNN IIAJSNNASPJ  ASCJPNJKASN AJSPPNAPSCN APSCJ- ASJNJASIC'),
(2, 'adsaada', 'adfwffw'),
(16, 'daasda', 'asdssa'),
(17, 'loooooooooo', 'looooooooooooo pppppppppppppooooooooooo oooooooooooooooo jjjjjjjjjjjjj iiiiiiiiiiiiii jjjjjjjjjjjjjkkkkkkkkk nnnnnnnnnnnnnn'),
(18, 'flo fla fli', 'flum flaha flahu flum flum flim klk jlum flu flu'),
(23, 'anne', 'bla bla bala nauhnnbauhf0n aufhnaojsf aufh0ahfo'),
(24, 'newnothing', 'qwertyuiopppppppppppppppppppppplkjhgfdsazxcvbnm,,,,,,,,,,,mnbvcxzasdfghjklpo'),
(25, 'newnothing1', 'newnothinf niealadalssdijalsdj LSDLSDILSDLSDDL ASfqeff qqnalijlal alsj');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `Product_Id` int(10) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Product_Description` varchar(255) NOT NULL,
  `Product_Image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_Id`, `Product_Name`, `Product_Description`, `Product_Image`) VALUES
(0, 'koooi', 'kniniiiiiiiiimmmdncnjdjksiiiwiasnjn', ''),
(1, 'kindi kdindii', 'bla bla bla', ''),
(2, 'blo bla blim ', 'wnodnpnnaasn', ''),
(3, 'looooooooooooo', 'ooooooooooooooh', ''),
(32, 'asdfgh', 'cvksdfghjk', ''),
(33, 'fghjk', 'fkooo', ''),
(34, 'fghjk', 'fkooo', ''),
(35, 'asdfgh', 'cvksdfghjk', ''),
(36, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `relation`
--

CREATE TABLE IF NOT EXISTS `relation` (
  `Id` int(10) NOT NULL,
  `Product_Id` int(10) NOT NULL,
  `Category_Id` int(10) NOT NULL,
  `SubCategory_Id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relation`
--

INSERT INTO `relation` (`Id`, `Product_Id`, `Category_Id`, `SubCategory_Id`) VALUES
(5, 2, 2, 14),
(31, 1, 1, 0),
(32, 1, 1, 0),
(33, 1, 1, 0),
(34, 1, 1, 0),
(35, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `SubCategory_Id` int(10) NOT NULL,
  `Category_Id` int(10) NOT NULL,
  `SubCategory_Name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`SubCategory_Id`, `Category_Id`, `SubCategory_Name`) VALUES
(0, 0, 'new'),
(1, 18, 'kindi'),
(14, 18, 'kundi'),
(25, 25, 'new'),
(26, 25, 'nothing1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(15) NOT NULL,
  `first_name` int(15) NOT NULL,
  `last_name` int(20) NOT NULL,
  `username` int(15) NOT NULL,
  `email` int(30) NOT NULL,
  `pass` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Indexes for table `relation`
--
ALTER TABLE `relation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`SubCategory_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `relation`
--
ALTER TABLE `relation`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `SubCategory_Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
