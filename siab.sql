-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2015 at 07:09 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siab`
--

-- --------------------------------------------------------

--
-- Table structure for table `siab_about`
--

CREATE TABLE IF NOT EXISTS `siab_about` (
  `id_about` int(11) NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siab_about`
--

INSERT INTO `siab_about` (`id_about`, `isi`) VALUES
(1, '<p>Aplikasi SIAB (Sistem Informasi Assessment Bencana) adalah aplikasi berbasis website yang ditujukan</p><p>untuk melakukan pendataan (<span style="font-style: italic;">Assessment</span>) awal bencana di daerah Gunungkidul Yogyakarta.</p><p><br></p><p>Aplikasi ini dibuat oleh Haris Sudrajat (TSR PMI Kabupaten Gunungkidul).<br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `siab_artikel_prb`
--

CREATE TABLE IF NOT EXISTS `siab_artikel_prb` (
`id_artikel` int(11) NOT NULL,
  `judul` varchar(250) DEFAULT NULL,
  `isi` text,
  `tgl_post` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siab_artikel_prb`
--

INSERT INTO `siab_artikel_prb` (`id_artikel`, `judul`, `isi`, `tgl_post`) VALUES
(4, 'Longsor Nglambor', '<p><span style="font-weight: bold;">Yogyakarta </span>- Peristiwa tebing longsor di Pantai Sadranan, Tepus, Gunungkidul, DIY menyisakan duka. Seorang korban yang selamat dari peristiwa nahas tersebut tergolek lemas di rumah sakit.</p><p>Karsiyem (40), korban tebing longsor menjalani perawatan intensif di RSUD Wonosari, Gunungkidul. Ia baru siuman pagi tadi pukul 05.30 WIB. Korban saat kejadian berada di dekat lokasi runtuh. Dia kemudian tertimpa reruntuhan tebing. Korban mengalami luka dan akan dioperasi. Karsiyem merupakan warga Karangmojo, Gunungkidul.</p><p>Putri korban, Siska Dewi Novitasari (19) mengatakan kondisi ibunya sudah siuman. Namun takut jika mendengar suara ambulance. Korban dirawat intensif di ruang anggrek RSUD Wonosari.</p><p>"Ibu bilang sekarang takut ke pantai lagi. Terus kalau dengar suara ambulance juga takut,"kata Siska di RSUD Wonosari, Gunungkidul, DIY, Kamis (18/6/2015).</p><p>Saat kejadian, Karsiyem memang sedang melakukan tradisi padusan bersama keluarganya. Rombongannya saat itu sebanyak 13 orang. Yang terkena reruntuhan longsor hanya Karsiyem, karena yang lain sedang bermain air di laut. Sementara Karsiyem berada di sekitar tebing.</p><p>"Suara longsor keras sekali, seperti suara bom gitu. Boomm, langsung runtuh,"kata Siska.</p><p><br></p>', '2015-06-18'),
(6, 'asasas', '<p>asasasas</p><p><br></p><img src="http://aqvatarius.com/themes/atlant/html/assets/images/blog/post_1.jpg" style="width: 667px;"><p><br></p>', '2015-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `siab_assesment`
--

CREATE TABLE IF NOT EXISTS `siab_assesment` (
`id_assesment` int(11) NOT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `lokasi_bencana` text,
  `kecamatan` varchar(200) DEFAULT NULL,
  `jenis_bencana` int(11) DEFAULT NULL,
  `nm_bencana` text,
  `inten_kejadian` text,
  `waktu` time DEFAULT NULL,
  `tgl_kejadian` date DEFAULT NULL,
  `sarana_umum` text,
  `ket_umum` text,
  `meninggal` int(11) DEFAULT '0',
  `lk_berat` int(11) DEFAULT '0',
  `lk_ringan` int(11) DEFAULT '0',
  `hilang` int(11) DEFAULT '0',
  `rmh_hancur` int(11) DEFAULT '0',
  `rmh_berat` int(11) DEFAULT '0',
  `rmh_ringan` int(11) DEFAULT '0',
  `akses_jalan` int(11) DEFAULT '0',
  `akses_jembatan` int(11) DEFAULT '0',
  `akses_transport` int(11) DEFAULT '0',
  `ket_kerusakan` text,
  `pengungsian` varchar(200) DEFAULT NULL,
  `almt_pengungsi` text,
  `pengungsi_l` int(11) DEFAULT '0',
  `pengungsi_p` int(11) DEFAULT '0',
  `nm_kontak` varchar(200) DEFAULT NULL,
  `hp_kontak` varchar(18) DEFAULT NULL,
  `jab_kontak` varchar(200) DEFAULT NULL,
  `ket_pengungsi` text,
  `tmbh_keb1` varchar(200) DEFAULT NULL,
  `jml_keb1` int(11) DEFAULT '0',
  `tmbh_keb2` varchar(200) DEFAULT NULL,
  `jml_keb2` int(11) DEFAULT '0',
  `tmbh_keb3` varchar(200) DEFAULT NULL,
  `jml_keb3` int(11) DEFAULT '0',
  `tmbh_keb4` varchar(200) DEFAULT NULL,
  `jml_keb4` int(11) DEFAULT '0',
  `tmbh_keb5` varchar(200) DEFAULT NULL,
  `jml_keb5` int(11) DEFAULT '0',
  `ket_keb` text
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siab_assesment`
--

INSERT INTO `siab_assesment` (`id_assesment`, `lat`, `lng`, `lokasi_bencana`, `kecamatan`, `jenis_bencana`, `nm_bencana`, `inten_kejadian`, `waktu`, `tgl_kejadian`, `sarana_umum`, `ket_umum`, `meninggal`, `lk_berat`, `lk_ringan`, `hilang`, `rmh_hancur`, `rmh_berat`, `rmh_ringan`, `akses_jalan`, `akses_jembatan`, `akses_transport`, `ket_kerusakan`, `pengungsian`, `almt_pengungsi`, `pengungsi_l`, `pengungsi_p`, `nm_kontak`, `hp_kontak`, `jab_kontak`, `ket_pengungsi`, `tmbh_keb1`, `jml_keb1`, `tmbh_keb2`, `jml_keb2`, `tmbh_keb3`, `jml_keb3`, `tmbh_keb4`, `jml_keb4`, `tmbh_keb5`, `jml_keb5`, `ket_keb`) VALUES
(3, -7.966165578792661, 110.59649860475463, 'Siyono', 'Playen', 1, 'Kucing', 'asasa', '23:00:15', '2015-06-16', '1', 'asasas', 0, 0, 0, 0, NULL, NULL, NULL, 1, 1, 1, '', '', '', 0, 0, '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, ''),
(5, -7.962340451610284, 110.59338724229735, 'Logandeng', 'Playen', 1, 'Tikus', 'd', '23:00:15', '2015-06-16', '5', 'f', 1, 2, 3, 4, 0, 0, 0, 1, 0, 1, '', 'h', 'i', 1, 2, 'Haris', '1234567890', 'qwertyuio', 'asasasas', 'sempak', 1000, '', 0, '', 0, '', 0, '', 0, ''),
(6, -8.145358996904006, 110.6040570697586, 'Pantai Sadranan, Dusun Pulegundes, Desa Sidoharjo, Kecamatan Tepus, Kab Gunungkidul,', 'Tepus', 1, 'Tebing Longsor', '', '14:00:00', '2015-06-14', '1', 'Tebing menimpa wisatawan', 4, 2, 0, 0, 0, 0, 0, 1, 1, 1, '', '', '', 0, 0, '', '', '', '', 'Alat Berat', 2, 'Kantong Jenazah', 10, 'Ambulans', 3, 'Makanan', 100, '', 0, 'Perlu pengamanan'),
(7, -7.97307196790488, 110.59454595659179, 'asas', 'asas', 0, '', '', '22:40:30', '0000-00-00', '5', '', 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, '', '', '', 0, 0, '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, ''),
(8, 0, 0, '0', '0', 0, '0', '0', '00:00:00', '0000-00-00', '', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', '0', 0, 0, '0', '0', '0', '0', '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0'),
(9, 0, 0, '', '', 0, '', '', '23:05:30', '0000-00-00', ' Lapangan, Sekolah, Balai Desa, Tempat Ibadah,', '', 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, '', '', '', 0, 0, '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `siab_contact`
--

CREATE TABLE IF NOT EXISTS `siab_contact` (
  `id_contact` int(5) NOT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `no_telp_1` varchar(20) DEFAULT NULL,
  `no_telp_2` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siab_contact`
--

INSERT INTO `siab_contact` (`id_contact`, `alamat`, `no_telp_1`, `no_telp_2`, `email`, `website`) VALUES
(2, 'Jl. Nusa Indah No. 3, Wonosari, Gunungkidul, D.I.Y', '1', '(0274) 391 244', 'pmi@pmi-gunungkidul.or.id', 'http://www.pmi-gunungkidul.or.id');

-- --------------------------------------------------------

--
-- Table structure for table `siab_inbox`
--

CREATE TABLE IF NOT EXISTS `siab_inbox` (
`id_inbox` int(10) NOT NULL,
  `tgl_post` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `subjek` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `hp` varchar(20) DEFAULT NULL,
  `isi` longtext
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siab_inbox`
--

INSERT INTO `siab_inbox` (`id_inbox`, `tgl_post`, `waktu`, `subjek`, `nama`, `email`, `hp`, `isi`) VALUES
(1, '2015-07-05', '08:07:09', 'Siab Gunungkidul', 'Haris Sudrajat', 'harizt.sudrajat@gmail.com', '085729998513', 'Pesasaan'),
(2, '2015-07-05', '09:07:36', 'er', 'as', 'asik@asik.com', 'wq', 'zx'),
(3, '2015-07-05', '09:07:44', '12', '12', 'asik@asik.com', '12', '12');

-- --------------------------------------------------------

--
-- Table structure for table `siab_petugas`
--

CREATE TABLE IF NOT EXISTS `siab_petugas` (
`id_petugas` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `no_hp` varchar(18) DEFAULT NULL,
  `tmp_lahir` varchar(200) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` int(1) DEFAULT NULL,
  `alamat` text,
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `jabatan` int(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siab_petugas`
--

INSERT INTO `siab_petugas` (`id_petugas`, `nama`, `email`, `no_hp`, `tmp_lahir`, `tgl_lahir`, `jk`, `alamat`, `user`, `pass`, `jabatan`) VALUES
(1, 'Haris Sudrajat', 'h@r.com', '081qwqwqw', 'Lombok Timur', '2015-07-14', 1, '        gunungkidul    ', 'admin', 'admin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `siab_sent`
--

CREATE TABLE IF NOT EXISTS `siab_sent` (
`id_sent` int(10) NOT NULL,
  `penerima` varchar(100) DEFAULT NULL,
  `subjek` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `isi` longtext,
  `waktu` time DEFAULT NULL,
  `tgl_sent` time DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siab_sent`
--

INSERT INTO `siab_sent` (`id_sent`, `penerima`, `subjek`, `email`, `isi`, `waktu`, `tgl_sent`) VALUES
(1, 'harizt.sudrajat@gmail.com', 'Replay - Siab Gunungkidul', 'harizt.sudrajat@gmail.com', 'coba pesan ini', '08:07:17', '00:20:15'),
(2, 'harizt.sudrajat@gmail.com', 'Replay - Siab Gunungkidul', 'harizt.sudrajat@gmail.com', 'asasasasa', '08:07:35', '00:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `siab_tipe`
--

CREATE TABLE IF NOT EXISTS `siab_tipe` (
`id_tipe` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siab_tipe`
--

INSERT INTO `siab_tipe` (`id_tipe`, `nama`) VALUES
(1, 'Bencana Alam'),
(2, 'Konflik ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siab_artikel_prb`
--
ALTER TABLE `siab_artikel_prb`
 ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `siab_assesment`
--
ALTER TABLE `siab_assesment`
 ADD PRIMARY KEY (`id_assesment`);

--
-- Indexes for table `siab_inbox`
--
ALTER TABLE `siab_inbox`
 ADD PRIMARY KEY (`id_inbox`), ADD KEY `id_inbox` (`id_inbox`);

--
-- Indexes for table `siab_petugas`
--
ALTER TABLE `siab_petugas`
 ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siab_sent`
--
ALTER TABLE `siab_sent`
 ADD PRIMARY KEY (`id_sent`);

--
-- Indexes for table `siab_tipe`
--
ALTER TABLE `siab_tipe`
 ADD PRIMARY KEY (`id_tipe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siab_artikel_prb`
--
ALTER TABLE `siab_artikel_prb`
MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `siab_assesment`
--
ALTER TABLE `siab_assesment`
MODIFY `id_assesment` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `siab_inbox`
--
ALTER TABLE `siab_inbox`
MODIFY `id_inbox` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `siab_petugas`
--
ALTER TABLE `siab_petugas`
MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `siab_sent`
--
ALTER TABLE `siab_sent`
MODIFY `id_sent` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `siab_tipe`
--
ALTER TABLE `siab_tipe`
MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
