-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2024 pada 13.01
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alfas`
--

CREATE TABLE `alfas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alfas`
--

INSERT INTO `alfas` (`id`, `student_id`, `1`, `2`, `3`, `4`, `5`, `6`, `created_at`, `updated_at`) VALUES
(2, 27, 100, 100, 100, 100, 100, 100, '2024-11-09 22:09:12', '2024-11-09 22:17:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bandks`
--

CREATE TABLE `bandks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bandks`
--

INSERT INTO `bandks` (`id`, `student_id`, `1`, `2`, `3`, `4`, `5`, `6`, `created_at`, `updated_at`) VALUES
(1, 27, 90, NULL, NULL, NULL, NULL, NULL, '2024-10-25 17:55:49', '2024-10-25 17:55:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barabs`
--

CREATE TABLE `barabs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barabs`
--

INSERT INTO `barabs` (`id`, `student_id`, `1`, `2`, `3`, `4`, `5`, `6`, `created_at`, `updated_at`) VALUES
(1, 27, 90, NULL, NULL, NULL, NULL, NULL, '2024-10-25 15:10:51', '2024-10-25 15:10:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bds`
--

CREATE TABLE `bds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berekayasas`
--

CREATE TABLE `berekayasas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bindos`
--

CREATE TABLE `bindos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bings`
--

CREATE TABLE `bings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bings`
--

INSERT INTO `bings` (`id`, `student_id`, `1`, `2`, `3`, `4`, `5`, `6`, `created_at`, `updated_at`) VALUES
(1, 28, 90, NULL, NULL, NULL, NULL, NULL, '2024-10-25 15:29:21', '2024-10-25 15:29:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bios`
--

CREATE TABLE `bios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bkerjas`
--

CREATE TABLE `bkerjas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bsundas`
--

CREATE TABLE `bsundas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bsundas`
--

INSERT INTO `bsundas` (`id`, `student_id`, `1`, `2`, `3`, `4`, `5`, `6`, `created_at`, `updated_at`) VALUES
(1, 27, 90, NULL, NULL, NULL, NULL, NULL, '2024-10-25 15:03:17', '2024-10-25 15:03:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1731302457),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1731302457;', 1731302457),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1731326115),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1731326115;', 1731326115),
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:7:{i:0;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:11:\"Kelola Guru\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:1;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:14:\"Kelola Student\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:2;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:12:\"Kelola Kelas\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:25:\"Kelola Murid dengan Kelas\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:4;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:6:\"Priode\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:9:\"Semsester\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:14:\"Jenis Kehiatan\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:2:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:10:\"wali kelas\";s:1:\"c\";s:3:\"web\";}}}', 1731385996);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_akademiks`
--

CREATE TABLE `catatan_akademiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catatan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `catatan_akademiks`
--

INSERT INTO `catatan_akademiks` (`id`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'Tingkatan prestasi, kedisiplinan, dan ketekunan dalam belajar. Semester depan harus lebih baik dari semester sekarang !', '2024-10-22 21:03:33', '2024-10-22 21:03:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_nilais`
--

CREATE TABLE `category_nilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category_nilais`
--

INSERT INTO `category_nilais` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(6, 'Sangat Baik', NULL, '2024-10-21 07:18:09', '2024-10-21 07:18:09'),
(7, 'Baik', NULL, '2024-10-21 07:18:17', '2024-10-21 07:18:17'),
(8, 'Cukup', NULL, '2024-10-21 07:18:24', '2024-10-21 07:18:24'),
(9, 'Kurang', NULL, '2024-10-21 07:18:29', '2024-10-21 07:18:29'),
(10, 'Buruk', NULL, '2024-10-21 07:18:40', '2024-10-21 07:18:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `classrooms`
--

CREATE TABLE `classrooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `classrooms`
--

INSERT INTO `classrooms` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(13, 'X', 'x', '2024-10-20 21:29:38', '2024-10-20 21:30:00'),
(14, 'XI', 'xi', '2024-10-20 21:30:12', '2024-10-20 21:30:12'),
(15, 'XII', 'xii', '2024-10-20 21:30:18', '2024-10-20 21:30:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `classroom_subject`
--

CREATE TABLE `classroom_subject` (
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cp_semesters`
--

CREATE TABLE `cp_semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pelajarankejuruan_id` bigint(20) DEFAULT NULL,
  `sm1` text DEFAULT NULL,
  `sm2` text DEFAULT NULL,
  `sm3` text DEFAULT NULL,
  `sm4` text DEFAULT NULL,
  `sm5` text DEFAULT NULL,
  `sm6` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cp_semesters`
--

INSERT INTO `cp_semesters` (`id`, `subject_id`, `pelajarankejuruan_id`, `sm1`, `sm2`, `sm3`, `sm4`, `sm5`, `sm6`, `created_at`, `updated_at`) VALUES
(2, 50, NULL, 'Membaca, Menyajikan, dan menganalisa ayat Al-Qur\'an dan Hadits tentang perintah untuk berkompetisi dalam  kebaikan dan etos kerja serta larangan pergaulan bebas dan zina\n', NULL, NULL, NULL, NULL, NULL, '2024-10-23 05:55:15', '2024-10-23 05:55:15'),
(3, 56, 4, 'Peserta didik mampu menguasai materi besaran dan satuan\n', NULL, NULL, NULL, NULL, NULL, '2024-10-23 07:44:37', '2024-10-23 07:47:09'),
(4, NULL, 5, 'Peserta didik mampu menguasai materi perubahan materi dan pemisahan campuran\n', NULL, NULL, NULL, NULL, NULL, '2024-10-23 07:45:44', '2024-10-23 07:45:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbelajars`
--

CREATE TABLE `dbelajars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dberbahasas`
--

CREATE TABLE `dberbahasas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dberbusanas`
--

CREATE TABLE `dberbusanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbergauls`
--

CREATE TABLE `dbergauls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbertindaks`
--

CREATE TABLE `dbertindaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `departements`
--

CREATE TABLE `departements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_department` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `departements`
--

INSERT INTO `departements` (`id`, `name_department`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Rekayasa Perangkat Lunak', 'rekayasa-perangkat-lunak', 'rpl ', '2024-10-14 19:22:34', '2024-10-20 21:28:04'),
(5, 'AKUNTANSI', 'akuntansi', 'AKUNTANSI', '2024-10-20 21:28:35', '2024-10-20 21:28:35'),
(6, 'Teknik Kendaraan Ringan Otomotif', 'teknik-kendaraan-ringan-otomotif', 'Teknik Kendaraan Ringan Otomotif', '2024-10-20 21:29:05', '2024-10-20 21:29:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dibadahs`
--

CREATE TABLE `dibadahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dk3s`
--

CREATE TABLE `dk3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dkeamanans`
--

CREATE TABLE `dkeamanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dmenggunakanfasilitas`
--

CREATE TABLE `dmenggunakanfasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dwaktus`
--

CREATE TABLE `dwaktus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `fandks`
--

CREATE TABLE `fandks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fandks`
--

INSERT INTO `fandks` (`id`, `student_id`, `1`, `2`, `3`, `4`, `5`, `6`, `created_at`, `updated_at`) VALUES
(1, 27, 90, NULL, NULL, NULL, NULL, NULL, '2024-10-25 18:02:19', '2024-10-25 18:02:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fisikas`
--

CREATE TABLE `fisikas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `home_rooms`
--

CREATE TABLE `home_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teachers_id` bigint(20) UNSIGNED NOT NULL,
  `classrooms_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED NOT NULL,
  `is_open` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `informatikas`
--

CREATE TABLE `informatikas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `informatikas`
--

INSERT INTO `informatikas` (`id`, `student_id`, `1`, `2`, `3`, `4`, `5`, `6`, `created_at`, `updated_at`) VALUES
(1, 27, 90, NULL, NULL, NULL, NULL, NULL, '2024-10-25 15:33:21', '2024-10-25 15:33:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `izins`
--

CREATE TABLE `izins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `izins`
--

INSERT INTO `izins` (`id`, `student_id`, `1`, `2`, `3`, `4`, `5`, `6`, `created_at`, `updated_at`) VALUES
(1, 27, 90, 100, 100, 100, 100, 100, '2024-11-10 00:17:58', '2024-11-10 00:17:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jengkes`
--

CREATE TABLE `jengkes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jengkes`
--

INSERT INTO `jengkes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'KUNJUNGAN INDUSTRI					', '2024-10-26 05:46:21', '2024-10-26 05:46:21'),
(2, 'PRAKTIK KERJA LAPANGAN (PKL/PSG)					', '2024-10-26 05:46:50', '2024-10-26 05:46:50'),
(3, 'UJI KOMPETENSI KEAHLIAN					', '2024-10-26 05:46:59', '2024-10-26 05:46:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kbs`
--

CREATE TABLE `kbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keberkerjaans`
--

CREATE TABLE `keberkerjaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kesenians`
--

CREATE TABLE `kesenians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kewirausahas`
--

CREATE TABLE `kewirausahas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kimias`
--

CREATE TABLE `kimias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kindustris`
--

CREATE TABLE `kindustris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `mitra` varchar(255) NOT NULL,
  `nilai` double UNSIGNED DEFAULT NULL,
  `lokasi` text NOT NULL,
  `jengke_id` bigint(20) UNSIGNED NOT NULL,
  `lama` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kindustris`
--

INSERT INTO `kindustris` (`id`, `student_id`, `mitra`, `nilai`, `lokasi`, `jengke_id`, `lama`, `waktu`, `created_at`, `updated_at`) VALUES
(1, 0, 'azzainiyyah', 100, 'Jl. Pondok Halimun Nagrog Sinar Barokah Kp.nagrog Rt 03 Rw 05', 2, '4 bulan', '19 September - 19 Desember', '2024-10-31 02:29:08', '2024-10-31 02:29:08'),
(2, 29, 'azzainiyyah', 100, 'j', 1, '4 bulan', '19 September - 19 Desember', '2024-11-10 22:02:39', '2024-11-10 22:02:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_amulias`
--

CREATE TABLE `k_amulias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '0001_01_01_000000_create_users_table', 1),
(12, '0001_01_01_000001_create_cache_table', 1),
(13, '0001_01_01_000002_create_jobs_table', 1),
(14, '2024_10_13_034437_create_category_nilais_table', 1),
(15, '2024_10_13_034513_create_classrooms_table', 1),
(16, '2024_10_13_034536_create_departements_table', 1),
(17, '2024_10_13_034554_create_priodes_table', 1),
(18, '2024_10_13_034616_create_students_table', 1),
(19, '2024_10_13_034632_create_subjects_table', 1),
(20, '2024_10_13_034656_create_teachers_table', 1),
(22, '2024_10_13_090502_add_column_profile_to_teachers_table', 2),
(24, '2024_10_13_093747_add_column_to_students_table', 3),
(25, '2024_10_14_010113_add_column_to_classrooms_table', 4),
(27, '2024_10_14_010306_add_column_to_departements_table', 5),
(28, '2024_10_15_005959_create_home_rooms_table', 6),
(29, '2024_10_15_010827_create_student_has_classes_table', 7),
(31, '2024_10_16_071051_add_column_status_to_students_table', 8),
(32, '2024_10_16_103501_create_subjects_table', 9),
(33, '2024_10_17_073436_create_classroom_subject_table', 10),
(34, '2024_10_17_093742_add_column_kode_to_sunjects_table', 11),
(35, '2024_10_17_150027_create_permission_tables', 12),
(36, '2024_10_19_094606_add_column_classrooms_to_student_has_classes', 13),
(37, '2024_10_19_133859_create_nilais_table', 14),
(38, '2024_10_21_060315_create_semesters_table', 15),
(39, '2024_10_21_071100_add_column_to_teacher_table', 16),
(40, '2024_10_21_133116_add_column_teacher_id_to_subjects_table', 17),
(41, '2024_10_23_030025_create_pelajaran_kejuruans_table', 18),
(43, '2024_10_23_033042_add_column_kode_to_pelajaran_kejuruans_table', 19),
(44, '2024_10_23_035546_create_catatan_akademiks_table', 19),
(46, '2024_10_23_094928_create_cp_semseters_table', 20),
(50, '2024_10_23_101257_create_cp_semesters_table', 21),
(51, '2024_10_25_025318_create_pais_table', 22),
(52, '2024_10_25_090457_create_pps_table', 23),
(53, '2024_10_25_094545_create_bindos_table', 24),
(54, '2024_10_25_095502_create_pjoks_table', 25),
(55, '2024_10_25_214153_create_sejarahs_table', 26),
(56, '2024_10_25_215009_create_sbs_table', 27),
(57, '2024_10_25_215509_create_bsundas_table', 28),
(58, '2024_10_25_220417_create_barabs_table', 29),
(59, '2024_10_25_221514_create_pais_table', 30),
(60, '2024_10_25_222242_create_mtks_table', 31),
(61, '2024_10_25_222631_create_bings_table', 32),
(62, '2024_10_25_223009_create_informatikas_table', 33),
(63, '2024_10_25_223445_create_fisikas_table', 34),
(64, '2024_10_25_223745_create_kimias_table', 35),
(65, '2024_10_26_004532_create_bandks_table', 36),
(66, '2024_10_26_005938_create_fandks_table', 37),
(67, '2024_10_26_011326_create_pemturs_table', 38),
(68, '2024_10_26_011737_create_pbos_table', 39),
(69, '2024_10_26_011958_create_ppls_table', 40),
(70, '2024_10_26_123151_create_jengkes_table', 41),
(71, '2024_10_27_074756_create_bds_table', 42),
(72, '2024_10_27_083722_create_pbtgms_table', 43),
(73, '2024_10_27_084329_create_pwebs_table', 44),
(74, '2024_10_27_085439_create_ppbs_table', 45),
(75, '2024_10_27_090648_create_pkks_table', 46),
(76, '2024_10_27_091408_create_kbs_table', 46),
(77, '2024_10_31_090137_create_kindustris_table', 47),
(78, '2024_10_31_093618_add_column_name_to_kindustri_table', 48),
(79, '2024_10_31_102912_create_pkls_table', 49),
(80, '2024_10_31_103740_create_uji_koms_table', 50),
(81, '2024_11_01_004828_create_pramukas_table', 51),
(82, '2024_11_01_005630_create_kesenians_table', 52),
(83, '2024_11_01_005939_create_pramadhans_table', 53),
(84, '2024_11_01_010229_create_okesehatans_table', 53),
(85, '2024_11_01_010553_create_k_amulias_table', 54),
(86, '2024_11_01_010845_create_bkerjas_table', 55),
(87, '2024_11_01_020817_create_kewirausahas_table', 56),
(88, '2024_11_01_021054_create_berekayasas_table', 57),
(89, '2024_11_01_021318_create_keberkerjaans_table', 58),
(90, '2024_11_01_031740_create_sakits_table', 59),
(91, '2024_11_01_032008_create_izins_table', 60),
(92, '2024_11_01_033039_create_alfas_table', 61),
(93, '2024_11_03_090530_create_dwaktus_table', 62),
(94, '2024_11_03_091830_create_dibadahs_table', 62),
(95, '2024_11_03_101007_create_dbelajars_table', 62),
(96, '2024_11_03_102502_create_dbergauls_table', 62),
(97, '2024_11_03_103016_create_dberbusanas_table', 62),
(98, '2024_11_03_103218_rollback', 62),
(99, '2024_11_03_103546_create_dmenggunakanfasilitas_table', 62),
(100, '2024_11_03_104426_create_dk3s_table', 62),
(101, '2024_11_03_104919_create_dberbahasas_table', 62),
(102, '2024_11_03_105248_create_dbertindaks_table', 62),
(103, '2024_11_03_105608_create_dkeamanans_table', 62),
(104, '2024_11_03_112837_create_pberbaktis_table', 62),
(105, '2024_11_03_122905_create_pbusanamuslims_table', 62),
(106, '2024_11_03_123502_create_pmemeliharaadabs_table', 62),
(107, '2024_11_03_123851_create_pmembacaalqurans_table', 62),
(108, '2024_11_03_125716_create_pmemeliharas_table', 62),
(109, '2024_11_03_130541_create_pmendirikansholats_table', 62),
(110, '2024_11_03_131011_create_ptalimdanceramahs_table', 62),
(111, '2024_11_03_131505_create_pinfaqsejakdinis_table', 62),
(112, '2024_11_03_131900_create_pmelaksanakansaums_table', 62),
(113, '2024_11_03_132204_create_pmencintaitanahairs_table', 62),
(115, '2024_11_06_003641_add_column_to_student_table', 63),
(116, '2024_11_10_033927_create_bios_table', 64);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mtks`
--

CREATE TABLE `mtks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilais`
--

CREATE TABLE `nilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `category_nilai_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` double UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilais`
--

INSERT INTO `nilais` (`id`, `class_id`, `student_id`, `priode_id`, `teacher_id`, `subject_id`, `category_nilai_id`, `nilai`, `created_at`, `updated_at`) VALUES
(11, 13, 27, 3, 1, 1, 4, 100, NULL, NULL),
(12, 13, 27, 1, 1, 50, 6, 90, NULL, NULL),
(13, 13, 27, 1, 1, 51, 6, 90, NULL, NULL),
(14, 13, 43, 1, 1, 56, 6, 90, NULL, NULL),
(15, 15, 35, 2, 1, 52, 8, 100, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `okesehatans`
--

CREATE TABLE `okesehatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pais`
--

CREATE TABLE `pais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pais`
--

INSERT INTO `pais` (`id`, `student_id`, `1`, `2`, `3`, `4`, `5`, `6`, `created_at`, `updated_at`) VALUES
(1, 27, 100, 100, 100, 100, 100, 100, '2024-10-25 15:18:27', '2024-11-09 20:02:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pberbaktis`
--

CREATE TABLE `pberbaktis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pberbaktis`
--

INSERT INTO `pberbaktis` (`id`, `student_id`, `1`, `2`, `3`, `4`, `5`, `6`, `created_at`, `updated_at`) VALUES
(1, 27, 789, NULL, NULL, NULL, NULL, NULL, '2024-11-10 22:16:32', '2024-11-10 22:16:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbos`
--

CREATE TABLE `pbos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbtgms`
--

CREATE TABLE `pbtgms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbusanamuslims`
--

CREATE TABLE `pbusanamuslims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajaran_kejuruans`
--

CREATE TABLE `pelajaran_kejuruans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `bidang` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelajaran_kejuruans`
--

INSERT INTO `pelajaran_kejuruans` (`id`, `kode`, `name`, `bidang`, `created_at`, `updated_at`) VALUES
(1, 'Mtk', 'Matematika', NULL, '2024-10-22 20:47:12', '2024-10-22 20:47:12'),
(2, 'Bing', 'Bahasa Inggris', NULL, '2024-10-22 20:47:25', '2024-10-22 20:47:25'),
(3, 'Tik', 'Informatika', NULL, '2024-10-22 20:48:04', '2024-10-22 20:48:04'),
(4, 'IPA', 'Projek IPA', 'FIsika', '2024-10-22 20:48:52', '2024-10-22 20:48:52'),
(5, 'IPA', 'Projek IPA', 'Kimia', '2024-10-22 20:49:03', '2024-10-22 20:49:03'),
(6, NULL, 'Dasar Program Keahlian', 'Proses Bisnis dan K3LH				', '2024-10-22 20:49:55', '2024-10-22 20:52:08'),
(7, NULL, 'Dasar Program Keahlian', 'Profesi dan Kewirausahaan				', '2024-10-22 20:50:23', '2024-10-22 20:50:23'),
(8, NULL, 'Dasar Program Keahlian', 'Pemrograman Terstruktur				', '2024-10-22 20:50:42', '2024-10-22 20:50:42'),
(9, NULL, 'Dasar Program Keahlian', 'Pemrograman Berorientasi Objek', '2024-10-22 20:51:23', '2024-10-22 20:51:23'),
(10, NULL, 'Dasar Program Keahlian', 'Orientasi Dasar Pengembangan Perangkat Lunak dan Gim				', '2024-10-22 20:51:45', '2024-10-22 20:51:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemturs`
--

CREATE TABLE `pemturs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemturs`
--

INSERT INTO `pemturs` (`id`, `student_id`, `1`, `2`, `3`, `4`, `5`, `6`, `created_at`, `updated_at`) VALUES
(1, 27, 90, NULL, NULL, NULL, NULL, NULL, '2024-10-25 18:16:54', '2024-10-25 18:16:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(3, 'Kelola Guru', 'web', '2024-11-08 15:47:09', '2024-11-08 15:47:09'),
(4, 'Kelola Student', 'web', '2024-11-08 15:47:40', '2024-11-08 15:47:40'),
(5, 'Kelola Kelas', 'web', '2024-11-08 15:48:04', '2024-11-08 15:48:04'),
(6, 'Kelola Murid dengan Kelas', 'web', '2024-11-08 15:54:37', '2024-11-08 15:54:37'),
(7, 'Priode', 'web', '2024-11-08 16:42:55', '2024-11-08 16:42:55'),
(8, 'Semsester', 'web', '2024-11-08 16:43:23', '2024-11-08 16:43:23'),
(9, 'Jenis Kehiatan', 'web', '2024-11-08 16:43:45', '2024-11-08 16:43:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinfaqsejakdinis`
--

CREATE TABLE `pinfaqsejakdinis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pjoks`
--

CREATE TABLE `pjoks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pjoks`
--

INSERT INTO `pjoks` (`id`, `student_id`, `1`, `2`, `3`, `4`, `5`, `6`, `created_at`, `updated_at`) VALUES
(1, 28, 90, NULL, NULL, NULL, NULL, NULL, '2024-10-25 02:59:58', '2024-10-25 02:59:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pkks`
--

CREATE TABLE `pkks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pkls`
--

CREATE TABLE `pkls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` double UNSIGNED DEFAULT NULL,
  `lokasi` text NOT NULL,
  `jengke_id` bigint(20) UNSIGNED NOT NULL,
  `lama` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pmelaksanakansaums`
--

CREATE TABLE `pmelaksanakansaums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pmembacaalqurans`
--

CREATE TABLE `pmembacaalqurans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pmemeliharaadabs`
--

CREATE TABLE `pmemeliharaadabs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pmemeliharas`
--

CREATE TABLE `pmemeliharas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pmencintaitanahairs`
--

CREATE TABLE `pmencintaitanahairs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pmendirikansholats`
--

CREATE TABLE `pmendirikansholats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppbs`
--

CREATE TABLE `ppbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppls`
--

CREATE TABLE `ppls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pps`
--

CREATE TABLE `pps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pps`
--

INSERT INTO `pps` (`id`, `student_id`, `1`, `2`, `3`, `4`, `5`, `6`, `created_at`, `updated_at`) VALUES
(1, 27, 90, NULL, NULL, NULL, NULL, NULL, '2024-10-25 02:35:22', '2024-10-25 02:35:22'),
(2, 28, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-25 02:36:06', '2024-10-25 02:36:06'),
(3, 29, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-25 02:36:11', '2024-10-25 02:36:11'),
(4, 30, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-25 02:36:15', '2024-10-25 02:36:15'),
(5, 35, 90, NULL, NULL, NULL, NULL, NULL, '2024-10-25 02:37:00', '2024-10-25 02:37:00'),
(6, 33, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-25 02:38:35', '2024-10-25 02:38:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pramadhans`
--

CREATE TABLE `pramadhans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pramukas`
--

CREATE TABLE `pramukas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `priodes`
--

CREATE TABLE `priodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `priodes`
--

INSERT INTO `priodes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '2023/2024', '2024-10-13 04:32:11', '2024-10-13 04:32:11'),
(2, '2021/2022', '2024-10-13 04:33:37', '2024-10-13 04:33:37'),
(3, '2024/2025', '2024-10-14 21:13:16', '2024-10-14 21:13:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ptalimdanceramahs`
--

CREATE TABLE `ptalimdanceramahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pwebs`
--

CREATE TABLE `pwebs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-10-17 08:19:54', '2024-10-17 08:19:54'),
(3, 'wali kelas', 'web', '2024-10-17 08:22:04', '2024-10-17 08:23:18'),
(4, 'student', 'web', '2024-10-17 08:23:43', '2024-10-19 22:55:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(3, 1),
(3, 3),
(4, 1),
(4, 3),
(5, 1),
(6, 1),
(6, 3),
(7, 1),
(8, 1),
(9, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sakits`
--

CREATE TABLE `sakits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sbs`
--

CREATE TABLE `sbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sbs`
--

INSERT INTO `sbs` (`id`, `student_id`, `1`, `2`, `3`, `4`, `5`, `6`, `created_at`, `updated_at`) VALUES
(1, 27, NULL, NULL, 90, NULL, NULL, NULL, '2024-10-25 14:53:22', '2024-10-25 14:53:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarahs`
--

CREATE TABLE `sejarahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `1` double UNSIGNED DEFAULT NULL,
  `2` double UNSIGNED DEFAULT NULL,
  `3` double UNSIGNED DEFAULT NULL,
  `4` double UNSIGNED DEFAULT NULL,
  `5` double UNSIGNED DEFAULT NULL,
  `6` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sejarahs`
--

INSERT INTO `sejarahs` (`id`, `student_id`, `1`, `2`, `3`, `4`, `5`, `6`, `created_at`, `updated_at`) VALUES
(1, 27, 90, NULL, NULL, NULL, NULL, NULL, '2024-10-25 14:48:43', '2024-10-25 14:48:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL DEFAULT 'aktif',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `semesters`
--

INSERT INTO `semesters` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Genap', 'aktif', '2024-10-20 23:40:39', '2024-10-20 23:43:44'),
(2, 'Ganjil', 'tidak aktif', '2024-10-20 23:43:59', '2024-10-20 23:43:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7xT8hjjuJ2FbJOG5bBY18vYzL7jokIwhiqRw4nwq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiSkV0djBhVUJ5T1VKc2piR2o1emJsNlJ4bXVmVk9UQVJ4U0hObklCVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9zdHVkZW50cyI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkUmVsai9ycDBUUEQ1M2IxVEFQNlVlZXpRTjRWT3NSdmw2TXRRbnBjeVJuTFhnSnUuT1RoVFciO3M6NjoidGFibGVzIjthOjE6e3M6MjE6Ikxpc3RTdHVkZW50c19wZXJfcGFnZSI7czoyOiI1MCI7fX0=', 1731303386),
('Jzo6YHQbMcKuRPhv01dobp45rQ9xmRIR3qjZfbet', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVXdvbVQ4RXRJOVNFQUxGeVV6WGxXQVFqSTRFMnZyNHFWT1J1MUpwZiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM2OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvc3R1ZGVudC9uaWxhaXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkemxON0NtRC9XQzdCWWZRR3pvbmJJLldEaUszUEU5eEo4RzgzWFVFWVZ4ZUlzcVB4Q2ZvSnUiO30=', 1731249380),
('ljDAIw1YIPVyspqqn7aD1uzcg3HGWT9wn5EErSAQ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSkxFWEJ6b1hDaG8zNjNoVUM3Wm5QUjdTOVZ4SUJaR1RvNkljR2ttMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9yb2xlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkUmVsai9ycDBUUEQ1M2IxVEFQNlVlZXpRTjRWT3NSdmw2TXRRbnBjeVJuTFhnSnUuT1RoVFciO30=', 1731326332),
('O8KdMZDIIa4epbWVGvrx6555o4b2Y4VLkhvZNJNL', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoieTZta2p6YlJLbTVRT2lqcEFGVTdoOXh5SWY3RDdJZmNTcDFmTWtLWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1731299701);

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) DEFAULT NULL,
  `nisn` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `gender` enum('Laki - Laki','Perempuan') NOT NULL DEFAULT 'Perempuan',
  `birthday` date DEFAULT NULL,
  `tempatl` varchar(255) DEFAULT NULL,
  `agama` enum('Islam','Katolik','Protestan','Hindu','Buddha','Khonghucu') NOT NULL DEFAULT 'Islam',
  `kwnegara` enum('Warga Negara Indonesia','Kewarganegaraan Asing') NOT NULL DEFAULT 'Warga Negara Indonesia',
  `statusdk` varchar(255) DEFAULT NULL,
  `anakke` enum('1','2','3','4','5','6','7','8','9','10') DEFAULT '1',
  `alamat` text DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `asekolah` varchar(255) DEFAULT NULL,
  `classroom_id` bigint(20) UNSIGNED DEFAULT NULL,
  `departement_id` bigint(20) UNSIGNED DEFAULT 1,
  `nayah` varchar(255) DEFAULT NULL,
  `nibu` varchar(255) DEFAULT NULL,
  `pkrjnayah` varchar(255) DEFAULT NULL,
  `pkrjnibu` varchar(255) DEFAULT NULL,
  `alamatot` text DEFAULT NULL,
  `contactot` varchar(255) DEFAULT NULL,
  `nwali` varchar(255) DEFAULT NULL,
  `pkrjnwali` varchar(255) DEFAULT NULL,
  `alamatwali` text DEFAULT NULL,
  `contactw` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `status` enum('accept','off','move','grade') NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `nis`, `nisn`, `name`, `gender`, `birthday`, `tempatl`, `agama`, `kwnegara`, `statusdk`, `anakke`, `alamat`, `contact`, `asekolah`, `classroom_id`, `departement_id`, `nayah`, `nibu`, `pkrjnayah`, `pkrjnibu`, `alamatot`, `contactot`, `nwali`, `pkrjnwali`, `alamatwali`, `contactw`, `profile`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(27, '1', NULL, 'Adly Arasya Ramadhan Putra', 'Laki - Laki', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile/01JBZCVFH5027CCR7PY9Q8H745.jpg', 'accept', 2, '2024-10-20 21:22:16', '2024-11-06 00:12:21'),
(28, '2', NULL, 'Ahmad Ridwan Firdaus', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(29, '3', NULL, 'Ahmad Syaiful Makruf', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(30, '4', NULL, 'Azka Rafthaya Syahdan', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(31, '5', NULL, 'Daffa Nugraha Yudika', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(32, '6', NULL, 'Dhea Azahra Patrysia', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(33, '7', NULL, 'Fadliansyah Rachmat', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(34, '8', NULL, 'Fauziah Nur Afzan', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(35, '9', NULL, 'Ineng Najila', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(36, '10', NULL, 'Kaisan Amar Assidiq', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(37, '11', NULL, 'Mochamad Fadly Ibnu Maula', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(38, '12', NULL, 'Muhamad Abdul Ropik', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(39, '13', NULL, 'Muhammad Dikril Hakim', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(40, '14', NULL, 'Muhammad Ikbar Fildzah', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(41, '15', NULL, 'Muhammad Noval', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(42, '16', NULL, 'Nazwa Alfia Rexa', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(43, '17', NULL, 'Siti Salwa Safitri', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(44, '18', NULL, 'Tasya Ratu Zansabila', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(47, '10.2324.03.028', '84449862', 'ADLY ARASYA RAMADHAN PUTRA', 'Laki - Laki', NULL, 'jakarta', 'Islam', 'Warga Negara Indonesia', NULL, '2', NULL, NULL, NULL, 10, NULL, 'Iman', 'MU MINAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-11-06 00:04:42', '2024-11-06 00:04:42'),
(48, '10.2324.03.028', '84449862', 'ADLY ARASYA RAMADHAN PUTRA', 'Laki - Laki', NULL, 'jakarta', 'Islam', 'Warga Negara Indonesia', NULL, '2', NULL, NULL, NULL, 10, NULL, 'Iman', 'MU MINAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-11-06 00:04:51', '2024-11-06 00:04:51'),
(49, '10.2324.03.028', '84449862', 'ADLY ARASYA RAMADHAN PUTRA', 'Laki - Laki', '2003-08-09', 'jakarta', 'Islam', 'Warga Negara Indonesia', NULL, '2', NULL, NULL, NULL, 13, 4, 'Iman', 'MU MINAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-11-06 00:10:11', '2024-11-06 00:11:19'),
(50, '10.2324.03.028', '84449862', 'albar', 'Laki - Laki', NULL, 'jakarta', 'Islam', 'Warga Negara Indonesia', NULL, '2', NULL, NULL, NULL, 10, NULL, 'Iman', 'MU MINAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-11-10 22:20:11', '2024-11-10 22:20:11'),
(51, '10.2324.03.028', '84449862', 'yusup', 'Laki - Laki', NULL, 'jakarta', 'Islam', 'Warga Negara Indonesia', NULL, '2', NULL, NULL, NULL, 10, NULL, 'Iman', 'MU MINAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accept', NULL, '2024-11-10 22:20:11', '2024-11-10 22:20:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `student_has_classes`
--

CREATE TABLE `student_has_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `students_id` bigint(20) UNSIGNED NOT NULL,
  `classrooms_id` bigint(20) UNSIGNED DEFAULT NULL,
  `departements_id` bigint(20) UNSIGNED DEFAULT NULL,
  `priode_id` bigint(20) UNSIGNED NOT NULL,
  `is_open` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `homerooms_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `student_has_classes`
--

INSERT INTO `student_has_classes` (`id`, `students_id`, `classrooms_id`, `departements_id`, `priode_id`, `is_open`, `created_at`, `updated_at`, `homerooms_id`) VALUES
(12, 27, 13, 4, 1, 1, NULL, NULL, NULL),
(13, 28, 14, 5, 1, 1, NULL, NULL, NULL),
(14, 29, 14, 5, 1, 1, NULL, NULL, NULL),
(15, 30, 14, 5, 1, 1, NULL, NULL, NULL),
(16, 31, 14, 5, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `teacher` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `subjects`
--

INSERT INTO `subjects` (`id`, `kode`, `name`, `teacher`, `created_at`, `updated_at`) VALUES
(50, 'PAIBP', 'Pendidikan Agama & Budi Pekerti', 4, '2024-10-21 06:44:34', '2024-10-21 07:04:27'),
(51, 'PP', 'Pendidikan Pancasila ', 4, '2024-10-22 18:23:10', '2024-10-22 18:23:10'),
(52, 'PJOK', 'Pendidikan Jasmani, Olahraga, dan Kesehatan', NULL, '2024-10-22 18:25:18', '2024-10-22 18:25:18'),
(53, 'SJ', 'Sejarah ', NULL, '2024-10-22 18:25:36', '2024-10-22 18:25:36'),
(54, 'SB', 'Seni Budaya (*Musik/Rupa/Teater/Tari)', NULL, '2024-10-22 18:25:53', '2024-10-22 18:25:53'),
(56, 'IPA', 'Ilmu Pengetahuan Alam', NULL, '2024-10-23 07:46:52', '2024-10-23 07:46:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('Ya','tidak') NOT NULL DEFAULT 'tidak',
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teachers`
--

INSERT INTO `teachers` (`id`, `nip`, `name`, `status`, `address`, `created_at`, `updated_at`, `profile`) VALUES
(3, '12345678', 'Ai Mursyidah Zein, SE', 'Ya', NULL, '2024-10-20 20:02:34', '2024-10-21 00:25:23', 'teacher/01JAPZERBFNCBB4JF9NH3Q98F1.jpg'),
(4, NULL, 'Asep H. Anwar, S.Pd.I', 'tidak', NULL, '2024-10-20 20:03:14', '2024-10-20 20:03:14', NULL),
(5, NULL, 'Ai Rahmatillah.,S.Pd', 'tidak', NULL, '2024-10-20 20:03:28', '2024-10-20 20:03:28', NULL),
(6, NULL, 'Yani Fitriyani S.Pd', 'tidak', NULL, '2024-10-20 20:03:47', '2024-10-20 20:03:47', NULL),
(7, NULL, 'Dafit Abdurozak S.Pd', 'tidak', NULL, '2024-10-20 20:03:56', '2024-10-20 20:03:56', NULL),
(8, NULL, 'Kilah S.Pd', 'tidak', NULL, '2024-10-20 20:04:25', '2024-10-20 20:04:25', NULL),
(9, NULL, 'M.Iqbal Farhan Zhovran.,S.S', 'tidak', NULL, '2024-10-20 20:04:46', '2024-10-20 20:04:46', NULL),
(10, NULL, 'Jamaludin R Surya.,S.Pd.I., S.Kom', 'tidak', NULL, '2024-10-20 20:04:54', '2024-10-20 20:04:54', NULL),
(11, NULL, 'Suherman.,S.Pd.I', 'tidak', NULL, '2024-10-20 20:05:03', '2024-10-20 20:05:03', NULL),
(12, NULL, 'Kusdian.,S.Ud', 'tidak', NULL, '2024-10-20 20:05:16', '2024-10-20 20:05:16', NULL),
(13, NULL, 'Weli Kusnadi M.Kom.,MTA', 'tidak', NULL, '2024-10-20 20:05:25', '2024-10-20 20:05:25', NULL),
(14, NULL, 'Neni Nuraeni S.Pd', 'tidak', NULL, '2024-10-20 20:05:37', '2024-10-20 20:05:37', NULL),
(15, NULL, 'Muhamad Nasir.,S.E', 'tidak', NULL, '2024-10-20 20:05:47', '2024-10-20 20:05:47', NULL),
(16, NULL, ' Ikramulkarim.,A.Md.,S.T', 'tidak', NULL, '2024-10-20 20:05:57', '2024-10-20 20:05:57', NULL),
(17, NULL, 'Ahmad Rifai Raden', 'tidak', NULL, '2024-10-20 20:06:13', '2024-10-20 20:06:13', NULL),
(18, NULL, 'Zulfatu nai\'mah, S.Kom', 'tidak', NULL, '2024-10-20 20:06:25', '2024-10-20 20:06:25', NULL),
(19, NULL, 'M.Rizal Firmansyah, S.Kom', 'tidak', NULL, '2024-10-20 20:06:40', '2024-10-20 20:06:40', NULL),
(20, NULL, 'Siti Rasyidah nurainiyah, S.Pd', 'tidak', NULL, '2024-10-20 20:06:48', '2024-10-20 20:06:48', NULL),
(21, NULL, 'muhamad Khoerulloh, S.Kom', 'tidak', NULL, '2024-10-20 20:06:58', '2024-10-20 20:06:58', NULL),
(22, NULL, 'Muhidin.,Amd.T.,S.Pd', 'tidak', NULL, '2024-10-20 20:07:11', '2024-10-20 20:07:11', NULL),
(23, NULL, 'Andi Rimi.S.Pd', 'tidak', NULL, '2024-10-20 20:07:23', '2024-10-20 20:07:23', NULL),
(24, NULL, 'Ani Hanifah Mardiyah.,S.E', 'tidak', NULL, '2024-10-20 20:07:37', '2024-10-20 20:07:37', NULL),
(25, NULL, 'Zain Lizsa.,S.E,M.M', 'tidak', NULL, '2024-10-20 20:07:46', '2024-10-20 20:07:46', NULL),
(26, NULL, 'Dian Nurazizah Hasibuan.,S.Pd', 'tidak', NULL, '2024-10-20 20:07:58', '2024-10-20 20:07:58', NULL),
(27, NULL, 'Ahmad Sholeh, S.Pd', 'tidak', NULL, '2024-10-20 20:08:13', '2024-10-20 20:08:13', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `uji_koms`
--

CREATE TABLE `uji_koms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` double UNSIGNED DEFAULT NULL,
  `jengke_id` bigint(20) UNSIGNED NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `uji_koms`
--

INSERT INTO `uji_koms` (`id`, `student_id`, `nilai`, `jengke_id`, `waktu`, `created_at`, `updated_at`) VALUES
(1, 29, 100, 3, '19 September - 19 Desember', '2024-11-10 22:07:38', '2024-11-10 22:07:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$Relj/rp0TPD53b1TAP6UeezQN4VOsRvl6MtQnpcyRnLXgJu.OThTW', NULL, '2024-10-13 01:59:34', '2024-10-18 19:12:02'),
(2, 'user', 'user@gmail.com', NULL, '$2y$12$zlN7CmD/WC7BYfQGzonbI.WDiK3PE9xJ8G83XUEYVxeIsqPxCfoJu', NULL, '2024-10-18 18:25:12', '2024-10-18 18:25:12'),
(5, 'wali kelas', 'walikelas@gmail.com', NULL, '$2y$12$7wR4mC84CMWEnnH70XI2yuY5CsdzciMWlUQE4.sBND8zFcfeFzJ0y', NULL, '2024-10-19 23:09:36', '2024-10-19 23:09:36'),
(14, 'albar', 'albar@gmail.com', NULL, '$2y$12$8dMLW3N/Cc8W7aldOZTg.O4szrZBpU348GPp9rIUmALloHMnK6xmm', NULL, '2024-11-08 17:57:24', '2024-11-08 17:57:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alfas`
--
ALTER TABLE `alfas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bandks`
--
ALTER TABLE `bandks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barabs`
--
ALTER TABLE `barabs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bds`
--
ALTER TABLE `bds`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berekayasas`
--
ALTER TABLE `berekayasas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bindos`
--
ALTER TABLE `bindos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bings`
--
ALTER TABLE `bings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bios`
--
ALTER TABLE `bios`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bkerjas`
--
ALTER TABLE `bkerjas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bsundas`
--
ALTER TABLE `bsundas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `catatan_akademiks`
--
ALTER TABLE `catatan_akademiks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category_nilais`
--
ALTER TABLE `category_nilais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `classroom_subject`
--
ALTER TABLE `classroom_subject`
  ADD KEY `classroom_subject_classroom_id_foreign` (`classroom_id`),
  ADD KEY `classroom_subject_subject_id_foreign` (`subject_id`);

--
-- Indeks untuk tabel `cp_semesters`
--
ALTER TABLE `cp_semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dbelajars`
--
ALTER TABLE `dbelajars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dberbahasas`
--
ALTER TABLE `dberbahasas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dberbusanas`
--
ALTER TABLE `dberbusanas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dbergauls`
--
ALTER TABLE `dbergauls`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dbertindaks`
--
ALTER TABLE `dbertindaks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dibadahs`
--
ALTER TABLE `dibadahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dk3s`
--
ALTER TABLE `dk3s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dkeamanans`
--
ALTER TABLE `dkeamanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dmenggunakanfasilitas`
--
ALTER TABLE `dmenggunakanfasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dwaktus`
--
ALTER TABLE `dwaktus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `fandks`
--
ALTER TABLE `fandks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fisikas`
--
ALTER TABLE `fisikas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home_rooms`
--
ALTER TABLE `home_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_rooms_teachers_id_foreign` (`teachers_id`),
  ADD KEY `home_rooms_classrooms_id_foreign` (`classrooms_id`),
  ADD KEY `home_rooms_priode_id_foreign` (`priode_id`);

--
-- Indeks untuk tabel `informatikas`
--
ALTER TABLE `informatikas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `izins`
--
ALTER TABLE `izins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jengkes`
--
ALTER TABLE `jengkes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kbs`
--
ALTER TABLE `kbs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keberkerjaans`
--
ALTER TABLE `keberkerjaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kesenians`
--
ALTER TABLE `kesenians`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kewirausahas`
--
ALTER TABLE `kewirausahas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kimias`
--
ALTER TABLE `kimias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kindustris`
--
ALTER TABLE `kindustris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `k_amulias`
--
ALTER TABLE `k_amulias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `mtks`
--
ALTER TABLE `mtks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `okesehatans`
--
ALTER TABLE `okesehatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pberbaktis`
--
ALTER TABLE `pberbaktis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pbos`
--
ALTER TABLE `pbos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pbtgms`
--
ALTER TABLE `pbtgms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pbusanamuslims`
--
ALTER TABLE `pbusanamuslims`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelajaran_kejuruans`
--
ALTER TABLE `pelajaran_kejuruans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemturs`
--
ALTER TABLE `pemturs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `pinfaqsejakdinis`
--
ALTER TABLE `pinfaqsejakdinis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pjoks`
--
ALTER TABLE `pjoks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pkks`
--
ALTER TABLE `pkks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pkls`
--
ALTER TABLE `pkls`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pmelaksanakansaums`
--
ALTER TABLE `pmelaksanakansaums`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pmembacaalqurans`
--
ALTER TABLE `pmembacaalqurans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pmemeliharaadabs`
--
ALTER TABLE `pmemeliharaadabs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pmemeliharas`
--
ALTER TABLE `pmemeliharas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pmencintaitanahairs`
--
ALTER TABLE `pmencintaitanahairs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pmendirikansholats`
--
ALTER TABLE `pmendirikansholats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ppbs`
--
ALTER TABLE `ppbs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ppls`
--
ALTER TABLE `ppls`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pps`
--
ALTER TABLE `pps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pramadhans`
--
ALTER TABLE `pramadhans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pramukas`
--
ALTER TABLE `pramukas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `priodes`
--
ALTER TABLE `priodes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `priodes_name_unique` (`name`);

--
-- Indeks untuk tabel `ptalimdanceramahs`
--
ALTER TABLE `ptalimdanceramahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pwebs`
--
ALTER TABLE `pwebs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `sakits`
--
ALTER TABLE `sakits`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sbs`
--
ALTER TABLE `sbs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sejarahs`
--
ALTER TABLE `sejarahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `student_has_classes`
--
ALTER TABLE `student_has_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_has_classes_students_id_foreign` (`students_id`),
  ADD KEY `student_has_classes_homerooms_id_foreign` (`homerooms_id`),
  ADD KEY `student_has_classes_priode_id_foreign` (`priode_id`),
  ADD KEY `student_has_classes_classrooms_id_foreign` (`classrooms_id`),
  ADD KEY `student_has_classes_departements_id_foreign` (`departements_id`);

--
-- Indeks untuk tabel `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_teachers_id_foreign` (`teacher`);

--
-- Indeks untuk tabel `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `uji_koms`
--
ALTER TABLE `uji_koms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alfas`
--
ALTER TABLE `alfas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `bandks`
--
ALTER TABLE `bandks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `barabs`
--
ALTER TABLE `barabs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bds`
--
ALTER TABLE `bds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `berekayasas`
--
ALTER TABLE `berekayasas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bindos`
--
ALTER TABLE `bindos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bings`
--
ALTER TABLE `bings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bios`
--
ALTER TABLE `bios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bkerjas`
--
ALTER TABLE `bkerjas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bsundas`
--
ALTER TABLE `bsundas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `catatan_akademiks`
--
ALTER TABLE `catatan_akademiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `category_nilais`
--
ALTER TABLE `category_nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `cp_semesters`
--
ALTER TABLE `cp_semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dbelajars`
--
ALTER TABLE `dbelajars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dberbahasas`
--
ALTER TABLE `dberbahasas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dberbusanas`
--
ALTER TABLE `dberbusanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dbergauls`
--
ALTER TABLE `dbergauls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dbertindaks`
--
ALTER TABLE `dbertindaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `departements`
--
ALTER TABLE `departements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dibadahs`
--
ALTER TABLE `dibadahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dk3s`
--
ALTER TABLE `dk3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dkeamanans`
--
ALTER TABLE `dkeamanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dmenggunakanfasilitas`
--
ALTER TABLE `dmenggunakanfasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dwaktus`
--
ALTER TABLE `dwaktus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fandks`
--
ALTER TABLE `fandks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fisikas`
--
ALTER TABLE `fisikas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `home_rooms`
--
ALTER TABLE `home_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `informatikas`
--
ALTER TABLE `informatikas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `izins`
--
ALTER TABLE `izins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jengkes`
--
ALTER TABLE `jengkes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kbs`
--
ALTER TABLE `kbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keberkerjaans`
--
ALTER TABLE `keberkerjaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kesenians`
--
ALTER TABLE `kesenians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kewirausahas`
--
ALTER TABLE `kewirausahas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kimias`
--
ALTER TABLE `kimias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kindustris`
--
ALTER TABLE `kindustris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `k_amulias`
--
ALTER TABLE `k_amulias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT untuk tabel `mtks`
--
ALTER TABLE `mtks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `okesehatans`
--
ALTER TABLE `okesehatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pais`
--
ALTER TABLE `pais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pberbaktis`
--
ALTER TABLE `pberbaktis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pbos`
--
ALTER TABLE `pbos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pbtgms`
--
ALTER TABLE `pbtgms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pbusanamuslims`
--
ALTER TABLE `pbusanamuslims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pelajaran_kejuruans`
--
ALTER TABLE `pelajaran_kejuruans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pemturs`
--
ALTER TABLE `pemturs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pinfaqsejakdinis`
--
ALTER TABLE `pinfaqsejakdinis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pjoks`
--
ALTER TABLE `pjoks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pkks`
--
ALTER TABLE `pkks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pkls`
--
ALTER TABLE `pkls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pmelaksanakansaums`
--
ALTER TABLE `pmelaksanakansaums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pmembacaalqurans`
--
ALTER TABLE `pmembacaalqurans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pmemeliharaadabs`
--
ALTER TABLE `pmemeliharaadabs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pmemeliharas`
--
ALTER TABLE `pmemeliharas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pmencintaitanahairs`
--
ALTER TABLE `pmencintaitanahairs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pmendirikansholats`
--
ALTER TABLE `pmendirikansholats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ppbs`
--
ALTER TABLE `ppbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ppls`
--
ALTER TABLE `ppls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pps`
--
ALTER TABLE `pps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pramadhans`
--
ALTER TABLE `pramadhans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pramukas`
--
ALTER TABLE `pramukas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `priodes`
--
ALTER TABLE `priodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `ptalimdanceramahs`
--
ALTER TABLE `ptalimdanceramahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pwebs`
--
ALTER TABLE `pwebs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sakits`
--
ALTER TABLE `sakits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sbs`
--
ALTER TABLE `sbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sejarahs`
--
ALTER TABLE `sejarahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `student_has_classes`
--
ALTER TABLE `student_has_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `uji_koms`
--
ALTER TABLE `uji_koms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `classroom_subject`
--
ALTER TABLE `classroom_subject`
  ADD CONSTRAINT `classroom_subject_classroom_id_foreign` FOREIGN KEY (`classroom_id`) REFERENCES `classrooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `classroom_subject_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `home_rooms`
--
ALTER TABLE `home_rooms`
  ADD CONSTRAINT `home_rooms_classrooms_id_foreign` FOREIGN KEY (`classrooms_id`) REFERENCES `classrooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `home_rooms_priode_id_foreign` FOREIGN KEY (`priode_id`) REFERENCES `priodes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `home_rooms_teachers_id_foreign` FOREIGN KEY (`teachers_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `student_has_classes`
--
ALTER TABLE `student_has_classes`
  ADD CONSTRAINT `student_has_classes_classrooms_id_foreign` FOREIGN KEY (`classrooms_id`) REFERENCES `classrooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_has_classes_departements_id_foreign` FOREIGN KEY (`departements_id`) REFERENCES `departements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_has_classes_homerooms_id_foreign` FOREIGN KEY (`homerooms_id`) REFERENCES `home_rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_has_classes_priode_id_foreign` FOREIGN KEY (`priode_id`) REFERENCES `priodes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_has_classes_students_id_foreign` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_teachers_id_foreign` FOREIGN KEY (`teacher`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
