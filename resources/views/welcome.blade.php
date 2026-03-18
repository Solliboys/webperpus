@extends('layouts.frontend._main')

@section('content')

<style>
  :root {
    --bondo-green: #1a6d3a;
    --bondo-green-dark: #0a3c1e;
    --bondo-green-light: #e8f5ec;
    --bondo-gold: #d4a017;
    --bondo-gold-light: #fdf6e3;
    --bondo-text: #2c3e50;
    --bondo-muted: #6c757d;
    --bondo-bg: #fafbfc;
  }

  .section-padding { padding: 80px 0; }
  .section-title { text-align: center; margin-bottom: 50px; }
  .section-title h2 { font-size: 2rem; font-weight: 800; color: var(--bondo-text); margin-bottom: 10px; }
  .section-title p { color: var(--bondo-muted); font-size: 1.05rem; max-width: 600px; margin: 0 auto; }
  .section-title .line { width: 60px; height: 4px; background: var(--bondo-gold); border-radius: 2px; margin: 15px auto 0; }

  /* Hero */
  .hero-perpus {
    min-height: 92vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, var(--bondo-green-dark) 0%, var(--bondo-green) 100%);
  }
  .hero-perpus::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&w=1920&q=80') center/cover;
    opacity: 0.15;
  }
  .hero-perpus .hero-content { position: relative; z-index: 2; }
  .hero-perpus .hero-badge {
    display: inline-block; background: var(--bondo-gold); color: #fff;
    padding: 6px 20px; border-radius: 50px; font-size: 0.75rem;
    font-weight: 700; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 20px;
  }
  .hero-perpus h1 { font-size: 3.2rem; font-weight: 900; color: #fff; line-height: 1.2; margin-bottom: 20px; }
  .hero-perpus h1 span { color: var(--bondo-gold); }
  .hero-perpus .hero-desc { color: rgba(255,255,255,0.8); font-size: 1.1rem; max-width: 560px; margin: 0 auto 35px; line-height: 1.7; }
  /* Shared Button Styles */
  .btn-hero-primary, .btn-hero-secondary {
    padding: 14px 36px; border-radius: 50px; font-weight: 700; font-size: 0.95rem;
    text-decoration: none; display: inline-flex; align-items: center; gap: 10px;
    transition: all 0.3s; backdrop-filter: blur(8px); box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    border: 1.5px solid rgba(255, 255, 255, 0.3); color: #fff;
  }
  .btn-hero-primary:hover, .btn-hero-secondary:hover { transform: translateY(-3px); color: #fff; box-shadow: 0 8px 30px rgba(0,0,0,0.2); }

  .btn-hero-primary { background: rgba(212, 160, 23, 0.4); }
  .btn-hero-primary:hover { background: rgba(212, 160, 23, 0.85); }
  
  .btn-hero-secondary { background: rgba(255,255,255,0.12); }
  .btn-hero-secondary:hover { background: rgba(255,255,255,0.22); border-color: rgba(255,255,255,0.6); }
  .hero-stats { margin-top: 60px; }
  .hero-stat-item { text-align: center; }
  .hero-stat-item h3 { font-size: 1.8rem; font-weight: 800; color: var(--bondo-gold); margin-bottom: 2px; }
  .hero-stat-item p { color: rgba(255,255,255,0.6); font-size: 0.85rem; font-weight: 500; margin: 0; }

  /* Feature Cards */
  .feature-card {
    background: #fff; border-radius: 16px; padding: 30px;
    border: 1px solid #f0f0f0; transition: all 0.3s; text-align: center;
    height: 100%;
  }
  .feature-card:hover { transform: translateY(-5px); box-shadow: 0 15px 40px rgba(0,0,0,0.08); border-color: transparent; }
  .feature-card .icon-box {
    width: 60px; height: 60px; border-radius: 14px;
    display: inline-flex; align-items: center; justify-content: center;
    font-size: 1.5rem; margin-bottom: 18px;
  }
  .feature-card h5 { font-weight: 700; color: var(--bondo-text); margin-bottom: 8px; }
  .feature-card p { color: var(--bondo-muted); font-size: 0.9rem; margin: 0; }

  /* Jadwal */
  .jadwal-status {
    border-radius: 20px; padding: 40px; text-align: center; color: #fff;
  }
  .jadwal-table { border-radius: 16px; overflow: hidden; border: 1px solid #eee; }
  .jadwal-table table { margin: 0; }
  .jadwal-table thead { background: var(--bondo-green-light); }
  .jadwal-table thead th { color: var(--bondo-green); font-weight: 700; border: none; padding: 14px; font-size: 0.9rem; }
  .jadwal-table tbody td { padding: 14px; font-size: 0.9rem; border-color: #f5f5f5; }

  /* Berita */
  .berita-card {
    border-radius: 16px; overflow: hidden; border: 1px solid #f0f0f0;
    background: #fff; transition: all 0.3s; height: 100%;
  }
  .berita-card:hover { transform: translateY(-5px); box-shadow: 0 15px 40px rgba(0,0,0,0.08); }
  .berita-card img { height: 200px; object-fit: cover; width: 100%; }
  .berita-card .berita-body { padding: 24px; }
  .berita-card .berita-badge {
    display: inline-block; padding: 4px 12px; border-radius: 6px;
    font-size: 0.75rem; font-weight: 600;
  }
  .berita-card h5 { font-weight: 700; font-size: 1rem; color: var(--bondo-text); margin: 12px 0 8px; }
  .berita-card p { color: var(--bondo-muted); font-size: 0.88rem; line-height: 1.6; }
  .berita-card .read-more { color: var(--bondo-green); font-weight: 700; font-size: 0.85rem; text-decoration: none; }
  .berita-card .read-more:hover { text-decoration: underline; }

  /* Buku */
  .buku-card {
    background: #fff; border-radius: 16px; padding: 24px; text-align: center;
    border: 1px solid #f0f0f0; transition: all 0.3s; height: 100%; position: relative;
  }
  .buku-card:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(0,0,0,0.1); border-color: var(--bondo-green); }
  .buku-card img { width: 130px; height: 190px; object-fit: cover; border-radius: 10px; box-shadow: 0 8px 20px rgba(0,0,0,0.15); margin-bottom: 18px; }
  .buku-card h6 { font-weight: 700; color: var(--bondo-text); margin-bottom: 4px; }
  .buku-card .author { color: var(--bondo-muted); font-size: 0.82rem; margin-bottom: 10px; }
  .buku-card .kategori-badge {
    display: inline-block; padding: 4px 14px; border-radius: 50px;
    font-size: 0.75rem; font-weight: 600; background: var(--bondo-green-light); color: var(--bondo-green);
  }
  .buku-card .badge-populer {
    position: absolute; top: 12px; right: 12px; background: #ef4444; color: #fff;
    padding: 4px 12px; border-radius: 50px; font-size: 0.7rem; font-weight: 700;
  }

  /* Ulasan */
  .ulasan-card {
    background: #fff; border-radius: 16px; padding: 30px; text-align: center;
    border: 1px solid #f0f0f0; height: 100%; transition: all 0.3s;
  }
  .ulasan-card:hover { box-shadow: 0 10px 30px rgba(0,0,0,0.06); }
  .ulasan-card .stars { color: #f59e0b; font-size: 1rem; margin-bottom: 15px; }
  .ulasan-card blockquote { font-style: italic; color: #555; font-size: 0.92rem; line-height: 1.7; margin-bottom: 20px; }
  .ulasan-card .avatar { width: 50px; height: 50px; border-radius: 50%; object-fit: cover; border: 3px solid var(--bondo-green-light); margin-bottom: 8px; }
  .ulasan-card .name { font-weight: 700; color: var(--bondo-text); font-size: 0.9rem; margin: 0; }
  .ulasan-card .role { color: var(--bondo-muted); font-size: 0.78rem; margin: 0; }

  /* CTA */
  .cta-section {
    background: linear-gradient(135deg, var(--bondo-green-dark), var(--bondo-green));
    padding: 60px 0; text-align: center; color: #fff;
  }
  .cta-section h3 { font-weight: 800; font-size: 1.8rem; margin-bottom: 12px; color: #fff; }
  .cta-section p { color: rgba(255,255,255,0.85); font-size: 1rem; margin-bottom: 30px; }
  .cta-section .btn-hero-primary {
    background: var(--bondo-gold); border: none;
  }
  .cta-section .btn-hero-primary:hover { background: #b88a14; }

  /* Responsive */
  @media (max-width: 768px) {
    .hero-perpus h1 { font-size: 2rem; }
    .hero-perpus .hero-desc { font-size: 0.95rem; }
    .section-padding { padding: 50px 0; }
  }

  /* === Override template main.css conflicts === */
  .hero-perpus {
    background-color: transparent !important;
    overflow: visible !important;
    padding: 0 !important;
    scroll-margin-top: 0 !important;
  }
  .section-padding {
    overflow: visible !important;
    background-color: transparent !important;
  }
  .cta-section {
    overflow: visible !important;
    background-color: transparent !important;
  }
  /* Reset section-title from template */
  .section-padding .section-title {
    padding-bottom: 0 !important;
  }
  .section-padding .section-title h2::after {
    display: none !important;
  }

  /* Fallback: jika AOS gagal load, tetap tampilkan konten */
  [data-aos] {
    opacity: 1 !important;
    transform: none !important;
    transition: opacity 0.6s ease, transform 0.6s ease;
  }
</style>

<!-- ========= HERO ========= -->
<section class="hero-perpus" id="hero">
  <div class="container hero-content text-center">
    <div class="hero-badge">PERPUSTAKAAN KABUPATEN BONDOWOSO</div>
    <h1>Selamat Datang di<br><span>Perpustakaan Daerah</span></h1>
    <p class="hero-desc">Jendela dunia dalam genggaman Anda. Akses ribuan koleksi buku, layanan digital, dan ruang baca nyaman untuk seluruh masyarakat Bondowoso.</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="#buku" class="btn-hero-primary"><i class="bi bi-journal-bookmark"></i> Jelajahi Koleksi</a>
      <a href="#jadwal" class="btn-hero-secondary"><i class="bi bi-clock"></i> Jam Operasional</a>
    </div>
    <div class="hero-stats">
      <div class="row justify-content-center g-4">
        <div class="col-4 col-md-2 hero-stat-item">
          <h3>10K+</h3><p>Koleksi Buku</p>
        </div>
        <div class="col-4 col-md-2 hero-stat-item">
          <h3>842</h3><p>Anggota Aktif</p>
        </div>
        <div class="col-4 col-md-2 hero-stat-item">
          <h3>15K+</h3><p>Pengunjung</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========= TENTANG / FITUR ========= -->
<section class="section-padding" style="background: var(--bondo-bg);">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>Mengapa Memilih Kami?</h2>
      <p>Perpustakaan Daerah Bondowoso hadir dengan fasilitas terbaik untuk mendukung budaya literasi masyarakat</p>
      <div class="line"></div>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="feature-card">
          <div class="icon-box" style="background: var(--bondo-green-light); color: var(--bondo-green);"><i class="bi bi-book"></i></div>
          <h5>Ribuan Koleksi</h5>
          <p>Lebih dari 10.000 judul buku fiksi, non-fiksi, jurnal, dan referensi ilmiah</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-card">
          <div class="icon-box" style="background: var(--bondo-gold-light); color: var(--bondo-gold);"><i class="bi bi-wifi"></i></div>
          <h5>Internet Gratis</h5>
          <p>Akses WiFi berkecepatan tinggi gratis untuk semua pengunjung perpustakaan</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-card">
          <div class="icon-box" style="background: var(--bondo-green-light); color: var(--bondo-green);"><i class="bi bi-building"></i></div>
          <h5>Ruang Nyaman</h5>
          <p>Ruang baca full AC, bersih, dan kondusif untuk belajar sepanjang hari</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="feature-card">
          <div class="icon-box" style="background: var(--bondo-gold-light); color: var(--bondo-gold);"><i class="bi bi-laptop"></i></div>
          <h5>E-Library</h5>
          <p>Katalog digital dan akses e-book melalui komputer yang tersedia di sini</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========= TENTANG PERPUSTAKAAN ========= -->
<section id="tentang" class="section-padding">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="position-relative">
          <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&w=800&q=80" class="img-fluid rounded-4 shadow" alt="Perpustakaan" style="border: 4px solid #fff;">
          <div class="position-absolute bottom-0 end-0 bg-white shadow rounded-3 p-3 m-3 d-none d-md-block" style="border-left: 4px solid var(--bondo-gold);">
            <h5 class="fw-bold mb-0" style="color: var(--bondo-green);">10.000+</h5>
            <small class="text-muted">Koleksi Judul Buku</small>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <span class="d-inline-block px-3 py-1 rounded-pill mb-3" style="background: var(--bondo-green-light); color: var(--bondo-green); font-weight: 700; font-size: 0.85rem;">Tentang Kami</span>
        <h2 class="fw-bold mb-3" style="color: var(--bondo-text);">Pusat Literasi & Informasi Masyarakat Bondowoso</h2>
        <p class="mb-4" style="color: var(--bondo-muted); line-height: 1.8;">Perpustakaan Daerah Kabupaten Bondowoso bukan sekadar tempat menyimpan buku, melainkan ruang interaksi sosial, diskusi, dan pengembangan diri bagi seluruh elemen masyarakat.</p>
        <div class="p-3 rounded-3" style="background: var(--bondo-gold-light); border-left: 4px solid var(--bondo-gold);">
          <p class="fst-italic mb-1" style="color: #555; font-size: 0.92rem;">"Membaca adalah melawan, menulis adalah merawat budaya bangsa."</p>
          <small class="fw-bold" style="color: var(--bondo-green);">— Kepala Dinas Perpusda Bondowoso</small>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========= JADWAL ========= -->
<section id="jadwal" class="section-padding" style="background: var(--bondo-bg);">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>Jadwal Operasional</h2>
      <p>Jadwal buka dan layanan Perpustakaan Daerah Kabupaten Bondowoso</p>
      <div class="line"></div>
    </div>

    @php
      date_default_timezone_set('Asia/Jakarta');
      $currentDay = date('w');
      $currentHour = date('H:i');
      $isOpen = false;
      if ($currentDay >= 1 && $currentDay <= 4) {
        if ($currentHour >= '08:00' && $currentHour <= '15:30') $isOpen = true;
      } elseif ($currentDay == 5) {
        if ($currentHour >= '08:00' && $currentHour <= '14:30') $isOpen = true;
      }
      $daysIndo = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];
      $todayName = $daysIndo[$currentDay];
    @endphp

    <div class="row justify-content-center g-4">
      <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
        <div class="jadwal-status h-100 d-flex flex-column justify-content-center" style="background: {{ $isOpen ? 'linear-gradient(135deg, #16a34a, #22c55e)' : 'linear-gradient(135deg, #dc2626, #ef4444)' }};">
          <i class="bi {{ $isOpen ? 'bi-door-open-fill' : 'bi-door-closed-fill' }}" style="font-size: 3rem;"></i>
          <h3 class="fw-bold mt-3 mb-2">{{ $isOpen ? 'Perpustakaan Buka' : 'Perpustakaan Tutup' }}</h3>
          <p style="opacity: 0.85; margin-bottom: 20px;">{{ $isOpen ? 'Kami siap melayani Anda hari ini!' : 'Silakan kunjungi pada jam buka.' }}</p>
          <div style="border-top: 1px solid rgba(255,255,255,0.2); padding-top: 15px;">
            <small style="opacity: 0.6;">Waktu saat ini</small>
            <h5 class="fw-bold mb-0">{{ $todayName }}, {{ date('H:i') }} WIB</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-5" data-aos="fade-up" data-aos-delay="200">
        <div class="jadwal-table bg-white shadow-sm h-100 d-flex align-items-center">
          <table class="table table-hover mb-0 text-center w-100">
            <thead>
              <tr>
                <th>Hari</th>
                <th>Buka</th>
                <th>Tutup</th>
              </tr>
            </thead>
            <tbody>
              <tr class="{{ ($currentDay >= 1 && $currentDay <= 4) ? 'fw-bold' : '' }}" style="{{ ($currentDay >= 1 && $currentDay <= 4) ? 'background: var(--bondo-green-light);' : '' }}">
                <td>Senin – Kamis</td><td>08:00</td><td>15:30</td>
              </tr>
              <tr class="{{ $currentDay == 5 ? 'fw-bold' : '' }}" style="{{ $currentDay == 5 ? 'background: var(--bondo-green-light);' : '' }}">
                <td>Jumat</td><td>08:00</td><td>14:30</td>
              </tr>
              <tr class="{{ ($currentDay == 0 || $currentDay == 6) ? 'fw-bold text-danger' : '' }}">
                <td>Sabtu & Minggu</td><td colspan="2" class="text-danger">TUTUP</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========= BERITA ========= -->
<section id="berita" class="section-padding">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>Berita Terbaru</h2>
      <p>Kegiatan dan pengumuman terkini Perpustakaan Bondowoso</p>
      <div class="line"></div>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="berita-card">
          <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=600&q=80" alt="Berita">
          <div class="berita-body">
            <div class="d-flex align-items-center gap-2 mb-2">
              <span class="berita-badge" style="background: var(--bondo-green-light); color: var(--bondo-green);">Kegiatan</span>
              <small class="text-muted">10 Mar 2026</small>
            </div>
            <h5>Peresmian Pojok Baca Digital di Alun-Alun Bondowoso</h5>
            <p>Perpustakaan Daerah meresmikan Pojok Baca Digital yang dapat diakses publik secara gratis...</p>
            <a href="#" class="read-more">Baca Selengkapnya →</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="berita-card">
          <img src="https://images.unsplash.com/photo-1543002588-bfa74002ed7e?auto=format&fit=crop&w=600&q=80" alt="Berita">
          <div class="berita-body">
            <div class="d-flex align-items-center gap-2 mb-2">
              <span class="berita-badge" style="background: var(--bondo-gold-light); color: var(--bondo-gold);">Koleksi</span>
              <small class="text-muted">5 Mar 2026</small>
            </div>
            <h5>Tambahan 500 Buku Referensi Baru dari Penerbit Nasional</h5>
            <p>Kami menghadirkan lebih dari 500 judul buku referensi terbaru untuk mahasiswa dan pelajar...</p>
            <a href="#" class="read-more">Baca Selengkapnya →</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="berita-card">
          <img src="https://images.unsplash.com/photo-1577563908411-5079b6c33367?auto=format&fit=crop&w=600&q=80" alt="Berita">
          <div class="berita-body">
            <div class="d-flex align-items-center gap-2 mb-2">
              <span class="berita-badge" style="background: var(--bondo-green-light); color: var(--bondo-green);">Lomba</span>
              <small class="text-muted">28 Feb 2026</small>
            </div>
            <h5>Lomba Menulis Esai: "Bondowoso Membaca" 2026</h5>
            <p>Lomba menulis esai dengan total hadiah jutaan rupiah. Segera daftar dan unjuk bakat menulismu!</p>
            <a href="#" class="read-more">Baca Selengkapnya →</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========= REKOMENDASI BUKU ========= -->
<section id="buku" class="section-padding" style="background: var(--bondo-bg);">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>Rekomendasi Buku</h2>
      <p>Karya terbaik yang populer bulan ini di Perpustakaan Bondowoso</p>
      <div class="line"></div>
    </div>
    <div class="row g-4 justify-content-center">
      @forelse($books as $book)
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="{{ $loop->iteration * 100 }}">
        <div class="buku-card">
          @if($book->stock <= 2 && $book->stock > 0)
            <span class="badge-populer"><i class="bi bi-fire"></i> Sisa {{ $book->stock }}</span>
          @elseif($book->stock == 0)
            <span class="badge-populer bg-secondary"><i class="bi bi-x-circle"></i> Habis</span>
          @endif

          @if($book->cover_image)
            <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}">
          @else
            <div class="bg-light d-flex align-items-center justify-content-center mb-3 mx-auto shadow rounded" style="width: 130px; height: 190px;">
              <i class="bi bi-book text-muted" style="font-size: 3rem;"></i>
            </div>
          @endif
          
          <h6>{{ $book->title }}</h6>
          <p class="author text-truncate px-2">{{ $book->author }}</p>
          <span class="kategori-badge">{{ $book->category->name }}</span>
        </div>
      </div>
      @empty
      <div class="col-12 text-center py-5">
        <p class="text-muted">Belum ada koleksi buku yang tersedia.</p>
      </div>
      @endforelse
    </div>
    <div class="text-center mt-5">
      <a href="#" class="btn-hero-primary" style="text-decoration: none; background: var(--bondo-green); color: #fff; padding: 12px 30px; border-radius: 50px; display: inline-flex; align-items: center; gap: 10px; font-weight: 700; transition: all 0.3s; box-shadow: 0 4px 15px rgba(26,109,58,0.3); border: none;">
        <i class="bi bi-collection" style="font-size: 1.2rem;"></i> 
        <span>Lihat Semua Koleksi</span>
      </a>
    </div>
  </div>
</section>

<!-- ========= ULASAN PENGUNJUNG ========= -->
<section id="ulasan" class="section-padding">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>Ulasan Pengunjung</h2>
      <p>Apa kata mereka tentang layanan Perpustakaan Bondowoso</p>
      <div class="line"></div>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="ulasan-card">
          <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
          <blockquote>"Koleksi bukunya sangat lengkap, terutama buku sejarah dan literatur lokal. Tempatnya nyaman, pas buat nugas seharian."</blockquote>
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=100&q=80" class="avatar" alt="">
          <p class="name">Siti Nurhaliza</p>
          <p class="role">Mahasiswi Universitas Jember</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="ulasan-card">
          <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
          <blockquote>"Anak saya selalu senang diajak ke Perpusda Bondowoso. Area anak-anak sangat interaktif dan koleksi buku ceritanya update terus."</blockquote>
          <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?auto=format&fit=crop&w=100&q=80" class="avatar" alt="">
          <p class="name">Budi Santoso</p>
          <p class="role">Wiraswasta / Orang Tua</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="ulasan-card">
          <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></div>
          <blockquote>"Sangat membantu untuk mencari referensi jurnal. Internet gratis dan komputer E-Library berjalan lancar dan cepat."</blockquote>
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&q=80" class="avatar" alt="">
          <p class="name">Ahmad Fauzi</p>
          <p class="role">Peneliti Independen</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========= CTA ========= -->
<section class="cta-section">
  <div class="container" data-aos="fade-up">
    <h3>Bergabunglah Bersama Kami</h3>
    <p>Daftar menjadi anggota perpustakaan sekarang — gratis dan mudah!</p>
    <a href="{{ route('register') }}" class="btn-hero-primary">
      <i class="bi bi-person-plus" style="font-size: 1.2rem;"></i> 
      <span>Daftar Anggota Sekarang</span>
    </a>
  </div>
</section>

<!-- Vendor JS Files -->
<script src="{{ asset('p/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('p/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('p/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('p/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('p/assets/js/main.js') }}"></script>
<script>
  // Fallback AOS init
  document.addEventListener('DOMContentLoaded', function() {
    if (typeof AOS !== 'undefined') {
      AOS.init({ duration: 600, once: true });
    }
  });
</script>

@endsection
