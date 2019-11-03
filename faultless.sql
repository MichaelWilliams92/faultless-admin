-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 03, 2019 at 04:45 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faultless`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ProductID` varchar(255) NOT NULL,
  `DateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ProductID`, `DateAdded`, `Comment`) VALUES
('PR009809', '2019-04-14 04:00:00', 'This is the chem hose omment'),
('PR009809', '2019-06-10 04:00:00', 'Hey this is a comment'),
('PR009809', '2019-10-14 16:18:17', 'Add comment for 9809!'),
('PR009809', '2019-10-14 16:18:28', 'Add comment for 9809! A second time'),
('PR009809', '2019-10-14 18:58:20', 'ADding last comment for 9809'),
('PR009809', '2019-10-28 01:59:12', 'addin ganother comment'),
('PR009809', '2019-10-28 01:59:16', 'addin ganother comment'),
('PR009809', '2019-10-28 02:11:31', 'adding ew omment'),
('PR009809', '2019-10-28 02:11:38', 'add yet another!!!!'),
('PR009809', '2019-10-28 02:11:48', 'CAN I USSE THISSS'),
('PR235112', '2019-06-10 04:00:00', 'Hi! Adding comment for  PR ending in 5112'),
('PR235112', '2019-10-26 16:40:37', 'adding ew omment'),
('PR844356', '1992-04-24 04:00:00', 'This is the chem hose Comment'),
('PR866540', '2019-06-10 04:00:00', 'Add comment ending in 640 for PGP hoses'),
('PR900867', '2015-12-12 05:00:00', 'This is the chem hose Comment'),
('PR928448', '2019-09-18 04:00:00', 'This is the chem hose Comment'),
('PR928448', '2019-09-26 04:00:00', 'This is the chem hose Comment'),
('PR933842', '2019-11-01 04:55:48', 'adding ew omment'),
('PR933842', '2019-11-01 04:56:00', 'lets add another comment');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Username` varchar(255) NOT NULL,
  `CompanyName` text NOT NULL,
  `Location` varchar(255) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Email` text,
  `PersonalPhone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Ext` mediumint(9) NOT NULL,
  `CompanyPhone` text NOT NULL,
  `NumberOfHoses` int(11) NOT NULL,
  `Website` text,
  `Pic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Profile_Default.jpg',
  `DateJoined` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Username`, `CompanyName`, `Location`, `FirstName`, `LastName`, `Email`, `PersonalPhone`, `Ext`, `CompanyPhone`, `NumberOfHoses`, `Website`, `Pic`, `DateJoined`) VALUES
