<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Master Perajin Nusantara – KaryaNusa</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800&family=Lato:wght@300;400;600;700&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="pengrajin.css"/>
<link rel="stylesheet" href="public-data.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
<link rel="stylesheet" href="responsive.css"/>
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav id="navbar">
  <a href="index.php" class="nav-logo">
      <circle cx="14" cy="14" r="13" stroke="#C8922A" stroke-width="2"/>
      <path d="M8 14c0-3.3 2.7-6 6-6s6 2.7 6 6-2.7 6-6 6" stroke="#C8922A" stroke-width="2" stroke-linecap="round"/>
      <circle cx="14" cy="14" r="3" fill="#C8922A"/>
    </svg>
    Karya<span>Nusa</span>
  </a>
  <ul class="nav-links">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="kerajinan.php">Kerajinan</a></li>
    <li><a href="pengrajin.php" class="active">Perajin</a></li>
    <li><a href="kontak.php">Kontak</a></li>
  </ul>
</nav>

<!-- ===== PAGE HERO ===== -->
<div class="page-hero">
  <div class="container">
    <h1 class="reveal">Master Perajin <span>Nusantara</span></h1>
    <p class="reveal" style="transition-delay:.08s">
      Temui para penjaga warisan budaya Indonesia yang telah mengabdikan hidup mereka untuk melestarikan
      teknik tradisional dan menciptakan karya seni yang mendunian
    </p>

  </div>
</div>

