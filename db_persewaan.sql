-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 03:12 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_persewaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `kategori` enum('Gedung','Catering','Dekorasi','Lain-Lain') DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `slug` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `nama`, `kategori`, `biaya`, `deskripsi`, `gambar`, `slug`) VALUES
(2, 'katering paket satu', 'Catering', 1500000, '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><br></p>', 'cateringsatu.jpg', 'katering-paket-satu'),
(3, 'Gedung Serbaguna', 'Gedung', 900000, '<p><strong style=\"margin: 0px; padding: 0px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">Lorem Ipsum</strong><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">Lorem Ipsum</strong><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span></p><p><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><img src=\"data:image/jpeg;base64,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\" style=\"width: 281px;\"></p><p></p>', 'room.jpg', 'gedung-serbaguna'),
(4, 'Katering paket dua', 'Catering', 1800000, '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><br></p>', 'cateringdua.jpg', 'katering-paket-dua'),
(5, 'Katering Paket tiga', 'Catering', 200000, '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><br></p>', 'cateringtiga.jpg', 'katering-paket-tiga'),
(6, 'Dekorasi Paket 1', 'Dekorasi', 1300000, '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><br></p>', 'dekordua.jpeg', 'dekorasi-paket-1'),
(7, 'Dekorasi Paket 2', 'Dekorasi', 1600000, '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><br></p>', 'dekortiga.jpg', 'dekorasi-paket-2'),
(8, 'Live Music dan MC', 'Lain-Lain', 800000, '<p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><br></p>', 'mc.jpg', 'live-music-dan-mc'),
(9, 'MC only', 'Lain-Lain', 400000, '<p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span><br></p>', 'mcnikahan.jpg', 'mc-only'),
(10, 'Live Music only', 'Lain-Lain', 500000, '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span><br></p>', 'livemusic.jpg', 'live-music-only');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `kode` varchar(60) DEFAULT '0',
  `id_pengguna` int(11) DEFAULT NULL,
  `tanggal_pesan` date DEFAULT NULL,
  `tanggal_sewa` varchar(40) DEFAULT NULL,
  `tanggal_selesai_sewa` varchar(40) DEFAULT NULL,
  `lama_pesan` int(11) DEFAULT NULL,
  `pesan_penyewa` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `status` enum('Menunggu Konfirmasi','Dicancel','Diterima','Ditolak','Lunas') DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `gambar_tf` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `kode`, `id_pengguna`, `tanggal_pesan`, `tanggal_sewa`, `tanggal_selesai_sewa`, `lama_pesan`, `pesan_penyewa`, `keterangan`, `status`, `total`, `gambar_tf`) VALUES
(1, 'TRS001', 3, '2020-08-23', '2020-08-24 / 09:20 am', '2020-08-26 / 10:30 am', 3, 'halo', 'harap segera melakukan pembayaran agar pesanan segera di list', 'Ditolak', 2500000, NULL),
(3, 'TRS003', 3, '2020-08-23', '2020-08-24 / 09:20 am', '2020-08-26 / 10:30 am', 3, 'halo', 'mohon segera membayar pesanan', 'Lunas', 6900000, 'next.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_detail`
--

CREATE TABLE `pemesanan_detail` (
  `id` int(11) NOT NULL,
  `id_pemesanan` int(11) DEFAULT 0,
  `id_layanan` int(11) DEFAULT 0,
  `lama_pesan` int(11) DEFAULT 0,
  `harga` int(11) DEFAULT 0,
  `subtotal` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan_detail`
--

INSERT INTO `pemesanan_detail` (`id`, `id_pemesanan`, `id_layanan`, `lama_pesan`, `harga`, `subtotal`) VALUES
(1, 1, 3, 3, 900000, 2700000),
(2, 1, 4, 3, 1800000, 1800000),
(6, 3, 3, 3, 900000, 2700000),
(7, 3, 4, 3, 1800000, 1800000),
(8, 3, 7, 3, 1600000, 1600000),
(9, 3, 8, 3, 800000, 800000);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `notelp` varchar(15) DEFAULT NULL,
  `username` varchar(150) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `alamat`, `notelp`, `username`, `password`, `status`) VALUES
(1, 'damara satrio', 'magersari gurah', '0293849023', 'damara', '827ccb0eea8a706c4c34a16891f84e7b', 'Aktif'),
(3, 'bela aulia', 'gurah', '9023849023', 'bela', '827ccb0eea8a706c4c34a16891f84e7b', '');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `telp_satu` varchar(150) DEFAULT NULL,
  `telp_dua` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `link_fb` varchar(150) DEFAULT NULL,
  `link_ig` varchar(150) DEFAULT NULL,
  `rekening` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `cara_bayar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `telp_satu`, `telp_dua`, `email`, `alamat`, `link_fb`, `link_ig`, `rekening`, `deskripsi`, `cara_bayar`) VALUES
(1, '0123', '382457', 'deva@gamil.com', 'gurah kediri', '#', '#', '234', 'halo halo', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `gambar` text DEFAULT NULL,
  `judul` varchar(150) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `gambar`, `judul`, `deskripsi`, `link`, `status`) VALUES
(5, 'promo.jpg', 'Promo Dua', 'professor at Hampden-Sydney College in Virginia, looked up one', 'Promo Dua', 'Promo'),
(6, '—Pngtree—simple gradient e-commerce web page_935520.jpg', 'Promo Satu', 'professor at Hampden-Sydney', 'Promo Satu', 'Promo'),
(7, 'banner.jpg', 'Banner Satu', 'Contrary to popular belief, Lorem Ipsum is not simply random text', 'Banner Satu', 'Banner');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `status` enum('Super Admin','Admin','Programmer') DEFAULT 'Admin',
  `telp` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `status`, `telp`, `alamat`) VALUES
(1, 'deva satrio damara halo', 'devasatrio', '827ccb0eea8a706c4c34a16891f84e7b', 'Programmer', '14045', 'gurah kediri'),
(4, 'admin satu', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin', '0823847', 'gurah magersari'),
(6, 'super admin', 'superadmin', '827ccb0eea8a706c4c34a16891f84e7b', 'Super Admin', '0238490', 'gurah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_pemesanan_pengguna` (`id_pengguna`);

--
-- Indexes for table `pemesanan_detail`
--
ALTER TABLE `pemesanan_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_pemesanan_detail_pemesanan` (`id_pemesanan`),
  ADD KEY `FK_pemesanan_detail_pengguna` (`id_layanan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemesanan_detail`
--
ALTER TABLE `pemesanan_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `FK_pemesanan_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pemesanan_detail`
--
ALTER TABLE `pemesanan_detail`
  ADD CONSTRAINT `FK_pemesanan_detail_pemesanan` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_pemesanan_detail_pengguna` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