('ID019923', 'Petro Canada', '1111 Baker Road', 'Donald', 'Trump', 'Andrew.williams2@ontario.ca', '(905) 988-9865', 0, '', 1, 'www.FaultlessIO.ca', 'Profile_Default.jpg', '2019-08-19'),
('ID32135', 'TesterCompany54321', '1244 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 6876753, '6476695470', 1, 'www.tester.com', 'Profile_Default.jpg', '2019-11-03'),
('ID321365', 'TesterCompany54321', '1244 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 6876753, '6476695470', 1, 'www.tester.com', 'Profile_ID321365.jpg', '2019-11-03'),
('ID394924', 'Transway', '123 John street', 'Andrew', 'Williams', 'Fake_Email@hotmail.com', '(905) 927-2345', 0, '', 1, 'www.AndrewWilliams.com', 'Profile_Default.jpg', '2019-09-16'),
('ID396441', 'Proctor and Gamble', '123 Core Ave.', 'Joe', 'biden', 'BigSpender68@gmail.com', '(905) 655-5884', 0, '', 1, 'Profile_Default.com', 'Profile_Default.jpg', '2019-09-26'),
('ID432223', 'Flochem', '934 Queen St.', 'Steve', 'Crowder', 'steveCrowder123@outlook.ca', '(905) 416-5455', 122, '123 Fake street', 1, 'Walmart.com', 'Profile_ID432223.jpg', '2019-10-31'),
('ID52122', '123FakeCompany', '124 Fake Street', 'Ashley', 'Williams', 'aaliciaphoenix@gmail.com', '6476695470', 28262, '6476876753', 1, '', 'Profile_ID52122.jpg', '2019-11-03'),
('ID52124', '123FakeCompany', '124 Fake Street', 'Ashley', 'Williams', 'aaliciaphoenix@gmail.com', '6476695470', 28262, '', 1, '', 'Profile_ID52124.jpg', '2019-11-03'),
('ID54221', 'tewtewter', 'twettewfdfe', 'tewt', 'tewt', 'aaliciaphoenix@gmail.com', '6476695470', 68767, '6476695470', 1, 'www.tester.com', 'Profile_ID54221.jpg', '2019-11-03'),
('ID5432145', 'TesterCompany', '155 Fake Street', 'test', 'test', 'aw07@live.ca', '6476876753', 6695, '6476695470', 1, 'www.tester.com', 'Profile_ID5432145.jpg', '2019-11-03'),
('ID55543', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 43767, '6476695470', 1, '', 'Profile_ID55543.jpg', '2019-11-03'),
('ID55545', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 12345, '6476876753', 1, 'www.tester.com', 'Profile_ID55545.jpg', '2019-11-03'),
('ID55554', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 123, '6476876753', 1, 'www.tester.com', 'Profile_ID55554.jpg', '2019-11-03'),
('ID55555', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 1, '6476876753', 1, 'www.tester.com', 'Profile_ID55555.jpg', '2019-11-03'),
('ID823484', 'Unilever', '9823 Forever Cres.', 'Bruce', 'Williams', 'TesterWilliams@hotmail.com', '(905) 647-5448', 0, '', 1, 'www.OntarioHoseSucks.ca', 'Profile_Default.jpg', '2019-09-15'),
('ID830000', '123FakeCompany', '124 Fake Street', 'Ashley', 'Williams', 'aaliciaphoenix@gmail.com', '', 235, '', 1, '', 'Profile_ID830000.jpg', '2019-11-03'),
('ID830001', '123FakeCompany', '124 Fake Street', 'Ashley', 'Williams', '', '', 235, '', 1, '', 'Profile_ID830001.jpg', '2019-11-03'),
('ID830009', '123FakeCompany', '124 Fake Street', '', '', 'aw07@live.c', '', 444, '', 1, '', 'Profile_Default.jpg', '2019-11-03'),
('ID830011', '123FakeCompany', '124 Fake Street', '', '', '', '', 235, '', 1, '', 'Profile_ID830011.jpg', '2019-11-03'),
('ID830035', '123FakeCompany', 'twettewfdfe', '', '', '', '', 0, '', 1, '', 'Profile_Default.jpg', '2019-11-03'),
('ID830036', '123FakeCompany', 'twettewfdfe', '', '', '', '', 0, '', 1, '', 'Profile_ID830036.jpg', '2019-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `hose`
--

CREATE TABLE `hose` (
  `HoseType` varchar(255) NOT NULL,
  `PicURL` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hose`
--

INSERT INTO `hose` (`HoseType`, `PicURL`, `Description`) VALUES
('Chemical', 'ChemHose.jpg', 'This is the chem hose description'),
('Entrails', 'Entrails.jpg', 'This is the chem hose description'),
('FOOD', 'FOOD_hose.jpg', 'for fooood!!'),
('keflar hose', '34i3r.jpg', 'This is the titanium kefler example hose'),
('mark11', 'mark11_hose.jpg', 'mark11 teater rn'),
('Mark14', 'Mark14_hose.jpg', 'TEStings for combination style hose test'),
('mark7', 'mark7_hosejpg', 'mark7'),
('mark8', 'mark8_hose.jpg', 'mark 8 test'),
('PD', 'PD_hose.', ''),
('PGP', 'PGP.jpg', 'This is the chem hose description'),
('PSP', 'PSP_hose.jpg', 'this is the PSP hose type!'),
('Steam', 'test', 'this is a Steam powered hose'),
('tester mark 18', 'tester mark 18_hose.jpg', 'test'),
('testeresr ', 'xcgdgfgd.jpg', 'this s fo testing'),
('testing upload mix', 'fake.jpg', 'this s for another test again!!!'),
('Vanilla', 'sidsidsdsndd.jpg', 'This is the newest Vanilla Hose! Enjoy it');

-- --------------------------------------------------------

--
-- Table structure for table `loginpage`
--

CREATE TABLE `loginpage` (
  `Username` varchar(25) NOT NULL,
  `Pass_word` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loginpage`
--

INSERT INTO `loginpage` (`Username`, `Pass_word`) VALUES
('ID019923', 'tester'),
('ID394924', 'test'),
('ID396441', 'test'),
('ID432223', 'test'),
('ID823484', 'test'),
('sysadmin', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `CustomerPO` text NOT NULL,
  `OrderNum` text NOT NULL,
  `Part` text NOT NULL,
  `Fittings` text NOT NULL,
  `testDate` date NOT NULL,
  `creationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TestedBy` text NOT NULL,
  `HoseType` text NOT NULL,
  `Pressure` double NOT NULL,
  `HoseDiameter` double NOT NULL,
  `HoseLength` double NOT NULL,
  `Temperature` double NOT NULL,
  `CRN` tinyint(1) NOT NULL,
  `InService` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `Username`, `CustomerPO`, `OrderNum`, `Part`, `Fittings`, `testDate`, `creationDate`, `TestedBy`, `HoseType`, `Pressure`, `HoseDiameter`, `HoseLength`, `Temperature`, `CRN`, `InService`) VALUES
('PR009809', 'ID432223', '654321', '7895', 'NF-PSP8X30CSFXCSF', 'CS Flange', '2019-10-30', '2017-10-27 15:41:00', 'Andrew Williams', 'PSP', 1050, 3.6, 225, 175, 1, 0),
('PR235112', 'ID432223', '4322345', '3222', 'fin340ffef', 'NRF-efin34', '2018-08-12', '2019-08-27 15:41:04', 'Brian Williams', 'PSP', 2500, 125, 80, 25, 1, 1),
('PR837448', 'ID432223', '374635', '3455', 'NCE X NCe', 'NCE X NCEYIGJ', '2019-09-11', '2019-11-03 16:38:32', 'Michael Williams', 'FOOD', 1100, 25, 250, 35, 1, 1),
('PR837459', 'ID432223', '374635', '3455', 'NCE X NCe', 'NCE X NCEYIGJ', '2019-09-11', '2019-11-03 16:40:22', 'Michael Williams', 'FOOD', 1100, 25, 250, 35, 1, 1),
('PR844356', 'ID396441', '513326', '558754', 'PH-FH2.5X25ALCXE', 'AL CxE', '2015-12-12', '2019-06-21 15:41:04', 'Billy Forenzo', 'FOOD', 550, 1, 175, 112, 0, 1),
('PR866540', 'ID823484', '239986', '45367', 'NF-PGP2X10SSAXD', 'SS A+D', '2015-10-14', '2018-10-22 15:41:04', 'Derek Williams', 'PGP', 550, 1.1, 155, 225, 0, 0),
('PR900867', 'ID019923', '599861', '26598', 'ID3PH-TT4X200ALCXC', 'AL CxC', '2018-07-18', '2017-10-20 15:41:04', 'Jason Chhaidan', 'Chemical', 250, 3, 159, 105, 1, 0),
('PR928448', 'ID394924', '234452', '144532', 'NF-CCH2X15SSCXE', 'SS CXE', '2018-10-21', '2017-10-17 12:41:04', 'Brian Williams', 'Chemical', 1000, 2, 150, 100, 1, 1),
('PR930411', 'ID432223', '666666', '9985', 'NFX-JFSS32342-FP', 'NXE X NXE2 ', '2017-07-24', '2019-08-21 15:41:04', 'Andrew Williams', 'PSP', 125.8, 195.5, 120.5, 25, 1, 1),
('PR933842', 'ID432223', '3453222', '6643', 'sdfdjdnfdd', 'NEFoe VS sDOd Desil', '2018-01-19', '2019-06-27 15:41:04', 'Brian Williams', 'FOOD', 2500, 125, 120, 25, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ProductID`,`DateAdded`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Username` (`Username`,`Location`);

--
-- Indexes for table `hose`
--
ALTER TABLE `hose`
  ADD PRIMARY KEY (`HoseType`);

--
-- Indexes for table `loginpage`
--
ALTER TABLE `loginpage`
  ADD PRIMARY KEY (`Username`,`Pass_word`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`,`Username`),
  ADD KEY `Username` (`Username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `company` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
