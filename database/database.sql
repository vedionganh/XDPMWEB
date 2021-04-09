-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th3 25, 2021 lúc 06:28 PM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `danhmuc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tendm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`danhmuc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`danhmuc_id`, `tendm`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, 'Áo nam', 1, NULL, NULL),
(2, 'Áo nữ', 1, NULL, NULL),
(3, 'Áo nam', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietorder`
--

DROP TABLE IF EXISTS `chitietorder`;
CREATE TABLE IF NOT EXISTS `chitietorder` (
  `chitiet_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`chitiet_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietorder`
--

INSERT INTO `chitietorder` (`chitiet_id`, `order_id`, `product_id`, `ten`, `gia`, `soluong`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Ao gucci', '1000000', 1, NULL, NULL),
(2, 5, 1, 'Ao gucci', '1000000', 8, NULL, NULL),
(3, 6, 1, 'Ao gucci', '1000000', 5, NULL, NULL),
(4, 7, 2, 'Galaxy Note 20 Ultra', '66666666', 6, NULL, NULL),
(5, 7, 1, 'Ao gucci', '1000000', 6, NULL, NULL),
(6, 8, 1, 'Ao gucci', '1000000', 6, NULL, NULL),
(7, 9, 2, 'Galaxy Note 20 Ultra', '66666666', 5, NULL, NULL),
(8, 9, 1, 'Ao gucci', '1000000', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `khachhang_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tenkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`khachhang_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`khachhang_id`, `tenkh`, `email`, `matkhau`, `sdt`, `created_at`, `updated_at`) VALUES
(1, 'Sinhpro', '1@gmail.com', '12345', '0999999999', NULL, NULL),
(2, 'Sinhpro', '1@gmail.com', '12345', '0999999999', NULL, NULL),
(3, 'Sinhpro', '1@gmail.com', '12345', '0999999999', NULL, NULL),
(4, 'ABC', '1@gmail.com', '12345', '0999999999', NULL, NULL),
(5, 'ABCd', '1@gmail.com', '1', '0999999999', NULL, NULL),
(6, 'aiaiai', '1@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0999999999', NULL, NULL),
(7, '12345', '1@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0999999999', NULL, NULL),
(8, 'Sinhpro', '1@gmail.com', '202cb962ac59075b964b07152d234b70', '0999999999', NULL, NULL),
(9, 'Sinhpro', '1@gmail.com', '182be0c5cdcd5072bb1864cdee4d3d6e', '3', NULL, NULL),
(10, 'Sinhpro', '1@gmail.com', '202cb962ac59075b964b07152d234b70', '0999999999', NULL, NULL),
(11, 'Sinhpro', '1@gmail.com', 'c73d8b2fee1f2a10920a097aa0c5d9de', '0999999999', NULL, NULL),
(12, 'Sinhpro', '1@gmail.com', '0ba7bc92fcd57e337ebb9e74308c811f', '0999999999', NULL, NULL),
(13, 'Sinhpro', '1@gmail.com', '50f84daf3a6dfd6a9f20c9f8ef428942', '0999999999', NULL, NULL),
(14, 'Sinhpro', '1@gmail.com', 'bcbe3365e6ac95ea2c0343a2395834dd', '1111', NULL, NULL),
(15, 'Sinhpro', '1@gmail.com', '670da91be64127c92faac35c8300e814', '0999999999', NULL, NULL),
(16, 'Sinhpro', '1@gmail.com', '3d2172418ce305c7d16d4b05597c6a59', '22222', NULL, NULL),
(17, 'Sinhpro', '1@gmail.com', 'fb178856053c44d0b7d91d23ffa52364', '8888', NULL, NULL),
(18, '12345', '1@gmail.com', '11ddbaf3386aea1f2974eee984542152', '8888', NULL, NULL),
(19, 'Sinhpro', '1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1234', NULL, NULL),
(20, 'aiaiai', '1@gmail.com', 'ce9e8dc8a961356d7624f1f463edafb5', '1111111', NULL, NULL),
(21, '12345', '1@gmail.com', 'c072e7be7251f59d80f7e33d2c8cd480', '111111', NULL, NULL),
(22, 'Sinhpro1', '1@gmail.com', '202cb962ac59075b964b07152d234b70', '1111111', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2021_03_17_140422_create_tbl_admin_table', 1),
(19, '2021_03_17_184910_create_category', 1),
(24, '2021_03_18_021151_create_product', 2),
(25, '2021_03_21_190747_khachhang', 2),
(27, '2021_03_21_202247_ttkh', 3),
(40, '2021_03_23_171804_thanhtoan', 4),
(41, '2021_03_23_171918_order', 4),
(42, '2021_03_23_172037_chitietorder', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `khachhang_id` int(11) NOT NULL,
  `thanhtoan_id` int(11) NOT NULL,
  `tienorder` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhtrang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`order_id`, `khachhang_id`, `thanhtoan_id`, `tienorder`, `tinhtrang`, `created_at`, `updated_at`) VALUES
(1, 21, 5, '1,210,000', 'dang xu li', NULL, NULL),
(2, 21, 6, '1,210,000', 'dang xu li', NULL, NULL),
(3, 21, 7, '0', 'dang xu li', NULL, NULL),
(4, 21, 8, '0', 'dang xu li', NULL, NULL),
(5, 21, 9, '9,680,000', 'dang xu li', NULL, NULL),
(6, 21, 10, '6,050,000', 'dang xu li', NULL, NULL),
(7, 21, 11, '491,259,995', 'dang xu li', NULL, NULL),
(8, 21, 12, '6,000,000', 'dang xu li', NULL, NULL),
(9, 21, 13, '338,333,330', 'dang xu li', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `danhmuc_id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `danhmuc_id`, `ten`, `mota`, `gia`, `hinh`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Ao gucci', 'Hàng quốc tế like new 99%', '1000000', 'jpg3.jpg', 1, NULL, NULL),
(2, 2, 'Galaxy Note 20 Ultra', 'ddd', '66666666', 'jpg78.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `email`, `matkhau`, `ten`, `sdt`, `created_at`, `updated_at`) VALUES
(1, '1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'User', '0909090909', '2021-03-20 09:00:07', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

DROP TABLE IF EXISTS `thanhtoan`;
CREATE TABLE IF NOT EXISTS `thanhtoan` (
  `thanhtoan_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `phuongthuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kichhoat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_ttkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_ttkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_ttkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`thanhtoan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhtoan`
--

INSERT INTO `thanhtoan` (`thanhtoan_id`, `phuongthuc`, `kichhoat`, `ten_ttkh`, `diachi`, `email_ttkh`, `ghichu`, `sdt_ttkh`, `created_at`, `updated_at`) VALUES
(1, '1', 'dang xu li', 'sinh', 'yyyyy', '1@gmail.com', 'ddddd', '0999999999', NULL, NULL),
(2, '1', 'dang xu li', 'sinh', 'yyyyy', '1@gmail.com', 'ddddd', '0999999999', NULL, NULL),
(3, '1', 'dang xu li', 'sinh', 'yyyyy', '1@gmail.com', 'ddddd', '0999999999', NULL, NULL),
(4, '1', 'dang xu li', 'sinh', 'yyyyy', '1@gmail.com', 'ddddd', '0999999999', NULL, NULL),
(5, '1', 'dang xu li', 'sinh', 'yyyyy', '1@gmail.com', 'ddddd', '0999999999', NULL, NULL),
(6, '1', 'dang xu li', 'sinh', 'yyyyy', '1@gmail.com', 'ddddd', '0999999999', NULL, NULL),
(7, '1', 'dang xu li', 'sinh', 'yyyyy', '1@gmail.com', 'ddddd', '0999999999', NULL, NULL),
(8, '1', 'dang xu li', 'sinh', 'yyyyy', '1@gmail.com', 'ddddd', '0999999999', NULL, NULL),
(9, '1', 'dang xu li', 'emlabanoicuanh', 'vietnanm', '23@gmail.com', 'het', '9898989898', NULL, NULL),
(10, '1', 'dang xu li', 'Điền thông tin gửi hàng', 'hahhhhahaha', '1@gmail.com', 'dhushruhruheurhuehrh', '0999999999', NULL, NULL),
(11, '1', 'dang xu li', 'HEOL', 'VN', '23@gmail.com', 'ko co gi', '9898989898', NULL, NULL),
(12, '1', 'dang xu li', 'uui', 'ffff', '1@gmail.com', 'ggggggg', '9000000000000', NULL, NULL),
(13, '1', 'dang xu li', 'heheheh', 'ddddddd', '1@gmail.com', 'ddddadadad', '9898989898', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ttkh`
--

DROP TABLE IF EXISTS `ttkh`;
CREATE TABLE IF NOT EXISTS `ttkh` (
  `ttkh_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten_ttkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_ttkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_ttkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ttkh_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ttkh`
--

INSERT INTO `ttkh` (`ttkh_id`, `ten_ttkh`, `diachi`, `email_ttkh`, `ghichu`, `sdt_ttkh`, `created_at`, `updated_at`) VALUES
(1, 'sinh', 'yyyyy', '1@gmail.com', 'ddddd', '0999999999', NULL, NULL),
(2, 'sinh', 'yyyyy', '123', 'eeeeee', '0999999999', NULL, NULL),
(3, 'sinh', 'ddddd', '1@gmail.com', 'rrrr', '0999999999', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