<!-- ===== FEATURED ARTISAN ===== -->
<section class="featured-section">
  <div class="container">
    <div class="section-header reveal">
      <h2>Perajin Unggulan Bulan Ini</h2>
      <p>Menampilkan master perajin dengan dedikasi luar biasa dalam melestarikan budaya</p>
    </div>
    <div class="featured-card reveal">
      <div class="featured-img">
        <img src="asset/hariyani1.webp"
             alt="Bu Hariyani Winotosastro"/>
        <div class="featured-badge">
          <!-- award icon SVG inline -->
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24"
               fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="8" r="6"/>
            <path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/>
          </svg>
          UNESCO Heritage Master
        </div>
      </div>
      <div class="featured-body">
        <h2>Bu Hariyani Winotosastro</h2>
        <div class="featured-role">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24"
               fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="13.5" cy="6.5" r="3.5"/>
            <path d="M22 20v-1a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v1"/>
            <path d="M2 15s1-2 4-2 4 2 4 2"/>
          </svg>
          Perajin Batik Tulis Yogyakarta
        </div>
        <div class="featured-location">
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
               fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
          Yogyakarta, Indonesia &nbsp;•&nbsp; 45+ Tahun Pengalaman
        </div>
        <p class="featured-desc">
          Bu Hariyani Winotosastro (akrab disapa Honey) adalah seorang tokoh penggerak dan penerus batik
          tradisional di Yogyakarta, serta generasi kedua dari usaha batik Winotosastro yang didirikan
          oleh ayahnya. Ia dikenal atas kontribusinya dalam melestarikan batik motif klasik dengan pewarna
          alam, aktif dalam pewarnaan alam, dan membawa batik Winotosastro ke kancah internasional.
        </p>
        <div class="featured-stats">
          <div class="fstat"><span class="fstat-num" data-target="500">0</span><span>+</span><span class="fstat-lbl">Karya Dibuat</span></div>
          <div class="fstat"><span class="fstat-num" data-target="15">0</span><span class="fstat-lbl">Penghargaan</span></div>
          <div class="fstat"><span class="fstat-num" data-target="200">0</span><span>+</span><span class="fstat-lbl">Murid</span></div>
        </div>
        <div class="featured-btns">
          <a href="pengrajin.php" class="btn btn-gold btn-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"
                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
              <circle cx="12" cy="7" r="4"/>
            </svg>
            Lihat Profil Lengkap
          </a>
          <a href="kontak.php" class="btn btn-whatsapp btn-lg">
            <!-- WhatsApp SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347"/>
              <path d="M12 0C5.373 0 0 5.373 0 12c0 2.126.554 4.122 1.52 5.859L0 24l6.335-1.54A11.945 11.945 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.848 0-3.577-.5-5.065-1.375l-.362-.216-3.759.914.948-3.656-.236-.374A9.96 9.96 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/>
            </svg>
            Hubungi WhatsApp
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== ALL ARTISANS ===== -->
<section class="artisans-section">
  <div class="container">
    <div class="section-header reveal">
      <h2>Semua Master Perajin</h2>
      <p>Jelajahi profil lengkap para perajin terbaik dari seluruh Nusantara</p>
    </div>
    <div class="artisans-grid" id="artisansGrid">

      <!-- Card 1 – Made Darmawan -->
      <div class="artisan-card reveal reveal-delay-1" data-name="made darmawan" data-daerah="bali" data-kerajinan="kayu">
        <div class="artisan-card-img">
          <img src="asset/Gradient.png" alt="Made Darmawan"/>
          <div class="artisan-card-name-overlay">
            <h3>Made Darmawan</h3>
            <span>Master Ukir Kayu Bali</span>
          </div>
          <span class="card-badge-trending">Trending</span>
        </div>
        <div class="artisan-card-body">
          <div class="artisan-meta">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24"
                 fill="none" stroke="#C8922A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
            </svg>
            Ubud, Bali &nbsp;•&nbsp; 30+ Tahun
          </div>
          <p>Spesialis ukiran relief dan patung tradisional Bali dengan teknik pahat halus yang memadukan filosofi Hindu serta daya tarik setiap giatan.</p>
          <div class="artisan-card-footer">
            <div class="artisan-stars">★★★★★ <span>4.9 (43)</span></div>
            <div class="artisan-price">Mulai <strong>Rp 2.750.000</strong></div>
          </div>
        </div>
      </div>

      <!-- Card 2 – Ibu Nuraeni -->
      <div class="artisan-card reveal reveal-delay-2" data-name="ibu nuraeni" data-daerah="lombok" data-kerajinan="keramik">
        <div class="artisan-card-img">
          <img src="asset/Gradient (1).png" alt="Ibu Nuraeni"/>
          <div class="artisan-card-name-overlay">
            <h3>Ibu Nuraeni</h3>
            <span>Master Keramik Lombok</span>
          </div>
          <span class="card-badge-trending card-badge-new">Baru</span>
        </div>
        <div class="artisan-card-body">
          <div class="artisan-meta">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24"
                 fill="none" stroke="#C8922A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
            </svg>
            Banyumulek, Lombok &nbsp;•&nbsp; 25+ Tahun
          </div>
          <p>Ahli tembikar tradisional Sasak dengan teknik pembakaran terbuka yang menghasilkan keramik berkualitas tinggi dengan motif etnik Lombok.</p>
          <div class="artisan-card-footer">
            <div class="artisan-stars">★★★★★ <span>4.9 (31)</span></div>
            <div class="artisan-price">Mulai <strong>Rp 600.000</strong></div>
          </div>
        </div>
      </div>

      <!-- Card 3 – Zainul Songket -->
      <div class="artisan-card reveal reveal-delay-3" data-name="zainul songket" data-daerah="palembang" data-kerajinan="songket">
        <div class="artisan-card-img">
          <img src="asset/Gradient (2).png" alt="Zainul Songket"/>
          <div class="artisan-card-name-overlay">
            <h3>Zainul Songket</h3>
            <span>Master Tenun Songket</span>
          </div>
          <span class="card-badge-trending">Trending</span>
        </div>
        <div class="artisan-card-body">
          <div class="artisan-meta">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24"
                 fill="none" stroke="#C8922A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
            </svg>
            Palembang, Sumatera &nbsp;•&nbsp; 30+ Tahun
          </div>
          <p>Penenun songket sutra dengan benang emas yang telah mewarisi teknik tradisional leluhur dan menciptakan motif modern yang diterima pasar internasional.</p>
          <div class="artisan-card-footer">
            <div class="artisan-stars">★★★★★ <span>5.0</span></div>
            <div class="artisan-price">Mulai <strong>Rp 5.000.000</strong></div>
          </div>
        </div>
      </div>

      <!-- Card 4 – Ki Nartosabdo -->
      <div class="artisan-card reveal reveal-delay-1" data-name="ki nartosabdo" data-daerah="jawa" data-kerajinan="wayang">
        <div class="artisan-card-img">
          <img src="asset/narto.webp" alt="Ki Nartosabdo"/>
          <div class="artisan-card-name-overlay">
            <h3>Ki Nartosabdo</h3>
            <span>Master Wayang Kulit</span>
          </div>
          <span class="card-badge-trending">Trending</span>
        </div>
        <div class="artisan-card-body">
          <div class="artisan-meta">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24"
                 fill="none" stroke="#C8922A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
            </svg>
            Solo, Jawa Tengah &nbsp;•&nbsp; 40+ Tahun
          </div>
          <p>Dalang dan pembuat wayang kulit yang menguasai teknik tatah mengagumkan mengikuti tradisi Keraton Surakarta.</p>
          <div class="artisan-card-footer">
            <div class="artisan-stars">★★★★☆ <span>4.3</span></div>
            <div class="artisan-price">Mulai <strong>Rp 1.200.000</strong></div>
          </div>
        </div>
      </div>

      <!-- Card 5 – Ibu Kartini -->
      <div class="artisan-card reveal reveal-delay-2" data-name="ibu kartini" data-daerah="flores" data-kerajinan="tenun">
        <div class="artisan-card-img">
          <img src="asset/Gradient (5).png" alt="Ibu Kartini"/>
          <div class="artisan-card-name-overlay">
            <h3>Ibu Kartini</h3>
            <span>Master Tenun Flores</span>
          </div>
          <span class="card-badge-trending">Trending</span>
        </div>
        <div class="artisan-card-body">
          <div class="artisan-meta">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24"
                 fill="none" stroke="#C8922A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
            </svg>
            Flores, NTT &nbsp;•&nbsp; 28+ Tahun
          </div>
          <p>Penerus tenun tradisional menggunakan pewarna alam dan teknik ikat yang menghasilkan kerajinan bermotif etnis Flores yang unik.</p>
          <div class="artisan-card-footer">
            <div class="artisan-stars">★★★★☆ <span>4.3</span></div>
            <div class="artisan-price">Mulai <strong>Rp 1.800.000</strong></div>
          </div>
        </div>
      </div>

      <!-- Card 6 – Ketut Budiasa -->
      <div class="artisan-card reveal reveal-delay-3" data-name="ketut budiasa" data-daerah="bali" data-kerajinan="kayu">
        <div class="artisan-card-img">
          <img src="asset/Gradient (6).png" alt="Ketut Budiasa"/>
          <div class="artisan-card-name-overlay">
            <h3>Ketut Budiasa</h3>
            <span>Pengukir Relief Bali</span>
          </div>
          <span class="card-badge-trending">Trending</span>
        </div>
        <div class="artisan-card-body">
          <div class="artisan-meta">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24"
                 fill="none" stroke="#C8922A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
            </svg>
            Celuk, Bali &nbsp;•&nbsp; 32+ Tahun
          </div>
          <p>Perajin perhiasan perak dengan teknik granulasi dan filigri yang menciptakan desain elegan dengan sentuhan motif klasik Bali.</p>
          <div class="artisan-card-footer">
            <div class="artisan-stars">★★★★☆ <span>4.3</span></div>
            <div class="artisan-price">Mulai <strong>Rp 610.000</strong></div>
          </div>
        </div>
      </div>

    </div><!-- /artisans-grid -->

    <div class="load-more-wrap reveal">
      <a href="pengrajin.php" class="btn btn-gold btn-lg" onclick="loadMore(event)">Muat Lebih Banyak Perajin</a>
    </div>
  </div>
