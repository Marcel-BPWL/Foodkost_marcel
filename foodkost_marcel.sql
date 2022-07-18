-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 02:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodkost_marcel`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorit`
--

CREATE TABLE `favorit` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_makanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorit`
--

INSERT INTO `favorit` (`id`, `id_user`, `id_makanan`) VALUES
(14, 10, 8),
(15, 10, 7);

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `bahan` varchar(100) NOT NULL,
  `cara_membuat` varchar(500) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `nama`, `deskripsi`, `bahan`, `cara_membuat`, `gambar`) VALUES
(7, 'Bakso manis pedas', 'Bakso tak hanya enak dinikmati dengan kuah kaldu. Ternyata bakso juga dapat dinikmati menjadi masakan yang berbeda. Yakni dimasak dengan bumbu yang menonjolkan cita rasa pedas dan manis.', '- 300 gram bakso\r\n- 1 buah bawang bombai, cincang-cincang\r\n- 4 sdm saus pedas\r\n- 2 sdm kecap manis', '- Panaskan margarine lalu tumis bumbu halus dan bombai sampai harum, masukkan bakso, aduk-aduk\r\n- Masukkan saus pedas, saus tiram, kecap manis dan air jeruk kunci, aduk rata lalu tuang air\r\n- Masak sampai air menyusut masukkan gula dan sedikit garam, masak sampai air habis test rasa lalu angkat\r\n- Sajikan.     ', 'bakso.jpg'),
(8, 'Jamur crispy', 'Jamur goreng crispy adalah salah satu camilan yang banyak diminati. Perpaduan jamur dan tepung menghasilkan tekstur yang renyah dan rasa yang gurih, cocok disantap sebagai teman bersantai. Jamur crispy juga tidak susah untuk dibuat. Bahan-bahan yang diperlukan juga tidak terlalu banyak.', 'Bahan-bahan:\r\n- Jamur tiram\r\n- 250 gr tepung serba guna\r\n- 3 sdm tepung meizena\r\n\r\nBumbu:\r\n- 4 siung', '- Cuci bersih jamur (peras sampai airnya hilang)\r\n- Masukkan bumbu ke dalam wadah yang berisi jamur (aduk-aduk hingga merata), kemudian marinasi sampai 10 menit\r\n- Masukkan jamur ke dalam tepung kering (mix tepung serba guna dan meizena) balut hingga merata\r\n- Goreng jamur hingga golden brown\r\n- Sajikan dengan saus tomat atau cabai.\"  ', 'jamur.jpg'),
(11, 'Ayam suwir mercon', 'Ayam suwir khas Indonesia sangat terkenal di seluruh dunia. Masakan ayam suwir berasal dari Bali yang dikenal dengan nama ayam sisit bali. Kombinasi bumbu rempah dengan suwiran daging ayam bikin rasanya makin sedap.', 'Bahan:\r\n- 2 potong Dada ayam besar\r\nBumbu halus:\r\n- 10 cabai merah keriting\r\n- 6 cabai rawit merah\r\n', 'Cara memasak:\r\n1. Cuci bersih ayam, rebus, goreng, lalu suwir-suwir. Sisihkan.\r\n2. Tumis bumbu halus, masukkan daun jeruk, dan serai. Tambahkan 150 ml air.\r\n3. Tambahkan garam, gula, dan kaldu bubuk. Tunggu air agak menyusut.\r\n4. Masukkan ayam suwir, tambahkan kecap, aduk sampai rata. Angkat dan sajikan. ', 'ayam.jpg'),
(32, 'Telur ceplok kecap', 'Telur ceplok enak disantap bersama siraman kecap manis. Namun, bagaimana kalau mencoba cara masak telur ceplok yang berbeda? Telur ceplok masak kecap, misalnya. Cara membuat telur ceplok kecap manis ini sama dengan masak sayur tumis. Iris semua bumbu, lalu campur bersama telur ceplok. Jadilah santapan sederhana yang enak.', 'Bahan:\r\n- telur sesuai kebutuhan\r\n- bawang putih secukupnya\r\n- bawang merah secukupnya\r\n- cabai rawi', 'Cara memasak:\r\n1. Goreng telur lalu sisihkan.\r\n2. Tumis bawang putih dan bawang merah. Masukkan irisan daun bawang dan cabai rawit.\r\n3. Beri kecap manis, kecap asin, dan merica, bisa tambahkan air sedikit. Aduk dan masak hingga mendidih dan kental\r\n4. Masukkan telur dan aduk rata.  ', 'telorkecap.jpg'),
(33, 'Mie dog dog', 'Buat  pecinta mie, pasti sudah tidak asing lagi dengan resep mie dog dog gerobakan yang menggugah selera dan bikin nagih. Mie yang biasanya ditemukan keliling di komplek-komplek atau di pedagang kaki lima gerobak ini punya banyak penggemar.', 'Bahan:\r\n- 2 bungkus mie instan\r\n- 1/2 tomat\r\n- sawi\r\n- 2 telur\r\n- kecap manis\r\n\r\nBumbu halus:\r\n- 2 b', 'Cara memasak:\r\n1. Rebus mie setengah matang, tiriskan.\r\n2. Tumis bumbu halus, masukkan telur. Masak telur orak arik.\r\n3. Masukkan sayuran, lalu tuang air.\r\n4. Masukkan mie, bumbu, dan kecap secukupnya. Aduk rata.\r\n5. Tambahkan gula dan garam secukupnya.', 'mie.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `date_created`) VALUES
(9, 'Budi', 'admin@gmail.com', '$2y$10$JpyFQzcrpBciqbJQbFF2PuONG.usgrYLJnMNyqbeRZWs2gZo2SaMW', 'default.jpg', 'Admin', 1657626716),
(10, 'Marcel', 'marcel@gmail.com', '$2y$10$4vetT1OjL7Z0YRdw9auCteDv.KK3.G2YEucj.nmUMDFo94udHsSGK', 'default.jpg', 'User', 1657626729),
(11, 'halo', 'halo@gmail.com', '$2y$10$dY6p.r5YNet.4L.mMK2Va.hdfiaBpERM5/v3jl.FjP8Qu1SnAPQR6', 'default.jpg', 'User', 1658030913);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorit`
--
ALTER TABLE `favorit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_makanan` (`id_makanan`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
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
-- AUTO_INCREMENT for table `favorit`
--
ALTER TABLE `favorit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorit`
--
ALTER TABLE `favorit`
  ADD CONSTRAINT `favorit_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `favorit_ibfk_2` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
