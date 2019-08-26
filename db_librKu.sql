-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 26, 2019 at 06:53 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_librKu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nim` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('l','p') NOT NULL,
  `prodi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`nim`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `prodi`) VALUES
(1000231, 'Joni Stephano', 'Palembang', '1999-08-01', 'l', 'Teknik Informatika'),
(1000232, 'Karen Maria', 'Kendari', '1998-08-01', 'p', 'Sistem Informasi'),
(1000233, 'Liona Kumalasari', 'Lampung', '2000-04-11', 'p', 'Teknik Komputer'),
(1000234, 'Sintya Maharani', 'Madiun', '2001-03-02', 'p', 'Teknik Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(9) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` int(3) NOT NULL,
  `lokasi` enum('rak1','rak2','rak3') NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`) VALUES
(1, 'Belajar HTML & CSS', 'malasngoding.com', 'Gramedia', '2001', '10020010420191', 0, 'rak1', '2019-08-01'),
(2, 'PHP & MySql Untuk Pemula', 'malasngoding.com', 'Gramedia', '2002', '10020010420192', 37, 'rak2', '2019-08-01'),
(3, 'Javascript For Beginner', 'books.goalkicker.com', 'Gramedia', '2004', '10020010420193', 6, 'rak2', '2019-08-31'),
(4, 'Seminggu Jago Codeigniter', 'codeigniter.com', 'Gramedia', '2004', '100912738927', 80, 'rak1', '2019-08-01'),
(5, 'Kuasai Laravel dalam Seminggu', 'laravel.com', 'Gramedia', '2005', '102231231321', 45, 'rak3', '2019-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(9) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tgl_pinjam` varchar(30) NOT NULL,
  `tgl_kembali` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `judul`, `nim`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(1, 'demo', 'demo', 'demo', '19-08-2019', '28-08-2019', 'pinjam'),
(2, 'PHP & MySql Untuk Pemula', '1000231', 'Joni Stephano', '24-08-2019', '31-08-2019', 'kembali'),
(3, 'PHP & MySql Untuk Pemula', '1000231', 'Joni Stephano', '24-08-2019', '31-08-2019', 'pinjam'),
(4, 'PHP & MySql Untuk Pemula', '1000231', 'Joni Stephano', '24-08-2019', '31-08-2019', 'pinjam'),
(5, 'Belajar HTML & CSS', '1000231', 'Joni Stephano', '24-08-2019', '31-08-2019', 'kembali'),
(6, 'Belajar HTML & CSS', '1000231', 'Joni Stephano', '24-08-2019', '31-08-2019', 'pinjam'),
(7, 'Belajar HTML & CSS', '1000231', 'Joni Stephano', '24-08-2019', '31-08-2019', 'pinjam'),
(8, 'Belajar HTML & CSS', '1000231', 'Joni Stephano', '24-08-2019', '31-08-2019', 'kembali'),
(9, 'Javascript For Beginner', '1000231', 'Joni Stephano', '24-08-2019', '31-08-2019', 'kembali');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `level` varchar(30) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `level`, `foto`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin.jpg'),
(2, 'admin1', 'admin1', 'admin1', 'admin', 'admin1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
