-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Nov 2018 pada 11.59
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ps_tutoring_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(15) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `no_tlp` int(15) NOT NULL,
  `foto_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `password`, `no_tlp`, `foto_admin`) VALUES
(1001, 'Admin', 'admin@gmail.com', 'admin', 898438528, '');

--
-- Trigger `admin`
--
DELIMITER $$
CREATE TRIGGER `distadmin` AFTER INSERT ON `admin` FOR EACH ROW INSERT INTO user (id_referensi, email, password, level) VALUES
(NEW.id_admin, NEW.email, NEW.password, "admin")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_pokjar`
--

CREATE TABLE `anggota_pokjar` (
  `id_detail` int(11) NOT NULL,
  `id_pokjar` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota_pokjar`
--

INSERT INTO `anggota_pokjar` (`id_detail`, `id_pokjar`, `id_siswa`) VALUES
(109, 3, 3004);

-- --------------------------------------------------------

--
-- Struktur dari tabel `audio`
--

CREATE TABLE `audio` (
  `id_audio` int(11) NOT NULL,
  `id_pengajar` int(11) NOT NULL,
  `id_matapelajaran` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `judul_audio` varchar(255) NOT NULL,
  `tanggal_upload` datetime NOT NULL,
  `nama_pengajar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `audio`
--

INSERT INTO `audio` (`id_audio`, `id_pengajar`, `id_matapelajaran`, `file`, `judul_audio`, `tanggal_upload`, `nama_pengajar`) VALUES
(2, 2001, 101, 'mp32.mp3', 'dsaffa', '2018-10-05 12:31:00', 'Ismail'),
(4, 2001, 101, 'mp34.mp3', 'Listening', '2018-10-26 12:31:00', 'Ismail'),
(5, 2001, 104, 'mp35.mp3', 'Listening', '2018-10-20 12:03:00', ''),
(6, 2002, 107, 'mp36.mp3', 'sdf', '2018-10-29 12:34:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokument`
--

CREATE TABLE `dokument` (
  `id_dokument` int(10) NOT NULL,
  `id_pengajar` int(11) NOT NULL,
  `id_matapelajaran` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `judul_dokument` varchar(255) NOT NULL,
  `tanggal_upload` datetime NOT NULL,
  `nama_pengajar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokument`
--

INSERT INTO `dokument` (`id_dokument`, `id_pengajar`, `id_matapelajaran`, `file`, `judul_dokument`, `tanggal_upload`, `nama_pengajar`) VALUES
(1, 2001, 101, 'pdf1.pdf', 'pendahuluan', '2018-10-18 12:03:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_soal`
--

CREATE TABLE `kategori_soal` (
  `id_kategori_soal` int(11) NOT NULL,
  `id_matapejaran` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(30) NOT NULL,
  `id_orang_tua` int(30) NOT NULL,
  `id_pengajar` int(30) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_nilai` int(11) NOT NULL,
  `id_quis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_quis`
--

CREATE TABLE `list_quis` (
  `id_list_quis` int(20) NOT NULL,
  `id_pengajar` int(10) NOT NULL,
  `id_matapelajaran` int(11) NOT NULL,
  `pertanyaan` varchar(5000) NOT NULL,
  `pilihan1` varchar(5000) NOT NULL,
  `pilihan2` varchar(5000) NOT NULL,
  `pilihan3` varchar(5000) NOT NULL,
  `pilihan4` varchar(5000) NOT NULL,
  `jawaban` varchar(5000) NOT NULL,
  `keterangan` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_quis`
--

INSERT INTO `list_quis` (`id_list_quis`, `id_pengajar`, `id_matapelajaran`, `pertanyaan`, `pilihan1`, `pilihan2`, `pilihan3`, `pilihan4`, `jawaban`, `keterangan`) VALUES
(1, 2001, 101, 'Contoh Kata', 'Dia Lompati Pagar', 'Aku Mengikutinya', 'Kita Tertangkap Basah', 'Terhukum', 'B', '123'),
(2, 2001, 101, 'Contoh Kalimat', 'Buku', 'Kursi', 'Meja', 'Aku Menendang Bola', 'A', 'qwerty'),
(3, 2002, 105, '1+1', '1', '2', '3', '4', 'B', 'SABARAHA HAYOO?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel_pengajar`
--

CREATE TABLE `mapel_pengajar` (
  `id_mapel_pengajar` int(10) NOT NULL,
  `id_pengajar` int(10) NOT NULL,
  `id_matapelajaran` int(11) NOT NULL,
  `kode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel_pengajar`
--

INSERT INTO `mapel_pengajar` (`id_mapel_pengajar`, `id_pengajar`, `id_matapelajaran`, `kode`) VALUES
(102, 2001, 101, 'Bi1a'),
(103, 2002, 105, 'mtk1a'),
(104, 2002, 105, ''),
(105, 2001, 107, 'TOS10702001'),
(106, 2001, 108, 'TOS10802001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel_pokjar`
--

CREATE TABLE `mapel_pokjar` (
  `id_detail` int(11) NOT NULL,
  `id_pokjar` int(11) NOT NULL,
  `id_mapel_pengajar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel_pokjar`
--

INSERT INTO `mapel_pokjar` (`id_detail`, `id_pokjar`, `id_mapel_pengajar`) VALUES
(108, 3, 102);

-- --------------------------------------------------------

--
-- Struktur dari tabel `matapelajaran`
--

CREATE TABLE `matapelajaran` (
  `id_matapelajaran` int(11) NOT NULL,
  `nama_matapelajaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matapelajaran`
--

INSERT INTO `matapelajaran` (`id_matapelajaran`, `nama_matapelajaran`) VALUES
(101, 'Bahasa Indonesia Kelas 1 A'),
(102, 'Bahasa Indonesia Kelas 2 A'),
(103, 'Bahasa Indonesia Kelas 2 B'),
(104, 'Bahasa Indonesia Kelas 3 A'),
(105, 'Matematika Kelas 1 A'),
(106, 'Matematika Kelas 2 B'),
(107, 'IPA Kelas 1 A'),
(108, 'IPS Kelas 1 A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `id_pengajar` int(11) NOT NULL,
  `id_pokjar` int(11) NOT NULL,
  `judul_materi` varchar(30) NOT NULL,
  `data_file` varchar(30) NOT NULL,
  `deskripsi` varchar(30) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `tanggal_buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_berakhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id_materi`, `id_pengajar`, `id_pokjar`, `judul_materi`, `data_file`, `deskripsi`, `tipe`, `tanggal_buat`, `tanggal_berakhir`) VALUES
(1, 0, 0, '', '', '', '', '2018-10-20 08:45:28', '0000-00-00 00:00:00'),
(2, 2001, 3, '', '', '', '', '2018-10-20 08:45:39', '0000-00-00 00:00:00'),
(3, 2001, 3, '', '', '', '', '2018-10-20 08:46:05', '0000-00-00 00:00:00'),
(4, 2002, 3, '', '', '', '', '2018-10-20 09:10:58', '0000-00-00 00:00:00'),
(5, 2002, 3, '', '', '', '', '2018-10-20 09:10:59', '0000-00-00 00:00:00'),
(6, 2001, 3, '', '', '', '', '2018-10-20 09:12:22', '0000-00-00 00:00:00'),
(7, 0, 0, '', '', '', '', '2018-10-20 09:12:27', '0000-00-00 00:00:00'),
(8, 2001, 5, '', '', '', '', '2018-10-20 09:15:05', '0000-00-00 00:00:00'),
(9, 2002, 3, 'jalsjdflaj', '6', 'lsadjfjasd', 'Video', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 2002, 3, 'jalsjdflaj', '6', 'lsadjfjasd', 'Video', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(30) NOT NULL,
  `id_quis` int(30) NOT NULL,
  `id_pengajar` int(30) NOT NULL,
  `id_siswa` int(30) NOT NULL,
  `id_orang_tua` int(30) NOT NULL,
  `nama_quis` varchar(40) NOT NULL,
  `nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orang_tua`
--

CREATE TABLE `orang_tua` (
  `id_orang_tua` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_orang_tua` varchar(40) NOT NULL,
  `foto_orang_tua` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orang_tua`
--

INSERT INTO `orang_tua` (`id_orang_tua`, `email`, `password`, `nama_orang_tua`, `foto_orang_tua`) VALUES
(4001, 'Kusnadi@gmail.com', 'kusnadi', 'kusnadi', 'Jl.Tubagus Ismail'),
(4002, 'ujang@gmail.com', 'ujang', 'Ujang', 'orang_tua4002.jpg');

--
-- Trigger `orang_tua`
--
DELIMITER $$
CREATE TRIGGER `distorangtua` AFTER INSERT ON `orang_tua` FOR EACH ROW INSERT INTO user (id_referensi, email, password,level) VALUES (NEW.id_orang_tua, NEW.email, NEW.password, "orang tua")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` int(11) NOT NULL,
  `nama_pengajar` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `sex` varchar(10) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `foto_pengajar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `nama_pengajar`, `email`, `password`, `tanggal_lahir`, `alamat`, `sex`, `no_tlp`, `foto_pengajar`) VALUES
(2001, 'Asep', 'asep@gmail.com', 'asep', '2018-09-10', 'Jl.Sukabumi', 'Laki-laki', '0896453212', ''),
(2002, 'Ujang', 'ujang@gmail.com', 'ujang', '2018-09-21', 'Jl.Sekepanjang', 'Laki-laki', '+6281214637521', 'pengajar2002.PNG');

--
-- Trigger `pengajar`
--
DELIMITER $$
CREATE TRIGGER `distPengajar` AFTER INSERT ON `pengajar` FOR EACH ROW INSERT INTO `user` (id_referensi, email, password, level) VALUES (NEW.id_pengajar, NEW.email, NEW.password, "pengajar")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(30) NOT NULL,
  `id_pengajar` int(30) NOT NULL,
  `id_siswa` int(30) NOT NULL,
  `isi_pertanyaan` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pokjar`
--

CREATE TABLE `pokjar` (
  `id_pokjar` int(30) NOT NULL,
  `nama_pokjar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pokjar`
--

INSERT INTO `pokjar` (`id_pokjar`, `nama_pokjar`) VALUES
(3, 'Pokjar 1 A'),
(4, 'Pokjar 2 A'),
(5, 'Pokjar 3 A'),
(6, 'Pokjar 1 B'),
(7, 'Pokjar 2 B'),
(8, 'Pokjar 3 B'),
(9, 'Pokjar 1 C'),
(10, 'Pokjar 2 C'),
(11, 'Pokjar 3 C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `quis`
--

CREATE TABLE `quis` (
  `id_quis` int(30) NOT NULL,
  `id_mapel_pokjar` int(11) NOT NULL,
  `nama_quis` varchar(40) NOT NULL,
  `jam_mulai` datetime NOT NULL,
  `jam_berakhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `quis`
--

INSERT INTO `quis` (`id_quis`, `id_mapel_pokjar`, `nama_quis`, `jam_mulai`, `jam_berakhir`) VALUES
(1, 101, 'Quis1', '2018-10-18 10:00:00', '2018-10-18 12:00:00'),
(2, 104, 'Quis 1', '2018-10-17 17:00:00', '2018-10-17 21:00:00'),
(13, 0, 'Matematika 1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 102, 'Matematika 1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 101, 'Bahasa SUnda', '2018-10-20 12:43:00', '2018-10-20 14:00:00'),
(16, 101, 'Bahasa Inggris', '2018-10-13 12:00:00', '2018-10-13 15:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `quis_detail`
--

CREATE TABLE `quis_detail` (
  `id_quis_detail` int(11) NOT NULL,
  `id_list_quis` int(11) NOT NULL,
  `id_quis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(15) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `Kelas` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `sex` varchar(10) NOT NULL,
  `foto_siswa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `email`, `password`, `tanggal_lahir`, `Kelas`, `alamat`, `sex`, `foto_siswa`) VALUES
(3004, 'Ahmad', 'ahmad@gmail.com', 'ahmad', '2018-09-05', 0, 'Jl.Cisokan', 'Laki-laki', 'siswa3004.jpg'),
(3002, 'Aldi', 'aldi@gmail.com', 'aldi', '2018-09-14', 0, 'Jl.Babakan Sari No.11', 'Laki-laki', ''),
(3001, 'Danil', 'danil@gmail.com', 'danil', '2018-09-05', 1, 'Jl.Sukarapih', 'Laki-laki', ''),
(3006, 'Junaedi', 'junaedi@gmail.com', 'junaedi', '2018-10-22', 0, 'Jl.Subang', 'Laki-laki', 'siswa3006.jpg'),
(3005, 'Kusnadi', 'kusnadi@gmail.com', 'kusnadi', '2018-10-25', 0, 'Jl.Sukabumi', 'Laki-laki', 'siswa3005.PNG'),
(3007, 'Limbad', 'limbad@gmail.com', 'limbad', '2018-11-08', 0, 'Jl.Sukabumi', 'Laki-laki', 'siswa3007.jpeg'),
(3003, 'Santoso', 'santoso@gmail.com', 'admin', '1998-09-20', 0, 'Bandung', 'Laki-laki', 'siswa3003.');

--
-- Trigger `siswa`
--
DELIMITER $$
CREATE TRIGGER `distsiswa` AFTER INSERT ON `siswa` FOR EACH ROW INSERT INTO user (id_referensi, email, password, level) VALUES (NEW.id_siswa, NEW.email, NEW.password, "siswa")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_referensi` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('admin','siswa','pengajar','orang tua') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_referensi`, `email`, `password`, `level`) VALUES
(1, 1001, 'admin@gmail.com', 'admin', 'admin'),
(2, 2001, 'asep@gmail.com', 'asep', 'pengajar'),
(3, 3001, 'danil@gmail.com', 'danil', 'siswa'),
(4, 2002, 'ujang@gmail.com', 'ujang', 'pengajar'),
(5, 4001, 'kusnadi@gmail.com', 'kusnadi', 'orang tua'),
(6, 4002, 'jaenudin@gmail.com', 'jaenudin', 'orang tua'),
(7, 4003, 'ismail@gmail.com', 'ismail', 'orang tua'),
(8, 4004, 'jaelany@gmail.com', 'jaelany', 'orang tua'),
(9, 4001, 'Kusnadi@gmail.com', 'kusnadi', 'orang tua'),
(10, 4002, 'ujang@gmail.com', 'ujang', 'orang tua'),
(11, 3002, 'aldi@gmail.com', 'aldi', 'siswa'),
(12, 3003, 'santoso@gmail.com', 'admin', 'siswa'),
(13, 3004, 'ahmad@gmail.com', 'ahmad', 'siswa'),
(14, 3005, 'kusnadi@gmail.com', 'kusnadi', 'siswa'),
(15, 3006, 'junaedi@gmail.com', 'junaedi', 'siswa'),
(16, 3007, 'limbad@gmail.com', 'limbad', 'siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `id_pengajar` int(11) NOT NULL,
  `id_matapelajaran` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `judul_video` varchar(255) NOT NULL,
  `tanggal_upload` datetime NOT NULL,
  `nama_pengajar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id_video`, `id_pengajar`, `id_matapelajaran`, `file`, `judul_video`, `tanggal_upload`, `nama_pengajar`) VALUES
(1, 2001, 101, 'vid1.mp4', 'BI Bab1', '2018-09-22 19:35:00', 'asep'),
(4, 2002, 101, 'vid4.mp4', 'sljdfkjsljfla', '2018-10-23 12:03:00', ''),
(6, 2001, 104, 'vid6.mp4', 'Matriks', '2018-10-14 12:03:00', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_anggota_pokjar`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_anggota_pokjar` (
`id_detail` int(11)
,`id_siswa` int(15)
,`id_pokjar` int(30)
,`nama_siswa` varchar(30)
,`nama_pokjar` varchar(40)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_audio`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_audio` (
`id_audio` int(11)
,`id_pengajar` int(11)
,`tanggal_upload` datetime
,`file` varchar(255)
,`judul_audio` varchar(255)
,`nama_pengajar` varchar(40)
,`nama_matapelajaran` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_dokument`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_dokument` (
`id_dokument` int(10)
,`id_pengajar` int(11)
,`tanggal_upload` datetime
,`file` varchar(255)
,`judul_dokument` varchar(255)
,`nama_pengajar` varchar(40)
,`nama_matapelajaran` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_mapel_pengajar`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_mapel_pengajar` (
`id_mapel_pengajar` int(10)
,`id_pengajar` int(10)
,`id_matapelajaran` int(11)
,`kode` varchar(30)
,`nama_matapelajaran` varchar(30)
,`nama_pengajar` varchar(40)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pokjar`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_pokjar` (
`id_pokjar` int(30)
,`id_mapel_pengajar` int(10)
,`nama_pokjar` varchar(40)
,`id_pengajar` int(10)
,`id_matapelajaran` int(11)
,`kode` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pokjar_mapel`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_pokjar_mapel` (
`id_detail` int(11)
,`id_pokjar` int(11)
,`id_mapel_pengajar` int(10)
,`id_matapelajaran` int(11)
,`id_pengajar` int(10)
,`nama_pokjar` varchar(40)
,`kode` varchar(30)
,`nama_matapelajaran` varchar(30)
,`nama_pengajar` varchar(40)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_quis`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_quis` (
`id_quis_detail` int(11)
,`id_list_quis` int(11)
,`id_quis` int(11)
,`id_pengajar` int(10)
,`id_matapelajaran` int(11)
,`pertanyaan` varchar(5000)
,`pilihan1` varchar(5000)
,`pilihan2` varchar(5000)
,`pilihan3` varchar(5000)
,`pilihan4` varchar(5000)
,`jawaban` varchar(5000)
,`keterangan` varchar(5000)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_video`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_video` (
`id_video` int(11)
,`id_pengajar` int(11)
,`tanggal_upload` datetime
,`file` varchar(255)
,`judul_video` varchar(255)
,`nama_pengajar` varchar(40)
,`nama_matapelajaran` varchar(30)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_anggota_pokjar`
--
DROP TABLE IF EXISTS `v_anggota_pokjar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_anggota_pokjar`  AS  select `ap`.`id_detail` AS `id_detail`,`sis`.`id_siswa` AS `id_siswa`,`pj`.`id_pokjar` AS `id_pokjar`,`sis`.`nama_siswa` AS `nama_siswa`,`pj`.`nama_pokjar` AS `nama_pokjar` from ((`anggota_pokjar` `ap` join `siswa` `sis` on((`ap`.`id_siswa` = `sis`.`id_siswa`))) join `pokjar` `pj` on((`ap`.`id_pokjar` = `pj`.`id_pokjar`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_audio`
--
DROP TABLE IF EXISTS `v_audio`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_audio`  AS  select `aud`.`id_audio` AS `id_audio`,`aud`.`id_pengajar` AS `id_pengajar`,`aud`.`tanggal_upload` AS `tanggal_upload`,`aud`.`file` AS `file`,`aud`.`judul_audio` AS `judul_audio`,`peng`.`nama_pengajar` AS `nama_pengajar`,`mp`.`nama_matapelajaran` AS `nama_matapelajaran` from ((`audio` `aud` join `pengajar` `peng` on((`aud`.`id_pengajar` = `peng`.`id_pengajar`))) join `matapelajaran` `mp` on((`aud`.`id_matapelajaran` = `mp`.`id_matapelajaran`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_dokument`
--
DROP TABLE IF EXISTS `v_dokument`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_dokument`  AS  select `dok`.`id_dokument` AS `id_dokument`,`dok`.`id_pengajar` AS `id_pengajar`,`dok`.`tanggal_upload` AS `tanggal_upload`,`dok`.`file` AS `file`,`dok`.`judul_dokument` AS `judul_dokument`,`peng`.`nama_pengajar` AS `nama_pengajar`,`mp`.`nama_matapelajaran` AS `nama_matapelajaran` from ((`dokument` `dok` join `pengajar` `peng` on((`dok`.`id_pengajar` = `peng`.`id_pengajar`))) join `matapelajaran` `mp` on((`dok`.`id_matapelajaran` = `mp`.`id_matapelajaran`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_mapel_pengajar`
--
DROP TABLE IF EXISTS `v_mapel_pengajar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_mapel_pengajar`  AS  select `mp`.`id_mapel_pengajar` AS `id_mapel_pengajar`,`mp`.`id_pengajar` AS `id_pengajar`,`mp`.`id_matapelajaran` AS `id_matapelajaran`,`mp`.`kode` AS `kode`,`mapel`.`nama_matapelajaran` AS `nama_matapelajaran`,`pg`.`nama_pengajar` AS `nama_pengajar` from ((`mapel_pengajar` `mp` join `matapelajaran` `mapel` on((`mapel`.`id_matapelajaran` = `mp`.`id_matapelajaran`))) join `pengajar` `pg` on((`pg`.`id_pengajar` = `mp`.`id_pengajar`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_pokjar`
--
DROP TABLE IF EXISTS `v_pokjar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pokjar`  AS  select `pj`.`id_pokjar` AS `id_pokjar`,`mp`.`id_mapel_pengajar` AS `id_mapel_pengajar`,`pj`.`nama_pokjar` AS `nama_pokjar`,`mp`.`id_pengajar` AS `id_pengajar`,`mp`.`id_matapelajaran` AS `id_matapelajaran`,`mp`.`kode` AS `kode` from (`pokjar` `pj` join `mapel_pengajar` `mp` on((`mp`.`id_mapel_pengajar` = `pj`.`id_pokjar`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_pokjar_mapel`
--
DROP TABLE IF EXISTS `v_pokjar_mapel`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pokjar_mapel`  AS  select `mp`.`id_detail` AS `id_detail`,`mp`.`id_pokjar` AS `id_pokjar`,`mpe`.`id_mapel_pengajar` AS `id_mapel_pengajar`,`mpe`.`id_matapelajaran` AS `id_matapelajaran`,`mpe`.`id_pengajar` AS `id_pengajar`,`pj`.`nama_pokjar` AS `nama_pokjar`,`mpe`.`kode` AS `kode`,`mt`.`nama_matapelajaran` AS `nama_matapelajaran`,`p`.`nama_pengajar` AS `nama_pengajar` from ((((`mapel_pokjar` `mp` join `pokjar` `pj` on((`mp`.`id_pokjar` = `pj`.`id_pokjar`))) join `mapel_pengajar` `mpe` on((`mp`.`id_mapel_pengajar` = `mpe`.`id_mapel_pengajar`))) join `matapelajaran` `mt` on((`mpe`.`id_matapelajaran` = `mt`.`id_matapelajaran`))) join `pengajar` `p` on((`mpe`.`id_pengajar` = `p`.`id_pengajar`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_quis`
--
DROP TABLE IF EXISTS `v_quis`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_quis`  AS  select `qd`.`id_quis_detail` AS `id_quis_detail`,`qd`.`id_list_quis` AS `id_list_quis`,`qd`.`id_quis` AS `id_quis`,`lq`.`id_pengajar` AS `id_pengajar`,`lq`.`id_matapelajaran` AS `id_matapelajaran`,`lq`.`pertanyaan` AS `pertanyaan`,`lq`.`pilihan1` AS `pilihan1`,`lq`.`pilihan2` AS `pilihan2`,`lq`.`pilihan3` AS `pilihan3`,`lq`.`pilihan4` AS `pilihan4`,`lq`.`jawaban` AS `jawaban`,`lq`.`keterangan` AS `keterangan` from (`quis_detail` `qd` join `list_quis` `lq` on((`qd`.`id_list_quis` = `lq`.`id_list_quis`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_video`
--
DROP TABLE IF EXISTS `v_video`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_video`  AS  select `vid`.`id_video` AS `id_video`,`vid`.`id_pengajar` AS `id_pengajar`,`vid`.`tanggal_upload` AS `tanggal_upload`,`vid`.`file` AS `file`,`vid`.`judul_video` AS `judul_video`,`peng`.`nama_pengajar` AS `nama_pengajar`,`mp`.`nama_matapelajaran` AS `nama_matapelajaran` from ((`video` `vid` join `pengajar` `peng` on((`vid`.`id_pengajar` = `peng`.`id_pengajar`))) join `matapelajaran` `mp` on((`vid`.`id_matapelajaran` = `mp`.`id_matapelajaran`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `anggota_pokjar`
--
ALTER TABLE `anggota_pokjar`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id_audio`);

--
-- Indexes for table `dokument`
--
ALTER TABLE `dokument`
  ADD PRIMARY KEY (`id_dokument`);

--
-- Indexes for table `kategori_soal`
--
ALTER TABLE `kategori_soal`
  ADD PRIMARY KEY (`id_kategori_soal`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `list_quis`
--
ALTER TABLE `list_quis`
  ADD PRIMARY KEY (`id_list_quis`);

--
-- Indexes for table `mapel_pengajar`
--
ALTER TABLE `mapel_pengajar`
  ADD PRIMARY KEY (`id_mapel_pengajar`);

--
-- Indexes for table `mapel_pokjar`
--
ALTER TABLE `mapel_pokjar`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  ADD PRIMARY KEY (`id_matapelajaran`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id_orang_tua` (`id_orang_tua`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id_pengajar` (`id_pengajar`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `pokjar`
--
ALTER TABLE `pokjar`
  ADD PRIMARY KEY (`id_pokjar`);

--
-- Indexes for table `quis`
--
ALTER TABLE `quis`
  ADD PRIMARY KEY (`id_quis`);

--
-- Indexes for table `quis_detail`
--
ALTER TABLE `quis_detail`
  ADD PRIMARY KEY (`id_quis_detail`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;
--
-- AUTO_INCREMENT for table `anggota_pokjar`
--
ALTER TABLE `anggota_pokjar`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id_audio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dokument`
--
ALTER TABLE `dokument`
  MODIFY `id_dokument` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori_soal`
--
ALTER TABLE `kategori_soal`
  MODIFY `id_kategori_soal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `list_quis`
--
ALTER TABLE `list_quis`
  MODIFY `id_list_quis` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mapel_pengajar`
--
ALTER TABLE `mapel_pengajar`
  MODIFY `id_mapel_pengajar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `mapel_pokjar`
--
ALTER TABLE `mapel_pokjar`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  MODIFY `id_matapelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orang_tua`
--
ALTER TABLE `orang_tua`
  MODIFY `id_orang_tua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4003;
--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2003;
--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pokjar`
--
ALTER TABLE `pokjar`
  MODIFY `id_pokjar` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `quis`
--
ALTER TABLE `quis`
  MODIFY `id_quis` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `quis_detail`
--
ALTER TABLE `quis_detail`
  MODIFY `id_quis_detail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3008;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
