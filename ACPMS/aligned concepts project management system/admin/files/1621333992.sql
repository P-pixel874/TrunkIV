-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 10:02 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectmanagements`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4', '2021-05-13 11:42:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartments`
--

CREATE TABLE IF NOT EXISTS `tbldepartments` (
  `id` int(11) NOT NULL,
  `DepartmentName` varchar(150) DEFAULT NULL,
  `DepartmentShortName` varchar(100) NOT NULL,
  `DepartmentCode` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldepartments`
--

INSERT INTO `tbldepartments` (`id`, `DepartmentName`, `DepartmentShortName`, `DepartmentCode`, `CreationDate`) VALUES
(1, 'Accounting', 'Acc', 'Acc2021', '2021-05-01 07:16:25'),
(2, 'Information Technology', 'IT', 'IT2021', '2021-05-01 07:16:25');


-- --------------------------------------------------------

--
-- Table structure for table `tblclients`
--

CREATE TABLE IF NOT EXISTS `tblclients` (
  `id` int(11) NOT NULL,
  `EmpId` varchar(100) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(200) NOT NULL,
  `Password` varchar(180) NOT NULL,
  `Sector` varchar(100) NOT NULL,
  `DoApplcn` varchar(100) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Country` varchar(150) NOT NULL,
  `Phonenumber` char(11) NOT NULL,
  `Status` int(1) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclients`
--

INSERT INTO `tblclients` (`id`, `EmpId`, `FirstName`, `LastName`, `EmailId`, `Password`, `Sector`, `DoApplcn`, `Department`, `Address`, `City`, `Country`, `Phonenumber`, `Status`, `RegDate`) VALUES
(1, 'PRJ3601', 'Prosper', 'Nyamondo', 'prospernyamondo@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'Private', '25 June, 2021', 'Accounting', 'Johannesburg Box 354', 'Johannesburg', 'south Africa', '0784202218', 1, '2021-01-10 11:29:59'),
(2, 'PRJ3501', 'Aligned Concepts', 'Company', 'prosper@AlignedConcepts.co.za', 'f925916e2754e5e03f75dd58a5733251', 'Public', '25 June, 2021', 'Information Technology', 'albetryn Street', 'Johannesburg', 'IRE', '8587944255', 1, '2021-01-10 10:29:59');

-- --------------------------------------------------------


--
-- Table structure for table `tblprojects`
--

CREATE TABLE IF NOT EXISTS `tblprojects` (
  `id` int(11) NOT NULL,
  `ProjectType` varchar(110) NOT NULL,
  `ToDate` varchar(120) NOT NULL,
  `FromDate` varchar(120) NOT NULL,
  `Description` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `AdminRemark` mediumtext,
  `AdminRemarkDate` varchar(120) DEFAULT NULL,
  `Status` int(1) NOT NULL,
  `IsRead` int(1) NOT NULL,
  `empid` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprojects`
--

INSERT INTO `tblprojects` (`id`, `ProjectType`, `ToDate`, `FromDate`, `Description`, `PostingDate`, `AdminRemark`, `AdminRemarkDate`, `Status`, `IsRead`, `empid`) VALUES
(7, 'Software development', '30/11/2021', '30/10/2021', 'Application for a Billing System software development project', '2021-05-20 11:14:14', 'will take out the project.Thanks for your aplication', '2021-05-02 23:26:27 ', 2, 1, 1),
(8, 'Auditing', '30/11/2021', '30/10/2021', 'Application for an Financial Statements auditing project', '2021-05-20 11:14:14', 'Please kindly rephase the your expected project period and apply again we are a bit occupied', '2021-05-02 23:26:27 ', 1, 1, 1),
(9, 'Software Rework', '30/11/2021', '03/11/2021', 'Application for banking system upgrade', '2021-05-20 11:14:14','Thanks for your application will take out the project', '2021-05-02 23:26:27 ', 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblprojecttype`
--

CREATE TABLE IF NOT EXISTS `tblprojecttype` (
  `id` int(11) NOT NULL,
  `ProjectType` varchar(200) DEFAULT NULL,
  `Description` mediumtext,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprojecttype`
--

INSERT INTO `tblprojecttype` (`id`, `ProjectType`, `Description`, `CreationDate`) VALUES
(1, 'Software development', 'software development system ', '2021-05-01 12:07:56'),
(2, 'Auditing', 'financial statements auditing', '2021-05-01 12:07:56'),
(3, 'Software Rework', 'software system ugrade', '2021-05-01 12:07:56');

-- --------------------------------------------------------
--
-- Table structure for table `tbltickets`
--

CREATE TABLE IF NOT EXISTS `tbltickets` (
  `id` int(11) NOT NULL,
  `EmpId` varchar(20) NOT NULL,
  `TicketId` varchar(200) DEFAULT NULL,
  `ProjectType` varchar(200) NOT NULL,
  `NoCodeLines`varchar(200000) NOT NULL,
  `NoYears`varchar(100) NOT NULL,
  `ProjectPrice` varchar(200) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


--
-- Dumping data for table `tbltickets`
--

INSERT INTO `tbltickets` (`id`, `EmpId`, `TicketId`, `ProjectType`,`NoCodeLines`,`NoYears`,`ProjectPrice`, `CreationDate`) VALUES
(1, 'PRJ3601', '325226844 ','Software development','2400','NULL', '50','2021-05-01 12:07:56'),
(2, 'PRJ350', '646984509', 'Auditing','NULL','2','180','2021-05-01 12:07:56'),
(3, 'PRJ350', '340973207', 'Software Rework','250','NULL','25','2021-05-01 12:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `file_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file_id`, `name`, `file`) VALUES
(1, 'winrar-x64-540', 'files/winrar-x64-540.exe');

--
--
-- Indexes for dumped tables
--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltblclients`
--
ALTER TABLE `tblclients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblprojects`
--
ALTER TABLE `tblprojects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserEmail` (`empid`);

--
-- Indexes for table `tblprojecttype`
--
ALTER TABLE `tblprojecttype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblclients`
--
ALTER TABLE `tblclients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblprojects`
--
ALTER TABLE `tblprojects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tblprojecttype`
--
-- AUTO_INCREMENT for table `tbltickets`
--
ALTER TABLE `tbltickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
