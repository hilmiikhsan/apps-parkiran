-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 02 Jun 2021 pada 21.37
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tempatparkir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjaga_parkiran`
--

CREATE TABLE `penjaga_parkiran` (
  `id_penjaga` int(9) NOT NULL,
  `nama_penjaga` varchar(25) NOT NULL,
  `alamat_penjaga` varchar(25) NOT NULL,
  `no_telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjaga_parkiran`
--

INSERT INTO `penjaga_parkiran` (`id_penjaga`, `nama_penjaga`, `alamat_penjaga`, `no_telepon`) VALUES
(1, 'Paijo', 'Bandung', '087785110345'),
(2, 'Handra', 'Cimahi', '087985220466'),
(3, 'Asep', 'Garut', '085745120332');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_parkiran`
--

CREATE TABLE `tempat_parkiran` (
  `no_urut` int(11) NOT NULL,
  `kode_blok` char(6) NOT NULL,
  `jenis_kendaraan` varchar(20) NOT NULL,
  `status_kendaraan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tempat_parkiran`
--

INSERT INTO `tempat_parkiran` (`no_urut`, `kode_blok`, `jenis_kendaraan`, `status_kendaraan`) VALUES
(1, '001', 'Mobil', 'Parkiran Depan'),
(2, '002', 'Motor', 'Parkiran Belakang'),
(3, '003', 'Motor', 'Parkiran Depan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_parkiran`
--

CREATE TABLE `tiket_parkiran` (
  `id_penjaga` int(9) NOT NULL,
  `kd_tiket` char(9) NOT NULL,
  `nama_penjaga` varchar(20) NOT NULL,
  `tempat_parkiran` varchar(20) NOT NULL,
  `waktu_masuk` char(6) NOT NULL,
  `jenis_kendaraan` varchar(20) NOT NULL,
  `waktu_keluar` char(9) NOT NULL,
  `tarif_parkiran` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tiket_parkiran`
--

INSERT INTO `tiket_parkiran` (`id_penjaga`, `kd_tiket`, `nama_penjaga`, `tempat_parkiran`, `waktu_masuk`, `jenis_kendaraan`, `waktu_keluar`, `tarif_parkiran`) VALUES
(1, '01', 'Dimas', 'Belakang', '12.00', 'Motor', '15.00', 4000),
(2, '02', 'Irfan Bachdim', 'Depan', '08.00', 'Motor', '10.00', 2000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penjaga_parkiran`
--
ALTER TABLE `penjaga_parkiran`
  ADD PRIMARY KEY (`id_penjaga`),
  ADD KEY `id_penjaga` (`id_penjaga`);

--
-- Indeks untuk tabel `tempat_parkiran`
--
ALTER TABLE `tempat_parkiran`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indeks untuk tabel `tiket_parkiran`
--
ALTER TABLE `tiket_parkiran`
  ADD PRIMARY KEY (`id_penjaga`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penjaga_parkiran`
--
ALTER TABLE `penjaga_parkiran`
  MODIFY `id_penjaga` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tempat_parkiran`
--
ALTER TABLE `tempat_parkiran`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tiket_parkiran`
--
ALTER TABLE `tiket_parkiran`
  MODIFY `id_penjaga` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
