-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2018 pada 16.28
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
(1, 9, 'P002', 'Gagal Ginjal Kronik', 90.0498, '2018-11-25 05:56:44'),
(2, 9, 'P004', 'Batu Ginjal', 85.1491, '2018-11-25 06:12:03'),
(3, 9, 'P006', 'Nefritis akut', 93.0299, '2018-11-25 09:31:23'),
(4, 9, 'P003', 'Kista Ginjal', 90.0498, '2018-11-25 09:41:42'),
(5, 9, 'P002', 'Gagal Ginjal Kronik', 93.8984, '2018-11-26 13:08:25'),
(6, 9, 'P006', 'Nefritis akut', 93.0299, '2018-11-26 13:10:04'),
(7, 9, 'P003', 'Kista Ginjal', 90.0498, '2018-11-26 16:23:06'),
(8, 9, 'P002', 'Gagal Ginjal Kronik', 90.0498, '2018-11-26 16:34:55'),
(9, 9, 'P002', 'Gagal Ginjal Kronik', 90.0498, '2018-11-26 16:37:24'),
(10, 9, 'P002', 'Gagal Ginjal Kronik', 90.0498, '2018-11-26 16:37:44'),
(11, 9, 'P002', 'Gagal Ginjal Kronik', 90.0498, '2018-11-26 16:38:22'),
(12, 9, 'P002', 'Gagal Ginjal Kronik', 90.0498, '2018-11-26 16:38:28'),
(13, 9, 'P002', 'Gagal Ginjal Kronik', 90.0498, '2018-11-26 16:38:41'),
(14, 9, 'P002', 'Gagal Ginjal Kronik', 93.8893, '2018-11-26 16:38:56'),
(15, 9, 'P002', 'Gagal Ginjal Kronik', 93.8893, '2018-11-26 16:50:03'),
(16, 9, 'P002', 'Gagal Ginjal Kronik', 93.8893, '2018-11-26 16:51:12'),
(17, 9, 'P002', 'Gagal Ginjal Kronik', 93.8893, '2018-11-26 16:52:00'),
(18, 9, 'P002', 'Gagal Ginjal Kronik', 93.8893, '2018-11-26 16:53:21'),
(19, 9, 'P002', 'Gagal Ginjal Kronik', 93.8893, '2018-11-26 16:53:35'),
(20, 9, 'P006', 'Nefritis akut', 89.0796, '2018-11-26 16:54:04'),
(21, 9, 'P005', 'Kanker Ginjal', 89.0796, '2018-11-26 16:54:58'),
(22, 9, 'P005', 'Kanker Ginjal', 89.0796, '2018-11-26 16:57:21'),
(23, 9, 'P005', 'Kanker Ginjal', 89.0796, '2018-11-26 16:59:29'),
(24, 9, 'P005', 'Kanker Ginjal', 89.0796, '2018-11-26 17:00:42'),
(25, 9, 'P006', 'Nefritis akut', 95.2596, '2018-11-26 17:02:24'),
(26, 9, 'P006', 'Nefritis akut', 93.8984, '2018-11-26 17:03:02'),
(27, 9, 'P006', 'Nefritis akut', 93.8984, '2018-11-26 17:04:50'),
(28, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 12:40:11'),
(29, 9, 'P007', 'ini hasil df', 50, '2018-11-27 12:40:13'),
(30, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 12:42:57'),
(31, 9, 'P007', 'ini hasil df', 50, '2018-11-27 12:42:57'),
(32, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 12:43:37'),
(33, 9, 'P007', 'ini hasil df', 50, '2018-11-27 12:43:37'),
(34, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 12:44:14'),
(35, 9, 'P007', 'ini hasil df', 50, '2018-11-27 12:44:14'),
(36, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 12:44:51'),
(37, 9, 'P007', 'ini hasil df', 50, '2018-11-27 12:44:51'),
(38, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 12:45:34'),
(39, 9, 'P007', 'ini hasil df', 50, '2018-11-27 12:45:34'),
(40, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 12:45:50'),
(41, 9, 'P007', 'ini hasil df', 50, '2018-11-27 12:45:50'),
(42, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 12:46:19'),
(43, 9, 'P007', 'ini hasil df', 50, '2018-11-27 12:46:19'),
(44, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 12:46:42'),
(45, 9, 'P007', 'ini hasil df', 50, '2018-11-27 12:46:42'),
(46, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 12:47:07'),
(47, 9, 'P007', 'ini hasil df', 50, '2018-11-27 12:47:08'),
(48, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 12:47:40'),
(49, 9, 'P007', 'ini hasil df', 50, '2018-11-27 12:47:41'),
(50, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 12:50:34'),
(51, 9, 'P007', 'ini hasil df', 50, '2018-11-27 12:50:34'),
(52, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 12:54:11'),
(53, 9, 'P007', 'ini hasil df', 50, '2018-11-27 12:54:11'),
(54, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 12:56:02'),
(55, 9, 'P007', 'ini hasil df', 50, '2018-11-27 12:56:02'),
(56, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 13:00:37'),
(57, 9, 'P007', 'ini hasil df', 50, '2018-11-27 13:00:37'),
(58, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 13:01:45'),
(59, 9, 'P007', 'ini hasil df', 50, '2018-11-27 13:01:45'),
(60, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 13:02:53'),
(61, 9, 'P007', 'ini hasil df', 50, '2018-11-27 13:02:53'),
(62, 9, 'P002', 'Gagal Ginjal Kronik', 42.16, '2018-11-27 13:03:37'),
(63, 9, 'P007', 'ini hasil df', 50, '2018-11-27 13:03:38'),
(64, 9, 'P003', 'Kista Ginjal', 90.0498, '2018-11-27 13:03:56'),
(65, 9, 'P007', 'ini hasil df', 64, '2018-11-27 13:03:57'),
(66, 9, 'P003', 'Kista Ginjal', 90.0498, '2018-11-27 13:05:29'),
(67, 9, 'P007', 'ini hasil df', 64, '2018-11-27 13:05:29'),
(68, 9, 'P007', 'Glomerulonefritis', 90.2479, '2018-11-27 13:06:18'),
(69, 9, 'P007', 'ini hasil df', 46, '2018-11-27 13:06:19'),
(70, 9, 'P002', 'Gagal Ginjal Kronik', 93.8893, '2018-11-27 14:26:09'),
(71, 9, 'P007', 'ini hasil df', 63, '2018-11-27 14:26:10'),
(72, 9, 'P002', 'Gagal Ginjal Kronik', 93.8893, '2018-11-27 14:28:55'),
(73, 9, 'P007', 'ini hasil df', 63, '2018-11-27 14:28:55'),
(74, 9, 'P002', 'Gagal Ginjal Kronik', 93.8893, '2018-11-27 14:34:22'),
(75, 9, 'P007', 'ini hasil df', 63, '2018-11-27 14:34:22'),
(76, 9, 'P002', 'Gagal Ginjal Kronik', 93.8893, '2018-11-27 14:34:30'),
(77, 9, 'P007', 'ini hasil df', 63, '2018-11-27 14:34:30'),
(78, 9, 'P002', 'Gagal Ginjal Kronik', 93.8893, '2018-11-27 14:36:02'),
(79, 9, 'P007', 'ini hasil df', 63, '2018-11-27 14:36:02'),
(80, 9, 'P002', 'Gagal Ginjal Kronik', 93.8893, '2018-11-27 14:36:54'),
(81, 9, 'P007', 'ini hasil df', 63, '2018-11-27 14:36:54'),
(82, 9, 'P002', 'Gagal Ginjal Kronik', 93.8893, '2018-11-27 14:37:09'),
(83, 9, 'P007', 'ini hasil df', 63, '2018-11-27 14:37:09'),
(84, 9, 'P002', 'Gagal Ginjal Kronik', 93.8893, '2018-11-27 14:37:46'),
(85, 9, 'P007', 'ini hasil df', 63, '2018-11-27 14:37:46'),
(86, 9, 'P002', 'Gagal Ginjal Kronik', 93.0299, '2018-11-27 14:51:29'),
(87, 9, 'P007', 'ini hasil df', 64, '2018-11-27 14:51:29'),
(88, 9, 'P002', 'Gagal Ginjal Kronik', 93.8984, '2018-11-27 14:56:32'),
(89, 9, 'P007', 'ini hasil df', 91, '2018-11-27 14:56:32'),
(90, 10, 'P002', 'Gagal Ginjal Kronik', 93.8984, '2018-11-27 15:01:36'),
(91, 10, 'P007', 'ini hasil df', 83, '2018-11-27 15:01:36'),
(92, 10, 'P002', 'Gagal Ginjal Kronik', 89.0796, '2018-11-27 15:03:52'),
(93, 10, 'P007', 'ini hasil df', 91, '2018-11-27 15:03:52'),
(94, 10, 'P002', 'Gagal Ginjal Kronik', 89.0796, '2018-11-27 15:08:20'),
(95, 10, 'P007', 'ini hasil df', 91, '2018-11-27 15:08:20'),
(96, 10, 'P002', 'Gagal Ginjal Kronik', 93.8984, '2018-11-27 15:08:55'),
(97, 10, 'P007', 'ini hasil df', 91, '2018-11-27 15:08:55'),
(98, 10, 'P002', 'Gagal Ginjal Kronik', 89.0796, '2018-11-27 15:16:33'),
(99, 10, 'P007', 'ini hasil df', 91, '2018-11-27 15:16:33'),
(100, 10, 'P002', 'Gagal Ginjal Kronik', 93.8984, '2018-11-27 15:17:24'),
(101, 10, 'P007', 'ini hasil df', 91, '2018-11-27 15:17:24'),
(102, 10, 'P002', 'Gagal Ginjal Kronik', 93.8984, '2018-11-27 15:17:53'),
(103, 10, 'P007', 'ini hasil df', 91, '2018-11-27 15:17:53'),
(104, 10, 'P001', 'Gagal Ginjal Akut', 6.00672, '2018-11-27 15:18:39'),
(105, 10, 'P007', 'ini hasil df', 91, '2018-11-27 15:18:39'),
(106, 10, 'P001', 'Gagal Ginjal Akut', 7.872, '2018-11-27 15:19:11'),
(107, 10, 'P007', 'ini hasil df', 91, '2018-11-27 15:19:11'),
(108, 10, 'P001', 'Gagal Ginjal Akut', 7.872, '2018-11-27 15:20:22'),
(109, 10, 'P007', 'ini hasil df', 91, '2018-11-27 15:20:22'),
(110, 10, 'P001', 'Gagal Ginjal Akut', 7.872, '2018-11-27 15:20:55'),
(111, 10, 'P007', 'ini hasil df', 91, '2018-11-27 15:20:55'),
(112, 10, 'P001', 'Gagal Ginjal Akut', 99.64, '2018-11-27 15:22:01'),
(113, 10, 'P007', 'ini hasil df', 91, '2018-11-27 15:22:01'),
(114, 10, 'P003', 'Kista Ginjal', 88, '2018-11-27 15:23:46'),
(115, 10, 'P007', 'ini hasil df', 42, '2018-11-27 15:23:46'),
(116, 10, 'P006', 'Nefritis akut', 70, '2018-11-27 15:26:14'),
(117, 10, 'P007', 'ini hasil df', 92, '2018-11-27 15:26:14');

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
(59, 38, 11, 0.5, 0.5),
(60, 43, 11, 0.8, 0.2),
(61, 48, 11, 0.6, 0.4),
(62, 49, 11, 0.7, 0.3),
(63, 34, 12, 0.8, 0.01),
(64, 35, 12, 0.8, 0.01),
(65, 37, 12, 0.7, 0.02),
(66, 39, 12, 0.8, 0.01),
(67, 43, 12, 0.8, 0.01),
(68, 44, 12, 0.8, 0.01),
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
(80, 34, 14, 0.6, 0.03),
(81, 40, 14, 0.8, 0.01),
(82, 41, 14, 0.6, 0.03),
(83, 46, 14, 0.6, 0.03),
(84, 47, 14, 0.8, 0.01),
(85, 58, 14, 0.7, 0.02),
(87, 35, 15, 0.7, 0.02),
(88, 36, 15, 0.8, 0.01),
(89, 39, 15, 0.7, 0.02),
(90, 43, 15, 0.8, 0.01),
(91, 47, 15, 0.8, 0.01),
(92, 48, 15, 0.6, 0.03),
(93, 49, 15, 0.7, 0.02),
(94, 56, 15, 0.6, 0.03),
(95, 57, 15, 0.8, 0.01),
(96, 58, 15, 0.7, 0.02),
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
(125, 44, 17, 0.8, 0.01),
(126, 58, 17, 0.7, 0.02),
(127, 59, 17, 0.6, 0.03);

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
(10, 'astuti triana', 'P', '21', 'jl. rajawali 2 no 8', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(11, 'nani astuti triana', 'P', '21', 'jl. rajawali 2 no 8', 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'admin');

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
  MODIFY `id_hasilcf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT untuk tabel `tb_hasilds`
--
ALTER TABLE `tb_hasilds`
  MODIFY `id_hasilds` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
