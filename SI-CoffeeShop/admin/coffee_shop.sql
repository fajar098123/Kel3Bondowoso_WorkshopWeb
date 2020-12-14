-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2020 pada 18.59
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee_shop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` varchar(255) NOT NULL,
  `nama_artikel` varchar(255) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jeniskopi`
--

CREATE TABLE `tb_jeniskopi` (
  `id_jenis_kopi` int(3) NOT NULL,
  `jenis_kopi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jeniskopi`
--

INSERT INTO `tb_jeniskopi` (`id_jenis_kopi`, `jenis_kopi`) VALUES
(1, 'Arabika'),
(2, 'Robusta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_kemasan`
--

CREATE TABLE `tb_jenis_kemasan` (
  `id_jenis_kemasan` int(11) NOT NULL,
  `jenis_kemasan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jenis_kemasan`
--

INSERT INTO `tb_jenis_kemasan` (`id_jenis_kemasan`, `jenis_kemasan`) VALUES
(1, '200 g'),
(2, '250 g'),
(3, '500 g'),
(4, '1 kg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_user` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `kode_kopi` varchar(5) NOT NULL,
  `nama_kopi` varchar(255) NOT NULL,
  `id_jenis_kopi` int(3) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_jenis_kemasan` int(3) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tb_jeniskopi`
--
ALTER TABLE `tb_jeniskopi`
  ADD PRIMARY KEY (`id_jenis_kopi`);

--
-- Indeks untuk tabel `tb_jenis_kemasan`
--
ALTER TABLE `tb_jenis_kemasan`
  ADD PRIMARY KEY (`id_jenis_kemasan`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`kode_kopi`),
  ADD KEY `id_jenis_kopi` (`id_jenis_kopi`),
  ADD KEY `id_jenis_kemasan` (`id_jenis_kemasan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_jeniskopi`
--
ALTER TABLE `tb_jeniskopi`
  MODIFY `id_jenis_kopi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_kemasan`
--
ALTER TABLE `tb_jenis_kemasan`
  MODIFY `id_jenis_kemasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_jenis_kopi`) REFERENCES `tb_jeniskopi` (`id_jenis_kopi`),
  ADD CONSTRAINT `tb_produk_ibfk_2` FOREIGN KEY (`id_jenis_kemasan`) REFERENCES `tb_jenis_kemasan` (`id_jenis_kemasan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
