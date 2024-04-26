-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 11:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(5) NOT NULL,
  `ad_name` varchar(50) NOT NULL,
  `ad_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_logs`
--

CREATE TABLE `appointment_logs` (
  `log_id` int(11) NOT NULL,
  `ticket_id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `appointment_with` varchar(255) NOT NULL,
  `timestamp` date NOT NULL,
  `appointment_status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_logs`
--

INSERT INTO `appointment_logs` (`log_id`, `ticket_id`, `user_name`, `appointment_with`, `timestamp`, `appointment_status`) VALUES
(1, 'g54U6z', 'rohan', 'nileshtayde2003@gmail.com', '2024-04-25', 1),
(7, 'IPdftt', 'Chetan Sonar', 'chaitalilohar4530@gmail.com', '2024-04-25', 1),
(8, 'IPdftt', 'Nikita Pawar', 'chaitalilohar4530@gmail.com', '2024-04-25', 1),
(9, 'IPdftt', 'Nikita Pawar', 'chaitalilohar4530@gmail.com', '2024-04-25', 1),
(10, 'INVxfy', 'Mansi Shinde', 'chaitalilohar4530@gmail.com', '2024-04-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_request`
--

CREATE TABLE `appointment_request` (
  `appointment_id` int(5) NOT NULL,
  `appoint_with` varchar(50) NOT NULL,
  `user_gmail` varchar(255) NOT NULL,
  `request_from` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `start_time` varchar(10) NOT NULL,
  `end_time` varchar(10) NOT NULL,
  `subject` text NOT NULL,
  `confirm` int(1) NOT NULL DEFAULT 0,
  `deny` int(1) NOT NULL DEFAULT 0,
  `ticket_id` varchar(12) NOT NULL,
  `qr_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_request`
--

INSERT INTO `appointment_request` (`appointment_id`, `appoint_with`, `user_gmail`, `request_from`, `date`, `start_time`, `end_time`, `subject`, `confirm`, `deny`, `ticket_id`, `qr_image`) VALUES
(15, 'ramsri@gmail.com', 'nikitapawar2003@gmail.com', 'nikita', '2024-02-22', '12', '1', 'meeting', 1, 0, '0', ''),
(16, 'ramsri@gmail.com', 'sapkalerohan07@gmail.com', 'rohan', '2024-02-22', '2', '4', 'meeting', 1, 0, '0', ''),
(17, 'ramsri@gmail.com', 'rahul001@gmail.com', 'rahul', '2024-02-22', '1', '2', 'urgent', 0, 1, '0', ''),
(18, 'ramsri@gmail.com', 'harshada@gmail.com', 'harshada', '2024-02-15', '12', '1', 'meeting', 1, 0, '0', ''),
(19, 'ramsri@gmail.com', 'kirishna@gmail.com', 'krishna', '2024-02-23', '12', '2', 'meeting', 1, 0, '0', ''),
(20, 'krishnayadav@gmail.com', 'rahul@gmail.com', 'rahul', '2024-02-23', '1', '2', 'meeting', 1, 0, 'D89r1R', 'qr-images/D89r1R.png'),
(21, 'ramsri@gmail.com', 'vedant@gmail.com', 'Vedant', '2024-02-23', '2', '3', 'meeting', 0, 0, 'ncEhYn', 'qr-images/ncEhYn.png'),
(22, 'ramsri@gmail.com', 'puja@gmail.com', 'Puja', '2024-02-23', '3', '4', 'meeting', 0, 0, 'iru3JH', 'qr-images/iru3JH.png'),
(23, 'sarswatisharma@gmail.com', 'vaishali@gmail.com', 'vaishali', '2024-02-23', '4', '5', 'meeting', 0, 0, 'kYbY3e', 'qr-images/kYbY3e.png'),
(24, 'ramsri@gmail.com', 'ranjana@gmail.com', 'ranjana', '2024-02-24', '12', '2', 'meeting', 1, 0, 's6OqR7', 'qr-images/s6OqR7.png'),
(25, 'ramsri@gmail.com', 'sima@gmail.com', 'sima', '2024-02-24', '1', '1', 'meeting', 1, 0, 'LmSw5D', 'qr-images/LmSw5D.png'),
(26, 'ramsri@gmail.com', 'nayan@gmail.com', 'nayan', '2024-02-24', '1', '3', 'meeting', 0, 0, 'IquTSQ', 'qr-images/IquTSQ.png'),
(27, 'ramsri@gmail.com', 'shravan@gmail.com', 'Shravan', '2024-04-08', '12', '1', 'no', 0, 0, 'fGsXg5', 'qr-images/fGsXg5.png'),
(28, 'ramsri@gmail.com', 'shravani@gmail.com', 'Shravani', '0000-00-00', '12', '1', 'type=\"text\"', 0, 0, '4b2qUg', 'qr-images/4b2qUg.png'),
(29, 'ramsri@gmail.com', 'nilesh@gmail.com', 'Nilesh', '0000-00-00', '12', '1', 'type=\"text\"', 0, 0, 'ovd7IF', 'qr-images/ovd7IF.png'),
(30, 'ramsri@gmail.com', 'mansi03@gmail.com', 'Mansi', '2024-04-14', '12', '1', 'about', 1, 0, 'mzUdcV', 'qr-images/mzUdcV.png'),
(31, 'ramsri@gmail.com', 'ketaki44@gmail.com', 'Ketaki', '2024-04-16', '12', '1', 'for', 1, 0, 'ovLLXA', 'qr-images/ovLLXA.png'),
(32, 'ramsri@gmail.com', 'unnati97@gmail.com', 'Unnati', '2024-04-16', '1', '2', 'for', 1, 0, 'WFtgX8', 'qr-images/WFtgX8.png'),
(33, 'nileshtayade2003@gmail.com', 'sita03@gmail.com', 'Sita', '2024-04-16', '2', '3', 'About', 0, 0, 'ZX7LSF', 'qr-images/ZX7LSF.png'),
(34, 'chaitalilohar4530@gmail.com', 'ram002@gmail.com', 'Ram', '2024-04-17', '12', '1', 'For', 1, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_db`
--

CREATE TABLE `employee_db` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(35) NOT NULL,
  `e_designation` varchar(35) NOT NULL,
  `e_post` varchar(25) NOT NULL,
  `e_email` varchar(35) NOT NULL,
  `e_mobile` varchar(12) NOT NULL,
  `e_gender` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_db`
--

INSERT INTO `employee_db` (`e_id`, `e_name`, `e_designation`, `e_post`, `e_email`, `e_mobile`, `e_gender`) VALUES
(1, 'Ram Srivatstva', 'MBA business', 'Manager', 'ramsri@gmail.com', '91123456789', 'male'),
(2, 'Krishna Yadav', 'BE computer', 'system administrator', 'krishnayadav@gmail.com', '9175123456', 'male'),
(3, 'Saraswati Sharma', 'BSc computer', 'Security Adminstrator', 'sarswatisharma@gmail.com', '75123456789', 'female'),
(4, 'Dr.Nilesh Tayade', 'ME computer ', 'Senior Engineer ', 'nileshtayade2003@gmail.com', '9673466829', 'male'),
(5, 'Dr.Chaitali Lohar', 'ME computer,Phd', 'HR', 'chaitalilohar4530@gmail.com', '8446183525', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `e_id` int(5) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `slots` varchar(25) NOT NULL,
  `Available` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`e_id`, `date`, `slots`, `Available`) VALUES
(1, '2024-02-04', '12 to 1', 0),
(1, '2024-02-04', '1 to 3', 1),
(1, '2024-02-04', '3 to 4', 1),
(1, '2024-02-04', '4 to 5', 1),
(1, '2024-02-04', '5 to 6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `slot_id` int(5) NOT NULL,
  `slot_name` varchar(30) NOT NULL,
  `start` varchar(10) NOT NULL,
  `end` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`slot_id`, `slot_name`, `start`, `end`) VALUES
(1, 'A1', '12', '1'),
(2, 'A1', '12 ', '2'),
(5, 'B1', '1', '2'),
(6, 'B1', '1', '3'),
(7, 'C1', '2', '3'),
(8, 'C1', '2', '4'),
(9, 'D1', '3', '4'),
(10, 'D1', '3', '5'),
(11, 'E1', '4', '5'),
(12, 'E1', '4', '6'),
(13, 'F', '5 ', '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `appointment_logs`
--
ALTER TABLE `appointment_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `appointment_request`
--
ALTER TABLE `appointment_request`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `employee_db`
--
ALTER TABLE `employee_db`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD KEY `e_id` (`e_id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`slot_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_logs`
--
ALTER TABLE `appointment_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `appointment_request`
--
ALTER TABLE `appointment_request`
  MODIFY `appointment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `employee_db`
--
ALTER TABLE `employee_db`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `slot_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `employee_db` (`e_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
