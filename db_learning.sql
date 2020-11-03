-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 03, 2020 at 06:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE `ebook` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penulis_buku` varchar(50) NOT NULL,
  `penerbit_buku` varchar(50) NOT NULL,
  `tahun_terbit` varchar(20) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ebook`
--

INSERT INTO `ebook` (`id_buku`, `judul_buku`, `penulis_buku`, `penerbit_buku`, `tahun_terbit`, `cover`, `harga`, `deskripsi`) VALUES
(1, 'Markesot Bertutur tentang Hakikat Hidup', 'Emha Ainun Nadjib', 'Mizan Publishing', '2017', 'http://127.0.0.1/go-class/public/assets/images/e-book/e-book2.jpeg', '10.000', 'Markesot adalah sosok lugu nan cerdas, mbeling, terkadang misterius. Dalam kesehariannya dengan sahabat-sahabatnya, Markembloh, Markasan, Markemon, dan lain-lain yang tergabung dalam Konsorsium Para Mbambung (KPMb), Markesot memperbincangkan seabrek problem masyarakat kita. Dari konflik politik internasional sampai soal celana. Dari tasawuf hingga filosofi urap. Dalam gaya bertutur khas Jawa Timuran yang penuh canda dan sindiran, Markesot mengajak kita meneropong kehidupan secara arif dan menemukan hakikat di balik nilai-nilai semu yang merajalela.'),
(2, 'All About Termux', 'Rafli Arvianto', 'Rafli Arvianto', '2019', 'http://127.0.0.1/go-class/public/assets/images/e-book/e-book1.jpeg', '15.000', 'Jutaan orang tak menyadari bahwa ada salah satu aplikasi Android\r\nyang dapat mengubah dunia. Aplikasi bernama Termux,\r\n\r\nmanfaatnya ibarat pohon kelapa. Mengapa demikian?\r\n\r\nAnda akan mengetahuinya setelah membaca ebook ini.'),
(3, 'Jangan Membuat Masalah Kecil Jadi Masalah Besar', 'Richard Carlson', 'Gramedia Pustaka Utama', '2019', 'http://127.0.0.1/go-class/public/assets/images/e-book/e-book3.jpeg', '7000', 'Banyak hal dalam hidup ini yang sebenarnya hanya masalah kecil, tapi kita memperlakukannya sebagai masalah besar. Sebenarnya, dengan membentuk perspektif baru bahwa masalah-masalah itu memang kecil, kita akan mempunyai lebih banyak waktu untuk memikirkan hal-hal yang benar-benar merupakan masalah besar. Dengan gaya tulisan yang mudah dipahami, buku ini menyajikan cara-cara membentuk perspektif yang lebih positif tersebut sehingga kita akan belajar untuk berdamai dengan diri sendiri dan lebih peduli. Hidup kita akan lebih terfokus pada masa kini, hubungan kita dengan orang lain akan menjadi lebih baik, dan batin kita akan menjadi lebih tenang.\r\n'),
(4, 'Easy & Simple - Web Programming', 'Rohi Abdulloh', 'Elex Media Komputindo', '2016', 'http://127.0.0.1/go-class/public/assets/images/e-book/e-book4.jpeg', '30.000', 'Kata siapa pemrograman website itu sulit? Buku ini akan memberikan panduan mempelajari pemrograman website dengan cara yang mudah. Setiap bahasa pemrograman yang harus dikuasai dibahas menjadi satu dalam sebuah proyek membuat website responsive. Buku ini ditulis dengan memperhatikan penulisan skrip yang rapi, pengelompokan file-file sesuai fungsinya, penamaan variabel, nama folder, nama file, dan nama tabel pada database yang konsisten agar mudah dipahami oleh pembaca yang baru belajar pemrograman website sekalipun. Dibahas pula pembuatan template dengan bootstrap sehingga tampilan website selalu menyesuaikan layar ketika dibuka di tablet dan smartphone. Buku ini merupakan revisi dari buku sebelumnya yang berjudul Web Programming is Easy, dengan penambahan dua bab yang menarik, yaitu Memperbaiki Error Program dan Menggunakan Widget dari Internet. Sehingga buku ini akan menjadi panduan yang menarik untuk belajar pemrograman website. '),
(5, 'Otodidak Desain dan Pemrograman Website', 'Jubilee Enterprise', 'Elex Media Komputindo', '2017', 'http://127.0.0.1/go-class/public/assets/images/e-book/e-book5.jpeg', '12.000', 'Buku ini membahas secara praktis pemrograman dan desain website yang memadukan Dreamweaver, HTML, CSS, PHP, dan Dreamweaver bagi pemula. Pembahasan di dalam buku ini meliputi: - Memadukan Dreamweaver dan XAMPP untuk menguji pemrograman berbasis server side, seperti PHP. - Mengombinasikan PHP dan Form agar dapat menghasilkan situs yang interaktif. - Pemahaman terhadap HTML dan CSS serta bagaimana memanfaatkan Dreamweaver untuk penulisan kode pemrograman. - Penggunaan Dreamweaver untuk membuat desain website serta merancang project pembuatan situs dari awal. Diharapkan, setelah membaca buku ini para pembaca dapat mencoba sendiri langkah demi langkah membuat website baik dengan cara mendesain maupun melakukan pemrograman.\r\n'),
(6, 'Aplikasi Internet Menggunakan HTML, CSS, dan JavaScript', 'Koesheryatin,Taryana Suryana', 'Elex Media Komputindo', '2014', 'http://127.0.0.1/go-class/public/assets/images/e-book/e-book6.jpeg', '25.500', 'Selamat datang di internet. Mungkin Anda selama ini telah mendengar tentang adanya internet, namun belum jelas seperti apakah internet itu, manfaat apa yang diperoleh, dan kemudahan apa saja yang disediakan oleh internet bagi Anda. Buku ini akan menuntun Anda dalam membuat aplikasi internet secara lengkap. Sistematika pembahasan dalam buku lebih ditekankan pada segi praktikum. Oleh karena itu, cara terbaik untuk memahami dan menguasai pokok bahasan yang ada dalam buku adalah dengan mempraktikkannya langsung pada komputer. Pembahasan materi ditujukan untuk para mahasiswa dan kalangan lainnya yang berminat dalam pengembangan informasi berbasis WWW (World Wide Web). ');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` int(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `birth_date_guru` varchar(20) NOT NULL,
  `birth_place_guru` varchar(100) NOT NULL,
  `religion_guru` enum('hindu','islam','buddha','katolik','protestan','konghucu') NOT NULL,
  `gender_guru` enum('laki-laki','perempuan','other') NOT NULL,
  `address_guru` varchar(100) NOT NULL,
  `telp_guru` varchar(13) NOT NULL,
  `email_guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `birth_date_guru`, `birth_place_guru`, `religion_guru`, `gender_guru`, `address_guru`, `telp_guru`, `email_guru`) VALUES
