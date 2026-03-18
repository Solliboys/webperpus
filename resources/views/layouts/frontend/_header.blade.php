<header id="header" class="header d-flex align-items-center fixed-top" style="background-color: #055223ff; box-shadow: 0 2px 15px rgba(0,0,0,0.2); padding: 12px 0;">
    <div class="container-fluid px-4 px-md-5 position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center" style="text-decoration: none;">
        <h1 class="sitename" style="color: #f5d060; font-weight: 800; margin: 0; font-size: 22px;">Perpusda Bondowoso</h1>
      </a>

      <nav id="navmenu" class="navmenu mx-auto">
        <ul style="display: flex; list-style: none; margin: 0; padding: 0; gap: 8px;">
          <li><a href="/#hero" class="active" style="color: rgba(255,255,255,0.9); text-decoration: none; padding: 8px 14px; border-radius: 6px; font-weight: 500; font-size: 14px; transition: all 0.3s;">Beranda</a></li>
          <li><a href="/#tentang" style="color: rgba(255, 255, 255, 0.75); text-decoration: none; padding: 8px 14px; border-radius: 6px; font-weight: 500; font-size: 14px; transition: all 0.3s;">Tentang Kami</a></li>
          <li><a href="/#jadwal" style="color: rgba(255,255,255,0.75); text-decoration: none; padding: 8px 14px; border-radius: 6px; font-weight: 500; font-size: 14px; transition: all 0.3s;">Jadwal</a></li>
          <li><a href="/#berita" style="color: rgba(255,255,255,0.75); text-decoration: none; padding: 8px 14px; border-radius: 6px; font-weight: 500; font-size: 14px; transition: all 0.3s;">Berita</a></li>
          <li><a href="/#buku" style="color: rgba(255,255,255,0.75); text-decoration: none; padding: 8px 14px; border-radius: 6px; font-weight: 500; font-size: 14px; transition: all 0.3s;">Koleksi Buku</a></li>
          <li class="dropdown"><a href="#" style="color: rgba(255,255,255,0.75); text-decoration: none; padding: 8px 14px; border-radius: 6px; font-weight: 500; font-size: 14px; transition: all 0.3s;"><span>Layanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Keanggotaan</a></li>
              <li><a href="#">Peminjaman</a></li>
              <li><a href="#">E-Library</a></li>
              <li><a href="#">Fasilitas</a></li>
            </ul>
          </li>
          <li><a href="#footer" style="color: rgba(255,255,255,0.75); text-decoration: none; padding: 8px 14px; border-radius: 6px; font-weight: 500; font-size: 14px; transition: all 0.3s;">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      @auth
        <a class="btn-getstarted" href="{{ route('admin.dashboard') }}" style="margin-left: 20px; background-color: #d4a017; color: #fff; border: none; padding: 10px 24px; border-radius: 50px; font-weight: 700; font-size: 14px; text-decoration: none; box-shadow: 0 4px 10px rgba(212,160,23,0.3); transition: all 0.3s;">Dashboard</a>
      @else
        <a class="btn-getstarted" href="{{ route('login') }}" style="margin-left: 20px; background-color: #d4a017; color: #fff; border: none; padding: 10px 24px; border-radius: 50px; font-weight: 700; font-size: 14px; text-decoration: none; box-shadow: 0 4px 10px rgba(212,160,23,0.3); transition: all 0.3s;">Login</a>
      @endauth

    </div>
  </header>
