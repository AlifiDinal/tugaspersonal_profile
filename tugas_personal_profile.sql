-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2025 at 04:18 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_personal_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `born` date NOT NULL,
  `address` text NOT NULL,
  `zib_code` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `total_project` int NOT NULL,
  `work` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `born`, `address`, `zib_code`, `email`, `phone`, `total_project`, `work`, `image`, `description`) VALUES
(5, 'Alifi Dinal Maulana', '2008-05-27', '                       Keweden, Trirenggo, Bantul', 60007, 'alifiidinalmaul@gmail.com', '+62 895-1809-2195', 4, 'Pelajar', '1753248354.png', '   Saya Alifi Dinal Maulana\r\n      Saya berSekolah/Pndidikann di SMK N 1 Sanden,saya di SMK tersebut mengambil jurusan RPL(Rekayasa Perangkat Lunak).\r\n             Saya sedang menjalankan PKL(Praktek Lapanngan Kerja) di PT Lauwba Techno Indonesia.\r\n             Saya sudah kurang/lebih 1 Bulan PKL di PT in\r\n             Tujuan saya PKL di sini adalah ingin Menambah/Memperluas Ilmu dan Pengetahuan saya tentang Dunia IT\r\n             sekian perkenalan singkat dari saya selebihnya ad di bawah.');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `date`, `author`, `title`, `description`) VALUES
(2, '1753255114.png', '2024-06-01', 'Alifi Dinal Maulana', 'SMK N 1 Sanden', 'SMK Negeri 1 Sanden adalah salah satu Sekolah Menengah Kejuruan (SMK) negeri yang berlokasi di Kecamatan Sanden, Kabupaten Bantul, Daerah Istimewa Yogyakarta. Sekolah ini berkomitmen untuk mencetak lulusan yang kompeten, mandiri, dan siap bersaing di dunia kerja maupun melanjutkan ke jenjang pendidikan yang lebih tinggi.\r\n\r\nSMK N 1 Sanden memiliki beberapa program keahlian yang fokus pada penguasaan keterampilan dan teknologi terkini, salah satunya adalah Rekayasa Perangkat Lunak (RPL), yang membekali siswa dengan kemampuan pemrograman, pengembangan aplikasi, hingga dasar-dasar jaringan dan keamanan sistem.\r\n\r\nDengan dukungan fasilitas yang memadai, guru-guru profesional, serta lingkungan belajar yang kondusif, SMK N 1 Sanden terus berkembang menjadi sekolah kejuruan yang unggul dan berdaya saing di tingkat regional maupun nasional.'),
(3, '1753255688.png', '2025-07-23', 'Alifi Dinal Maulana', 'Jurusan', 'Rekayasa Perangkat Lunak (RPL) di SMK Negeri 1 Sanden adalah jurusan yang berfokus pada pengembangan keterampilan di bidang teknologi informasi, khususnya dalam perancangan, pengembangan, dan pemeliharaan perangkat lunak (software). Jurusan ini dirancang untuk mencetak lulusan yang mampu bersaing di dunia industri kreatif digital maupun dunia kerja berbasis teknologi.\r\n\r\nSiswa RPL akan belajar berbagai hal seperti:\r\n\r\nPemrograman (web, mobile, dan desktop)\r\n\r\nBasis data\r\n\r\nDesain antarmuka (UI/UX)\r\n\r\nAnalisis dan perancangan sistem\r\n\r\nPengembangan aplikasi berbasis objek dan berorientasi layanan\r\n\r\nPengujian dan debugging software\r\n\r\nSelain teori, siswa juga dibekali praktik langsung melalui project, magang industri, serta pelatihan wirausaha digital. Jurusan ini cocok untuk siswa yang tertarik pada dunia coding, aplikasi, teknologi, dan inovasi digital'),
(4, '1753256143.png', '2025-07-23', 'Alifi Dinal Maulana', 'PT Lauwba Techno', 'PT Lauwba Techno Indonesia adalah perusahaan teknologi informasi yang berfokus pada pengembangan aplikasi berbasis web dan mobile, serta penyedia solusi digital untuk kebutuhan bisnis dan institusi. Berlokasi di Yogyakarta, perusahaan ini telah berpengalaman menangani berbagai project IT dari skala kecil hingga besar, baik lokal maupun internasional.\r\n\r\nLayanan utama dari PT Lauwba meliputi:\r\n\r\nPembuatan website company profile, e-commerce, dan portal berita.\r\n\r\nPengembangan aplikasi Android dan iOS.\r\n\r\nSistem informasi berbasis web (seperti sistem manajemen sekolah, keuangan, dan kepegawaian).\r\n\r\nLayanan digital marketing dan SEO.\r\n\r\nPelatihan dan konsultasi IT.\r\n\r\nDengan tim yang profesional dan berpengalaman, PT Lauwba dikenal sebagai perusahaan yang kreatif, inovatif, dan mampu memberikan solusi teknologi yang tepat guna. Perusahaan ini juga menjadi tempat belajar yang baik bagi siswa SMK atau mahasiswa melalui program magang/PKL di bidang teknologi informasi');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(6, 'Aliff', 'hhgggsg@gml.com', 'oke', 'uy');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `title`, `job`) VALUES
(3, '1753256517.png', 'Portofolio Boostrap', 'Pelajar'),
(4, '1753263553.png', 'Web Gallery', 'Pelajar'),
(5, '1753263568.png', 'Personal Profile', 'Pelajar');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint NOT NULL,
  `date` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `date`, `job`, `place`, `description`) VALUES
