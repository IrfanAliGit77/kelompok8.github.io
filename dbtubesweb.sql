-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Des 2021 pada 15.55
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtubesweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nim` char(12) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `kelas` char(4) NOT NULL,
  `absen` int(11) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tanggalLahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `nim`, `nama`, `kelas`, `absen`, `alamat`, `email`, `tanggalLahir`) VALUES
(0, '2041720078', 'Hafizh Izhar D.', '2G', 12, 'NGANJUK', 'hafizh02@gmail.com', '2001-11-05'),
(1, '2041720067', 'Muh. Irfan Ali', '2G', 15, 'BLITAR', 'raygensh77@gmail.com', '2002-03-11'),
(2, '2041720098', 'Daffa Aqila R.', '2G', 8, 'NGANJUK', 'daffaAqila@gmail.com', '2002-01-31'),
(3, '2041720089', 'Sodikin', '2G', 6, 'KEDIRI', 'namaku@mail.com', '2002-06-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', '1'),
(2, 'guest', '289dff07669d7a23de0ef88d2f7129e7', '2'),
(5, 'irfan', 'd81f9c1be2e08964bf9f24b15f0e4900', '3'),
(6, 'hafidz', '250cf8b51c773f3f8dc8b4be867a9a02', '10'),
(7, 'daffa', '99c5e07b4d5de9d18c350cdf64c5aa3d', '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
