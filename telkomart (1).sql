-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2021 pada 12.32
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telkomart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'dandi', 'dandi'),
(2, 'agoy', 'agoy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `id` int(6) NOT NULL,
  `nama_jalan` varchar(30) NOT NULL,
  `nama_kota` varchar(20) NOT NULL,
  `nama_provinsi` varchar(20) NOT NULL,
  `kecamatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alamat`
--

INSERT INTO `alamat` (`id`, `nama_jalan`, `nama_kota`, `nama_provinsi`, `kecamatan`) VALUES
(1, 'jalan kelinci 2 RT.008 RW.015 ', 'Bekasi', 'Jawa Barat', 'Bekasi Utara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(5) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` varchar(14) NOT NULL,
  `stok_barang` varchar(12) NOT NULL,
  `gambar_barang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_barang`, `nama_barang`, `harga_barang`, `stok_barang`, `gambar_barang`) VALUES
(1, 'MLM1', 'Multimeter Analog', '20000', '3', 'multi1.jpg'),
(2, 'MLM2', 'Multimeter Digital', '30000', '3', 'multi2.jpg'),
(3, 'PSP1', 'Power Supply', '25000', '4', 'pw1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasir`
--

CREATE TABLE `kasir` (
  `id` int(7) NOT NULL,
  `id_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(27) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kasir`
--

INSERT INTO `kasir` (`id`, `id_karyawan`, `nama_karyawan`, `username`, `password`) VALUES
(1, '2002', 'rizka dandi maulana', 'dandi', 'dandi'),
(3, '1998', 'vyoga', 'agoy', 'agoy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_jual` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `tanggal_jual` date NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `total_harga` varchar(25) NOT NULL,
  `total_bayar` varchar(25) NOT NULL,
  `kembali` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(100) NOT NULL,
  `barang_id` varchar(100) NOT NULL,
  `jumlah_barang` int(100) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `barang_id`, `jumlah_barang`, `total_harga`) VALUES
(24, '1', 9, 180000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_jual`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_jual` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
