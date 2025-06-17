-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2025 pada 12.14
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_adm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `nama`, `username`, `email`, `pass`, `tgl_lahir`, `alamat_adm`) VALUES
(1, 'Anur Mustakim', 'anurmustakim', 'anurmustakim@gmail.com', '$2y$10$WTPA3ueeNOBM79Vz6Do1/u2O/qk.2zQt5dZz8X4Zff7A8CcXT6Kbe', '2000-06-11', 'Batang, Subah, Adinuso');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hotel`
--

CREATE TABLE `tb_hotel` (
  `ID` int(11) NOT NULL,
  `STA` varchar(255) NOT NULL,
  `Nama_Hotel` varchar(255) NOT NULL,
  `Kecamatan` text NOT NULL,
  `Alamat` text NOT NULL,
  `Klasifikasi` varchar(255) NOT NULL,
  `Owner` varchar(255) NOT NULL,
  `Total_Room` int(11) NOT NULL,
  `Latitude` char(255) NOT NULL,
  `Longitude` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_hotel`
--

INSERT INTO `tb_hotel` (`ID`, `STA`, `Nama_Hotel`, `Kecamatan`, `Alamat`, `Klasifikasi`, `Owner`, `Total_Room`, `Latitude`, `Longitude`) VALUES
(1, '08.01.01.00245', 'IBIS STYLES BANDUNG', 'Sumur Bandung', 'Jl. Gatot Subroto No.289', 'Bintang 3', 'Noer Indradjaja', 240, '-6.9300264224193295', '107.60782457655615'),
(2, '08.01.01.00063', 'PATRA BANDUNG', 'Coblong', 'Jl. Ir. H. Juanda No.132', 'Bintang 3', 'Putut Ariwibowo', 85, '-6.893502', '107.611808'),
(3, '08.01.01.00537', 'HOTEL SANTIKA BANDUNG', 'Cicendo', 'Jl. Sumatera No.52-54', 'Bintang 3', 'Johanes Widjaja', 76, '-6.903400', '107.619123'),
(4, '08.01.01.00546', 'FOX HARRIS LITE HOTEL METRO INDAH BANDUNG', 'Buahbatu', 'Jl. Soekarno Hatta No.590', 'Bintang 3', 'Raynald Christopher', 93, '-6.961455', '107.687404'),
(5, '08.01.01.00015', 'YELLO HOTEL PASKAL', 'Andir', 'Jl. Pasir Kaliki No.25', 'Bintang 3', 'Lawrence Wibisono', 150, '-6.915062', '107.594179'),
(6, '08.01.01.54737', 'GEARY HOTEL', 'Sumur Bandung', 'Jl. Kebon Jati No.205', 'Bintang 3', 'GREGORY HANSON ANG', 62, '-6.909928', '107.609940'),
(7, '08.01.01.54761', 'HOTEL SANTIKA PASIR KOJA BANDUNG', 'Bojongloa Kaler', 'Jl. Peta No.241', 'Bintang 3', 'Tjong Sian Wie', 90, '-6.934477', '107.592570'),
(8, '08.01.01.54786', 'JATILUHUR VALLEY AND RESORT HOTEL', 'Sukasari', 'Jl. Dago Pakar Permai I', 'Bintang 3', 'JASA TIRTA II DADAN HIDAYAT', 75, '-6.944748', '107.658652'),
(9, '08.01.01.55154', 'AHADIAT HOTEL & BUNGALOW', 'Sukajadi', 'Jl. Sindang Sirna Elok No.9', 'Bintang 3', 'A. Sapah Arsakaraton', 59, '-6.889300', '107.589622'),
(10, '08.01.01.55543', 'MAISON TERASKITA BANDUNG', 'Lengkong', 'Jl. Asia Afrika No.122', 'Bintang 3', 'PT Waskita Karya Realty', 84, '-6.895840', '107.620597'),
(11, '08.01.01.00528', 'DE BRAGA BY ARTOTEL', 'Sumur Bandung', 'Jl. Braga No.10', 'Bintang 4', 'Nariman Prasetyo', 112, '-6.918598', '107.609102'),
(12, '08.01.01.00056', 'eL HOTEL BANDUNG', 'Cicendo', 'Jl. Sukajadi No.345', 'Bintang 4', 'Iwan Setiawan Sumantri', 516, '-6.920936', '107.621670'),
(13, '08.01.01.00500', 'FOUR POINTS BY SHERATON BANDUNG', 'Cibeunying Kaler', 'Jl. Ir. H. Juanda No.46', 'Bintang 4', 'Jemmy Kartiwa', 162, '-6.902532', '107.618738'),
(14, '08.01.01.00205', 'GRAND PASUNDAN CONVENTION HOTEL', 'Regol', 'Jl. Peta No.147', 'Bintang 4', 'Wimpy Setiawan Ibrahim', 163, '-6.933319', '107.596873'),
(15, '08.01.01.00514', 'GRAND TJOKRO PREMIERE HOTEL', 'Sukajadi', 'Jl. Cihampelas No.211-217', 'Bintang 4', 'LUCIA PURWANTI', 364, '-6.884922', '107.608318'),
(16, '08.01.01.00003', 'NOVOTEL BANDUNG', 'Cicendo', 'Jl. Cihampelas No.23-25', 'Bintang 4', 'MARIA HANA YAPAR', 165, '-6.899671', '107.609136'),
(17, '08.01.01.00548', 'DE JAVA HOTEL BANDUNG', 'Sukajadi', 'Jl. Sukajadi No.148-150', 'Bintang 4', 'Juan Sanjaya', 122, '-6.889871', '107.592918'),
(18, '08.01.01.00542', 'HARRIS CIUMBULEUIT BANDUNG', 'Cidadap', 'Jl. Ciumbuleuit No.50-58', 'Bintang 4', 'HADI SETIADARMA HO', 210, '-6.880336', '107.604601'),
(19, '08.01.01.00543', 'SARI ATER KAMBOTI HOTEL', 'Sukajadi', 'Jl. Dr. Setiabudi No.270', 'Bintang 4', 'PT PAN PERSERO', 184, '-6.882345', '107.605736'),
(20, '08.01.01.00033', 'THE JAYAKARTA SUITES BANDUNG', 'Cidadap', 'Jl. Ir. H. Juanda No.381', 'Bintang 4', 'KRISTIAN PUDJIADI', 210, '-6.862717', '107.609095'),
(21, '08.01.01.00422', 'CINNAMON HOTEL BOUTIQUE SYARIAH', 'Cibeunying Kaler', 'Jl. Dr. Cipto No.35', 'Bintang 4', 'IMAN RAHMAN', 50, '-6.902065', '107.613940'),
(22, '08.01.01.00515', 'THE AMAROOSSA HOTEL BANDUNG', 'Lengkong', 'Jl. Aceh No.71A', 'Bintang 4', 'DRA. AMALIA ROOSSENO', 92, '-6.902790', '107.623400'),
(23, '08.01.01.00203', 'Aryaduta Hotel Bandung', 'Sumur Bandung', 'Jl. Sumatera No.51', 'Bintang 5', 'Randolph Latumahina', 254, '-6.905014', '107.618554'),
(24, '08.01.01.00044', 'GRAND HOTEL PREANGER', 'Sumur Bandung', 'Jl. Asia Afrika No.81', 'Bintang 5', 'Wahyu Nugroho', 187, '-6.921858', '107.609347'),
(25, '08.01.01.00058', 'GRAND MERCURE BANDUNG SETIABUDI', 'Sukasari', 'Jl. Dr. Setiabudi No.269-275', 'Bintang 5', 'SINATRA ARTO HARDY', 204, '-6.866620', '107.596336'),
(26, '08.01.01.00014', 'HILTON BANDUNG', 'Cicendo', 'Jl. HOS Tjokroaminoto No.41-43', 'Bintang 5', 'BAMBANG', 186, '-6.912781', '107.603115'),
(27, '08.01.01.00244', 'PULLMAN BANDUNG GRAND CENTRAL', 'Sumur Bandung', 'Jl. Diponegoro No.27', 'Bintang 5', 'Paul Christian Ariyanto', 279, '-6.915040', '107.610290'),
(28, '08.01.01.00541', 'THE PAPANDAYAN HOTEL', 'Lengkong', 'Jl. Gatot Subroto No.83', 'Bintang 5', 'MARCELLA SAPARDAN', 172, '-6.925300', '107.628700'),
(29, '08.01.01.54738', 'THE GAIA BANDUNG', 'Sukajadi', 'Jl. Dr. Setiabudi No.430', 'Bintang 5', 'Asep Saleh', 280, '-6.821860', '107.617600'),
(30, '08.01.01.00235', 'PADMA HOTEL BANDUNG', 'Cidadap', 'Jl. Ranca Bentang No.56-58', 'Bintang 5', 'MARTIN BASUKI HARTONO', 124, '-6.857330', '107.605930'),
(31, '08.01.01.00043', 'THE TRANS LUXURY HOTEL', 'Batununggal', 'Jl. Gatot Subroto No.289', 'Bintang 5', 'Chairul Tanjung', 280, '-6.924489', '107.636644'),
(32, '08.01.01.00264', 'CROWNE PLAZA BANDUNG', 'Sumur Bandung', 'Jl. Lembong No.19', 'Bintang 5', 'SANTOSO WINATA', 270, '-6.921220', '107.608750');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jumlah_hotel`
--

CREATE TABLE `tb_jumlah_hotel` (
  `ID` int(11) NOT NULL,
  `Kd_Kec` varchar(255) NOT NULL,
  `Nm_Kec` varchar(255) NOT NULL,
  `Jml_Hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jumlah_hotel`
--

INSERT INTO `tb_jumlah_hotel` (`ID`, `Kd_Kec`, `Nm_Kec`, `Jml_Hotel`) VALUES
(1, '3273010', 'Bandung Kulon', 1),
(2, '3273020', 'Babakan Ciparay', 3),
(3, '3273030', 'Bojongloa Kaler', 5),
(4, '3273040', 'Bojongloa Kidul', 12),
(5, '3273050', 'Astanaanyar', 6),
(6, '3273060', 'Regol', 26),
(7, '3273070', 'Lengkong', 67),
(8, '3273080', 'Bandung Kidul', 5),
(9, '3273090', 'Margacinta', 9),
(10, '3273100', 'Rancasari', 4),
(11, '3273110', 'Cibiru', 5),
(12, '3273120', 'Ujungberung', 1),
(13, '3273130', 'Arcamanik', 0),
(14, '3273140', 'Cicadas', 1),
(15, '3273150', 'Kiaracondong', 4),
(16, '3273160', 'Batununggal', 11),
(17, '3273170', 'Sumurbandung', 33),
(18, '3273180', 'Andir', 22),
(19, '3273190', 'Cicendo', 47),
(20, '3273200', 'Bandung Wetan', 48),
(21, '3273210', 'Cibeunying Kidul', 2),
(22, '3273220', 'Cibeunying Kaler', 17),
(23, '3273230', 'Coblong', 68),
(24, '3273240', 'Sukajadi', 77),
(25, '3273250', 'Sukasari', 40),
(26, '3273260', 'Cidadap', 52);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_masjid`
--

