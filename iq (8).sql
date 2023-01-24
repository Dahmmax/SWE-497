-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 08:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iq`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `answer_id` int(11) NOT NULL,
  `Head` varchar(255) NOT NULL,
  `Question_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `Head`, `Question_id`) VALUES
(202, 'True', 69),
(203, 'False', 69),
(206, 'A1', 71),
(207, 'A2', 71),
(208, 'CC', 71),
(209, 'D', 71),
(210, 'True', 72),
(211, 'False', 72),
(212, 'True', 73),
(213, 'False', 73),
(214, 'True', 74),
(215, 'False', 74),
(220, 'True', 76),
(221, 'False', 76),
(222, 'sasasa', 75),
(223, 'gg', 75),
(224, 'bb', 75),
(225, 'gg', 75);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE `participants` (
  `ParticipantsId` int(255) NOT NULL,
  `ParticipantsName` varchar(255) NOT NULL,
  `QuizId` int(255) NOT NULL,
  `QuizCode` varchar(255) NOT NULL,
  `TotalScore` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`ParticipantsId`, `ParticipantsName`, `QuizId`, `QuizCode`, `TotalScore`) VALUES
(36, 'turki', 19, 'wtqO9X0T44', 0),
(37, 'aa', 22, 'rRh88fPO4H', 0),
(38, 'aa', 22, 'X21YJtzaE8', 0),
(39, 'w', 22, 'X21YJtzaE8', 0),
(40, 'q', 22, 'X21YJtzaE8', 0),
(41, 's', 22, 'X21YJtzaE8', 0),
(42, 'a', 22, 'X21YJtzaE8', 0),
(43, 'A', 22, 'X21YJtzaE8', 0),
(44, 'a', 22, 'X21YJtzaE8', 0),
(45, 'a', 22, 'X21YJtzaE8', 0),
(46, 'd', 22, 'X21YJtzaE8', 0),
(47, 'z', 22, 'X21YJtzaE8', 0),
(48, 'd', 22, 'X21YJtzaE8', 0),
(49, 'a', 22, 'X21YJtzaE8', 0),
(50, 'a', 22, 'X21YJtzaE8', 0),
(51, 's', 22, 'X21YJtzaE8', 0),
(52, 'f', 22, 'X21YJtzaE8', 0),
(53, 'd', 22, 'X21YJtzaE8', 0),
(54, 's', 22, 'X21YJtzaE8', 0),
(55, 'a', 22, 'X21YJtzaE8', 0),
(56, 'a', 22, 'X21YJtzaE8', 0),
(57, 'a', 22, 'X21YJtzaE8', 0),
(58, 'a', 22, 'X21YJtzaE8', 0),
(59, 'x', 22, 'X21YJtzaE8', 0),
(60, 'a', 22, 'X21YJtzaE8', 0),
(61, 'a', 22, 'X21YJtzaE8', 0),
(62, 'x', 22, 'X21YJtzaE8', 0),
(63, 'w', 22, 'X21YJtzaE8', 0),
(64, 'a', 22, 'X21YJtzaE8', 0),
(66, 'a', 22, 'X21YJtzaE8', 0),
(67, 'Turki', 19, '84npJ0gydC', 0),
(68, 'aa', 19, '84npJ0gydC', 0),
(69, 'aa', 19, '2WtqkfhE0s', 0),
(70, 'vv', 19, '2WtqkfhE0s', 0),
(71, 'A', 19, 'Ard4E9efWS', 0),
(72, 'ss', 19, '3ufOvD8dbg', 0),
(73, 'lk', 19, 'BKl34049sd', 0),
(74, 'll', 19, 'mhGByvHo83', 0),
(75, 'ي', 19, '2P3kM38Zd0', 0),
(76, 'aa', 19, '9qpJ95IS99', 0),
(77, 'A', 19, 'dks0s2T0WZ', 0),
(78, 'hh', 19, '9Cju4NHi82', 0),
(79, 'lla', 19, 'WwV2Pdd2VW', 0),
(80, 'll', 19, 'uxgRjak5jk', 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `Question_Id` int(255) NOT NULL,
  `Head` varchar(255) NOT NULL,
  `Score` int(100) NOT NULL,
  `CorrectAnswer` varchar(1) NOT NULL,
  `QuizId` int(255) NOT NULL,
  `UserId` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Question_Id`, `Head`, `Score`, `CorrectAnswer`, `QuizId`, `UserId`) VALUES
(69, 'true', 2, 'A', 19, 1),
(71, 'السوال الاول', 2, 'A', 19, 1),
(72, 'يَاتِنَا عَجَبًا (9) إِذْ أَوَى الْفِتْيَةُ إِلَى الْكَهْفِ', 2, 'A', 19, 1),
(73, 'select True', 2, 'A', 19, 1),
(74, 'T', 2, 'A', 22, 1),
(75, 'a', 2, 'A', 22, 1),
(76, 'F', 2, 'B', 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE `quiz` (
  `QuizId` int(255) NOT NULL,
  `QuizTitle` varchar(255) NOT NULL,
  `Duration` int(255) NOT NULL,
  `QuizCode` varchar(255) DEFAULT NULL,
  `GradingType` varchar(50) NOT NULL,
  `UserID` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`QuizId`, `QuizTitle`, `Duration`, `QuizCode`, `GradingType`, `UserID`, `created_at`) VALUES
(19, 'Math section 22', 222, NULL, 'Normal', 1, '2023-01-24 14:29:43'),
(22, '444', 12, NULL, 'Lienr', 1, '2023-01-24 12:11:08'),
(24, 'd', 0, NULL, 'Lienr', 1, '2023-01-21 11:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE `rooms` (
  `Quiz_Id` int(255) NOT NULL,
  `Quiz_Code` varchar(255) NOT NULL,
  `QuesIndex` int(50) NOT NULL DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `code` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `code`) VALUES
(1, 'Turki Mohammed', 'turky2120009@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2022-12-20 14:35:34', 287481),
(2, 'Turki Mohammed SEC', 'turky2120009@hotmail.com', '25d55ad283aa400af464c76d713c07ad', '2022-12-24 23:14:35', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `answer_id` (`answer_id`),
  ADD KEY `Question_id` (`Question_id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`ParticipantsId`),
  ADD KEY `QuizId` (`QuizId`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`Question_Id`),
  ADD UNIQUE KEY `Question_Id` (`Question_Id`),
  ADD KEY `QuizId` (`QuizId`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`QuizId`),
  ADD UNIQUE KEY `QuizId` (`QuizId`),
  ADD UNIQUE KEY `QuizCode` (`QuizCode`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`Quiz_Id`,`Quiz_Code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `ParticipantsId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `Question_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `QuizId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`Question_id`) REFERENCES `question` (`Question_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `participants_ibfk_1` FOREIGN KEY (`QuizId`) REFERENCES `quiz` (`QuizId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`QuizId`) REFERENCES `quiz` (`QuizId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
