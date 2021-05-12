-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 03, 2021 lúc 09:01 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `image_manager`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `si_admin`
--

CREATE TABLE `si_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `privilege_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `si_admin`
--

INSERT INTO `si_admin` (`id`, `email`, `password`, `username`, `phone`, `privilege_id`) VALUES
(1, 'abc@gmail.com', '123456', 'quang', 372519973, 1),
(2, 'admin@gmail.com', '123456', 'quang', 766458557, 1),
(3, 'quang@gmail.com', '123456', 'quangnp', 372519973, 2),
(13, 'admin123@gmail.com', '101091', 'quang060299', 2147483647, 1),
(14, 'admin456@gmail.com', '123456', 'dnbd', 372519973, 1),
(15, 'admin456@gmail.com', '123456', 'dnbd', 372519973, 1),
(20, 'admin789@gmail.com', '123456789', 'blogmevabe', 372519973, 1),
(21, 'quangnp@gmail.com', 'Q06021999', 'phuong quang', 372519973, 2),
(22, 'admin113@gmail.com', '123456', 'bazang123', 372519973, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `si_col`
--

CREATE TABLE `si_col` (
  `id_col` int(11) NOT NULL,
  `id_image` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `flag_like` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `si_image`
--

CREATE TABLE `si_image` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `id_user` varchar(150) NOT NULL,
  `view` int(11) NOT NULL,
  `like_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `si_image`
--

INSERT INTO `si_image` (`id`, `name`, `description`, `status`, `tag`, `url`, `id_user`, `view`, `like_image`) VALUES
(1, 'anh1 quang', 'anh 123', 1, 'Anime; Sung Jin Woo Anime ', 'uploads/HinhAnh-1611821321.jpg', 'quangnp', 65, 17),
(2, 'anh quan gdep', 'hello', 1, '', 'uploads/anh-anime-hoa-anh-dao_112649042.jpg', '2', 5, 3),
(4, 'anh4', 'hell4', 1, '', 'uploads/HinhAnh-1611857240.png', '4', 3, 0),
(5, 'anh5', 'hêlo5', 1, '', 'uploads/HinhAnh-1611857667.jpg', '5', 30, 31),
(6, 'anh6', 'hello', 1, '', 'uploads/HinhAnh-1611856893.jpg', '6', 0, 0),
(8, 'anh7', 'anh7', 1, '', 'uploads/anh-anime-hoa-anh-dao_112649042.jpg', '7', 0, 0),
(9, 'anh7', 'anh7', 1, '', 'uploads/anh-anime-hoa-anh-dao_112649042.jpg', '7', 1, 0),
(10, 'anh7', 'anh7', 1, '', 'uploads/anh-anime-hoa-anh-dao_112649042.jpg', '7', 0, 0),
(12, 'anh7', 'anh7', 1, '', 'uploads/anh-anime-hoa-anh-dao_112649042.jpg', '7', 0, 0),
(13, 'anh7', 'anh7', 1, '', 'uploads/anh-anime-hoa-anh-dao_112649042.jpg', '7', 0, 0),
(14, 'anh7', 'anh7', 1, '', 'uploads/anh-anime-hoa-anh-dao_112649042.jpg', '7', 0, 0),
(16, 'anh7', 'anh7', 1, '', 'uploads/HinhAnh-1614445614.jpg', '7', 3, 0),
(17, 'anh7', 'anh7', 1, '', 'uploads/HinhAnh-1614445725.jpg', '7', 0, 0),
(18, 'anh7', 'anh7', 1, '', 'uploads/HinhAnh-1614445866.png', '7', 0, 0),
(26, 'anh7', 'anh7', 1, '', 'uploads/HinhAnh-1614446490.jpg', '7', 0, 0),
(28, 'anh7', 'anh7', 0, '', 'uploads/HinhAnh-1614446557.jpg', '7', 0, 0),
(29, 'anh7', 'anh7', 0, '', 'uploads/HinhAnh-1614446585.jpg', '7', 0, 0),
(30, 'anh7', 'anh7', 0, '', 'uploads/HinhAnh-1614446648.jpg', '7', 6, 0),
(31, 'anh7', 'anh7', 0, '', 'uploads/HinhAnh-1614447022.jpg', '7', 0, 0),
(32, 'anh7', 'anh7', 0, '', 'uploads/HinhAnh-1614447033.jpg', '7', 0, 0),
(33, 'anh7', 'anh7', 0, '', 'uploads/HinhAnh-1614447071.png', '7', 0, 0),
(34, 'anh7', 'anh7', 1, '', 'uploads/HinhAnh-1614447089.png', '7', 0, 0),
(35, 'anh7', 'anh7', 1, '', 'uploads/HinhAnh-1614447218.png', '7', 0, 0),
(36, 'anh7', 'anh7', 1, '', 'uploads/HinhAnh-1614447253.jpg', '7', 0, 0),
(37, 'anh7', 'anh7', 1, '', 'uploads/HinhAnh-1614447264.jpg', '7', 0, 0),
(38, 'anh7', 'anh7', 1, '', 'uploads/HinhAnh-1614447279.jpg', '7', 0, 0),
(39, 'anh7', 'anh7', 1, '', 'uploads/HinhAnh-1614447324.jpg', '7', 0, 0),
(40, 'anh7', 'anh7', 1, '', 'uploads/HinhAnh-1614447336.jpg', '7', 0, 0),
(41, 'anh7', 'anh7', 1, '', 'uploads/HinhAnh-1614670957.jpg', '7', 0, 0),
(42, 'anh7', 'anh7', 1, '', 'uploads/HinhAnh-1614671286.jpg', '7', 0, 0),
(43, 'anh7', 'anh7', 1, '', 'uploads/HinhAnh-1614755775.jpg', '7', 0, 0),
(44, 'anh7', 'anh7', 0, '', 'uploads/HinhAnh-1615018147.jpg', '7', 0, 0),
(45, 'anh7', 'anh7', 0, '', 'uploads/HinhAnh-1615018152.jpg', '7', 0, 0),
(46, 'anh7', 'anh7', 1, '', 'uploads/HinhAnh-1615018256.jpg', '7', 0, 0),
(48, 'anh7', 'anh7', 1, '', 'uploads/HinhAnh-1615018876.jpg', '7', 0, 0),
(49, 'anh7', 'anh7', 0, '', 'uploads/HinhAnh-1615018881.jpg', '7', 0, 0),
(50, 'anh8', 'anh8', 1, '', 'uploads/HinhAnh-1615018924.jpg', '7', 2, 0),
(51, 'anh7', 'anh7', 0, '', 'uploads/HinhAnh-1615019213.jpg', '7', 0, 0),
(52, 'anh quang', 'adeffssefs', 1, '', 'uploads/HinhAnh-1615019713.jpg', '7', 0, 0),
(53, 'anh 123233', 'adadadadaa', 1, '', 'uploads/HinhAnh-1615019802.jpg', '7', 1, 0),
(54, 'anh dksflsfsfs', 'sfsfsfsfsfsf', 0, '', 'uploads/HinhAnh-1615019855.jpg', '7', 0, 0),
(55, 'anh8', 'anh8', 0, '', 'uploads/HinhAnh-1615020352.jpg', '7', 0, 0),
(56, 'anh8', 'anh8', 0, '', 'uploads/HinhAnh-1615020394.jpg', '7', 0, 0),
(57, 'ảnh phong cảnh', 'thien nhien;phong canh;song nuoc', 1, 'thien nhien;phong canh; nước; sông nước', 'uploads/HinhAnh-1615430402.jpg', '7', 59, 56),
(58, 'ảnh thiên nhiên ', 'sông nước', 1, 'sông; nước; thiên nhiên', 'uploads/HinhAnh-1615431194.jpg', '7', 23, 0),
(59, 'noname', 'noname1,2,3', 1, 'sky, màu trời', 'uploads/HinhAnh-1616462991.png', '7', 3, 0),
(60, 'anh 123233', 'acsafsfaszfafcaaf', 1, '1; 2', 'uploads/HinhAnh-1616559329.png', '7', 5, 0),
(63, 'ảnh phong cảnh', 'phong canh, thien neenn annhh nen', 1, 'thien nhien; phong canh; bau troi', 'uploads/HinhAnh-1617433028.jpg', '21', 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `si_privilege`
--

CREATE TABLE `si_privilege` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `si_privilege`
--

INSERT INTO `si_privilege` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `si_admin`
--
ALTER TABLE `si_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `si_col`
--
ALTER TABLE `si_col`
  ADD PRIMARY KEY (`id_col`);

--
-- Chỉ mục cho bảng `si_image`
--
ALTER TABLE `si_image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `si_privilege`
--
ALTER TABLE `si_privilege`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `si_admin`
--
ALTER TABLE `si_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `si_col`
--
ALTER TABLE `si_col`
  MODIFY `id_col` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `si_image`
--
ALTER TABLE `si_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `si_privilege`
--
ALTER TABLE `si_privilege`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
