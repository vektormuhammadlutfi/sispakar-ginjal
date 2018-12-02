-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Sep 2018 pada 01.49
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
(4, 1, 'G001', 'Berkurangnya produksi urine saat buang air kecil'),
(5, 1, 'G002', 'Mual dan muntah.'),
(6, 1, 'G003', 'Sesak napas.'),
(7, 1, 'G004', 'Nyeri pada perut.'),
(8, 2, 'G005', 'Tingginya tekanan darah.'),
(9, 1, 'G006', 'Dehidrasi.'),
(10, 1, 'G007', 'Nyeri pada punggung, di bawah tulang rusuk (flank pain).'),
(11, 2, 'G008', 'Hilangnya nafsu makan.'),
(12, 1, 'G009', 'Perasaan lemah dan lesu.'),
(13, 1, 'G010', 'Kram otot dan kejang otot.'),
(14, 1, 'G011', 'Gangguan tidur.'),
(15, 1, 'G012', 'Kulit gatal.'),
(16, 1, 'G013', 'Menurunnya ketajaman mental.'),
(17, 1, 'G014', 'Kemaluan terasa terbakar ketika buang air kecil'),
(18, 1, 'G015', 'Sering ingin buang air kecil, meskipun ternyata sedikit yang keluar'),
(19, 1, 'G016', 'nyeri atau tekanan dipunggung atau perut bagian bawah'),
(20, 1, 'G017', 'Kencing berdarah atau berwarna lebih gelap'),
(21, 1, 'G018', 'Demam '),
(22, 1, 'G019', 'Nyeri saat buang air kecil'),
(23, 1, 'G020', 'Warna urine keruh, pekat dan gelap'),
(24, 1, 'G021', 'Bau urine menyengat'),
(25, 1, 'G022', 'Mudah lelah.'),
(26, 1, 'G023', 'Muncul tonjolan pada perut.'),
(27, 1, 'G024', 'Ketidaknyamanan atau nyeri di perut atau sisi perut bagian atas'),
(28, 1, 'G025', 'Sakit pinggang, paha, selangkangan, dan kemaluan.'),
(29, 1, 'G026', 'Darah dalam urine'),
(30, 1, 'G027', 'sakit perut'),
(31, 2, 'G028', 'Kekurangan darah atau anemia.'),
(32, 1, 'G029', 'Nyeri pinggang.'),
(33, 1, 'G030', 'Menggigil ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasilcf`
--

CREATE TABLE `tb_hasilcf` (
  `id_hasilcf` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `kepercayaan` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'P001', 'Gagal Ginjal Akut (GGA)', '(a)	Memperbanyak konsumsi air putih untuk mencegah terjadinya dehidrasi.\r\n(b)	Menghentikan obat-obatan yang dapat memicu atau memperparah gagal ginjal akut.\r\n(c)	Berkonsultasi dengan dokter spesialis urologi atau spesialis ginjal apabila penyebab gagal ginjal akut tidak jelas, atau apabila terdeteksi adanya penyebab lain yang lebih serius.\r\n'),
(5, 'P002', 'Gagal Ginjal Kronik (GGK)', '(a)	Hindari makanan banyak mengandung kalium, fosfor, garam atau protein tinggi.\r\n(b)	Sangat penting untuk menjaga tekanan darah dan memeriksanya secara berkala.\r\n(c)	Obat yang bersifat diuretik dapat mencegah terjadinya penumpukan cairan dalam tubuh.\r\n(d)	Hentikan penggunaan obat-obatan tertentu yang dapat memicu kerusakan pada ginjal.\r\n(e)	Segera kedokter untuk melakukan transfusi darah apabila mengalami anemia.'),
(6, 'P003', 'Infeksi Saluran Kemih (ISK)', '(a)	Mengonsumsi dosis rendah antibiotik dalam periode yang lebih lama untuk membantu mencegah infeksi berulang\r\n(b)	Mengonsumsi antibiotik selama 1 atau 2 hari setiap gejala kali muncul\r\n(c)	Jangan tahan keinginan untuk kencing karena dengan mengosongkan kandung kemih, dapat mencegah bakteri untuk makin berkembang biak.\r\n(d)	Minum banyak air.\r\n(e)	Redakan nyeri dengan kompres hangat.\r\n'),
(7, 'P004', 'Kista Ginjal', '(a)	Olahraga teratur. \r\n(b)	Makan diet seimbang. \r\n(c)	Mengurangi stres. Stres dapat memicu atau memperburuk tanda-tanda dan gejala. \r\n'),
(8, 'P005', 'Batu Ginjal', '(a)	Banyak minum air, paling tidak 2-3 liter perhari\r\n(b)	Hubungi dokter Anda jika kondisi memburuk.\r\n'),
(10, 'P006', 'Kanker Ginjal', '(a)	Olahraga rutin.\r\n(b)	Tidur yang cukup\r\n(c)	Perbanyak istirahat dan bersantai\r\n(d)	Hubungi dokter jika melihat darah di air seni atau mengalami rasa nyeri atau pembengkakan di sekitar perut.\r\n');

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
(15, 4, 2, 0.7, 0.3),
(16, 5, 2, 0.3, 0.7),
(17, 6, 2, 0.8, 0.2),
(18, 7, 2, 0.8, 0.2),
(19, 8, 2, 0.8, 0.2),
(20, 9, 2, 0.8, 0.2),
(21, 10, 2, 0.8, 0.2),
(22, 11, 5, 0.8, 0.2),
(23, 12, 5, 0.8, 0.2),
(24, 13, 5, 0.5, 0.5),
(25, 14, 5, 0.7, 0.3),
(26, 15, 5, 0.6, 0.4),
(27, 16, 5, 0.6, 0.4),
(28, 5, 5, 0.8, 0.2),
(29, 6, 5, 0.8, 0.2),
(30, 8, 5, 0.6, 0.2),
(31, 5, 6, 0.6, 0.4),
(32, 17, 6, 0.8, 0.2),
(33, 18, 6, 0.8, 0.2),
(34, 19, 6, 0.8, 0.2),
(35, 20, 6, 0.6, 0.4),
(36, 21, 6, 0.7, 0.3),
(37, 22, 6, 0.8, 0.2),
(38, 23, 6, 0.6, 0.4),
(39, 24, 6, 0.8, 0.2),
(40, 14, 7, 0.7, 0.3),
(41, 21, 7, 0.8, 0.2),
(42, 25, 7, 0.7, 0.3),
(43, 26, 7, 0.4, 0.6),
(44, 27, 7, 0.6, 0.4),
(45, 5, 8, 0.3, 0.7),
(46, 22, 8, 0.4, 0.6),
(47, 24, 8, 0.5, 0.5),
(48, 28, 8, 0.6, 0.4),
(49, 29, 8, 0.8, 0.2),
(50, 21, 10, 0.4, 0.6),
(51, 31, 10, 0.8, 0.2),
(52, 30, 10, 0.8, 0.2),
(53, 32, 10, 0.8, 0.2),
(54, 33, 7, 0.8, 0.2);

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

--
-- Dumping data untuk tabel `tb_ruleds`
--

INSERT INTO `tb_ruleds` (`id`, `id_gejala`, `id_penyakit`, `bobot`) VALUES
(3, 4, 2, 0.7),
(4, 5, 2, 0.3),
(5, 6, 2, 0.8),
(6, 7, 2, 0.8),
(7, 8, 2, 0.8),
(8, 9, 2, 0.8),
(9, 10, 2, 0.8),
(10, 5, 5, 0.8),
(11, 6, 5, 0.8),
(12, 8, 5, 0.6),
(13, 11, 5, 0.8),
(14, 12, 5, 0.8),
(15, 13, 5, 0.5),
(16, 14, 5, 0.7),
(17, 15, 5, 0.6),
(18, 16, 5, 0.6),
(19, 5, 6, 0.6),
(20, 17, 6, 0.8),
(21, 18, 6, 0.8),
(22, 20, 6, 0.6),
(23, 21, 6, 0.7),
(24, 22, 6, 0.8),
(25, 23, 6, 0.8),
(26, 24, 6, 0.8),
(27, 14, 7, 0.7),
(28, 21, 7, 0.8),
(29, 25, 7, 0.7),
(30, 26, 7, 0.4),
(31, 27, 7, 0.6),
(32, 33, 7, 0.8),
(33, 5, 8, 0.3),
(34, 22, 8, 0.4),
(35, 24, 8, 0.5),
(36, 28, 8, 0.6),
(37, 29, 8, 0.8),
(38, 21, 10, 0.4),
(39, 30, 10, 0.8),
(40, 31, 10, 0.9),
(41, 32, 10, 0.8),
(42, 19, 6, 0.8);

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
(6, 'mila', 'P', '16', 'mila@gmail.com', 'mila', 'f562f7f28a039094f7b602c033f106a4', 'pasien');

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
  ADD KEY `id_penyakit` (`id_penyakit`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tb_hasilcf`
--
ALTER TABLE `tb_hasilcf`
  MODIFY `id_hasilcf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_rulecf`
--
ALTER TABLE `tb_rulecf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `tb_ruleds`
--
ALTER TABLE `tb_ruleds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `tb_hasilcf_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`),
  ADD CONSTRAINT `tb_hasilcf_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit` (`id_p`);

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
