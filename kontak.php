<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi KaryaNusa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="kontak.css">
    <link rel="stylesheet" href="public-data.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="footer-consistent.css">
</head>
<body>

    <nav id="navbar" class="navbar">
            <a href="landing.php" class="nav-logo">
             <p>Karya<span>Nusa</span></p>
            </a>
            <ul class="nav-links">
                <li><a href="landing.php">Beranda</a></li>
                <li><a href="kerajinan.php">Kerajinan</a></li>
                <li><a href="pengrajin.php">Pengrajin</a></li>
                <li><a href="kontak.php" class="active">Kontak</a></li>
            </ul>
    </nav>

    <header class="hero">
        <h1>Hubungi <span class="highlight">KaryaNusa</span></h1>
        <p class="subtitle">Selalu terhubung dengan KaryaNusa, warisan budaya masa kini.</p>
        <p class="description">Silakan hubungi kontak di bawah ini jika ada kendala atau ingin melakukan kerja sama, tim admin kami siap melayani anda dengan senang hati.</p>
    </header>

    <section class="container section-padding">
        <div class="contact-cards-grid">
            <div class="card-info">
                <div class="icon-circle whatsapp"><i class="fab fa-whatsapp"></i></div>
                <h3>WhatsApp</h3>
                <p>Respon cepat, tersedia jam 08.00 - 16.00</p>
                <a href="https://wa.me/6281333747662" class="btn-card orange-btn">Kirim Pesan</a>
            </div>
            <div class="card-info">
                <div class="icon-circle email"><i class="far fa-envelope"></i></div>
                <h3>Email</h3>
                <p>Kirim keluhan anda lewat email kami</p>
                <a href="mailto:akbarelaina@gmail.com" class="btn-card yellow-btn">Kirim Email</a>
            </div>
            <div class="card-info">
                <div class="icon-circle call"><i class="fas fa-phone-alt"></i></div>
                <h3>Call</h3>
                <p>Hubungi admin via nomor telepon</p>
                <a href="tel:6281333747662" class="btn-card yellow-btn">Hubungi Sekarang</a>
            </div>
        </div>
    </section>

    <section class="container section-padding">
        <div class="form-wrapper">
            <h2>Formulir Kontak</h2>
            <p class="form-subtitle">Kirim kritik dan saran atau kendala yang dialami dengan mengisi formulir di bawah ini</p>
            
            <form id="contactForm">
                <div class="form-row">
                    <div class="form-group">
                        <label>Nama Lengkap *</label>
                        <input type="text" name="nama" placeholder="Masukkan nama lengkap kamu" required>
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" placeholder="contoh@gmail.com" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="tel" name="telepon" placeholder="Masukkan nomor telepon">
                    </div>
                    <div class="form-group">
                        <label>Instansi/Perusahaan *</label>
                        <input type="text" name="instansi" placeholder="Masukkan nama instansi" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Subjek *</label>
                    <input type="text" name="subjek" placeholder="Tuliskan subjek hal yang ingin dibahas" required>
                </div>
                <div class="form-group">
                    <label>Pesan *</label>
                    <textarea rows="5" name="pesan" placeholder="Tuliskan keluhan, kritik, saran, atau kerja sama kamu disini..." required></textarea>
                </div>
                
                <div class="form-group checkbox-group">
                    <label>Konfirmasi Pengiriman *</label>
                    <div class="radio-options">
                        <label><input type="radio" name="confirm" required> Kirim sekarang juga</label>
                        <label><input type="radio" name="confirm"> Pikir-pikir dulu</label>
                    </div>
                    <p class="checkbox-note">Saya menyetujui semua persyaratan privasi yang berlaku dan data yang dikirim adalah benar.</p>
                </div>

                <button type="submit" class="btn-submit">Kirim Pesan</button>
            </form>
        </div>
    </section>

    <section class="container section-padding text-center">
        <h2>Tim KaryaNusa</h2>
        <p class="section-subtitle">Mari berkenalan dengan tim hebat yang mengelola dan memelihara platform ini</p>
        
        <div class="team-grid">
            <div class="team-card">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=150&h=150" alt="Tim 1" class="team-img">
                <h3>Budi Santoso</h3>
                <p class="role">Chief Executive Officer</p>
                <p class="team-desc">Fokus pada arah strategis KaryaNusa untuk melestarikan budaya di era modern.</p>
                <div class="team-socials">
                    <a href="https://linkedin.com" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="https://instagram.com" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="team-card">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=150&h=150" alt="Tim 2" class="team-img">
                <h3>Siti Lestari</h3>
                <p class="role">Head of Marketing</p>
                <p class="team-desc">Menghubungkan komunitas lokal dan memperkenalkan produk ke pasar yang lebih luas.</p>
                <div class="team-socials">
                    <a href="https://linkedin.com" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="https://instagram.com" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="team-card">
                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=150&h=150" alt="Tim 3" class="team-img">
                <h3>Ahmad Jailani</h3>
                <p class="role">Lead Developer</p>
                <p class="team-desc">Bertanggung jawab atas performa platform digital agar tetap nyaman digunakan.</p>
                <div class="team-socials">
                    <a href="https://linkedin.com" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com" aria-label="GitHub"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="container section-padding">
        <div class="office-wrapper">
            <div class="office-info">
                <h2>Kunjungi Kantor Kami</h2>
                <p class="office-subtitle">Silakan datang langsung ke kantor kami jika ada keperluan penting atau ingin berdiskusi secara offline dengan tim kami.</p>
                
                <ul class="address-list">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Alamat</strong>
                            <p>JL. TANIMBAR 22 MALANG, Kasin, Kec. Klojen, Kota Malang, Jawa Timur.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <strong>Kontak</strong>
                            <p>+62 813-3374-7662<br>+62 341-456789 (Telp Kantor)</p>
                        </div>
                    </li>
                    <li>
                        <i class="far fa-clock"></i>
                        <div>
                            <strong>Jam Operasional</strong>
                            <p>Senin - Jumat: 08.00 - 16.00 WIB<br>Sabtu - Minggu: Tutup</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="office-image">
                <img src="asset/smkn4.png" alt="Kantor KaryaNusa">
            </div>
        </div>
    </section>

    <section class="container section-padding text-center">
        <h2>Bergabung dengan Komunitas</h2>
        <p class="section-subtitle">Ikuti akun media sosial resmi kami untuk mendapatkan informasi menarik seputar budaya nusantara setiap harinya.</p>
        
        <div class="social-grid">
            <div class="social-card">
                <i class="fab fa-instagram instagram-color"></i>
                <h3>Instagram</h3>
                <p>Dapatkan update konten visual harian kami</p>
                    <a href="https://instagram.com/karyanusa.id">@karyanusa.id</a>
            </div>
            <div class="social-card">
                <i class="fab fa-youtube youtube-color"></i>
                <h3>YouTube</h3>
                <p>Tonton video dokumenter seni budaya kami</p>
                    <a href="https://facebook.com">KaryaNusa Official</a>
            </div>
            <div class="social-card">
                <i class="fab fa-facebook facebook-color"></i>
                <h3>Facebook</h3>
                <p>Diskusikan budaya bersama komunitas di grup</p>
                    <a href="https://facebook.com">Komunitas KaryaNusa</a>
            </div>
        </div>

        <h3 class="story-title">Cerita dari Komunitas</h3>
        <p class="section-subtitle">Apa kata mereka setelah bergabung dengan KaryaNusa?</p>
        
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <p class="quote">"Sangat terbantu dengan adanya KaryaNusa. Informasi mengenai sejarah nusantara dikemas dengan sangat modern dan menarik bagi anak muda!"</p>
                <div class="user-info">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=80&h=80" alt="User 1">
                    <div>
                        <h4>Rina Wijaya</h4>
                        <span>Mahasiswi Sejarah</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <p class="quote">"Platform ini menjadi wadah yang luar biasa bagi pengrajin lokal seperti saya untuk memperkenalkan produk tradisional ke kancah nasional."</p>
                <div class="user-info">
                    <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?auto=format&fit=crop&q=80&w=80&h=80" alt="User 2">
                    <div>
                        <h4>Gatot Subroto</h4>
                        <span>Pengrajin Batik</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <p class="quote">"Event-event kebudayaan yang diadakan selalu seru. Tidak sabar untuk ikut serta lagi di kegiatan pelestarian budaya selanjutnya!"</p>
                <div class="user-info">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=80&h=80" alt="User 3">
                    <div>
                        <h4>Siti Aminah</h4>
                        <span>Anggota Komunitas</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container section-padding">
        <h2 class="text-center">Pertanyaan yang Sering Diajukan</h2>
        <p class="section-subtitle text-center">Temukan jawaban cepat atas pertanyaan umum Anda di bawah ini</p>
        
        <div class="faq-accordion">
            <div class="faq-item">
                <div class="faq-question">
                    <span>Bagaimana cara bergabung menjadi relawan di KaryaNusa?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Anda bisa mendaftar melalui halaman karir atau menunggu pembukaan open recruitment relawan yang diinfokan berkala melalui Instagram resmi kami.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Apakah ada biaya untuk mengakses platform ini?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Tidak, seluruh artikel, data kebudayaan, dan akses dasar komunitas di platform KaryaNusa dapat diakses secara gratis oleh seluruh masyarakat.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Di mana lokasi kantor fisik KaryaNusa?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Kantor pusat kami berlokasi di Jl. Raden Patah No. 123, Blimbing, Kota Malang, Jawa Timur. Detail lengkap dan jam operasional tertera pada bagian alamat di atas.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Bagaimana cara mengajukan kerja sama?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Silakan isi Formulir Kontak di atas dengan memilih subjek 'Kerja Sama' atau langsung mengirimkan proposal formal Anda melalui email resmi kami.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Apakah konten di sini bisa dijadikan referensi tugas akademik?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Bisa. Semua konten edukasi kami telah divalidasi oleh tim ahli sejarah dan kebudayaan kami, sehingga valid digunakan dengan mencantumkan sumber link.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter text-center">
        <h2>Tetap Terhubung dengan Budaya</h2>
        <p>Dapatkan artikel kebudayaan pilihan, info event menarik, dan promo produk lokal langsung di email Anda.</p>
        <form class="newsletter-form" id="newsletterForm">
            <input type="email" placeholder="Masukkan alamat email kamu" required>
            <button type="submit">Berlangganan</button>
        </form>
    </section>

    <footer>
  <div class="container">
    <div class="footer-inner">
      <div class="footer-brand">
        <a href="#" class="nav-logo" style="color:#fff;">
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
          <li><a href="#">Beranda</a></li>
          <li><a href="#">Kerajinan</a></li>
          <li><a href="#">Pengrajin</a></li>
          <li><a href="#">Detail Produk</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5>Kontak</h5>
        <ul>
          <li><a href="#">Hubungi Kami</a></li>
          <li><a href="#">Bantuan</a></li>
          <li><a href="#">Kebijakan Privasi</a></li>
          <li><a href="#">Syarat &amp; Ketentuan</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 2025 KaryaNusa. Semua hak dilindungi. Melestarikan warisan budaya Indonesia untuk generasi mendatang.
    </div>
  </div>
</footer>
    
    <script src="public-data.js"></script>
    <script src="kontak.js"></script>
</body>
</html>
