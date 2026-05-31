<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/auth.php';

header('Content-Type: application/json; charset=utf-8');

$contentTypes = [
    'kerajinan' => [
        'table' => 'kerajinan',
        'columns' => ['nama', 'kategori', 'pengrajin', 'daerah', 'harga', 'stok', 'status', 'gambar'],
        'required' => ['nama', 'kategori', 'pengrajin', 'daerah', 'harga', 'stok', 'status'],
        'public_where' => "status = 'Terbit' AND stok > 0",
    ],
    'pengrajin' => [
        'table' => 'pengrajin',
        'columns' => ['nama', 'keahlian', 'daerah', 'pengalaman', 'kontak', 'status', 'foto'],
        'required' => ['nama', 'keahlian', 'daerah', 'pengalaman', 'kontak', 'status'],
        'public_where' => "status = 'Terverifikasi'",
    ],
    'katalog' => [
        'table' => 'katalog',
        'columns' => ['judul', 'kategori', 'penulis', 'tanggal', 'ringkasan', 'penjelasan', 'gambar', 'halaman', 'status'],
        'required' => ['judul', 'kategori', 'penulis', 'tanggal', 'ringkasan', 'penjelasan', 'status'],
        'public_where' => "status = 'Terbit'",
    ],
    'ulasan' => [
        'table' => 'ulasan',
        'columns' => ['nama', 'foto', 'gambar_produk', 'produk', 'halaman', 'rating', 'komentar', 'status'],
        'required' => ['nama', 'produk', 'rating', 'komentar', 'status'],
        'public_where' => "status = 'Disetujui'",
    ],
    'event' => [
        'table' => 'events',
        'columns' => ['nama', 'jenis', 'lokasi', 'tanggal', 'biaya', 'status'],
        'required' => ['nama', 'jenis', 'lokasi', 'tanggal', 'biaya', 'status'],
        'public_where' => "status <> 'Selesai'",
    ],
];

$adminTypes = $contentTypes + [
    'pesan' => [
        'table' => 'contact_messages',
        'columns' => ['nama', 'email', 'telepon', 'instansi', 'subjek', 'pesan', 'created_at'],
        'readonly' => true,
        'order' => 'id DESC',
    ],
];

function json_response(array $payload, int $status = 200): void
{
    http_response_code($status);
    echo json_encode($payload, JSON_UNESCAPED_UNICODE);
    exit;
}

function read_payload(): array
{
    $raw = file_get_contents('php://input');
    $payload = json_decode($raw ?: '{}', true);
    return is_array($payload) ? $payload : [];
}

function fetch_all_data(PDO $pdo, array $types, bool $publicOnly = false): array
{
    $result = [];

    foreach ($types as $type => $meta) {
        $order = $meta['order'] ?? 'id ASC';
        $where = $publicOnly && isset($meta['public_where']) ? ' WHERE ' . $meta['public_where'] : '';
        $stmt = $pdo->query('SELECT * FROM ' . $meta['table'] . $where . ' ORDER BY ' . $order);
        $result[$type] = $stmt->fetchAll();
    }

    return $result;
}

function ensure_ulasan_photo_column(PDO $pdo): void
{
    $stmt = $pdo->query("SHOW COLUMNS FROM ulasan LIKE 'foto'");
    if ($stmt && !$stmt->fetch()) {
        $pdo->exec('ALTER TABLE ulasan ADD COLUMN foto LONGTEXT NULL AFTER nama');
    }
}

function ensure_ulasan_product_image_column(PDO $pdo): void
{
    $stmt = $pdo->query("SHOW COLUMNS FROM ulasan LIKE 'gambar_produk'");
    if ($stmt && !$stmt->fetch()) {
        $pdo->exec('ALTER TABLE ulasan ADD COLUMN gambar_produk LONGTEXT NULL AFTER foto');
    }
}

function ensure_ulasan_page_column(PDO $pdo): void
{
    $stmt = $pdo->query("SHOW COLUMNS FROM ulasan LIKE 'halaman'");
    if ($stmt && !$stmt->fetch()) {
        $pdo->exec("ALTER TABLE ulasan ADD COLUMN halaman VARCHAR(40) NOT NULL DEFAULT 'Beranda' AFTER produk");
    }
}

