-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 11, 2019 lúc 10:07 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `eshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `camera`
--

CREATE TABLE `camera` (
  `cm_id` int(10) UNSIGNED NOT NULL,
  `cm_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cm_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cm_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cm_promotion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cm_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cm_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cm_status` tinyint(4) NOT NULL,
  `cm_type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cm_type_slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `camera`
--

INSERT INTO `camera` (`cm_id`, `cm_name`, `cm_slug`, `cm_description`, `cm_promotion`, `cm_image`, `cm_price`, `cm_status`, `cm_type`, `cm_type_slug`, `product`, `created_at`, `updated_at`) VALUES
(3, 'Máy ảnh KTS Sony Cyber-Shot DSC-H300 20.1MP và Zoom quang 35x (Đen)', 'may-anh-kts-sony-cyber-shot-dsc-h300-201mp-va-zoom-quang-35x-den', '<p><em>Zoom quang học l&ecirc;n đến 35xCảm biến 20.1 MP Super HAD CCDTh&acirc;n m&aacute;y mang phong c&aacute;ch DSLR với giao diện sử dụng dễ d&agrave;ngQuay phim HD (720p)M&agrave;n h&igrave;nh LCD 3.0-inch Clear PhotoC&ocirc;ng nghệ Flash ti&ecirc;n tiếnSản phẩm mới 100%; Gi&aacute; bao gồm VATSản phẩm thương hiệu Sony</em></p>', '20', '3.png', '3590000', 0, 'Máy ảnh kỹ thuật số', 'may-anh-ky-thuat-so', 'camera', '2019-06-09 16:22:23', '2019-06-10 15:24:15'),
(4, 'Máy ảnh Mirrorless Xiaomi Yi M1 (Đen)', 'may-anh-mirrorless-xiaomi-yi-m1-den', '<p><em>Cảm biến: CMOS Micro Four Thirds độ ph&acirc;n giải 20MPISO: 100-25600Tốc độ m&agrave;n trập: 1/400060 gi&acirc;yM&agrave;n h&igrave;nh: LCD 3 inch hỗ trợ cảm ứngQuay phim: 4K 30fps/gi&acirc;y, FullHD 60fps/gi&acirc;yK&iacute;ch thước: 114 x 64 x 34 mm</em></p>', '0', '8.png', '10000000', 0, 'Máy ảnh kỹ thuật số', 'may-anh-ky-thuat-so', 'camera', '2019-06-09 16:24:06', '2019-06-10 15:24:27'),
(5, 'Ống kính Samyang AF 24mm f / 2.8 FE dùng cho SONY', 'ong-kinh-samyang-af-24mm-f-28-fe-dung-cho-sony', '<p><em>Samyang Optics vừa c&ocirc;ng bố chiếc ống k&iacute;nh ti&ecirc;u cự 24mm nhỏ gọn với khả năng AF mới của m&igrave;nh d&agrave;nh cho ống k&iacute;nh Sony Fullframe ng&agrave;m E. Như vậy hiện tại chiếc Samyang AF 24mm F2.8 FE n&agrave;y ch&iacute;nh thức l&agrave; chiếc ống k&iacute;nh c&oacute; khả năng lấy n&eacute;t tự động thứ 5 của Samyang d&agrave;nh cho Sony ng&agrave;m E Full Frame, bao gồm AF 14mm F2.8 FE, AF 35mm F1.4 FE, AF 35mm F2.8 FE v&agrave; AF 50mm F1.4 FE. Theo Samyang th&igrave; họ cho ra đời chiếc ống k&iacute;nh n&agrave;y hướng đến c&aacute;c đối tượng sử dụng c&aacute;c body mới với độ ph&acirc;n giải cao của Sony&hellip;</em></p>', '20', '2.png', '7850000', 0, 'Phụ kiện', 'phu-kien', 'camera', '2019-06-09 16:29:20', '2019-06-10 15:24:38'),
(6, 'Ống kính Samyang AF 24mm F2.8 FE (Fullframe)', 'ong-kinh-samyang-af-24mm-f28-fe-fullframe', '<p><em>D&agrave;nh cho Sony E-MountKhẩu đ&ocirc;: F2.8-F22Cấu tạo 7 thấu k&iacute;nh trong 7 nh&oacute;mSố l&aacute; khẩu: 7Khoảng c&aacute;ch lấy n&eacute;t gần nhất 0.24mG&oacute;c nh&igrave;n 84 độChiều d&agrave;i 37mmTrọng lượng 93gTỉ lệ ph&oacute;ng đại x0.13Đường k&iacute;nh Filter 49mm</em></p>', '0', '4.png', '6800000', 0, 'Phụ kiện', 'phu-kien', 'camera', '2019-06-09 16:30:41', '2019-06-10 15:24:48'),
(7, 'Ống kính Meike 12mm F/2.8 Manual Focus Lens', 'ong-kinh-meike-12mm-f28-manual-focus-lens', '<p><em>Ống k&iacute;nh g&oacute;c si&ecirc;u rộng cho thể loại ảnh phong cảnh v&agrave; kiến tr&uacute;cC&oacute; c&aacute;c ng&agrave;m d&agrave;nh cho Fujffilm, Sony, OlympusTi&ecirc;u cự: 12mmKhẩu độ: F/2.8-22Đường k&iacute;nh filter: 72mmKhoảng c&aacute;ch lấy n&eacute;t gần nhất: 10cm</em></p>', '0', '5.png', '5990000', 0, 'Phụ kiện', 'phu-kien', 'camera', '2019-06-09 16:32:52', '2019-06-10 15:24:59'),
(8, 'Camera Hành Trình Chống Nước ULTRA HD', 'camera-hanh-trinh-chong-nuoc-ultra-hd', '<p><em>&ndash; 4K(3840*2160) 15FPS- 2K(2560*1440)30FPS- 1920*1080 60FPS- 1280*720 60FPS</em></p>', '50', '1.png', '499000', 0, 'Camera hành trình', 'camera-hanh-trinh', 'camera', '2019-06-09 16:38:51', '2019-06-10 15:27:19'),
(10, 'Camera lắp thang máy', 'camera-lap-thang-may', '<p>Kh&ocirc;ng c&oacute; th&ocirc;ng tin</p>', '10', '6.png', '500000', 0, 'Camera an ninh', 'camera-an-ninh', 'camera', '2019-06-10 14:21:58', '2019-06-10 15:43:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cart_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cart_slug` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cart_price` int(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `cart_name`, `type`, `image`, `cart_slug`, `cart_price`, `updated_at`, `created_at`) VALUES
(14, 'LAPTOP ASUS S330FA - EY005T (Trắng bạc)', 'laptop', '13.png', 'laptop-asus-s330fa-ey005t-trang-bac', 18490000, '2019-06-11 07:39:28', '2019-06-11 07:39:28'),
(15, 'LAPTOP HP PRO 440 G6 6FL65PA', 'laptop', '6.png', 'laptop-hp-pro-440-g6-6fl65pa', 24990000, '2019-06-11 07:39:46', '2019-06-11 07:39:46'),
(16, 'PC DELL OPTIPLEX 3060SFF (70166584)', 'computer', '4.png', 'pc-dell-optiplex-3060sff-70166584', 9150000, '2019-06-11 07:50:05', '2019-06-11 07:50:05'),
(17, 'Bàn phím cơ KEYBOARD NEWMEN GM550 RGB LED', 'computer', '14.png', 'ban-phim-co-keyboard-newmen-gm550-rgb-led', 1250000, '2019-06-11 07:59:38', '2019-06-11 07:59:38'),
(18, 'LAPTOP MSI GF63 9SC 071VN GAMING', 'laptop', '7.png', 'laptop-msi-gf63-9sc-071vn-gaming', 24490000, '2019-06-11 08:00:29', '2019-06-11 08:00:29'),
(19, 'Máy tính để bàn AIO HP PRO ONE 600G4', 'computer', '3.png', 'may-tinh-de-ban-aio-hp-pro-one-600g4', 19500000, '2019-06-11 08:04:55', '2019-06-11 08:04:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `computer`
--

CREATE TABLE `computer` (
  `cp_id` int(10) UNSIGNED NOT NULL,
  `cp_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_promotion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_status` tinyint(4) NOT NULL,
  `cp_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_type_slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `computer`
--

INSERT INTO `computer` (`cp_id`, `cp_name`, `cp_slug`, `cp_description`, `cp_promotion`, `cp_image`, `cp_price`, `cp_status`, `cp_type`, `cp_type_slug`, `product`, `created_at`, `updated_at`) VALUES
(2, 'PC DELL VOSTRO 3670MT (VDC42VT370025)', 'pc-dell-vostro-3670mt-vdc42vt370025', '<p>CPU INTEL Core i5 8400 (2.8Ghz, 6C/6T, 9MB)</p>\r\n\r\n<p>DDR4 4GB Bus 2400Mhz (2 slot)</p>\r\n\r\n<p>HDD 1.0TB SATA 7200rpm</p>\r\n\r\n<p>DVD</p>\r\n\r\n<p>Wireless, Bluetooth 4.0</p>\r\n\r\n<p>Ubuntu</p>', '25', '5.png', '11790000', 0, 'DELL', 'dell', 'computer', '2019-06-10 13:38:35', '2019-06-10 15:30:36'),
(3, 'PC DELL OPTIPLEX 3060SFF (70166584)', 'pc-dell-optiplex-3060sff-70166584', '<p>Intel Core i3 8100 (3.6 Ghz, 6MB, 1151V2)</p>\r\n\r\n<p>DDR4 4GB</p>\r\n\r\n<p>HDD 1.0TB 7200rpm</p>\r\n\r\n<p>DVD RW</p>\r\n\r\n<p>Hệ điều h&agrave;nh Linux</p>\r\n\r\n<p>Bảo h&agrave;nh 1 năm</p>', '30', '4.png', '9150000', 0, 'DELL', 'dell', 'computer', '2019-06-10 13:40:07', '2019-06-10 15:30:45'),
(4, 'Máy tính để bàn AIO HP PRO ONE 600G4', 'may-tinh-de-ban-aio-hp-pro-one-600g4', '<p>M&agrave;n h&igrave;nh 21.5&quot; FHD cảm ứng&nbsp;</p>\r\n\r\n<p>CPU Intel Core i3 8100T</p>\r\n\r\n<p>Bộ nhớ: 4GB DDR4-2666/ HDD: 1TB/7200RPM</p>\r\n\r\n<p>WLAN I 9560 ac 2x2 nvP +BT 5 WW</p>\r\n\r\n<p>T&iacute;ch hợp WEBCAM FHD 1080p</p>\r\n\r\n<p>Hệ điều h&agrave;nh: Windows 10 Pro 64 bit</p>\r\n\r\n<p>Tặng k&egrave;m bộ ph&iacute;m chuột c&oacute; d&acirc;y</p>', '20', '3.png', '19500000', 0, 'HP', 'hp', 'computer', '2019-06-10 13:41:16', '2019-06-10 15:30:54'),
(5, 'Bàn phím cơ KEYBOARD NEWMEN GM550 RGB LED', 'ban-phim-co-keyboard-newmen-gm550-rgb-led', '<p>B&agrave;n ph&iacute;m&nbsp;Quang cơ LK 2.0</p>\r\n\r\n<p>Chống nước, chống bụi</p>\r\n\r\n<p>Bề mặt l&agrave; lớp hợp kim nh&ocirc;m&nbsp;</p>\r\n\r\n<p>LED RGB&nbsp;</p>\r\n\r\n<p>Led viền + Led nền</p>\r\n\r\n<p>Keycap lập tr&igrave;nh t&ugrave;y chỉnh nhiều hiệu ứng &aacute;nh s&aacute;ng.</p>', '25', '14.png', '1250000', 0, 'Phụ kiện', 'phu-kien', 'computer', '2019-06-10 15:39:29', '2019-06-10 15:40:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `laptop`
--

CREATE TABLE `laptop` (
  `lt_id` int(10) UNSIGNED NOT NULL,
  `lt_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lt_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lt_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lt_promotion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lt_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lt_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lt_status` tinyint(4) NOT NULL,
  `lt_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lt_type_slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `laptop`
--

INSERT INTO `laptop` (`lt_id`, `lt_name`, `lt_slug`, `lt_description`, `lt_promotion`, `lt_image`, `lt_price`, `lt_status`, `lt_type`, `lt_type_slug`, `product`, `created_at`, `updated_at`) VALUES
(2, 'LAPTOP ACER NITRO 5 AN515 52 51LW', 'laptop-acer-nitro-5-an515-52-51lw', '<p>CPU : Intel Core i5 8300H&nbsp;</p>\r\n\r\n<p>RAM : 8GB DDR4</p>\r\n\r\n<p>HDD : 128GB SSD + 1TB HDD&nbsp;</p>\r\n\r\n<p>VGA : NVIDIA GTX 1050Ti 4GB&nbsp;</p>\r\n\r\n<p>&nbsp;M&agrave;n h&igrave;nh : 15.6&quot; FHD</p>\r\n\r\n<p>OS : Dos</p>', '10', '1.png', '19890000', 0, 'Acer', 'acer', 'laptop', '2019-06-10 13:17:27', '2019-06-10 15:28:54'),
(3, 'LAPTOP DELL INSPIRON N5480A (Đen Trắng)', 'laptop-dell-inspiron-n5480a-den-trang', '<p>CPU: Core i5 8265U</p>\r\n\r\n<p>Ram: 4GB DDR4</p>\r\n\r\n<p>HDD: 1 Terabyte&nbsp;</p>\r\n\r\n<p>M&agrave;n h&igrave;nh: 14 FULL HD&nbsp;</p>\r\n\r\n<p>VGA: Graphics 620</p>\r\n\r\n<p>Os: Window 10&nbsp; 64-bit</p>', '15', '12.png', '19290000', 0, 'DELL', 'dell', 'laptop', '2019-06-10 13:18:26', '2019-06-10 15:34:43'),
(4, 'LAPTOP MSI GF63 9SC 071VN GAMING', 'laptop-msi-gf63-9sc-071vn-gaming', '<p>CPU: Core i5 9300H</p>\r\n\r\n<p>Ram: 8GB DDR4</p>\r\n\r\n<p>SSD: 256 GB&nbsp;</p>\r\n\r\n<p>M&agrave;n h&igrave;nh: 15.6&quot; FHD&nbsp;</p>\r\n\r\n<p>VGA: NVIDIA GTX 1650 4GB</p>\r\n\r\n<p>Os: Window 10&nbsp; home 64bit</p>', '20', '7.png', '24490000', 0, 'MSI', 'msi', 'laptop', '2019-06-10 13:19:45', '2019-06-10 15:36:05'),
(5, 'LAPTOP HP PRO 440 G6 6FL65PA', 'laptop-hp-pro-440-g6-6fl65pa', '<p>CPU: Core i7 8565U</p>\r\n\r\n<p>RAM: 8GB DDR4</p>\r\n\r\n<p>HDD: 1TB + 128GB SSD</p>\r\n\r\n<p>VGA: NVIDIA MX130 2GB</p>\r\n\r\n<p>M&agrave;n h&igrave;nh: 14&quot; FHD</p>\r\n\r\n<p>OS: FreeDos</p>', '10', '6.png', '24990000', 0, 'HP', 'hp', 'laptop', '2019-06-10 13:20:59', '2019-06-10 15:29:30'),
(6, 'LAPTOP ASUS UX333FN A4125T (Vỏ nhôm)', 'laptop-asus-ux333fn-a4125t-vo-nhom', '<p>CPU: Core i5 8265U</p>\r\n\r\n<p>RAM: 8GB LPDDR3</p>\r\n\r\n<p>&nbsp;HDD: 512GB SSD</p>\r\n\r\n<p>VGA: Nvidia MX150 2GB</p>\r\n\r\n<p>M&agrave;n h&igrave;nh: 13.3&quot; FHD</p>\r\n\r\n<p>OS: Windows 10 SL</p>', '10', '11.png', '25490000', 0, 'ASUS', 'asus', 'laptop', '2019-06-10 13:22:12', '2019-06-10 15:35:17'),
(7, 'LAPTOP DELL VOSTRO 5581 - VRF6J1', 'laptop-dell-vostro-5581-vrf6j1', '<p>CPU: Core i5 8265U</p>\r\n\r\n<p>RAM: 4GB DDR4&nbsp;</p>\r\n\r\n<p>HDD: 1TB&nbsp;</p>\r\n\r\n<p>VGA: NVIDIA MX130 2GB</p>\r\n\r\n<p>M&agrave;n h&igrave;nh: 15.6&quot; FHD&nbsp;</p>\r\n\r\n<p>OS: Windows 10 Home&nbsp;</p>', '20', '10.png', '18790000', 0, 'DELL', 'dell', '', '2019-06-10 13:23:26', '2019-06-10 15:29:52'),
(8, 'LAPTOP ASUS S330FA - EY005T (Trắng bạc)', 'laptop-asus-s330fa-ey005t-trang-bac', '<p>&nbsp;CPU: Core i5 8265U</p>\r\n\r\n<p>RAM: 8GB LPDDR3</p>\r\n\r\n<p>HDD: 256G SSD&nbsp;</p>\r\n\r\n<p>VGA: Graphics 620</p>\r\n\r\n<p>M&agrave;n h&igrave;nh: 13.3&quot; FHD&nbsp;</p>\r\n\r\n<p>OS: Windows 10 64bit</p>', '15', '13.png', '18490000', 0, 'ASUS', 'asus', 'laptop', '2019-06-10 13:26:47', '2019-06-10 15:34:18'),
(9, 'LAPTOP HP PAVILION 15 CS2034TU 6YZ06PA', 'laptop-hp-pavilion-15-cs2034tu-6yz06pa', '<p>CPU: Core i5 8265U</p>\r\n\r\n<p>RAM: 4GB DDR4</p>\r\n\r\n<p>HDD: 1TB</p>\r\n\r\n<p>VGA: Graphics 620</p>\r\n\r\n<p>M&agrave;n h&igrave;nh: 15.6&quot; FHD</p>\r\n\r\n<p>OS: Windows 10 64 bits</p>', '15', '6.png', '15490000', 0, 'HP', 'hp', 'laptop', '2019-06-10 13:28:38', '2019-06-10 15:30:13'),
(10, 'BALO LAPTOP TARGUS DYNAMIC TSB822 (15.6 inch)', 'balo-laptop-targus-dynamic-tsb822-156-inch', '<p>Ba l&ocirc; năng động Targus 15.6 th&agrave;nh phố kết hợp thiết kế v&agrave; chức năng cho việc đi lại trong th&agrave;nh phố h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Được thiết kế để chịu được việc sử dụng h&agrave;ng ng&agrave;y nghi&ecirc;m ngặt, vỏ m&aacute;y c&oacute; khả năng chống thấm nước, chống m&agrave;i m&ograve;n v&agrave; chống nước để bảo vệ nội dung của bạn b&ecirc;n trong;</p>\r\n\r\n<p>Trong khi thiết kế bảng điều khiển đệm lưng lưu th&ocirc;ng kh&ocirc;ng kh&iacute;, tay cầm c&oacute; đệm v&agrave; d&acirc;y đeo vai cho ph&eacute;p mang lại sự thoải m&aacute;i v&agrave; ổn định.</p>\r\n\r\n<p>Ba l&ocirc; được đ&oacute;ng g&oacute;i với thiết kế phong ph&uacute; đặc trưng để bảo vệ mọi thứ đi trong đ&oacute;.</p>\r\n\r\n<p>Mang theo m&aacute;y t&iacute;nh x&aacute;ch tay v&agrave; m&aacute;y t&iacute;nh bảng của bạn b&ecirc;n trong c&aacute;c hộp đựng đồng chuy&ecirc;n dụng, ngăn ngừa trầy xước khi di chuyển.</p>', '20', '2.png', '1690000', 0, 'Phụ kiện', 'phu-kien', 'laptop', '2019-06-10 14:26:55', '2019-06-10 15:30:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_15_082446_ss_users', 1),
(4, '2019_04_15_082626_ss_categories', 1),
(5, '2019_04_20_165332_ss_contacts', 1),
(6, '2019_05_13_101654_ss_product_table', 1),
(7, '2019_06_09_160738_create_laptop_table', 1),
(8, '2019_06_09_160806_create_computer_table', 1),
(9, '2019_06_09_160821_create_camera_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ss_users`
--

CREATE TABLE `ss_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ss_users`
--

INSERT INTO `ss_users` (`id`, `email`, `name`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'admin', '$2y$10$yibFnwBZj2A8Hs8BMwu.aebGNt9fQJQ9MntVJ1kABgg1lKxe7GwMy', 1, 'yGZrpMvEsHRhHNZgHtbsWCDUPimtDaexJ9UJT98v1UJJq0Dr5QtkhGHvuU3A', NULL, NULL),
(2, 'nqduc74@gmail.com', 'Quang Đức', '$2y$10$v.pdYbbPxWObz9YgbtOf4e6k9FUGoW.yNMflEyRSnyl5My0vVYXbe', 1, 'syBJ38YpzS0LKqKbIadzkD7T3CofPsVdLUbA4TLLYO6aJNsVVZHaR6ailgtD', NULL, NULL),
(3, 'nhanvien@gmail.com', 'Nhân viên', '$2y$10$YUoaE43Z.FiNRhVTbIzhOOd0quyfvxV4XvHOfYfx3aMTMRHRWVL/a', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`cm_id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`cp_id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`lt_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `ss_users`
--
ALTER TABLE `ss_users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `camera`
--
ALTER TABLE `camera`
  MODIFY `cm_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `computer`
--
ALTER TABLE `computer`
  MODIFY `cp_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `laptop`
--
ALTER TABLE `laptop`
  MODIFY `lt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `ss_users`
--
ALTER TABLE `ss_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
