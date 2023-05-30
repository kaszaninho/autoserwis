-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 09:29 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoserwislaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `database_autoserwis`
--

CREATE TABLE `database_autoserwis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `connection` text COLLATE utf8_polish_ci NOT NULL,
  `queue` text COLLATE utf8_polish_ci NOT NULL,
  `payload` longtext COLLATE utf8_polish_ci NOT NULL,
  `exception` longtext COLLATE utf8_polish_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `klienci`
--

CREATE TABLE `klienci` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imie` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `adres_email` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `klienci`
--

INSERT INTO `klienci` (`id`, `imie`, `nazwisko`, `adres_email`, `created_at`, `updated_at`) VALUES
(7, 'Jan', 'Smith2', 'jansmith@dot.com5', NULL, '2023-05-29 18:02:33'),
(9, 'Monika', 'Ratownik', 'monisia11@spoko.com', NULL, NULL),
(11, 'Angela', 'Bonda', 'lolbonda@buziaczek.pl', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_05_14_222922_create_database_autoserwis', 1),
(2, '2023_05_25_145209_autoserwis', 2),
(3, '2023_05_25_150735_autoserwis', 3),
(4, '2014_10_12_000000_create_users_table', 4),
(5, '2014_10_12_100000_create_password_reset_tokens_table', 4),
(6, '2019_08_19_000000_create_failed_jobs_table', 4),
(7, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(8, '2023_05_26_083236_create_users_table', 5),
(9, '2023_05_28_064706_create_database_autoserwis', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `abilities` text COLLATE utf8_polish_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `samochody`
--

CREATE TABLE `samochody` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idKlienta` int(11) NOT NULL,
  `marka` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `rocznik` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `nrRejestracyjny` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `serwisy`
--

CREATE TABLE `serwisy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idKlienta` int(11) NOT NULL,
  `idSamochodu` int(11) NOT NULL,
  `dataSerwisu` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `cena` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `serwisy`
--

INSERT INTO `serwisy` (`id`, `idKlienta`, `idSamochodu`, `dataSerwisu`, `cena`, `created_at`, `updated_at`) VALUES
(1, 7, 1, '21/11/2022', 5000.00, NULL, NULL),
(2, 1, 2, '21/12/2022', 2500.00, NULL, NULL),
(3, 1, 1, '11/03/2023', 7600.00, NULL, NULL),
(4, 1, 1, '21/11/2022', 5000.00, NULL, NULL),
(5, 1, 2, '21/12/2022', 2500.00, NULL, NULL),
(6, 1, 1, '11/03/2023', 7600.00, NULL, NULL),
(7, 1, 1, '21/11/2022', 5000.00, NULL, NULL),
(8, 1, 2, '21/12/2022', 2500.00, NULL, NULL),
(9, 1, 1, '11/03/2023', 7600.00, NULL, NULL),
(10, 1, 1, '21/11/2022', 5000.00, NULL, NULL),
(11, 1, 2, '21/12/2022', 2500.00, NULL, NULL),
(12, 1, 1, '11/03/2023', 7600.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `typyserwisu`
--

CREATE TABLE `typyserwisu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nazwa` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `cena` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `typyserwisu`
--

INSERT INTO `typyserwisu` (`id`, `nazwa`, `cena`, `created_at`, `updated_at`) VALUES
(10, 'wymiania rozrządu', 1.00, NULL, NULL),
(11, 'wymiana oleju', 100.00, NULL, NULL),
(12, 'wymiania rozrządu', 1800.00, NULL, NULL),
(16, 'qwe', 5.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_polish_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_polish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Krzysztof Gajdosz', 'kgajdosz', 'confesor123@gmail.com', NULL, '$2y$10$ULbG/8ssvIoAFnjVBIbmX./Y7BU0KuB/SjF38vhiHctuzHVJa3O3C', 'bZYxnmMKvBdV6pfgOySndukVpuhx8XLuFzPHSWbWJJSAUaQkRnM8CVnF0fvg', '2023-05-26 08:20:10', '2023-05-26 12:17:49'),
(6, 'Bartosz Waśko', 'barty', 'bwasko@gmail.com', NULL, '$2y$10$i/Hf4Mu9xyAl.oPP/mdGk.t35oKObd7mivgzS60xuLASMRDJIDNnG', 'fystVlJv2pxDugZU3n6OgIWo6vsYxKPVn3n2daY4M68G51Zb1tprt67sRDFD', NULL, '2023-05-26 12:31:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `database_autoserwis`
--
ALTER TABLE `database_autoserwis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serwisy`
--
ALTER TABLE `serwisy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typyserwisu`
--
ALTER TABLE `typyserwisu`
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
-- AUTO_INCREMENT for table `database_autoserwis`
--
ALTER TABLE `database_autoserwis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `samochody`
--
ALTER TABLE `samochody`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `serwisy`
--
ALTER TABLE `serwisy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `typyserwisu`
--
ALTER TABLE `typyserwisu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
