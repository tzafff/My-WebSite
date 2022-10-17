-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 19 Ιουν 2021 στις 11:53:13
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
-- Βάση δεδομένων: `quiz`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `answers`
--

CREATE TABLE `answers` (
  `ID` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `Stage` int(11) NOT NULL,
  `a_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `answers`
--

INSERT INTO `answers` (`ID`, `q_id`, `content`, `Stage`, `a_id`) VALUES
(1, 1, 'True', 1, 0),
(2, 1, 'False', 1, 0),
(3, 3, 'null', 1, 3),
(4, 3, '0', 1, 4),
(5, 3, 'depends on the  data type', 1, 5),
(6, 3, 'no default value for local variables', 1, 6),
(7, 4, 'A class need to be instantiated as an object before being used', 1, 4),
(8, 4, 'An objects exists in memory in run time', 1, 5),
(9, 4, 'Abstraction hides complexity', 1, 6),
(10, 4, 'An object is a variable, where its type is the class used to declare the variable', 1, 7),
(11, 8, 'That your Boolean statement will at some point be false', 2, 8),
(12, 8, 'That there is a Boolean statement somewhere in your code', 2, 9),
(13, 8, 'That your Boolean statement will at some point be true', 2, 10),
(14, 8, 'All of the choices', 2, 11),
(15, 9, 'A new type of Applet', 2, 9),
(16, 9, 'A segment of code to be run a specified amount of times', 2, 10),
(17, 9, 'A segment of code to be run infinite times', 2, 11),
(18, 9, 'A segment of code to be run once', 2, 12),
(19, 13, 'Compilation error', 3, 13),
(20, 13, 'Runtime error', 3, 14),
(21, 13, 'num being 6.7', 3, 15),
(22, 13, 'num being 6', 3, 16),
(23, 14, 'Compilation error', 3, 14),
(24, 14, 'Runtime error', 3, 15),
(25, 14, 'No errors', 3, 16),
(26, 14, 'Runtime Expection', 3, 17),
(27, 5, '16 bits', 1, 0),
(28, 10, 'exception ', 2, 0),
(29, 15, 'ac', 3, 0),
(90, 16, 'απαντηση1', 2, 16),
(91, 16, 'απαντηση2', 2, 17),
(92, 16, 'απαντηση3', 2, 18),
(93, 16, 'απαντηση4', 2, 19),
(94, 17, '1h apanthsh', 1, 17),
(95, 17, '2h apantisi', 1, 18),
(96, 17, '3h apantisi', 1, 19),
(97, 17, '4h apantisi', 1, 20),
(103, 18, '8', 1, 0);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `equestions`
--

CREATE TABLE `equestions` (
  `ID` int(11) NOT NULL,
  `Stage` int(11) NOT NULL,
  `content` text NOT NULL,
  `type` varchar(11) NOT NULL,
  `correct` varchar(30) NOT NULL,
  `correct1` varchar(30) NOT NULL,
  `correct2` varchar(30) NOT NULL,
  `correct3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `equestions`
--

INSERT INTO `equestions` (`ID`, `Stage`, `content`, `type`, `correct`, `correct1`, `correct2`, `correct3`) VALUES
(1, 1, ' Is Empty.java file name a valid source file name?', 'TF', 'radio_choice_a1', 'radio_choice_b1', '', ''),
(2, 1, ' A null reference may be used to access a static variable or method', 'TF', 'radio_choice_a1', 'radio_choice_b1', '', ''),
(3, 1, ' What is the default value of the local variables?', 'Radio', 'radio_choice_c3', '', '', ''),
(4, 1, ' Which of these is correct?', 'Checkbox', 'checkbox_option_1', 'checkbox_option_2', 'checkbox_option_3', 'checkbox_option_4'),
(5, 1, ' The size of a Char in Java is', 'Text', '16 bits', '', '', ''),
(6, 2, ' Primitive datatypes are allocated on a stack', 'TF', 'radio_choice_a1', 'radio_choice_b1', '', ''),
(7, 2, ' Can you compare a boolean to an integer?', 'TF', 'radio_choice_a2', 'radio_choice_b2', '', ''),
(8, 2, ' What is essential in making sure that your loop is not infinite?', 'Radio', 'radio_choice_c4', '', '', ''),
(9, 2, 'What is a loop?', 'Checkbox', '', 'checkbox_option_2', '', ''),
(10, 2, ' When an error occurs, Java will normally stop and generate an error message. The technical term for this is: Java will throw an', 'Text', 'exception ', 'Exception ', '', ''),
(11, 3, ' We can have any number of classes in a Java source file?', 'TF', 'radio_choice_a1', 'radio_choice_b1', '', ''),
(12, 3, ' There is no structure and union in Java', 'TF', 'radio_choice_a1', 'radio_choice_b1', '', ''),
(13, 3, 'Following code will result in: int num=6.7;', 'Radio', 'radio_choice_c1', '', '', ''),
(14, 3, 'Following code will result in a1=5; double a2=(float)a1;', 'Checkbox', 'checkbox_option_1', '', 'checkbox_option_3', ''),
(15, 3, ' We have String word=\"abcde\"; for(int i=0; i<4; i+=2) System.out.println(word[i]); write the result of system', 'Text', 'ac', '', '', ''),
(16, 2, 'ερωτηση222', 'Radio', 'radio_choice_a1', '', '', ''),
(17, 1, 'checkbox', 'Checkbox', 'checkbox_option_1', '', '', ''),
(18, 1, 'ποσο κανει 1+7??', 'Text', '8', '', '', '');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `q_id` (`q_id`);

--
-- Ευρετήρια για πίνακα `equestions`
--
ALTER TABLE `equestions`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `answers`
--
ALTER TABLE `answers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT για πίνακα `equestions`
--
ALTER TABLE `equestions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`q_id`) REFERENCES `equestions` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
