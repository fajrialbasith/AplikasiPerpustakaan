-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2024 pada 17.46
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `historypeminjaman`
--

CREATE TABLE `historypeminjaman` (
  `IdBuku` varchar(20) NOT NULL,
  `NimMhs` varchar(20) NOT NULL,
  `TglPinjam` date NOT NULL,
  `TglKembali` date NOT NULL,
  `LamaPinjam` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `masterbuku`
--

CREATE TABLE `masterbuku` (
  `IdBuku` varchar(20) NOT NULL,
  `NamaBuku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `masterbuku`
--

INSERT INTO `masterbuku` (`IdBuku`, `NamaBuku`) VALUES
('12412214', 'Test2'),
('132124153', 'Test4'),
('21312', 'test6'),
('435', 'test5'),
('435435', 'test7'),
('542635', 'test3'),
('B123213', 'Tere Liye - Bulan asdas'),
('BOOK001', 'Tere Liye - Ayahku Bukan Pembohong'),
('BOOK12331', 'Tere Liye - Matahari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mastermahasiswa`
--

CREATE TABLE `mastermahasiswa` (
  `NimMhs` varchar(20) NOT NULL,
  `NamaMhs` varchar(50) NOT NULL,
  `TanggalMasuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mastermahasiswa`
--

INSERT INTO `mastermahasiswa` (`NimMhs`, `NamaMhs`, `TanggalMasuk`) VALUES
('NIM001', 'Prajoko Ganis Mahfimin', '2024-01-29'),
('NIM003', 'Sobirin', '2024-02-05'),
('NIM004', 'Gozen', '2024-02-21'),
('NIM005', 'Andi', '2024-02-21'),
('NIM006', 'Haryo', '2024-02-13'),
('NIM007', 'Yudha', '2024-01-29'),
('NIM008', 'Dedy', '2024-02-18'),
('NIM009', 'Bahar', '2024-02-12'),
('NIM010', 'Depe', '2024-02-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stokbuku`
--

CREATE TABLE `stokbuku` (
  `IdBuku` varchar(20) NOT NULL,
  `JmlStok` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksipeminjaman`
--

CREATE TABLE `transaksipeminjaman` (
  `IdBuku` varchar(20) NOT NULL,
  `NamaBuku` varchar(50) NOT NULL,
  `NimMhs` varchar(20) NOT NULL,
  `TglKembali` date NOT NULL,
  `TglPinjam` date NOT NULL,
  `LamaPinjam` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksipeminjaman`
--

INSERT INTO `transaksipeminjaman` (`IdBuku`, `NamaBuku`, `NimMhs`, `TglKembali`, `TglPinjam`, `LamaPinjam`) VALUES
('BOOK15314', 'Tere Liye - Matahari', 'NIM002', '2024-02-24', '2024-02-20', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(21) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `role`) VALUES
('test', 'test@gmail.com', '$2y$10$b2xYPsDWcMm.kqxFr9Hxfu47/Q04CGt.z0U0nh.IxfobnHhMXn41.', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `historypeminjaman`
--
ALTER TABLE `historypeminjaman`
  ADD PRIMARY KEY (`IdBuku`),
  ADD UNIQUE KEY `IDBuku` (`IdBuku`,`NimMhs`);

--
-- Indeks untuk tabel `masterbuku`
--
ALTER TABLE `masterbuku`
  ADD PRIMARY KEY (`IdBuku`),
  ADD UNIQUE KEY `IDBuku` (`IdBuku`);

--
-- Indeks untuk tabel `mastermahasiswa`
--
ALTER TABLE `mastermahasiswa`
  ADD PRIMARY KEY (`NimMhs`),
  ADD UNIQUE KEY `NimMhs` (`NimMhs`);

--
-- Indeks untuk tabel `stokbuku`
--
ALTER TABLE `stokbuku`
  ADD PRIMARY KEY (`IdBuku`),
  ADD UNIQUE KEY `IDBuku` (`IdBuku`);

--
-- Indeks untuk tabel `transaksipeminjaman`
--
ALTER TABLE `transaksipeminjaman`
  ADD PRIMARY KEY (`IdBuku`),
  ADD UNIQUE KEY `IDBuku` (`IdBuku`),
  ADD UNIQUE KEY `NimMhs` (`NimMhs`),
  ADD UNIQUE KEY `IDBuku_2` (`IdBuku`) USING BTREE;

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`,`password`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `historypeminjaman`
--
ALTER TABLE `historypeminjaman`
  ADD CONSTRAINT `historypeminjaman_ibfk_1` FOREIGN KEY (`IdBuku`) REFERENCES `transaksipeminjaman` (`IdBuku`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `stokbuku`
--
ALTER TABLE `stokbuku`
  ADD CONSTRAINT `stokbuku_ibfk_1` FOREIGN KEY (`IdBuku`) REFERENCES `masterbuku` (`IDBuku`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
