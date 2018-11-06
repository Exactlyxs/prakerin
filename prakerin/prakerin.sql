-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 08:04 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakerin`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `id_kelompok` int(11) NOT NULL,
  `nisn` varchar(11) NOT NULL,
  `nama_siswa` varchar(200) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `rombel_saat_ini` varchar(10) NOT NULL,
  `id_magang` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id_kelompok`, `nisn`, `nama_siswa`, `jenis_kelamin`, `rombel_saat_ini`, `id_magang`) VALUES
(4, '0017350680', '', 'L', '', 124);

-- --------------------------------------------------------

--
-- Table structure for table `magang`
--

CREATE TABLE `magang` (
  `id_magang` int(11) NOT NULL,
  `nama_magang` varchar(150) NOT NULL,
  `alamat_magang` varchar(150) NOT NULL,
  `deskripsi_magang` varchar(300) NOT NULL,
  `kapasitas_magang` int(11) NOT NULL,
  `genre` set('RPL','TKJ','MM','PKS','BCT','ANM','DI','KI') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Untuk data tempat magang';

--
-- Dumping data for table `magang`
--

INSERT INTO `magang` (`id_magang`, `nama_magang`, `alamat_magang`, `deskripsi_magang`, `kapasitas_magang`, `genre`) VALUES
(123, 'Menara Pandang', 'Jalan apakah barang mauk', 'urng pro ja kesini', 5, ''),
(124, 'sekolah', 'Menara pandang disiring tuna adalo paling ganal, pasti tahu ja sorang baapa btakun pulang', 'orng pro ja ea', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `id_kelompok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nama_siswa` varchar(50) NOT NULL,
  `nipd` bigint(11) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `nisn` varchar(11) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik` bigint(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `rt` int(11) DEFAULT NULL,
  `rw` int(11) DEFAULT NULL,
  `dusun` varchar(15) DEFAULT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kode_pos` int(11) DEFAULT NULL,
  `jenis_tinggal` set('Bersama orang tua','Wali','Panti Asuhan','') DEFAULT NULL,
  `alat_transportasi` varchar(30) DEFAULT NULL,
  `telepon` bigint(11) DEFAULT NULL,
  `hp` bigint(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `skhun` varchar(30) DEFAULT NULL,
  `penerima_kps` set('Ya','Tidak') DEFAULT NULL,
  `no.kps` varchar(50) DEFAULT NULL,
  `nama_ayah` varchar(40) DEFAULT NULL,
  `tahun_lahir_ayah` int(11) DEFAULT NULL,
  `jenjang_pendidikan_ayah` varchar(20) DEFAULT NULL,
  `pekerjaan_ayah` varchar(30) DEFAULT NULL,
  `penghasilan_ayah` varchar(200) DEFAULT NULL,
  `nik_ayah` bigint(11) DEFAULT NULL,
  `nama_ibu` varchar(40) DEFAULT NULL,
  `tahun_lahir_ibu` int(11) DEFAULT NULL,
  `jenjang_pendidikan_ibu` varchar(20) DEFAULT NULL,
  `pekerjaan_ibu` varchar(30) DEFAULT NULL,
  `penghasilan_ibu` varchar(200) DEFAULT NULL,
  `nik_ibu` bigint(11) DEFAULT NULL,
  `nama_wali` varchar(30) DEFAULT NULL,
  `tahun_lahir_wali` int(11) DEFAULT NULL,
  `jenjang_pendidikan_wali` varchar(20) DEFAULT NULL,
  `pekerjaan_wali` varchar(50) DEFAULT NULL,
  `penghasilan_wali` varchar(200) DEFAULT NULL,
  `nik_wali` bigint(11) DEFAULT NULL,
  `rombel_saat_ini` varchar(10) NOT NULL,
  `no_peserta_ujian` varchar(50) DEFAULT NULL,
  `no_seri_ijazah` varchar(40) DEFAULT NULL,
  `penerima_kip` set('Tidak','Ya') DEFAULT NULL,
  `nomor_kip` bigint(11) DEFAULT NULL,
  `nama_di_kip` varchar(50) DEFAULT NULL,
  `nomor_kks` varchar(15) DEFAULT NULL,
  `no_reg_akta_lahir` varchar(30) DEFAULT NULL,
  `bank` varchar(10) DEFAULT NULL,
  `no_rek_bank` bigint(11) DEFAULT NULL,
  `rekening_atas_nama` varchar(50) DEFAULT NULL,
  `layak_pip` set('Ya','Tidak') DEFAULT NULL,
  `alasan_layak_pip` varchar(50) DEFAULT NULL,
  `kebutuhan_khusus` varchar(50) NOT NULL,
  `sekolah_asal` varchar(50) DEFAULT NULL,
  `anak_ke_berapa` int(11) DEFAULT NULL,
  `bio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='untuk data siswa';

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nama_siswa`, `nipd`, `jenis_kelamin`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `nik`, `agama`, `alamat`, `rt`, `rw`, `dusun`, `kelurahan`, `kecamatan`, `kode_pos`, `jenis_tinggal`, `alat_transportasi`, `telepon`, `hp`, `email`, `skhun`, `penerima_kps`, `no.kps`, `nama_ayah`, `tahun_lahir_ayah`, `jenjang_pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nik_ayah`, `nama_ibu`, `tahun_lahir_ibu`, `jenjang_pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `nik_ibu`, `nama_wali`, `tahun_lahir_wali`, `jenjang_pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `nik_wali`, `rombel_saat_ini`, `no_peserta_ujian`, `no_seri_ijazah`, `penerima_kip`, `nomor_kip`, `nama_di_kip`, `nomor_kks`, `no_reg_akta_lahir`, `bank`, `no_rek_bank`, `rekening_atas_nama`, `layak_pip`, `alasan_layak_pip`, `kebutuhan_khusus`, `sekolah_asal`, `anak_ke_berapa`, `bio`) VALUES
('M. Sulthona Sukmini', NULL, 'P', '0007350680', 'Banjarmasin', '2001-09-01', 1920129102912091, 'Isla,', 'Jln. Padat Karya Komp. Perdana Mandiri No. 07', NULL, NULL, NULL, 'Sungai Andai', 'Banjarmasin Utara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Berkebutuhan Dia', NULL, NULL, 'Kontol'),
('M. Sulthoni Sukma', NULL, 'L', '0017350680', 'Banjarmasin', '2001-09-01', 1920129102912091, 'Islam', 'Jln. Padat Karya Komp. Perdana Mandiri No. 07', NULL, NULL, NULL, 'Sungai Andai', 'Banjarmasin Utara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Berkebutuhan Dia', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(50) NOT NULL COMMENT 'untuk siswa nisn, untuk guru idnya',
  `katasandi` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `role` enum('0','1','2','3','4') NOT NULL,
  `jurusan` enum('RPL','TKJ','MM','BCT','ANM','PKS','DI','KI') DEFAULT NULL,
  `onoff` enum('online','offline') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `katasandi`, `nama`, `role`, `jurusan`, `onoff`) VALUES
('0007350680', 'tes123', 'M. Sulthoni Sukma', '0', NULL, 'online');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id_kelompok`),
  ADD KEY `fk_magang` (`id_magang`),
  ADD KEY `fk_nisn_user` (`nisn`);

--
-- Indexes for table `magang`
--
ALTER TABLE `magang`
  ADD PRIMARY KEY (`id_magang`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `fk_user` (`id_user`),
  ADD KEY `fk_kelompok` (`id_kelompok`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id_kelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `magang`
--
ALTER TABLE `magang`
  MODIFY `id_magang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD CONSTRAINT `fk_magang` FOREIGN KEY (`id_magang`) REFERENCES `magang` (`id_magang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nisn` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `fk_kelompok` FOREIGN KEY (`id_kelompok`) REFERENCES `kelompok` (`id_kelompok`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `siswa` (`nisn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
