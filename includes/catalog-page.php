<?php
declare(strict_types=1);

require_once __DIR__ . '/db.php';
require_once __DIR__ . '/auth.php';

$catalogId = defined('CATALOG_ID') ? (int) CATALOG_ID : 1;

$fallbackCatalogs = [
    1 => ['judul' => 'Kain Songket Lepus', 'kategori' => 'Tekstil', 'ringkasan' => 'Songket Palembang dengan motif benang emas yang menutupi hampir seluruh kain.', 'penjelasan' => 'Kain Songket Lepus adalah warisan tekstil Palembang yang dikenal karena kilau benang emasnya. Katalog ini menjelaskan ciri, fungsi adat, proses tenun, dan nilai budaya songket lepus dalam kehidupan masyarakat Palembang.', 'gambar' => 'asset/kainsongket.webp'],
    2 => ['judul' => 'Topeng Barong', 'kategori' => 'Kayu', 'ringkasan' => 'Topeng sakral Bali yang melambangkan perlindungan dan kebaikan.', 'penjelasan' => 'Topeng Barong dibuat dari kayu pilihan dan menjadi bagian penting dalam seni pertunjukan serta upacara adat Bali. Penjelasan katalog meliputi makna spiritual, teknik ukir, dan penggunaannya dalam Tari Barong.', 'gambar' => 'asset/topengbarong.webp'],
    3 => ['judul' => 'Set Piring Plered', 'kategori' => 'Keramik', 'ringkasan' => 'Keramik Plered dari Purwakarta dengan karakter tanah liat lokal.', 'penjelasan' => 'Set Piring Plered berasal dari sentra keramik Purwakarta. Katalog ini memuat sejarah, karakter bahan, proses pembakaran, serta fungsi produk sebagai peralatan makan dan dekorasi rumah.', 'gambar' => 'asset/piring.webp'],
    4 => ['judul' => 'Tekstil Tradisional', 'kategori' => 'Tekstil', 'ringkasan' => 'Ragam batik, tenun, dan songket dari berbagai daerah Indonesia.', 'penjelasan' => 'Tekstil tradisional menyimpan identitas daerah melalui motif, warna, dan teknik pembuatannya. Katalog ini menjelaskan batik, tenun, dan songket sebagai karya pakai sekaligus ekspresi budaya.', 'gambar' => 'asset/tekstil.webp'],
    5 => ['judul' => 'Kerajinan Kayu', 'kategori' => 'Kayu', 'ringkasan' => 'Ukiran, pahatan, dan produk kayu bernilai seni dari Nusantara.', 'penjelasan' => 'Kerajinan kayu dibuat melalui pemilihan bahan, pemahatan, penghalusan, dan finishing. Penjelasan katalog berfokus pada nilai estetika, fungsi pakai, serta makna motif dalam karya kayu tradisional.', 'gambar' => 'asset/kayu.webp'],
    6 => ['judul' => 'Keramik dan Gerabah', 'kategori' => 'Gerabah', 'ringkasan' => 'Produk tanah liat yang dibentuk, dikeringkan, dan dibakar.', 'penjelasan' => 'Keramik dan gerabah memiliki fungsi sebagai wadah, alat saji, hiasan, dan media ekspresi budaya. Katalog ini menerangkan perbedaan bahan, suhu pembakaran, serta contoh produk yang umum ditemukan.', 'gambar' => 'asset/gerabah.webp'],
    7 => ['judul' => 'Perhiasan Tradisional', 'kategori' => 'Perhiasan', 'ringkasan' => 'Aksesori adat yang mencerminkan status, identitas, dan simbol budaya.', 'penjelasan' => 'Perhiasan tradisional hadir dalam bentuk gelang, kalung, hiasan kepala, dan aksesori upacara. Katalog ini membahas bahan, motif, fungsi sosial, serta nilai sejarahnya.', 'gambar' => 'asset/perhiasan.webp'],
    8 => ['judul' => 'Anyaman Nusantara', 'kategori' => 'Anyaman', 'ringkasan' => 'Anyaman bambu, rotan, pandan, dan serat alam yang fungsional.', 'penjelasan' => 'Anyaman dibuat dengan teknik menyilangkan bahan lentur menjadi bentuk kuat dan bermanfaat. Katalog ini menjelaskan bahan, pola anyaman, fungsi produk, serta nilai ekonomi bagi pengrajin lokal.', 'gambar' => 'asset/anyaman.webp'],
    9 => ['judul' => 'Seni Logam', 'kategori' => 'Logam', 'ringkasan' => 'Karya kriya logam dengan teknik ukir, tempa, cor, dan patri.', 'penjelasan' => 'Seni logam menghasilkan benda pakai dan hiasan dari besi, baja, tembaga, perak, atau kuningan. Katalog ini membahas teknik pengolahan, fungsi, serta nilai artistik logam tradisional.', 'gambar' => 'asset/logam.webp'],
];

$catalog = $fallbackCatalogs[$catalogId] ?? $fallbackCatalogs[1];

try {
    $stmt = db()->prepare('SELECT * FROM katalog WHERE id = :id LIMIT 1');
    $stmt->execute(['id' => $catalogId]);
    $row = $stmt->fetch();
    if ($row) {
        $catalog = array_merge($catalog, array_filter($row, static fn ($value) => $value !== null && $value !== ''));
    }
} catch (Throwable $error) {
    // Fallback data keeps public catalog pages readable before database import.
}

