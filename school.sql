-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2024 pada 04.26
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
-- Struktur dari tabel `archived_students`
--

CREATE TABLE `archived_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nis` varchar(255) DEFAULT NULL,
  `nisn` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL DEFAULT 'Male',
  `birthday` date DEFAULT NULL,
  `tempatl` varchar(255) DEFAULT NULL,
  `agama` enum('Islam','Katolik','Protestan','Hindu','Buddha','Khonghucu') NOT NULL DEFAULT 'Islam',
  `kwnegara` enum('Warga Negara Indonesia','Kewarganegaraan Asing') NOT NULL DEFAULT 'Warga Negara Indonesia',
  `statusdk` varchar(255) DEFAULT NULL,
  `anakke` enum('1','2','3','4','5','6','7','8','9','10') DEFAULT '1',
  `alamat` text DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `graduation_date` date DEFAULT NULL,
  `status` enum('aktif','off','pindah','arsip') NOT NULL DEFAULT 'aktif',
  `email` varchar(255) DEFAULT NULL,
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
  `contactw` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `archived_students`
--

INSERT INTO `archived_students` (`id`, `created_at`, `updated_at`, `nis`, `nisn`, `name`, `gender`, `birthday`, `tempatl`, `agama`, `kwnegara`, `statusdk`, `anakke`, `alamat`, `profile`, `graduation_date`, `status`, `email`, `contact`, `asekolah`, `classroom_id`, `departement_id`, `nayah`, `nibu`, `pkrjnayah`, `pkrjnibu`, `alamatot`, `contactot`, `nwali`, `pkrjnwali`, `alamatwali`, `contactw`) VALUES
(3, '2024-12-06 00:21:43', '2024-12-06 00:23:07', '10.2324.03.033', NULL, 'jhonathan iman', 'Male', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, 'arsip', '10.2324.03.033@gmail.com', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsips`
--

CREATE TABLE `arsips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'arsip',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1733736378),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1733736378;', 1733736378),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1733813743),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1733813743;', 1733813743),
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:8:{i:0;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:11:\"Kelola Guru\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:14:\"Kelola Student\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:12:\"Kelola Kelas\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:25:\"Kelola Murid dengan Kelas\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:4;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:6:\"Priode\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:9:\"Semsester\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:14:\"Jenis Kegiatan\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:22:\"Nilai Mulok semester 1\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}}s:5:\"roles\";a:2:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:10:\"wali kelas\";s:1:\"c\";s:3:\"web\";}}}', 1733908968);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `classrooms`
--

INSERT INTO `classrooms` (`id`, `name`, `created_at`, `updated_at`) VALUES
(13, 'X', '2024-10-20 21:29:38', '2024-10-20 21:30:00'),
(14, 'XI', '2024-10-20 21:30:12', '2024-10-20 21:30:12'),
(15, 'XII', '2024-10-20 21:30:18', '2024-10-20 21:30:18'),
(16, 'X - 1', '2024-11-16 23:26:58', '2024-11-16 23:26:58');

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
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'c', 'c@gmail.com', 'aaa', '2024-12-09 21:58:08', '2024-12-09 21:58:08'),
(2, 'M Abdul Aziz Albar', 'ihsan@gmail.com', 'ko ngelag', '2024-12-10 00:02:04', '2024-12-10 00:02:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cps1s`
--

CREATE TABLE `cps1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pai` text DEFAULT NULL,
  `pp` text DEFAULT NULL,
  `indo` text DEFAULT NULL,
  `pjok` text DEFAULT NULL,
  `sejarah` text DEFAULT NULL,
  `sb` text DEFAULT NULL,
  `sunda` text DEFAULT NULL,
  `arab` text DEFAULT NULL,
  `mtk` text DEFAULT NULL,
  `inggris` text DEFAULT NULL,
  `informatika` text DEFAULT NULL,
  `fisika` text DEFAULT NULL,
  `kimia` text DEFAULT NULL,
  `bisnis` text DEFAULT NULL,
  `profesi` text DEFAULT NULL,
  `pemtur` text DEFAULT NULL,
  `pbo` text DEFAULT NULL,
  `gim` text DEFAULT NULL,
  `bd` text DEFAULT NULL,
  `pbt` text DEFAULT NULL,
  `pw` text DEFAULT NULL,
  `ppb` text DEFAULT NULL,
  `pkk` text DEFAULT NULL,
  `kb` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cps1s`
--

INSERT INTO `cps1s` (`id`, `pai`, `pp`, `indo`, `pjok`, `sejarah`, `sb`, `sunda`, `arab`, `mtk`, `inggris`, `informatika`, `fisika`, `kimia`, `bisnis`, `profesi`, `pemtur`, `pbo`, `gim`, `bd`, `pbt`, `pw`, `ppb`, `pkk`, `kb`, `created_at`, `updated_at`) VALUES
(1, 'Membaca, Menyajikan, dan menganalisa ayat Al-Qur\'an dan Hadits tentang perintah untuk berkompetisi dalam  kebaikan dan etos kerja serta larangan pergaulan bebas dan zina\n', 'menyajikan dan menganalisis materi Nilai-nilai Pancasila dalam Praktik Penyelenggaraan Pemerintah Negara Indonesia dan Ketentuan UUD NRI Tahun 1945 dalam Kehidupan Berbangsadan Bernegara dengan sangat baik\n', 'menulis dan menciptakan teks laporan hasil observasi, teks eksposisi, dan teks anekdot.\n', 'mengetahui dan melakukan gerak dasar bola besar dan mempraktekkan teknik dasar bola besar, bola kecil dan atletik\n', 'memahami konsep dasar ilmu sejarah sebagai bahan analisis untuk mengkaji peristiwa sejarah, dapat memahami konsep dasar ilmu sejarah sebagai bahan evaluasi untuk mengkaji peristiwa sejarah dan dapat menganalisis serta mengevaluasi peristiwa sejarah dalam ruang lingkup lokal, nasional, dan global\n', 'Memahami & menjelaskan tentang materi karya seni rupa 2D dan 3D.  Serta mampu mempraktekkan membuat karya seni rupa\n', 'memiliki kemampuan berbahasa Sunda untuk berkomunikasi dan bernalar sesuai dengan tujuan dan konteks sosial-budaya.\n', 'menyimak dan membaca kosakata, kalimat-kalimat dan teks-teks bahasa Arab dengan, lancar, cermat, dan tepat sesuai dengan harakat dan, tata bahasa (qawaid) yang benar terkait teks perkenalan, diri (ta’aruf), keluarga (usrah)\n', 'menggeneralisasi sifat-sifat operasi bilangan berpangkat (eksponen) dan logaritma\n', 'Text lisan Dan tulis tentang menanyakan Dan memaparkan jati diri Dan hubungan keluarga\n', 'mencari informasi di internet, Menggunakan aplikasi pengolah kata untuk membuat surat lamaran dan surat resmi perusahaan, daftar isi, proposal dan makalah, Membuat sebuah sheet yang mengandung operator aritmatika, rumus dasar pada Microsoft Excel\n', 'Peserta didik mampu menguasai materi besaran dan satuan\n', 'Peserta didik mampu menguasai materi perubahan materi dan pemisahan campuran\n', 'menerapkan K3LH dan budaya kerja industri, antara lain: praktik- praktik kerja yang aman, bahaya-bahaya di tempat kerja, prosedur- prosedur dalam keadaan darurat, dan penerapan budaya kerja industri (Ringkas, Rapi, Resik, Rawat, Rajin), termasuk pencegahan kecelakaan kerja dan prosedur kerja.\n', 'membuat produk kerajinan nusantara berdasarkan desain. Pembuatan desain melalui analisis kebutuhan, kelayakan pasar, eksplorasi bentuk, bahan, alat dan teknik, serta mempresentasikan secara lisan, visual, dan grafis.\n', 'melakukan pemrograman terstruktur, antara lain penerapan struktur data yang terdiri dari data statis (array baik dimensi, panjang, tipe data, pengurutan) dan data dinamis (list, stack), penggunaan tipe data, struktur kontrol perulangan dan percabangan pada proyek pengembangan perangkat lunak sederhana dan gim.\n', 'memahami dan mengerjakan proyek bahasa pemograman java dengan baik dan benar \n', 'menggunakan perangkat dan aplikasi di bidang Perangkat Lunak dan Gim, seperti basis data, tools pengembangan perangkat lunak, ragam sistem operasi, penerapan pengelolaan aset dan user interface (grafis, typography, warna, audio, video, interaksi pengguna) dan menerapkan prinsip dasar algoritma pemrograman (varian dan invarian, alur logika pemrograman, flowchart, dan teknik dasar algoritma umum)\n', NULL, NULL, NULL, NULL, NULL, NULL, '2024-11-18 07:56:23', '2024-11-18 07:56:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cps2s`
--

CREATE TABLE `cps2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pai` text DEFAULT NULL,
  `pp` text DEFAULT NULL,
  `indo` text DEFAULT NULL,
  `pjok` text DEFAULT NULL,
  `sejarah` text DEFAULT NULL,
  `sb` text DEFAULT NULL,
  `sunda` text DEFAULT NULL,
  `arab` text DEFAULT NULL,
  `mtk` text DEFAULT NULL,
  `inggris` text DEFAULT NULL,
  `informatika` text DEFAULT NULL,
  `fisika` text DEFAULT NULL,
  `kimia` text DEFAULT NULL,
  `bisnis` text DEFAULT NULL,
  `profesi` text DEFAULT NULL,
  `pemtur` text DEFAULT NULL,
  `pbo` text DEFAULT NULL,
  `gim` text DEFAULT NULL,
  `bd` text DEFAULT NULL,
  `pbt` text DEFAULT NULL,
  `pw` text DEFAULT NULL,
  `ppb` text DEFAULT NULL,
  `pkk` text DEFAULT NULL,
  `kb` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cps3s`
--

CREATE TABLE `cps3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pai` text DEFAULT NULL,
  `pp` text DEFAULT NULL,
  `indo` text DEFAULT NULL,
  `pjok` text DEFAULT NULL,
  `sejarah` text DEFAULT NULL,
  `sb` text DEFAULT NULL,
  `sunda` text DEFAULT NULL,
  `arab` text DEFAULT NULL,
  `mtk` text DEFAULT NULL,
  `inggris` text DEFAULT NULL,
  `informatika` text DEFAULT NULL,
  `fisika` text DEFAULT NULL,
  `kimia` text DEFAULT NULL,
  `bisnis` text DEFAULT NULL,
  `profesi` text DEFAULT NULL,
  `pemtur` text DEFAULT NULL,
  `pbo` text DEFAULT NULL,
  `gim` text DEFAULT NULL,
  `bd` text DEFAULT NULL,
  `pbt` text DEFAULT NULL,
  `pw` text DEFAULT NULL,
  `ppb` text DEFAULT NULL,
  `pkk` text DEFAULT NULL,
  `kb` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cps4s`
--

CREATE TABLE `cps4s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pai` text DEFAULT NULL,
  `pp` text DEFAULT NULL,
  `indo` text DEFAULT NULL,
  `pjok` text DEFAULT NULL,
  `sejarah` text DEFAULT NULL,
  `sb` text DEFAULT NULL,
  `sunda` text DEFAULT NULL,
  `arab` text DEFAULT NULL,
  `mtk` text DEFAULT NULL,
  `inggris` text DEFAULT NULL,
  `informatika` text DEFAULT NULL,
  `fisika` text DEFAULT NULL,
  `kimia` text DEFAULT NULL,
  `bisnis` text DEFAULT NULL,
  `profesi` text DEFAULT NULL,
  `pemtur` text DEFAULT NULL,
  `pbo` text DEFAULT NULL,
  `gim` text DEFAULT NULL,
  `bd` text DEFAULT NULL,
  `pbt` text DEFAULT NULL,
  `pw` text DEFAULT NULL,
  `ppb` text DEFAULT NULL,
  `pkk` text DEFAULT NULL,
  `kb` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cps5s`
--

CREATE TABLE `cps5s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pai` text DEFAULT NULL,
  `pp` text DEFAULT NULL,
  `indo` text DEFAULT NULL,
  `pjok` text DEFAULT NULL,
  `sejarah` text DEFAULT NULL,
  `sb` text DEFAULT NULL,
  `sunda` text DEFAULT NULL,
  `arab` text DEFAULT NULL,
  `mtk` text DEFAULT NULL,
  `inggris` text DEFAULT NULL,
  `informatika` text DEFAULT NULL,
  `fisika` text DEFAULT NULL,
  `kimia` text DEFAULT NULL,
  `bisnis` text DEFAULT NULL,
  `profesi` text DEFAULT NULL,
  `pemtur` text DEFAULT NULL,
  `pbo` text DEFAULT NULL,
  `gim` text DEFAULT NULL,
  `bd` text DEFAULT NULL,
  `pbt` text DEFAULT NULL,
  `pw` text DEFAULT NULL,
  `ppb` text DEFAULT NULL,
  `pkk` text DEFAULT NULL,
  `kb` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cps6s`
--

CREATE TABLE `cps6s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pai` text DEFAULT NULL,
  `pp` text DEFAULT NULL,
  `indo` text DEFAULT NULL,
  `pjok` text DEFAULT NULL,
  `sejarah` text DEFAULT NULL,
  `sb` text DEFAULT NULL,
  `sunda` text DEFAULT NULL,
  `arab` text DEFAULT NULL,
  `mtk` text DEFAULT NULL,
  `inggris` text DEFAULT NULL,
  `informatika` text DEFAULT NULL,
  `fisika` text DEFAULT NULL,
  `kimia` text DEFAULT NULL,
  `bisnis` text DEFAULT NULL,
  `profesi` text DEFAULT NULL,
  `pemtur` text DEFAULT NULL,
  `pbo` text DEFAULT NULL,
  `gim` text DEFAULT NULL,
  `bd` text DEFAULT NULL,
  `pbt` text DEFAULT NULL,
  `pw` text DEFAULT NULL,
  `ppb` text DEFAULT NULL,
  `pkk` text DEFAULT NULL,
  `kb` text DEFAULT NULL,
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
-- Struktur dari tabel `dsmt1s`
--

CREATE TABLE `dsmt1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dwaktu` double DEFAULT NULL,
  `dibadah` double DEFAULT NULL,
  `dbelajar` double UNSIGNED DEFAULT NULL,
  `dbergaul` double UNSIGNED DEFAULT NULL,
  `dberbusana` double UNSIGNED DEFAULT NULL,
  `dmenggunakanfasilitas` double UNSIGNED DEFAULT NULL,
  `dk3` double UNSIGNED DEFAULT NULL,
  `dberbahasa` double UNSIGNED DEFAULT NULL,
  `dbertindak` double UNSIGNED DEFAULT NULL,
  `dkeamanan` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dsmt1s`
--

INSERT INTO `dsmt1s` (`id`, `student_id`, `classroom_id`, `priode_id`, `dwaktu`, `dibadah`, `dbelajar`, `dbergaul`, `dberbusana`, `dmenggunakanfasilitas`, `dk3`, `dberbahasa`, `dbertindak`, `dkeamanan`, `created_at`, `updated_at`) VALUES
(2, 27, 13, NULL, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, '2024-11-18 08:26:14', '2024-11-18 08:26:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dsmt2s`
--

CREATE TABLE `dsmt2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dwaktu` double DEFAULT NULL,
  `dibadah` double DEFAULT NULL,
  `dbelajar` double UNSIGNED DEFAULT NULL,
  `dbergaul` double UNSIGNED DEFAULT NULL,
  `dberbusana` double UNSIGNED DEFAULT NULL,
  `dmenggunakanfasilitas` double UNSIGNED DEFAULT NULL,
  `dk3` double UNSIGNED DEFAULT NULL,
  `dberbahasa` double UNSIGNED DEFAULT NULL,
  `dbertindak` double UNSIGNED DEFAULT NULL,
  `dkeamanan` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dsmt3s`
--

CREATE TABLE `dsmt3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dwaktu` double DEFAULT NULL,
  `dibadah` double DEFAULT NULL,
  `dbelajar` double UNSIGNED DEFAULT NULL,
  `dbergaul` double UNSIGNED DEFAULT NULL,
  `dberbusana` double UNSIGNED DEFAULT NULL,
  `dmenggunakanfasilitas` double UNSIGNED DEFAULT NULL,
  `dk3` double UNSIGNED DEFAULT NULL,
  `dberbahasa` double UNSIGNED DEFAULT NULL,
  `dbertindak` double UNSIGNED DEFAULT NULL,
  `dkeamanan` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dsmt4s`
--

CREATE TABLE `dsmt4s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dwaktu` double DEFAULT NULL,
  `dibadah` double DEFAULT NULL,
  `dbelajar` double UNSIGNED DEFAULT NULL,
  `dbergaul` double UNSIGNED DEFAULT NULL,
  `dberbusana` double UNSIGNED DEFAULT NULL,
  `dmenggunakanfasilitas` double UNSIGNED DEFAULT NULL,
  `dk3` double UNSIGNED DEFAULT NULL,
  `dberbahasa` double UNSIGNED DEFAULT NULL,
  `dbertindak` double UNSIGNED DEFAULT NULL,
  `dkeamanan` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dsmt5s`
--

CREATE TABLE `dsmt5s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dwaktu` double DEFAULT NULL,
  `dibadah` double DEFAULT NULL,
  `dbelajar` double UNSIGNED DEFAULT NULL,
  `dbergaul` double UNSIGNED DEFAULT NULL,
  `dberbusana` double UNSIGNED DEFAULT NULL,
  `dmenggunakanfasilitas` double UNSIGNED DEFAULT NULL,
  `dk3` double UNSIGNED DEFAULT NULL,
  `dberbahasa` double UNSIGNED DEFAULT NULL,
  `dbertindak` double UNSIGNED DEFAULT NULL,
  `dkeamanan` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dsmt6s`
--

CREATE TABLE `dsmt6s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dwaktu` double DEFAULT NULL,
  `dibadah` double DEFAULT NULL,
  `dbelajar` double UNSIGNED DEFAULT NULL,
  `dbergaul` double UNSIGNED DEFAULT NULL,
  `dberbusana` double UNSIGNED DEFAULT NULL,
  `dmenggunakanfasilitas` double UNSIGNED DEFAULT NULL,
  `dk3` double UNSIGNED DEFAULT NULL,
  `dberbahasa` double UNSIGNED DEFAULT NULL,
  `dbertindak` double UNSIGNED DEFAULT NULL,
  `dkeamanan` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `esmt1s`
--

CREATE TABLE `esmt1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pramuka` double DEFAULT NULL,
  `kesenian` double DEFAULT NULL,
  `pramadan` double UNSIGNED DEFAULT NULL,
  `okesehatan` double UNSIGNED DEFAULT NULL,
  `kmulia` double UNSIGNED DEFAULT NULL,
  `bkerja` double UNSIGNED DEFAULT NULL,
  `kewirausahaan` double UNSIGNED DEFAULT NULL,
  `berekayasa` double UNSIGNED DEFAULT NULL,
  `kebekerjaan` double UNSIGNED DEFAULT NULL,
  `gim` double UNSIGNED DEFAULT NULL,
  `silat` double DEFAULT NULL,
  `futsal` double DEFAULT NULL,
  `voli` double DEFAULT NULL,
  `hadroh` double DEFAULT NULL,
  `engclub` double DEFAULT NULL,
  `kaligerafi` double DEFAULT NULL,
  `desain` double DEFAULT NULL,
  `video` double DEFAULT NULL,
  `foto` double DEFAULT NULL,
  `sakit` double DEFAULT NULL,
  `izin` double DEFAULT NULL,
  `alfa` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `esmt1s`
--

INSERT INTO `esmt1s` (`id`, `student_id`, `classroom_id`, `priode_id`, `pramuka`, `kesenian`, `pramadan`, `okesehatan`, `kmulia`, `bkerja`, `kewirausahaan`, `berekayasa`, `kebekerjaan`, `gim`, `silat`, `futsal`, `voli`, `hadroh`, `engclub`, `kaligerafi`, `desain`, `video`, `foto`, `sakit`, `izin`, `alfa`, `created_at`, `updated_at`) VALUES
(1, 27, 13, NULL, 44, 60, 12, 22, 11, 99, 77, 78, 77, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, 11, 12, '2024-11-18 08:25:29', '2024-11-19 06:37:13'),
(2, 27, 13, 1, 44, 60, 12, 22, 11, 99, 77, 78, 77, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, 11, 11, 22, NULL, NULL, '2024-12-05 01:21:51', '2024-12-05 01:23:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `esmt2s`
--

CREATE TABLE `esmt2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pramuka` double DEFAULT NULL,
  `kesenian` double DEFAULT NULL,
  `pramadan` double UNSIGNED DEFAULT NULL,
  `okesehatan` double UNSIGNED DEFAULT NULL,
  `kmulia` double UNSIGNED DEFAULT NULL,
  `bkerja` double UNSIGNED DEFAULT NULL,
  `kewirausahaan` double UNSIGNED DEFAULT NULL,
  `berekayasa` double UNSIGNED DEFAULT NULL,
  `kebekerjaan` double UNSIGNED DEFAULT NULL,
  `gim` double UNSIGNED DEFAULT NULL,
  `silat` double DEFAULT NULL,
  `futsal` double DEFAULT NULL,
  `voli` double DEFAULT NULL,
  `hadroh` double DEFAULT NULL,
  `engclub` double DEFAULT NULL,
  `kaligerafi` double DEFAULT NULL,
  `desain` double DEFAULT NULL,
  `video` double DEFAULT NULL,
  `foto` double DEFAULT NULL,
  `sakit` double DEFAULT NULL,
  `izin` double DEFAULT NULL,
  `alfa` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `esmt2s`
--

INSERT INTO `esmt2s` (`id`, `student_id`, `classroom_id`, `priode_id`, `pramuka`, `kesenian`, `pramadan`, `okesehatan`, `kmulia`, `bkerja`, `kewirausahaan`, `berekayasa`, `kebekerjaan`, `gim`, `silat`, `futsal`, `voli`, `hadroh`, `engclub`, `kaligerafi`, `desain`, `video`, `foto`, `sakit`, `izin`, `alfa`, `created_at`, `updated_at`) VALUES
(1, 27, 13, 3, 44, 60, 12, 22, 11, 99, 77, 78, 77, NULL, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, '2024-12-05 01:28:24', '2024-12-05 01:28:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `esmt3s`
--

CREATE TABLE `esmt3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pramuka` double DEFAULT NULL,
  `kesenian` double DEFAULT NULL,
  `pramadan` double UNSIGNED DEFAULT NULL,
  `okesehatan` double UNSIGNED DEFAULT NULL,
  `kmulia` double UNSIGNED DEFAULT NULL,
  `bkerja` double UNSIGNED DEFAULT NULL,
  `kewirausahaan` double UNSIGNED DEFAULT NULL,
  `berekayasa` double UNSIGNED DEFAULT NULL,
  `kebekerjaan` double UNSIGNED DEFAULT NULL,
  `gim` double UNSIGNED DEFAULT NULL,
  `silat` double DEFAULT NULL,
  `futsal` double DEFAULT NULL,
  `voli` double DEFAULT NULL,
  `hadroh` double DEFAULT NULL,
  `engclub` double DEFAULT NULL,
  `kaligerafi` double DEFAULT NULL,
  `desain` double DEFAULT NULL,
  `video` double DEFAULT NULL,
  `foto` double DEFAULT NULL,
  `sakit` double DEFAULT NULL,
  `izin` double DEFAULT NULL,
  `alfa` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `esmt3s`
--

INSERT INTO `esmt3s` (`id`, `student_id`, `classroom_id`, `priode_id`, `pramuka`, `kesenian`, `pramadan`, `okesehatan`, `kmulia`, `bkerja`, `kewirausahaan`, `berekayasa`, `kebekerjaan`, `gim`, `silat`, `futsal`, `voli`, `hadroh`, `engclub`, `kaligerafi`, `desain`, `video`, `foto`, `sakit`, `izin`, `alfa`, `created_at`, `updated_at`) VALUES
(1, 30, 14, 1, 44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-05 02:25:27', '2024-12-05 02:25:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `esmt4s`
--

CREATE TABLE `esmt4s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pramuka` double DEFAULT NULL,
  `kesenian` double DEFAULT NULL,
  `pramadan` double UNSIGNED DEFAULT NULL,
  `okesehatan` double UNSIGNED DEFAULT NULL,
  `kmulia` double UNSIGNED DEFAULT NULL,
  `bkerja` double UNSIGNED DEFAULT NULL,
  `kewirausahaan` double UNSIGNED DEFAULT NULL,
  `berekayasa` double UNSIGNED DEFAULT NULL,
  `kebekerjaan` double UNSIGNED DEFAULT NULL,
  `gim` double UNSIGNED DEFAULT NULL,
  `silat` double DEFAULT NULL,
  `futsal` double DEFAULT NULL,
  `voli` double DEFAULT NULL,
  `hadroh` double DEFAULT NULL,
  `engclub` double DEFAULT NULL,
  `kaligerafi` double DEFAULT NULL,
  `desain` double DEFAULT NULL,
  `video` double DEFAULT NULL,
  `foto` double DEFAULT NULL,
  `sakit` double DEFAULT NULL,
  `izin` double DEFAULT NULL,
  `alfa` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `esmt4s`
--

INSERT INTO `esmt4s` (`id`, `student_id`, `classroom_id`, `priode_id`, `pramuka`, `kesenian`, `pramadan`, `okesehatan`, `kmulia`, `bkerja`, `kewirausahaan`, `berekayasa`, `kebekerjaan`, `gim`, `silat`, `futsal`, `voli`, `hadroh`, `engclub`, `kaligerafi`, `desain`, `video`, `foto`, `sakit`, `izin`, `alfa`, `created_at`, `updated_at`) VALUES
(1, 29, 15, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-05 02:31:07', '2024-12-05 02:31:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `esmt5s`
--

CREATE TABLE `esmt5s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pramuka` double DEFAULT NULL,
  `kesenian` double DEFAULT NULL,
  `pramadan` double UNSIGNED DEFAULT NULL,
  `okesehatan` double UNSIGNED DEFAULT NULL,
  `kmulia` double UNSIGNED DEFAULT NULL,
  `bkerja` double UNSIGNED DEFAULT NULL,
  `kewirausahaan` double UNSIGNED DEFAULT NULL,
  `berekayasa` double UNSIGNED DEFAULT NULL,
  `kebekerjaan` double UNSIGNED DEFAULT NULL,
  `gim` double UNSIGNED DEFAULT NULL,
  `silat` double DEFAULT NULL,
  `futsal` double DEFAULT NULL,
  `voli` double DEFAULT NULL,
  `hadroh` double DEFAULT NULL,
  `engclub` double DEFAULT NULL,
  `kaligerafi` double DEFAULT NULL,
  `desain` double DEFAULT NULL,
  `video` double DEFAULT NULL,
  `foto` double DEFAULT NULL,
  `sakit` double DEFAULT NULL,
  `izin` double DEFAULT NULL,
  `alfa` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `esmt5s`
--

INSERT INTO `esmt5s` (`id`, `student_id`, `classroom_id`, `priode_id`, `pramuka`, `kesenian`, `pramadan`, `okesehatan`, `kmulia`, `bkerja`, `kewirausahaan`, `berekayasa`, `kebekerjaan`, `gim`, `silat`, `futsal`, `voli`, `hadroh`, `engclub`, `kaligerafi`, `desain`, `video`, `foto`, `sakit`, `izin`, `alfa`, `created_at`, `updated_at`) VALUES
(1, 29, 15, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-05 02:28:28', '2024-12-05 02:28:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `esmt6s`
--

CREATE TABLE `esmt6s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pramuka` double DEFAULT NULL,
  `kesenian` double DEFAULT NULL,
  `pramadan` double UNSIGNED DEFAULT NULL,
  `okesehatan` double UNSIGNED DEFAULT NULL,
  `kmulia` double UNSIGNED DEFAULT NULL,
  `bkerja` double UNSIGNED DEFAULT NULL,
  `kewirausahaan` double UNSIGNED DEFAULT NULL,
  `berekayasa` double UNSIGNED DEFAULT NULL,
  `kebekerjaan` double UNSIGNED DEFAULT NULL,
  `gim` double UNSIGNED DEFAULT NULL,
  `silat` double DEFAULT NULL,
  `futsal` double DEFAULT NULL,
  `voli` double DEFAULT NULL,
  `hadroh` double DEFAULT NULL,
  `engclub` double DEFAULT NULL,
  `kaligerafi` double DEFAULT NULL,
  `desain` double DEFAULT NULL,
  `video` double DEFAULT NULL,
  `foto` double DEFAULT NULL,
  `sakit` double DEFAULT NULL,
  `izin` double DEFAULT NULL,
  `alfa` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `esmt6s`
--

INSERT INTO `esmt6s` (`id`, `student_id`, `classroom_id`, `priode_id`, `pramuka`, `kesenian`, `pramadan`, `okesehatan`, `kmulia`, `bkerja`, `kewirausahaan`, `berekayasa`, `kebekerjaan`, `gim`, `silat`, `futsal`, `voli`, `hadroh`, `engclub`, `kaligerafi`, `desain`, `video`, `foto`, `sakit`, `izin`, `alfa`, `created_at`, `updated_at`) VALUES
(1, 28, 15, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-05 02:29:35', '2024-12-05 02:29:35');

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
-- Struktur dari tabel `karakters1s`
--

CREATE TABLE `karakters1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `beriman` double UNSIGNED DEFAULT NULL,
  `bg` double UNSIGNED DEFAULT NULL,
  `gr` double UNSIGNED DEFAULT NULL,
  `mandiri` double UNSIGNED DEFAULT NULL,
  `bk` double UNSIGNED DEFAULT NULL,
  `kreatif` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karakters1s`
--

INSERT INTO `karakters1s` (`id`, `student_id`, `classroom_id`, `beriman`, `bg`, `gr`, `mandiri`, `bk`, `kreatif`, `created_at`, `updated_at`) VALUES
(1, 27, 13, 90, 60, 70, 80, 50, 40, '2024-11-19 12:02:46', '2024-11-19 12:02:46');

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
(2, 29, 'azzainiyyah', 100, 'j', 1, '4 bulan', '19 September - 19 Desember', '2024-11-10 22:02:39', '2024-11-10 22:02:39'),
(3, 27, 'azzainiyyah', 100, 'Kec. Nyalindung, Kabupaten Sukabumi, Jawa Barat\n', 1, '4 bulan', '19 September - 19 Desember', '2024-11-18 08:04:59', '2024-11-18 08:04:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ksmt1s`
--

CREATE TABLE `ksmt1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bd` double UNSIGNED DEFAULT NULL,
  `persisda` double UNSIGNED DEFAULT NULL,
  `pw` double UNSIGNED DEFAULT NULL,
  `ppb` double UNSIGNED DEFAULT NULL,
  `pkk` double UNSIGNED DEFAULT NULL,
  `kb` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ksmt1s`
--

INSERT INTO `ksmt1s` (`id`, `student_id`, `classroom_id`, `priode_id`, `bd`, `persisda`, `pw`, `ppb`, `pkk`, `kb`, `created_at`, `updated_at`) VALUES
(1, 27, 13, NULL, 1, 1, 1, 1, 1, 1, '2024-11-17 21:43:24', '2024-11-17 21:43:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ksmt2s`
--

CREATE TABLE `ksmt2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bd` double UNSIGNED DEFAULT NULL,
  `persisda` double UNSIGNED DEFAULT NULL,
  `pw` double UNSIGNED DEFAULT NULL,
  `ppb` double UNSIGNED DEFAULT NULL,
  `pkk` double UNSIGNED DEFAULT NULL,
  `kb` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ksmt3s`
--

CREATE TABLE `ksmt3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bd` double UNSIGNED DEFAULT NULL,
  `persisda` double UNSIGNED DEFAULT NULL,
  `pw` double UNSIGNED DEFAULT NULL,
  `ppb` double UNSIGNED DEFAULT NULL,
  `pkk` double UNSIGNED DEFAULT NULL,
  `kb` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ksmt4s`
--

CREATE TABLE `ksmt4s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bd` double UNSIGNED DEFAULT NULL,
  `persisda` double UNSIGNED DEFAULT NULL,
  `pw` double UNSIGNED DEFAULT NULL,
  `ppb` double UNSIGNED DEFAULT NULL,
  `pkk` double UNSIGNED DEFAULT NULL,
  `kb` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ksmt5s`
--

CREATE TABLE `ksmt5s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bd` double UNSIGNED DEFAULT NULL,
  `persisda` double UNSIGNED DEFAULT NULL,
  `pw` double UNSIGNED DEFAULT NULL,
  `ppb` double UNSIGNED DEFAULT NULL,
  `pkk` double UNSIGNED DEFAULT NULL,
  `kb` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ksmt6s`
--

CREATE TABLE `ksmt6s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bd` double UNSIGNED DEFAULT NULL,
  `persisda` double UNSIGNED DEFAULT NULL,
  `pw` double UNSIGNED DEFAULT NULL,
  `ppb` double UNSIGNED DEFAULT NULL,
  `pkk` double UNSIGNED DEFAULT NULL,
  `kb` double UNSIGNED DEFAULT NULL,
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
(116, '2024_11_10_033927_create_bios_table', 64),
(117, '2024_11_17_054702_create_smt1s_table', 65),
(118, '2024_11_17_091420_create_smt2s_table', 66),
(119, '2024_11_17_092535_create_smt3s_table', 66),
(120, '2024_11_17_093825_create_smt4s_table', 66),
(121, '2024_11_17_094255_create_smt5s_table', 66),
(122, '2024_11_17_094613_create_smt6s_table', 66),
(123, '2024_11_17_101559_create_usmt1s_table', 66),
(124, '2024_11_17_104151_create_ksmt1s_table', 66),
(125, '2024_11_17_120842_create_usmt2s_table', 66),
(126, '2024_11_17_122220_create_usmt3s_table', 66),
(127, '2024_11_17_122535_create_usmt4s_table', 66),
(128, '2024_11_17_122915_create_usmt5s_table', 66),
(129, '2024_11_17_123220_create_usmt6s_table', 66),
(130, '2024_11_17_125527_create_ksmt6s_table', 66),
(131, '2024_11_17_130025_create_ksmt2s_table', 66),
(132, '2024_11_17_130508_create_ksmt3s_table', 66),
(133, '2024_11_17_130746_create_ksmt4s_table', 66),
(134, '2024_11_17_131053_create_ksmt5s_table', 66),
(135, '2024_11_17_132507_create_esmt2s_table', 66),
(136, '2024_11_17_133114_create_esmt1s_table', 66),
(137, '2024_11_17_143339_create_esmt3s_table', 66),
(138, '2024_11_17_143725_create_esmt4s_table', 66),
(139, '2024_11_17_144015_create_esmt5s_table', 66),
(140, '2024_11_17_144306_create_esmt6s_table', 66),
(141, '2024_11_17_145517_create_dsmt1s_table', 66),
(142, '2024_11_17_153704_create_dsmt2s_table', 66),
(143, '2024_11_17_153940_create_dsmt3s_table', 66),
(144, '2024_11_17_154252_create_dsmt4s_table', 66),
(145, '2024_11_17_154529_create_dsmt5s_table', 66),
(146, '2024_11_17_154846_create_dsmt6s_table', 66),
(147, '2024_11_17_155158_create_psmt1s_table', 66),
(148, '2024_11_17_160546_create_psmt2s_table', 66),
(149, '2024_11_17_160900_create_psmt3s_table', 66),
(150, '2024_11_17_161304_create_psmt4s_table', 66),
(151, '2024_11_17_161548_create_psmt5s_table', 66),
(152, '2024_11_17_161848_create_psmt6s_table', 66),
(154, '2024_11_18_064157_create_cps1s_table', 67),
(155, '2024_11_18_150935_add_column_mitra_to_pkl_table', 68),
(156, '2024_11_18_231054_create_cps2s_table', 69),
(157, '2024_11_18_232941_create_cps3s_table', 69),
(158, '2024_11_18_233544_create_cps4s_table', 69),
(159, '2024_11_18_233957_create_cps5s_table', 69),
(160, '2024_11_18_234918_create_cps6s_table', 69),
(161, '2024_11_19_000315_ksmt2', 69),
(162, '2024_11_19_000550_create_ksmt2_table', 70),
(163, '2024_11_19_000905_create_ksmt3_table', 71),
(164, '2024_11_19_002037_create_ksmt4_table', 72),
(165, '2024_11_19_003048_create_ksmt5_table', 72),
(166, '2024_11_19_003256_create_ksmt6_table', 72),
(167, '2024_11_19_034828_add_column_sia_to_esmt1_table', 72),
(168, '2024_11_19_043701_add_column_sia_to_esmt2_table', 72),
(169, '2024_11_19_044208_add_column_sia_to_esmt3_table', 72),
(170, '2024_11_19_044441_add_column_sia_to_esmt4_table', 72),
(171, '2024_11_19_044510_add_column_sia_to_esmt5_table', 72),
(172, '2024_11_19_044537_add_column_sia_to_esmt6_table', 72),
(173, '2024_11_19_155329_create_karakters1s_table', 73),
(174, '2024_11_22_090350_add_column_to_student_table', 74),
(175, '2024_12_03_231118_add_column_priode_to_smt1s_table', 75),
(176, '2024_12_03_231118_add_column_priode_to_smt2s_table', 76),
(177, '2024_12_03_231118_add_column_priode_to_smt3s_table', 77),
(178, '2024_12_03_231118_add_column_priode_to_smt4s_table', 77),
(179, '2024_12_03_231118_add_column_priode_to_smt5s_table', 77),
(180, '2024_12_03_231118_add_column_priode_to_smt6s_table', 77),
(181, '2024_12_03_231118_add_column_priode_to_usmt1s_table', 77),
(182, '2024_12_03_231118_add_column_priode_to_dsmt1s_table', 78),
(183, '2024_12_03_231118_add_column_priode_to_dsmt2s_table', 78),
(184, '2024_12_03_231118_add_column_priode_to_dsmt3s_table', 78),
(185, '2024_12_03_231118_add_column_priode_to_dsmt4s_table', 78),
(186, '2024_12_03_231118_add_column_priode_to_dsmt5s_table', 78),
(187, '2024_12_03_231118_add_column_priode_to_dsmt6s_table', 78),
(188, '2024_12_03_231118_add_column_priode_to_esmt1s_table', 79),
(189, '2024_12_03_231118_add_column_priode_to_esmt2s_table', 79),
(190, '2024_12_03_231118_add_column_priode_to_esmt3s_table', 79),
(191, '2024_12_03_231118_add_column_priode_to_esmt4s_table', 79),
(192, '2024_12_03_231118_add_column_priode_to_esmt5s_table', 79),
(193, '2024_12_03_231118_add_column_priode_to_esmt6s_table', 79),
(194, '2024_12_03_231118_add_column_priode_to_ksmt1s_table', 79),
(195, '2024_12_03_231118_add_column_priode_to_ksmt2s_table', 79),
(196, '2024_12_03_231118_add_column_priode_to_ksmt3s_table', 79),
(197, '2024_12_03_231118_add_column_priode_to_ksmt4s_table', 79),
(198, '2024_12_03_231118_add_column_priode_to_ksmt5s_table', 79),
(199, '2024_12_03_231118_add_column_priode_to_ksmt6s_table', 79),
(200, '2024_12_03_231118_add_column_priode_to_psmt1s_table', 79),
(201, '2024_12_03_231118_add_column_priode_to_psmt2s_table', 79),
(202, '2024_12_03_231118_add_column_priode_to_psmt3s_table', 79),
(203, '2024_12_03_231118_add_column_priode_to_psmt4s_table', 79),
(204, '2024_12_03_231118_add_column_priode_to_psmt5s_table', 79),
(205, '2024_12_03_231118_add_column_priode_to_psmt6s_table', 79),
(206, '2024_12_03_231118_add_column_priode_to_usmt2s_table', 79),
(207, '2024_12_03_231118_add_column_priode_to_usmt3s_table', 79),
(208, '2024_12_03_231118_add_column_priode_to_usmt4s_table', 79),
(209, '2024_12_03_231118_add_column_priode_to_usmt5s_table', 79),
(210, '2024_12_03_231118_add_column_priode_to_usmt6s_table', 79),
(212, '2024_12_04_135008_add_column_email_to_teachers_table', 80),
(213, '2024_12_04_135008_add_column_to_teachers_table', 81),
(214, '2024_12_05_074236_add_column_to_esmt1s_table', 82),
(215, '2024_12_05_074236_add_column_to_esmt2s_table', 83),
(216, '2024_12_05_074236_add_column_to_esmt3s_table', 83),
(217, '2024_12_05_074236_add_column_to_esmt4s_table', 83),
(218, '2024_12_05_074236_add_column_to_esmt5s_table', 83),
(219, '2024_12_05_074236_add_column_to_esmt6s_table', 83),
(220, '2024_12_05_135312_create_arsips_table', 84),
(221, '2024_12_05_140509_create_archived_students_table', 85),
(222, '2024_12_06_062730_add_column_to_student_table', 86),
(223, '2024_12_06_063853_add_column_to_students_table', 87),
(224, '2024_12_06_065206_add_column_status_to_students_table', 88),
(225, '2024_12_06_070603_add_column_to_archived_students_table', 89),
(226, '2024_12_10_044439_create_contacts_table', 90);

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
(1, 'App\\Models\\User', 15),
(3, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 29),
(3, 'App\\Models\\User', 30),
(4, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 21),
(4, 'App\\Models\\User', 22),
(4, 'App\\Models\\User', 24),
(4, 'App\\Models\\User', 25);

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
  `alfa_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilais`
--

INSERT INTO `nilais` (`id`, `class_id`, `student_id`, `priode_id`, `teacher_id`, `subject_id`, `category_nilai_id`, `nilai`, `alfa_id`, `created_at`, `updated_at`) VALUES
(11, 13, 27, 3, 1, 50, 4, 100, NULL, NULL, NULL),
(12, 13, 27, 1, 1, 50, 6, 90, NULL, NULL, NULL),
(13, 13, 27, 1, 1, 51, 6, 90, NULL, NULL, NULL),
(14, 13, 43, 1, 1, 56, 6, 90, NULL, NULL, NULL),
(15, 15, 35, 2, 1, 52, 8, 100, NULL, NULL, NULL),
(16, 13, 50, 1, 1, 51, 10, 12, NULL, NULL, NULL);

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
(9, 'Jenis Kegiatan', 'web', '2024-11-08 16:43:45', '2024-12-08 00:24:43'),
(10, 'Nilai Mulok semester 1', 'web', '2024-12-08 01:14:59', '2024-12-08 01:14:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pkls`
--

CREATE TABLE `pkls` (
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
-- Dumping data untuk tabel `pkls`
--

INSERT INTO `pkls` (`id`, `student_id`, `mitra`, `nilai`, `lokasi`, `jengke_id`, `lama`, `waktu`, `created_at`, `updated_at`) VALUES
(1, 27, 'azzainiyyah', 100, 'sukabumi', 2, '4 bulan', '19 September - 19 Desember', '2024-11-18 08:23:01', '2024-11-18 08:23:01');

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
(3, '2024/2025', '2024-10-14 21:13:16', '2024-10-14 21:13:16'),
(5, '2025/2026', '2024-12-09 02:26:44', '2024-12-09 02:26:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `psmt1s`
--

CREATE TABLE `psmt1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bpot` double DEFAULT NULL,
  `bmuslim` double DEFAULT NULL,
  `mabsaai` double UNSIGNED DEFAULT NULL,
  `mma` double UNSIGNED DEFAULT NULL,
  `mkdl` double UNSIGNED DEFAULT NULL,
  `msfss` double UNSIGNED DEFAULT NULL,
  `mtck` double UNSIGNED DEFAULT NULL,
  `tmisd` double UNSIGNED DEFAULT NULL,
  `mswss` double UNSIGNED DEFAULT NULL,
  `cta` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `psmt1s`
--

INSERT INTO `psmt1s` (`id`, `student_id`, `classroom_id`, `priode_id`, `bpot`, `bmuslim`, `mabsaai`, `mma`, `mkdl`, `msfss`, `mtck`, `tmisd`, `mswss`, `cta`, `created_at`, `updated_at`) VALUES
(1, 27, 13, NULL, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, '2024-11-18 08:26:52', '2024-11-18 08:26:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `psmt2s`
--

CREATE TABLE `psmt2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bpot` double DEFAULT NULL,
  `bmuslim` double DEFAULT NULL,
  `mabsaai` double UNSIGNED DEFAULT NULL,
  `mma` double UNSIGNED DEFAULT NULL,
  `mkdl` double UNSIGNED DEFAULT NULL,
  `msfss` double UNSIGNED DEFAULT NULL,
  `mtck` double UNSIGNED DEFAULT NULL,
  `tmisd` double UNSIGNED DEFAULT NULL,
  `mswss` double UNSIGNED DEFAULT NULL,
  `cta` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `psmt3s`
--

CREATE TABLE `psmt3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bpot` double DEFAULT NULL,
  `bmuslim` double DEFAULT NULL,
  `mabsaai` double UNSIGNED DEFAULT NULL,
  `mma` double UNSIGNED DEFAULT NULL,
  `mkdl` double UNSIGNED DEFAULT NULL,
  `msfss` double UNSIGNED DEFAULT NULL,
  `mtck` double UNSIGNED DEFAULT NULL,
  `tmisd` double UNSIGNED DEFAULT NULL,
  `mswss` double UNSIGNED DEFAULT NULL,
  `cta` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `psmt4s`
--

CREATE TABLE `psmt4s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bpot` double DEFAULT NULL,
  `bmuslim` double DEFAULT NULL,
  `mabsaai` double UNSIGNED DEFAULT NULL,
  `mma` double UNSIGNED DEFAULT NULL,
  `mkdl` double UNSIGNED DEFAULT NULL,
  `msfss` double UNSIGNED DEFAULT NULL,
  `mtck` double UNSIGNED DEFAULT NULL,
  `tmisd` double UNSIGNED DEFAULT NULL,
  `mswss` double UNSIGNED DEFAULT NULL,
  `cta` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `psmt5s`
--

CREATE TABLE `psmt5s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bpot` double DEFAULT NULL,
  `bmuslim` double DEFAULT NULL,
  `mabsaai` double UNSIGNED DEFAULT NULL,
  `mma` double UNSIGNED DEFAULT NULL,
  `mkdl` double UNSIGNED DEFAULT NULL,
  `msfss` double UNSIGNED DEFAULT NULL,
  `mtck` double UNSIGNED DEFAULT NULL,
  `tmisd` double UNSIGNED DEFAULT NULL,
  `mswss` double UNSIGNED DEFAULT NULL,
  `cta` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `psmt6s`
--

CREATE TABLE `psmt6s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bpot` double DEFAULT NULL,
  `bmuslim` double DEFAULT NULL,
  `mabsaai` double UNSIGNED DEFAULT NULL,
  `mma` double UNSIGNED DEFAULT NULL,
  `mkdl` double UNSIGNED DEFAULT NULL,
  `msfss` double UNSIGNED DEFAULT NULL,
  `mtck` double UNSIGNED DEFAULT NULL,
  `tmisd` double UNSIGNED DEFAULT NULL,
  `mswss` double UNSIGNED DEFAULT NULL,
  `cta` double UNSIGNED DEFAULT NULL,
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
(4, 1),
(5, 1),
(6, 1),
(6, 3),
(7, 1),
(8, 1),
(9, 1),
(10, 3);

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
('0t2ZLaDuu1RWSgaQ9fRK0Ukea1gCknyETyV1LFkx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTU93QkkwajAyQ0ZWOWxScnV5Sjc0Ykt6aWg3MDFOa25WQTMwQXp5TyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jb250YWN0Ijt9fQ==', 1733823913),
('aL7L6LKdSuCuHdgzAmttn8qcv0DLR09q4uMbqa4k', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiemNyMTdZNGttUjQ5UE9MNEtYMkNKMXh5S0VOWTl6clp4eEsycmpZcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9jb250YWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkSHd6WmYwamV0dUdycEFwdDI4N0xET2lOdVhPQ042eUpHaUZDaFQ0andvcHVkVE1uS2lnNzYiO30=', 1733823899);

-- --------------------------------------------------------

--
-- Struktur dari tabel `smt1s`
--

CREATE TABLE `smt1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pai` double UNSIGNED DEFAULT NULL,
  `pp` double UNSIGNED DEFAULT NULL,
  `indo` double UNSIGNED DEFAULT NULL,
  `pjok` double UNSIGNED DEFAULT NULL,
  `sejarah` double UNSIGNED DEFAULT NULL,
  `sb` double UNSIGNED DEFAULT NULL,
  `sunda` double UNSIGNED DEFAULT NULL,
  `arab` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `smt1s`
--

INSERT INTO `smt1s` (`id`, `student_id`, `classroom_id`, `priode_id`, `pai`, `pp`, `indo`, `pjok`, `sejarah`, `sb`, `sunda`, `arab`, `created_at`, `updated_at`) VALUES
(4, 27, 13, 3, 0, 90, 90, 90, 90, 90, 90, 90, '2024-11-17 08:59:54', '2024-12-09 02:31:25'),
(9, 58, 13, NULL, 100, 0, 0, 0, 0, 0, 0, 0, '2024-11-27 21:54:25', '2024-11-27 21:54:25'),
(10, 29, 14, 1, 90, 80, 0, 1, 0, 0, 0, 0, '2024-12-03 16:21:21', '2024-12-03 16:21:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smt2s`
--

CREATE TABLE `smt2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pai` double UNSIGNED DEFAULT NULL,
  `pp` double UNSIGNED DEFAULT NULL,
  `indo` double UNSIGNED DEFAULT NULL,
  `pjok` double UNSIGNED DEFAULT NULL,
  `sejarah` double UNSIGNED DEFAULT NULL,
  `sb` double UNSIGNED DEFAULT NULL,
  `sunda` double UNSIGNED DEFAULT NULL,
  `arab` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `smt2s`
--

INSERT INTO `smt2s` (`id`, `student_id`, `classroom_id`, `priode_id`, `pai`, `pp`, `indo`, `pjok`, `sejarah`, `sb`, `sunda`, `arab`, `created_at`, `updated_at`) VALUES
(1, 27, 13, NULL, 90, 80, 70, 60, 50, 40, 30, 20, '2024-11-21 21:18:28', '2024-11-21 21:18:28'),
(2, 28, 13, NULL, 90, 80, 70, 60, 50, 40, 30, 20, '2024-11-26 20:27:30', '2024-11-26 20:27:30'),
(3, 29, 15, NULL, 1111, 1111, 11, 111, 1111, 1111, 1111, 1111, '2024-11-27 03:08:39', '2024-11-27 03:08:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smt3s`
--

CREATE TABLE `smt3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pai` double UNSIGNED DEFAULT NULL,
  `pp` double UNSIGNED DEFAULT NULL,
  `indo` double UNSIGNED DEFAULT NULL,
  `pjok` double UNSIGNED DEFAULT NULL,
  `sejarah` double UNSIGNED DEFAULT NULL,
  `sb` double UNSIGNED DEFAULT NULL,
  `sunda` double UNSIGNED DEFAULT NULL,
  `arab` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `smt4s`
--

CREATE TABLE `smt4s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pai` double UNSIGNED DEFAULT NULL,
  `pp` double UNSIGNED DEFAULT NULL,
  `indo` double UNSIGNED DEFAULT NULL,
  `pjok` double UNSIGNED DEFAULT NULL,
  `sejarah` double UNSIGNED DEFAULT NULL,
  `sb` double UNSIGNED DEFAULT NULL,
  `sunda` double UNSIGNED DEFAULT NULL,
  `arab` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `smt5s`
--

CREATE TABLE `smt5s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pai` double UNSIGNED DEFAULT NULL,
  `pp` double UNSIGNED DEFAULT NULL,
  `indo` double UNSIGNED DEFAULT NULL,
  `pjok` double UNSIGNED DEFAULT NULL,
  `sejarah` double UNSIGNED DEFAULT NULL,
  `sb` double UNSIGNED DEFAULT NULL,
  `sunda` double UNSIGNED DEFAULT NULL,
  `arab` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `smt6s`
--

CREATE TABLE `smt6s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pai` double UNSIGNED DEFAULT NULL,
  `pp` double UNSIGNED DEFAULT NULL,
  `indo` double UNSIGNED DEFAULT NULL,
  `pjok` double UNSIGNED DEFAULT NULL,
  `sejarah` double UNSIGNED DEFAULT NULL,
  `sb` double UNSIGNED DEFAULT NULL,
  `sunda` double UNSIGNED DEFAULT NULL,
  `arab` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `smt6s`
--

INSERT INTO `smt6s` (`id`, `student_id`, `classroom_id`, `priode_id`, `pai`, `pp`, `indo`, `pjok`, `sejarah`, `sb`, `sunda`, `arab`, `created_at`, `updated_at`) VALUES
(1, 27, 13, 1, 90, 90, 0, 0, 0, 0, 0, 0, '2024-12-04 04:42:46', '2024-12-04 04:42:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
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
  `status` enum('aktif','off','pindah','arsip') NOT NULL DEFAULT 'aktif',
  `graduation_date` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `nis`, `email`, `nisn`, `name`, `gender`, `birthday`, `tempatl`, `agama`, `kwnegara`, `statusdk`, `anakke`, `alamat`, `contact`, `asekolah`, `classroom_id`, `departement_id`, `nayah`, `nibu`, `pkrjnayah`, `pkrjnibu`, `alamatot`, `contactot`, `nwali`, `pkrjnwali`, `alamatwali`, `contactw`, `profile`, `status`, `graduation_date`, `user_id`, `created_at`, `updated_at`) VALUES
(27, '1', NULL, NULL, 'Adly Arasya Ramadhan Putra', 'Laki - Laki', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile/01JBZCVFH5027CCR7PY9Q8H745.jpg', 'aktif', NULL, 2, '2024-10-20 21:22:16', '2024-11-06 00:12:21'),
(28, '2', NULL, NULL, 'Ahmad Ridwan Firdaus', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(29, '3', NULL, NULL, 'Ahmad Syaiful Makruf', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(30, '4', NULL, NULL, 'Azka Rafthaya Syahdan', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(31, '5', NULL, NULL, 'Daffa Nugraha Yudika', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(32, '6', NULL, NULL, 'Dhea Azahra Patrysia', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(33, '7', NULL, NULL, 'Fadliansyah Rachmat', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(34, '8', NULL, NULL, 'Fauziah Nur Afzan', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(35, '9', NULL, NULL, 'Ineng Najila', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(36, '10', NULL, NULL, 'Kaisan Amar Assidiq', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(37, '11', NULL, NULL, 'Mochamad Fadly Ibnu Maula', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(38, '12', NULL, NULL, 'Muhamad Abdul Ropik', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(39, '13', NULL, NULL, 'Muhammad Dikril Hakim', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(40, '14', NULL, NULL, 'Muhammad Ikbar Fildzah', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(41, '15', NULL, NULL, 'Muhammad Noval', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(42, '16', NULL, NULL, 'Nazwa Alfia Rexa', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(43, '17', NULL, NULL, 'Siti Salwa Safitri', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(44, '18', NULL, NULL, 'Tasya Ratu Zansabila', '', NULL, NULL, 'Islam', 'Warga Negara Indonesia', NULL, '1', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-10-20 21:22:16', '2024-10-20 21:22:16'),
(47, '10.2324.03.028', NULL, '84449862', 'ADLY ARASYA RAMADHAN PUTRA', 'Laki - Laki', NULL, 'jakarta', 'Islam', 'Warga Negara Indonesia', NULL, '2', NULL, NULL, NULL, 10, NULL, 'Iman', 'MU MINAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-11-06 00:04:42', '2024-11-06 00:04:42'),
(48, '10.2324.03.028', NULL, '84449862', 'ADLY ARASYA RAMADHAN PUTRA', 'Laki - Laki', NULL, 'jakarta', 'Islam', 'Warga Negara Indonesia', NULL, '2', NULL, NULL, NULL, 10, NULL, 'Iman', 'MU MINAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-11-06 00:04:51', '2024-11-06 00:04:51'),
(49, '10.2324.03.028', NULL, '84449862', 'ADLY ARASYA RAMADHAN PUTRA', 'Laki - Laki', '2003-08-09', 'jakarta', 'Islam', 'Warga Negara Indonesia', NULL, '2', NULL, NULL, NULL, 13, 4, 'Iman', 'MU MINAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-11-06 00:10:11', '2024-11-06 00:11:19'),
(50, '10.2324.03.028', NULL, '84449862', 'albar', 'Laki - Laki', NULL, 'jakarta', 'Islam', 'Warga Negara Indonesia', NULL, '2', NULL, NULL, NULL, 10, NULL, 'Iman', 'MU MINAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-11-10 22:20:11', '2024-11-10 22:20:11'),
(51, '10.2324.03.028', NULL, '84449862', 'yusup', 'Laki - Laki', NULL, 'jakarta', 'Islam', 'Warga Negara Indonesia', NULL, '2', NULL, NULL, NULL, 10, NULL, 'Iman', 'MU MINAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-11-10 22:20:11', '2024-11-10 22:20:11'),
(52, '12345678', NULL, '12345678', 'Abdul Aziz', 'Laki - Laki', '2024-11-13', 'sukabumi', 'Islam', 'Warga Negara Indonesia', NULL, '1', 'Kp.gunungbuleud\nKp.gunungbuleud,desa cimerang,kec.purabaya', '1234567890', 'aa', 13, 4, 'aa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, NULL, '2024-11-12 23:53:14', '2024-11-12 23:53:14'),
(58, '10.2324.03.030', NULL, '84449863', 'alex', 'Laki - Laki', NULL, 'jakarta', 'Islam', 'Warga Negara Indonesia', NULL, '2', NULL, NULL, NULL, 10, NULL, 'Iman', 'MU MINAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, 21, '2024-11-27 05:05:53', '2024-11-27 05:05:53'),
(59, '10.2324.03.031', NULL, '84449864', 'jhonathan', 'Laki - Laki', NULL, 'jakarta', 'Islam', 'Warga Negara Indonesia', NULL, '2', NULL, NULL, NULL, 10, NULL, 'Iman', 'MU MINAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, 22, '2024-11-27 05:05:54', '2024-11-27 05:05:54'),
(64, '10.2324.03.032', NULL, '84449863', 'alexdeo', 'Laki - Laki', NULL, 'jakarta', 'Islam', 'Warga Negara Indonesia', NULL, '2', NULL, NULL, NULL, 10, NULL, 'Iman', 'MU MINAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', NULL, 24, '2024-11-27 22:03:02', '2024-11-27 22:03:02');

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
  `email` varchar(255) DEFAULT NULL,
  `status` enum('Ya','tidak') NOT NULL DEFAULT 'tidak',
  `user_id` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teachers`
--

INSERT INTO `teachers` (`id`, `nip`, `name`, `email`, `status`, `user_id`, `address`, `created_at`, `updated_at`, `profile`) VALUES
(3, '12345678', 'Ai Mursyidah Zein, SE', NULL, 'Ya', NULL, NULL, '2024-10-20 20:02:34', '2024-10-21 00:25:23', 'teacher/01JAPZERBFNCBB4JF9NH3Q98F1.jpg'),
(4, NULL, 'Asep H. Anwar, S.Pd.I', NULL, 'tidak', NULL, NULL, '2024-10-20 20:03:14', '2024-10-20 20:03:14', NULL),
(5, NULL, 'Ai Rahmatillah.,S.Pd', NULL, 'tidak', NULL, NULL, '2024-10-20 20:03:28', '2024-10-20 20:03:28', NULL),
(6, NULL, 'Yani Fitriyani S.Pd', NULL, 'tidak', NULL, NULL, '2024-10-20 20:03:47', '2024-10-20 20:03:47', NULL),
(7, NULL, 'Dafit Abdurozak S.Pd', NULL, 'tidak', NULL, NULL, '2024-10-20 20:03:56', '2024-10-20 20:03:56', NULL),
(8, NULL, 'Kilah S.Pd', NULL, 'tidak', NULL, NULL, '2024-10-20 20:04:25', '2024-10-20 20:04:25', NULL),
(9, NULL, 'M.Iqbal Farhan Zhovran.,S.S', NULL, 'tidak', NULL, NULL, '2024-10-20 20:04:46', '2024-10-20 20:04:46', NULL),
(10, NULL, 'Jamaludin R Surya.,S.Pd.I., S.Kom', NULL, 'tidak', NULL, NULL, '2024-10-20 20:04:54', '2024-10-20 20:04:54', NULL),
(11, NULL, 'Suherman.,S.Pd.I', NULL, 'tidak', NULL, NULL, '2024-10-20 20:05:03', '2024-10-20 20:05:03', NULL),
(12, NULL, 'Kusdian.,S.Ud', NULL, 'tidak', NULL, NULL, '2024-10-20 20:05:16', '2024-10-20 20:05:16', NULL),
(13, NULL, 'Weli Kusnadi M.Kom.,MTA', NULL, 'tidak', NULL, NULL, '2024-10-20 20:05:25', '2024-10-20 20:05:25', NULL),
(14, NULL, 'Neni Nuraeni S.Pd', NULL, 'tidak', NULL, NULL, '2024-10-20 20:05:37', '2024-10-20 20:05:37', NULL),
(15, NULL, 'Muhamad Nasir.,S.E', NULL, 'tidak', NULL, NULL, '2024-10-20 20:05:47', '2024-10-20 20:05:47', NULL),
(16, NULL, ' Ikramulkarim.,A.Md.,S.T', NULL, 'tidak', NULL, NULL, '2024-10-20 20:05:57', '2024-10-20 20:05:57', NULL),
(17, NULL, 'Ahmad Rifai Raden', NULL, 'tidak', NULL, NULL, '2024-10-20 20:06:13', '2024-10-20 20:06:13', NULL),
(18, NULL, 'Zulfatu nai\'mah, S.Kom', NULL, 'tidak', NULL, NULL, '2024-10-20 20:06:25', '2024-10-20 20:06:25', NULL),
(19, NULL, 'M.Rizal Firmansyah, S.Kom', NULL, 'tidak', NULL, NULL, '2024-10-20 20:06:40', '2024-10-20 20:06:40', NULL),
(20, NULL, 'Siti Rasyidah nurainiyah, S.Pd', NULL, 'tidak', NULL, NULL, '2024-10-20 20:06:48', '2024-10-20 20:06:48', NULL),
(21, NULL, 'muhamad Khoerulloh, S.Kom', NULL, 'tidak', NULL, NULL, '2024-10-20 20:06:58', '2024-10-20 20:06:58', NULL),
(22, NULL, 'Muhidin.,Amd.T.,S.Pd', NULL, 'tidak', NULL, NULL, '2024-10-20 20:07:11', '2024-10-20 20:07:11', NULL),
(23, NULL, 'Andi Rimi.S.Pd', NULL, 'tidak', NULL, NULL, '2024-10-20 20:07:23', '2024-10-20 20:07:23', NULL),
(24, NULL, 'Ani Hanifah Mardiyah.,S.E', NULL, 'tidak', NULL, NULL, '2024-10-20 20:07:37', '2024-10-20 20:07:37', NULL),
(25, NULL, 'Zain Lizsa.,S.E,M.M', NULL, 'tidak', NULL, NULL, '2024-10-20 20:07:46', '2024-10-20 20:07:46', NULL),
(26, NULL, 'Dian Nurazizah Hasibuan.,S.Pd', NULL, 'tidak', NULL, NULL, '2024-10-20 20:07:58', '2024-10-20 20:07:58', NULL),
(27, NULL, 'Ahmad Sholeh, S.Pd', NULL, 'tidak', NULL, NULL, '2024-10-20 20:08:13', '2024-10-20 20:08:13', NULL),
(35, '1234567890', 'albar', 'albar1@gmail.com', 'Ya', '29', NULL, '2024-12-04 07:06:16', '2024-12-04 07:06:16', NULL),
(36, '12345678999', 'dian', NULL, 'Ya', '30', NULL, '2024-12-09 02:24:07', '2024-12-09 02:24:07', NULL);

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
(1, 29, 100, 3, '19 September - 19 Desember', '2024-11-10 22:07:38', '2024-11-10 22:07:38'),
(2, 27, 100, 3, '19 September - 19 Desember', '2024-11-18 08:07:55', '2024-11-18 08:07:55');

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$HwzZf0jetuGrpApt287LDOiNuXOCN6yJGiFChT4jwopudTMnKig76', NULL, '2024-10-13 01:59:34', '2024-12-08 01:11:23'),
(2, 'user', 'user@gmail.com', NULL, '$2y$12$zlN7CmD/WC7BYfQGzonbI.WDiK3PE9xJ8G83XUEYVxeIsqPxCfoJu', NULL, '2024-10-18 18:25:12', '2024-10-18 18:25:12'),
(5, 'wali kelas', 'walikelas@gmail.com', NULL, '$2y$12$7wR4mC84CMWEnnH70XI2yuY5CsdzciMWlUQE4.sBND8zFcfeFzJ0y', NULL, '2024-10-19 23:09:36', '2024-10-19 23:09:36'),
(15, 'a', 'a@gmail.com', NULL, '$2y$12$g1REq6oSqvO0E1IrFekOXOBVAg6K2UrVowJXBY2.IOrH92N.2VFYq', NULL, NULL, '2024-11-17 01:39:45'),
(21, 'alex', '10.2324.03.030@gmail.com', NULL, '$2y$12$jMfrYp4bO7wG0kPf5GOM2uZ16Y2OR3dKD5lupBoR75LEsqsPHF0Oy', NULL, '2024-11-27 05:05:54', '2024-11-27 05:05:54'),
(22, 'jhonathan', '10.2324.03.031@gmail.com', NULL, '$2y$12$lE38xQCuIBpW/C/hCREogen9NQRj8sSmneTGUkVJPjg6od66AzHcS', NULL, '2024-11-27 05:05:55', '2024-11-27 05:05:55'),
(24, 'alexdeo', '10.2324.03.032@gmail.com', NULL, '$2y$12$mCXpTjUfcvwswQEbvtnUvO2MICZ/Tm9QNAwpMd5tnPcW9oZA5hzYG', NULL, '2024-11-27 22:03:03', '2024-11-27 22:03:03'),
(25, 'jhonathan iman', '10.2324.03.033@gmail.com', NULL, '$2y$12$7dRNZZnPrn7xy6V0WNbQIuSDN75C/8YdPhJbgF1vnJxe.0n4mQfCq', NULL, '2024-11-27 22:03:04', '2024-11-27 22:03:04'),
(29, 'albar', '1234567890@gmail.com', NULL, '$2y$12$XDIm0lAGDA7uKBvEWUPcmedrq6ycAfZ5.C0TBBSnzqXRsytYMzwvm', NULL, '2024-12-04 07:06:17', '2024-12-04 07:06:17'),
(30, 'dian', '12345678999@gmail.com', NULL, '$2y$12$Ic0O/s7xXLduItjAOo5QEO.oUN/cTZHGCMwvPXU65cpK0bZQF9C6G', NULL, '2024-12-09 02:24:07', '2024-12-09 02:24:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usmt1s`
--

CREATE TABLE `usmt1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mtk` double UNSIGNED DEFAULT NULL,
  `inggris` double UNSIGNED DEFAULT NULL,
  `informatika` double UNSIGNED DEFAULT NULL,
  `fisika` double UNSIGNED DEFAULT NULL,
  `kimia` double UNSIGNED DEFAULT NULL,
  `bisnis` double UNSIGNED DEFAULT NULL,
  `profesi` double UNSIGNED DEFAULT NULL,
  `pemtur` double UNSIGNED DEFAULT NULL,
  `pbo` double UNSIGNED DEFAULT NULL,
  `gim` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `usmt1s`
--

INSERT INTO `usmt1s` (`id`, `student_id`, `classroom_id`, `priode_id`, `mtk`, `inggris`, `informatika`, `fisika`, `kimia`, `bisnis`, `profesi`, `pemtur`, `pbo`, `gim`, `created_at`, `updated_at`) VALUES
(1, 27, 16, NULL, 50, 55, 55, 55, 55, 55, 55, 55, 55, 55, '2024-11-18 08:02:07', '2024-11-18 08:02:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usmt2s`
--

CREATE TABLE `usmt2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mtk` double UNSIGNED DEFAULT NULL,
  `inggris` double UNSIGNED DEFAULT NULL,
  `informatika` double UNSIGNED DEFAULT NULL,
  `fisika` double UNSIGNED DEFAULT NULL,
  `kimia` double UNSIGNED DEFAULT NULL,
  `bisnis` double UNSIGNED DEFAULT NULL,
  `profesi` double UNSIGNED DEFAULT NULL,
  `pemtur` double UNSIGNED DEFAULT NULL,
  `pbo` double UNSIGNED DEFAULT NULL,
  `gim` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `usmt3s`
--

CREATE TABLE `usmt3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mtk` double UNSIGNED DEFAULT NULL,
  `inggris` double UNSIGNED DEFAULT NULL,
  `informatika` double UNSIGNED DEFAULT NULL,
  `fisika` double UNSIGNED DEFAULT NULL,
  `kimia` double UNSIGNED DEFAULT NULL,
  `bisnis` double UNSIGNED DEFAULT NULL,
  `profesi` double UNSIGNED DEFAULT NULL,
  `pemtur` double UNSIGNED DEFAULT NULL,
  `pbo` double UNSIGNED DEFAULT NULL,
  `gim` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `usmt4s`
--

CREATE TABLE `usmt4s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mtk` double UNSIGNED DEFAULT NULL,
  `inggris` double UNSIGNED DEFAULT NULL,
  `informatika` double UNSIGNED DEFAULT NULL,
  `fisika` double UNSIGNED DEFAULT NULL,
  `kimia` double UNSIGNED DEFAULT NULL,
  `bisnis` double UNSIGNED DEFAULT NULL,
  `profesi` double UNSIGNED DEFAULT NULL,
  `pemtur` double UNSIGNED DEFAULT NULL,
  `pbo` double UNSIGNED DEFAULT NULL,
  `gim` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `usmt5s`
--

CREATE TABLE `usmt5s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mtk` double UNSIGNED DEFAULT NULL,
  `inggris` double UNSIGNED DEFAULT NULL,
  `informatika` double UNSIGNED DEFAULT NULL,
  `fisika` double UNSIGNED DEFAULT NULL,
  `kimia` double UNSIGNED DEFAULT NULL,
  `bisnis` double UNSIGNED DEFAULT NULL,
  `profesi` double UNSIGNED DEFAULT NULL,
  `pemtur` double UNSIGNED DEFAULT NULL,
  `pbo` double UNSIGNED DEFAULT NULL,
  `gim` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `usmt6s`
--

CREATE TABLE `usmt6s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `priode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mtk` double UNSIGNED DEFAULT NULL,
  `inggris` double UNSIGNED DEFAULT NULL,
  `informatika` double UNSIGNED DEFAULT NULL,
  `fisika` double UNSIGNED DEFAULT NULL,
  `kimia` double UNSIGNED DEFAULT NULL,
  `bisnis` double UNSIGNED DEFAULT NULL,
  `profesi` double UNSIGNED DEFAULT NULL,
  `pemtur` double UNSIGNED DEFAULT NULL,
  `pbo` double UNSIGNED DEFAULT NULL,
  `gim` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `archived_students`
--
ALTER TABLE `archived_students`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `arsips`
--
ALTER TABLE `arsips`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bios`
--
ALTER TABLE `bios`
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
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cps1s`
--
ALTER TABLE `cps1s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cps2s`
--
ALTER TABLE `cps2s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cps3s`
--
ALTER TABLE `cps3s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cps4s`
--
ALTER TABLE `cps4s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cps5s`
--
ALTER TABLE `cps5s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cps6s`
--
ALTER TABLE `cps6s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dsmt1s`
--
ALTER TABLE `dsmt1s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dsmt2s`
--
ALTER TABLE `dsmt2s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dsmt3s`
--
ALTER TABLE `dsmt3s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dsmt4s`
--
ALTER TABLE `dsmt4s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dsmt5s`
--
ALTER TABLE `dsmt5s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dsmt6s`
--
ALTER TABLE `dsmt6s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `esmt1s`
--
ALTER TABLE `esmt1s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `esmt2s`
--
ALTER TABLE `esmt2s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `esmt3s`
--
ALTER TABLE `esmt3s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `esmt4s`
--
ALTER TABLE `esmt4s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `esmt5s`
--
ALTER TABLE `esmt5s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `esmt6s`
--
ALTER TABLE `esmt6s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `karakters1s`
--
ALTER TABLE `karakters1s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kindustris`
--
ALTER TABLE `kindustris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ksmt1s`
--
ALTER TABLE `ksmt1s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ksmt2s`
--
ALTER TABLE `ksmt2s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ksmt3s`
--
ALTER TABLE `ksmt3s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ksmt4s`
--
ALTER TABLE `ksmt4s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ksmt5s`
--
ALTER TABLE `ksmt5s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ksmt6s`
--
ALTER TABLE `ksmt6s`
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
-- Indeks untuk tabel `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `pkls`
--
ALTER TABLE `pkls`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `priodes`
--
ALTER TABLE `priodes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `priodes_name_unique` (`name`);

--
-- Indeks untuk tabel `psmt1s`
--
ALTER TABLE `psmt1s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `psmt2s`
--
ALTER TABLE `psmt2s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `psmt3s`
--
ALTER TABLE `psmt3s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `psmt4s`
--
ALTER TABLE `psmt4s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `psmt5s`
--
ALTER TABLE `psmt5s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `psmt6s`
--
ALTER TABLE `psmt6s`
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
-- Indeks untuk tabel `smt1s`
--
ALTER TABLE `smt1s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `smt2s`
--
ALTER TABLE `smt2s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `smt3s`
--
ALTER TABLE `smt3s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `smt4s`
--
ALTER TABLE `smt4s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `smt5s`
--
ALTER TABLE `smt5s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `smt6s`
--
ALTER TABLE `smt6s`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `usmt1s`
--
ALTER TABLE `usmt1s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usmt2s`
--
ALTER TABLE `usmt2s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usmt3s`
--
ALTER TABLE `usmt3s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usmt4s`
--
ALTER TABLE `usmt4s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usmt5s`
--
ALTER TABLE `usmt5s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usmt6s`
--
ALTER TABLE `usmt6s`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `archived_students`
--
ALTER TABLE `archived_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `arsips`
--
ALTER TABLE `arsips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bios`
--
ALTER TABLE `bios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `category_nilais`
--
ALTER TABLE `category_nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `cps1s`
--
ALTER TABLE `cps1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cps2s`
--
ALTER TABLE `cps2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cps3s`
--
ALTER TABLE `cps3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cps4s`
--
ALTER TABLE `cps4s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cps5s`
--
ALTER TABLE `cps5s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cps6s`
--
ALTER TABLE `cps6s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `departements`
--
ALTER TABLE `departements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dsmt1s`
--
ALTER TABLE `dsmt1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dsmt2s`
--
ALTER TABLE `dsmt2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dsmt3s`
--
ALTER TABLE `dsmt3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dsmt4s`
--
ALTER TABLE `dsmt4s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dsmt5s`
--
ALTER TABLE `dsmt5s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dsmt6s`
--
ALTER TABLE `dsmt6s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `esmt1s`
--
ALTER TABLE `esmt1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `esmt2s`
--
ALTER TABLE `esmt2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `esmt3s`
--
ALTER TABLE `esmt3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `esmt4s`
--
ALTER TABLE `esmt4s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `esmt5s`
--
ALTER TABLE `esmt5s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `esmt6s`
--
ALTER TABLE `esmt6s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT untuk tabel `karakters1s`
--
ALTER TABLE `karakters1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kindustris`
--
ALTER TABLE `kindustris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ksmt1s`
--
ALTER TABLE `ksmt1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ksmt2s`
--
ALTER TABLE `ksmt2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ksmt3s`
--
ALTER TABLE `ksmt3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ksmt4s`
--
ALTER TABLE `ksmt4s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ksmt5s`
--
ALTER TABLE `ksmt5s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ksmt6s`
--
ALTER TABLE `ksmt6s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT untuk tabel `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pkls`
--
ALTER TABLE `pkls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `priodes`
--
ALTER TABLE `priodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `psmt1s`
--
ALTER TABLE `psmt1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `psmt2s`
--
ALTER TABLE `psmt2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `psmt3s`
--
ALTER TABLE `psmt3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `psmt4s`
--
ALTER TABLE `psmt4s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `psmt5s`
--
ALTER TABLE `psmt5s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `psmt6s`
--
ALTER TABLE `psmt6s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `smt1s`
--
ALTER TABLE `smt1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `smt2s`
--
ALTER TABLE `smt2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `smt3s`
--
ALTER TABLE `smt3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `smt4s`
--
ALTER TABLE `smt4s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `smt5s`
--
ALTER TABLE `smt5s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `smt6s`
--
ALTER TABLE `smt6s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `uji_koms`
--
ALTER TABLE `uji_koms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `usmt1s`
--
ALTER TABLE `usmt1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `usmt2s`
--
ALTER TABLE `usmt2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `usmt3s`
--
ALTER TABLE `usmt3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `usmt4s`
--
ALTER TABLE `usmt4s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `usmt5s`
--
ALTER TABLE `usmt5s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `usmt6s`
--
ALTER TABLE `usmt6s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
