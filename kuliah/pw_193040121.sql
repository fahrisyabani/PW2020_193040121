-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2020 pada 10.48
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040121`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nrp` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `gambar`, `nrp`, `nama`, `email`, `jurusan`) VALUES
(1, '1.jpg', '049303748', 'Sandhika Galih', 'sandhikagalih@unpas.ac.id', 'Teknik Informatika'),
(2, '2.jpg', '159838308', 'Doddy Ferdiansyah', 'doddy@gmail.com', 'Teknik Mesin'),
(3, '3.jpg', '026873897', 'Erik ', 'erik@yahoo.com', 'Teknik Industri'),
(22, '5eb5fd80ce2ba.jpg', '193040121', 'Fahri syabani', 'fahrixxxxxxxxx@gmail.com', 'Teknik Informatika'),
(25, 'default.jpg', '1930478374', 'Dani', 'dani@gmail.com', 'teknik mesin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'fahri', '$2y$10$aIatI35E1LCQFaVRLpA1geuOtu.xaolbYI..7jKWQVmblmDNXwytW'),
(12, 'sae', '$2y$10$GHZHPOdcAn0cuBIoUctJZ.LRr8zQZuXOYW9KISMX4F28NPR.N7UXO'),
(14, 'sania', '$2y$10$ExD8w6jA0iyf7bdRVagRueRnSUX6W2th5BoGQiKwMXKNWqo5GLqXa'),
(15, 'sani', '$2y$10$utkblRXHzpZ0PyJuiaGICOgTE9lln79pqpiEzyJd96ixv3BSlTOC2'),
(16, 'agus', '$2y$10$NG1NSnFFtP5nEEmHv1/bNubce2Lf3WOyBkkeFlX4leiAC63WEWnJe');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
