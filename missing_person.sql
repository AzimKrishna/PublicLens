-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 05:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `missing_person`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_found`
--

CREATE TABLE `add_found` (
  `f_id` int(11) NOT NULL,
  `plno` varchar(25) NOT NULL,
  `flname` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `pno` varchar(15) NOT NULL,
  `hair` varchar(25) NOT NULL,
  `dos` date NOT NULL,
  `pos` varchar(20) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `cmplxn` varchar(20) NOT NULL,
  `build` varchar(20) NOT NULL,
  `crcm` varchar(100) NOT NULL,
  `ypno` varchar(15) NOT NULL,
  `yname` varchar(20) NOT NULL,
  `pimg_newname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_found`
--

INSERT INTO `add_found` (`f_id`, `plno`, `flname`, `sex`, `age`, `pno`, `hair`, `dos`, `pos`, `height`, `weight`, `cmplxn`, `build`, `crcm`, `ypno`, `yname`, `pimg_newname`) VALUES
(4, '', 'Azim', 'M', 45, '12333312312', 'Side burns', '2022-05-11', 'panvel', 0, 0, 'Very Fair', 'Normal', 'any', '1231323132', 'azim', '0dd90f415b478bb492036fc546f40483d7522a3b.png');

-- --------------------------------------------------------

--
-- Table structure for table `add_prsn`
--

CREATE TABLE `add_prsn` (
  `p_id` int(11) NOT NULL,
  `plno` varchar(25) NOT NULL,
  `flname` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `city` varchar(40) NOT NULL,
  `pno` varchar(15) NOT NULL,
  `dom` date NOT NULL,
  `pom` varchar(40) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `cmplxn` varchar(20) NOT NULL,
  `build` varchar(20) NOT NULL,
  `hair` varchar(20) NOT NULL,
  `fir_newame` varchar(100) NOT NULL,
  `pimg_newname` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_prsn`
--

