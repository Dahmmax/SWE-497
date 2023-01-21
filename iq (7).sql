-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 12:16 AM
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
(213, 'False', 73);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

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
(8, 'q', 19, 'a23Vsmkbv3', 0),
(9, 'QQ', 19, '2F2h4ueG1S', 0),
(10, 'Turki', 19, '2F2h4ueG1S', 0),
(11, 'qqqqqqq', 19, '2F2h4ueG1S', 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

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
(73, 'select True', 2, 'A', 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

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
(19, 'Math section 22', 222, '2F2h4ueG1S', 'Normal', 1, '2023-01-21 11:55:01'),
(22, '444', 12, NULL, 'Lienr', 1, '2023-01-21 11:49:49'),
(24, 'd', 0, NULL, 'Lienr', 1, '2023-01-21 11:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `Quiz_Id` int(255) NOT NULL,
  `Quiz_Code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`Quiz_Id`, `Quiz_Code`) VALUES
(19, '2F2h4ueG1S');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

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
(1, 'Turki Mohammed', 'turky2120009@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2022-12-20 14:35:34', 0),
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
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `ParticipantsId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `Question_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

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
