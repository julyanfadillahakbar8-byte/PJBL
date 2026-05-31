(function () {
  const storeKey = 'karyanusaAdminData';
  const fallback = {
    kerajinan: [
      { id: 1, nama: 'Kain Songket Lepus', kategori: 'Tekstil', pengrajin: 'Ibu Fatimah', daerah: 'Palembang', harga: 'Rp 1.250.000', stok: '18', status: 'Terbit', gambar: 'asset/kainsongket.webp' },
      { id: 2, nama: 'Topeng Barong', kategori: 'Kayu', pengrajin: 'I Nyoman Sudiarta', daerah: 'Bali', harga: 'Rp 750.000', stok: '9', status: 'Terbit', gambar: 'asset/topengbarong.webp' },
      { id: 3, nama: 'Set Piring Pleced', kategori: 'Gerabah', pengrajin: 'Ibu Siti', daerah: 'Lombok', harga: 'Rp 320.000', stok: '24', status: 'Terbit', gambar: 'asset/piring.webp' }
    ],
    pengrajin: [
      { id: 1, nama: 'Bu Hariyani Winotosastro', keahlian: 'Batik Tulis', daerah: 'Yogyakarta', pengalaman: '45 tahun', kontak: '0812-1000-2025', status: 'Terverifikasi', foto: 'asset/hariyani1.webp' },
      { id: 2, nama: 'Pak Bambang Nuryanto', keahlian: 'Logam Tradisional', daerah: 'Grobogan', pengalaman: '35 tahun', kontak: '0813-4550-8891', status: 'Terverifikasi', foto: 'asset/bambang.webp' },
      { id: 3, nama: 'I Made Sukrisna', keahlian: 'Ukir Kayu', daerah: 'Bali', pengalaman: '28 tahun', kontak: '0821-7744-9012', status: 'Terverifikasi', foto: 'asset/narto.webp' }
    ],
    katalog: [],
    ulasan: [
      { id: 1, nama: 'Chika', foto: '', gambar_produk: '', produk: 'Karpet Motif Nusantara', halaman: 'Beranda', rating: '5', komentar: 'Kualitas bagus dan motifnya terlihat premium.', status: 'Disetujui' },
      { id: 3, nama: 'Sarah Chen', foto: 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&q=80', gambar_produk: '', produk: 'Batik Tulis Yogyakarta', halaman: 'Pengrajin', rating: '5', komentar: 'Pengrajin sangat sabar menjelaskan filosofi di balik setiap motif batik. Pengalaman yang sangat berkesan.', status: 'Disetujui' },
      { id: 6, nama: 'Rina Wijaya', foto: 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=80&h=80', gambar_produk: '', produk: 'Komunitas KaryaNusa', halaman: 'Kontak', rating: '5', komentar: 'Informasi mengenai kerajinan Nusantara dikemas modern dan menarik bagi anak muda.', status: 'Disetujui' }
    ],
    event: []
  };

  const imageByCategory = {
    tekstil: 'asset/kainsongket.webp',
    kayu: 'asset/kayu.webp',
    gerabah: 'asset/gerabah.webp',
    perhiasan: 'asset/perhiasan.webp',
    anyaman: 'asset/anyaman.webp',
    logam: 'asset/logam.webp',
    produk: 'asset/tekstil.webp',
    daerah: 'asset/bali.webp',
    teknik: 'asset/wayang.webp',
    festival: 'asset/topengbarong.webp'
  };

  const artisanImages = ['asset/hariyani1.webp', 'asset/bambang.webp', 'asset/narto.webp', 'asset/hariyani.webp'];
  const reviewImages = [
    'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&q=80',
    'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=100&q=80',
    'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&q=80'
  ];

  async function getData() {
    try {
      const response = await fetch('api/data.php?public=1', { credentials: 'same-origin' });
      const result = await response.json();
      if (result.ok) return Object.assign({}, fallback, result.data || {});
    } catch (error) {
      // Fallback dipakai saat database belum di-import.
    }

    try {
      return Object.assign({}, fallback, JSON.parse(localStorage.getItem(storeKey)) || {});
    } catch (error) {
      return fallback;
    }
  }

  function safe(text) {
    return String(text || '').replace(/[&<>"']/g, char => ({
      '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;'
    }[char]));
  }

  function imageFor(item) {
    if (item.gambar) return item.gambar;
    const key = String(item.kategori || item.keahlian || '').toLowerCase();
    return imageByCategory[key] || imageByCategory[Object.keys(imageByCategory).find(name => key.includes(name))] || 'asset/anyaman.webp';
  }

  function artisanPhoto(data, name, index) {
    const artisan = (data.pengrajin || []).find(item => String(item.nama).toLowerCase() === String(name).toLowerCase());
    return artisan?.foto || artisanImages[index % artisanImages.length];
  }

  function publicCrafts(data) {
    return (data.kerajinan || []).filter(item => item.status === 'Terbit' && Number(item.stok || 1) > 0);
  }

  function publicArtisans(data) {
    return (data.pengrajin || []).filter(item => item.status === 'Terverifikasi');
  }

  function normalizeCatalogPath(value) {
    const path = String(value || '').split('?')[0].split('#')[0].replace(/^\.?\//, '');
    return path.toLowerCase();
  }

  function reviewStars(rating) {
    const count = Math.min(5, Math.max(1, Number(rating || 5)));
    return '&#9733;'.repeat(count);
  }

  function approvedReviews(data, page = '') {
    return (data.ulasan || []).filter(item => {
      if (item.status !== 'Disetujui') return false;
      if (!page) return true;
      const target = String(item.halaman || 'Beranda').toLowerCase();
      return target === 'semua' || target === page.toLowerCase();
    });
  }

  function applyCatalogVisibility(data) {
    const catalogs = Array.isArray(data.katalog) ? data.katalog : [];
    if (!catalogs.length) return;

    const visiblePages = new Set(catalogs
      .filter(item => item.status === 'Terbit')
      .map(item => normalizeCatalogPath(item.halaman)));

    document.querySelectorAll('a[href$=".php"]').forEach(link => {
      const page = normalizeCatalogPath(link.getAttribute('href'));
      const isCatalogPage = /^katalog(?:\d+)?\.php$/.test(page);
      if (!isCatalogPage || visiblePages.has(page)) return;

      const card = link.closest('.craft-card, .kat-card, .produk-card, article, .featured-card');
      if (card) {
        card.style.display = 'none';
      } else {
        link.style.display = 'none';
      }
    });
  }

  function renderLanding(data) {
    const trending = document.querySelector('.trending-grid');
    if (trending) {
      const crafts = publicCrafts(data).slice(0, 3);
      trending.innerHTML = crafts.map((item, index) => `
        <div class="craft-card reveal reveal-delay-${(index % 3) + 1}">
          <div class="craft-card-img">
            <img src="${imageFor(item)}" alt="${safe(item.nama)}"/>
            <span class="tag">#${index + 1} Trending</span>
          </div>
          <div class="craft-card-body">
            <h3>${safe(item.nama)}</h3>
            <p>${safe(item.kategori)} khas ${safe(item.daerah)} dari ${safe(item.pengrajin)}.</p>
            <div class="craft-card-footer">
              <div>
                <span class="price-new">${safe(item.harga)}</span>
                <span class="artisan-name">oleh ${safe(item.pengrajin)}</span>
              </div>
              <a href="${safe(item.halaman || `katalog${index + 1}.php`)}" class="btn btn-gold btn-sm">Lihat</a>
            </div>
          </div>
        </div>
      `).join('') || emptyCard('Belum ada kerajinan terbit dari admin.');
    }

    const events = document.querySelector('.events-grid');
    if (events && data.event) {
      const publicEvents = data.event.filter(item => item.status !== 'Selesai').slice(0, 3);
      events.innerHTML = publicEvents.map((item, index) => `
        <div class="event-card reveal reveal-delay-${(index % 3) + 1}">
          <span class="event-badge ${item.jenis === 'Festival' ? 'badge-festival' : 'badge-workshop'}">${safe(item.jenis)}</span>
          <p class="event-date">${formatDate(item.tanggal)}</p>
          <h3>${safe(item.nama)}</h3>
          <p>Agenda budaya ${safe(item.jenis).toLowerCase()} di ${safe(item.lokasi)} yang dikelola melalui dashboard admin.</p>
          <div class="event-meta">
            <span><i class="fas fa-map-marker-alt"></i> ${safe(item.lokasi)}</span>
            <span><i class="fas fa-calendar"></i> ${safe(item.status)}</span>
          </div>
          <div class="event-footer">
            <span class="event-price">${safe(item.biaya)}</span>
            <a href="kontak.php" class="btn btn-gold btn-sm">Daftar</a>
          </div>
        </div>
      `).join('') || emptyCard('Belum ada event aktif dari admin.');
    }

    const reviews = document.querySelector('.lifestyle-grid');
    if (reviews && data.ulasan) {
      const approved = approvedReviews(data, 'Beranda').slice(0, 3);
      reviews.innerHTML = approved.map((item, index) => `
        <div class="lifestyle-card reveal reveal-delay-${(index % 3) + 1}">
          <div class="lifestyle-card-img">
            <img src="${item.gambar_produk || imageFor({ kategori: 'tekstil' })}" alt="${safe(item.produk)}"/>
          </div>
          <div class="lifestyle-card-body">
            <div class="lifestyle-user">
              <img src="${item.foto || reviewImages[index % reviewImages.length]}" alt="${safe(item.nama)}"/>
              <div class="lifestyle-user-info">
                <strong>${safe(item.nama)}</strong>
                <span>${reviewStars(item.rating)} untuk ${safe(item.produk)}</span>
              </div>
            </div>
            <p>"${safe(item.komentar)}"</p>
          </div>
        </div>
      `).join('') || emptyCard('Belum ada ulasan yang disetujui admin.');
    }
  }

  function renderCraftPage(data) {
    const products = document.querySelector('.produk-grid');
    if (products) {
      const crafts = publicCrafts(data);
      products.innerHTML = crafts.map((item, index) => `
        <div class="produk-card reveal reveal-delay-${(index % 4) + 1}">
          <div class="produk-card-img">
            <img src="${imageFor(item)}" alt="${safe(item.nama)}"/>
            <span class="produk-card-badge">${safe(item.status)}</span>
          </div>
          <div class="produk-card-body">
            <div class="produk-artisan">
              <img src="${artisanPhoto(data, item.pengrajin, index)}" alt="${safe(item.pengrajin)}"/>
              <span>${safe(item.pengrajin)}</span>
            </div>
            <h3>${safe(item.nama)}</h3>
            <p>${safe(item.kategori)} khas ${safe(item.daerah)}. Stok tersedia ${safe(item.stok)} produk.</p>
            <div class="produk-footer">
              <div><span class="produk-price-new">${safe(item.harga)}</span></div>
              <span class="stars-sm">★★★★★</span>
            </div>
          </div>
        </div>
      `).join('') || emptyCard('Belum ada kerajinan terbit dari admin.');
    }

    const stats = document.querySelectorAll('.stats-bar .stat-item .num');
    if (stats.length >= 4) {
      stats[0].textContent = `${new Set(publicCrafts(data).map(item => item.kategori)).size}+`;
      stats[3].textContent = `${publicArtisans(data).length}+`;
    }

  }

  function renderArtisanPage(data) {
    const grid = document.getElementById('artisansGrid');
    if (!grid) return;
    const artisans = publicArtisans(data);
    grid.innerHTML = artisans.map((item, index) => `
      <div class="artisan-card reveal reveal-delay-${(index % 3) + 1}" data-name="${safe(item.nama).toLowerCase()}" data-daerah="${safe(item.daerah).toLowerCase()}" data-kerajinan="${safe(item.keahlian).toLowerCase()}">
        <div class="artisan-card-img">
          <img src="${item.foto || artisanImages[index % artisanImages.length]}" alt="${safe(item.nama)}"/>
          <div class="artisan-card-name-overlay"><h3>${safe(item.nama)}</h3><span>${safe(item.daerah)}</span></div>
        </div>
        <div class="artisan-card-body">
          <div class="artisan-meta"><i class="fas fa-palette"></i> ${safe(item.keahlian)}</div>
          <p>Pengrajin ${safe(item.keahlian).toLowerCase()} dari ${safe(item.daerah)} dengan pengalaman ${safe(item.pengalaman)}.</p>
          <div class="artisan-meta"><i class="fas fa-phone"></i> ${safe(item.kontak)}</div>
          <div class="artisan-meta"><i class="fas fa-certificate"></i> ${safe(item.status)}</div>
          <div class="artisan-card-footer">
            <span class="artisan-stars">★★★★★ <span>5.0</span></span>
            <a href="kontak.php" class="btn btn-gold btn-sm">Hubungi</a>
          </div>
        </div>
      </div>
    `).join('') || emptyCard('Belum ada pengrajin terverifikasi dari admin.');
    const testimonials = document.querySelector('.testimoni-grid');
    if (testimonials && data.ulasan) {
      const reviews = approvedReviews(data, 'Pengrajin').slice(0, 3);
      testimonials.innerHTML = reviews.map((item, index) => `
        <div class="testi-card reveal reveal-delay-${(index % 3) + 1}">
          <div class="testi-user">
            <img src="${item.foto || reviewImages[index % reviewImages.length]}" alt="${safe(item.nama)}"/>
            <div class="testi-user-info">
              <strong>${safe(item.nama)}</strong>
              <span>${safe(item.produk)}</span>
            </div>
          </div>
          <div class="testi-stars">${reviewStars(item.rating)}</div>
          <p>${safe(item.komentar)}</p>
        </div>
      `).join('') || emptyCard('Belum ada ulasan yang disetujui admin.');
    }
  }

  function renderContactPage(data) {
    const testimonials = document.querySelector('.testimonial-grid');
    if (!testimonials || !data.ulasan) return;

    const reviews = approvedReviews(data, 'Kontak').slice(0, 3);
    testimonials.innerHTML = reviews.map((item, index) => `
      <div class="testimonial-card">
        <p class="quote">"${safe(item.komentar)}"</p>
        <div class="user-info">
          <img src="${item.foto || reviewImages[index % reviewImages.length]}" alt="${safe(item.nama)}">
          <div>
            <h4>${safe(item.nama)}</h4>
            <span>${reviewStars(item.rating)} - ${safe(item.produk)}</span>
          </div>
        </div>
      </div>
    `).join('') || emptyCard('Belum ada ulasan yang disetujui admin.');
  }

  function emptyCard(message) {
    return `<div class="admin-empty">${message}</div>`;
  }

  function formatDate(value) {
    if (!value) return '-';
    return new Intl.DateTimeFormat('id-ID', { day: '2-digit', month: 'short', year: 'numeric' }).format(new Date(value));
  }

  async function renderPublicData() {
    const data = await getData();
    applyCatalogVisibility(data);
    renderLanding(data);
    renderCraftPage(data);
    renderArtisanPage(data);
    renderContactPage(data);
    applyCatalogVisibility(data);
    setTimeout(() => {
      document.querySelectorAll('.reveal').forEach(item => item.classList.add('visible'));
    }, 0);
  }

  document.addEventListener('DOMContentLoaded', renderPublicData);
  window.addEventListener('storage', event => {
    if (event.key === storeKey) renderPublicData();
  });
})();
