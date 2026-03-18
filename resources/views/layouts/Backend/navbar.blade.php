<header id="header" class="header fixed-top d-flex align-items-center" style="background: #0a3c1e; border-bottom: 3px solid #d4a017;">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/admin" class="logo d-flex align-items-center">
        <i class="bi bi-book-half" style="font-size: 1.5rem; color: #d4a017; margin-right: 8px;"></i>
        <span class="d-none d-lg-block" style="color: #fff; font-weight: 800;">Perpusda Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn" style="color: #fff;"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Cari buku, anggota..." title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search" style="color: #fff;"></i>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell" style="color: #fff;"></i>
            <span class="badge badge-number" style="background: #d4a017;">3</span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              Ada 3 notifikasi baru
              <a href="#"><span class="badge rounded-pill p-2 ms-2" style="background: #1a6d3a; color: #fff;">Lihat semua</span></a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="notification-item">
              <i class="bi bi-book text-success"></i>
              <div>
                <h4>Buku Dikembalikan</h4>
                <p>"Bumi Manusia" dikembalikan oleh Siti Nurhaliza</p>
                <p>15 menit lalu</p>
              </div>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="notification-item">
              <i class="bi bi-person-plus text-warning"></i>
              <div>
                <h4>Anggota Baru</h4>
                <p>Ahmad Fauzi mendaftar sebagai anggota baru</p>
                <p>1 jam lalu</p>
              </div>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-danger"></i>
              <div>
                <h4>Keterlambatan</h4>
                <p>3 buku belum dikembalikan melebihi batas</p>
                <p>2 jam lalu</p>
              </div>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="dropdown-footer">
              <a href="#">Tampilkan semua notifikasi</a>
            </li>
          </ul>
        </li>

        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px; background: #d4a017; color: #fff; font-weight: 800;">{{ substr(auth()->user()->name, 0, 1) }}</div>
            <span class="d-none d-md-block dropdown-toggle ps-2" style="color: #fff;">{{ auth()->user()->name }}</span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ auth()->user()->name }}</h6>
              <span>{{ ucfirst(str_replace('_', ' ', auth()->user()->role)) }}</span>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-person"></i>
                <span>Profil Saya</span>
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-gear"></i>
                <span>Pengaturan</span>
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="/">
                <i class="bi bi-globe"></i>
                <span>Lihat Website</span>
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="dropdown-item d-flex align-items-center">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Keluar</span>
                </button>
              </form>
            </li>
          </ul>
        </li>

      </ul>
    </nav>

  </header>
