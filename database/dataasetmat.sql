-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Agu 2023 pada 15.15
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataasetmat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `crudelektronik`
--

CREATE TABLE `crudelektronik` (
  `id` int(20) NOT NULL,
  `no_brg` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tgl_input` date NOT NULL,
  `th_beli` date NOT NULL,
  `jumlah` int(20) NOT NULL,
  `stn_hrg` int(20) NOT NULL,
  `ttl_hrg` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `crudelektronik`
--

INSERT INTO `crudelektronik` (`id`, `no_brg`, `model`, `merk`, `status`, `tgl_input`, `th_beli`, `jumlah`, `stn_hrg`, `ttl_hrg`) VALUES
(1, 'PN02.06.02.04.003', 'AC Unit', 'panasonic', 'pembelian', '2021-12-25', '2023-08-01', 1, 539000062, 539000062),
(2, 'LG02.06.02.06.003', 'Televisi', 'LG 29\"/LCD', 'pembelian', '2021-12-24', '2011-05-14', 1, 5850000, 5850000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `crudfurnitur`
--

CREATE TABLE `crudfurnitur` (
  `id` int(20) NOT NULL,
  `no_brg` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tgl_input` date NOT NULL,
  `th_beli` date NOT NULL,
  `jumlah` int(3) NOT NULL,
  `stn_hrg` int(20) NOT NULL,
  `ttl_hrg` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `crudfurnitur`
--

INSERT INTO `crudfurnitur` (`id`, `no_brg`, `model`, `merk`, `status`, `tgl_input`, `th_beli`, `jumlah`, `stn_hrg`, `ttl_hrg`) VALUES
(1, 'BR02.06.01.04.001', 'Lemari Besi', 'barata 01', 'pembelian', '0000-00-00', '2006-12-10', 5, 2420000, 12100000),
(2, 'BR02.06.01.04.001', 'Lemari Besi', 'barata 01', 'pembelian', '0000-00-00', '2006-12-10', 5, 2420000, 12100000),
(3, 'BR02.06.01.04.001', 'Lemari Besi', 'barata 01', 'pembelian', '0000-00-00', '2006-12-10', 5, 2420000, 12100000),
(4, 'BR02.06.01.04.001', 'Lemari Besi', 'barata 01', 'pembelian', '0000-00-00', '2006-12-10', 5, 2420000, 12100000),
(5, 'BR02.06.01.04.001', 'Lemari Besi', 'barata 01', 'pembelian', '0000-00-00', '2006-12-10', 5, 2420000, 12100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `crudkendaraan`
--

CREATE TABLE `crudkendaraan` (
  `id` int(30) NOT NULL,
  `no_brg` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `tgl_input` date NOT NULL,
  `th_beli` date NOT NULL,
  `jumlah` int(3) NOT NULL,
  `stn_hrg` int(30) NOT NULL,
  `ttl_hrg` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `crudkendaraan`
--

INSERT INTO `crudkendaraan` (`id`, `no_brg`, `model`, `merk`, `status`, `tgl_input`, `th_beli`, `jumlah`, `stn_hrg`, `ttl_hrg`) VALUES
(1, 'XN02.03.01.02.003', 'Mini Bus', 'xenia/sporty', 'pembelian', '2021-12-24', '2021-12-24', 1, 146400000, 146400000),
(2, 'XN02.03.01.02.003', 'Mini Bus', 'xenia/sporty', 'pembelian', '2021-12-24', '2021-12-24', 1, 146400000, 146400000),
(3, 'XN02.03.01.02.003', 'Mini Bus', 'xenia/sporty', 'pembelian', '2021-12-24', '2021-12-24', 2, 146400000, 146400000),
(4, 'XN02.03.01.02.003', 'Mini Bus', 'xenia/sporty', 'pembelian', '2021-12-24', '2021-12-24', 2, 146400000, 146400000),
(5, 'XN02.03.01.02.003', 'Mini Bus', 'xenia/sporty', 'pembelian', '2021-12-24', '2021-12-24', 1, 146400000, 146400000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `nik` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`nik`, `username`, `password`, `hak_akses`) VALUES
(123, 'admin', 'admin', 'admin'),
(1234, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `crudelektronik`
--
ALTER TABLE `crudelektronik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `crudfurnitur`
--
ALTER TABLE `crudfurnitur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `crudkendaraan`
--
ALTER TABLE `crudkendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `crudelektronik`
--
ALTER TABLE `crudelektronik`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `crudfurnitur`
--
ALTER TABLE `crudfurnitur`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `crudkendaraan`
--
ALTER TABLE `crudkendaraan`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `nik` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
