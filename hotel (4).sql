-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2024 at 07:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `nomor_kamar` varchar(20) NOT NULL,
  `id_tipe` int(11) NOT NULL,
  `status` enum('tersedia','tidak tersedia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nomor_kamar`, `id_tipe`, `status`) VALUES
(1, '101', 1, 'tersedia'),
(2, '102', 2, 'tersedia'),
(3, '203', 3, 'tersedia'),
(10, '204', 7, 'tersedia'),
(11, '305', 8, 'tersedia'),
(12, '306', 9, 'tersedia'),
(13, '407', 10, 'tersedia'),
(14, '408', 11, 'tersedia'),
(15, '409', 12, 'tersedia'),
(16, '234', 16, 'tersedia'),
(17, 'RPL11', 17, 'tersedia'),
(18, '875', 18, 'tersedia'),
(19, '654', 18, 'tersedia'),
(25, '444', 18, 'tersedia');

--
-- Triggers `kamar`
--
DELIMITER $$
CREATE TRIGGER `daftarkamar` AFTER INSERT ON `kamar` FOR EACH ROW UPDATE tipe_kamar
SET stok = stok+1
WHERE id_tipe = new.id_tipe
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `kamarroboh` AFTER DELETE ON `kamar` FOR EACH ROW UPDATE tipe_kamar
SET stok = stok-1
WHERE id_tipe=old.id_tipe
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `jam_masuk` time NOT NULL,
  `gaji` int(11) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','Lainnya') NOT NULL,
  `jam_keluar` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `id_user`, `nama_karyawan`, `jam_masuk`, `gaji`, `jenis_kelamin`, `jam_keluar`) VALUES
(1, 2, 'Elysia', '11:00:00', 4000000, 'Perempuan', '19:00:00'),
(5, 7, 'Ryuku', '00:00:00', 90000000, 'Laki-laki', '09:00:00'),
(10, 25, 'Engeline Chairine', '19:28:00', 60000000, 'Laki-laki', '15:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `nomor_nota` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `bayar` int(12) NOT NULL,
  `kembali` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_nota`, `nomor_nota`, `total`, `tanggal`, `id_pemesanan`, `bayar`, `kembali`) VALUES
(35, 8831, 300000, '2024-11-19 06:32:00', 88, 300000, 0),
(44, 92125, 150000, '2024-11-19 10:40:00', 92, 200000, 50000),
(51, 9031, 1200000, '2024-11-19 10:53:00', 90, 2000000, 800000),
(52, 8931, 600000, '2024-11-19 11:02:00', 89, 600000, 0),
(53, 931310, 600000, '2024-11-19 19:16:00', 93, 700000, 100000),
(54, 94131, 600000, '2024-11-19 19:40:00', 94, 700000, 100000),
(55, 951410, 10000000, '2024-11-29 22:26:00', 95, 10000000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `no_ktp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `id_user`, `nama_pelanggan`, `no_telp`, `no_ktp`) VALUES
(2, 11, 'Kiana Kaslana', '083703874727', '1234567890123457'),
(3, 12, 'Mikage Reo', '0892736734', '2736485903745362'),
(12, 24, 'Isagi Yoichii', '0892736734', '12876544567'),
(13, 26, 'Geto Suguru', '0847593735', '365948737583'),
(14, 27, 'Seele Vollerei', '089667456309', '2093774856729847'),
(15, 28, 'Chichi', '085668499103', '1098273648750928'),
(16, 29, 'Engeline Chairine', '085668499103', '102983765738');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `nama_tamu` varchar(255) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `cek_in` datetime NOT NULL,
  `cek_out` datetime NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `status_pesan` enum('1','2','3') NOT NULL,
  `id_tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_kamar`, `id_pelanggan`, `nama_tamu`, `id_karyawan`, `cek_in`, `cek_out`, `kuantitas`, `status_pesan`, `id_tipe`) VALUES
(88, 15, 3, 'Reo', 1, '2024-11-19 14:25:00', '2024-11-20 14:25:00', 1, '2', 12),
(89, 13, 3, 'Nagi', 1, '2024-11-19 15:02:00', '2024-11-20 15:02:00', 1, '2', 10),
(90, 10, 3, 'Shidou', 1, '2024-11-19 17:49:00', '2024-11-20 17:49:00', 2, '2', 7),
(92, 14, 12, 'Isagi', 5, '2024-11-19 22:56:00', '2024-11-20 22:56:00', 1, '2', 11),
(93, 17, 13, 'Antoni', 10, '2024-11-20 08:15:00', '2024-11-21 08:15:00', 1, '2', 17),
(94, 17, 13, 'Antoni', 1, '2024-11-20 08:40:00', '2024-11-21 08:40:00', 1, '2', 17),
(95, 18, 14, 'Bronya Zaychik', 10, '2024-12-01 11:24:00', '2024-12-02 11:25:00', 1, '2', 18);

