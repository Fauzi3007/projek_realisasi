-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 02:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laporan_keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail__laporans`
--

CREATE TABLE `detail__laporans` (
  `pagu` double(15,2) DEFAULT NULL,
  `realisasi` double(15,2) DEFAULT NULL,
  `direktorat_id_direktorat` varchar(5) NOT NULL,
  `riwayat_laporan_satker_id_riwayat_laporan_satker` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail__laporans`
--

INSERT INTO `detail__laporans` (`pagu`, `realisasi`, `direktorat_id_direktorat`, `riwayat_laporan_satker_id_riwayat_laporan_satker`, `created_at`, `updated_at`) VALUES
(68720000.00, 9000000.00, 'D001', 'RLS0000001', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(69610000.00, 21330000.00, 'D001', 'RLS0000002', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(77060000.00, 10960000.00, 'D001', 'RLS0000003', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(68720000.00, 0.00, 'D001', 'RLS0000004', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(69610000.00, 1500000.00, 'D001', 'RLS0000005', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(69610000.00, 37590000.00, 'D001', 'RLS0000006', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(68320000.00, 14776000.00, 'D001', 'RLS0000007', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(66800000.00, 0.00, 'D001', 'RLS0000008', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(67430000.00, 0.00, 'D001', 'RLS0000009', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(67430000.00, 0.00, 'D001', 'RLS0000010', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(211630000.00, 0.00, 'D002', 'RLS0000001', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(381050000.00, 0.00, 'D002', 'RLS0000002', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D002', 'RLS0000003', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(1160475000.00, 391445130.00, 'D002', 'RLS0000004', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(149400000.00, 0.00, 'D002', 'RLS0000005', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(466360000.00, 5625900.00, 'D002', 'RLS0000006', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(48800000.00, 6760000.00, 'D002', 'RLS0000007', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(553079000.00, 0.00, 'D002', 'RLS0000008', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(480833000.00, 0.00, 'D002', 'RLS0000009', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(723749000.00, 44900000.00, 'D002', 'RLS0000010', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(1558307000.00, 0.00, 'D003', 'RLS0000001', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(2057754000.00, 2427501.00, 'D003', 'RLS0000002', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(509557000.00, 4910740.00, 'D003', 'RLS0000003', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(42606000.00, 0.00, 'D003', 'RLS0000004', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(692190000.00, 0.00, 'D003', 'RLS0000005', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(2720925000.00, 6400600.00, 'D003', 'RLS0000006', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(487615000.00, 0.00, 'D003', 'RLS0000007', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D003', 'RLS0000008', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D003', 'RLS0000009', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D003', 'RLS0000010', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(362180000.00, 0.00, 'D004', 'RLS0000001', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D004', 'RLS0000002', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D004', 'RLS0000003', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(211772000.00, 0.00, 'D004', 'RLS0000004', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D004', 'RLS0000005', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D004', 'RLS0000006', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(178800000.00, 0.00, 'D004', 'RLS0000007', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D004', 'RLS0000008', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D004', 'RLS0000009', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D004', 'RLS0000010', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D005', 'RLS0000001', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D005', 'RLS0000002', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D005', 'RLS0000003', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D005', 'RLS0000004', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D005', 'RLS0000005', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D005', 'RLS0000006', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D005', 'RLS0000007', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D005', 'RLS0000008', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D005', 'RLS0000009', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D005', 'RLS0000010', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(391845000.00, 0.00, 'D006', 'RLS0000001', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(349565000.00, 10900000.00, 'D006', 'RLS0000002', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(1002444000.00, 96725750.00, 'D006', 'RLS0000003', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(259660000.00, 27960000.00, 'D006', 'RLS0000004', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(2774330000.00, 27330000.00, 'D006', 'RLS0000005', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(352400000.00, 143246500.00, 'D006', 'RLS0000006', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(764075000.00, 157862400.00, 'D006', 'RLS0000007', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D006', 'RLS0000008', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D006', 'RLS0000009', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
(0.00, 0.00, 'D006', 'RLS0000010', '2023-07-03 17:10:24', '2023-07-03 17:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `direktorats`
--

CREATE TABLE `direktorats` (
  `id_direktorat` varchar(5) NOT NULL,
  `nama_direktorat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `direktorats`
--

INSERT INTO `direktorats` (`id_direktorat`, `nama_direktorat`, `created_at`, `updated_at`) VALUES
('D001', 'SEKRETARIAT (DUKMAN)', '2023-06-21 11:22:54', '2023-06-21 11:22:54'),
('D002', 'PERENCANAAN (P2KT)  (01, 02, 07, 09)', '2023-06-21 11:22:55', '2023-06-21 11:22:55'),
('D003', 'PEMBANGUNAN (03, 10)', '2023-06-21 11:22:57', '2023-06-21 11:22:57'),
('D004', 'PENATAAN DAN PESEBARAN (FP3KT) (04, 11)', '2023-06-21 11:22:58', '2023-06-21 11:22:58'),
('D005', 'PENGEMBANGAN SP DAN SKP (05, 12)', '2023-06-21 11:22:59', '2023-06-21 11:22:59'),
('D006', 'PENGEMBANGAN (PKT) (06, 13, 14)', '2023-06-21 11:23:00', '2023-06-21 11:23:00');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_03_23_163443_create_sessions_table', 1),
(7, '2023_06_19_075242_create_satker_table', 1),
(8, '2023_06_19_075259_create_direktorat_table', 1),
(9, '2023_06_20_013859_create_detail_laporans_table', 1),
(10, '2023_06_20_014220_create_riwayat_laporan_satkers_table', 1),
(11, '2023_06_20_014433_create_rekap_laporans_table', 1),
(12, '2023_06_21_084608_create_riwayat_laporan_table', 1),
(13, '2023_06_22_044251_insert_direktorat_table', 1),
(14, '2023_06_22_044508_insert_satker_table', 1),
(15, '2023_06_25_234028_insert_user_account', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekap__laporans`
--

CREATE TABLE `rekap__laporans` (
  `riwayat_laporan_satker_id_riwayat_laporan_satker` varchar(10) NOT NULL,
  `total_pagu` double(15,2) DEFAULT NULL,
  `total_realisasi` double(15,2) DEFAULT NULL,
  `total_blokir` double(15,2) DEFAULT NULL,
  `total_persentase` double(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekap__laporans`
--

INSERT INTO `rekap__laporans` (`riwayat_laporan_satker_id_riwayat_laporan_satker`, `total_pagu`, `total_realisasi`, `total_blokir`, `total_persentase`, `created_at`, `updated_at`) VALUES
('RLS0000001', 2592682000.00, 9000000.00, 2202977000.00, 0.35, '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000002', 2857979000.00, 34657501.00, 1175619000.00, 1.21, '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000003', 1589061000.00, 112596490.00, 215720000.00, 7.09, '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000004', 1743233000.00, 419405130.00, 288930000.00, 24.06, '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000005', 3685530000.00, 28830000.00, 702450000.00, 0.78, '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000006', 3609295000.00, 192863000.00, 1347430000.00, 5.34, '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000007', 1547610000.00, 179398400.00, 526415000.00, 11.59, '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000008', 619879000.00, 0.00, 245040000.00, 0.00, '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000009', 548263000.00, 0.00, 267896000.00, 0.00, '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000010', 791179000.00, 44900000.00, 276496000.00, 5.68, '2023-07-03 17:10:24', '2023-07-03 17:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat__laporans`
--

CREATE TABLE `riwayat__laporans` (
  `id_riwayat_laporan` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat__laporans`
--

INSERT INTO `riwayat__laporans` (`id_riwayat_laporan`, `tanggal`, `created_at`, `updated_at`) VALUES
('RL00000001', '2023-07-03', '2023-07-03 17:10:09', '2023-07-03 17:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat__laporan__satkers`
--

CREATE TABLE `riwayat__laporan__satkers` (
  `id_riwayat_laporan_satker` varchar(10) NOT NULL,
  `satker_id_satker` varchar(5) NOT NULL,
  `riwayat_laporan_id_riwayat_laporan` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat__laporan__satkers`
--

INSERT INTO `riwayat__laporan__satkers` (`id_riwayat_laporan_satker`, `satker_id_satker`, `riwayat_laporan_id_riwayat_laporan`, `created_at`, `updated_at`) VALUES
('RLS0000001', 'S001', 'RL00000001', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000002', 'S002', 'RL00000001', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000003', 'S003', 'RL00000001', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000004', 'S004', 'RL00000001', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000005', 'S005', 'RL00000001', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000006', 'S006', 'RL00000001', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000007', 'S007', 'RL00000001', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000008', 'S008', 'RL00000001', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000009', 'S009', 'RL00000001', '2023-07-03 17:10:24', '2023-07-03 17:10:24'),
('RLS0000010', 'S010', 'RL00000001', '2023-07-03 17:10:24', '2023-07-03 17:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `satkers`
--

CREATE TABLE `satkers` (
  `id_satker` varchar(5) NOT NULL,
  `nama_satker` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `satkers`
--

INSERT INTO `satkers` (`id_satker`, `nama_satker`, `lokasi`, `created_at`, `updated_at`) VALUES
('S001', 'DINAS TENAGA KERJA DAN MOBILITAS PENDUDUK PROVINSI ACEH', 'aceh', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S002', 'DINAS KETENAGAKERJAAN DAN TRANSMIGRASI KABUPATEN PENUKAL ABAB LEMATANG ILIR', 'penukal abab lematang ilir', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S003', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KABUPATEN LAMANDAU', 'lamandau', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S004', 'DINAS TRANSMIGRASI DAN TENAGA KERJA PROVINSI SULAWESI TENGGARA', 'sulawesi tenggara', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S005', 'DINAS KETENAGAKERJAAN DAN TRANSMIGRASI KABUPATEN MALAKA', 'malaka', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S006', 'DINAS TENAGA KERJA, PERINDUSTRIAN, DAN TRANSMIGRASI KABUPATEN MAMUJU UTARA', 'mamuju utara', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S007', 'DINAS TRANSMIGRASI KABUPATEN MAMUJU TENGAH', 'mamuju tengah', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S008', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI JAWA BARAT', 'jawa barat', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S009', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI JAWA TENGAH', 'jawa tengah', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S010', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI YOGYAKARTA', 'yogyakarta', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S011', 'DINAS TENAGA KERJA, TRANSMIGRASI DAN KEPENDUDUKAN PROVINSI JAWA TIMUR', 'jawa timur', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S012', 'DINAS PENANAMAN MODAL, TRANSMIGRASI DAN TENAGA KERJA KABUPATEN ACEH UTARA', 'aceh utara', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S013', 'DINAS SOSIAL TENAGA KERJA DAN TRANSMIGRASI KOTA SUBULUSSALAM', 'subulussalam', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S014', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI SUMATERA BARAT', 'sumatera barat', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S015', 'DINAS KETENAGAKERJAAN DAN TRANSMIGRASI KABUPATEN SIJUNJUNG', 'sijunjung', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S016', 'DINAS SOSIAL, TENAGA KERJA DAN TRANSMIGRASI PROVINSI JAMBI', 'jambi', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S017', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KAB. LAHAT', 'lahat', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S018', 'DINAS NAKER TRANS KABUPATEN BANYUASIN', 'banyuasin', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S019', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI SUMATERA SELATAN', 'sumatera selatan', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S020', 'DINAS PEMBERDAYAAN MASYARAKAT, DESA DAN TRANSMIGRASI PROVINSI LAMPUNG', 'lampung', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S021', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI KALIMANTAN BARAT', 'kalimantan barat', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S022', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KABUPATEN SAMBAS', 'sambas', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S023', 'DINAS TRANSMIGRASI KAB. KAPUAS', 'kapuas', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S024', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI KALIMANTAN TENGAH', 'kalimantan tengah', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S025', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI KALIMANTAN SELATAN', 'kalimantan selatan', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S026', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KAB. BARITO KUALA', 'barito kuala', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S027', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI KALIMANTAN TIMUR', 'kalimantan timur', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S028', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROPINSI SULAWESI UTARA', 'sulawesi utara', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S029', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI SULAWESI TENGAH', 'sulawesi tengah', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S030', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KAB. POSO', 'poso', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S031', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROPINSI SULAWESI SELATAN', 'sulawesi selatan', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S032', 'DINAS SOSIAL, TENAGA KERJA DAN TRANSMIGRASI KABUPATEN WAJO', 'wajo', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S033', 'DINAS SOSIAL, TENAGA KERJA DAN TRANSMIGRASI KAB. LUWU UTARA', 'luwu utara', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S034', 'DINAS TRANSMIGRASI DAN TENAGA KERJA KABUPATEN LUWU TIMUR', 'luwu timur', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S035', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KABUPATEN KONAWE', 'konawe', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S036', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROV. NUSA TENGGARA BARAT', 'nusa tenggara barat', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S037', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROV. NUSA TENGGARA TIMUR', 'nusa tenggara timur', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S038', 'DINAS TRANSMIGRASI DAN TENAGA KERJA KABUPATEN SUMBA TIMUR', 'sumba timur', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S039', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KAB. MERAUKE', 'merauke', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S040', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KAB. KEEROM', 'keerom', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S041', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI BENGKULU', 'bengkulu', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S042', 'DINAS TENAGA KERJA DAN TRASMIGRASI PROPINSI MALUKU UTARA', 'maluku utara', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S043', 'DINAS NAKERTRANS KAB. HALMAHERA TENGAH', 'halmahera tengah', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S044', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KAB. HALMAHERA TIMUR', 'halmahera timur', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S045', 'DINAS SOSIAL, TENAGA KERJA DAN TRANSMIGRASI KOTA TIDORE KEPULAUAN', 'tidore kepulauan', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S046', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI BANTEN', 'banten', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S047', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI BANGKA BELITUNG', 'bangka belitung', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S048', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROV. GORONTALO', 'gorontalo', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S049', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KABUPATEN GORONTALO', 'gorontalo', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S050', 'DINAS TRANSMIGRASI DAN TENAGA KERJA PROVINSI PAPUA BARAT', 'papua barat', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S051', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KABUPATEN FAK-FAK', 'fak-fak', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S052', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KAB. TELUK WONDAMA', 'teluk wondama', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S053', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI SULAWESI BARAT', 'sulawesi barat', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S054', 'DINAS KELUARGA SEJAHTERA, MOBDUK DAN TRANSMIGRASI KABUPATEN SIMEULEU', 'simeuleu', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S055', 'DIREKTORAT JENDERAL PEMBANGUNAN DAN PENGEMBANGAN KAWASAN TRANSMIGRASI', 'dirjen', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S056', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KABUPATEN MOROWALI UTARA', 'morowali utara', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S057', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI KALIMANTAN UTARA', 'kalimantan utara', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S058', 'DINAS NAKERTRANS KAB. BULUNGAN', 'bulungan', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S059', 'DINAS TRANSMIGRASI KAB. TOLITOLI', 'tolitoli', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S060', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KAB. SIDRAP', 'sidrap', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S061', 'DINAS PERINDUSTRIAN, PERDAGANGAN, KOPERASI, UKM DAN TENAGA KERJA PROVINSI PAPUA', 'papua', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S062', 'DINAS TRANSMIGRASI DAN TENAGA KERJA KAB. GORONTALO UTARA', 'gorontalo utara', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S063', 'DINAS KETENAGAKERJAAN DAN TRANSMIGRASI KABUPATEN BENGKULU SELATAN', 'bengkulu selatan', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S064', 'DINAS SOSIAL TENAGA KERJA DAN TRANSMIGRASI KAB. SINTANG', 'sintang', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S065', 'DINAS SOSIAL TENAGA KERJA DAN TRANSMIGRASI KAB. TANAH BUMBU', 'tanah bumbu', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S066', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KAB. MUNA BARAT', 'muna barat', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S067', 'DINAS TRANSMIGRASI DAN TENAGA KERJA KABUPATEN KOLAKA TIMUR', 'kolaka timur', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S068', 'DINAS TRANSMIGRASI , TENAGA KERJA DAN ENERGI SUMBER DAYA MINERAL KAB. POLEWALI MANDAR', 'polewali mandar', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S069', 'DINAS SOSIAL TENAGA KERJA DAN TRANSMIGRASI KAB. MAMASA', 'mamasa', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S070', 'DINAS TRANSMIGRASI DAN TENAGA KERJA KABUPATEN KEPULAUAN SULA', 'kepulauan sula', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S071', 'DINAS TRANSMIGRASI DAN TENAGA KERJA KAB. MUNA', 'muna', '2023-06-25 17:25:19', '2023-06-25 17:25:19'),
('S072', 'DINAS TENAGA KERJA PROVINSI SUMATERA UTARA', 'sumatera utara', '2023-06-25 17:25:20', '2023-06-25 17:25:20'),
('S073', 'DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI MALUKU', 'maluku', '2023-06-25 17:25:20', '2023-06-25 17:25:20'),
('S074', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KAB. KUTAI TIMUR', 'kutai timur', '2023-06-25 17:25:20', '2023-06-25 17:25:20'),
('S075', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KAB. BUOL', 'buol', '2023-06-25 17:25:20', '2023-06-25 17:25:20'),
('S076', 'DINAS KETENAGAKERJAAN DAN TRANSMIGRASI KABUPATEN BENGKULU UTARA', 'bengkulu utara', '2023-06-25 17:25:20', '2023-06-25 17:25:20'),
('S077', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KAB. PESISIR SELATAN', 'pesisir selatan', '2023-06-25 17:25:20', '2023-06-25 17:25:20'),
('S078', 'DINAS TENAGA KERJA DAN TRANSMIGRASI KAB. SUKAMARA', 'sukamara', '2023-06-25 17:25:20', '2023-06-25 17:25:20'),
('S079', 'DINAS KETENAGAKERJAAN DAN TRANSMIGRASI KABUPATEN BELU', 'belu', '2023-06-25 17:25:20', '2023-06-25 17:25:20');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('J49Enw3Sb03mUeSS6SivCk5tWi9gHt6pUNsftS3j', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMzJlNXRwM2VrMXo2WXRFNkZOc0ZSVE1mb0Y1MXhGN0tjVVVRZnNJZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1688429447);

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$2nVEexszinmwuQnNtYsFeeW4KW5E4yPzqynJOsft8R6piGmxAd2xK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail__laporans`
--
ALTER TABLE `detail__laporans`
  ADD PRIMARY KEY (`direktorat_id_direktorat`,`riwayat_laporan_satker_id_riwayat_laporan_satker`);

--
-- Indexes for table `direktorats`
--
ALTER TABLE `direktorats`
  ADD PRIMARY KEY (`id_direktorat`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rekap__laporans`
--
ALTER TABLE `rekap__laporans`
  ADD PRIMARY KEY (`riwayat_laporan_satker_id_riwayat_laporan_satker`);

--
-- Indexes for table `riwayat__laporans`
--
ALTER TABLE `riwayat__laporans`
  ADD PRIMARY KEY (`id_riwayat_laporan`);

--
-- Indexes for table `riwayat__laporan__satkers`
--
ALTER TABLE `riwayat__laporan__satkers`
  ADD PRIMARY KEY (`id_riwayat_laporan_satker`);

--
-- Indexes for table `satkers`
--
ALTER TABLE `satkers`
  ADD PRIMARY KEY (`id_satker`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