function ensure_catalog_columns(PDO $pdo): void
{
    $columns = [
        'penjelasan' => "ALTER TABLE katalog ADD COLUMN penjelasan LONGTEXT NULL AFTER ringkasan",
        'gambar' => "ALTER TABLE katalog ADD COLUMN gambar LONGTEXT NULL AFTER penjelasan",
        'halaman' => "ALTER TABLE katalog ADD COLUMN halaman VARCHAR(80) NULL AFTER gambar",
    ];

    foreach ($columns as $column => $sql) {
        $stmt = $pdo->query("SHOW COLUMNS FROM katalog LIKE " . $pdo->quote($column));
        if ($stmt && !$stmt->fetch()) {
            $pdo->exec($sql);
        }
    }
}

function seed_default_catalogs(PDO $pdo): void
{
    $defaults = [
        [1, 'Kain Songket Lepus', 'Tekstil', 'Admin KaryaNusa', '2026-05-24', 'Songket Palembang dengan motif benang emas yang menutupi hampir seluruh kain.', 'Kain Songket Lepus adalah warisan tekstil Palembang yang dikenal karena kilau benang emasnya. Katalog ini menjelaskan ciri, fungsi adat, proses tenun, dan nilai budaya songket lepus dalam kehidupan masyarakat Palembang.', 'asset/kainsongket.webp', 'katalog1.php', 'Terbit'],
        [2, 'Topeng Barong', 'Kayu', 'Admin KaryaNusa', '2026-05-24', 'Topeng sakral Bali yang melambangkan perlindungan dan kebaikan.', 'Topeng Barong dibuat dari kayu pilihan dan menjadi bagian penting dalam seni pertunjukan serta upacara adat Bali. Penjelasan katalog meliputi makna spiritual, teknik ukir, dan penggunaannya dalam Tari Barong.', 'asset/topengbarong.webp', 'katalog2.php', 'Terbit'],
        [3, 'Set Piring Plered', 'Keramik', 'Admin KaryaNusa', '2026-05-24', 'Keramik Plered dari Purwakarta dengan karakter tanah liat lokal.', 'Set Piring Plered berasal dari sentra keramik Purwakarta. Katalog ini memuat sejarah, karakter bahan, proses pembakaran, serta fungsi produk sebagai peralatan makan dan dekorasi rumah.', 'asset/piring.webp', 'katalog3.php', 'Terbit'],
        [4, 'Tekstil Tradisional', 'Tekstil', 'Admin KaryaNusa', '2026-05-24', 'Ragam batik, tenun, dan songket dari berbagai daerah Indonesia.', 'Tekstil tradisional menyimpan identitas daerah melalui motif, warna, dan teknik pembuatannya. Katalog ini menjelaskan batik, tenun, dan songket sebagai karya pakai sekaligus ekspresi budaya.', 'asset/tekstil.webp', 'katalog4.php', 'Terbit'],
        [5, 'Kerajinan Kayu', 'Kayu', 'Admin KaryaNusa', '2026-05-24', 'Ukiran, pahatan, dan produk kayu bernilai seni dari Nusantara.', 'Kerajinan kayu dibuat melalui pemilihan bahan, pemahatan, penghalusan, dan finishing. Penjelasan katalog berfokus pada nilai estetika, fungsi pakai, serta makna motif dalam karya kayu tradisional.', 'asset/kayu.webp', 'katalog5.php', 'Terbit'],
        [6, 'Keramik dan Gerabah', 'Gerabah', 'Admin KaryaNusa', '2026-05-24', 'Produk tanah liat yang dibentuk, dikeringkan, dan dibakar.', 'Keramik dan gerabah memiliki fungsi sebagai wadah, alat saji, hiasan, dan media ekspresi budaya. Katalog ini menerangkan perbedaan bahan, suhu pembakaran, serta contoh produk yang umum ditemukan.', 'asset/gerabah.webp', 'katalog6.php', 'Terbit'],
        [7, 'Perhiasan Tradisional', 'Perhiasan', 'Admin KaryaNusa', '2026-05-24', 'Aksesori adat yang mencerminkan status, identitas, dan simbol budaya.', 'Perhiasan tradisional hadir dalam bentuk gelang, kalung, hiasan kepala, dan aksesori upacara. Katalog ini membahas bahan, motif, fungsi sosial, serta nilai sejarahnya.', 'asset/perhiasan.webp', 'katalog7.php', 'Terbit'],
        [8, 'Anyaman Nusantara', 'Anyaman', 'Admin KaryaNusa', '2026-05-24', 'Anyaman bambu, rotan, pandan, dan serat alam yang fungsional.', 'Anyaman dibuat dengan teknik menyilangkan bahan lentur menjadi bentuk kuat dan bermanfaat. Katalog ini menjelaskan bahan, pola anyaman, fungsi produk, serta nilai ekonomi bagi pengrajin lokal.', 'asset/anyaman.webp', 'katalog.php', 'Terbit'],
        [9, 'Seni Logam', 'Logam', 'Admin KaryaNusa', '2026-05-24', 'Karya kriya logam dengan teknik ukir, tempa, cor, dan patri.', 'Seni logam menghasilkan benda pakai dan hiasan dari besi, baja, tembaga, perak, atau kuningan. Katalog ini membahas teknik pengolahan, fungsi, serta nilai artistik logam tradisional.', 'asset/logam.webp', 'katalog9.php', 'Terbit'],
    ];

    $sql = 'INSERT INTO katalog (id, judul, kategori, penulis, tanggal, ringkasan, penjelasan, gambar, halaman, status)
            VALUES (:id, :judul, :kategori, :penulis, :tanggal, :ringkasan, :penjelasan, :gambar, :halaman, :status)
            ON DUPLICATE KEY UPDATE
              judul = IF(judul IN ("Warisan Songket Palembang", "Pusat Ukir Kayu Jepara"), VALUES(judul), judul),
              kategori = IF(kategori IN ("Teknik", "Daerah") AND id IN (1, 2), VALUES(kategori), kategori),
              ringkasan = IF(ringkasan IN ("Sejarah, motif, dan proses pembuatan songket.", "Profil daerah dan karakter ukiran Jepara."), VALUES(ringkasan), ringkasan),
              penjelasan = IF(penjelasan IS NULL OR penjelasan = "", VALUES(penjelasan), penjelasan),
              gambar = IF(gambar IS NULL OR gambar = "", VALUES(gambar), gambar),
              halaman = IF(halaman IS NULL OR halaman = "", VALUES(halaman), halaman)';
    $stmt = $pdo->prepare($sql);

    foreach ($defaults as $item) {
        $stmt->execute([
            'id' => $item[0],
            'judul' => $item[1],
            'kategori' => $item[2],
            'penulis' => $item[3],
            'tanggal' => $item[4],
            'ringkasan' => $item[5],
            'penjelasan' => $item[6],
            'gambar' => $item[7],
            'halaman' => $item[8],
            'status' => $item[9],
        ]);
    }
}

