-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 17, 2024 at 01:37 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kollege`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Src` ()  NO SQL SELECT *FROM patient$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `authorization`
--

CREATE TABLE `authorization` (
  `id_authorization` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `pswd` varchar(255) DEFAULT NULL,
  `id_roles` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authorization`
--

INSERT INTO `authorization` (`id_authorization`, `login`, `name`, `pswd`, `id_roles`) VALUES
(1, '_admin', 'admin', '12345', 1),
(2, '_stud', 'stud', '111', 2),
(3, '_teach', 'teach', '123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `comments` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `phone`, `comments`) VALUES
(1, 'Бузюк', 'тачпт', 'buzyana12@gmail.com', '291724', 'ghbdtn'),
(2, 'Бузюк', 'тачпт', 'buzyana12@gmail.com', '291724', 'dfgh'),
(3, 'Бузюк', 'тачпт', 'buzyana12@gmail.com', '291724', 'вапро');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `id_subjects` int(11) DEFAULT NULL,
  `id_teachers` int(11) DEFAULT NULL,
  `id_students` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `mark` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `id_subjects`, `id_teachers`, `id_students`, `date`, `mark`) VALUES
(1, 2, 1, 1, '2023-12-28', 9),
(2, 2, 2, 1, '2023-12-28', 9),
(3, 2, 1, 1, '2023-12-28', 8),
(4, 2, 1, 2, '2023-12-28', 10),
(5, 2, 2, 2, '2023-12-28', 9),
(6, 2, 3, 3, '2023-12-28', 8),
(7, 2, 5, 3, '2023-12-28', 9),
(8, 2, 6, 4, '2023-12-28', 9),
(9, 2, 1, 4, '2023-12-28', 6),
(10, 2, 1, 5, '2023-12-28', 8),
(11, 2, 1, 6, '2023-12-28', 9),
(12, 2, 2, 7, '2023-12-28', 7),
(13, 2, 3, 7, '2023-12-28', 4),
(14, 2, 4, 8, '2023-12-28', 6),
(15, 2, 5, 8, '2023-12-28', 4),
(16, 2, 6, 9, '2023-12-28', 7),
(17, 7, 1, 10, '2023-12-25', 9),
(18, 7, 2, 11, '2023-12-25', 9),
(19, 7, 3, 12, '2023-12-25', 8),
(20, 7, 4, 13, '2023-12-25', 8),
(21, 7, 5, 13, '2023-12-25', 7),
(22, 7, 6, 14, '2023-12-25', 6),
(23, 7, 1, 14, '2023-12-25', 9),
(24, 7, 2, 15, '2023-12-25', 4),
(25, 7, 1, 15, '2023-12-25', 5);

-- --------------------------------------------------------

--
-- Table structure for table `groups1`
--

CREATE TABLE `groups1` (
  `id_groups1` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups1`
--

INSERT INTO `groups1` (`id_groups1`, `name`) VALUES
(1, '41ИБ'),
(2, '21ИБ'),
(3, '31ИБ');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_roles`, `name`) VALUES
(1, 'admin'),
(2, 'students'),
(3, 'techers');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id_students` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `secondname` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `id_groups1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id_students`, `name`, `secondname`, `surname`, `bday`, `id_groups1`) VALUES
(1, 'Иван', 'Сергеевич', 'Салата', '2000-01-01', 1),
(2, 'Павел', 'Александрович', 'Тарасевич', '2000-02-02', 1),
(3, 'Александр', 'Владимирович', 'Бурачевский', '2000-03-03', 1),
(4, 'Анастасия', 'Андреевна', 'Романович', '2005-07-12', 1),
(5, 'Михаил', 'Борисович', 'Рожко', '2000-05-05', 1),
(6, 'Яна', 'Дмитриевна', 'Бузюк', '2000-06-06', 1),
(7, 'Юлия', 'Дмитриевна', 'Нехайчик', '2000-07-07', 1),
(8, 'Карина', 'Андреевна', 'Бокша', '2000-08-08', 1),
(9, 'Валерия', 'Денисовна', 'Русакова', '2000-09-09', 1),
(10, 'Илья', 'Олегович', 'Бондаренко', '2000-10-10', 1),
(11, 'Никита', 'Андреевич', 'Говор', '2000-11-11', 1),
(12, 'Тимофей', 'Александрович', 'Пекарский', '2000-12-12', 1),
(13, 'Павел', 'Алексеевич', 'Дерюжков', '2001-01-01', 1),
(14, 'Алина', 'Владимировна', 'Белова', '2005-03-03', 1),
(15, 'Роман', 'Александрович', 'Дорошевич', '2005-05-12', 1),
(16, 'Евгения', 'Денисовна', 'Клепец', '2005-02-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id_subjects` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id_subjects`, `name`) VALUES
(1, 'Интернет-приложения'),
(2, 'БДиСУБД'),
(3, 'Бух.учет'),
(4, 'Охрана природы и электросбережения'),
(5, 'Опиуп'),
(6, 'Физ-ра'),
(7, 'АУД'),
(8, 'компьютерные сети'),
(9, 'Разработка приложения для мобильника'),
(10, 'бел.яз');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id_teachers` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `secondname` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `bday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id_teachers`, `name`, `secondname`, `surname`, `bday`) VALUES
(1, 'Елена', 'Иосифовна', 'Шутько', '1970-01-01'),
(2, 'Александр', 'Викторович', 'Дрозд', '1999-04-10'),
(3, 'Инна', 'Николаевна', 'Мужиченко', '1975-05-05'),
(4, 'Валентина', 'Александровна', 'Семеняко', '1976-04-25'),
(5, 'Елена', 'Станиславовна', 'Улезло', '1980-11-20'),
(6, 'Василий', 'Иванович', 'Пшонка', '1965-11-20'),
(7, 'Елена', 'Александровна', 'Тишкова', '1980-01-10'),
(8, 'Алеся', 'Васильевна', 'Едвин', '1974-07-02'),
(9, 'Виктор', 'Андреевич', 'Саванович', '1999-08-10'),
(10, 'Кирилл', 'Евгеньевич', 'Гаевский', '1988-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id_tt` int(11) NOT NULL,
  `id_groups1` int(11) DEFAULT NULL,
  `id_teachers` int(11) DEFAULT NULL,
  `id_subjects` int(11) DEFAULT NULL,
  `kabinet` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorization`
--
ALTER TABLE `authorization`
  ADD PRIMARY KEY (`id_authorization`),
  ADD KEY `id_roles` (`id_roles`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_subjects` (`id_subjects`),
  ADD KEY `id_students` (`id_students`),
  ADD KEY `id_teachers` (`id_teachers`);

--
-- Indexes for table `groups1`
--
ALTER TABLE `groups1`
  ADD PRIMARY KEY (`id_groups1`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_students`),
  ADD KEY `id_groups1` (`id_groups1`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id_subjects`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id_teachers`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id_tt`),
  ADD KEY `id_subjects` (`id_subjects`),
  ADD KEY `id_groups1` (`id_groups1`),
  ADD KEY `id_teachers` (`id_teachers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authorization`
--
ALTER TABLE `authorization`
  MODIFY `id_authorization` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `groups1`
--
ALTER TABLE `groups1`
  MODIFY `id_groups1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id_students` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id_subjects` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id_teachers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id_tt` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authorization`
--
ALTER TABLE `authorization`
  ADD CONSTRAINT `authorization_ibfk_1` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`);

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_ibfk_1` FOREIGN KEY (`id_subjects`) REFERENCES `subjects` (`id_subjects`),
  ADD CONSTRAINT `exams_ibfk_2` FOREIGN KEY (`id_students`) REFERENCES `students` (`id_students`),
  ADD CONSTRAINT `exams_ibfk_3` FOREIGN KEY (`id_teachers`) REFERENCES `teachers` (`id_teachers`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`id_groups1`) REFERENCES `groups1` (`id_groups1`);

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `timetable_ibfk_1` FOREIGN KEY (`id_subjects`) REFERENCES `subjects` (`id_subjects`),
  ADD CONSTRAINT `timetable_ibfk_2` FOREIGN KEY (`id_groups1`) REFERENCES `groups1` (`id_groups1`),
  ADD CONSTRAINT `timetable_ibfk_3` FOREIGN KEY (`id_teachers`) REFERENCES `teachers` (`id_teachers`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
