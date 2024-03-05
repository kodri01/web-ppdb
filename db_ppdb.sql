-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 01:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_siswa_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(20) NOT NULL,
  `id_siswa` int(50) DEFAULT NULL,
  `tgl_tf` date DEFAULT NULL,
  `rek_bank` varchar(50) DEFAULT NULL,
  `nominal` varchar(100) DEFAULT NULL,
  `bukti_tf` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `id_siswa`, `tgl_tf`, `rek_bank`, `nominal`, `bukti_tf`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 12, '2023-12-29', 'BRI', '15000000', '8221.jpg_1702738484.jpg', '2023-12-16', '2023-12-16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_register` bigint(20) NOT NULL,
  `status_siswa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asal_siswa` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_tk` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_tk` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_sttb` date DEFAULT NULL,
  `no_sttb` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sekolah_asal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dari_kelas` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_terima` date DEFAULT NULL,
  `di_kelas` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_panggilan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` timestamp NULL DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewarganegaraan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saudara_kandung` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahasa` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berat_badan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinggi_badan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gol_darah` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyakit` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_tinggal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zonasi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pend_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerja_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pend_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerja_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wali_murid` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hub_kel` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pend_wali` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_wali` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kk` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `akte` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ijazah_tk` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alasan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `no_register`, `status_siswa`, `asal_siswa`, `nama_tk`, `alamat_tk`, `tgl_sttb`, `no_sttb`, `sekolah_asal`, `alamat_sekolah`, `dari_kelas`, `tgl_terima`, `di_kelas`, `nama_lengkap`, `nama_panggilan`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `kewarganegaraan`, `saudara_kandung`, `bahasa`, `berat_badan`, `tinggi_badan`, `gol_darah`, `penyakit`, `alamat`, `no_telp`, `tempat_tinggal`, `zonasi`, `nama_ayah`, `pend_ayah`, `pekerja_ayah`, `nama_ibu`, `pend_ibu`, `pekerja_ibu`, `wali_murid`, `hub_kel`, `pend_wali`, `pekerjaan_wali`, `profile`, `kk`, `akte`, `ijazah_tk`, `status`, `alasan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 20231201, 'Siswa Baru', 'TK', 'TK Babusalam', 'Jl Merdeka No 11', '2023-12-31', '82722188', NULL, NULL, NULL, NULL, NULL, 'Isman', 'Iss', 'Laki-Laki', 'Merlung', '2023-12-30 17:00:00', 'Islam', 'Indonesia', '3', 'Indonesia', '20', '143', 'A', 'Tidak Ada', 'Jalan Sugiono', '081121222324', 'Orang Tua', '15', 'Example', 'S1', 'Guru', 'Murti', 'Sarjana', 'Guru', '-', '-', '-', '-', '25284.jpg_1702738459.jpg', '8797.jpg_1702738459.jpg', '13092.jpg_1702738459.jpg', '8797.jpg_1702738459.jpg', '1', NULL, '2023-12-15 08:09:03', '2023-12-16 07:54:19', NULL),
(13, 20231202, 'Siswa Pindahan', NULL, NULL, NULL, NULL, NULL, 'SD Muslimin Jambi', 'Jalan Angkringan', '3', '2023-01-01', '3', 'Budianto', 'anto', 'Laki-Laki', 'Kota Jambi', '2022-12-31 17:00:00', 'Islam', 'Indonesia', '1', 'Indonesia', '20', '143', 'A', 'Tidak Ada', 'Jalan Merdeka Nomor 2', '081234567890', 'Menumpang', '20', 'Burhan', 'SMA', 'Ojek', 'Hasni', 'SMA', 'IRT', '-', '-', '-', '-', '8515.jpg_1702733903.jpg', '8797.jpg_1702733903.jpg', '24041.jpg_1702733903.jpg', '25284.jpg_1702733903.jpg', '1', NULL, '2023-12-15 08:36:46', '2023-12-16 06:38:23', NULL),
(14, 20231203, 'Siswa Baru', 'Rumah Tangga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bintitan', 'Binti', 'Perempuan', 'Merlung', '2023-01-30 17:00:00', 'Kristen', 'Indonesia', '1', 'Indonesia', '31', '132', 'B', 'Tidak Ada', 'jalan Merdeka', '081121222324', 'Menumpang', '3', 'nurdin', 'S1', 'Swasta', 'Maimunah', 'Sarjana', 'Kantoran', '-', '-', '-', '-', '25284.jpg_1702741089.jpg', NULL, NULL, NULL, '0', 'Alamat rumah terlalu jauh dari perkarangan sekolah', '2023-12-16 08:38:09', '2023-12-16 08:42:31', NULL),
(15, 20231204, 'Siswa Pindahan', NULL, NULL, NULL, NULL, NULL, 'SDN 12 Kota Jambi', 'Telanaipura', '4', '2023-12-01', '4', 'Vivi Azizah', 'Vivi', 'Perempuan', 'Jambi', '2022-12-31 17:00:00', 'Islam', 'Indonesia', '2', 'Indonesia', '31', '143', 'B', 'Tidak Ada', 'Jalan Merdeka', '08322173637', 'Orang Tua', '20', 'Aziz', 'SMA', 'Tani', 'Maryam', 'SMA', 'IRT', '-', '-', '-', '-', '8797.jpg_1702901959.jpg', NULL, NULL, NULL, '0', NULL, '2023-12-18 05:19:19', '2023-12-18 05:19:19', NULL),
(16, 20231205, 'Siswa Baru', 'Rumah Tangga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Beni', 'Ben', 'Laki-Laki', 'Kota Jambi', '2023-12-30 17:00:00', 'Islam', 'Indonesia', '4', 'Indonesia', '20', '143', 'A', 'Tidak Ada', 'Jalan Manggis', '081121222324', 'Orang Tua', '15', 'Yanto', 'SMA', 'TANI', 'Mimi', 'Sarjana', 'Kantoran', '-', '-', '-', '-', '26078.jpg_1702902173.jpg', NULL, NULL, NULL, '0', NULL, '2023-12-18 05:22:53', '2023-12-18 05:22:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.id', NULL, '$2y$10$3x8Tp1rcQw8eVg89TEoDeepqge.9QmxuXFs1nQMuj55ljw7AjPIS6', NULL, '2023-08-22 06:36:34', '2023-08-22 06:36:34');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswa_no_register_unique` (`no_register`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
