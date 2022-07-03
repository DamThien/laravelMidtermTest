-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 01, 2022 lúc 06:44 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `food`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `t_food`
--

CREATE TABLE `t_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_price` int(11) NOT NULL,
  `new_price` int(11) NOT NULL,
  `descript` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `t_food`
--

INSERT INTO `t_food` (`id`, `name`, `image`, `old_price`, `new_price`, `descript`, `status`) VALUES
(1, 'Urban Gerhold', 'https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large.jpg', 35759, 15829, 'Error tempora vitae accusamus repudiandae hic autem quae ullam.', 0),
(2, 'Mr. Xzavier Ferry Sr.', 'https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large.jpg', 30914, 11865, 'Quia architecto voluptatibus earum quaerat recusandae quas quo consequatur.', 1),
(3, 'Miss Clarabelle Ebert II', 'https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large.jpg', 36935, 14889, 'Voluptas sit numquam non itaque fugiat atque.', 0),
(4, 'Tevin Rempel', 'https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large.jpg', 35892, 14405, 'Ex praesentium illo et facilis nostrum quis.', 0),
(5, 'Israel Krajcik', 'https://via.placeholder.com/640x480.png/00dd99?text=est', 36308, 17968, 'Quasi et aut magnam eum id deleniti.', 1),
(6, 'Miss Anastasia Doyle', 'https://via.placeholder.com/640x480.png/0000ee?text=dicta', 33350, 17612, 'Repudiandae a saepe laudantium maxime aperiam vitae.', 0),
(7, 'Manley Koelpin', 'https://via.placeholder.com/640x480.png/004400?text=et', 38010, 15531, 'Libero laudantium magnam sed cum est vel.', 0),
(8, 'Leola Walter', 'https://via.placeholder.com/640x480.png/002200?text=inventore', 30135, 19210, 'Deleniti nobis qui quisquam ut impedit dolorum et dolore.', 1),
(9, 'Antone Mann', 'https://via.placeholder.com/640x480.png/001111?text=velit', 37275, 11658, 'A ab praesentium voluptatem delectus vero.', 0),
(10, 'Daren Gerhold', 'https://via.placeholder.com/640x480.png/003399?text=ipsum', 32135, 16667, 'Accusamus quo et tempora.', 1),
(11, 'ádfsadf', '1656642429_54eaf93713081_-_07-germany-tuna.jpg', 10003, 10001, 'ádfasfsdfsa', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `t_food`
--
ALTER TABLE `t_food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `t_food`
--
ALTER TABLE `t_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
