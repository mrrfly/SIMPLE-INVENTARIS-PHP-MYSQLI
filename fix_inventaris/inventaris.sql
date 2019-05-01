-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2018 pada 21.28
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `no_inventaris` int(11) NOT NULL,
  `id_jenis` varchar(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `ket_barang` varchar(100) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `tgl_registrasi` date NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `stock` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`no_inventaris`, `id_jenis`, `nama_barang`, `kondisi`, `ket_barang`, `id_ruang`, `tgl_registrasi`, `id_petugas`, `stock`) VALUES
(2, 'a_2', 'Kabel', 'baru', 'warna putih', 1, '2018-10-31', 1, '188'),
(9, 'a_1', 'MACBOOK', 'BAGUS', 'mac 2014', 1, '2018-11-07', 1, '877'),
(10, 'a_1', 'TANG', 'BAGUS', 'COGNOS', 1, '2018-11-07', 1, '1098');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_inventaris`
--

CREATE TABLE `jenis_inventaris` (
  `id_jenis` varchar(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL,
  `ket_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_inventaris`
--

INSERT INTO `jenis_inventaris` (`id_jenis`, `nama_jenis`, `ket_jenis`) VALUES
('a_1', 'Alat', 'Dipinjam'),
('a_2', 'Material', 'Diberikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjam`
--

CREATE TABLE `peminjam` (
  `nip` int(15) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjam`
--

INSERT INTO `peminjam` (`nip`, `nama_peminjam`, `kelas`, `no_telp`) VALUES
(1016006950, 'FAHRI1', '12 RPL 1', '8978978'),
(1016006970, 'Muhammad Rafly Ramadhan', '12 RPL 1', '081285961654');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `level`) VALUES
(1, 'Muhammad Rafly Ramadhan', 'mrr', 'ganteng', 'admin'),
(2, 'OPERATOR 1', 'op1', 'opop', 'operator'),
(3, 'OPERATOR3', 'op3', '123', 'operator'),
(5, 'FAHRI', 'op1', '123', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `no_pinjam` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`no_pinjam`, `nip`, `tgl_pinjam`) VALUES
(28, 1016006970, '2018-11-07'),
(29, 1016006970, '2018-11-07'),
(30, 1016006950, '2018-11-08'),
(31, 1016006950, '2018-11-08'),
(32, 1016006950, '2018-11-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam_detail`
--

CREATE TABLE `pinjam_detail` (
  `no_detail` int(11) NOT NULL,
  `no_pinjam` int(11) NOT NULL,
  `no_inventaris` int(11) NOT NULL,
  `jml` varchar(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjam_detail`
--

INSERT INTO `pinjam_detail` (`no_detail`, `no_pinjam`, `no_inventaris`, `jml`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(14, 28, 9, '100', '2018-11-07', '2018-11-07', 'dikembalikan'),
(15, 29, 10, '78', '2018-11-07', '2018-11-07', 'dikembalikan'),
(16, 30, 2, '12', '2018-11-08', '2018-11-08', 'dikembalikan'),
(17, 31, 2, '12', '2018-11-08', '2018-11-08', 'dipinjam'),
(18, 32, 9, '23', '2018-11-08', '0000-00-00', 'dipinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(11) NOT NULL,
  `nama_ruang` varchar(50) NOT NULL,
  `kode_ruang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `kode_ruang`) VALUES
(1, 'Sarpras 1', 'A1'),
(3, 'Lab Programming', 'A3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`no_inventaris`);

--
-- Indeks untuk tabel `jenis_inventaris`
--
ALTER TABLE `jenis_inventaris`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`no_pinjam`);

--
-- Indeks untuk tabel `pinjam_detail`
--
ALTER TABLE `pinjam_detail`
  ADD PRIMARY KEY (`no_detail`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `no_inventaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `no_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `pinjam_detail`
--
ALTER TABLE `pinjam_detail`
  MODIFY `no_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