</section>

<!-- ===== TESTIMONI ===== -->
<section class="testimoni-section">
  <div class="container">
    <div class="section-header reveal">
      <h2>Testimoni Pelanggan</h2>
      <p>Pengalaman berkesan dari para kolektor yang telah berinteraksi langsung dengan perajin kami</p>
    </div>
    <div class="testimoni-grid">
      <div class="testi-card reveal reveal-delay-1">
        <div class="testi-user">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&q=80" alt="Sarah Chen"/>
          <div class="testi-user-info">
            <strong>Sarah Chen</strong>
            <span>Kolektor Seni, Singapura</span>
          </div>
        </div>
        <div class="testi-stars">★★★★★</div>
        <p>Pak Slamet tidak hanya seorang perajin, tapi juga guru yang sabar menjelaskan filosofi di balik setiap motif batik. Pengalaman yang sangat berkesan!</p>
      </div>
      <div class="testi-card reveal reveal-delay-2">
        <div class="testi-user">
          <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=100&q=80" alt="Michael Rodriguez"/>
          <div class="testi-user-info">
            <strong>Michael Rodriguez</strong>
            <span>Desainer Interior, Amerika</span>
          </div>
        </div>
        <div class="testi-stars">★★★★★</div>
        <p>Ibu Kartini sangat profesional dan detail dalam proses ukiran. Hasil karyanya melebihi ekspektasi dan menjadi centerpiece ruang tamu saya.</p>
      </div>
      <div class="testi-card reveal reveal-delay-3">
        <div class="testi-user">
          <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&q=80" alt="Priya Sharma"/>
          <div class="testi-user-info">
            <strong>Priya Sharma</strong>
            <span>Pengusaha, India</span>
          </div>
        </div>
        <div class="testi-stars">★★★★★</div>
        <p>Komunikasi dengan Pak Hasan sangat lancar melalui WhatsApp. Beliau selalu update progress pembuatan kerajinan dan hasilnya sangat memuaskan.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== CTA JOIN ===== -->
