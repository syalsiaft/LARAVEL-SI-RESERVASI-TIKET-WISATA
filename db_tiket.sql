-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2023 pada 15.33
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tiket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jadwals`
--

CREATE TABLE `jadwals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kota_asal` bigint(20) UNSIGNED NOT NULL,
  `kota_tujuan` bigint(20) UNSIGNED NOT NULL,
  `id_transportasi` bigint(20) UNSIGNED NOT NULL,
  `jam_berangkat` datetime NOT NULL,
  `jam_sampai` datetime NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwals`
--

INSERT INTO `jadwals` (`id`, `kota_asal`, `kota_tujuan`, `id_transportasi`, `jam_berangkat`, `jam_sampai`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, '2023-06-03 13:58:00', '2023-06-03 16:58:00', 25000, '2023-06-02 21:58:13', '2023-06-02 21:58:13'),
(2, 5, 1, 1, '2023-06-03 13:43:00', '2023-06-03 16:43:00', 1050000, '2023-06-02 22:44:10', '2023-06-02 22:44:10'),
(3, 3, 4, 5, '2023-06-03 12:46:00', '2023-06-03 16:44:00', 720000, '2023-06-02 22:44:41', '2023-06-02 22:44:41'),
(4, 7, 8, 3, '2023-06-03 14:46:00', '2023-06-06 15:46:00', 750000, '2023-06-02 22:47:04', '2023-06-02 22:47:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kotas`
--

CREATE TABLE `kotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kotas`
--

INSERT INTO `kotas` (`id`, `kota`, `created_at`, `updated_at`) VALUES
(1, 'Surabaya', '2023-06-02 21:57:04', '2023-06-02 21:57:04'),
(2, 'Bojonegoro', '2023-06-02 21:57:10', '2023-06-02 21:57:10'),
(3, 'Palangkaraya', '2023-06-02 22:38:33', '2023-06-02 22:38:33'),
(4, 'Palembang', '2023-06-02 22:38:41', '2023-06-02 22:38:41'),
(5, 'Jakarta', '2023-06-02 22:38:48', '2023-06-02 22:38:48'),
(6, 'Bandung', '2023-06-02 22:38:54', '2023-06-02 22:38:54'),
(7, 'Makassar', '2023-06-02 22:40:00', '2023-06-02 22:40:00'),
(8, 'Balikpapan', '2023-06-02 22:40:13', '2023-06-02 22:40:13'),
(10, 'Bengkulu', '2023-06-04 21:41:14', '2023-06-04 21:41:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_02_140254_transportasi', 1),
(6, '2023_05_02_140451_kota', 1),
(7, '2023_05_02_140525_jadwal', 1),
(8, '2023_05_02_140549_pemesanan', 1),
(9, '2023_05_02_140609_penumpang', 1),
(10, '2023_05_27_135430_role', 1),
(11, '2023_06_01_174045_tiket', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanans`
--

CREATE TABLE `pemesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jadwal` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_pembeli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pembeli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pembeli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp_pembeli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemesanans`
--

INSERT INTO `pemesanans` (`id`, `id_jadwal`, `id_user`, `nama_pembeli`, `alamat_pembeli`, `email_pembeli`, `no_telp_pembeli`, `jumlah_tiket`, `total_harga`, `created_at`, `updated_at`) VALUES
(2, 1, 3, 'Rahma', 'Bojonegoro', 'fatmalarahma@gmail.com', '081235401266', 3, 45000, '2023-06-05 02:36:47', '2023-06-05 05:16:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penumpangs`
--

CREATE TABLE `penumpangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pemesanan` bigint(20) UNSIGNED NOT NULL,
  `nama_penumpang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_seat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penumpangs`
--

INSERT INTO `penumpangs` (`id`, `id_pemesanan`, `nama_penumpang`, `no_seat`, `created_at`, `updated_at`) VALUES
(2, 2, 'Rahma', 13, '2023-06-03 04:48:02', '2023-06-03 04:48:02'),
(3, 3, 'Chiara', 22, '2023-06-03 04:48:14', '2023-06-03 04:48:14'),
(4, 4, 'Bagas', 18, '2023-06-03 04:48:25', '2023-06-03 04:48:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_rule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `nama_rule`, `created_at`, `updated_at`) VALUES
(1, 'Pegawai', '2023-06-04 21:46:18', '2023-06-04 21:46:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tikets`
--

CREATE TABLE `tikets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pembeli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tikets`
--

INSERT INTO `tikets` (`id`, `nama_pembeli`, `kota_asal`, `kota_tujuan`, `waktu_transaksi`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ckristina', 'Bojonegoro', 'Surabaya', '2023-06-03T13:11', 'Lunas', '2023-06-02 22:12:01', '2023-06-02 22:12:01'),
(2, 'Alif', 'Surabaya', 'Palembang', '2023-06-02T13:12', 'Dibatalkan', '2023-06-02 22:12:29', '2023-06-02 22:12:29'),
(3, 'Aldan', 'Bandung', 'Jakarta', '2023-06-09T12:45', 'Kadaluwarsa', '2023-06-02 22:45:25', '2023-06-02 22:45:25'),
(4, 'Tiara', 'Dompu', 'Palembang', '2023-06-03T15:46', 'Lunas', '2023-06-02 22:46:14', '2023-06-02 22:46:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportasis`
--

CREATE TABLE `transportasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_transportasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_transportasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_kursi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transportasis`
--

INSERT INTO `transportasis` (`id`, `kode`, `nama_transportasi`, `jenis_transportasi`, `kelas`, `jumlah_kursi`, `created_at`, `updated_at`) VALUES
(1, 'P001', 'Garuda Indonesia', 'Pesawat', 'Bisnis', 2, '2023-06-02 21:57:40', '2023-06-02 21:57:40'),
(2, 'KA001', 'KA Gumarang', 'Kereta Api', 'Ekonomi', 1, '2023-06-02 21:57:53', '2023-06-02 21:57:53'),
(3, 'KL001', 'KM Sinar Mas', 'Kapal', 'Ekonomi', 1, '2023-06-02 22:41:24', '2023-06-02 22:42:36'),
(4, 'KL002', 'KM Bukit Siguntang', 'Kapal', 'Ekonomi', 2, '2023-06-02 22:42:29', '2023-06-02 22:42:29'),
(5, 'P002', 'Lion Air', 'Pesawat', 'Ekonomi', 4, '2023-06-02 22:42:57', '2023-06-02 22:42:57'),
(6, 'KA002', 'KA Penataran', 'Kereta Api', 'Ekonomi', 2, '2023-06-02 22:43:31', '2023-06-02 22:43:31'),
(7, 'KA003', 'KA Brantas', 'Kereta Api', 'Eksekutif', 1, '2023-06-02 22:48:57', '2023-06-02 22:48:57'),
(8, 'KL003', 'KM Lambelu', 'Kapal', 'Bisnis', 1, '2023-06-02 22:49:31', '2023-06-02 22:49:31'),
(9, 'KL004', 'KM Kelimutu', 'Kapal', 'Bisnis', 2, '2023-06-02 22:50:30', '2023-06-02 22:50:30'),
(10, 'P003', 'Citilink', 'Pesawat', 'Bisnis', 2, '2023-06-02 22:50:51', '2023-06-02 22:50:51'),
(11, 'P004', 'Sriwijaya', 'Pesawat', 'Bisnis', 2, '2023-06-04 21:43:11', '2023-06-04 21:43:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('Admin','Pegawai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `no_telp`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Firman', 'firmanfrezypradana@gmail.com', 'firman', '085244543243', 'Admin', NULL, '2023-06-02 23:04:31', '2023-06-05 05:12:15'),
(3, 'Agung', 'agungpambudi@gmail.com', 'agung', '089716818910', 'Admin', NULL, '2023-06-02 23:05:15', '2023-06-02 23:05:15'),
(4, 'Yuni', 'fzyuniar@gmail.com', 'yuni', '087752251005', 'Pegawai', NULL, '2023-06-03 20:42:39', '2023-06-03 20:42:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwals_kota_asal_foreign` (`kota_asal`),
  ADD KEY `jadwals_kota_tujuan_foreign` (`kota_tujuan`),
  ADD KEY `jadwals_id_transportasi_foreign` (`id_transportasi`);

--
-- Indeks untuk tabel `kotas`
--
ALTER TABLE `kotas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesanans_id_jadwal_foreign` (`id_jadwal`),
  ADD KEY `pemesanans_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `penumpangs`
--
ALTER TABLE `penumpangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penumpangs_id_pemesanan_foreign` (`id_pemesanan`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tikets`
--
ALTER TABLE `tikets`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transportasis`
--
ALTER TABLE `transportasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kotas`
--
ALTER TABLE `kotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penumpangs`
--
ALTER TABLE `penumpangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tikets`
--
ALTER TABLE `tikets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transportasis`
--
ALTER TABLE `transportasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD CONSTRAINT `jadwals_id_transportasi_foreign` FOREIGN KEY (`id_transportasi`) REFERENCES `transportasis` (`id`),
  ADD CONSTRAINT `jadwals_kota_asal_foreign` FOREIGN KEY (`kota_asal`) REFERENCES `kotas` (`id`),
  ADD CONSTRAINT `jadwals_kota_tujuan_foreign` FOREIGN KEY (`kota_tujuan`) REFERENCES `kotas` (`id`);

--
-- Ketidakleluasaan untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD CONSTRAINT `pemesanans_id_jadwal_foreign` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwals` (`id`),
  ADD CONSTRAINT `pemesanans_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `penumpangs`
--
ALTER TABLE `penumpangs`
  ADD CONSTRAINT `penumpangs_id_pemesanan_foreign` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanans` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
