-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 10:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graphmandiri`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_casa`
--

CREATE TABLE `tb_casa` (
  `id` int(11) NOT NULL,
  `kode_cabang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `realisasi` int(15) NOT NULL,
  `target` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_deposito`
--

CREATE TABLE `tb_deposito` (
  `id_deposito` int(11) NOT NULL,
  `kode_cabang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `realisasi` int(15) NOT NULL,
  `target` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_deposito`
--

INSERT INTO `tb_deposito` (`id_deposito`, `kode_cabang`, `tanggal`, `realisasi`, `target`) VALUES
(2, 14408, '2020-07-14', 3000000, 15000000),
(3, 14402, '2020-07-15', 4000000, 16000000),
(4, 14401, '2020-07-14', 20000000, 50000000),
(5, 14403, '2020-07-30', 25000000, 60000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dpk`
--

CREATE TABLE `tb_dpk` (
  `id` int(11) NOT NULL,
  `kode_cabang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `realisasi` int(15) NOT NULL,
  `target` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_giro`
--

CREATE TABLE `tb_giro` (
  `id_giro` int(11) NOT NULL,
  `kode_cabang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `realisasi` int(15) NOT NULL,
  `target` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_giro`
--

INSERT INTO `tb_giro` (`id_giro`, `kode_cabang`, `tanggal`, `realisasi`, `target`) VALUES
(1, 14401, '2020-07-14', 1000000, 5000000),
(3, 14402, '2020-07-15', 3000000, 15000000),
(4, 14404, '2020-07-14', 2000000, 25000000),
(5, 14403, '2020-06-18', 3000000, 15000000),
(6, 14403, '2020-07-30', 15000000, 60000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kantor`
--

CREATE TABLE `tb_kantor` (
  `kode_cabang` int(11) NOT NULL,
  `nama_cabang` varchar(100) NOT NULL,
  `kelas_cabang` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_kantor`
--

INSERT INTO `tb_kantor` (`kode_cabang`, `nama_cabang`, `kelas_cabang`, `lokasi`) VALUES
(14401, 'KC Merdeka', 'Kelas 1', 'Jl. Merdeka Barat Klojen'),
(14402, 'KC Malang JA Suprapto', 'Kelas 1', 'Jl. JA Suprapto'),
(14403, 'KC Batu', 'Kelas 1', 'Batu'),
(14404, 'KC Pasuruan', 'Kelas 1', 'Pasuruan'),
(14408, 'KCP Malang Soekarno Hatta', 'Kelas 2', 'Jl. Soekarno Hatta Malang'),
(14410, 'KC Depok Sleman', 'Kelas 1', 'Depok Sleman Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tabungan`
--

CREATE TABLE `tb_tabungan` (
  `id_tabungan` int(11) NOT NULL,
  `kode_cabang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `realisasi` int(11) NOT NULL,
  `target` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_tabungan`
--

INSERT INTO `tb_tabungan` (`id_tabungan`, `kode_cabang`, `tanggal`, `realisasi`, `target`) VALUES
(1, 14401, '2020-07-14', 2000000, 10000000),
(2, 14402, '2020-07-15', 3000000, 9000000),
(3, 14404, '2020-07-15', 20000000, 100000000),
(4, 14403, '2020-07-06', 2500000, 10000000),
(5, 14408, '2020-07-16', 5000000, 25000000),
(7, 14408, '2020-06-23', 5000000, 30000000),
(8, 14403, '2020-06-12', 4000000, 40000000),
(9, 14403, '2020-07-30', 20000000, 100000000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$kIzHIrZD75bIWe9rr3l4KusUOrAWOtUuFSf167xIGkObR1PQDnP5W', '2020-07-20 09:33:38', '2020-07-20 09:33:38'),
(3, 'guest', '$2y$10$fmGHKdeSWAphQkZbOUX/G.ns.TU3uFUFH7wJp4pke8loymkP7/kCG', '2020-08-09 21:03:25', '2020-08-09 21:03:25');

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewcasa`
-- (See below for the actual view)
--
CREATE TABLE `viewcasa` (
`kode_cabang` int(11)
,`nama_cabang` varchar(100)
,`tanggal` date
,`realisasi` bigint(16)
,`target` bigint(16)
,`prosentase` varchar(23)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewdeposito`
-- (See below for the actual view)
--
CREATE TABLE `viewdeposito` (
`id_deposito` int(11)
,`kode_cabang` int(11)
,`nama_cabang` varchar(100)
,`tanggal` date
,`realisasi` int(15)
,`target` int(15)
,`prosentase` varchar(22)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewdpk`
-- (See below for the actual view)
--
CREATE TABLE `viewdpk` (
`kode_cabang` int(11)
,`nama_cabang` varchar(100)
,`tanggal` date
,`realisasi` bigint(17)
,`target` bigint(17)
,`prosentase` varchar(24)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewgiro`
-- (See below for the actual view)
--
CREATE TABLE `viewgiro` (
`id_giro` int(11)
,`kode_cabang` int(11)
,`nama_cabang` varchar(100)
,`tanggal` date
,`realisasi` int(15)
,`target` int(15)
,`prosentase` varchar(22)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewtabungan`
-- (See below for the actual view)
--
CREATE TABLE `viewtabungan` (
`id_tabungan` int(11)
,`kode_cabang` int(11)
,`nama_cabang` varchar(100)
,`tanggal` date
,`realisasi` int(11)
,`target` int(11)
,`prosentase` varchar(18)
);

-- --------------------------------------------------------

--
-- Structure for view `viewcasa`
--
DROP TABLE IF EXISTS `viewcasa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewcasa`  AS SELECT `tb_tabungan`.`kode_cabang` AS `kode_cabang`, `tb_kantor`.`nama_cabang` AS `nama_cabang`, `tb_tabungan`.`tanggal` AS `tanggal`, `tb_tabungan`.`realisasi`+ `tb_giro`.`realisasi` AS `realisasi`, `tb_tabungan`.`target`+ `tb_giro`.`target` AS `target`, concat(round((`tb_tabungan`.`realisasi` + `tb_giro`.`realisasi`) / (`tb_tabungan`.`target` + `tb_giro`.`target`) * 100,2)) AS `prosentase` FROM ((`tb_tabungan` join `tb_kantor` on(`tb_tabungan`.`kode_cabang` = `tb_kantor`.`kode_cabang`)) join `tb_giro` on(`tb_kantor`.`kode_cabang` = `tb_giro`.`kode_cabang`)) WHERE `tb_tabungan`.`tanggal` = `tb_giro`.`tanggal` AND `tb_tabungan`.`kode_cabang` = `tb_giro`.`kode_cabang``kode_cabang`  ;

-- --------------------------------------------------------

--
-- Structure for view `viewdeposito`
--
DROP TABLE IF EXISTS `viewdeposito`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewdeposito`  AS SELECT `tb_deposito`.`id_deposito` AS `id_deposito`, `tb_deposito`.`kode_cabang` AS `kode_cabang`, `tb_kantor`.`nama_cabang` AS `nama_cabang`, `tb_deposito`.`tanggal` AS `tanggal`, `tb_deposito`.`realisasi` AS `realisasi`, `tb_deposito`.`target` AS `target`, concat(round(`tb_deposito`.`realisasi` / `tb_deposito`.`target` * 100,2)) AS `prosentase` FROM (`tb_kantor` join `tb_deposito` on(`tb_kantor`.`kode_cabang` = `tb_deposito`.`kode_cabang`))  ;

-- --------------------------------------------------------

--
-- Structure for view `viewdpk`
--
DROP TABLE IF EXISTS `viewdpk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewdpk`  AS SELECT `tb_tabungan`.`kode_cabang` AS `kode_cabang`, `tb_kantor`.`nama_cabang` AS `nama_cabang`, `tb_tabungan`.`tanggal` AS `tanggal`, `tb_tabungan`.`realisasi`+ `tb_giro`.`realisasi` + `tb_deposito`.`realisasi` AS `realisasi`, `tb_tabungan`.`target`+ `tb_giro`.`target` + `tb_deposito`.`target` AS `target`, concat(round((`tb_tabungan`.`realisasi` + `tb_giro`.`realisasi` + `tb_deposito`.`realisasi`) / (`tb_tabungan`.`target` + `tb_giro`.`target` + `tb_deposito`.`target`) * 100,2)) AS `prosentase` FROM (((`tb_tabungan` join `tb_kantor` on(`tb_tabungan`.`kode_cabang` = `tb_kantor`.`kode_cabang`)) join `tb_giro` on(`tb_kantor`.`kode_cabang` = `tb_giro`.`kode_cabang`)) join `tb_deposito` on(`tb_kantor`.`kode_cabang` = `tb_deposito`.`kode_cabang`)) WHERE `tb_tabungan`.`tanggal` = `tb_giro`.`tanggal` AND `tb_giro`.`tanggal` = `tb_deposito`.`tanggal` AND `tb_tabungan`.`kode_cabang` = `tb_giro`.`kode_cabang` AND `tb_giro`.`kode_cabang` = `tb_deposito`.`kode_cabang``kode_cabang`  ;

-- --------------------------------------------------------

--
-- Structure for view `viewgiro`
--
DROP TABLE IF EXISTS `viewgiro`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewgiro`  AS SELECT `tb_giro`.`id_giro` AS `id_giro`, `tb_giro`.`kode_cabang` AS `kode_cabang`, `tb_kantor`.`nama_cabang` AS `nama_cabang`, `tb_giro`.`tanggal` AS `tanggal`, `tb_giro`.`realisasi` AS `realisasi`, `tb_giro`.`target` AS `target`, concat(round(`tb_giro`.`realisasi` / `tb_giro`.`target` * 100,2)) AS `prosentase` FROM (`tb_kantor` join `tb_giro` on(`tb_kantor`.`kode_cabang` = `tb_giro`.`kode_cabang`))  ;

-- --------------------------------------------------------

--
-- Structure for view `viewtabungan`
--
DROP TABLE IF EXISTS `viewtabungan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewtabungan`  AS SELECT `tb_tabungan`.`id_tabungan` AS `id_tabungan`, `tb_tabungan`.`kode_cabang` AS `kode_cabang`, `tb_kantor`.`nama_cabang` AS `nama_cabang`, `tb_tabungan`.`tanggal` AS `tanggal`, `tb_tabungan`.`realisasi` AS `realisasi`, `tb_tabungan`.`target` AS `target`, concat(round(`tb_tabungan`.`realisasi` / `tb_tabungan`.`target` * 100,2)) AS `prosentase` FROM (`tb_kantor` join `tb_tabungan` on(`tb_kantor`.`kode_cabang` = `tb_tabungan`.`kode_cabang`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tb_casa`
--
ALTER TABLE `tb_casa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_cabang` (`kode_cabang`);

--
-- Indexes for table `tb_deposito`
--
ALTER TABLE `tb_deposito`
  ADD PRIMARY KEY (`id_deposito`),
  ADD KEY `kode_cabang` (`kode_cabang`);

--
-- Indexes for table `tb_dpk`
--
ALTER TABLE `tb_dpk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_cabang` (`kode_cabang`);

--
-- Indexes for table `tb_giro`
--
ALTER TABLE `tb_giro`
  ADD PRIMARY KEY (`id_giro`),
  ADD KEY `kode_cabang` (`kode_cabang`);

--
-- Indexes for table `tb_kantor`
--
ALTER TABLE `tb_kantor`
  ADD PRIMARY KEY (`kode_cabang`);

--
-- Indexes for table `tb_tabungan`
--
ALTER TABLE `tb_tabungan`
  ADD PRIMARY KEY (`id_tabungan`),
  ADD KEY `kode_cabang` (`kode_cabang`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_casa`
--
ALTER TABLE `tb_casa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_deposito`
--
ALTER TABLE `tb_deposito`
  MODIFY `id_deposito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_dpk`
--
ALTER TABLE `tb_dpk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_giro`
--
ALTER TABLE `tb_giro`
  MODIFY `id_giro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_tabungan`
--
ALTER TABLE `tb_tabungan`
  MODIFY `id_tabungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_casa`
--
ALTER TABLE `tb_casa`
  ADD CONSTRAINT `tb_casa_ibfk_1` FOREIGN KEY (`kode_cabang`) REFERENCES `tb_kantor` (`kode_cabang`);

--
-- Constraints for table `tb_deposito`
--
ALTER TABLE `tb_deposito`
  ADD CONSTRAINT `tb_deposito_ibfk_1` FOREIGN KEY (`kode_cabang`) REFERENCES `tb_kantor` (`kode_cabang`);

--
-- Constraints for table `tb_dpk`
--
ALTER TABLE `tb_dpk`
  ADD CONSTRAINT `tb_dpk_ibfk_1` FOREIGN KEY (`kode_cabang`) REFERENCES `tb_kantor` (`kode_cabang`);

--
-- Constraints for table `tb_giro`
--
ALTER TABLE `tb_giro`
  ADD CONSTRAINT `tb_giro_ibfk_1` FOREIGN KEY (`kode_cabang`) REFERENCES `tb_kantor` (`kode_cabang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
