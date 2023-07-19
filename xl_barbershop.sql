-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 07:39 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xl_barbershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_surname`, `a_username`, `a_password`, `a_email`, `a_position`, `a_img`) VALUES
(1, 'Nadir', 'Quliyev', 'nadir', '202cb962ac59075b964b07152d234b70', 'nadir@gmail.com', 'Admin', '1.jpg'),
(2, 'İbrahim', 'Ağamalıyev', 'ibo', '202cb962ac59075b964b07152d234b70', 'ibo@gmail.com', 'Admin', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `p_id` int(11) NOT NULL,
  `p_name_az` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_name_en` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_name_ru` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`p_id`, `p_name_az`, `p_name_en`, `p_name_ru`) VALUES
(1, 'Direktor', 'Director', 'Директор'),
(2, 'Menecer', 'Manager', 'Менеджер'),
(3, 'Master', 'Master', 'Мастер'),
(4, 'Asistent', 'Asistent', 'Асистент');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` int(11) NOT NULL,
  `s_name_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_name_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_name_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_surname_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_surname_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_surname_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_description_az` longtext COLLATE utf8_unicode_ci NOT NULL,
  `s_description_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `s_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `s_position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_experience` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `s_whatsApp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_instagram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_telegram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_img_ex` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `s_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_creater_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s_id`, `s_name_az`, `s_name_en`, `s_name_ru`, `s_surname_az`, `s_surname_en`, `s_surname_ru`, `s_description_az`, `s_description_en`, `s_description_ru`, `s_position`, `s_experience`, `s_status`, `s_email`, `s_mobile`, `s_whatsApp`, `s_facebook`, `s_instagram`, `s_telegram`, `s_youtube`, `s_img`, `s_img_ex`, `s_create_date`, `s_creater_id`) VALUES
(2, 'Sabir', 'Sabir', 'Sabir', 'Mehdiyev', 'Mextiev', 'Мехтиев', 'Tələbə', 'Student', 'Студент', '4', '3', 'Active', 'sabir_mehdi@mail.ru', '+994558528134', '+994558528134', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.telegram.com/', 'https://www.youtube.com/', 'e7711f6c09254b85acc8f78419b9156f.jpg', '.jpg', '2023-07-19 07:33:55', 0),
(3, 'Amin', 'Amin', 'Amin', 'Qurbanov', 'Gurbanov', 'Гурбанов', '18 yas', 'Student of ASOIU', 'Студент АГУНП', '2', '1', 'Active', 'amin_delonx@mail.ru', '+994551001010', '+994551001010', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.telegram.com/', 'https://www.youtube.com/', '', '', '2023-07-19 07:33:43', 0),
(4, 'Ruslan', 'Ruslan', 'Руслан', 'Abuşov', 'Abushov', 'Абушов', 'BSU tələbəsi', 'Student of BSU', 'Студент БСУ', '3', '6', 'Active', 'a_ruslan@mail.ru', '+994559888878', '+994559888878', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.telegram.com/', 'https://www.youtube.com/', '', '', '2023-07-19 07:33:31', 0),
(5, 'Ayan', 'Ayan', 'Аян', 'Həsənova', 'Hasanova', 'Гасанова', 'Микропроцессор — это центральный блок компьютера, предназначенный для управления работой всех остальных блоков и выполнения арифметических и логических операций над информацией.\r\nЗадача микропроцессора— выполнять программы, находящиеся в основной памяти.\r\nПроцессор выполняет каждую команду за несколько шагов:\r\n1. Вызывает очередную команду из памяти и заносит ее в регистр команд.\r\n2. Меняет содержимое счетчика команд, который после этого указывает на следующую команду.\r\n3. Определяет тип вызванной команды.\r\n4. Если команда использует данные из памяти, определяет, где находятся эти данные.\r\n5. При необходимости переносит данные в регистр процессора.\r\n6. Выполняет команду.\r\n7. Переходит к шагу 1, чтобы начать выполнение следующей команды.', 'College Student', '', '2', '5', 'Active', 'ayan@mail.ru', '+994708818701', '+994708818701', 'https://www.facebook.com/', 'https://www.instagram.com/', '+994708818701', 'https://www.youtube.com/', '', '', '2023-07-19 07:33:19', 0),
(8, 'Nadir', 'Nadir', 'Надир', 'Quliyev', 'Guliev', 'Гулиев', 'Full-stack proqramçı', 'Full-stack programmer', 'Фулл-стек программист', '2', '7', 'Active', 'nadir@mail.ru', '+994552111111', '+994552111111', 'https://www.facebook.com/', 'https://www.instagram.com/', '+994552111111', 'https://www.youtube.com/', 'db80edbc72bcd0380dff6fadd84c0753.jpg', '.jpg', '2023-07-19 07:33:08', 0),
(9, 'Ayxan', '', '', 'Mustafayev', '', '', 'Mənim 19 yaşım var. ADNSU-da təhsil alıram. Kompüter ixtisası mənim ən sevdiyim ixtisasdır. Bundan əlavə bir çox bacarıq və biliklərə məxsusam. Azərbaycan, rus və türk dillərində səlis danışıram, English B1-B2 səviyyəsi.', '', '', '1', '5', 'Active', 'ajhanmustafaev@gmail.com', '+994556772714', '+994556772714', 'https://www.facebook.com/', 'https://www.instagram.com/', '+994556772714', 'https://www.youtube.com/', '46e89c78611445c5f8f0266392378a3e.jpg', '.jpg', '2023-07-19 07:30:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `st_id` int(11) NOT NULL,
  `st_name_az` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `st_name_en` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `st_name_ru` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`st_id`, `st_name_az`, `st_name_en`, `st_name_ru`) VALUES
(1, 'Aktiv', 'Active', 'Активен'),
(2, 'Deaktiv', 'Deactive', 'Деактивен');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