function seed_default_reviews(PDO $pdo): void
{
    $defaults = [
        [1, 'Chika', '', '', 'Karpet Motif Nusantara', 'Beranda', 5, 'Kualitas bagus dan motifnya terlihat premium.', 'Disetujui'],
        [2, 'Michael Robinson', '', '', 'Celurit Baja', 'Beranda', 4, 'Detail tradisionalnya kuat dan rapi.', 'Menunggu'],
        [3, 'Sarah Chen', 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&q=80', '', 'Batik Tulis Yogyakarta', 'Pengrajin', 5, 'Pengrajin sangat sabar menjelaskan filosofi di balik setiap motif batik. Pengalaman yang sangat berkesan.', 'Disetujui'],
        [4, 'Michael Rodriguez', 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=100&q=80', '', 'Ukiran Kayu Jepara', 'Pengrajin', 5, 'Proses pengerjaan detail dan profesional. Hasil karyanya melebihi ekspektasi.', 'Disetujui'],
        [5, 'Priya Sharma', 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&q=80', '', 'Kerajinan Logam Tradisional', 'Pengrajin', 5, 'Komunikasi dengan pengrajin sangat lancar dan hasil akhirnya memuaskan.', 'Disetujui'],
        [6, 'Rina Wijaya', 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=80&h=80', '', 'Komunitas KaryaNusa', 'Kontak', 5, 'Informasi mengenai kerajinan Nusantara dikemas modern dan menarik bagi anak muda.', 'Disetujui'],
        [7, 'Gatot Subroto', 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?auto=format&fit=crop&q=80&w=80&h=80', '', 'Program Pengrajin Lokal', 'Kontak', 5, 'Platform ini membantu pengrajin lokal memperkenalkan produk tradisional ke kancah nasional.', 'Disetujui'],
        [8, 'Siti Aminah', 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=80&h=80', '', 'Event Kebudayaan', 'Kontak', 5, 'Event kebudayaan yang diadakan selalu seru dan membuat saya ingin ikut kegiatan berikutnya.', 'Disetujui'],
    ];

    $sql = 'INSERT INTO ulasan (id, nama, foto, gambar_produk, produk, halaman, rating, komentar, status)
            VALUES (:id, :nama, :foto, :gambar_produk, :produk, :halaman, :rating, :komentar, :status)
            ON DUPLICATE KEY UPDATE id = id';
    $stmt = $pdo->prepare($sql);

    foreach ($defaults as $item) {
        $stmt->execute([
            'id' => $item[0],
            'nama' => $item[1],
            'foto' => $item[2],
            'gambar_produk' => $item[3],
            'produk' => $item[4],
            'halaman' => $item[5],
            'rating' => $item[6],
            'komentar' => $item[7],
            'status' => $item[8],
        ]);
    }
}

try {
    $pdo = db();
    ensure_ulasan_photo_column($pdo);
    ensure_ulasan_product_image_column($pdo);
    ensure_ulasan_page_column($pdo);
    ensure_catalog_columns($pdo);
    seed_default_catalogs($pdo);
    seed_default_reviews($pdo);

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (!isset($_GET['public']) && !admin_logged_in()) {
            json_response(['ok' => false, 'message' => 'Unauthorized'], 401);
        }

        $publicOnly = isset($_GET['public']);
        $types = $publicOnly ? $contentTypes : $adminTypes;
        json_response(['ok' => true, 'data' => fetch_all_data($pdo, $types, $publicOnly)]);
    }

    if (!admin_logged_in()) {
        json_response(['ok' => false, 'message' => 'Unauthorized'], 401);
    }

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        json_response(['ok' => false, 'message' => 'Method not allowed'], 405);
    }

    $payload = read_payload();
    $action = $payload['action'] ?? '';
    $type = $payload['type'] ?? '';

    if (!isset($adminTypes[$type])) {
        json_response(['ok' => false, 'message' => 'Tipe data tidak valid'], 422);
    }

    $meta = $adminTypes[$type];

    if ($action === 'delete') {
        $id = (int)($payload['id'] ?? 0);
        if ($id < 1) {
            json_response(['ok' => false, 'message' => 'ID tidak valid'], 422);
        }

        $stmt = $pdo->prepare('DELETE FROM ' . $meta['table'] . ' WHERE id = :id');
        $stmt->execute(['id' => $id]);
        json_response(['ok' => true, 'data' => fetch_all_data($pdo, $adminTypes)]);
    }

    if ($action === 'save') {
        if (!empty($meta['readonly'])) {
            json_response(['ok' => false, 'message' => 'Data ini hanya bisa dibaca'], 422);
        }

        $item = $payload['item'] ?? [];
        if (!is_array($item)) {
            json_response(['ok' => false, 'message' => 'Data tidak valid'], 422);
        }

        $id = (int)($item['id'] ?? 0);
        $values = [];

        foreach ($meta['columns'] as $column) {
            $values[$column] = is_string($item[$column] ?? null) ? trim($item[$column]) : ($item[$column] ?? '');
        }

        foreach ($meta['required'] ?? [] as $column) {
            if ((string)($values[$column] ?? '') === '') {
                json_response(['ok' => false, 'message' => 'Field ' . $column . ' wajib diisi'], 422);
            }
        }

        if (isset($values['stok'])) {
            $values['stok'] = max(0, (int)$values['stok']);
        }

        if (isset($values['rating'])) {
            $values['rating'] = min(5, max(1, (int)$values['rating']));
        }

        if ($id > 0) {
            $sets = implode(', ', array_map(fn ($column) => $column . ' = :' . $column, $meta['columns']));
            $stmt = $pdo->prepare('UPDATE ' . $meta['table'] . ' SET ' . $sets . ' WHERE id = :id');
            $stmt->execute($values + ['id' => $id]);
        } else {
            $columns = implode(', ', $meta['columns']);
            $params = ':' . implode(', :', $meta['columns']);
            $stmt = $pdo->prepare('INSERT INTO ' . $meta['table'] . ' (' . $columns . ') VALUES (' . $params . ')');
            $stmt->execute($values);
        }

        json_response(['ok' => true, 'data' => fetch_all_data($pdo, $adminTypes)]);
    }

    json_response(['ok' => false, 'message' => 'Aksi tidak valid'], 422);
} catch (Throwable $error) {
    json_response(['ok' => false, 'message' => $error->getMessage()], 500);
}