(1072563865, 'I Putu Monastasya', '1992-03-17', 'Negara', 'hindu', 'perempuan', 'Negara, Bali', '082983156767', 'monastasya@gmail.com'),
(1072573265, 'Anjayani', '1960-08-19', 'Gianyar', 'islam', 'laki-laki', 'Gianyar', '0878687323214', 'anjayani@gmail.com'),
(1074572453, 'Arda Sugiarta', '1992-09-12', 'Mengwi', 'hindu', 'laki-laki', 'Mengwi', '085434214637', 'arda123@gmail.com'),
(1078256378, 'Putri Anastasya', '1995-02-20', 'Seminyak', 'katolik', 'perempuan', 'Seminyak, Kuta', '082145656767', 'putri@gmail.com'),
(1087964536, 'I Komang Santika Yasa', '1980-08-19', 'Negara', 'buddha', 'laki-laki', 'Mendoyo', '087868378653', 'santika@gmail.com'),
(1089643527, 'Alit Kusuma', '1980-08-17', 'Negara', 'hindu', 'laki-laki', 'Medewi, Pekutatan', '087868343214', 'erosenin69@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `mapel`, `kelas`, `hari`, `jam`) VALUES
(1, 'MP101', 'AA181', 'Senin', '08:00-09:40'),
(2, 'MP102', 'AA181', 'Senin', '09:40-11:20'),
(3, 'MP103', 'AA181', 'Selasa', '08:00-11:20'),
(4, 'MP104', 'BB181', 'Senin', '08:00-09:40'),
(5, 'MP105', 'BB181', 'Senin', '09:40-11:20'),
(6, 'MP102', 'BB181', 'Selasa', '08:00-11:20'),
(7, 'MP105', 'AA181', 'Selasa', '11:20-14:20'),
(8, 'MP106', 'AA181', 'Rabu', '08:00-09:40'),
(9, 'MP108', 'AA181', 'Kamis', '09:40-11:20'),
(10, 'MP107', 'AA181', 'Jumat', '08:00-09:40'),
(11, 'MP108', 'AA181', 'Jumat', '09:40-11:20');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(10) NOT NULL,
  `wali_kelas` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `wali_kelas`) VALUES
