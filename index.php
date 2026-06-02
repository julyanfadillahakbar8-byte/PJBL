<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>KaryaNusa Platform Kerajinan Tradisional Indonesia</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Lato:wght@300;400;600;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link rel="stylesheet" href="landing.css"/>
  <link rel="stylesheet" href="public-data.css"/>
  <link rel="stylesheet" href="responsive.css"/>
</head>
<body>

  <nav id="navbar">
    <a href="index.php" class="nav-logo">
     
        <circle cx="14" cy="14" r="13" stroke="#C8922A" stroke-width="2"/>
        <path d="M8 14c0-3.3 2.7-6 6-6s6 2.7 6 6-2.7 6-6 6" stroke="#C8922A" stroke-width="2" stroke-linecap="round"/>
        <circle cx="14" cy="14" r="3" fill="#C8922A"/>
      </svg>
      Karya<span>Nusa</span>
    </a>
    <ul class="nav-links">
      <li><a href="index.php" class="active">Beranda</a></li>
      <li><a href="kerajinan.php">Kerajinan</a></li>
      <li><a href="pengrajin.php">Perajin</a></li>
      <li><a href="kontak.php">Kontak</a></li>
    </ul>
  </nav>

  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <p class="hero-subtitle">Perajin Unggulan</p>
      <h1 class="hero-title">I Made <span>Sukrisnа</span><br/>Bali</h1>
      <p class="hero-desc">Karya seni autentik yang menggabungkan warisan leluhur dengan sentuhan modern. Setiap karya adalah cerita yang hidup.</p>
      <div class="hero-btns">
        <a href="pengrajin.php" class="btn btn-gold">Lihat Profil Perajin</a>
        <a href="kerajinan.php" class="btn btn-outline">Jelajahi Karya</a>
      </div>
    </div>
    <!-- Featured Product Card -->
    <div class="hero-card">
      <img src="https://static.vecteezy.com/system/resources/thumbnails/037/415/943/original/garuda-wisnu-kencana-giant-statue-monument-bali-indonesia-time-lapse-video.jpg" alt="Ukiran Garuda"/>
      <h4>Ukiran Garuda Wisnu</h4>
      <p>Simbol kekuatan spiritual yang diukir detail dari kayu jati Bali asli</p>
      
      <a href="kerajinan.php" class="btn btn-gold btn-sm" style="width:100%; justify-content:center;">Lihat Detail</a>
    </div>
    <div class="scroll-indicator">
      <span>Scroll</span>
      <i class="fas fa-chevron-down"></i>
    </div>
  </section>

  <!-- ===== TRENDING KERAJINAN ===== -->
  <section class="trending-section" id="trending">
    <div class="container">
      <div class="section-header reveal">
        <h2>Kerajinan Trending</h2>
        <p>Karya-karya populer yang sedang diminati dengan kekayaan konteks budaya yang kaya</p>
      </div>
      <div class="trending-grid">
        <div class="craft-card reveal reveal-delay-1">
          <div class="craft-card-img">
            <img src="asset/kainsongket.webp" alt="Kain Songket Lepus"/>
            <span class="tag">#1 Trending</span>
          </div>
          <div class="craft-card-body">
            <h3>Kain Songket Lepus</h3>
            <p>Songket mewah berbening benang motif tradisional Palembang untuk acara resmi</p>
            <div class="craft-card-footer">
              <div>
                <span class="price-new">Rp 1.250.000</span>
                <span class="artisan-name">oleh Ibu Fatimah</span> 
              </div>
              <a href="katalog1.php" class="btn btn-gold btn-sm">Lihat</a>
            </div>
          </div>
        </div>
        <div class="craft-card reveal reveal-delay-2">
          <div class="craft-card-img">
            <img src="asset/topengbarong.webp" alt="Topeng Barong"/>
            <span class="tag">#2 Trending</span>
          </div>
          <div class="craft-card-body">
            <h3>Topeng Barong</h3>
            <p>Topeng kayu artistik bergaya artistik untuk seni tari tradisional, dipahat detail tangan</p>
            <div class="craft-card-footer">
              <div>
                <span class="price-new">Rp 750.000</span>
                <span class="artisan-name">oleh I Nyoman Sudiarta</span>
              </div>
              <a href="katalog2.php" class="btn btn-gold btn-sm">Lihat</a>
            </div>
          </div>
        </div>
        <div class="craft-card reveal reveal-delay-3">
          <div class="craft-card-img">
            <img src="asset/piring.webp" alt="Set Piring Pleced"/>
            <span class="tag">#3 Trending</span>
          </div>
          <div class="craft-card-body">
            <h3>Set Piring Pleced</h3>
            <p>Merbau dan tubruk Pleced dengan pola batik natural untuk sajian modern</p>
            <div class="craft-card-footer">
              <div>
                <span class="price-new">Rp 320.000</span>
                <span class="artisan-name">oleh Ibu Siti, Wa seet</span>
              </div>
              <a href="katalog3.php" class="btn btn-gold btn-sm">Lihat</a>
            </div>
          </div>
        </div>
      </div>
      <div class="trending-cta reveal">
        <a href="kerajinan.php" class="btn btn-gold">Lihat Semua Kerajinan Trending</a>
      </div>
    </div>
  </section>

  <!-- ===== ARTISAN SPOTLIGHT ===== -->
  <section class="artisan-section" id="artisan">
    <div class="container">
      <div class="section-header reveal">
        <h2>Sorotan Perajin Bulan Ini</h2>
        <p>Mengenal lebih dekat master perajin dan teknik tradisional mereka</p>
      </div>
      <div class="artisan-wrapper">
        <div class="artisan-card reveal">
          <div class="artisan-top">
            <img class="artisan-avatar" src="asset/bambang.webp" alt="Pak Bambang"/>
            <div>
              <h3>Pak Bambang Nuryanto</h3>
              <div class="artisan-location"><i class="fas fa-map-marker-alt" style="color:var(--gold);margin-right:5px;font-size:0.78rem;"></i>Yogyakarta • 35 tahun pengalaman</div>
              <div class="stars">★★★★★ <span style="color:var(--muted);font-size:0.8rem;">4.9</span></div>
            </div>
          </div>
          <p class="artisan-quote">"Setiap titik pada kain batik adalah doa dan dedikasi. Saya tidak hanya membuat kain, saya menjaga warisan leluhur tetap hidup dan relevan untuk generasi berikutnya."</p>
          <div class="artisan-stats">
            <div class="stat"><span class="stat-num">150+</span><span class="stat-label">Karya Terjual</span></div>
            <div class="stat"><span class="stat-num">4.9</span><span class="stat-label">Rating Perajin</span></div>
          </div>
          <div class="artisan-tags">
            <div class="artisan-tag"><i class="fas fa-star"></i> Spesialisasi: Pertenunen Pelece Tradisional</div>
            <div class="artisan-tag"><i class="fas fa-clock"></i> Teknik: Tangan Tangan dan Lilin Detail</div>
            <div class="artisan-tag"><i class="fas fa-certificate"></i> Warisan: Teknik Kerajinan Abad ke-16</div>
          </div>
          <div class="artisan-btns">
            <a href="pengrajin.php" class="btn btn-outline" style="color:var(--gold); border-color:var(--gold);">Lihat Profil Lengkap</a>
            <a href="kerajinan.php" class="btn btn-gold">Lihat Karya</a>
          </div>
        </div>
        <div class="artisan-products reveal reveal-delay-1">
          <div class="artisan-product">
            <img src="asset/clurit.webp" alt="Clurit Baja"/>
            <div class="artisan-product-info">
              <h4>Clurit Baja</h4>
              <span class="price-new">Rp 400.000</span>
            </div>
          </div>
          <div class="artisan-product">
            <img src="asset/gelang.webp" alt="Gelang Penung"/>
            <div class="artisan-product-info">
              <h4>Gelang Penung</h4>
              <span class="price-new">Rp 325.000</span>
            </div>
          </div>
          <div class="artisan-product">
            <img src="asset/bross.webp" alt="Bross Elada"/>
            <div class="artisan-product-info">
              <h4>Bross Elada</h4>
              <span class="price-new">Rp 200.000</span>
            </div>
          </div>
          <div class="artisan-product">
            <img src="asset/kalungbulik.webp" alt="Kalung Bulik"/>
            <div class="artisan-product-info">
              <h4>Kalung Bulik</h4>
              <span class="price-new">Rp 850.000</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== KALENDER BUDAYA ===== -->
  <section class="calendar-section" id="calendar">
    <div class="container">
      <div class="section-header reveal">
        <h2>Kalender Budaya</h2>
        <p>Workshop mendalam dan festival tradisional yang Anda ikuti</p>
      </div>
      <div class="events-grid">
        <div class="event-card reveal reveal-delay-1">
          <span class="event-badge badge-workshop">Workshop</span>
          <p class="event-date">21 September 2025</p>
          <h3>Belajar Batik Tulis Yogyakarta</h3>
          <p>Workshop intensif dipandu oleh ahli dan pelopor batik. Anda akan mempelajari teknik batik tulis dari yang klasik hingga modern.</p>
          <div class="event-meta">
            <span><i class="fas fa-map-marker-alt"></i> Yogyakarta</span>
            <span><i class="fas fa-clock"></i> 10:00 – 16:00</span>
          </div>
          <div class="event-footer">
            <span class="event-price">Rp 350.000</span>
            <a href="kontak.php" class="btn btn-gold btn-sm">Daftar</a>
          </div>
        </div>
        <div class="event-card reveal reveal-delay-2">
          <span class="event-badge badge-festival">Festival</span>
          <p class="event-date">25–28 Oktober 2025</p>
          <h3>Festival Kerajinan Bali</h3>
          <p>Pameran dan demo karya terbaik dari perajin unggulan, pematung, dan kerajinan tradisional Bali di Ubud Art Market.</p>
          <div class="event-meta">
            <span><i class="fas fa-map-marker-alt"></i> Ubud, Bali</span>
            <span><i class="fas fa-calendar"></i> 3 Hari</span>
          </div>
          <div class="event-footer">
            <a href="kontak.php" class="btn btn-outline btn-sm" style="color:var(--gold); border-color:var(--gold);">Info Lengkap</a>
            <a href="kontak.php" class="btn btn-gold btn-sm">Daftar</a>
          </div>
        </div>
        <div class="event-card reveal reveal-delay-3">
          <span class="event-badge badge-workshop">Workshop</span>
          <p class="event-date">5 Oktober 2025</p>
          <h3>Keramik Tradisional Lombok</h3>
          <p>Rasakan kesenian membuat keramik khas Lombok bersama Ibu Sri Aminah di Dinas Kebudayaan setempat.</p>
          <div class="event-meta">
            <span><i class="fas fa-map-marker-alt"></i> Lombok</span>
            <span><i class="fas fa-clock"></i> 10:00 – 15:00</span>
          </div>
          <div class="event-footer">
            <span class="event-price">Rp 275.000</span>
            <a href="kontak.php" class="btn btn-gold btn-sm">Daftar</a>
          </div>
        </div>
      </div>
      <div class="calendar-cta reveal">
        <a href="kontak.php" class="btn btn-gold">Lihat Semua Event</a>
      </div>
    </div>
  </section>

  <!-- ===== LIFESTYLE ===== -->
  <section class="lifestyle-section" id="lifestyle">
    <div class="container">
      <div class="section-header reveal">
        <h2>Kerajinan dalam Kehidupan Modern</h2>
        <p>Lihat bagaimana pelanggan kami mengintegrasikan kerajinan tradisional dalam gaya hidup kontemporer</p>
      </div>
      <div class="lifestyle-grid">
        <div class="lifestyle-card reveal reveal-delay-1">
          <div class="lifestyle-card-img">
            <img src="asset/karpet.webp" alt="Living Room"/>
          </div>
          <div class="lifestyle-card-body">
            <div class="lifestyle-user">
              <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&q=80" alt="chika"/>
              <div class="lifestyle-user-info">
                <strong>chika</strong>
                <span>Interior Designer, Jakarta</span>
              </div>
            </div>
            <p>"Bross dan karpet motif dari platform ini berhasil membuat ruang tamu saya terasa unik – modern tapi tetap berjiwa budaya yang sesungguhnya."</p>
          </div>
        </div>
        <div class="lifestyle-card reveal reveal-delay-2">
          <div class="lifestyle-card-img">
            <img src="asset/celuritbaja.webp" alt="Pottery"/>
          </div>
          <div class="lifestyle-card-body">
            <div class="lifestyle-user">
              <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=100&q=80" alt="Michael"/>
              <div class="lifestyle-user-info">
                <strong>Michael Robinson</strong>
                <span>Chef Internasional</span>
              </div>
            </div>
            <p>"celurit baja disini sangat bagus dan mengingatkan saya pada kerajinan tangan tradisional peninggalan leluhur saya"</p>
          </div>
        </div>
        <div class="lifestyle-card reveal reveal-delay-3">
          <div class="lifestyle-card-img">
            <img src="asset/lempus2.webp" alt="Jewelry"/>
          </div>
          <div class="lifestyle-card-body">
            <div class="lifestyle-user">
              <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&q=80" alt="Priya"/>
              <div class="lifestyle-user-info">
                <strong>Priya Sharma</strong>
                <span>Fashion Blogger, Singapura</span>
              </div>
            </div>
            <p>"saya jadi tahu bahwa kain songket lempus adalah kerajinan tangan tradisional yang harus dilestarikan karena itu adalah peninggalan leluhur kita."</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
  <footer>
    <div class="container">
      <div class="footer-inner">
        <div class="footer-brand">
          <a href="index.php" class="nav-logo" style="color:var(--white);">
            
              <circle cx="14" cy="14" r="13" stroke="#C8922A" stroke-width="2"/>
              <path d="M8 14c0-3.3 2.7-6 6-6s6 2.7 6 6-2.7 6-6 6" stroke="#C8922A" stroke-width="2" stroke-linecap="round"/>
              <circle cx="14" cy="14" r="3" fill="#C8922A"/>
            </svg>
            Karya<span>Nusa</span>
          </a>
          <p>Platform digital yang menghubungkan warisan budaya Indonesia dengan dunia modern, melestarikan tradisi melalui teknologi.</p>
          <div class="footer-social">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
        <div class="footer-col">
          <h5>Navigasi</h5>
          <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="kerajinan.php">Kerajinan</a></li>
            <li><a href="pengrajin.php">Perajin</a></li>
            <li><a href="kerajinan.php">Detail Produk</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h5>Kontak</h5>
          <ul>
            <li><a href="kontak.php">Hubungi Kami</a></li>
            <li><a href="kontak.php">Bantuan</a></li>
            <li><a href="kontak.php">Kebijakan Privasi</a></li>
            <li><a href="kontak.php">Syarat & Ketentuan</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        © 2025 KaryaNusa. Semua hak dilindungi. Melestarikan warisan budaya Indonesia untuk generasi mendatang.
      </div>
    </div>
  </footer>

  <script src="public-data.js"></script>
  <!-- ===== JAVASCRIPT ===== -->
  <script>
    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
      navbar.classList.toggle('scrolled', window.scrollY > 30);
    });

    // Scroll reveal
    const revealEls = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) { e.target.classList.add('visible'); }
      });
    }, { threshold: 0.12 });
    revealEls.forEach(el => observer.observe(el));

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(a => {
      a.addEventListener('click', e => {
        const id = a.getAttribute('href').slice(1);
        if (!id) return;
        const target = document.getElementById(id);
        if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
      });
    });
  </script>
</body>
</html>
