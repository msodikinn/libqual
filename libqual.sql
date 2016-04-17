-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Apr 2016 pada 16.53
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `title`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Sepatu', NULL, '2016-04-17 07:25:45', '2016-04-17 07:25:45'),
(2, 'Lifestyle', 1, '2016-04-17 07:25:45', '2016-04-17 07:25:45'),
(3, 'Berlari', 1, '2016-04-17 07:25:45', '2016-04-17 07:25:45'),
(4, 'Basket', 1, '2016-04-17 07:25:45', '2016-04-17 07:25:45'),
(5, 'Sepakbola', 1, '2016-04-17 07:25:45', '2016-04-17 07:25:45'),
(6, 'Pakaian', NULL, '2016-04-17 07:25:45', '2016-04-17 07:25:45'),
(7, 'Jaket', 6, '2016-04-17 07:25:45', '2016-04-17 07:25:45'),
(8, 'Hoodie', 6, '2016-04-17 07:25:45', '2016-04-17 07:25:45'),
(9, 'Rompi', 6, '2016-04-17 07:25:45', '2016-04-17 07:25:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_product`
--

CREATE TABLE `category_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, NULL),
(2, 2, 3, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 1, 2, NULL, NULL),
(5, 2, 2, NULL, NULL),
(6, 4, 7, NULL, NULL),
(7, 6, 7, NULL, NULL),
(8, 5, 9, NULL, NULL),
(9, 6, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_kriterias`
--

CREATE TABLE `layanan_kriterias` (
  `id` int(10) UNSIGNED NOT NULL,
  `search_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nilai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `layanan_kriterias`
--

INSERT INTO `layanan_kriterias` (`id`, `search_key`, `name`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 'as_rapi', 'Pustakan Berpakaian Rapi dan Sopan', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(2, 'as_ramah', 'Pustakawan Bersikap ramah dalam melayani', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(3, 'as_membantu_kesulitan', 'Pustakawan tanggap membantu kesulitan saya', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(4, 'as_mencari_informasi', 'Pustakawan mengerti kebutuhan saya ketika mencari Informasi', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(5, 'as_menjawab_pertanyaan', 'Pustakawan mampu menjawab pertanyaan yang saya ajukan', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(6, 'as_membimbing_mencari_informasi', 'pustakawan membimbing mencari informasi koleksi saya', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_kriterias_i_cs`
--

CREATE TABLE `layanan_kriterias_i_cs` (
  `id` int(10) UNSIGNED NOT NULL,
  `search_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nilai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `layanan_kriterias_i_cs`
--

INSERT INTO `layanan_kriterias_i_cs` (`id`, `search_key`, `name`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 'ic_koleksi_uptodate', 'Apakah Kemutakhiran Koleksi Perpustukaan(up to date)', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(2, 'ic_koleksi_bermanfaat', 'Koleksi buku di perpustakaan bermanfaat untuk pekerjaan saya', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(3, 'ic_surat_kabar', 'Koleksi surat kabar membuat saya mengetahui berita terkini', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(4, 'ic_komputer', 'komputer perpustakaan untuk mudah di gunakan', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(5, 'ic_majalah', 'Koleksi Majalah dapat menghibur dan membantu saya memperoleh berita', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(6, 'ic_koleksi_rak', 'Saya sudah menemukan dan menjangkau koleksi di rak', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(7, 'ic_internet', 'Adanya fasilitas internet di perpustakaan membantu saya memperoleh informasi yang saya cari', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(8, 'ic_waktu_operasional', 'waktu operasional sesuai dengan kebutuhan', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(9, 'ic_opac', 'opac(Katalog yang berada di Komputer mudah dan Nyaman', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_kriterias_l_ps`
--

CREATE TABLE `layanan_kriterias_l_ps` (
  `id` int(10) UNSIGNED NOT NULL,
  `search_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nilai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `layanan_kriterias_l_ps`
--

INSERT INTO `layanan_kriterias_l_ps` (`id`, `search_key`, `name`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 'lp_suasana_perpustakaan', 'suasana perpustakaan terasa tenang dan kondusif untuk membaca', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(2, 'ip_ruang_perpustakaan', 'ruang perpustakaan yang menarik membuat saya berkeinginan untuk mengunjungi perpustakaan', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(3, 'lp_konsentrasi_membaca', 'Suasana Perpustukaan mendukung saya fokus/konsentrasi pada apa yang saya baca', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(4, 'ip_tempat_positif', 'Ruang perpustakan merupakan tmepat positif untuk saya menghabisakan waktu', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(5, 'lp_inspirasi', 'Ruang Perpustukaan membuat saya jadi terinspirasi', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(6, 'ip_fasilitas', 'Keadaan fasilitas-fasilitas fisik(kursi,meja, dll) masih bagus', 0, '2016-04-17 07:25:46', '2016-04-17 07:25:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_13_025942_create_products_table', 1),
('2016_04_13_033822_create_categories_table', 1),
('2016_04_17_112847_layanan_kriteria_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `photo`, `model`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Nike Air Force', 'stub-shoe.jpg', 'Sepatu Pria', '340000.00', '2016-04-17 07:25:45', '2016-04-17 07:25:45'),
(2, 'Nike Air Max', 'stub-shoe.jpg', 'Sepatu Wanita', '420000.00', '2016-04-17 07:25:45', '2016-04-17 07:25:45'),
(3, 'Nike Air Zoom', 'stub-shoe.jpg', 'Sepatu Wanita', '360000.00', '2016-04-17 07:25:45', '2016-04-17 07:25:45'),
(4, 'Nike Aeroloft Bomber', 'stub-jacket.jpg', 'Jaket Wanita', '720000.00', '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(5, 'Nike Guild 550', 'stub-jacket.jpg', 'Jaket Pria', '380000.00', '2016-04-17 07:25:46', '2016-04-17 07:25:46'),
(6, 'Nike SB Steele', 'stub-jacket.jpg', 'Jaket Pria', '1200000.00', '2016-04-17 07:25:46', '2016-04-17 07:25:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$xXl3MJutJvEtOsEiWe75eeEu.JXeYnPOTNK8TNzYjnaF7XbrhzRiC', NULL, '2016-04-17 07:25:45', '2016-04-17 07:25:45', 'admin'),
(2, 'user', 'user@gmail.com', '$2y$10$zkzQuQmP4fU2Weto3DPoQes8XpEkVDUL.zIP60pUCzFkJr7YHqnNe', NULL, '2016-04-17 07:25:45', '2016-04-17 07:25:45', 'user'),
(3, 'admin123', 'admin123@gmail.com', '$2y$10$2L.mqOFIzeN0s1gvkS3V4OgHz5EhaCRvgLhEALm.eWqYTrbBVI4QC', 'Wag1CMe2UI62CiQQkwiouQj545ZyavMRIdtmYYeLbH6iNWalGdXVAlsETKnC', '2016-04-17 07:26:52', '2016-04-17 07:27:34', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`),
  ADD KEY `category_product_category_id_foreign` (`category_id`);

--
-- Indexes for table `layanan_kriterias`
--
ALTER TABLE `layanan_kriterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan_kriterias_i_cs`
--
ALTER TABLE `layanan_kriterias_i_cs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan_kriterias_l_ps`
--
ALTER TABLE `layanan_kriterias_l_ps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `layanan_kriterias`
--
ALTER TABLE `layanan_kriterias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `layanan_kriterias_i_cs`
--
ALTER TABLE `layanan_kriterias_i_cs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `layanan_kriterias_l_ps`
--
ALTER TABLE `layanan_kriterias_l_ps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
