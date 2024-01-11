-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 07:21 AM
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
-- Database: `perpusweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `alamat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `foto`, `nisn`, `nama`, `kelas`, `jk`, `alamat`) VALUES
(50, '659f4e09d3687.PNG', '2201094002', 'SITI NURHALIZA', '5A', 'perempuan', 'telp 0761-494499 fax 0761-494999 kode pos 28654, Jl. Maharaja Indra Jl. Lintas Sumatra No.517, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `rak` varchar(100) NOT NULL,
  `inventaris` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `klasifikasi` varchar(100) NOT NULL,
  `kelas` varchar(200) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tahunterbit` int(11) NOT NULL,
  `tlp` int(11) NOT NULL,
  `penerbit` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `foto`, `judul`, `stok`, `kategori`, `rak`, `inventaris`, `tanggal`, `pengarang`, `isbn`, `klasifikasi`, `kelas`, `keterangan`, `kota`, `alamat`, `tahunterbit`, `tlp`, `penerbit`) VALUES
(21, '659f4d2ebe1d1.PNG', 'hwheiuw', 7, '', '', '', '', '', '', '', '', '', '', '', 0, 0, ''),
(22, '659f4dbf7891c.PNG', 'Algoritma & Pemograman', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0, ''),
(23, '659f57360a941.jpg', 'ad', 0, 'da', 'a', '1990', '15 desember 2023', 'Siti nurhaliza', 'isbn30bisnis', '12abisnis', '9Ab', 'photok', 'surabaya', 'Jl. Lintas Sumatra No.KM 58, Mekar Jaya, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654', 2020, 2147483647, 'Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(2, 'admin@pgri.com', 'adminpgri');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tanggalpinjam` date NOT NULL,
  `tanggalkembali` date NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `alamat` varchar(220) NOT NULL,
  `tlp` int(11) NOT NULL,
  `kota` varchar(220) NOT NULL,
  `tahunterbit` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `pengarang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id`, `keterangan`, `alamat`, `tlp`, `kota`, `tahunterbit`, `judul`, `penerbit`, `pengarang`) VALUES
(7, 'Tanpa Keterangan', 'Jl. Maharaja Indra, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654', 2147483647, 'futdf', 2004, 'yyguyfu', 'giyfi', 'chg'),
(8, 'photo', 'Jl. Maharaja Indra, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654', 0, '', 0, '', '', ''),
(14, 'photo', 'Jl. Maharaja Indra, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654', 2147483647, '', 0, '', '', ''),
(15, 'photo', 'Jl. Maharaja Indra, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654', 2147483647, '', 0, '', '', ''),
(16, 'photo', 'Jl. Maharaja Indra, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654', 2147483647, '', 0, '', '', ''),
(18, '', '', 0, '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tanggalpinjam` date NOT NULL,
  `tanggalkembali` date NOT NULL,
  `kembali` text NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `kelas` varchar(200) NOT NULL,
  `denda` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `nama`, `judul`, `tanggalpinjam`, `tanggalkembali`, `kembali`, `jumlah`, `status`, `kelas`, `denda`) VALUES
(21, 'siti', 'Algoritma & Pemograman', '2024-01-08', '2024-01-09', '2024-01-08', '1', 'dikembalikan', '5', '0'),
(22, 'Efra', 'Manajemen Bisnis', '2024-02-07', '2024-02-08', '2024-01-11', '1', 'dikembalikan', '10', '0'),
(28, 'xasfcwe', 'Algoritma & Pemograman', '2024-01-04', '2024-01-10', '2024-01-11', '1', 'dikembalikan', '5', '0'),
(29, 'Resto & Cafe Solitaire', 'Algoritma & Pemograman', '2024-01-08', '2024-01-10', '2024-01-11', '1', 'dikembalikan', '5', '0'),
(30, 'Resto & Cafe Solitaire', 'Algoritma & Pemograman', '2024-01-03', '2024-01-05', '2024-01-11', '', 'dikembalikan', '5', '0'),
(31, 'Resto & Cafe Solitaire', '', '2024-01-08', '2024-01-10', '2024-01-11', '13', 'dikembalikan', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `level` varchar(225) NOT NULL,
  `tlp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `foto`, `nama`, `email`, `status`, `level`, `tlp`) VALUES
(17, '659f4f1425d11.PNG', 'SITI NURHALIZA', '08974395648', 'aktif', 'guru', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id` int(11) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id`, `nomor`, `nama`, `keterangan`) VALUES
(1, 'rak11', 'novel', 'photo');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `parent_key` varchar(128) DEFAULT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id`, `jabatan`, `nama`, `parent_key`, `foto`) VALUES
(1, 'kepala sekolah', 'herman saputra .se.', NULL, '659548498aef8.png'),
(2, 'kurikulum', 'nur a sni s.pd.', '1', '659545d573715.png'),
(3, 'bendahara', 'marlina s.pd.', '1', '65954710947e5.png'),
(4, 'kesiswaan', 'linda marlina dewi s.pd.', '1', '65954721404c6.png'),
(5, 'kepala perpustakaan', 'lina marlina dewi s.pd.', '2', '659549765242d.png'),
(6, 'teknisi pustaka', 'muhammad hakim', '5', '6595498a5b35d.png'),
(7, 'operator pustaka', 'nita nurasih s.pd.', '5', '6595499777449.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rak`
--
ALTER TABLE `rak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