--
-- Triggers `pemesanan`
--
DELIMITER $$
CREATE TRIGGER `book` AFTER INSERT ON `pemesanan` FOR EACH ROW UPDATE tipe_kamar
	SET stok= stok-new.kuantitas
	WHERE id_tipe =new.id_tipe
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `unbook` AFTER DELETE ON `pemesanan` FOR EACH ROW UPDATE tipe_kamar
        SET stok = stok + OLD.kuantitas
        WHERE id_tipe = OLD.id_tipe
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok_on_status_change` AFTER UPDATE ON `pemesanan` FOR EACH ROW BEGIN
    -- Check if the status is updated to 2
    IF NEW.status_pesan = 2 THEN
        -- Update the stok in tipe_kamar
        UPDATE tipe_kamar
        SET stok = stok + OLD.kuantitas
        WHERE id_tipe = OLD.id_tipe;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `id_tipe` int(11) NOT NULL,
  `tipe_kamar` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `orang` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`id_tipe`, `tipe_kamar`, `lokasi`, `harga`, `orang`, `foto`, `stok`, `fasilitas`) VALUES
(1, 'Large', 'Lantai 1', 600000, 2, '1730902854_largeroom.jpg', 5, 'Wi-Fi, TV besar, minibar, shower.'),
(2, 'Single', 'Lantai 1', 150000, 1, '1730996271_single.jpg', 4, 'Wi-Fi, meja kerja, TV, perlengkapan mandi.'),
(3, 'Twin Bed', 'Lantai 1', 300000, 2, '1730996314_twinbed.jpeg', 6, 'Wi-Fi, meja kerja, TV, minibar.'),
(7, 'Large', 'Lantai 2', 600000, 2, '1730902854_largeroom.jpg', 4, 'Wi-Fi, TV besar, minibar, shower.'),
(8, 'Single', 'Lantai 2', 150000, 1, '1730996271_single.jpg', 8, 'Wi-Fi, meja kerja, TV, perlengkapan mandi.'),
(9, 'Twin Bed', 'Lantai 2', 300000, 2, '1730996314_twinbed.jpeg', 10, 'Wi-Fi, meja kerja, TV, minibar.'),
(10, 'Large', 'Sea View', 600000, 2, '1730902854_largeroom.jpg', 8, 'Wi-Fi, TV besar, minibar, shower.'),
(11, 'Single', 'Sea View', 150000, 1, '1730996271_single.jpg', 18, 'Wi-Fi, meja kerja, TV, perlengkapan mandi.'),
(12, 'Twin Bed', 'Sea View', 300000, 2, '1730996314_twinbed.jpeg', 3, 'Wi-Fi, meja kerja, TV, minibar.'),
(16, 'Deluxe', 'Lantai 4', 1000000, 4, '1731915937_01h6td1r2vypjx4p46t3cesp91.jpg', 8, 'Air Panas'),
(17, 'Short TIme', 'Lantai 2', 600000, 1, '1732063323_skibidi kohaku.jpg', 5, 'Wifi'),
(18, 'Chelsica', 'Lantai 4', 10000000, 1, '1732066764_Aponia thumbnail.jpg', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('1','2','3') NOT NULL,
  `foto` varchar(255) NOT NULL,
  `token` varchar(64) DEFAULT NULL,
  `expiry` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `foto`, `token`, `expiry`) VALUES
(1, 'ad@min', 'c4ca4238a0b923820dcc509a6f75849b', '1', '1_1734595204_82906c9462cd9d5c4c19.jpg', NULL, NULL),
(2, 'kary@wan', 'c4ca4238a0b923820dcc509a6f75849b', '2', '2_1733497338_7442e1a990e100d1b991.jpg', NULL, NULL),
(7, 'K1751@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2', '', NULL, NULL),
(11, 'Kiana@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', '3', '', NULL, NULL),
(12, 'Reo@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '3', '12_1732881221_21cf7245dab4ad295fe0.png', NULL, NULL),
(13, 'ryuku@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '1', '', NULL, NULL),
(24, 'Isagi@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '3', '', NULL, NULL),
(25, 'Chichi@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2', '', NULL, NULL),
(26, 'EUfbu@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '3', '26_1733493318_b6b5b854aa54da99166d.jpg', NULL, NULL),
(27, 'Seele@gmail.com', '1c3d87f472c9ab7cbc7729e281ef4cd7', '3', '27_1732940668_b14ecef41bdb126769e0.jpg', NULL, NULL),
(29, 'KurumiDaFox@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '3', '29_1734601853_f7c77441e1f4f016af89.jpeg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `id_tipe` (`id_tipe`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD UNIQUE KEY `nomor_nota` (`nomor_nota`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `token` (`token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `tipe_kamar` (`id_tipe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`id_nota`) REFERENCES `pemesanan` (`id_nota`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
