-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2023 at 08:35 AM
-- Server version: 10.3.39-MariaDB-0+deb10u1
-- PHP Version: 8.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vegieaja`
--

-- --------------------------------------------------------

--
-- Table structure for table `buktis`
--

CREATE TABLE `buktis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tagihan` int(11) NOT NULL,
  `agen` int(11) NOT NULL,
  `url_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buktis`
--

INSERT INTO `buktis` (`id`, `created_at`, `updated_at`, `tagihan`, `agen`, `url_foto`) VALUES
(3, '2023-06-20 17:21:38', '2023-06-20 17:21:38', 14000, 5, '202306201721-5.jpg'),
(4, '2023-06-22 13:25:29', '2023-06-22 13:25:29', 101000, 8, '202306221325-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `konsumens`
--

CREATE TABLE `konsumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(255) NOT NULL,
  `hp` varchar(255) DEFAULT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `rw` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `agen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konsumens`
--

INSERT INTO `konsumens` (`id`, `name`, `remember_token`, `created_at`, `updated_at`, `alamat`, `kota`, `hp`, `kelurahan`, `rw`, `kode`, `agen_id`) VALUES
(12, 'Ijul', NULL, '2023-06-20 15:25:39', '2023-06-20 15:25:39', 'Warungdoyong', 'Sukabumi', '085720901658', 'Warungdoyong', 5, 'K-warungdoyong-05', 5),
(13, 'Jenal', NULL, '2023-06-20 15:26:14', '2023-06-20 15:26:14', 'Warungdoyong', 'Sukabumi', '085727654432', 'Warungdoyong', 5, 'K-warungdoyong-05', 5),
(14, 'Amir', NULL, '2023-06-20 15:26:40', '2023-06-20 15:26:40', 'Warungdoyong', 'Sukabumi', '085720901658', 'Warungdoyong', 5, 'K-warungdoyong-05', 5),
(15, 'Piyan', NULL, '2023-06-22 12:40:40', '2023-06-22 12:43:19', 'Gunung Guruh', 'Sukabumi', '085614725561', 'Gunung Guruh', 1, 'K-gunung-guruh-01', 6),
(16, 'Ndut', NULL, '2023-06-22 13:12:51', '2023-06-22 13:12:51', 'Gunung Guruh', 'Sukabumi', '085678776543', 'Gunung Guruh', 1, 'K-gunung-guruh-01', 8),
(17, 'Mamat', NULL, '2023-06-22 13:13:34', '2023-06-22 13:13:34', 'Gunung Guruh', 'Sukabumi', '081245667873', 'Gunung Guruh', 1, 'K-gunung-guruh-01', 8);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2023_05_15_014057_create_orders_table', 1),
(14, '2023_05_15_091309_create_produks_table', 1),
(15, '2023_05_17_020104_create_konsumens_table', 1),
(16, '2023_05_29_105927_create_buktis_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produk_id` varchar(255) NOT NULL,
  `agen_id` int(11) NOT NULL,
  `konsumen_id` int(11) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `url_foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `detail` text NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `produk_id`, `agen_id`, `konsumen_id`, `jumlah`, `url_foto`, `created_at`, `updated_at`, `detail`, `harga`) VALUES
(25, 'a:3:{i:0;s:1:\"1\";i:1;s:1:\"8\";i:2;s:2:\"29\";}', 5, 12, 'a:3:{i:0;s:1:\"1\";i:1;s:1:\"1\";i:2;s:1:\"1\";}', NULL, '2023-06-20 15:29:03', '2023-06-22 07:59:46', '(Brokoli 1) (Kentang Kecil 1) (Jagung Kecil (Semi) 1) ', 'a:3:{i:0;s:4:\"2000\";i:1;s:4:\"2000\";i:2;s:4:\"2000\";}'),
(26, 'a:4:{i:0;s:2:\"19\";i:2;s:1:\"8\";i:1;s:1:\"1\";i:3;s:2:\"35\";}', 5, 14, 'a:4:{i:0;s:1:\"2\";i:2;s:1:\"1\";i:1;s:1:\"1\";i:3;s:1:\"1\";}', NULL, '2023-06-20 15:32:27', '2023-06-20 17:34:18', '(Paprika Kuning 2) (Brokoli 1) (Kentang Kecil 1) (Bawang Bombay 1) ', 'a:4:{i:0;i:0;i:1;i:2000;i:2;i:2000;i:3;i:2000;}'),
(27, 'a:2:{i:0;s:2:\"25\";i:1;s:2:\"43\";}', 5, 13, 'a:2:{i:0;s:1:\"2\";i:1;s:1:\"1\";}', NULL, '2023-06-20 15:33:50', '2023-06-20 15:33:50', '(Cabai Hijau Keriting 2) (Labu Siam 1) ', 'a:2:{i:0;i:2000;i:1;i:2000;}'),
(28, 'a:3:{i:0;s:1:\"1\";i:2;s:1:\"2\";i:1;s:2:\"24\";}', 8, 15, 'a:3:{i:0;s:1:\"1\";i:2;s:1:\"1\";i:1;s:1:\"1\";}', NULL, '2023-06-22 13:17:55', '2023-06-22 13:17:55', '(Brokoli 1) (Cabai Rawit Merah 1) (Buncis 1) ', 'a:3:{i:0;i:20000;i:1;i:2000;i:2;i:2000;}'),
(29, 'a:3:{i:0;s:2:\"24\";i:2;s:2:\"13\";i:1;s:1:\"6\";}', 8, 16, 'a:3:{i:0;s:1:\"1\";i:2;s:1:\"1\";i:1;s:1:\"1\";}', NULL, '2023-06-22 13:18:59', '2023-06-22 13:18:59', '(Cabai Rawit Merah 1) (Kentang Besar 1) (Kol 1) ', 'a:3:{i:0;i:2000;i:1;i:20000;i:2;i:7500;}'),
(30, 'a:3:{i:0;s:1:\"1\";i:1;s:1:\"6\";i:2;s:2:\"13\";}', 8, 17, 'a:3:{i:0;s:1:\"1\";i:1;s:1:\"1\";i:2;s:1:\"1\";}', NULL, '2023-06-22 13:20:13', '2023-06-22 14:00:26', '(Brokoli 1) (Kentang Besar 1) (Kol 1) ', 'a:3:{i:0;s:5:\"20000\";i:1;s:5:\"20000\";i:2;s:4:\"7500\";}');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `kemasan` varchar(255) NOT NULL,
  `url_foto` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `created_at`, `updated_at`, `nama`, `kategori`, `kemasan`, `url_foto`, `harga`) VALUES
(1, NULL, '2023-06-22 12:09:14', 'Brokoli', 'sayuran', 'satuan/timbang', 'br.webp', 20000),
(2, NULL, '2023-06-22 12:00:37', 'Buncis', 'sayuran', 'paket', 'bc.jpeg', 2000),
(3, NULL, '2023-05-29 14:33:27', 'Caisim', 'sayuran', 'paket', 'cs.jpeg', 2000),
(4, NULL, '2023-06-15 15:55:35', 'Kacang Panjang', 'kacang', 'paket', 'KacangPanjang-removebg-preview.webp', 2000),
(5, NULL, '2023-05-29 14:30:11', 'Kacang Merah', 'kacang', 'paket', '9627105_e45b3475-ef14-4253-a9eb-d5ed602f5c88_1000_1000.jpg', 2000),
(6, NULL, '2023-06-22 12:09:30', 'Kentang Besar', 'umbi', 'satuan/timbang', 'kbes.webp', 20000),
(7, NULL, '2023-06-15 16:02:15', 'Kentang Mix', 'umbi', 'paket', 'kmx.webp', 2000),
(8, NULL, '2023-06-15 15:39:34', 'Kentang Kecil', 'umbi', 'paket', 'knk.webp', 2000),
(9, NULL, '2023-05-25 08:28:28', 'Leunca', 'sayuran', 'paket', 'lc.jpeg', 2000),
(10, NULL, '2023-05-25 08:03:05', 'Lemon', 'buah', 'paket', 'lm.jpeg', 2000),
(11, NULL, '2023-06-22 12:09:57', 'Oyong', 'sayuran', 'satuan/timbang', '5-manfaat-sayur-oyong-bagi-kesehatan-tubuh-halodoc.jpg', 11000),
(12, NULL, '2023-05-25 08:22:16', 'Pakcoy', 'sayuran', 'paket', 'pc.jpeg', 2000),
(13, NULL, '2023-06-22 12:10:48', 'Kol', 'sayuran', 'satuan/timbang', 'kol.jpeg', 7500),
(14, NULL, '2023-06-02 13:08:06', 'Kembang Kol', 'sayuran', 'satuan/timbang', 'kk.jpeg', 18000),
(15, NULL, '2023-06-22 12:11:48', 'Sawi Putih', 'sayuran', 'satuan/timbang', 'a0b63640-24ca-45a3-bfcd-8d1e7d1cb22e-removebg-preview.webp', 7500),
(16, NULL, '2023-06-22 12:12:32', 'Pete', 'sayuran', 'satuan/timbang', 'pt.jpeg', 5500),
(17, NULL, '2023-06-22 12:12:57', 'Paprika Hijau', 'sayuran', 'satuan/timbang', 'ph.jpeg', 45000),
(18, NULL, '2023-06-22 12:13:17', 'Paprika Merah', 'sayuran', 'satuan/timbang', 'PM.jpeg', 45000),
(19, NULL, '2023-06-22 12:13:33', 'Paprika Kuning', 'sayuran', 'satuan/timbang', 'pk.jpeg', 45000),
(20, NULL, '2023-06-22 12:14:05', 'Kol Ungu', 'sayuran', 'satuan/timbang', 'ku.webp', 55000),
(21, NULL, '2023-06-21 23:50:50', 'Tahu Putih', 'olahan', 'paket', 'th.jpeg', 2000),
(22, NULL, '2023-06-21 23:51:57', 'Tempe', 'olahan', 'paket', 'tm.webp', 2000),
(23, NULL, '2023-06-21 23:52:18', 'Oncom', 'olahan', 'paket', 'oncom2-removebg-preview.webp', 2000),
(24, '2023-05-20 01:54:36', '2023-05-26 10:12:09', 'Cabai Rawit Merah', 'cabai', 'paket', 'c6785600-0166-42e5-b327-d75dcc3dfde8.jpg.webp', 2000),
(25, '2023-05-20 01:56:40', '2023-05-25 09:35:10', 'Cabai Hijau Keriting', 'cabai', 'paket', 'chk.jpeg', 2000),
(26, '2023-05-20 01:59:49', '2023-06-15 10:23:48', 'Ciriwis', 'sayuran', 'paket', 'crw-removebg-preview.webp', 2000),
(27, '2023-05-20 02:02:27', '2023-06-22 12:14:55', 'Paria Giok', 'sayuran', 'satuan/timbang', 'pr-removebg-preview.webp', 15000),
(28, '2023-05-20 02:05:05', '2023-05-25 08:17:28', 'Seledri', 'sayuran', 'paket', 'sl.jpeg', 2000),
(29, '2023-05-20 02:06:55', '2023-05-26 10:08:24', 'Jagung Kecil (Semi)', 'sayuran', 'paket', 'sm.jpeg', 2000),
(30, '2023-05-20 02:08:39', '2023-05-25 09:00:34', 'Timun', 'sayuran', 'paket', 'tmn.jpeg', 2000),
(31, '2023-05-20 02:10:31', '2023-06-15 15:58:43', 'Tomat', 'sayuran', 'paket', 'tmt.webp', 2000),
(32, '2023-05-20 02:12:25', '2023-05-25 08:23:26', 'Tomat Hijau', 'sayuran', 'paket', 'thj.jpeg', 2000),
(33, '2023-05-20 02:15:02', '2023-06-15 10:44:22', 'Bawang Merah', 'cabai', 'paket', 'bm.webp', 2000),
(34, '2023-05-20 02:16:37', '2023-05-25 08:33:21', 'Bawang Putih', 'cabai', 'paket', 'bp.jpeg', 2000),
(35, '2023-05-20 02:18:21', '2023-06-22 12:15:21', 'Bawang Bombay', 'cabai', 'satuan/timbang', 'bb.jpeg', 40000),
(36, '2023-05-20 02:20:00', '2023-05-25 08:15:18', 'Jahe Gajah', 'bumbu', 'paket', 'jg.jpeg', 2000),
(37, '2023-05-20 02:22:23', '2023-06-15 10:21:33', 'Jahe Merah', 'bumbu', 'paket', 'jh-removebg-preview.webp', 2000),
(38, '2023-05-20 02:24:01', '2023-06-15 10:26:52', 'Daun Singkong', 'sayuran', 'paket', '5b176e26-9bf1-486e-ba6f-ec448cf01472-removebg-preview.webp', 2000),
(39, '2023-05-20 02:25:57', '2023-06-15 10:26:10', 'Bayam', 'sayuran', 'paket', 'bayam-removebg-preview.webp', 2000),
(40, '2023-05-20 02:28:22', '2023-05-26 10:19:03', 'Daun Pisang', 'olahan', 'paket', 'pedagang_sayur_daun_pisang_-_per_ikat_kecil_full02_mp77rjs8.webp', 2000),
(41, '2023-05-20 02:31:21', '2023-05-25 09:36:52', 'Daun Jeruk', 'bumbu', 'paket', 'dj.jpeg', 2000),
(42, '2023-05-20 02:33:35', '2023-05-20 02:33:35', 'Daun Pepaya', 'sayuran', 'paket', 'imagesg-removebg-preview.png', 2000),
(43, '2023-05-23 14:17:22', '2023-06-22 12:16:06', 'Labu Siam', 'sayuran', 'satuan/timbang', 'fresh-chayote_147493-439_49_20200616135550-removebg-preview.webp', 6000),
(44, '2023-05-23 14:20:12', '2023-06-15 10:37:11', 'Kecipir', 'sayuran', 'paket', 'dunia_sayur_online_sayur_kecipir_250_gram_full01_ln0qzma1-removebg-preview.webp', 2000),
(45, '2023-05-23 14:21:48', '2023-06-15 15:46:07', 'Terong Kupa', 'sayuran', 'paket', 'a1e8e9f4-2e8e-4435-b580-0834b2f0d050.jpg-removebg-preview.webp', 2000),
(46, '2023-05-23 14:23:32', '2023-05-25 08:19:50', 'Laos', 'bumbu', 'paket', 'laos.jpeg', 2000),
(48, '2023-05-23 14:27:06', '2023-05-25 08:17:58', 'Kucai', 'bumbu', 'paket', 'kc.jpeg', 2000),
(49, '2023-05-23 14:28:39', '2023-06-15 10:43:37', 'Kemiri', 'bumbu', 'paket', 'no-brand_kemiri-muncang-sayuran-segar-bandung_full01-removebg-preview.webp', 2000),
(50, '2023-05-23 14:31:24', '2023-06-22 12:16:34', 'Jagung Manis', 'sayuran', 'satuan/timbang', 'corn-natural-ripe-harvest-preview-removebg-preview.webp', 7500),
(51, '2023-05-23 14:33:39', '2023-05-25 09:35:37', 'Terong Panjang', 'sayuran', 'paket', 'trg.jpeg', 2000),
(52, '2023-05-23 14:34:44', '2023-05-25 08:10:13', 'Terong Bulat', 'sayuran', 'paket', 'tb.jpeg', 2000),
(53, '2023-05-23 14:37:21', '2023-06-15 15:59:00', 'Daun Bawang', 'bumbu', 'paket', 'dbg.webp', 2000),
(54, '2023-05-23 14:39:30', '2023-06-15 16:01:50', 'Cabai Hijau Besar', 'cabai', 'paket', 'cab.webp', 2000),
(55, '2023-05-23 14:42:32', '2023-06-15 15:59:15', 'Cabai Merah Keriting', 'cabai', 'paket', 'mn.webp', 2000),
(56, '2023-05-23 14:43:46', '2023-06-15 10:37:36', 'Cabai Rawit Hijau', 'cabai', 'paket', '60592c9d-7bb1-4e94-bf42-237d2b06711c-removebg-preview.webp', 2000),
(57, '2023-05-23 14:45:25', '2023-06-15 16:01:59', 'Wortel Besar', 'umbi', 'paket', 'wbes.webp', 2000),
(58, '2023-05-23 14:46:45', '2023-05-25 09:02:25', 'Wortel Kecil', 'umbi', 'paket', 'wk.jpeg', 2000),
(59, '2023-05-23 14:48:09', '2023-06-15 10:44:06', 'Wortel Mix', 'umbi', 'paket', '020082700_1600085134-Wortel-shutterstock_352889045.webp', 2000),
(60, '2023-05-23 14:51:20', '2023-06-15 15:41:34', 'Sepi', 'sayuran', 'paket', 'jgk.webp', 2000),
(61, '2023-05-23 14:53:12', '2023-05-25 08:02:30', 'Kangkung', 'sayuran', 'paket', 'kg.jpeg', 2000),
(62, '2023-05-23 14:55:08', '2023-05-25 08:20:22', 'Kemangi', 'bumbu', 'paket', 'kmg.jpeg', 2000),
(63, '2023-05-23 14:57:06', '2023-05-25 08:10:48', 'Cabai Kering', 'cabai', 'paket', 'ck.jpeg', 2000),
(64, '2023-05-23 14:58:27', '2023-05-26 08:44:30', 'Jeruk Nipis', 'buah', 'paket', '76a0301cd6b087c0e7ed49fcfe12a11a.jpg', 2000),
(65, '2023-05-23 15:59:24', '2023-05-25 08:03:40', 'Jamur Putih', 'buah', 'paket', 'jm.jpeg', 2000),
(66, '2023-05-23 16:00:38', '2023-05-25 08:07:02', 'Jamur Enoki', 'buah', 'paket', 'en.jpeg', 2000),
(67, '2023-05-23 16:02:13', '2023-05-25 08:04:10', 'Jamur Shimeji', 'buah', 'paket', 'js.jpeg', 2000),
(68, '2023-05-23 16:03:50', '2023-06-15 15:41:48', 'Jamur Champignon', 'buah', 'paket', 'jc.webp', 2000),
(69, '2023-05-23 16:05:17', '2023-05-25 08:08:36', 'Jamur Merang', 'buah', 'paket', 'mer.jpeg', 2000),
(70, '2023-05-23 16:06:30', '2023-06-15 10:37:24', 'Jeruk Limau', 'buah', 'paket', '49279413_c8b9d168-f0aa-4b6a-a979-d9482eb57baf_1000_1000-removebg-preview.webp', 2000),
(71, '2023-05-23 16:08:59', '2023-06-15 10:23:33', 'Kunyit', 'bumbu', 'paket', 'turmeric-3251560_1280-removebg-preview.webp', 2000),
(72, '2023-05-23 16:11:01', '2023-06-15 10:32:51', 'Kencur', 'bumbu', 'paket', 'zurknqy31m4ndg9regpi-removebg-preview.webp', 2000),
(73, '2023-05-23 16:12:25', '2023-05-25 08:29:41', 'Lobak', 'umbi', 'paket', 'lbk.jpeg', 2000),
(74, '2023-05-23 16:14:25', '2023-06-15 15:38:05', 'Tauge', 'sayuran', 'paket', 'tg.webp', 2000),
(75, '2023-05-23 16:16:30', '2023-05-23 16:16:30', 'Daun Salam', 'bumbu', 'paket', 'download-removebg-preview.png', 2000),
(76, '2023-05-23 16:24:32', '2023-06-15 10:43:51', 'Daun Sereh', 'bumbu', 'paket', '009_700x700-removebg-preview.webp', 2000),
(77, '2023-05-23 16:25:59', '2023-05-23 16:25:59', 'Melinjo', 'sayuran', 'paket', 'data.jpeg-removebg-preview.png', 2000),
(78, '2023-05-23 16:27:47', '2023-06-15 10:26:40', 'Daun Melinjo', 'sayuran', 'paket', 'Kenali-5-Manfaat-Daun-Melinjo-untuk-Kesehatan-Tubuh-removebg-preview.webp', 2000),
(79, '2023-05-23 16:29:13', '2023-06-15 10:23:10', 'Selada', 'sayuran', 'paket', '3650626688-removebg-preview.webp', 2000),
(80, '2023-05-26 10:14:58', '2023-06-21 23:51:14', 'Tahu Kuning', 'olahan', 'paket', 'oPtVq3rsNW.jpg', 2000),
(81, '2023-05-29 14:35:52', '2023-05-29 14:35:52', 'Paria Daerah', 'sayuran', 'paket', '034278800_1575276472-shutterstock_230271694.webp', 2000),
(82, '2023-05-29 14:38:02', '2023-05-29 14:38:02', 'Jengkol Muda', 'sayuran', 'paket', 'c582a780-54e8-4420-9633-e06cc92f-20221214071610.jpeg', 2000),
(83, '2023-05-29 14:39:20', '2023-05-29 14:39:20', 'Cabai Merah Besar', 'cabai', 'paket', 'tak-hanya-pedas-banyak-manfaat-cabai-untuk-kesehatan-tubuh.jpg', 2000),
(84, '2023-05-29 14:40:35', '2023-05-29 14:40:35', 'Pohpohan', 'sayuran', 'paket', 'Daun_lalapan_popohan_segar_organik_1ikat.jpg', 2000),
(85, '2023-05-29 14:41:28', '2023-05-29 14:41:28', 'Daun Katuk', 'sayuran', 'paket', '88acdf4c-shutterstock_598315766.webp', 2000),
(86, '2023-05-29 14:42:45', '2023-05-29 14:42:45', 'Selada Kecil', 'sayuran', 'paket', 'selada.jpeg', 2000),
(87, '2023-05-29 14:43:53', '2023-05-29 14:43:53', 'Baby Buncis', 'sayuran', 'paket', '18_07_2022_11_31_58_baby_buncis_250grr.jpg', 2000),
(88, '2023-05-29 14:45:17', '2023-05-29 14:45:17', 'Jamur Kuping', 'buah', 'paket', '092332800_1563972280-iStock-637341150.jpg', 2000),
(89, '2023-05-29 16:29:19', '2023-05-29 16:29:19', 'Baby Labu Siam', 'sayuran', 'paket', 'kedaisayur_labu_siam_kecil_300_gram_-_kedaimart_full01_r3ykd8ny.jpg', 2000),
(90, '2023-05-31 14:31:35', '2023-05-31 14:31:35', 'Ubi Jalar Ungu', 'umbi', 'paket', '2ed0fc0a-589c-4636-8e3d-462cd9f68c01.jpg', 2000),
(91, '2023-05-31 14:34:01', '2023-05-31 14:34:01', 'Ubi Jalar Merah', 'umbi', 'paket', '03c39495-13f1-4d79-9bd8-0e2a7a47169a.jpg', 2000),
(92, '2023-05-31 14:34:51', '2023-05-31 14:34:51', 'Ubi Jalar Putih', 'umbi', 'paket', '84219dad-4cc1-472f-aba1-f9339eb37d79.jpg', 2000),
(93, '2023-05-31 14:35:16', '2023-05-31 14:35:16', 'Ubi Jalar Kuning', 'umbi', 'paket', '89daaaa5-b197-418a-b638-1caa49dc1d3b.jpg', 2000),
(94, '2023-05-31 14:35:37', '2023-05-31 14:35:37', 'Singkong', 'umbi', 'paket', '7ebe2a87-2190-4b82-b31f-2721d4f3519d.jpg', 2000),
(95, '2023-05-31 14:36:55', '2023-05-31 14:36:55', 'Bengkoang', 'umbi', 'paket', 'd82a9281-e751-4e8b-9d54-e085131346c5.jpg', 2000),
(96, '2023-05-31 14:37:35', '2023-05-31 14:37:35', 'Kacang Kedele', 'kacang', 'paket', 'ec93932a-dc34-4ead-9e50-467ccfc8e92d.jpg', 2000),
(97, '2023-05-31 14:37:59', '2023-05-31 14:37:59', 'Kacang Tanah Kupas', 'kacang', 'paket', '5d1377dc-f4ba-45d9-b542-e71afa352357.jpg', 2000),
(98, '2023-05-31 14:38:22', '2023-05-31 14:38:22', 'Kacang Merah Kupas', 'kacang', 'paket', '1fccb2c8-a751-4f8c-91be-6ec2b4a1c0d7.jpg', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `produks_coba`
--

CREATE TABLE `produks_coba` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `kemasan` varchar(255) NOT NULL,
  `url_foto` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks_coba`
--

INSERT INTO `produks_coba` (`id`, `created_at`, `updated_at`, `nama`, `kategori`, `kemasan`, `url_foto`, `harga`) VALUES
(1, NULL, '2023-05-19 00:53:38', 'Brokoli', 'sayuran', '2500', 'Brokoli-removebg-preview.png', 2000),
(2, NULL, '2023-05-19 00:53:48', 'Buncis', 'kacang', '2500', 'Buncis-removebg-preview.png', 2000),
(3, NULL, '2023-05-19 00:53:57', 'Baby Caisim', 'sayuran', '2500', 'BabyCaisim-removebg-preview.png', 2000),
(4, NULL, '2023-05-19 00:54:08', 'Kacang Panjang', 'kacang', '2500', 'KacangPanjang-removebg-preview.png', 2000),
(5, NULL, '2023-05-19 00:54:16', 'Kacang Merah', 'kacang', '2500', 'KacangMerah-removebg-preview.png', 2000),
(6, NULL, '2023-05-19 00:54:25', 'Kentang Besar', 'umbi', '2500', 'KentangMix-removebg-preview.png', 2000),
(7, NULL, '2023-05-19 00:54:41', 'Kentang Mix', 'umbi', '2500', 'KentangBesar-removebg-preview.png', 2000),
(8, NULL, '2023-05-19 00:54:52', 'Kentang Kecil', 'umbi', '2500', 'KentangKecil-removebg-preview.png', 2000),
(9, NULL, '2023-05-19 00:55:02', 'Leunca', 'sayuran', '2500', 'Leunca-removebg-preview.png', 2000),
(10, NULL, '2023-05-19 00:55:12', 'Lemon', 'buah', '2500', 'Lemon-removebg-preview.png', 2000),
(11, NULL, '2023-05-19 00:55:25', 'Oyong', 'sayuran', '2500', 'Oyong-removebg-preview.png', 2000),
(12, NULL, '2023-05-19 00:55:36', 'Pakcoy', 'sayuran', '2500', 'Pakcoy-removebg-preview.png', 2000),
(13, NULL, '2023-05-20 01:44:54', 'Kol', 'sayuran', 'satuan', 'kol-removebg-preview.png', 0),
(14, NULL, '2023-05-20 01:43:37', 'Kembang Kol', 'sayuran', 'satuan', 'kk-removebg-preview.png', 0),
(15, NULL, '2023-05-20 01:48:29', 'Sampo', 'sayuran', 'satuan', 'a0b63640-24ca-45a3-bfcd-8d1e7d1cb22e-removebg-preview.png', 0),
(16, NULL, '2023-05-19 06:36:02', 'Pete', 'sayuran', 'satuan', 'pete-removebg-preview.png', 0),
(17, NULL, '2023-05-19 06:36:14', 'Paprika Hijau', 'sayuran', 'satuan', 'ph-removebg-preview.png', 0),
(18, NULL, '2023-05-19 06:27:23', 'Paprika Merah', 'sayuran', 'satuan', 'paprika-red-vegetables-eat-food-cook-removebg-preview.png', 0),
(19, NULL, '2023-05-20 01:46:47', 'Paprika Kuning', 'sayuran', 'satuan', 'pk-removebg-preview.png', 0),
(20, NULL, '2023-05-19 06:36:24', 'Kol Ungu', 'sayuran', 'satuan', 'ungu-removebg-preview.png', 0),
(21, NULL, '2023-05-19 06:18:50', 'Tahu', 'olahan', 'satuan', 'tahu-removebg-preview.png', 0),
(22, NULL, '2023-05-19 06:24:23', 'Tempe', 'olahan', 'satuan', 'tempe-removebg-preview.png', 0),
(23, NULL, '2023-05-20 01:51:01', 'Oncom', 'olahan', 'satuan', 'oncom2-removebg-preview.png', 0),
(24, '2023-05-20 01:54:36', '2023-05-20 01:54:36', 'Cabai Rawit Merah', 'cabai', '2500', 'crm-removebg-preview.png', 2000),
(25, '2023-05-20 01:56:40', '2023-05-20 01:56:40', 'Cabai Hijau Keriting', 'cabai', '2500', 'ch-removebg-preview.png', 2000),
(26, '2023-05-20 01:59:49', '2023-05-20 01:59:49', 'Ciriwis', 'sayuran', '2500', 'crw-removebg-preview.png', 2000),
(27, '2023-05-20 02:02:27', '2023-05-20 02:02:27', 'Paria Besar', 'sayuran', '2500', 'pr-removebg-preview.png', 2000),
(28, '2023-05-20 02:05:05', '2023-05-20 02:05:05', 'Seledri', 'sayuran', '2500', 'sede-removebg-preview.png', 2000),
(29, '2023-05-20 02:06:55', '2023-05-20 02:06:55', 'Jagung Kecil (Sumi)', 'sayuran', '2500', 'sumi-removebg-preview.png', 2000),
(30, '2023-05-20 02:08:39', '2023-05-20 02:08:39', 'Timun', 'sayuran', '2500', 'istockphoto-967491012-612x612-removebg-preview.png', 2000),
(31, '2023-05-20 02:10:31', '2023-05-20 02:10:31', 'Tomat', 'sayuran', '2500', 'tomat-removebg-preview.png', 2000),
(32, '2023-05-20 02:12:25', '2023-05-20 02:12:25', 'Tomat Hijau', 'sayuran', '2500', 'Tomat-Hijau-removebg-preview.png', 2000),
(33, '2023-05-20 02:15:02', '2023-05-20 02:15:02', 'Bawang Merah', 'cabai', '2500', 'onion-3480656_1280-removebg-preview.png', 2000),
(34, '2023-05-20 02:16:37', '2023-05-20 02:16:37', 'Bawang Putih', 'cabai', '2500', 'garlic-220495_1280-removebg-preview.png', 2000),
(35, '2023-05-20 02:18:21', '2023-05-20 02:18:21', 'Bawang Bombay', 'cabai', '2500', 'onion-bulbs-food-fresh-healthy-removebg-preview.png', 2000),
(36, '2023-05-20 02:20:00', '2023-05-20 02:20:00', 'Jahe Gajah', 'bumbu', '2500', 'ginger-the-root-of-the-pepper-cooking-thumbnail-removebg-preview.png', 2000),
(37, '2023-05-20 02:22:23', '2023-05-20 02:22:23', 'Jahe Merah', 'bumbu', '2500', 'jh-removebg-preview.png', 2000),
(38, '2023-05-20 02:24:01', '2023-05-20 02:24:01', 'Daun Singkong', 'sayuran', '2500', '5b176e26-9bf1-486e-ba6f-ec448cf01472-removebg-preview.png', 2000),
(39, '2023-05-20 02:25:57', '2023-05-20 02:25:57', 'Bayam', 'sayuran', '2500', 'bayam-removebg-preview.png', 2000),
(40, '2023-05-20 02:28:22', '2023-05-20 02:28:22', 'Daun Pisang', 'olahan', '2500', 'dp-removebg-preview.png', 2000),
(41, '2023-05-20 02:31:21', '2023-05-20 02:31:21', 'Daun Jeruk', 'bumbu', '2500', 'khasiat-daun-jeruk-nipis-untuk-k-20221121112854-removebg-preview.png', 2000),
(42, '2023-05-20 02:33:35', '2023-05-20 02:33:35', 'Daun Pepaya', 'sayuran', '2500', 'imagesg-removebg-preview.png', 2000),
(43, '2023-05-23 14:17:22', '2023-05-23 14:17:22', 'Labu Siam', 'sayuran', '2500', 'fresh-chayote_147493-439_49_20200616135550-removebg-preview.png', 2000),
(44, '2023-05-23 14:20:12', '2023-05-23 14:20:12', 'Kecipir', 'sayuran', '2500', 'dunia_sayur_online_sayur_kecipir_250_gram_full01_ln0qzma1-removebg-preview.png', 2000),
(45, '2023-05-23 14:21:48', '2023-05-23 14:21:48', 'Terong Kupa', 'sayuran', '2500', 'a1e8e9f4-2e8e-4435-b580-0834b2f0d050.jpg-removebg-preview.png', 2000),
(46, '2023-05-23 14:23:32', '2023-05-23 14:23:32', 'Laos', 'bumbu', '2500', '6206-removebg-preview.png', 2000),
(47, '2023-05-23 14:25:19', '2023-05-23 14:25:19', 'Kencur', 'bumbu', '2500', '6bd3dd3b6b2f497337d11a14912d3449.jpg_720x720q80.jpg_-removebg-preview.png', 2000),
(48, '2023-05-23 14:27:06', '2023-05-23 14:27:06', 'Kucai', 'bumbu', '2500', '8440864_018cc037-f15a-4bb3-9cce-6e2872dd6f53_720_720-removebg-preview.png', 2000),
(49, '2023-05-23 14:28:39', '2023-05-23 14:28:39', 'Kemiri', 'bumbu', '2500', 'no-brand_kemiri-muncang-sayuran-segar-bandung_full01-removebg-preview.png', 2000),
(50, '2023-05-23 14:31:24', '2023-05-23 14:31:24', 'Jagung Manis', 'sayuran', '2500', 'corn-natural-ripe-harvest-preview-removebg-preview.png', 2000),
(51, '2023-05-23 14:33:39', '2023-05-23 14:33:39', 'Terong Panjang', 'sayuran', '2500', '3cb37d8f-3206-488c-8f47-57bcb115f117-removebg-preview.png', 2000),
(52, '2023-05-23 14:34:44', '2023-05-23 14:34:44', 'Terong Bulat', 'sayuran', '2500', 'terong-bulat-removebg-preview.png', 2000),
(53, '2023-05-23 14:37:21', '2023-05-23 14:37:21', 'Daun Bawang', 'bumbu', '2500', 'scallion-2316378_1280-removebg-preview.png', 2000),
(54, '2023-05-23 14:39:30', '2023-05-23 14:39:30', 'Cabai Hijau Tua', 'cabai', '2500', 'mzIxJ0WSheCU-removebg-preview.png', 2000),
(55, '2023-05-23 14:42:32', '2023-05-23 14:42:32', 'Cabai Merah Keriting', 'cabai', '2500', '49279413_13d77e42-ae91-44dd-8fb6-6d77c150babb_1050_1050-removebg-preview.png', 2000),
(56, '2023-05-23 14:43:46', '2023-05-23 14:43:46', 'Cabai Rawit Hijau', 'cabai', '2500', '60592c9d-7bb1-4e94-bf42-237d2b06711c-removebg-preview.png', 2000),
(57, '2023-05-23 14:45:25', '2023-05-23 14:45:25', 'Wortel Besar', 'umbi', '2500', '0_3a061084-087b-44c4-b958-6f7a3a78b239_960_960-removebg-preview.png', 2000),
(58, '2023-05-23 14:46:45', '2023-05-23 14:46:45', 'Wortel Kecil', 'umbi', '2500', 'data-removebg-preview.png', 2000),
(59, '2023-05-23 14:48:09', '2023-05-23 14:48:09', 'Wortel Mix', 'umbi', '2500', '020082700_1600085134-Wortel-shutterstock_352889045.jpg', 2000),
(60, '2023-05-23 14:51:20', '2023-05-23 14:51:20', 'Jengkol', 'sayuran', '2500', '04b3efc8d2e10daac523045a51e41a26-removebg-preview.png', 2000),
(61, '2023-05-23 14:53:12', '2023-05-23 14:53:12', 'Kangkung', 'sayuran', '2500', '10081024215_8f6069c4df_z-removebg-preview.png', 2000),
(62, '2023-05-23 14:55:08', '2023-05-23 14:55:08', 'Kemangi', 'bumbu', '2500', 'afcbandung_sayur_lalaban_daun_kemangi_lalapan_surawung_-1_ikat-_full01_px8d60pn-removebg-preview.png', 2000),
(63, '2023-05-23 14:57:06', '2023-05-23 14:57:06', 'Cabai Kering', 'cabai', '2500', 'rempah_rempah_cabe_merah_kering_super_-100_g-_full02_ee6a8z8w-removebg-preview.png', 2000),
(64, '2023-05-23 14:58:27', '2023-05-23 14:58:27', 'Jeruk Manis', 'buah', '2500', '273c3c78-9fe3-4496-88f6-acd10cba2597-removebg-preview.png', 2000),
(65, '2023-05-23 15:59:24', '2023-05-23 15:59:24', 'Jamur Putih', 'buah', '2500', 'ecafbc6b-30be-4883-a8d1-5fbaaf9f5a14-removebg-preview.png', 2000),
(66, '2023-05-23 16:00:38', '2023-05-23 16:00:38', 'Jamur Enoki', 'buah', '2500', '94bb208f-5d1f-431c-8489-b9daa3db0198-removebg-preview.png', 2000),
(67, '2023-05-23 16:02:13', '2023-05-23 16:02:13', 'Jamur Shimeji', 'buah', '2500', '99105105_dc06b3e6-9aca-47fe-bcad-baa4780ba6bf_700_700-removebg-preview.png', 2000),
(68, '2023-05-23 16:03:50', '2023-05-23 16:03:50', 'Jamur Champignon', 'buah', '2500', 'dunia_sayur_online_jamur_champignon_100_gram_full01_s9hz0nzz-removebg-preview.png', 2000),
(69, '2023-05-23 16:05:17', '2023-05-23 16:05:17', 'Jamur Merang', 'buah', '2500', 'cbe63939-b6f5-4367-b21b-6f09f9b6b499_Jamur-Merang-250-g-9-removebg-preview.png', 2000),
(70, '2023-05-23 16:06:30', '2023-05-23 16:06:30', 'Jeruk Limau', 'buah', '2500', '49279413_c8b9d168-f0aa-4b6a-a979-d9482eb57baf_1000_1000-removebg-preview.png', 2000),
(71, '2023-05-23 16:08:59', '2023-05-23 16:08:59', 'Kunyit', 'bumbu', '2500', 'turmeric-3251560_1280-removebg-preview.png', 2000),
(72, '2023-05-23 16:11:01', '2023-05-23 16:11:01', 'Kencur', 'bumbu', '2500', 'zurknqy31m4ndg9regpi-removebg-preview.png', 2000),
(73, '2023-05-23 16:12:25', '2023-05-23 16:12:25', 'Lobak', 'umbi', '2500', 'lobak-putih-removebg-preview.png', 2000),
(74, '2023-05-23 16:14:25', '2023-05-23 16:14:25', 'Tauge', 'sayuran', '2500', '5f58a2e9c1d1c-removebg-preview.png', 2000),
(75, '2023-05-23 16:16:30', '2023-05-23 16:16:30', 'Daun Salam', 'bumbu', '2500', 'download-removebg-preview.png', 2000),
(76, '2023-05-23 16:24:32', '2023-05-23 16:24:32', 'Daun Sereh', 'bumbu', '2500', '009_700x700-removebg-preview.png', 2000),
(77, '2023-05-23 16:25:59', '2023-05-23 16:25:59', 'Melinjo', 'sayuran', '2500', 'data.jpeg-removebg-preview.png', 2000),
(78, '2023-05-23 16:27:47', '2023-05-23 16:27:47', 'Daun Melinjo', 'sayuran', '2500', 'Kenali-5-Manfaat-Daun-Melinjo-untuk-Kesehatan-Tubuh-removebg-preview.png', 2000),
(79, '2023-05-23 16:29:13', '2023-05-23 16:29:13', 'Selada', 'sayuran', '2500', '3650626688-removebg-preview.png', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `rw` int(11) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `alamat`, `kota`, `role`, `hp`, `kelurahan`, `rw`, `kode`) VALUES
(4, 'Admin', 'admin@vegie.com', NULL, '$2y$10$OjPMV32/s3Y9SneMtbRm0OoxYeyZsqarFK3uZrImKGokuEMza4mny', 'wVu3ChIXpfIfBigPiCpiQAgNY2b5eSnzlNbIGtkGJgbLNKqg3F4K7FWOF3Rj', '2023-06-05 14:53:05', '2023-06-05 14:53:05', 'Sukabumi', 'Sukabumi', 'admin', '081', 'null', 1, 'A-null-01'),
(5, 'Eka', 'agen@test.com', NULL, '$2y$10$gif429lkz/.o16dezLIk8.lD1BZNJpVhHD689ei7TDCoMC6AwVqYi', 'h6BnHZlDb6vNzBcY9vnYxbzrRfjHJad0mmPGyjg6pQrUz1BYEHTvV1Ggxkgt', '2023-06-20 14:18:59', '2023-06-22 12:55:39', 'Warungdoyong', 'Sukabumi', 'agen', '081385010132', 'Warungdoyong', 5, 'A-warungdoyong-05'),
(6, 'Tati', 'tati@gmail.com', NULL, '$2y$10$AKLht87h8DUIdpFhWxMCNut4Hhlc6Utzyad9aGFf.ddrEmfKKRqgG', NULL, '2023-06-22 12:30:49', '2023-06-22 12:42:55', 'Gunung Guruh', 'Sukabumi', 'admin', '085765445432', 'Gunung Guruh', 1, 'A-gunung-guruh-01'),
(7, 'Tati', 'tati123@gmail.com', NULL, '$2y$10$0Rxgi7Uf6tQQfxRMu2QrPeStDmgXTwRbkmwNSAY1EajW2BUIxuIgi', NULL, '2023-06-22 12:51:02', '2023-06-22 13:09:10', 'Gunung Guruh', 'Sukabumi', 'admin', '085765445432', 'Gunung Guruh', 1, 'A-gunung-guruh-1'),
(8, 'Tati', 'tati1234@gmail.com', NULL, '$2y$10$AnSq0wbgEkdvAfO3.9kEnu8YNDga1OUIZrQLKBcJ3h0KKNLZMM39u', NULL, '2023-06-22 13:10:48', '2023-06-22 13:10:48', 'Gunung Guruh', 'Sukabumi', 'agen', '085765445432', 'Gunung Guruh', 1, 'A-gunung-guruh-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buktis`
--
ALTER TABLE `buktis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `konsumens`
--
ALTER TABLE `konsumens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produks_coba`
--
ALTER TABLE `produks_coba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buktis`
--
ALTER TABLE `buktis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konsumens`
--
ALTER TABLE `konsumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `produks_coba`
--
ALTER TABLE `produks_coba`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