INSERT INTO `add_prsn` (`p_id`, `plno`, `flname`, `sex`, `age`, `city`, `pno`, `dom`, `pom`, `height`, `weight`, `cmplxn`, `build`, `hair`, `fir_newame`, `pimg_newname`, `email`) VALUES
(5, 'PLNO1652082802', 'Ayush Singh ', 'T', 15, 'Kalyan', '5879445556', '2022-04-15', 'Karjat', 156, 50, 'Wheatish', 'Thin', 'Straight hair', '550683920ac69d12554903505d26b5d02384786e.jpeg', '10e617468da663ad36ab3a42a9304300040cbf56.jpeg', 'ayushthakur@gmail.com'),
(11, 'PLNO1652685910', 'Aryan Rajeev', 'M', 17, 'panvel', '6879655175', '2022-05-14', 'Panvel', 159, 59, 'Dark', 'Normal', 'Curly - Black', 'adaabae1ec74639e68bedeb2a86134c8cfe9d5b5.jpeg', '2e90f84cd704d9879cb57057982d38a8a0bc8ac2.jpg', ''),
(15, 'PLNO1652688825', 'Nishad Mokal', 'M', 20, 'panvel', '9784563250', '2022-05-10', 'Panvel', 177, 77, 'Dark', 'Normal', 'Bald full', 'df6db8165dd4aa65d7d6d2183859cc51561703ab.jpg', 'c04cd9d9d4513c17390115c94399b86dd3d808d7.jpg', 'nmokal20comp@student.mes.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `admintble`
--

CREATE TABLE `admintble` (
  `ano` int(11) NOT NULL,
  `auname` varchar(20) NOT NULL,
  `apwd` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintble`
--

INSERT INTO `admintble` (`ano`, `auname`, `apwd`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `apr_fnd`
--

CREATE TABLE `apr_fnd` (
  `p_id` int(11) NOT NULL,
  `plno` varchar(25) NOT NULL,
  `flname` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `city` varchar(40) NOT NULL,
  `pno` varchar(15) NOT NULL,
  `dom` date NOT NULL,
  `pom` varchar(40) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `cmplxn` varchar(20) NOT NULL,
  `build` varchar(20) NOT NULL,
  `hair` varchar(20) NOT NULL,
  `fir_newame` varchar(100) NOT NULL,
  `pimg_newname` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apr_fnd`
--

INSERT INTO `apr_fnd` (`p_id`, `plno`, `flname`, `sex`, `age`, `city`, `pno`, `dom`, `pom`, `height`, `weight`, `cmplxn`, `build`, `hair`, `fir_newame`, `pimg_newname`, `email`) VALUES
(1, 'PLNO1652092261', 'Aryan Rajeev', 'M', 22, 'Kottayam', '212312313123132', '2022-05-08', 'sdasda', 123, 1234, 'Very Fair', 'Fat', 'Side burns', '0962358d57e344dd4105233ac7f6250b37859268.png', 'img1.jpg', 'azimkrishna@gmail.om'),
(2, 'PLNO1652082552', 'Akash Singh', 'M', 17, 'Khopoli', '9886475238', '2022-03-09', 'Khopoli', 167, 79, 'Dark', 'Fat', 'Wig use of', '8ca872a29b396bfb1589da6d60d9b1eebbc3bc55.jpeg', 'e682a9d56cb2779385f31500c694bd2398b0e5c1.jpeg', 'akashsing@gmail.com'),
(3, 'PLNO1652685834', 'Akash Singh', 'M', 19, 'khopoli', '8595755259', '2022-05-13', 'Khopoli', 169, 79, 'Dark', 'Fat', 'Wig use of', 'f915a7402587cd549177a02d2a702ea05f6d39df.jpeg', '63f695abc5e7ec8acf5bd0ea7d87d84fe8d35433.jpeg', '');

-- --------------------------------------------------------

--
-- Table structure for table `apr_fndt`
--

CREATE TABLE `apr_fndt` (
  `f_id` int(11) NOT NULL,
  `plno` varchar(25) NOT NULL,
  `flname` varchar(25) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `pos` varchar(40) NOT NULL,
  `crcm` varchar(200) NOT NULL,
  `dos` date NOT NULL,
  `pno` varchar(15) NOT NULL,
  `height` varchar(11) NOT NULL,
  `weight` varchar(11) NOT NULL,
  `cmplxn` varchar(20) NOT NULL,
  `build` varchar(10) NOT NULL,
  `hair` varchar(25) NOT NULL,
  `pimg_newname` varchar(40) NOT NULL,
  `yname` varchar(25) NOT NULL,
  `ypno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `apr_miss`
--

CREATE TABLE `apr_miss` (
  `p_id` int(11) NOT NULL,
  `plno` varchar(25) NOT NULL,
  `flname` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `city` varchar(40) NOT NULL,
  `pno` varchar(15) NOT NULL,
  `dom` date NOT NULL,
  `pom` varchar(40) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `cmplxn` varchar(20) NOT NULL,
  `build` varchar(20) NOT NULL,
  `hair` varchar(20) NOT NULL,
  `fir_newame` varchar(100) NOT NULL,
  `pimg_newname` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apr_miss`
--

INSERT INTO `apr_miss` (`p_id`, `plno`, `flname`, `sex`, `age`, `city`, `pno`, `dom`, `pom`, `height`, `weight`, `cmplxn`, `build`, `hair`, `fir_newame`, `pimg_newname`, `email`) VALUES
(8, 'PLNO1652089836', 'Om dombe', 'M', 12, 'Panvel', '12333312312', '2022-05-03', 'Panvel', 123, 56, 'Very Fair', 'Normal', 'Curly - Black & grey', '4b08e14b9c267f4437003fe173c016fe0e8a8b5c.jpg', '60b017a0874b37175bfef2b61b4383e45bdf68a5.jpeg', ''),
(9, 'PLNO1652687929', 'Yash Kharte', 'M', 19, 'juinagar', '8580873636', '2022-05-12', 'Juinagar', 187, 73, 'Fair', 'Normal', 'Side burns', 'fbe825e124ec9e3a0020d62f4e161b64cae34eea.png', '60021e0863e909ddfe462e51fd05837e0091f2dc.jpg', 'yash@gmail.com'),
(12, 'PLNO1652688340', 'Adi Qn', 'F', 54, 'nerul', '608606095', '2022-05-06', 'pune', 111, 66, 'Very Fair', 'Stocky', 'Side burns', '9ea93e5c3e6145885e90218d17a44d26e2e60e31.jpg', '6090973a4feb39fd8bd16d18dedf56879b832d8c.jpg', 'adiking@gmail.com'),
(13, 'PLNO1652689381', 'Raj singh', 'T', 12, 'kalyan', '8647955289', '2022-05-01', 'New panvel', 165, 50, 'Very Fair', 'Thin', 'Wig use of', '5d28e683a2ead6369ab212730ea78e459c0cb981.jpeg', 'd0f2ee66fb72d9c6651fdccad6f049edfe04e13d.jpg', 'rajsingh54@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `enq`
--

CREATE TABLE `enq` (
  `id` int(10) NOT NULL,
  `flname` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pno` varchar(15) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enq`
--

INSERT INTO `enq` (`id`, `flname`, `email`, `pno`, `msg`, `ts`) VALUES
(2, 'Mr Azim Krishna Krishna', 'azimkrishna@gmail.om', '212312313123132', 'Hello pls contact me', '2022-05-08 22:11:09'),
(30, 'Mr Azim Krisna', 'azzimbaji19@gmail.co', '8281577189', 'Hello i would like to be a partner in publiclens. Please email me the necessary conditions and the procedure brochure.', '2022-05-16 08:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `nid` int(20) NOT NULL,
  `date` date NOT NULL,
  `nimage` varchar(100) NOT NULL,
  `ndesc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nid`, `date`, `nimage`, `ndesc`) VALUES
(1, '2022-04-04', 'news1.jpeg', 'One in three Trafficked Children Go Missing from local authority care.'),
(2, '2022-04-13', 'news2.png', 'National Exploitation Day Campaign 2022 | Is this OK?\r\n'),
(3, '2022-05-09', 'news3.jpg', 'Mother\'s Day 2022 | Lyn\'s Story'),
(9, '2022-05-15', '47b6f8c14d3cd05231b244393f061d0d2fd1b5a5.jpeg', 'One in hundred children have autism | Study reveals');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `test` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `test`) VALUES
(1, 'hello'),
(2, 'hello'),
(3, 'PLNO1652092261'),
(4, 's'),
(5, 'gesgesges'),
(6, '<br />\n<b>Notice</b>:  Undefined index: email in <b>C:xampphtdocsPROJECT 2searchpopuppopup.php</b> '),
(7, 'hello'),
(8, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `u_id` int(11) NOT NULL,
  `flname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `address1` varchar(100) NOT NULL,
  `pno` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `gid` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`u_id`, `flname`, `dob`, `address1`, `pno`, `email`, `pass`, `gid`) VALUES
(16, 'Azim Baji Krishna', '2022-05-16', 'Green valley, Panvel  Panvel 689482', '8281577189', 'abkrishnaabk@gmail.com', 'b85c632998e7e9c6707141df49cd0d11', 'F32SAD2SS2'),
(17, 'Om shinde', '2002-05-16', '305 dubaivilla, panvel  new panvel 402938', '6479521869', 'omeesuv24@gmail.com', 'b85c632998e7e9c6707141df49cd0d11', 'N887887BS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_found`
--
ALTER TABLE `add_found`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `add_prsn`
--
ALTER TABLE `add_prsn`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `admintble`
--
ALTER TABLE `admintble`
  ADD PRIMARY KEY (`ano`);

--
-- Indexes for table `apr_fnd`
--
ALTER TABLE `apr_fnd`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `apr_fndt`
--
ALTER TABLE `apr_fndt`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `apr_miss`
--
ALTER TABLE `apr_miss`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `enq`
--
ALTER TABLE `enq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_found`
--
ALTER TABLE `add_found`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `add_prsn`
--
ALTER TABLE `add_prsn`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admintble`
--
ALTER TABLE `admintble`
  MODIFY `ano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apr_fnd`
--
ALTER TABLE `apr_fnd`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `apr_fndt`
--
ALTER TABLE `apr_fndt`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apr_miss`
--
ALTER TABLE `apr_miss`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `enq`
--
ALTER TABLE `enq`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `nid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
