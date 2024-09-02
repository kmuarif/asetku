-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2024 at 08:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asetku`
--

-- --------------------------------------------------------

--
-- Table structure for table `aplikasi`
--

CREATE TABLE `aplikasi` (
  `id_app` varchar(200) NOT NULL,
  `nama_app` varchar(200) DEFAULT NULL,
  `alamat_app` varchar(200) DEFAULT NULL,
  `jenis_app` varchar(200) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `bahasa` varchar(200) DEFAULT NULL,
  `framework` varchar(200) DEFAULT NULL,
  `basis_data` varchar(200) DEFAULT NULL,
  `pengembang` varchar(200) DEFAULT NULL,
  `tahun_buat` date DEFAULT NULL,
  `id_opd` varchar(20) DEFAULT NULL,
  `status_app` varchar(200) DEFAULT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aplikasi`
--

INSERT INTO `aplikasi` (`id_app`, `nama_app`, `alamat_app`, `jenis_app`, `deskripsi`, `bahasa`, `framework`, `basis_data`, `pengembang`, `tahun_buat`, `id_opd`, `status_app`, `deleted`) VALUES
('1', 'q', 'r', '2', 'rrr', 'e', 'r', 'r', NULL, NULL, NULL, NULL, 1),
('2', '3', '3', '2', 'r', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
('34', '3', '3', '3', '3', '3', '3', '3', '3', '2024-08-01', '28', NULL, 0),
('aa1', 'siap-gan', 'siapgan.grobogan.pro', 'AK', 'aplikasi kinerja ASN', 'php', 'Code Igniter 3', 'MySQL', 'Airlangga', '0000-00-00', '28', 'non aktif', 0),
('dff', 'r', 'r', 'r', 'f', 'f', 'ff', 'f', NULL, NULL, NULL, NULL, 0),
('e', 'reeee', NULL, 'r', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
('er', 'er', NULL, 'rr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
('r', 'e', NULL, 'r', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `aplikasi_detail`
--

CREATE TABLE `aplikasi_detail` (
  `id_app_detail` varchar(200) NOT NULL,
  `id_app` varchar(200) DEFAULT NULL,
  `lisensi` varchar(200) DEFAULT NULL,
  `bahasa` varchar(200) DEFAULT NULL,
  `kerangka` varchar(200) DEFAULT NULL,
  `basis_data` varchar(200) DEFAULT NULL,
  `pengembang` varchar(200) DEFAULT NULL,
  `tahun_buat` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aset`
--

CREATE TABLE `aset` (
  `id_aset` varchar(255) NOT NULL,
  `kode_aset` text DEFAULT NULL,
  `nama_aset` text DEFAULT NULL,
  `tanggal_pembelian` date DEFAULT NULL,
  `supplier` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `id_kategori` text DEFAULT NULL,
  `status_aset` text DEFAULT NULL,
  `no_urut` int(11) DEFAULT NULL,
  `serial_number` varchar(100) DEFAULT NULL,
  `merk` varchar(100) DEFAULT NULL,
  `harga_beli` varchar(100) DEFAULT NULL,
  `site` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aset`
--

INSERT INTO `aset` (`id_aset`, `kode_aset`, `nama_aset`, `tanggal_pembelian`, `supplier`, `deskripsi`, `deleted`, `id_kategori`, `status_aset`, `no_urut`, `serial_number`, `merk`, `harga_beli`, `site`) VALUES
('ast-5fff2651f2338', 'AST13012021001', 'macbook air', '2021-01-01', 'Ibox Indonesia', 'ram 8gb ssd 500gb tahun 2015', 0, 'kt-5ffecf0d69e66', 'used', 1, 'a1', 'hitachi', '10000', '11'),
('ast-5fff267910e58', 'AST13012021002', 'LG 32 inch', '2021-01-01', 'Pratama ', 'monitor 32 inchi', 0, 'kt-5ffeced4b44af', 'used', 2, 'a2', 'komatsu', '20000', '22'),
('ast-5fff26a41cce8', 'AST13012021003', 'hikvision 5MP', '2021-01-01', 'Hikvision indonesia', 'kamera cctv 5MP indoor', 0, 'kt-5ffeceb3b6e63', 'used', 3, 'a3', 'komatsu', '30000', '33'),
('ast-5fff275179d4b', 'AST13012021004', 'v2K8g6soNS', '2021-01-23', 'rtuSpBi1XU', 'mnbv', 1, 'kt-5ffeceb3b6e63', 'idle', 4, 'a4', 'isuzu', '40000', '44'),
('ast-5fffaef97c744', 'AST14012021005', 'CVrHbcJvrl', '2021-01-23', 'cddjiE0fuld3', 'mnbv', 1, 'kt-5ffeced4b44af', 'idle', 5, 'a5', 'hitachi', '30000', '55'),
('ast-66d1ff49131c7', 'GSK30082024006', '4', '2024-08-14', 'wer', '45', 0, 'kat-03', 'idle', 6, '45', '44', '43', 'MJT');

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id_departemen` varchar(255) NOT NULL,
  `departemen` text DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_departemen`, `departemen`, `deleted`) VALUES
('dep-asdasmk', 'PPIC', 0),
('dep-qweqwas', 'Produksi', 0),
('dept-5ff5c0e1e26a0', 'asdad', 1),
('dept-5ff5c1c090f1b', 'Accounting', 0),
('dept-5ff5c1c6c7b90', 'Purchasing', 0),
('dept-5ffc90dacf922', 'IT', 0),
('dept-5ffec6ffb097c', 'Marketing', 0),
('dept-5ffec719601f0', 'Supporting', 0),
('dept-5ffec72893e53', 'Development', 0),
('dept-5ffec731607c4', 'QIP', 0),
('dept-5ffec73a8ff53', 'Werehousek', 0),
('dept-5ffec7501f5cd', 'Engineering', 0),
('dept-5ffec763c5b5c', 'HRD', 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail_aset`
--

CREATE TABLE `detail_aset` (
  `id_detail` varchar(255) NOT NULL,
  `id_permintaan` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pic_admin` text DEFAULT NULL,
  `id_aset` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_aset`
--

INSERT INTO `detail_aset` (`id_detail`, `id_permintaan`, `tanggal`, `pic_admin`, `id_aset`) VALUES
('dt-5fff352ddc306', 'req-5fff3446a940e', '2021-01-13', 'ade rahmat nurdiyana', 'ast-5fff2651f2338'),
('dt-5fff36963c482', 'req-5fff3601c7453', '2021-01-13', 'ade rahmat nurdiyana', 'ast-5fff26a41cce8');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(255) NOT NULL,
  `kategori` text DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `deleted`) VALUES
('kat-02', 'server', 0),
('kat-03', 'Hardisk', 0),
('kt-5ffc94e6d4a57', 'printer', 1),
('kt-5ffc94ebe35d1', 'komputer', 1),
('kt-5ffeceb3b6e63', 'CCTV', 0),
('kt-5ffeced4b44af', 'Monitor', 0),
('kt-5ffecee369bb6', 'PC', 0),
('kt-5ffecef7ea396', 'Printer', 0),
('kt-5ffecf0d69e66', 'Komputer', 0),
('kt-66d1c853de80e', 'rere', 1),
('kt-66d1c8625039d', 'fdr', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi`
--

CREATE TABLE `kompetensi` (
  `id_kompetensi` varchar(20) NOT NULL,
  `nip` int(16) NOT NULL,
  `kompetensi_1` varchar(200) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kompetensi`
--

INSERT INTO `kompetensi` (`id_kompetensi`, `nip`, `kompetensi_1`, `deleted`) VALUES
('1', 11, 'Programmer', 0),
('2', 11, 'Database', 0),
('3', 11, 'Arsitektur', 0);

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` varchar(255) NOT NULL,
  `nama_layanan` varchar(200) DEFAULT NULL,
  `fungsi_layanan` text DEFAULT NULL,
  `pengelola` varchar(200) DEFAULT NULL,
  `nama_app` varchar(200) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `fungsi_layanan`, `pengelola`, `nama_app`, `deleted`) VALUES
('lyn11', 'Layanan Presensi Elektronik', 'Laporan kedisiplinan ASN', 'Diskominfo', 'Simpel Gan', 0),
('lyn12', 'Layanan Kinerja ASN', 'Laporan Kinerja ASN', 'Diskominfo', 'Siap Gan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `opd`
--

CREATE TABLE `opd` (
  `id_opd` varchar(20) NOT NULL,
  `nama_opd` text DEFAULT NULL,
  `nama_opd_pendek` varchar(200) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `opd`
--

INSERT INTO `opd` (`id_opd`, `nama_opd`, `nama_opd_pendek`, `deleted`) VALUES
('02', 'Sekretariat Daerah', 'Setda', 0),
('03', 'Sekretariat DPRD', 'Setwan', 0),
('04', 'Inspektorat', 'Inspektorat', 0),
('05', 'Badan Kepegawaian Pendidikan dan Pelatihan Daerah', 'BKPPD', 0),
('06', 'Dinas Pemberdayaan Perempuan, Perlindungan Anak dan KB', 'DP3AKB', 0),
('27', 'Dinas Perhubungan56', 'Dishub55', 1),
('28', 'Dinas Komunikasi dan Informatika', 'Diskominfo', 0),
('e', '3', 'r', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id_pengetahuan` varchar(255) NOT NULL,
  `nama_dokumen` varchar(200) DEFAULT NULL,
  `keterangan` text NOT NULL,
  `file` varchar(200) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengetahuan`
--

INSERT INTO `pengetahuan` (`id_pengetahuan`, `nama_dokumen`, `keterangan`, `file`, `deleted`) VALUES
('3455', 'Perbup SPBE', 'Kebijakan yang mengatur tata kelola SPBE', 'Tata Kelola SPBE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `perbaikan`
--

CREATE TABLE `perbaikan` (
  `id_perbaikan` varchar(255) NOT NULL,
  `id_aset` text DEFAULT NULL,
  `id_user` text DEFAULT NULL,
  `tanggal_perbaikan` date DEFAULT NULL,
  `status_perbaikan` text DEFAULT NULL,
  `tanggal_close` date DEFAULT NULL,
  `keterangan_perbaikan` text DEFAULT NULL,
  `tindakan_perbaikan` text DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `pic_perbaikan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perbaikan`
--

INSERT INTO `perbaikan` (`id_perbaikan`, `id_aset`, `id_user`, `tanggal_perbaikan`, `status_perbaikan`, `tanggal_close`, `keterangan_perbaikan`, `tindakan_perbaikan`, `deleted`, `pic_perbaikan`) VALUES
('pbk-6000769bb6b9c', 'ast-5fff26a41cce8', 'user-5ffc8cc362a33', '2021-01-14', 'close', NULL, 'kamera ngeblur dan lensa berjamur', 'ganti lensa', 0, 'ade rahmat nurdiyana'),
('pbk-600076ee9743b', 'ast-5fff26a41cce8', 'user-5ffc8cc362a33', '2021-01-14', 'open', NULL, 'wesxdrcfvgybhunjm', NULL, 1, NULL),
('pbk-60007c509dcef', 'ast-5fff2651f2338', 'user-5ffe2b25c5809', '2021-01-14', 'close', '2021-01-14', 'kibotnya pada copot dan lcdnya gelap', 'ganti kibot dan ganti lcd', 0, 'ade rahmat nurdiyana'),
('pbk-600095c8b0d66', 'ast-5fff2651f2338', 'user-5ffe2b25c5809', '2021-01-14', 'close', '2021-01-14', 'adasdnm', 'iuyuyiy', 0, 'ade rahmat nurdiyana');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `id_permintaan` varchar(255) NOT NULL,
  `id_user` text DEFAULT NULL,
  `tanggal_permintaan` date DEFAULT NULL,
  `approve` int(11) DEFAULT NULL,
  `status_permintaan` text DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `id_departemen` text DEFAULT NULL,
  `deskripsi_permintaan` text DEFAULT NULL,
  `no_permintaan` text DEFAULT NULL,
  `no_urut` int(11) DEFAULT NULL,
  `approve_by` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`id_permintaan`, `id_user`, `tanggal_permintaan`, `approve`, `status_permintaan`, `deleted`, `id_departemen`, `deskripsi_permintaan`, `no_permintaan`, `no_urut`, `approve_by`) VALUES
('req-5fff3446a940e', 'user-5ffe2b25c5809', '2021-01-13', 1, 'approved', 0, 'dep-asdasmk', 'laptop untuk kebutuhan design produk', 'REQ130121001', 1, 'maman'),
('req-5fff3601c7453', 'user-5ffc8cc362a33', '2021-01-13', 1, 'done', 0, 'dept-5ff5c1c090f1b', 'cctv untuk pemantauan berangkas uang', 'REQ130121002', 2, 'udin bahrudin'),
('req-5fff40e49fa18', 'user-5ffc8cc362a33', '2021-01-13', 1, 'approved', 0, 'dept-5ff5c1c090f1b', 'mnbv', 'REQ130121003', 3, 'udin bahrudin'),
('req-60003fbced748', 'user-5ffe2b25c5809', '2021-01-14', 1, 'approved', 0, 'dep-asdasmk', 'mobil', 'REQ140121004', 4, 'maman'),
('req-66c591f33b6c0', 'user-5ffe2b25c5809', '2024-08-21', 1, 'done', 0, 'dep-asdasmk', 'coba 12', 'REQ210824005', 5, 'maman'),
('req-66c5930c3856d', 'user-5ffc8cc362a33', '2024-08-21', 1, 'approved', 0, 'dept-5ff5c1c090f1b', 'coba lagi', 'REQ210824006', 6, 'udin bahrudin');

-- --------------------------------------------------------

--
-- Table structure for table `sdm`
--

CREATE TABLE `sdm` (
  `nip` varchar(16) NOT NULL,
  `nama_pegawai` varchar(200) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `kompetensi_1` varchar(200) DEFAULT NULL,
  `kompetensi_2` varchar(200) DEFAULT NULL,
  `kompetensi_3` varchar(200) DEFAULT NULL,
  `kompetensi_4` varchar(200) DEFAULT NULL,
  `kompetensi_5` varchar(200) DEFAULT NULL,
  `id_opd` varchar(100) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sdm`
--

INSERT INTO `sdm` (`nip`, `nama_pegawai`, `jabatan`, `kompetensi_1`, `kompetensi_2`, `kompetensi_3`, `kompetensi_4`, `kompetensi_5`, `id_opd`, `deleted`) VALUES
('11', 'Ali ashari', 'Pranata Komputer', 'Programmer', '22', '33', '44', '55', '28', 0),
('12', 'Baskoro Aji', 'Pranata Komputer', 'Database Administrator', NULL, NULL, NULL, NULL, '28', 0),
('13', 'Giri Adi', 'Pranata Komputer', 'Programmer', NULL, NULL, NULL, NULL, '28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(255) NOT NULL,
  `nama_lengkap` text DEFAULT NULL,
  `id_departemen` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `role` text DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `nik` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `id_departemen`, `username`, `password`, `role`, `deleted`, `nik`) VALUES
('user-5ff5ca7d9e428', 'KXfCRgDenO', 'dept-5ff5c1c090f1b', '1111', 'b59c67bf196a4758191e42f76670ceba', 'manager it', 1, '345435'),
('user-5ff5ca8f98765', 'udin bahrudin', 'dept-5ff5c1c090f1b', '4444', 'b59c67bf196a4758191e42f76670ceba', 'manager', 0, '231312'),
('user-5ffc834d008b5', 'R51TsqvjCb', 'dep-qweqwas', '2222', 'b59c67bf196a4758191e42f76670ceba', 'admin', 1, '67867'),
('user-5ffc89ab3b0f2', 'ade rahmat nurdiyana', 'dept-5ffc90dacf922', 'ade', 'b59c67bf196a4758191e42f76670ceba', 'admin', 0, '345345'),
('user-5ffc8cc362a33', 'rosalinda', 'dept-5ff5c1c090f1b', '3333', 'b59c67bf196a4758191e42f76670ceba', 'user', 0, '5756756'),
('user-5ffc914545765', 'asep nurdiansah', 'dept-5ffc90dacf922', 'asepnur', '21232f297a57a5a743894a0e4a801fc3', 'manager it', 0, '123123'),
('user-5ffe2b25c5809', 'leni', 'dep-asdasmk', 'leni', 'b59c67bf196a4758191e42f76670ceba', 'user', 0, '534535'),
('user-5ffe2b3760efd', 'maman', 'dep-asdasmk', 'maman', 'b59c67bf196a4758191e42f76670ceba', 'manager', 0, '2342342'),
('user-5ffec6e8ca38b', 'Winda', 'dept-5ff5c1c6c7b90', 'winda', 'b59c67bf196a4758191e42f76670ceba', 'user', 0, '523524'),
('user-5ffec7d51e03f', 'Ristha', 'dept-5ffec6ffb097c', 'ristha', 'b59c67bf196a4758191e42f76670ceba', 'user', 0, '68768'),
('user-5ffef90abc548', 'R409h8WSmu', 'dept-5ff5c1c6c7b90', 'EUMb9uri0M', 'b0c119173fa612a7028b74c91d86fc0f', 'manager it', 0, '999999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aplikasi`
--
ALTER TABLE `aplikasi`
  ADD PRIMARY KEY (`id_app`);

--
-- Indexes for table `aplikasi_detail`
--
ALTER TABLE `aplikasi_detail`
  ADD PRIMARY KEY (`id_app_detail`);

--
-- Indexes for table `aset`
--
ALTER TABLE `aset`
  ADD PRIMARY KEY (`id_aset`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `detail_aset`
--
ALTER TABLE `detail_aset`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD PRIMARY KEY (`id_kompetensi`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `opd`
--
ALTER TABLE `opd`
  ADD PRIMARY KEY (`id_opd`);

--
-- Indexes for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id_pengetahuan`);

--
-- Indexes for table `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD PRIMARY KEY (`id_perbaikan`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indexes for table `sdm`
--
ALTER TABLE `sdm`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
