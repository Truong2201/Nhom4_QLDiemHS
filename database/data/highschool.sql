-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 27, 2020 lúc 02:08 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `highschool`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `all`
--

CREATE TABLE `all` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `schoolyear_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `hocluc_id` bigint(20) UNSIGNED NOT NULL,
  `conduct_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class`
--

CREATE TABLE `class` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `malop` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenlop` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siso` int(11) NOT NULL,
  `grade_id` bigint(20) UNSIGNED NOT NULL,
  `schoolyear_id` bigint(20) UNSIGNED NOT NULL,
  `teachers_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `class`
--

INSERT INTO `class` (`id`, `malop`, `tenlop`, `siso`, `grade_id`, `schoolyear_id`, `teachers_id`, `created_at`, `updated_at`) VALUES
(1, '1', '10A', 42, 1, 1, 13, '2020-08-26 08:24:38', '2020-08-27 06:58:08'),
(2, '2', '11A', 55, 2, 1, 1, '2020-08-26 08:24:53', '2020-08-27 06:58:25'),
(3, '3', '12C', 60, 3, 1, 9, '2020-08-26 12:30:39', '2020-08-27 06:58:39'),
(4, '4', '10B', 42, 1, 1, 2, '2020-08-27 06:59:17', '2020-08-27 06:59:17'),
(5, '5', '10C', 60, 1, 1, 3, '2020-08-27 06:59:44', '2020-08-27 06:59:52'),
(6, '6', '12A', 70, 3, 1, 8, '2020-08-27 07:00:24', '2020-08-27 07:00:24'),
(7, '7', '11C', 66, 2, 1, 7, '2020-08-27 07:00:48', '2020-08-27 07:00:48'),
(8, '8', '11B', 80, 2, 1, 5, '2020-08-27 07:05:58', '2020-08-27 07:05:58'),
(9, '9', '12B', 45, 3, 1, 12, '2020-08-27 07:07:09', '2020-08-27 07:07:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `conduct`
--

CREATE TABLE `conduct` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahanhkiem` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `grade`
--

CREATE TABLE `grade` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `makhoi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhoi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `grade`
--

INSERT INTO `grade` (`id`, `makhoi`, `tenkhoi`, `created_at`, `updated_at`) VALUES
(1, '10', 'Khối 10', '2020-08-26 06:34:10', '2020-08-26 06:34:10'),
(2, '11', 'Khối 11', '2020-08-26 06:34:32', '2020-08-26 06:34:32'),
(3, '12', 'Khối 12', '2020-08-26 06:34:42', '2020-08-26 06:34:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocluc`
--

CREATE TABLE `hocluc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahocluc` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantren` int(11) NOT NULL,
  `canduoi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2020_07_29_130205_create_subject_table', 1),
(32, '2019_08_19_000000_create_failed_jobs_table', 2),
(33, '2020_07_10_115048_create_grade_table', 2),
(34, '2020_07_29_130231_create_schoolyear_table', 2),
(35, '2020_07_29_130253_create_semester_table', 2),
(36, '2020_07_29_130308_create_conduct_table', 2),
(37, '2020_07_29_130322_create_hocluc_table', 2),
(38, '2020_07_29_130402_create_teachers_table', 2),
(39, '2020_07_29_130416_create_class_table', 2),
(40, '2020_07_29_130436_create_student_table', 2),
(41, '2020_07_29_130452_create_semester1_table', 2),
(42, '2020_08_25_141056_create_semester2_table', 2),
(43, '2020_08_25_144501_create_userstype_table', 2),
(44, '2020_08_25_144518_create_users_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `schoolyear`
--

CREATE TABLE `schoolyear` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahanhkiem` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `schoolyear`
--

INSERT INTO `schoolyear` (`id`, `mahanhkiem`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'Năm 1', '2020-08-26', '2025-08-26', '2020-08-26 06:33:44', '2020-08-26 06:33:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `semester`
--

CREATE TABLE `semester` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenhocki` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heso` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `semester1`
--

CREATE TABLE `semester1` (
  `id` int(10) UNSIGNED NOT NULL,
  `madiem` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diemcc` int(11) NOT NULL,
  `diemtx` int(11) NOT NULL,
  `diemgk` int(11) NOT NULL,
  `diemck` int(11) NOT NULL,
  `diemtong` int(11) NOT NULL,
  `diemrl` int(11) NOT NULL COMMENT 'rèn luyện',
  `HeSodiemcc` int(11) NOT NULL,
  `HeSodiemtx` int(11) NOT NULL,
  `HeSodiemgk` int(11) NOT NULL,
  `HeSodiemck` int(11) NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `semester2`
--

CREATE TABLE `semester2` (
  `id` int(10) UNSIGNED NOT NULL,
  `madiem` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diemcc` int(11) NOT NULL,
  `diemtx` int(11) NOT NULL,
  `diemgk` int(11) NOT NULL,
  `diemck` int(11) NOT NULL,
  `diemtong` int(11) NOT NULL,
  `diemrl` int(11) NOT NULL COMMENT 'rèn luyện',
  `HeSodiemcc` int(11) NOT NULL,
  `HeSodiemtx` int(11) NOT NULL,
  `HeSodiemgk` int(11) NOT NULL,
  `HeSodiemck` int(11) NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `mahs` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hohs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenhs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `ngaysinh` date NOT NULL,
  `quequan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotencha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nghenghiepcha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotenme` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nghenghiepme` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `mahs`, `hohs`, `tenhs`, `phone`, `gioitinh`, `ngaysinh`, `quequan`, `hotencha`, `nghenghiepcha`, `hotenme`, `nghenghiepme`, `class_id`, `created_at`, `updated_at`) VALUES
(1, '1', 'Vũ Văn', 'Trường', '0969845147', 0, '2000-04-27', 'Tp HCM', 'AS', 'FA', 'SF', 'SQ', 2, '2020-08-26 08:25:25', '2020-08-26 08:25:25'),
(2, '2', 'Vũ', 'Hoàng', '1234567890', 0, '1999-05-22', 'Hà Tĩnh', 'as', 'B', 'C', 'gasd', 1, '2020-08-26 08:26:02', '2020-08-26 08:26:02'),
(3, '3', 'Hoài', 'Linh', '3164987916', 0, '1999-01-14', 'Quảng Nam', 'g', 'as', 's', 'g', 3, '2020-08-26 12:56:23', '2020-08-26 12:56:23'),
(4, '5', 'Trấn', 'Thành', '0131487986', 0, '0085-12-20', 'Hải Phòng', 'a', 'k', 'l', 'o', 2, '2020-08-26 12:57:07', '2020-08-26 13:01:53'),
(5, '6', 'Thị', 'Nguyễn', '0349844167', 1, '1992-02-28', 'Hà Nội', 'q', 'e', 'r', 't', 1, '2020-08-26 12:57:58', '2020-08-26 13:01:20'),
(6, '7', 'Trường', 'Giang', '0289798467', 0, '1986-02-12', 'TpHCM', 'p', 'd', 's', 'a', 3, '2020-08-26 12:59:20', '2020-08-26 13:00:17'),
(7, '4', 'Trần', 'Văn Hùng', '0316878467', 1, '1997-06-21', 'Cà Mau', 'f', 'g', 'h', 'j', 2, '2020-08-26 13:03:11', '2020-08-26 13:03:11'),
(8, '8', 'Phạm Thị', 'Hoa', '0861987469', 1, '1992-02-19', 'Sóc Trăng', 'h', 'n', 'k', 'b', 3, '2020-08-26 13:04:35', '2020-08-26 13:04:35'),
(9, '9', 'Hương', 'Giang', '0648945619', 1, '1991-09-11', 'Vũng Tàu', 'b', 'n', 'm', 'v', 1, '2020-08-26 13:06:00', '2020-08-26 13:06:00'),
(10, '10', 'Thị', 'Lọ', '0156498466', 1, '1992-02-23', 'An Giang', 'a1', 'a2', 'a3', 'a4', 4, '2020-08-27 07:10:09', '2020-08-27 07:10:09'),
(11, '11', 'Nguyễn', 'Trần', '0348946164', 0, '2003-02-22', 'Bạc Liêu', 'a5', 'a6', 'a7', 'a8', 6, '2020-08-27 07:11:37', '2020-08-27 07:11:37'),
(12, '12', 'Thị', 'Đểu', '0156489746', 1, '1999-11-05', 'Bắc Giang', 'a10', 'a11', 'a12', 'a13', 8, '2020-08-27 07:12:28', '2020-08-27 07:12:28'),
(13, '13', 'Hoàn', 'Thiện', '0164789434', 0, '2000-12-05', 'Bắc Kạn', 'b1', 'b2', 'b3', 'b4', 5, '2020-08-27 07:13:42', '2020-08-27 07:13:42'),
(14, '14', 'Nguyễn', 'Huỳnh', '0134897964', 0, '2000-09-10', 'Bắc Ninh', 'b5', 'b6', 'b7', 'b8', 9, '2020-08-27 07:14:35', '2020-08-27 07:14:35'),
(15, '15', 'Cuốn', 'Sáng', '0897615613', 0, '2000-02-19', 'Bình Dương', 'b9', 'b10', 'b11', 'b12', 5, '2020-08-27 07:16:14', '2020-08-27 07:16:14'),
(16, '16', 'Đức', 'Anh', '0164789431', 0, '2000-12-22', 'Ninh Bình', 'c1', 'c2', 'c3', 'c4', 7, '2020-08-27 07:16:54', '2020-08-27 07:16:54'),
(17, '28', 'Nguyễn', 'Nhi', '097515646', 1, '2000-11-10', 'Bến Tre (6868)', 'c5', 'c6', 'c7', 'c8', 6, '2020-08-27 07:17:49', '2020-08-27 07:38:13'),
(18, '18', 'Họ', 'Lê', '0134897615', 1, '2000-02-18', 'Bình Định', 'c9', 'c10', 'c11', 'c12', 5, '2020-08-27 07:19:31', '2020-08-27 07:19:31'),
(19, '19', 'Họ', 'Nguyễn', '0984531677', 1, '2000-01-25', 'Bình Phước', 'd1', 'd2', 'd3', 'd4', 4, '2020-08-27 07:21:21', '2020-08-27 07:21:21'),
(20, '20', 'Trần', 'Luân', '0789161641', 0, '2000-02-22', 'Bình Thuận', 'd5', 'd6', 'd7', 'd8', 6, '2020-08-27 07:22:24', '2020-08-27 07:22:24'),
(21, '21', 'Thanh', 'Thiên', '0613489761', 0, '2000-08-18', 'Gia Lai', 'd9', 'd10', 'd11', 'd12', 8, '2020-08-27 07:23:53', '2020-08-27 07:23:53'),
(22, '22', 'Hồ', 'Thiện', '0163489731', 0, '2000-02-22', 'Đồng Nai', 'e1', 'e2', 'e3', 'e4', 8, '2020-08-27 07:25:15', '2020-08-27 07:25:15'),
(23, '23', 'Công', 'Hùng', '0164897464', 0, '2000-09-12', 'Đồng Tháp', 'e5', 'e6', 'e7', 'e8', 4, '2020-08-27 07:27:03', '2020-08-27 07:27:03'),
(24, '24', 'Trần', 'Quang', '0316498464', 0, '2000-10-09', 'Điện Biên', 'e9', 'e10', 'e11', 'e12', 9, '2020-08-27 07:28:23', '2020-08-27 07:28:23'),
(25, '25', 'Vũ', 'Thế', '0316478925', 0, '2000-10-20', 'Cần Thơ', 'f1', 'f2', 'f3', 'f4', 9, '2020-08-27 07:29:17', '2020-08-27 07:29:17'),
(26, '26', 'An', 'Sương', '0164894615', 1, '2000-01-05', 'Đắk Nông', 'f5', 'f6', 'f7', 'f8', 7, '2020-08-27 07:32:47', '2020-08-27 07:32:47'),
(27, '27', 'Cầu', 'Bình Lợi', '0153489436', 1, '2000-02-20', 'Đà Nẵng', 'f9', 'f10', 'f11', 'f12', 7, '2020-08-27 07:33:42', '2020-08-27 07:33:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subject`
--

CREATE TABLE `subject` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mamon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenmon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotiet` int(11) NOT NULL,
  `heso` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subject`
--

INSERT INTO `subject` (`id`, `mamon`, `tenmon`, `sotiet`, `heso`, `created_at`, `updated_at`) VALUES
(1, 'Toán', 'Toán', 90, 1, NULL, '2020-08-26 11:44:11'),
(2, 'Văn', 'Ngữ Văn', 90, 1, '2020-08-26 11:47:30', '2020-08-26 11:47:30'),
(3, 'Anh', 'Anh Văn', 75, 1, '2020-08-26 11:47:49', '2020-08-26 11:47:49'),
(4, 'Lý', 'Vật Lý', 75, 1, '2020-08-26 11:48:19', '2020-08-26 11:48:19'),
(5, 'Hoá', 'Hoá Học', 75, 1, '2020-08-26 11:48:52', '2020-08-26 11:48:52'),
(6, 'Sinh', 'Sinh Học', 75, 1, '2020-08-26 11:49:45', '2020-08-26 11:49:45'),
(7, 'Sử', 'Lịch Sử', 75, 1, '2020-08-26 11:50:18', '2020-08-26 11:50:18'),
(8, 'Địa', 'Địa Lý', 75, 1, '2020-08-26 11:50:37', '2020-08-26 11:50:37'),
(9, 'Tin', 'Tin Học', 60, 1, '2020-08-26 11:50:56', '2020-08-26 11:50:56'),
(10, 'GDCD', 'GDCD', 60, 1, '2020-08-26 11:51:24', '2020-08-26 11:51:24'),
(11, 'GDQP AN', 'GDQP AN', 60, 1, '2020-08-26 11:51:55', '2020-08-26 11:51:55'),
(12, 'Nghề', 'Nghề PT', 75, 1, '2020-08-26 11:52:58', '2020-08-26 11:52:58'),
(13, 'Công Nghệ', 'Công Nghệ', 60, 1, '2020-08-26 11:53:31', '2020-08-26 11:53:31'),
(14, 'Thể Dục', 'Thể Dục', 75, 1, '2020-08-26 11:54:10', '2020-08-26 11:54:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tengiaovien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytuyendung` date NOT NULL,
  `sub_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `teachers`
--

INSERT INTO `teachers` (`id`, `tengiaovien`, `gioitinh`, `ngaysinh`, `diachi`, `gmail`, `sdt`, `ngaytuyendung`, `sub_id`, `created_at`, `updated_at`) VALUES
(1, 'Thi', 0, '1999-04-23', '123', '123@gmail.com', '1234567890', '1990-12-31', 3, '2020-08-26 06:36:25', '2020-08-26 11:54:49'),
(2, 'Hài', 0, '0002-02-23', 'qwe', '123a@gmail.com', '1234567891', '2000-02-22', 1, '2020-08-26 06:56:21', '2020-08-26 06:56:21'),
(3, 'Nguyễn Văn Lý', 1, '1995-02-22', 'da', 'da@gmail.com', '1648133160', '2020-08-26', 2, '2020-08-26 11:56:00', '2020-08-26 11:56:00'),
(4, 'Lê Thị Siêu', 1, '1987-09-21', '16', '15@gmail.com', '1687943170', '2020-08-26', 4, '2020-08-26 11:56:51', '2020-08-26 11:56:51'),
(5, 'Trần Hùng', 0, '1989-08-16', '2d', 'as@gmail.com', '0319849467', '2020-08-26', 5, '2020-08-26 11:57:49', '2020-08-26 11:57:49'),
(6, 'Lý Kiệt', 0, '1988-01-23', '124', '1st@gmail.com', '0318789416', '2020-08-26', 6, '2020-08-26 11:59:16', '2020-08-26 11:59:16'),
(7, 'Trần Thị Phương Dung', 1, '1999-02-17', 'asd', '2st@gmail.com', '0761445645', '2020-08-26', 7, '2020-08-26 12:00:34', '2020-08-26 12:00:34'),
(8, 'Trần Hoài Linh', 0, '1987-09-22', 'ga', '3st@gmail.com', '1649845310', '2020-08-26', 8, '2020-08-26 12:01:34', '2020-08-26 12:01:34'),
(9, 'Ba La Ba La', 0, '2000-04-28', 'fa', '4st@gmail.com', '0216498467', '2020-08-26', 9, '2020-08-26 12:02:31', '2020-08-26 12:02:31'),
(10, 'Nguyễn DumBa', 0, '1995-03-09', 'as2', '5st@gmail.com', '0164987478', '2020-08-26', 10, '2020-08-26 12:03:20', '2020-08-26 12:03:20'),
(11, 'Quách Tuấn', 0, '1991-03-02', 'fas', '6st@gmail.com', '0549846517', '2020-08-26', 11, '2020-08-26 12:04:18', '2020-08-26 12:04:18'),
(12, 'Thị Nga', 1, '1992-02-09', '21d', '7st@gmail.com', '0648945616', '2020-08-26', 12, '2020-08-26 12:05:00', '2020-08-26 12:05:00'),
(13, 'Nguyễn Văn Lệ', 1, '1993-04-23', '421d', '8st@gmail.com', '0316848945', '2020-08-26', 13, '2020-08-26 12:06:07', '2020-08-26 12:06:07'),
(14, 'Lý Tịnh', 0, '1996-12-18', '523d', '9st@gmail.com', '0164874375', '2020-08-26', 14, '2020-08-26 12:07:08', '2020-08-26 12:07:08');

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
  `userstype_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `userstype_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$TU7lNpyRoLPuirtfjMizDe23a5/C09qQXjTyiGLlCRRqq/0ZD.xb2', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userstype`
--

CREATE TABLE `userstype` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manguoidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `userstype`
--

INSERT INTO `userstype` (`id`, `manguoidung`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `all`
--
ALTER TABLE `all`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `class_malop_unique` (`malop`),
  ADD KEY `class_grade_id_foreign` (`grade_id`),
  ADD KEY `class_schoolyear_id_foreign` (`schoolyear_id`),
  ADD KEY `class_teachers_id_foreign` (`teachers_id`);

--
-- Chỉ mục cho bảng `conduct`
--
ALTER TABLE `conduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `conduct_mahanhkiem_unique` (`mahanhkiem`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grade_makhoi_unique` (`makhoi`);

--
-- Chỉ mục cho bảng `hocluc`
--
ALTER TABLE `hocluc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hocluc_mahocluc_unique` (`mahocluc`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `schoolyear`
--
ALTER TABLE `schoolyear`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `schoolyear_mahanhkiem_unique` (`mahanhkiem`);

--
-- Chỉ mục cho bảng `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `semester1`
--
ALTER TABLE `semester1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `semester1_madiem_unique` (`madiem`),
  ADD KEY `semester1_student_id_foreign` (`student_id`);

--
-- Chỉ mục cho bảng `semester2`
--
ALTER TABLE `semester2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `semester2_madiem_unique` (`madiem`),
  ADD KEY `semester2_student_id_foreign` (`student_id`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_mahs_unique` (`mahs`),
  ADD KEY `student_class_id_foreign` (`class_id`);

--
-- Chỉ mục cho bảng `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subject_mamon_unique` (`mamon`);

--
-- Chỉ mục cho bảng `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers_sub_id_foreign` (`sub_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_userstype_id_foreign` (`userstype_id`);

--
-- Chỉ mục cho bảng `userstype`
--
ALTER TABLE `userstype`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userstype_manguoidung_unique` (`manguoidung`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `all`
--
ALTER TABLE `all`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `class`
--
ALTER TABLE `class`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `conduct`
--
ALTER TABLE `conduct`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `grade`
--
ALTER TABLE `grade`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hocluc`
--
ALTER TABLE `hocluc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `schoolyear`
--
ALTER TABLE `schoolyear`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `semester`
--
ALTER TABLE `semester`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `semester1`
--
ALTER TABLE `semester1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `semester2`
--
ALTER TABLE `semester2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `subject`
--
ALTER TABLE `subject`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `userstype`
--
ALTER TABLE `userstype`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`id`),
  ADD CONSTRAINT `class_schoolyear_id_foreign` FOREIGN KEY (`schoolyear_id`) REFERENCES `schoolyear` (`id`),
  ADD CONSTRAINT `class_teachers_id_foreign` FOREIGN KEY (`teachers_id`) REFERENCES `teachers` (`id`);

--
-- Các ràng buộc cho bảng `semester1`
--
ALTER TABLE `semester1`
  ADD CONSTRAINT `semester1_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `semester2`
--
ALTER TABLE `semester2`
  ADD CONSTRAINT `semester2_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_sub_id_foreign` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_userstype_id_foreign` FOREIGN KEY (`userstype_id`) REFERENCES `userstype` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
