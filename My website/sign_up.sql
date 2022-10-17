-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 03 Ιουλ 2021 στις 15:15:14
-- Έκδοση διακομιστή: 10.4.11-MariaDB
-- Έκδοση PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `sign_up`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `newusers`
--

CREATE TABLE `newusers` (
  `ID` int(11) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Age` date NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `confirmPassword` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Photo` blob NOT NULL,
  `Role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `newusers`
--

INSERT INTO `newusers` (`ID`, `Firstname`, `Lastname`, `Age`, `Gender`, `Username`, `Password`, `confirmPassword`, `Email`, `Photo`, `Role`) VALUES
(1, 'Χρήστος', 'Τζαφέρης', '1999-02-08', 'Άνδρας', 'Tzaff', '1234', '1234', 'miltosalev1@gmail.com', 0xce91cf80cebfcebacebfceb4ceb9cebacebfcf80cebfceafceb7cf83ceb72e504e47, 2),
(2, 'kyriakos', 'alevizos', '1999-08-31', 'Άνδρας', 'Alev', '123', '123', 'miltosalev1@gmail.com', 0xce9acf89ceb4ceb9cebacebfcf80cebfceb9ceb7cf84ceaecf822e504e47, 2),
(3, 'Χρήστος', 'Γεωργακόπουλος', '1212-12-12', 'Άνδρας', 'gusu', '123', '123', 'miltosalev1@gmail.com', 0xce9acf89ceb4ceb9cebacebfcf80cebfceb9ceb7cf84ceaecf822e504e47, 3);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `results`
--

CREATE TABLE `results` (
  `ID` int(11) NOT NULL,
  `Usr` varchar(30) NOT NULL,
  `Level` int(11) NOT NULL,
  `Score` int(11) NOT NULL,
  `DATE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `results`
--

INSERT INTO `results` (`ID`, `Usr`, `Level`, `Score`, `DATE`) VALUES
(6, 'Tzaff', 1, 0, 'Jun/07/2021'),
(7, 'Tzaff', 1, 0, 'Jun/07/2021'),
(8, 'Tzaff', 1, 3, 'Jun/07/2021'),
(9, 'Tzaff', 1, 0, 'Jun/07/2021'),
(10, 'Tzaff', 1, 0, 'Jun/07/2021'),
(11, 'Tzaff', 1, 0, 'Jun/07/2021'),
(12, 'Tzaff', 1, 0, 'Jun/07/2021'),
(13, 'Tzaff', 1, 0, 'Jun/07/2021'),
(14, 'Tzaff', 1, 0, 'Jun/07/2021'),
(15, 'Tzaff', 1, 0, 'Jun/07/2021'),
(16, 'Tzaff', 1, 0, 'Jun/07/2021'),
(17, 'Tzaff', 1, 0, 'Jun/07/2021'),
(18, 'Tzaff', 1, 0, 'Jun/07/2021'),
(19, 'Tzaff', 1, 3, 'Jun/07/2021'),
(20, 'Tzaff', 1, 5, 'Jun/07/2021'),
(21, 'gusu', 1, 2, 'Jun/07/2021'),
(22, 'gusu', 1, 0, 'Jun/07/2021'),
(23, 'gusu', 1, 0, 'Jun/07/2021'),
(24, 'gusu', 1, 0, 'Jun/07/2021'),
(25, 'gusu', 1, 0, 'Jun/07/2021'),
(26, 'gusu', 1, 0, 'Jun/07/2021'),
(27, 'gusu', 1, 0, 'Jun/07/2021'),
(28, 'gusu', 1, 0, 'Jun/07/2021'),
(29, 'gusu', 1, 0, 'Jun/07/2021'),
(30, 'gusu', 1, 0, 'Jun/07/2021'),
(31, 'gusu', 1, 0, 'Jun/07/2021'),
(32, 'gusu', 1, 0, 'Jun/07/2021'),
(33, 'gusu', 1, 0, 'Jun/07/2021'),
(34, 'gusu', 1, 0, 'Jun/07/2021'),
(35, 'gusu', 1, 0, 'Jun/07/2021'),
(36, 'gusu', 1, 0, 'Jun/07/2021'),
(37, 'gusu', 1, 0, 'Jun/07/2021'),
(38, 'gusu', 1, 0, 'Jun/07/2021'),
(39, 'gusu', 1, 0, 'Jun/07/2021'),
(40, 'gusu', 1, 0, 'Jun/07/2021'),
(41, 'gusu', 1, 0, 'Jun/07/2021'),
(42, 'gusu', 1, 0, 'Jun/07/2021'),
(43, 'gusu', 1, 0, 'Jun/07/2021'),
(44, 'gusu', 1, 0, 'Jun/07/2021'),
(45, 'gusu', 1, 0, 'Jun/07/2021'),
(46, 'gusu', 1, 0, 'Jun/07/2021'),
(47, 'gusu', 1, 0, 'Jun/07/2021'),
(48, 'gusu', 1, 0, 'Jun/07/2021'),
(49, 'gusu', 1, 0, 'Jun/07/2021'),
(50, 'gusu', 1, 0, 'Jun/07/2021'),
(51, 'gusu', 1, 0, 'Jun/07/2021'),
(52, 'gusu', 1, 0, 'Jun/07/2021'),
(53, 'gusu', 1, 0, 'Jun/07/2021'),
(54, 'gusu', 1, 0, 'Jun/07/2021'),
(55, 'gusu', 1, 0, 'Jun/07/2021'),
(56, 'gusu', 1, 0, 'Jun/07/2021'),
(57, 'gusu', 1, 1, 'Jun/07/2021'),
(58, 'gusu', 1, 1, 'Jun/07/2021'),
(59, 'gusu', 1, 1, 'Jun/07/2021'),
(60, 'gusu', 1, 1, 'Jun/07/2021'),
(61, 'gusu', 1, 1, 'Jun/07/2021'),
(62, 'gusu', 1, 1, 'Jun/07/2021'),
(63, 'gusu', 1, 1, 'Jun/07/2021'),
(64, 'gusu', 1, 1, 'Jun/07/2021'),
(65, 'gusu', 1, 1, 'Jun/07/2021'),
(66, 'gusu', 1, 1, 'Jun/07/2021'),
(67, 'gusu', 1, 0, 'Jun/07/2021'),
(68, 'gusu', 1, 0, 'Jun/07/2021'),
(69, 'gusu', 1, 0, 'Jun/07/2021'),
(70, 'gusu', 1, 0, 'Jun/07/2021'),
(71, 'gusu', 1, 0, 'Jun/07/2021'),
(72, 'gusu', 1, 0, 'Jun/07/2021'),
(73, 'gusu', 1, 0, 'Jun/07/2021'),
(74, 'gusu', 1, 0, 'Jun/07/2021'),
(75, 'gusu', 1, 1, 'Jun/07/2021'),
(76, 'gusu', 1, 0, 'Jun/07/2021'),
(77, 'gusu', 1, 0, 'Jun/07/2021'),
(78, 'gusu', 1, 0, 'Jun/07/2021'),
(79, 'gusu', 1, 0, 'Jun/07/2021'),
(80, 'gusu', 1, 0, 'Jun/07/2021'),
(81, 'gusu', 1, 2, 'Jun/07/2021'),
(82, 'gusu', 1, 1, 'Jun/07/2021'),
(83, 'gusu', 1, 0, 'Jun/07/2021'),
(84, 'Tzaff', 1, 0, 'Jun/07/2021'),
(85, 'Tzaff', 1, 0, 'Jun/07/2021'),
(86, 'Tzaff', 1, 3, 'Jun/08/2021'),
(87, 'Tzaff', 1, 0, 'Jun/08/2021'),
(88, 'Tzaff', 1, 0, 'Jun/08/2021'),
(89, 'Tzaff', 1, 4, 'Jun/08/2021'),
(90, 'Tzaff', 1, 2, 'Jun/08/2021'),
(91, 'Tzaff', 1, 1, 'Jun/08/2021'),
(92, 'Tzaff', 1, 2, 'Jun/08/2021'),
(93, 'Tzaff', 1, 0, 'Jun/08/2021'),
(94, 'Tzaff', 3, 4, 'Jun/08/2021'),
(95, 'Tzaff', 2, 5, 'Jun/08/2021'),
(96, 'Tzaff', 3, 0, 'Jun/08/2021'),
(97, 'Tzaff', 2, 0, 'Jun/08/2021'),
(98, 'miltosalev', 3, 0, 'Jun/08/2021'),
(99, 'gusu', 1, 1, 'Jun/14/2021'),
(100, 'gusu', 1, 4, 'Jun/14/2021'),
(101, 'gusu', 1, 5, 'Jun/14/2021'),
(102, 'gusu', 1, 4, 'Jun/14/2021'),
(103, 'gusu', 1, 4, 'Jun/14/2021'),
(104, 'gusu', 1, 1, 'Jun/14/2021'),
(105, 'gusu', 1, 5, 'Jun/14/2021'),
(106, 'gusu', 2, 4, 'Jun/14/2021'),
(107, 'gusu', 2, 5, 'Jun/14/2021'),
(108, 'gusu', 2, 1, 'Jun/14/2021'),
(109, 'gusu', 2, 1, 'Jun/14/2021'),
(110, 'gusu', 3, 4, 'Jun/14/2021'),
(111, 'gusu', 3, 4, 'Jun/14/2021'),
(112, 'gusu', 3, 0, 'Jun/14/2021'),
(113, 'gusu', 3, 1, 'Jun/14/2021'),
(114, 'gusu', 3, 5, 'Jun/14/2021'),
(115, 'Tzaff', 1, 0, 'Jun/16/2021'),
(116, 'Tzaff', 1, 5, 'Jun/16/2021'),
(117, 'Tzaff', 3, 4, 'Jun/16/2021'),
(118, 'Tzaff', 1, 1, 'Jun/16/2021'),
(119, '', 0, 0, ''),
(120, 'Tzaff', 1, 2, 'Jun/17/2021'),
(121, 'Tzaff', 1, 0, 'Jun/17/2021'),
(122, 'Tzaff', 1, 0, 'Jun/17/2021'),
(123, 'Tzaff', 2, 2, 'Jun/17/2021'),
(124, 'Tzaff', 2, 0, 'Jun/17/2021'),
(125, 'Tzaff', 1, 0, 'Jun/17/2021'),
(126, 'Tzaff', 1, 1, 'Jun/18/2021'),
(127, 'Alev', 1, 1, 'Jul/03/2021'),
(128, 'Alev', 1, 1, 'Jul/03/2021');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `usersquestions`
--

CREATE TABLE `usersquestions` (
  `ID` int(11) NOT NULL,
  `Question` text NOT NULL,
  `CorrectAnswer` text NOT NULL,
  `False1` text NOT NULL,
  `False2` text NOT NULL,
  `False3` text NOT NULL,
  `Level` int(11) NOT NULL,
  `Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `usersquestions`
--

INSERT INTO `usersquestions` (`ID`, `Question`, `CorrectAnswer`, `False1`, `False2`, `False3`, `Level`, `Type`) VALUES
(10, 'Η Τζάβα ειναι μια γλώσσα προγραμματισμού', 'Αντικειμενοστρεφής', '', '', ' ', 1, 2),
(11, 'a', 'v', '', '', ' ', 3, 1),
(15, '1+2', '3', '2', '1', ' ', 2, 1),
(16, 'a=5 a+=a??', '', '', '', ' ', 0, 3),
(17, 'a=5 a+=a??', '', '', '', ' ', 0, 3),
(18, 'a=5 a+=a??', '', '', '', ' ', 0, 3),
(23, 'a=5 a+=a??', '', '', '', ' ', 0, 3),
(24, 'a=5 a+=a??', '', '', '', ' ', 0, 3),
(25, 'a=5 a+=a??', '', '', '', ' ', 0, 4),
(29, 'a=5 a+=a??', '', '', '', ' ', 0, 2),
(30, 'a=5 a+=a??', '', '', '', ' ', 0, 2),
(31, 'poso kanei 1+2?', '1', '2', '2', '', 2, 4),
(32, '1+1=2?', 'true', 'false', '', '', 1, 1),
(36, 'Η τζαβα ειναι αντικειμενοστρεφής γλώσσα προγραμματισμού', 'true', 'false', '', '', 1, 1);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `newusers`
--
ALTER TABLE `newusers`
  ADD PRIMARY KEY (`ID`);

--
-- Ευρετήρια για πίνακα `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`ID`);

--
-- Ευρετήρια για πίνακα `usersquestions`
--
ALTER TABLE `usersquestions`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `newusers`
--
ALTER TABLE `newusers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT για πίνακα `results`
--
ALTER TABLE `results`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT για πίνακα `usersquestions`
--
ALTER TABLE `usersquestions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
