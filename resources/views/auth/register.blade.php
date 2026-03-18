<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Daftar Anggota - Perpustakaan Daerah Bondowoso</title>

  <!-- Favicons -->
  <link href="p/assets/img/favicon.png" rel="icon">
  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="p/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="p/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --primary: #1a6d3a;
      --primary-dark: #0a3c1e;
      --gold: #d4a017;
      --text-main: #1e293b;
      --text-muted: #64748b;
      --soft-bg: #f8fafc;
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #ffffff;
      color: var(--text-main);
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    .login-container {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 3rem 2rem;
    }

    .login-card {
      width: 100%;
      max-width: 550px;
      background: #ffffff;
      border-radius: 24px;
      padding: 3rem;
      box-shadow: 0 10px 40px rgba(0,0,0,0.04), 0 0 1px rgba(0,0,0,0.1);
    }

    .brand-logo {
      display: flex;
      align-items: center;
      gap: 12px;
      text-decoration: none;
      margin-bottom: 2rem;
      justify-content: center;
    }

    .brand-logo .logo-icon {
      width: 40px;
      height: 40px;
      background: var(--primary);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 1.2rem;
    }

    .brand-name {
      color: var(--primary);
      font-weight: 800;
      font-size: 1.2rem;
      margin: 0;
    }

    .login-title {
      font-size: 1.75rem;
      font-weight: 800;
      color: var(--text-main);
      margin-bottom: 0.5rem;
      text-align: center;
    }

    .login-subtitle {
      color: var(--text-muted);
      text-align: center;
      margin-bottom: 2.5rem;
      font-size: 0.95rem;
    }

    .form-label {
      font-weight: 600;
      color: var(--text-main);
      margin-bottom: 0.6rem;
      font-size: 0.9rem;
    }

    .form-control {
      border: 1.5px solid #e2e8f0;
      border-radius: 12px;
      padding: 12px 16px;
      height: auto;
      font-size: 0.95rem;
      transition: all 0.2s;
    }

    .form-control:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 4px rgba(26, 109, 58, 0.1);
      outline: none;
    }

    .btn-login {
      background: var(--primary);
      border: none;
      color: white;
      padding: 14px;
      border-radius: 12px;
      font-weight: 700;
      width: 100%;
      margin-top: 1rem;
      transition: all 0.2s;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }

    .btn-login:hover {
      background: var(--primary-dark);
      transform: translateY(-1px);
      box-shadow: 0 4px 12px rgba(26, 109, 58, 0.2);
    }

    .input-icon-group {
      position: relative;
    }

    .input-icon-group .icon {
      position: absolute;
      left: 16px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--text-muted);
      font-size: 1.1rem;
    }

    .input-icon-group .form-control {
      padding-left: 48px;
    }

    .register-footer {
      text-align: center;
      margin-top: 2rem;
      font-size: 0.9rem;
      color: var(--text-muted);
    }

    .register-footer a {
      color: var(--primary);
      text-decoration: none;
      font-weight: 700;
    }

    .back-to-web {
      position: fixed;
      top: 2rem;
      left: 2rem;
      text-decoration: none;
      color: var(--text-muted);
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 0.9rem;
      transition: all 0.2s;
    }

    .back-to-web:hover {
      color: var(--primary);
    }

    /* Floating illustration elements */
    .blob {
      position: absolute;
      z-index: -1;
      filter: blur(60px);
      opacity: 0.4;
    }

    .blob-1 {
      top: -10%;
      right: -5%;
      width: 400px;
      height: 400px;
      background: #e8f5ec;
      border-radius: 50%;
    }

    .blob-2 {
      bottom: -10%;
      left: -5%;
      width: 350px;
      height: 350px;
      background: #fdf6e3;
      border-radius: 50%;
    }

    .term-box {
      background: var(--soft-bg);
      padding: 1rem;
      border-radius: 12px;
      font-size: 0.82rem;
      color: var(--text-muted);
      line-height: 1.6;
    }
  </style>
</head>

<body>
  <a href="/" class="back-to-web">
    <i class="bi bi-arrow-left"></i> Kembali ke Beranda
  </a>

  <div class="blob blob-1"></div>
  <div class="blob blob-2"></div>

  <div class="login-container">
    <div class="login-card">
      <div class="brand-logo">
        <div class="logo-icon">
          <i class="bi bi-book-half"></i>
        </div>
        <h1 class="brand-name">Perpusda Bondowoso</h1>
      </div>

      <h2 class="login-title">Daftar Anggota</h2>
      <p class="login-subtitle">Bergabung bersama ribuan pembaca lainnya</p>

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="row">
          <!-- Nama -->
          <div class="col-md-12 mb-4">
            <label for="name" class="form-label">Nama Lengkap (Sesuai ID)</label>
            <div class="input-icon-group">
              <span class="icon"><i class="bi bi-person"></i></span>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus placeholder="Masukkan nama lengkap">
            </div>
            @error('name')
                <div class="text-danger mt-1 small fw-medium" style="font-size: 0.8rem;">{{ $message }}</div>
            @enderror
          </div>

          <!-- Email -->
          <div class="col-md-12 mb-4">
            <label for="email" class="form-label">Alamat Email</label>
            <div class="input-icon-group">
              <span class="icon"><i class="bi bi-envelope"></i></span>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="nama@email.com">
            </div>
            @error('email')
                <div class="text-danger mt-1 small fw-medium" style="font-size: 0.8rem;">{{ $message }}</div>
            @enderror
          </div>

          <!-- Password -->
          <div class="col-md-6 mb-4">
            <label for="password" class="form-label">Kata Sandi</label>
            <div class="input-icon-group">
              <span class="icon"><i class="bi bi-shield-lock"></i></span>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Buat sandi">
            </div>
            @error('password')
                <div class="text-danger mt-1 small fw-medium" style="font-size: 0.8rem;">{{ $message }}</div>
            @enderror
          </div>

          <!-- Confirm Password -->
          <div class="col-md-6 mb-4">
            <label for="password_confirmation" class="form-label">Konfirmasi</label>
            <div class="input-icon-group">
              <span class="icon"><i class="bi bi-check2-circle"></i></span>
              <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required placeholder="Ulangi sandi">
            </div>
          </div>
        </div>

        <div class="term-box mb-4">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="terms" required checked>
            <label class="form-check-label" for="terms">
              Saya setuju dengan <a href="#" class="text-primary fw-bold text-decoration-none">Syarat & Ketentuan</a> yang berlaku di Perpustakaan Bondowoso.
            </label>
          </div>
        </div>

        <button type="submit" class="btn-login">
          Daftar Sekarang <i class="bi bi-person-plus-fill" style="font-size: 1.1rem;"></i>
        </button>
      </form>

      <div class="register-footer">
        Sudah menjadi anggota? <a href="{{ route('login') }}">Login di Sini</a>
      </div>
    </div>
  </div>

  <script src="p/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
