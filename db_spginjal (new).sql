-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Okt 2018 pada 14.46
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
(35, 1, 'G002', 'Kelelahan'),
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
(87, 6, 'P003', 'Kista Ginjal', 94, '2018-10-21 01:07:57'),
(97, 7, 'P005', 'Kanker Ginjal', 96, '2018-10-27 04:20:34'),
(99, 7, 'P005', 'Kanker Ginjal', 60, '2018-10-27 04:23:03'),
(100, 7, 'P005', 'Kanker Ginjal', 88, '2018-10-27 04:40:44'),
(101, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 96, '2018-10-27 10:56:00'),
(102, 6, 'P005', 'Kanker Ginjal', 80, '2018-10-27 10:56:20'),
(103, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 96, '2018-10-27 10:56:39'),
(104, 6, 'P005', 'Kanker Ginjal', 84, '2018-10-27 10:56:57'),
(105, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-27 10:57:04'),
(106, 6, 'P003', 'Kista Ginjal', 70, '2018-10-27 10:57:24'),
(107, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 70, '2018-10-27 10:57:37'),
(108, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 60, '2018-10-27 10:58:21'),
(109, 6, 'P005', 'Kanker Ginjal', 70, '2018-10-27 10:58:33'),
(110, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 75, '2018-10-27 10:58:48'),
(111, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 94, '2018-10-27 10:58:58'),
(112, 6, 'P004', 'Batu Ginjal', 80, '2018-10-27 10:59:13'),
(113, 6, 'P004', 'Batu Ginjal', 80, '2018-10-27 10:59:29'),
(114, 6, 'P005', 'Kanker Ginjal', 70, '2018-10-27 10:59:38'),
(115, 6, 'P006', 'Nefritis akut', 80, '2018-10-27 11:00:15'),
(116, 6, 'P006', 'Nefritis akut', 60, '2018-10-27 11:00:25'),
(117, 6, 'P006', 'Nefritis akut', 94, '2018-10-27 11:00:34'),
(118, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 60, '2018-10-27 11:00:45'),
(119, 6, 'P005', 'Kanker Ginjal', 92, '2018-10-27 11:00:56'),
(120, 6, 'P006', 'Nefritis akut', 94, '2018-10-27 11:01:09'),
(121, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-27 11:01:23'),
(122, 6, 'P006', 'Nefritis akut', 92, '2018-10-27 13:50:20'),
(123, 6, 'P005', 'Kanker Ginjal', 94, '2018-10-27 16:19:53'),
(124, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-27 16:21:49'),
(125, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-27 16:28:35'),
(126, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-27 16:29:02'),
(127, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-27 16:29:12'),
(128, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-27 16:34:44'),
(129, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-27 16:34:50'),
(130, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-27 16:37:57'),
(131, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 60, '2018-10-27 17:04:13'),
(132, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-27 17:05:52'),
(133, 7, 'P001', 'Gagal Ginjal Akut (GGA)', 60, '2018-10-27 17:33:30'),
(134, 7, 'P005', 'Kanker Ginjal', 96, '2018-10-27 17:33:55'),
(135, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 96, '2018-10-28 06:10:07'),
(136, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-28 06:19:56'),
(137, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-28 06:20:08'),
(138, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-28 06:21:05'),
(139, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-28 06:23:28'),
(140, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-28 06:23:48'),
(141, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-28 06:24:05'),
(142, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-28 06:24:34'),
(143, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 94, '2018-10-28 06:24:50'),
(144, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 94, '2018-10-28 06:26:30'),
(145, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 94, '2018-10-28 06:27:54'),
(146, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 94, '2018-10-28 06:28:38'),
(147, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 94, '2018-10-28 06:29:06'),
(148, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 94, '2018-10-28 06:29:21'),
(149, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 94, '2018-10-28 06:34:56'),
(150, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 94, '2018-10-28 06:37:33'),
(151, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 94, '2018-10-28 06:43:36'),
(152, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 94, '2018-10-28 06:44:06'),
(153, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 94, '2018-10-28 06:44:59'),
(154, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 94, '2018-10-28 06:46:10'),
(155, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 94, '2018-10-28 06:46:34'),
(156, 6, 'P001', 'Gagal Ginjal Akut (GGA)', 85, '2018-10-28 06:47:01'),
(157, 6, 'P003', 'Kista Ginjal', 94, '2018-10-28 06:47:15'),
(158, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 96, '2018-10-28 06:51:33'),
(159, 6, 'P001', 'Gagal Ginjal Akut (GGA)', 60, '2018-10-28 06:52:12'),
(160, 6, 'P003', 'Kista Ginjal', 94, '2018-10-28 06:53:21'),
(161, 6, 'P003', 'Kista Ginjal', 94, '2018-10-28 06:53:21'),
(162, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 96, '2018-10-28 06:54:16'),
(163, 6, 'P004', 'Batu Ginjal', 94, '2018-10-29 13:15:39'),
(164, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 88, '2018-10-29 13:16:37'),
(165, 6, 'P003', 'Kista Ginjal', 88, '2018-10-29 13:21:40'),
(166, 6, 'P003', 'Kista Ginjal', 88, '2018-10-29 13:24:47'),
(167, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 98, '2018-10-29 13:30:58'),
(168, 6, 'P002', 'Gagal Ginjal Kronik (GGK)', 80, '2018-10-29 13:42:06'),
(169, 6, 'P001', 'Gagal Ginjal Akut (GGA)', 80, '2018-10-29 13:42:18'),
(170, 6, 'P006', 'Nefritis akut', 80, '2018-10-29 13:42:29'),
(171, 6, 'P006', 'Nefritis akut', 80, '2018-10-29 13:44:48'),
(172, 6, 'P001', 'Gagal Ginjal Akut (GGA)', 70, '2018-10-29 13:45:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasilds`
--

CREATE TABLE `tb_hasilds` (
  `id_hasilds` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `densitas` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_hasilds`
--

INSERT INTO `tb_hasilds` (`id_hasilds`, `id_user`, `id_penyakit`, `nama_penyakit`, `densitas`, `created_at`) VALUES
(1, 6, 13, 'KISTA GINJAL', 98, '2018-10-26 16:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hitungds`
--

CREATE TABLE `tb_hitungds` (
  `id` int(11) NOT NULL,
  `M` int(11) NOT NULL,
  `himpunan` text NOT NULL,
  `nilai` float NOT NULL,
  `ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(11, 'P001', 'Gagal Ginjal Akut (GGA)', '(1)Memperbanyak konsumsi air putih untuk mencegah terjadinya dehidrasi.\r\n(2)Menghentikan obat-obatan yang dapat memicu atau memperparah gagal ginjal akut.\r\n(3)Mengobati infeksi yang mendasari terjadinya gagal ginjal akut apabila ada.\r\n(4)Berkonsultasi dengan dokter spesialis urologi atau spesialis ginjal apabila penyebab gagal ginjal akut tidak jelas, atau apabila terdeteksi adanya penyebab lain yang lebih serius.\r\n'),
(12, 'P002', 'Gagal Ginjal Kronik (GGK)', '(1)Hindari makanan banyak mengandung kalium, fosfor, garam atau protein tinggi.\r\n(2)Sangat penting untuk menjaga tekanan darah dan memeriksanya secara berkala.\r\n(3)Obat yang bersifat diuretik dapat mencegah terjadinya penumpukan cairan dalam tubuh.\r\n(4)Hentikan penggunaan obat-obatan tertentu yang dapat memicu kerusakan pada ginjal.\r\n(5)Menjalani pengobatan untuk hipertensi, diabetes, gagal jantung kongestif serta infeksi.\r\n(6)Beberapa pasien perlu menjalani dialisis ginjal bila pengobatan tidak berhasil. Dialisis membantu membersihkan ginjal dari zat-zat sisa metabolisme dalam darah ketika ginjal tak mampu menjalankan tugasnya. Dialisis ginjal ini dapat bersifat sementara ataupun permanen.\r\n(7)Segera kedokter untuk melakukan transfusi darah apabila mengalami anemia.\r\n'),
(13, 'P003', 'Kista Ginjal', '(1)Cek kesehatan Anda secara berkala pertahun. Banyak kista ginjal  sederhana yang terdeteksi saat pemeriksaan medis (medical check up)..\r\n(2)Olahraga. Olahraga teratur dapat meningkatkan kesehatan Anda secara umum dan juga kesehatan ginjal Anda.\r\n(3)Makan diet seimbang. Cobalah mengurangi makanan berlemak dan bergula. Lemak akan ditransfer ke darah Anda, membuat ginjal Anda bekerja lebih keras untuk menyaring darah.\r\n(4)Mengurangi stres. Stres dapat memicu atau memperburuk tanda-tanda dan gejala. Yoga, tai chi, pijat, meditasi, atau senam pernapasan dalam dapat membantu.\r\n'),
(14, 'P004', 'Batu Ginjal', '(1)Banyak minum cairan, paling tidak 2-3 liter perhari\r\n(2)Hubungi dokter Anda jika kondisi memburuk.\r\n'),
(15, 'P005', 'Kanker Ginjal', '(1)Hubungi dokter jika Anda melihat darah di air seni Anda atau mengalami rasa nyeri atau pembengkakan di sekitar perut\r\n(2)Hubungi dokter jika Anda mengalami demam setelah operasi.\r\n(3)Hubungi dokter jika Anda melihat drainase dari sayatan bekas operasi\r\n(4)Olahraga rutin sesuai dengan saran doker\r\n(5)Tidur yang cukup\r\n(6)Perbanyak istirahat dan bersantai\r\n'),
(16, 'P006', 'Nefritis akut', '(1)Pengguanaan obat-obatan, ini dilakukan untuk seseorang yang tidak memiliki alergi, jadi sesuai dengan anjuran dokter.\r\n(2)Cuci darah, bisa dilakukan apabila fungsi ginjal untuk menyaring darah tidak dapat dilakukan lagi.\r\n(3)Cangkok Ginjal, ini dilakukan dengan mengganti atau mencangkok ginjal yang rusak dengan yang baru.\r\n'),
(17, 'P007', 'Glomerulonefritis', '(1)Obat imunosupresan. Imunosupresan dapat diberikan untuk menangani glomerulonefritis akibat gangguan sistem imun. Obat yang dapat digunakan seperti kortikosteroid, cyclophosphamide, ciclosporin, mycophenolate mofetil, dan azathioprine.\r\n(2)Obat pengatur tekanan darah.  Dua golongan obat yang dapat digunakan untuk mengatur tekanan darah adalah ACE inhibitors (contohnya captropil dan lisinopril) dan ARB ( losartan dan valsartan). \r\n(3)Plasmapheresis. Untuk membuang antibodi tersebut, dilakukan pembuangan plasma darah penderita, melalui sebuah prosedur yang disebut plamapheresis. Plasma darah yang dibuang akan digantikan dengan plasma pengganti atau cairan infus.\r\n(4)Obat-obatan lain. Obat lain yang dapat diberikan, di antaranya adalah diuretik untuk mengurangi bengkak, dan suplemen kalsium\r\n');

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
(55, 34, 11, 0.3, 0.06),
(57, 35, 11, 0.8, 0.01),
(58, 37, 11, 0.7, 0.02),
(59, 38, 11, 0.5, 0.04),
(60, 43, 11, 0.8, 0.01),
(61, 48, 11, 0.6, 0.03),
(62, 49, 11, 0.7, 0.02),
(63, 34, 12, 0.8, 0.01),
(64, 35, 12, 0.7, 0.02),
(65, 37, 12, 0.6, 0.03),
(66, 39, 12, 0.8, 0.01),
(67, 43, 12, 0.8, 0.01),
(68, 44, 12, 0.9, 0),
(69, 50, 12, 0.6, 0.03),
(70, 51, 12, 0.5, 0.04),
(71, 52, 12, 0.6, 0.03),
(72, 53, 12, 0.6, 0.03),
(73, 54, 12, 0.7, 0.02),
(74, 35, 13, 0.7, 0.02),
(75, 36, 13, 0.8, 0.01),
(76, 38, 13, 0.7, 0.02),
(77, 42, 13, 0.8, 0.01),
(78, 49, 13, 0.6, 0.03),
(79, 54, 13, 0.7, 0.02),
(80, 34, 14, 0.3, 0.06),
(81, 40, 14, 0.8, 0.01),
(82, 41, 14, 0.8, 0.01),
(83, 46, 14, 0.7, 0.02),
(84, 47, 14, 0.8, 0.01),
(85, 58, 14, 0.7, 0.02),
(87, 35, 15, 0.7, 0.02),
(88, 36, 15, 0.4, 0.05),
(89, 39, 15, 0.7, 0.02),
(90, 43, 15, 0.8, 0.01),
(91, 47, 15, 0.8, 0.01),
(92, 48, 15, 0.6, 0.03),
(93, 49, 15, 0.8, 0.01),
(94, 56, 15, 0.6, 0.03),
(95, 57, 15, 0.8, 0.01),
(96, 58, 15, 0.6, 0.03),
(113, 34, 16, 0.6, 0.03),
(114, 36, 16, 0.8, 0.01),
(115, 42, 16, 0.8, 0.01),
(116, 55, 16, 0.6, 0.03),
(117, 57, 16, 0.8, 0.01),
(118, 45, 16, 0.6, 0.03),
(119, 44, 16, 0.8, 0.01),
(120, 38, 16, 0.7, 0.02),
(121, 41, 16, 0.7, 0.02),
(122, 35, 16, 0.6, 0.03),
(123, 36, 17, 0.8, 0.01),
(124, 42, 17, 0.7, 0.02),
(125, 44, 17, 0.9, 0),
(126, 58, 17, 0.7, 0.02),
(127, 59, 17, 0.6, 0.03);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ruleds`
--

CREATE TABLE `tb_ruleds` (
  `id` int(11) NOT NULL,
  `id_gejala` int(5) NOT NULL,
  `id_penyakit` int(5) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `umur` varchar(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama_pengguna`, `jk`, `umur`, `email`, `username`, `password`, `level`) VALUES
(1, 'nani astuti triana', 'P', '22', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(6, 'Karmila', 'P', '16', 'mila@gmail.com', 'mila', 'f562f7f28a039094f7b602c033f106a4', 'pasien'),
(7, 'rika', 'P', '21', 'rika@gmail.com', 'rikarika', 'e32994c67f9a773e841f9e97bd26f014', 'pasien');

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
-- Indeks untuk tabel `tb_hasilcf`
--
ALTER TABLE `tb_hasilcf`
  ADD PRIMARY KEY (`id_hasilcf`),
  ADD KEY `tb_hasilcf_ibfk_1` (`id_user`);

--
-- Indeks untuk tabel `tb_hasilds`
--
ALTER TABLE `tb_hasilds`
  ADD PRIMARY KEY (`id_hasilds`),
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `tb_hasilds_ibfk_1` (`id_user`);

--
-- Indeks untuk tabel `tb_hitungds`
--
ALTER TABLE `tb_hitungds`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `tb_rulecf`
--
ALTER TABLE `tb_rulecf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gejala` (`id_gejala`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indeks untuk tabel `tb_ruleds`
--
ALTER TABLE `tb_ruleds`
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
-- AUTO_INCREMENT untuk tabel `tb_hasilcf`
--
ALTER TABLE `tb_hasilcf`
  MODIFY `id_hasilcf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT untuk tabel `tb_hasilds`
--
ALTER TABLE `tb_hasilds`
  MODIFY `id_hasilds` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_hitungds`
--
ALTER TABLE `tb_hitungds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT untuk tabel `tb_rulecf`
--
ALTER TABLE `tb_rulecf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT untuk tabel `tb_ruleds`
--
ALTER TABLE `tb_ruleds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- Ketidakleluasaan untuk tabel `tb_hasilds`
--
ALTER TABLE `tb_hasilds`
  ADD CONSTRAINT `tb_hasilds_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`),
  ADD CONSTRAINT `tb_hasilds_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit` (`id_p`);

--
-- Ketidakleluasaan untuk tabel `tb_rulecf`
--
ALTER TABLE `tb_rulecf`
  ADD CONSTRAINT `tb_rulecf_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `tb_gejala` (`id`),
  ADD CONSTRAINT `tb_rulecf_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit` (`id_p`);

--
-- Ketidakleluasaan untuk tabel `tb_ruleds`
--
ALTER TABLE `tb_ruleds`
  ADD CONSTRAINT `tb_ruleds_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `tb_gejala` (`id`),
  ADD CONSTRAINT `tb_ruleds_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit` (`id_p`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
