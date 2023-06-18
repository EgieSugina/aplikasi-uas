-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2023 pada 13.20
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_personal_egiesugina`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `about`) VALUES
(20, '<h1><img alt=\"\" src=\"./images/upload/648ee6eb56393_bi1.jpg\" style=\"float:left; height:233px; margin-right:10px; width:350px\" />About&nbsp;<img alt=\"laugh\" src=\"http://localhost/uas_egiesugina_d1a220400/personal_web_egiesugina/scripts/plugins/smiley/images/teeth_smile.png\" style=\"height:23px; width:23px\" title=\"laugh\" /></h1>\r\n\r\n<p>Selamat datang di personal web saya!<br />\r\nIni adalah proyek yang saya buat untuk memenuhi UAS pelajaran Developing <strong>Web Applications Using PHP</strong>. Saya sangat bersemangat untuk berbagi pengalaman dan pengetahuan saya tentang pengembangan web dengan Mahasiswa Lainnya.</p>\r\n\r\n<p>Saya percaya bahwa web adalah platform yang luar biasa untuk berbagi informasi, terhubung dengan orang-orang, dan menciptakan pengalaman yang menakjubkan. Melalui proyek ini, saya ingin menunjukkan kemampuan saya dalam mengembangkan aplikasi web yang fungsional dan menarik menggunakan PHP.</p>\r\n\r\n<p>Dalam perjalanan saya sebagai pengembang web, saya telah belajar banyak tentang HTML, CSS, JavaScript, dan tentu saja, PHP. Saya terus berusaha meningkatkan keterampilan saya dan selalu mencari cara baru untuk membuat proyek web yang lebih baik.</p>\r\n\r\n<p>Terima kasih telah mengunjungi personal web saya. Saya harap Anda menikmati mengexplore konten yang telah saya siapkan. Jika Anda memiliki pertanyaan atau masukan, jangan ragu untuk menghubungi saya. Saya senang bisa berinteraksi dengan Anda.</p>\r\n\r\n<p>Selamat menikmati pengalaman menjelajahi personal web saya!<br />\r\n[D1A220400 - Egie Sugina]</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(5) NOT NULL,
  `nama_artikel` text NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `nama_artikel`, `isi_artikel`) VALUES
(6, 'Kimetsu no Yaiba: Katanakaji no Sato-hen', '<h3><strong>Kimetsu no Yaiba: Katanakaji no Sato-hen A</strong></h3>\r\n\r\n<h4><span style=\"color:#7f8c8d\"><strong>Demon Slayer: Kimetsu no Yaiba Swordsmith Village Arc</strong></span></h4>\r\n\r\n<p>For centurie<img alt=\"\" src=\"./images/upload/648a29c1b7982_135099.jpg\" style=\"float:left; height:141px; margin-right:10px; width:100px\" />s, the Demon Slayer Corps has sacredly kept the location of Swordsmith Village a secret. As the village of the greatest forgers, it provides Demon Slayers with the finest weapons, which allow them to fight night-crawling fiends and ensure the safety of humans. After his sword was chipped and deemed useless, Tanjirou Kamado, along with his precious little sister Nezuko, is escorted to the village to receive a new one.<br />\r\n<br />\r\nMeanwhile, the death of an Upper Rank Demon disturbs the idle order in the demon world. As Tanjirou becomes acquainted with Mist Hashira Muichirou Tokitou and Love Hashira Mitsuri Kanroji, ferocious powers creep from the shadows and threaten to shatter the Demon Slayers&#39; greatest line of defense.</p>\r\n'),
(7, 'Oshi no Ko', '<h3><img alt=\"\" src=\"./images/upload/648a2d70273d3_134736.jpg\" style=\"float:left; height:141px; margin-right:10px; width:100px\" /><strong>Oshi no Ko</strong></h3>\r\n\r\n<h4><span style=\"color:#7f8c8d\"><strong>[Oshi No Ko]</strong></span></h4>\r\n\r\n<p>In the entertainment world, celebrities often show exaggerated versions of themselves to the public, concealing their true thoughts and struggles beneath elaborate lies. Fans buy into these fabrications, showering their idols with undying love and support, until something breaks the illusion. Sixteen-year-old rising star Ai Hoshino of pop idol group B Komachi has the world captivated; however, when she announces a hiatus due to health concerns, the news causes many to become worried.<br />\r\n<br />\r\nAs a huge fan of Ai, gynecologist Gorou Amemiya cheers her on from his countryside medical practice, wishing he could meet her in person one day. His wish comes true when Ai shows up at his hospital&mdash;not sick, but pregnant with twins! While the doctor promises Ai to safely deliver her children, he wonders if this encounter with the idol will forever change the nature of his relationship with her.</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(5) NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `gambar`, `deskripsi`) VALUES
(10, 'FZ12BlWagAAdsds.jpg', '                                                                                                                                                                                                                                                                Cute Anime Annaouncement                                                                                                                                                                                                                                                                ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
