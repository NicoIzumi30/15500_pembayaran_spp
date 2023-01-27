-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2023 pada 17.05
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `15500_pembayaran_spp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bulan`
--

CREATE TABLE `bulan` (
  `id_bulan` int(11) NOT NULL,
  `nisn` varchar(16) NOT NULL,
  `bulan` varchar(16) NOT NULL,
  `status` enum('Dibayar','Belum Dibayar','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `nisn`, `bulan`, `status`) VALUES
(1, '34234234', 'Januari', 'Belum Dibayar'),
(2, '34234234', 'Februari', 'Belum Dibayar'),
(3, '34234234', 'Maret', 'Belum Dibayar'),
(4, '34234234', 'April', 'Belum Dibayar'),
(5, '34234234', 'Mei', 'Belum Dibayar'),
(6, '', 'Juni', 'Belum Dibayar'),
(7, '', 'Juli', 'Belum Dibayar'),
(8, '34234234', 'Agustus', 'Belum Dibayar'),
(9, '34234234', 'September', 'Belum Dibayar'),
(10, '34234234', 'Oktober', 'Belum Dibayar'),
(11, '34234234', 'November', 'Belum Dibayar'),
(12, '34234234', 'Desember', 'Belum Dibayar'),
(13, '3012200401', 'Januari', 'Dibayar'),
(14, '3012200401', 'Februari', 'Dibayar'),
(15, '3012200401', 'Maret', 'Belum Dibayar'),
(16, '3012200401', 'April', 'Belum Dibayar'),
(17, '3012200401', 'Mei', 'Belum Dibayar'),
(18, '3012200401', 'Juni', 'Belum Dibayar'),
(19, '3012200401', 'Juli', 'Belum Dibayar'),
(20, '3012200401', 'Agustus', 'Belum Dibayar'),
(21, '3012200401', 'September', 'Belum Dibayar'),
(22, '3012200401', 'Oktober', 'Belum Dibayar'),
(23, '3012200401', 'November', 'Belum Dibayar'),
(24, '3012200401', 'Desember', 'Belum Dibayar'),
(25, '123', 'Januari', 'Belum Dibayar'),
(26, '123', 'Februari', 'Belum Dibayar'),
(27, '123', 'Maret', 'Belum Dibayar'),
(28, '123', 'April', 'Belum Dibayar'),
(29, '123', 'Mei', 'Belum Dibayar'),
(30, '123', 'Juni', 'Belum Dibayar'),
(31, '123', 'Juli', 'Belum Dibayar'),
(32, '123', 'Agustus', 'Belum Dibayar'),
(33, '123', 'September', 'Belum Dibayar'),
(34, '123', 'Oktober', 'Belum Dibayar'),
(35, '123', 'November', 'Belum Dibayar'),
(36, '123', 'Desember', 'Belum Dibayar'),
(37, '01072007003', 'Januari', 'Belum Dibayar'),
(38, '01072007003', 'Februari', 'Belum Dibayar'),
(39, '01072007003', 'Maret', 'Belum Dibayar'),
(40, '01072007003', 'April', 'Belum Dibayar'),
(41, '01072007003', 'Mei', 'Belum Dibayar'),
(42, '01072007003', 'Juni', 'Belum Dibayar'),
(43, '01072007003', 'Juli', 'Belum Dibayar'),
(44, '01072007003', 'Agustus', 'Belum Dibayar'),
(45, '01072007003', 'September', 'Belum Dibayar'),
(46, '01072007003', 'Oktober', 'Belum Dibayar'),
(47, '01072007003', 'November', 'Belum Dibayar'),
(48, '0107200700', 'Desember', 'Belum Dibayar'),
(49, '0107200701', 'Januari', 'Dibayar'),
(50, '0107200701', 'Februari', 'Dibayar'),
(51, '0107200701', 'Maret', 'Belum Dibayar'),
(52, '0107200701', 'April', 'Belum Dibayar'),
(53, '0107200701', 'Mei', 'Belum Dibayar'),
(54, '0107200701', 'Juni', 'Belum Dibayar'),
(55, '0107200701', 'Juli', 'Belum Dibayar'),
(56, '0107200701', 'Agustus', 'Belum Dibayar'),
(57, '0107200701', 'September', 'Belum Dibayar'),
(58, '0107200701', 'Oktober', 'Belum Dibayar'),
(59, '0107200701', 'November', 'Belum Dibayar'),
(60, '0107200701', 'Desember', 'Belum Dibayar'),
(61, '0563785347', 'Januari', 'Belum Dibayar'),
(62, '0563785347', 'Februari', 'Belum Dibayar'),
(63, '0563785347', 'Maret', 'Belum Dibayar'),
(64, '0563785347', 'April', 'Belum Dibayar'),
(65, '0563785347', 'Mei', 'Belum Dibayar'),
(66, '0563785347', 'Juni', 'Belum Dibayar'),
(67, '0563785347', 'Juli', 'Belum Dibayar'),
(68, '0563785347', 'Agustus', 'Belum Dibayar'),
(69, '0563785347', 'September', 'Belum Dibayar'),
(70, '0563785347', 'Oktober', 'Belum Dibayar'),
(71, '0563785347', 'November', 'Belum Dibayar'),
(72, '0563785347', 'Desember', 'Belum Dibayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(32) NOT NULL,
  `kompetensi_keahlian` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
(1, 'XII RPL23', 'Rekayasa Perangkat Lunak'),
(2, 'XII RPL1', 'Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tgl_bayar` varchar(128) NOT NULL,
  `bulan_bayar` varchar(8) NOT NULL,
  `tahun_bayar` varchar(4) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `bulan_bayar`, `tahun_bayar`, `id_spp`, `id_bulan`, `jumlah_bayar`) VALUES
(3, 1, '3012200401', 'Wednesday 25 January 2023 - 04:12', 'Januari', '2024', 1, 0, 1000000),
(4, 1, '3012200401', 'Wednesday 25 January 2023 - 04:14', 'Januari', '2024', 1, 0, 1000000),
(5, 1, '3012200401', 'Wednesday 25 January 2023 - 06:08', 'Februari', '2024', 1, 0, 1000000),
(6, 1, '0107200701', 'Thursday 26 January 2023 - 14:59', 'Januari', '2025', 2, 0, 1500000),
(7, 1, '0107200701', 'Friday 27 January 2023 - 22:29', 'Februari', '2025', 2, 50, 1500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nama_petugas` varchar(64) NOT NULL,
  `level` enum('admin','petugas','','') NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`, `created`) VALUES
(1, 'heru', '$2y$10$DrsMKAI7KZtiD9DRaFv1/ue3KJtohfsDtjetDir6sIjzmk6gFlHoi', 'Heru Kristanto', 'admin', '2023-01-24'),
(5, 'niczumiii', '$2y$10$vPZYmOgcXpcTubpGHJtWgOifA4AYFkAldq87vgAurEiwX8XZNLQJS', 'Nico Izumi', 'petugas', '2023-01-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` char(15) NOT NULL,
  `nis` char(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_spp` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
('1234567890', '15500', 'Heru Kristanto', 2, 'Jl Parangtritis KM 21 ', '085703073753', 1),
('181910141', '15504', 'Likansiwa', 1, 'Jl harapan', '08327328746', 1),
('3012200401', '15540', 'Heru Kristanto', 1, 'Jalan Mana taaa', '0898728913213', 1),
('0107200701', '12034', 'Putri Melati Arum', 2, 'Jl samas ', '098732983212', 2),
('0563785347', '18898', 'jokowi ', 1, 'jalan banteng merah', '0856876543455', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(1, 2024, 1000000),
(2, 2025, 1500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `total_tagihan` int(11) NOT NULL,
  `kekurangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tagihan`
--

INSERT INTO `tagihan` (`id_tagihan`, `nisn`, `total_tagihan`, `kekurangan`) VALUES
(1, '0107200700', 18000000, 18000000),
(2, '0107200701', 18000000, 15000000),
(3, '0563785347', 12000000, 12000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_siswa`
--

CREATE TABLE `_siswa` (
  `id` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_siswa`
--

INSERT INTO `_siswa` (`id`, `nisn`, `password`) VALUES
(1, '181910141', '$2y$10$SrgsQqHgNobQwh/C8vT8ue/1Qge.iBEBYgErW5rp81cXIaK42KU26'),
(2, '34234234', '$2y$10$HbjHJJ60AiSrGBM2QpoODu/RHySnNUdj5do3kQWvjzaUACvO.DSda'),
(3, '3012200401', '$2y$10$qWtraRex3lcnlRjz6dIrOuTp94aQkphSjcj2x/W1Vi9RIIZDAUh8u'),
(4, '123', '$2y$10$fFXo0v94VVhLkHwy/g8H5egX1GJcDeMY89c/aGwfsHGR4I.lAc4E6'),
(5, '0107200700', '$2y$10$K3g/K6Dsmb.YyNDctLP/XeBKIbzfcL88axroJMKaSGipd3h24rIfS'),
(6, '0107200701', '$2y$10$RJmw8UqpME5pkyDuA4vMqezNozmoDCLKpmTLxA22nj.UTtU6uKBTy'),
(7, '0563785347', '$2y$10$qa18Kw7YB/w8QfZfv/DKKOPq5CEjChrtVCFJWWeN2fAyeSAdwJZlS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id_bulan`),
  ADD KEY `nisn` (`nisn`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_petugas` (`id_petugas`,`id_spp`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`,`id_spp`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- Indeks untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indeks untuk tabel `_siswa`
--
ALTER TABLE `_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `_siswa`
--
ALTER TABLE `_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
