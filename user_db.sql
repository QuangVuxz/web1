-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 08, 2023 lúc 06:11 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `user_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_form`
--

CREATE TABLE `admin_form` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_form`
--

INSERT INTO `admin_form` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lesson_db`
--

CREATE TABLE `lesson_db` (
  `lesson_id` int(100) NOT NULL,
  `lesson_name` varchar(200) NOT NULL,
  `lesson_url` varchar(200) NOT NULL,
  `lesson_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lesson_db`
--

INSERT INTO `lesson_db` (`lesson_id`, `lesson_name`, `lesson_url`, `lesson_img`) VALUES
(1, 'A Thousand Years', 'https://www.youtube.com/embed/a_VDxdlxER8', 'https://i1.sndcdn.com/artworks-000194029276-xm0k95-t500x500.jpg'),
(2, 'Beautiful In White', 'https://www.youtube.com/embed/ttcm8zTppLA', 'https://i1.sndcdn.com/artworks-000092165076-tt9a84-t500x500.jpg'),
(3, 'Coffin Dance', 'https://www.youtube.com/embed/Zz_44JGiIuI', 'https://i1.sndcdn.com/artworks-cOXYurr7jsTYlmhz-WWYXlA-t500x500.jpg'),
(4, 'The Pink Panther Theme', 'https://www.youtube.com/embed/tKIczCGGrJw', 'https://i1.sndcdn.com/artworks-VaQeCbfKH7GaKrFh-nLUyLA-t500x500.jpg'),
(5, 'My Heart Will Go On', 'https://www.youtube.com/embed/KfBk53Vx4BQ', 'https://c.saavncdn.com/294/Titanic-My-Heart-Will-Go-On-Piano-Version-English-2012-500x500.jpg'),
(6, 'Perfect - Ed Sheeran', 'https://www.youtube.com/embed/xO_pugCATFg', 'https://i1.sndcdn.com/artworks-5QRVzLFOR1CJ6XBi-CRpmiw-t500x500.jpg'),
(7, 'Cant Help Falling In Love - Elvis Presley', 'https://www.youtube.com/embed/L5WmuUOQ3-8', 'https://i1.sndcdn.com/artworks-000489245394-tptkbg-t500x500.jpg'),
(8, 'Feliz Navidad', 'https://www.youtube.com/embed/rdxRMS8ga3E', 'https://c.saavncdn.com/432/Feliz-Navidad-Latin-2020-20201113222859-500x500.jpg'),
(9, 'Let It Go - Frozen', 'https://www.youtube.com/embed/lzW5e_iHHAk', 'https://i1.sndcdn.com/artworks-RC6MgYirRW26-0-t500x500.jpg'),
(10, 'I See The Light - Tangled', 'https://www.youtube.com/embed/x_q7reH9Xm8', 'https://i1.sndcdn.com/artworks-uJg8Fdq8OkdZ-0-t500x500.jpg'),
(11, 'Deck The Halls', 'https://www.youtube.com/embed/c5-XelVYdWw', 'https://i1.sndcdn.com/artworks-oWHSSMvmAp0uG20x-S6BWew-t500x500.jpg'),
(12, 'All', 'https://www.youtube.com/embed/Ff7cy4yjE9c', 'https://m.media-amazon.com/images/I/61opvz61ZqL.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user_form`
--

INSERT INTO `user_form` (`id`, `username`, `email`, `password`, `image`) VALUES
(1, 'test', 'test@gmail.com', '123', ''),
(2, 'thangle', 'thangle@gmail.com', '123', ''),
(3, 'rider', 'rider@gmail.com', '123', ''),
(4, 'rider1', 'rider1@gmail.com', '1', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_form`
--
ALTER TABLE `admin_form`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lesson_db`
--
ALTER TABLE `lesson_db`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Chỉ mục cho bảng `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_form`
--
ALTER TABLE `admin_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `lesson_db`
--
ALTER TABLE `lesson_db`
  MODIFY `lesson_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