(8, '2023-2026', ' SMK,(Sekolah Menengah Kejurusan)', 'SMK N 1 Sanden', ' Pertengahan Tahun 2023  awal saya masuk SMK saya mengambil jurusan RPL ,Pertengahan Tahun 2024 saya naik kelas11 Dan Pertengahan Tahun 2025 saya naik kelas 12 dan menjalankan  kegiatan PKL\r\nsampai 2026 dan saya Lulus.'),
(9, '2025', 'PKL,(Praktek Lapangan Kerja), /Magang.', 'PT Lauwba Techno Indonesia', 'Saya awal masuk PKL di PT Lauwba pada Tanggal 01/07/2025.  \r\nsaya meilih PKL disini dikarnakan kinerja kariawan nya yang bagus.\r\nmisi saya PKL  di sini unntuk menambah ilmu dan memperluas ilmu IT.\r\nsaya disini diajarkan banyak hal contohnya membuat web,dan yang lain\".\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint NOT NULL,
  `icon` text NOT NULL,
  `job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `job`) VALUES
(2, '1753430356.png', 'Web Dev'),
(3, '1753430367.png', 'Desainer'),
(4, '1753678489.png', 'Content Creator');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` bigint NOT NULL,
  `Skill` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `percent` int NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `Skill`, `percent`, `description`) VALUES
(2, 'HTML', 40, 'Saya memiliki pemahaman dasar tentang HTML dan mampu membuat struktur sederhana halaman web, seperti penggunaan tag dasar (<html>, <head>, <body>, <p>, <a>, <img>, <div>, dll). Saya bisa membuat form sederhana, menyisipkan gambar dan tautan, serta memahami hirarki elemen dalam dokumen HTML. Namun, saya masih dalam tahap belajar untuk mengoptimalkan penggunaan atribut, semantic HTML, dan struktur yang lebih kompleks.'),
(3, 'CSS', 35, 'Saya memiliki pemahaman dasar mengenai framework Bootstrap. Saya dapat menggunakan komponen dasar seperti grid system, tombol, form, dan navbar untuk membangun layout halaman web yang responsif. Saya juga sudah mulai memahami cara menggunakan class utility untuk styling cepat. Meskipun masih dalam tahap awal, saya terus belajar untuk lebih menguasai komponen lanjutan dan kustomisasi tema dengan Bootstrap.'),
(4, 'BOOSTRAP', 30, 'Saya memahami dasar-dasar CSS dan mampu mengatur tampilan elemen pada halaman web, seperti warna, ukuran teks, spasi (margin dan padding), serta posisi elemen menggunakan Flexbox secara sederhana. Saya juga terbiasa menggunakan selector dasar dan beberapa pseudo-class. Meskipun masih dalam tahap belajar, saya terus mengembangkan kemampuan dalam membuat desain yang responsif dan menarik secara visual.'),
(5, 'PHP', 40, 'Saya memiliki pemahaman dasar tentang PHP dan mampu membuat skrip sederhana untuk keperluan pengolahan data di sisi server. Saya dapat menggunakan variabel, kondisi, perulangan, serta fungsi dasar. Selain itu, saya memahami cara menghubungkan PHP dengan database MySQL untuk menampilkan dan menyimpan data. Saat ini, saya masih dalam proses mendalami konsep seperti session, form handling yang lebih aman, dan struktur kode yang lebih terorganisir menggunakan fungsi atau file terpisah.');

-- --------------------------------------------------------

--
-- Table structure for table `socmeds`
--

CREATE TABLE `socmeds` (
  `id` bigint NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `socmeds`
--

INSERT INTO `socmeds` (`id`, `icon`, `link`) VALUES
(3, '1754032069.png', 'https://www.tiktok.com/@guaalipcoy_?_t=ZS-8yGfqabEDrc&_r=1'),
(4, '1754039074.png', 'https://www.instagram.com/alipdnlm?igsh=c3k5NWxsczI4N2Zu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(4, 'alopss', 'alip@gmail.com', '$2y$10$1tViJnJV2Jjxh/p60fVud.2.XbS5GcIQIivBpugsl45wl/1v0And2'),
(5, 'alip', 'alifiidinalmaul@gmail.com', '$2y$10$.Di5UWbAUOO2d08ZRKEUD.vs.K9JVKnPbtj30nJwndUcUfgzTUfn2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socmeds`
--
ALTER TABLE `socmeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `socmeds`
--
ALTER TABLE `socmeds`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