<div class="cta-join">
  <div class="container">
    <h2>Ingin Menjadi Bagian Komunitas Perajin?</h2>
    <p>Bergabunglah dengan platform KaryaNusa dan terhubung dengan kolektor seni dari seluruh dunia</p>
    <div class="cta-join-btns">
      <a href="kontak.php" class="btn btn-gold btn-lg">Daftar Sebagai Perajin</a>
      <a href="kerajinan.php" class="btn btn-outline-gold btn-lg"
         style="border-color:rgba(255,255,255,0.5);color:#fff;">Jelajahi Kerajinan</a>
    </div>
  </div>
</div>

<!-- ===== FOOTER ===== -->
<footer>
  <div class="container">
    <div class="footer-inner">
      <div class="footer-brand">
        <a href="index.php" class="nav-logo" style="color:#fff;">
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
          <li><a href="kontak.php">Syarat &amp; Ketentuan</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 2025 KaryaNusa. Semua hak dilindungi. Melestarikan warisan budaya Indonesia untuk generasi mendatang.
    </div>
  </div>
</footer>

<!-- ===== SCRIPTS ===== -->
<script src="public-data.js"></script>
<script>
/* Navbar scroll shadow */
const nav = document.getElementById('navbar');
window.addEventListener('scroll', () => nav.classList.toggle('scrolled', window.scrollY > 30));

/* Scroll reveal */
const revObs = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.1 });
document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => revObs.observe(el));

/* Featured stats counter */
let counted = false;
const statNums = document.querySelectorAll('.fstat-num');
const targets  = [500, 15, 200];
const counterObs = new IntersectionObserver(entries => {
  if (entries[0].isIntersecting && !counted) {
    counted = true;
    statNums.forEach((el, i) => {
      const target = targets[i];
      let c = 0;
      const step = Math.max(1, Math.ceil(target / 48));
      const timer = setInterval(() => {
        c = Math.min(c + step, target);
        el.textContent = c;
        if (c >= target) clearInterval(timer);
      }, 28);
    });
  }
}, { threshold: 0.5 });
if (statNums[0]) counterObs.observe(statNums[0]);


/* Load more (demo) */
function loadMore(e) {
  e.preventDefault();
  const btn = e.currentTarget;
  btn.textContent = 'Memuat…';
  btn.style.opacity = '0.7';
  setTimeout(() => {
    btn.textContent = 'Semua Perajin Ditampilkan';
    btn.style.background = 'var(--muted)';
    btn.style.cursor = 'default';
    btn.onclick = null;
  }, 1200);
}

/* Smooth scroll */
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const id = a.getAttribute('href').slice(1);
    if (!id) return;
    const target = document.getElementById(id);
    if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth' }); }
  });
});
</script>
</body>
</html>