function h(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

$paragraphs = preg_split('/\R{2,}/', trim((string) ($catalog['penjelasan'] ?? ''))) ?: [];
$isAdmin = admin_logged_in();
$isPublished = strcasecmp((string) ($catalog['status'] ?? 'Terbit'), 'Terbit') === 0;

if (!$isPublished && !$isAdmin) {
    http_response_code(404);
    $title = 'Katalog tidak tersedia';
    $message = 'Katalog ini masih berstatus ' . h((string) ($catalog['status'] ?? 'Draft')) . ' sehingga hanya bisa dilihat oleh admin.';
    ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= h($title) ?> - KaryaNusa</title>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="katalog.css?v=20260530-3" />
</head>
<body class="catalog-private-page">
  <main class="catalog-private">
    <span class="catalog-badge">Tidak Terbit</span>
    <h1><?= h($title) ?></h1>
    <p><?= $message ?></p>
    <a href="kerajinan.php">Kembali ke Kerajinan</a>
  </main>
</body>
</html>
    <?php
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= h($catalog['judul']) ?> - KaryaNusa</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link rel="stylesheet" href="katalog.css?v=20260530-3" />
  <link rel="stylesheet" href="footer-consistent.css?v=20260530-3" />
</head>
<body>
<div id="progress-bar"></div>

<nav id="navbar">
  <a href="landing.php" class="nav-brand">Karya<span>Nusa</span></a>
  <ul class="nav-links">
    <li><a href="landing.php">Beranda</a></li>
    <li><a href="kerajinan.php" class="active">Kerajinan</a></li>
    <li><a href="pengrajin.php">Pengrajin</a></li>
    <li><a href="kontak.php">Kontak</a></li>
  </ul>
</nav>

<section class="catalog-heading">
  <div class="catalog-wrap">
    <div class="breadcrumb">
      <a href="landing.php">Beranda</a>
      <i class="fas fa-chevron-right"></i>
      <a href="kerajinan.php">Kerajinan</a>
      <i class="fas fa-chevron-right"></i>
      <span><?= h($catalog['kategori']) ?></span>
    </div>
    <span class="catalog-badge"><?= h($catalog['kategori']) ?></span>
    <h1><?= h($catalog['judul']) ?></h1>
    <p><?= h($catalog['ringkasan']) ?></p>
  </div>
</section>

<main class="catalog-wrap catalog-main">
  <section class="catalog-card">
    <div class="catalog-photo">
      <img src="<?= h($catalog['gambar'] ?? 'asset/anyaman.webp') ?>" alt="<?= h($catalog['judul']) ?>" />
    </div>

    <article class="catalog-content">
      <div class="catalog-meta">
        <span><i class="fas fa-layer-group"></i> <?= h($catalog['kategori']) ?></span>
        <span><i class="fas fa-feather-pointed"></i> <?= h($catalog['penulis'] ?? 'Admin KaryaNusa') ?></span>
        <span><i class="fas fa-calendar-days"></i> <?= h($catalog['tanggal'] ?? '2026-05-24') ?></span>
      </div>

      <span class="section-kicker">Katalog Budaya</span>
      <h2>Detail <?= h($catalog['judul']) ?></h2>
      <p class="lead"><?= h($catalog['ringkasan']) ?></p>
      <?php foreach (array_slice($paragraphs, 0, 1) as $paragraph): ?>
        <p><?= nl2br(h($paragraph)) ?></p>
      <?php endforeach; ?>

      <div class="catalog-status">
        <i class="fas fa-check-circle"></i>
        <span>Status <?= h($catalog['status'] ?? 'Terbit') ?></span>
      </div>
    </article>
  </section>

  <?php if (count($paragraphs) > 1): ?>
    <section class="catalog-story">
      <span class="section-kicker">Cerita dan Makna</span>
      <?php foreach (array_slice($paragraphs, 1) as $paragraph): ?>
        <p><?= nl2br(h($paragraph)) ?></p>
      <?php endforeach; ?>
    </section>
  <?php endif; ?>

  <div class="back-link">
    <a href="kerajinan.php"><i class="fas fa-arrow-left"></i> Kembali ke Kerajinan</a>
  </div>
</main>

<footer>
  <div class="container">
    <div class="footer-inner">
      <div class="footer-brand">
        <a href="landing.php" class="nav-logo" style="color:#fff;">Karya<span>Nusa</span></a>
        <p>Platform digital yang menghubungkan warisan budaya Indonesia dengan dunia modern, melestarikan tradisi melalui teknologi.</p>
      </div>
      <div class="footer-col">
        <h5>Navigasi</h5>
        <ul><li><a href="landing.php">Beranda</a></li><li><a href="kerajinan.php">Kerajinan</a></li><li><a href="pengrajin.php">Pengrajin</a></li></ul>
      </div>
      <div class="footer-col">
        <h5>Kontak</h5>
        <ul><li><a href="kontak.php">Hubungi Kami</a></li></ul>
      </div>
    </div>
    <div class="footer-bottom">&copy; 2025 KaryaNusa. Semua hak dilindungi.</div>
  </div>
</footer>

<script>
  const bar = document.getElementById('progress-bar');
  window.addEventListener('scroll', () => {
    const max = document.body.scrollHeight - window.innerHeight;
    bar.style.width = (max > 0 ? window.scrollY / max * 100 : 0) + '%';
  });
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => navbar.classList.toggle('scrolled', window.scrollY > 10));
</script>
</body>
</html>
