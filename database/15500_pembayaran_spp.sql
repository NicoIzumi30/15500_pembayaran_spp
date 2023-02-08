-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2023 pada 08.47
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `nisn` int(11) NOT NULL,
  `bulan` varchar(16) NOT NULL,
  `status` enum('Dibayar','Belum Dibayar','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `nisn`, `bulan`, `status`) VALUES
(1, 52318283, 'Januari', 'Belum Dibayar'),
(2, 52318283, 'Februari', 'Belum Dibayar'),
(3, 52318283, 'Maret', 'Belum Dibayar'),
(4, 52318283, 'April', 'Belum Dibayar'),
(5, 52318283, 'Mei', 'Belum Dibayar'),
(6, 52318283, 'Juni', 'Belum Dibayar'),
(7, 52318283, 'Juli', 'Belum Dibayar'),
(8, 52318283, 'Agustus', 'Belum Dibayar'),
(9, 52318283, 'September', 'Belum Dibayar'),
(10, 52318283, 'Oktober', 'Belum Dibayar'),
(11, 52318283, 'November', 'Belum Dibayar'),
(12, 52318283, 'Desember', 'Belum Dibayar'),
(13, 58816673, 'Januari', 'Belum Dibayar'),
(14, 58816673, 'Februari', 'Belum Dibayar'),
(15, 58816673, 'Maret', 'Belum Dibayar'),
(16, 58816673, 'April', 'Belum Dibayar'),
(17, 58816673, 'Mei', 'Belum Dibayar'),
(18, 58816673, 'Juni', 'Belum Dibayar'),
(19, 58816673, 'Juli', 'Belum Dibayar'),
(20, 58816673, 'Agustus', 'Belum Dibayar'),
(21, 58816673, 'September', 'Belum Dibayar'),
(22, 58816673, 'Oktober', 'Belum Dibayar'),
(23, 58816673, 'November', 'Belum Dibayar'),
(24, 58816673, 'Desember', 'Belum Dibayar'),
(25, 66273064, 'Januari', 'Belum Dibayar'),
(26, 66273064, 'Februari', 'Belum Dibayar'),
(27, 66273064, 'Maret', 'Belum Dibayar'),
(28, 66273064, 'April', 'Belum Dibayar'),
(29, 66273064, 'Mei', 'Belum Dibayar'),
(30, 66273064, 'Juni', 'Belum Dibayar'),
(31, 66273064, 'Juli', 'Belum Dibayar'),
(32, 66273064, 'Agustus', 'Belum Dibayar'),
(33, 66273064, 'September', 'Belum Dibayar'),
(34, 66273064, 'Oktober', 'Belum Dibayar'),
(35, 66273064, 'November', 'Belum Dibayar'),
(36, 66273064, 'Desember', 'Belum Dibayar'),
(37, 58310883, 'Januari', 'Belum Dibayar'),
(38, 58310883, 'Februari', 'Belum Dibayar'),
(39, 58310883, 'Maret', 'Belum Dibayar'),
(40, 58310883, 'April', 'Belum Dibayar'),
(41, 58310883, 'Mei', 'Belum Dibayar'),
(42, 58310883, 'Juni', 'Belum Dibayar'),
(43, 58310883, 'Juli', 'Belum Dibayar'),
(44, 58310883, 'Agustus', 'Belum Dibayar'),
(45, 58310883, 'September', 'Belum Dibayar'),
(46, 58310883, 'Oktober', 'Belum Dibayar'),
(47, 58310883, 'November', 'Belum Dibayar'),
(48, 58310883, 'Desember', 'Belum Dibayar'),
(49, 68021625, 'Januari', 'Dibayar'),
(50, 68021625, 'Februari', 'Belum Dibayar'),
(51, 68021625, 'Maret', 'Belum Dibayar'),
(52, 68021625, 'April', 'Belum Dibayar'),
(53, 68021625, 'Mei', 'Belum Dibayar'),
(54, 68021625, 'Juni', 'Belum Dibayar'),
(55, 68021625, 'Juli', 'Belum Dibayar'),
(56, 68021625, 'Agustus', 'Belum Dibayar'),
(57, 68021625, 'September', 'Belum Dibayar'),
(58, 68021625, 'Oktober', 'Belum Dibayar'),
(59, 68021625, 'November', 'Belum Dibayar'),
(60, 68021625, 'Desember', 'Belum Dibayar'),
(61, 56091655, 'Januari', 'Belum Dibayar'),
(62, 56091655, 'Februari', 'Belum Dibayar'),
(63, 56091655, 'Maret', 'Belum Dibayar'),
(64, 56091655, 'April', 'Belum Dibayar'),
(65, 56091655, 'Mei', 'Belum Dibayar'),
(66, 56091655, 'Juni', 'Belum Dibayar'),
(67, 56091655, 'Juli', 'Belum Dibayar'),
(68, 56091655, 'Agustus', 'Belum Dibayar'),
(69, 56091655, 'September', 'Belum Dibayar'),
(70, 56091655, 'Oktober', 'Belum Dibayar'),
(71, 56091655, 'November', 'Belum Dibayar'),
(72, 56091655, 'Desember', 'Belum Dibayar'),
(73, 58324928, 'Januari', 'Belum Dibayar'),
(74, 58324928, 'Februari', 'Belum Dibayar'),
(75, 58324928, 'Maret', 'Belum Dibayar'),
(76, 58324928, 'April', 'Belum Dibayar'),
(77, 58324928, 'Mei', 'Belum Dibayar'),
(78, 58324928, 'Juni', 'Belum Dibayar'),
(79, 58324928, 'Juli', 'Belum Dibayar'),
(80, 58324928, 'Agustus', 'Belum Dibayar'),
(81, 58324928, 'September', 'Belum Dibayar'),
(82, 58324928, 'Oktober', 'Belum Dibayar'),
(83, 58324928, 'November', 'Belum Dibayar'),
(84, 58324928, 'Desember', 'Belum Dibayar'),
(85, 52683167, 'Januari', 'Belum Dibayar'),
(86, 52683167, 'Februari', 'Belum Dibayar'),
(87, 52683167, 'Maret', 'Belum Dibayar'),
(88, 52683167, 'April', 'Belum Dibayar'),
(89, 52683167, 'Mei', 'Belum Dibayar'),
(90, 52683167, 'Juni', 'Belum Dibayar'),
(91, 52683167, 'Juli', 'Belum Dibayar'),
(92, 52683167, 'Agustus', 'Belum Dibayar'),
(93, 52683167, 'September', 'Belum Dibayar'),
(94, 52683167, 'Oktober', 'Belum Dibayar'),
(95, 52683167, 'November', 'Belum Dibayar'),
(96, 52683167, 'Desember', 'Belum Dibayar'),
(97, 65096194, 'Januari', 'Belum Dibayar'),
(98, 65096194, 'Februari', 'Belum Dibayar'),
(99, 65096194, 'Maret', 'Belum Dibayar'),
(100, 65096194, 'April', 'Belum Dibayar'),
(101, 65096194, 'Mei', 'Belum Dibayar'),
(102, 65096194, 'Juni', 'Belum Dibayar'),
(103, 65096194, 'Juli', 'Belum Dibayar'),
(104, 65096194, 'Agustus', 'Belum Dibayar'),
(105, 65096194, 'September', 'Belum Dibayar'),
(106, 65096194, 'Oktober', 'Belum Dibayar'),
(107, 65096194, 'November', 'Belum Dibayar'),
(108, 65096194, 'Desember', 'Belum Dibayar'),
(109, 68293711, 'Januari', 'Belum Dibayar'),
(110, 68293711, 'Februari', 'Belum Dibayar'),
(111, 68293711, 'Maret', 'Belum Dibayar'),
(112, 68293711, 'April', 'Belum Dibayar'),
(113, 68293711, 'Mei', 'Belum Dibayar'),
(114, 68293711, 'Juni', 'Belum Dibayar'),
(115, 68293711, 'Juli', 'Belum Dibayar'),
(116, 68293711, 'Agustus', 'Belum Dibayar'),
(117, 68293711, 'September', 'Belum Dibayar'),
(118, 68293711, 'Oktober', 'Belum Dibayar'),
(119, 68293711, 'November', 'Belum Dibayar'),
(120, 68293711, 'Desember', 'Belum Dibayar');

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
(1, 'XII RPL 1', 'Rekayasa Perangkat Lunak'),
(2, 'XII RPL 2', 'Rekayasa Perangkat Lunak'),
(3, 'XII TKJ 1', 'Teknik Komputer dan Jaringan'),
(4, 'XII TKJ2', 'Teknik Komputer dan Jaringan'),
(5, 'XII MM 1', 'Multimedia'),
(6, 'XII MM 2', 'Multimedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logs`
--

CREATE TABLE `logs` (
  `id_logs` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `login` varchar(64) NOT NULL,
  `logout` varchar(64) NOT NULL,
  `level` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `logs`
--

INSERT INTO `logs` (`id_logs`, `username`, `login`, `logout`, `level`) VALUES
(1, 'herubu_', '08-Feb-2023 03:13:25 AM', '-', 'admin'),
(2, 'herubu_', '08-02-2023 03:20:22 AM', '08-02-2023 03:23:21 AM', 'admin'),
(3, 'herubu_', '08-02-2023 09:24:55 AM', '08-02-2023 09:24:58 AM', 'admin'),
(4, 'herubu_', '08-02-2023 09:32:47 AM', '08-02-2023 09:37:03 AM', 'admin'),
(5, 'herubu_', '08-02-2023 10:41:31 AM', '08-02-2023 11:06:45 AM', 'admin'),
(6, '58310883', '08-02-2023 05:07:12 AM', '-', 'siswa'),
(7, 'herubu_', '08-02-2023 11:08:11 AM', '-', 'admin'),
(8, '58310883', '08-02-2023 05:11:28 AM', '08-02-2023 11:12:01 AM', 'siswa'),
(9, 'herubu_', '08-02-2023 11:36:58 AM', '-', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
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
(1, 1, 68021625, 'Wednesday 08 February 2023 - 11:37', 'Januari', '2020', 1, 49, 1400000);

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
(1, 'herubu_', '$2y$10$KQt/ILsAUIYGjtVKbYau/uieqpCN222uUMaIIVq9sCvuxkWxvGYDu', 'Heru Kristanto', 'admin', '2023-01-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` int(11) NOT NULL,
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
(52318283, '5014', 'AHMAD FAIQ ALDINO', 1, 'Psr Melawai Bl A Los 1, Dki Jakarta', '089675839108', 1),
(58816673, '5015', 'AIKSA PUTRI PRASETYA', 1, 'Jl Daan Mogot 59, Sulawesi Utara', '08996906443', 1),
(66273064, '5023', 'ANGGITA CHAILLILA HAPSARI', 1, 'Jl Laksda M Nazir 11 Bl H, Jawa Timur', '089523641376', 1),
(58310883, '5076', 'MUHAMMAD AZMI MAHASIN', 2, 'Jl Penggilingan Bl B/90-91, Dki Jakarta', '083843069913', 1),
(68021625, '5100', 'OLIVIA LATIVAH', 2, 'Jl Teuku Umar 112, Bali', '082118325367', 1),
(56091655, '5135', 'ZALFA NURLAILA', 2, 'Jl Raya Pd Gede 16, Dki Jakarta', '081216221775', 1),
(58324928, '5044', 'CLARA INDRI LISTIYANI', 3, 'Jl Danau Sunter Slt 3, Dki Jakarta', '081216318350', 1),
(52683167, '5032', 'ASMI MUFIDA', 3, 'Jl MH Thamrin 14, Dki Jakarta', '081219496485', 1),
(65096194, '5138', 'DIMAS ANDREAN', 3, 'l Perak Brt 263, Jawa Timur', '081219550857', 1),
(68293711, '5097', 'NIHA NURUL QOLBINA', 4, 'Jl Made Lakarsantri, Jawa Timur', '081222483287', 1);

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
(1, 2020, 1400000),
(2, 2021, 1500000),
(3, 2022, 1700000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `total_tagihan` int(11) NOT NULL,
  `kekurangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tagihan`
--

INSERT INTO `tagihan` (`id_tagihan`, `nisn`, `total_tagihan`, `kekurangan`) VALUES
(1, 52318283, 16800000, 16800000),
(2, 58816673, 16800000, 16800000),
(3, 66273064, 16800000, 16800000),
(4, 58310883, 16800000, 16800000),
(5, 68021625, 16800000, 15400000),
(6, 56091655, 16800000, 16800000),
(7, 58324928, 16800000, 16800000),
(8, 52683167, 16800000, 16800000),
(9, 65096194, 16800000, 16800000),
(10, 68293711, 16800000, 16800000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_siswa`
--

CREATE TABLE `_siswa` (
  `id` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_siswa`
--

INSERT INTO `_siswa` (`id`, `nisn`, `password`) VALUES
(1, 52318283, '$2y$10$5/1FN1CGaXM/8D.zZ/Kq6.uwvPpwu7BR/O8fma3zMOsNuLbyMrOXi'),
(2, 58816673, '$2y$10$HV.IBRCTS2/szCJ6AJg3ueECIQz0lmqP3QwDwsgjVk9F9VTNrzE92'),
(3, 66273064, '$2y$10$94352b35L0B/tRJkqolUW.QqShpAqtSlKzxtysXN0YhUKJtc/61vC'),
(4, 58310883, '$2y$10$8p6x.ilj3FtZPSlg7HQNfelWRukPr0gO2C8Pqil5QJATroTVKuHW6'),
(5, 68021625, '$2y$10$CkxyacLOD81DLkckZb2f4.HVfnqIfV/jNhsyya7kxap1GQ/kPWRR.'),
(6, 56091655, '$2y$10$sUukkiOTW4pMCAiyfeyo0.v.HtvTnznQPTc14cnxvPTYfYPHkHbfm'),
(7, 58324928, '$2y$10$8Xp62hbzXkKmsQxNU3tw.u28H9Agek6k.QQGc8cMeo5c9fjSqi5JK'),
(8, 52683167, '$2y$10$Zcq5x0e3HHby0Kqcags6UexnIOdQwZVzaiouatibtuBQ7IlWZa.sG'),
(9, 65096194, '$2y$10$HrbxBcZ3QuldlNCntfARzu6xWZY/MxqkiCdWGNwVruo43zdaN9N5S'),
(10, 68293711, '$2y$10$4yyN3zD8wMHgLlNR6TT9we5FfIk9veB9x8c3lFzrl6zkUBGr3cb3u');

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
-- Indeks untuk tabel `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id_logs`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_petugas` (`id_petugas`,`id_spp`),
  ADD KEY `nisn` (`nisn`);

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
  ADD PRIMARY KEY (`id_tagihan`),
  ADD KEY `nisn` (`nisn`);

--
-- Indeks untuk tabel `_siswa`
--
ALTER TABLE `_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nisn` (`nisn`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `logs`
--
ALTER TABLE `logs`
  MODIFY `id_logs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `_siswa`
--
ALTER TABLE `_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
