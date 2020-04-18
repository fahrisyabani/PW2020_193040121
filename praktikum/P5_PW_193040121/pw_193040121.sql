-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2020 pada 04.52
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
-- Struktur dari tabel `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama_barang` varchar(150) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `spesifikasi` varchar(500) NOT NULL,
  `keunggulan` varchar(500) NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `harga` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `elektronik`
--

INSERT INTO `elektronik` (`id`, `foto`, `nama_barang`, `brand`, `spesifikasi`, `keunggulan`, `tanggal_rilis`, `harga`) VALUES
(1, '1.jpg', 'Monitor Asus ROG Strix XG32VQ', 'Asus', 'ukuran panel : wide screen 15.6, saturasi warna : 68%(NTSC), resolusi : 2560x1440, brightness maks : 1000 cd, display : non-glare, signal input : HDMI,displayPort, miniDisplay.', 'Asus rog strix XG35VQ adalah sebuah monitor yang memiliki bentuk cekung yang impresif dengan refresh rate 100Hz, serta memaksimalkan pandangan dengan sebuah display 35 inci dan sebuah kurvatur 1800R.', '2018-02-10', 'Rp 7.100.000+'),
(2, '2.jpg', 'Earphone Remax RM-580', 'Earbud', 'Earpiece design : earbud(in-ear, connector : 3.5 mm, cord lenght : 120 cm, frekuensi : 20-20000hz, color : black.', 'Didesain dengan model argonomis yang dapat mendengarkan musik diberbagai aktivitas misalnya : jogging, berolahraga, kebugaran, dan lain lain.', '2020-02-11', 'Rp 230.000'),
(3, '3.jpg', 'Headphone Asus ROG Orion Pro', 'Asus', 'connector : 3.5mm, max input : 50mW, frekuensi : 20-20000hz, cable : braided cable, berat : 268 gram.', 'Tingkat tekanan suara yang relevan, mempunyai peredaman yang pasif, frekuensi tertinggi.', '2020-02-13', 'Rp 3.817.000+'),
(4, '4.jpg', 'Lampu Smart Philips HUE', 'Philips', 'Dimensi Produk Tinggi: 790 mm ,Panjang: 150 mm, lebar: 150 mm, Berat: 900 Gram, Suhu warna: 2000K-6500K +16 juta warna, Daya standby maks: 0,2 W, Watt: 6 W, Voltase input: 220V-240V, Output lumen: 806 lm @ 4000K, Perangkat lunak dapat ditingkatkan: Ya (Upgrade Software), Mulai: Output cahaya instan 100%.', 'Lampu yang nyaman dan bisa mengganti warna, serta mengubahnya menggunakan dengan menghubungkan ke aplikasi smartphone kita, dan mempunyai banyak warna yang mudah dikendalikan.', '2020-01-01', 'Rp 999.000'),
(5, '5.jpg', 'Mesin Cuci Samsung WF17N', 'Samsung', 'capasity : 17kg, body color : black caviar, panel display: LED, door : Ad door, smart control, dimensi : 686x984x846mm.', 'Mesin cuci yang dikemas dengan inovasi yang cepat dan cerdas serta bisa dikendalikan dengan applikasi smartphone, serta dalam mencuci pakaian yang tingkat kotorannya lebih berat hingga menghasilkan pakaian yang lebih bersih.', '2019-12-01', 'Rp 13.999.000'),
(6, '6.jpg', 'AC Samsung Inverter Split', 'Samsung', 'capasity : 2.49kW, power source : 1/220-240v/50Hz, dimensi : 600x500x232mm, color : white.', 'Hemat listrik, menghasilkan udara yang segar dan anti bakteri, serta menjaga suhu ruangan lebih stabil.', '2020-02-13', 'Rp 8.160.000'),
(7, '7.jpg', 'Printer HP Officejet pro 8010', 'Hp', 'Print speed black: ISO: Up to 22 ppm, Draft: Up to 35 ppm, Print speed color: ISO:Up to 18 ppm, Draft:Up to 35 ppm, First page out (ready), Black: As fast as 9 sec, Color: As fast as 10 sec 6, Print technology, HP Thermal Inkjet, Color: Up to 4800 x 1200 optimized dpi on HP Advance Photo, Paper 1200 x 1200 dpi input, Black: 1200 x 1200 rendered dpi.', 'Catridge lebih awet, harga paling murah diantara daya saingnya, hasil cetak yang real, dan print warna yang bagus.', '2019-04-01', 'Rp 2.900.000'),
(8, '8.jpg', 'Rice Cooker Philips HD 3060', 'Philips', 'inner pot kapasitas : 2L, rice capasity : 0.7L, panjang kabel : 1.2m, daya : 330 watt, color : black, memori cadangan, fungsi pemanas ulang, teknogi 6f.inner pot kapasitas : 2L, rice capasity : 0.7L, panjang kabel : 1.2m, daya : 330 watt, color : black, memori cadangan, fungsi pemanas ulang, teknogi 6f.', 'Hemat waktu, nasi lebih tahan lama, bisa masak aneka resep.', '2019-04-02', 'Rp 5.779.000'),
(9, '9.jpg', 'Setrika Philips HD 1173', 'Philips', 'Daya : 350 watt, alas setrika anti lengket, dilengkapi pengatur suhu, panjang kabel : 1.7m.', 'Mengatasi kerutan dan kusut lebih cepat, tidak merusak bahan pakaian, mudah digunakan dan cocok untuk setrika laundry maupun sendiri.', '2018-05-01', 'Rp 275.000'),
(10, '10.jpg', 'Lakoni Vortrex 15 BWD', 'Lakoni', 'Daya : 850 watt, tangki : 15 liter, bahan tangki : stainless steel.', 'Debu dan kotoran tidak lagi beterbangan, mudah menjangkau sudut-sudut ruang, meminimalkan resiko gangguan perpanasan dan alergi kulit.', '2018-11-01', 'Rp. 670.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
