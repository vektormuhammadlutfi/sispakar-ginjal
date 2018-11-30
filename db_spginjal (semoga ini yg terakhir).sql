-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2018 pada 15.04
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spginjal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(11) NOT NULL,
  `id_klp_gejala` int(11) NOT NULL,
  `kd_gejala` varchar(5) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `id_klp_gejala`, `kd_gejala`, `nama_gejala`) VALUES
(34, 1, 'G001', 'Mual dan Muntah'),
(35, 1, 'G002', 'Mudah Lelah'),
(36, 1, 'G003', 'Demam'),
(37, 1, 'G004', 'Nyeri Pada Dada'),
(38, 1, 'G005', 'Nyeri Punggung'),
(39, 2, 'G006', 'Kehilangan Nafsu Makan\r\n'),
(40, 1, 'G007', 'Nyeri atau Perih Saat Buang Air Kecil\r\n'),
(41, 1, 'G008', 'Warna Urine Keruh, Pekat, dan Gelap'),
(42, 1, 'G009', 'Menggigil'),
(43, 1, 'G010', 'Sesak Napas'),
(44, 1, 'G011', 'Pembengkakan Pada Bagian Tubuh'),
(45, 1, 'G012', 'Sering Buang Air Kecil'),
(46, 2, 'G013', 'Bau Urine Menyengat'),
(47, 1, 'G014', 'Gelisah'),
(48, 2, 'G015', 'Linglung atau Kebingungan'),
(49, 1, 'G016', 'Sakit Perut'),
(50, 1, 'G017', 'Kulit Gatal'),
(51, 1, 'G018', 'Kram Otot'),
(52, 1, 'G019', 'Tegang Otot'),
(53, 2, 'G020', 'Menurunnya Ketajaman Mental\r\n'),
(54, 2, 'G021', 'Gangguan Tidur'),
(55, 1, 'G022', 'Kelopak Mata Sembab'),
(56, 1, 'G023', 'Seperti Ada Tekanan Pada Panggul'),
(57, 1, 'G024', 'Nyeri Pinggang'),
(58, 2, 'G025', 'Sulit Beristirahat'),
(59, 2, 'G026', 'Urine Berbuih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejalads`
--

CREATE TABLE `tb_gejalads` (
  `id` int(11) NOT NULL,
  `kd_gejala` varchar(5) NOT NULL,
  `nm_gejala` varchar(255) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gejalads`
--

INSERT INTO `tb_gejalads` (`id`, `kd_gejala`, `nm_gejala`, `bobot`) VALUES
(1, 'G001', 'Mual dan Muntah', 0.8),
(2, 'G002', 'Kelelahan', 0.7),
(3, 'G003', 'Demam', 0.8),
(4, 'G004', 'Nyeri Pada Dada', 0.7),
(5, 'G005', 'Nyeri Punggung', 0.5),
(6, 'G006', 'Kehilangan Nafsu Makan', 0.7),
(7, 'G007', 'Nyeri atau Perih Saat Buang Air Kecil', 0.8),
(8, 'G008', 'Warna Urine Keruh, Pekat, dan Gelap', 0.6),
(9, 'G009', 'Menggigil\r\n', 0.8),
(10, 'G010', 'Sesak Napas\r\n', 0.8),
(11, 'G011', 'Pembengkakan Pada Bagian Tubuh\r\n', 0.9),
(12, 'G012', 'Sering Buang Air Kecil\r\n', 0.6),
(13, 'G013', 'Bau Urine Menyengat\r\n', 0.6),
(14, 'G014', 'Gelisah\r\n', 0.8),
(15, 'G015', 'Linglung atau Kebingungan\r\n', 0.6),
(16, 'G016', 'Sakit Perut\r\n', 0.7),
(17, 'G017', 'Kulit Gatal\r\n', 0.6),
(18, 'G018', 'Kram Otot\r\n', 0.5),
(19, 'G019', 'Tegang Otot\r\n', 0.6),
(20, 'G020', 'Menurunnya Ketajaman Mental\r\n', 0.6),
(21, 'G021', 'Gangguan Tidur\r\n', 0.7),
(22, 'G022', 'Kelopak Mata Sembab\r\n', 0.6),
(23, 'G023', 'Seperti Ada Tekanan Pada Panggul\r\n', 0.6),
(24, 'G024', 'Nyeri Pinggang\r\n', 0.8),
(25, 'G025', 'Sulit Beristirahat\r\n', 0.7),
(26, 'G026', 'Urine Berbuih\r\n', 0.6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasilcf`
--

CREATE TABLE `tb_hasilcf` (
  `id_hasilcf` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kd_penyakit` varchar(10) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `kepercayaan` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_hasilcf`
--

INSERT INTO `tb_hasilcf` (`id_hasilcf`, `id_user`, `kd_penyakit`, `nama_penyakit`, `kepercayaan`, `created_at`) VALUES
(1, 9, 'P002', 'Gagal Ginjal Kronik', 80, '2018-11-29 07:16:59'),
(2, 9, 'P002', 'Gagal Ginjal Kronik', 60, '2018-11-29 07:27:15'),
(3, 9, 'P007', 'Glomerulonefritis', 60, '2018-11-29 12:40:02'),
(4, 9, 'P007', 'Glomerulonefritis', 60, '2018-11-29 12:44:19'),
(5, 12, 'P004', 'Batu Ginjal', 80, '2018-11-29 12:49:20'),
(6, 12, 'P001', 'Gagal Ginjal Akut', 80, '2018-11-29 14:53:16'),
(7, 12, 'P001', 'Gagal Ginjal Akut', 99.28, '2018-11-29 23:18:13'),
(8, 12, 'P001', 'Gagal Ginjal Akut', 99.9856, '2018-11-29 23:24:29'),
(9, 12, 'P006', 'Nefritis akut', 92, '2018-11-29 23:27:13'),
(10, 12, 'P001', 'Gagal Ginjal Akut', 96, '2018-11-29 23:32:18'),
(11, 12, 'P002', 'Gagal Ginjal Kronik', 99.76, '2018-11-29 23:37:04'),
(12, 12, 'P004', 'Batu Ginjal', 86, '2018-11-29 23:40:03'),
(13, 12, 'P002', 'Gagal Ginjal Kronik', 61, '2018-11-29 23:41:05'),
(14, 12, 'P007', 'Glomerulonefritis', 76, '2018-11-29 23:43:33'),
(15, 12, 'P007', 'Glomerulonefritis', 76, '2018-11-29 23:43:33'),
(16, 12, 'P001', 'Gagal Ginjal Akut', 80, '2018-11-29 23:45:42'),
(17, 12, 'P004', 'Batu Ginjal', 72, '2018-11-29 23:48:49'),
(18, 12, 'P003', 'Kista Ginjal', 80, '2018-11-29 23:50:09'),
(19, 10, 'P006', 'Nefritis akut', 86, '2018-11-29 23:54:26'),
(20, 10, 'P005', 'Kanker Ginjal', 66, '2018-11-29 23:57:24'),
(21, 10, 'P006', 'Nefritis akut', 80, '2018-11-29 23:58:40'),
(22, 10, 'P003', 'Kista Ginjal', 80, '2018-11-29 23:59:18'),
(23, 10, 'P006', 'Nefritis akut', 70, '2018-11-30 00:00:17'),
(24, 10, 'P004', 'Batu Ginjal', 40, '2018-11-30 00:02:24'),
(25, 10, 'P001', 'Gagal Ginjal Akut', 99.64, '2018-11-30 00:03:20'),
(26, 10, 'P001', 'Gagal Ginjal Akut', 96, '2018-11-30 00:04:01'),
(27, 10, 'P002', 'Gagal Ginjal Kronik', 99.76, '2018-11-30 00:06:05'),
(28, 9, 'P002', 'Gagal Ginjal Kronik', 61, '2018-11-30 00:14:29'),
(29, 9, 'P006', 'Nefritis akut', 80, '2018-11-30 00:15:42'),
(30, 9, 'P007', 'Glomerulonefritis', 80, '2018-11-30 00:18:24'),
(31, 9, 'P004', 'Batu Ginjal', 86, '2018-11-30 00:19:31'),
(32, 9, 'P004', 'Batu Ginjal', 72, '2018-11-30 00:20:11'),
(33, 9, 'P003', 'Kista Ginjal', 80, '2018-11-30 00:20:53'),
(34, 9, 'P005', 'Kanker Ginjal', 66, '2018-11-30 00:22:01'),
(35, 9, 'P004', 'Batu Ginjal', 86, '2018-11-30 00:22:48'),
(36, 9, 'P005', 'Kanker Ginjal', 70, '2018-11-30 00:23:54'),
(37, 9, 'P004', 'Batu Ginjal', 80, '2018-11-30 00:24:25'),
(38, 9, 'P007', 'Glomerulonefritis', 60, '2018-11-30 00:25:01'),
(39, 9, 'P006', 'Nefritis akut', 86, '2018-11-30 00:26:10'),
(40, 9, 'P004', 'Batu Ginjal', 80, '2018-11-30 00:26:38'),
(41, 9, 'P002', 'Gagal Ginjal Kronik', 86, '2018-11-30 00:27:00'),
(42, 9, 'P006', 'Nefritis akut', 66, '2018-11-30 00:29:59'),
(43, 9, 'P007', 'Glomerulonefritis', 50, '2018-11-30 00:30:21'),
(44, 9, 'P002', 'Gagal Ginjal Kronik', 80, '2018-11-30 00:30:37'),
(45, 9, 'P006', 'Nefritis akut', 80, '2018-11-30 00:30:58'),
(46, 9, 'P006', 'Nefritis akut', 80, '2018-11-30 00:35:30'),
(47, 9, 'P006', 'Nefritis akut', 86, '2018-11-30 01:09:12'),
(48, 9, 'P002', 'Gagal Ginjal Kronik', 10, '2018-11-30 12:27:52'),
(49, 9, 'P002', 'Gagal Ginjal Kronik', 60, '2018-11-30 12:31:02'),
(50, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 12:36:39'),
(51, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 12:37:22'),
(52, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 12:38:02'),
(53, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 12:39:13'),
(54, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 12:41:17'),
(55, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 12:42:31'),
(56, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 12:43:03'),
(57, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 12:44:25'),
(58, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 12:46:00'),
(59, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 12:47:03'),
(60, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 12:47:19'),
(61, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 12:47:27'),
(62, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 12:47:38'),
(63, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 12:48:16'),
(64, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 12:49:08'),
(65, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 13:01:31'),
(66, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 13:01:48'),
(67, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 13:02:21'),
(68, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 13:03:56'),
(69, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 13:04:16'),
(70, 10, 'P002', 'Gagal Ginjal Kronik', 11, '2018-11-30 13:05:35'),
(71, 9, 'P001', 'Gagal Ginjal Akut', 80, '2018-11-30 13:25:08'),
(72, 9, 'P007', 'Glomerulonefritis', 40, '2018-11-30 13:53:56'),
(73, 9, 'P007', 'Glomerulonefritis', 40, '2018-11-30 13:54:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasilds`
--

CREATE TABLE `tb_hasilds` (
  `id_hasilds` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kd_penyakit` varchar(10) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `kepercayaan` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_hasilds`
--

INSERT INTO `tb_hasilds` (`id_hasilds`, `id_user`, `kd_penyakit`, `nama_penyakit`, `kepercayaan`, `created_at`) VALUES
(1, 9, 'P007', 'nama_penyakit', 50, '2018-11-28 13:25:53'),
(3, 9, 'P007', 'ini hasil df', 60, '2018-11-29 07:27:16'),
(4, 9, 'P007', 'ini hasil df', 60, '2018-11-29 12:40:02'),
(5, 9, 'P007', 'ini hasil df', 60, '2018-11-29 12:44:19'),
(6, 12, 'P007', 'ini hasil df', 60, '2018-11-29 12:49:20'),
(7, 12, 'P007', 'ini hasil df', 70, '2018-11-29 14:53:17'),
(8, 12, 'P007', 'ini hasil df', 83, '2018-11-29 23:18:13'),
(9, 12, 'P007', 'ini hasil df', 91, '2018-11-29 23:24:29'),
(10, 12, 'P007', 'ini hasil df', 92, '2018-11-29 23:27:13'),
(11, 12, 'P007', 'ini hasil df', 39, '2018-11-29 23:32:18'),
(12, 12, 'P007', 'ini hasil df', 76, '2018-11-29 23:37:04'),
(13, 12, 'P007', 'ini hasil df', 44, '2018-11-29 23:40:03'),
(14, 12, 'P007', 'ini hasil df', 39, '2018-11-29 23:41:05'),
(15, 12, 'P007', 'ini hasil df', 41, '2018-11-29 23:43:34'),
(16, 12, 'P007', 'ini hasil df', 41, '2018-11-29 23:43:34'),
(17, 12, 'P007', 'ini hasil df', 96, '2018-11-29 23:45:42'),
(18, 12, 'P007', 'ini hasil df', 52, '2018-11-29 23:48:49'),
(19, 12, 'P007', 'ini hasil df', 99, '2018-11-29 23:50:10'),
(20, 10, 'P007', 'ini hasil df', 89, '2018-11-29 23:54:26'),
(21, 10, 'P007', 'ini hasil df', 68, '2018-11-29 23:57:24'),
(22, 10, 'P007', 'ini hasil df', 60, '2018-11-29 23:58:40'),
(23, 10, 'P007', 'ini hasil df', 68, '2018-11-29 23:59:18'),
(24, 10, 'P007', 'ini hasil df', 95, '2018-11-30 00:00:17'),
(25, 10, 'P007', 'ini hasil df', 91, '2018-11-30 00:02:24'),
(26, 10, 'P007', 'ini hasil df', 91, '2018-11-30 00:03:20'),
(27, 10, 'P007', 'ini hasil df', 39, '2018-11-30 00:04:01'),
(28, 10, 'P007', 'ini hasil df', 79, '2018-11-30 00:06:05'),
(29, 9, 'P007', 'ini hasil df', 39, '2018-11-30 00:14:29'),
(30, 9, 'P007', 'ini hasil df', 85, '2018-11-30 00:15:42'),
(31, 9, 'P007', 'ini hasil df', 96, '2018-11-30 00:18:24'),
(32, 9, 'P007', 'ini hasil df', 44, '2018-11-30 00:19:31'),
(33, 9, 'P007', 'ini hasil df', 52, '2018-11-30 00:20:11'),
(34, 9, 'P007', 'ini hasil df', 99, '2018-11-30 00:20:54'),
(35, 9, 'P007', 'ini hasil df', 68, '2018-11-30 00:22:01'),
(36, 9, 'P007', 'ini hasil df', 60, '2018-11-30 00:22:48'),
(37, 9, 'P007', 'ini hasil df', 70, '2018-11-30 00:23:54'),
(38, 9, 'P007', 'ini hasil df', 33, '2018-11-30 00:24:25'),
(39, 9, 'P007', 'ini hasil df', 70, '2018-11-30 00:25:01'),
(40, 9, 'P007', 'ini hasil df', 89, '2018-11-30 00:26:10'),
(41, 9, 'P007', 'ini hasil df', 45, '2018-11-30 00:26:38'),
(42, 9, 'P007', 'ini hasil df', 45, '2018-11-30 00:27:00'),
(43, 9, 'P007', 'ini hasil df', 38, '2018-11-30 00:29:59'),
(44, 9, 'P007', 'ini hasil df', 89, '2018-11-30 00:30:22'),
(45, 9, 'P007', 'ini hasil df', 84, '2018-11-30 00:30:37'),
(46, 9, 'P007', 'ini hasil df', 53, '2018-11-30 00:30:58'),
(47, 9, 'P007', 'ini hasil df', 87, '2018-11-30 00:35:30'),
(48, 9, 'P007', 'ini hasil df', 89, '2018-11-30 01:09:12'),
(49, 9, 'P007', 'ini hasil df', 50, '2018-11-30 12:27:52'),
(50, 9, 'P007', 'ini hasil df', 80, '2018-11-30 12:31:02'),
(51, 10, 'P007', 'ini hasil df', 80, '2018-11-30 12:36:39'),
(52, 10, 'P007', 'ini hasil df', 80, '2018-11-30 12:37:22'),
(53, 10, 'P007', 'ini hasil df', 80, '2018-11-30 12:38:02'),
(54, 10, 'P007', 'ini hasil df', 80, '2018-11-30 12:39:14'),
(55, 10, 'P007', 'ini hasil df', 80, '2018-11-30 12:41:17'),
(56, 10, 'P007', 'ini hasil df', 80, '2018-11-30 12:42:31'),
(57, 10, 'P007', 'ini hasil df', 80, '2018-11-30 12:43:03'),
(58, 10, 'P007', 'ini hasil df', 80, '2018-11-30 12:44:25'),
(59, 10, 'P007', 'ini hasil df', 80, '2018-11-30 12:46:00'),
(60, 10, 'P007', 'ini hasil df', 80, '2018-11-30 12:47:03'),
(61, 10, 'P007', 'ini hasil df', 80, '2018-11-30 12:47:19'),
(62, 10, 'P007', 'ini hasil df', 80, '2018-11-30 12:47:27'),
(63, 10, 'P007', 'ini hasil df', 80, '2018-11-30 12:47:38'),
(64, 10, 'P007', 'ini hasil df', 80, '2018-11-30 12:48:16'),
(65, 10, 'P007', 'ini hasil df', 80, '2018-11-30 12:49:08'),
(66, 10, 'P007', 'ini hasil df', 80, '2018-11-30 13:01:31'),
(67, 10, 'P007', 'ini hasil df', 80, '2018-11-30 13:01:48'),
(68, 10, 'P007', 'ini hasil df', 80, '2018-11-30 13:02:21'),
(69, 10, 'P007', 'ini hasil df', 80, '2018-11-30 13:03:56'),
(70, 10, 'P007', 'ini hasil df', 80, '2018-11-30 13:04:16'),
(71, 10, 'P007', 'ini hasil df', 80, '2018-11-30 13:05:35'),
(72, 9, 'P007', 'ini hasil df', 80, '2018-11-30 13:25:09'),
(73, 9, 'P007', 'ini hasil df', 60, '2018-11-30 13:53:56'),
(74, 9, 'P007', 'ini hasil df', 60, '2018-11-30 13:54:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_klp_gejala`
--

CREATE TABLE `tb_klp_gejala` (
  `id_klp_gejala` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_klp_gejala`
--

INSERT INTO `tb_klp_gejala` (`id_klp_gejala`, `nama`, `keterangan`) VALUES
(1, 'Gejala Fisik', '-'),
(2, 'Gejala Non-Fisik', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id_p` int(11) NOT NULL,
  `kd_penyakit` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id_p`, `kd_penyakit`, `nama`, `keterangan`) VALUES
(11, 'P001', 'Gagal Ginjal Akut', '(1)Memperbanyak konsumsi air putih untuk mencegah terjadinya dehidrasi.\r\n(2)Menghentikan obat-obatan yang dapat memicu atau memperparah gagal ginjal akut.\r\n(3)Mengobati infeksi yang mendasari terjadinya gagal ginjal akut apabila ada.\r\n(4)Berkonsultasi dengan dokter spesialis urologi atau spesialis ginjal apabila penyebab gagal ginjal akut tidak jelas, atau apabila terdeteksi adanya penyebab lain yang lebih serius.\r\n'),
(12, 'P002', 'Gagal Ginjal Kronik', '(1)Hindari makanan banyak mengandung kalium, fosfor, garam atau protein tinggi.\r\n(2)Sangat penting untuk menjaga tekanan darah dan memeriksanya secara berkala.\r\n(3)Obat yang bersifat diuretik dapat mencegah terjadinya penumpukan cairan dalam tubuh.\r\n(4)Hentikan penggunaan obat-obatan tertentu yang dapat memicu kerusakan pada ginjal.\r\n(5)Menjalani pengobatan untuk hipertensi, diabetes, gagal jantung kongestif serta infeksi.\r\n(6)Beberapa pasien perlu menjalani dialisis ginjal bila pengobatan tidak berhasil. Dialisis membantu membersihkan ginjal dari zat-zat sisa metabolisme dalam darah ketika ginjal tak mampu menjalankan tugasnya. Dialisis ginjal ini dapat bersifat sementara ataupun permanen.\r\n(7)Segera kedokter untuk melakukan transfusi darah apabila mengalami anemia.\r\n'),
(13, 'P003', 'Kista Ginjal', '(1)Cek kesehatan Anda secara berkala pertahun. Banyak kista ginjal  sederhana yang terdeteksi saat pemeriksaan medis (medical check up)..\r\n(2)Olahraga. Olahraga teratur dapat meningkatkan kesehatan Anda secara umum dan juga kesehatan ginjal Anda.\r\n(3)Makan diet seimbang. Cobalah mengurangi makanan berlemak dan bergula. Lemak akan ditransfer ke darah Anda, membuat ginjal Anda bekerja lebih keras untuk menyaring darah.\r\n(4)Mengurangi stres. Stres dapat memicu atau memperburuk tanda-tanda dan gejala. Yoga, tai chi, pijat, meditasi, atau senam pernapasan dalam dapat membantu.\r\n'),
(14, 'P004', 'Batu Ginjal', '(1)Banyak minum cairan, paling tidak 2-3 liter perhari\r\n(2)Hubungi dokter Anda jika kondisi memburuk.\r\n'),
(15, 'P005', 'Kanker Ginjal', '(1)Hubungi dokter jika Anda melihat darah di air seni Anda atau mengalami rasa nyeri atau pembengkakan di sekitar perut\r\n(2)Hubungi dokter jika Anda mengalami demam setelah operasi.\r\n(3)Hubungi dokter jika Anda melihat drainase dari sayatan bekas operasi\r\n(4)Olahraga rutin sesuai dengan saran doker\r\n(5)Tidur yang cukup\r\n(6)Perbanyak istirahat dan bersantai\r\n'),
(16, 'P006', 'Nefritis akut', '(1)Pengguanaan obat-obatan, ini dilakukan untuk seseorang yang tidak memiliki alergi, jadi sesuai dengan anjuran dokter.\r\n(2)Cuci darah, bisa dilakukan apabila fungsi ginjal untuk menyaring darah tidak dapat dilakukan lagi.\r\n(3)Cangkok Ginjal, ini dilakukan dengan mengganti atau mencangkok ginjal yang rusak dengan yang baru.\r\n'),
(17, 'P007', 'Glomerulonefritis', '(1)Obat imunosupresan. Imunosupresan dapat diberikan untuk menangani glomerulonefritis akibat gangguan sistem imun. Obat yang dapat digunakan seperti kortikosteroid, cyclophosphamide, ciclosporin, mycophenolate mofetil, dan azathioprine.\r\n(2)Obat pengatur tekanan darah.  Dua golongan obat yang dapat digunakan untuk mengatur tekanan darah adalah ACE inhibitors (contohnya captropil dan lisinopril) dan ARB ( losartan dan valsartan). \r\n(3)Plasmapheresis. Untuk membuang antibodi tersebut, dilakukan pembuangan plasma darah penderita, melalui sebuah prosedur yang disebut plamapheresis. Plasma darah yang dibuang akan digantikan dengan plasma pengganti atau cairan infus.\r\n(4)Obat-obatan lain. Obat lain yang dapat diberikan, di antaranya adalah diuretik untuk mengurangi bengkak, dan suplemen kalsium\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_relasi`
--

CREATE TABLE `tb_relasi` (
  `id` int(11) NOT NULL,
  `kd_gejala` varchar(10) NOT NULL,
  `kd_penyakit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_relasi`
--

INSERT INTO `tb_relasi` (`id`, `kd_gejala`, `kd_penyakit`) VALUES
(8, 'G001', 'P002'),
(9, 'G002', 'P002'),
(10, 'G004', 'P002'),
(11, 'G006', 'P002'),
(12, 'G010', 'P002'),
(13, 'G011', 'P002'),
(14, 'G017', 'P002'),
(15, 'G018', 'P002'),
(16, 'G019', 'P002'),
(17, 'G020', 'P002'),
(18, 'G021', 'P002'),
(19, 'G002', 'P003'),
(20, 'G003', 'P003'),
(21, 'G005', 'P003'),
(22, 'G009', 'P003'),
(23, 'G016', 'P003'),
(24, 'G021', 'P003'),
(25, 'G001', 'P004'),
(26, 'G007', 'P004'),
(27, 'G008', 'P004'),
(28, 'G013', 'P004'),
(29, 'G014', 'P004'),
(30, 'G025', 'P004'),
(31, 'G002', 'P005'),
(32, 'G003', 'P005'),
(33, 'G006', 'P005'),
(34, 'G010', 'P005'),
(35, 'G014', 'P005'),
(36, 'G015', 'P005'),
(37, 'G016', 'P005'),
(38, 'G023', 'P005'),
(39, 'G024', 'P005'),
(40, 'G025', 'P005'),
(41, 'G001', 'P006'),
(42, 'G002', 'P006'),
(43, 'G003', 'P006'),
(44, 'G005', 'P006'),
(45, 'G008', 'P006'),
(46, 'G009', 'P006'),
(47, 'G011', 'P006'),
(48, 'G012', 'P006'),
(49, 'G022', 'P006'),
(50, 'G024', 'P006'),
(51, 'G003', 'P007'),
(52, 'G009', 'P007'),
(53, 'G011', 'P007'),
(54, 'G025', 'P007'),
(55, 'G026', 'P007'),
(95, 'G001', 'P001'),
(96, 'G002', 'P001'),
(97, 'G004', 'P001'),
(98, 'G005', 'P001'),
(99, 'G010', 'P001'),
(100, 'G015', 'P001'),
(101, 'G016', 'P001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rulecf`
--

CREATE TABLE `tb_rulecf` (
  `id` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `mb` float NOT NULL,
  `md` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rulecf`
--

INSERT INTO `tb_rulecf` (`id`, `id_gejala`, `id_penyakit`, `mb`, `md`) VALUES
(55, 34, 11, 0.8, 0.2),
(57, 35, 11, 0.8, 0.2),
(58, 37, 11, 0.7, 0.3),
(59, 38, 11, 0.5, 0.4),
(60, 43, 11, 0.8, 0),
(61, 48, 11, 0.6, 0.3),
(62, 49, 11, 0.7, 0.2),
(63, 34, 12, 0.8, 0.2),
(64, 35, 12, 0.8, 0.2),
(65, 37, 12, 0.7, 0.3),
(66, 39, 12, 0.8, 0.1),
(67, 43, 12, 0.8, 0.1),
(68, 44, 12, 0.8, 0),
(69, 50, 12, 0.6, 0.03),
(70, 51, 12, 0.5, 0.4),
(71, 52, 12, 0.5, 0.4),
(72, 53, 12, 0.6, 0.4),
(73, 54, 12, 0.7, 0.2),
(74, 35, 13, 0.7, 0.2),
(75, 36, 13, 0.8, 0.3),
(76, 38, 13, 0.7, 0.2),
(77, 42, 13, 0.8, 0),
(78, 49, 13, 0.6, 0.3),
(79, 54, 13, 0.7, 0.2),
(80, 34, 14, 0.6, 0.2),
(81, 40, 14, 0.8, 0),
(82, 41, 14, 0.8, 0.1),
(83, 46, 14, 0.6, 0.2),
(84, 47, 14, 0.8, 0.2),
(85, 58, 14, 0.7, 0.3),
(87, 35, 15, 0.7, 0.2),
(88, 36, 15, 0.8, 0.2),
(89, 39, 15, 0.7, 0.2),
(90, 43, 15, 0.8, 0.1),
(91, 47, 15, 0.8, 0.2),
(92, 48, 15, 0.6, 0.3),
(93, 49, 15, 0.7, 0.2),
(94, 56, 15, 0.6, 0.3),
(95, 57, 15, 0.8, 0.1),
(96, 58, 15, 0.7, 0.2),
(113, 34, 16, 0.6, 0.2),
(114, 36, 16, 0.8, 0.2),
(115, 42, 16, 0.8, 0.2),
(116, 55, 16, 0.6, 0.3),
(117, 57, 16, 0.8, 0.1),
(118, 45, 16, 0.6, 0.1),
(119, 44, 16, 0.8, 0),
(120, 38, 16, 0.7, 0.2),
(121, 41, 16, 0.7, 0.2),
(122, 35, 16, 0.6, 0.3),
(123, 36, 17, 0.8, 0.2),
(124, 42, 17, 0.7, 0.2),
(125, 44, 17, 0.8, 0),
(126, 58, 17, 0.7, 0.2),
(127, 59, 17, 0.6, 0.2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `umur` varchar(3) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama_pengguna`, `jk`, `umur`, `alamat`, `username`, `password`, `level`) VALUES
(9, 'hasriani', 'P', '21', 'sengkang', 'hasriani', 'dc16507419d4f99dd2c9c4eac3197935', 'pasien'),
(10, 'nani astuti triana', 'P', '21', 'jl. rajawali 2 no 8', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(12, 'dian', 'P', '22', 'maros', 'diandian', 'f97de4a9986d216a6e0fea62b0450da9', 'pasien');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_klp_gejala` (`id_klp_gejala`);

--
-- Indeks untuk tabel `tb_gejalads`
--
ALTER TABLE `tb_gejalads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gejala` (`kd_gejala`),
  ADD KEY `id_penyakit` (`nm_gejala`);

--
-- Indeks untuk tabel `tb_hasilcf`
--
ALTER TABLE `tb_hasilcf`
  ADD PRIMARY KEY (`id_hasilcf`),
  ADD KEY `tb_hasilcf_ibfk_1` (`id_user`);

--
-- Indeks untuk tabel `tb_hasilds`
--
ALTER TABLE `tb_hasilds`
  ADD PRIMARY KEY (`id_hasilds`);

--
-- Indeks untuk tabel `tb_klp_gejala`
--
ALTER TABLE `tb_klp_gejala`
  ADD PRIMARY KEY (`id_klp_gejala`);

--
-- Indeks untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id_p`);

--
-- Indeks untuk tabel `tb_relasi`
--
ALTER TABLE `tb_relasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_rulecf`
--
ALTER TABLE `tb_rulecf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gejala` (`id_gejala`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `tb_gejalads`
--
ALTER TABLE `tb_gejalads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_hasilcf`
--
ALTER TABLE `tb_hasilcf`
  MODIFY `id_hasilcf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `tb_hasilds`
--
ALTER TABLE `tb_hasilds`
  MODIFY `id_hasilds` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `tb_klp_gejala`
--
ALTER TABLE `tb_klp_gejala`
  MODIFY `id_klp_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_relasi`
--
ALTER TABLE `tb_relasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `tb_rulecf`
--
ALTER TABLE `tb_rulecf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD CONSTRAINT `tb_gejala_ibfk_1` FOREIGN KEY (`id_klp_gejala`) REFERENCES `tb_klp_gejala` (`id_klp_gejala`);

--
-- Ketidakleluasaan untuk tabel `tb_hasilcf`
--
ALTER TABLE `tb_hasilcf`
  ADD CONSTRAINT `tb_hasilcf_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_rulecf`
--
ALTER TABLE `tb_rulecf`
  ADD CONSTRAINT `tb_rulecf_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `tb_gejala` (`id`),
  ADD CONSTRAINT `tb_rulecf_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit` (`id_p`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
