-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2023 pada 05.44
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
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `no_invoice` int(25) NOT NULL,
  `nama_mitra` varchar(255) NOT NULL,
  `jumlah_pengiriman` int(55) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_pengiriman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`id`, `no_invoice`, `nama_mitra`, `jumlah_pengiriman`, `alamat`, `tanggal_pengiriman`) VALUES
(5, 0, 'Maju', 3, 'Madiun Kota', '2023-01-10'),
(6, 0, 'Indah A', 1, 'Caruban', '2023-01-10'),
(7, 0, 'Yuyun', 3, 'Madiun', '2023-01-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `kode_jenis` varchar(11) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `kode_jenis`, `nama_jenis`) VALUES
(39, '10', 'Kertas HVS'),
(47, '10', 'Kertas Asturo'),
(48, '10', 'Kertas BC'),
(49, '10', 'Kertas CD'),
(50, '10', 'Kertas Emas'),
(51, '10', 'Kertas Flip Chart'),
(52, '10', 'Kertas Kado'),
(53, '10', 'Kertas Karbon'),
(55, '10', 'Kertas Label'),
(56, '10', 'Kertas Manila'),
(57, '10', 'Kertas Marmer'),
(58, '10', 'Kertas Photo'),
(59, '10', 'Kertas Stiker'),
(60, '10', 'Kertas Thermal'),
(61, '10', 'Loose Leaf'),
(62, '11', 'Ballpoint'),
(63, '11', 'Isi Ballpoint'),
(64, '12', 'Isi Pensil'),
(65, '12', 'Pensil Kayu'),
(66, '12', 'Pensil Mekanik'),
(67, '12', 'Pensil Warna'),
(68, '13', 'Busur'),
(69, '13', 'Penggaris'),
(70, '14', 'Jangka'),
(71, '14', 'Kotak Pensil'),
(72, '15', 'Rautan Mekanik'),
(73, '15', 'Rautan Serut'),
(74, '16', 'Amplop'),
(75, '16', 'Amplop Linen'),
(76, '16', 'Amplop Tali'),
(77, '17', 'Correction Pen'),
(78, '17', 'Penghapus'),
(79, '18', 'Cutter'),
(80, '18', 'Gunting'),
(81, '18', 'Isi Cutter'),
(82, '19', 'Isi Spidol'),
(83, '19', 'Kapur Tulis'),
(84, '19', 'Spidol'),
(85, '19', 'Stabilo'),
(86, '20', 'Double Tape'),
(87, '20', 'Isolasi'),
(88, '20', 'Lem Cair'),
(89, '20', 'Lem Gel'),
(90, '20', 'Lem Stik'),
(91, '3', 'Belati'),
(92, '3', 'Dasi'),
(93, '33', 'kapur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(7) NOT NULL,
  `kode_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kode_kategori`, `nama_kategori`) VALUES
(1, 12, 'Kertas'),
(2, 11, 'atk'),
(4, 22, 'Kertas HVS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin'),
('dian', 'f97de4a9986d216a6e0fea62b0450da9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL,
  `nama_mitra` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `alamat_mitra` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id`, `nama_mitra`, `type`, `alamat_mitra`, `no_telepon`) VALUES
(0, 'Yuyun', 'Tetap', 'Kota Ponorogo', '09826738'),
(2, 'Maju', 'Tetap', 'Jl. Kali', '1324'),
(3, 'Indah A', 'Tetap', 'Jl. Kali', '1324'),
(5, 'dian', '-', 'jl senayan', '0854837461723');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama_mitra` varchar(255) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `jumlah_pesanan` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama_mitra`, `tanggal_pemesanan`, `jumlah_pesanan`, `nama_produk`) VALUES
(5, 'Maju', '2023-01-01', '21', 'crayon'),
(6, 'Indah A', '2023-01-03', '12', 'mie sedap'),
(7, 'Yuyun', '2023-01-04', '13', 'mie sedap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(7) NOT NULL,
  `kode_produk` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `type` varchar(64) NOT NULL,
  `Jenis` varchar(64) NOT NULL,
  `merk_produk` varchar(255) NOT NULL,
  `seri_produk` varchar(255) NOT NULL,
  `kode` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_produk`, `nama_produk`, `type`, `Jenis`, `merk_produk`, `seri_produk`, `kode`) VALUES
('B000004', '4001', 'mie sedap', '2B', '4', 'sidu', '33333', 4),
('P000001', '1001', 'mie sedap', 'w', '1', 'wingsfood', '33333', 1),
('P000003', '1002', 'mie sedap', '2B', '1', 'sidu', '33333', 1),
('P000004', '1101', 'mie sedap', 'w', '2', 'sidu', '22', 11),
('P000005', '1201', 'mie sedap', '-', '1', 'sidu', '33333', 12),
('P000007', '1203', 'crayon', 'w', '1', 'wingsfood', '33333', 12),
('P000008', '1202', 'crayon', 'w', '1', 'wingsfood', '33333', 12),
('P000009', '1204', 'mie sedap', 'w', '1', 'sidu', '22', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_jalan`
--

CREATE TABLE `surat_jalan` (
  `id` int(11) NOT NULL,
  `nama_mitra` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal_pengiriman` varchar(100) NOT NULL,
  `jumlah_pengiriman` varchar(100) NOT NULL,
  `metode_pengiriman` varchar(255) NOT NULL,
  `nomer_kendaraan` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_jalan`
--

INSERT INTO `surat_jalan` (`id`, `nama_mitra`, `nama_produk`, `alamat`, `tanggal_pengiriman`, `jumlah_pengiriman`, `metode_pengiriman`, `nomer_kendaraan`) VALUES
(5, 'Maju', 'crayon', 'Madiun Kota', '2023-01-10', '2', 'JNE', 'AE 123 BER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `password`) VALUES
(2, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `type` (`type`);

--
-- Indeks untuk tabel `surat_jalan`
--
ALTER TABLE `surat_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `surat_jalan`
--
ALTER TABLE `surat_jalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