CREATE TABLE `tb_masjid` (
  `id` int(11) NOT NULL,
  `nama` char(40) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_masjid`
--

INSERT INTO `tb_masjid` (`id`, `nama`, `lat`, `lng`) VALUES
(1, 'Masjid Al Fattah', -6.9769, 110.348),
(2, 'Masjid Al Sajidin', -7.00876, 110.363),
(3, 'Masjid Al Huda', -6.99319, 110.416),
(4, 'Masjid Al Mabrur', -7.0341, 110.395),
(5, 'Masjid Fajar Maqbul', -7.03156, 110.391),
(6, 'Masjid Al Amin', -7.07391, 110.398),
(7, 'Masjid Baitur Rahim', -7.09346, 110.398),
(8, 'Masjid Miftahul Huda', -7.08622, 110.395),
(9, 'Masjid Baitur Rahman', -7.1083, 110.383),
(10, 'Masjid Darum Na\'im', -7.10432, 110.382),
(11, 'Masjid Al Hikmah', -6.99739, 110.476),
(12, 'Masjid At Toah', -7.00132, 110.476),
(13, 'Masjid. Nurul Ikhlas', -7.02593, 110.491),
(14, 'Masjid Al Kautsar', -7.01605, 110.495),
(15, 'Masjid Baiturrahim', -7.01605, 110.373);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `tb_hotel`
--
ALTER TABLE `tb_hotel`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `STA` (`STA`);

--
-- Indeks untuk tabel `tb_jumlah_hotel`
--
ALTER TABLE `tb_jumlah_hotel`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Kd_Kec` (`Kd_Kec`);

--
-- Indeks untuk tabel `tb_masjid`
--
ALTER TABLE `tb_masjid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_hotel`
--
ALTER TABLE `tb_hotel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
