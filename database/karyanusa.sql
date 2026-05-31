CREATE DATABASE IF NOT EXISTS karyanusa CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE karyanusa;

CREATE TABLE IF NOT EXISTS admin_users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(80) NOT NULL UNIQUE,
  password_hash VARCHAR(255) NOT NULL,
  name VARCHAR(120) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS kerajinan (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(160) NOT NULL,
  kategori VARCHAR(80) NOT NULL,
  pengrajin VARCHAR(160) NOT NULL,
  daerah VARCHAR(120) NOT NULL,
  harga VARCHAR(80) NOT NULL,
  stok INT NOT NULL DEFAULT 0,
  status VARCHAR(40) NOT NULL DEFAULT 'Draft',
  gambar LONGTEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS pengrajin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(160) NOT NULL,
  keahlian VARCHAR(160) NOT NULL,
  daerah VARCHAR(120) NOT NULL,
  pengalaman VARCHAR(80) NOT NULL,
  kontak VARCHAR(80) NOT NULL,
  status VARCHAR(40) NOT NULL DEFAULT 'Menunggu',
  foto LONGTEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS katalog (
  id INT AUTO_INCREMENT PRIMARY KEY,
  judul VARCHAR(180) NOT NULL,
  kategori VARCHAR(80) NOT NULL,
  penulis VARCHAR(120) NOT NULL,
  tanggal DATE NOT NULL,
  ringkasan TEXT NOT NULL,
  penjelasan LONGTEXT,
  gambar LONGTEXT,
  halaman VARCHAR(80),
  status VARCHAR(40) NOT NULL DEFAULT 'Draft',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS ulasan (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(120) NOT NULL,
  foto LONGTEXT,
  gambar_produk LONGTEXT,
  produk VARCHAR(160) NOT NULL,
  halaman VARCHAR(40) NOT NULL DEFAULT 'Beranda',
  rating TINYINT NOT NULL DEFAULT 5,
  komentar TEXT NOT NULL,
  status VARCHAR(40) NOT NULL DEFAULT 'Menunggu',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS events (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(180) NOT NULL,
  jenis VARCHAR(80) NOT NULL,
  lokasi VARCHAR(160) NOT NULL,
  tanggal DATE NOT NULL,
  biaya VARCHAR(80) NOT NULL,
  status VARCHAR(40) NOT NULL DEFAULT 'Dibuka',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS contact_messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(160) NOT NULL,
  email VARCHAR(160) NOT NULL,
  telepon VARCHAR(80),
  instansi VARCHAR(160) NOT NULL,
  subjek VARCHAR(180) NOT NULL,
  pesan TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO admin_users (username, password_hash, name)
VALUES ('admin', '$2y$10$v98EhYtbkz0SfUYfuilXRutLco1eZeIGztJGw0SdOC0ypNWewAC0K', 'Admin KaryaNusa')
ON DUPLICATE KEY UPDATE username = username;

INSERT INTO kerajinan (id, nama, kategori, pengrajin, daerah, harga, stok, status, gambar) VALUES
(1, 'Kain Songket Lepus', 'Tekstil', 'Ibu Fatimah', 'Palembang', 'Rp 1.250.000', 18, 'Terbit', 'asset/kainsongket.webp'),
(2, 'Topeng Barong', 'Kayu', 'I Nyoman Sudiarta', 'Bali', 'Rp 750.000', 9, 'Terbit', 'asset/topengbarong.webp'),
(3, 'Set Piring Pleced', 'Gerabah', 'Ibu Siti', 'Lombok', 'Rp 320.000', 24, 'Terbit', 'asset/piring.webp')
ON DUPLICATE KEY UPDATE nama = VALUES(nama);

INSERT INTO pengrajin (id, nama, keahlian, daerah, pengalaman, kontak, status, foto) VALUES
(1, 'Bu Hariyani Winotosastro', 'Batik Tulis', 'Yogyakarta', '45 tahun', '0812-1000-2025', 'Terverifikasi', 'asset/hariyani1.webp'),
(2, 'Pak Bambang Nuryanto', 'Logam Tradisional', 'Grobogan', '35 tahun', '0813-4550-8891', 'Terverifikasi', 'asset/bambang.webp'),
(3, 'I Made Sukrisna', 'Ukir Kayu', 'Bali', '28 tahun', '0821-7744-9012', 'Terverifikasi', 'asset/narto.webp')
ON DUPLICATE KEY UPDATE nama = VALUES(nama);

INSERT INTO katalog (id, judul, kategori, penulis, tanggal, ringkasan, penjelasan, gambar, halaman, status) VALUES
(1, 'Kain Songket Lepus', 'Tekstil', 'Admin KaryaNusa', '2026-05-24', 'Songket Palembang dengan motif benang emas yang menutupi hampir seluruh kain.', 'Kain Songket Lepus adalah warisan tekstil Palembang yang dikenal karena kilau benang emasnya. Katalog ini menjelaskan ciri, fungsi adat, proses tenun, dan nilai budaya songket lepus dalam kehidupan masyarakat Palembang.', 'asset/kainsongket.webp', 'katalog1.php', 'Terbit'),
(2, 'Topeng Barong', 'Kayu', 'Admin KaryaNusa', '2026-05-24', 'Topeng sakral Bali yang melambangkan perlindungan dan kebaikan.', 'Topeng Barong dibuat dari kayu pilihan dan menjadi bagian penting dalam seni pertunjukan serta upacara adat Bali. Penjelasan katalog meliputi makna spiritual, teknik ukir, dan penggunaannya dalam Tari Barong.', 'asset/topengbarong.webp', 'katalog2.php', 'Terbit'),
(3, 'Set Piring Plered', 'Keramik', 'Admin KaryaNusa', '2026-05-24', 'Keramik Plered dari Purwakarta dengan karakter tanah liat lokal.', 'Set Piring Plered berasal dari sentra keramik Purwakarta. Katalog ini memuat sejarah, karakter bahan, proses pembakaran, serta fungsi produk sebagai peralatan makan dan dekorasi rumah.', 'asset/piring.webp', 'katalog3.php', 'Terbit'),
(4, 'Tekstil Tradisional', 'Tekstil', 'Admin KaryaNusa', '2026-05-24', 'Ragam batik, tenun, dan songket dari berbagai daerah Indonesia.', 'Tekstil tradisional menyimpan identitas daerah melalui motif, warna, dan teknik pembuatannya. Katalog ini menjelaskan batik, tenun, dan songket sebagai karya pakai sekaligus ekspresi budaya.', 'asset/tekstil.webp', 'katalog4.php', 'Terbit'),
(5, 'Kerajinan Kayu', 'Kayu', 'Admin KaryaNusa', '2026-05-24', 'Ukiran, pahatan, dan produk kayu bernilai seni dari Nusantara.', 'Kerajinan kayu dibuat melalui pemilihan bahan, pemahatan, penghalusan, dan finishing. Penjelasan katalog berfokus pada nilai estetika, fungsi pakai, serta makna motif dalam karya kayu tradisional.', 'asset/kayu.webp', 'katalog5.php', 'Terbit'),
(6, 'Keramik dan Gerabah', 'Gerabah', 'Admin KaryaNusa', '2026-05-24', 'Produk tanah liat yang dibentuk, dikeringkan, dan dibakar.', 'Keramik dan gerabah memiliki fungsi sebagai wadah, alat saji, hiasan, dan media ekspresi budaya. Katalog ini menerangkan perbedaan bahan, suhu pembakaran, serta contoh produk yang umum ditemukan.', 'asset/gerabah.webp', 'katalog6.php', 'Terbit'),
(7, 'Perhiasan Tradisional', 'Perhiasan', 'Admin KaryaNusa', '2026-05-24', 'Aksesori adat yang mencerminkan status, identitas, dan simbol budaya.', 'Perhiasan tradisional hadir dalam bentuk gelang, kalung, hiasan kepala, dan aksesori upacara. Katalog ini membahas bahan, motif, fungsi sosial, serta nilai sejarahnya.', 'asset/perhiasan.webp', 'katalog7.php', 'Terbit'),
(8, 'Anyaman Nusantara', 'Anyaman', 'Admin KaryaNusa', '2026-05-24', 'Anyaman bambu, rotan, pandan, dan serat alam yang fungsional.', 'Anyaman dibuat dengan teknik menyilangkan bahan lentur menjadi bentuk kuat dan bermanfaat. Katalog ini menjelaskan bahan, pola anyaman, fungsi produk, serta nilai ekonomi bagi pengrajin lokal.', 'asset/anyaman.webp', 'katalog.php', 'Terbit'),
(9, 'Seni Logam', 'Logam', 'Admin KaryaNusa', '2026-05-24', 'Karya kriya logam dengan teknik ukir, tempa, cor, dan patri.', 'Seni logam menghasilkan benda pakai dan hiasan dari besi, baja, tembaga, perak, atau kuningan. Katalog ini membahas teknik pengolahan, fungsi, serta nilai artistik logam tradisional.', 'asset/logam.webp', 'katalog9.php', 'Terbit')
ON DUPLICATE KEY UPDATE judul = VALUES(judul);

INSERT INTO ulasan (id, nama, foto, gambar_produk, produk, halaman, rating, komentar, status) VALUES
(1, 'Chika', '', '', 'Karpet Motif Nusantara', 'Beranda', 5, 'Kualitas bagus dan motifnya terlihat premium.', 'Disetujui'),
(2, 'Michael Robinson', '', '', 'Celurit Baja', 'Beranda', 4, 'Detail tradisionalnya kuat dan rapi.', 'Menunggu'),
(3, 'Sarah Chen', 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&q=80', '', 'Batik Tulis Yogyakarta', 'Pengrajin', 5, 'Pengrajin sangat sabar menjelaskan filosofi di balik setiap motif batik. Pengalaman yang sangat berkesan.', 'Disetujui'),
(4, 'Michael Rodriguez', 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=100&q=80', '', 'Ukiran Kayu Jepara', 'Pengrajin', 5, 'Proses pengerjaan detail dan profesional. Hasil karyanya melebihi ekspektasi.', 'Disetujui'),
(5, 'Priya Sharma', 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&q=80', '', 'Kerajinan Logam Tradisional', 'Pengrajin', 5, 'Komunikasi dengan pengrajin sangat lancar dan hasil akhirnya memuaskan.', 'Disetujui'),
(6, 'Rina Wijaya', 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=80&h=80', '', 'Komunitas KaryaNusa', 'Kontak', 5, 'Informasi mengenai kerajinan Nusantara dikemas modern dan menarik bagi anak muda.', 'Disetujui'),
(7, 'Gatot Subroto', 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?auto=format&fit=crop&q=80&w=80&h=80', '', 'Program Pengrajin Lokal', 'Kontak', 5, 'Platform ini membantu pengrajin lokal memperkenalkan produk tradisional ke kancah nasional.', 'Disetujui'),
(8, 'Siti Aminah', 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=80&h=80', '', 'Event Kebudayaan', 'Kontak', 5, 'Event kebudayaan yang diadakan selalu seru dan membuat saya ingin ikut kegiatan berikutnya.', 'Disetujui')
ON DUPLICATE KEY UPDATE nama = VALUES(nama);

INSERT INTO events (id, nama, jenis, lokasi, tanggal, biaya, status) VALUES
(1, 'Belajar Batik Tulis Yogyakarta', 'Workshop', 'Yogyakarta', '2026-06-21', 'Rp 350.000', 'Dibuka'),
(2, 'Festival Kerajinan Bali', 'Festival', 'Ubud, Bali', '2026-07-25', 'Gratis', 'Dibuka')
ON DUPLICATE KEY UPDATE nama = VALUES(nama);
