<footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="/" class="logo d-flex align-items-center">
            <span class="sitename">Perpusda Bondowoso</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jalan Jend. A. Yani No. 31</p>
            <p>Mandalem, Kec. Bondowoso, Kabupaten Bondowoso</p>
            <p>Jawa Timur 68211</p>
            <p class="mt-3"><strong>Telepon:</strong> <span>(0332) 421251</span></p>
            <p><strong>Email:</strong> <span>perpustakaan@bondowosokab.go.id</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Tautan Pintas</h4>
          <ul>
            <li><a href="/#hero">Beranda</a></li>
            <li><a href="/#jadwal">Jadwal Jam Buka</a></li>
            <li><a href="/#buku">Rekomendasi Buku</a></li>
            <li><a href="/#berita">Berita Terbaru</a></li>
            <li><a href="#">Syarat & Ketentuan</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Layanan Kami</h4>
          <ul>
            <li><a href="#">Pendaftaran Anggota</a></li>
            <li><a href="#">Katalog Online (OPAC)</a></li>
            <li><a href="#">Pojok Baca Digital</a></li>
            <li><a href="#">Sirkulasi & Peminjaman</a></li>
            <li><a href="#">Ruang Diskusi Umum</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Kritik & Saran</h4>
          <p>Tinggalkan pesan atau alamat email Anda jika ada yang perlu diperbaiki dari layanan kami.</p>
          <form action="#" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email" placeholder="Masukkan Email Anda"><input type="submit" value="Kirim"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Terima kasih atas masukannya!</div>
          </form>
        </div>

      </div>
    </div>

    <!-- Rating Pengunjung Footer -->
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <div class="p-4 rounded-4 shadow-sm bg-white" style="border-top: 4px solid #1a6d3a;">
            <h5 class="fw-bold mb-2">Seberapa puas Anda dengan website kami?</h5>
            <p class="text-muted small mb-3">Berikan penilaian Anda untuk membantu kami meningkatkan layanan</p>
            
            <div class="rating-stars d-flex justify-content-center mb-3 fs-2" style="cursor: pointer; color: #d1d5db;">
              <i class="bi bi-star-fill mx-1 star-btn" data-rating="1" onmouseover="hoverStar(1)" onmouseout="resetStar()" onclick="selectRating(1)"></i>
              <i class="bi bi-star-fill mx-1 star-btn" data-rating="2" onmouseover="hoverStar(2)" onmouseout="resetStar()" onclick="selectRating(2)"></i>
              <i class="bi bi-star-fill mx-1 star-btn" data-rating="3" onmouseover="hoverStar(3)" onmouseout="resetStar()" onclick="selectRating(3)"></i>
              <i class="bi bi-star-fill mx-1 star-btn" data-rating="4" onmouseover="hoverStar(4)" onmouseout="resetStar()" onclick="selectRating(4)"></i>
              <i class="bi bi-star-fill mx-1 star-btn" data-rating="5" onmouseover="hoverStar(5)" onmouseout="resetStar()" onclick="selectRating(5)"></i>
            </div>
            
            <!-- Comment Section (Hidden by default) -->
            <div id="comment-section" class="d-none mt-3">
              <textarea id="rating-comment" class="form-control rounded-3 mb-3 border-info shadow-sm" rows="3" placeholder="Mohon bagikan pengalaman atau masukan tambahan Anda di sini..."></textarea>
              <button onclick="submitRatingWithComment()" class="btn btn-primary rounded-pill px-4 fw-bold shadow-sm">
                Kirim Penilaian <i class="bi bi-send ms-1"></i>
              </button>
            </div>

            <!-- Feedback Message -->
            <div id="rating-feedback" class="fw-bold text-success d-none mt-3 p-3 bg-success bg-opacity-10 rounded-3 border border-success border-opacity-25">
              <i class="bi bi-check-circle-fill me-1 fs-5 align-middle"></i> 
              <span class="align-middle">Terima kasih atas penilaian dan masukan Anda yang sangat berharga!</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      let currentRating = 0;
      let hasRated = false;
      let hasSubmitted = false;

      function hoverStar(rating) {
        if (hasSubmitted) return;
        let stars = document.querySelectorAll('.star-btn');
        stars.forEach((star, index) => {
          if (index < rating) {
            star.style.color = '#ffc107'; // Yellow hover
          } else {
            star.style.color = '#d1d5db'; // Gray
          }
        });
      }

      function resetStar() {
        if (hasSubmitted) return;
        let stars = document.querySelectorAll('.star-btn');
        stars.forEach((star, index) => {
          if (index < currentRating) {
            star.style.color = '#ffc107'; // Active yellow
          } else {
            star.style.color = '#d1d5db'; // Inactive gray
          }
        });
      }

      function selectRating(rating) {
        if (hasSubmitted) return;
        currentRating = rating;
        hasRated = true;
        resetStar(); // Set permanent color
        
        // Show comment box
        document.getElementById('comment-section').classList.remove('d-none');
        document.getElementById('comment-section').classList.add('animate__animated', 'animate__fadeIn');
      }

      function submitRatingWithComment() {
        if (!hasRated || hasSubmitted) return;
        hasSubmitted = true;
        
        let comment = document.getElementById('rating-comment').value;

        // Add heartBeat animation to selected stars
        let stars = document.querySelectorAll('.star-btn');
        stars.forEach((star, index) => {
          if (index < currentRating) {
            star.classList.add('animate__animated', 'animate__heartBeat');
          }
        });

        // Hide comment section and show feedback
        document.getElementById('comment-section').classList.add('d-none');
        document.getElementById('rating-feedback').classList.remove('d-none');
        document.getElementById('rating-feedback').classList.add('animate__animated', 'animate__fadeInUp');
        
        // In a real app, logic to send data to server
        console.log("Submitted Rating: " + currentRating + " stars");
        console.log("Submitted Comment: " + comment);
      }
    </script>

    <div class="container copyright text-center mt-5">
      <p>© <span>Hak Cipta</span> <strong class="px-1 sitename">Perpusda Kabupaten Bondowoso</strong><span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Dirancang oleh <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>
