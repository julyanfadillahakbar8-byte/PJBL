<?php
require_once __DIR__ . '/includes/auth.php';
require_admin();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard Admin - KaryaNusa</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800&family=Lato:wght@300;400;600;700;800&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
<link rel="stylesheet" href="admin.css"/>
<link rel="stylesheet" href="responsive.css"/>
</head>
<body>
  <aside class="sidebar" id="sidebar">
    <a href="landing.php" class="brand">
      <span>Karya<span>Nusa</span></span>
    </a>
    <nav class="admin-nav" aria-label="Navigasi admin">
      <button class="nav-item active" data-section="overview"><i class="fas fa-chart-line"></i><span>Ringkasan</span></button>
      <button class="nav-item" data-section="kerajinan"><i class="fas fa-box-open"></i><span>Kerajinan</span></button>
      <button class="nav-item" data-section="pengrajin"><i class="fas fa-user-tie"></i><span>Pengrajin</span></button>
      <button class="nav-item" data-section="katalog"><i class="fas fa-layer-group"></i><span>Katalog</span></button>
      <button class="nav-item" data-section="ulasan"><i class="fas fa-star-half-stroke"></i><span>Ulasan</span></button>
      <button class="nav-item" data-section="event"><i class="fas fa-calendar-days"></i><span>Event Budaya</span></button>
      <button class="nav-item" data-section="pesan"><i class="fas fa-envelope"></i><span>Pesan Kontak</span></button>
    </nav>
    <div class="sidebar-footer">
      <p>Mode admin katalog</p>
      <a href="landing.php"><i class="fas fa-arrow-left"></i> Kembali ke website</a>
      <a href="logout.php"><i class="fas fa-right-from-bracket"></i> Logout</a>
    </div>
  </aside>

  <main class="admin-shell">
    <header class="topbar">
      <button class="icon-btn menu-toggle" id="menuToggle" aria-label="Buka menu"><i class="fas fa-bars"></i></button>
      <div>
        <p class="eyebrow">Dashboard Admin</p>
        <h1 id="pageTitle">Kelola Katalog Kerajinan Nusantara</h1>
      </div>
      <div class="topbar-actions">
        <div class="search-wrap">
          <i class="fas fa-magnifying-glass"></i>
          <input type="search" id="globalSearch" placeholder="Cari data admin..."/>
        </div>
        <button class="icon-btn" aria-label="Notifikasi"><i class="fas fa-bell"></i><span class="dot"></span></button>
        <div class="admin-profile">
          <span>Admin</span>
          <strong><?= htmlspecialchars(current_admin_name(), ENT_QUOTES, 'UTF-8') ?></strong>
        </div>
      </div>
    </header>

    <section class="content-section active" id="overview">
      <div class="hero-panel">
        <div>
          <p class="eyebrow">Pusat Kontrol</p>
          <h2>Kurasi kerajinan, pengrajin, katalog, ulasan, dan event budaya dari satu tempat.</h2>
          <p>Dashboard ini cocok untuk website katalog kerajinan tangan Nusantara: admin dapat memantau produk aktif, stok, rating, artikel katalog, dan agenda budaya.</p>
        </div>
        <button class="btn primary quick-add" data-target="kerajinan"><i class="fas fa-plus"></i> Tambah Kerajinan</button>
      </div>

      <div class="stats-grid">
        <article class="stat-card"><i class="fas fa-box-open"></i><span id="statKerajinan">0</span><p>Kerajinan aktif</p></article>
        <article class="stat-card"><i class="fas fa-user-tie"></i><span id="statPengrajin">0</span><p>Pengrajin terdaftar</p></article>
        <article class="stat-card"><i class="fas fa-layer-group"></i><span id="statKatalog">0</span><p>Katalog budaya</p></article>
        <article class="stat-card"><i class="fas fa-star"></i><span id="statRating">0</span><p>Rata-rata rating</p></article>
      </div>

      <div class="dashboard-grid">
        <article class="panel">
          <div class="panel-head">
            <div>
              <h3>Aktivitas Terbaru</h3>
              <p>Perubahan konten yang perlu dipantau.</p>
            </div>
          </div>
          <div class="activity-list" id="activityList"></div>
        </article>
        <article class="panel">
          <div class="panel-head">
            <div>
              <h3>Distribusi Kategori</h3>
              <p>Komposisi kerajinan berdasarkan jenis.</p>
            </div>
          </div>
          <div class="category-bars" id="categoryBars"></div>
        </article>
      </div>
    </section>

    <section class="content-section" id="kerajinan">
      <div class="section-toolbar">
        <div>
          <p class="eyebrow">Manajemen Produk</p>
          <h2>Data Kerajinan</h2>
        </div>
        <button class="btn primary" data-open-form="kerajinan"><i class="fas fa-plus"></i> Tambah Kerajinan</button>
      </div>
      <div class="manager-layout">
        <form class="data-form" data-form="kerajinan">
          <h3>Form Kerajinan</h3>
          <input type="hidden" name="id"/>
          <input type="hidden" name="gambar"/>
          <label>Nama Kerajinan<input name="nama" required placeholder="Contoh: Kain Songket Lepus"/></label>
          <label>Gambar Produk<input name="gambarFile" type="file" accept="image/*"/></label>
          <label>Kategori<select name="kategori" required><option>Tekstil</option><option>Kayu</option><option>Gerabah</option><option>Perhiasan</option><option>Anyaman</option><option>Logam</option></select></label>
          <label>Pengrajin<select name="pengrajin" required><option value="">Pilih pengrajin</option></select></label>
          <label>Daerah<input name="daerah" required placeholder="Contoh: Palembang"/></label>
          <label>Harga<input name="harga" required placeholder="Rp 1.250.000"/></label>
          <label>Stok<input name="stok" type="number" min="0" required placeholder="12"/></label>
          <label>Status<select name="status"><option>Terbit</option><option>Draft</option><option>Habis</option></select></label>
          <div class="form-actions">
            <button type="reset" class="btn ghost">Bersihkan</button>
            <button type="submit" class="btn primary">Simpan</button>
          </div>
        </form>
        <div class="table-panel">
          <div class="table-head"><h3>Daftar Kerajinan</h3><span id="countKerajinan"></span></div>
          <div class="table-wrap"><table><thead><tr><th>Nama</th><th>Kategori</th><th>Pengrajin</th><th>Daerah</th><th>Harga</th><th>Status</th><th>Aksi</th></tr></thead><tbody id="tableKerajinan"></tbody></table></div>
        </div>
      </div>
    </section>

    <section class="content-section" id="pengrajin">
      <div class="section-toolbar">
        <div><p class="eyebrow">Mitra Budaya</p><h2>Data Pengrajin</h2></div>
        <button class="btn primary" data-open-form="pengrajin"><i class="fas fa-plus"></i> Tambah Pengrajin</button>
      </div>
      <div class="manager-layout">
        <form class="data-form" data-form="pengrajin">
          <h3>Form Pengrajin</h3>
          <input type="hidden" name="id"/>
          <input type="hidden" name="foto"/>
          <label>Nama Pengrajin<input name="nama" required placeholder="Contoh: Bu Hariyani"/></label>
          <label>Foto Profil<input name="fotoFile" type="file" accept="image/*"/></label>
          <label>Keahlian<input name="keahlian" required placeholder="Batik tulis, ukir kayu"/></label>
          <label>Daerah<input name="daerah" required placeholder="Yogyakarta"/></label>
          <label>Pengalaman<input name="pengalaman" required placeholder="25 tahun"/></label>
          <label>Kontak<input name="kontak" required placeholder="0812-xxxx-xxxx"/></label>
          <label>Status<select name="status"><option>Terverifikasi</option><option>Menunggu</option><option>Nonaktif</option></select></label>
          <div class="form-actions"><button type="reset" class="btn ghost">Bersihkan</button><button type="submit" class="btn primary">Simpan</button></div>
        </form>
        <div class="table-panel">
          <div class="table-head"><h3>Daftar Pengrajin</h3><span id="countPengrajin"></span></div>
          <div class="table-wrap"><table><thead><tr><th>Nama</th><th>Keahlian</th><th>Daerah</th><th>Pengalaman</th><th>Kontak</th><th>Status</th><th>Aksi</th></tr></thead><tbody id="tablePengrajin"></tbody></table></div>
        </div>
      </div>
    </section>

    <section class="content-section" id="katalog">
      <div class="section-toolbar">
        <div><p class="eyebrow">Konten Edukasi</p><h2>Katalog Budaya</h2></div>
        <button class="btn primary" data-open-form="katalog"><i class="fas fa-plus"></i> Tambah Katalog</button>
      </div>
      <div class="manager-layout">
        <form class="data-form" data-form="katalog">
          <h3>Form Katalog</h3>
          <input type="hidden" name="id"/>
          <input type="hidden" name="gambar"/>
          <label>Judul Katalog<input name="judul" required placeholder="Cerita Songket Palembang"/></label>
          <label>Gambar Katalog<input name="gambarFile" type="file" accept="image/*"/></label>
          <label>Kategori<select name="kategori"><option>Tekstil</option><option>Kayu</option><option>Keramik</option><option>Gerabah</option><option>Perhiasan</option><option>Anyaman</option><option>Logam</option><option>Produk</option><option>Daerah</option><option>Teknik</option><option>Festival</option></select></label>
          <label>Penulis<input name="penulis" required placeholder="Admin KaryaNusa"/></label>
          <label>Tanggal<input name="tanggal" type="date" required/></label>
          <label>Halaman<select name="halaman"><option value="katalog1.php">Katalog 1</option><option value="katalog2.php">Katalog 2</option><option value="katalog3.php">Katalog 3</option><option value="katalog4.php">Katalog 4</option><option value="katalog5.php">Katalog 5</option><option value="katalog6.php">Katalog 6</option><option value="katalog7.php">Katalog 7</option><option value="katalog.php">Katalog 8 / Anyaman</option><option value="katalog9.php">Katalog 9</option></select></label>
          <label>Status<select name="status"><option>Terbit</option><option>Draft</option><option>Arsip</option></select></label>
          <label class="wide">Ringkasan<textarea name="ringkasan" required placeholder="Ringkasan isi katalog"></textarea></label>
          <label class="wide">Penjelasan Lengkap<textarea name="penjelasan" required placeholder="Penjelasan lengkap yang tampil di halaman katalog"></textarea></label>
          <div class="form-actions"><button type="reset" class="btn ghost">Bersihkan</button><button type="submit" class="btn primary">Simpan</button></div>
        </form>
        <div class="table-panel">
          <div class="table-head"><h3>Daftar Katalog</h3><span id="countKatalog"></span></div>
          <div class="table-wrap"><table><thead><tr><th>Gambar</th><th>Judul</th><th>Kategori</th><th>Halaman</th><th>Tanggal</th><th>Status</th><th>Aksi</th></tr></thead><tbody id="tableKatalog"></tbody></table></div>
        </div>
      </div>
    </section>

    <section class="content-section" id="ulasan">
      <div class="section-toolbar">
        <div><p class="eyebrow">Kepercayaan Pengunjung</p><h2>Moderasi Ulasan</h2></div>
        <button class="btn primary" data-open-form="ulasan"><i class="fas fa-plus"></i> Tambah Ulasan</button>
      </div>
      <div class="manager-layout">
        <form class="data-form" data-form="ulasan">
          <h3>Form Ulasan</h3>
          <input type="hidden" name="id"/>
          <input type="hidden" name="foto"/>
          <input type="hidden" name="gambar_produk"/>
          <label>Nama Pengulas<input name="nama" required placeholder="Nama pelanggan"/></label>
          <label>Foto Pengulas<input name="fotoFile" type="file" accept="image/*"/></label>
          <label>Produk<input name="produk" required placeholder="Nama kerajinan"/></label>
          <label>Halaman<select name="halaman"><option>Beranda</option><option>Pengrajin</option><option>Kontak</option><option>Semua</option></select></label>
          <label>Gambar Produk<input name="gambarProdukFile" type="file" accept="image/*"/></label>
          <label>Rating<select name="rating"><option>5</option><option>4</option><option>3</option><option>2</option><option>1</option></select></label>
          <label>Status<select name="status"><option>Disetujui</option><option>Menunggu</option><option>Ditolak</option></select></label>
          <label class="wide">Komentar<textarea name="komentar" required placeholder="Isi ulasan"></textarea></label>
          <div class="form-actions"><button type="reset" class="btn ghost">Bersihkan</button><button type="submit" class="btn primary">Simpan</button></div>
        </form>
        <div class="table-panel">
          <div class="table-head"><h3>Daftar Ulasan</h3><span id="countUlasan"></span></div>
          <div class="table-wrap"><table><thead><tr><th>Foto</th><th>Pengulas</th><th>Gambar Produk</th><th>Produk</th><th>Halaman</th><th>Rating</th><th>Komentar</th><th>Status</th><th>Aksi</th></tr></thead><tbody id="tableUlasan"></tbody></table></div>
        </div>
      </div>
    </section>

    <section class="content-section" id="event">
      <div class="section-toolbar">
        <div><p class="eyebrow">Agenda Komunitas</p><h2>Event Budaya</h2></div>
        <button class="btn primary" data-open-form="event"><i class="fas fa-plus"></i> Tambah Event</button>
      </div>
      <div class="manager-layout">
        <form class="data-form" data-form="event">
          <h3>Form Event</h3>
          <input type="hidden" name="id"/>
          <label>Nama Event<input name="nama" required placeholder="Workshop Batik Tulis"/></label>
          <label>Jenis<select name="jenis"><option>Workshop</option><option>Festival</option><option>Pameran</option><option>Pelatihan</option></select></label>
          <label>Lokasi<input name="lokasi" required placeholder="Yogyakarta"/></label>
          <label>Tanggal<input name="tanggal" type="date" required/></label>
          <label>Biaya<input name="biaya" required placeholder="Rp 350.000"/></label>
          <label>Status<select name="status"><option>Dibuka</option><option>Penuh</option><option>Selesai</option></select></label>
          <div class="form-actions"><button type="reset" class="btn ghost">Bersihkan</button><button type="submit" class="btn primary">Simpan</button></div>
        </form>
        <div class="table-panel">
          <div class="table-head"><h3>Daftar Event</h3><span id="countEvent"></span></div>
          <div class="table-wrap"><table><thead><tr><th>Nama</th><th>Jenis</th><th>Lokasi</th><th>Tanggal</th><th>Biaya</th><th>Status</th><th>Aksi</th></tr></thead><tbody id="tableEvent"></tbody></table></div>
        </div>
      </div>
    </section>

    <section class="content-section" id="pesan">
      <div class="section-toolbar">
        <div><p class="eyebrow">Kotak Masuk</p><h2>Pesan Kontak Website</h2></div>
      </div>
      <div class="table-panel">
        <div class="table-head"><h3>Daftar Pesan</h3><span id="countPesan"></span></div>
        <div class="table-wrap">
          <table>
            <thead>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Instansi</th>
                <th>Subjek</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="tablePesan"></tbody>
          </table>
        </div>
      </div>
    </section>
  </main>

  <div class="admin-modal" id="detailModal" aria-hidden="true">
    <div class="admin-modal-card" role="dialog" aria-modal="true" aria-labelledby="detailTitle">
      <div class="admin-modal-head">
        <div>
          <p class="eyebrow">Detail Data</p>
          <h3 id="detailTitle">Detail</h3>
        </div>
        <button class="icon-btn" id="closeDetailModal" type="button" aria-label="Tutup detail"><i class="fas fa-xmark"></i></button>
      </div>
      <div class="admin-detail" id="detailContent"></div>
      <div class="admin-modal-actions">
        <button class="btn ghost" id="closeDetailModalBottom" type="button">Tutup</button>
      </div>
    </div>
  </div>

  <div class="toast" id="toast">Data tersimpan</div>
  <script src="admin.js"></script>
</body>
</html>
