@extends('layouts.Backend.main')


@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard Perpustakaan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Total Buku Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Total Buku <span>| Koleksi</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-book"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ number_format($bookCount) }}</h6>
                      <span class="text-success small pt-1 fw-bold">+52</span> <span class="text-muted small pt-2 ps-1">bulan ini</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Total Buku Card -->

            <!-- Anggota Aktif Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Anggota Aktif <span>| Total</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ number_format($userCount) }}</h6>
                      <span class="text-success small pt-1 fw-bold">+12</span> <span class="text-muted small pt-2 ps-1">anggota baru</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Anggota Aktif Card -->

            <!-- Peminjaman Card -->
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Peminjaman <span>| Bulan Ini</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-arrow-left-right"></i>
                    </div>
                    <div class="ps-3">
                      <h6>367</h6>
                      <span class="text-danger small pt-1 fw-bold">5</span> <span class="text-muted small pt-2 ps-1">terlambat</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Peminjaman Card -->

            <!-- Grafik Kunjungan -->
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Statistik Kunjungan <span>/ Bulan Ini</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Pengunjung',
                          data: [45, 52, 38, 65, 73, 48, 91],
                        }, {
                          name: 'Peminjaman',
                          data: [12, 18, 22, 15, 28, 19, 35]
                        }, {
                          name: 'Pengembalian',
                          data: [10, 15, 20, 14, 25, 17, 30]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#1a6d3a', '#d4a017', '#64748b'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          categories: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']
                        },
                        tooltip: {
                          y: {
                            formatter: function(val) {
                              return val + " orang"
                            }
                          }
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>
              </div>
            </div><!-- End Grafik Kunjungan -->

            <!-- Peminjaman Terbaru -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Peminjaman Terbaru <span>| Hari Ini</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Peminjam</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#P001</a></th>
                        <td>Siti Nurhaliza</td>
                        <td><a href="#" class="fw-bold">Bumi Manusia</a></td>
                        <td>16 Mar 2026</td>
                        <td><span class="badge" style="background: #1a6d3a;">Dipinjam</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#P002</a></th>
                        <td>Budi Santoso</td>
                        <td><a href="#" class="fw-bold">Filosofi Teras</a></td>
                        <td>15 Mar 2026</td>
                        <td><span class="badge" style="background: #1a6d3a;">Dipinjam</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#P003</a></th>
                        <td>Ahmad Fauzi</td>
                        <td><a href="#" class="fw-bold">Sapiens</a></td>
                        <td>14 Mar 2026</td>
                        <td><span class="badge bg-success">Dikembalikan</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#P004</a></th>
                        <td>Dewi Lestari</td>
                        <td><a href="#" class="fw-bold">Laskar Pelangi</a></td>
                        <td>13 Mar 2026</td>
                        <td><span class="badge bg-danger">Terlambat</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#P005</a></th>
                        <td>Rina Agustina</td>
                        <td><a href="#" class="fw-bold">Perahu Kertas</a></td>
                        <td>12 Mar 2026</td>
                        <td><span class="badge bg-success">Dikembalikan</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div><!-- End Peminjaman Terbaru -->

            <!-- Buku Terpopuler -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">
                <div class="card-body pb-0">
                  <h5 class="card-title">Buku Terpopuler <span>| Bulan Ini</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Dipinjam</th>
                        <th scope="col">Stok</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td><a href="#" class="fw-bold">Bumi Manusia</a></td>
                        <td>Fiksi</td>
                        <td class="fw-bold">48x</td>
                        <td><span class="badge bg-success">Tersedia</span></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td><a href="#" class="fw-bold">Filosofi Teras</a></td>
                        <td>Non-Fiksi</td>
                        <td class="fw-bold">42x</td>
                        <td><span class="badge bg-warning text-dark">Sisa 2</span></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">3</td>
                        <td><a href="#" class="fw-bold">Laskar Pelangi</a></td>
                        <td>Fiksi</td>
                        <td class="fw-bold">37x</td>
                        <td><span class="badge bg-success">Tersedia</span></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">4</td>
                        <td><a href="#" class="fw-bold">Sapiens</a></td>
                        <td>Sejarah</td>
                        <td class="fw-bold">31x</td>
                        <td><span class="badge bg-danger">Habis</span></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">5</td>
                        <td><a href="#" class="fw-bold">Atomic Habits</a></td>
                        <td>Non-Fiksi</td>
                        <td class="fw-bold">28x</td>
                        <td><span class="badge bg-success">Tersedia</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div><!-- End Buku Terpopuler -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Aktivitas Terbaru -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Aktivitas Terbaru <span>| Hari Ini</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">10 mnt</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">Siti Nurhaliza</a> meminjam "Bumi Manusia"
                  </div>
                </div>

                <div class="activity-item d-flex">
                  <div class="activite-label">30 mnt</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">Ahmad Fauzi</a> mengembalikan "Sapiens"
                  </div>
                </div>

                <div class="activity-item d-flex">
                  <div class="activite-label">1 jam</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">Budi Santoso</a> mendaftar anggota baru
                  </div>
                </div>

                <div class="activity-item d-flex">
                  <div class="activite-label">2 jam</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Batas peminjaman <a href="#" class="fw-bold text-dark">Dewi Lestari</a> telah terlewati
                  </div>
                </div>

                <div class="activity-item d-flex">
                  <div class="activite-label">3 jam</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    52 buku baru ditambahkan ke kategori <a href="#" class="fw-bold text-dark">Referensi</a>
                  </div>
                </div>

                <div class="activity-item d-flex">
                  <div class="activite-label">5 jam</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    Laporan kunjungan bulan Februari berhasil dicetak
                  </div>
                </div>

              </div>

            </div>
          </div><!-- End Aktivitas Terbaru -->

          <!-- Kategori Buku -->
          <div class="card">
            <div class="card-body pb-0">
              <h5 class="card-title">Kategori Buku <span>| Distribusi</span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    color: ['#1a6d3a', '#d4a017', '#16a34a', '#64748b', '#f59e0b'],
                    series: [{
                      name: 'Koleksi Buku',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 3520,
                          name: 'Fiksi'
                        },
                        {
                          value: 2480,
                          name: 'Non-Fiksi'
                        },
                        {
                          value: 1830,
                          name: 'Referensi'
                        },
                        {
                          value: 1250,
                          name: 'Jurnal'
                        },
                        {
                          value: 1168,
                          name: 'Lainnya'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Kategori Buku -->

          <!-- Ringkasan Cepat -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ringkasan <span>| Hari Ini</span></h5>

              <div class="d-flex align-items-center mb-3 p-3 rounded-3" style="background: #e8f5ec;">
                <div class="rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 46px; height: 46px; background: #1a6d3a; color: #fff;">
                  <i class="bi bi-door-open"></i>
                </div>
                <div>
                  <h6 class="mb-0 fw-bold">Pengunjung Hari Ini</h6>
                  <small class="text-muted">127 orang</small>
                </div>
              </div>

              <div class="d-flex align-items-center mb-3 p-3 rounded-3" style="background: #fdf6e3;">
                <div class="rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 46px; height: 46px; background: #d4a017; color: #fff;">
                  <i class="bi bi-clock-history"></i>
                </div>
                <div>
                  <h6 class="mb-0 fw-bold">Buku Terlambat</h6>
                  <small class="text-muted">5 buku perlu ditindak</small>
                </div>
              </div>

              <div class="d-flex align-items-center p-3 rounded-3" style="background: #f1f5f9;">
                <div class="rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 46px; height: 46px; background: #64748b; color: #fff;">
                  <i class="bi bi-box-seam"></i>
                </div>
                <div>
                  <h6 class="mb-0 fw-bold">Buku Tersedia</h6>
                  <small class="text-muted">9,876 dari 10,248 bisa dipinjam</small>
                </div>
              </div>

            </div>
          </div><!-- End Ringkasan Cepat -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main>
@endsection
