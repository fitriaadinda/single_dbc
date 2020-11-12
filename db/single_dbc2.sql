-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Nov 2020 pada 08.49
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `single_dbc2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aboutus`
--

INSERT INTO `aboutus` (`id`, `deskripsi`) VALUES
(1, 'Digital Business Card dari The-Netwerk adalah ........... blablabla ...................'),
(3, 'Deskripsi perusahaan baru diedit lagi dah dua kali diedit moga ga error T___T');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `role` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `link_room` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `line` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `nama`, `title`, `role`, `email`, `phone`, `link_room`, `instagram`, `linkedin`, `line`, `password`) VALUES
(1, 'Fransiska Renni', '', 'Internship', 'fransiska@renni.com', '', '', '', '', '', '123456'),
(2, 'Test 1234', '', 'admin1234', 'admin1234@admin1.com', '', '', '', '', '', '123456'),
(4, 'Test ganti nama table', '', 'Internship', 'table@coba2.com', '', '', '', '', '', '123456'),
(6, 'test db baru', 'dbbaru', 'Internship', 'db@baru.com', '081111111111', 'dbdbdbdb', '@dbdbdbdb', 'dedebebe', 'db123', '123456'),
(8, 'edit ke 1000 kali', 'ngetestedit', 'magang', 'ngetest@magang.com', '087482842842', 'linkroomtest', '@igtest', 'linkedintest', 'linetest', '123456');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Struktur dari tabel `setmeeting`
--

CREATE TABLE `setmeeting` (
  `id` int(11) NOT NULL,
  `topik` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(25) DEFAULT NULL,
  `due` date DEFAULT NULL,
  `due_time` varchar(25) DEFAULT NULL,
  `type_meeting` enum('Online','Offline','','') NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setmeeting`
--

INSERT INTO `setmeeting` (`id`, `topik`, `email`, `date`, `time`, `due`, `due_time`, `type_meeting`, `deskripsi`) VALUES
(2, 'test edit', 'test2@email.com', '2020-10-14', '10:10 PM', '2020-10-21', '10:30 PM', 'Offline', 'ini test kedua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kim Namjoon', 'bangtan@sonyeondan.com', NULL, '$2y$10$jPkaOxjezhBKIVTtlAT89uQncGzsdx2bAKf6ZJsQnIicoKMEaIZ8m', NULL, '2020-09-03 02:24:11', '2020-09-03 02:24:11'),
(2, 'Kim Seokjin', 'jinhit@entertainment.com', NULL, '$2y$10$3il2JUjJF7u.7d//6KcfE./lmx19kO6jWHRDVmHNKuyVEQ9.xwQuu', NULL, '2020-09-03 19:53:17', '2020-09-03 19:53:17'),
(3, 'Min Yoongi', 'suga@swag.com', NULL, '$2y$10$9uSHTuEONjZ/V.r0myj2ze1qbo0VaOKImUgZYZFtF5xLazgOzDJHO', NULL, '2020-09-03 20:05:25', '2020-09-03 20:05:25'),
(4, 'Jung Hoseok', 'your@hope.com', NULL, '$2y$10$8xANQlTRuvUm0bZTBIyZmu1duVd/WsW9.aEMlVjbn5lBz88dzFbbe', NULL, '2020-09-03 20:21:00', '2020-09-03 20:21:00'),
(5, 'Park Jimin', 'lachi@molala.com', NULL, '$2y$10$Y9R89T2ZsxqnsPmcplkdBOeYSHOWfGKiD4YX1UbJaNHUlHoT0Bn8e', NULL, '2020-09-03 20:23:04', '2020-09-03 20:23:04'),
(6, 'Kim Taehyung', 'imv@imgudboi.com', NULL, '$2y$10$7tH.tHFxjKWbH05cmUo11.Ppu7Q3KAs8sIoy8tNkDrMl9dhDyo9i6', NULL, '2020-09-03 20:24:08', '2020-09-03 20:24:08'),
(7, 'Jeon Jungkook', 'golden@maknae.com', NULL, '$2y$10$ikgRu8FUfEtADKCj57QS.e1jnOlYhqETUm1snaJyA0TtFYMlzPSbe', NULL, '2020-09-04 00:26:48', '2020-09-04 00:26:48'),
(8, 'admin', 'admin@admin.com', NULL, '123456', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
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
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indeks untuk tabel `setmeeting`
--
ALTER TABLE `setmeeting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `setmeeting`
--
ALTER TABLE `setmeeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
