-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2023 pada 22.21
-- Versi server: 8.0.29
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id_category` int NOT NULL,
  `name_category` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `id_user`) VALUES
(1, 'Outfit', 1),
(2, 'Furniture', 1),
(3, 'Food', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int NOT NULL,
  `name_customer` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email_customer` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `address_-customer` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `name_customer`, `email_customer`, `address_-customer`) VALUES
(1, 'Lucky Sitompul', 'Lucky02@gmail.com', 'JL. R.A Kartini Gg XV No 54 Jombang'),
(2, 'Bima Arya Alexander', 'Bimalex@gmail.com', 'JL. Sudirman Gg VII No 64 Bandung'),
(3, 'Funi Hamdani', 'Hamdani321@gmail.com', 'JL. Veteran Gg XX No 23 Pasuruan'),
(4, 'Wendy Chuaks', 'Wendy3@gmail.com', 'JL. Usman Sadar Gg IV No 23 Gresik'),
(5, 'Sukirman Santoso', 'sukirman@gmail.com', 'JL. Raden Patah Gg XII No. 43 Surabaya'),
(6, 'Fikri Subakri', 'Fikri99@gmail.com', 'JL. Kahyangan Gg XXI No. 60 Sidoarjo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_sales`
--

CREATE TABLE `detail_sales` (
  `id_detail_sales` int NOT NULL,
  `id_sales` int NOT NULL,
  `id_product` int NOT NULL,
  `quantity` int NOT NULL,
  `sub_total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_sales`
--

INSERT INTO `detail_sales` (`id_detail_sales`, `id_sales`, `id_product`, `quantity`, `sub_total`) VALUES
(1, 1, 8, 5, 75000),
(2, 1, 2, 1, 35000),
(3, 2, 7, 1, 50000),
(4, 3, 9, 2, 80000),
(5, 3, 8, 1, 15000),
(6, 4, 6, 1, 75000),
(7, 4, 1, 1, 65000),
(8, 4, 2, 1, 35000),
(9, 5, 4, 1, 150000),
(10, 5, 10, 2, 80000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id_product` int NOT NULL,
  `name_product` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_category` int NOT NULL,
  `quantity_product` int NOT NULL,
  `price_product` int NOT NULL,
  `photo_product` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `information_product` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `id_category`, `quantity_product`, `price_product`, `photo_product`, `information_product`) VALUES
(1, 'Sweater Wanita Oversize Korea Outift Crewneck Hoodie Zumper', 1, 50, 65000, 'sweater.png', 'Material : fleece tebal halus\r\nDetail Ukuran All Size fit L (satu ukuran)\r\nLingkar Dada :-+170cm\r\nPanjang : -+70cm\r\n👀Jaket ini cocok dipakai untuk aktivitas indoor maupun outdoor bisa di mix n match sesuai dgn acara kalian. '),
(2, 'Celana Kulot Indi HW Outfit Wanita Kekinian Terbaru', 1, 30, 35000, 'kulot.png', 'Indi HW Kulot Bahan Katun Poly\r\n\r\nDetail Ukuran :\r\nLingkar Pinggang : 60-96cm\r\nPanjang Celana : 90cm\r\n'),
(3, 'Hoodie Butterfly Zumper Korea Outfit Wanita', 1, 50, 60000, 'hoodie.png', 'Material : fleece tebal halus\r\nDetail Ukuran All Size fit L (satu ukuran)\r\nLingkar Dada :-+130cm\r\nPanjang : -+70cm\r\n👀Jaket ini cocok dipakai untuk aktivitas indoor maupun outdoor bisa di mix n match sesuai dgn acara kalian. '),
(4, 'Celana Jeans Pria Biru Muda Panjang Sobek Korean Style', 1, 50, 150000, 'jeans.png', 'bahan nya yang nyaman dan lentur/stretch sangat cocok untuk Pemakaian Sehari-hari.\r\nBahkan sangat nyaman dipakai ketika duduk dan Berkendara ataupun sedang berkegiatan di outdoor\r\n\r\n\r\nKlasifikasi warna: biru muda\r\nPanjang: 28-32\r\nWarna: warna terang\r\n'),
(5, 'Meja Lipat Laptop Belajar Portable Serbaguna', 2, 50, 60000, 'meja.png', 'Laptop Table didesain portable agar mudah dipindahkan ke tempat yang diinginkan. Dan sudah disertai keunggulan lainnya.\r\n1.Terkena noda bedak ataupun minyak, seka perlahan dengan kain saja.\r\n2.Papan meja terbuat dari bahan ramah lingkungan，Tahan api dan suhu tinggi\r\n3.Ringan mudah dilipat | tidak makan tempat | dapat disimpan dgn ruang yg kecil\r\n4.Memiliki tempat atau lubang khusus menaruh minum, menaruh tablet atau buku, dan pulpen, dan ada juga lubang tempat ponsel\r\n\r\nBahan   : 720 density fiberboard desktop\r\nBerat     : 2kg\r\nUkuran  : 60 x 40 x 28 cm'),
(6, 'Rak Buku Dinding Minimalis (1set 3pcs) U Shelves', 2, 40, 75000, 'rakdinding.png', 'Pilihan warna : \r\n👉 Hitam\r\n👉 Putih\r\n👉 Coklat Serat Kayu\r\n\r\nIsi paket Rak Dinding Ambalan / Floating Shelves ​​Isi 3 Buah [​​40/30/20 cm] | Dekorasi Dinding :\r\n📌 Rak dinding minimalis ukuran 40x10x2 cm\r\n📌 Rak dinding minimalis ukuran 30x10x2 cm\r\n📌 Rak dinding minimalis ukuran 20x10x2 cm\r\n📌 6pcs bracket besi\r\n📌 6pcs pischer \r\n\r\nPacking : karton/kardus dan full lakban\r\nBahan: Plywood Grade A lapis decosheet atau pelapis furniture\r\n( Sehingga tidak mudah lecet ).'),
(7, 'Rak Hexagonal Kayu (1set 3pcs)', 2, 40, 50000, 'rakhexagonal.png', 'Pilihan warna : \r\n👉 Hitam\r\n👉 Putih\r\n\r\nIsi paket Rak Dinding Hexagonal / Floating Shelves ​​Isi 3 Buah | Dekorasi Dinding :\r\n📌 Rak dinding minimalis ukuran 7x21x24 cm (x3)\r\n📌 6pcs bracket besi\r\n📌 6pcs pischer \r\n\r\nPacking : karton/kardus dan full lakban\r\nBahan: Plywood Grade A lapis decosheet atau pelapis furniture\r\n( Sehingga tidak mudah lecet ).'),
(8, 'Biskuit Biscoff Bites', 3, 100, 15000, 'biskuit.jpeg', 'Potongan brownies dengan perpaduan topping lotus biskuit dan selai biscoff.\r\ntersedia dalam ukuran Small (8oz) & Medium(12oz)\r\n\r\nCUP TOPPING YANG DIGUNAKAN UK 25 ML.\r\nCRUMBLE BISCOFF KAMI KIRIM DENGAN KEMASAN (PLASTIK) UNTUK MENGHINDARI PENGALAMAN CRUMBLE TUMPAH😊'),
(9, 'Sosis So Good premium chiken sausage 300gr', 3, 100, 40000, 'sosis.png', 'INFORMASI PRODUK\r\nDisetiap gigitan So Good Sausage Premium Honey, terdapat kandungan daging dada ayam yang lebih banyak, dengan kenikmatan ayam berkualitas, dan tekstur yang crunchy. Dapat dinikmati langsung tanpa membuka selongsong sosisnya, dikemas vacuum untuk menjaga bentuk, kesegaran, dan kualitas rasa. Bersiaplah memanjakan lidah dengan kelezatannya.\r\n- Berat: 300 gr\r\n- Isi: 5 pcs'),
(10, 'BROWNIES PANGGANG COKLAT 20x10', 3, 50, 40000, 'brownies.png', 'Terbuat dari bahan-bahan GOOD QUALITY dan pastinya 100% halal.\r\n- TANPA Bahan Pengawet\r\n- TANPA Bahan Pengembang\r\n- TANPA Pemanis Buatan\r\n\r\nBrownies kami menggunakan DARK CHOCOLATE dan BUBUK COKLAT PREMIUM dan GULA MURNI sehingga \r\nRASANYA NYOKLAT BANGET DAN TIDAK ENEG (tidak serik ditenggorokan)\r\nPASTI KETAGIHAN\r\nKRESS DI LUAR ..LEMBUT DIDALAM\r\n\r\nTersedia Ukuran:\r\nMedium (20×10cm) isi 18 potong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales`
--

CREATE TABLE `sales` (
  `id_sales` int NOT NULL,
  `id_customer` int NOT NULL,
  `id_user` int NOT NULL,
  `order_date` datetime NOT NULL,
  `total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sales`
--

INSERT INTO `sales` (`id_sales`, `id_customer`, `id_user`, `order_date`, `total`) VALUES
(1, 1, 1, '2023-05-24 07:16:11', 110000),
(2, 2, 1, '2023-05-24 07:49:14', 50000),
(3, 3, 1, '2023-05-24 08:12:53', 95000),
(4, 2, 1, '2023-05-25 09:34:12', 175000),
(5, 1, 1, '2023-05-25 10:44:17', 80000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `name_user` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email_user` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password_user` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `type_user` enum('kasir','gudang') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `email_user`, `password_user`, `type_user`) VALUES
(1, 'Faris Muhammad', 'faris@gmail.com', 'a591beadc459face4e8d3bdcc6d6e4b7f02e7b56', 'kasir'),
(2, 'Budi Doremi', 'budi@gmail.com', '30a96cdbc1205b1ed4ae399350fe8f6d839f32cc', 'gudang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `detail_sales`
--
ALTER TABLE `detail_sales`
  ADD PRIMARY KEY (`id_detail_sales`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeks untuk tabel `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id_sales`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `detail_sales`
--
ALTER TABLE `detail_sales`
  MODIFY `id_detail_sales` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `sales`
--
ALTER TABLE `sales`
  MODIFY `id_sales` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
