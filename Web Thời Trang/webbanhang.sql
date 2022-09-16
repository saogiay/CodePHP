-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th9 16, 2022 lúc 05:56 AM
-- Phiên bản máy phục vụ: 10.5.16-MariaDB
-- Phiên bản PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id17937054_webbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `deleted`) VALUES
(1, 'JACKETS', 0),
(19, 'TROUSERS', 0),
(20, 'ACCESSORIES', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `firstname`, `lastname`, `email`, `phone`, `subject_name`, `note`, `created_at`, `updated_at`, `status`) VALUES
(4, '', '', 'hoangngocdai2001@gmail.com', '(+84) 944863136', 'okok', 'kkkk', '2021-11-13 04:00:00', '2021-11-13 04:00:00', 0),
(5, 'nam', 'hoang', 'admin@gmail.com', '(+84) 944863136', 'okokooo', 'lllll', '2021-11-13 04:00:54', '2021-11-13 04:00:54', 0),
(15, 'nam', 'lê', 'admin@gmail.com', '(+84) 944863136', 'đã xong', 'chất lượng', '2021-11-13 05:08:57', '2021-11-13 05:08:57', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `img` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fullname`, `email`, `phone`, `address`, `note`, `order_date`, `status`, `total_money`) VALUES
(15, 42, 'ad', 'ad@gmail.com', '09183472', 'HÀ NỘI', 'hhhh', '2021-11-29 15:52:24', 0, 800000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `price`, `num`, `total_money`) VALUES
(27, 15, 57, 800000, 1, 800000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `thumbnail` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `price`, `discount`, `thumbnail`, `description`, `created_at`, `updated_at`, `deleted`) VALUES
(57, 19, 'Worsted Proper Trouser', 1000000, 800000, 'assets/image/quan1.jpg', '<p>cotton</p>', '2021-11-29 15:59:22', '2021-11-29 16:05:25', 0),
(58, 1, 'Linen Granddad Shirt', 900000, 850000, 'assets/image/ao1.jpg', '<p><span style=\"color: rgb(85, 85, 85); font-family: &quot;ITC Berkeley Old Style&quot;, serif; font-size: 17px; text-align: center;\">Work jacket, made in London, with cotton sail-cloth — a hard-wearing but soft canvas — from Scotland, and horn buttons from the Midlands. The work jacket fits true to size — but note that it is one of the more short jacket styles in these parts. This is cotton, but with elements like the sleeve-lining and the buttons which are not. As such, it is best washed by hand in lukewarm water, or dry cleaned. If a washing machine must be used, a cold wash and no tumble-drying is the only option. Bonus points may be earned by using one of those clever washing potions designed for hydrophobic materials.</span><br></p>', '2021-11-29 16:05:16', '2021-11-29 16:05:16', 0),
(59, 19, 'Airweave Proper Trouser', 700000, 500000, 'assets/image/quan2.jpg', '<p><span style=\"color: rgb(85, 85, 85); font-family: &quot;ITC Berkeley Old Style&quot;, serif; font-size: 17px; text-align: center;\">Trouser with a fairly narrow leg, made in London, with a grey corduroy from Lancashire, and dark horn buttons from the Midlands. If in doubt with sizing, ignore what your current trousers say they are, and measure them instead. Lay them out flat, run the tape-measure from one side of the waistband to the other, and then double it. The trouser fits small in thick materials like this corduroy. Best go up a size, and make use of the cinch, if even vaguely between sizes. These trousers are cotton, but with elements such as the lining and the buttons which are not. As such, they are best washed by hand in lukewarm water, or gently dry-cleaned. If a machine must be used, cold water and no tumble-drying is the only way to go.</span><br></p>', '2021-11-29 16:05:47', '2021-11-29 16:05:47', 0),
(60, 19, 'Worsted Proper Trouser', 650000, 600000, 'assets/image/quan3.jpg', '<p><span style=\"color: rgb(85, 85, 85); font-family: &quot;ITC Berkeley Old Style&quot;, serif; font-size: 17px; text-align: center;\">Trouser with a leg of middling width, made in London, with heavy corduroy from Lancashire, and dark horn buttons from the West Midlands. If in doubt with sizing, ignore what your current trousers say they are, and measure them instead. Lay them out flat, run the tape-measure from one side of the waistband to the other, and then double it. That\'s your size. For those of taller stature, the leg may be lengthened by a further 1½ inches by letting down the hem — taking the total to 33½. These trousers are cotton, yes, but with elements such as the lining and the buttons which are not. As such, they are best washed by hand in lukewarm water, or gently dry-cleaned. If a machine must be used, cold water and no tumble-drying is the only way to go.</span><br></p>', '2021-11-29 16:42:49', '2021-11-29 16:42:49', 0),
(61, 1, 'Cotton Canvas Work', 1200000, 1000000, 'assets/image/ao2.jpg', '<p><span style=\"color: rgb(85, 85, 85); font-family: &quot;ITC Berkeley Old Style&quot;, serif; font-size: 17px; text-align: center;\">Work jacket, made in London, with cotton sail-cloth — a hard-wearing but soft canvas — from Scotland, and horn buttons from the Midlands. The work jacket fits true to size — but note that it is one of the more short jacket styles in these parts. This is cotton, but with elements like the sleeve-lining and the buttons which are not. As such, it is best washed by hand in lukewarm water, or dry cleaned. If a washing machine must be used, a cold wash and no tumble-drying is the only option. Bonus points may be earned by using one of those clever washing potions designed for hydrophobic materials.</span><br></p>', '2021-11-29 16:36:50', '2021-11-29 16:36:50', 0),
(62, 1, 'Aiwe Granddad Jacket', 840000, 800000, 'assets/image/ao4.jpg', '<p><span style=\"color: rgb(85, 85, 85); font-family: &quot;ITC Berkeley Old Style&quot;, serif; font-size: 17px; text-align: center;\">Flight jacket, made in London, with wool overcoating from Somerset, cotton sail-canvas from Scotland, a lining of melton from West Yorkshire, and horn buttons from the Midlands. Go up a size. This is designed to be a close-fitting jacket, drawn in at the waist. This, plus the fact that this particular version is made with very heavy cloth means up is the only way to go.</span><br></p>', '2021-11-29 16:01:52', '2021-11-29 16:01:52', 0),
(63, 20, 'FUR FELT HAT', 400000, 200000, '', '<p><span style=\"color: rgb(85, 85, 85); font-family: &quot;ITC Berkeley Old Style&quot;, serif; font-size: 17px; text-align: center;\">Hat — which may be shaped into many different styles — made in south-east England, from brown fur-felt and a lining of leather and satin. Not sure which size you need? The answer lies in measuring around your head at its widest point.</span><br></p>', '2021-11-29 16:27:56', '2021-11-29 16:58:02', 1),
(64, 20, 'FUR FELT HAT', 400000, 200000, '', '<p><span style=\"color: rgb(85, 85, 85); font-family: &quot;ITC Berkeley Old Style&quot;, serif; font-size: 17px; text-align: center;\">Hat — which may be shaped into many different styles — made in south-east England, from brown fur-felt and a lining of leather and satin. Not sure which size you need? The answer lies in measuring around your head at its widest point.</span><br></p>', '2021-11-29 16:26:57', '2021-11-29 16:58:05', 1),
(65, 20, 'FUR FELT HAT', 400000, 200000, 'assets/image/phukien1.jpg', '<p><span style=\"color: rgb(85, 85, 85); font-family: \"ITC Berkeley Old Style\", serif; font-size: 17px; text-align: center;\">Hat — which may be shaped into many different styles — made in south-east England, from brown fur-felt and a lining of leather and satin. Not sure which size you need? The answer lies in measuring around your head at its widest point.</span><br></p>', '2021-11-29 16:47:57', '2021-11-29 16:27:58', 0),
(66, 1, 'CANOPY MAJOR PARKA', 2000000, 1500000, 'assets/image/ao6.jpg', '<p><span style=\"color: rgb(85, 85, 85); font-family: &quot;ITC Berkeley Old Style&quot;, serif; font-size: 17px; text-align: center;\">Parka, made in London, with heavy weatherproof cotton from Scotland, horn buttons from the Midlands, and a sand-cast brass buckle, likewise from the Midlands. The parka fits true to size — but heed the fact that this is a big, commanding coat, which is intended to envelope all it surveys. Thus, if you prefer a snugger fit, then go down a size. This is cotton, but with elements like the sleeve-lining and the press-studs which are not. As such, it is best washed by hand in lukewarm water, or dry cleaned. If a machine must be used, a cold wash and no tumble-drying is the only option.</span><br></p>', '2021-11-29 17:00:00', '2021-11-29 17:00:00', 0),
(67, 1, 'CANOPY WORK JACKET', 760000, 700000, 'assets/image/ao4.jpg', '<p><span style=\"color: rgb(85, 85, 85); font-family: &quot;ITC Berkeley Old Style&quot;, serif; font-size: 17px; text-align: center;\">Work jacket, made in London, with cotton sail-cloth — a hard-wearing but soft canvas — from Scotland, and horn buttons from the Midlands. The work jacket fits true to size — but note that it is one of the more short jacket styles in these parts. This is cotton, but with elements like the sleeve-lining and the buttons which are not. As such, it is best washed by hand in lukewarm water, or dry cleaned. If a washing machine must be used, a cold wash and no tumble-drying is the only option. Bonus points may be earned by using one of those clever washing potions designed for hydrophobic materials.</span><br></p>', '2021-11-29 17:10:01', '2021-11-29 17:10:01', 0),
(68, 1, 'CANVAS DONKEY JACKET', 3000000, 2800000, 'assets/image/ao7.jpg', '<p><span style=\"color: rgb(85, 85, 85); font-family: &quot;ITC Berkeley Old Style&quot;, serif; font-size: 17px; text-align: center;\">Donkey jacket, made in London, with both rain-proof cotton and cotton sail-canvas from Scotland, and horn buttons from the Midlands. The jacket fits true to size, and thus the mannequin here — as standard a size 38 chest as you will ever find — is wearing a size S. This is cotton, but with elements like the sleeve-lining and the buttons which are not. As such, it is best washed by hand in lukewarm water, or dry cleaned. If a washing machine must be used, a cold wash and no tumble-drying is the only option. Bonus points may be earned by using one of those clever washing potion designed for hydrophobic materials.</span><br></p>', '2021-11-29 17:36:02', '2021-11-29 17:36:02', 0),
(69, 19, 'TWILL SLIM TROUSER', 400000, 350000, 'assets/image/quan5.jpg', '<p><span style=\"color: rgb(85, 85, 85); font-family: &quot;ITC Berkeley Old Style&quot;, serif; font-size: 17px; text-align: center;\">Trouser with a fairly narrow leg, made in London, with brushed cotton-twill from Lancashire, and dark horn buttons and a stone-cast brass buckle from the West Midlands. If in doubt with sizing, ignore what your current trousers say they are, and measure them instead. Lay them out flat, run the tape-measure from one side of the waistband to the other, and then double it. For those of taller stature, the leg may be lengthened by a further 1½ inches by letting down the hem — taking the total to 33½. These trousers are cotton, but with elements such as the lining and the buttons which are not. As such, they are best washed by hand in lukewarm water, or gently dry-cleaned. If a machine must be used, cold water and no tumble-drying is the only way to go.</span><br></p>', '2021-11-29 17:14:06', '2021-11-29 17:14:06', 0),
(70, 20, 'DEERSKIN GLOVES', 500000, 450000, 'assets/image/phukien2.jpg', '<p><span style=\"color: rgb(85, 85, 85); font-family: &quot;ITC Berkeley Old Style&quot;, serif; font-size: 17px; text-align: center;\">Gloves, handmade in the south-west of England, with brown deerskin, and a lining of natural-colour cashmere from the Scottish Borders. To work out your size, measure around your hand at its widest point — thumb excluded.</span><br></p>', '2021-11-30 01:55:07', '2021-11-30 01:55:07', 0),
(71, 20, 'LAMBSWOOL SCARF', 630000, 600000, 'assets/image/phukien3.jpg', '<p><span style=\"color: rgb(85, 85, 85); font-family: &quot;ITC Berkeley Old Style&quot;, serif; font-size: 17px; text-align: center;\">Scarf, made in the south-west of the Isles, with one half a lambswool tuck-stitch of light and mid-blue, and the other half mid and dark blue. The scarf is 7\" wide and 47\" long — which is enough to go around once, and with a loose knot tied at the front.</span><br></p>', '2021-11-30 01:31:09', '2021-11-30 01:31:09', 0),
(72, 19, 'LINEN HOPSACK SHORTS', 550000, 500000, 'assets/image/quan4.jpg', '<p><span style=\"color: rgb(85, 85, 85); font-family: &quot;ITC Berkeley Old Style&quot;, serif; font-size: 17px; text-align: center;\">horts — quite long shorts, please note — made in London, with a hopsack of cotton and linen from a mill in Lancashire, and with horn buttons and a brass buckle from the Midlands. If in doubt with sizing, ignore what your current shorts say they are, and measure them instead. Lay them out flat, run the tape-measure from one side of the waistband to the other, and then double it.</span><br></p>', '2021-11-30 01:00:11', '2021-11-30 01:00:11', 0),
(73, 20, 'LEATHER SPECTACLE CASE', 460000, 400000, 'assets/image/phukien4.jpg', '<p><span style=\"color: rgb(85, 85, 85); font-family: &quot;ITC Berkeley Old Style&quot;, serif; font-size: 17px; text-align: center;\">Case for spectacles or sunglasses, made in London, with bark-brown vegetable-tan leather, and an antique-brass Sam Brown fastening. The case fits average-size opticals, with a length of 6\", a height of 2.4\", and a depth of 1\".</span><br></p>', '2021-11-30 01:26:12', '2021-11-30 01:26:12', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tokens`
--

CREATE TABLE `tokens` (
  `USER_id` int(11) NOT NULL,
  `token` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tokens`
--

INSERT INTO `tokens` (`USER_id`, `token`, `created_at`) VALUES
(3, '0a48e892a8de75a07118bbaf59f46924', '2021-11-02 13:50:22'),
(3, '4fe938c9ca00f4b9213d08c6b6dace3b', '2021-11-02 10:52:36'),
(3, '5274a3ed7ca4bc9db8aa111e08d64d81', '2021-11-02 13:42:56'),
(3, '8e442800e1454ce41d1d0b49ea6cc9ab', '2021-11-02 11:00:17'),
(7, '112f133921e222f72c016c301c29c115', '2021-11-28 16:19:13'),
(7, '1cf6a8c0e5feb02a4b508e6e0e9a7a11', '2021-11-28 16:52:02'),
(7, '446e18faae840bb71d2da3c1979562f4', '2021-11-26 15:02:57'),
(7, '4fdba8e346094056c72541e9afd1a8c7', '2021-11-28 16:39:22'),
(7, '7139b849976dee248ea979e63c8e873c', '2021-11-07 15:21:15'),
(7, '7fd9c8cc59497d538b66aee7949d732f', '2021-11-02 15:38:03'),
(7, 'a5e4b8fbaf4f50e2afb38bad92f4bba1', '2021-11-02 15:38:35'),
(7, 'a94193c962f9f62c079d3dfa637267fc', '2021-11-02 15:35:13'),
(7, 'b7cd0992bdf9e7d28cb2744c9a47e775', '2021-11-07 15:34:10'),
(7, 'c52705480b500780d44a3dbd9a68b225', '2021-11-28 15:59:17'),
(7, 'db868604dbe7a40bed83c5bd78094f9d', '2021-11-29 08:15:32'),
(7, 'e8187abab7971347749a51774bb574b4', '2021-11-07 15:19:47'),
(7, 'f8936987a78c1802ae12ca602c022e19', '2021-11-26 15:01:22'),
(9, '066738fb1ad6821ae104c19f697c2ce6', '2021-11-28 16:12:09'),
(9, '1d12466f3561d9553dd3e1733546668f', '2021-11-28 16:48:25'),
(9, '3d56195aeb2f876037d2bc19d8d3c944', '2021-11-28 16:31:15'),
(9, '5ab7879b979260184a38b228b651b188', '2021-11-28 16:30:56'),
(9, '7c2f3324c608dac6a0d1f97cc71ad8e6', '2021-11-28 16:19:30'),
(9, '865ff6a3025ce5595ba6f971abfd8922', '2021-11-26 15:03:21'),
(9, 'd7e3260c1ad330ff94279d59d31b3d0d', '2021-11-07 15:34:50'),
(10, '3d471b39b4f7b45054dfc564df5bf5ba', '2021-11-26 14:38:34'),
(10, '4a45c915d46191da2a3fda1fe5f46d88', '2021-11-26 14:38:09'),
(10, '5ab051c578959ec2997c8ce44e20c81a', '2021-11-07 16:11:35'),
(10, '5e3b4b639f7892ef9b9468faee779c27', '2021-11-12 09:15:38'),
(10, '689e4cfe31faea8cb300e5dbe2b0220d', '2021-11-19 15:27:00'),
(10, '9a6fe776bbfff27540d5e18045fa1627', '2021-11-26 14:27:20'),
(10, 'acb0c6999961df8a7fecab961f2e72a1', '2021-11-11 12:22:43'),
(10, 'd65bc0f9a23421302084d28b4bf6cd2b', '2021-11-12 17:24:52'),
(42, 'c313fa0e0f8d966bfc2d9032a34ff97c', '2021-11-29 09:57:08'),
(42, 'd8eef44e1b5ee950480abe1e06f256ca', '2021-11-29 14:24:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `thumbnail1` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `phone`, `address`, `password`, `role_id`, `thumbnail1`, `deleted`, `created_at`, `updated_at`) VALUES
(3, 'Nguyễn Đức Anh Cường', 'cuong2k1@gmail.com', '01647048824', 'Ứng Hòa', 'aa7ce63a53e2b74e37bf83731625cd6d', 2, 'assets/image/dino-studio-anh-vien-cho-be-va-gia-dinh-317623.jpg', 0, '2021-11-02 03:11:33', '2021-11-29 09:06:32'),
(4, 'Cường Nguyễn', 'cuong@gmail.com', '12431254', 'HN', 'aa7ce63a53e2b74e37bf83731625cd6d', 2, 'assets/image/chup-anh-the-da-nang-1.jpg', 0, '2021-11-02 03:11:47', '2021-11-29 09:06:55'),
(5, 'Cường Nguyễn', 'cuong22@gmail.com', NULL, NULL, '0cc7281b1f8467c4ede8219d7ae27c51', 2, '', 1, '2021-11-02 04:55:42', '2021-11-02 16:07:06'),
(6, 'Ngọc Đại', 'Dai@gmail.com', '0969688924', 'TH', 'aa7ce63a53e2b74e37bf83731625cd6d', 2, 'assets/image/ngo-ngang-voi-ve-dep-cua-hot-girl-anh-the-chua-tron-18-docx-1622043349706.jpeg', 0, '2021-11-02 10:02:26', '2021-11-29 09:07:10'),
(7, 'Cương', 'pc0147258@gmail.com', '01647048824', 'Ứng Hòa', 'aa7ce63a53e2b74e37bf83731625cd6d', 1, 'assets/image/mau-anh-the-dep-lam-the-can-cuoc.jpg', 0, '2021-11-02 15:35:04', '2021-11-29 09:07:19'),
(9, 'a', 'abcde@gmail.com', '0969688924', 'Ứng Hòa', 'aa7ce63a53e2b74e37bf83731625cd6d', 2, 'assets/image/NOIMAGE.jpg', 0, '2021-11-07 15:34:43', '2021-11-29 09:07:30'),
(10, 'ad', 'smg@gmail.com', '01647048824', 'Ứng Hòa', 'e264d10704a2e0c3f2ae39eb945acafe', 2, '', 1, '2021-11-07 16:11:25', '2021-11-28 19:42:24'),
(41, 'PVC', 'anh01647048824@yahoo.com.vna', '01647048824', 'Ứng Hòa', 'aa7ce63a53e2b74e37bf83731625cd6d', 1, 'assets/image/1-1510967806416.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Hoàng Ngọc Đại', 'dai1@gmail.com', NULL, NULL, 'aa7ce63a53e2b74e37bf83731625cd6d', 2, NULL, 0, '2021-11-29 09:57:05', '2021-11-29 09:57:05');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`USER_id`,`token`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `galery`
--
ALTER TABLE `galery`
  ADD CONSTRAINT `galery_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
