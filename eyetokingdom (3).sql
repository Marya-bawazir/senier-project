-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 11:04 PM
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
-- Database: `eyetokingdom`
--

-- --------------------------------------------------------

--
-- Table structure for table `booktrip`
--

CREATE TABLE `booktrip` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `MobileNumber` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booktrip`
--

INSERT INTO `booktrip` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Email`) VALUES
(1, 'Waleed', 'Humaid', 567784242, 'humaidalaa@gmail.com'),
(7, 'Sara', 'Ahmed', 46547756, 'Sara@hotmail.com'),
(15, 'Sara', 'Mazen', 567784242, 'Sara@hotmail.com'),
(16, 'Leena', 'Khaled', 567896543, 'Leena@hotmail.com'),
(17, 'Khaled', 'Abdulaziz', 564327890, 'Khaled@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `coment`
--

CREATE TABLE `coment` (
  `Name` varchar(40) NOT NULL,
  `City` varchar(40) NOT NULL,
  `Comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coment`
--

INSERT INTO `coment` (`Name`, `City`, `Comment`) VALUES
('Alaa', 'Khobar', 'thank you'),
('Sara', 'Dammam', 'thaank you '),
('Alaa', 'Khobar', 'I enjoy with you, thank you'),
('Alaa', 'Khobar', 'I enjoy with you, thank you'),
('Leena', 'Neom', 'I enjoy with you, thank you!');

-- --------------------------------------------------------

--
-- Table structure for table `tourguide`
--

CREATE TABLE `tourguide` (
  `UserID` int(10) NOT NULL,
  `First_name` varchar(40) NOT NULL,
  `Last_name` varchar(40) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Languages` varchar(40) NOT NULL,
  `Education` varchar(40) NOT NULL,
  `City` varchar(40) NOT NULL,
  `Mobile_Number` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Profile_img` varbinary(6000) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Confirm` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourguide`
--

INSERT INTO `tourguide` (`UserID`, `First_name`, `Last_name`, `Gender`, `Date_of_Birth`, `Languages`, `Education`, `City`, `Mobile_Number`, `email`, `Profile_img`, `Password`, `Confirm`) VALUES
(1234, 'Waleed', 'Humaid', '0', '1994-01-05', 'Arabic', 'AA', 'Jeddah', 2147483647, 'humaidalaa@gmail.com', 0x696d616765732e706e67, 'Waleed$1234', 'Waleed$1234'),
(1994, 'Alaa', 'Waleed', '0', '1996-02-09', 'Arabic', 'IT ', 'Dhahran', 568298300, 'Alaahumaid@hotmail.com', 0x3134363032352e706e67, 'Alaa$1994', 'Alaa$1994'),
(1122334455, 'Manar ', 'Misfer ', 'female', '1996-06-06', 'Arabic, English ', 'Archaeology', 'Dhahran', 561234655, 'Manar@hotmail.com', 0x3134363032352e706e67, 'Manar$1234', 'Manar$1234'),
(1133443355, 'Maria', 'Mohmmed', 'female', '1994-10-12', 'Arabic, English ', 'Computer Science', 'Abha', 562345678, 'Maria@hotmail.com', 0x3134363032352e706e67, 'Maria$1234', 'Maria$1234'),
(2147483647, 'Ahmed', 'Waleed', 'Male', '2003-01-08', 'Arabic, English, French', 'Computer Science', 'Neom', 566776655, 'Ahmed@hotmail.com', 0x696d616765732e706e67, 'Ahmed$1234', 'Ahmed$1234');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `ID` int(11) NOT NULL,
  `UserID` int(10) NOT NULL,
  `Region` varchar(40) NOT NULL,
  `City` varchar(40) NOT NULL,
  `Description` varchar(600) NOT NULL,
  `Target` varchar(30) NOT NULL,
  `Duration` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Place` varchar(40) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `img` varbinary(6000) NOT NULL,
  `Time` time NOT NULL,
  `Status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`ID`, `UserID`, `Region`, `City`, `Description`, `Target`, `Duration`, `Type`, `Place`, `Price`, `Date`, `img`, `Time`, `Status`) VALUES
(1, 1994, 'Central Region', 'Riyadh', 'Enjoy the trip ', 'families', '3 hours', 'Adventure', 'Zoo', '200 SR', '2022-05-27', 0x33393435373334322d6d696e2e6a7067, '10:16:00', 1),
(7, 1234, 'Western Region', 'Jeddah', 'aa', 'families', '3 hours', 'Adventure', 'King Fahad Fountain', '200 SR', '2022-05-16', 0x7765737465726e2e6a706567, '13:55:00', 1),
(14, 1234, 'Central Region', 'Riyadh', 'enjoy play with animals!', 'Individuals and Families', '3 hours', 'Adventure', 'Zoo', '200 SR', '2022-05-16', 0x33393435373334322d6d696e2e6a7067, '16:30:00', 1),
(15, 1122334455, 'Eastern Region ', 'Dhahran', 'The Immersive Experience, Ithra Immersive Lab is a space to inspire and motivate creatives to develop ideas and prototypes using different technologies such as virtual reality, augmented reality, immersive audio and more. The lab is also a space where people of similar interest or backgrounds in emerging tech can meet.\r\n', 'Individuals and Families', '1 hour', 'Educational ', 'Ithraa', '50 SR', '2022-05-20', 0x6561737465726e2e6a706567, '04:00:00', 1),
(16, 1122334455, 'Northern Region ', 'Neom', 'The cooler temperatures and breathtaking views make this an ideal location for hiking, swimming, snorkelling and wildlife-spotting.', 'Individuals', '4 hours', 'Adventure', 'TayebIsm valley', '150SR', '2022-05-19', 0x54617965622049736d2076616c6c65792e6a7067, '06:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booktrip`
--
ALTER TABLE `booktrip`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tourguide`
--
ALTER TABLE `tourguide`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booktrip`
--
ALTER TABLE `booktrip`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
