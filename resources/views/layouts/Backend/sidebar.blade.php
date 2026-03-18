<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="/admin">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">KELOLA PERPUSTAKAAN</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#buku-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-book"></i><span>Kelola Buku</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="buku-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('admin.books.index') }}">
              <i class="bi bi-circle"></i><span>Semua Buku</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.categories.index') }}">
              <i class="bi bi-circle"></i><span>Kategori Buku</span>
            </a>
          </li>
        </ul>
      </li><!-- End Buku Nav -->

      @if(auth()->user()->isSuperAdmin())
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#anggota-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Anggota</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="anggota-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('admin.users.index') }}">
              <i class="bi bi-circle"></i><span>Daftar Anggota</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.users.create') }}">
              <i class="bi bi-circle"></i><span>Tambah Anggota</span>
            </a>
          </li>
        </ul>
      </li><!-- End Anggota Nav -->
      @endif

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#transaksi-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-arrow-left-right"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="transaksi-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Peminjaman</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Pengembalian</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Denda</span>
            </a>
          </li>
        </ul>
      </li><!-- End Transaksi Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-calendar-check"></i>
          <span>Kunjungan</span>
        </a>
      </li>

      <li class="nav-heading">LAPORAN</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-bar-chart"></i>
          <span>Statistik</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-file-earmark-text"></i>
          <span>Laporan Bulanan</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-printer"></i>
          <span>Cetak Laporan</span>
        </a>
      </li>

      <li class="nav-heading">PENGATURAN</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-person"></i>
          <span>Profil Admin</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-gear"></i>
          <span>Pengaturan Umum</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/">
          <i class="bi bi-globe"></i>
          <span>Lihat Website</span>
        </a>
      </li>

    </ul>

  </aside>