('AA181', 1072573265),
('BB181', 1078256378),
('BB183', 1078256378),
('BC181', 1087964536);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` varchar(10) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `guru_pengajar` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `guru_pengajar`) VALUES
('MP101', 'Matematika', 1072573265),
('MP102', 'Bahasa Inggris', 1074572453),
('MP103', 'Pendidikan Kewarnegaraan', 1078256378),
('MP104', 'Seni Budaya', 1089643527),
('MP105', 'Teknologi dan Informasi', 1072573265),
('MP106', 'Pendidikan Jesmani', 1074572453),
('MP107', 'Pendidikan Agama', 1087964536),
('MP108', 'Bahasa Indonesia', 1078256378);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `descriptions` varchar(250) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `title`, `descriptions`, `date`) VALUES
(2, 'Akademik', 'Dalam rangka meningkatkan sistem pembelajaran berbasis online, diluncurkan aplikasi berbasis web yang bernama SiNolep (Sistem Informasi Online Pelajar).', '20 Aug 2020 19:00 '),
(3, 'Covid', 'COVID-19 (coronavirus disease 2019) adalah penyakit yang disebabkan oleh jenis coronavirus baru yaitu Sars-CoV-2, yang dilaporkan pertama kali di Wuhan Tiongkok pada tanggal 31 Desember 2019.', '12 Feb 2020 08:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nomor_induk` varchar(11) NOT NULL,
  `picture` varchar(150) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birth_date` varchar(20) NOT NULL,
  `religion` enum('hindu','islam','katolik','buddha','protestan','konghucu') NOT NULL,
  `birth_place` varchar(50) NOT NULL,
  `gender` enum('laki-laki','perempuan','other') NOT NULL,
  `address` varchar(50) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nomor_induk`, `picture`, `email`, `password`, `name`, `birth_date`, `religion`, `birth_place`, `gender`, `address`, `telp`, `kelas`) VALUES
('4124', 'http://127.0.0.1/go-class/public/assets/images/user-profiles/user.png', 'nolep@gmail.com', '$2y$10$YL/tRYUCu.eGYoBbLmPVTed6WvRtFIxHWi3QXeZ2ev9gxlFGQ.nyy', 'Alit Putra Negara', '2000-09-13', 'hindu', 'Yehsumbul', 'laki-laki', 'Yehsumbul, Mendoyo', '089787656343', 'AA181'),
('4132', 'http://127.0.0.1/go-class/public/assets/images/user-profiles/user.png', 'guscan@gmail.com', '$2y$10$YL/tRYUCu.eGYoBbLmPVTed6WvRtFIxHWi3QXeZ2ev9gxlFGQ.nyy', 'I Kadek Agus Chandra Pradika', '1999-08-27', 'buddha', 'Medewi Gang', 'perempuan', 'Medewi, Pekutatan, Jembrana, Bali', '0821345678', 'AA181');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `fk_mapel` (`mapel`),
  ADD KEY `fk_kelas` (`kelas`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `fk_wali` (`wali_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `fk_pengajar` (`guru_pengajar`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nomor_induk`),
  ADD KEY `fk_kelas_user` (`kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ebook`
--
ALTER TABLE `ebook`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `fk_kelas` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_mapel` FOREIGN KEY (`mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `fk_wali` FOREIGN KEY (`wali_kelas`) REFERENCES `guru` (`nip`);

--
-- Constraints for table `mapel`
--
ALTER TABLE `mapel`
  ADD CONSTRAINT `fk_pengajar` FOREIGN KEY (`guru_pengajar`) REFERENCES `guru` (`nip`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_kelas_user` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
