-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2020 pada 09.53
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indihome`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dc`
--

CREATE TABLE `dc` (
  `id` int(11) NOT NULL,
  `meter` int(5) NOT NULL,
  `tiket` varchar(10) NOT NULL,
  `ba` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dc`
--

INSERT INTO `dc` (`id`, `meter`, `tiket`, `ba`) VALUES
(1, 100000, 'IN77754323', 'add'),
(3, 3, 'IN77754323', 'Done');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ont`
--

CREATE TABLE `ont` (
  `id` int(11) NOT NULL,
  `snlama` varchar(30) NOT NULL,
  `snbaru` varchar(30) NOT NULL,
  `tiket` varchar(10) NOT NULL,
  `ba` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ont`
--

INSERT INTO `ont` (`id`, `snlama`, `snbaru`, `tiket`, `ba`) VALUES
(3, 'b', 'fhtt', 'IN77754322', 'Done');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `inet` varchar(12) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `cp` varchar(60) NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `inet`, `alamat`, `cp`, `foto`) VALUES
(19, 'habib masruri', '122861984123', 'Bumi Sani Permai blok C7/18, Tambun Selatan,Bekasi', '17510', 'pp.jpg'),
(23, 'aaaa', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknisi`
--

CREATE TABLE `teknisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `cp` varchar(15) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `teknisi`
--

INSERT INTO `teknisi` (`id`, `nama`, `alamat`, `cp`, `nik`, `foto`) VALUES
(14, 'habib', 'rawa kalong', '0890138495839', '18980240', 'Contoh_surat_lamaran_kerja_(4).png'),
(17, 'Pirmansyah', '', '', '', '1H2.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'habib', 'habib@gmail.com', 'default.jpg', '$2y$10$E3VrruA43hS1LieXRxUSRemA3wgeynT7zcbBmZy.fWVthi4wyix66', 2, 1, 1602908019),
(5, 'fajar', 'fajar@gmail.com', 'default.png', '$2y$10$Eu2uxBU6W4tM4ol7ZpXlMuy4x1BteyH6.owBH1wpKJ0ss7P3zLXE.', 2, 1, 1602913133),
(6, 'Pirmansyah', 'pirman@gmail.com', 'default.png', '$2y$10$YDeR5cdsTsm03WnfSZT42u3HQB73V32RQ2i8egUT0IKrX4i9L6mY2', 2, 1, 1602916591),
(7, 'ardit', 'ardit@gmail.com', 'default.png', '$2y$10$Y5JnJGcj2wzkbWeZXvQXk.9Uh7hs.1zkdJAL0P./139Q5wMHnPN3q', 1, 1, 1602920084);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dc`
--
ALTER TABLE `dc`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ont`
--
ALTER TABLE `ont`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dc`
--
ALTER TABLE `dc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ont`
--
ALTER TABLE `ont`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
