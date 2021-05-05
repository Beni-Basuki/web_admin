-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2021 pada 08.00
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gaji` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `nama`, `umur`, `alamat`, `gaji`, `created`, `modified`) VALUES
(1, 'Yuli', '22', 'Bandung', '10000000', '2021-05-05 09:19:03', '2021-05-05 09:19:03'),
(2, 'Tari', '22', 'Bandung', '10000000', '2021-05-05 09:19:03', '2021-05-05 09:19:03'),
(3, 'Selly', '23', 'Bandung', '10000000', '2021-05-05 09:19:03', '2021-05-05 09:19:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gaji` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `nama`, `umur`, `alamat`, `gaji`, `created`, `modified`) VALUES
(1, 'Elijer', '26', 'jakarta', '2000000', '2021-05-04 21:32:03', '2021-05-04 21:32:03'),
(2, 'Sahari', '29', 'banten', '2000000', '2021-05-04 21:32:03', '2021-05-04 21:32:03'),
(3, 'Alwan', '23', 'jakarta', '2000000', '2021-05-04 21:32:03', '2021-05-04 21:32:03'),
(5, 'dani', '32', 'palembang', '25000000', '2021-05-04 22:11:41', '2021-05-04 22:11:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `digital`
--

CREATE TABLE `digital` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gaji` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `digital`
--

INSERT INTO `digital` (`id`, `nama`, `umur`, `alamat`, `gaji`, `created`, `modified`) VALUES
(1, 'Taufik', '25', 'Pekanbaru', '15000000', '2021-05-04 22:45:03', '2021-05-04 22:45:03'),
(2, 'Yudi', '22', 'Pekanbaru', '15000000', '2021-05-04 22:45:03', '2021-05-04 22:45:03'),
(3, 'Faldo', '23', 'Pekanbaru', '15000000', '2021-05-04 22:45:03', '2021-05-04 22:45:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gaji` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `nama`, `umur`, `alamat`, `gaji`, `created`, `modified`) VALUES
(1, 'Andi', '26', 'Pekanbaru', '12000000', '2021-05-04 10:02:03', '2021-05-04 10:02:03'),
(2, 'Bagus', '25', 'Rengat', '12000000', '2021-05-04 10:02:03', '2021-05-04 10:02:03'),
(3, 'Ucok', '30', 'Belilas', '12000000', '2021-05-04 10:02:03', '2021-05-04 10:02:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `software`
--

CREATE TABLE `software` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gaji` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `software`
--

INSERT INTO `software` (`id`, `nama`, `umur`, `alamat`, `gaji`, `created`, `modified`) VALUES
(1, 'Afif', '30', 'bali', '25000000', '2021-05-04 21:53:03', '2021-05-04 21:53:03'),
(2, 'Indah', '25', 'Aceh', '25000000', '2021-05-04 21:53:03', '2021-05-04 21:53:03'),
(3, 'Agung', '22', 'Pekanbaru', '25000000', '2021-05-04 21:53:03', '2021-05-04 21:53:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ui`
--

CREATE TABLE `ui` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `umur` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `gaji` varchar(256) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ui`
--

INSERT INTO `ui` (`id`, `nama`, `umur`, `alamat`, `gaji`, `created`, `modified`) VALUES
(2, 'Budi', '28', 'pekanbaruu', '12000000', '2021-05-04 17:08:02', '2021-05-04 21:09:30'),
(3, 'Sutris', '30', 'medan', '12000000', '2021-05-04 17:08:02', '2021-05-04 17:08:02'),
(4, 'beben', '28', 'belilas', '18000000', '2021-05-04 20:10:49', '2021-05-04 20:10:49'),
(5, 'ganong', '28', 'ujung batu', '18000000', '2021-05-04 20:11:40', '2021-05-04 20:11:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `digital`
--
ALTER TABLE `digital`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ui`
--
ALTER TABLE `ui`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `digital`
--
ALTER TABLE `digital`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `software`
--
ALTER TABLE `software`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ui`
--
ALTER TABLE `ui`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
